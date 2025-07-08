@extends('frontend.master')

@section('content')

    <!-- Floating AI Button -->
    <button id="ai-button" style="
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: linear-gradient(135deg, #27467A, #FF9A1E);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        cursor: pointer;
        z-index: 99999;">
        🤖 AI
    </button>

    <!-- AI Popup Wrapper -->
    <div id="ai-popup-wrapper" style="
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999999;
        text-align: center;
    ">
        <!-- AI Circle Popup -->
        <div id="ai-popup" style="
            width: 260px;
            height: 260px;
            background: linear-gradient(135deg, #27467A, #FF9A1E);
            border-radius: 50%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            font-family: sans-serif;
            animation: popupFadeIn 0.3s ease;
            color: white;
            position: relative;
            margin: auto;
        ">
            <!-- Sound Wave Background -->
            <div class="sound-wave"></div>

            <!-- Mic Icon + Status -->
            <div style="font-size: 48px; margin-top: 30px; z-index: 1;">🎤</div>
            <p id="status" style="font-size: 14px; margin-top: 10px; color: #fff; z-index: 1;">Listening...</p>
        </div>

        <!-- Close Button Below Popup -->
        <button id="close-ai" style="
            margin-top: 12px;
            background: rgba(255,255,255,0.2);
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 6px 16px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            backdrop-filter: blur(5px);
        ">× Close</button>
    </div>

    <!-- Styles -->
    <style>
        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: scale(0.8) translate(-50%, -50%);
            }

            to {
                opacity: 1;
                transform: scale(1) translate(-50%, -50%);
            }
        }

        .sound-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 20%, transparent 80%);
            animation: wave 2s infinite ease-in-out;
            z-index: 0;
        }

        @keyframes wave {
            0% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.3;
            }

            100% {
                transform: scale(1);
                opacity: 0.6;
            }
        }
    </style>

    <!-- JavaScript -->
    <script>
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

        if (!SpeechRecognition) {
            alert("Speech Recognition is not supported in this browser.");
        } else {
            const aiButton = document.getElementById("ai-button");
            const aiPopupWrapper = document.getElementById("ai-popup-wrapper");
            const statusText = document.getElementById("status");
            const closeButton = document.getElementById("close-ai");

            let recognition;

            function speak(text) {
                const synth = window.speechSynthesis;
                const utter = new SpeechSynthesisUtterance(text);
                const voices = synth.getVoices();
                const enVoice = voices.find(v => v.lang.includes("en") && v.name.toLowerCase().includes("google"));
                if (enVoice) {
                    utter.voice = enVoice;
                }
                synth.speak(utter);
            }

            function startListening() {
                if (recognition) {
                    try {
                        recognition.abort(); // stop previous if still running
                    } catch (e) { }
                }

                recognition = new SpeechRecognition();
                recognition.lang = 'en-US';
                recognition.interimResults = false;
                recognition.continuous = false;

                statusText.textContent = "🎧 Listening...";

                recognition.onresult = (event) => {
                    const command = event.results[0][0].transcript.toLowerCase().trim();
                    console.log("Command:", command);

                    const commandToRoute = {
                        "home": "/",
                        "about": "/about",
                        "contact": "/contact",
                        "services": "/services",
                        "admissions": "/admissions",
                        "news": "/news",
                        "departments": "/departments",
                        "research": "/research",
                        "faculty": "/faculty"
                    };

                    let matched = false;
                    for (const keyword in commandToRoute) {
                        if (command.includes(keyword)) {
                            statusText.textContent = `✅ Opening ${keyword} page...`;
                            window.location.href = commandToRoute[keyword];
                            matched = true;
                            break;
                        }
                    }

                    if (!matched) {
                        speak("I didn’t understand. Try again.");
                        statusText.textContent = "❓ Unrecognized command.";
                    }
                };

                recognition.onerror = (e) => {
                    console.error("Recognition error:", e);
                    statusText.textContent = "⚠️ Error: " + e.error;
                    speak("Click and tell me the page name.");
                };

                recognition.onend = () => {
                    console.log("Recognition ended.");
                };

                try {
                    recognition.start();
                } catch (err) {
                    console.error("Recognition start error:", err);
                }
            }

            aiButton.addEventListener("click", () => {
                aiPopupWrapper.style.display = "block";
                speak("How can I help you?");
                startListening();
            });

            closeButton.addEventListener("click", () => {
                aiPopupWrapper.style.display = "none";
                if (recognition) recognition.abort();
                statusText.textContent = "🎤 Tap AI again to speak";
            });

            // Load voices on page load
            speechSynthesis.onvoiceschanged = () => {
                speechSynthesis.getVoices();
            };
        }
    </script>

@endsection

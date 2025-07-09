@extends('frontend.master')

@section('content')

    <!-- AI Assistant Button -->
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

    <!-- AI Assistant Popup -->
    <div id="ai-popup-wrapper"
        style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); z-index:999999; text-align:center;">
        <div id="ai-popup" style="
            width:260px;
            height:260px;
            background:linear-gradient(135deg,#27467A,#FF9A1E);
            border-radius:50%;
            box-shadow:0 20px 40px rgba(0,0,0,0.25);
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            overflow:hidden;
            font-family:sans-serif;
            animation:popupFadeIn 0.3s ease;
            color:white;
            position:relative;">
            <div class="sound-wave"></div>
            <div style="font-size:48px; z-index:1;">🎤</div>
            <p id="status" style="font-size:14px; margin-top:10px; color:#fff; z-index:1;">Listening...</p>
        </div>

        <!-- Close Button -->
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

            const routes = {
                "home": "/",
                "about": "/about",
                "contact": "/contact",
                "library": "/library-Resources",
                "facilities": "/facilities",
                "award": "/award",
                "salon": "/salon",
                "student lounge": "/facilities-student-lounge",
                "museum": "/facilities-museum",
                "laboratories": "/laboratories"
                // 🔁 Add more route mappings here as needed
            };

            function speak(text) {
                const synth = window.speechSynthesis;
                const utter = new SpeechSynthesisUtterance(text);
                utter.lang = "en-US";
                synth.speak(utter);
            }

            function normalizeCommand(command) {
                return command
                    .toLowerCase()
                    .replace(/^(go to|open|navigate to|show me|take me to)\s+/i, "")
                    .replace(/&/g, "and")
                    .replace(/\s{2,}/g, " ")
                    .trim();
            }

            function startListening() {
                recognition = new SpeechRecognition();
                recognition.lang = 'en-US';
                recognition.interimResults = false;
                recognition.continuous = false;

                statusText.textContent = "🎧 Listening...";

                recognition.onresult = (event) => {
                    const rawCommand = event.results[0][0].transcript;
                    const command = normalizeCommand(rawCommand);
                    console.log("Command:", command);

                    for (const key in routes) {
                        if (command.includes(key)) {
                            statusText.textContent = `✅ Opening ${key} page...`;
                            window.location.href = routes[key];
                            return;
                        }
                    }

                    speak("I didn’t understand that. Please try again.");
                    statusText.textContent = "❓ Unrecognized command.";
                };

                recognition.onerror = (e) => {
                    console.error("Mic error:", e);
                    if (e.error === "not-allowed") {
                        statusText.textContent = "🚫 Mic blocked. Please allow access.";
                        speak("Please allow microphone access.");
                    } else {
                        statusText.textContent = "⚠️ Error: " + e.error;
                    }
                };

                recognition.onend = () => {
                    statusText.textContent = "🎤 Tap AI again to retry.";
                };

                try {
                    recognition.start();
                } catch (err) {
                    console.error("Error starting recognition:", err);
                    statusText.textContent = "❌ Failed to start mic";
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
            });

            speechSynthesis.onvoiceschanged = () => {
                speechSynthesis.getVoices();
            };
        }
    </script>

@endsection

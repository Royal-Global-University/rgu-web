@extends('frontend.master')

@section('content')

    <!-- AI Button -->
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

    <!-- AI Popup -->
    <div id="ai-popup-wrapper" style="
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999999;
        text-align: center;
    ">
        <div id="ai-popup" style="
            width: 260px;
            height: 260px;
            background: linear-gradient(135deg, #27467A, #FF9A1E);
            border-radius: 50%;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: sans-serif;
            color: white;
            position: relative;
        ">
            <div class="sound-wave"></div>
            <div style="font-size: 48px; z-index: 1;">🎤</div>
            <p id="status" style="font-size: 14px; margin-top: 10px; z-index: 1;">Listening...</p>
        </div>
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

    <!-- Style -->
    <style>
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

    <!-- JS -->
    <script>
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

        if (!SpeechRecognition) {
            alert("Speech Recognition not supported.");
        } else {
            const aiBtn = document.getElementById("ai-button");
            const aiPopup = document.getElementById("ai-popup-wrapper");
            const statusText = document.getElementById("status");
            const closeBtn = document.getElementById("close-ai");

            let recognition;
            let voices = [];

            window.speechSynthesis.onvoiceschanged = () => {
                voices = speechSynthesis.getVoices();
            };

            function speak(text) {
                const utter = new SpeechSynthesisUtterance(text);
                utter.voice = voices.find(v => v.lang.includes("en")) || null;
                speechSynthesis.speak(utter);
            }

            const routeMap = new Map([
                ["home", "/"],
                ["library", "/library-resources"],
                ["leadership", "/leadership"],
                ["contact", "/contact"],
                ["vision", "/vision-mission"],
                ["medical", "/medical-facility"],
                ["auditorium", "/facilities-auditorium"],
                ["transport", "/facilities-transportation"],
                ["classroom", "/facilities-classroom"],
                ["faculty", "/faculty"],
                // ➕ Add more here as needed
            ]);

            function normalizeCommand(cmd) {
                return cmd.toLowerCase().replace(/(go to|open|take me to|navigate to)/gi, "").trim();
            }

            function startListening() {
                if (recognition) recognition.abort();

                recognition = new SpeechRecognition();
                recognition.lang = 'en-US';
                recognition.interimResults = false;
                recognition.continuous = false;

                statusText.textContent = "🎧 Listening...";

                recognition.onresult = (event) => {
                    let command = normalizeCommand(event.results[0][0].transcript);
                    console.log("🎙️ Command:", command);

                    for (let [keyword, url] of routeMap) {
                        if (command.includes(keyword)) {
                            speak("Opening " + keyword);
                            window.location.href = url;
                            return;
                        }
                    }

                    speak("I didn’t get that. Try again.");
                    statusText.textContent = "❓ Unrecognized command.";
                };

                recognition.onerror = (e) => {
                    console.error("❌ Mic Error:", e.error);
                    if (e.error === "not-allowed") {
                        speak("Microphone access is blocked. Please allow.");
                    }
                    statusText.textContent = "⚠️ Mic error: " + e.error;
                };

                recognition.onend = () => {
                    console.log("🔇 Recognition ended.");
                    statusText.textContent = "🎤 Tap AI again to retry.";
                };

                try {
                    recognition.start();
                } catch (err) {
                    console.error("Error starting recognition:", err);
                }
            }

            aiBtn.addEventListener("click", () => {
                aiPopup.style.display = "block";
                speak("How can I help you?");
                startListening();
            });

            closeBtn.addEventListener("click", () => {
                aiPopup.style.display = "none";
                if (recognition) recognition.abort();
            });
        }
    </script>

@endsection

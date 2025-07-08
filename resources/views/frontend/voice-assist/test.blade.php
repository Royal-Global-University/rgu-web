@extends('frontend.master')

@section('content')
    <div>
        <h1>Welcome to My Laravel Site</h1>
        <p>You can say "Hey RGU" or click the AI button to begin.</p>

        <!-- === AI Floating Button === -->
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
                z-index: 99999;
            ">
            🤖 AI
        </button>

        <!-- === AI Popup (Initially Hidden) === -->
        <div id="ai-popup" style="
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 260px;
                height: 260px;
                background: linear-gradient(135deg, #27467A, #FF9A1E);
                border-radius: 50%;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
                z-index: 999999;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                overflow: hidden;
                font-family: sans-serif;
            ">
            <!-- Sound Wave Animation -->
            <div class="sound-wave"></div>

            <!-- Close Button -->
            <button id="close-ai" style="
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    background: rgba(255,255,255,0.2);
                    color: white;
                    border: none;
                    border-radius: 50%;
                    width: 30px;
                    height: 30px;
                    font-size: 16px;
                    cursor: pointer;
                ">×</button>

            <!-- Mic + Status -->
            <div id="ai-inner" style="display: none; flex-direction: column; align-items: center; z-index: 1;">
                <div style="font-size: 48px; margin-top: 30px;">🎤</div>
                <p id="status" style="font-size: 14px; margin-top: 10px; color: white;">Listening...</p>
            </div>
        </div>

        <!-- === Style === -->
        <style>
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
        </style>

        <!-- === JavaScript === -->
        <script>
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert("Speech Recognition is not supported in this browser.");
            } else {
                const aiButton = document.getElementById("ai-button");
                const aiPopup = document.getElementById("ai-popup");
                const closeButton = document.getElementById("close-ai");
                const aiInner = document.getElementById("ai-inner");
                const statusText = document.getElementById("status");

                let recognition;
                let wakeWordListening = true;

                function speak(text) {
                    const synth = window.speechSynthesis;
                    const utter = new SpeechSynthesisUtterance(text);
                    const voices = synth.getVoices();
                    const enVoice = voices.find(v => v.lang.includes("en") && v.name.toLowerCase().includes("google"));
                    if (enVoice) utter.voice = enVoice;
                    synth.speak(utter);
                }

                function listenForWakeWord() {
                    const wake = new SpeechRecognition();
                    wake.lang = 'en-US';
                    wake.interimResults = false;
                    wake.continuous = true;

                    wake.onresult = (event) => {
                        const transcript = event.results[event.results.length - 1][0].transcript.toLowerCase().trim();
                        console.log("Wake word heard:", transcript);
                        if (transcript.includes("hey rgu")) {
                            wake.stop();
                            wakeWordListening = false;
                            openAIAssistant();
                        }
                    };

                    wake.onerror = (e) => {
                        console.error("Wake error:", e.error);
                        setTimeout(() => listenForWakeWord(), 1000);
                    };

                    wake.onend = () => {
                        if (wakeWordListening) listenForWakeWord();
                    };

                    wake.start();
                }

                function listenForCommand() {
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
                        wakeWordListening = true;
                        listenForWakeWord();
                    };

                    recognition.start();
                }

                function openAIAssistant() {
                    aiPopup.style.display = "flex";
                    aiInner.style.display = "flex";
                    speak("How can I help you?");
                    setTimeout(() => {
                        listenForCommand();
                    }, 1000);
                }

                aiButton.addEventListener("click", () => {
                    wakeWordListening = false;
                    openAIAssistant();
                });

                closeButton.addEventListener("click", () => {
                    aiPopup.style.display = "none";
                    aiInner.style.display = "none";
                    if (recognition) recognition.abort();
                    statusText.textContent = "🎤 Tap AI again to speak";
                    wakeWordListening = true;
                    listenForWakeWord();
                });

                speechSynthesis.onvoiceschanged = () => {
                    speechSynthesis.getVoices();
                };

                listenForWakeWord();
            }
        </script>
    </div>
@endsection

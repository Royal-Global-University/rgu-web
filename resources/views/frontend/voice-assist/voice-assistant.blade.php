@extends('frontend.master')
@push('styles')
    <!-- media corner css  -->
    <style>
        #body {
            font-family: sans-serif;
            background: #f8f9fa;
            text-align: center;
            padding-top: 100px;
            height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #status {
            font-size: 1.2rem;
            color: #555;
            margin-top: 20px;
        }

        #mic-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #007bff;
            width: 60px;
            height: 60px;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #mic-button img {
            width: 28px;
            height: 28px;
        }
    </style>
    <!-- media corner css  -->
@endpush
@section('content')
    <section id="body">
        <!-- AI Button -->
        <button id="ai-button" style="
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #27467A;
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

        <!-- AI Popup (Hidden Initially) -->
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
        color: white;
        font-family: sans-serif;
        ">
            <!-- Sound Animation -->
            <div class="sound-wave"></div>

            <!-- Close Button -->
            <button id="close-ai" style="
            position: absolute;
            top: 10px;
            right: 15px;
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            font-size: 22px;
            cursor: pointer;
        ">×</button>

            <!-- Mic & Status (Hidden by default) -->
            <div id="ai-inner" style="display: none; flex-direction: column; align-items: center; z-index: 1;">
                <div style="font-size: 48px; margin-top: 30px;">🎤</div>
                <p id="status" style="color:#f8f9fa; font-size: 18px; margin-top: 15px;">Listening...</p>
            </div>
        </div>

        <!-- Styles -->
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

        <!-- JavaScript -->
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
                            wake.stop(); // Stop wake listener
                            wakeWordListening = false;
                            openAIAssistant();
                        }
                    };

                    wake.onerror = (e) => {
                        console.error("Wake listener error:", e.error);
                        setTimeout(() => listenForWakeWord(), 2000);
                    };

                    wake.onend = () => {
                        if (wakeWordListening) {
                            listenForWakeWord(); // restart listening
                        }
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
                            //Discover RGU
                            "home": "/",
                            "preface": "/preface",
                            "leadership team": "/leadership",
                            "advisory leadership": "/advisory-leadership",
                            "vision mission": "/vision-mission",
                            "statutes ordinance policies": "/statutes-ordinance-policies",
                            "facilities": "/facilities",
                            "social outreach": "/social-outreach",
                            "footprints": "/footprints"
                            "recognition accreditation": "/recognition-accreditation",
                            "associations tie up": "/association-tieup",
                            "award": "/award",
                            "top recruiters": "/top-recruiters",
                            "success stories": "/success",
                            "360 tour": "/360-tour",
                            "diverse choices": "/diversechoices",
                            "diversity inclusion": "/diversity-inclusion",
                            "location": "/strategic-location"
                            "governing-body": "/governing-body",
                            "board of management": "/board-of-management",
                            "academic council": "/academic-council",
                            "internal complaints committee": "/internal-complaints-committee",
                            "anti ragging": "/anti-ragging",
                            "proctorial board": "/proctorial",
                            "organogram planning": "/organogram-planning"
                            // facilities
                            "auditorium": "/facilities-auditorium",
                            "banking services": "/banking-services",
                            "classroom": "/facilities-classroom",
                            "diagnostic lab": "/facilities-diagnostic",
                            "fine arts studio": "/facilities-fineart",
                            "fashion studio": "/facilities-fashion-studio",
                            "games & sports": "/games&sports",
                            "hangout": "/hangout",
                            "incubation centre": "/facilities-legal-aid",
                            "laboratories": "/laboratories",
                            "library": "/library-Resources",
                            "legal aid": "/facilities-legal-aid"
                            "medical facility": "/medical-facility",
                            "moot court": "/facilities-moot-court",
                            "mass communication studio": "/facilities-mass-com",
                            "royal boutique": "/facilities-royal-boutique",
                            "fine arts studio": "/facilities-fineart",
                            "salon": "/salon",
                            "stationary store": "/stationary-store",
                            "student gallery": "/student-gallery",
                            "security": "/facilities-security"
                            "seminar hall": "/facilities-seminar-hall",
                            "student lounge": "/facilities-student-lounge",
                            "transportation": "/facilities-transportation",
                            "museum": "/facilities-museum"
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
                        // Go back to listening for "Hey RGU"
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
                    wakeWordListening = false; // pause wake word temporarily
                    openAIAssistant();
                });

                closeButton.addEventListener("click", () => {
                    aiPopup.style.display = "none";
                    aiInner.style.display = "none";
                    if (recognition) recognition.abort();
                    statusText.textContent = "🎤 Tap AI again to speak";
                    // Resume wake word after close
                    wakeWordListening = true;
                    listenForWakeWord();
                });

                // Chrome fix for speechSynthesis voices
                speechSynthesis.onvoiceschanged = () => {
                    speechSynthesis.getVoices();
                };

                // Start wake word listener
                listenForWakeWord();
            }
           </script>
    </section>
@endsection

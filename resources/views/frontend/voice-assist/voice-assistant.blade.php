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
        <h1>Welcome to RGU Voice Assistant</h1>
        <p id="status">Say "Hey RGU" to begin...</p>

        <button id="mic-button" title="Start Voice Recognition">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/microphone.png" alt="Mic Icon">
        </button>

        <script>
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert("Speech Recognition not supported in this browser.");
            } else {
                let recognition;
                let isCommandMode = false;

                const status = document.getElementById("status");
                const micButton = document.getElementById("mic-button");

                function speak(message) {
                    const synth = window.speechSynthesis;
                    const utterance = new SpeechSynthesisUtterance(message);
                    synth.speak(utterance);
                }

                function matchWakeWord(text) {
                    // Normalize and fuzzy match
                    const clean = text.replace(/[^a-z]/gi, '').toLowerCase();

                    const variants = [
                        "heyrgu", "hi rgu", "heyargu", "heyareyou", "hairgu", "hey r g u", "heyr g u"
                    ];

                    return variants.some(v => clean.includes(v.replace(/\s/g, '')));
                }

                function startListening() {
                    recognition = new SpeechRecognition();
                    recognition.continuous = false;
                    recognition.lang = 'en-US';
                    recognition.interimResults = false;

                    status.textContent = isCommandMode ? "🎧 Listening for your command..." : "🎤 Say 'Hey RGU'";

                    recognition.onresult = (event) => {
                        const transcript = event.results[0][0].transcript.toLowerCase();
                        console.log("Heard:", transcript);

                        if (!isCommandMode && matchWakeWord(transcript)) {
                            speak("Yes, how can I help you?");
                            isCommandMode = true;
                            setTimeout(startListening, 1500);
                        }
                        else if (isCommandMode) {
                            if (transcript.includes("home")) window.location.href = "/";
                            else if (transcript.includes("about")) window.location.href = "/about";
                            else if (transcript.includes("contact")) window.location.href = "/contact";
                            else if (transcript.includes("services")) window.location.href = "/services";
                            else if (transcript.includes("admissions")) window.location.href = "/admissions";
                            else if (transcript.includes("news")) window.location.href = "/news";
                            else if (transcript.includes("departments")) window.location.href = "/departments";
                            else if (transcript.includes("research")) window.location.href = "/research";
                            else if (transcript.includes("faculty")) window.location.href = "/faculty";
                            else {
                                speak("I didn’t understand. Try again.");
                            }

                            isCommandMode = false;
                        } else {
                            speak("Say 'Hey RGU' to start.");
                        }
                    };

                    recognition.onerror = (e) => {
                        console.error("Recognition error:", e);
                        status.textContent = "⚠️ Error: " + e.error;
                        isCommandMode = false;
                    };

                    recognition.onend = () => {
                        console.log("Recognition ended");
                        status.textContent = "🎤 Tap mic to speak again.";
                    };

                    recognition.start();
                }

                micButton.addEventListener("click", () => {
                    isCommandMode = false;
                    startListening();
                });
            }
           </script>
    </section>
@endsection


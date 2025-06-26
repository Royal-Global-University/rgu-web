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
            const wakeWord = "hey rgu";
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert("Your browser doesn't support voice recognition.");
            } else {
                let recognition;
                let isRecognizing = false;

                const statusText = document.getElementById("status");

                function speak(text) {
                    const synth = window.speechSynthesis;
                    const utterance = new SpeechSynthesisUtterance(text);
                    synth.speak(utterance);
                }

                function startRecognition() {
                    if (isRecognizing) return; // Prevent multiple recognitions
                    isRecognizing = true;

                    recognition = new SpeechRecognition();
                    recognition.continuous = true;
                    recognition.lang = 'en-US';
                    recognition.interimResults = false;

                    recognition.onstart = () => {
                        statusText.textContent = "🎤 Listening for 'Hey RGU'...";
                    };

                    recognition.onresult = (event) => {
                        const transcript = event.results[event.results.length - 1][0].transcript.toLowerCase();
                        console.log("Transcript:", transcript);

                        if (transcript.includes(wakeWord)) {
                            recognition.stop();
                            isRecognizing = false;
                            speak("Yes, how can I help you?");
                            listenForCommand(); // Next step
                        }
                    };

                    recognition.onerror = (e) => {
                        console.error("Wake recognition error:", e.error);
                        statusText.textContent = "❌ Error: " + e.error;
                        speak("Sorry, something went wrong.");
                        isRecognizing = false;
                    };

                    recognition.onend = () => {
                        isRecognizing = false;
                    };

                    recognition.start();
                }

                function listenForCommand() {
                    const cmdRec = new SpeechRecognition();
                    cmdRec.lang = 'en-US';
                    cmdRec.interimResults = false;

                    statusText.textContent = "🎧 Waiting for your command...";

                    cmdRec.onresult = (event) => {
                        const command = event.results[0][0].transcript.toLowerCase();
                        console.log("Command:", command);

                        if (command.includes("home")) window.location.href = "/";
                        else if (command.includes("about")) window.location.href = "/about";
                        else if (command.includes("contact")) window.location.href = "/contact";
                        else if (command.includes("services")) window.location.href = "/services";
                        else if (command.includes("admissions")) window.location.href = "/admissions";
                        else if (command.includes("news")) window.location.href = "/news";
                        else if (command.includes("departments")) window.location.href = "/departments";
                        else if (command.includes("research")) window.location.href = "/research";
                        else if (command.includes("faculty")) window.location.href = "/faculty";
                        else {
                            speak("Sorry, I didn’t understand.");
                            statusText.textContent = "Unrecognized command.";
                        }
                    };

                    cmdRec.onerror = (e) => {
                        console.error("Command error:", e.error);
                        statusText.textContent = "❌ Command error: " + e.error;
                        speak("There was a problem with the command.");
                    };

                    cmdRec.onend = () => {
                        // 🔁 DON'T auto-restart — mobile will block it
                        statusText.textContent = "✅ Tap the mic again to reactivate.";
                    };

                    cmdRec.start();
                }

                // 🔘 Manual start via mic button
                document.getElementById("mic-button").addEventListener("click", () => {
                    startRecognition();
                });
            }
        </script>
    </section>
@endsection


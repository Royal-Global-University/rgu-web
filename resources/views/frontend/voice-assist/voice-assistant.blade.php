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
                alert("Your browser does not support Speech Recognition.");
            } else {
                let recognition;
                let commandRecognition;
                let isListening = false;
                let wakeMode = true; // Controls whether we're listening for "Hey RGU"

                const statusText = document.getElementById("status");

                function speak(text) {
                    const synth = window.speechSynthesis;
                    const utter = new SpeechSynthesisUtterance(text);
                    synth.speak(utter);
                }

                function startRecognition() {
                    recognition = new SpeechRecognition();
                    recognition.continuous = true;
                    recognition.lang = 'en-US';
                    recognition.interimResults = false;

                    recognition.onstart = () => {
                        statusText.textContent = "Listening for 'Hey RGU'...";
                        isListening = true;
                    };

                    recognition.onresult = (event) => {
                        const transcript = event.results[event.results.length - 1][0].transcript.toLowerCase();
                        console.log("Transcript:", transcript);

                        if (wakeMode && transcript.includes(wakeWord)) {
                            wakeMode = false;
                            recognition.stop();
                            speak("Yes, how can I help you?");
                            listenForCommand();
                        }
                    };

                    recognition.onerror = (e) => {
                        console.error("Error:", e);
                        speak("Error occurred during recognition.");
                    };

                    recognition.onend = () => {
                        isListening = false;
                        if (wakeMode) {
                            // Restart listening for wake word
                            startRecognition();
                        }
                    };

                    recognition.start();
                }

                function listenForCommand() {
                    commandRecognition = new SpeechRecognition();
                    commandRecognition.lang = 'en-US';
                    commandRecognition.interimResults = false;
                    commandRecognition.maxAlternatives = 1;

                    statusText.textContent = "Listening for your command...";

                    commandRecognition.onresult = (event) => {
                        const command = event.results[0][0].transcript.toLowerCase();
                        console.log("Command:", command);

                        // Match commands
                        if (command.includes("home")) {
                            window.location.href = "/";
                        } else if (command.includes("about")) {
                            window.location.href = "/about";
                        } else if (command.includes("contact")) {
                            window.location.href = "/contact";
                        } else if (command.includes("services")) {
                            window.location.href = "/services";
                        } else if (command.includes("admissions")) {
                            window.location.href = "/admissions";
                        } else if (command.includes("news")) {
                            window.location.href = "/news";
                        } else if (command.includes("departments")) {
                            window.location.href = "/departments";
                        } else if (command.includes("research")) {
                            window.location.href = "/research";
                        } else if (command.includes("faculty")) {
                            window.location.href = "/faculty";
                        } else {
                            speak("Sorry, I didn't understand that.");
                            statusText.textContent = "Say: Home, Contact, Admissions, etc.";
                        }
                    };

                    commandRecognition.onerror = () => {
                        speak("I had trouble understanding that.");
                        statusText.textContent = "Command error.";
                    };

                    commandRecognition.onend = () => {
                        // After command processed, go back to listening for wake word
                        wakeMode = true;
                        startRecognition();
                    };

                    commandRecognition.start();
                }

                // Mic button click handler
                document.getElementById("mic-button").addEventListener("click", () => {
                    if (!isListening) {
                        startRecognition();
                    }
                });
            }
        </script>
    </section>
@endsection


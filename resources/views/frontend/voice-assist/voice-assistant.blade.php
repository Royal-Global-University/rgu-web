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
        <h1>🎙️ Voice Assistant</h1>
        <p id="status">Tap the mic to speak</p>

        <button id="mic-button"
            style="position:fixed;bottom:30px;right:30px;width:60px;height:60px;background:#007bff;color:white;border:none;border-radius:50%;font-size:24px;">
            🎤
        </button>

        <script>
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert("Speech Recognition is not supported in this browser.");
            } else {
                let recognition;
                const micButton = document.getElementById("mic-button");
                const status = document.getElementById("status");

                function speak(text) {
                    const synth = window.speechSynthesis;
                    const utter = new SpeechSynthesisUtterance(text);
                    synth.speak(utter);
                }

                function listenForCommand() {
                    recognition = new SpeechRecognition();
                    recognition.lang = 'en-US';
                    recognition.interimResults = false;
                    recognition.continuous = false;

                    status.textContent = "🎧 Listening for your command...";

                    recognition.onresult = (event) => {
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
                            speak("I didn’t understand. Try again.");
                            status.textContent = "❓ Unrecognized command.";
                        }
                    };

                    recognition.onerror = (e) => {
                        console.error("Recognition error:", e);
                        status.textContent = "⚠️ Error: " + e.error;
                        speak("There was an error listening.");
                    };

                    recognition.onend = () => {
                        status.textContent = "🎤 Tap the mic to try again.";
                    };

                    recognition.start();
                }

                micButton.addEventListener("click", () => {
                    speak("How can I help you?");
                    setTimeout(() => {
                        listenForCommand();
                    }, 1000); // Give time to speak before listening
                });
            }
           </script>
    </section>
@endsection


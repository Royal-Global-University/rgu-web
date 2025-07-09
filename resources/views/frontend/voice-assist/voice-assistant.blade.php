<script>
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        alert("Speech Recognition is not supported in this browser.");
    } else {
        const aiButton = document.getElementById("ai-button");
        const aiPopupWrapper = document.getElementById("ai-popup-wrapper");
        const statusText = document.getElementById("status");
        const userCommandText = document.getElementById("user-command");
        const closeButton = document.getElementById("close-ai");

        let activeRecognition, passiveRecognition;
        let listening = false;

        const routes = {
            "home": "/", "preface": "/preface", "leadership team": "/leadership",
            "advisory leadership": "/advisory-leadership", "vision mission": "/vision-mission",
            "statutes ordinance policies": "/statutes-ordinance-policies", "facilities": "/facilities",
            "social outreach": "/social-outreach", "footprints": "/footprints",
            "recognition accreditation": "/recognition-accreditation", "associations tie up": "/association-tieup",
            "award": "/award", "top recruiters": "/top-recruiters", "success stories": "/success",
            "360 tour": "/360-tour", "diverse choices": "/diversechoices", "diversity inclusion": "/diversity-inclusion",
            "location": "/strategic-location", "governing body": "/governing-body",
            "board of management": "/board-of-management", "academic council": "/academic-council",
            "internal complaints committee": "/internal-complaints-committee", "anti ragging": "/anti-ragging",
            "proctorial board": "/proctorial", "organogram planning": "/organogram-planning",
            "auditorium": "/facilities-auditorium", "banking services": "/banking-services",
            "classroom": "/facilities-classroom", "diagnostic lab": "/facilities-diagnostic",
            "fine arts studio": "/facilities-fineart", "fashion studio": "/facilities-fashion-studio",
            "games and sports": "/games&sports", "hangout": "/hangout", "incubation centre": "/facilities-legal-aid",
            "laboratories": "/laboratories", "library": "/library-Resources", "legal aid": "/facilities-legal-aid",
            "medical facility": "/medical-facility", "moot court": "/facilities-moot-court",
            "mass communication studio": "/facilities-mass-com", "royal boutique": "/facilities-royal-boutique",
            "salon": "/salon", "stationary store": "/stationary-store", "student gallery": "/student-gallery",
            "security": "/facilities-security", "seminar hall": "/facilities-seminar-hall",
            "student lounge": "/facilities-student-lounge", "transportation": "/facilities-transportation",
            "museum": "/facilities-museum"
        };

        function speak(text) {
            const synth = window.speechSynthesis;
            const utter = new SpeechSynthesisUtterance(text);
            const voices = synth.getVoices();
            const enVoice = voices.find(v => v.lang.includes("en") && v.name.toLowerCase().includes("google"));
            if (enVoice) utter.voice = enVoice;
            synth.speak(utter);
        }

        function getBestMatch(command) {
            let best = null, maxScore = 0;
            for (const key in routes) {
                const score = stringSimilarity(key, command);
                if (score > maxScore && score > 0.4) {
                    maxScore = score;
                    best = key;
                }
            }
            return best;
        }

        function stringSimilarity(a, b) {
            a = a.toLowerCase(); b = b.toLowerCase();
            let matches = 0;
            a.split(' ').forEach(word => {
                if (b.includes(word)) matches++;
            });
            return matches / a.split(' ').length;
        }

        function startCommandRecognition() {
            activeRecognition = new SpeechRecognition();
            activeRecognition.lang = 'en-US';
            activeRecognition.interimResults = false;
            activeRecognition.continuous = false;

            statusText.textContent = "🎧 Listening...";
            userCommandText.textContent = "";

            activeRecognition.onresult = (event) => {
                const command = event.results[0][0].transcript.toLowerCase().trim();
                userCommandText.textContent = `🗣 You said: "${command}"`;

                const matchedKey = getBestMatch(command);
                if (matchedKey) {
                    const route = routes[matchedKey];
                    statusText.textContent = `✅ Opening "${matchedKey}"`;
                    speak(`Opening ${matchedKey} page`);
                    setTimeout(() => window.location.href = route, 1500);
                } else {
                    speak("I didn’t understand. Try again.");
                    statusText.textContent = "❓ Unrecognized command.";
                }
            };

            activeRecognition.onerror = (e) => {
                statusText.textContent = "⚠️ Mic error: " + e.error;
            };

            activeRecognition.onend = () => { listening = false; };

            activeRecognition.start();
            listening = true;
        }

        function startWakeWordListener() {
            passiveRecognition = new SpeechRecognition();
            passiveRecognition.lang = 'en-US';
            passiveRecognition.continuous = true;
            passiveRecognition.interimResults = true;

            passiveRecognition.onresult = (event) => {
                const transcript = Array.from(event.results)
                    .map(result => result[0].transcript.toLowerCase())
                    .join(" ");

                if (transcript.includes("hey rgu") && !listening) {
                    aiPopupWrapper.style.display = "block";
                    speak("How can I help you?");
                    passiveRecognition.abort(); // stop wake listener
                    setTimeout(() => {
                        startCommandRecognition();
                        startWakeWordListener(); // restart wake listener after command
                    }, 1000);
                }
            };

            passiveRecognition.onerror = (e) => {
                console.warn("Wake word mic error:", e);
            };

            passiveRecognition.start();
        }

        aiButton.addEventListener("click", () => {
            aiPopupWrapper.style.display = "block";
            speak("How can I help you?");
            startCommandRecognition();
        });

        closeButton.addEventListener("click", () => {
            aiPopupWrapper.style.display = "none";
            if (activeRecognition) activeRecognition.abort();
        });

        speechSynthesis.onvoiceschanged = () => speechSynthesis.getVoices();

        // Start passive wake word listener after load
        window.onload = () => {
            try { startWakeWordListener(); } catch (err) {
                console.warn("Mic blocked or denied:", err);
            }
        };
    }
</script>

<!-- AI Button -->
 <style>
    #ai-button {
        position: fixed;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 99999;
    }

    #ai-button img {
        width: 80px;
        height: 80px;
    }

    /* Mobile (max-width: 767px) */
    @media (max-width: 767px) {
        #ai-button {
            bottom: 120px;
            right: 10px;
        }

        #ai-button img {
            width: 90px;
            height: 90px;
        }
    }

    /* Tablet (768px to 1023px) */
    @media (min-width: 768px) and (max-width: 1023px) {
        #ai-button {
            bottom: 100px;
            right: 25px;
        }

        #ai-button img {
            width: 65px;
            height: 65px;
        }
    }

    /* Desktop (1024px and above) */
    @media (min-width: 1024px) {
        #ai-button {
            bottom: 70px;
            right: 30px;
        }

        #ai-button img {
            width: 100px;
            height: 100px;
        }
    }
</style>

<button id="ai-button">
    <img src="mobile-assets/ai/owl2.png" alt="AI Assistant" /> </button>

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
        <div class="sound-wave"></div>
        <div style="font-size: 40px; z-index: 1;">🎤</div>
        <p id="status" style="font-size: 14px; margin-top: 8px; color: #fff; z-index: 1;">Listening...</p>
        <p id="user-command" style="font-size: 13px; margin-top: 4px; z-index: 1;"></p>
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
        const userCommandText = document.getElementById("user-command");
        const closeButton = document.getElementById("close-ai");

        let recognition;

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

        function startListening() {
            recognition = new SpeechRecognition();
            recognition.lang = 'en-US';
            recognition.interimResults = false;
            recognition.continuous = false;

            statusText.textContent = "🎧 Listening...";

            recognition.onresult = (event) => {
                const command = event.results[0][0].transcript.toLowerCase().trim();
                userCommandText.textContent = `🗣 You said: "${command}"`;

                const matchedKey = getBestMatch(command);
                if (matchedKey) {
                    const route = routes[matchedKey];
                    statusText.textContent = `✅ Opening "${matchedKey}"`;
                    speak(`Opening ${matchedKey} page`);
                    setTimeout(() => { window.location.href = route; }, 1500);
                } else {
                    speak("I didn’t understand. Try again.");
                    statusText.textContent = "❓ Unrecognized command.";
                }
            };

            recognition.onerror = (e) => {
                if (e.error === "not-allowed") {
                    statusText.textContent = "🚫 Mic blocked. Please allow access.";
                    speak("Please allow microphone access.");
                } else {
                    statusText.textContent = "⚠️ Error: " + e.error;
                }
            };

            recognition.onend = () => {
                console.log("Voice recognition ended.");
            };

            recognition.start();
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

<!-- Global Search Widget (Text & Voice Search) -->
<button id="rgu-global-search-btn" class="rgu-search-btn" title="Search site (Alt + K)" aria-label="Search site">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
</button>

<div id="rgu-search-modal" class="rgu-search-modal" style="display: none;" role="dialog" aria-modal="true">
    <div class="rgu-search-backdrop"></div>
    <div class="rgu-search-container">
        <div class="rgu-search-card">
            <!-- Modal Header / Search Box -->
            <div class="rgu-search-box-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="input-search-icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                
                <input type="text" id="rgu-search-input" placeholder="Search page, faculty, or department..." autocomplete="off" aria-label="Search query">
                
                <button id="rgu-mic-btn" class="rgu-mic-btn" title="Voice Search" aria-label="Start voice search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mic-icon"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                </button>
                
                <button id="rgu-close-search-btn" class="rgu-close-btn" title="Close" aria-label="Close search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>

            <!-- Voice Search Listening Overlay -->
            <div id="rgu-voice-listening-overlay" style="display: none;">
                <div class="voice-card">
                    <div class="pulse-ring"></div>
                    <div class="voice-mic-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                    </div>
                    <div class="sound-wave-bars">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                    <p id="rgu-voice-status" class="voice-status">Listening...</p>
                    <p id="rgu-voice-transcript" class="voice-transcript"></p>
                    <button id="rgu-cancel-voice" class="rgu-cancel-voice-btn">Cancel</button>
                </div>
            </div>

            <!-- Search Results -->
            <div id="rgu-search-results" class="rgu-search-results-list">
                <div class="rgu-search-state-info">Type something to search for pages, faculties, or departments...</div>
            </div>
            
            <!-- Keyboard Info Footer -->
            <div class="rgu-search-footer">
                <span><kbd>ESC</kbd> to close</span>
                <span><kbd>↑↓</kbd> to navigate</span>
                <span><kbd>Enter</kbd> to select</span>
            </div>
        </div>
    </div>
</div>

<style>
    /* Floating Button Styles */
    .rgu-search-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #13223b 0%, #24477f 100%);
        border: 2px solid #FF9A1E;
        border-radius: 50%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 24px rgba(19, 34, 59, 0.4), 0 0 0 0px rgba(255, 154, 30, 0.4);
        z-index: 99990;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    
    .rgu-search-btn:hover {
        transform: scale(1.1) translateY(-3px);
        box-shadow: 0 12px 30px rgba(19, 34, 59, 0.5), 0 0 15px 5px rgba(255, 154, 30, 0.4);
        background: linear-gradient(135deg, #24477f 0%, #13223b 100%);
    }

    .rgu-search-btn:active {
        transform: scale(0.95);
    }

    .rgu-search-btn svg {
        transition: transform 0.3s ease;
    }

    .rgu-search-btn:hover svg {
        transform: rotate(15deg);
    }

    /* Modal Styles */
    .rgu-search-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100000;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 10vh;
    }

    .rgu-search-backdrop {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(19, 34, 59, 0.7);
        backdrop-filter: blur(12px);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .rgu-search-modal.active .rgu-search-backdrop {
        opacity: 1;
    }

    .rgu-search-container {
        position: relative;
        width: 100%;
        max-width: 650px;
        margin: 0 20px;
        z-index: 100001;
        opacity: 0;
        transform: scale(0.9) translateY(-20px);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .rgu-search-modal.active .rgu-search-container {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    .rgu-search-card {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(19, 34, 59, 0.1);
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        max-height: 70vh;
    }

    /* Search Box Input */
    .rgu-search-box-wrapper {
        display: flex;
        align-items: center;
        padding: 18px 24px;
        border-bottom: 1px solid rgba(19, 34, 59, 0.1);
        background: white;
    }

    .input-search-icon {
        color: #8c9ba5;
        margin-right: 16px;
        flex-shrink: 0;
    }

    #rgu-search-input {
        border: none;
        outline: none;
        background: transparent;
        font-family: inherit;
        font-size: 18px;
        width: 100%;
        color: #13223b;
        font-weight: 500;
    }

    #rgu-search-input::placeholder {
        color: #8c9ba5;
    }

    /* Mic & Close Buttons */
    .rgu-mic-btn, .rgu-close-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 8px;
        color: #8c9ba5;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
        margin-left: 8px;
        flex-shrink: 0;
    }

    .rgu-mic-btn {
        color: #24477f;
        background: rgba(36, 71, 127, 0.08);
    }

    .rgu-mic-btn:hover {
        background: rgba(36, 71, 127, 0.15);
        color: #FF9A1E;
        transform: scale(1.05);
    }

    .rgu-mic-btn.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        background: rgba(0, 0, 0, 0.05);
        color: #8c9ba5;
    }

    .rgu-mic-btn.disabled:hover {
        transform: none;
        background: rgba(0, 0, 0, 0.05);
        color: #8c9ba5;
    }

    .rgu-close-btn:hover {
        background: rgba(0, 0, 0, 0.05);
        color: #dc3545;
    }

    /* Voice Dialog overlay */
    #rgu-voice-listening-overlay {
        padding: 40px 20px;
        text-align: center;
        border-bottom: 1px solid rgba(19, 34, 59, 0.1);
        background: linear-gradient(180deg, #13223b 0%, #24477f 100%);
        color: white;
    }

    .voice-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .voice-mic-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: #FF9A1E;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgba(255, 154, 30, 0.6);
        z-index: 2;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .voice-mic-icon:hover {
        transform: scale(1.08);
        box-shadow: 0 0 25px rgba(255, 154, 30, 0.8);
    }

    .pulse-ring {
        position: absolute;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background-color: rgba(255, 154, 30, 0.3);
        z-index: 1;
        opacity: 0;
        transform: scale(0.6);
    }

    .voice-card.is-listening .pulse-ring {
        animation: pulseWave 1.6s infinite ease-out;
    }

    @keyframes pulseWave {
        0% { transform: scale(0.6); opacity: 1; }
        100% { transform: scale(1.5); opacity: 0; }
    }

    /* Sound Wave Animation */
    .sound-wave-bars {
        display: flex;
        gap: 4px;
        height: 24px;
        align-items: center;
        margin-bottom: 15px;
    }

    .sound-wave-bars span {
        display: inline-block;
        width: 3px;
        height: 6px;
        background: white;
        border-radius: 2px;
    }

    .voice-card.is-listening .sound-wave-bars span {
        animation: wave-animation 1s ease-in-out infinite;
    }

    .sound-wave-bars span:nth-child(2) { animation-delay: 0.2s; }
    .sound-wave-bars span:nth-child(3) { animation-delay: 0.4s; }
    .sound-wave-bars span:nth-child(4) { animation-delay: 0.6s; }
    .sound-wave-bars span:nth-child(5) { animation-delay: 0.8s; }

    @keyframes wave-animation {
        0%, 100% { height: 6px; }
        50% { height: 24px; }
    }

    .voice-status {
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 8px;
        color: #fff;
    }

    .voice-transcript {
        font-style: italic;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 20px;
        min-height: 20px;
        max-width: 80%;
    }

    .rgu-cancel-voice-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .rgu-cancel-voice-btn:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    /* Search Results List */
    .rgu-search-results-list {
        overflow-y: auto;
        flex-grow: 1;
        padding: 12px 18px;
        background: #f7f9fa;
        max-height: 50vh;
    }

    .rgu-search-state-info {
        padding: 30px;
        text-align: center;
        color: #8c9ba5;
        font-size: 15px;
    }

    .rgu-search-result-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
        margin-bottom: 8px;
        background: white;
        border: 1px solid rgba(19, 34, 59, 0.05);
        border-radius: 10px;
        cursor: pointer;
        text-decoration: none !important;
        transition: all 0.2s ease;
    }

    .rgu-search-result-item:hover, .rgu-search-result-item.highlighted {
        background: #f0f4f8;
        border-color: #24477f;
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(36, 71, 127, 0.05);
    }

    .result-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .result-title {
        font-weight: 600;
        font-size: 16px;
        color: #13223b;
    }

    .result-url {
        font-size: 12px;
        color: #8c9ba5;
    }

    .result-category {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 4px 8px;
        border-radius: 4px;
        flex-shrink: 0;
    }

    /* Badges colors */
    .category-page { background: #e2e8f0; color: #475569; }
    .category-department { background: #fee2e2; color: #b91c1c; }
    .category-faculty { background: #fef3c7; color: #b45309; }
    .category-school { background: #dbeafe; color: #1d4ed8; }
    .category-admission { background: #dcfce7; color: #15803d; }

    /* Footer */
    .rgu-search-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 24px;
        border-top: 1px solid rgba(19, 34, 59, 0.08);
        background: white;
        font-size: 12px;
        color: #8c9ba5;
    }

    .rgu-search-footer kbd {
        background: #f1f3f5;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        padding: 2px 6px;
        margin: 0 2px;
        font-family: monospace;
        font-weight: bold;
        color: #495057;
    }

    /* Scrollbar Style */
    .rgu-search-results-list::-webkit-scrollbar {
        width: 6px;
    }
    .rgu-search-results-list::-webkit-scrollbar-track {
        background: transparent;
    }
    .rgu-search-results-list::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 3px;
    }
    .rgu-search-results-list::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.getElementById("rgu-global-search-btn");
    const searchModal = document.getElementById("rgu-search-modal");
    const closeBtn = document.getElementById("rgu-close-search-btn");
    const searchInput = document.getElementById("rgu-search-input");
    const resultsContainer = document.getElementById("rgu-search-results");
    const micBtn = document.getElementById("rgu-mic-btn");
    const voiceOverlay = document.getElementById("rgu-voice-listening-overlay");
    const voiceStatus = document.getElementById("rgu-voice-status");
    const voiceTranscript = document.getElementById("rgu-voice-transcript");
    const cancelVoiceBtn = document.getElementById("rgu-cancel-voice");

    let searchData = [];
    let activeIndex = -1;
    let recognition = null;
    let voiceConfirmTimeout = null;

    // Fetch compiled active routes
    fetch("/assets/json/search_routes.json")
        .then(res => res.json())
        .then(data => {
            searchData = data;
        })
        .catch(err => console.error("RGU Search Data failed to load:", err));

    // Open Search Modal
    function openModal() {
        if (searchModal) {
            searchModal.style.display = "flex";
            setTimeout(() => {
                searchModal.classList.add("active");
                if (searchInput) searchInput.focus();
            }, 10);
        }
        document.body.style.overflow = "hidden"; // Prevent scrolling main page
    }

    // Close Search Modal
    function closeModal() {
        if (searchModal) {
            searchModal.classList.remove("active");
        }
        stopListening();
        if (voiceConfirmTimeout) clearTimeout(voiceConfirmTimeout);
        setTimeout(() => {
            if (searchModal) searchModal.style.display = "none";
            if (searchInput) searchInput.value = "";
            if (resultsContainer) {
                resultsContainer.innerHTML = '<div class="rgu-search-state-info">Type something to search for pages, faculties, or departments...</div>';
            }
            activeIndex = -1;
        }, 300);
        document.body.style.overflow = ""; // Re-enable scroll
    }

    // Toggle Modal keyboard shortcut: Alt + K
    window.addEventListener("keydown", function (e) {
        if (e.altKey && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            if (searchModal && searchModal.classList.contains("active")) {
                closeModal();
            } else {
                openModal();
            }
        }
        
        // Handle keyboard navigation of results
        if (searchModal && searchModal.classList.contains("active") && resultsContainer) {
            const items = resultsContainer.querySelectorAll(".rgu-search-result-item");
            if (e.key === "Escape") {
                closeModal();
            } else if (e.key === "ArrowDown") {
                e.preventDefault();
                if (items.length > 0) {
                    activeIndex = (activeIndex + 1) % items.length;
                    highlightItem(items);
                }
            } else if (e.key === "ArrowUp") {
                e.preventDefault();
                if (items.length > 0) {
                    activeIndex = (activeIndex - 1 + items.length) % items.length;
                    highlightItem(items);
                }
            } else if (e.key === "Enter") {
                e.preventDefault();
                if (activeIndex >= 0 && items[activeIndex]) {
                    items[activeIndex].click();
                } else if (items.length > 0) {
                    items[0].click();
                }
            }
        }
    });

    function highlightItem(items) {
        items.forEach((item, idx) => {
            if (idx === activeIndex) {
                item.classList.add("highlighted");
                item.scrollIntoView({ block: "nearest" });
            } else {
                item.classList.remove("highlighted");
            }
        });
    }

    if (searchBtn) searchBtn.addEventListener("click", openModal);
    if (closeBtn) closeBtn.addEventListener("click", closeModal);
    
    const searchBackdrop = document.querySelector(".rgu-search-backdrop");
    if (searchBackdrop) searchBackdrop.addEventListener("click", closeModal);

    // Text Search Logic
    if (searchInput && resultsContainer) {
        searchInput.addEventListener("input", function () {
            const query = searchInput.value.toLowerCase().trim();
            activeIndex = -1;

            if (query === "") {
                resultsContainer.innerHTML = '<div class="rgu-search-state-info">Type something to search for pages, faculties, or departments...</div>';
                return;
            }

            // Fuzzy filter matches in title or URL
            const matches = searchData.filter(item => {
                return item.title.toLowerCase().includes(query) || item.url.toLowerCase().includes(query);
            });

            // Cap at 15 results for performance
            const displayedMatches = matches.slice(0, 15);

            if (displayedMatches.length === 0) {
                resultsContainer.innerHTML = '<div class="rgu-search-state-info">No active pages found matching your search.</div>';
                return;
            }

            resultsContainer.innerHTML = "";
            displayedMatches.forEach((item, idx) => {
                const itemElement = document.createElement("a");
                itemElement.href = item.url;
                itemElement.className = "rgu-search-result-item";
                
                // Highlight matching letters
                const highlightText = (text, q) => {
                    const regex = new RegExp(`(${q.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&')})`, "gi");
                    return text.replace(regex, "<mark style='background:#ffe082;color:#000;padding:2px 0;border-radius:2px;'>$1</mark>");
                };

                const displayTitle = highlightText(item.title, query);
                const categoryClass = `category-${item.category.toLowerCase()}`;

                itemElement.innerHTML = `
                    <div class="result-info">
                        <span class="result-title">${displayTitle}</span>
                        <span class="result-url">${item.url}</span>
                    </div>
                    <span class="result-category ${categoryClass}">${item.category}</span>
                `;

                // Navigation on click
                itemElement.addEventListener("click", function (e) {
                    e.preventDefault();
                    window.location.href = item.url;
                });

                resultsContainer.appendChild(itemElement);
            });
        });
    }

    // --- Voice Command Search Logic ---
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const voiceCard = document.querySelector(".voice-card");

    let isListening = false;
    let commandProcessed = false;

    if (!SpeechRecognition) {
        if (micBtn) {
            micBtn.classList.add("disabled");
            micBtn.title = "Voice search not supported in this browser context (requires HTTPS or localhost)";
            micBtn.addEventListener("click", function (e) {
                e.preventDefault();
                alert("Speech recognition is not supported in this browser or requires a secure context (HTTPS or localhost).\n\nIf you are on Brave, enable 'Web Speech API' in settings.\nIf you are on Firefox, toggle 'media.webspeech.recognition.enable' in about:config.");
            });
        }
    } else {
        recognition = new SpeechRecognition();
        recognition.lang = "en-US";
        recognition.interimResults = true;
        recognition.continuous = false;

        recognition.onstart = function () {
            isListening = true;
            commandProcessed = false;
            if (voiceCard) voiceCard.classList.add("is-listening");
            if (voiceOverlay) voiceOverlay.style.display = "block";
            if (voiceStatus) voiceStatus.textContent = "Listening for command...";
            if (voiceTranscript) voiceTranscript.textContent = 'Say something like: "Botany", "Open Preface", or "Search FAQ"';
        };

        recognition.onerror = function (e) {
            console.error("Speech Error:", e.error);
            isListening = false;
            if (voiceCard) voiceCard.classList.remove("is-listening");
            
            if (voiceStatus && voiceTranscript) {
                if (e.error === "not-allowed") {
                    voiceStatus.textContent = "Microphone blocked!";
                    voiceTranscript.textContent = "Please enable microphone permissions in your browser.";
                } else if (e.error === "no-speech") {
                    voiceStatus.textContent = "No speech detected.";
                    voiceTranscript.textContent = "Tap the microphone icon to try again.";
                } else {
                    voiceStatus.textContent = "Voice search failed.";
                    voiceTranscript.textContent = "Error occurred: " + e.error;
                }
            }
        };

        recognition.onend = function () {
            isListening = false;
            if (voiceCard) voiceCard.classList.remove("is-listening");
            
            // If the user stopped talking and we haven't matched anything yet, and speech synth isn't running
            setTimeout(() => {
                if (!commandProcessed && (!window.speechSynthesis || !window.speechSynthesis.speaking)) {
                    if (voiceStatus) voiceStatus.textContent = "Microphone is off (Idle)";
                    if (voiceTranscript) voiceTranscript.textContent = "Tap the microphone icon above to speak again.";
                }
            }, 100);
        };

        recognition.onresult = function (event) {
            let interimTranscript = "";
            let finalTranscript = "";

            for (let i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    finalTranscript += event.results[i][0].transcript;
                } else {
                    interimTranscript += event.results[i][0].transcript;
                }
            }

            const currentSpeech = finalTranscript || interimTranscript;
            if (voiceTranscript) voiceTranscript.textContent = `"${currentSpeech}"`;

            if (finalTranscript) {
                processVoiceCommand(finalTranscript);
            }
        };

        if (micBtn) {
            micBtn.addEventListener("click", function (e) {
                e.preventDefault();
                startListening();
            });
        }
    }

    function startListening() {
        if (window.speechSynthesis) {
            window.speechSynthesis.cancel(); // Don't speak while starting to listen
        }
        if (recognition) {
            try {
                recognition.start();
            } catch (err) {
                console.warn("Recognition already started:", err);
            }
        }
    }

    function stopListening() {
        if (recognition) {
            try {
                recognition.abort();
            } catch (err) {}
        }
        isListening = false;
        if (voiceCard) voiceCard.classList.remove("is-listening");
        if (voiceOverlay) voiceOverlay.style.display = "none";
        if (window.speechSynthesis) {
            window.speechSynthesis.cancel();
        }
    }

    function processVoiceCommand(command) {
        // Clean up command
        let cleanCommand = command.toLowerCase().trim()
            .replace(/^(go to|open|navigate to|show me|take me to|find)\s+/i, "")
            .replace(/&/g, "and")
            .replace(/department/gi, "")
            .replace(/faculty/gi, "")
            .replace(/school/gi, "")
            .replace(/\s+/g, " ")
            .trim();

        if (voiceStatus) voiceStatus.textContent = "Processing...";

        if (!cleanCommand) {
            if (voiceStatus) voiceStatus.textContent = "Sorry, didn't catch that.";
            speak("Sorry, I didn't catch that. Please try again.", () => {
                if (voiceOverlay && voiceOverlay.style.display === "block") {
                    startListening();
                }
            });
            return;
        }

        // Search for best match in searchData using basic string overlap
        let bestMatch = null;
        let highestScore = 0;

        searchData.forEach(item => {
            const titleTokens = item.title.toLowerCase().split(/\s+/);
            const cmdTokens = cleanCommand.split(/\s+/);
            
            let matches = 0;
            titleTokens.forEach(t => {
                if (cmdTokens.some(c => c.includes(t) || t.includes(c))) {
                    matches++;
                }
            });

            // Calculate similarity score
            let score = matches / Math.max(titleTokens.length, cmdTokens.length);

            // Give exact/substring match a huge boost
            if (item.title.toLowerCase().includes(cleanCommand) || cleanCommand.includes(item.title.toLowerCase())) {
                score += 0.5;
            }

            if (score > highestScore && score > 0.2) {
                highestScore = score;
                bestMatch = item;
            }
        });

        if (bestMatch) {
            commandProcessed = true;
            if (voiceStatus) voiceStatus.textContent = `Redirecting to: ${bestMatch.title}`;
            if (voiceTranscript) voiceTranscript.innerHTML = `<span style="color:#FF9A1E;font-weight:bold;">Found match!</span> Navigating to page...`;
            
            // Speak confirmation
            speak(`Opening ${bestMatch.title}`);

            // Abort recognition immediately to release microphone and audio context
            if (recognition) {
                try {
                    recognition.abort();
                } catch (e) {}
            }

            // Redirect after a short delay to let speech begin
            setTimeout(() => {
                window.location.href = bestMatch.url;
            }, 500);
        } else {
            if (voiceStatus) voiceStatus.textContent = "No page found.";
            if (voiceTranscript) voiceTranscript.textContent = `Could not match "${cleanCommand}". Try naming a department, faculty, or main page.`;
            
            speak("Sorry, I could not find a page matching that name.", () => {
                if (voiceOverlay && voiceOverlay.style.display === "block") {
                    startListening();
                }
            });
        }
    }

    function speak(text, callback) {
        if ('speechSynthesis' in window) {
            const synth = window.speechSynthesis;
            synth.cancel(); // Cancel active speech
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = "en-US";
            if (callback) {
                utterance.onend = function () {
                    callback();
                };
                utterance.onerror = function () {
                    callback();
                };
            }
            synth.speak(utterance);
        } else {
            if (callback) callback();
        }
    }

    const overlayMicBtn = document.querySelector(".voice-mic-icon");
    if (overlayMicBtn) {
        overlayMicBtn.addEventListener("click", function (e) {
            e.preventDefault();
            startListening();
        });
    }

    if (cancelVoiceBtn) {
        cancelVoiceBtn.addEventListener("click", function (e) {
            e.preventDefault();
            stopListening();
        });
    }
});
</script>

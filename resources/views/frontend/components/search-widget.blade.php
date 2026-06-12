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
                
                <button id="rgu-close-search-btn" class="rgu-close-btn" title="Close" aria-label="Close search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
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

    /* Close Button */
    .rgu-close-btn {
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

    .rgu-close-btn:hover {
        background: rgba(0, 0, 0, 0.05);
        color: #dc3545;
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

    let searchData = [];
    let activeIndex = -1;

    // --- Custom Search List Management ---
    // Add any URLs here that you want to EXCLUDE/HIDE from search results
    const excludedUrls = [
        '/test',
        '/test1',
        '/physics-test',
        '/test/preface',
        '/test/jobs',
        '/test/recognition',
        '/test/governing-body',
        '/test/leadership-team',
        '/test/leadership-team-ak-buragohain'
    ];

    // Add any custom items manually here
    const customSearchItems = [
        /*
        {
            url: '/admission-2026',
            title: 'Admissions 2026',
            category: 'Admission'
        },
        */
    ];

    // Fetch compiled active routes
    fetch("{{ asset('assets/json/search_routes.json') }}")
        .then(res => res.json())
        .then(data => {
            // Filter out excluded URLs
            const filteredData = data.filter(item => !excludedUrls.includes(item.url));
            
            // Append manually added custom items
            searchData = filteredData.concat(customSearchItems);
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
});
</script>

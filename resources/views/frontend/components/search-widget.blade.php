<!-- Global Search Widget (Text & Voice Search) -->
<button id="rgu-global-search-btn" class="rgu-search-btn" title="Search site (Alt + K)" aria-label="Search site">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="search-icon">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
</button>

<div id="rgu-search-modal" class="rgu-search-modal" style="display: none;" role="dialog" aria-modal="true">
    <div class="rgu-search-backdrop"></div>
    <div class="rgu-search-container">
        <div class="rgu-search-card">
            <!-- Modal Header / Search Box -->
            <div class="rgu-search-box-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="input-search-icon">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>

                <input type="text" id="rgu-search-input" placeholder="Search page, faculty, or department..."
                    autocomplete="off" aria-label="Search query">

                <button id="rgu-close-search-btn" class="rgu-close-btn" title="Close" aria-label="Close search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div id="rgu-search-results" class="rgu-search-results-list">
                <div class="rgu-search-state-info">
                    <i class="bi bi-search"
                        style="font-size: 2.2rem; color: #FF9A1E; display: block; margin-bottom: 12px; animation: floatIcon 3s infinite ease-in-out;"></i>
                    <span style="font-size: 16px; color: #13223b; font-weight: 600;">Search Royal Global
                        University</span>
                    <span style="font-size: 13px; color: #8c9ba5; font-weight: 400; margin-top: 4px;">Find pages,
                        admissions, faculties, or departments</span>
                </div>
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
        background: radial-gradient(circle at 50% 30%, rgba(36, 71, 127, 0.45) 0%, rgba(19, 34, 59, 0.85) 100%);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .rgu-search-modal.active .rgu-search-backdrop {
        opacity: 1;
    }

    .rgu-search-container {
        position: relative;
        width: 100%;
        max-width: 680px;
        margin: 0 20px;
        z-index: 100001;
        opacity: 0;
        transform: scale(0.92) translateY(-40px);
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .rgu-search-modal.active .rgu-search-container {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    .rgu-search-card {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 154, 30, 0.3);
        border-radius: 24px;
        box-shadow: 0 30px 80px rgba(13, 22, 59, 0.4),
            0 0 50px rgba(255, 154, 30, 0.15);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        max-height: 75vh;
        backdrop-filter: blur(25px);
        -webkit-backdrop-filter: blur(25px);
    }

    /* Search Box Input */
    .rgu-search-box-wrapper {
        display: flex;
        align-items: center;
        padding: 22px 28px;
        background: linear-gradient(135deg, #13223b 0%, #1e3a67 100%);
        border-bottom: 2px solid #FF9A1E;
        /* Gold border below the header */
        position: relative;
    }

    .input-search-icon {
        color: #FF9A1E;
        margin-right: 18px;
        flex-shrink: 0;
        transition: color 0.3s, transform 0.3s;
    }

    .rgu-search-box-wrapper:focus-within .input-search-icon {
        color: #ffffff;
        transform: scale(1.1) rotate(15deg);
    }

    #rgu-search-input {
        border: none;
        outline: none;
        background: transparent;
        font-family: inherit;
        font-size: 20px;
        width: 100%;
        color: #ffffff;
        font-weight: 600;
        transition: all 0.3s;
    }

    #rgu-search-input::placeholder {
        color: rgba(255, 255, 255, 0.65);
        font-weight: 400;
    }

    /* Close Button */
    .rgu-close-btn {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        cursor: pointer;
        width: 36px;
        height: 36px;
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        margin-left: 12px;
        flex-shrink: 0;
    }

    .rgu-close-btn:hover {
        background: #FF9A1E;
        color: #13223b;
        transform: scale(1.1) rotate(90deg);
    }

    /* Search Results List */
    .rgu-search-results-list {
        overflow-y: auto;
        flex-grow: 1;
        padding: 20px 24px;
        background: #f8fafc;
        max-height: 52vh;
    }

    .rgu-search-state-info {
        padding: 50px 30px;
        text-align: center;
        color: #24477f;
        font-size: 16px;
        font-weight: 500;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.6;
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    @keyframes shakeIcon {

        0%,
        100% {
            transform: translateX(0);
        }

        20%,
        60% {
            transform: translateX(-4px);
        }

        40%,
        80% {
            transform: translateX(4px);
        }
    }

    .rgu-search-result-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        margin-bottom: 12px;
        background: white;
        border: 1px solid rgba(19, 34, 59, 0.04);
        border-radius: 12px;
        cursor: pointer;
        text-decoration: none !important;
        box-shadow: 0 4px 12px rgba(19, 34, 59, 0.02);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
        animation: slideUpFade 0.4s cubic-bezier(0.16, 1, 0.3, 1) both;
    }

    @keyframes slideUpFade {
        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .rgu-search-result-item:hover,
    .rgu-search-result-item.highlighted {
        background: white;
        border-color: transparent;
        transform: translateY(-3px) scale(1.01);
        box-shadow: 0 10px 24px rgba(19, 34, 59, 0.08),
            0 0 15px rgba(255, 154, 30, 0.1);
    }

    .rgu-search-result-item::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(to bottom, #24477f, #FF9A1E);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .rgu-search-result-item:hover::after,
    .rgu-search-result-item.highlighted::after {
        opacity: 1;
    }

    .result-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .result-title {
        font-weight: 650;
        font-size: 17px;
        color: #13223b;
    }

    .result-url {
        font-size: 12px;
        color: #8c9ba5;
    }

    .result-category {
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
        padding: 5px 12px;
        border-radius: 30px;
        flex-shrink: 0;
        letter-spacing: 0.8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
    }

    /* Badges colors */
    .category-page {
        background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
        color: #334155;
        border: 1px solid #94a3b8;
    }

    .category-department {
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        color: #991b1b;
        border: 1px solid #f87171;
    }

    .category-faculty {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        color: #92400e;
        border: 1px solid #fbbf24;
    }

    .category-school {
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        color: #1e40af;
        border: 1px solid #60a5fa;
    }

    .category-admission {
        background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);
        color: #166534;
        border: 1px solid #4ade80;
    }

    /* Footer */
    .rgu-search-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 28px;
        border-top: 1px solid rgba(19, 34, 59, 0.08);
        background: rgba(255, 255, 255, 0.7);
        font-size: 12px;
        color: #13223b;
        font-weight: 500;
    }

    .rgu-search-footer kbd {
        background: linear-gradient(to bottom, #ffffff, #f1f5f9);
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        padding: 3px 8px;
        margin: 0 3px;
        font-family: monospace;
        font-weight: bold;
        color: #334155;
        box-shadow: 0 2px 0 #94a3b8;
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
    document.addEventListener("DOMContentLoaded", function() {
        const searchBtn = document.getElementById("rgu-global-search-btn");
        const searchModal = document.getElementById("rgu-search-modal");
        const closeBtn = document.getElementById("rgu-close-search-btn");
        const searchInput = document.getElementById("rgu-search-input");
        const resultsContainer = document.getElementById("rgu-search-results");

        let searchData = [];
        let activeIndex = -1;

        // --- Custom Search List Management ---
        // Add any URLs here that you want to EXCLUSIVELY show in search results.
        // If you add URLs to this array, ONLY these URLs will be searchable.
        // If you leave it empty, all pages (except excluded ones) will be searchable.
        const allowedUrls = [
            'https://admissions.rgu.ac/',
            '/nirf',
            '/jobs-vacancies',
            '/preface',
            '/vision-mission',
            '/footprints',
            '/360-tour',
            '/leadership',
            '/advisory-leadership',
            '/deans',
            '/chief-vigilance-officer',
            '/governing-body',
            '/board-of-management',
            '/academic-council',
            '/internal-complaints-committee',
            '/university-research-committee',
            '/institutional-ethical-committee',
            '/nss-advisory-committee',
            '/anti-ragging',
            '/proctorial',
            '/statutes-ordinance-policies',
            '/organogram-planning',
            '/self-disclosure',
            '/recognition-accreditation',
            '/association-tieup',
            '/award',
            '/top-recruiters',
            '/facilities',
            '/social-outreach',
            '/diversity-inclusion',
            '/diversechoices',
            '/strategic-location',
            '/success',
            '/schools-rgu',
            '/phd',
            '/multi-disciplinary',
            '/cisr',
            '/net-set-gate-coaching',
            '/workshops-guest-lectures',
            '/teaching-practice',
            '/human-resource-development-centre',
            '/library-Resources',
            '/innovation',
            '/laboratories',
            '/achievements',
            '/academic-calendar',
            '/faq',
            '/admission-programs-fees-structure',
            '/how-to-apply',
            '/general-elective',
            '/schemes-differently-abled',
            '/programs',
            '/scholarship&funding',
            '/deans-listers',
            '/international-faq',
            '/international-admission-guidelines',
            '/frro-process',
            '/how-to-apply-international',
            '/international-student-helpline',
            '/campus-job',
            '/pre-arrival',
            '/scholarships-international',
            '/visa-information',
            '/why-india',
            '/banking-services',
            '/department-store',
            '/hangout',
            '/medical-facility',
            '/laundry',
            '/salon',
            '/stationary-store',
            '/guest-house',
            '/clubs',
            '/student-affairs',
            '/student-gallery',
            '/happy-happening',
            '/royal-fests',
            '/infrastructure',
            '/hostel-life',
            '/games&sports',
            '/national-cadet-corps',
            '/national-service-scheme',
            '/placements-introduction',
            '/placements-activities',
            '/placements-facilities',
            '/placements-process',
            '/placements-events',
            '/placement-contacts',
            '/convocation-fifth',
            '/convocation-fourth',
            '/convocation-third',
            '/convocation-second',
            '/convocation-first',
            '/honoris-causa',
            '/research-devlopment',
            '/examinations',
            '/bhupen-hazarika-CFC',

            '/ias-courses',
            '/faculty-csp',
            '/royal-school-of-agriculture',
            '/faculty-agriculture',
            '/department-agriculture',
            '/department-agriculture',
            '/department-architecture',
            '/faculty-architecture',
            '/royal-s-school-of-applied-pure-science',
            '/faculty-applied-purescience',
            '/department-physics',
            '/department-chemistry',
            '/department-mathematics',
            '/department-business',
            '/faculty-business',
            '/department-psychology',
            '/faculty-allied-sciences',
            '/royal-s-school-of-bio-science',
            '/faculty-bio-sciences',
            '/department-biotechnology',
            '/department-microbiology',
            '/department-food-technology',
            '/department-commerce',
            '/faculty-commerce',
            '/department-communications-media',
            '/rscom-faculty',
            '/royal-s-school-of-design',
            '/faculty-design',
            '/department-product-design',
            '/department-communication-design',
            '/department-interior-design',
            '/department-graphic-design',
            '/department-fashion-design',
            '/royal-s-school-of-enviroment-science',
            '/faculty-environmental-earth',
            '/department-geography-geoinformatics',
            '/department-environmental-sciences',
            '/department-geology',
            '/royal-s-school-of-engineering-technology',
            '/faculty-engineeringtechnology',
            '/department-cse',
            '/department-mechanical-engineering',
            '/department-civil-engineering',
            '/department-fine-arts',
            '/faculty-finearts',
            '/faculty-fashion-design',
            '/royal-s-school-of-humanities',
            '/faculty-humanities-social',
            '/department-economics',
            '/department-history',
            '/department-public-administration',
            '/department-sociology',
            '/department-social-work',
            '/department-IKS',
            '/department-hotel-management',
            '/faculty-hotel-management',
            '/department-information-technology',
            '/faculty-information-technology',
            '/department-law',
            '/faculty-law-administration',
            '/royal-s-school-of-life-science',
            '/faculty-lifesciences',
            '/department-botany',
            '/department-zoology',
            '/department-forensic-sciences',
            '/department-forestry',
            '/royal-school-of-languages',
            '/faculty-languages',
            '/department-library-information',
            '/faculty-librarysciences',
            '/royal-s-school-of-medical-allied-science',
            '/faculty-medical&allidesciences',
            '/department-physiotherapy',
            '/department-optometry',
            '/department-operationtheatre',
            '/department-medical-lab',
            '/deptment-radiography',
            '/department-nursing',
            '/faculty-nursing',
            '/department-pharmacy',
            '/faculty-pharmacy',
            '/department-physical-education-and-sports',
            '/faculty-physical-education-and-sports',
            '/department-pharmaceutical-science',
            '/department-travel',
            '/faculty-travel-tourism',
            '/indian-knowledge-system-cell-about',
            '/indian-knowledge-system-cell-composition',
            '/indian-knowledge-system-cell-events',
            '/indian-knowledge-system-cell-syllabus'
        ];

        // Add any URLs here that you want to EXCLUDE/HIDE from search results when allowedUrls is empty
        const excludedUrls = [
            '/test',
            '/test1',
            '/bhupen-hazarika-songs',
            '/bhupen-hazarika-videos',
            '/index-media',
            '/swayam',
            '/university-research-committee',
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
                // Filter routes based on allowed or excluded lists
                let filteredData = data;
                if (allowedUrls.length > 0) {
                    filteredData = data.filter(item => allowedUrls.includes(item.url));
                } else {
                    filteredData = data.filter(item => !excludedUrls.includes(item.url));
                }

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
                    resultsContainer.innerHTML =
                        `<div class="rgu-search-state-info">
                            <i class="bi bi-search" style="font-size: 2.2rem; color: #FF9A1E; display: block; margin-bottom: 12px; animation: floatIcon 3s infinite ease-in-out;"></i>
                            <span style="font-size: 16px; color: #13223b; font-weight: 600;">Search Royal Global University</span>
                            <span style="font-size: 13px; color: #8c9ba5; font-weight: 400; margin-top: 4px;">Find pages, admissions, faculties, or departments</span>
                        </div>`;
                }
                activeIndex = -1;
            }, 300);
            document.body.style.overflow = ""; // Re-enable scroll
        }

        // Toggle Modal keyboard shortcut: Alt + K
        window.addEventListener("keydown", function(e) {
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
                    item.scrollIntoView({
                        block: "nearest"
                    });
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
            searchInput.addEventListener("input", function() {
                const query = searchInput.value.toLowerCase().trim();
                activeIndex = -1;

                if (query === "") {
                    resultsContainer.innerHTML =
                        `<div class="rgu-search-state-info">
                            <i class="bi bi-search" style="font-size: 2.2rem; color: #FF9A1E; display: block; margin-bottom: 12px; animation: floatIcon 3s infinite ease-in-out;"></i>
                            <span style="font-size: 16px; color: #13223b; font-weight: 600;">Search Royal Global University</span>
                            <span style="font-size: 13px; color: #8c9ba5; font-weight: 400; margin-top: 4px;">Find pages, admissions, faculties, or departments</span>
                        </div>`;
                    return;
                }

                // Check if the user is typing or pasting a URL path/full URL
                if (query.startsWith('/') || query.startsWith('http://') || query.startsWith(
                        'https://')) {
                    let path = query;
                    if (query.startsWith('http')) {
                        try {
                            const urlObj = new URL(query);
                            path = urlObj.pathname;
                        } catch (e) {
                            path = query.substring(query.indexOf('/', 8));
                        }
                    }
                    const normalizedPath = '/' + path.replace(/^\/+|\/+$/g, '');

                    const exactMatchExists = searchData.some(item => {
                        const itemUrlNormalized = '/' + item.url.replace(/^\/+|\/+$/g, '');
                        return itemUrlNormalized === normalizedPath;
                    });

                    if (!exactMatchExists) {
                        resultsContainer.innerHTML =
                            `<div class="rgu-search-state-info error-state">
                                <i class="bi bi-exclamation-circle" style="font-size: 2.4rem; color: #dc3545; display: block; margin-bottom: 12px; animation: shakeIcon 0.6s ease-in-out;"></i>
                                <span style="color: #dc3545; font-size: 18px; font-weight: 700;">Unable to find page</span>
                                <span style="font-size: 13px; color: #8c9ba5; font-weight: 400; margin-top: 4px;">Please check the spelling or type a different keyword</span>
                            </div>`;
                        return;
                    }
                }

                // Fuzzy filter matches in title or URL
                const matches = searchData.filter(item => {
                    return item.title.toLowerCase().includes(query) || item.url.toLowerCase()
                        .includes(query);
                });

                // Cap at 15 results for performance
                const displayedMatches = matches.slice(0, 15);

                if (displayedMatches.length === 0) {
                    resultsContainer.innerHTML =
                        `<div class="rgu-search-state-info error-state">
                            <i class="bi bi-exclamation-circle" style="font-size: 2.4rem; color: #dc3545; display: block; margin-bottom: 12px; animation: shakeIcon 0.6s ease-in-out;"></i>
                            <span style="color: #dc3545; font-size: 18px; font-weight: 700;">Unable to find page</span>
                            <span style="font-size: 13px; color: #8c9ba5; font-weight: 400; margin-top: 4px;">Please check the spelling or type a different keyword</span>
                        </div>`;
                    return;
                }

                resultsContainer.innerHTML = "";
                displayedMatches.forEach((item, idx) => {
                    const itemElement = document.createElement("a");
                    itemElement.href = item.url;
                    itemElement.className = "rgu-search-result-item";
                    itemElement.style.animationDelay = `${idx * 0.03}s`;

                    // Highlight matching letters
                    const highlightText = (text, q) => {
                        const regex = new RegExp(
                            `(${q.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&')})`, "gi");
                        return text.replace(regex,
                            "<mark style='background:#ffe082;color:#000;padding:2px 0;border-radius:2px;'>$1</mark>"
                        );
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
                    itemElement.addEventListener("click", function(e) {
                        e.preventDefault();
                        window.location.href = item.url;
                    });

                    resultsContainer.appendChild(itemElement);
                });
            });
            // Bind to header search buttons
            const headerSearchBtn = document.getElementById("searchToggleBtn");
            if (headerSearchBtn) {
                headerSearchBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    openModal();
                });
            }

            // Support mobile header search button (calls openSearch())
            window.openSearch = function() {
                openModal();
            };
        }
    });
</script>

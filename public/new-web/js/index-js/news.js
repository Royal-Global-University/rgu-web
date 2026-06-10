document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, June 10, 2026",
            title: "NEC Secretary Inaugurates Agricultural Sciences Laboratories at RGU",
            desc: "In a significant boost to agricultural education and research in the region, Sri S. K. Bhalla, Secretary, North Eastern Council (NEC), Government of India, Ministry of Development of North Eastern Region (DoNER), inaugurated the newly established Laboratories of Agricultural Sciences at The Assam Royal Global University (RGU)",
            img: "/mobile-assets/media-corner/2026/jun/2.jpeg",
            link: "/nec-secretary-inaugurates-agricultural-sciences-laboratories-at-royal-global-university",
        },
        {
            date: "Guwahati, June 8, 2026",
            title: "Royal Global University Inks Pact with Sashastra Seema Bal in New Delhi",
            desc: "In a significant step towards strengthening its commitment to nation-building through education, The Assam Royal Global University (RGU) today signed a landmark Memorandum of Understanding (MoU) with the Sashastra Seema Bal (SSB) at the Director General Headquarters, East Block-V, R.K. Puram, New Delhi.",
            img: "/mobile-assets/ads/5-16/MoU.jpeg",
            link: "/royal-global-university-inks-pact-with-sashastra-seema-bal-in-new-delhi",
        },
        {
            date: "Guwahati, June 5, 2026",
            title: "Royal Global University observes World Environment Day",
            desc: "The Assam Royal Global University (RGU) observed World Environment Day with great enthusiasm and commitment through a series of awareness and community engagement activities. The programmes witnessed participation from more than 200 NCC cadets from different colleges of the city along with environmental experts, academicians and social activists. On the other hand, the RGU NSS Cell also observed the day with a series of meaningful activities including a tree plantation drive in neighbouring LP schools and a “Save Bharalu Dialogue” focusing on environmental awareness and social transformation.",
            img: "/mobile-assets/media-corner/2026/jun/1/1.jpeg",
            link: "/royal-global-university-observes-world-environment-day",
        },
        {
            date: "Guwahati, June 4, 2026",
            title: "RGU Pharmacy Students Shine at Pharma Anveshan 2026, to Represent Assam at National Level",
            desc: "Two M. Pharm (Pharmacognosy Branch) students of the Royal School of Pharmacy, The Assam Royal Global University (RGU), brought laurels to the university by securing the State-Level 2nd Winner position at Pharma Anveshan 2026, Northeast Zone, held at Assam Down Town University recently. The achiever students are Ananya Saha and Tado Puning.",
            img: "/mobile-assets/media-corner/2026/jun/pra-1.jpeg",
            link: "/rgu-pharmacy-students-shine-at-pharma-anveshan-2026-to-represent-assam-at-national-level",
        },
        {
            date: "Guwahati, May 25, 2026",
            title: "Royal Global University & Tea Board of India jointly celebrates International Tea Day",
            desc: "The Assam Royal Global University, in collaboration with the Tea Board of India, has recently celebrated International Tea Day 2026 with great enthusiasm and participation from students, faculty members, and distinguished guests. The celebration was conducted in accordance with this year’s International Tea Day theme, “Sustaining Tea, Supporting Communities,”",
            img: "/mobile-assets/media-corner/2026/26/2.jpeg",
            link: "/royal-global-university-tea-board-of-india-jointly-celebrates-international-tea-day",
        },
        {
            date: "Guwahati, May 22, 2026",
            title: "RGU hosts 12th Edition of Kala Samvad in collaboration with Sangeet Natak Akademi",
            desc: "The Sangeet Natak Akademi, Ministry of Culture, Govt of India New Delhi in association with The Department of English, Royal School of Languages has organied the 12th edition of Kala Samvad, a distinguished lecture-cum-discussion series here today at Jyoti Mancha at the university campus. The programme has been envisioned to commemorate the inclusion of the Bhagavad Gita and the Natyashastra in UNESCO’s Memory of the World Register in April 2025.",
            img: "/mobile-assets/media-corner/2026/22/2.jpeg",
            link: "/rgu-hosts-12th-edition-of-kala-samvad-in-collaboration-with-sangeet-natak-akademi",
        },
        {
            date: "Guwahati, May 19, 2026",
            title: "RGU Inaugurates Institution’s Innovation Council & Entrepreneurship Cell to Foster Innovation and Start-up Culture",
            desc: "The Assam Royal Global University (RGU) today inaugurated its Institution’s Innovation Council (IIC) and Entrepreneurship Cell in a significant step towards promoting innovation, entrepreneurship, and industry-academia collaboration among students and young innovators. The programme was organised by the Entrepreneurship Cell of RGU.",
            img: "/mobile-assets/media-corner/2026/15/1.jpeg",
            link: "/rgu-inaugurates-institutions-innovation-council-entrepreneurship-cell-to-foster-innovation-and-start-up-culture",
        },
        {
            date: "Guwahati, May 17, 2026",
            title: "Royal Global University Launches ‘River Talks—Sabda Kalpa’: A Monthly Literary Series",
            desc: "The Assam Royal Global University (RGU) has inaugurated ‘River Talks—Sabda Kalpa’, a new monthly literary event dedicated to fostering a vibrant culture of literature, language, and the arts. The 1st Edition, themed “Poetry of the Soul,” was held on 15 May at the University campus in the presence of RGU Chancellor Dr. A.K. Pansari and Vice Chancellor, Prof. A.K. Buragohain.",
            img: "/mobile-assets/media-corner/2026/18/2.jpeg",
            link: "/royal-global-university-launches-river-talks-sabda-kalpa-a-monthly-literary-series",
        },
        {
            date: "Guwahati, May 14, 2026",
            title: "Meghalaya Sports Minister Shylla inaugurates Zenith & Pickleball Court at RGU",
            desc: "Shri Wailadmiki Shylla, Minister of Sports & Youth Affairs, Government of Meghalaya, visited The Assam Royal Global University (RGU) today and took part in a series of programmes aimed at promoting student engagement, sports culture, and environmental awareness on the university campus.",
            img: "/mobile-assets/media-corner/2026/14/2.jpeg",
            link: "/meghalaya-sports-minister-shylla-inaugurates-zenith-pickleball-court-at-rgu",
        },
        {
            date: "Guwahati, May 13, 2026",
            title: "Indian Museum Kolkata Launches 7-day Exhibition at Royal Global University",
            desc: "Bharat – Contours of Continuity —a 7-day-long special museum exhibition has been inaugurated today at the Assam Royal Global University (RGU) celebrating the International Museum Day 2026 and commemorating 150 years of Vande Mataram. This significant programme has been hosted by RGU in collaboration with the Indian Museum, Kolkata under the Ministry of Culture, Government of India.",
            img: "/mobile-assets/media-corner/2026/12/3.jpg",
            link: "/indian-museum-kolkata-launches-7-day-exhibition-at-royal-global-university",
        },
        {
            date: "Guwahati, May 11, 2026",
            title: "RGU joins hands with Indian Museum Kolkata to hold 7-day-long Exhibition& Workshops",
            desc: "The Assam Royal Global University is set to host a landmark cultural and academic initiative in collaboration with the Indian Museum, Kolkata, under the Ministry of Culture, Government of India. The programme is being organised in celebration of International Museum Day 2026 and the commemoration of 150 Years of Vande Mataram. Significantly, this will be the first time that the Indian Museum is curating such an exhibition in Northeast India, making it a historic cultural occasion for the region.",
            img: "/mobile-assets/RGU%20joins.jpeg",
            link: "/rgu-joins-hands-with-indian-museum-kolkata-to-hold-7-day-long-exhibition-workshops",
        },
        {
            date: "Guwahati, May 8, 2026",
            title: "Health Screening Camp conducted at Chakardo Ayushman Arogya Mandir",
            desc: "A Comprehensive Health Screening Camp has been successfully organized today at Chakardo Ayushman Arogya Mandir near Deepor Beel in Pamohi here by the Royal School of Medical and Allied Sciences (RSMAS) and NSS Unit of The Assam Royal Global University (RGU) in collaboration with the Office of the Joint Director of Health Services, Kamrup (Amingaon) and Ayurvedic Medical Organisation, Assam.",
            img: "/mobile-assets/media-corner/2026/11/2.jpeg",
            link: "/health-screening-camp-conducted-at-chakardo-ayushman-arogya-mandir",
        },
        {
            date: "Guwahati, May 5, 2026",
            title: "Capacity Building Session on Internship Engagement and Career Development",
            desc: "An interactive session on “Capacity Building for Internship Engagement and Career Development” was successfully organized on 5 May 2026 by the Royal School of Business, Royal School of Engineering & Technology, and Royal School of Medical & Allied Sciences in association with the Internal Quality Assurance Cell (IQAC) of The Assam Royal Global University (RGU).",
            img: "/mobile-assets/media-corner/2026/may/new/1.jpg",
            link: "/capacity-building-session-on-internship-engagement-and-career-development",
        },
        {
            date: "Guwahati, May 4, 2026",
            title: "Royal Global University Faculty Honoured with Best Scientist Award",
            desc: "Jebin Sultana, Assistant Professor and Coordinator in the Department of Food Science and Nutrition (Nutrition & Dietetics) at The Assam Royal Global University (RGU), has been conferred the prestigious Best Scientist Award in Food and Nutrition – 2026 at the 13th International Conference on Frontiers in Science and Technology for Sustainable Agricultural and Environmental Development (FSTSAED-2026).",
            img: "/mobile-assets/media-corner/2026/may/1.jpeg",
            link: "/royal-global-university-faculty-honoured-with-best-scientist-award",
        },

        {
            date: "Guwahati, May 5, 2026",
            title: "Training on Forest Ecosystem Services held at RGU",
            desc: "The Department of Forestry at The Assam Royal Global University has recently organized a Training Program on Quantification of Forest Ecosystem Services (FES), integrating field-based learning with hands-on exposure for students.",
            img: "/mobile-assets/media-corner/2026/may/5-may.jpg",
            link: "/training-on-forest-ecosystem-services-held-at-rgu",
        },
    ];

    // ================= 2. DOM ELEMENTS =================
    const cardsContainer = document.getElementById("newsCardsContainer");
    const dynamicContent = document.getElementById("dynamicContentWrapper");
    const newsTitle = document.getElementById("newsTitle");
    const newsDate = document.getElementById("newsDate");
    const newsDesc = document.getElementById("newsDesc");
    const newsImage = document.getElementById("newsImage");
    const newsLink = document.getElementById("newsLink");

    // ================= 3. RENDER CARDS & FUNCTIONALITY =================

    // Function to update the featured section with animations
    const updateFeaturedNews = (data) => {
        dynamicContent.classList.add("fading-out");
        newsImage.classList.add("img-fading-out");

        setTimeout(() => {
            newsTitle.textContent = data.title;
            newsDate.textContent = data.date;
            newsDesc.textContent = data.desc;
            newsImage.src = data.img;
            newsLink.href = data.link;

            dynamicContent.classList.remove("fading-out");
            newsImage.classList.remove("img-fading-out");
        }, 300);
    };

    // Render Cards Dynamically
    newsData.forEach((item, index) => {
        // Create the anchor element
        const card = document.createElement("a");
        card.href = item.link;
        card.className = `rgu-news-card ${index === 0 ? "active" : ""}`; // Set first item active

        // Insert inner HTML
        card.innerHTML = `
                <div class="rgu-news-card-date">${item.date}</div>
                <div class="rgu-news-card-title">${item.title}</div>
            `;

        // Add click event to update featured news
        card.addEventListener("click", function (e) {
            e.preventDefault();
            if (this.classList.contains("active")) return;

            // Remove 'active' class from all siblings
            const allCards = cardsContainer.querySelectorAll(".rgu-news-card");
            allCards.forEach(c => c.classList.remove("active"));

            // Add 'active' class to clicked card
            this.classList.add("active");

            // Update featured view using array index
            updateFeaturedNews(newsData[index]);
        });

        // Append to DOM
        cardsContainer.appendChild(card);
    });

    // Initialize the featured news with the first item on page load
    if (newsData.length > 0) {
        updateFeaturedNews(newsData[0]);
    }

    // ================= 4. SLIDER CONTROLS =================
    const newsSlider = document.querySelector(".rgu-news-cards");

    document.querySelector(".rgu-news-next")?.addEventListener('click', () => {
        newsSlider.scrollBy({ left: 322, behavior: "smooth" });
    });

    document.querySelector(".rgu-news-prev")?.addEventListener('click', () => {
        newsSlider.scrollBy({ left: -322, behavior: "smooth" });
    });
});

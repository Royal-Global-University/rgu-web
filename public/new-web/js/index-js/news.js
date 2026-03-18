document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, March 14, 2026",
            title: "Padma Bhushan & creator of Mohan Veena mesmerises audience at RGU SMVA | 4-day-long SPIC MACAY Virasat Anubhav Series concludes at RGU",
            desc: "The Assam Royal Global University (RGU) successfully hosted the SPIC MACAY Virasat Anubhav (SMVA) Series 2026, a four-day cultural immersion programme from March 10 to 13, aimed at promoting the rich traditions of Indian classical arts among young learners. A total of 93 RGU students participated in the technical workshops conducted during the series.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/163262.jpeg",
            link: "https://rgu.ac/padma-bhushan-and-creator-of-mohan-veena-mesmerises-audience-at-rgu-smva"
        },
        {
            date: "Guwahati, March 10, 2026",
            title: "Guwahati emerging as a key centre linking cities across Southeast Asia: Secretary, Act East Policy Affairs Department",
            desc: "The Assam Royal Global University (RGU) has held a Quiz and a Debate Competition on “Youth Interaction on Act East Policy and Assam’s Emerging Role” here today. The event was organised by the Department of Economics and the Internal Quality Assurance Cell (IQAC), RGU, in collaboration with the Act East Policy Affairs Department, Government of Assam.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/113261.jpeg",
            link: "https://rgu.ac/guwahati-emerging-as-a-key-centre-linking-cities-across-southeast-asia-secretary-act-east-policy-affairs-department"
        },
        {
            date: "Guwahati, March 6, 2026",
            title: "Rhythm of the Looms: RGU hosts mega Fashion, Handloom & Textiles Conclave celebrating women artisans and designers of NE",
            desc: "The Royal School of Fashion Design & Technology of The Assam Royal Global University (RGU) has organised “Rhythm of the Looms” –a Fashion Design, Handloom & Textiles Conclave here today celebrating the remarkable contributions of women across Northeast India. The Conclave was graced by Hara Kanta Baro.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/93261.jpeg",
            link: "https://rgu.ac/rhythm-of-the-looms-rgu-hosts-mega-fashion-handloom-textiles-conclave-celebrating-women-artisans-and-designers-of-ne"
        },
        {
            date: "Guwahati, February 27, 2026",
            title: "Nature Index 2025 Ranking: Royal Global University placed among the top 100 institutions in India",
            desc: "The Department of Physics at The Assam Royal Global University (RGU) has been ranked at an unprecedented 53rd position in Physical Sciences by the prestigious Nature Index-2025, surpassing many premier institutions of the nation in this highly competitive global research platform. At the same time, the Nature Index database, curated by Springer Nature, has ranked RGU at an impressive 89th position in terms of overall research outputs.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/2326.jpeg",
            link: "#"
        },
        {
            date: "Guwahati, February 26, 2026",
            title: "RGU gave me confidence: APSC Topper Nihar Deka tells students during interaction",
            desc: "“Have the courage to pursue your goals even after failure. RGU gave me the confidence, the sense of discipline and consistency to believe on myself and achieve my goals”, said Nihar Ranjan Deka, who secured 1st Rank in the recently declared results of the Assam Public Service Commission Combined Competitive Examination (APSC CCE) 2024.",
            img: "https://rgu.ac/mobile-assets/media-corner/news80/1001.jpeg",
            link: "https://rgu.ac/rgu-gave-me-confidence-apsc-topper-nihar-deka-tells-students-during-interaction"
        },
        {
            date: "Guwahati, February 25, 2026",
            title: "RGU Honours Dr Bhupen Hazarika with Book Release and Documentary Screening",
            desc: "Celebrating the life, legacy, and timeless creativity of the Bard of the Brahmaputra, Dr Bhupen Hazarika Centre for Creativity at The Assam Royal Global University (RGU) today released the book “BHUPEN HAZARIKA: Twenty Songs and Seven Portraits” as part of the Centenary Celebrations of the legendary artist. The event also featured a panel discussion and the screening of a 65-minute biographical documentary, “Bhupen Da Uncut”, showcasing rare, digitised footage of Dr Bhupen Hazarika filmed in the UK in 1999.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/102.jpeg",
            link: "https://rgu.ac/bhupen-hazarika-twenty-songs-and-seven-portraits-released-at-royal-global-university"
        },
        {
            date: "Guwahati, February 24, 2026",
            title: "Former ISRO Chief AS Kiran Kumar addresses Public Talk at Royal Global University",
            desc: "The Department of Physics, The Assam Royal Global University (RGU), today organized an inspiring Public Talk on “Vision for Indian Space Saga” by A. S. Kiran Kumar, Former Chairman of the Indian Space Research Organisation (ISRO), Member of the Space Commission, and Chairman of the Apex Science Board, ISRO. The event witnessed enthusiastic participation from students, faculty members, researchers, and distinguished guests.",
            img: "https://rgu.ac/mobile-assets/media-corner/101.jpeg",
            link: "https://rgu.ac/former-isro-chief-as-kiran-kumar-addresses-public-talk-at-royal-global-university"
        }
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

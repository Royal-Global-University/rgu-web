document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, March 30, 2026",
            title: "RGU organizes workshop on Putala Nach – The Puppetry of Assam",
            desc: "On the occasion of World Theatre Day, a two-day workshop on Putala Nách – The Puppetry of Assam was organised by the Centre for Indian Knowledge Systems in association with the Royal School of Fine Arts and IQAC",
            img: "/mobile-assets/media-corner/news83/1.jpeg",
            link: "/rgu-organizes-workshop-on-putala-nach-the-puppetry-of-assam",
        },
        {
            date: "Guwahati, March 23, 2026",
            title: "Royal Global University to Introduce UG and PG Programmes in Assamese",
            desc: "In a significant step towards promoting higher learning, research, and scholarly engagement in Assamese language and literature, The Assam Royal Global University (RGU) has decided to introduce modern Undergraduate and Postgraduate programmes in Assamese from the upcoming academic session.",
            img: "https://rgu.ac/mobile-assets/rgu-blog/blog2.jpeg",
            link: "https://rgu.ac/royal-global-university-to-introduce-ug-and-pg-programmes-in-assamese",
        },
        {
            date: "Guwahati, March 19, 2026",
            title: "Discourse on Concept of Time at RGU Marks Hindu Lunar New Year",
            desc: "The Assam Royal Global University (RGU) celebrated the beginning of the Hindu Lunar New Year today with a thought-provoking discourse on “The Concept of Time,” beautifully highlighting the harmony between science and culture while emphasising India’s rich astronomical heritage.",
            img: "https://rgu.ac/mobile-assets/media-corner/news83/19326.jpeg",
            link: "https://rgu.ac/discourse-on-concept-of-time-at-rgu-marks-hindu-lunar-new-year",
        },
        {
            date: "Guwahati, March 17, 2026",
            title: "Royal Global University Connects Talent with Industry at Mega Placement Day 2026",
            desc: "A mega placement drive has been successfully organised at the campus of the Assam Royal Global University (RGU) today that witnessed the participation of 64 leading companies and more than 132 industry professionals from diverse sectors.",
            img: "https://rgu.ac/mobile-assets/media-corner/news83/183262.jpeg",
            link: "https://rgu.ac/royal-global-university-connects-talent-with-industry-at-mega-placement-day-2026",
        },
        {
            date: "Guwahati, March 16, 2026",
            title: "156 Students of RGU Awarded Scholarship for Academic Excellence",
            desc: "Reinforcing its commitment to nurturing academic excellence and recognising meritorious students, The Assam Royal Global University (RGU) organised a Monthly Scholarship Award Ceremony ...",
            img: "https://rgu.ac/mobile-assets/media-corner/news83/173262.jpeg",
            link: "https://rgu.ac/156-students-of-rgu-awarded-scholarship-for-academic-excellence",
        },
        {
            date: "Guwahati, March 14, 2026",
            title: "Padma Bhushan & creator of Mohan Veena mesmerises audience at RGU SMVA | 4-day-long SPIC MACAY Virasat Anubhav Series concludes at RGU",
            desc: "The Assam Royal Global University (RGU) successfully hosted the SPIC MACAY Virasat Anubhav (SMVA) Series 2026, a four-day cultural immersion programme from March 10 to 13, aimed at promoting the rich traditions of Indian classical arts among young learners. A total of 93 RGU students participated in the technical workshops conducted during the series.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/163262.jpeg",
            link: "https://rgu.ac/padma-bhushan-and-creator-of-mohan-veena-mesmerises-audience-at-rgu-smva",
        },
        {
            date: "Guwahati, March 10, 2026",
            title: "Guwahati emerging as a key centre linking cities across Southeast Asia: Secretary, Act East Policy Affairs Department",
            desc: "The Assam Royal Global University (RGU) has held a Quiz and a Debate Competition on “Youth Interaction on Act East Policy and Assam’s Emerging Role” here today. The event was organised by the Department of Economics and the Internal Quality Assurance Cell (IQAC), RGU, in collaboration with the Act East Policy Affairs Department, Government of Assam.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/113261.jpeg",
            link: "https://rgu.ac/guwahati-emerging-as-a-key-centre-linking-cities-across-southeast-asia-secretary-act-east-policy-affairs-department",
        },
        {
            date: "Guwahati, March 6, 2026",
            title: "Rhythm of the Looms: RGU hosts mega Fashion, Handloom & Textiles Conclave celebrating women artisans and designers of NE",
            desc: "The Royal School of Fashion Design & Technology of The Assam Royal Global University (RGU) has organised “Rhythm of the Looms” –a Fashion Design, Handloom & Textiles Conclave here today celebrating the remarkable contributions of women across Northeast India. The Conclave was graced by Hara Kanta Baro.",
            img: "https://rgu.ac/mobile-assets/media-corner/news82/93261.jpeg",
            link: "https://rgu.ac/rhythm-of-the-looms-rgu-hosts-mega-fashion-handloom-textiles-conclave-celebrating-women-artisans-and-designers-of-ne",
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

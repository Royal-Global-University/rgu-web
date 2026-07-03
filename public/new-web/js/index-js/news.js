document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, July 3, 2026",
            title: "Royal Global University Signs MoU with Assam Police to Expand Educational Opportunities for Police Families",
            desc: "In a significant initiative aimed at supporting the families of police personnel through quality higher education, The Assam Royal Global University (RGU) has signed a Memorandum of Understanding (MoU) with the Assam Police.",
            img: "/mobile-assets/media-corner/2026/assam.png",
            link: "/rgu-signs-moU-with-assam-police",
        },
        {
            date: "Guwahati, June 21, 2026",
            title: "Guwahati Royals unveiled at Assam Premier League launch",
            desc: "Guwahati Royals, a Royal Group initiative, was officially unveiled today as one of the eight participating franchises of the inaugural Assam Premier League during a launch ceremony organised by the Assam Cricket Association at the ACA Stadium in Barsapara.",
            img: "/mobile-assets/media-corner/2026/jun/news10-1.jpeg",
            link: "/guwahati-royals-unveiled-at-assam-premier-league-launch",
        },
        {
            date: "Guwahati, June 18, 2026",
            title: "RGU celebrates the spirit of Jyoti Prasad Agarwala and Bishnu Prasad Rava by launching commemorative volumes",
            desc: "The Dr. Bhupen Hazarika Centre for Creativity of The Assam Royal Global University (RGU) today organized a special literary and cultural programme at Jyoti Mancha to mark the publication and launch of two commemorative volumes titled “Jyoti Prasad Agarwala: Twenty Songs and Seven Portraits” and “Bishnu Prasad Rava: Twenty Songs and Seven Portraits.",
            img: "/mobile-assets/media-corner/2026/jun/181.jpeg",
            link: "/rgu-celebrates-the-spirit-of-jyoti-prasad-agarwala-and-bishnu-prasad-rava-by-launching-commemorative-volumes",
        },
        {
            date: "Guwahati, June 16, 2026",
            title: "Nagaland Police Signs MoU with Royal Global University",
            desc: "The Assam Royal Global University (RGU) signed a Memorandum of Understanding (MoU) with the Nagaland Police today in a significant step towards expanding educational opportunities for the families of police personnel. The agreement was formalised at the Office of the Director General of Police in Kohima in the presence of senior officials from Nagaland Police and RGU.",
            img: "/mobile-assets/ads/5-16/16-1.jpeg",
            link: "/nagaland-police-signs-mou-with-royal-global-university",
        },
        {
            date: "Guwahati, June 12, 2026",
            title: "Sangeet Natak Akademi awardee Bhaskar Jyoti Ojah felicitated by Royal Global University",
            desc: "Dr. Bhupen Hazarika Centre for Creativity of The Assam Royal Global University (RGU) has felicitated noted Sattriya music composer and percussionist Bhaskar Jyoti Ojah at the University campus today on receiving the prestigious Sangeet Natak Akademi Award 2025 for his outstanding contribution to Music Composition in Sattriya Dance.",
            img: "/mobile-assets/media-corner/2026/1211.jpeg",
            link: "/sangeet-natak-akademi-awardee-bhaskar-jyoti-ojah-felicitated-by-royal-global-university",
        },
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

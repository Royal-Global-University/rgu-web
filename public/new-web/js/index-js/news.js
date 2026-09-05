document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, September 3, 2026",
            title: "RGU Concludes Year-Long Birth Centenary Celebrations of Dr. Bhupen Hazarika",
            desc: "The Assam Royal Global University (RGU) brought the year-long celebrations marking the birth centenary of legendary cultural icon Dr. Bhupen Hazarika to a befitting close today with reflection, conversation, poetry and music, celebrating the life, works and enduring legacy of the Bard of the Brahmaputra.",
            img: "/mobile-assets/media-corner/2026/aug/sep/1/front.jpeg",
            link: "/rgu-concludes-year-long-birth-centenary-celebrations-of-dr-bhupen-hazarika",
        },
        {
            date: "Guwahati, August 26, 2026",
            title: "Royal Global University Signs MoU with Star Cement to Develop Carbon Footprint Reduction Framework for Schools",
            desc: "The Assam Royal Global University (RGU) has signed a Memorandum of Understanding (MoU) with the Star Cement Charitable Trust, the voluntary humanitarian trust of Star Cement Limited, marking an important industry–academia collaboration aimed at developing a structured framework and action plan for reducing the carbon footprint of schools.",
            img: "/mobile-assets/media-corner/2026/aug/26-aug/2.jpeg",
            link: "/royal-global-university-signs-mou-with-star-cement-to-develop-carbon-footprint-reduction-framework-for-schools",
        },
        {
            date: "Guwahati, August 20, 2026",
            title: "RGU only private university from NE to get Centre start-up grant for biomedical research for 2026-27",
            desc: "The Assam Royal Global University (RGU) has received a three-year Start-Up Grant for Induction into Biomedical and Health Research under the Human Resource Development (HRD) Scheme of the Department of Health Research, Government of India, for 2026-27, officials said.",
            img: "/mobile-assets/media-corner/2026/aug/20/4.png",
            link: "/rgu-only-private-university-from-ne-to-get-centres-start-up-grant-for-biomedical-research-for-2026-27",
        },
        {
            date: "Guwahati, August 19, 2026",
            title: "IGNCA & Royal Global University Organise Exhibition on Partition Horrors",
            desc: "An exhibition titled “Memory, Loss & Resilience: 14 August 1947”, has been organised by the Indira Gandhi National Centre for the Arts (IGNCA), Regional Centre, Guwahati, in collaboration with the Royal School of Languages, The Assam Royal Global University (RGU). The exhibition is currently underway at the GHI Block of the University, and will continue till 20 August 2026.",
            img: "/mobile-assets/media-corner/2026/aug/20/3.jpeg",
            link: "/ignca-royal-global-university-organise-exhibition-on-partition-horrors",
        },
        {
            date: "Guwahati, August 15, 2026",
            title: "RGU Celebrates 80th Independence Day with Patriotic and Cultural Grandeur",
            desc: "The Assam Royal Global University (RGU) celebrated the 80th Independence Day of India with patriotic fervour and cultural splendour, as the entire campus came alive in the vibrant colours of the Tricolour. The celebrations featured inspiring speeches, soulful music, traditional dance and a colourful cultural presentation, reflecting the spirit of unity in diversity that defines the nation.",
            img: "/mobile-assets/media-corner/2026/aug/15/2.jpeg",
            link: "/rgu-celebrates-80th-independence-day-with-patriotic-and-cultural-grandeur",
        },
        {
            date: "Guwahati, August 14, 2026",
            title: "757 Students Awarded Scholarships by Royal Global University for AY 2026-27",
            desc: "Reinforcing its commitment to promoting higher education and encouraging meritorious students from the Northeast, The Assam Royal Global University (RGU) today organised the Felicitation Ceremony for Scholarship Awardees, honouring more than 700 newly admitted students across various programmes for the Academic Year 2026–27.",
            img: "/mobile-assets/media-corner/2026/aug/new-file/2.jpeg",
            link: "/757-students-awarded-scholarships-by-royal-global-university-for-ay-2026-27",
        },
        {
            date: "Guwahati, August 12, 2026",
            title: "RGU Organises ‘Walk to the Library’ to Promote a Culture of Reading",
            desc: "On the occasion of Librarian’s Day, The Assam Royal University (RGU) organised a special programme titled “Walk to the Library” on Wednesday, August 12, with the objective of inspiring and enthusing the university fraternity to embrace reading as an integral part of academic and personal life.",
            img: "/mobile-assets/media-corner/2026/aug/1file/1.jpeg",
            link: "/rgu-organises-walk-to-the-library-to-promote-a-culture-of-reading",
        },
        {
            date: "Guwahati, August 11, 2026",
            title: "RGU Celebrates International Day of the World’s Indigenous Peoples’",
            desc: "The International Day of the World’s Indigenous Peoples was celebrated by The Assam Royal Global University (RGU) on Tuesday with a vibrant cultural and scholarly programme. The event was organised by the Centre for Indian Knowledge Systems in association with the Internal Quality Assurance Cell of RGU to honour and celebrate the rich indigenous knowledge systems, cultural traditions, artistic expressions and living heritage of the indigenous communities of Assam and Northeast India.",
            img: "/mobile-assets/media-corner/2026/aug/2.jpeg",
            link: "/rgu-celebrates-international-day-of-the-worlds-indigenous-peoples",
        },
        {
            date: "Guwahati, August 4, 2026",
            title: "Royal Global University Launches Annual Lookbook ‘Threads of Tomorrow–2026’",
            desc: "The Royal School of Fashion Design and Technology (RSFT) at The Assam Royal Global University (RGU) on Tuesday launched the second edition of its annual lookbook, Threads of Tomorrow–2026, showcasing the creative work of its graduating batch. The University also inaugurated a new fashion studio, The Design Atelier, during the programme.",
            img: "/mobile-assets/media-corner/2026/aug/f3.jpeg",
            link: "/royal-global-university-launches-annual-lookbook-threads-of-tomorrow-2026",
        },
        {
            date: "Guwahati, July 29, 2026",
            title: "Royal Global University Welcomes New Students with Deeksharambh 2026",
            desc: "The Assam Royal Global University (RGU) today commenced Deeksharambh 2026, its annual Student Induction Programme for newly admitted undergraduate students. The comprehensive 19-day induction programme, designed to familiarise students with the University's academic environment, values, and opportunities, will continue from July 29 to August 16, 2026.",
            img: "/mobile-assets/media-corner/2026/july/d/2.JPG",
            link: "/royal-global-university-welcomes-new-students-with-deeksharambh-2026",
        },
        {
            date: "Guwahati, July 21, 2026",
            title: "RGU Prof. Appointed Chair Prof. of Srimanta Sankardev Chair at Panjab University",
            desc: "Dr. Pradip Jyoti Mahanta, distinguished academic and senior Professor of English at The Assam Royal Global University (RGU), has been appointed Chair Professor of the prestigious Srimanta Sankardev Chair at Panjab University, Chandigarh.",
            img: "/mobile-assets/media-corner/2026/10/Dr. Pradip Jyoti Mahanta.jpeg",
            link: "/rgu-prof-appointed-chair-prof-of-srimanta-sankardev-chair-at-panjab-university",
        },
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

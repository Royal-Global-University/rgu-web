document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
        {
            date: "Guwahati, September 23, 2026",
            title: "High-Level India–Thailand Dialogue held at Royal Global University",
            desc: "Asian Confluence, a Shillong-based think tank, in collaboration with the Department of Political Science and Public Administration of The Assam Royal Global University (RGU), organised a session of the Brahmaputra–Chao Phraya Dialogue at the university campus yesterday, bringing together distinguished policymakers, diplomats, academics and experts from India and Thailand to explore new avenues of engagement between the Northeast and Thailand.",
            img: "/mobile-assets/media-corner/2026/sep/6/3.jpeg",
            link: "/high-level-india-thailand-dialogue-held-at-royal-global-university",
        },
        {
            date: "Guwahati, September 22, 2026",
            title: "Royal Global University Observes ‘Green Day’",
            desc: "The 63rd Birthday of Dr. Ashok Kumar Pansari, Chancellor of The Assam Royal Global University (RGU), was observed today as a day of service, compassion and environmental responsibility, with activities focused on giving back to society and nature rather than conventional celebrations.",
            img: "/mobile-assets/media-corner/2026/sep/5/1.jpeg",
            link: "/royal-global-university-observes-green-day",
        },
        {
            date: "Guwahati, September 21, 2026",
            title: "RGU Celebrates Srimanta Sankardev Janmotsav with Sattriya, Mati Akhora and Bhaona",
            desc: "The Centre for Indian Knowledge Systems of The Assam Royal Global University (RGU), organised a vibrant cultural programme to mark the Janmotsav of Mahapurush Srimanta Sankardev, celebrating Assam’s rich and enduring traditions of Sattriya, Mati Akhora and Bhaona.",
            img: "/mobile-assets/media-corner/2026/sep/4/1.jpeg",
            link: "/rgu-celebrates-srimanta-sankardev-janmotsav-with-sattriya-mati-akhora-and-bhaona",
        },
        {
            date: "Guwahati, September 18, 2026",
            title: "Zubeen Diwas Observed at Royal Global University; DBHCC to Conduct Research on Four Aspects of Zubeen Garg",
            desc: "The Assam Royal Global University (RGU) observed Zubeen Diwas today to honour the enduring presence, music and legacy of legendary artiste Zubeen Garg. The programme commenced with a deeply symbolic gesture as Garima Saikia Garg, wife of Zubeen Garg, planted a Nahor sapling on the university campus.",
            img: "/mobile-assets/media-corner/2026/sep/zubeen/2.jpeg",
            link: "/zubeen-diwas-observed-at-royal-global-university-dbhcc-to-conduct-research-on-four-aspects-of-zubeen-garg",
        },
        {
            date: "Guwahati, September 18, 2026",
            title: "Zubeen Diwas Observed at Royal Global University; DBHCC to Conduct Research on Four Aspects of Zubeen Garg",
            desc: "The Assam Royal Global University (RGU) observed Zubeen Diwas today to honour the enduring presence, music and legacy of legendary artiste Zubeen Garg. The programme commenced with a deeply symbolic gesture as Garima Saikia Garg, wife of Zubeen Garg, planted a Nahor sapling on the university campus.",
            img: "/mobile-assets/media-corner/2026/sep/zubeen/2.jpeg",
            link: "/zubeen-diwas-observed-at-royal-global-university-dbhcc-to-conduct-research-on-four-aspects-of-zubeen-garg",
        },
        {
            date: "Guwahati, September 11, 2026",
            title: "‘Ignite the Observer Within’: Author Kartikeya Vajpai Tells RGU Students",
            desc: "Author, advocate, philosopher, and modern spiritual seeker Kartikeya Vajpai interacted with students and faculty members of The Assam Royal Global University (RGU) at a ‘Meet-the-Author’ programme organised by the Office of Student Affairs on Friday.",
            img: "/mobile-assets/media-corner/2026/sep/2/1.jpeg",
            link: "/ignite-the-observer-within-author-kartikeya-vajpai-tells-rgu-students",
        },
        {
            date: "Guwahati, September 9, 2026",
            title: "‘Ideas Must Be Countered with Ideas to Build a Naxal-Free India’: Aradhita Singh",
            desc: "Ideas often travel faster than arms, and countering Naxalism therefore requires addressing not only its militant dimensions but also the ideology and narratives that sustain it, said Aradhita Singh, Research Fellow at India Foundation, New Delhi, at an interactive session held at The Assam Royal Global University (RGU) today.",
            img: "/mobile-assets/media-corner/2026/sep/1/13.jpeg",
            link: "/ideas-must-be-countered-with-ideas-to-build-a-naxal-free-india-aradhita-singh",
        },
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

document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
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
        {
            date: "Guwahati, May 4, 2026",
            title: "Royal Global University Faculty Honoured with Best Scientist Award",
            desc: "Jebin Sultana, Assistant Professor and Coordinator in the Department of Food Science and Nutrition (Nutrition & Dietetics) at The Assam Royal Global University (RGU), has been conferred the prestigious Best Scientist Award in Food and Nutrition – 2026 at the 13th International Conference on Frontiers in Science and Technology for Sustainable Agricultural and Environmental Development (FSTSAED-2026).",
            img: "/mobile-assets/media-corner/2026/may/1.jpeg",
            link: "/royal-global-university-faculty-honoured-with-best-scientist-award",
        },
        {
            date: "Guwahati, April 30, 2026",
            title: "May Day celebrated at RGU with Cultural Fervour and Gratitude to Support Staff",
            desc: "The Assam Royal Global University (RGU) celebrated International Workers’ Day with great enthusiasm, respect, and cultural vibrancy at the university campus today. The celebration was organised to honour the invaluable contribution, dedication, and tireless service of the support staff members of Royal Global University and Royal Global School, whose relentless efforts ensure the smooth functioning of the institution every day.",
            img: "/mobile-assets/media-corner/2026/may-1/3.jpeg",
            link: "/may-day-celebrated-at-rgu-with-cultural-fervour-and-gratitude-to-support-staff",
        },
        {
            date: "Guwahati, April 30, 2026",
            title: "Create International Brotherhood Through Dance: Padma Bhushan Nrityacharya Jatin Goswami at RGU",
            desc: "The Assam Royal Global University (RGU) celebrated World Dance Day 2026 with “Nritya Arpanam”, a graceful tribute to the spirit of rhythm, expression, and cultural heritage. The vibrant cultural programme was held yesterday at Jyoti Manch, bringing together students, artists, academicians, and dance enthusiasts in a celebration of the universal language of dance.",
            img: "/mobile-assets/media-corner/2026/aprl/4.jpeg",
            link: "/create-international-brotherhood-through-dance-padma-bhushan-nrityacharya-jatin-goswami-at-rgu",
        },
        {
            date: "Guwahati, April 29, 2026",
            title: "Sahitya Akademi & RGU Organise Symposium on Charita Puthi Tradition of Assam",
            desc: "A significant symposium on the rich tradition of Charita literature in Assam was held today at The Assam Royal Global University (RGU), bringing together eminent scholars, academicians, and students for a day of insightful discussions. The event sparked meaningful dialogue and generated keen interest among young learners on the Charita Puthi—biographical narratives of Srimanta Sankardev, Sri Madhavdev, and other prominent figures of the Vaishnavite movement in Assam.",
            img: "/mobile-assets/media-corner/2026/apr/1.jpeg",
            link: "/sahitya-akademi-and-rgu-organise-symposium-on-charita-puthi-tradition-of-assam",
        },
        {
            date: "Guwahati, April 22, 2026",
            title: "RGU observes National Public Relations Day",
            desc: "The Royal School of Communication and Media, in collaboration with the PRSI Guwahati Chapter, observed the National Public Relations Day on 21st April 2026 at the premises of the Assam Royal Global University. The topic of panel discussion was “Public Relations: The Emerging Fifth Pillar of Democracy”, which had expert panellists from diverse field.",
            img: "/mobile-assets/media-corner/2026/22-4.jpeg",
            link: "rgu-observes-national-public-relations-day",
        },
        {
            date: "Guwahati, April 18, 2026",
            title: "MoU with RGU will benefit Wards of Meghalaya Police: DGP Meghalaya",
            desc: "Reinforcing its commitment to nation-building through education, The Assam Royal Global University (RGU) has signed a landmark Memorandum of Understanding (MoU) with the Meghalaya Police. The agreement was formalised yesterday at the Office of the Director General of Police in Shillong in the presence of officials from Meghalaya Police and RGU.",
            img: "/mobile-assets/media-corner/2026/mou/m-1.jpeg",
            link: "/mou-with-rgu-will-benefit-wards-of-meghalaya-police-dgp-meghalaya",
        },
        {
            date: "Guwahati, April 16, 2026",
            title: "Royal Global University Signs Landmark MoU with Indian Navy to Support Wards of Defence Personnel",
            desc: "In a significant stride towards reinforcing its commitment to nation-building through education, The Assam Royal Global University (RGU) has signed a landmark Memorandum of Understanding (MoU) with the Indian Navy on Monday at the office of the Navy Welfare and Wellness Association (NWWA), Chanakyapuri, New Delhi.",
            img: "/mobile-assets/media-corner/2026/mou/MOU-2.jpeg",
            link: "/royal-global-university-signs-landmark-mou-with-indian-navy-to-support-wards-of-defence-personnel",
        },
        {
            date: "Guwahati, April 10, 2026",
            title: "ICMR Awards ₹90 Lakhs in Research Grants to RGU Faculty for Medical Studies",
            desc: "In a significant boost to advanced medical and translational research, the Indian Council of Medical Research (ICMR), New Delhi has awarded four prestigious research project grants worth ₹90 lakhs to faculty members of The Assam Royal Global University (RGU).",
            img: "/mobile-assets/media-corner/2026/10/ICMR.png",
            link: "/icmr-awards-90-lakhs-in-research-grants-to-rgu-faculty-for-medical-studies",
        },
        {
            date: "Guwahati, April 6, 2026",
            title: "Northeast must become India’s next pharma hub: PCI President speaks at Royal Global University",
            desc: "In a significant initiative aimed at inspiring future pharmacy professionals, the Pharmacy Council of India (PCI) today organised an awareness programme titled “Inspire & Interact” with pharmacy students from across the Northeast at The Assam Royal Global University(RGU) and featured an enlightening address by Dr. Montukumar M. Patel, President, Pharmacy Council of India(PCI).",
            img: "/mobile-assets/media-corner/2026/media604-1.jpeg",
            link: "/northeast-must-become-indias-next-pharma-hub-pci-president-speaks-at-royal-global-university",
        },
        {
            date: "Guwahati, April 4, 2026",
            title: "Royal Global University partners with TCS to start industry-integrated programmes",
            desc: "In a significant step towards strengthening industry–academia collaboration in Northeast India, The Assam Royal Global University (RGU) has signed a Memorandum of Understanding (MoU) with Tata Consultancy Services (TCS) to launch an industry-integrated undergraduate programme in Computer Science Engineering and Business Systems (CSEBS), aimed at creating future-ready professionals equipped with both technological expertise and business acumen.",
            img: "/mobile-assets/rgu-blog/blog2.jpeg",
            link: "/royal-global-university-partners-with-tcs-to-start-industry-integrated-programmes",
        },
        {
            date: "Guwahati, March 31, 2026",
            title: "Art Grantee award to RGU alumnus at Hyundai Art for Hope 2026 in New Delhi",
            desc: "Prabhat Jyoti Gowala, an alumnus of The Assam Royal Global University (RGU) has earned recognition as an Art Grantee at the prestigious “Art for Hope 2026” exhibition, organized by Hyundai Motor India Foundation at Travancore Palace in New Delhi.",
            img: "/mobile-assets/media-corner/2026/1.jpeg",
            link: "/art-grantee-award-to-rgu-alumnus-at-hyundai-art-for-hope-2026-in-new-delhi",
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

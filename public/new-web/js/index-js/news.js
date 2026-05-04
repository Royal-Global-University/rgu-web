document.addEventListener("DOMContentLoaded", () => {

    const newsData = [
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

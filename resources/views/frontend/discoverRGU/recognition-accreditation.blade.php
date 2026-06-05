@extends('frontend/new-master')
@section('content')
    <style>
        /* ================= RECOGNITION SECTION ================= */

        .rgu-recog-section {
            padding: 8rem 2rem;
            background-color: var(--backgroundcolor, #EBF1FC);
            font-family: 'Times New Roman', Times, serif;
            overflow: hidden;
        }

        .rgu-recog-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* --- Top Display Area --- */
        .rgu-recog-display {
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            gap: 4rem;
            min-height: 350px;
        }

        .rgu-recog-image-pane {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .rgu-recog-image-pane img {
            max-width: 450px;
            height: auto;
            object-fit: contain;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        /* Animation classes for swapping content */
        .rgu-recog-fade-out {
            opacity: 0;
            transform: translateY(10px);
        }

        .rgu-recog-fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Divider */
        .rgu-recog-divider {
            width: 1px;
            background-color: #c9d5e8;
            position: relative;
            margin: 4rem 0;
        }

        .rgu-recog-dot {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1.2rem;
            height: 1.2rem;
            background-color: var(--orange-deep, #E15825);
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(225, 88, 37, 0.2);
        }

        /* Content Pane */
        .rgu-recog-content-pane {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem 0;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .rgu-recog-content-pane h3 {
            font-size: 2.4rem;
            color: var(--primary, #20315F);
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .rgu-recog-content-pane p {
            font-size: 1.8rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 2.5rem;
        }

        /* Action Button */
        .rgu-recog-btn {
            display: inline-flex;
            align-items: center;
            background: var(--white, #ffffff);
            color: var(--orange-deep, #E15825);
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 1.2rem 2.4rem;
            border-radius: 0.6rem;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid transparent;
            align-self: flex-start;
        }

        .rgu-recog-btn span {
            margin-left: 1rem;
            font-size: 1.6rem;
            font-weight: 400;
        }

        .rgu-recog-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: #fbdbd1;
        }

        /* --- Bottom Thumbnails Area (Centered Grid/Flex) --- */
        .rgu-recog-thumbnails-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            margin-top: 6rem;
        }

        /* Thumbnails */
        .rgu-recog-thumb {
            width: 130px;
            height: 110px;
            background: #fff;
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
            padding: 1.5rem;
        }

        .rgu-recog-thumb img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .rgu-recog-thumb:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08);
        }

        .rgu-recog-thumb:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        .rgu-recog-thumb.active {
            border-color: var(--orange-deep, #E15825);
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(225, 88, 37, 0.15);
        }

        .rgu-recog-thumb.active img {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* --- Mobile Responsiveness --- */
        @media (max-width: 900px) {
            .rgu-recog-display {
                flex-direction: column;
                gap: 2rem;
                text-align: center;
            }

            .rgu-recog-divider {
                width: 100%;
                height: 1px;
                margin: 2rem 0;
            }

            .rgu-recog-content-pane {
                padding: 0;
                align-items: center;
            }

            .rgu-recog-content-pane h3 {
                font-size: 2rem;
            }

            .rgu-recog-image-pane img {
                max-width: 220px;
            }

            .rgu-recog-thumbnails-wrapper {
                gap: 1.5rem;
            }

            .rgu-recog-thumb {
                width: 100px;
                height: 85px;
                padding: 1rem;
            }
        }

        /* ================= MEMBERSHIP SECTION ================= */

        .rgu-mem-section {
            padding: 5rem 2rem;
            background-color: var(--backgroundcolor, #EBF1FC);
            font-family: 'Times New Roman', Times, serif;
            position: relative;
        }

        .rgu-mem-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Title */
        .rgu-mem-title {
            font-family: 'Times New Roman', Times, serif;
            font-size: 5.5rem;
            color: var(--primary, #20315F);
            text-align: center;
            margin-bottom: 5rem;
            font-weight: 700;
        }

        /* List Container */
        .rgu-mem-list {
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        /* Individual Card */
        .rgu-mem-card {
            background: #ffffff;
            border-radius: 1.5rem;
            padding: 4rem 5rem;
            display: flex;
            align-items: center;
            gap: 4rem;
            box-shadow: 0 10px 30px rgba(32, 49, 95, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .rgu-mem-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(32, 49, 95, 0.08);
        }

        /* Card Logo */
        .rgu-mem-logo {
            flex: 0 0 160px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rgu-mem-logo img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* Vertical Divider */
        .rgu-mem-divider {
            width: 1px;
            height: 140px;
            background-color: #d1d8e0;
            flex-shrink: 0;
        }

        /* Card Content */
        .rgu-mem-content {
            flex: 1;
        }

        .rgu-mem-content h3 {
            font-size: 2.2rem;
            color: #333333;
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .rgu-mem-content p {
            font-size: 1.5rem;
            color: #555555;
            line-height: 1.6;
            margin: 0;
        }

        /* Card Action Button */
        .rgu-mem-action {
            flex: 0 0 auto;
        }

        .rgu-mem-btn {
            display: inline-flex;
            align-items: center;
            background: var(--orange-deep, #E15825);
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 1.4rem 2.8rem;
            border-radius: 0.6rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .rgu-mem-btn span {
            margin-left: 1rem;
            font-size: 1.6rem;
            font-weight: 400;
        }

        .rgu-mem-btn:hover {
            background: #c94b1e;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(225, 88, 37, 0.2);
        }


        .rgu-mem-page-btn {
            background: transparent;
            border: none;
            color: #a0a0a0;
            font-size: 1.6rem;
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .rgu-mem-page-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }

        .rgu-mem-page-text {
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: 500;
            margin: 0 1.5rem;
            letter-spacing: 1px;
        }

        /* ================= MOBILE RESPONSIVENESS ================= */
        @media (max-width: 900px) {
            .rgu-mem-card {
                flex-direction: column;
                text-align: center;
                padding: 4rem 3rem;
                gap: 2.5rem;
            }

            .rgu-mem-divider {
                width: 100px;
                height: 1px;
            }

            .rgu-mem-title {
                font-size: 4rem;
            }
        }

        @media (max-width: 500px) {
            .rgu-mem-card {
                padding: 3rem 2rem;
            }

            .rgu-mem-content h3 {
                font-size: 1.9rem;
            }

            .rgu-mem-content p {
                font-size: 1.4rem;
            }

            .rgu-mem-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/discover-rgu-recognition/headimg.png');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Recognition And Accreditation</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Excellence & Collaborations / Accreditation And Recognition
            </div>
        </div>

    </section>

    <section class="rgu-recog-section">
        <div class="rgu-recog-container">

            <div class="rgu-recog-display">
                <div class="rgu-recog-image-pane">
                    <img id="rguRecogMainImg" src="/new-web/assets/img/ugc-logo.png" alt="Recognition Logo">
                </div>

                <div class="rgu-recog-divider">
                    <span class="rgu-recog-dot"></span>
                </div>

                <div class="rgu-recog-content-pane" id="rguRecogContent">
                </div>
            </div>

            <div class="rgu-recog-thumbnails-wrapper" id="rguRecogThumbnails">
            </div>

        </div>
    </section>

    <section class="rgu-mem-section">
        <div class="rgu-mem-container">

            <h2 class="rgu-mem-title">Membership</h2>

            <div class="rgu-mem-list">

                <div class="rgu-mem-card">
                    <div class="rgu-mem-logo">
                        <img src="https://www.rgu.ac/mobile-assets/recognition/AIU%20250px-22.svg" alt="AIU Logo">
                    </div>

                    <div class="rgu-mem-divider"></div>

                    <div class="rgu-mem-content">
                        <h3>ASSOCIATION OF INDIAN UNIVERSITIES (AIU)</h3>
                        <p>
                            The Governing Council of the Association of Indian Universities (AIU) at its 345th Meeting
                            held on June 22, 2017 at AIU House, New Delhi considered the application for grant of
                            provisional membership of AIU and resolved to grant the same with effect from 22.5.2017
                        </p>
                    </div>

                    <div class="rgu-mem-action">
                        <a href="https://www.rgu.ac/mobile-assets/recognition/pdf/4.pdf" class="rgu-mem-btn">APPROVAL
                            LETTER
                            <span>+</span></a>
                    </div>
                </div>

                <div class="rgu-mem-card">
                    <div class="rgu-mem-logo">
                        <img src="https://www.rgu.ac/mobile-assets/ads/aip-logo.png" alt="ACU Logo">
                    </div>

                    <div class="rgu-mem-divider"></div>

                    <div class="rgu-mem-content">
                        <h3>THE INDIAN ASSOCIATION OF PHYSIOTHERAPISTS (IAP)</h3>
                        <p>
                            The Assam Royal Global University has been awarded provisional institutional membership by
                            the Indian Association of Physiotherapists (IAP) for the period 2025–2027. This recognition
                            affirms that the University meets the prescribed academic and training standards, enabling
                            it's Bachelor of Physiotherapy graduates to be eligible for IAP membership as per prevailing
                            norms. The certification reflects the institution’s commitment to quality education and
                            professional excellence in physiotherapy.
                        </p>
                    </div>

                </div>

                <div class="rgu-mem-card">
                    <div class="rgu-mem-logo">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/acu.png" alt="ACU Logo">
                    </div>

                    <div class="rgu-mem-divider"></div>

                    <div class="rgu-mem-content">
                        <h3>ASSOCIATION OF COMMONWEALTH UNIVERSITIES (ACU)</h3>
                        <p>
                            The ACU is committed to delivering educational opportunities that make a positive, lasting
                            difference. We enable university staff and students to pursue research and innovation
                            through a range of funding opportunities, and this calendar outlines the awards available
                            for 2024-25. Please note that our grants offer is under review and is subject to change.
                        </p>
                    </div>

                    <div class="rgu-mem-action">
                        <a href="https://www.rgu.ac/mobile-assets/recognition/pdf/5.pdf" class="rgu-mem-btn">APPROVAL LETTER
                            <span>+</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // 1. Data array representing the 8 different recognitions
        const recognitionsData = [
            {
                id: 0,
                title: "Recognised By University Grants Commission (UGC)",
                htmlContent: `
                <p>The Assam Royal Global University is a full-fledged Private University established under section 2(f) of the UGC Act and is included in the list of universities maintained by University Grants Commission with the right to confer degrees as per Section 22 of UGC Act, 1956.</p>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/UGC1.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
                <br><br>
                <p>The Assam Royal Global University has fulfilled/ complied with all the criteria under Section 2f of the UGC Act, in terms of programmes, faculty, infrastructural facilities, financial viability etc. and the same has been duly accepted by UGC through its letter number F.8-30/2016(CPP-I/PU) dated 21st March 2024.</p>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/UGC2.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/UGC.svg"
            },
            {
                id: 1,
                title: "STATE GOVERNMENT",
                htmlContent: `
                <p>The Assam Royal Global University is established by ‘The Assam Royal Global University Act’, which has been notified by Government of Assam vide notification no. LGL.12/2013/22, in the year 2013.</p>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/state-govt1.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
                <br>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/state-govt2.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/state-govt.svg"
            },
            {
                id: 2,
                title: "APPROVED BY ALL INDIA COUNCIL FOR TECHNICAL EDUCATION",
                htmlContent: `
                <p>B.Tech. & MBA programmes/courses are approved by All India Council for Technical Education (AICTE).</p>
                <a href="/mobile-assets/ads/AICTE EoA 26-27.PDF" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/aicte.svg"
            },
            {
                id: 3,
                title: "ARCHITECTURE PROGRAMME APPROVED BY COUNCIL OF ARCHITECTURE",
                htmlContent: `
                <p>B.Arch. programme/course is approved by Council of Architecture (COA).</p>
                <a href="/mobile-assets/ads/Extension of Approval 2026-28.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/architecture.svg"
            },
            {
                id: 4,
                title: "LAW PROGRAMMES APPROVED BY BAR COUNCIL OF INDIA",
                htmlContent: `
                <p>BA LL.B.(H)., BBA LL.B.(H) and LL.B.(H) programmes/courses are approved by Bar Council of India (BCI).</p>
                <a href="/mobile-assets/pdf/BCI 2026-27.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/bar-council.svg"
            },
            {
                id: 5,
                title: "NURSING PROGRAMMES APPROVED BY ASSAM NURSES' MIDWIVES' & HEALTH VISITORS' COUNCIL",
                htmlContent: `
                <p>B.Sc. Nursing programme is approved by Assam Nurses' Midwives' & Health Visitors' Council (ANMHVC) <br> GNM programme is approved by Assam Nurses' Midwives' & Health Visitors' Council (ANMHVC)</p>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/ANMHVC.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/nurse.svg"
            },
            {
                id: 6,
                title: "D.PHARM, B.PHARM. AND M.PHARM. PROGRAMMES ARE APPROVED BY PHARMACY COUNCIL OF INDIA(PCI)",
                htmlContent: `
                <p>D.Pharm., B.Pharm and M.Pharm Programmes are Approved by Pharmacy Council of India (PCI)</p>
                <a href="/new-web/assets/img/discover-rgu-recognition/pdf/PCI.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/pharmacy-council.svg"
            },
            {
                id: 7,
                title: "NURSING PROGRAMMES APPROVED BY INDIAN NURSING COUNCIL (INC)",
                htmlContent: `
                <p>GNM and B.Sc. Nursing programme is approved by Indian Nursing Council (INC)</p>
                <a href="mobile-assets/pdf-2027/INC%20for%20GNM%202026-27%20letter.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
                <br>
                <a href="/new-web/mobile-assets/pdf-2027/INC%20for%20BSN%202026-27%20letter.pdf" class="rgu-recog-btn">APPROVAL LETTER <span>+</span></a>
            `,
                img: "/new-web/assets/img/discover-rgu-recognition/indian-nursing-council.svg"
            }
        ];

        const mainImg = document.getElementById("rguRecogMainImg");
        const contentPane = document.getElementById("rguRecogContent");
        const thumbnailsWrapper = document.getElementById("rguRecogThumbnails");

        // 2. Initialize Thumbnails
        function initThumbnails() {
            thumbnailsWrapper.innerHTML = ""; // Clear existing

            recognitionsData.forEach((item, index) => {
                const thumb = document.createElement("div");
                thumb.className = `rgu-recog-thumb ${index === 0 ? "active" : ""}`;
                thumb.dataset.index = index;

                const img = document.createElement("img");
                img.src = item.img;
                img.alt = item.title;

                thumb.appendChild(img);

                // Click Event for Thumbnails
                thumb.addEventListener("click", () => {
                    // If it's already active, do nothing
                    if (thumb.classList.contains("active")) return;

                    updateDisplay(index);

                    // Update active class
                    document.querySelectorAll(".rgu-recog-thumb").forEach(t => t.classList.remove("active"));
                    thumb.classList.add("active");
                });

                thumbnailsWrapper.appendChild(thumb);
            });
        }

        // 3. Update the Top Display Area with Animations
        function updateDisplay(index) {
            const data = recognitionsData[index];

            // Add fade-out classes
            mainImg.classList.add("rgu-recog-fade-out");
            contentPane.classList.add("rgu-recog-fade-out");

            // Wait for fade-out to finish, then swap content and fade in
            setTimeout(() => {
                mainImg.src = data.img;
                contentPane.innerHTML = `
                <h3>${data.title}</h3>
                ${data.htmlContent}
            `;

                // Remove fade-out, add fade-in
                mainImg.classList.remove("rgu-recog-fade-out");
                contentPane.classList.remove("rgu-recog-fade-out");
            }, 300); // 300ms matches the CSS transition time
        }

        // Run initialization
        initThumbnails();
        updateDisplay(0); // Set initial state
    });
</script>
@endsection

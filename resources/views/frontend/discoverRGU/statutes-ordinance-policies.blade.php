@extends('frontend/new-master')
@section('title', 'Statutes, Ordinance and Policies : The Assam Royal Global University')
@section('meta_description', 'Discover the comprehensive statutes, ordinances, and institutional policies of Royal
    Global University that guide governance, academic standards, and administrative procedures.')
@section('meta_keywords', 'Statutes, Ordinance and Policies')
@section('content')

    <style>
        .uxt2-section {
            padding: 80px 20px;
            background: #e9edf5;
        }

        /* Center tabs when no scroll */
        .uxt2-tabs.centered {
            justify-content: center;
            overflow-x: hidden;
        }

        /* ===== WRAPPER ===== */
        .uxt2-wrapper {
            max-width: 1200px;
            margin: auto;
            position: relative;
            /* Removed overflow: hidden; so the nav arrows don't get clipped */
        }

        /* ===== TABS CONTAINER ===== */
        .uxt2-tabs-container {
            position: relative;
            padding-bottom: 20px;
            /* Creates safe space for the dots so they don't get clipped */
        }

        /* ===== TABS ===== */
        .uxt2-tabs {
            display: flex;
            gap: 40px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 20px 0 40px 0;
            /* Extra bottom padding for the active dot */
        }

        .uxt2-tabs::-webkit-scrollbar {
            display: none;
        }

        .uxt2-tabs {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* ===== TAB ===== */
        .uxt2-tab {
            width: 200px;
            height: 200px;
            min-width: 180px;
            flex-shrink: 0;
            border-radius: 50%;
            border: 1px solid #bbb;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            /* Essential for the dot */
            background: #fff;
        }

        /* TEXT */
        .uxt2-tab span {
            max-width: 120px;
            line-height: 1.4;
            font-size: 14px;
            font-weight: 700;
        }

        /* ACTIVE */
        .uxt2-tab.active {
            background: #E15825;
            color: #fff;
            border-color: #E15825;
            box-shadow: 0 8px 20px rgba(225, 88, 37, 0.3);
        }

        /* DOT */
        .uxt2-tab::after {
            content: "";
            width: 12px;
            height: 12px;
            background: #E15825;
            border-radius: 50%;
            position: absolute;
            bottom: -35px;
            /* Pushes dot down to the line */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .uxt2-tab.active::after {
            opacity: 1;
        }

        /* ===== LINE ===== */
        .uxt2-line {
            height: 2px;
            background: #cbd5e1;
            position: absolute;
            bottom: 25px;
            /* Aligns with the dots */
            left: 0;
            right: 0;
            z-index: 0;
        }

        /* ===== NAV BUTTONS ===== */
        .uxt2-nav {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            background: #fff;
            color: #E15825;
            border: 1px solid #ddd;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .uxt2-nav:hover {
            background: #E15825;
            color: #fff;
            border-color: #E15825;
        }

        /* Move buttons just outside the container bounds */
        .uxt2-prev {
            left: -25px;
        }

        .uxt2-next {
            right: -25px;
        }

        /* ===== CONTENT ===== */
        .uxt2-content {
            max-width: 1200px;
            margin: 40px auto 0;
        }

        /* PANELS - Upgraded to CSS Grid for better responsiveness */
        .uxt2-panel {
            display: none;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
            animation: fadeIn 0.4s ease forwards;
        }

        .uxt2-panel.active {
            display: grid;
            /* Swapped from flex to grid */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== CARD ===== */
        .uxt2-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .uxt2-card:hover {
            transform: translateY(-5px);
        }

        /* TITLE */
        .uxt2-card h3 {
            padding: 24px 20px;
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin: 0;
            line-height: 1.4;
        }

        /* DOWNLOAD */
        .uxt2-download {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #E15825;
            color: #fff;
            padding: 15px 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .uxt2-download:hover {
            background: #c94c1d;
            color: #fff;
        }

        /* ===== MOBILE ===== */
        @media (max-width: 900px) {
            .uxt2-tab {
                width: 130px;
                height: 130px;
                min-width: 130px;
                padding: 15px;
            }

            .uxt2-prev {
                left: -10px;
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .uxt2-next {
                right: -10px;
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .uxt2-tab span {
                max-width: 120px;
                line-height: 1.4;
                font-size: 12px;
                font-weight: 700;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-statute-ordinance/headimg.png');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Statutes, Ordinance And Policies</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Policies & Administration / Statutes, Ordinance And Policies
            </div>
        </div>

    </section>

    <section class="uxt2-section">
        <div class="uxt2-wrapper">

            <div class="uxt2-tabs-container">
                <button class="uxt2-nav uxt2-prev" aria-label="Previous Tabs"><i class="bi bi-chevron-left"></i></button>
                <button class="uxt2-nav uxt2-next" aria-label="Next Tabs"><i class="bi bi-chevron-right"></i></button>

                <div class="uxt2-tabs" id="uxt2Tabs">
                    <div class="uxt2-tab active" data-tab="t1">
                        <span>The Statute of the Assam Royal Global University</span>
                    </div>
                    <div class="uxt2-tab" data-tab="t2">
                        <span>Regulations</span>
                    </div>
                    <div class="uxt2-tab" data-tab="t3">
                        <span>Students related policies and SOPs</span>
                    </div>
                    <div class="uxt2-tab" data-tab="t4">
                        <span>Other policies and SOPs</span>
                    </div>

                </div>

                <div class="uxt2-line"></div>
            </div>

        </div>

        <div class="uxt2-content">

            <div class="uxt2-panel active" id="t1">
                <div class="uxt2-card">
                    <h3>The First Statute</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/The-First-Statutes-min.pdf" class="uxt2-download">
                        DOWNLOAD <i class="fa fa-file-pdf-o"></i>
                    </a>
                </div>
            </div>

            <div class="uxt2-panel" id="t2">
                <div class="uxt2-card">
                    <h3>The Ph.D. Regulations</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/1)-Ph.D.-Regulation-2024-(06-06-2024)-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>
                <div class="uxt2-card">
                    <h3>Regulations on Grievance Redressal and Disciplinary Issues</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/1.-Policy-on-Regulation-on-Grievance-Redressal-and-Disciplinary-Issues-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>
            </div>

            <div class="uxt2-panel" id="t3">
                <div class="uxt2-card">
                    <h3>Scholarship Policy 2023 - 2024</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/3.%20Policy%20on%20Scholarship%202023-24-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Dean's Listers</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/10.%20Policy%20for%20Dean%20Listers-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>University Colours</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/11.%20Policy%20on%20Awarding%20University%20Colours%20to%20Sportsman%20Scholar-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Financial Assistance/ Sponsorship to attend academic/ sports events</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/12.%20Policy%20for%20Poviding%20Financial%20Assistance-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Fee concession to students winning laurels</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/13.%20Policy%20Relating%20to%20Fee%20Concession-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

            </div>

            <div class="uxt2-panel" id="t4">
                <div class="uxt2-card">
                    <h3>Research incentive policy</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/2.%20Policy%20on%20Research-min.pdf"
                        class="uxt2-download">DOWNLOAD
                        <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Dress code policy for RGU employees</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/4.%20Policy%20on%20Dress%20Code-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Policy on revised remuneration for examination AY 2019 - 2020</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/6.%20Policy%20on%20Revised%20Remuneration%20AY%202019-20-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Policy for Performance Assessment of Faculty</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/8.%20Policy%20for%20Performance%20Assessment%20of%20Faculty-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>RCCR Incentive Policy</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/9.%20Policy%20for%20RCCR%20incentive%20Scheme-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>RGU Research Fellowship</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/14.%20Policy%20for%20RGU%20Research%20Fellowship-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Incentive Scheme for Staff members</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/15.%20Policy%20on%20Incentive%20Scheme%20for%20Academic%20Staff%20Members-min.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Leave Policy 2023</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/Leave%20Policy.pdf" class="uxt2-download">DOWNLOAD <i
                            class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Energy Policy</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/Energy%20Policy.pdf" class="uxt2-download">DOWNLOAD
                        <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Code of Conduct for RGU Staff Members</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/Code%20of%20Conduct%20for%20Staff%20Members.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Ph.D. fee related policy for faculty members</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/Ph.D.%20Fee%20rebate%20policy%20for%20faculty%20members.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

                <div class="uxt2-card">
                    <h3>Green Campus Policy</h3>
                    <a href="/new-web/assets/img/discover-rgu-statute-ordinance/Green%20Campus%20Policy.pdf"
                        class="uxt2-download">DOWNLOAD <i class="fa fa-file-pdf-o"></i></a>
                </div>

            </div>

        </div>
    </section>

    <script>
        const uxt2ModuleInit = () => {

            const tabs = document.querySelectorAll('.uxt2-tab');
            const panels = document.querySelectorAll('.uxt2-panel');
            const container = document.getElementById('uxt2Tabs');

            const nextBtn = document.querySelector('.uxt2-next');
            const prevBtn = document.querySelector('.uxt2-prev');

            /* ================= TAB CLICK ================= */
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {

                    tabs.forEach(t => t.classList.remove('active'));
                    panels.forEach(p => p.classList.remove('active'));

                    tab.classList.add('active');

                    const targetPanel = document.getElementById(tab.getAttribute('data-tab'));
                    if (targetPanel) targetPanel.classList.add('active');

                    tab.scrollIntoView({
                        behavior: "smooth",
                        inline: "center",
                        block: "nearest"
                    });
                });
            });

            /* ================= SCROLL BUTTONS ================= */
            const scrollAmount = 300;

            if (nextBtn && container) {
                nextBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }

            if (prevBtn && container) {
                prevBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }

            /* ================= AUTO HIDE / CENTER LOGIC ================= */
            const checkTabsOverflow = () => {
                const isOverflowing = container.scrollWidth > container.clientWidth + 5;

                if (!isOverflowing) {
                    // Hide arrows
                    if (nextBtn) nextBtn.style.display = "none";
                    if (prevBtn) prevBtn.style.display = "none";

                    // Center tabs
                    container.classList.add('centered');
                } else {
                    // Show arrows
                    if (nextBtn) nextBtn.style.display = "flex";
                    if (prevBtn) prevBtn.style.display = "flex";

                    // Remove centering
                    container.classList.remove('centered');
                }
            };

            // Run on load
            checkTabsOverflow();

            // Run on resize (important)
            window.addEventListener('resize', checkTabsOverflow);
        };

        /* INIT */
        document.addEventListener("DOMContentLoaded", uxt2ModuleInit);
    </script>



@endsection

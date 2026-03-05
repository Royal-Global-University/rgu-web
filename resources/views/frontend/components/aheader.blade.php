<!-- top-bar-modal  -->
    <section>
        <style>
           /* Push the navbars down so the new Top Bar doesn't cover them */
            .navbar {
                top: 44px !important;
            }

            /* --- New Responsive Top Bar Styles --- */
            .responsive-top-bar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                background-color: #13223b;
                z-index: 10500;
                font-family: 'Times New Roman', Times, serif;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                display: flex;
                justify-content: right;
                align-items: center;
                flex-wrap: wrap;
                padding: 6px 20px;
                gap: 15px;
            }
            .top-bar-link {
                color: #fff;
                text-decoration: none;
                font-weight: 600;
                font-size: 14px;
                transition: color 0.3s;
                white-space: nowrap;
            }
            .top-bar-link:hover {
                color: #ffa827;
            }
            .highlight-link {
                color: #ffa827; /* Keeps the first link orange */
            }
            .top-bar-divider {
                color: #fff;
                opacity: 0.5;
                font-size: 14px;
            }

            /* Mobile responsiveness */
            @media (max-width: 768px) {


                .responsive-top-bar {
                    padding: 5px 10px;
                    gap: 8px;
                    justify-content: center;
                }
                .top-bar-link {
                    font-size: 12px; /* Smaller text on mobile so it fits nicely */
                }
                .top-bar-divider {
                    display: none; /* Hides the '|' on mobile for a cleaner look if it wraps */
                }
                .navbar {
                    top: 60px !important; /* Pushes navbar down a bit more on mobile in case the top bar text wraps to 2 lines */
                }
            }

            /* Push the mobile slide-out menu content down as well */
            .menu {
                padding-top: 60px !important;

            }

            /* --- New Modal Animations --- */
            #topBarModal {
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease, visibility 0.3s ease;

            }

            #topBarModal.show {
                opacity: 1;
                visibility: visible;
            }

            .modal-content-box {
                transform: scale(0.8) translateY(30px);
                transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);

            }

            #topBarModal.show .modal-content-box {
                transform: scale(1) translateY(0);
            }

            /* --- Card Styles & Hover Animations --- */
            .phd-card-container {
                display: flex;
                gap: 20px;
                justify-content: center;
                flex-wrap: wrap;
                margin-top: 15px;


            }

            .phd-login-card {
                flex: 1;
                min-width: 240px;
                background: #ffe6c0;
                border: 2px solid #ffca7b;
                border-radius: 12px;
                padding: 35px 20px;
                text-decoration: none !important;
                color: #333;
                transition: all 0.3s ease;
                display: flex;
                flex-direction: column;
                align-items: center;
                cursor: pointer;
            }

            .phd-login-card:hover {
                background: #ffb64a;
                border-color: #13223b;
                box-shadow: 0 15px 30px rgba(255, 168, 39, 0.15);
                transform: translateY(-8px);
            }

            .phd-card-icon {
                font-size: 50px;
                color: #13223b;
                margin-bottom: 20px;
                transition: transform 0.4s ease, color 0.3s ease;
            }

            .phd-login-card:hover .phd-card-icon {
                transform: scale(1.15) rotate(5deg);
                color: #13223b;
            }

            .phd-login-card h3 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 22px;
                font-weight: 700;
                color: #13223b;
                margin-bottom: 10px;
            }

            .phd-login-card p {
                font-family: 'Times New Roman', Times, serif;
                font-size: 16px;
                color: #666;
                margin: 0;
                line-height: 1.5;
                text-align: center;
            }

            /* Mobile responsiveness */
            @media (max-width: 768px) {
                .responsive-top-bar {
                    padding: 8px 10px;
                    gap: 8px 15px; /* Adds healthy spacing between the wrapped links */
                }
                .top-bar-link {
                    font-size: 13px; /* Increased text size for better readability/tapping */
                    white-space: normal; /* Allows the text to wrap nicely without breaking */
                    text-align: center;
                }
                .top-bar-divider {
                    display: none; /* Keep the dividers hidden on mobile for a cleaner look */
                }
                .navbar {
                    top: 85px !important; /* Pushes the main navbar completely below the double-line top bar */
                }
                .menu {
                    padding-top: 100px !important; /* Pushes the content of the mobile slide-out menu down too */
                }
            }
        </style>

        <div id="common-top-bar" class="responsive-top-bar">
            <a href="#" id="topBarModalLink" class="top-bar-link highlight-link">
                TRACK THE STATUS OF YOUR PH.D. THESIS
            </a>

            <span class="top-bar-divider">|</span>

            <a href="https://rgu.renocampus.com/hr/staff" target="_blank" class="top-bar-link">
                ERP LOGIN
            </a>

            <span class="top-bar-divider">|</span>

            <a href="https://m365.cloud.microsoft/?auth=2" target="_blank" class="top-bar-link">
                STAFF EMAIL LOGIN
            </a>
        </div>

        <div id="topBarModal"
            style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); backdrop-filter: blur(5px); z-index: 10600; justify-content: center; align-items: center; font-family: 'Times New Roman', Times, serif;">

            <div class="modal-content-box" style="max-width: 650px; width: 95%; position: relative;">

                <h2
                    style="color: white; text-align: center; font-family: 'Times New Roman', Times, serif; font-weight: bold; font-size: 24px; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 2px;">
                    Track the status of your Ph.D thesis
                </h2>

                <div
                    style="background-color: #fff; border-radius: 12px; padding: 40px 30px; position: relative; box-shadow: 0 10px 25px rgba(0,0,0,0.5);">

                    <div class="phd-card-container">
                        <a href="https://rgu.renocampus.com/auth/signin?callbackUrl=https%3A%2F%2Frgu.renocampus.com" class="phd-login-card">
                            <div class="phd-card-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            <h3>Login as a Guide</h3>

                        </a>

                        <a href="https://rgu.renocampus.com/student" class="phd-login-card">
                            <div class="phd-card-icon"><i class="fas fa-user-graduate"></i></div>
                            <h3>Login as a Scholar</h3>

                        </a>
                    </div>

                </div>

                <div style="text-align: center; margin-top: 15px;">
                    <button id="modalBtnClose"
                        style="background: none; border: none; color: #ddd; font-family: 'Times New Roman', Times, serif; font-size: 16px; cursor: pointer; text-decoration: underline; transition: color 0.3s;">Close
                        Window</button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var topBarLink = document.getElementById('topBarModalLink');
                var topBarModal = document.getElementById('topBarModal');
                var btnClose = document.getElementById('modalBtnClose');

                // Open Modal Smoothly
                topBarLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    topBarModal.style.display = 'flex'; // Un-hide from DOM

                    // Add the animation class after a tiny delay so the browser registers it
                    setTimeout(function () {
                        topBarModal.classList.add('show');
                    }, 10);
                });

                // Function to close modal smoothly
                function closeModal() {
                    topBarModal.classList.remove('show'); // Triggers CSS fade/scale out

                    // Wait for the CSS transition (0.3s) to finish before hiding from DOM
                    setTimeout(function () {
                        topBarModal.style.display = 'none';
                    }, 300);
                }

                // Close Modal on Button Click
                btnClose.addEventListener('click', closeModal);

                // Close Modal on Background Click
                window.addEventListener('click', function (e) {
                    if (e.target === topBarModal) {
                        closeModal();
                    }
                });
            });
        </script>
    </section>
    <!-- top-bar-modal  -->

<!--Start Header-->
<nav class="navbar navbar-expand-lg" style="padding: 10px 40px; position: relative !important;">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
            <img src="mobile-assets/index/logo-dark.png" alt="Logo" style="height: 80px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="width: 100%; justify-content: space-around;">

                <!-- Discover RGU -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Discover RGU</a>

                    <ul class="dropdown-menu p-3"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 800px; border-top: 3px solid #e68900;">
                        <div class="row" style="display: flex;">
                            <div class="col-lg-4 p-2">
                                <h2 class="para1 fw-bold text-center" style="color: #e68900;">About Us</h2>
                                <hr>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('preface') }}">Preface</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('leadership') }}">Leadership
                                        Team</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('advisory-leadership') }}">Advisory Leadership</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('deans') }}">Deans’
                                        Corner</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('chief-vigilance-officer') }}">Chief Vigilance Officer</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('ombudsperson') }}">Ombudsperson</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('vision-mission') }}">Vision
                                        and Mission</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('statutes-ordinance-policies') }}">Statutes, Ordinance <br> and
                                        Policies</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('facilities') }}">Facilities</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('social-outreach') }}">Social Outreach</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('footprints') }}">Royal
                                        Footprints</a></li>

                            </div>

                            <div class="col-lg-4 p-2">
                                <h2 class="para1 fw-bold text-center" style="color: #e68900;">What Sets Us Apart</h2>
                                <hr>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('recognition-accreditation') }}">Recognition and <br>
                                        Accreditation</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('association-tieup') }}">Associations and <br> Tie Ups</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('award') }}">Awards and
                                        Honors</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('top-recruiters') }}">Top
                                        Recruiters</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('success') }}">Success
                                        Stories</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('360-tour') }}">360°
                                        Tour</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('diversechoices') }}">Diverse Choices</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('diversity-inclusion') }}">Diversity and Inclusion</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('strategic-location') }}">Strategic Location</a></li>
                            </div>

                            <div class="col-lg-4 p-2">
                                <h2 class="para1 fw-bold text-center" style="color: #e68900;">Statutory Bodies</h2>
                                <hr>
                                <li class="dropdown-submenu" style="position: relative;">
                                    <a class="dropdown-item text-dark dropdown-toggle para1" href="#">Statutory
                                        Authorities</a>
                                    <ul class="dropdown-menu"
                                        style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('governing-body') }}">Governing Body</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('board-of-management') }}">Board of Management</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('academic-council') }}">Academic Council</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('internal-complaints-committee') }}">Internal Complaints
                                                Committee</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('university-research-committee') }}">University Research
                                                Committee</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('institutional-ethical-committee') }}">Institutional
                                                Ethical
                                                Committee</a></li>
                                        <li><a class="dropdown-item text-dark para1"
                                                href="{{ route('nss-advisory-committee') }}">NSS Advisory Committee</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('anti-ragging') }}">Anti
                                        Ragging <br> Committee</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('proctorial') }}">Proctorial
                                        Board</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('organogram-planning') }}">Organogram and <br> Planning</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('self-disclosure') }}">Public Self Disclosure</a></li>
                            </div>
                        </div>
                    </ul>
                </li>


                <!-- Academics -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Academics</a>
                    <ul class="dropdown-menu p-3"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 500px; overflow: hidden; border-top: 3px solid #e68900;">
                        <div class="row" style="display: flex;">
                            <div class="col-lg-6 p-2">

                                <li><a class="dropdown-item text-dark para1" href="{{ route('schools-rgu') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Our
                                        Schools and <br> Faculties</a></li>

                                <li><a class="dropdown-item text-dark para1" href="{{ route('phd') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Doctoral
                                        Programme</a></li>

                                <li><a class="dropdown-item text-dark para1" href="{{ route('multi-disciplinary') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Multidisciplinary/<br>
                                        Interdisciplinary Courses</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('net-set-gate-coaching') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">NET/SET/GATE<br>
                                        Coaching</a> </li>


                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('workshops-guest-lectures') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Guest
                                        Lectures/ <br> Workshops</a></li>

                            </div>

                            <div class="col-lg-6 p-2">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('achievements') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Achievements</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('academic-calendar') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Academic
                                        Calendar</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('innovation') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Institution's
                                        Innovation <br> Council (IIC-RGU)</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('library-Resources') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Library</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('laboratories') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Laboratories</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('teaching-practice') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Teaching
                                        Practices</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('human-resource-development-centre') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Royal
                                        Centre For Human <br> Resource Development <br> (RCHRD)</a></li>

                            </div>
                        </div>
                    </ul>
                </li>


                <!-- Admissions -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Admission</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 300px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('faq') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Admission
                                FAQs</a></li>
                        <li><a class="dropdown-item text-dark para1" target="_blank"
                                href="https://admissions.rgu.ac/"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Apply
                                Now!</a></li>
                        <li><a class="dropdown-item text-dark para1" href="admission-programs-fees-structure"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Course
                                Fee</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('general-elective') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">General
                                Elective</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('how-to-apply') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">How
                                to Apply?</a></li>
                        <li><a class="dropdown-item text-dark para1" href="programs"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">RGU Admission <br/>Eligibility & Selection Criteria</a></li>

                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Scholarship
                                and Funding</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('scholarship&funding') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Scholarships</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('deans-listers') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Dean's Lister</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('schemes-differently-abled') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Schemes
                                for Differently-Abled</a></li>
                    </ul>
                </li>


                <!-- Convocation -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Convocation</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 300px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-fifth') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">5th
                                Convocation</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-fourth') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">4th
                                Convocation</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-third') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">3rd
                                Convocation</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-second') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">2nd
                                Convocation</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-first') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">1st
                                Convocation</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('honoris-causa') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Honoris
                                Causa - Hall of Fame
                            </a></li>

                    </ul>
                </li>

                <!-- Research -->
                <li class="nav-item" style="position: relative;">
                    <a class="nav-link para1" href="research-devlopment"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Research</a>
                </li>

                <!-- Campus Life with Submenu -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Campus
                        Life</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -40%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Amenities</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('banking-services') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Banking
                                        Service</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('department-store') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Departmental
                                        Store</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('hangout') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Hangout</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('medical-facility') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Medical
                                        Facility</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('laundry') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Laundry</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('salon') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Salon</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('stationary-store') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Stationary
                                        Store</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('student-gallery') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Student
                                        Gallery</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('guest-house') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Guest House</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('national-cadet-corps') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">National
                                Cadet Corps</a></li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('national-service-scheme') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">National
                                Service Scheme</a></li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('games&sports') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Games
                                And Sports</a></li>

                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Hostel</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('hostel-life') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Hostel Life</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" target="_blank"
                                        href="{{ asset('assets/img/pdf/Hostel Policy Rules 2024.pdf') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Hostel Policy</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('infrastructure') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Infrastructure</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('clubs') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Clubs</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('student-affairs') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Student
                                Affairs</a></li>
                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Events</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('happy-happening') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Happy
                                        And <br> Happening Campus</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('royal-fests') }}"
                                        style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Royal Fest</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <!-- Placements -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">Placement</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -30%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-introduction') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Introduction</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-activities') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Activities Undertaken</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-facilities') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Facilities Available</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-process') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Placement Process</a>
                        </li>
                        {{-- <li><a class="dropdown-item text-dark para1" href="{{ route('placements-members') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">RCCR
                                Members</a></li> --}}
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-events') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">RCCR Events</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('top-recruiters') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Recruiters</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('success') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Testimonial</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placement-contacts') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Contacts</a></li>

                    </ul>
                </li>


                <!-- International -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 20px;">International</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -40%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        {{-- <li><a class="dropdown-item text-dark para1" href="international-fee-structure"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Course Fee</a></li> --}}
                        <li><a class="dropdown-item text-dark para1" href="{{ route('international-faq') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">International FAQs</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1"
                                href="international-admission-guidelines"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">International Admission<br>
                                Guidelines</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('frro-process') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">FRRO Process</a></li>
                        {{-- <li><a class="dropdown-item text-dark para1"
                                href="https://heyzine.com/flip-book/adfd7889ba.html"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">International
                                Brochure</a>
                        </li> --}}
                        <li><a class="dropdown-item text-dark para1" href="{{ route('how-to-apply-international') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">How to Apply?</a></li>
                        <li><a class="dropdown-item text-dark para1"
                                href="{{ route('international-student-helpline') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">International Student
                                <br>
                                Helpline</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('campus-job') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">On Campus Job</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('pre-arrival') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Pre-Arrival,
                                Post-Arrival</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('scholarships-international') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Scholarship for <br>
                                International Students</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('visa-information') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Visa Information</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('why-india') }}"
                                style="font-size: 20px; font-weight: 500; padding: 6px 20px;">Why India?</a></li>

                    </ul>
                </li>


            </ul>
        </div>

    </div>
</nav>
<!--End Header-->

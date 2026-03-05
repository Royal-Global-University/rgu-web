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

<!--Start Header-->
<section>
    <div class="navbar">
        <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="logo">
            <a href="/"><img style="height: 70px;" src="mobile-assets/index/logo-dark.png" alt="Logo"></a>
        </div>
        <div style="background-color: #27467A; color: #fff; border-radius: 8px;" class="call-icon p-2"><a
                href="tel:+917879998811"><i class="fas fa-phone-alt"></i></a></div>
    </div>

    <div class="menu-overlay"></div>

    <nav class="menu">
        <div class="d-flex align-items-center">
            <img style="width: 200px;" src="mobile-assets/index/logo-dark.png" alt="">
            <button class="close-menu"><i class="fas fa-times"></i></button>
        </div>

        <hr>

        <ul>

            <li onclick="toggleSubmenu('discover')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Discover RGU</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="discover">

                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">About Us</h2>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('preface') }}">
                    <li>Preface</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('leadership') }}">
                    <li>Leadership Team</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('advisory-leadership') }}">
                    <li>Advisory Leadership</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('vision-mission') }}">
                    <li>Vision and Mission</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('statutes-ordinance-policies') }}">
                    <li>Statutes, Ordinance and Policies</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('facilities') }}">
                    <li>Facilities</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('social-outreach') }}">
                    <li>Social Outreach</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('footprints') }}">
                    <li>Royal Footprints</li>
                </a>

                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">What Set Us Apart</h2>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('recognition-accreditation') }}">
                    <li>Recognition and Accreditation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('association-tieup') }}">
                    <li>Associations and Tie Ups</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('award') }}">
                    <li>Awards and Honors</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('top-recruiters') }}">
                    <li>Top Recruiters</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('success') }}">
                    <li>Success Stories</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('360-tour') }}">
                    <li>360 Tour</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('diversechoices') }}">
                    <li>Diverse Choices</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('diversity-inclusion') }}">
                    <li>Diversity and Inclusion</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('strategic-location') }}">
                    <li>Strategic Location</li>
                </a>

                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">Statutory Bodies</h2>

                <li onclick="toggleSubmenu('authorities')"
                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="mobile-para1" style="color: #27467A;">Statutory Authorities</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <ul class="submenu mobile-para1" id="authorities" style="padding-left: 20px;">
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('governing-body') }}">Governing
                            Body</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('board-of-management') }}">Board
                            of Management</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('academic-council') }}">Academic
                            Council</a></li>
                    <li><a class="dropdown-item text-dark para1"
                            href="{{ route('internal-complaints-committee') }}">Internal Complaints Committee</a></li>
                    <li><a class="dropdown-item text-dark para1"
                            href="{{ route('university-research-committee') }}">University Research Committee</a></li>
                    {{-- <li><a class="dropdown-item text-dark para1"
                            href="{{ route('institutional-ethical-committee') }}">Institutional Ethical
                            Committee (IEC)</a></li> --}}
                </ul>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('finance-committee') }}">
                    <li>Finance Committee</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('internal-complaints-committee') }}">
                    <li>Internal Complaints Committee</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('anti-ragging') }}">
                    <li>Anti Ragging Committee</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('equal-opportunities-cell') }}">
                    <li>Equal Opportunities Cell</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('proctorial') }}">
                    <li>Proctoral Board</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('organogram-planning') }}">
                    <li>Organogram and Planning</li>
                </a>

            </ul>



            <li onclick="toggleSubmenu('academics')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Academics</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="academics">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('schools-rgu') }}">
                    <li>Our Schools and Faculties</li>
                </a>
                {{-- <a class="mobile-para1" style="color: #27467A;" href="{{ route('deans') }}">
                    <li>Deans</li>
                </a> --}}
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('phd') }}">
                    <li>Doctoral Programme</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('multi-disciplinary') }}">
                    <li>Multidisciplinary/<br>
                        Interdisciplinary Courses</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('achievements') }}">
                    <li>Achievements</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('academic-calendar') }}">
                    <li>Academic Calendar</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('workshops-guest-lectures') }}">
                    <li>Guest Lectures/Workshops</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('innovation') }}">
                    <li>Institution's Innovation Council (IIC-RGU)</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('library-Resources') }}">
                    <li>Library</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('laboratories') }}">
                    <li>Laboratories</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('teaching-practice') }}">
                    <li>Teaching Practices</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;"
                    href="{{ route('human-resource-development-centre') }}">
                    <li>Royal Centre for Human Resource Development (RCHRD)</li>
                </a>
            </ul>



            <li onclick="toggleSubmenu('admission')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Admission</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="admission">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('faq') }}">
                    <li>Admission FAQs</li>
                </a>
                <a class="mobile-para1 text-danger" style="color: #27467A;" href="https://admissions.rgu.ac/">
                    <li>Apply Now!</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="doctoral-programme">
                    <li>Course Fee</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="programs">
                    <li>RGU Admission Eligibility & Selection Criteria
                    </li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('general-elective') }}">
                    <li>General Elective</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('how-to-apply') }}">
                    <li>How to Apply?</li>
                </a>
                <li onclick="toggleSubmenu('scholarship')"
                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">Scholarship and Funding</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <ul class="submenu mobile-para1" id="scholarship" style="padding-left: 20px;">
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('scholarship&funding') }}">Scholarships</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('deans-listers') }}">Deans
                            Lister</a></li>
                </ul>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('schemes-differently-abled') }}">
                    <li>Schemes for Differently-Abled</li>
                </a>
            </ul>


            <!--Cell-->
            {{-- <li onclick="toggleSubmenu('cell')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Cell/Centre</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="cell">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('phd-cell') }}">
                    <li>Ph.D. Cell</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('equal-opportunities-cell') }}">
                    <li>Equal Opportunities Cell</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('counselling-cell') }}">
                    <li>Counselling Cell</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('cisr') }}">
                    <li>CISR</li>
                </a>
            </ul> --}}


            <!--Convocation-->
            <li onclick="toggleSubmenu('convocation')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Convocation</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="convocation">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-fifth') }}">
                    <li>5th Convocation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-fourth') }}">
                    <li>4th Convocation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-third') }}">
                    <li>3rd Convocation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-second') }}">
                    <li>2nd Convocation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-first') }}">
                    <li>1st Convocation</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('honoris-causa') }}">
                    <li>Honoris Causa - Hall of Fame</li>
                </a>
            </ul>



            <!-- Campus Life -->
            <li onclick="toggleSubmenu('campuslife')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Campus Life</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <!-- AMENITIES Submenu -->
            <ul class="submenu mobile-para1" id="campuslife">

                <li onclick="toggleSubmenu('amenities')"
                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">Amenities</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Amenities Submenu -->
                <ul class="submenu mobile-para1" id="amenities" style="padding-left: 20px;">
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('banking-services') }}">Banking
                            Service</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('department-store') }}">Department Store</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('hangout') }}">1st
                            Hangouts</a>
                    </li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('medical-facility') }}">Medical
                            Facility</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('counselling-cell') }}">Counselling Cell</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('laundry') }}">Laundry</a>
                    </li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('salon') }}">Salon</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('stationary-store') }}">Stationary Store</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;"
                            href="{{ route('student-gallery') }}">Student
                            Gallery</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('guest-house') }}">Guest
                            House</a></li>
                </ul>

                <!-- Events Section -->
                <li onclick="toggleSubmenu('events')"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">Events</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Events Submenu -->
                <ul class="submenu mobile-para1" id="events" style="padding-left: 20px;">
                    <li><a class="happy-happening-campus" style="color: #27467A;"
                            href="{{ route('happy-happening') }}">Happy & Happening Campus</a></li>
                    <li><a class="Royal_Fests" style="color: #27467A;" href="{{ route('royal-fests') }}">Royal
                            Fests</a>
                    </li>
                </ul>

                <a class="mobile-para1" style="color: #27467A;" href="campus-life-games-sports">
                    <li>Games and Sports</li>
                </a>

                <!-- Hostel Section -->
                <li onclick="toggleSubmenu('hostel')"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">Hostel</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Hostel Submenu -->
                <ul class="submenu mobile-para1" id="hostel" style="padding-left: 20px;">
                    <li><a class="happy-happening-campus" style="color: #27467A;"
                            href="{{ route('hostel-life') }}">Hostel Life</a></li>
                    <li><a class="Royal_Fests" style="color: #27467A;"
                            href="{{ asset('assets/img/pdf/Hostel Policy Rules 2024.pdf') }}">Hostel Policy</a></li>
                </ul>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('infrastructure') }}">
                    <li>Infrastructure</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('clubs') }}">
                    <li>Clubs</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('student-affairs') }}">
                    <li>Student Affairs</li>
                </a>

            </ul>


            <!-- Placements Section -->
            <li onclick="toggleSubmenu('placement')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">Placement</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="placement">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-introduction') }}">
                    <li>Introduction</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-activities') }}">
                    <li>Activities Undertaken</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-facilities') }}">
                    <li>Facilities Available</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-process') }}">
                    <li>Placement Process</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-members') }}">
                    <li>Placement Members</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-events') }}">
                    <li>RCCR Events</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('top-recruiters') }}">
                    <li>Recruiters</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('success') }}">
                    <li>Testimonials</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placement-contacts') }}">
                    <li>Contacts</li>
                </a>
            </ul>


            <!-- International Section -->
            <li onclick="toggleSubmenu('International')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">International</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="International">
                {{-- <a class="mobile-para1" style="color: #27467A;" href="international-fee-structure">
                    <li>Course Fee</li>
                </a> --}}
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('international-faq') }}">
                    <li>FAQs</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="international-admission-guidelines">
                    <li>International Admission<br>Guidelines</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('frro-process') }}">
                    <li>FRRO Process</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="https://heyzine.com/flip-book/adfd7889ba.html">
                    <li>International Brochure</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('how-to-apply-international') }}">
                    <li>How to Apply?</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="international-student-helpline">
                    <li>International Student Helpline</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="campus-job">
                    <li>On-Campus Jobs</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="pre-arrival">
                    <li>Pre-Arrival</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="scholarships-international">
                    <li>Scholarship for International Students</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="visa-information">
                    <li>Visa Information</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="why-india">
                    <li>Why India?</li>
                </a>
            </ul>
    </nav>
</section>

<!--End Header-->

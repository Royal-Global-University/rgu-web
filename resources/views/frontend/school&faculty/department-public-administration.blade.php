@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <!-- till about dept  -->
            <section style="background-color: #fff8f0; padding-top: 80px; position: relative;">

                <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Public Administration</span>
                </h1>

                <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
                    Humanities & Social Sciences (RSHSS)
                </h2>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="txaa-slide-down-1">
                                <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async"
                                        src="mobile-assets/department-all/dept-public-admin/head-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Department of Public Administration is dedicated to the comprehensive study and practice
                                of Public
                                Governance, Policy-making, and Management within the Public sector. It boasts an
                                interdisciplinary
                                approach and is supported by experienced faculty and strong research output. The department
                                offers
                                practical training through summer internships, research projects and workshops ensuring
                                students gain
                                hands-on experience. Its innovative curriculum covers key areas such as Policy Analysis,
                                Public
                                Management, Indian Administration, Governance Ethics, Public Financial Management,
                                Regulatory
                                Governance, E-governance, Industrial Relations and Labour Law, Comparative Public
                                Administration, Local
                                Government like urban and rural development and Data Analysis or Research related to the
                                subject.

                                Graduates and Post-graduates are well-prepared for diverse careers in Government,
                                International
                                Organizations, Public Sector Consultancy, Academia, the Non-profit Sector, and the Private
                                Sector. They
                                can undertake roles such as policy analyst, administrative officer, public affairs manager,
                                consultant,
                                program evaluator, budget analyst, community development specialist, human resources
                                manager, urban
                                planner, environmental policy analyst, public health administrator, legislative assistant,
                                non-profit
                                manager, academician or researcher, international development specialist, and public sector
                                IT manager.
                                The Department's emphasis on ethical practices and good governance equips students to lead
                                and manage
                                public organizations effectively. With a strong foundation and focus on theoretical
                                understanding and
                                analytical skills, the Department of Public Administration ensures its graduates are ready
                                to meet the
                                evolving demands of public service and contribute significantly to society.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="pt-3">

                    <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                        <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img src="mobile-assets/department-all/dept-public-admin/vision-mission-mob.png" alt="">
                </div>


            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container">
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                                        <br> Honours / Honours with Research
                                    </p>

                                </td>
                                <td>
                                    4 years as per NEP
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <!-- courses offered  -->

            <!-- events and highlights  -->
            <div class="container pt-3 pb-5 d-lg-none">

                <!-- Mobile Events Section -->
                <div class="mb-4">
                    <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Events</h2>

                    <div style="border: 1px solid #ccc;">
                        <div id="mobileEventScroll" style="height: 300px; overflow: hidden;">
                            <table class="table table-bordered mb-0" style="font-size: 15px;">
                                <tbody id="mobileEventContent" class="para1" style="background-color: #f9f9f9;">

                                    <tr>
                                        <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati
                                            University, was the
                                            guest speaker for the session on ‘Election Commission and Model Code of
                                            Conduct’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science
                                            at Gauhati
                                            University, was the guest speaker for the session on ‘Election Commission and
                                            Model Code of
                                            Conduct’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Mohinder Singh, Visiting Professor in the Department of Political Science
                                            and Public
                                            Administration at RIMT University Punjab, served as a resource person for the
                                            ‘Online FDP on
                                            Emerging Areas of Research in Public Administration’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Jayanta Krishna Sharmah, Dean, Professor and Head in the Department of
                                            Political Science at
                                            Gauhati University, served as a resource person for the ‘Online FDP on Emerging
                                            Areas of Research
                                            in Public Administration’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Janak Singh Meena, Professor and Head in the Department of Gandhian Thought
                                            and Peace
                                            Studies at the Central University of Gujarat, served as a resource person for
                                            the ‘Online FDP on
                                            Emerging Areas of Research in Public Administration’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati
                                            University, also
                                            served as a resource person for the ‘Online FDP on Emerging Areas of Research in
                                            Public
                                            Administration’.</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science
                                            at Gauhati
                                            University, also served as a resource person for the ‘Online FDP on Emerging
                                            Areas of Research in
                                            Public Administration’.</td>
                                    </tr>
                                    <tr>
                                        <td>Shri Dipak Kumar Sharma, Chairman of the Indian Institute of Public
                                            Administration, Assam, was
                                            the guest speaker for the ‘Interactive Session on Civic Responsibility For Good
                                            Governance’.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <button class="para1"
                            style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                            View All
                        </button>
                    </div>

                    <script>
                        const mobileScrollContainer = document.getElementById('mobileEventScroll');
                        const mobileScrollContent = document.getElementById('mobileEventContent');
                        mobileScrollContent.innerHTML += mobileScrollContent.innerHTML;
                        let mobileScrollPos = 0;
                        const mobileScrollSpeed = 0.2;

                        function scrollMobileEvents() {
                            mobileScrollPos += mobileScrollSpeed;
                            if (mobileScrollPos >= mobileScrollContent.scrollHeight / 2) {
                                mobileScrollPos = 0;
                            }
                            mobileScrollContainer.scrollTop = mobileScrollPos;
                            requestAnimationFrame(scrollMobileEvents);
                        }

                        scrollMobileEvents();
                    </script>
                </div>

                <!-- Mobile Highlights Carousel -->
                <div>
                    <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Departmental <span
                            style="color: #FF9A1E;">Highlights</span></h2>

                    <div id="mobileCarouselIndicators" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg"
                                    class="d-block w-100 popup-img-mob" alt="...">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarouselIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mobileCarouselIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <!-- Popup Modal -->
                    <div id="mobileImagePopup"
                        style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.9); z-index:1050; justify-content:center; align-items:center;">
                        <span onclick="closeMobilePopup()"
                            style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
                        <img id="mobilePopupImage" src=""
                            style="max-width:90vw; max-height:90vh; border:5px solid white; border-radius:10px;">
                    </div>

                    <script>
                        document.querySelectorAll('.popup-img-mob').forEach(img => {
                            img.addEventListener('click', () => {
                                document.getElementById('mobilePopupImage').src = img.src;
                                document.getElementById('mobileImagePopup').style.display = 'flex';
                            });
                        });

                        function closeMobilePopup() {
                            document.getElementById('mobileImagePopup').style.display = 'none';
                        }
                    </script>
                </div>

            </div>
            <!-- events and highlights  -->

            <div class="mt-3">
                <!-- WRAPPER -->
                <div>
                    <section style="background-color: #F0F8FF; border-bottom: 1px solid #023e8a;">
                        <div class="p-4"
                            style="background-image: url(mobile-assets/department-all/new-bg.svg); background-size: cover;">
                            <h2 class="headd1 text-center" style="color: #fff; font-size: 30px;">
                                Academic Excellence: <span style="color: #FEC100;">NET/ SET Qualified Students</span>
                            </h2>
                        </div>

                        <div class="container py-4">
                            <!-- Tab Buttons -->
                            <div class="d-flex justify-content-center mb-3 flex-wrap">
                                <button class="year-btn-netset" data-year="2025"
                                    style="border: none; border-radius: 10px; padding: 10px 60px; font-weight: 700; font-size: 18px; color: white; background: linear-gradient(to right, #000000, #005c99); margin: 5px;">
                                    2024
                                </button>
                                <!-- <button class="year-btn-netset" data-year="2024"
                            style="border: 2px solid #003366; border-radius: 10px; padding: 10px 60px; font-weight: 700; font-size: 18px; color: #003366; background-color: #f0f4ff; margin: 5px;">
                            2024
                          </button> -->
                            </div>

                            <hr style="margin: 0 0 20px 0;">

                            <!-- Tab Content for 2024 -->
                            <div id="tab-netset-2024" class="tab-content-netset d-none">
                                <div style="max-width: 500px; margin: 0 auto; overflow: hidden; position: relative;">
                                    <div id="carousel-netset-2024" style="display: flex; transition: transform 0.5s ease;">
                                        <!-- CARD 1 -->
                                        <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                                            <div
                                                style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                <div
                                                    style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                                    <img src="mobile-assets/department-all/dept-public-admin/ugc-net/AVOURINE JYRWA.jpg"
                                                        style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                                                </div>
                                                <div style="padding: 20px;">
                                                    <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">
                                                        FAVOURINE JYRWA</h4>
                                                    <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                                    <button
                                                        style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                                        2023 - 25</button>
                                                    <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CARD 2 -->
                                        <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                                            <div
                                                style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                <div
                                                    style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                                    <img src="mobile-assets/department-all/dept-social-work/ugc-section/hiba.jpg"
                                                        style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                                                </div>
                                                <div style="padding: 20px;">
                                                    <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">HIBA
                                                        ANSARI</h4>
                                                    <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                                    <button
                                                        style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                                        2023 - 25</button>
                                                    <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for 2025 -->
                            <div id="tab-netset-2025" class="tab-content-netset">
                                <div style="max-width: 500px; margin: 0 auto; overflow: hidden; position: relative;">
                                    <div id="carousel-netset-2025" style="display: flex; transition: transform 0.5s ease;">
                                        <!-- CARD -->
                                        <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                                            <div
                                                style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                                <div
                                                    style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                                    <img src="mobile-assets/department-all/dept-public-admin/ugc-net/AVOURINE JYRWA.jpg"
                                                        style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                                                </div>
                                                <div style="padding: 20px;">
                                                    <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">
                                                        FAVOURINE JYRWA</h4>
                                                    <p class="para1" style="margin: 5px 0; color: #003366;">Public
                                                        Administration</p>
                                                    <button
                                                        style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                                        2022 - 24</button>
                                                    <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">Dec 2024
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Scripts -->
                            <script>
                                let carouselIntervals = {};

                                function setupNetsetCarousel(carouselId) {
                                    const carousel = document.getElementById(carouselId);
                                    let currentIndex = 0;
                                    const totalSlides = carousel.children.length;

                                    function updateSlider() {
                                        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                                    }

                                    clearInterval(carouselIntervals[carouselId]);
                                    carouselIntervals[carouselId] = setInterval(() => {
                                        currentIndex = (currentIndex + 1) % totalSlides;
                                        updateSlider();
                                    }, 3000);
                                }

                                function handleTabSwitchNetset(year) {
                                    document.querySelectorAll('.tab-content-netset').forEach(el => el.classList.add('d-none'));
                                    document.getElementById('tab-netset-' + year).classList.remove('d-none');

                                    document.querySelectorAll('.year-btn-netset').forEach(btn => {
                                        btn.style.background = '#f0f4ff';
                                        btn.style.color = '#003366';
                                        btn.style.border = '2px solid #003366';
                                    });

                                    document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.background = 'linear-gradient(to right, #000000, #005c99)';
                                    document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.color = 'white';
                                    document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.border = 'none';

                                    setupNetsetCarousel('carousel-netset-' + year);
                                }

                                document.querySelectorAll('.year-btn-netset').forEach(btn => {
                                    btn.addEventListener('click', function () {
                                        const year = this.getAttribute('data-year');
                                        handleTabSwitchNetset(year);
                                    });
                                });

                                // Init first tab
                                handleTabSwitchNetset('2025');
                            </script>
                        </div>
                    </section>
                </div>

            </div>

        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <section style="background-color: #FFF8F0;">
                <div class="p-5">
                    <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                        <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Public Administration</span>
                    </h1>

                    <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                        <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                        Humanities & Social Sciences (RSHSS)
                    </h2>
                </div>

                <div class="container p-4">
                    <div class="row align-items-center gx-5">

                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div>
                                    <img class="rounded w-60" decoding="async"
                                        src="mobile-assets/department-all/dept-public-admin/head-img.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Department of Public Administration is dedicated to the comprehensive study and practice
                                of Public
                                Governance, Policy-making, and Management within the Public sector. It boasts an
                                interdisciplinary
                                approach and is supported by experienced faculty and strong research output. The department
                                offers
                                practical training through summer internships, research projects and workshops ensuring
                                students gain
                                hands-on experience. Its innovative curriculum covers key areas such as Policy Analysis,
                                Public
                                Management, Indian Administration, Governance Ethics, Public Financial Management,
                                Regulatory
                                Governance, E-governance, Industrial Relations and Labour Law, Comparative Public
                                Administration, Local
                                Government like urban and rural development and Data Analysis or Research related to the
                                subject.

                            </p>

                        </div>

                    </div>
                </div>

                <div class="bg-white">
                    <p class="para1 container" style="color: #24477f; text-align: justify; padding: 30px 0px;">
                        Graduates and Post-graduates are well-prepared for diverse careers in Government, International
                        Organizations, Public Sector Consultancy, Academia, the Non-profit Sector, and the Private Sector.
                        They
                        can undertake roles such as policy analyst, administrative officer, public affairs manager,
                        consultant,
                        program evaluator, budget analyst, community development specialist, human resources manager, urban
                        planner, environmental policy analyst, public health administrator, legislative assistant,
                        non-profit
                        manager, academician or researcher, international development specialist, and public sector IT
                        manager.
                        The Department's emphasis on ethical practices and good governance equips students to lead and
                        manage
                        public organizations effectively. With a strong foundation and focus on theoretical understanding
                        and
                        analytical skills, the Department of Public Administration ensures its graduates are ready to meet
                        the
                        evolving demands of public service and contribute significantly to society.
                    </p>
                </div>

                <div style="background-color: #fff;">
                    <div class="p-5">
                        <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                            <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                        </h1>

                        <img class="w-100" src="mobile-assets/department-all/dept-public-admin/vision-mission-web.png"
                            alt="">
                    </div>
                </div>


            </section>


            <div class="container">
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                                        <br> Honours / Honours with Research
                                    </p>

                                </td>
                                <td>
                                    4 years as per NEP
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <!--About Section-->

            <div class="container pb-5 pt-3">

                <!-- events  -->
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-lg-6">
                        <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events </h2>

                        <div style="max-width: 100%; position: relative;">
                            <div style="border: 1px solid #ccc;">

                                <div id="scrollContainer" style="height: 315px; overflow: hidden;">
                                    <table class="table table-bordered mb-0" style="font-size: 16px;">
                                        <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">

                                            <tr>
                                                <td>Dr. D.P. Sharma, Professor in the Department of Political Science at
                                                    Gauhati University, was
                                                    the guest speaker for the session on ‘Election Commission and Model Code
                                                    of Conduct’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political
                                                    Science at Gauhati
                                                    University, was the guest speaker for the session on ‘Election
                                                    Commission and Model Code of
                                                    Conduct’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Mohinder Singh, Visiting Professor in the Department of Political
                                                    Science and Public
                                                    Administration at RIMT University Punjab, served as a resource person
                                                    for the ‘Online FDP on
                                                    Emerging Areas of Research in Public Administration’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Jayanta Krishna Sharmah, Dean, Professor and Head in the Department
                                                    of Political Science
                                                    at Gauhati University, served as a resource person for the ‘Online FDP
                                                    on Emerging Areas of
                                                    Research in Public Administration’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Janak Singh Meena, Professor and Head in the Department of Gandhian
                                                    Thought and Peace
                                                    Studies at the Central University of Gujarat, served as a resource
                                                    person for the ‘Online FDP
                                                    on Emerging Areas of Research in Public Administration’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. D.P. Sharma, Professor in the Department of Political Science at
                                                    Gauhati University,
                                                    also served as a resource person for the ‘Online FDP on Emerging Areas
                                                    of Research in Public
                                                    Administration’.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political
                                                    Science at Gauhati
                                                    University, also served as a resource person for the ‘Online FDP on
                                                    Emerging Areas of Research
                                                    in Public Administration’.</td>
                                            </tr>
                                            <tr>
                                                <td>Shri Dipak Kumar Sharma, Chairman of the Indian Institute of Public
                                                    Administration, Assam,
                                                    was the guest speaker for the ‘Interactive Session on Civic
                                                    Responsibility For Good
                                                    Governance’.</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div style="text-align: center; margin-top: 10px;">
                                <button class="para1"
                                    style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                                    View All
                                </button>
                            </div>
                        </div>

                        <script>
                            const scrollContainer = document.getElementById('scrollContainer');
                            const scrollContent = document.getElementById('scrollContent');

                            // Duplicate content for infinite scroll
                            scrollContent.innerHTML += scrollContent.innerHTML;

                            let scrollPos = 0;
                            const scrollSpeed = 0.2;

                            function scrollStep() {
                                scrollPos += scrollSpeed;
                                if (scrollPos >= scrollContent.scrollHeight / 2) {
                                    scrollPos = 0;
                                }
                                scrollContainer.scrollTop = scrollPos;
                                requestAnimationFrame(scrollStep);
                            }

                            scrollStep();
                        </script>


                    </div>

                    <div class="col-lg-6">
                        <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Departmental <span style="color: #FF9A1E; font-weight: 500;">Highlights</span></h2>

                        <!-- Carousel with Popup Image -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="2000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                    aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                                    aria-label="Slide 8"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                                    aria-label="Slide 9"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                                    aria-label="Slide 10"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"
                                    aria-label="Slide 11"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg"
                                        class="d-block w-100 popup-img-mob" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <!-- Popup Modal -->
                        <div id="imagePopup"
                            style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.9); z-index:1050; justify-content:center; align-items:center;">
                            <span onclick="closePopup()"
                                style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
                            <img id="popupImage" src=""
                                style="max-width:90vw; max-height:90vh; border:5px solid white; border-radius:10px;">
                        </div>

                        <script>
                            // Handle image click
                            document.querySelectorAll('.popup-img').forEach(img => {
                                img.addEventListener('click', () => {
                                    document.getElementById('popupImage').src = img.src;
                                    document.getElementById('imagePopup').style.display = 'flex';
                                });
                            });

                            // Close popup
                            function closePopup() {
                                document.getElementById('imagePopup').style.display = 'none';
                            }
                        </script>

                    </div>
                </div>
                <!-- events  -->

            </div>

            <div class="section"
                style="background-image: url(mobile-assets/department-all/new-bg.svg); background-size: cover;">

                <h2 class="headd1 text-center pt-4" style="color: #fff; font-size: 50px;">
                    Academic Excellence
                </h2>

                <div class="row" style="padding: 0px 40px;">
                    <div class="col-lg-6">

                        <div style=" height: 80vh;">
                            <div class="container pb-5">
                                <div class="row align-items-center justify-content-center" style="height: 100%;">

                                    <!-- Left Column -->
                                    <div class="col-lg-12" style="padding-top: 3%; animation: fadeSlideLeft 1.5s ease-out;">
                                        <h2 class="headd1 text-center fw-bold"
                                            style="color: #FF9A1E; font-size: 30px; margin-bottom: 10px;">Government Job
                                        </h2>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-lg-12" style="padding-top: 2%;">

                                        <!-- Year Buttons -->
                                        <div style="display: flex; justify-content: center; margin-bottom: 16px;"
                                            id="yearFilterContainer">


                                            <button class="year-btn active" data-year="2024"
                                                style="padding: 6px 30px; margin: 0 8px; border: 1.5px solid #FF9A1E; background: #FF9A1E; color: white; font-weight: bold; border-radius: 25px; cursor: pointer;">2024</button>

                                            <button class="year-btn " data-year="2023"
                                                style="padding: 6px 30px; margin: 0 8px; border: 1.5px solid white; background: transparent; color: white; font-weight: bold; border-radius: 25px; cursor: pointer;">2023</button>


                                        </div>

                                        <!-- Carousel -->
                                        <div id="carouselNETSET" class="carousel slide" data-bs-ride="carousel"
                                            data-bs-interval="3000"
                                            style="border-radius: 20px; background: white; overflow: hidden; height: 350px; width: 650px; margin: auto;">
                                            <div class="carousel-indicators" id="carouselIndicatorsNETSET"></div>
                                            <div class="carousel-inner p-4" id="carouselInnerNETSET"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Animation Style (inline via JS) -->
                        <script>
                            // Define keyframes for fade+slide animation
                            const style = document.createElement('style');
                            style.innerHTML = `
            @keyframes fadeSlideLeft {
              from { opacity: 0; transform: translateX(-40px); }
              to { opacity: 1; transform: translateX(0); }
            }
          `;
                            document.head.appendChild(style);
                        </script>

                        <script>
                            const dataByYear = {

                                "2024": [
                                    {
                                        img: "mobile-assets/department-all/no-pic.jpg",
                                        name: "Astrita Phonglo",
                                        subject: "MA Public Administration",
                                        text: "Batch: 2022 - 23",
                                        year: ""
                                    }
                                ],

                                "2023": [
                                    {
                                        img: "mobile-assets/department-all/no-pic.jpg",
                                        name: "Grikanchie M Sangma",
                                        subject: "PHD Public Administration",
                                        text: "Batch: Pursuing",
                                        year: ""
                                    },

                                ],

                            };

                            const inner = document.getElementById("carouselInnerNETSET");
                            const indicators = document.getElementById("carouselIndicatorsNETSET");
                            const controls = document.querySelectorAll('#carouselNETSET .carousel-control-prev, #carouselNETSET .carousel-control-next');
                            const yearButtons = document.querySelectorAll('.year-btn');

                            function updateCarousel(year) {
                                const slides = dataByYear[year] || [];
                                inner.innerHTML = '';
                                indicators.innerHTML = '';

                                slides.forEach((item, index) => {
                                    const slide = document.createElement("div");
                                    slide.className = `carousel-item${index === 0 ? ' active' : ''}`;
                                    slide.style.transition = "transform 1s ease-in-out";
                                    slide.innerHTML = `
                <div class="d-flex align-items-center">
                  <img src="${item.img}" class="rounded border shadow-sm" style="width: 40%; height: 270px; object-fit: cover; margin-right: 20px;">
                  <div>

                    <div style="color: #27467A; font-size: 35px; padding: 10px 0px;" class="fw-bold">${item.name}</div>

                    <small class="mb-5" style="color: #333; font-size: 26px;">${item.subject}</small>


                    <p style="font-size: 20px; padding-bottom: 10px; font-weight: 800; border-radius: 15px;">${item.year}</p>

                    <p style="font-size: 20px; padding: 5px 20px; background-color: #FF9A1E; color: #27467A; font-weight: 800; border-radius: 15px;">${item.text}</p>
                  </div>
                </div>
              `;
                                    inner.appendChild(slide);

                                    const indicator = document.createElement("button");
                                    indicator.type = "button";
                                    indicator.setAttribute("data-bs-target", "#carouselNETSET");
                                    indicator.setAttribute("data-bs-slide-to", index);
                                    indicator.setAttribute("aria-label", `Slide ${index + 1}`);
                                    indicator.style.backgroundColor = "#023e8a";
                                    if (index === 0) {
                                        indicator.className = "active";
                                        indicator.setAttribute("aria-current", "true");
                                    }
                                    indicators.appendChild(indicator);
                                });

                                if (slides.length <= 1) {
                                    indicators.style.display = "none";
                                    controls.forEach(c => c.style.display = "none");
                                } else {
                                    indicators.style.display = "flex";
                                    controls.forEach(c => c.style.display = "block");
                                }
                            }

                            yearButtons.forEach(btn => {
                                btn.addEventListener("click", () => {
                                    yearButtons.forEach(b => {
                                        b.style.background = "transparent";
                                        b.style.color = "white";
                                        b.style.border = "1.5px solid white";
                                    });

                                    btn.style.background = "#FF9A1E";
                                    btn.style.color = "white";
                                    btn.style.border = "1.5px solid #FF9A1E";

                                    updateCarousel(btn.getAttribute("data-year"));
                                });
                            });

                            // Load default view (2023)
                            updateCarousel("2024");
                        </script>
                    </div>

                    <div class="col-lg-6">

                        <div style="height: 80vh;">
                            <div class="container pb-5">
                                <div class="row align-items-center justify-content-center" style="height: 100%;">

                                    <!-- Text Section -->
                                    <div class="col-lg-12" style="padding-top: 3%; animation: fadeSlideLeft 1.5s ease-out;">
                                        <h2 class="headd1 text-center fw-bold"
                                            style="color: #FF9A1E; font-size: 30px; margin-bottom: 10px;">UGC NET Qualified
                                        </h2>
                                    </div>

                                    <!-- Carousel Section -->
                                    <div class="col-lg-12" style="padding-top: 2%;">

                                        <!-- Year Filter Buttons -->
                                        <div style="display: flex; justify-content: center; margin-bottom: 16px;"
                                            id="yearButtonPanel">
                                            <button class="filter-year-btn active" data-year="2024">2024</button>
                                            <!-- <button class="filter-year-btn" data-year="2024">2024</button>
                            <button class="filter-year-btn" data-year="2025">2025</button> -->
                                        </div>

                                        <!-- Carousel Container -->
                                        <div id="carouselAchievers" class="carousel slide" data-bs-ride="carousel"
                                            data-bs-interval="3000"
                                            style="border-radius: 20px; background: white; overflow: hidden; height: 350px; margin: auto; width: 650px;">
                                            <div class="carousel-indicators" id="carouselIndicatorsAchievers"></div>
                                            <div class="carousel-inner p-4" id="carouselInnerAchievers"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Animation Keyframes -->
                        <script>
                            const slideStyle = document.createElement('style');
                            slideStyle.innerHTML = `
          @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
          }

          .filter-year-btn {
            padding: 6px 30px;
            margin: 0 8px;
            border: 1.5px solid white;
            background: transparent;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
          }

          .filter-year-btn.active {
            background: #FF9A1E;
            border-color: #FF9A1E;
            color: white;
          }
        `;
                            document.head.appendChild(slideStyle);
                        </script>

                        <!-- Carousel Script -->
                        <script>
                            const achieverData = {
                                "2024": [
                                    {
                                        img: "mobile-assets/department-all/dept-public-admin/candidates/ugc-net1.jpg",
                                        name: "Favourine Jyrwa",
                                        subject: "MA Public Administration",
                                        text: "Batch: 2022 - 24",
                                        year: ""
                                    }

                                ]

                            };

                            const innerAchievers = document.getElementById("carouselInnerAchievers");
                            const indicatorsAchievers = document.getElementById("carouselIndicatorsAchievers");
                            const yearBtnGroup = document.querySelectorAll(".filter-year-btn");

                            function loadCarouselContent(year) {
                                const content = achieverData[year] || [];
                                innerAchievers.innerHTML = '';
                                indicatorsAchievers.innerHTML = '';

                                content.forEach((item, index) => {
                                    const card = document.createElement("div");
                                    card.className = `carousel-item${index === 0 ? ' active' : ''}`;
                                    card.style.transition = "transform 1s ease-in-out";
                                    card.innerHTML = `
              <div class="d-flex align-items-center">
                <img src="${item.img}" class="rounded border shadow-sm" style="width: 40%; height: 270px; object-fit: cover; margin-right: 20px;">
                <div>
                  <div style="color: #27467A; font-size: 35px; padding: 10px 0;" class="fw-bold">${item.name}</div>
                  <small style="color: #333; font-size: 26px;">${item.subject}</small>
                  <p style="font-size: 20px; font-weight: 800;">${item.year}</p>
                  <p style="font-size: 20px; padding: 5px 20px; background-color: #FF9A1E; color: #27467A; font-weight: 800; border-radius: 15px;">${item.text}</p>
                </div>
              </div>
            `;
                                    innerAchievers.appendChild(card);

                                    const dot = document.createElement("button");
                                    dot.type = "button";
                                    dot.setAttribute("data-bs-target", "#carouselAchievers");
                                    dot.setAttribute("data-bs-slide-to", index);
                                    dot.setAttribute("aria-label", `Slide ${index + 1}`);
                                    dot.style.backgroundColor = "#023e8a";
                                    if (index === 0) {
                                        dot.className = "active";
                                        dot.setAttribute("aria-current", "true");
                                    }
                                    indicatorsAchievers.appendChild(dot);
                                });
                            }

                            yearBtnGroup.forEach(btn => {
                                btn.addEventListener("click", () => {
                                    yearBtnGroup.forEach(b => b.classList.remove("active"));
                                    btn.classList.add("active");
                                    loadCarouselContent(btn.getAttribute("data-year"));
                                });
                            });

                            // Initial load
                            loadCarouselContent("2024");
                        </script>

                    </div>
                </div>

            </div>

            <!--End Section-->
        </div>

        <div class="container">

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in D-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Dr. Meenu Sharma, Head, Department of Public Administration
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Ms. Mabel Aind, Assistant Professor
                                        <hr />
                                        Ms. Nikita Biswakarma,, Teaching Assistant
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Prof. Inderjeet Singh Sodhi, Professor, RGNIYD, TN.
                                        <hr />
                                        Prof. Mamta Mokta, Dean, Social Science, HPU, Shimla
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                    </h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1.</td>
                                    <td>Head of the Department</td>
                                    <td>Dr. Meenu</td>
                                    <td>Professor</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr. Monika Kumari</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr. Upendra Tripathi</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">3.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. Swabera Islam</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Gautam Majumdar</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Shiela Bora</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion para1" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed"
                                            style="background-color: #264273; color: #fff;" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne"><strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/course-structure.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - UG

                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/ba-public-admin.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - BA Public Administration

                                                    <i class="fa fa-download"></i>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed"
                                            style="background-color: #264273; color: #fff;" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/ma-public-admin.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - MA Public Administration
                                                    <i class="fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed"
                                            style="background-color: #264273; color: #fff;" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <strong>
                                                Doctoral Programme
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a href="phd" class="para1" target="_blank"><strong>
                                                    Click to View...
                                                </strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection

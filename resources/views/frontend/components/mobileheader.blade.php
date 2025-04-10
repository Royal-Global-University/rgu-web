<!--Start Header-->
<section>
    <div class="navbar">
        <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="logo">
            <a href="/"><img style="height: 70px;" src="mobile-assets/index/logo-dark.png" alt="Logo"></a>
        </div>
        <div style="background-color: #27467A; color: #fff; border-radius: 8px;" class="call-icon p-2"><a href="tel:+917879998811"><i
                class="fas fa-phone-alt"></i></a></div>
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
                <span class="mobile-headd3 text-dark">DISCOVER RGU</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="discover">

                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">ABOUT US</h2>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('preface') }}">
                    <li>PREFACE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('leadership') }}">
                    <li>LEADERSHIP TEAM</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('officers') }}">
                    <li>OFFICERS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('vision-mission') }}">
                    <li>VISION AND MISSION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('statutes-ordinance-policies') }}">
                    <li>STATUTES, ORDINANCE AND POLICIES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('facilities') }}">
                    <li>FACILITIES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('social-outreach') }}">
                    <li>SOCIAL OUTREACH</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('footprints') }}">
                    <li>ROYAL FOOTPRINTS</li>
                </a>


                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">WHAT SET US APART</h2>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('recognition-accreditation') }}">
                    <li>RECOGNITION AND ACCREDITATION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('association-tieup') }}">
                    <li>ASSOCIATIONS AND TIE UPS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('award') }}">
                    <li>AWARDS AND HONORS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('top-recruiters') }}">
                    <li>TOP RECRUITERS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('success') }}">
                    <li>SUCCESS STORIES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('360-tour') }}">
                    <li>360 TOUR</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('diversechoices') }}">
                    <li>DIVERSE CHOICES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('diversity-inclusion') }}">
                    <li>DIVERSITY AND INCLUSION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('strategic-location') }}">
                    <li>STRATEGIC LOCATION</li>
                </a>

                <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">STATUTORY BODIES</h2>

                <a class="mobile-para1" style="color: #27467A;" href="{{ route('governing-body') }}">
                    <li>GOVERNING BODY</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('board-of-management') }}">
                    <li>BOARD OF MANAGEMENT</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('academic-council') }}">
                    <li>ACADEMIC COUNCIL</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('finance-committee') }}">
                    <li>FINANCE COMMITTEE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('internal-complaints-committee') }}">
                    <li>INTERNAL COMPLAINTS COMMITTEE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('anti-ragging') }}">
                    <li>ANTI RAGGING COMMITTEE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('equal-opportunities-cell') }}">
                    <li>EQUAL OPPORTUNITIES CELL</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('proctorial') }}">
                    <li>PROCTORAL BOARD</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('organogram-planning') }}">
                    <li>ORGANOGRAM AND PLANNING</li>
                </a>

            </ul>


            <li onclick="toggleSubmenu('academics')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">ACADEMICS</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="academics">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('schools-rgu') }}">
                    <li>OUR SCHOOLS AND FACULTIES</li>
                </a>
                {{-- <a class="mobile-para1" style="color: #27467A;" href="{{ route('deans') }}">
                    <li>DEANS</li>
                </a> --}}
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('phd') }}">
                    <li>DOCTORAL PROGRAMME</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('achievements') }}">
                    <li>ACHIEVEMENTS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('academic-calendar') }}">
                    <li>ACADEMIC CALENDAR</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('workshops-guest-lectures') }}">
                    <li>GUEST LECTURES/ WORKSHOPS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('innovation') }}">
                    <li>INSTITUTION'S INNOVATION COUNCIL (IIC-RGU)</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('library-Resources') }}">
                    <li>LIBRARY</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('laboratories') }}">
                    <li>LABORATORIES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('teaching-practice') }}">
                    <li>TEACHING PRACTICES</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('human-resource-development-centre') }}">
                    <li>ROYAL CENTERE FOR HUMAN RESOURCE DEVELOPMENT (RCHRD)</li>
                </a>

            </ul>


            <li onclick="toggleSubmenu('admission')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">ADMISSION</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="admission">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('faq') }}">
                    <li>ADMISSION FAQs</li>
                </a>
                <a class="mobile-para1 text-danger" style="color: #27467A;" href="https://admissions.rgu.ac/">
                    <li>APPLY NOW!</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="doctoral-programme">
                    <li>COURSE FEE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="#">
                    <li>ELIGIBILITY AND SELECTION CRITERIA</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('general-elective') }}">
                    <li>GENERAL ELECTIVE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('how-to-apply') }}">
                    <li>HOW TO APPLY?</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="programs">
                    <li>PROGRAMMES</li>
                </a>
                <li onclick="toggleSubmenu('scholarship')"
                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">SCHOLARSHIP AND FUNDING</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <ul class="submenu mobile-para1" id="scholarship" style="padding-left: 20px;">
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('scholarship&funding') }}">SCHOLARSHIPS</a>
                    </li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('deans-listers') }}">DEANS LISTER</a>
                    </li>
                </ul>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('schemes-differently-abled') }}">
                    <li>SCHEMES FOR DIFFERENTLY-ABLED</li>
                </a>
            </ul>



            <!--Convocation-->
            <li onclick="toggleSubmenu('convocation')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">CONVOCATION</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="convocation">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-fourth') }}">
                    <li>4th CONVOCATION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-third') }}">
                    <li>3rd CONVOCATION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-second') }}">
                    <li>2nd CONVOCATION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('convocation-first') }}">
                    <li>1st CONVOCATION</li>
                </a>
            </ul>


            <!-- Campus Life -->
            <li onclick="toggleSubmenu('campuslife')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">CAMPUS LIFE</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <!-- AMENITIES Submenu -->
            <ul class="submenu mobile-para1" id="campuslife">

                <li onclick="toggleSubmenu('amenities')"
                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">AMENITIES</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Campus Life -->
                <ul class="submenu mobile-para1" id="amenities" style="padding-left: 20px;">
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('banking-services') }}">BANKING
                            SERVICE</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('department-store') }}">DEPARTMENT
                            STORE</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('hangout') }}">1st HANGOUTS</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('medical-facility') }}">MEDICAL
                            FACILITY</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('counselling-cell') }}">COUNSELLING
                            CELL</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('laundry') }}">LAUNDRY</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('salon') }}">SALON</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('stationary-store') }}">STATIONARY
                            STORE</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('student-gallery') }}">STUDENT
                            GALLERY</a></li>
                    <li><a class="mobile-para1" style="color: #27467A;" href="{{ route('guest-house') }}">GUEST HOUSE</a>
                    </li>
                </ul>

                <!-- Events Section -->
                <li onclick="toggleSubmenu('events')"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">EVENTS</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Events Submenu -->
                <ul class="submenu mobile-para1" id="events" style="padding-left: 20px;">
                    <li><a class="happy-happening-campus" style="color: #27467A;"
                            href="{{ route('happy-happening') }}">HAPPY & HAPPENING CAMPUS</a></li>
                    <li><a class="Royal_Fests" style="color: #27467A;" href="{{ route('royal-fests') }}">ROYAL
                            FESTS</a></li>
                </ul>
                <a class="mobile-para1" style="color: #27467A;" href="campus-life-games-sports">
                    <li>GAMES AND SPORTS</li>
                </a>

                <!-- Hostel Section -->
                <li onclick="toggleSubmenu('hostel')"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <h2 class="mobile-para1 fw-bold" style="color: #27467A;">HOSTEL</h2>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <!-- Events Submenu -->
                <ul class="submenu mobile-para1" id="hostel" style="padding-left: 20px;">
                    <li><a class="happy-happening-campus" style="color: #27467A;"
                            href="{{ route('hostel-life') }}">HOSTEL LIFE</a></li>
                    <li><a class="Royal_Fests" style="color: #27467A;"
                            href="{{ asset('assets/img/pdf/Hostel Policy Rules 2024.pdf') }}">HOSTEL POLICY</a></li>
                </ul>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('infrastructure') }}">
                    <li>INFRASTRUCTURE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('clubs') }}">
                    <li>CLUBS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('student-affairs') }}">
                    <li>STUDENT AFFAIRS</li>
                </a>




            </ul>

            <!--PLACEMENTS section-->
            <li onclick="toggleSubmenu('placement')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">PLACEMENTS</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="placement">
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-introduction') }}">
                    <li>INTRODUCTION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-activities') }}">
                    <li>ACTIVITIES UNDERTAKEN</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-facilities') }}">
                    <li>FACILITIES AVAILABLE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-process') }}">
                    <li>PLACEMENT PROCESS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placements-events') }}">
                    <li>RCCR EVENTS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('top-recruiters') }}">
                    <li>RECRUITERS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('success') }}">
                    <li>TESTIMONIALS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('placement-contacts') }}">
                    <li>CONTACTS</li>
                </a>
            </ul>

            <!--INTERNATIONAL section-->
            <li onclick="toggleSubmenu('International')"
                style="display: flex; align-items: center; justify-content: space-between;">
                <span class="mobile-headd3 text-dark">INTERNATIONAL</span>
                <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
            </li>
            <ul class="submenu mobile-para1" id="International">
                <a class="mobile-para1" style="color: #27467A;" href="international-fee-structure">
                    <li>COURSE FEE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('international-faq') }}">
                    <li>FAQ'S</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('frro-process') }}">
                    <li>FRRO PROCESS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="{{ route('how-to-apply-international') }}">
                    <li>HOW TO APPLY ?</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="international-student-helpline">
                    <li>INTERNATIONAL STUDENT HELPLINE</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="campus-job">
                    <li>ON CAMPUS JOBS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="pre-arrival">
                    <li>PRE-ARRIVAL,</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="scholarships-international">
                    <li>SCHOLARSHIP FOR INTERNATIONAL STUDENTS</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="visa-information">
                    <li>VISA INFORMATION</li>
                </a>
                <a class="mobile-para1" style="color: #27467A;" href="why-india">
                    <li>WHY INDIA ?</li>
                </a>
            </ul>


    </nav>
</section>

<!--End Header-->

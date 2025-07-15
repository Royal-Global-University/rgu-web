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
                        style="color: #000000; font-weight: 600; font-size: 17px;">Discover RGU</a>

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
                                                href="{{ route('internal-complaints-committee') }}">Internal Complaints Committee</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('anti-ragging') }}">Anti
                                        Ragging <br> Committee</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('proctorial') }}">Proctorial
                                        Board</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('organogram-planning') }}">Organogram and <br> Planning</a></li>
                            </div>
                        </div>
                    </ul>
                </li>


                <!-- Academics -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Academics</a>
                    <ul class="dropdown-menu p-3"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 500px; overflow: hidden; border-top: 3px solid #e68900;">
                        <div class="row" style="display: flex;">
                            <div class="col-lg-6 p-2">

                                <li><a class="dropdown-item text-dark para1" href="{{ route('schools-rgu') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Our
                                        Schools And <br> Faculties</a></li>

                                <li><a class="dropdown-item text-dark para1" href="{{ route('phd') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Doctoral
                                        Programme</a></li>

                                <li><a class="dropdown-item text-dark para1" href="{{ route('multi-disciplinary') }}"
                                        style="font-size: 17px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Multidisciplinary/<br>
                                        Interdisciplinary Courses</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('net-set-gate-coaching') }}"
                                        style="font-size: 17px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">NET/SET/GATE<br>
                                        Coaching</a> </li>


                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('workshops-guest-lectures') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Guest
                                        Lectures/ <br> Workshops</a></li>

                            </div>

                            <div class="col-lg-6 p-2">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('achievements') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Achievements</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('academic-calendar') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Academic
                                        Calendar</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('innovation') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Institution's
                                        Innovation <br> Council (IIC-RGU)</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('library-Resources') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Library</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('laboratories') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Laboratories</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('teaching-practice') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Teaching
                                        Practices</a></li>
                                <li><a class="dropdown-item text-dark para1"
                                        href="{{ route('human-resource-development-centre') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Royal
                                        Centre For Human <br> Resource Development <br> (RCHRD)</a></li>

                            </div>
                        </div>
                    </ul>
                </li>


                <!-- Admissions -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Admission</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 300px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('faq') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Admission
                                FAQs</a></li>
                        <li><a class="dropdown-item text-dark para1" target="_blank" href="https://admissions.rgu.ac/"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Apply
                                Now!</a></li>
                        <li><a class="dropdown-item text-dark para1" href="admission-programs-fees-structure"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Course
                                Fee</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('general-elective') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">General
                                Elective</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('how-to-apply') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">How
                                to Apply?</a></li>
                        <li><a class="dropdown-item text-dark para1" href="programs"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Eligibility
                                & Selection Criteria</a></li>

                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; line-height: 1.4;">Scholarship
                                and Funding</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('scholarship&funding') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Scholarships</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('deans-listers') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Dean's Lister</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('schemes-differently-abled') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Schemes
                                for Differently-Abled</a></li>
                    </ul>
                </li>


                <!-- Convocation -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Convocation</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-fourth') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Convocation
                                Four</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-third') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Convocation
                                Three</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-second') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Convocation
                                Two</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('convocation-first') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px; transition: background 0.3s ease; line-height: 1.4;">Convocation
                                One</a></li>

                    </ul>
                </li>

                <!-- Research -->
                <li class="nav-item" style="position: relative;">
                    <a class="nav-link para1" href="research-devlopment"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Research</a>
                </li>

                <!-- Campus Life with Submenu -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Campus Life</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -40%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        <!-- Amenities Submenu -->
                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Amenities</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('banking-services') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Banking
                                        Service</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('department-store') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Departmental
                                        Store</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('hangout') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Hangout</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('medical-facility') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Medical
                                        Facility</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('laundry') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Laundry</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('salon') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Salon</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('stationary-store') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Stationary
                                        Store</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('student-gallery') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Student
                                        Gallery</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('guest-house') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Guest House</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Events Submenu -->
                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Events</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('happy-happening') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Happy
                                        and<br>Happening Campus</a></li>
                                <li><a class="dropdown-item text-dark para1" href="{{ route('royal-fests') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Royal Fest</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('games&sports') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Games and Sports</a></li>

                        <!-- Hostel Submenu -->
                        <li class="dropdown-submenu" style="position: relative;">
                            <a class="dropdown-item text-dark dropdown-toggle para1" href="#"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Hostel</a>
                            <ul class="dropdown-menu"
                                style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                <li><a class="dropdown-item text-dark para1" href="{{ route('hostel-life') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Hostel Life</a>
                                </li>
                                <li><a class="dropdown-item text-dark para1" target="_blank"
                                        href="{{ asset('assets/img/pdf/Hostel Policy Rules 2024.pdf') }}"
                                        style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Hostel Policy</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item text-dark para1" href="{{ route('infrastructure') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Infrastructure</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('clubs') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Clubs</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('student-affairs') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Student Affairs</a></li>
                    </ul>
                </li>


                <!-- Placements -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">Placement</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -30%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-introduction') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Introduction</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-activities') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Activities Undertaken</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-facilities') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Facilities Available</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-process') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Placement Process</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placements-events') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">RCCR Events</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('top-recruiters') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Recruiters</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('success') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Testimonial</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('placement-contacts') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Contacts</a></li>

                    </ul>
                </li>


                <!-- International -->
                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle para1" href="#"
                        style="color: #000000; font-weight: 600; font-size: 17px;">International</a>
                    <ul class="dropdown-menu"
                        style="display: none; position: absolute; top: 100%; left: -40%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 220px; border-top: 3px solid #e68900;">

                        {{-- <li><a class="dropdown-item text-dark para1" href="international-fee-structure"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Course Fee</a></li> --}}
                        <li><a class="dropdown-item text-dark para1" href="{{ route('international-faq') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">International FAQs</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('frro-process') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">FRRO Process</a></li>
                        <li><a class="dropdown-item text-dark para1"
                                href="https://heyzine.com/flip-book/adfd7889ba.html"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">International Brochure</a>
                        </li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('how-to-apply-international') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">How to Apply?</a></li>
                        <li><a class="dropdown-item text-dark para1"
                                href="{{ route('international-student-helpline') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">International Student <br>
                                Helpline</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('campus-job') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">On Campus Job</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('pre-arrival') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Pre-Arrival,
                                Post-Arrival</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('scholarships-international') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Scholarship for <br>
                                International Students</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('visa-information') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Visa Information</a></li>
                        <li><a class="dropdown-item text-dark para1" href="{{ route('why-india') }}"
                                style="font-size: 16px; font-weight: 500; padding: 6px 20px;">Why India?</a></li>

                    </ul>
                </li>


            </ul>
        </div>

    </div>
</nav>
<!--End Header-->

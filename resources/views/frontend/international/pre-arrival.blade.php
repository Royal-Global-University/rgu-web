@extends('frontend/new-master')
@section('content')
    <style>
        .intl-guide-section {
            background: #dde3ee;
            padding: 70px 0;
        }

        .intl-guide-section .container {
            max-width: 1220px;
        }

        .intl-guide-top {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 35px;
            margin-bottom: 45px;
            align-items: start;
        }

        .intl-guide-image img {
            width: 100%;
            border-radius: 14px;
            display: block;
        }

        .intl-guide-title {
            font-family: "Playfair Display", serif;
            color: #27467a;
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .intl-guide-subtitle {
            color: #666;
            font-size: 1.8rem;
            line-height: 1.9;
            margin-bottom: 25px;
        }

        .intl-guide-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .intl-guide-list li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 18px;
            color: #555;
            font-size: 1.6rem;
            line-height: 1.9;
        }

        .intl-guide-list li::before {
            content: "";
            width: 8px;
            height: 8px;
            background: #e36c38;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 12px;
        }

        .intl-guide-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            margin-bottom: 50px;
        }

        .intl-guide-info h3,
        .intl-guide-content h3 {
            font-family: "Playfair Display", serif;
            color: #27467a;
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .intl-guide-card {
            background: #f8f7f6;
            border-radius: 16px;
            padding: 28px;
        }

        .intl-guide-card h3 {
            font-family: "Playfair Display", serif;
            color: #27467a;
            font-size: 2.6rem;
            margin-bottom: 18px;
            padding-bottom: 15px;
            border-bottom: 1px solid #d9d9d9;
        }

        .intl-guide-card p {
            font-size: 1.6rem;
            line-height: 1.9;
            color: #555;
        }

        .intl-guide-content p {
            color: #555;
            font-size: 1.6rem;
            line-height: 1.9;
        }

        .intl-guide-bottom {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 35px;
            margin-bottom: 50px;
        }

        .intl-guide-notes h2 {
            font-family: "Playfair Display", serif;
            color: #27467a;
            font-size: 3.3rem;
            margin-bottom: 25px;
        }

        .intl-guide-contact {
            background: #f8f7f6;
            border-radius: 18px 18px 50px 18px;
            padding: 35px;
        }

        .intl-guide-contact h2 {
            font-family: "Playfair Display", serif;
            color: #27467a;
            font-size: 2.8rem;
            margin-bottom: 15px;
        }

        .intl-guide-contact-line {
            height: 1px;
            background: #d7d7d7;
            margin-bottom: 25px;
        }

        .intl-guide-contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 18px;
        }

        .intl-guide-contact-item i {
            color: #e36c38;
            font-size: 18px;
            width: 20px;
        }

        .intl-guide-contact-item span {
            color: #555;
            font-size: 1.8rem;
        }

        @media(max-width:991px) {

            .intl-guide-top,
            .intl-guide-grid,
            .intl-guide-bottom {
                grid-template-columns: 1fr;
            }

            .intl-guide-title {
                font-size: 3.2rem;
            }

            .intl-guide-notes h2 {
                font-size: 2.8rem;
            }

            .intl-guide-contact h2 {
                font-size: 2.3rem;
            }
        }

        @media(max-width:767px) {

            .intl-guide-section {
                padding: 50px 0;
            }

            .intl-guide-title {
                font-size: 2.6rem;
            }

            .intl-guide-card h3,
            .intl-guide-info h3,
            .intl-guide-content h3 {
                font-size: 2rem;
            }

            .intl-guide-notes h2 {
                font-size: 2.2rem;
            }

            .intl-guide-contact h2 {
                font-size: 1.9rem;
            }
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/pre-post-arrival/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Pre-Arrival, Post-Arrival</h1>
            <div class="pg-hero-breadcrumb">
                International / Pre-Arrival, Post-Arrival
            </div>
        </div>

    </section>

    <section class="intl-guide-section">
        <div class="container">

            <!-- Row 1 -->
            <div class="intl-guide-top">

                <div class="intl-guide-image">
                    <img src="/new-web/assets/img/pre-post-arrival/img1.png" alt="">
                </div>

                <div class="intl-guide-checklist">

                    <h2 class="intl-guide-title">
                        Document Checklist
                    </h2>

                    <p class="intl-guide-subtitle">
                        Carry the original and photocopies of academic transcripts
                        (Mark sheet & Certificates) listed below and at least 10 passport-sized photographs.
                    </p>

                    <ul class="intl-guide-list">
                        <li>Original along with a photocopy of PASSPORT / NATIONAL ID and VISA.</li>

                        <li>
                            At the time of reporting and registration for your academic classes, provide the original
                            Fee Transfer Receipt (SWIFT Advice from your Bank) for your academic as well as hostel fee.
                        </li>

                        <li>
                            To avoid medical complications at immigration checkpoints at international airports, ensure
                            that you have all necessary vaccinations (Yellow Fever, HIV, COVID-19, etc.).
                        </li>

                        <li>
                            Carry a photocopy of the admission letter issued by Royal Global University at the time of
                            reporting at the university.
                        </li>
                    </ul>

                </div>

            </div>

            <!-- Row 2 -->
            <div class="intl-guide-grid">

                <div class="intl-guide-info">
                    <h3>Other Important Information</h3>

                    <ul class="intl-guide-list">
                        <li>
                            Students are recommended to carry a sufficient amount of cash or credit cards. If carrying
                            foreign currency, they can get it exchanged at a currency exchange counter at all
                            international airports.
                        </li>

                        <li>
                            Keep all your valuables and important documents (Passport, Visa papers, Acceptance letter,
                            Academic Certificates, etc.) in your cabin/hand baggage to avoid the possibility of
                            misplacement at the airport.
                        </li>

                        <li>
                            To avail the complimentary pick-up service from the airport, kindly mention the requirement
                            via email to Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs.
                        </li>

                        <li>
                            Email: gkanand@rgu.ac, Phone: +91 9864049818
                        </li>
                    </ul>
                </div>

                <div class="intl-guide-card">
                    <h3>Reporting To The University</h3>

                    <p>
                        Students are required to report to the university at least 3 days prior to the date of batch
                        commencement. To avail hostel facilities students must book their preferred rooms and pay their
                        hostel fees in advance to avoid any hassles. The students who have not applied for the hostel
                        facilities will be allowed to opt for the facilities as per the availability of rooms. Depending
                        upon the availability of rooms students can deposit hostel fees on the day of their reporting at
                        the campus.


                    </p>
                </div>

                <div class="intl-guide-card">
                    <h3>Medical Insurance</h3>

                    <p>
                        International students are advised to carry their Health/Medical Insurance and one copy of the
                        same must be submitted at the University at the time of Reporting at University.
                    </p>
                </div>

                <div class="intl-guide-content">
                    <h3>Climate, Food And Culture</h3>

                    <p>
                        Assam has a moderate temperature which ranges between 30⁰C to 38⁰C during summer and between
                        15⁰C to 21⁰C during winter, students are accordingly advised to pack their bags. The remaining
                        months of the year are usually pleasant.
                    </p>

                    <p>
                        Students are advised to search more about the location of Royal Global University, Indian food,
                        its culture and important tourist places in and around Guwahati city.
                    </p>
                </div>

            </div>

            <!-- Row 3 -->
            <div class="intl-guide-bottom">

                <div class="intl-guide-notes">
                    <h2>All Students Must Note The Following Points:</h2>

                    <ul class="intl-guide-list">
                        <li>RGU is a Non-Alcoholic Campus. Any student found smoking or consuming drugs/alcoholic drinks
                            inside university premises (Campus, Hostel, Classrooms, Restrooms, etc.) will be reported
                            immediately to their local guardian or parents.</li>

                        <li>We have zero tolerance for ragging. Any student found involved in ragging will have to face
                            stringent action.</li>

                        <li>RGU is a Wi-Fi-enabled campus, so students are suggested to carry their own laptops and
                            smartphones.</li>

                        <li>A standard uniform is required for all students enrolled in all courses. Students of Nursing
                            and Hotel Management are required to wear separate uniforms during their lab work.</li>

                        <li>Hostel rooms are equipped with modern amenities like lift facilities, air conditioning,
                            study areas, unwinding rooms, a gymnasium, a common TV, and other basic amenities. Students
                            can purchase all other personalized items from the University Student Gallery.</li>

                        <li>Indian mobile SIM cards can be purchased from representatives of service providers. Students
                            are advised to connect with the Senior Manager, Branding & Communication.</li>
                    </ul>
                </div>

                <div class="intl-guide-card">
                    <h3>Post Arrival Information</h3>

                    <ul class="intl-guide-list">
                        <li>Students are required to report to the Branding & Communication Department in Block-A,
                            Ground Floor.</li>

                        <li>Students are required to complete their FRRO registration process.</li>

                        <li>After completing the registration process and clearance of documentation and payments,
                            students can move to the hostel.</li>
                    </ul>
                </div>

            </div>

            <!-- Contact Card -->
            <div class="intl-guide-contact">

                <h2>
                    For Any Support Or Guidance, International Students
                    (Present Or Future) Can Connect With:
                </h2>

                <div class="intl-guide-contact-line"></div>

                <div class="intl-guide-contact-item">
                    <i class="fa fa-user-o"></i>
                    <span>
                        Ms. Gurpreet Kaur Anand, Deputy Director,
                        The Office of International Affairs
                    </span>
                </div>

                <div class="intl-guide-contact-item">
                    <i class="fa fa-phone"></i>
                    <span>Ph. no: +91 9864049818</span>
                </div>

                <div class="intl-guide-contact-item">
                    <i class="fa fa-envelope-o"></i>
                    <span>Email: gkanand@rgu.ac</span>
                </div>

            </div>

        </div>
    </section>

@endsection

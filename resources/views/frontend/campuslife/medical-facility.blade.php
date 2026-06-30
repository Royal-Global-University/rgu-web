@extends('frontend/new-master')
@section('title', 'Medical Facility : The Assam Royal Global University')
@section('meta_description', 'Royal Global University provides on-campus medical facilities with qualified professionals
    to ensure prompt healthcare support for students and staff.')
@section('meta_keywords', 'Medical Facility')
@section('content')
    <style>
        /*====================================
    MEDICAL FACILITY TOP
    ====================================*/

        .medical-top-section {

            background: #eef3fc;
            padding: 80px 0;

        }

        .medical-top-wrapper {

            display: flex;
            align-items: center;
            gap: 65px;

        }

        .medical-top-image {

            flex: 0 0 46%;

        }

        .medical-top-image img {

            width: 100%;
            display: block;
            border-radius: 22px;
            transition: .45s;

        }

        .medical-top-image img:hover {

            transform: scale(1.03);

        }

        .medical-top-content {

            flex: 1;

        }

        .medical-top-content h2 {

            font-size: 4rem;
            color: #274781;
            font-family: Georgia, serif;
            font-weight: 700;
            margin-bottom: 28px;

        }

        .medical-top-content p {

            color: #555;
            font-size: 1.55rem;
            line-height: 1.9;
            text-align: justify;
            margin-bottom: 18px;

        }

        @media(max-width:991px) {

            .medical-top-wrapper {

                flex-direction: column;

            }

        }

        @media(max-width:576px) {

            .medical-top-section {

                padding: 50px 0;

            }

            .medical-top-content h2 {

                font-size: 2.6rem;

            }

            .medical-top-content p {

                font-size: 14px;

            }

        }
    </style>

    <style>
        /*===================================
    ROYAL SWASTHYA SEVA
    ===================================*/

        .royal-swasthya-section {

            background: #eef3fc;
            padding: 30px 0 80px;

        }

        .royal-swasthya-wrapper {

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 70px;

        }

        .royal-swasthya-content {

            flex: 1;

        }

        .royal-swasthya-content h2 {

            font-size: 4rem;
            color: #284882;
            font-family: Georgia, serif;
            font-weight: 700;
            margin-bottom: 28px;

        }

        .royal-swasthya-content p {

            font-size: 1.55rem;
            line-height: 1.9;
            color: #555;
            text-align: justify;
            margin-bottom: 20px;

        }

        .royal-swasthya-image {

            flex: 0 0 48%;

        }

        .royal-swasthya-image img {

            width: 100%;
            display: block;
            border-radius: 24px;
            transition: .4s;

        }

        .royal-swasthya-image img:hover {

            transform: scale(1.03);

        }

        @media(max-width:991px) {

            .royal-swasthya-wrapper {

                flex-direction: column-reverse;

            }

        }

        @media(max-width:576px) {

            .royal-swasthya-section {

                padding: 10px 0 50px;

            }

            .royal-swasthya-content h2 {

                font-size: 2.7rem;

            }

            .royal-swasthya-content p {

                font-size: 14px;

            }

        }
    </style>

    <style>
        /*====================================
    NEARBY HOSPITALS
    ====================================*/

        .nearby-hospital-section {

            background: #eef3fc;
            padding: 20px 0 90px;

        }

        .nearby-hospital-section h2 {

            text-align: center;
            font-size: 4rem;
            color: #29457d;
            font-family: Georgia, serif;
            font-weight: 700;
            margin-bottom: 45px;

        }

        .nearby-hospital-table {

            overflow-x: auto;
            border-radius: 12px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);

        }

        .nearby-hospital-table table {

            width: 100%;
            border-collapse: collapse;
            background: #fff;

        }

        .nearby-hospital-table thead {

            background: #2d4f89;

        }

        .nearby-hospital-table th {

            color: #fff;
            padding: 20px;
            font-size: 1.55rem;
            text-align: left;
            font-weight: 600;

        }

        .nearby-hospital-table td {

            padding: 18px 20px;
            font-size: 1.45rem;
            color: #555;
            border-bottom: 1px solid #d8e0ef;

        }

        .nearby-hospital-table tbody tr:nth-child(even) {

            background: #f7f9fd;

        }

        .nearby-hospital-table tbody tr:hover {

            background: #edf4ff;

        }

        .hospital-download-btn {

            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            background: #e36b2c;
            color: #fff;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;

        }

        .hospital-download-btn:hover {

            background: #29457d;
            color: #fff;

        }

        @media(max-width:576px) {

            .nearby-hospital-section {

                padding: 10px 0 50px;

            }

            .nearby-hospital-section h2 {

                font-size: 2.6rem;

            }

            .nearby-hospital-table th,
            .nearby-hospital-table td {

                font-size: 13px;
                padding: 14px;

            }

            .hospital-download-btn {

                width: 100%;
                justify-content: center;

            }

        }
    </style>

    <style>
        /*==================================
    MEDICAL EMERGENCY
    ==================================*/

        .medical-emergency-section {

            background: #23467d;
            padding: 90px 0;
            border-top-left-radius: 90px;
            border-top-right-radius: 90px;

        }

        .medical-emergency-grid {

            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 30px;
            margin-bottom: 30px;

        }

        .medical-card {

            background: #fff;
            border-radius: 10px;
            padding: 35px;

        }

        .medical-card h2 {

            color: #23467d;
            font-family: Georgia, serif;
            font-size: 2.8rem;
            margin-bottom: 30px;
            padding-bottom: 18px;
            border-bottom: 1px solid #ddd;

        }

        .medical-contact-list {

            list-style: none;
            padding: 0;
            margin: 0;

        }

        .medical-contact-list li {

            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 24px;
            font-size: 1.55rem;
            line-height: 1.7;
            color: #555;

        }

        .medical-contact-list i {

            color: #e36b2c;
            font-size: 26px;
            width: 28px;

        }

        .medical-location {

            font-size: 2.2rem;
            color: #e36b2c;
            margin: 35px 0;
            font-weight: 700;

        }

        .medical-location i {

            margin-right: 10px;

        }

        .medical-clinic-grid {

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 50px;

        }

        .medical-clinic-grid h3 {

            color: #444;
            font-family: Georgia, serif;
            font-size: 2.4rem;
            margin-bottom: 20px;

        }

        .medical-clinic-grid p {

            color: #555;
            font-size: 1.5rem;
            margin-bottom: 8px;
            line-height: 1.8;

        }

        .medical-medanta {

            text-align: center;

        }

        .medical-medanta img {

            max-width: 150px;
            margin-bottom: 25px;

        }

        .medical-medanta p {

            font-size: 1.5rem;
            color: #555;
            line-height: 1.9;
            max-width: 900px;
            margin: auto;

        }

        .medical-medanta h4 {

            margin-top: 25px;
            color: #e36b2c;
            font-size: 2.2rem;
            font-weight: 700;

        }

        @media(max-width:991px) {

            .medical-emergency-grid {

                grid-template-columns: 1fr;

            }

            .medical-clinic-grid {

                grid-template-columns: 1fr;

            }

        }

        @media(max-width:576px) {

            .medical-emergency-section {

                border-radius: 35px 35px 0 0;
                padding: 50px 0;

            }

            .medical-card {

                padding: 25px;

            }

            .medical-card h2 {

                font-size: 2.2rem;

            }

            .medical-contact-list li,
            .medical-clinic-grid p {

                font-size: 14px;

            }

            .medical-location {

                font-size: 18px;

            }

            .medical-clinic-grid h3 {

                font-size: 2rem;

            }

            .medical-medanta h4 {

                font-size: 18px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/campus-medical-facility/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Medical Facilities</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Medical Facilities
            </div>
        </div>

    </section>

    <section class="medical-top-section">

        <div class="container">

            <div class="medical-top-wrapper">

                <div class="medical-top-image">
                    <img src="https://www.rgu.ac/mobile-assets/medical-facility/1a.jpeg" alt="">
                </div>

                <div class="medical-top-content">

                    <h2>Infirmary & Ambulance Services</h2>

                    <p>
                        At The Assam Royal Global University, the health and well-being of students, faculty and staff
                        remain a top priority. The University has a fully equipped Infirmary that provides immediate
                        medical assistance under the supervision of qualified medical professionals. Nursing staff are
                        available round the clock to attend medical emergencies and provide primary healthcare services
                        within the campus.
                    </p>

                    <p>
                        A well-equipped ambulance service is also available 24×7 for emergencies and medical referrals.
                        The University maintains tie-ups with reputed hospitals to ensure prompt specialized treatment
                        whenever required, providing students with a safe and secure healthcare support system.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Royal Swasthya Seva -->

    <section class="royal-swasthya-section">

        <div class="container">

            <div class="royal-swasthya-wrapper">

                <div class="royal-swasthya-content">

                    <h2>Royal Swasthya Seva</h2>

                    <p>
                        Royal Swasthya Seva is a philanthropic healthcare initiative of The Assam Royal Global
                        University,
                        established with the vision of providing quality healthcare services to the university community
                        and
                        the surrounding society. The centre offers consultation by experienced medical professionals
                        along
                        with affordable healthcare support in a patient-friendly environment.
                    </p>

                    <p>
                        The medical centre houses qualified doctors from different disciplines and aims to provide
                        primary
                        healthcare, consultation, medicines and emergency support. It serves students, faculty, staff
                        and
                        nearby residents while also promoting preventive healthcare and wellness awareness.
                    </p>

                </div>

                <div class="royal-swasthya-image">

                    <img src="https://www.rgu.ac/mobile-assets/medical-facility/seva.jpeg" alt="Royal Swasthya Seva">

                </div>

            </div>

        </div>

    </section>

    <!-- Nearby Hospitals -->

    <section class="nearby-hospital-section">

        <div class="container">

            <h2>Nearby Hospitals</h2>

            <div class="nearby-hospital-table">

                <table>

                    <thead>

                        <tr>

                            <th>Hospital Name & Address</th>
                            <th>Distance from RGU</th>
                            <th>Contact</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Ayursundra Super Speciality Hospital, Garchuk, Guwahati, Assam 781035</td>
                            <td>1.6 kms</td>
                            <td>0361 7111080</td>
                        </tr>

                        <tr>
                            <td>Apollo Excelcare Hospital, NH-37, Paschim Boragaon, Guwahati</td>
                            <td>5 kms</td>
                            <td>0361 7140101</td>
                        </tr>

                        <tr>
                            <td>Government Ayurvedic College & Hospital, Jalukbari, Guwahati</td>
                            <td>9 kms</td>
                            <td>0361 2570455</td>
                        </tr>

                        <tr>
                            <td>Narayana Super Speciality Hospital, Amingaon, Guwahati</td>
                            <td>17 kms</td>
                            <td>08067506875</td>
                        </tr>

                        <tr>
                            <td>Gauhati Medical College & Hospital, Bhangagarh, Guwahati</td>
                            <td>12 kms</td>
                            <td>0361 2529457</td>
                        </tr>

                        <tr>
                            <td>Critical Care Hospital & Research Institute, Lokhra, Guwahati</td>
                            <td>3.2 kms</td>
                            <td>07637013667</td>
                        </tr>

                        <tr>
                            <td>Guwahati Metro Hospital, Khanapara, Guwahati</td>
                            <td>10 kms</td>
                            <td>0361 2962335</td>
                        </tr>

                        <tr>
                            <td>Health City Hospital, Khanapara, Guwahati</td>
                            <td>10 kms</td>
                            <td>0361 7105000</td>
                        </tr>

                        <tr>
                            <td>Northeast Cancer Hospital, Jorabat, Guwahati</td>
                            <td>16.5 kms</td>
                            <td>09435070661</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <a href="https://www.rgu.ac/mobile-assets/medical-facility/doctor_compendium.pdf" class="hospital-download-btn">
                <i class="fa fa-download"></i>
                Doctor's Compendium
            </a>

        </div>

    </section>

    <section class="medical-emergency-section">

        <div class="container">

            <div class="medical-emergency-grid">

                <!-- Left Card -->

                <div class="medical-card">

                    <h2>Emergency Contact Details</h2>

                    <ul class="medical-contact-list">

                        <li>
                            <i class="fa fa-ambulance"></i>
                            <strong>Ambulance :</strong> +91 70990 18436
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Infirmary :</strong> +91 70990 38510
                        </li>

                        <li>
                            <i class="fa fa-bus"></i>
                            <strong>Transport In-charge :</strong> +91 88110 55509
                        </li>

                        <li>
                            <i class="fa fa-warning"></i>
                            <strong>Emergency Helpline :</strong> +91 88110 03111
                        </li>

                    </ul>

                </div>

                <!-- Right Card -->

                <div class="medical-card">

                    <h2>Emergency Care - Ambulance Services</h2>

                    <ul class="medical-contact-list">

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Ayursundra Super Speciality Hospital :</strong>
                            +91 8811030033 / +91 8811030055
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Apollo Excelcare Hospital :</strong>
                            0361 7140101
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Narayana Superspeciality Hospital :</strong>
                            +91 8067506875
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Critical Care Hospital :</strong>
                            +91 7637013667
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Guwahati Metro Hospital :</strong>
                            0361 2962335
                        </li>

                        <li>
                            <i class="fa fa-hospital-o"></i>
                            <strong>Health City Hospital :</strong>
                            0361 7105000
                        </li>

                        <li>
                            <i class="fa fa-users"></i>
                            <strong>Government Emergency :</strong>
                            108
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Bottom Card -->

            <div class="medical-card medical-swasthya-card">

                <h2>Royal Swasthya Seva</h2>

                <div class="medical-location">

                    <i class="fa fa-map-marker"></i>

                    Near The RGU Main Gate Beside PNB ATM

                </div>

                <div class="medical-clinic-grid">

                    <div>

                        <h3>Allopathic Clinic</h3>

                        <p><strong>Dr. Lohit Baishya, MBBS</strong></p>

                        <p>Monday - Friday</p>

                        <p>9:00 AM - 1:00 PM</p>

                    </div>

                    <div>

                        <h3>Ayurvedic Clinic</h3>

                        <p><strong>Dr. Bhabesh Das, BAMS</strong></p>

                        <p>Wednesday & Thursday</p>

                        <p>3:00 PM - 4:00 PM</p>

                    </div>

                    <div>

                        <h3>Homeopathic Clinic</h3>

                        <p><strong>Dr. Shraddha Basu, BHMS</strong></p>

                        <p>Monday, Tuesday & Friday</p>

                        <p>3:00 PM - 5:00 PM</p>

                    </div>

                </div>

                <div class="medical-medanta">

                    <img src="https://www.rgu.ac/mobile-assets/medical-facility/medantalogo.png" alt="">

                    <p>
                        The Assam Royal Global University has corporate tie-ups with MEDANTA - The Medicity.
                        Students can avail special discounts on OPD consultation and investigations.
                    </p>

                    <h4>10% Discount for MEDANTA Standard Executive Health Check-up.</h4>

                </div>

            </div>

        </div>

    </section>

@endsection

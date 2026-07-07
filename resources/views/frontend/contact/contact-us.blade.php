@extends('frontend/new-master')
@section('title', 'Best University in Assam, India')
@section('meta_description',
    'Need RGU contact info? Get the General Helpline, Admission (78799-98811), and
    International Helplines, plus dedicated emails for all university departments.')
@section('meta_keywords', 'RGU contact')
@section('content')
    <style>
        /*=========================================================
                    RGU CONTACT PAGE
                    LOCATION + INFORMATION CENTRE
            =========================================================*/

        .rgucnt-map-section {
            padding: 90px 0 70px;
            background: #eef3fb;
            position: relative;
            overflow: hidden;
        }

        .rgucnt-centre-section {
            padding: 90px 0;
            background: linear-gradient(180deg, #2d4d86 0%, #17315f 100%);
            position: relative;
            overflow: hidden;
        }

        /* Decorative Glow */

        .rgucnt-map-section::before,
        .rgucnt-centre-section::before {
            content: "";
            position: absolute;
            width: 520px;
            height: 520px;
            border-radius: 50%;
            background: radial-gradient(rgba(255, 255, 255, .08), transparent 70%);
            top: -220px;
            right: -180px;
            pointer-events: none;
        }

        .rgucnt-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .rgucnt-subtitle {
            display: inline-block;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #9a7b38;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .rgucnt-heading h2 {
            font-family: "Playfair Display", serif;
            font-size: 54px;
            font-weight: 700;
            color: #1f3f72;
            margin: 0;
        }

        .rgucnt-heading-light h2 {
            color: #fff;
        }

        .rgucnt-heading-light .rgucnt-subtitle {
            color: #d8c18d;
        }

        /*=========================================================
            MAP
            =========================================================*/

        .rgucnt-map-wrapper {
            background: #fff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow:
                0 20px 60px rgba(18, 40, 84, .12);
            transition: .35s ease;
        }

        .rgucnt-map-wrapper:hover {
            transform: translateY(-6px);
            box-shadow:
                0 30px 70px rgba(18, 40, 84, .16);
        }

        .rgucnt-map-wrapper iframe {
            width: 100%;
            height: 560px;
            border: 0;
            display: block;
        }

        /*=========================================================
            CARDS
            =========================================================*/

        .rgucnt-card {

            background: rgba(255, 255, 255, .06);

            border: 1px solid rgba(255, 255, 255, .12);

            border-radius: 18px;

            padding: 28px;

            height: 100%;

            backdrop-filter: blur(12px);

            transition: .35s ease;

        }

        .rgucnt-card:hover {

            transform: translateY(-8px);

            border-color: rgba(255, 255, 255, .25);

            box-shadow:
                0 20px 40px rgba(0, 0, 0, .18);

        }

        .rgucnt-card h3 {

            color: #fff;

            font-size: 32px;

            font-weight: 700;

            margin-bottom: 18px;

            letter-spacing: .5px;

        }

        .rgucnt-divider {

            width: 100%;

            height: 1px;

            background: rgba(255, 255, 255, .15);

            margin-bottom: 22px;

        }

        .rgucnt-item {

            display: flex;

            align-items: flex-start;

            gap: 14px;

            margin-bottom: 20px;

        }

        .rgucnt-item:last-child {
            margin-bottom: 0;
        }

        .rgucnt-icon {

            width: 38px;

            height: 38px;

            min-width: 38px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(255, 255, 255, .08);

            color: #d7b56d;

            font-size: 18px;

        }

        .rgucnt-item p {

            margin: 0;

            color: rgba(255, 255, 255, .88);

            line-height: 1.85;

            font-size: 15px;

        }

        .rgucnt-item a {

            color: #fff;

            text-decoration: none;

            font-size: 15px;

            transition: .3s;

        }

        .rgucnt-item a:hover {

            color: #d7b56d;

            padding-left: 4px;

        }

        /*=========================================================
            TABLET
            =========================================================*/

        @media(max-width:991px) {

            .rgucnt-map-section,
            .rgucnt-centre-section {

                padding: 70px 0;

            }

            .rgucnt-heading {

                margin-bottom: 40px;

            }

            .rgucnt-heading h2 {

                font-size: 42px;

            }

            .rgucnt-map-wrapper iframe {

                height: 450px;

            }

        }

        /*=========================================================
            MOBILE
            =========================================================*/

        @media(max-width:767px) {

            .rgucnt-map-section,
            .rgucnt-centre-section {

                padding: 55px 0;

            }

            .rgucnt-heading {

                margin-bottom: 32px;

            }

            .rgucnt-subtitle {

                font-size: 11px;

                letter-spacing: 2px;

            }

            .rgucnt-heading h2 {

                font-size: 34px;

            }

            .rgucnt-map-wrapper {

                border-radius: 18px;

            }

            .rgucnt-map-wrapper iframe {

                height: 300px;

            }

            .rgucnt-card {

                padding: 22px;

                border-radius: 14px;

            }

            .rgucnt-card h3 {

                font-size: 26px;

            }

            .rgucnt-item {

                gap: 12px;

            }

            .rgucnt-icon {

                width: 34px;
                height: 34px;
                min-width: 34px;
                font-size: 16px;

            }

            .rgucnt-item p,
            .rgucnt-item a {

                font-size: 14px;
                line-height: 1.8;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Royal Information Centre</h1>
            <div class="pg-hero-breadcrumb">
                Contacts
            </div>
        </div>

    </section>



    <section class="rgucnt-centre-section">

        <div class="container">

            <div class="mb-5">
                <h2 class="text-light">THE ASSAM ROYAL GLOBAL UNIVERSITY (Sponsored by Gyan Sagar Foundation alias Royal,
                    Guwahati Assam) Betkuchi, Opp. Tirupati Balaji Temple/ ISBT,. NH-27, Guwahati-35, Dist- Kamrup (Metro),
                    Assam, India.</h2>
                <div class="row pt-5">

                    <div class="col-lg-3">

                        <a href="mailto:vice-chancellor@rgu.ac" class="text-light fw-bold text-decoration-none"
                            style="font-size:26px;">

                            <i class="bi bi-envelope-fill me-2"></i>vice-chancellor@rgu.ac

                        </a>

                    </div>

                    <div class="col-lg-3">

                        <a href="mailto:registraroffice@rgu.ac" class="text-light fw-bold text-decoration-none"
                            style="font-size:26px;">

                            <i class="bi bi-envelope-fill me-2"></i>registraroffice@rgu.ac

                        </a>

                    </div>

                    <div class="col-lg-3">

                        <a href="mailto:admissions@rgu.ac" class="text-light fw-bold text-decoration-none"
                            style="font-size:26px;">

                            <i class="bi bi-envelope-fill me-2"></i>admissions@rgu.ac

                        </a>

                    </div>

                    <div class="col-lg-3">

                        <a href="mailto:careers@rgu.ac" class="text-light fw-bold text-decoration-none"
                            style="font-size:26px;">

                            <i class="bi bi-envelope-fill me-2"></i>careers@rgu.ac

                        </a>

                    </div>

                </div>
                <div class="pt-4 pb-4 mt-5"
                    style="width:100%; max-width:1400px; margin:0 auto; background:#fff; border:1px solid #e5e5e5; border-radius:12px; padding:40px 30px; display:flex; justify-content:space-between; align-items:flex-start; gap:40px; font-family:Georgia, 'Times New Roman', serif; box-sizing:border-box;">

                    <!-- General Helpline -->
                    <div style="flex:1;">
                        <h3 style="margin:0 0 30px; color:#284b8f; font-size:24px; font-weight:500;">
                            General Helpline
                        </h3>

                        <div style="display:flex; align-items:center; margin-bottom:12px;">
                            <span style="font-size:22px; color:#333;">+91 70860-93458</span>
                        </div>

                        <div style="display:flex; align-items:center;">
                            <span style="font-size:22px; color:#333;">+91 70860-93459</span>
                        </div>
                    </div>

                    <!-- Admission Helpline -->
                    <div style="flex:1;">
                        <h3 style="margin:0 0 30px; color:#284b8f; font-size:24px; font-weight:500;">
                            Admission Helpline
                        </h3>

                        <div style="display:flex; align-items:center;">
                            <span style="font-size:22px; color:#333;">+91 78799-98811</span>
                        </div>
                    </div>

                    <!-- International Helpline -->
                    <div style="flex:1;">
                        <h3 style="margin:0 0 30px; color:#284b8f; font-size:24px; font-weight:500;">
                            International Helpline
                        </h3>

                        <div style="display:flex; align-items:center;">
                            <span style="font-size:22px; color:#333;">+91 69130-02970</span>
                        </div>
                    </div>

                    <!-- Accounts Department -->
                    <div style="flex:1;">
                        <h3 style="margin:0 0 30px; color:#284b8f; font-size:24px; font-weight:500;">
                            Accounts Department
                        </h3>

                        <div style="display:flex; align-items:center; margin-bottom:12px;">
                            <span style="font-size:22px; color:#333;">+91 70990-88711</span>
                        </div>

                        <div style="display:flex; align-items:center;">
                            <span style="font-size:32px; margin-right:12px; color:#0056d6;">✉</span>
                            <a href="mailto:vijay.sharma@rgi.edu.in"
                                style="font-size:22px; color:#0056d6; text-decoration:none; font-weight:600;">
                                vijay.sharma@rgi.edu.in
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row g-4 mt-4">

                <!-- Barpeta -->
                <div class="col-lg-4 col-md-6">

                    <div class="rgucnt-card">

                        <h3>BARPETA</h3>

                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <p>
                                Howly Town, Ward No. 3,
                                Anand Bazar Howly,
                                P.O & P.S. Howly,
                                Barpeta – 781316
                            </p>

                        </div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <a href="tel:7099020915">
                                7099020915
                            </a>

                        </div>

                    </div>

                </div>



                <!-- Dibrugarh -->

                <div class="col-lg-4 col-md-6">

                    <div class="rgucnt-card">

                        <h3>DIBRUGARH</h3>

                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <p>
                                Gabhorupathar Tiniali,
                                Near Police Station,
                                Naliapool,
                                Dibrugarh – 786001
                            </p>

                        </div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <a href="tel:6913002969">
                                6913002969
                            </a>

                        </div>

                    </div>

                </div>



                <!-- Dimapur -->

                <div class="col-lg-4 col-md-6">

                    <div class="rgucnt-card">

                        <h3>DIMAPUR</h3>

                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <p>
                                Circular Road,
                                Near Popular Bakery,
                                Dimapur,
                                Nagaland – 797112
                            </p>

                        </div>

                        <div class="rgucnt-item">

                            <div class="rgucnt-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <a href="tel:6913002966">
                                6913002966 / 7099020796
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Goalpara -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>GOALPARA</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Durga Mandir, Near LIC Building,
                                P.O. Baladmari,
                                Goalpara - 783101
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:7099030827">7099030827</a>
                        </div>
                    </div>
                </div>

                <!-- Kohima -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>KOHIMA</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                R Building, Paracezie,
                                High School Junction,
                                Kohima, Nagaland - 797001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:7099020907">7099020907</a>
                        </div>
                    </div>
                </div>

                <!-- Mangaldoi -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>MANGALDOI</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                W/No.10, Tangla Bhebargahat Road,
                                Opp. Foreigner's Tribunal (5th) Office,
                                Mangaldoi - 784125
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:7099020907">7099020907</a>
                        </div>
                    </div>
                </div>

                <!-- Manipur -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>MANIPUR</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Hafiz Hatta, Minuthong Traffic Point,
                                Near HDFC ATM,
                                Imphal East - 795001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:6913002965">6913002965 / 7099020911</a>
                        </div>
                    </div>
                </div>

                <!-- Mizoram -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>MIZORAM</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Theodora Market,
                                Plot No.3,
                                Treasury Square,
                                Opp. MPC Office,
                                Aizawl - 796001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:9127070609">9127070609</a>
                        </div>
                    </div>
                </div>

                <!-- Nagaon -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>NAGAON</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                BM Road,
                                Amolapatty,
                                Opp. Ramanujan Junior College,
                                Nagaon - 782001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:7099020910">7099020910</a>
                        </div>
                    </div>
                </div>

                <!-- Silchar -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>SILCHAR</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Das Complex,
                                3rd Floor,
                                Above Tata AIA,
                                Opp. Hindi School,
                                Shillongpatty - 788001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:8811034707">8811034707</a>
                        </div>
                    </div>
                </div>

                <!-- Shillong -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>SHILLONG</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Salonsar Mansion,
                                Next To Highland Studio,
                                Police Bazar,
                                Shillong - 793001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:6913002967">6913002967</a>
                        </div>
                    </div>
                </div>

                <!-- Tinsukia -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>TINSUKIA</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                Sashi Complex,
                                Rongagora Road,
                                Tinsukia - 786125
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:7099020913">7099020913</a>
                        </div>
                    </div>
                </div>

                <!-- Tura -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">
                        <h3>TURA</h3>
                        <div class="rgucnt-divider"></div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-geo-alt"></i></div>
                            <p>
                                1st Floor,
                                Above Axis Bank,
                                Hawakhana,
                                Tura - 794001
                            </p>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:9127898115">9127898115</a>
                        </div>
                    </div>
                </div>

                <!-- Helpline -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">

                        <h3 style="font-size:28px;">General Helpline</h3>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:+917086093458">
                                +91 70860 93458 / +91 70860 93459
                            </a>
                        </div>

                        <div class="rgucnt-divider"></div>

                        <h3 style="font-size:28px;margin-top:10px;">
                            Admission Helpline
                        </h3>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:+917879998811">
                                +91 78799 98811
                            </a>
                        </div>

                    </div>
                </div>

                <!-- International -->
                <div class="col-lg-4 col-md-6">
                    <div class="rgucnt-card">

                        <h3 style="font-size:28px;">
                            International Helpline
                        </h3>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:+916913002970">
                                +91 69130 02970
                            </a>
                        </div>

                        <div class="rgucnt-divider"></div>

                        <h3 style="font-size:28px;margin-top:10px;">
                            Accounts Department
                        </h3>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-telephone"></i></div>
                            <a href="tel:+917099088711">
                                +91 70990 88711
                            </a>
                        </div>

                        <div class="rgucnt-item">
                            <div class="rgucnt-icon"><i class="bi bi-envelope"></i></div>
                            <a href="mailto:Vijay.Sharma@rgi.edu.in">
                                Vijay.Sharma@rgi.edu.in
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="rgucnt-map-section">

        <div class="container">

            <div class="rgucnt-heading">
                <span class="rgucnt-subtitle">Visit Us</span>
                <h2>Location Map</h2>
            </div>

            <div class="rgucnt-map-wrapper">

                <iframe src="https://www.google.com/maps?q=Royal%20Global%20University%20Guwahati&output=embed"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

        </div>

    </section>
@endsection

@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "THE ASSAM ROYAL GLOBAL UNIVERSITY",
  "url": "https://www.rgu.ac/contact",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Betkuchi, Opp. Tirupati Balaji Temple/ ISBT, NH-27",
    "addressLocality": "Guwahati",
    "addressRegion": "Assam",
    "postalCode": "781035",
    "addressCountry": "IN"
  },
  "email": [
    "vice-chancellor@rgu.ac",
    "registraroffice@rgu.ac",
    "admissions@rgu.ac",
    "careers@rgu.ac"
  ],
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": [
        "+91-70860-93458",
        "+91-70860-93459"
      ],
      "contactType": "General Helpline",
      "areaServed": "IN",
      "availableLanguage": ["en", "as", "hi"]
    },
    {
      "@type": "ContactPoint",
      "telephone": "+91-78799-98811",
      "contactType": "Admission Helpline",
      "areaServed": "IN",
      "availableLanguage": ["en", "as", "hi"]
    },
    {
      "@type": "ContactPoint",
      "telephone": "+91-69130-02970",
      "contactType": "International Helpline",
      "areaServed": "IN",
      "availableLanguage": "en"
    },
    {
      "@type": "ContactPoint",
      "telephone": "+91-70990-88711",
      "email": "vijay.sharma@rgi.edu.in",
      "contactType": "Accounts Department",
      "areaServed": "IN",
      "availableLanguage": ["en", "as", "hi"]
    }
  ],
  "department": [
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - AGARTALA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "67, Gangail Road, Opp. Ramkrishna Mission, Gandhighat",
        "addressLocality": "Agartala",
        "addressRegion": "Tripura West",
        "postalCode": "799001",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20914"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - BARPETA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Howly Town, Ward No. 3, Anand Bazar Howly, P.O. & P.S. Howly",
        "addressLocality": "Barpeta",
        "addressRegion": "Assam",
        "postalCode": "781316",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20915"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - BONGAIGAON",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Noor Market, Near Mayapuri Cinema Hall, Mayapuri",
        "addressLocality": "Bongaigaon",
        "addressRegion": "Assam",
        "postalCode": "783380",
        "addressCountry": "IN"
      },
      "telephone": "+91-91270-70906"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - DIBRUGARH",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Gabhorupathar Tiniali, Near Police Station, Naliapool",
        "addressLocality": "Dibrugarh",
        "addressRegion": "Assam",
        "postalCode": "786001",
        "addressCountry": "IN"
      },
      "telephone": "+91-69130-02969"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - DIMAPUR",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Circular Road, Near Popular Bakery",
        "addressLocality": "Dimapur",
        "addressRegion": "Nagaland",
        "postalCode": "797112",
        "addressCountry": "IN"
      },
      "telephone": [
        "+91-69130-02966",
        "+91-70990-20796"
      ]
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - GOALPARA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Durga Mandir, Near LIC Building, P.O. Baladmari",
        "addressLocality": "Goalpara",
        "addressRegion": "Assam",
        "postalCode": "783101",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-30827"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - KOHIMA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "R Building, Paraciezia, High School Junction",
        "addressLocality": "Kohima",
        "addressRegion": "Nagaland",
        "postalCode": "797001",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20907"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - MANGALDOI",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "W/No. 10, Tangla Bhebargahat Road, Opp. Foreigner's Tribunal (5th) Office, P.O. - Mangaldoi",
        "addressLocality": "Mangaldoi",
        "addressRegion": "Darrang",
        "postalCode": "784125",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20907"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - MANIPUR",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hafiz Hatta, Minuthong Traffic Point, Near HDFC ATM",
        "addressLocality": "Imphal East",
        "addressRegion": "Manipur",
        "postalCode": "795001",
        "addressCountry": "IN"
      },
      "telephone": [
        "+91-69130-02965",
        "+91-70990-20911"
      ]
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - MIZORAM",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Theodora Market, Plot No.3, Treasury Square, Opp. MPC Office",
        "addressLocality": "Aizawl",
        "addressRegion": "Mizoram",
        "postalCode": "796001",
        "addressCountry": "IN"
      },
      "telephone": "+91-91270-70609"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - NAGAON",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "BM Road, Amolapatty, Opp. Ramanujan Junior College",
        "addressLocality": "Nagaon",
        "addressRegion": "Assam",
        "postalCode": "782001",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20910"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - PASIGHAT",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Daring Complex, GTC",
        "addressLocality": "Pasighat",
        "addressRegion": "East Siang",
        "postalCode": "791102",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20901"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - SILCHAR",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Das Complex, 3rd Floor, Above Tata AIA, Opp. Hindi School, Shyama Prasad Road, Shillongpatty",
        "addressLocality": "Silchar",
        "addressRegion": "Assam",
        "postalCode": "788001",
        "addressCountry": "IN"
      },
      "telephone": "+91-88110-34707"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - SHILLONG",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Salonsar Mansion, Next to Highland Studio, Police Bazar",
        "addressLocality": "Shillong",
        "addressRegion": "Meghalaya",
        "postalCode": "793001",
        "addressCountry": "IN"
      },
      "telephone": "+91-69130-02967"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - SIVASAGAR",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1st Floor, Elite Complex, Opp. Lachit Park, H.C.B. Road, Ward No. 8, P.O. & P.S. - Sivasagar",
        "addressLocality": "Sivasagar",
        "addressRegion": "Assam",
        "postalCode": "785640",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20909"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - TINSUKIA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sashi Complex, Rongagora Road",
        "addressLocality": "Tinsukia",
        "addressRegion": "Assam",
        "postalCode": "786125",
        "addressCountry": "IN"
      },
      "telephone": "+91-70990-20913"
    },
    {
      "@type": "LocalBusiness",
      "name": "Royal Information Centre - TURA",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1st Floor, Above Axis Bank, Hawakhana",
        "addressLocality": "Tura",
        "addressRegion": "Meghalaya",
        "postalCode": "794001",
        "addressCountry": "IN"
      },
      "telephone": "+91-91278-98115"
    }
  ]
}
</script>
@endpush

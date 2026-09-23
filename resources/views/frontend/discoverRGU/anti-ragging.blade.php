@extends('frontend/new-master')
@section('title', 'Anti-Ragging Commitee : The Assam Royal Global University')
@section('meta_description',
    'Royal Global University Anti-Ragging Committee ensures a safe, inclusive, and supportive
    campus environment by strictly enforcing anti-ragging policies in line with UGC regulations.')
@section('meta_keywords', 'Anti-Ragging Commitee')
@section('content')
    <style>
        /*==================================================
            ANTI RAGGING
    ==================================================*/

        .rgarc-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .rgarc-image img {

            width: 100%;

            border-radius: 40px;

            display: block;

        }

        .rgarc-content {

            padding-left: 40px;

        }

        .rgarc-content p {

            color: #56657b;

            font-size: 18px;

            line-height: 2;

            margin-bottom: 22px;

        }

        /*==================================================
            BLUE SECTION
    ==================================================*/

        .rgarc-committee {

            background: #eef3fb;

        }

        .rgarc-committee-wrapper {

            background: linear-gradient(180deg, #35558f 0%, #10254e 100%);

            border-radius: 70px 70px 0 0;

            padding: 70px;

        }

        .rgarc-title {

            font-family: 'Playfair Display', serif;

            color: #fff;

            font-size: 40px;

            margin-bottom: 45px;

        }

        /*==================================================
            WHITE SECTION
    ==================================================*/

        .rgarc-squad {

            background: #eef3fb;

            padding: 70px 0;

        }

        .rgarc-squad-title {

            font-family: 'Playfair Display', serif;

            color: #23457b;

            font-size: 40px;

            margin-bottom: 45px;

        }

        /*==================================================
            CARD
    ==================================================*/

        .rgarc-card {

            background: #fff;

            border-radius: 18px;

            padding: 34px;

            height: 100%;

            transition: .35s;

            box-shadow:

                0 15px 40px rgba(0, 0, 0, .06);

        }

        .rgarc-card:hover {

            transform: translateY(-8px);

            box-shadow:

                0 25px 55px rgba(0, 0, 0, .12);

        }

        .rgarc-card h4 {

            color: #df642d;

            font-size: 24px;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .rgarc-card h5 {

            color: #555;

            font-size: 18px;

            font-weight: 500;

            margin-bottom: 35px;

        }

        .rgarc-contact {

            margin-bottom: 28px;

        }

        .rgarc-contact p {

            margin-bottom: 8px;

            color: #5f6d82;

            font-size: 17px;

        }

        .rgarc-card span {

            color: #23457b;

            font-size: 20px;

            font-weight: 600;

            font-style: italic;

        }

        .rgarc-card a {

            color: #23457b;

            font-size: 18px;

            font-weight: 600;

            font-style: italic;

        }

        /*==================================================
            RESPONSIVE
    ==================================================*/

        @media(max-width:991px) {

            .rgarc-content {

                padding-left: 0;

                padding-top: 40px;

            }

            .rgarc-committee-wrapper {

                padding: 50px 35px;

                border-radius: 40px 40px 0 0;

            }

            .rgarc-title,

            .rgarc-squad-title {

                font-size: 42px;

            }

        }

        @media(max-width:767px) {

            .rgarc-section {

                padding: 60px 0;

            }

            .rgarc-title,

            .rgarc-squad-title {

                font-size: 32px;

                line-height: 1.3;

            }

            .rgarc-committee-wrapper {

                padding: 35px 20px;

                border-radius: 25px 25px 0 0;

            }

            .rgarc-card {

                padding: 24px;

            }

            .rgarc-card h4 {

                font-size: 21px;

            }

            .rgarc-card h5 {

                font-size: 16px;

            }

            .rgarc-contact p {

                font-size: 15px;

            }

            .rgarc-card span {

                font-size: 17px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('assets/img/anti-ragging/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Anti Ragging Committee</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / Anti Ragging Committee
            </div>
        </div>

    </section>

    <!--==========================================================
        ANTI RAGGING COMMITTEE
        ===========================================================-->

    <section class="rgarc-section">

        <div class="container">

            <div class="row align-items-center">

                <!--==========================
                    IMAGE
                ===========================-->

                <div class="col-lg-6">

                    <div class="rgarc-image">

                        <img src="https://www.rgu.ac/mobile-assets/anti-ragging/headimg.png" alt="Anti Ragging Committee">

                    </div>

                </div>

                <!--==========================
                    CONTENT
                ===========================-->

                <div class="col-lg-6">

                    <div class="rgarc-content">

                        <p>

                            As per the UGC Notification on
                            <strong>
                                "Regulations on Curbing the Menace of Ragging in Higher Educational Institutions, 2009"
                            </strong>,
                            The Assam Royal Global University (RGU) has constituted the
                            <strong>Anti-Ragging Committee</strong>
                            and
                            <strong>Anti-Ragging Squad</strong>
                            for the Academic Session
                            <strong>2025–2026</strong>
                            in accordance with the prescribed regulations.

                        </p>

                        <p>

                            The committee and squad are responsible for maintaining a
                            safe, respectful and ragging-free campus environment while
                            ensuring that every student enjoys a secure atmosphere for
                            learning and personal growth.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--==========================================================
        ANTI RAGGING COMMITTEE
        ===========================================================-->

    <section class="rgarc-committee">

        <div class="container">

            <div class="rgarc-committee-wrapper">

                <h2 class="rgarc-title">

                    Anti-Ragging Committee 2025–2026

                </h2>

                <div class="row" id="rgarcCommitteeCards">

                    <!-- Generated By JavaScript -->

                </div>

            </div>

        </div>

    </section>

    <!--==========================================================
        ANTI RAGGING SQUAD
        ===========================================================-->

    <section class="rgarc-squad">

        <div class="container">

            <h2 class="rgarc-squad-title">

                Anti-Ragging Squad 2025–2026

            </h2>

            <div class="row" id="rgarcSquadCards">

                <!-- Generated By JavaScript -->

            </div>

        </div>

    </section>

    <script>
        /*==================================================
        CREATE MEMBER CARD
        ==================================================*/

        function createMemberCard(member) {

            return `

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="rgarc-card">

                    ${member.name ? `
                            <h4>${member.name}</h4>
                        ` : ""}

                    ${member.designation ? `
                            <h5>${member.designation}</h5>
                        ` : ""}

                    ${member.department ? `
                            <p class="rgarc-department">
                                ${member.department}
                            </p>
                        ` : ""}

                    ${(member.mobile || member.email) ? `
                            <div class="rgarc-contact">

                                ${member.mobile ? `
                                <p>
                                    <strong>Mobile:</strong>
                                    <a href="tel:${member.mobile}">
                                        ${member.mobile}
                                    </a>
                                </p>
                            ` : ""}

                                ${member.email ? `
                                <p>
                                    <strong>Email:</strong>
                                    <a href="mailto:${member.email}">
                                        ${member.email}
                                    </a>
                                </p>
                            ` : ""}

                            </div>
                        ` : ""}

                    ${member.position ? `
                            <span>${member.position}</span>
                        ` : ""}

                </div>

            </div>

        `;

        }


        /*==================================================
        RENDER COMMITTEE
        ==================================================*/

        function renderCommittee() {

            const container = document.getElementById("rgarcCommitteeCards");

            if (!container || typeof antiRaggingCommittee === "undefined") return;

            container.innerHTML = antiRaggingCommittee
                .map(member => createMemberCard(member))
                .join("");

        }


        /*==================================================
        RENDER SQUAD
        ==================================================*/

        function renderSquad() {

            const container = document.getElementById("rgarcSquadCards");

            if (!container || typeof antiRaggingSquad === "undefined") return;

            container.innerHTML = antiRaggingSquad
                .map(member => createMemberCard(member))
                .join("");

        }


        /*==================================================
        INITIALIZE
        ==================================================*/

        document.addEventListener("DOMContentLoaded", () => {

            renderCommittee();

            renderSquad();

        });
    </script>

    <script>
        /*==================================================
    ANTI RAGGING COMMITTEE DATA
    ==================================================*/

        const antiRaggingCommittee = [

            {
                name: "Prof. (Dr.) George AP",
                designation: "Professor & Dean, Royal School of Business, Royal School of Commerce",
                mobile: "9496375685",
                email: "georgep@rgu.ac",
                position: "Chairperson"
            },
            {
                name: "Dr. Kuntala Roy Choudhury",
                designation: "Assistant Professor, RSLA",
                mobile: "9706613147",
                email: "kroychoudhury@rgu.ac",
                position: "Member Secretary & Nodal Officer"
            },
            {
                name: "Mr. Jaideep Rajak, ALRS",
                designation: "Circle Officer, Dispur Revenue Circle",
                mobile: "7086442900",
                email: "dmdispurcrc@gmail.com",
                position: "Member from Civil Administration"
            },
            {
                name: "Smt. Moitrayee Deka, APS",
                designation: "Co-District Superintendent of Police, Police Commissionerate, Guwahati",
                mobile: "0361-2570522",
                email: "dc-pwest@assampolice.gov.in",
                position: "Member from Police Administration"
            },
            {
                name: "Ms. Moonmee Baruah",
                designation: "Programme Assistant, UTSAH, Child Rights Organisation",
                mobile: "9132845179",
                email: "moonmeebaruah97@gmail.com",
                position: "Member from NGO"
            },
            {
                name: "Sri Sivashish Thakur",
                designation: "Chief Reporter, The Assam Tribune",
                mobile: "9864060193",
                email: "sivathakur@gmail.com",
                position: "Member from Media"
            },
            {
                name: "Prof. (Dr.) D.N. Singh",
                designation: "Registrar Academics, RGU",
                mobile: "9800004433",
                email: "registraracademics@rgu.ac",
                position: "Member"
            },
            {
                name: "Ms. Angira Mimani",
                designation: "Assoc. Dean, Student Affairs",
                mobile: "9864105609",
                email: "amimani@rgu.ac",
                position: "Member"
            },
            {
                name: "Prof. (Dr.) Debendra Kumar Nayak",
                designation: "Professor & i/c Dean, RSEES",
                mobile: "9436103290",
                email: "dknayak@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Prof. Punam Debbarma",
                designation: "Professor & Vice Principal/ HOD, RSN",
                mobile: "8731033428",
                email: "pdebbarma@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Prof. Bhabajyoti Saikia",
                designation: "Professor & HOD, RSB",
                mobile: "7002550226",
                email: "bsaikia2@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Prof. (Dr.) Binay Singh",
                designation: "Professor, RSAF",
                mobile: "9436633324",
                email: "bsingh@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Dr. Bhairab Sarma",
                designation: "Associate Professor, Computer Science & Engineering, RSET",
                mobile: "9612524872",
                email: "bsarma3@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Mrs. Somyata Chitaranjan Satpathy Sarma",
                designation: "Associate Professor, RSMAS",
                mobile: "7577984438",
                email: "sssarma@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Ar. Bhola Saha",
                designation: "Assistant Professor, RSA",
                mobile: "7002609550",
                email: "akborah@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Dr. Pubalee Sarmah",
                designation: "Associate Professor, Chemistry, RSAPS",
                mobile: "7002069755",
                email: "pule.sarmah@rgi.edu.in",
                position: "Member from Faculty"
            },
            {
                name: "Dr. Sailendra Das",
                designation: "Assistant Professor, RSCM",
                mobile: "9864765552",
                email: "sdas7@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Dr. Rituraj Bharadwaj",
                designation: "Associate Professor, RSP",
                mobile: "7002486750",
                email: "rbharadwaj2@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Dr. Shraddha Basu",
                designation: "Assistant Professor & Co-ordinator, RSBAS",
                mobile: "9401539238",
                email: "sbasu@rgu.ac",
                position: "Member from Faculty"
            },
            {
                name: "Mr. Mridul Phookan",
                designation: "Chief Warden, RGU",
                mobile: "9957722115",
                email: "mphookan@rgu.ac",
                position: "Member from Admin"
            },
            {
                name: "Mr. Gautam Das",
                designation: "Chief Security & Vigilance Officer",
                mobile: "9953031475",
                email: "gdas2@rgu.ac",
                position: "Member from Admin"
            },
            {
                name: "Ms. Moon Moon Ahmed",
                designation: "Sr. Manager, Academic Section",
                mobile: "9864059775",
                email: "mmahmed@rgu.ac",
                position: "Member from Admin"
            },
            {
                name: "Mr. Imran Hussain",
                designation: "BBA, 5th semester, RSB",
                mobile: "9707711712",
                email: "mdimran2003hussain@gmail.com",
                position: "Member from Hostel Boarder (Boy’s)"
            },
            {
                name: "Mrs. Suhani Singh",
                designation: "B.Sc. Bio-Technology, 5th Sem",
                mobile: "7889186788",
                email: "singhsuhani76625@gmail.com",
                position: "Member from Hostel Boarder (Girl’s)"
            },
            {
                name: "Mr. Prabhat Saha",
                designation: "B. Pharm., 7th Semester, RSP",
                mobile: "9707287525",
                email: "sahaprabhat27113@gmail.com",
                position: "Member from Sr. Students"
            },
            {
                name: "Ms. Musqaan Suave",
                designation: "M.Tech. CSE, 3rd semester, RSET",
                mobile: "7896366466",
                email: "musqaansuave@gmail.com",
                position: "Member from Sr. Students"
            },
            {
                name: "Mr. Susanta Chowdhury",
                designation: "F/O : Kaushiki Chowdhury (BA(H) Political Science)",
                mobile: "9864316090",
                email: "susantac60@gmail.com",
                position: "Member from Parents"
            },
            {
                name: "Ms. Gitarthi Goswami",
                designation: "M/O – Jugarka Kaushik (BA (H) & MC)",
                mobile: "8638921523",
                email: "gitarthigoswami999@gmail.com",
                position: "Member from Parents"
            },
            {
                name: "Ms. Parineeta Gowala",
                designation: "B.Sc. (H) Forensics Science, 1st semester, RSLSC",
                mobile: "8099737128",
                email: "parineetagowala7@gmail.com",
                position: "Member from Fresher"
            },
            {
                name: "Mr. Seelame Emmanuel Motlomelo",
                designation: "Bachelor of Anaesthesia & Operation Theatre Technology, 1st semester, RSMAS",
                mobile: "9181859558",
                email: "seelanemotlomelo6@gmail.com",
                position: "Member from Fresher"
            }

        ];


        /*==================================================
        ANTI RAGGING SQUAD DATA
        ==================================================*/

        const antiRaggingSquad = [


            {
                name: "Dr. Anurag Barthwal",
                designation: "Associate Professor",
                department: "Computer Science & Engineering",
                mobile: "9074878985",
                email: "abarthwal@rgu.ac"
            },
            {
                name: "Dr. Bonisha Borah",
                designation: "Assistant Professor",
                department: "CE",
                mobile: "7002299749",
                email: "bborah2@rgu.ac"
            },
            {
                name: "Dr. Mousumi Deka",
                designation: "Associate Professor",
                department: "Fine Arts",
                mobile: "9435343550",
                email: "mdeka@rgu.ac"
            },
            {
                name: "Dr. Supriya Sikari",
                designation: "Associate Professor",
                department: "Travel & Tourism Management & Hotel Management",
                mobile: "8900346165",
                email: "ssikari@rgu.ac"
            },
            {
                name: "Dr. Roshni Saikia",
                designation: "Assistant Professor",
                department: "Management",
                mobile: "8812826908",
                email: "ntiwarI@rgu.ac"
            },
            {
                name: "Dr. Syamkumar V",
                designation: "Assistant Professor",
                department: "Political Science",
                mobile: "9656417398",
                email: "shnongmeikapam@rgu.ac"
            },
            {
                name: "Dr. Amit Kumar",
                designation: "Assistant Professor",
                department: "Economics",
                mobile: "9849371732",
                email: "akumar3@rgu.ac"
            },
            {
                name: "Dr. Madhurjya Baruah",
                designation: "Assistant Professor",
                department: "Physical Education",
                mobile: "8723943733",
                email: "mbaruah@rgu.ac"
            },
            {
                name: "Mr. Kadiguang Panmei",
                designation: "Assistant Professor",
                department: "Sociology",
                mobile: "9971323423",
                email: "kpanmei@rgu.ac"
            },
            {
                name: "Dr. Baiarbha Massar",
                designation: "Assistant Professor",
                department: "Social Work",
                mobile: "8920092825",
                email: "bmassar@rgu.ac"
            },
            {
                name: "Ms. Bhayolina Sarma",
                designation: "Assistant Professor",
                department: "Optometry",
                mobile: "7399392427",
                email: "bsarma@rgu.ac"
            },
            {
                name: "Ms. Zomuanpuii",
                designation: "Assistant Professor & Coordinator",
                department: "OTT",
                mobile: "8974769870",
                email: "Zomuanpuii.i@rgu.ac"
            },
            {
                name: "Miss. Meghna Guha",
                designation: "Assistant Professor and Coordinator",
                department: "Radiography",
                mobile: "8638138493",
                email: "mguha@rgu.ac"
            },
            {
                name: "Ms. Anindita Dutta",
                designation: "Assistant Professor",
                department: "MLT",
                mobile: "9706309411",
                email: "adutta@rgu.ac"
            },
            {
                name: "Dr. Priyanka Bhattacharya",
                designation: "Assistant Professor",
                department: "Food Science & Nutrition",
                mobile: "8724051399",
                email: "pbhattacharyya@rgu.ac"
            },
            {
                name: "Dr. Anirban Banik",
                designation: "Assistant Professor",
                department: "Zoology",
                mobile: "9475247558",
                email: "abanik1@rgu.ac"
            },
            {
                name: "Dr. Upasna Chettry",
                designation: "Assistant Professor",
                department: "Botany",
                mobile: "9774185232",
                email: "uchettry@rgu.ac"
            },
            {
                name: "Mr. Benek K Babu",
                designation: "Assistant Professor & Coordinator",
                department: "Forensic Science",
                mobile: "8113096875",
                email: "bkbabu@rgu.ac"
            },
            {
                name: "Dr. Ankita Agarwal",
                designation: "Assistant Professor",
                department: "J& MC",
                mobile: "9864067250",
                email: "aagarwaldc@rgu.ac"
            },
            {
                name: "Mr. Asif Iqbal Mazid",
                designation: "Assistant Professor & Coordinator",
                department: "Fashion",
                mobile: "6001189441",
                email: "aimazid@rgu.ac"
            },
            {
                name: "Mr. Zubin Islam",
                designation: "Assistant Professor & Coordinator",
                department: "Design",
                mobile: "9619121397",
                email: "zislam@rgu.ac"
            },
            {
                name: "Ms. Baishali Pathak",
                designation: "Assistant Professor",
                department: "Commerce",
                mobile: "9085325944",
                email: "bpathak1@rgu.ac"
            },
            {
                name: "Dr. Prabuddha Ghosh",
                designation: "Assistant Professor",
                department: "English",
                mobile: "9874892569",
                email: "pghosh@rgu.ac"
            },
            {
                name: "Ms. Payal Dasgupta",
                designation: "Assistant Professor",
                department: "Pharmacy",
                mobile: "8638399823",
                email: "pdasgupta@rgu.ac"
            },
            {
                name: "Dr. Pankaj Losan Sharma",
                designation: "Assistant Professor",
                department: "Microbiology",
                mobile: "8822384403",
                email: "plsharma@rgu.ac"
            },
            {
                name: "Dr. Mousumi Das Goswami",
                designation: "Assistant Professor",
                department: "Biotechnology",
                mobile: "8011131675",
                email: "mdgoswami@rgu.ac"
            },
            {
                name: "Dr. Bikram Bir",
                designation: "Assistant Professor",
                department: "Mathematics",
                mobile: "9706930645",
                email: "bbir@rgi.edu.in"
            },
            {
                name: "Dr. Debojit Sahu",
                designation: "Assistant Professor",
                department: "Chemistry",
                mobile: "9954215185",
                email: "dsahu@rgu.ac"
            },
            {
                name: "Dr. Koushik Saikia",
                designation: "Assistant Professor",
                department: "Physics",
                mobile: "9957074291",
                email: "ksaikia3@rgu.ac"
            },
            {
                name: "Dr. Trishna Changkakati",
                designation: "Assistant Professor",
                department: "Geography",
                mobile: "8011809853",
                email: "tchangkakati@rgu.ac"
            },
            {
                name: "Mr. Rajdeep Deb",
                designation: "Assistant Professor",
                department: "Geology",
                mobile: "9365279350",
                email: "Pborah2@rgu.ac"
            },
            {
                name: "Dr. Md. Mukutor Rahman",
                designation: "Assistant Professor",
                department: "Library & Information Science",
                mobile: "7002190775",
                email: "mrahman@rgu.ac"
            },
            {
                name: "Ms. Bhanita Barman",
                designation: "Assistant Professor",
                department: "Nursing",
                mobile: "7002091880",
                email: "bbarman@rgu.ac"
            },
            {
                name: "Dr. Saswati Bordoloi",
                designation: "Co-Coordinator, IKS Cell",
                department: "IKS",
                mobile: "8473901735",
                email: "sbordoloi@rgu.ac"
            },
            {
                name: "Mr Hrishikesh Pathak",
                designation: "Sports Officer",
                department: "Physical Education and Sports",
                mobile: "9476927098",
                email: "hpathak@rgu.ac"
            },
            {
                name: "Dr. Nilanjana Purkayastha",
                designation: "Assistant Professor",
                department: "Library",
                mobile: "7002145936",
                email: "npurkayastha@rgu.ac"
            },
            {
                name: "Ms. Momata Tamuly",
                designation: "Warden",
                department: "Harsha House",
                mobile: "7002144451",
                email: "mtamuly@rgu.ac"
            },
            {
                name: "Mr. Kamal Narayan Das",
                designation: "Warden",
                department: "Aditya House",
                mobile: "9854051729",
                email: "kndas@rgu.ac"
            },
            {
                name: "Mr. Shamim A Goney",
                designation: "Deputy Registrar",
                department: "Administration",
                mobile: "9864026097",
                email: "sagoney@rgu.ac"
            },
            {
                name: "Mr. Manoj Sarma",
                designation: "Sr. Manager",
                department: "Administration",
                mobile: "8811003111",
                email: "msarma@rgu.ac"
            },
            {
                name: "Mr. Bijoy Kalita",
                designation: "Manager",
                department: "IT Section",
                mobile: "8811026092",
                email: "bskalita@rgu.ac"
            }

        ];
    </script>
@endsection

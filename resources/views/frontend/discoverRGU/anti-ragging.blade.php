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
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/anti-ragging/cover.png'); filter: blur(5px);">
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
            designation: "Professor, Dean",
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
            name: "Sri Bubul Baishya, ACS",
            designation: "Circle Officer, Dispur Revenue Circle",
            mobile: "8638691168",
            email: "dc-kamrupm@nic.in",
            position: "Member from Civil Administration"
        },

        {
            name: "Mr. Vikram Basumatary",
            designation: "Officer In-Charge, Garchuk Police Station",
            mobile: "9394090044",
            email: "cp-guw@assampolice.gov.in",
            position: "Member from Police Administration"
        },

        {
            name: "Ms. Farhin Farhat",
            designation: "Project Coordinator, Shishu Sarothi",
            mobile: "8811811691",
            email: "farhinfarhat10@gmail.com",
            position: "Member from NGO"
        },

        {
            name: "Dr. Rahul Chanda",
            designation: "Senior Journalist and Bureau Chief G Plus",
            mobile: "8486002316",
            email: "Rahul.chanda@g-plus.in",
            position: "Member from Media"
        },

        {
            name: "Dr. D.N. Singh",
            designation: "Registrar Academics, RGU",
            mobile: "9800004433",
            email: "registraracademics@rgu.ac",
            position: "Member"
        },

        {
            name: "Prof. (Dr.) Hari Prasad Agarwal",
            designation: "Dean, RSA, RSD, RSFT, RSFA",
            mobile: "9706006112",
            email: "hpagarwal@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Prof. (Dr.) Prithviraj Chakarborty",
            designation: "Professor & Principal/HOD, RSP",
            mobile: "8945903763",
            email: "pchakraborty@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Prof. (Dr.) Hemeswari Bhuyan",
            designation: "Professor, RSN",
            mobile: "8638231994",
            email: "hbhuyan@rgu.ac",
            position: "Member from Faculty"
        },
        {
            name: "Dr. Arpee Saikia",
            designation: "Associate Professor, RSB",
            mobile: "9706727218",
            email: "arpee.saikia@rgi.edu.in",
            position: "Member from Faculty"
        },

        {
            name: "Dr. Madhusmita Koch",
            designation: "Associate Professor, RSMAS",
            mobile: "8399985622",
            email: "mkoch@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Dr. Indrajit Dutta",
            designation: "Associate Professor, RSTTM",
            mobile: "9863651421",
            email: "idutta@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Dr. Rani Das",
            designation: "Assistant Professor, Social Work and Public Relation Officer",
            mobile: "",
            email: "",
            position: "Member from Faculty"
        },

        {
            name: "Ms. Bidisha Goswami",
            designation: "Assistant Professor, RSET",
            mobile: "9101062955",
            email: "bgoswami1@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Ar. Jagriti Pathak",
            designation: "Assistant Professor, RSA",
            mobile: "9101182435",
            email: "jpathak1@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Dr. Rupesh Kumar",
            designation: "Assistant Professor, MLT",
            mobile: "8638492924",
            email: "rkumar@rgu.ac",
            position: "Member from Faculty"
        },

        {
            name: "Dr. Naphisabeth Kharsati",
            designation: "Assistant Professor, RSBAS",
            mobile: "9774915764",
            email: "nkharsati@rgu.ac",
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
            name: "Mr. Ratan Nath",
            designation: "Chief Security & Vigilance Officer",
            mobile: "9859161420",
            email: "rnath1@rgu.ac",
            position: "Member from Admin"
        },
        {
            name: "Ms. Moonmoon Ahmed",
            designation: "Manager, Academic Section",
            mobile: "9864059775",
            email: "mmahmed@rgu.ac",
            position: "Member from Admin"
        },

        {
            name: "Divyansh Sood",
            designation: "BCA, 4th Semester, RSIT",
            mobile: "7085710046",
            email: "divyanshsood6969@gmail.com",
            position: "Member from Hostel Boarder (Boy's)"
        },

        {
            name: "Adnin Begum",
            designation: "B. Tech CE, 6th Semester",
            mobile: "8638810127",
            email: "adninbegum@gmail.com",
            position: "Member from Hostel Boarder (Girl's)"
        },

        {
            name: "Zubin Islam",
            designation: "MBA, 3rd Semester, RSB",
            mobile: "9619121397",
            email: "zislam@gmail.com",
            position: "Member from Sr. Students"
        },

        {
            name: "Sibani Pattnaik",
            designation: "BA-LLB, 8th Semester, RSLA",
            mobile: "7683944202",
            email: "sibanicps@gmail.com",
            position: "Member from Sr. Students"
        },

        {
            name: "Mrs. Itishree Mahapatra",
            designation: "M/O: Sibani Pattanaik (BA LLB)",
            mobile: "948469333/9078906333",
            email: "mahapatraitishree1980@gmail.com",
            position: "Member from Parents"
        },

        {
            name: "Mr. Abdul Zubber",
            designation: "F/O: Shahil Ahmed (BTech CSE)",
            mobile: "9435401183",
            email: "zubberabdul@gmail.com",
            position: "Member from Parents"
        },

        {
            name: "Ms. Pahee Baishya",
            designation: "BA Political Science, 1st Semester, RSHSS",
            mobile: "9435086474",
            email: "",
            position: "Member from Fresher"
        },

        {
            name: "Mr. Asheek Basumatary",
            designation: "B.Sc. Bio-Technology, 1st Semester, RSBSC",
            mobile: "8638764563",
            email: "",
            position: "Member from Fresher"
        }

    ];


    /*==================================================
    ANTI RAGGING SQUAD DATA
    ==================================================*/

    const antiRaggingSquad = [

        {
            name: "Ms. Rumi Talukdar",
            designation: "Associate Professor",
            department: "Nursing",
            mobile: "9864817225",
            email: "rtalukdar@rgu.ac"
        },

        {
            name: "Dr. Syed Sajidul Islam",
            designation: "Associate Professor",
            department: "TTM",
            mobile: "9435702586",
            email: "ssislam@rgu.ac"
        },

        {
            name: "Dr. Bapan Kalita",
            designation: "Associate Professor",
            department: "Mathematics",
            mobile: "9854152518",
            email: "bapan.kalita@rgi.edu.in"
        },

        {
            name: "Dr. Biplob Borah",
            designation: "Assistant Professor",
            department: "Chemistry",
            mobile: "7002730472",
            email: "bborah1@rgu.ac"
        },

        {
            name: "Dr. Bornali Chetia",
            designation: "Assistant Professor",
            department: "Physics",
            mobile: "8638067347",
            email: "dchetia@rgu.ac"
        },

        {
            name: "Dr. Darshana Bhagowati",
            designation: "Assistant Professor",
            department: "Management",
            mobile: "8420707010",
            email: "dbhagowati@rgu.ac"
        },

        {
            name: "Dr. Shraddha Basu",
            designation: "Assistant Professor",
            department: "Psychology",
            mobile: "9401539238",
            email: "sbasu@rgu.ac"
        },

        {
            name: "Dr. Nilanjana Purkayastha",
            designation: "Assistant Professor",
            department: "Library Science",
            mobile: "7002145936",
            email: "npurkayastha@rgu.ac"
        },

        {
            name: "Ms. Baishali Pathak",
            designation: "Assistant Professor",
            department: "Commerce",
            mobile: "9085325944",
            email: "bpathak1@rgu.ac"
        },

        {
            name: "Dr. Champa Devi",
            designation: "Assistant Professor",
            department: "Communication & Media",
            mobile: "9436896628",
            email: "cdevi@rgu.ac"
        },
        {
            name: "Mr. Dijendra Das",
            designation: "Teaching Assistant",
            department: "Animation & Visual Effects",
            mobile: "9957406256",
            email: "ddas4@rgu.ac"
        },

        {
            name: "Ms. Sukriti Baruah",
            designation: "Assistant Professor",
            department: "Design",
            mobile: "9665524257",
            email: "sbaruah@rgu.ac"
        },

        {
            name: "Dr. Rajesh Deb",
            designation: "Assistant Professor",
            department: "Civil Engineering",
            mobile: "8753016393",
            email: "rdeb@rgu.ac"
        },

        {
            name: "Dr. Sanghamitra Hazarika",
            designation: "Assistant Professor",
            department: "Economics",
            mobile: "7002390144",
            email: "shazarika1@rgu.ac"
        },

        {
            name: "Ms. KM Sudha",
            designation: "Assistant Professor",
            department: "History",
            mobile: "8853651505",
            email: "kmsudha@rgu.ac"
        },

        {
            name: "Mr. Abhinav Chaliha",
            designation: "Assistant Professor",
            department: "Political Science",
            mobile: "9873068634",
            email: "achaliha@rgu.ac"
        },

        {
            name: "Dr. Monika Kumari",
            designation: "Assistant Professor",
            department: "Public Administration",
            mobile: "7042228930",
            email: "mkumari@rgu.ac"
        },

        {
            name: "Ms. Adishree Borgohain",
            designation: "Assistant Professor",
            department: "Sociology",
            mobile: "8377885874",
            email: "aborgohain@rgu.ac"
        },

        {
            name: "Ms. Joyeeta Bhattacharjee",
            designation: "Assistant Professor",
            department: "Social Work",
            mobile: "7099073361",
            email: "jbbhattacharjee@rgu.ac"
        },

        {
            name: "Ms. Sangeeta Biswas",
            designation: "Assistant Professor",
            department: "Zoology",
            mobile: "9612206784",
            email: "sbiwas1@rgu.ac"
        },
        {
            name: "Dr. Upashna Chettri",
            designation: "Assistant Professor",
            department: "Botany",
            mobile: "7797875244",
            email: "uchettri@rgu.ac"
        },

        {
            name: "Dr. Demsai Reang",
            designation: "Assistant Professor",
            department: "Forestry",
            mobile: "8638026696",
            email: "dreang@rgu.ac"
        },

        {
            name: "Ms. Neelakshi Sharma",
            designation: "Assistant Professor",
            department: "Pharmacy",
            mobile: "9613221566",
            email: "nsharma4@rgu.ac"
        },

        {
            name: "Mr. Spandan Kumar Barthakur",
            designation: "Assistant Professor",
            department: "RSIT",
            mobile: "7002839151",
            email: "skborthakur@rgu.ac"
        },

        {
            name: "Dr. Saswati Bordoloi",
            designation: "Assistant Professor",
            department: "IKS",
            mobile: "8473901735",
            email: "sbordoloi@rgu.ac"
        },

        {
            name: "Ar. Barsha Kunda",
            designation: "Assistant Professor",
            department: "Architecture",
            mobile: "9706721765",
            email: "bkunda@rgu.ac"
        },

        {
            name: "Ms. Dipanjali Das",
            designation: "Assistant Professor",
            department: "Food Technology",
            mobile: "7016576349",
            email: "ddas@rgu.ac"
        },

        {
            name: "Dr. Taranga Jyoti Baruah",
            designation: "Assistant Professor",
            department: "Microbiology",
            mobile: "7308413200",
            email: "tjbaruah@rgu.ac"
        },

        {
            name: "Ms. Anudeep Kaur",
            designation: "Assistant Professor",
            department: "Radiography & AIT",
            mobile: "9654861603",
            email: "akaur@rgu.ac"
        },

        {
            name: "Ms. Zomuanpuii",
            designation: "Assistant Professor",
            department: "OTT",
            mobile: "8974769870",
            email: "zomuanpui.i@rgu.ac"
        },
        {
            name: "Dr. Debjani Das",
            designation: "Assistant Professor",
            department: "Nutrition & Dietetics",
            mobile: "6909436881",
            email: "ddas5@rgu.ac"
        },

        {
            name: "Ms. Lipika Kalita",
            designation: "Assistant Professor",
            department: "Optometry",
            mobile: "7002435904",
            email: "lkalita1@rgu.ac"
        },

        {
            name: "Dr. Sumanto Dutta Choudhury",
            designation: "Assistant Professor",
            department: "Fine Arts",
            mobile: "9864370028",
            email: "sdchoudhury@rgu.ac"
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

@extends('frontend/new-master')
@section('title', ' Deans Lister : The Assam Royal Global University')
@section('meta_description', 'Dean List is a List of Honour, which will comprise of only final year students who have
    shown academic excellence and discipline.')
@section('meta_keywords', ' Deans Lister')
@section('content')

    <style>
        /* ==========================
       TEACHING PRACTICE SECTION
    ========================== */

        .teaching-practice-section {
            padding: 80px 0 40px;
            background: #EBF1FC;
        }

        .teaching-practice-top {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .teaching-practice-image {
            flex: 0 0 48%;
        }

        .teaching-practice-image img {
            width: 100%;
            border-radius: 14px;
            display: block;
            transition: 0.4s ease;
        }

        .teaching-practice-image img:hover {
            transform: scale(1.02);
        }

        .teaching-practice-content {
            flex: 1;
        }

        .teaching-practice-content h2 {
            color: #29437d;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: "Georgia", serif;
        }

        .teaching-practice-content p {
            color: #555;
            font-size: 1.6rem;
            text-align: justify;
            line-height: 1.9;
            margin-bottom: 14px;
        }

        /* ==========================
       FULL WIDTH BLUE SECTION
    ========================== */

        .teaching-practice-learning-wrap {
            width: 100%;
            background: #153a78;
            margin-top: 40px;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            padding: 70px 0;
            overflow: hidden;
        }

        .teaching-practice-learning {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .teaching-practice-learning-content {
            flex: 1;
            color: #fff;
        }

        .teaching-practice-learning-content h2 {
            color: #fff;
            font-size: 3rem;
            line-height: 1.25;
            margin-bottom: 30px;
            font-family: "Georgia", serif;
            font-weight: 700;
            max-width: 650px;
        }

        .teaching-practice-learning-content h3 {
            color: #f07d33;
            font-size: 2rem;
            line-height: 1.25;
            margin-top: 30px;
            font-family: "Georgia", serif;
            font-weight: 700;
            max-width: 650px;
        }

        .teaching-practice-learning-content h2 span {
            color: #f07d33;
        }

        .teaching-practice-learning-content ol {
            padding-left: 20px;
            margin: 0;
        }

        .teaching-practice-learning-content li {
            color: rgba(255, 255, 255, 0.92);
            font-size: 1.5rem;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .teaching-practice-learning-image {
            flex: 0 0 42%;
        }

        .teaching-practice-learning-image img {
            width: 100%;
            border-radius: 14px;
            display: block;
            transition: 0.4s ease;
        }

        .teaching-practice-learning-image img:hover {
            transform: scale(1.03);
        }

        /* ==========================
       RESPONSIVE
    ========================== */

        @media (max-width: 1199px) {

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 36px;
            }
        }

        @media (max-width: 991px) {

            .teaching-practice-top,
            .teaching-practice-learning {
                flex-direction: column;
            }

            .teaching-practice-image,
            .teaching-practice-learning-image {
                flex: 0 0 100%;
                width: 100%;
            }

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 32px;
            }

            .teaching-practice-learning-wrap {
                padding: 60px 0;
                border-top-left-radius: 40px;
                border-top-right-radius: 40px;
            }
        }

        @media (max-width: 767px) {

            .teaching-practice-section {
                padding: 50px 0 20px;
            }

            .teaching-practice-top {
                gap: 30px;
            }

            .teaching-practice-content h2,
            .teaching-practice-learning-content h2 {
                font-size: 26px;
                line-height: 1.35;
            }

            .teaching-practice-content p,
            .teaching-practice-learning-content li {
                font-size: 14px;
            }

            .teaching-practice-learning-wrap {
                margin-top: 20px;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
            }
        }
    </style>

    <style>
        /* ===============================
    DEAN'S LISTER GALLERY
    =================================*/

        .dl-gallery-section {
            padding: 90px 0;
            background: #fff;
        }

        .dl-gallery-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .dl-gallery-heading h2 {
            color: #153a78;
            font-size: 3rem;
            font-family: Georgia, serif;
            font-weight: 700;
        }

        .dl-gallery-heading p {
            color: #777;
            font-size: 1.6rem;
        }

        .dl-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 28px;
        }

        .dl-gallery-item {
            display: block;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
        }

        .dl-gallery-item img {
            width: 100%;
            aspect-ratio: 3/4;
            object-fit: cover;
            transition: .45s;
        }

        .dl-gallery-item:hover img {
            transform: scale(1.08);
        }

        /* Lightbox */

        .dl-lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .9);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: .3s;
            z-index: 99999;
        }

        .dl-lightbox.active {
            opacity: 1;
            visibility: visible;
        }

        .dl-lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
        }

        .dl-lightbox-close {
            position: absolute;
            right: 35px;
            top: 20px;
            color: #fff;
            font-size: 45px;
            cursor: pointer;
        }

        /* Floating Download */

        .dl-download-btn {
            position: fixed;
            right: 25px;
            bottom: 35px;
            background: #153a78;
            color: #fff;
            padding: 15px 22px;
            border-radius: 60px;
            text-decoration: none;
            font-weight: 700;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 30px rgba(21, 58, 120, .35);
            animation: dlPulse 1.8s infinite;
        }

        .dl-download-btn:hover {
            color: #fff;
            text-decoration: none;
        }

        @keyframes dlPulse {

            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(21, 58, 120, .45);
            }

            70% {
                transform: scale(1.04);
                box-shadow: 0 0 0 18px rgba(21, 58, 120, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(21, 58, 120, 0);
            }

        }

        @media(max-width:991px) {

            .dl-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:576px) {

            .dl-gallery-grid {
                grid-template-columns: 1fr;
            }

            .dl-download-btn {
                right: 15px;
                left: 15px;
                bottom: 20px;
                justify-content: center;
            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/academics-deans-listers/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Dean's Lister</h1>
            <div class="pg-hero-breadcrumb">
                Admissions / Scholarship and Funding / Dean's Lister
            </div>
        </div>

    </section>


    <section class="teaching-practice-section">
        <div class="container">

            <!-- Top Section -->
            <div class="teaching-practice-top">


                <div class="teaching-practice-content">
                    <h2>About Dean's Listers</h2>

                    <p>
                        Dean's List is a List of Honour, which will comprise of only final year students who have shown
                        academic excellence and discipline, during their course of study in the University, till
                        pre-final year. The Dean's List award is not a scholarship as it does not come with any
                        financial aid. This Award is a recognition which will elevate students to higher echelons of
                        success. The awardees (student) will receive a personalized letter of appreciation from the
                        University officer’s viz. Dean Academics/Vice-Chancellor to honour and recognize their excellent
                        performance along with a Badge of Dean's list with Name, Year and Course of Student,
                    </p>

                    <p>
                        The Assam Royal Global University (RGU) proposes to institute this Award school wise.
                        irrespective of the course of study, for pre-final year students, except for the programmers
                        where the internship /training is for more than 3 months. In such cases the previous year to the
                        pre final year will be considered for award of Dean's List. Separate Dean's List shall be made
                        for UG & PG levels. The selection of students for this list will be done after the end of every
                        academic year. For pre final year students, based on results of all the previous semesters,
                        attendance etc.
                    </p>

                    <p>
                        A maximum of 05 students will be nominated per school, 2/3 from Undergraduate and 2/3 from
                        Postgraduate, where the total strength of school in final year is 100 students or more.
                        Accordingly, the number of students will be proportionately reduced on the basis of total
                        strength of each school.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- Full Width Blue Section -->
    <section class="teaching-practice-learning-wrap">

        <div class="container">

            <div class="teaching-practice-learning">

                <div class="teaching-practice-learning-content">

                    <h2>
                        Eligibility Criteria
                    </h2>

                    <h3>
                        Minimum eligibility criteria to qualify for the Dean's list are as follows:-
                    </h3>

                    <ol>
                        <li>
                            Cumulative ninety percent (90%) attendance in both theory and practical classes for last two
                            semesters, along with minimum attendance of eighty-five (85%) percent in all the previous
                            semesters, considered for award.
                        </li>

                        <li>
                            High Grades in academic performance.
                        </li>

                    </ol>

                    <p>(a) Minimum 9 CGPA in semester-end university examinations in last two semesters. along with an
                        overall 8.5 CGPA throughout all the previous semesters.</p>
                    <p>(b) Minimum 80% marks in the internal assessment throughout all the previous semesters</p>

                    <h3>
                        (c) Other considerations for selections are –
                    </h3>

                    <p>A. Consistently good and exemplary behavior.</p>

                    <p>
                        B. An important criterion to be considered for the selection to the Dean's List will be
                        proficiency in extra-curricular activities. A student's contribution in enhancing the visibility
                        of the University by competing in extracurricular activities within University/ Inter
                        University/State level/National level will be considered.
                    </p>

                    <p>
                        C. Good conduct of students in all activities of the University will be considered in the
                        selection to the Dean's List, but any involvement in indiscipline will result in
                        disqualification/withdrawal of the honour.
                    </p>

                    <p><strong style="color: #f07d33;">Process of nomination:</strong> the students (promoted to final
                        year) shall be identified and nominated by HoD/ Hol/ coordinator based on the eligibility
                        criteria, as mentioned above. The nominations. along with the details as stated above viz.
                        attendance. grades, extracurricular activities etc., must reach Registrar office/ academic
                        section/ any other office as assigned by Dean Academic/ Vice-Chancellor, latest by 30th
                        September, every year.</p>

                    <p><strong style="color: #f07d33;">Process of Selection:</strong> The final Dean's List shall be
                        published and declared by Registrar office/ academic section/ any other office as assigned by
                        Dean Academic/ Vice-Chancellor, after a personal interview of all the nominated students by a
                        panel constituted for this purpose, to be presided by Dean Academics/ Vice-Chancellor. The list
                        shall be declared every year, latest by 15th October.</p>

                </div>


            </div>

        </div>

    </section>

    <!-- Dean's Lister Gallery -->
    <section class="dl-gallery-section">
        <div class="container">

            <div class="dl-gallery-heading">
                <h2>Dean's Lister Gallery</h2>
                <p>Moments of Academic Excellence</p>
            </div>

            <div class="dl-gallery-grid">

                <a href="https://www.rgu.ac/mobile-assets/admission-dean-lister/1dean-list2022-23.jpg"
                    class="dl-gallery-item">
                    <img src="https://www.rgu.ac/mobile-assets/admission-dean-lister/1dean-list2022-23.jpg" alt="">
                </a>

                <a href="https://www.rgu.ac/mobile-assets/admission-dean-lister/3dean-list2020-21.jpg"
                    class="dl-gallery-item">
                    <img src="https://www.rgu.ac/mobile-assets/admission-dean-lister/3dean-list2020-21.jpg" alt="">
                </a>

                <a href="https://www.rgu.ac/mobile-assets/admission-dean-lister/3dean-list2021-22.jpg"
                    class="dl-gallery-item">
                    <img src="https://www.rgu.ac/mobile-assets/admission-dean-lister/3dean-list2021-22.jpg" alt="">
                </a>

                <a href="https://www.rgu.ac/mobile-assets/admission-dean-lister/4dean-list2019-20.jpg"
                    class="dl-gallery-item">
                    <img src="https://www.rgu.ac/mobile-assets/admission-dean-lister/4dean-list2019-20.jpg" alt="">
                </a>

            </div>

        </div>
    </section>

    <!-- Lightbox -->
    <div class="dl-lightbox" id="dlLightbox">
        <span class="dl-lightbox-close">&times;</span>
        <img id="dlLightboxImg">
    </div>

    <!-- Floating Download Button -->
    <a href="https://www.rgu.ac/mobile-assets/admission-dean-lister/dean-list-policy.pdf" class="dl-download-btn" download>
        <i class="fa fa-download"></i>
        Download Dean's List Policy
    </a>

    <script>
        const dlGallery = document.querySelectorAll(".dl-gallery-item");
        const dlLightbox = document.getElementById("dlLightbox");
        const dlLightboxImg = document.getElementById("dlLightboxImg");

        dlGallery.forEach(item => {

            item.addEventListener("click", function(e) {

                e.preventDefault();

                dlLightbox.classList.add("active");
                dlLightboxImg.src = this.href;

            });

        });

        document.querySelector(".dl-lightbox-close").onclick = () => {
            dlLightbox.classList.remove("active");
        };

        dlLightbox.onclick = (e) => {

            if (e.target === dlLightbox) {

                dlLightbox.classList.remove("active");

            }

        };
    </script>

    <script>
        // Teaching Practice JS
        document.addEventListener("DOMContentLoaded", () => {

            const teachingPracticeImages = document.querySelectorAll(
                ".teaching-practice-image img, .teaching-practice-learning-image img"
            );

            teachingPracticeImages.forEach((img) => {
                img.addEventListener("mouseenter", () => {
                    img.style.transform = "scale(1.03)";
                });

                img.addEventListener("mouseleave", () => {
                    img.style.transform = "scale(1)";
                });
            });

        });
    </script>

@endsection

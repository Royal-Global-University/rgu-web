@extends('frontend/new-master')
@section('content')
        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/CampusHostel&AccomodationGames&Sports/cover-img.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Games & Sports</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Hostel & Accomodation / Games & Sports
            </div>
        </div>

    </section>


    <style>
        /* ===========================
   RGU SPORTS PAGE
   UNIQUE PREFIX : rguspt_
=========================== */

        .rguspt_wrap {
            background: #e9edf4;
        }

        /* Intro */
        .rguspt_intro {
            padding: 80px 0 40px;
        }

        .rguspt_intro_img {
            width: 100%;
            border-radius: 24px;
            overflow: hidden;
        }

        .rguspt_intro_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .rguspt_intro_text {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .rguspt_intro_text p {
            font-size: 18px;
            line-height: 1.9;
            color: #4d5561;
            margin: 0;
        }

        /* Blue Box */
        .rguspt_bluebox {
            background: linear-gradient(180deg, #234784 0%, #01204f 100%);
            border-radius: 70px 70px 0 0;
            padding: 70px;
            color: #fff;
            margin-top: 40px;
        }

        .rguspt_bluebox h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 30px;
        }

        .rguspt_bluebox p {
            font-size: 18px;
            line-height: 2;
            color: #e8edf7;
        }

        .rguspt_bluebox h3 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            margin-top: 60px;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Heading */
        .rguspt_section_title {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #24457f;
            font-weight: 700;
            margin: 80px 0 40px;
        }

        /* Table */
        .rguspt_tablewrap {
            overflow-x: auto;
        }

        .rguspt_table {
            width: 100%;
            border-collapse: collapse;
            background: #d8e2ef;
            border-radius: 8px;
            overflow: hidden;
        }

        .rguspt_table th {
            background: #294e8b;
            color: #fff;
            font-size: 22px;
            padding: 22px;
            text-align: left;
        }

        .rguspt_table td {
            padding: 20px 22px;
            border-top: 1px solid rgba(0, 0, 0, .25);
            border-right: 1px solid rgba(0, 0, 0, .25);
            color: #4f5562;
            font-size: 18px;
        }

        .rguspt_table td:last-child,
        .rguspt_table th:last-child {
            border-right: none;
        }

        /* Recreation */
        .rguspt_recreation {
            background: linear-gradient(180deg, #234784 0%, #01204f 100%);
            border-radius: 70px 70px 0 0;
            padding: 70px;
            margin-top: 90px;
            color: #fff;
        }

        .rguspt_recreation h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            margin-bottom: 30px;
        }

        .rguspt_recreation p {
            font-size: 18px;
            line-height: 2;
            color: #edf3ff;
        }

        .rguspt_contact {
            margin-top: 40px;
        }

        .rguspt_contact h4 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .rguspt_contact strong {
            display: block;
            color: #ff8d3d;
            font-size: 30px;
            margin-bottom: 5px;
        }

        /* Gallery */
        .rguspt_gallery_sec {
            padding: 80px 0;
        }

        .rguspt_gallery_title {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #24457f;
            font-weight: 700;
            margin-bottom: 60px;
        }

        .rguspt_gallery_grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .rguspt_gallery_left img {
            width: 100%;
            height: 620px;
            object-fit: cover;
            border-radius: 10px;
        }

        .rguspt_gallery_right {
            display: grid;
            gap: 30px;
        }

        .rguspt_gallery_right img {
            width: 100%;
            height: 295px;
            object-fit: cover;
            border-radius: 10px;
        }

        .rguspt_gallery_bottom {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 30px;
        }

        .rguspt_gallery_bottom img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Mobile */
        @media(max-width:991px) {

            .rguspt_intro {
                padding: 50px 0;
            }

            .rguspt_intro_text {
                margin-top: 30px;
            }

            .rguspt_bluebox,
            .rguspt_recreation {
                padding: 35px 25px;
                border-radius: 35px 35px 0 0;
            }

            .rguspt_bluebox h2,
            .rguspt_recreation h2 {
                font-size: 36px;
            }

            .rguspt_bluebox h3 {
                font-size: 28px;
            }

            .rguspt_section_title {
                font-size: 40px;
            }

            .rguspt_gallery_title {
                font-size: 42px;
            }

            .rguspt_gallery_grid {
                grid-template-columns: 1fr;
            }

            .rguspt_gallery_left img {
                height: 350px;
            }

            .rguspt_gallery_right {
                grid-template-columns: 1fr 1fr;
            }

            .rguspt_gallery_right img {
                height: 180px;
            }

            .rguspt_gallery_bottom {
                grid-template-columns: 1fr;
            }

            .rguspt_gallery_bottom img {
                height: 250px;
            }

            .rguspt_table th,
            .rguspt_table td {
                min-width: 250px;
            }
        }
    </style>

    <section class="rguspt_wrap">

        <div class="container">

            <!-- Intro -->

            <div class="rguspt_intro">
                <div class="row align-items-center g-5">

                    <div class="col-lg-6">
                        <div class="rguspt_intro_img">
                            <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/headimg.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rguspt_intro_text">
                            <p>
                                The University proudly boasts world-class recreation and wellness programmes for the
                                students, staff, faculty, and community of The Assam Royal Global University.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Blue Content -->

        <div class="rguspt_bluebox">

            <div class="container">

                <h2>Education And Sports Are Complementary To Each Other!!</h2>

                <p>
                    There are multiple sport facilities to keep our students engaged and physically fit. Our campus has
                    outdoor game facilities like Cricket, Football, Basketball, Tennis, Baseball, Athletics and so on.
                    Its international standard indoor sports complex “The Cube” offers a variety of indoor games
                    including badminton courts, squash, billiards, and table tennis.
                </p>

                <p>
                    Fitness conscious students can go for a jog around the scenic university campus or work out at the
                    well-equipped gymnasium available both at the Boys and Girls hostel. The Gymnasium is equipped with
                    various equipment like treadmills, dumbbells &amp; plates, weights, shoulder press, leg-pull, leg
                    extension, incline shoulder, double twisters, etc.
                </p>

                <p>
                    Separate Indoor Games facilities like badminton, table tennis, chess, carrom etc are also available
                    within the hostel premises of both Girls and Boys.
                </p>

                <h3>Sports Clubs :</h3>

                <p>
                    The RGU Sports Club has been constituted to enhance the student’s university experience and
                    contribute to the student’s overall education and wellness. The club is not only committed to
                    providing a healthy sporting habit among the students and faculty but also to educating them to live
                    in a better way.
                </p>
                <p>
                    The Sports Club organises intra-university sports events to provide leadership and recreation
                    opportunities to students and faculty to enhance their knowledge and skills in a specific sport of
                    interest while at the same time retaining social, cognitive, and physical experiences.
                </p>

            </div>

        </div>

        <div class="container">

            <!-- Coordinators -->

            <h2 class="rguspt_section_title">
                The Coordinators Of The Various Clubs Are:
            </h2>

            <div class="rguspt_tablewrap">

                <table class="rguspt_table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Club</th>
                            <th>Contact</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Dr. Gitanjal Deka</td>
                            <td>Baseball, Cricket</td>
                            <td>8011778907</td>
                        </tr>

                        <tr>
                            <td>Dr. Y Monojit Singh</td>
                            <td>Badminton, Sepak Takraw</td>
                            <td>8753970668</td>
                        </tr>

                        <tr>
                            <td>Mr. Rishikesh Duarah</td>
                            <td>Football, Volleyball</td>
                            <td>7002948974</td>
                        </tr>

                        <tr>
                            <td>Mr. Pankaj Gogoi</td>
                            <td>Chess, Table Tennis</td>
                            <td>8721015177</td>
                        </tr>

                        <tr>
                            <td>Mr. Tirtharaj Gohain</td>
                            <td>Kabaddi</td>
                            <td>8638556799</td>
                        </tr>

                        <tr>
                            <td>Mr. Sparsh Tiwari</td>
                            <td>Basketball, Athletics</td>
                            <td>7002654952</td>
                        </tr>

                        <!-- <tr>
                            <td>Mr. Somiran Buragohain</td>
                            <td>Squash</td>
                            <td>8099389898</td>
                        </tr> -->
                    </tbody>
                </table>

            </div>

        </div>

        <!-- Recreation -->

        <div class="rguspt_recreation">

            <div class="container">

                <h2>Recreational Activities:</h2>

                <p>
                    To make leisure time more interesting and enjoyable students can choose from several recreational
                    activities – walking, meditation, reading, playing games and dancing to refresh their bodies and
                    mind.
                </p>

                <p>
                    The major emphasis of the recreational and wellness programmes is on the holistic growth of students
                    ensuring their intellectual, emotional, physical, cultural, and social development and therefore it
                    will not be merely limited to assessment of learner’s academic attainments.
                </p>

                <div class="rguspt_contact">
                    <h4>Contact Details</h4>

                    <strong>Mr. Hrishikesh Pathak</strong>

                    <div>Sports Coordinator, RGU</div>
                    <div>+91-88118-33709</div>
                </div>

            </div>

        </div>

        <div class="container">

            <!-- Gallery -->

            <section class="rguspt_gallery_sec">

                <h2 class="rguspt_gallery_title">
                    Glimpse Of Games And Sports
                </h2>

                <div class="rguspt_gallery_grid">

                    <div class="rguspt_gallery_left">
                        <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/1.png" alt="">
                    </div>

                    <div class="rguspt_gallery_right">
                        <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/2.png" alt="">
                        <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/3.png" alt="">
                    </div>

                </div>

                <div class="rguspt_gallery_bottom">

                    <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/4.png" alt="">
                    <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/5.png" alt="">
                    <img src="new-web/assets/img/CampusHostel&AccomodationGames&Sports/6.png" alt="">

                </div>

            </section>

        </div>

    </section>
@endsection

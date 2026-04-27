@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Language (RSL)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Language (RSL)</span></h2>

        </div>

        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }

            /* Individual Card Styling */
            .card {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 0.7rem;
                text-align: left;
                border: none;
                width: 100%;
                height: 100%;

                /* Flexbox for vertical alignment */
                display: flex;
                flex-direction: column;

                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Hover effect for the card */
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Image container */
            .card-image {
                width: 100%;
                padding-top: 100%;
                position: relative;
                border-radius: 5%;
                overflow: hidden;
                margin: 0 auto 1.0rem;
                border: 2px solid #f0f2f5;
            }

            .card-image img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Name/Heading Styling */
            .card-name {
                margin: 0 0 0.5rem 0;
                font-size: 1.5rem;
                font-weight: 600;
                color: #333;
                line-height: 1.2;
                color: #24477f;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
            }

            /* New Styling for the Profile Link */
            .profile-link {
                margin-top: auto;
                /* This is the magic property! */
                padding-top: 0.5rem;
                font-size: 1.1rem;
                font-weight: 800;
                text-decoration: none;
                color: #FF9A1E;
            }

            .profile-link:hover {
                text-decoration: underline;
            }
        </style>

        <div class="section-f">
            <div class="container">

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/dr-indrani-singh-rai.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. (Dr.) Indrani S Rai</h3>
                                <p class="card-designation">Professor & Dean, Royal School of Languages (RSL)</p>
                                <a href="/faculty-indrani-singh-rai" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nandana.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. (Dr.) Nandana Dutta</h3>
                                <p class="card-designation">Dean Academic and Professor of English</p>
                                <a href="https://www.rgu.ac/Dr-Nandana-Dutta" class="profile-link">View Profile</a>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Krishna-Barua-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Krishna Barua</h3>
                            <p class="card-designation">Senior Professor</p>
                            <a href="/faculty-krishna-barua" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pradip-Jyoti-Mahanta-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Pradip Jyoti Mahanta</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-pradip-jyoti-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Amlandeep.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Amlandeep Das</h3>
                            <p class="card-designation">Professor & Associate Dean, Student Affairs</p>
                            <a href="/faculty-amlandeep-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dileep.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Dileep Chandan Sarma</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-dileep-chandan-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bornali-Bhuyan-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Bornali Bhuyan</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-bornali-bhuyan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pronami Bhattacharyya</h3>
                            <p class="card-designation">Associate Professor & HoD</p>
                            <a href="/faculty-pronami-bhattacharyya" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Baishalee-Rajkhowa-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Baishalee Rajkhowa</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <a href="/faculty-baishalee-rajkhowa" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Jasmine-Choudhury-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Jasmine A Choudhury
                            </h3>
                            <p class="card-designation">Associate Professor

                            </p>
                            <a href="/faculty-jasmine-a-choudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Stuti Goswami
                            </h3>
                            <p class="card-designation">Associate Professor

                            </p>
                            <a href="/faculty-stuti-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/sattyakee.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Sattyakee D'Com Bhuyan</h3>
                            <p class="card-designation">Assistant Professor & Deputy Dean, Student Affairs</p>
                            <a href="/faculty-sattyakee-dcom-bhuyan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Banani-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Banani Das Hazarika
                            </h3>
                            <p class="card-designation">Assistant Professor and Associate Dean, Student Affairs
                            </p>
                            <a href="/faculty-banani-das-hazarika" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Ayushman Devraj
                            </h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Student Affairs

                            </p>
                            <a href="https://www.rgu.ac/faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bisalakshi Sawarni
                            </h3>
                            <p class="card-designation">Assistant Professor

                            </p>
                            <a href="/faculty-bisalakshi-sawarni" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pompi-Basumatary-RSl.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pompi Basumatary
                            </h3>
                            <p class="card-designation">Assistant Professor

                            </p>
                            <a href="/faculty-pompi-basumatary" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Prabuddha-Ghosh.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Prabuddha Ghosh
                            </h3>
                            <p class="card-designation">Assistant Professor

                            </p>
                            <a href="/faculty-prabuddha-ghosh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Radhika.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Radhika Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-radhika-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rani-Das.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rani Pathak Das</h3>
                            <p class="card-designation">Assistant Professor, Social Work and Public Relation Officer</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/anjali2.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms Anjali Kumar
                            </h3>
                            <p class="card-designation">Assistant Professor

                            </p>
                            <a href="https://www.rgu.ac/faculty-anjali-kumar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/chandni-khaund.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Chandni Khaund
                            </h3>
                            <p class="card-designation">Assistant Professor
                            </p>
                            <a href="/faculty-chandni-khaund" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi
                            </h3>
                            <p class="card-designation">Assistant Professor
                            </p>
                            <a href="/faculty-pankaj-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Prasant Mali
                            </h3>
                            <p class="card-designation">Assistant Professor
                            </p>
                            <a href="/faculty-prasant-mali" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

            </div>
        </div>

        <div class="container">

            <!-- Sanskrit  -->
            <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                <h2 class="text-center justify-content-center fw-bold"
                    style="color: #fff; padding: 10px; font-size: 30px;">
                    Department of Sanskrit</h2>
            </div>
            <!-- Sanskrit  -->


            <!-- regular faculty  -->
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="/mobile-assets/updated-faculty-img/chief-advisor-pic.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Prof. Dhrubajyoti Borah
                        </h3>
                        <p class="card-designation">Professor

                        </p>
                        <!-- <a href="" class="profile-link">View Profile</a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dileep.jpeg"
                                alt="Profile image">
                        </div>
                        <h3 class="card-name">Prof. Dileep Chandan Sarma
                        </h3>
                        <p class="card-designation">Professor

                        </p>
                        <a href="/faculty-dileep-chandan-sarma" class="profile-link">View Profile</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="mobile-assets/department-all/dept-sanskrit/gitarthi.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Ms. Gitarthi Goswami
                        </h3>
                        <p class="card-designation">TGT

                        </p>
                        <a href="/faculty-gitarthi-goswami" class="profile-link">View Profile</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="mobile-assets/department-all/dept-sanskrit/uday-sankar-dev.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Mr. Uday Shankar Deb
                        </h3>
                        <p class="card-designation">TGT

                        </p>
                        <a href="/faculty-uday-shankar" class="profile-link">View Profile</a>
                    </div>
                </div>

            </div>
            <!-- regular faculty  -->

            <!-- Assamese  -->
            <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                <h2 class="text-center justify-content-center fw-bold"
                    style="color: #fff; padding: 10px; font-size: 30px;">
                    Department of Assamese</h2>
            </div>
            <!-- Assamese  -->

            <!-- regular faculty  -->
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Prof. Dhrubajyoti Borah
                        </h3>
                        <p class="card-designation">Professor

                        </p>
                        <!-- <a href="" class="profile-link">View Profile</a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Prasanta Jyoti Baruah</h3>
                            <p class="card-designation">Distinguished Professor & Dean, RSCOM</p>
                            <a href="/faculty-prasanta-jyoti-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dileep.jpeg"
                                alt="Profile image">
                        </div>
                        <h3 class="card-name">Prof. Dileep Chandan Sarma
                        </h3>
                        <p class="card-designation">Professor

                        </p>
                        <a href="/faculty-dileep-chandan-sarma" class="profile-link">View Profile</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pradip-Jyoti-Mahanta-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Pradip Jyoti Mahanta</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-pradip-jyoti-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuradhadevi-RSAPS.png"
                                    alt="Profile image of Prof. Anuradha Devi">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Anuradha Devi</h3>
                            <p class="card-designation">Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bapan-Kalita.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bapan Kalita</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bapan-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Stuti Goswami
                            </h3>
                            <p class="card-designation">Associate Professor

                            </p>
                            <a href="/faculty-stuti-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                alt="Profile image">
                        </div>
                        <h3 class="card-name">Dr. Bisalakshi Sawarni</h3>
                        <p class="card-designation">Assistant Professor</p>
                        <a href="/faculty-bisalakshi-sawarni" class="profile-link">View Profile</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="mobile-assets/department-all/dept-assamese/deepa.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Ms. Deepa Choudhury
                        </h3>
                        <p class="card-designation">Faculty of Assamese and F.A.

                        </p>
                        <a href="/faculty-deepa-choudhury" class="profile-link">View Profile</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="mobile-assets/department-all/dept-assamese/bhumika-nath.png" alt="Profile image">
                        </div>
                        <h3 class="card-name">Ms. Bhumika Nath
                        </h3>
                        <p class="card-designation">Educator of Assamese language

                        </p>
                        <a href="/faculty-bhumika-nath" class="profile-link">View Profile</a>
                    </div>
                </div>

            </div>
            <!-- regular faculty  -->


        </div>

    </div>
@endsection

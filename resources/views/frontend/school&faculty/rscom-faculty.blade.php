@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Communication and Media (RSCOM)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Communication and Media (RSCOM)</span></h2>

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

                    <!-- Distinguished Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Prasanta Jyoti Baruah</h3>
                            <p class="card-designation">Distinguished Professor & Dean, RSCOM</p>
                            <a href="https://www.rgu.ac/advisor-prasanta-jyoti-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsb/2.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. D.N. Singh</h3>
                            <p class="card-designation">Professor & Registrar, Academics</p>
                            <a href="https://www.rgu.ac/Prof-dn-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dileep.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Dileep Chandan Sarma</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Florence-Handique-Rabha.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Florence H. Rabha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-florance-rabha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professor & Coordinator -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sharmista-Pradhan-RSCOM.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Sharmista Pradhan</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, RSCOM</p>
                            <a href="https://www.rgu.ac/faculty-sharmista-pradhan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors (A–Z) -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Ankita-Agarwal-RSCOM.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Ankita Agarwal</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ankita-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Champa-Devi.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Champa Devi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-champa-devi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rscom/5.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Esha Chakraborty</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-esha-chakraborty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sailendra-Das.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sailendra Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sailendra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/suresh.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Suresh Goduka</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-suresh-goduka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bijayata-Dutta-RSCOM.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Bijayata Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bijayata-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/jintu.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Jintu Mahanta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jintu-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dijendra-Das-RSCOM.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Dijendra Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dijendra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/sattyakee.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Sattyakee D'Com Bhuyan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-dijendra" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">

                    <!-- ========================= -->
                    <!-- Professors -->
                    <!-- ========================= -->


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amlan-Das-RSBSC.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Amlan Das</h3>
                            <p class="card-designation">Professor & Co-cordinator, IKS</p>
                            <a href="https://www.rgu.ac/faculty-amlan-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/soumitra-sen.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Soumitra Sen</h3>
                            <p class="card-designation">Senior Professor</p>
                            <a href="https://www.rgu.ac/faculty-soumitra-sen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- ========================= -->
                    <!-- Associate Professor -->
                    <!-- ========================= -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Syed Sajidul Islam</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-syed-sajidul-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- ========================= -->
                    <!-- Assistant Professor & Assistant Dean -->
                    <!-- ========================= -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor
                            <a href="/faculty-abesh-chakraborty" class="profile-link">View Profile</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pragya.jpeg"
                                    alt="Profile image of Pragya Tamang">
                            </div>
                            <h3 class="card-name">Dr. Pragya Tamang</h3>
                            <p class="card-designation">Assistant Professor</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kristi-Saikia-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Kristi Saikia</h3>
                            <p class="card-designation">Assistant Professor, Asst. Dean (Student Welfare)</p>
                            <a href="https://www.rgu.ac/faculty-kristi-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- ========================= -->
                    <!-- Assistant Professor & Coordinator -->
                    <!-- ========================= -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                            <a href="https://www.rgu.ac/faculty-sumanta-dutta-chowdhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Tripti-Das.png"
                                    alt="Profile image of Tripti Das">
                            </div>
                            <h3 class="card-name">Dr. Tripti Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tripti-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/monojit-singha-pol-sc.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Y. Monojit Singha</h3>
                            <p class="card-designation">Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-monojit-singha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- ========================= -->
                    <!-- Assistant Professors (A–Z) -->
                    <!-- ========================= -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Amarjyoti-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Amarjyoti Borah</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amarjyoti-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bidisha.jpg"
                                    alt="Profile image of Bidisha Goswami">
                            </div>
                            <h3 class="card-name">Ms. Bidisha Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bidisha-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Chandni.jpeg"
                                    alt="Profile image">
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
                            <div class="card-image"><img
                                    src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bishnu-Gurung.png "
                                    alt="Profile image "></div>
                            <h3 class="card-name">Dr. Bishnu Kumari Gurung</h3>
                            <p class="card-title">Assistant Professor</p><a
                                href="https://www.rgu.ac/faculty-bishnu-gurung" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Monisha-Bordoloi-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Monisha Bordoloi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-monisha-bordoloi" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Naveen.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Naveen R. Shahi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-naveen-r-shahi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pankaj-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image of Prasant Mali">
                            </div>
                            <h3 class="card-name">Mr. Prasant Mali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-prasant-mali" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Radhika.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Radhika Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-radhika-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/roshni.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Roshni Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-roshni-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amarendra.jpeg"
                                    alt="Profile image of Dr. Thangjam Roshini">
                            </div>
                            <h3 class="card-name">Dr. Thangjam Roshini</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-thangjam-roshini" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- ========================= -->
                    <!-- Guest Faculty -->
                    <!-- ========================= -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Rajkumari Surjabala Devi Das">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ankit.jpg"
                                    alt="Profile image of Ankit Bordoloi">
                            </div>
                            <h3 class="card-name">Mr. Ankit Bordoloi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ankit-bordoloi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nikita-Biswakarma-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Nikita Biswakarma</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <a href="https://www.rgu.ac/faculty-nikita-biswakarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- adjunct faculty  -->


            </div>
        </div>

    </div>
@endsection

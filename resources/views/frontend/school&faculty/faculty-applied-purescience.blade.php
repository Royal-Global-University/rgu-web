@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Applied & Pure Sciences (RSAPS)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Applied & Pure Sciences (RSAPS)</span></h2>

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

                    {{-- <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuradhadevi-RSAPS.png"
                                    alt="Profile image of Prof. Anuradha Devi">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Anuradha Devi</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Applied & Pure Sciences (RSAPS)
                            </p>
                            <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a>
                        </div>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/chatterjee.png"
                                    alt="Profile image of Prof. (Dr.) Amarjyoti Choudhury">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Aniruddha Chatterjee</h3>
                            <p class="card-designation">Professor & Dean, Royal School Applied & Pure Sciences</p>
                            <a href="/faculty-aniruddha-chatterjee" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/advisor-leadership/Amarjyoti.jpeg"
                                    alt="Profile image of Prof. (Dr.) Amarjyoti Choudhury">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Amarjyoti Choudhury</h3>
                            <p class="card-designation">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre for
                                Creativity, The Assam Royal Global University</p>
                            <a href="https://www.rgu.ac/advisor-dr-amarjyoti-choudhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/2.jpg" alt="Profile image of Prof. Dilip Nath">
                            </div>
                            <h3 class="card-name">Prof. Dilip Nath</h3>
                            <p class="card-designation">Professor Emeritus & Honorary Advisor, RSAPS</p>
                            <a href="https://www.rgu.ac/faculty-dilip-nath" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/3.jpg" alt="Profile image of Prof. Ladu Laishram">
                            </div>
                            <h3 class="card-name">Prof. Ladu Laishram</h3>
                            <p class="card-designation">Professor Emeritus</p>
                            <a href="https://www.rgu.ac/faculty-laishram-ladu-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/4.jpg"
                                    alt="Profile image of Prof. Amarendra Rajput">
                            </div>
                            <h3 class="card-name">Prof. Amarendra Rajput</h3>
                            <p class="card-designation">Professor & Advisor</p>
                            <a href="https://www.rgu.ac/faculty-amdrendra-rajput" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

                <!-- Mathematics  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Mathematics</h2>
                </div>
                <!-- Mathematics  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

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
                                <img src="mobile-assets/all-faculty/rsaps/2.jpg" alt="Profile image of Prof. Dilip Nath">
                            </div>
                            <h3 class="card-name">Prof. Dilip Nath</h3>
                            <p class="card-designation">Professor Emeritus & Honorary Advisor, RSAPS</p>
                            <a href="https://www.rgu.ac/faculty-dilip-nath" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/3.jpg" alt="Profile image of Prof. Ladu Laishram">
                            </div>
                            <h3 class="card-name">Prof. Ladu Laishram</h3>
                            <p class="card-designation">Professor Emeritus</p>
                            <a href="https://www.rgu.ac/faculty-laishram-ladu-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bimalendu-Kalita-RSAPS.png"
                                    alt="Profile image of Dr. Bimalendu Kalita">
                            </div>
                            <h3 class="card-name">Dr. Bimalendu Kalita</h3>
                            <p class="card-designation">Associate Professor & HOD, Mathematics</p>
                            <a href="https://www.rgu.ac/faculty-dr-bimalendu-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bapan-Kalita.jpg"
                                    alt="Profile image of Dr. Bapan Kalita">
                            </div>
                            <h3 class="card-name">Dr. Bapan Kalita</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bapan-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bikram-Bir-RSAPS.png"
                                    alt="Profile image of Dr. Bikram Bir">
                            </div>
                            <h3 class="card-name">Dr. Bikram Bir</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bikram-bir" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Kshetrimayum-Renubebeta-Devi.jpeg"
                                    alt="Profile image of Dr. Kshetrimayum Devi">
                            </div>
                            <h3 class="card-name">Dr. Kshetrimayum Renubebeta Devi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-kshetrimayum-renubebeta-devi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                    alt="Profile image of Dr. Marbarisha Kharkongor">
                            </div>
                            <h3 class="card-name">Dr. Marbarisha Kharkongor</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Neelav-Sarma-RSAPS.png"
                                    alt="Profile image of Mr. Neelav Sarma">
                            </div>
                            <h3 class="card-name">Dr. Neelav Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelav-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image of Dr. Parismita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rupak.jpeg"
                                    alt="Profile image of Dr. Rupak Kumar Dalai">
                            </div>
                            <h3 class="card-name">Dr. Rupak Kumar Dalai</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-rupak-kumar-dalai" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Imo-Mani-Singha-RSAPS.png"
                                    alt="Profile image of Mr. H. Imo Mani Singha">
                            </div>
                            <h3 class="card-name">Mr. H. Imo Mani Singha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-imo-mani-singha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/Deluwar.jpeg"
                                    alt="Profile image of Dr. Muhammad Deluwar Hoque">
                            </div>
                            <h3 class="card-name">Dr. Muhammad Deluwar Hoque</h3>
                            <p class="card-designation">Associate Professor & HOD, Economics</p>
                            <a href="https://www.rgu.ac/faculty-mohammed-deluwar-hoque" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image of Prof. Abhinav Chaliha">
                            </div>
                            <h3 class="card-name">Mr. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mousumi-Das-Goswami-RSBSC.png"
                                    alt="Profile image of Mousomi Das Goswami">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Das Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mousumi-das-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rupshikha-Patowary-RSBSC.png"
                                    alt="Profile image of Rupshika Patowary">
                            </div>
                            <h3 class="card-name">Dr. Rupshikha Patowary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rupshikha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Baishalee-Rajkhowa-RSL.png"
                                    alt="Profile image of Dr.Baishalee Rajkhowa">
                            </div>
                            <h3 class="card-name">Dr. Baishalee Rajkhowa</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <a href="/faculty-baishalee-rajkhowa" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image of Ms.Richika Kedia">
                            </div>
                            <h3 class="card-name">Dr. Richika Kedia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-richika-kedia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/Upashna.jpg"
                                    alt="Profile image of Dr. Upashna Chettri">
                            </div>
                            <h3 class="card-name">Dr. Upashna Chettri</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-upashna-chettri" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Rajkumari Surjabala Devi Das">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Chemistry  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Chemistry</h2>
                </div>
                <!-- Chemistry  -->

                <!-- regular faculty  -->
                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/chatterjee.png"
                                    alt="Profile image of Prof. (Dr.) Amarjyoti Choudhury">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Aniruddha Chatterjee</h3>
                            <p class="card-designation">Professor & Dean, Royal School Applied & Pure Sciences</p>
                            <a href="/faculty-aniruddha-chatterjee" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pubalee-Sarmah-RSAPS.png"
                                    alt="Profile image of Dr. Pubalee Sarmah">
                            </div>
                            <h3 class="card-name">Dr. Pubalee Sarmah</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-pubalee-sarmah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Biplob-Borah.png"
                                    alt="Profile image of Dr. Biplob Borah">
                            </div>
                            <h3 class="card-name">Dr. Biplob Borah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Chemistry</p>
                            <a href="https://www.rgu.ac/faculty-biplob-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Binoyargha-Dam-RSAPS.png"
                                    alt="Profile image of Dr. Binoyargha Dam">
                            </div>
                            <h3 class="card-name">Dr. Binoyargha Dam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-binoyargha-dam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/21.jpg" alt="Profile image of Dr. Debojit Sahu">
                            </div>
                            <h3 class="card-name">Dr. Debojit Sahu</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-debojeet-sahu" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Mullah-Islam.png"
                                    alt="Profile image of Dr. Mullah Muhaiminul Islam">
                            </div>
                            <h3 class="card-name">Dr. Mullah Muhaiminul Islam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mullah-muhaiminul-islam" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Nongthombam-Singh.png"
                                    alt="Profile image of Dr. Nongthombam Geetmani Singh">
                            </div>
                            <h3 class="card-name">Dr. Nongthombam Geetmani Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nongthombam-geetmani-singh" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Sachidulal-Biswas.png"
                                    alt="Profile image of Dr. Sachidulal Biswas">
                            </div>
                            <h3 class="card-name">Dr. Sachidulal Biswas</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sachidulal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/suvani.png"
                                    alt="Profile image of Dr. Mahuya Deb">
                            </div>
                            <h3 class="card-name">Dr. Suvani Subhadarshini</h3>
                            <p class="card-designation">Assistant Professor (Research)</p>
                            <a href="/faculty-suvani-subhadarshini" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Mahuya-Deb-RSBAS.png"
                                    alt="Profile image of Dr. Mahuya Deb">
                            </div>
                            <h3 class="card-name">Dr. Mahuya Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mahuya-deb" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Neha-Tiwari.png"
                                    alt="Profile image of Ms. Neha Tiwari">
                            </div>
                            <h3 class="card-name">Dr. Neha Tiwari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neha-tiwari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Dipak Jain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Dipak-jain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                    alt="Profile image of Dr. Marbarisha Kharkongor">
                            </div>
                            <h3 class="card-name">Dr. Marbarisha Kharkongor</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rupak.jpeg"
                                    alt="Profile image of Dr. Rupak Kumar Dalai">
                            </div>
                            <h3 class="card-name">Dr. Rupak Kumar Dalai</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-rupak-kumar-dalai" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Taranga-Jyoti-Baruah-RSBSC.png"
                                    alt="Profile image of">
                            </div>
                            <h3 class="card-name">Dr. Taranga Jyoti Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-taranga-jyoti-baruah" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuj-Kumar-Borah-RSBSC.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Anuj Kumar Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anuj-kumar-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Rajdeep-Deb-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Rajdeep Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rajdeep-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Neeta-Moni-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Neeta Moni Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neeta-moni-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Pritom-Borah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pritom Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pritom-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Pritha-Roychowdhury.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pritha Roychowdhury</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-pritha-roychowdhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Arghadeep.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arghadeep Bose</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/facultyarghadeep-bose" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="/faculty-abesh-chakraborty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Arvind-Kumar.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arvind Kumar Dwivedi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-arvind-dwivedi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsa/16.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ar. Ritu Rani</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ritu-rani" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsa/3.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ar. Bhola Saha</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Architecture</p>
                            <a href="https://www.rgu.ac/faculty-Bhola-Saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rupshikha-Patowary-RSBSC.png"
                                    alt="Profile image of Rupshika Patowary">
                            </div>
                            <h3 class="card-name">Dr. Rupshikha Patowary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rupshikha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mousumi-Das-Goswami-RSBSC.png"
                                    alt="Profile image of Mousomi Das Goswami">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Das Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mousumi-das-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nitu-Borgohain-RSAPS.png"
                                    alt="Profile image of Dr. Nitu Borgohain">
                            </div>
                            <h3 class="card-name">Dr. Nitu Borgohain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-nitu-borgohain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pronami Bhattacharyya</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-pronami-bhattacharyya" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Dr. Susmita Banerjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Palme-Borthakur.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Palme Borthakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-palme-borthakur" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">
                                Dr. Ayushman Devraj
                            </h3>
                            <p class="card-designation">
                                Assistant Professor, Assistant Dean, Student Affairs
                            </p>
                            <a href="https://www.rgu.ac/faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                                    alt="Profile image of Jahnabi">
                            </div>
                            <h3 class="card-name">Ms. Jahnabi Mahanta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jahnabi-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image of Dr. Parismita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Siddhartha-Narayan-Borah-RSBSC.png"
                                    alt="Profile image of Dr. Siddhartha Narayan Borah">
                            </div>
                            <h3 class="card-name">Dr. Siddhartha Narayan Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-siddhartha-narayan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Birson-Ingti-RSBSC.png"
                                    alt="Profile image of Birson Ingti">
                            </div>
                            <h3 class="card-name">Dr. Birson Ingti</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Microbiology</p>
                            <a href="https://www.rgu.ac/faculty-birson-ingti" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Ankita-Agarwal-RSCOM.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Ankita Agarwal</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ankita-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/premmi.png" alt="Profile image of Jahnabi">
                            </div>
                            <h3 class="card-name">Dr. Premmi Wahengbam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-premmi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sailendra-Das.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Sailendra Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sailendra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Naveen.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Naveen R Shahi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-naveen-r-shahi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/Phurailatpam.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Phurailatpam Jeny Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-phurailatpam-jeny-sharma" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Darshana-Bhagowati.png"
                                    alt="Profile image of Dr. Darshana Bhagowati">
                            </div>
                            <h3 class="card-name">Dr. Darshana Bhagowati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-darshana-bhagowati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pundarikaksha.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pundarikaksha Das</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Forensic Sciences</p>
                            <a href="https://www.rgu.ac/faculty-dr-pundarikaksha-das" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>
                <!-- adjunct faculty  -->
                <!-- regular faculty  -->

                <!-- Physics  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Physics</h2>
                </div>
                <!-- Physics  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/advisor-leadership/Amarjyoti.jpeg"
                                    alt="Profile image of Prof. (Dr.) Amarjyoti Choudhury">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Amarjyoti Choudhury</h3>
                            <p class="card-designation">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre
                                for Creativity, RGU</p>
                            <a href="https://www.rgu.ac/advisor-dr-amarjyoti-choudhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/4.jpg"
                                    alt="Profile image of  Prof. (Dr.) Amarendra Rajput">
                            </div>
                            <h3 class="card-name"> Prof. (Dr.) Amarendra Rajput</h3>
                            <p class="card-designation">Professor and Advisor</p>
                            <a href="https://www.rgu.ac/faculty-amdrendra-rajput" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/dip-saikia.png"
                                    alt="Profile image of Dr. Devika Phukan">
                            </div>
                            <h3 class="card-name">Prof. Dip Saikia</h3>
                            <p class="card-designation">Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-dr-devika-phukan" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Devika-Phukan-RSAPS.png"
                                    alt="Profile image of Dr. Devika Phukan">
                            </div>
                            <h3 class="card-name">Dr. Devika Phukan</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-devika-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sankar-Barman-RSAPS.jpeg"
                                    alt="Profile image of Dr. Sankar Barman">
                            </div>
                            <h3 class="card-name">Dr. Sankar Barman</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-sankar-barman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Maidul-Islam-RSAPS.png"
                                    alt="Profile image of Dr. Maidul Islam">
                            </div>
                            <h3 class="card-name">Dr. Maidul Islam</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Physics</p>
                            <a href="https://www.rgu.ac/faculty-dr-maidul-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Bornali-Chetia-RSAPS.png"
                                    alt="Profile image of Dr. Bornali Chetia">
                            </div>
                            <h3 class="card-name">Dr. Bornali Chetia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bornali-chetia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Faizuddin-Ahmed.png"
                                    alt="Profile image of Dr. Faizuddin Ahmed">
                            </div>
                            <h3 class="card-name">Dr. Faizuddin Ahmed</h3>
                            <p class="card-designation">Assistant Professor (Research)</p>
                            <a href="https://www.rgu.ac/faculty-faizuddin-ahmed" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Koushik-Saikia-RSAPS.png"
                                    alt="Profile image of Dr. Koushik Saikia">
                            </div>
                            <h3 class="card-name">Dr. Koushik Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-koushik-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Neelav-Sarma-RSAPS.png"
                                    alt="Profile image of Neelav Sarmah">
                            </div>
                            <h3 class="card-name">Dr. Neelav Sarmah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelav-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nitu-Borgohain-RSAPS.png"
                                    alt="Profile image of Dr. Nitu Borgohain">
                            </div>
                            <h3 class="card-name">Dr. Nitu Borgohain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-nitu-borgohain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image of Ayushman Devraj">
                            </div>
                            <h3 class="card-name">Dr. Ayushman Devraj</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Student Affairs</p>
                            <a href="https://www.rgu.ac/faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Dr. Susmita Banerjee</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                                    alt="Profile image of Jahnabi">
                            </div>
                            <h3 class="card-name">Ms. Jahnabi Mahanta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jahnabi-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image of Parismita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Abhijit-Gogoi-RSEES.png"
                                    alt="Profile image of Abhijit">
                            </div>
                            <h3 class="card-name">Dr. Abhijit Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhijit-gogoi" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                                    alt="Profile image of Tahera Hoque">
                            </div>
                            <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Mullah-Islam.png"
                                    alt="Profile image of Muhaiminul">
                            </div>
                            <h3 class="card-name">Dr. Mullah Muhaiminul Islam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mullah-muhaiminul-islam" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Biplob-Borah.png"
                                    alt="Profile image of Dr. Biplob Borah">
                            </div>
                            <h3 class="card-name">Dr. Biplob Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-biplob-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/Deluwar.jpeg"
                                    alt="Profile image of Dr. Muhammad Deluwar Hoque">
                            </div>
                            <h3 class="card-name">Dr. Muhammad Deluwar Hoque</h3>
                            <p class="card-designation">Associate Professor & HOD, Economics</p>
                            <a href="https://www.rgu.ac/faculty-mohammed-deluwar-hoque" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/jugal.jpeg"
                                    alt="Profile image of Jugal Kr Bhattacharyya">
                            </div>
                            <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                            <p class="card-designation">Assistant Professor & Coordinator GE/AEEC</p>
                            <a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pompi-Basumatary-RSl.png"
                                    alt="Profile image of Pompi">
                            </div>
                            <h3 class="card-name">Dr. Pompi Basumatary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pompi-basumatary" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/5.png"
                                    alt="Profile image of Meghna Guha">
                            </div>
                            <h3 class="card-name">Ms. Meghna Guha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-meghna-guha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Rohit-Sarma.png"
                                    alt="Profile image of Rohit Sarma">
                            </div>
                            <h3 class="card-name">Mr. Rohit Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rohit-sarma" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                    alt="Profile image of Dr. Marbarisha M. Kharkongar">
                            </div>
                            <h3 class="card-name">Dr. Marbarisha M. Kharkongar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image of Mr. Abhinav Chaliha">
                            </div>
                            <h3 class="card-name">Mr. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image of Parismita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/Upashna.jpg"
                                    alt="Profile image of Dr. Upashna Chettri">
                            </div>
                            <h3 class="card-name">Dr. Upashna Chettri</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-upashna-chettri" class="profile-link">View Profile</a>
                        </div>
                    </div>



                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection

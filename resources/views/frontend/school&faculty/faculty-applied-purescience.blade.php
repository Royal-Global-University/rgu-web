@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Applied & Pure Sciences (RSAPS)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
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

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuradhadevi-RSAPS.png"
                                    alt="Profile image of Prof. Anuradha Devi">
                            </div>
                            <h3 class="card-name">Prof. Anuradha Devi</h3>
                            <p class="card-designation">Professor & Dean, RSAPS</p>
                            <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/15.jpeg"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Rama Ranjan Bhattacharjee</h3>
                            <p class="card-designation">Dean – Research and Development</p>
                            <a href="faculty-rama-ranjan-bhattacharjee" class="profile-link">View Profile</a>
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
                            <h3 class="card-name">Prof. Anuradha Devi</h3>
                            <p class="card-designation">Professor & Dean, RSAPS</p>
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
                            <p class="card-designation">Associate Professor & HOD, mathematics</p>
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
                                <img src="mobile-assets/updated-faculty-img/Bhagyashri-Patgiri-RSAPS.png"
                                    alt="Profile image of Dr. Bhagyashri Patgiri">
                            </div>
                            <h3 class="card-name">Dr. Bhagyashri Patgiri</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bhagyashri-patgiri" class="profile-link">View Profile</a>
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
                            <h3 class="card-name">Dr. Kshetrimayum Devi</h3>
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
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Rupak.jpeg" alt="Profile image of Dr. Parismita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Rupak Kumar Dalai</h3>
                            <p class="card-designation">Assistant Professor</p>

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
                                <img src="mobile-assets/updated-faculty-img/Neelav-Sarma-RSAPS.png"
                                    alt="Profile image of Mr. Neelav Sarma">
                            </div>
                            <h3 class="card-name">Mr. Neelav Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelav-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/Deluwar.jpeg"
                                    alt="Profile image of Dr. Mohammed Deluwar Hoque">
                            </div>
                            <h3 class="card-name">Dr. Mohammed Deluwar Hoque</h3>
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
                            <h3 class="card-name">Prof. Abhinav Chaliha</h3>
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
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image of Ms.Richika Kedia">
                            </div>
                            <h3 class="card-name">Ms. Richika Kedia</h3>
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                            <div class="text-center text-white fw-bold"
                                style="background-color: #27467A; font-size: 32px; padding-top: 10px; padding-bottom: 10px;">Visiting
                                Faculty</div>
                            <div style="display: flex; justify-content: center; align-items: center;">

                                <div class="col-lg-3 mb-4 pt-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                        <div class="p-3">
                                            <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                                class="img-fluid rounded border" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rajkumari
                                                Surjabala Devi
                                                Das</h5>
                                            {{-- <a href="">
                                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                                    Profile</p> --}}
                                            </a>
                                        </div>
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
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/15.jpeg"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Rama Ranjan Bhattacharjee</h3>
                            <p class="card-designation">Dean – Research and Development</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pubalee-Sarmah-RSAPS.png"
                                    alt="Profile image of Dr. Pubalee Sarmah">
                            </div>
                            <h3 class="card-name">Dr. Pubalee Sarmah</h3>
                            <p class="card-designation">Associate Professor & HoD, Chemistry</p>
                            <a href="https://www.rgu.ac/faculty-pubalee-sarmah" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Rajkumar-Singh.png"
                                    alt="Profile image of Dr. Rajkumar Imocha Singh">
                            </div>
                            <h3 class="card-name">Dr. Rajkumar Imocha Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rajkumar-imocha" class="profile-link">View Profile</a>
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

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Baishalee-Rajkhowa-RSL.png"
                                    alt="Profile image of Dr.Baishalee Rajkhowa">
                            </div>
                            <h3 class="card-name">Dr. Baishalee Rajkhowa</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor
                                <!-- <a href="" class="profile-link">View Profile</a> -->

                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image of Ms.Richika Kedia">
                            </div>
                            <h3 class="card-name">Ms. Richika Kedia</h3>
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image of Ms. Parishmita Phukan">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Roshni-Agarwal.png"
                                    alt="Profile image of Roshni Agarwal">
                            </div>
                            <h3 class="card-name">Ms. Roshni Agarwal</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-roshni-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Jiwasmika-Baishya.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Jiwasmika Baishya</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jiwasmika-baishya" class="profile-link">View Profile</a>
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rikh-Roy.png"
                                    alt="Profile image of Mr. Rikh Roy">
                            </div>
                            <h3 class="card-name">Mr. Rikh Roy</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rikh-roy" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Trishna-Changkakati.png"
                                    alt="Profile image of Trishna Changkakati">
                            </div>
                            <h3 class="card-name">Dr. Trishna Changkakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Chongtham-Sovachandra-Singh.png"
                                    alt="Profile image of Chongtham Sovachandra Singh">
                            </div>
                            <h3 class="card-name">Dr. Chongtham Sovachandra Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-chongtham-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Amarjyoti-RSEES.png"
                                    alt="Profile image of Amarjyoti Borah">
                            </div>
                            <h3 class="card-name">Amarjyoti Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amarjyoti-borah" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Barsha-Kunda-RSA.png"
                                    alt="Profile image of Barsha Kunda">
                            </div>
                            <h3 class="card-name">Ar. Barsha Kunda</h3>
                            <p class="card-designation"></p>
                            <a href="https://www.rgu.ac/faculty-barsha-kunda" class="profile-link">View Profile</a>
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
                            <a href="" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Neelav-Sarma-RSAPS.png"
                                    alt="Profile image of Mr. Neelav Sarma">
                            </div>
                            <h3 class="card-name">Mr. Neelav Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelav-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png"
                                    alt="Profile image of Anushree Das Baruah">
                            </div>
                            <h3 class="card-name">Anushree Das Baruah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, RSAG</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://media.rgu.ac/iks/Dr.SiddhantMedhi.jpg"
                                    alt="Profile image of Siddhant Medhi">
                            </div>
                            <h3 class="card-name">Dr. Siddhant Medhi</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-siddhant-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Susmita Banerjee</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image of Ayushman Devraj">
                            </div>
                            <h3 class="card-name">Ayushman Devraj</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="faculty-ayushman-devra" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Ms-Jemima-Yasmin.png"
                                    alt="Profile image of Jahnabi">
                            </div>
                            <h3 class="card-name">Ms. Jemima Yasmin</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jemima-yasmin" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image of Prof. Abhinav Chaliha">
                            </div>
                            <h3 class="card-name">Prof. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>



                </div>

                            <div class="text-center text-white fw-bold"
                                style="background-color: #27467A; font-size: 32px; padding-top: 10px; padding-bottom: 10px;">Visiting
                                Faculty</div>
                            <div style="display: flex; justify-content: center; align-items: center;">

                                <div class="col-lg-3 mb-4 pt-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                        <div class="p-3">
                                            <img style="height: 310px; width: 100%;" src="mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                                class="img-fluid rounded border" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Rajkumari
                                                Surjabala Devi
                                                Das</h5>
                                            {{-- <a href="">
                                                <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">View
                                                    Profile</p> --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <p class="card-designation">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre for
                                Creativity, The Assam Royal Global University</p>
                            <a href="https://www.rgu.ac/advisor-dr-amarjyoti-choudhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsaps/4.jpg"
                                    alt="Profile image of Prof. Amarendra Rajput">
                            </div>
                            <h3 class="card-name">Prof. Amarendra Rajput</h3>
                            <p class="card-designation">Professor and Advisor</p>
                            <a href="https://www.rgu.ac/faculty-amdrendra-rajput" class="profile-link">View Profile</a>
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
                            <h3 class="card-name">Ayushman Devraj</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Susmita Banerjee</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Dr.SiddhantMedhi.jpg"
                                    alt="Profile image of Siddhant Medhi">
                            </div>
                            <h3 class="card-name">Dr. Siddhant Medhi</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-siddhant-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Neelav-Sarma-RSAPS.png"
                                    alt="Profile image of Neelav Sarmah">
                            </div>
                            <h3 class="card-name">Mr. Neelav Sarmah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelav-sarma" class="profile-link">View Profile</a>
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
                            <a href="" class="profile-link">View Profile</a>
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
                                    alt="Profile image of Biplob Borah">
                            </div>
                            <h3 class="card-name">Biplob Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-binoyargha-dam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/Deluwar.jpeg"
                                    alt="Profile image of Dr. Mohammed Deluwar Hoque">
                            </div>
                            <h3 class="card-name">Dr. Mohammed Deluwar Hoque</h3>
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image of Prof. Abhinav Chaliha">
                            </div>
                            <h3 class="card-name">Prof. Abhinav Chaliha</h3>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Deepanjali-Reang-RSHSS.png"
                                    alt="Profile image of Dr. Deepanjali Reang">
                            </div>
                            <h3 class="card-name">Dr. Deepanjali Reang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>



                </div>
                <!-- regular faculty  -->


                <!-- visitng faculty  -->

                <!-- visitng faculty  -->

            </div>
        </div>

    </div>
@endsection

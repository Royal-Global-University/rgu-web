@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Environmental & Earth Sciences
                    (RSEES)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Environmental & Earth Sciences
                    (RSEES)</span></h2>

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

                <!-- Geology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Geography and Geoinformatics</h2>
                </div>
                <!-- Geology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Debendra-Kumar-Nayak.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Debendra Kumar Nayak</h3>
                            <p class="card-designation">Professor & i/c Dean, Royal School of Environmental & Earth Sciences
                                (RSEES)</p>
                            <a href="/faculty-debendra-kumar-nayak" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Trishna-Changkakati.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Trishna Changkakati</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Geography & Geoinformatics</p>
                            <a href="/faculty-trishna-changkakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/amit-k.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Amit Kumar Tiwari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="/faculty-annesha-borah" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Annesha-Borah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Annesha Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-annesha-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Arghadeep.jpeg" alt="r. Arghadeep Bose">
                            </div>
                            <h3 class="card-name">Dr. Arghadeep Bose</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/facultyarghadeep-bose" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Salainganba.jpeg" alt="r. Arghadeep Bose">
                            </div>
                            <h3 class="card-name">Dr. Kh Salainganba Meitei</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-kh-salainganba-meitei" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Hibjur-Rahaman.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Md. Hibjur Rahaman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-hibjur-rahaman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr. Md Syed Salimuddin.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Md Syed Salimuddin</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-syed-salimuddin" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Palme-Borthakur.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Palme Borthakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-palme-borthakur" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Shobhit-Pipil.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shobhit Pipil</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-shobhit-pipil" class="profile-link">View Profile</a>
                        </div>
                    </div>



                </div>
                <!-- regular faculty  -->

                <!-- Geology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Geology</h2>
                </div>
                <!-- Geology  -->

                <!-- regular faculty  -->
                <div class="container">

                    <!-- regular faculty  -->
                    <div class="row justify-content-center">

                        <!-- Professor -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Hemangi-Deka-Sarma-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Hemangi Deka Sarma</h3>
                                <p class="card-designation">Professor</p>
                                <a href="/faculty-hemangi-deka" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <!-- Assistant Professor & Coordinator -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Roshmi-Boruah-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Roshmi Boruah</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-roshmi-boruah" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <!-- Assistant Professors -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Abhijit-Gogoi-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Abhijit Gogoi</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-abhijit-gogoi" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Ayushi.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Ayushi Bhatnagar</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-ayushi-bhatnagar" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Neeta-Moni-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Neeta Moni Sharma</h3>
                                <p class="card-designation">Assistant Professor & Coordinator, Geology</p>
                                <a href="/faculty-neeta-moni-sharma" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Nishanta-Sahariah-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Nishanta Sahariah</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-nishanta-sahariah" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Pritom-Borah-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Pritom Borah</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-pritom-borah" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Mr-Rajdeep-Deb-RSEES.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Rajdeep Deb</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-rajdeep-deb" class="profile-link">View Profile</a>
                            </div>
                        </div>



                    </div>
                    <!-- regular faculty  -->

                    <!-- adjunct faculty  -->
                    <div class="row justify-content-center">

                        <!-- ========================= -->
                        <!-- Associate Professors -->
                        <!-- ========================= -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Syed Sajidul Islam</h3>
                                <p class="card-designation">Associate Professor</p>
                                <a href="/faculty-syed-sajidul-islam" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Indrajit.jpeg" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Indrajit Dutta</h3>
                                <p class="card-designation">Associate Professor & HOD, RSTTM</p>
                                <a href="/faculty-indrajit-dutta" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <!-- ========================= -->
                        <!-- Assistant Professor & Coordinator -->
                        <!-- ========================= -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Pallabi-Borah-RSLSC.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Pallabi Borah</h3>
                                <p class="card-designation">Assistant Professor & Coordinator, Forestry</p>
                                <a href="/faculty-dr-pallabi-borah" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                                <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts
                                </p>
                                <a href="/faculty-sumanta-dutta-chowdhury" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <!-- ========================= -->
                        <!-- Assistant Professor & Assistant Dean -->
                        <!-- ========================= -->

                        <!-- ========================= -->
                        <!-- Assistant Professors (A–Z) -->
                        <!-- ========================= -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/anjali2.jpg" alt="">
                                </div>
                                <h3 class="card-name">Ms. Anjali Kumar</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-anjali-kumar" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Arghadeep.jpeg" alt="">
                                </div>
                                <h3 class="card-name">Dr. Arghadeep Bose</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/facultyarghadeep-bose" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Binoyargha-Dam-RSAPS.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Binoyargha Dam</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-binoyargha-dam" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Dr-Bornali-Chetia-RSAPS.png"
                                        alt="">
                                </div>
                                <h3 class="card-name">Dr. Bornali Chetia</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-dr-bornali-chetia" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/all-faculty/rsaps/21.jpg" alt="">
                                </div>
                                <h3 class="card-name">Dr. Debojit Sahu</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-debojeet-sahu" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png" alt="">
                                </div>
                                <h3 class="card-name">Mr. Dipak Jain</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-Dipak-jain" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                        alt="">
                                </div>
                                <h3 class="card-name">Dr. Bisalakshi Sawarni</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-bisalakshi-sawarni" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                        alt="">
                                </div>
                                <h3 class="card-name">Dr. Parismita Phukan</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-dr-parismita-phukan" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/koushik-s.jpg" alt="">
                                </div>
                                <h3 class="card-name">Dr. Koushik Saikia</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-dr-koushik-saikia" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Dr-Mahuya-Deb-RSBAS.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Mahuya Deb</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-mahuya-deb" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                        alt="">
                                </div>
                                <h3 class="card-name">Dr. Marbarisha Kharkongor</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-marbarisha-Kharkongor" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Nitu-Borgohain-RSAPS.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Nitu Borgohain</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-dr-nitu-borgohain" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Dr-Nongthombam-Singh.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Nongthombam Geetmani Singh</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-nongthombam-geetmani-singh" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Palme-Borthakur.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Palme Borthakur</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-palme-borthakur" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Prabahan-Puzari.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Prabahan Puzari</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-prabahan-puzari" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png" alt="">
                                </div>
                                <h3 class="card-name">Mr. Prasant Mali</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-lifesciences" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/roshni.jpg" alt="">
                                </div>
                                <h3 class="card-name">Dr. Roshni Saikia</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-roshni-saikia" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/mobile-assets/updated-faculty-img/Rupak.jpeg" alt="">
                                </div>
                                <h3 class="card-name">Dr. Rupak Kumar Dalai</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-rupak-kumar-dalai" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Dr-Sachidulal-Biswas.png" alt="">
                                </div>
                                <h3 class="card-name">Dr. Sachidulal Biswas</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-sachidulal" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                        alt="">
                                </div>
                                <h3 class="card-name">Dr. Susmita Banerjee</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="/faculty-susmita-banerjee" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <!-- ========================= -->
                        <!-- Lab Instructor -->
                        <!-- ========================= -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="">
                                </div>
                                <h3 class="card-name">Pranjol Kumar Sharma</h3>
                                <p class="card-designation">Lab Instructor</p>
                            </div>
                        </div>

                    </div>

                    <!-- adjunct faculty  -->



                </div>
                <!-- regular faculty  -->



            </div>
        </div>

    </div>
@endsection

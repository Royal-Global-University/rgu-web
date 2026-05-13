@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Pharmacy (RSP)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Pharmacy (RSP)</span></h2>

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

                    <!-- Professor & Principal/HOD -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/dean-rsp.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Yeduru Krishna Reddy</h3>
                            <p class="card-designation">Professor & Dean</p>
                            {{-- <a href="https://www.rgu.ac/faculty-prithviraj-chakraborty" class="profile-link">View
                                Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Prithviraj-Chakraborty-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Prithviraj Chakraborty</h3>
                            <p class="card-designation">Professor & Principal/HOD</p>
                            <a href="https://www.rgu.ac/faculty-prithviraj-chakraborty" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <!-- Professor & Joint CoE -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/atanu-bhattacharjee-rsp.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Atanu Bhattacharjee</h3>
                            <p class="card-designation">Professor & Joint CoE</p>
                            <a href="/faculty-atanu-bhattacharjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Professors -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Bipul-Nath-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Bipul Nath</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-bipul-nath" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debarupa-Dutta-Chakraborty-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Debarupa Dutta Chakraborty</h3>
                            <p class="card-designation">Professor & Associate Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-debapurba" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pranabesh-Sikdar-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pranabesh Sikdar</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-pranabesh-sikdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Mukta-Agrawal.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Mukta Agrawal</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-mukta-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/rajat.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Rajat Subhra Dutta</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-rajat-subhra-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Associate Professor -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sudarshana Borah</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-sudarshana" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Anju-Das-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Anju Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anju-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ayesha-Aktar-Khanam-Choudhury.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Ayesha Aktar Khanam Choudhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ayesha-aktar-khanam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kamal-Deka-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kamal Deka</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-kamal-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Moidul-Islam-Judder-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Moidul Islam Judder</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/moidul-islam" class="profile-link">View Profile</a>
                        </div>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Nazrin-Ruhina-Rahman-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Syed Nazrin Ruhina Rahman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Aitilaris-Nongsiej-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Aitilaris Nongsiej</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-aitilaris" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/B-J-Dutta.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Bhaskar Jyoti Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bhaskar-jyoti-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bhaskar-Jyoti-Pathak-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Bhaskar Jyoti Pathak</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bhaskar-jyoti-pathak" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/assets/mobile-assets/Chayanika Talukdar.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Chayanika Talukdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-hadiuz-zaman" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Hadiuz-Zaman.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Hadiuz Zaman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-hadiuz-zaman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Himanta-Biswa-Saikia-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Himanta Biswa Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/himanta-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Joyjeet.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Joyjeet Dey</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/himanta-saikia" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/nayanika.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Nayanika Neog</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="faculty-nayanika-neog" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Neelakshi-Sharma-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Neelakshi Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neelakshi-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nilutpal-Hazarika-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Nilutpal Hazarika</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nilutpal-hazarika" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pallab-Kumar-Nath-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pallab Kumar Nath</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pallab-kumar-nath" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/PAYAL-DASGUPTA-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Payal Dasgupta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/payal-dasgupta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rajana.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Rajana james</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/payal-dasgupta" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rekib.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Rekib Uddin Ahmed</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/payal-dasgupta" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/home-banner/Ritika baidya.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms Ritika Baidya</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-ritika-baidya" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/rubina.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rubina Chowdhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-rubina-chowdhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Sabnam-Nargis-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Sabnam Nargis</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/sabnam-nargis" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/suman.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Suman Basak</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/sabnam-nargis" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Suparna.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Suparna Bhattacharjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/sabnam-nargis" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <!-- Assistant Professors -->

                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/faculty-profile/Rathindra.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Rathindra Bhuyan</h3>
                            <p class="card-designation">Senior Professor & Advisor</p>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Raj Paul</h3>
                            <p class="card-designation">Assistant Professor</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Marbarisha Kharkongar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors -->

                </div>
                <!-- adjunct faculty  -->

            </div>
        </div>

    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Nursing (RSN)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Nursing (RSN)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Kaberi-Saikia-RSN.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Kaberi Saikia</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Nursing</p>
                            <a href="https://www.rgu.ac/faculty-kaberi-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/faculty-profile/Rathindra.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rathindra Bhuyan</h3>
                            <p class="card-designation">Senior Professor & Advisor</p>
                            <!-- <a href="https://www.rgu.ac/ch-m-m-prasad-rao" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>


                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Punam-Debbarma-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Punam Debbarma</h3>
                            <p class="card-designation">Professor & HoD</p>
                            <a href="https://www.rgu.ac/faculty-punam-debbarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsn/aziza.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Aziza Begum</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-aziza-begum" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Doli-Deori-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Doli Deori</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-doli-deori" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsn/Meghali.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Meghali Deka</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-meghali-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/MS-Nabajani-Dutta-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Nabajani Dutta</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-nabajani-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rashmi-Rekha-Borah.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rashmi Rekha Borah</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-rashmi-rekha-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rumi-Talukdar-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rumi Talukdar</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-rumi-talukdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Yumkhaibam-Renubala-rsn.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Yumkhaibam Renubala Devi</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-yumkhaibam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bhanita-Barman.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Bhanita Barman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bhanita-barman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsn/Juri.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Juri Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-juri-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kangkana-Talukdar.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Kangkana Talukdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kangkana-talukdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sapna-Kumari-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Sapna Kumari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sapna-kumari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Linda-Mawi-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. T. Linda Mawi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-linda-mawi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ankita-Sarma.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Ankita Sarma</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-ankita-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsn/Bakor.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Bakor Kharbudon</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-bakor-kharbudon" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Manisha-Kalita.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Manisha Kalita</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-manisha-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsn/Mini-Medhi.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Mini Medhi</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-mini-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Momi-Dehingia.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Momi Dehingia</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-momi-dehingia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Noksanglila-Ao.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Noksanglila Ao</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-noksanglila" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pankhi-Lahkar.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Pankhi Lahkar</h3>
                            <p class="card-designation">Lecturer/Tutor</p>
                            <a href="https://www.rgu.ac/faculty-pankhi-lahkar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ilawanpyntngen-Kharsohnoh-RSN.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Ilawanpyntngen Kharsohnoh</h3>
                            <p class="card-designation">Tutor</p>
                            {{-- <a href="" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection

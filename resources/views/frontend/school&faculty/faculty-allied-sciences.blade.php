@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Behavioural & Allied Sciences
                    (RSBAS)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Behavioural & Allied Sciences (RSBAS)</span>
            </h2>

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
                                <img src="mobile-assets/updated-faculty-img/Prof-Surajit-Mukhopadhyay..png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) S.C. Mukhopadhyay</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Humanities & Social Sciences
                                (RSHSS) & i/c
                                Dean, Royal School of Behavioral & Allied Sciences (RSBAS)</p>
                            <a href="/faculty-surajit-c-mukhopadhyay" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Prince-CP-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Prince C P</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-prince-cp" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Shraddha-Basu-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shraddha Basu</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, RSBAS and Assistant Dean, Academic Affairs</p>
                            <a href="/faculty-shraddha-basu" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/dr-alnunpuii.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Lalnunpuii</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-lalnunpuii" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Mahuya-Deb-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Mahuya Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-mahuya-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/olivia.JPG"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Olivia Kakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/olivia-kakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/ravina.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Ravina Khumanlambam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-ravina-khumanlambam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr. Siddharth Shahi.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Siddharth Shahi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="/faculty-ravina-khumanlambam" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/tejoswita-gogoi-new.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Tejoswita Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-tejoswita-gogoi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/b_deeparani.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Bachaspatimayum Deeparani Devi</h3>
                            <p class="card-designation">Assistant Professor and Clinical Psychologist (Associate)</p>
                            <a href="/bachaspatimayum-deeparani-devi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Gokul.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Gokul Sisir</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="faculty-gokul-sisir" class="profile-link">View Profile</a>
                        </div>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Ms. Priyanka Bhattacharjee.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Priyanka Bhattacharjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="/faculty-jahnabi-mahanta" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->



            </div>
        </div>

    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Agriculture (RSAG)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Agriculture (RSAG)</span></h2>

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
            <div class="container text-center">

                <!-- regular faculty  -->
                <div class="row justify-content-center text-center">

                    <div class="col-lg-1 col-md-6 mb-4"></div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg"
                                    alt="Profile image of Prof. Nikhil Kumar Chrungoo">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) N.K.Chrungoo</h3>
                            <p class="card-designation">
                                Professor & Dean, Royal School of Life Sciences (RSLSC) & i/c Dean Royal School of
                                Agriculture
                            </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/supriyo.png"
                                    alt="Profile image of Anushree Das Baruah">
                            </div>
                            <h3 class="card-name">Dr. Supriyo Sen</h3>
                            <p class="card-designation">Associate Professor & HoD</p>
                            <a href="https://www.rgu.ac/faculty-supriyo-sen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mehjebin.PNG"
                                    alt="Profile image of Dr. Mehjebin Rahman">
                            </div>
                            <h3 class="card-name">Dr. Mehjebin Rahman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Mehjabin-Rahman" class="profile-link">View Profile</a>
                        </div>
                    </div> --}}



                    <div class="col-lg-1 col-md-6 mb-4"></div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs
                            <a href="/faculty-abesh-chakraborty" class="profile-link">View Profile</a>

                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Anushree Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-anushree-baruah" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/monalisha.jpeg"
                                    alt="Profile image of Dr. Upashna Chettri">
                            </div>
                            <h3 class="card-name">Dr Monalisa B. Deka</h3>
                            <p class="card-designation">Adjunct Faculty</p>
                            <a href="/faculty-monalisha-b-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>
                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection

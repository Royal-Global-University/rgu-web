@extends('frontend.master')
@section('title', 'Academic Council : The Assam Royal Global University')
@section('meta_description',
    'Experience academic excellence shaped by the guidance of our esteemed Academic Council at
    Royal Global University.')
@section('meta_keywords', 'Academic Council')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                Academic <br><span style="color: #FF9A1E; font-weight: 500;"> Council</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Academic <span style="color: #FF9A1E; font-weight: 500;"> Council</span></h2>

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
                font-family: 'Times New Roman', Times, serif;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
                font-family: 'Times New Roman', Times, serif;
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
                font-family: 'Times New Roman', Times, serif;
            }
        </style>

        <div class="section-f">
            <div class="container">

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <!-- Academic Council -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/17.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) A.K. Buragohain</h3>
                            <p class="card-designation">Vice-Chancellor (Interim), RGU</p>
                            <a class="profile-link">Chairman</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/2.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Diganta Munshi</h3>
                            <p class="card-designation">Registrar – Administration, The Assam Royal Global University
                                (Member
                                Secretary)</p>
                            <a class="profile-link">Member Secretary</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/3.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Anuradha Devi</h3>
                            <p class="card-designation">Dean, Royal School of Applied and Pure Sciences</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/4.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Kaberi Saikia</h3>
                            <p class="card-designation">Professor (Principal), Royal School of Nursing</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/5.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) N.K. Chrungoo</h3>
                            <p class="card-designation">Dean, Royal School of Life Sciences</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/6.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. George AP</h3>
                            <p class="card-designation">Dean, Royal School of Business and Royal School of Commerce</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Abhijit.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Abhijit Dutta</h3>
                            <p class="card-designation">Professor & Dean, RSMAS</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsc/3.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Aruna Dev Rroy</h3>
                            <p class="card-designation">Associate Professor & HOD, RSC</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debajit-Borah-RSBSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Debajit Borah</h3>
                            <p class="card-designation">Associate Professor & HOD, Biotechnology</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/14.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Aneesha Borah</h3>
                            <p class="card-designation">Assistant Professor and Coordinator, Geography and Geoinformatics,
                                Royal
                                School of Earth and Environmental Sciences</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Prithviraj-Chakraborty-RSP.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Prithvi Raj Chakraborty</h3>
                            <p class="card-designation">Professor & Principal/ HOD, Royal School of Pharmacy</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/deepjyoti.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Deepjyoti Choudhury</h3>
                            <p class="card-designation">Associate Professor & HOD, Department of CSE, RSET</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shiela-Bora-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Shiela Bora</h3>
                            <p class="card-designation">Professor & Advisor, Department of History, RSHSS</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/18.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Chandralekha Rawat</h3>
                            <p class="card-designation">Director, Delhi Public School, Guwahati</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/19.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Ghanshyam Das Dhanuka</h3>
                            <p class="card-designation">Managing Director of G R Dhanuka Group, Guwahati</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/20.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Sri Pradeep Purohit</h3>
                            <p class="card-designation">Chief Operating Officer, Star Cements Ltd.</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Sri Anupam Deka</h3>
                            <p class="card-designation">Director, Repose Foods Pvt. Ltd., Guwahati</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Shri S. K. Baruah</h3>
                            <p class="card-designation">
                                CEO, North East Gas Distribution Company Ltd.; Former Managing Director, Numaligarh Refinery
                                Ltd. &
                                Former Chairman, CII – NE Council, India
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/21.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Ankur Pansari</h3>
                            <p class="card-designation">
                                Executive Vice-President, GSF and Member of Governing Body, The Assam Royal Global
                                University
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/governing-body/Sikha.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Sikha M. Pansari</h3>
                            <p class="card-designation">
                                Member of Governing Body, The Assam Royal Global University
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/23.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Sri R. S. Joshi</h3>
                            <p class="card-designation">CMD, Buildworth Real Estate, Guwahati</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Angira Mimani</h3>
                            <p class="card-designation">
                                Associate Professor, RSB & Associate Dean, Student Affairs, RGU
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pradip-Jyoti-Mahanta-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) P. J. Mahanta</h3>
                            <p class="card-designation">Professor, RSL</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pronami Bhattacharyya</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Stuti Goswami</h3>
                            <p class="card-designation">Associate Professor, Royal School of Languages</p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sthiti-Porna-Dutta.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Stithi Parna Dutta</h3>
                            <p class="card-designation">
                                Assistant Professor, Biochemistry, Royal School of BioSciences
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arpee Saikia</h3>
                            <p class="card-designation">
                                Associate Professor, Royal School of Business & Coordinator, Behavioural Science
                            </p>
                            <a class="profile-link">Member</a>
                        </div>
                    </div>
                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection

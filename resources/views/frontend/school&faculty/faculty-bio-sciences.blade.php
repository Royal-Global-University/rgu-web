@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Bio-sciences (RSBSC)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Bio-sciences (RSBSC)</span></h2>

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
                                <img src="mobile-assets/all-faculty/rsbsc/1.png" alt="Profile image of Prof. Anuradha Devi">
                            </div>
                            <h3 class="card-name">Prof. Alak Kumar Buragohain</h3>
                            <p class="card-designation">Professor & Chairperson Academics</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsbsc/2.jpeg"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Anupam Chatterjee</h3>
                            <p class="card-designation">Dean & Professor, Royal School of Bio-Sciences</p>
                            <a href="https://www.rgu.ac/faculty-anupam-chatterjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Biotechnology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Biotechnology</h2>
                </div>
                <!-- Biotechnology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsbsc/1.png" alt="Profile image of Prof. Anuradha Devi">
                            </div>
                            <h3 class="card-name">Prof. Alak Kumar Buragohain</h3>
                            <p class="card-designation">Professor & Chairperson Academics</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsbsc/2.jpeg"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Anupam Chatterjee</h3>
                            <p class="card-designation">Dean & Professor, Royal School of Bio-Sciences</p>
                            <a href="https://www.rgu.ac/faculty-anupam-chatterjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsbsc/3.jpeg" alt="Profile image of Prof. Dilip Nath">
                            </div>
                            <h3 class="card-name">Dr. Ranjan Dutta Kalita</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debajit-Borah-RSBSC.png"
                                    alt="Profile image of Prof. Ladu Laishram">
                            </div>
                            <h3 class="card-name">Dr. Debajit Borah</h3>
                            <p class="card-designation">Associate Professor & HoD</p>
                            <a href="https://www.rgu.ac/faculty-debajit-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuj-Kumar-Borah-RSBSC.png"
                                    alt="Profile image of Prof. Rita Choudhury">
                            </div>
                            <h3 class="card-name">Dr. Anuj Kumar Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anuj-kumar-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bhaskarjyoti-Gogoi-RSBSC.png"
                                    alt="Profile image of Dr. Bimalendu Kalita">
                            </div>
                            <h3 class="card-name">Dr. Bhaskarjyoti Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bhaskarjyoti-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Chongtham-Sovachandra-Singh.png"
                                    alt="Profile image of Dr. Bapan Kalita">
                            </div>
                            <h3 class="card-name">Dr. Chongtham Sovachandra Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-chongtham-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mousumi-Das-Goswami-RSBSC.png"
                                    alt="Profile image of Dr. Bhagyashri Patgiri">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Das Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mousumi-das-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Rupesh-Kumar-RSBSC.png"
                                    alt="Profile image of Dr. Bikram Bir">
                            </div>
                            <h3 class="card-name">Dr. Rupesh Kumar</h3>
                            <p class="card-designation">Assistant Professor and Coordinator, MLT</p>
                            <a href="https://www.rgu.ac/faculty-rupesh-kumar" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Siddhartha-Narayan-Borah-RSBSC.png"
                                    alt="Profile image of Rupshika Patowary">
                            </div>
                            <h3 class="card-name">Dr. Siddhartha Narayan Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-siddhartha-narayan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Taranga-Jyoti-Baruah-RSBSC.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Taranga Jyoti Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-taranga-jyoti-baruah" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Pritha-Roychowdhury.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Pritha Roychowdhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pompi-Basumatary-RSl.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Pompi Basumatary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Mr-Benex-K-Babu.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Mr. Benex K Babu</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/1.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Ms. Priyanka Kumari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Neeta-Moni-RSEES.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Neeta Moni Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neeta-moni-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/Susmitasinha.jpeg"
                                    alt="Profile image of Sushmita Sinha">
                            </div>
                            <h3 class="card-name">Ms. Susmita Sinha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Mr.%20Dibyajyoti%20Deka.jpeg"
                                    alt="Profile image of Dibyajyoti Deka">
                            </div>
                            <h3 class="card-name">Mr. Dibyajyoti Deka</h3>
                            <p class="card-designation"></p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="mobile-assets/updated-faculty-img/upasana-chettry-botany.jpeg"
                                    alt="Profile image of Upasana Chetry">
                            </div>
                            <h3 class="card-name">Dr. Upasna Chettry</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Marbarisha%20M%20Kharkongor-RSAPS.png"
                                    alt="Profile image of Marbarisha M Kharkongon">
                            </div>
                            <h3 class="card-name">Dr. Marbarisha Kharkongon</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-marbarisha-Kharkongor" class="profile-link">View Profile</a>
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

                <!-- Microbiology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Microbiology</h2>
                </div>
                <!-- Microbiology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amlan-Das-RSBSC.png"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Amlan Das</h3>
                            <p class="card-designation">Professor & Co-cordinator, IKS</p>
                            <a href="https://www.rgu.ac/faculty-amlan-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Saranga-Ranjan%20Patgiri-RSBSC.png"
                                    alt="Profile image of Prof. Rama Ranjan Bhattacharjee">
                            </div>
                            <h3 class="card-name">Prof. Saranga Ranjan Patgiri</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-saranga-ranjan-patgiri" class="profile-link">View
                                Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dipayan-Das.png"
                                    alt="Profile image of Birson Ingti">
                            </div>
                            <h3 class="card-name">Dr. Dipayan Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dipayan-das" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/all-faculty/rsbsc/17.jpeg" alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Niraj Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-niraj-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/NiteshPriyadarshi.jpeg"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Nitesh Priyadarshi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nitesh-priyadarshi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pankaj-Losan-Sharma.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Pankaj L Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pankaj-losan-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Taranga-Jyoti-Baruah-RSBSC.png"
                                    alt="Profile image of Jiwasmika Baishya">
                            </div>
                            <h3 class="card-name">Dr. Taranga Jyoti Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-taranga-jyoti-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/1.png"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Smita Das</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Optometry</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuj-Kumar-Borah-RSBSC.png"
                                    alt="Profile image of Prof. Rita Choudhury">
                            </div>
                            <h3 class="card-name">Dr. Anuj Kumar Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anuj-kumar-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Adishree-Borgohain.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Adishree Borgohain</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-adishree-borgohain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Denim-Deka.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Denim Deka</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-denim-deka" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prabahan-Puzari.png"
                                    alt="Profile image of Prabahan Pujari">
                            </div>
                            <h3 class="card-name">Dr. Prabahan Pujari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-prabahan-puzari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Deepanjali-Reang-RSHSS.png"
                                    alt="Profile image of Deepanjali Riyang">
                            </div>
                            <h3 class="card-name">Deepanjali Riyang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png"
                                    alt="Profile image of Dr. Jon Jyoti Kalita">
                            </div>
                            <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/cse/7.jpeg"
                                    alt="Profile image of Akangkhi Borah">
                            </div>
                            <h3 class="card-name">Ms. Akangkhi Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-akangkhi-borah" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/all-faculty/rsa/3.jpeg" alt="Profile image of Ar. Bhola Saha">
                            </div>
                            <h3 class="card-name">Ar. Bhola Saha</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, RSA</p>
                            <a href="https://www.rgu.ac/faculty-Bhola-Saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Barnali-Chakrabarty-RSA.png"
                                    alt="Profile image of Ar. Barnali Chakrabarty">
                            </div>
                            <h3 class="card-name">Ar. Barnali Chakrabarty</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-barnali-chakraborty" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                                    alt="Profile image of Dr. Syeda Anjum Afreen">
                            </div>
                            <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Meghna-bordoloi.png"
                                    alt="Profile image of Megna Bordoloi">
                            </div>
                            <h3 class="card-name">Ms. Meghna Bordoloi</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image of Prasant Mali">
                            </div>
                            <h3 class="card-name">Prasant Mali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image of Mr. Debapratim Bharali">
                            </div>
                            <h3 class="card-name">Mr. Debapratim Bharali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image of Ms. Richika Kedia">
                            </div>
                            <h3 class="card-name">Ms. Richika Kedia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-richika-kedia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image of">
                            </div>
                            <h3 class="card-name">Ms. Anjali Kumar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anjali-kumar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Romeet.jpg"
                                    alt="Profile image of Romeet Saha">
                            </div>
                            <h3 class="card-name">Romeet Saha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-romeet-saha" class="profile-link">View Profile</a>
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
                                <img src="https://media.rgu.ac/iks/Ms.MonalishaMedhi.jpg"
                                    alt="Profile image of Siddhant Medhi">
                            </div>
                            <h3 class="card-name">Ms. Monalisha Medhi</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-monalisha-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image of Jitumoni Das">
                            </div>
                            <h3 class="card-name">Jitumoni Das</h3>
                            <!-- <p class="card-designation">Assistant Professor</p> -->
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

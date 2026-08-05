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
                Royal School of<span style="color: #FF9A1E; font-weight: 500;"> Agriculture and Forestry (RSAF)</span></h2>

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
                                <img src="/mobile-assets/updated-faculty-img/Binay Singh.jpeg"
                                    alt="Profile image of Prof. Nikhil Kumar Chrungoo">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Binay Singh</h3>
                            <p class="card-designation">
                                Professor & HoD, Department of Forestry
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
                            <p class="card-designation">Associate Professor & HoD, Department of Agriculture</p>
                            <a href="https://www.rgu.ac/faculty-supriyo-sen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/bharati-lap.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Bharati Lap</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bharati-lap" class="profile-link">View Profile</a>

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
                </div>
                <!-- regular faculty  -->

            </div>

            <div class="container">

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <!-- Advisor / Visiting Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/all-faculty/rslsc/arvind-madhav.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Arvind Madhab Singh</h3>
                            <p class="card-designation">Advisor & Visiting Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Demsai-Reang-RSLSC.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Demsai Reang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-demsai-reang" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Anthony.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. N Anthony Baite</h3>
                            <p class="card-designation">Assistant Professor</p>
                        </div>
                    </div>

                    <!-- Assistant Professor & Coordinator -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Pallabi-Borah-RSLSC.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pallabi Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-dr-pallabi-borah" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors (A–Z) -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Romeet.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Romeet Saha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-romeet-saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Mr-Pushkal-Bagchie.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pushkal Baghchie</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pushkal-baghchie" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">
                    <!-- Associate Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Indrajit-Dutta.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Indrajit Dutta</h3>
                            <p class="card-designation">Associate Professor & HOD, RSTTM</p>
                            <a href="/faculty-indrajit-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors (A–Z) -->

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
                                <img src="/mobile-assets/all-faculty/rshss/Amlandas.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Amlan Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-amlan-das-rshss" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Ankita-Agarwal-RSCOM.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Ankita Agarwal</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-ankita-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Arghadeep.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arghadeep Bose</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/facultyarghadeep-bose" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Arvind-Kumar.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arvind Kumar Dwivedi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-arvind-dwivedi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Baba-Chandra-Singha.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Baba Chandra Singha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-babachandra-singha" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bisalakshi Sawarni
                            </h3>
                            <p class="card-designation">Assistant Professor

                            </p>
                            <a href="/faculty-bisalakshi-sawarni" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/chandni-khaund.png" alt="Profile image">
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
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dipanjali-Das.png"
                                    alt="Profile image of Ms. Dipanjali Das">
                            </div>
                            <h3 class="card-name">Ms. Dipanjali Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-dipanjali-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Florence-Handique-Rabha.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Florence Handique Rabha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-florance-rabha" class="profile-link">View Profile</a>
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
                                <img src="mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image of Jitumoni Das">
                            </div>
                            <h3 class="card-name">Jitumoni Das</h3>
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
                            <a href="/faculty-mahuya-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Mousumi-Das-Goswami-RSBSC.png"
                                    alt="Profile image of Mousomi Das Goswami">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Das Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-mousumi-das-goswami" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Ms-Nikita-Biswakarma-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Nikita Biswakarma</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <a href="/faculty-nikita-biswakarma" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image"><img src=" /mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image "></div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pankaj-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Prabahan-Puzari.png"
                                    alt="Profile image of Prabahan Pujari">
                            </div>
                            <h3 class="card-name">Dr. Prabahan Puzari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-prabahan-puzari" class="profile-link">View Profile</a>
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
                                <img src="/mobile-assets/all-faculty/rsmas/Phurailatpam.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Phurailatpam Jeny Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-phurailatpam-jeny-sharma" class="profile-link">View
                                Profile</a>
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
                            <a href="/faculty-rupshikha" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/53.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sandipta Dey</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-sandipta-ghosh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Siddhartha-Narayan-Borah-RSBSC.png"
                                    alt="Profile image of Dr. Siddhartha Narayan Borah">
                            </div>
                            <h3 class="card-name">Dr. Siddhartha Narayan Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-siddhartha-narayan" class="profile-link">View
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
                            <a href="/faculty-tripti-das" class="profile-link">View Profile</a>
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
                <!-- adjunct faculty  -->

                <!-- Visiting Faculty  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Visiting Faculty</h2>
                </div>
                <!-- Visiting Faculty  -->

                <!-- Visting faculty  -->
                <div class="row justify-content-center">

                    <!-- Advisor / Visiting Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Rajkumari.png.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- Visting faculty  -->


            </div>
        </div>

    </div>
@endsection

@extends('frontend.master')

@push('styles')
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
            font-size: 1.6rem;
            font-weight: 600;
            color: #333;
            line-height: 1.2;
            color: #24477f;
        }

        /* Designation/Paragraph Styling */
        .card-designation {
            margin: 0;
            font-size: 1.1rem;
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
@endpush
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px"></div>
        <section style="background-image: url(mobile-assets/hall-of-fame/bg-mob.png); background-size: cover;">

            <div>
                <img style="width: 100%;" src="mobile-assets/hall-of-fame/banner-mob.svg" alt="">
            </div>

            <div style="padding: 20px 40px;">
                <img style="width: 60%;" src="mobile-assets/hall-of-fame/texts/first-convo-text.svg" alt="">
            </div>

            <!-- first convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8304.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Nagen Saikia
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Former Distinguished Professor
                                    of Dibrugarh University,
                                    Former President of Assam Sahitya Sabha,
                                    Eminent Literator and a Scholar
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8305.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Chintamani Nagesa Ramachandra Rao
                                </h3>
                                <p class="card-designation text-center">
                                    FNA, FASc, FRS, FTWAS, HonFRSC, MAE, HonFInstP
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    A Bharat Ratna recipient, Linus Pauling
                                    Research Professor and Honorary President
                                    of Jawaharlal Nehru Centre for Advanced
                                    Scientific Research, Bengaluru.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8306.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Shri Sajjan Bhajanka
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Eminent Industrialist, Social Worker and
                                    Educator, Founder of Century Plyboards
                                    (India) Ltd.
                                </p>
                            </div>
                        </div>


                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- first convo  -->

            <div style="padding: 0px 40px;">
                <img style="width: 60%;" src="mobile-assets/hall-of-fame/texts/second-convo-text.svg" alt="">
            </div>

            <!-- second convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-1.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Ajay Kumar Sood

                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Principal Scientific Advisor to the
                                    Government of India.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-2.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Ms. Patricia Mukhim
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Journalist and Editor,
                                    The Shillong Times and a Social Activist.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-3.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Ashok Kumar Mittal
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Chancellor, Lovely Professinal University
                                    and Member of Rajya Sabha.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- second convo  -->

            <div style="padding: 0px 40px;">
                <img style="width: 60%;" src="mobile-assets/hall-of-fame/texts/third-convo-text.svg" alt="">
            </div>

            <!-- Third convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-1.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Mr. Justice Ranjan Gogoi
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Laws (LL.D.) - Honoris Causa.
                                    Member of Rajya Sabha and
                                    Former Chief Justice of India.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-2.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Raghunath Anant Mashelkar
                                </h3>
                                <p class="card-designation text-center">
                                    FTWAS, FNA, FASc, FRS, FREng, FRSC
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Former Director General, CSIR and
                                    Padma Vibhushan recipient.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-3.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Krisnaswamy Kasturirangan
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Former Chairman, ISRO,
                                    Chairperson, Drafting Committee, NEP 2020
                                    and Padma Vibhushan recipient.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-4.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Shri Harshvardhan Neotia
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa,
                                    Chairman , Ambuja Neotia Group and
                                    Padma Shri recipient.
                                </p>
                            </div>
                        </div>


                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- Third convo  -->

        </section>

    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/hall-of-fame/bg-web.png); background-size: cover;">

            <!-- <div>
                    <img style="width: 100%;" src="mobile-assets/hall-of-fame/hall-of-fame.png" alt="">
                </div> -->

            <div>
                <img style="width: 100%;" src="mobile-assets/hall-of-fame/banner2.svg" alt="">
            </div>

            <div style="padding: 20px 40px;">
                <img style="width: 25%;" src="mobile-assets/hall-of-fame/texts/first-convo-text.svg" alt="">
            </div>


            <!-- first convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8304.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Nagen Saikia
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Former Distinguished Professor
                                    of Dibrugarh University,
                                    Former President of Assam Sahitya Sabha,
                                    Eminent Literator and a Scholar
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8305.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Chintamani Nagesa Ramachandra Rao
                                </h3>
                                <p class="card-designation text-center">
                                    FNA, FASc, FRS, FTWAS, HonFRSC, MAE, HonFInstP
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    A Bharat Ratna recipient, Linus Pauling
                                    Research Professor and Honorary President
                                    of Jawaharlal Nehru Centre for Advanced
                                    Scientific Research, Bengaluru.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/Frame 8306.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Shri Sajjan Bhajanka
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Eminent Industrialist, Social Worker and
                                    Educator, Founder of Century Plyboards
                                    (India) Ltd.
                                </p>
                            </div>
                        </div>


                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- first convo  -->

            <div style="padding: 20px 40px;">
                <img style="width: 25%;" src="mobile-assets/hall-of-fame/texts/second-convo-text.svg" alt="">
            </div>

            <!-- second convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-1.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Professor Ajay Kumar Sood

                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Principal Scientific Advisor to the
                                    Government of India.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-2.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Ms. Patricia Mukhim
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Journalist and Editor,
                                    The Shillong Times and a Social Activist.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/scnd-3.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Ashok Kumar Mittal
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa
                                    Chancellor, Lovely Professinal University
                                    and Member of Rajya Sabha.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- second convo  -->

            <div style="padding: 20px 40px;">
                <img style="width: 25%;" src="mobile-assets/hall-of-fame/texts/third-convo-text.svg" alt="">
            </div>

            <!-- Third convo  -->
            <div class="section-f">
                <div class="container-fluid" style="padding: 0px 40px;">

                    <!-- first convo  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-1.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Mr. Justice Ranjan Gogoi
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Laws (LL.D.) - Honoris Causa.
                                    Member of Rajya Sabha and
                                    Former Chief Justice of India.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-2.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Raghunath Anant Mashelkar
                                </h3>
                                <p class="card-designation text-center">
                                    FTWAS, FNA, FASc, FRS, FREng, FRSC
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Former Director General, CSIR and
                                    Padma Vibhushan recipient.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-3.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Dr. Krisnaswamy Kasturirangan
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Science (D.Sc.) - Honoris Causa.
                                    Former Chairman, ISRO,
                                    Chairperson, Drafting Committee, NEP 2020
                                    and Padma Vibhushan recipient.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/hall-of-fame/profiles/third-4.png" alt="Profile image ">
                                </div>
                                <h3 class="card-name text-center">
                                    Shri Harshvardhan Neotia
                                </h3>
                                <p class="card-designation text-center">
                                    Doctor of Letters (D.Litt.) - Honoris Causa,
                                    Chairman , Ambuja Neotia Group and
                                    Padma Shri recipient.
                                </p>
                            </div>
                        </div>


                    </div>
                    <!-- first convo  -->

                </div>
            </div>
            <!-- Third convo  -->

        </section>

    </div>
@endsection

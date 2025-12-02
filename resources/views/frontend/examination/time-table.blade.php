@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 80px; position: relative;">
                <img src="mobile-assets/time-table-department/banners/banner-mob.svg" alt="">
            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/time-table-department/banners/banner-web.svg" alt="">

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


                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">UG 2nd_UG 4th_UG 6th_UG 8th
                                (Repeat) – RSP</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time Table_(Repeat)_Even Semester) RSP.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Admin Services</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) ADMIN SERVICES .xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Agriculture</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Agriculture.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                AVE</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) AVE .xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Bcom F&A</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Bcom F&A.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                BHM</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) BHM.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Biochemistry</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Biochemistry.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Biotechnology</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Biotechnology.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Botany</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Botany.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                BPT rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) BPT rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Chemistry</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Chemistry.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                Civil Engineering rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) CIVIL ENGINEERING rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i> Download
                                Calendar</a>
                        </div>
                    </div>

                    <!-- Row 2 -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd Semesters)
                                CSE rev2</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) CSE rev2.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Culinary Arts</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Culinary Arts.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Economics</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Economics.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) English</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) English.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Fashion Design</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Fashion Design.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Food Tech</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Food Tech.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Forensic Science</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Forensic Science.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Forestry</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Forestry.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Geinformatics</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Geinformatics.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Geography</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Geography.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Geology</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) GEOLOGY.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) History rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) History rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <!-- Row 3 -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Interior Design</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Interior Design..xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) JMC</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) JMC.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Law rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Law rev1..pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Library Science</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Library Science.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Mathematics</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Mathematics.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) ME</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) B.Tech ME.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Microbiology</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Microbiology.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) MLT</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) MLT.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Nutrition & Dietetics</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) NUTRITION & DIETETICS.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Optometry</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) OPTOMETRY.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) OTT rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) OTT rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Physics</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) PHYSICS rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <!-- Row 4 -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Political Science rev2</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) POL SC rev2.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Product Design</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Product design.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Public Administration</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) PUB AD.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) BRIT rev1</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RIT rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSA</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSA .xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSB</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSB.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSBAS</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSBAS rev1.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSC</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSC.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSFA</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSFA.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSIT</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSIT.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) RSP</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) RSP.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Social Work</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Social Work.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Travel & Tourism</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) TTM..xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <h3 class="card-name mobile-headd3" style="font-size: 20px;">Time-Table 2025-26 (Odd
                                Semesters) Zoology</h3>
                            <a download
                                href="mobile-assets/time-table-department/Time-Table 2025-26 (Odd Semesters) Zoology.xlsx.pdf"
                                class="profile-link"><i class="fa-solid fa-file-pdf pdf-icon text-danger mb-3"></i>
                                Download Calendar</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
@endsection

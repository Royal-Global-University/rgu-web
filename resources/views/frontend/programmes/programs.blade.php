@extends('frontend.master')
@section('title', 'Eligibility & selection criteria : The Assam Royal Global University')
@section('meta_description',
    'Discover the eligibility requirements and selection criteria for various programs at Royal
    Global University, including academic qualifications, entrance exams, and interview processes for admission.')
@section('meta_keywords', 'Eligibility & selection criteria')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section>
            <img style="width: 100%;"
                src="https://www.rgu.ac/mobile-assets/admission-fee-and-programmee/mob-admission-fee.png" alt="">
        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section>
            <img style="width: 100%;"
                src="https://www.rgu.ac/mobile-assets/admission-fee-and-programmee/web-admission-fee.png" alt="">
        </section>
    </div>

    <style>
        /* ================================
               UNIQUE NAMESPACE STYLES
               Prefix: rgu-program-
            ================================= */

        .body-part {
            padding: 20px 0px;
            background: #f7f5f0;
            font-family: "Times New Roman", serif;
        }

        .rgu-program-search {
            margin: 30px 0;
        }

        .rgu-program-accordion-btn {
            background: #0f2544;
            color: #fff;
            font-weight: 600;
        }

        .rgu-program-accordion-btn:not(.collapsed) {
            background: #0f2544;
            color: #fff;
            box-shadow: none;
        }

        .rgu-program-accordion-item {
            border: none;
            margin-bottom: 12px;
        }

        /* ================================
               CARD DESIGN (POP EFFECT)
            ================================= */

        .rgu-program-card {
            background: linear-gradient(135deg, #ffffff, #bdd1ff);
            border-radius: 12px;
            padding: 20px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #d9e3ff;
            position: relative;
            overflow: hidden;
            transition: all 0.35s ease;
        }

        .rgu-program-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: #24477f;
        }

        .rgu-program-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 15px 35px rgba(36, 71, 127, 0.25);
        }

        .rgu-program-card-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f2544;
            line-height: 1.35;
        }

        .rgu-program-card-duration {
            font-size: 16px;
            font-weight: 600;
            color: #24477f;
        }

        .rgu-program-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .rgu-program-link:hover {
            color: inherit;
        }
    </style>

    <div class="body-part">

        <div class="container">

            <!-- Search Section -->
            <div class="row rgu-program-search">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Schools :</label>
                    <select class="form-select rgu-program-school-select">
                        <option>Select School to Navigate...</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Courses :</label>
                    <input type="text" class="form-control rgu-program-course-search"
                        placeholder="Type to search courses...">
                </div>
            </div>

            <!-- Accordion -->
            <div class="accordion" id="rguProgramAccordion">

                <!-- Integrated Civil Service Programme -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Integrated Civil Service Programme">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accIcs">
                            Integrated Civil Service Programme
                        </button>
                    </h2>
                    <div id="accIcs" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">

                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Sociology Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Economics Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Public Administration Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Political Science Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. History Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Physics Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Mathematics Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Chemistry Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Geography Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Geography Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Geology Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. Psychology Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Botany Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Zoology Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. English Integrated with Civil Service Programme
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <!-- RSAPS -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Applied & Pure Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsaps">
                            Royal School of Applied & Pure Sciences (RSAPS)
                        </button>
                    </h2>
                    <div id="accRsaps" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Physics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. – Physics</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Chemistry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. – Chemistry</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Mathematics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. – Mathematics</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-physics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) – Physics</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-chemistry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) – Chemistry</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-mathematics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) – Mathematics</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- RSA -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Architecture">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsa">
                            Royal School of Architecture (RSA)
                        </button>
                    </h2>
                    <div id="accRsa" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-barch" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Arch</div>
                                            <div class="rgu-program-card-duration">Duration: 5 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSBAS -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Behavioral & Allied Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsbas">
                            Royal School of Behavioral & Allied Sciences (RSBAS)
                        </button>
                    </h2>
                    <div id="accRsbas" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Psychology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. Psychology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Clinical-Psychology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Masters in Clinical Psychology (M.Clin.Psy)</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BSc-clinical-psychology-%28Hons%29"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Bachelor in Clinical Psychology (B.Clin.Psy.)</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Psychology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A.(H) Psychology</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Applied-Psychology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A.(H) Applied Psychology</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-isitep" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Integrated Special and Inclusive Teacher
                                                Education Programme (ISITEP)</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSBSC -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Bio-Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsbsc">
                            Royal School of Bio-Sciences (RSBSC)
                        </button>
                    </h2>
                    <div id="accRsbsc" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Bio-Technology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Biotechnology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Msc-Microbiology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Microbiology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-msc-food-science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Food Science and Technology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-bsc-food-science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. (H) Food Science and Technology</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-bio-technology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. Biotechnology</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-microbiology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. Microbiology</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSB -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Business">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsb">
                            Royal School of Business (RSB)
                        </button>
                    </h2>
                    <div id="accRsb" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MBA Finance</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MBA Marketing</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MBA – HRM</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MBA – Operations Management</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                MBA – Entrepreneurship & Small Business Management
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MBA-Finance" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MBA – Business Analytics</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BBA" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BBA</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yr as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/program-executive-mba" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Executive MBA</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Yr as per NEP</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSC -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Commerce">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsc">
                            Royal School of Commerce (RSC)
                        </button>
                    </h2>
                    <div id="accRsc" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MCom" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Com</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-bcom-morning-shift" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Com – Morning Shift</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-bcom" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Com – Day Shift</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-bcom-finance-with-ica" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Com – Finance with ICA</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSCOM -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Communication & Media">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRscom">
                            Royal School of Communication & Media (RSCOM)
                        </button>
                    </h2>
                    <div id="accRscom" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-J&MC" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. J&amp;MC</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Animation-&-Visual-Effects"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Sc. Animation and Visual Effects
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-J&MC" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A. J&amp;MC</div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-animation-visual-effects"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Animation and Visual Effects
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3/4 Yrs as per NEP</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSD -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Design">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsd">
                            Royal School of Design (RSD)
                        </button>
                    </h2>
                    <div id="accRsd" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BachelorInterior-DesignBID"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Interior Design (BID)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Interior-Design-BID-Lateral-Entry"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Interior Design (BID) Lateral Entry
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Design-Communication-Design"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Design (Communication Design) (B.Des. CD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Design-Graphic-Design"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Design (Graphic Design) (B.Des. GD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Design-Product-Design"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Design (Product Design) (B.Des. PD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-des-fd-fashion-design"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Design (Fashion Design) (B.Des. FD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Des. – Fashion Design (FD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs#" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Des. – Communication Design (CD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs#" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Des. – Graphic Design (GD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs#" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Des. – Product Design (PD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSET -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Engineering & Technology">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRset">
                            Royal School of Engineering & Technology (RSET)
                        </button>
                    </h2>
                    <div id="accRset" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MTech-CSE-in-Artifical-Intelligence"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Tech. CSE – Artificial Intelligence
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MTech-CSE-in-Internet-of-Things"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Tech. CSE – IOT</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MTech-CE-in-Water-Resources"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Tech. CE in Water Resources Development &amp; Management
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MTech-CAD" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Tech CE – CAD</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Tech CE – CDC</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MTech-CE-in-Structural-Engineering"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Tech. CE in Structural Engineering
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-tech-cse" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Tech. (CSE)</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-tech-ce" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Tech. (CE)</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-tech-me" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Tech. (ME)</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/program-btech-in-computer-science-and-business-system"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Tech. in Computer Science Engineering and
                                                Business Systems (TCS)</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-tech-artifical-intelligence-ai"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Tech. – Artificial Intelligence (AI)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-tech-lateral-entry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Tech – (Lateral Entry) – CE/CSE/ME/AI/Data Science
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BTechWorking-Professional-CE-CSE"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Tech for Working Professional (CE, CSE, ME)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSEES -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Environmental & Earth Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsees">
                            Royal School of Environmental & Earth Sciences (RSEES)
                        </button>
                    </h2>
                    <div id="accRsees" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/programs-MSc-geography" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Geography</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="programs-MA-Geography" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. Geography</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="programs-MSc-in-Geoinformatics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. in Geoinformatics</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="programs-MSc-Geology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Geology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="programs-BSc-Geography" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H)/B.A.(H) Geography</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/programs-b-sc-geology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) Geology</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSFT -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Fashion Design & Technology">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsft">
                            Royal School of Fashion Design & Technology (RSFT)
                        </button>
                    </h2>
                    <div id="accRsft" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-des-fd-fashion-design"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Design (Fashion Design) (B.Des. FD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-mdes-fashion-design" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master of Design (Fashion Design) (M.Des. FD)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSFA -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Fine Arts">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsfa">
                            Royal School of Fine Arts (RSFA)
                        </button>
                    </h2>
                    <div id="accRsfa" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Master-of-Fine-Arts-MFA"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master of Fine Arts (MFA)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Fine-Arts-BFA"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Fine Arts (BFA)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSAG -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Agriculture">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsag">
                            Royal School of Agriculture (RSAG)
                        </button>
                    </h2>
                    <div id="accRsag" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-bsc-agri" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. Agriculture</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-msc-agri" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Agriculture</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSHM -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Hotel Management">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRshm">
                            Royal School of Hotel Management (RSHM)
                        </button>
                    </h2>
                    <div id="accRshm" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-HotelManagement" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc.(H)/B.A.(H) – Hotel Management
                                            </div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-in-Culinary-Arts" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A.(H) – Culinary Arts</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Hotel-Management" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Sc. Hotel Management / MIHM
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/programs-Bachelor-of-Hotel-Management-BHM" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Hotel Management (BHM)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSHSS -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Humanities & Social Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRshss">
                            Royal School of Humanities & Social Sciences (RSHSS)
                        </button>
                    </h2>
                    <div id="accRshss" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-ma-iks" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.A. – Indian Knowledge System (IKS)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Economics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. – Economics</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Sociology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. – Sociology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSW" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MSW</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Public-Administration"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.A. – Public Administration
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-Political-Science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.A. – Political Science
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-History" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.A. – History</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Economics" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A. – Economics</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Sociology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A. – Sociology</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BSW" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BSW</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Public-Administration"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. – Public Administration
                                            </div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-Political-Science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.A. – Political Science
                                            </div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-History" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.A. – History</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSIT -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Information & Technology">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsit">
                            Royal School of Information & Technology (RSIT)
                        </button>
                    </h2>
                    <div id="accRsit" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MCA" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MCA</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-IT" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. (IT)</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BCA" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BCA</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BSc-IT" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. IT</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSL -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Language">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsl">
                            Royal School of Language (RSL)
                        </button>
                    </h2>
                    <div id="accRsl" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MA-English" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MA - English</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-ma-assamese" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">MA - Assamese</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BA-English" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BA(H) - English</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-ba-assamese" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BA(H) - Assmese</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-certi-sanskrit" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Certificate Course in Sanskrit</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 1 year
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSLIS -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Library & Information Science">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRslis">
                            Royal School of Library & Information Science (RSLIS)
                        </button>
                    </h2>
                    <div id="accRslis" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Master-of-Library&Information-Sciences"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Master of Library & Information Science
                                                (ML.I.Sc.)</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSLA -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Law & Administration">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsla">
                            Royal School of Law & Administration (RSLA)
                        </button>
                    </h2>
                    <div id="accRsla" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-LLM-Morning-Shift" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">LLM Morning Shift</div>
                                            <div class="rgu-program-card-duration">Duration: 1 Year</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-LLM-Day-Shift" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">LLM Day Shift</div>
                                            <div class="rgu-program-card-duration">Duration: 1 Year</div>
                                        </div>
                                    </a>
                                </div>

                                <!-- INTEGRATED / UG PROGRAMMES -->

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/program-ba-bba-llb-hons" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">BA/BBA – LLB (Hons.)</div>
                                            <div class="rgu-program-card-duration">Duration: 5 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/program-ba-llb-hons" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">LLB – (Hons.)</div>
                                            <div class="rgu-program-card-duration">Duration: 3 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSLSC -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Life Sciences">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsls">
                            Royal School of Life Sciences (RSLSC)
                        </button>
                    </h2>
                    <div id="accRsls" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Botany" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Botany</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Zoology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. Zoology</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Forestry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M.Sc. – Forestry</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-ForensicScience" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Sc. Forensic Science
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-botany" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) Botany</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-zoology" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) Zoology</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-forensicScience" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. Forensic Science
                                            </div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-forestry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc.(H) – Forestry</div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 3/4 Yrs as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSMAS -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Medical & Allied Science">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsmas">
                            Royal School of Medical & Allied Science (RSMAS)
                        </button>
                    </h2>

                    <div id="accRsmas" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MasterofPhysiotherapyMPT"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">Master of Physiotherapy (MPT)</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>



                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-MSc-Nutrition" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Sc. – Nutrition and Dietetics
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-M-Optometry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">M. Optometry</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Bachelor-of-Physiotherapy-BPT"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Physiotherapy (BPT)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 5 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-nutrition&dietetics"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc. – Nutrition and Dietetics
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-optometry" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B. Optometry
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 5 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-b-radio-imaging" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor – Medical Radiology and Imaging Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-b-anaesthesia-ott" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor – Anaesthesia and Operation Theatre Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-b-medical-lab-sc" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor – Medical Laboratory Sciences (BMLS)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-b-dialysis-therapy" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor – Dialysis Therapy Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-b-emergency-care" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor of Emergency Medical Technologist
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-bsc-food-science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Bachelor – Food Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-m-radio-imaging" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master – Medical Radiology and Imaging Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-m-anaesthesia-ott" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master – Anaesthesia & Operation Theatre Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-m-dialysis-therapy" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master – Dialysis Therapy Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-m-emergency-care" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Masters of Advanced Care Paramedic
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-msc-food-science" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master – Food Technology
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programme-m-medical-lab-sc" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master – Medical Laboratory Sciences (MMLS)
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSN -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Nursing">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsn">
                            Royal School of Nursing (RSN)
                        </button>
                    </h2>
                    <div id="accRsn" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-BSc-Nursing" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Sc. Nursing</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-General-Nursing-Midwifery"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                General Nursing &amp; Midwifery
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 3.5 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSP -->
                <div class="accordion-item rgu-program-accordion-item" data-school="Royal School of Pharmacy">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsp">
                            Royal School of Pharmacy (RSP)
                        </button>
                    </h2>
                    <div id="accRsp" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-pharm" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">B.Pharm.</div>
                                            <div class="rgu-program-card-duration">Duration: 4 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-D-Pharm" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">D.Pharm.</div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-M-Pharm-Pharmaceutical"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Pharm. – Pharmaceutical Chemistry
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-M-Pharm-Pharmaceutics"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Pharm. – Pharmaceutics
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-M-Pharm-Pharmacognosy"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                M.Pharm. – Pharmacognosy
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- RSTTM -->
                <div class="accordion-item rgu-program-accordion-item"
                    data-school="Royal School of Travel & Tourism Management">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed rgu-program-accordion-btn" data-bs-toggle="collapse"
                            data-bs-target="#accRsttm">
                            Royal School of Travel & Tourism Management (RSTTM)
                        </button>
                    </h2>
                    <div id="accRsttm" class="accordion-collapse collapse" data-bs-parent="#rguProgramAccordion">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-b-sc-ba-travel" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                B.Sc./B.A. Travel &amp; Tourism Management
                                            </div>
                                            <div class="rgu-program-card-duration">
                                                Duration: 4 Years as per NEP
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="https://www.rgu.ac/programs-Master-Travel&Tourism"
                                        class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                Master of Travel &amp; Tourism Management – MTTM
                                            </div>
                                            <div class="rgu-program-card-duration">Duration: 2 Years</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const searchInput = document.querySelector(".rgu-program-course-search");
            const schoolSelect = document.querySelector(".rgu-program-school-select");
            const accordionItems = document.querySelectorAll(".rgu-program-accordion-item");

            /* ===============================
               BUILD SCHOOL DROPDOWN
            =============================== */

            const schools = [];

            accordionItems.forEach(item => {
                const schoolName = item.getAttribute("data-school");
                if (schoolName && !schools.includes(schoolName)) {
                    schools.push(schoolName);
                }
            });

            schools.forEach(school => {
                const option = document.createElement("option");
                option.value = school;
                option.textContent = school;
                schoolSelect.appendChild(option);
            });

            /* ===============================
            COURSE SEARCH FUNCTION
         =============================== */

            searchInput.addEventListener("input", function() {
                const keyword = normalize(this.value);

                accordionItems.forEach(item => {
                    const cards = item.querySelectorAll(".rgu-program-card");
                    let matchFound = false;

                    cards.forEach(card => {
                        const rawTitle = card.querySelector(".rgu-program-card-title")
                            .innerText;
                        const title = normalize(rawTitle);

                        if (title.includes(keyword)) {
                            card.closest(".col-lg-3").style.display = "";
                            matchFound = true;
                        } else {
                            card.closest(".col-lg-3").style.display = "none";
                        }
                    });

                    const collapse = item.querySelector(".accordion-collapse");

                    if (keyword === "") {
                        item.style.display = "";
                        collapse.classList.remove("show");
                    } else if (matchFound) {
                        item.style.display = "";
                        collapse.classList.add("show");
                    } else {
                        item.style.display = "none";
                        collapse.classList.remove("show");
                    }
                });
            });


            /* ===============================
               NORMALIZE FUNCTION
            =============================== */

            function normalize(str) {
                return str
                    .toLowerCase()
                    .replace(/\./g, "") // remove dots (B.Sc → BSc)
                    .replace(/\s+/g, "") // remove spaces
                    .replace(/[^a-z0-9]/g, ""); // remove special chars
            }

            /* ===============================
               SCHOOL DROPDOWN FILTER
            =============================== */

            schoolSelect.addEventListener("change", function() {
                const selectedSchool = this.value;

                accordionItems.forEach(item => {
                    const school = item.getAttribute("data-school");
                    const collapse = item.querySelector(".accordion-collapse");

                    if (!selectedSchool || selectedSchool === "Select School to Navigate...") {
                        item.style.display = "";
                        collapse.classList.remove("show");
                        return;
                    }

                    if (school === selectedSchool) {
                        item.style.display = "";
                        collapse.classList.add("show");

                        item.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });

                    } else {
                        item.style.display = "none";
                        collapse.classList.remove("show");
                    }
                });

                // clear course search
                searchInput.value = "";
            });

        });
    </script>


@endsection

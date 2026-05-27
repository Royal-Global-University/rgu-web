@extends('frontend/new-master')
@section('title', ' Schemes : The Assam Royal Global University')
@section('meta_description',
    'At Royal Global University, discover innovative schemes designed to support your academic
    journey and career aspirations.')
@section('meta_keywords', ' Schemes')
@section('content')
    <style>
        .rgu-ugc-section {
            background: #eef1f7;
            padding: 7rem 0;
        }

        .rgu-ugc-title {
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 4rem;
        }

        .rgu-ugc-tabs {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: .6rem;
            margin-bottom: 2rem;
        }

        .rgu-ugc-tab {
            background: #edf0f5;
            border: 1px solid #d8dde8;
            border-radius: .8rem;
            padding: 1.8rem 1.5rem;
            font-size: 1.6rem;
            font-weight: 500;
            color: #555;
            line-height: 1.5;
            transition: all .3s ease;
            cursor: pointer;
        }

        .rgu-ugc-tab:hover {
            background: #e2e8f4;
        }

        .rgu-ugc-tab.active {
            background: #d5672d;
            color: #fff;
            border-color: #d5672d;
        }

        .rgu-ugc-content-wrap {
            background: #f5f6f8;
            border-radius: .8rem;
            padding: 3rem;
        }

        .rgu-ugc-content {
            display: none;
        }

        .rgu-ugc-content.active {
            display: block;
        }

        .rgu-ugc-desc {
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
            margin-bottom: 3rem;
            font-weight: 500;
        }

        .rgu-ugc-card-grid {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .rgu-ugc-card {
            width: 100%;
            border-radius: .6rem;
            overflow: hidden;
        }

        .rgu-ugc-card-head {
            background: #29467a;
            color: #fff;
            padding: 1.8rem;
            font-size: 1.45rem;
            font-weight: 600;
        }

        .rgu-ugc-card-body {
            background: #dce8f8;
            padding: 1rem 1.8rem;
        }

        .rgu-ugc-row {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(41, 70, 122, 0.2);
            font-size: 1.8rem;
            color: #555;
        }

        .rgu-ugc-row:last-child {
            border-bottom: none;
        }

        @media (max-width: 991px) {

            .rgu-ugc-title {
                font-size: 3.8rem;
            }

            .rgu-ugc-tabs {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {

            .rgu-ugc-section {
                padding: 5rem 0;
            }

            .rgu-ugc-title {
                font-size: 2.8rem;
                margin-bottom: 3rem;
            }

            .rgu-ugc-tabs {
                grid-template-columns: 1fr;
            }

            .rgu-ugc-content-wrap {
                padding: 2.4rem;
            }

            .rgu-ugc-desc {
                font-size: 1.38rem;
                line-height: 1.9;
            }

            .rgu-ugc-card-grid {
                flex-direction: column;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Schemes for Differently-Abled Student</h1>
            <div class="pg-hero-breadcrumb">
                Admission / Admission Overview / Schemes for Differently-Abled Student
            </div>
        </div>

    </section>

    <!-- UGC Schemes Section -->
    <section class="rgu-ugc-section">

        <div class="container">

            <!-- Heading -->
            <div class="rgu-ugc-head text-center">
                <h2 class="rgu-ugc-title">
                    UGC Schemes For Differently-Abled Student
                </h2>
            </div>

            <!-- Tabs -->
            <div class="rgu-ugc-tabs">

                <button class="rgu-ugc-tab active" data-tab="ugc-tab-1">
                    Higher Education For Persons With Special Needs (HEPSN)
                </button>

                <button class="rgu-ugc-tab" data-tab="ugc-tab-2">
                    The Teacher Preparation In Special Education (TEPSE)
                </button>

                <button class="rgu-ugc-tab" data-tab="ugc-tab-3">
                    Financial Assistance To Visually Challenged Teachers
                </button>

                <button class="rgu-ugc-tab" data-tab="ugc-tab-4">
                    National Fellowship For Persons With Disabilities
                </button>

            </div>

            <!-- Content Wrapper -->
            <div class="rgu-ugc-content-wrap">

                <!-- TAB 1 -->
                <div class="rgu-ugc-content active" id="ugc-tab-1">

                    <p class="rgu-ugc-desc">
                        The HEPSN scheme is basically meant for creating an environment at the higher education
                        institutions to enrich higher education learning experiences for differently-abled persons.
                        Creating awareness about the capabilities of differently-abled persons, construction aimed at
                        improving accessibility, purchase of equipment to enrich learning, etc., are the broad
                        categories of assistance under this scheme.
                    </p>

                    <div class="rgu-ugc-card-grid">

                        <div class="rgu-ugc-card">
                            <div class="rgu-ugc-card-head">
                                Financial Assistance: University
                            </div>

                            <div class="rgu-ugc-card-body">

                                <div class="rgu-ugc-row">
                                    <span>Comp. I</span>
                                    <span>Rs.1.18 Lakh P.A</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Comp. II</span>
                                    <span>Rs.10.00 Lakh Per Plan</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Comp. III</span>
                                    <span>Rs. 8.00 Lakh Per Plan</span>
                                </div>

                            </div>
                        </div>

                        <div class="rgu-ugc-card">
                            <div class="rgu-ugc-card-head">
                                Financial Assistance: College
                            </div>

                            <div class="rgu-ugc-card-body">

                                <div class="rgu-ugc-row">
                                    <span>Comp. I</span>
                                    <span>Rs. 98,000/- P.A</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Comp. II</span>
                                    <span>Rs. 5.00 Lakh Per Plan</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Comp. III</span>
                                    <span>Rs. 1.50 Lakh Per Plan</span>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- TAB 2 -->
                <div class="rgu-ugc-content" id="ugc-tab-2">

                    <p class="rgu-ugc-desc">
                        Scheme is meant for assisting Departments of Education to launch special education teachers’
                        preparation programmes to prepare special teachers to teach children with disabilities in both
                        special and inclusive settings. The scheme provides financial assistance to offer B.Ed. and
                        M.Ed. Degree courses with specialization in one of the disability areas. The specific objective
                        of the TEPSE schemes is to encourage Universities to start M.Ed. special education courses to
                        prepare teacher- educators to serve in higher education institutions offering special education
                        teacher preparation courses.
                    </p>

                    <div class="rgu-ugc-card-grid">

                        <div class="rgu-ugc-card">
                            <div class="rgu-ugc-card-head">
                                Financial Assistance
                            </div>

                            <div class="rgu-ugc-card-body">

                                <div class="rgu-ugc-row">
                                    <span>B.Ed / M.Ed</span>
                                    <span>Rs. 2.00 lakhs (One Time) & Staff Salary</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>B.Ed / M.Ed</span>
                                    <span>Rs. 4.00 lakhs (One Time) & Staff Salary</span>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>

                <!-- TAB 3 -->
                <div class="rgu-ugc-content" id="ugc-tab-3">

                    <p class="rgu-ugc-desc">
                        The Scheme has been formulated to help visually challenged permanent teachers to pursue teaching
                        and research with the help of a Reader and by using teaching and learning aids by way of
                        providing Reader’s Allowance and funds for purchase of Braille books, recorded materials, etc.
                        and help such teachers achieve self- dependence by using various aids for teaching, learning and
                        research. Financial assistance under the scheme is available to such universities and colleges
                        which come within the purview of section 2(f) and are fit to receive central assistance under
                        Section 12B of the UGC Act, 1956.
                    </p>

                    <div class="rgu-ugc-card-grid">

                        <div class="rgu-ugc-card">
                            <div class="rgu-ugc-card-head">
                                Financial Assistance
                            </div>

                            <div class="rgu-ugc-card-body">

                                <div class="rgu-ugc-row">
                                    <span>Rs.36,000/- per annum</span>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>

                <!-- TAB 4 -->
                <div class="rgu-ugc-content" id="ugc-tab-4">

                    <p class="rgu-ugc-desc">
                        University Grants Commission (UGC) on behalf of Department of Empowerment of Persons with
                        Disabilities (DEPwD), Ministry of Social Justice & Empowerment invites applications from
                        eligible candidates for National Fellowship for Persons with Disabilities (NFPwD) for the
                        selections years 2018-19 and 2019-2020. Under this scheme, fellowship will be available to
                        students with disabilities who are covered under 'The Persons with Disabilities (Equal
                        Opportunities, Protection of Rights and Full Participation) Act, 1995. Thus a person with
                        disability, who wishes to avail the benefits under the Act has to obtain a disability
                        certificate from the medical authority notified for the purpose.
                    </p>

                    <div class="rgu-ugc-card-grid">

                        <div class="rgu-ugc-card">
                            <div class="rgu-ugc-card-head">
                                Financial Assistance: Presently the rate of fellowship for JRF and SRF, under the
                                scheme, is as under-
                            </div>

                            <div class="rgu-ugc-card-body">

                                <div class="rgu-ugc-row">
                                    <span>Fellowship</span>
                                    <span>@Rs.25,000/- p.m. initial two year as JRF <br>
                                        @Rs.28,000/- p.m. for remaining tenure as SRF.</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Contingency (Humanities & Social Sciences including Arts/Fine Arts)</span>
                                    <span>@Rs.25,000/- p.m. initial two year as JRF <br>
                                        @Rs.20,500/- p.a. for remaining tenure (SRF)</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Contingency (Science, Engineering & Technology)</span>
                                    <span>@Rs.12,000/- p.a. initial two year (JRF) <br>
                                        @Rs.25,000/- p.a. for remaining tenure (SRF)</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>Escorts/Reader assistance</span>
                                    <span>@Rs.2,000/- p.m. in case of candidates with physical and visual
                                        disabilities.</span>
                                </div>

                                <div class="rgu-ugc-row">
                                    <span>HRA</span>
                                    <span>As per Govt. of India norms.</span>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>

    </section>

    <script>
        const rguUgctabs = document.querySelectorAll('.rgu-ugc-tab');
        const rguUgcContents = document.querySelectorAll('.rgu-ugc-content');

        rguUgctabs.forEach(tab => {

            tab.addEventListener('click', () => {

                const target = tab.getAttribute('data-tab');

                rguUgctabs.forEach(btn => {
                    btn.classList.remove('active');
                });

                rguUgcContents.forEach(content => {
                    content.classList.remove('active');
                });

                tab.classList.add('active');

                document.getElementById(target).classList.add('active');

            });

        });
    </script>
@endsection

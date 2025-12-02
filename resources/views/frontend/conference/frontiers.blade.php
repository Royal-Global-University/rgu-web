@extends('frontend.master')
@section('title', 'National Conference on Frontiers in Modern Physics, Astrophysics and Cosmology')
@section('meta_keywords', 'Blog')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px"></div>
        <div
            style="background-image: url(mobile-assets/blog/cosmology/banner-mob.png); background-size: cover; background-position: center; height: 35vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        </div>

        <section
            style="background-image: url(mobile-assets/blog/cosmology/bg.svg); background-size: cover; background-position: center;">

            <div class="pt-4">
                <div class="row">

                    <div class="col-lg-12" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <a class="mobile-headd3"
                            style="padding: 6px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600; margin-right: 15px;"
                            target="_blank" href="mobile-assets/blog/cosmology/Brochure.pdf">Download Brochure</a>
                        <a class="mobile-para1 mt-2"
                            style="padding: 6px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600; margin-right: 15px;"
                            href="https://forms.gle/kRiFNsfwQG7AGxGA9">Registration Link</a>
                        <a class="mobile-para1 mt-2"
                            style="padding: 6px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600;"
                            href="mobile-assets/blog/cosmology/Abstract.docx">Download Abstract</a>
                    </div>

                </div>
            </div>

            <div class="container pt-5">

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About<span style="color: #FF9A1E; font-weight: 500;"> RGU</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The Assam Royal Global University (RGU), located in Guwahati, Northeast India, is a premier institution
                    committed to delivering world-class, research-oriented, and industry-relevant education across 23
                    specialized schools. Spanning over 30 acres, the campus offers modern facilities including Wi-Fi-enabled
                    smart classrooms, advanced laboratories, and comfortable residential accommodations, fostering an
                    engaging learning environment. With more than 8,000 students and 460 faculty members, RGU emphasizes
                    holistic development through a vibrant campus life enriched with cultural, sports, and extracurricular
                    activities. Dedicated to academic excellence and innovation, the university nurtures future global
                    citizens equipped to address real-world challenges and contribute meaningfully to society.
                </p>

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About the<span style="color: #FF9A1E; font-weight: 500;"> Department</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The Department of Physics at Assam Royal Global University (RGU), is dedicated to providing high-quality
                    education and fostering research excellence in the field of physics. The department offers
                    undergraduate, postgraduate, and doctoral programs, including a 4-year B.Sc. (Honours) in Physics, a
                    2-year M.Sc. in Physics, and a Ph.D. program. These programs are designed to equip students with a deep
                    understanding of physical principles and prepare them for careers in academia, research, and industry.
                    The department's faculty comprises experienced professionals specializing in areas such as photonics,
                    nanotechnology, semiconductor physics, atmospheric science, and optoelectronics. Research interests
                    among the faculty include optical communication, materials science, renewable energy systems,
                    atmospheric and space physics, and terahertz photonics. The department is equipped with state-of-the-art
                    laboratories, including facilities for spectroscopy, laser experiments, equipped with BE/BTech, B.Sc.
                    and M.Sc. labs, providing students with hands-on experience in experimental physics. RGU's Department of
                    Physics aims to cultivate critical thinking, problem-solving skills, and a passion for scientific
                    inquiry, contributing to the advancement of physics education and research in Northeast India.
                </p>

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About the<span style="color: #FF9A1E; font-weight: 500;"> Conference</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The National Conference on Frontiers in Modern Physics, Astrophysics, and Cosmology (NCMPAC-2026) will
                    be held at Assam Royal Global University from January 8 to 10, 2026. This conference aims to create a
                    dynamic platform for both established and emerging researchers and scientists to exchange cutting-edge
                    ideas and foster innovative collaborations. Covering a broad spectrum-from fundamental physics to
                    advanced interdisciplinary concepts-the conference seeks to bridge the gap between scientific research
                    and engineering applications. Aligned with the Government of India’s emphasis on outcome-based research,
                    NCMPAC-2026 aspires to accelerate the development of indigenous technologies and groundbreaking
                    scientific discoveries. Additionally, the event offers an invaluable opportunity for young researchers
                    to engage with peers, broaden their expertise, and advance their careers in a rapidly evolving
                    scientific landscape.
                </p>

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Call for<span style="color: #FF9A1E; font-weight: 500;"> Papers:</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    We are inviting papers for presentation in NCMPAC-2026. Potential authors will be provided with
                    an opportunity to share their research outputs and discuss with national/regional experts on new
                    innovative ideas and concepts.
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Guidelines for Abstract/ Paper Submission</h2>

                <ol class="para1 text-dark">

                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Only original unpublished work is sought. Any manuscript/work
                            presently submitted for consideration or published in other media will not be accepted.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">For manuscript preparation please refer to the format given in the
                            conference webpage.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Soft copies to be sent through the following email ID:
                            <a href="mailto:ncmpac2026@gmail.com"
                                style="color: #27467A; text-decoration: none;">ncmpac2026@gmail.com</a>.
                        </span>
                    </li>

                </ol>

                <h2 class="headd3 text-dark mt-3 fw-bold">Tracks covered include, but are not limited to:</h2>

                <ol class="para1 text-dark">

                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 1: Material Science</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 2: Atomic, Molecular and Non-Linear Optics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 3: Relativity, Astrophysics and Cosmology</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 4: Plasma Physics and Nonlinear Dynamics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 5: Atmospheric Physics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 6: Interdisciplinary Sciences</span>
                    </li>


                </ol>

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-3 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Publication of<span style="color: #FF9A1E; font-weight: 500;"> Research</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    Original unpublished work submitted to the conference will be published in a Book of Abstracts.
                    The author(s) must prepare a one page abstract as per the given template.
                    Selected papers may be published as a conference proceeding after peer review.
                    Templates for Abstract and Full Paper are available on the university website:
                    <a class="fw-bold" href="https://www.rgu.ac/" target="_blank"
                        style="color: #27467A; text-decoration: none;">https://www.rgu.ac/</a>
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Payment Details</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; text-align: center; font-family: 'Montserrat', sans-serif;">
                        <thead class="mobile-para1" style="background-color: #27467A; color: white;">
                            <tr>
                                <th rowspan="2" style="border: 1px solid #ffffff; padding: 8px;">Category</th>
                                <th colspan="2" style="border: 1px solid #ffffff; padding: 8px;">On/Before
                                    <i>20<sup>th</sup> December</i>
                                </th>
                                <th colspan="2" style="border: 1px solid #ffffff; padding: 8px;">After <i>20<sup>th</sup>
                                        December</i></th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Indian</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Foreign</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Indian</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Foreign</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #e6e6e6; color: #333;">
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Student</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 30</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 35</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Research Scholar</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 40</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 2000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 45</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Faculty/Scientist</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 2500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 50</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 3000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 55</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Industry Personnel</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 5000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 100</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 5500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 105</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p style="text-align: justify;" class="para1 text-dark pt-3">
                    Please save a screenshot of the successful transaction to be uploaded during online registration.
                    Additional charges for journal publications of accepted full-length papers will be notified in due
                    course of time.
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Important Deadlines</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif; background-color: #fff;">

                        <tbody style="color: #333;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Registration Starts</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">15 October, 2025</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Last date of Abstract Submission</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">20 December, 2025</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Last Date of Registration</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">20 December, 2025</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Notification of Acceptance of Abstract
                                </td>
                                <td style="border: 1px solid #ccc; padding: 8px;">31 December, 2025</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Conference Dates</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">8-10 January, 2026</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">6</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Full Length Paper Submission</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">28 February, 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">All transactions can be made to the following account:</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif; background-color: #fff;">

                        <tbody style="color: #333;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">A/C Name:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">ROYAL GLOBAL UNIVERSITY</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">A/C No.:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">4651002100004685</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">IFSC Code:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">PUNB0465100</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">Bank Name:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">PUNJAB NATIONAL BANK</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">Bank Address:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">BHANGAGARH, GUWAHATI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Advisor:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. A. K. Buragohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarjyoti Choudhury</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarendra Rajput</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Rama Ranjan Bhattarjee</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Anuradha Devi</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dean, RSAPS, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Convenors:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Role</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Maidul Islam</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Faizuddin Ahmed</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Co-Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bornali Chetia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Co-Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Nitu Borgohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Treasurer:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Koushik Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Technical & Scientific Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Maidul Islam</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Faizuddin Ahmed</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bornali Chetia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Nitu Borgohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Koushik Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Steering Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">

                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Devika Phukan</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Sankar Barman</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Pubalee Sarmah</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Chemistry, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bimalendu Kalita</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Mathematics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Scientific Advisory Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Dhruba J Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IUCAA, Pune</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Saurabh Basu</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Guwahati</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Gagan Kumar</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Ropar</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Bidyut Jyoti Roy</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">BARC, India</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Subhasis Panja</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">CSIR-NPL, New Delhi</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">6</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Bipin Kr. Gupta</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">CSIR-NPL, New Delhi</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">7</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarendra Kumar Sarma</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Guwahati</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">8</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Debojit Sarma</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Cotton University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">9</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Mahadev Patgiri</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Sibsagar University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">10</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Ganesh C Warry</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Kokrajhar University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">11</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. M. P. Bora</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Gauhati University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">12</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Joyanti Chutia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Former Director, IASST</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">13</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Syed Arsad Hussain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Tripura University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">14</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Anurup G. Barua</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Gauhati University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">15</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Umananda Dev Goswami</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dibrugarh University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">16</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Subrata Hazarika</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Assam University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">17</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Atri Deshmukh</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Assam University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">18</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Pradip Kumar Kalita</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Rajiv Gandhi University, Arunachal Pradesh
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="mobile-headd2 fw-bold kd-title-ani kd-split-text pt-4 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Keynote<span style="color: #FF9A1E; font-weight: 500;"> Speakers</span>
                </h2>

                <div class="container">

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

                    <!-- profiles  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/saurabh-basu.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Saurabh Basu</h3>
                                <p class="card-designation">IIT Guwahati</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/suphradip-ghosh.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Suphradip Ghosh</h3>
                                <p class="card-designation">IIT Guwahati</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture3.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Kamla Prasan Ray</h3>
                                <p class="card-designation">IIT Gandhinagar</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture4.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Bipin Kumar Gupta</h3>
                                <p class="card-designation">CSIR-NPL, New Delhi</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture5.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Subhasis Panja</h3>
                                <p class="card-designation">CSIR-NPL, New Delhi</p>

                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture6.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Soumen Mondal</h3>
                                <p class="card-designation">Jadavpur University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture7.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Pritam Deb</h3>
                                <p class="card-designation">Tezpur University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture8.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Madhurjya Pratim Borah</h3>
                                <p class="card-designation">Gauhati University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture9.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Umananda Dev Goswami</h3>
                                <p class="card-designation">Dibrugarh University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture10.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Syed Arshad Hussain</h3>
                                <p class="card-designation">Tripura University</p>

                            </div>
                        </div>



                    </div>
                    <!-- profiles  -->

                </div>

            </div>
        </section>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div
            style="background-image: url(mobile-assets/blog/cosmology/banner.png); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        </div>

        <section
            style="background-image: url(mobile-assets/blog/cosmology/bg.svg); background-size: cover; background-position: center;">
            <div class="pt-5">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">

                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">
                        <a class="mobile-headd3"
                            style="padding: 10px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600; margin-right: 25px;"
                            target="_blank" href="mobile-assets/blog/cosmology/Brochure.pdf">Brochure</a>
                        <a class="mobile-headd3"
                            style="padding: 10px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600; margin-right: 25px;" target="_blank"
                            href="https://forms.gle/kRiFNsfwQG7AGxGA9">Registration Link</a>
                        <a class="mobile-headd3"
                            style="padding: 10px 30px; background-color: #24477f; border-radius: 10px; color: #fff; font-weight: 600;"
                            href="mobile-assets/blog/cosmology/Abstract.docx">Download Abstract</a>
                    </div>

                </div>
            </div>
            <div class="container pt-5">

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About<span style="color: #FF9A1E; font-weight: 500;"> RGU</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The Assam Royal Global University (RGU), located in Guwahati, Northeast India, is a premier institution
                    committed to delivering world-class, research-oriented, and industry-relevant education across 23
                    specialized schools. Spanning over 30 acres, the campus offers modern facilities including Wi-Fi-enabled
                    smart classrooms, advanced laboratories, and comfortable residential accommodations, fostering an
                    engaging learning environment. With more than 8,000 students and 460 faculty members, RGU emphasizes
                    holistic development through a vibrant campus life enriched with cultural, sports, and extracurricular
                    activities. Dedicated to academic excellence and innovation, the university nurtures future global
                    citizens equipped to address real-world challenges and contribute meaningfully to society.
                </p>

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About the<span style="color: #FF9A1E; font-weight: 500;"> Department</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The Department of Physics at Assam Royal Global University (RGU), is dedicated to providing high-quality
                    education and fostering research excellence in the field of physics. The department offers
                    undergraduate, postgraduate, and doctoral programs, including a 4-year B.Sc. (Honours) in Physics, a
                    2-year M.Sc. in Physics, and a Ph.D. program. These programs are designed to equip students with a deep
                    understanding of physical principles and prepare them for careers in academia, research, and industry.
                    The department's faculty comprises experienced professionals specializing in areas such as photonics,
                    nanotechnology, semiconductor physics, atmospheric science, and optoelectronics. Research interests
                    among the faculty include optical communication, materials science, renewable energy systems,
                    atmospheric and space physics, and terahertz photonics. The department is equipped with state-of-the-art
                    laboratories, including facilities for spectroscopy, laser experiments, equipped with BE/BTech, B.Sc.
                    and M.Sc. labs, providing students with hands-on experience in experimental physics. RGU's Department of
                    Physics aims to cultivate critical thinking, problem-solving skills, and a passion for scientific
                    inquiry, contributing to the advancement of physics education and research in Northeast India.
                </p>

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    About the<span style="color: #FF9A1E; font-weight: 500;"> Conference</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    The National Conference on Frontiers in Modern Physics, Astrophysics, and Cosmology (NCMPAC-2026) will
                    be held at Assam Royal Global University from January 8 to 10, 2026. This conference aims to create a
                    dynamic platform for both established and emerging researchers and scientists to exchange cutting-edge
                    ideas and foster innovative collaborations. Covering a broad spectrum-from fundamental physics to
                    advanced interdisciplinary concepts-the conference seeks to bridge the gap between scientific research
                    and engineering applications. Aligned with the Government of India’s emphasis on outcome-based research,
                    NCMPAC-2026 aspires to accelerate the development of indigenous technologies and groundbreaking
                    scientific discoveries. Additionally, the event offers an invaluable opportunity for young researchers
                    to engage with peers, broaden their expertise, and advance their careers in a rapidly evolving
                    scientific landscape.
                </p>

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-2 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Call for<span style="color: #FF9A1E; font-weight: 500;"> Papers:</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    We are inviting papers for presentation in NCMPAC-2026. Potential authors will be provided with
                    an opportunity to share their research outputs and discuss with national/regional experts on new
                    innovative ideas and concepts.
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Guidelines for Abstract/ Paper Submission</h2>

                <ol class="para1 text-dark">

                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Only original unpublished work is sought. Any manuscript/work
                            presently submitted for consideration or published in other media will not be accepted.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">For manuscript preparation please refer to the format given in the
                            conference webpage.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Soft copies to be sent through the following email ID:
                            <a href="mailto:ncmpac2026@gmail.com"
                                style="color: #27467A; text-decoration: none;">ncmpac2026@gmail.com</a>.
                        </span>
                    </li>

                </ol>

                <h2 class="headd3 text-dark mt-3 fw-bold">Tracks covered include, but are not limited to:</h2>

                <ol class="para1 text-dark">

                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 1: Material Science</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 2: Atomic, Molecular and Non-Linear Optics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 3: Relativity, Astrophysics and Cosmology</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 4: Plasma Physics and Nonlinear Dynamics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 5: Atmospheric Physics</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                        <i class="fa fa-circle"
                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                        <span style="display: block;">Track 6: Interdisciplinary Sciences</span>
                    </li>


                </ol>

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Publication of<span style="color: #FF9A1E; font-weight: 500;"> Research</span>
                </h2>

                <p style="text-align: justify;" class="para1 text-dark">
                    Original unpublished work submitted to the conference will be published in a Book of Abstracts.
                    The author(s) must prepare a one page abstract as per the given template.
                    Selected papers may be published as a conference proceeding after peer review.
                    Templates for Abstract and Full Paper are available on the university website:
                    <a class="fw-bold" href="https://www.rgu.ac/" target="_blank"
                        style="color: #27467A; text-decoration: none;">https://www.rgu.ac/</a>
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Payment Details</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; text-align: center; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th rowspan="2" style="border: 1px solid #ffffff; padding: 8px;">Category</th>
                                <th colspan="2" style="border: 1px solid #ffffff; padding: 8px;">On/Before
                                    <i>20<sup>th</sup> December</i>
                                </th>
                                <th colspan="2" style="border: 1px solid #ffffff; padding: 8px;">After <i>20<sup>th</sup>
                                        December</i></th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Indian</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Foreign</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Indian</th>
                                <th style="border: 1px solid #ffffff; padding: 8px;">Foreign</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #e6e6e6; color: #333;">
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Student</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 30</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 35</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Research Scholar</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 1500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 40</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 2000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 45</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Faculty/Scientist</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 2500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 50</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 3000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 55</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #333; padding: 8px;">Industry Personnel</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 5000</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 100</td>
                                <td style="border: 1px solid #333; padding: 8px;">₹ 5500</td>
                                <td style="border: 1px solid #333; padding: 8px;">$ 105</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p style="text-align: justify;" class="para1 text-dark pt-3">
                    Please save a screenshot of the successful transaction to be uploaded during online registration.
                    Additional charges for journal publications of accepted full-length papers will be notified in due
                    course of time.
                </p>

                <h2 class="headd3 text-dark mt-3 fw-bold">Important Deadlines</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif; background-color: #fff;">

                        <tbody style="color: #333;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Registration Starts</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">15 October, 2025</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Last date of Abstract Submission</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">25 December, 2025</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Last Date of Registration</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">25 December, 2025</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Notification of Acceptance of Abstract
                                </td>
                                <td style="border: 1px solid #ccc; padding: 8px;">31 December, 2025</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Conference Dates</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">8-10 January, 2026</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">6</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Full Length Paper Submission</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">28 February, 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">All transactions can be made to the following account:</h2>

                <div class="table-responsive">
                    <table
                        style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif; background-color: #fff;">

                        <tbody style="color: #333;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">A/C Name:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">ROYAL GLOBAL UNIVERSITY</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">A/C No.:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">4651002100004685</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">IFSC Code:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">PUNB0465100</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">Bank Name:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">PUNJAB NATIONAL BANK</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px; font-weight: bold;">Bank Address:</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">BHANGAGARH, GUWAHATI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Advisor:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. A. K. Buragohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarjyoti Choudhury</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarendra Rajput</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Rama Ranjan Bhattarjee</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Anuradha Devi</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Convenors:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Role</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Maidul Islam</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Faizuddin Ahmed</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Co-Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bornali Chetia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Co-Convenor</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Nitu Borgohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Treasurer:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Koushik Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Technical & Scientific Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Maidul Islam</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Faizuddin Ahmed</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bornali Chetia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Nitu Borgohain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Koushik Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Steering Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Devika Phukan</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Sankar Barman</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Physics, Royal Global University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Pubalee Sarmah</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Chemistry, Royal Global University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dr. Bimalendu Kalita</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Mathematics, Royal Global University</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 text-dark mt-3 fw-bold">Scientific Advisory Committee:</h2>

                <div class="table-responsive">
                    <table style="border-collapse: collapse; width: 100%; font-family: 'Montserrat', sans-serif;">
                        <thead style="background-color: #27467A; color: white;">
                            <tr>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: center;">Sl. No.</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">Name</th>
                                <th style="border: 1px solid #ffffff; padding: 10px; text-align: left;">University/Institute
                                    Name</th>
                            </tr>
                        </thead>
                        <tbody style="color: #333; background-color: #e6e6e6;">
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">1</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Dhruba J Saikia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IUCAA, Pune</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">2</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Saurabh Basu</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Guwahati</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">3</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Gagan Kumar</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Ropar</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">4</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Bidyut Jyoti Roy</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">BARC, India</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">5</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Subhasis Panja</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">CSIR-NPL, New Delhi</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">6</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Bipin Kr. Gupta</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">CSIR-NPL, New Delhi</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">7</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Amarendra Kumar Sarma</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">IIT Guwahati</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">8</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Debojit Sarma</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Cotton University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">9</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Mahadev Patgiri</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Sibsagar University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">10</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Ganesh C Warry</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Kokrajhar University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">11</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. M. P. Bora</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Gauhati University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">12</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Joyanti Chutia</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Former Director, IASST</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">13</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Syed Arsad Hussain</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Tripura University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">14</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Anurup G. Barua</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Gauhati University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">15</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Umananda Dev Goswami</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Dibrugarh University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">16</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Subrata Hazarika</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Assam University</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">17</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Atri Deshmukh</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Assam University</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">18</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Prof. Pradip Kumar Kalita</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Rajiv Gandhi University, Arunachal Pradesh
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="mobile-headd1 fw-bold kd-title-ani kd-split-text pt-4 pb-1"
                    style="color: #27467A; font-weight: 900;">
                    Keynote<span style="color: #FF9A1E; font-weight: 500;"> Speakers</span>
                </h2>

                <div class="container">

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

                    <!-- profiles  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/saurabh-basu.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Saurabh Basu</h3>
                                <p class="card-designation">IIT Guwahati</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/suphradip-ghosh.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Suphradip Ghosh</h3>
                                <p class="card-designation">IIT Guwahati</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture3.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Kamla Prasan Ray</h3>
                                <p class="card-designation">IIT Gandhinagar</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture4.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Bipin Kumar Gupta</h3>
                                <p class="card-designation">CSIR-NPL, New Delhi</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture5.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Subhasis Panja</h3>
                                <p class="card-designation">CSIR-NPL, New Delhi</p>

                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture6.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Soumen Mondal</h3>
                                <p class="card-designation">Jadavpur University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture7.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Pritam Deb</h3>
                                <p class="card-designation">Tezpur University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture8.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Madhurjya Pratim Borah</h3>
                                <p class="card-designation">Gauhati University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture9.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Umananda Dev Goswami</h3>
                                <p class="card-designation">Dibrugarh University</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="mobile-assets/blog/cosmology/profiles/Picture10.png" alt="Profile image">
                                </div>
                                <h3 class="card-name">Prof. Syed Arshad Hussain</h3>
                                <p class="card-designation">Tripura University</p>

                            </div>
                        </div>



                    </div>
                    <!-- profiles  -->

                </div>

            </div>
        </section>
        <section class="text-center">
            <!--map-->
            <h2 class="headd1 fw-bold text-center  pb-4 pt-2" style="color: #27467A; font-weight: 900;">
                RGU <span style="color: #FF9A1E; font-weight: 500;">Location</span></h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.58413536414!2d91.72203897563631!3d26.112490577133137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5c6504d45881%3A0x1029dcdedc3e79db!2sRoyal%20Global%20University!5e0!3m2!1sen!2sin!4v1759902585816!5m2!1sen!2sin"
                width="1200" height="450" style="border: 3px solid black; border-radius: 10px;" class="mb-5" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

    </div>
@endsection

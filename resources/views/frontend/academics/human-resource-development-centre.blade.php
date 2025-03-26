@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd2 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">Royal Centre for <span
                                    style="color: #FF9A1E; font-weight: 500;">Human Resource Development (RCHRD)</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/hrdc/headimg.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                In accordance with the guidelines of the University Grants Commission (UGC) and the Malaviya
                                Mission Teacher Training Centre (erstwhile Human Resource Development Centre), the Royal Global
                                University has set up the Royal Centre for Human Resource Development for developing the
                                capacity of its human resources through trainings, workshops, etc. The Centre aims to transform
                                higher education by integrating Indian values and ethos into teaching, research, publications,
                                patents, and institutional development.
                            </p>

                            <div class="pt-2">
                                <a href="mobile-assets/hrdc/HRDC_Annual Report.pdf" target="_blank">
                                    <button type="button" style="background-color: #264273; color: #fff;"
                                        class="btn btn btn-sm custom-details-btn p-2 ps-4 pe-4 mobile-para1">
                                        <i class="fa fa-download me-2"></i> HRDC Annual Report
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container pt-4">
                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">Vision:</h2>
                <p class="mobile-para1 text-dark" style="text-align: justify;">
                    To build competencies of faculty and staff for improved teaching, learning, research, academic leadership
                    and administration by aligning them with the values and goals of the university and updating their knowledge
                    and skills according to the needs of society.
                </p>
                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">Mission:</h2>
                <p class="mobile-para1 text-dark" style="text-align: justify;">
                    Enable faculty and staff to acquire specific competencies that help improve their work performance, student
                    learning outcomes coupled with excellence in research and administration.
                </p>

                <hr>

                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">Objective:</h2>
                <ol class="mobile-para1 text-dark">
                    <li>Improving the quality of education by providing training and development opportunities for teachers and
                        other academic staff.</li>
                    <li>Promoting multiculturalism by facilitating collaboration between different departments and faculties.
                    </li>
                    <li>Training teachers by providing the latest pedagogical methods and techniques.</li>
                    <li>Encouraging the development of innovative pedagogy for skilled-based education.</li>
                    <li>Developing teachers as mentors for helping the students to meet life's challenges.</li>
                    <li>Organizing in-service training programs for teachers and administrative staff.</li>
                    <li>Facilitating reforms in each school by modifying management systems and practices.</li>
                    <li>To ensure holistic development of teachers, staff, and students with the inculcation of ethics and human
                        values as enshrined in Indian culture and familiarizing them with the Indian Knowledge System (Bharatiya
                        Gyan Parampara).</li>
                    <li>To ensure the role of faculty and staff as active participants in institution and nation building.</li>
                    <li>To empower faculty members and staff as lifelong learners through continuous professional development.
                    </li>
                </ol>

                <hr>

                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">Expected Outcomes:</h2>
                <ol class="mobile-para1 text-dark">
                    <li>The faculty members will get sensitized and oriented on NEP 2020 by imparting holistic education,
                        imbibing the ideals of Bhartiya-centric ethics and human values.</li>
                    <li>Faculty, staff, and students will acquire the concept of the Indian Knowledge Systems (Bharatiya Gyan
                        Parampara), integrate it into the curriculum, and apply it in real life for the advancement and creation
                        of knowledge.</li>
                    <li>The faculty, staff, and students will develop 21st-century skills and become reflective practitioners to
                        innovatively generate and apply ideas respecting biodiversity and sustainability.</li>
                    <li>The faculty and students will conduct quality research to solve contemporary problems through innovation
                        and entrepreneurship.</li>
                    <li>The faculty and students will develop the capacity to integrate ICT tools into the learning process and
                        become lifelong self-motivated learners.</li>
                </ol>

                <hr>

                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">RCHRD Committee:</h2>
                <ol class="mobile-para1 text-dark">
                    <li>Prof. Dr. Y. S. R. Murthy, Vice Chancellor - Chief Advisor</li>
                    <li>Prof. (Dr.) Ladu Singh (Prof. Emeritus) - Advisor</li>
                    <li>Prof. (Dr.) L.K. Nath (Dean, RSP) - Special Invitee</li>
                    <li>Prof. Nikhil Chrungoo (Dean, RSLS) - Special Invitee</li>
                    <li>Prof. Bijay Singh Mipun (Dean, DSW & RSEES) - Special Invitee</li>
                    <li>Prof. Dr. George A.P. (Dean, RSB & RSC) - Chairman</li>
                    <li>Prof. D.N. Singh (Registrar) - Member</li>
                    <li>Prof. Ankur Ganguly (Dean Academic & Dean RSET & IT) - Member</li>
                    <li>Prof. Anuradha Devi (Dean RSAPS & Director, IQAC) - Member</li>
                    <li>Dr. Annu Kumari (Asst Prof, Zoology) - Member Secretary</li>
                    <li>Prof. Ajit Kaushal (HOD, RSLA) - Member</li>
                    <li>Prof. (Dr) Suresh Chandra Nayak (Dean i/c RSCOM) - Member</li>
                    <li>Prof. (Dr) Saket Jeswani (Dean Consultancy, Prof. RSB) - Member</li>
                    <li>Dr. Amlan Das (Assoc. Professor, RSBSC) - Member</li>
                    <li>Dr. Ranjan Dutta Kalita (Assoc. Prof., RSBSC) - Member</li>
                    <li>Prof (Dr.) Prince (Associate Professor, RSBAS) - Member</li>
                    <li>Dr. Shankar Burman (Coordinator, IIC-RGU) - Member</li>
                    <li>Dr. Ashok Kumar (Dy Director, RCCR) - Member</li>
                    <li>Dr. Indrajit Dutta (Asst. Professor, RSTTM) - Member</li>
                    <li>Dr. Mousmi Deka (Asst. Professor, RSFA) - Member</li>
                    <li>Ms. Baishali Pathak (Asst. Professor, RSC) - Member</li>
                    <li>Dr. Sujata Deb (Assoc. Prof, RSAPS) - Ex-officio Member</li>
                </ol>

                <hr>

                <h2 class="mobile-headd2 fw-bold" style="color: #264273;">Functions:</h2>
                <ol class="mobile-para1 text-dark">
                    <li>Organise induction programmes for newly appointed faculty members.</li>
                    <li>Organize FDP/refresher/orientation courses for the faculty.</li>
                    <li>Conduct training programmes for staff on various administrative procedures including ICT in governance,
                        financial management and interpersonal relations.</li>
                    <li>Assist in conducting Student Induction Programme.</li>
                </ol>

            </div>

        </div>
    </div>

    <div class="website">

        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div
            style="background-image: url(mobile-assets/hrdc/bgg.svg); background-size: cover; height: 100vh; justify-content: center; align-items: center; display: flex;">
            <div class="row d-flex align-items-center p-5">

                <div class="col-lg-6">
                    <img style="border: 1px solid #264273; border-radius: 20px; width: 650px;"
                        src="mobile-assets/hrdc/headimg.png" alt="image">
                </div>

                <div class="col-lg-6" style="color: #264273; text-align: justify;">
                    <h2 class="headd2" style="color: #264273; font-weight: 700; text-align: left !important;">Royal Centre
                        for <span style="color: #FF9A1E; font-weight: 500;">Human Resource Development (RCHRD)</h2>
                    <p class="para1">
                        In accordance with the guidelines of the University Grants Commission (UGC) and the Malaviya Mission
                        Teacher Training Centre (erstwhile Human Resource Development Centre), the Royal Global University
                        has set up the Royal Centre for Human Resource Development for developing the capacity of its human
                        resources through trainings, workshops, etc. The Centre aims to transform higher education by
                        integrating Indian values and ethos into teaching, research, publications, patents, and
                        institutional development.
                    </p>
                    <div>
                        <a href="mobile-assets/hrdc/HRDC_Annual Report.pdf" target="_blank">
                            <button type="button" style="background-color: #264273; color: #fff;"
                                class="btn btn btn-sm custom-details-btn p-2 ps-4 pe-4">
                                <i class="fa fa-download me-2"></i> HRDC Annual Report
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-5">
            <h2 class="headd2 fw-bold" style="color: #264273;">Vision:</h2>
            <p class="para1 text-dark">
                To build competencies of faculty and staff for improved teaching, learning, research, academic leadership
                and administration by aligning them with the values and goals of the university and updating their knowledge
                and skills according to the needs of society.
            </p>
            <h2 class="headd2 fw-bold" style="color: #264273;">Mission:</h2>
            <p class="para1 text-dark">
                Enable faculty and staff to acquire specific competencies that help improve their work performance, student
                learning outcomes coupled with excellence in research and administration.
            </p>

            <hr>

            <h2 class="headd2 fw-bold" style="color: #264273;">Objective:</h2>
            <ol class="para1 text-dark">
                <li>Improving the quality of education by providing training and development opportunities for teachers and
                    other academic staff.</li>
                <li>Promoting multiculturalism by facilitating collaboration between different departments and faculties.
                </li>
                <li>Training teachers by providing the latest pedagogical methods and techniques.</li>
                <li>Encouraging the development of innovative pedagogy for skilled-based education.</li>
                <li>Developing teachers as mentors for helping the students to meet life's challenges.</li>
                <li>Organizing in-service training programs for teachers and administrative staff.</li>
                <li>Facilitating reforms in each school by modifying management systems and practices.</li>
                <li>To ensure holistic development of teachers, staff, and students with the inculcation of ethics and human
                    values as enshrined in Indian culture and familiarizing them with the Indian Knowledge System (Bharatiya
                    Gyan Parampara).</li>
                <li>To ensure the role of faculty and staff as active participants in institution and nation building.</li>
                <li>To empower faculty members and staff as lifelong learners through continuous professional development.
                </li>
            </ol>

            <hr>

            <h2 class="headd2 fw-bold" style="color: #264273;">Expected Outcomes:</h2>
            <ol class="para1 text-dark">
                <li>The faculty members will get sensitized and oriented on NEP 2020 by imparting holistic education,
                    imbibing the ideals of Bhartiya-centric ethics and human values.</li>
                <li>Faculty, staff, and students will acquire the concept of the Indian Knowledge Systems (Bharatiya Gyan
                    Parampara), integrate it into the curriculum, and apply it in real life for the advancement and creation
                    of knowledge.</li>
                <li>The faculty, staff, and students will develop 21st-century skills and become reflective practitioners to
                    innovatively generate and apply ideas respecting biodiversity and sustainability.</li>
                <li>The faculty and students will conduct quality research to solve contemporary problems through innovation
                    and entrepreneurship.</li>
                <li>The faculty and students will develop the capacity to integrate ICT tools into the learning process and
                    become lifelong self-motivated learners.</li>
            </ol>

            <hr>

            <h2 class="headd2 fw-bold" style="color: #264273;">RCHRD Committee:</h2>
            <ol class="para1 text-dark">
                <li>Prof. Dr. Y. S. R. Murthy, Vice Chancellor - Chief Advisor</li>
                <li>Prof. (Dr.) Ladu Singh (Prof. Emeritus) - Advisor</li>
                <li>Prof. (Dr.) L.K. Nath (Dean, RSP) - Special Invitee</li>
                <li>Prof. Nikhil Chrungoo (Dean, RSLS) - Special Invitee</li>
                <li>Prof. Bijay Singh Mipun (Dean, DSW & RSEES) - Special Invitee</li>
                <li>Prof. Dr. George A.P. (Dean, RSB & RSC) - Chairman</li>
                <li>Prof. D.N. Singh (Registrar) - Member</li>
                <li>Prof. Ankur Ganguly (Dean Academic & Dean RSET & IT) - Member</li>
                <li>Prof. Anuradha Devi (Dean RSAPS & Director, IQAC) - Member</li>
                <li>Dr. Annu Kumari (Asst Prof, Zoology) - Member Secretary</li>
                <li>Prof. Ajit Kaushal (HOD, RSLA) - Member</li>
                <li>Prof. (Dr) Suresh Chandra Nayak (Dean i/c RSCOM) - Member</li>
                <li>Prof. (Dr) Saket Jeswani (Dean Consultancy, Prof. RSB) - Member</li>
                <li>Dr. Amlan Das (Assoc. Professor, RSBSC) - Member</li>
                <li>Dr. Ranjan Dutta Kalita (Assoc. Prof., RSBSC) - Member</li>
                <li>Prof (Dr.) Prince (Associate Professor, RSBAS) - Member</li>
                <li>Dr. Shankar Burman (Coordinator, IIC-RGU) - Member</li>
                <li>Dr. Ashok Kumar (Dy Director, RCCR) - Member</li>
                <li>Dr. Indrajit Dutta (Asst. Professor, RSTTM) - Member</li>
                <li>Dr. Mousmi Deka (Asst. Professor, RSFA) - Member</li>
                <li>Ms. Baishali Pathak (Asst. Professor, RSC) - Member</li>
                <li>Dr. Sujata Deb (Assoc. Prof, RSAPS) - Ex-officio Member</li>
            </ol>

            <hr>

            <h2 class="headd2 fw-bold" style="color: #264273;">Functions:</h2>
            <ol class="para1 text-dark">
                <li>Organise induction programmes for newly appointed faculty members.</li>
                <li>Organize FDP/refresher/orientation courses for the faculty.</li>
                <li>Conduct training programmes for staff on various administrative procedures including ICT in governance,
                    financial management and interpersonal relations.</li>
                <li>Assist in conducting Student Induction Programme.</li>
            </ol>

        </div>

    </div>
@endsection

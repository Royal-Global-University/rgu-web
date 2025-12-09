@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px; padding-top: 90px; position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                            style="color: #264273; font-weight: 700;">Examination <span
                                style="color: #FF9A1E; font-weight: 500;">Cell</span> </h2>
                        <div class="txaa-slide-down-1">
                            <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/examination/about/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                            The Examination Cell serves as a crucial administrative unit responsible for overseeing all aspects
                            related to assessments, examinations, and academic evaluations. With a commitment to maintaining the
                            integrity of the university's evaluation processes, the Examination Cell plays a pivotal role in
                            ensuring fair and accurate assessment of students' academic performance.
                        </p>
                        <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                            Comprising a team of experienced professionals, the Examination Cell meticulously plans,
                            coordinates, and executes various examination-related activities. From scheduling and conducting
                            regular semester examinations to organizing supplementary exams and re-evaluation processes, the
                            cell maintains a well-structured framework to manage the entire examination cycle efficiently.
                            Furthermore, the Examination Cell offers a supportive and responsive platform for addressing
                            students' queries and concerns related to examinations.
                        </p>

                    </div>
                </div>
            </div>
            <hr>

            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Quick <span style="color: #FF9A1E; font-weight: 500;">Links</span></h2>

                <div style="margin: 30px 0px 30px 0px;">
                    <section class="button-container"
                        style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
                        <a href="examinations.html" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            About Examination Cell
                        </a>
                        <a href="examinations-members.html" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Office of the COE
                        </a>
                        <a target="_blank" href="mobile-assets/examination/Examination Committee Existing Members01062024.pdf"
                            class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Examination Committee <i style="color: white; padding-left: 10px;" class="fa fa-download"></i>
                        </a>
                        <a target="_blank" href="mobile-assets/examination/Examination Regulation 2024.pdf" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Rules and Regulations <i style="color: white; padding-left: 10px;" class="fa fa-download"></i>
                        </a>
                        <a class="button para1"
                            style="text-decoration: none; background-color: #c4c4c4; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Announcements/Notifications
                        </a>


                        <div class="btn-group">
                            <button type="button"
                                style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;"
                                class="btn btn-secondary dropdown-toggle para1" data-bs-toggle="dropdown" aria-expanded="false">
                                Results
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="examinations-diploma.html"><button class="dropdown-item para1 fw-bold"
                                            style="color: #264273;" type="button">Diploma</button></a></li>
                                <li><a href="examinations-under-grad.html"><button class="dropdown-item para1 fw-bold"
                                            style="color: #264273;" type="button">Under-Graduate</button></a></li>
                                <li><a href="examinations-post-grad.html"><button class="dropdown-item para1 fw-bold"
                                            style="color: #264273;" type="button">Post-Graduate</button></a></li>
                                <li><a href="examinations-phd.html"><button class="dropdown-item para1 fw-bold"
                                            style="color: #264273;" type="button">Doctoral Course</button></a></li>
                            </ul>
                        </div>


                        <div class="btn-group">
                            <button type="button"
                                style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;"
                                class="btn btn-secondary dropdown-toggle para1" data-bs-toggle="dropdown" aria-expanded="false">
                                Forms and Applications
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a target="_blank"
                                        href="mobile-assets/examination/Application Format for issuing Transcript.pdf"><button
                                            class="dropdown-item para1 fw-bold" style="color: #264273;" type="button">Transcript
                                            <i style="color: #264273;" class="fa fa-download"></i></button></a></li>
                                <li><a target="_blank"
                                        href="mobile-assets/examination/Application Form for Provisional or Duplicate Gradesheet.pdf"><button
                                            class="dropdown-item para1 fw-bold" style="color: #264273;"
                                            type="button">Provisional/ Duplicate Grade Sheet <i style="color: #264273;"
                                                class="fa fa-download"></i></button></a></li>
                            </ul>
                        </div>


                        <a target="_blank" href="https://www.abc.gov.in/" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 400px; height: 70px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Academic Bank of Credit
                        </a>
                    </section>
                </div>
            </div>

        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <!--head image Section-->
        <section
            style="background-image: url(mobile-assets/examination/about/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                            <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                <img class="rounded" decoding="async" src="mobile-assets/examination/about/headimg.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700">Examination <span
                                style="color: #FF9A1E; font-weight: 500;">Cell</span> </h2>

                        <p style="color: #264273; text-align: justify;" class="para1">
                            The Examination Cell serves as a crucial administrative unit responsible for overseeing all aspects
                            related to assessments, examinations, and academic evaluations. With a commitment to maintaining the
                            integrity of the university's evaluation processes, the Examination Cell plays a pivotal role in
                            ensuring fair and accurate assessment of students' academic performance.
                        </p>
                        <p style="color: #264273; text-align: justify;" class="para1">
                            Comprising a team of experienced professionals, the Examination Cell meticulously plans,
                            coordinates, and executes various examination-related activities. From scheduling and conducting
                            regular semester examinations to organizing supplementary exams and re-evaluation processes, the
                            cell maintains a well-structured framework to manage the entire examination cycle efficiently.
                            Furthermore, the Examination Cell offers a supportive and responsive platform for addressing
                            students' queries and concerns related to examinations.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--head image Section-->

        <div class="container">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Quick <span style="color: #FF9A1E; font-weight: 500;">Links</span></h2>

            <div style="margin: 30px 0px 30px 0px;">
                <section class="row">

                    <div class="col-lg-4 pb-3">
                        <a target="_blank" href="timetable-of-odd-sem-2025" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Timetable of Odd sem-2025
                        </a>
                    </div>

                    <div class="col-lg-4 pb-3">
                        <a target="_blank" href="mobile-assets/pdf/result.pdf" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Odd Sem Regular Result
                        </a>
                    </div>

                    <div class="col-lg-4 pb-3">
                        <a href="examination-members" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Office of the COE
                        </a>
                    </div>
                    <div class="col-lg-4 pb-3">
                        <a target="_blank" href="mobile-assets/examination/Examination Committee Existing Members01062024.pdf"
                            class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Examination Committee <i style="color: white; padding-left: 10px;" class="fa fa-download"></i>
                        </a>
                    </div>

                    <div class="col-lg-4 pb-3">
                        <a target="_blank" href="mobile-assets/examination/Examination Regulation 2024.pdf" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Rules and Regulations <i style="color: white; padding-left: 10px;" class="fa fa-download"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 pb-3">
                        <a target="_blank" href="https://www.abc.gov.in/" class="button para1"
                            style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            Academic Bank of Credit
                        </a>
                    </div>

                    {{-- <div class="col-lg-4">

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle para1" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">
                                Results
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="examination-diploma"><button class="dropdown-item para1 fw-bold" style="color: #264273;"
                                        type="button">Diploma</button></a>
                                <a href="examination-under-graduate"><button class="dropdown-item para1 fw-bold" style="color: #264273;"
                                        type="button">Under-Graduate</button></a>
                                <a href="examination-post-graduate"><button class="dropdown-item para1 fw-bold" style="color: #264273;"
                                        type="button">Post-Graduate</button></a>
                                <a href="examination-phd"><button class="dropdown-item para1 fw-bold" style="color: #264273;"
                                        type="button">Doctoral
                                        Course</button></a>
                            </div>
                            </div>
                    </div> --}}
                    {{-- <div class="col-lg-4">

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle para1" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="text-decoration: none; background-color: #264273; color: white; border-radius: 5px; text-align: center; width: 300px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">
                                Forms and Applications
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a target="_blank" href="mobile-assets/examination/Application Format for issuing Transcript.pdf"><button
                                        class="dropdown-item para1 fw-bold" style="color: #264273;" type="button">Transcript <i style="color: #264273;"
                                            class="fa fa-download"></i></button></a>
                                            <a target="_blank" href="mobile-assets/examination/Application Form for Provisional or Duplicate Gradesheet.pdf"><button
                                                    class="dropdown-item para1 fw-bold" style="color: #264273;" type="button">Provisional/
                                                    Duplicate Grade Sheet <i style="color: #264273;" class="fa fa-download"></i></button></a>
                            </div>
                        </div>
                    </div> --}}

                </section>
            </div>
        </div>
    </div>
@endsection

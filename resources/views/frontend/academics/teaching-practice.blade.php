@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">

            <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mobile-headd1 kd-title-ani kd-split mb-4 text-center"
                                style="color: #264273; font-weight: 700;">Teaching <span
                                    style="color: #FF9A1E; font-weight: 500;">Practice</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/teaching-practice/headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                The Assam Royal Global University is upgrading its undergraduate programmes in line with NEP
                                2020. Higher education plays an extremely important role in promoting human and societal
                                well-being and in developing India as envisioned in its Constitution—a democratic, just,
                                socially conscious, cultured, and humane nation upholding liberty, equality, fraternity, and
                                justice for all. Higher education significantly contributes towards sustainable livelihoods and
                                the economic development of the nation.

                                <span id="moreText" class="collapse">
                                    A holistic and multidisciplinary education aims to develop all capacities of human
                                    beings—intellectual, aesthetic, social, physical, emotional, and moral—in an integrated
                                    manner. As India moves towards becoming a knowledge economy and society, more young Indians
                                    are likely to aspire for higher education. NEP aims at making higher education a
                                    multidisciplinary learning process with a flexible curriculum that allows students to take
                                    up creative subject combinations. The new curriculum of different programmes under The Assam
                                    Royal Global University will align with NEP 2020, making it more flexible,
                                    multidisciplinary, and holistic.
                                </span>
                            </p>
                            <button id="toggleBtn" class="btn btn-sm" type="button" data-bs-toggle="collapse"
                                data-bs-target="#moreText" aria-expanded="false" aria-controls="moreText"
                                style="background-color: #264273; color: #fff; border: none; padding: 8px 16px; border-radius: 5px; font-weight: 500; cursor: pointer;">
                                Read More
                            </button>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <img class="mt-3 mb-3 rounded" src="mobile-assets/teaching-practice/img1.png" alt="image">

                <h2 class="mobile-headd3 fw-bold" style="color: #264273;">Teaching and Learning Process involves <span
                        style="color: #FF9A1E;">classroom lectures as well as tutorials. </span>It includes:</h2>

                <ol class="mobile-para1" style="color: #264273;">
                    <li>Tutorials to have a closer interaction between the students and the teacher such that each student gets
                        individual attention.</li>
                    <li>Written assignments and projects submission by students for project-based learning.</li>
                    <li>Students to be motivated to discover the relevant concepts, take part in discussions, and ask questions.
                    </li>
                    <li>Homework/assignments to make their concept clear.</li>
                    <li>Quizzes and class tests.</li>
                    <li>PPT presentations, seminars, interactive sessions.</li>
                    <li>Co-curricular activities, etc.</li>
                    <li>Industrial tours or field visits, etc.</li>
                </ol>

            </div>

        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div
            style="background-image: url(mobile-assets/teaching-practice/bgg.svg); background-size: cover; height: 100vh; justify-content: center; align-items: center; display: flex;">
            <div class="row d-flex align-items-center p-5">

                <div class="col-lg-6">
                    <img style="border: 1px solid #264273; border-radius: 20px; width: 650px;"
                        src="mobile-assets/teaching-practice/headimg.png" alt="image">
                </div>

                <div class="col-lg-6" style="color: #264273; text-align: justify;">
                    <h2 class="headd1" style="color: #264273; font-weight: 700;">Teaching <span
                            style="color: #FF9A1E; font-weight: 500;">Practices</h2>
                    <p class="para1">
                        The Assam Royal Global University is upgrading its undergraduate programmes in the line of NEP,
                        2020. Higher education plays an extremely important role in promoting human and societal well-being
                        and in developing India as envisioned in its Constitution - a democratic, just, socially conscious,
                        cultured, and humane nation upholding liberty, equality, fraternity, and justice for all. Higher
                        education significantly contributes towards sustainable livelihoods and economic development of the
                        nation. A holistic and multidisciplinary education would aim to develop all capacities of human
                        beings - intellectual, aesthetic, social, physical, emotional, and moral in an integrated manner. As
                        India moves towards becoming a knowledge economy and society, more and more young Indians are likely
                        to aspire for higher education. NEP aims at making higher education a multidisciplinary learning
                        process. In other words, the curriculum will be flexible, it will allow students to take up creative
                        subject combinations. The new curriculum of different programmes under The Assam Royal Global
                        University will be in line of NEP, 2020 making it more flexible, multi-disciplinary and holistic.
                    </p>
                </div>

            </div>
        </div>

        <div style="background-image: url(mobile-assets/teaching-practice/bg.svg); background-size: cover;">
            <div class="row d-flex justify-content-center align-items-center p-5">
                <div class="col-lg-6" style="color: #264273; text-align: justify;">
                    <h2 class="headd3" style="color: #264273; font-weight: 700;">Teaching and Learning Process involves
                        classroom lectures as well as tutorials. <span style="color: #FF9A1E; font-weight: 500;">It
                            includes:</h2>

                    <ol class="para1" style="color: #264273;">
                        <li>Tutorials to have a closer interaction between the students and the teacher such that each
                            student gets individual attention.</li>
                        <li>Written assignments and projects submission by students for project-based learning.</li>
                        <li>Students to be motivated to discover the relevant concepts to take part in discussions and ask
                            questions.</li>
                        <li>Homework/assignments to make their concept clear.</li>
                        <li>Quizzes and class tests.</li>
                        <li>PPT presentations, Seminars, interactive sessions.</li>
                        <li>Co-curricular activity etc.</li>
                        <li>Industrial tours or field visits etc.</li>
                    </ol>

                </div>

                <div class="col-lg-6 text-center">
                    <img style="border-radius: 20px; width: 550px;" src="mobile-assets/teaching-practice/img1.png"
                        alt="image">
                </div>
            </div>
        </div>
    </div>
@endsection

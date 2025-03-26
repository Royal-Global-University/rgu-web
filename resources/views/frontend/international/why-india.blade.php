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
                                style="color: #264273; font-weight: 700;">Education in <span
                                    style="color: #FF9A1E; font-weight: 500;">India</span> </h2>
                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/intern-why-india/Headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <p class="mobile-para1 mt-4" style="color: #264273; text-align: justify;">
                                India has the second largest education system in the world with over 1000 universities and more
                                than 40000 degree colleges. The various privately run and government run universities in India
                                aim at providing quality education with the best possible infrastructure and some of them are
                                also at par with universities in western countries. The Indian education system is evolving
                                which gives students the space to grow and learn with a strong passion to pursue their dreams.
                                Furthermore, the Indian economy is one of the fastest growing economies in the world which makes
                                it a top destination for new businesses that are looking to hire foreign workers. Experts
                                predict India will be the third largest economy in the world by 2030.
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <h2 class="mobile-headd2 fw-bold pb-2 pt-4" style="color: #264273; font-weight: 800;">
                    Low cost of <span style="color: #FF9A1E; font-weight: 600;">Living</span>
                </h2>

                <img src="mobile-assets/intern-why-india/a.png" alt="">
                <img src="mobile-assets/intern-why-india/b.png" alt="">

                <p class="mobile-para1" style="color: #264273;">Studying in India allows students to have the all-round
                    experience of quality education they deserve, without having to drain their accounts. The low cost of living
                    and education in India is a major bargain for students from Africa and other lesser developed countries of
                    Southeast Asia to study in India. The average tuition fee for an Indian university is approximately USD
                    2,200-3,500 (however it may differ across different institutes) as compared to USD 39,000 in the United
                    States, USD 11,000 in the United Kingdom, and USD 23,000 in Australia.
                </p>

                <h2 class="mobile-headd2 fw-bold pb-2 pt-4" style="color: #264273; font-weight: 800;">
                    Culture and <span style="color: #FF9A1E; font-weight: 600;">Language</span>
                </h2>

                <img src="mobile-assets/intern-why-india/c.png" alt="">

                <p class="mobile-para1" style="color: #264273;">
                    Finally, India is synonymous with a land of diverse cultures and heritage. The country is composed of people
                    from all around the world. This gives students endless chances to interact and create long lasting bonds.
                    Considering all these benefits there is a huge flow of students from countries like Bangladesh, Nepal and
                    African countries for higher education in India.
                </p>

                <h2 class="mobile-headd2 fw-bold pb-2 pt-4" style="color: #264273; font-weight: 800;">
                    Tuition Fees <span style="color: #FF9A1E; font-weight: 600;">and Scholarship</span>
                </h2>

                <img src="mobile-assets/intern-why-india/d.png" alt="">

                <p class="mobile-para1" style="color: #264273;">
                    Both Indian and foreign students are required to pay their tuition fees. The tuition fees are fairly the
                    same for both foreign and Indian students. However, the university provides up to 100% scholarship to a
                    limited number of International Students.
                </p>
            </div>
        </div>
       </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!--head image Section-->
            <section
                style="background-image: url(mobile-assets/intern-why-india/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/intern-why-india/Headimg.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1 kd-title-ani kd-split-text" style="color: #264273; font-weight: 700;">Education
                                <span style="color: #FF9A1E; font-weight: 500;">in India</span> </h2>
                            <p class="para1" style="color: #264273;">India has the second largest education system in the world
                                with over 1000 universities and more than 40000 degree colleges. The various privately run and
                                government run universities in India aim at providing quality education with the best possible
                                infrastructure and some of them are also at par with universities in western countries. The
                                Indian education system is evolving which gives students the space to grow and learn with a
                                strong passion to pursue their dreams. Furthermore, the Indian economy is one of the fastest
                                growing economies in the world which makes it a top destination for new businesses that are
                                looking to hire foreign workers. Experts predict India will be the third largest economy in the
                                world by 2030.
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <!--head image Section-->

            <section
                style="background-image: url(mobile-assets/intern-why-india/bg.svg); background-size: cover; padding: 40px 0px;">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" style="color: #264273;">
                            <h2 class="headd2" style="color: #264273; font-weight: 700;">Low Cost of <span
                                    style="color: #FF9A1E; font-weight: 500;">Living</span>
                            </h2>

                            <p class="para1">Studying in India allows students to have the all-round experience of quality
                                education they deserve, without having to drain their accounts. The low cost of living and
                                education in India is a major bargain for students from Africa and other lesser developed
                                countries of Southeast Asia to study in India. The average tuition fee for an Indian university
                                is approximately USD 2,200-3,500 (however it may differ across different institutes) as compared
                                to USD 39,000 in the United States, USD 11,000 in the United Kingdom, and USD 23,000 in
                                Australia.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <img src="mobile-assets/intern-why-india/a.png" alt="">
                                <img src="mobile-assets/intern-why-india/b.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section style="padding: 40px 0px;">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div>
                                <img src="mobile-assets/intern-why-india/c.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6" style="color: #264273;">
                            <h2 class="headd2" style="color: #264273; font-weight: 700;">Culture <span
                                    style="color: #FF9A1E; font-weight: 500;">And Language</span>
                            </h2>

                            <p class="para1">
                                Finally, India is synonymous with a land of diverse cultures and heritage. The country is
                                composed of people from all around the world. This gives students endless chances to interact
                                and create long lasting bonds. Considering all these benefits there is a huge flow of students
                                from countries like Bangladesh, Nepal and African countries for higher education in India.
                            </p>
                        </div>
                    </div>
                </div>

            </section>

            <section style="padding: 40px 0px;">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" style="color: #264273;">
                            <h2 class="headd2" style="color: #264273; font-weight: 700;">Tuition Fees <span
                                    style="color: #FF9A1E; font-weight: 500;">And Scholarships</span>
                            </h2>

                            <p class="para1">
                                Both Indian and foreign students are required to pay their tuition fees. The tuition fees are
                                fairly the same for both foreign and Indian students. However, the university provides up to
                                100% scholarship to a limited number of International Students.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <img src="mobile-assets/intern-why-india/d.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section style="border-bottom: 4px solid #1f3b6f;">
                <div class="contact-section">

                    <div class="contact-icon">
                        <img style="width: 120px; height: 100%;" src="mobile-assets/intern-why-india/telephone-call.png"
                            alt="Phone Icon">
                    </div>

                    <div class="contact-info">
                        <div class="contact-title">Contact:</div>
                        <div class="contact-details">
                            Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs
                        </div>
                        <div class="contact-bold">Ph. no: +91 9864049818</div>
                        <div class="contact-bold">Email: gkanand@rgu.ac</div>
                    </div>

                </div>
            </section>
        </div>
@endsection

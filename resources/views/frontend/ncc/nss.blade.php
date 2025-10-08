@extends('frontend.master')
@section('content')
    <section>

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <section>
                <img src="nss/nss-banner-mob.png" alt="">
            </section>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <section>
                <img src="nss/nss-banner.png" alt="">
            </section>
        </div>


        <div class="container mt-4 mb-4">
            <h1 style="color: #27467A; text-align: center;" class="mobile-headd1">NSS Programmes at Royal Global
                University: An Overview
            </h1>

            <div class="row mt-2" style="display: flex; align-items: center; justify-content: center;">

                <div class="col-lg-6">

                    <p class="mobile-para1 text-dark mt-4" style="text-align: justify;">
                        Established in January 2022, the National Service Scheme (NSS) at Royal Global University has
                        organized
                        a diverse array of community-oriented programmes, primarily focused on village adoption
                        initiatives,
                        health promotion, education, and social awareness in adopted villages including Pamohi,
                        Deuchutal,
                        Lokhra, Tetelia, and Pub-Boragaon. These programmes emphasize volunteerism, skill-building, and
                        sustainable development. Health and wellness camps prioritize preventive healthcare, screenings,
                        and
                        awareness to enhance community well-being, including blood donation drives that collected
                        numerous units
                        at the RGU Campus, health checkup camps with free screenings in collaboration with SWAGAT
                        Hospital for
                        staff and students, and specialized awareness sessions on AIDS and substance abuse screening.
                        Awareness and education programmes sensitize communities to social, environmental, and digital
                        issues through
                        camps, quizzes, and workshops, such as media literacy and fake news awareness outreach at
                        Banikant
                        Memorial School, thematic sessions on road safety, digital literacy for women, and good
                        touch/bad touch,
                        along with nutrition and child development efforts like health and nutrition quizzes and
                        ICDS/MDM
                        awareness.
                    </p>

                </div>

                <div class="col-lg-6">
                    <img height="80%" src="nss/pic-1.jpg" alt="">
                </div>

            </div>


            <p class="mobile-para1 text-dark mt-4" style="text-align: justify;">
                Community outreach and development initiatives involve direct engagement for needs
                assessment, surveys, and empowerment in these adopted villages, encompassing participatory rural
                appraisals to map community resources, surveys and assessments including household and community health
                surveys, and career counselling and skill workshops at Lokhra MV School along with chocolate-making
                workshops. Educational and tutoring initiatives aim at youth and schoolchildren to foster learning and
                critical thinking, featuring tutoring programmes at LP School Deochutal, science outreach with
                interactive sessions at Tetelia and Physics demos at Amranga Barihat HS School, as well as artistic
                events like drawing competitions on community issues and poem recitation and quiz sessions.
                Environmental and cleanliness drives promote sustainability and hygiene in public spaces, including
                cleanliness drives at Lokhra and Deepor Beel and environmental awareness on water security and Jal
                Jeevan Mission along with sessions on plastic usage and pollution. Cultural and social support
                activities build rapport and provide aid to vulnerable groups, such as visits to old age homes with food
                and emotional support at Helping Hands and World Health Day events at Tetelia, alongside YUVA Samvad
                youth governance dialogues. Overall, these programmes have engaged over 500 participants and
                beneficiaries across campuses and villages, yielding impacts like improved health literacy, substantial
                blood donations, and enhanced community resilience, with collaborations across NSS units ensuring broad
                involvement and alignment with goals of social responsibility and inclusive growth.
            </p>

            <div class="mt-3">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/1.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/2.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/3.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/4.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/5.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/6.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/7.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/8.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/9.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/10.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/11.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/12.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/13.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/14.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/15.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/16.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/17.jpg" alt="">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <img src="nss/pics/18.jpg" alt="">
                    </div>

                </div>
            </div>


        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>


    </section>
@endsection

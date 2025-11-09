@extends('frontend.master')
@section('title', 'Curtain-raiser Workshops of Assam Physiocon 2025 held at Royal Global University')
@section('meta_description', 'Physiotherapist from AIIMS New Delhi presents evidence-based methodologies at RGU ')
@section('meta_keywords', 'Blog')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 30px;">
                Curtain-raiser Workshops of Assam Physiocon 2025 held at Royal Global University
            </h2>
            <h4 class="text-center text-dark">Physiotherapist from AIIMS New Delhi presents evidence-based methodologies at RGU</h4>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-5">
                    <img class=" rounded" src="/mobile-assets/media-corner/news59/21.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-5">
                    <img class=" rounded" src="/mobile-assets/media-corner/news59/22.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, November 7, 2025: </span>The Department of Physiotherapy, Royal School of Medical and Allied Sciences (RSMAS), under The Assam Royal Global University (RGU), successfully hosted two Pre-Conference Workshops today as a curtain-raiser to Assam Physiocon 2025—a prestigious national conference organized by the Assam Association of Physiotherapy from 8th to 9th November 2025. About 200 delegates, including faculty members, postgraduate students, and clinicians from reputed institutions across India, have participated in today’s event.
                <br><br>
                The two parallel workshops provided participants with hands-on experience in advanced manual therapy and neurorehabilitation techniques. The session on “Craniosacral Therapy” was led by Dr. K. Pearlson, Emeritus Professor, Founder–FIMT, and Director, Shree Saradha Academy, while Dr. Prabhat Ranjan, Physiotherapist, Department of Neurology, AIIMS, New Delhi, conducted a workshop on “Neurodevelopmental Technique in Hemiplegics.”
                <br><br>
                Focused on bridging theoretical insights with practical applications, both sessions reflected the conference theme — “Bridging Science and Practice: Healthy Ageing in a Digital World.”
                <br><br>
                Addressing the gathering, Dr. (Prof.) Abhijit Dutta, Organising Chairman of Assam Physiocon and Dean, RSMAS, underscored RGU’s commitment to promoting skill-based learning, clinical excellence, and digital innovation in allied health sciences. He noted that the pre-conference workshops serve as an invaluable platform for experiential learning and interdisciplinary collaboration in physiotherapy education and research.
                <br><br>
                Both Dr. Pearlson and Dr. Ranjan presented evidence-based methodologies essential for enhancing functional recovery in patients with neurological and musculoskeletal disorders. Participants engaged enthusiastically in case demonstrations, interactive discussions, and practical modules that significantly enriched their clinical expertise.
                <br><br>
            </p>
        </div>

    </section>
@endsection

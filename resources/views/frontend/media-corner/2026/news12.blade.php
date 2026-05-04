@extends('frontend.master')
@section('title', 'Royal Global University Faculty Honoured with Best Scientist Award')
@section('meta_keywords', 'Blog')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container mt-5" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 30px;">
                Royal Global University Faculty Honoured with Best Scientist Award
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/may/1.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/may/2.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/may/3.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>

            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, May 4, 2026: </span>
                Jebin Sultana, Assistant Professor and Coordinator in the Department of Food Science and Nutrition (Nutrition & Dietetics) at The Assam Royal Global University (RGU), has been conferred the prestigious Best Scientist Award in Food and Nutrition – 2026 at the 13th International Conference on Frontiers in Science and Technology for Sustainable Agricultural and Environmental Development (FSTSAED-2026).
                <br><br>
                The conference was jointly organized by Assam University, Silchar, and the Agro Environmental Development Society, and held from April 28 to 30, 2026, at Assam University.
                <br><br>
                Jebin Sultana received the award in recognition of her outstanding academic and research contributions in the field of Food Science and Nutrition. The honour was conferred following a rigorous evaluation process by an expert screening committee, acknowledging her impactful work and dedication to advancing knowledge in clinical nutrition.
                <br><br>
                As part of the conference, Ms. Sultana presented her research paper titled “Assessment of Nutritional Status among Patients with Chronic Kidney Disease in a Tertiary Hospital in Kamrup (M)”, co-authored with Dr. Priyanka Bhattacharyya and Dr. Dhrubajyoti Choudhury. The research was peer-reviewed and accepted for oral presentation and publication, highlighting critical insights into nutritional challenges faced by patients with chronic kidney disease.
                <br><br>
                The conference provided valuable interdisciplinary exposure, enriching knowledge in sustainable approaches to food and health sciences. It also facilitated meaningful networking opportunities with experts and researchers, paving the way for future academic collaborations and research publications.
                <br><br>
            </p>
        </div>

    </section>
@endsection

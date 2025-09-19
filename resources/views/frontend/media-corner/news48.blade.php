@extends('frontend.master')
@section('title', 'RGU NCC Cadets Shine at YAMS CATC-85 Camp')
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
                “RGU NCC Cadets Shine at YAMS CATC-85 Camp”
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-10">
                    <img class=" rounded" src="mobile-assets/media-corner/news48/1.jpg"
                        style=" width: 50%; border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, September 18, 2025: </span> NCC cadets of The Assam Royal Global University (RGU) have recently brought laurels to the institution by winning
                multiple awards at the YAMS CATC-85 camp held at the Central Training Institute, Panikhaiti. The camp, organized by the
                30 Assam Battalion NCC, witnessed the participation of around 700 cadets from across the North Eastern Region (NER),
                with all NCC battalions of Assam taking part.
                <br><br>
                Led by NCC Coordinator KM Sudha, five senior wing (SW) girl cadets from RGU showcased exemplary talent and dedication
                despite being part of a relatively new NCC unit. Their outstanding performances earned RGU the Best Institute Award for
                the second consecutive time, along with a rich medal haul across diverse events.
                <br><br>
                Awards won by RGU NCC cadets include: Volleyball (SW) – Gold (Girls’ team); Debate – Gold (Cdt. Agnes Newmai & Cdt.
                Leina Soram); Extempore Speech – Silver (Cdt. Bhamini Kakati); Best Cadet (SW) – Cdt. Agnes Newmai; and Best Institute –
                Royal Global University
                <br><br>
                The Yuva Aapda Mitra Scheme (YAMS) Camp is a disaster response and preparedness training program under the National
                Cadet Corps (NCC), aimed at equipping cadets with life-saving skills and fostering leadership in times of crisis.
                <br><br>
            </p>
        </div>

    </section>
@endsection

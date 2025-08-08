@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 32px;">
                RGU Students Gain Learning Exposure at INTI International University, Malaysia
                RGU Student Immersion Programme
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news31/1.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news31/2.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, August 8, 2025: </span> A group of enthusiastic students from the Commerce Department of The Assam Royal Global University (RGU) recently
                participated in an enriching Student Immersion Programme at INTI International University, Malaysia, held from 28th July
                to 3rd August 2025.
                <br><br>
                The delegation was led by Dr. Aruna Dev Rroy, Associate Professor & Head, Royal School of Commerce, and Associate Dean,
                Research and Development, RGU. Speaking about the programme, Dr. Rroy said, “The objective of this initiative is to
                provide our students with valuable international exposure, enabling them to broaden their perspectives and learn from
                global best practices. Our students attended insightful sessions conducted by eminent resource persons, gaining hands-on
                learning and cultural experiences.”
            </p>
            <p class="para1 text-dark">
                The inaugural session was conducted by Prof. Asokan Vasudevan, Director (Research & Development), Director of
                International Relations and Collaborations, and Director, Centre for Sustainable Business Innovation and CSR, INTI
                International University.
                <br><br>
                Throughout the week-long programme, students engaged in diverse sessions, including a Business Workshop, Language Class,
                and Music Class, among others. They also participated in interactive discussions, collaborative activities, and
                cross-cultural exchanges.
                <br><br>
                Adding a cultural touch to the closing ceremony, RGU student Arundhati Devi Choudhury performed an elegant Indian
                Classical dance, earning warm appreciation from the audience.
                <br><br>
                The programme also included educational tours to notable Malaysian landmarks such as Melaka, the iconic Petronas Twin
                Towers, Petaling Street, and the famous Batu Caves, providing students with an immersive experience of the country’s
                heritage and modernity.
                <br><br>
            </p>
        </div>

    </section>
@endsection

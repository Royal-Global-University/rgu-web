@extends('frontend.master')
@section('title', 'Health Screening Camp conducted at Chakardo Ayushman Arogya Mandir')
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
                Health Screening Camp conducted at Chakardo Ayushman Arogya Mandir
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/11/1.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/11/2.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/11/3.jpeg"
                        style=" border: 3px solid black; height: 350px; width: 100%;" alt="">
                </div>

            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, May 8, 2026: </span>
                A Comprehensive Health Screening Camp has been successfully organized today at Chakardo Ayushman Arogya
                Mandir near Deepor Beel in Pamohi here by the Royal School of Medical and Allied Sciences (RSMAS) and NSS
                Unit of The Assam Royal Global University (RGU) in collaboration with the Office of the Joint Director of
                Health Services, Kamrup (Amingaon) and Ayurvedic Medical Organisation, Assam.
                <br><br>
                The health camp was organized with the objective of promoting public health awareness and providing
                accessible healthcare services in rural areas. A total of 105 beneficiaries attended and received healthcare
                support during the camp. Senior citizens, women, children, and economically disadvantaged families
                particularly benefited from the initiative.
                <br><br>
                The camp offered various healthcare services including general medical screening, physiotherapy
                consultation, eye examination, laboratory investigations, nutritional counselling, maternal and child health
                guidance, and distribution of basic medicines. Doctors, faculty members, NSS volunteers, and students worked
                with dedication and compassion to provide quality healthcare services to the community.
                <br><br>
                The programme also created awareness regarding personal hygiene, balanced nutrition, preventive healthcare,
                lifestyle-related diseases, and the importance of regular health check-ups. The Village Headman and local
                community leaders expressed sincere appreciation to the organizing institutions and health authorities for
                undertaking such a meaningful community outreach initiative. They stated that such programmes play a vital
                role in strengthening rural healthcare services and increasing health awareness among the public.
                <br><br>
                Earlier, on 27th February 2026, another Comprehensive Community Health Checkup Camp was successfully
                organized by the Royal School of Medical and Allied Sciences along with RGU-NSS under the aegis of RGU. The
                camp was conducted at Deochutal L. P. School and benefited more than 100 members of the surrounding
                community. The organizers reaffirmed their commitment to continuing similar community welfare and healthcare
                awareness programmes in different parts of Assam in the future.
                <br><br>
            </p>
        </div>

    </section>
@endsection

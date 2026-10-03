@extends('frontend.master')
@section('title', '‘Royal Herald’ gives aspiring journalists a platform to find their voice: Dr P J Baruah')
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
                RGU, Indian Coast Guard Join Hands to Expand Educational Opportunities for Defence Families
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:5px">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <img class=" rounded" src="/mobile-assets/mou-12.jpeg"
                        style=" border: 3px solid black; height: 460px; width: 95%;" alt="">
                </div>
                <div class="col-lg-2"></div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold">GUWAHATI, October 1, 2026: </span>The Assam Royal Global University (RGU) has signed a
                Memorandum of Understanding (MoU) with the Indian Coast Guard, Headquarters, New Delhi, to provide
                educational support to the dependents and wards of defence personnel.
                <br><br>
                The MoU was signed in New Delhi today in the presence of senior officials of both organisations. RGU was
                represented by Dr. D. N. Singh, Registrar Academics, while the Indian Coast Guard was represented by DIG
                Narendra Singh, TM, Principal Director (Administration), DIG JS Malik, Director (Administration), Commandant
                Soniya Singh and other senior officials.
                <br><br>
                Under the agreement, RGU will extend two dedicated scholarship schemes — Royal Shaurya and Royal Suraksha —
                to dependents and wards of defence personnel, including serving personnel, ex-servicemen, personnel with
                disabilities and personnel who have died in harness.
                <br><br>
                The Royal Shaurya Scholarship will provide a 100 per cent tuition fee waiver to the families of martyrs and
                gallantry awardees. The Royal Suraksha Scholarship will provide a 50 per cent tuition fee concession to the
                wards of serving and retired defence personnel.
                <br><br>
                Speaking at the signing ceremony, Dr. D. N. Singh said the collaboration would provide greater access to
                higher education for the children and dependents of defence personnel and strengthen RGU’s initiatives in
                support of defence families.
                <br><br>
                The scholarships will be applicable to eligible candidates seeking admission to RGU’s undergraduate,
                postgraduate and doctoral programmes across disciplines, including Science, Engineering, Management and
                Commerce, Architecture, Pharmacy, Law, Humanities and Social Sciences, Fine Arts and Design, Sports, and
                Paramedical and Allied Health Sciences.
                <br><br>
            </p>
        </div>

    </section>
@endsection

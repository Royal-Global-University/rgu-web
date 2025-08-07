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
                RGU Student Awarded Funding Grant by CERN, Geneva
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news30/Zahid Mamud.jpg"
                        style=" width: 60%; border: 3px solid black; height: 60%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> Guwahati, August 6, 2025: </span> Zahid Mamud, an MSc Physics student at The Assam Royal Global University (RGU), has been awarded a prestigious funding
                grant by CERN—the European Organization for Nuclear Research, one of the world’s leading centres for scientific
                research. The grant will support his participation in an international training programme in Spain.
                <br><br>
                Established in 1954, CERN is headquartered in Meyrin, Switzerland, a western suburb of Geneva, located on the
                France-Switzerland border. It is an intergovernmental organization that operates the world's largest particle physics
                laboratory.
                <br><br>
                Zahid has been selected to attend the CAS Course on “Introduction to Accelerator Physics”, scheduled to be held in Santa
                Susanna, Spain, from 21st September to 4th October 2025. A former INSPRE Fellow, Zahid’s selection reflects his
                unwavering dedication, academic brilliance, and commitment to advancing in the field of physics.
                <br><br>
                Expressing his delight over this achievement, RGU Vice Chancellor Prof. AK Buragohain stated, “Zahid’s recognition by
                CERN is a proud moment for the entire university. It highlights the quality of our academic environment and the global
                potential of our students.”
                <br><br>
                This remarkable opportunity places Zahid among a select group of emerging physicists worldwide, contributing to the
                cutting edge of nuclear research.
                <br><br>
            </p>
        </div>

    </section>
@endsection

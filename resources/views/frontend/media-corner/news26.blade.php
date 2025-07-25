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
                Union Education Minister Dharmendra Pradhan to Grace RGU’s 5th Convocation
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news26/1.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, July 25, 2025: </span> In a significant development for The Assam Royal Global University (RGU), Dr. A. K. Pansari, Chancellor of RGU, met Shri
                Dharmendra Pradhan, Hon’ble Union Minister of Education, Government of India, in New Delhi yesterday.
                <br><br>
                During the meeting, Dr Pansari provided an update on the university’s progress, discussed upcoming projects, and
                extended an invitation to the Union Minister of Education to grace the Fifth Convocation of RGU to be held on October
                31, 2025. Shri Dharmendra Pradhan accepted the invitation to attend the Convocation of RGU as the Guest of Honour and
                expressed his full support and commitment to the university’s development.
                <br><br>
                In this regard, Dr A. K. Pansari stated, “This gracious consent by the Hon’ble Minister is a matter of great pride for
                the entire RGU fraternity. His esteemed presence at the convocation will not only bless the graduating students but also
                inspire the next generation of learners, educators, and nation-builders.” The Assam Royal Global University extends its
                heartfelt gratitude to Shri Dharmendra Pradhan ji for his kind acceptance and eagerly looks forward to welcoming him to
                the university campus, he added.
                <br><br>
            </p>
        </div>

    </section>
@endsection

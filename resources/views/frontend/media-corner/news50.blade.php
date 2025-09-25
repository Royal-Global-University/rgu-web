@extends('frontend.master')
@section('title', 'RGU to Honour Cultural Legend Zubeen Garg with Statue, Scholarships, and Book on his Works')
@section('meta_description', 'To immortalize the memory of cultural legend Zubeen Garg, The Assam Royal Global University (RGU) has announced a series
    of initiatives, including the installation of a life-size statue of the maestro, the institution of scholarships for
studies on his life and works, and the publication of a book featuring English translations of his selected songs.')
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
                RGU to Honour Cultural Legend Zubeen Garg with Statue, Scholarships, and Book on his Works
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <img class=" rounded" src="mobile-assets/media-corner/news50/Zubeen Garg.jpg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="mobile-assets/media-corner/news50/ZUBEEN.jpg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-2"></div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, September 24, 2025: </span>To immortalize the memory of cultural legend Zubeen Garg, The Assam Royal Global University (RGU) has announced a series
                of initiatives, including the installation of a life-size statue of the maestro, the institution of scholarships for
                studies on his life and works, and the publication of a book featuring English translations of his selected songs.
                <br><br>
                In this regard, Dr. A. K. Pansari, Chancellor of RGU, stated, “Our University is already in touch with reputed sculptors
                of the country to finalize the design of the statue. These initiatives are our humble tribute to the unparalleled
                contribution of Zubeen Garg to music and culture. RGU will also be announcing a few more programmes soon to preserve the
                memory of this icon for future generations.”
                <br><br>
                Prof. Amarjyoti Choudhury, Emeritus Professor and Chair at the Bhupen Hazarika Centre for Creativity at RGU, remarked,
                “It is very appropriate that the University has decided to initiate such measures for preserving the memory of Zubeen
                Garg in a befitting manner. His legacy transcends generations and will continue to inspire young minds.”
                <br><br>
                Prof. A. K. Buragohain, Vice Chancellor of RGU, further asserted, “Zubeen Garg was not only a musical genius but also a
                voice of the people. Through these initiatives, we aim to ensure that his philosophy, creativity, and art remain a
                source of learning and inspiration. This is a way of connecting our students with the cultural roots of Assam while
                opening them up to the global stage.”
                <br><br>
            </p>
        </div>

    </section>
@endsection

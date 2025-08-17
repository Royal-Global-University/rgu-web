@extends('frontend.master')
@section('title', 'Royal Global University Celebrates 79th Independence-Day')
@section('meta_description', 'Technological Sovereignty of India must be celebrated along with the Political Sovereignty: RGU Vice Chancellor')
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

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 32px;">
                Royal Global University Celebrates 79th Independence-Day
            </h2>
            <p class="text-center text-dark">Technological Sovereignty of India must be celebrated along with the Political Sovereignty: RGU Vice Chancellor</p>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news35/1.jpg"
                        style=" width: 100%; border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news35/2.jpg"
                        style=" width: 100%; border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, August 16, 2025: </span> Entire campus of The Assam Royal Global University (RGU) bloomed with the tri-colour and the spirit of all grew high
                with patriotic speeches, music and dance celebrating the 79th Independence Day of the country in a grand and exemplary
                manner.
                <br><br>
                The National Flag was unfurled at 8:55 am in the University campus by Dr AK Pansari, Chancellor, Shri A. K. Modi,
                Pro-Chancellor and Prof. AK Buragohain, Vice Chancellor of the University. The NCC cadets of RGU presented the guard of
                honour. Flag hoist was followed by the National Anthem and a patriotic speech delivered by the RGU Vice Chancellor. This
                was followed by the badge conferring ceremony of the NCC cadets by K. M. Sudha.
                <br><br>
                Addressing the large gathering, Prof. AK Buragohain said, “We must always remember the great sacrifices made by the
                Freedom Fighters to bring Independence for India. My tribute to those known and unknown millions of Indians who had laid
                down their lives for this.” Prof. Buragohain said that educational institutions have a great role in development of the
                country. “Today India is a technologically powerful country in the world—our technological sovereignty is something to
                be celebrated along with the political sovereignty”, he added.
            </p>
            <p class="para1 text-dark">
                Dr Florence Handique Rabha, Dr Saswati Bordoloi and Dr Annu Kumari recited patriotic poems while Prof. Abhijit Dutta
                presented a keyboard solo. The function ended with a friendly cricket match between faculty and administrative staff.
                <br><br>
            </p>
        </div>

    </section>
@endsection

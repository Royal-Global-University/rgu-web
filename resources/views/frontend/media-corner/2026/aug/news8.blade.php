@extends('frontend.master')
@section('title', 'IGNCA & Royal Global University Organise Exhibition on Partition Horrors')
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
                IGNCA & Royal Global University Organise Exhibition on Partition Horrors
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/aug/20/1.jpeg"
                        style=" border: 3px solid black; height: 400px; width: 100%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/aug/20/2.jpeg"
                        style=" border: 3px solid black; height: 400px; width: 95%;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/2026/aug/20/3.jpeg"
                        style=" border: 3px solid black; height: 400px; width: 100%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, August 19, 2026: </span>An exhibition titled “Memory, Loss & Resilience: 14
                August 1947”, has been organised by the Indira Gandhi National Centre for the Arts (IGNCA), Regional Centre,
                Guwahati, in collaboration with the Royal School of Languages, The Assam Royal Global University (RGU). The
                exhibition is currently underway at the GHI Block of the University, and will continue till 20 August 2026.
                <br><br>
                The exhibition was inaugurated on 14 August, following a panel discussion on “Divided Histories, Shared
                Memories: Reflecting on the Partition of India”. It is being organised in commemoration of Partition Horror
                Remembrance Day. The programme brought together scholars and academicians to reflect upon the tragic
                experiences of the Partition and its enduring memories.
                <br><br>
                The exhibition was inaugurated by Prof. Pradip Jyoti Mahanta and Prof. Krishna Barua, Professor and Adviser,
                RGU, in the presence of Dr. Sapam Ranabir Singh, Regional Director, IGNCA Regional Centre, Guwahati, and
                Prof. (Dr.) Indrani Singh Rai, Professor and Dean, Royal School of Languages, RGU.
                <br><br>
            </p>
        </div>

    </section>
@endsection

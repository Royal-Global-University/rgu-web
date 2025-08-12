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
                SYNTHESIS-2025: Innovative Creations Showcased by RGU Fashion Design & Technology Graduates
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news33/1.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news33/2.jpg"
                        style=" width: 100%; border: 3px solid black;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, August 12, 2025: </span> The Royal School of Fashion Design and Technology at the Assam Royal Global University (RGU) today presented
                SYNTHESIS-2025, a celebration of creativity, innovation, and the inspiring design journey of its graduating students
                from the batch of 2021–2025.
                <br><br>
                Featuring nine graduating designers from across the Northeast, the showcase presented a curated collection of 45
                ensembles, each reflecting in-depth research, exceptional craftsmanship, and thoughtful thematic interpretation. The
                runway came alive with nine celebrated fashion showstoppers, further adding glamour and inspiration to the event.
                <br><br>
                Ms. Bobbeeta Sharma, Independent Filmmaker and Media Professional, and Ms. Marami Medhi, accomplished Kathak exponent
                and Founder of Sur Sargam graced the event as the guests of honour and addressed the gathering.
            </p>
            <p class="para1 text-dark">
                Organised and executed by the dedicated faculty team of the Fashion Design Department—Akriti Mazumdar, Asif Iqbal Mazid,
                Gazala A. Goney, Ms. Sukriti Baruah, Ms. Aruniva Bhagawati, Ms. Pubika Michong, and Dr. Thangjam Roshini—SYNTHESIS-2025
                marked not only the culmination of academic learning but also the beginning of the graduates’ professional journeys into
                the dynamic world of fashion.
                <br><br>
                This year’s edition also paid a heartfelt tribute to late Assamese designer and entrepreneur Meghali Das, founder of
                Handloom Hues, renowned for her contributions to promoting Assamese handloom and empowering local artisans.
                <br><br>
                Speaking to the media, Angira Mimani, Associate Dean, Student Affairs, RGU said, “I am truly delighted to see our
                students drawing inspiration from the North East — celebrating its evolving identity and the way the region is embracing
                the fashion industry. This growth is opening remarkable opportunities for our young creative aspirants. Akriti Mazumdar,
                Assistant Professor at RSFT, RGU, said, “As a design mentor, today is an emotional and proud moment for me. I’ve seen
                our students pour their hard work, creativity, and dedication into every detail, transforming their ideas into ensembles
                that are not only artistically inspiring but also commercially viable”.
                <br><br>
                The event was graced by prominent personalities, including Dr. Sriparna B. Baruah (Advisor, NEHHDC), Ms. Nandinee Kalita
                (Lead Principal, Margdarshak Advisory), Shyamant Hazarika, Bidyut & Rakesh, Nandini Borkakoti, Bhavna Kalita, radio
                presenters RJ Aaliya, actor Bonkim Saikia, leading digital creator Ms. Nilakshi R. Sarma, and others.
                <br><br>
            </p>
        </div>

    </section>
@endsection

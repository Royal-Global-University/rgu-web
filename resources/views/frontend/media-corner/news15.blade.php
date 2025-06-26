@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container pt-5 pb-4 text-center">
            <img src="mobile-assets/media-corner/news15/head.jpg" alt="">
        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h1 class="headd2 fw-bold pb-3" style="color: #27467A;">
                Ahir Bhairav: Musical Gathering for Cultural Enrichment at RGU
            </h1>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, June 26, 2025: </span> The Assam Royal Global University (RGU) has hosted a vibrant and enriching cultural gathering titled “Ahir Bhairav”.
                Organized by the Office of Student Affairs yesterday in the university campus, the event served as a joyful celebration
                of music and movement, fostering creative expression and camaraderie among members of the university community.
                <br><br>
                The program began with a soul-stirring Bhajan and Ghazal performance by Prof. Rosey Brahma, Head of the Cultural
                Section, RGU. She was accompanied by Dibyajyoti Changmai, a renowned tabla player, and Parinita Goswami, a promising
                singer-composer and violinist. A graceful solo dance performance was made by Tanisha Mukherjee. The program’s
                heartwarming highlight was a lively group song performance, featuring a vibrant ensemble of performers: Dr Aneesa Borah,
                Monalisha Medhi, Dr Pranab J Sarma, Sanhati Adhikary, Rhituparna Das Borah, Syeda Parviz, Lakshyajit Deka and Sarangpani
                Kusre.
                <br><br>

            </p>

            <div class="container" style="padding: 20px;">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-lg-6">
                        <img src="mobile-assets/media-corner/news15/1.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="mobile-assets/media-corner/news15/3.jpg" alt="">
                    </div>
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                The program was further enriched by a special guest performance by Dr. Fatima Hazarika, a doctor from Morigaon Civil
                Hospital. Dr. Trishna Changkakati presented a solo classical performance that captivated the audience. This was followed
                by a melodious solo by Rikh Roy.
                <br><br>
                “Ahir Bhairav” was a showcase of musical and artistic flair by the faculty and staff of RGU. With the participation of
                both in-house talent and esteemed guest artists, the event successfully bridged tradition and creativity, leaving
                everyone enriched and inspired.
                <br><br>
            </p>
        </div>

    </section>
@endsection

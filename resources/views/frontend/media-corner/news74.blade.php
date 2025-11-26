@extends('frontend.master')
@section('title', 'Cyber Security Awareness Workshop held at RGU')
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
                Cyber Security Awareness Workshop held at RGU
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news74/1.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news74/2.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-4">
                    <img class=" rounded" src="/mobile-assets/media-corner/news74/3.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, November 26, 2025: </span>A Cyber Security Awareness Workshop was recently
                held at The Assam Royal Global University which was conducted by Dr. Robin Kumar Singh, IPS, Director of the
                Directorate of Forensic Science, Assam. The workshop was organised by the Department of Forensic Sciences on
                last Friday, 21st November 2025.
                <br><br>
                Addressing the students of Forensic Science at RGU, Dr. Singh stressed that cyber security is not merely a technical requirement but a social necessity, as individuals, institutions, and governments increasingly operate in a digital environment. He emphasized that lack of awareness is one of the primary reasons people fall victim to cybercrimes, making digital literacy essential for every citizen.
                <br><br>
                To illustrate the rising sophistication of cyber threats, Dr. Singh discussed real-world examples such as call merging scams, where fraudsters connect multiple calls to mislead and exploit victims, and email password hacking, which continues to be a common gateway for data theft and financial fraud. These examples demonstrated how attackers exploit human vulnerabilities and carelessness, often more than technological loopholes.
                <br><br>
                A significant part of his address focused on the positive and negative impacts of Artificial Intelligence (AI) in the cyber world. Dr. Singh urged participants to adopt safe online practices, remain vigilant, and promote cyber awareness within their communities.
                <br><br>
                The workshop featured another insightful and engaging talk delivered by Mr. Sai Krishna Kaveti, who addressed the growing significance of the internet in modern life and its implications for digital forensics and cyber safety.
                <br><br>
            </p>
        </div>

    </section>
@endsection

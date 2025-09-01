@extends('frontend.master')
@section('title', 'AICTE-VAANI Grant Sanctioned to RGU for Indian Knowledge Systems Conference')
@section('meta_description', 'IKS Conference to be conducted in Assamese language by RGU from 15th September')
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
                AICTE-VAANI Grant Sanctioned to RGU for Indian Knowledge Systems Conference
            </h2>

            <p class="text-center text-dark pt-3">IKS Conference to be conducted in Assamese language by RGU from 15th September</p>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-10">
                    <img class=" rounded" src="mobile-assets/rgu-blog/blog2.jpeg"
                        style=" width: 100%; border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, September 1, 2025: </span> The Assam Royal Global University (RGU) has been awarded the prestigious AICTE-VAANI (Vibrant Advocacy for Advancement
                and Nurturing of Indian Languages) Grant by the All India Council for Technical Education (AICTE) to organize a two-day
                national conference titled “Resilient Futures: Indian Knowledge Systems for Energy, Sustainability, and Climate Action”.
                The Conference will be held on 15th and 16th September 2025 at RGU and it will be conducted in the Assamese language,
                thereby aligning regional linguistic heritage with contemporary academic discourse.
                <br><br>
                Speaking in this context, Dr Saswati Bordoloi, Assistant Prof. IKS Cell at RGU and Coordinator of the AICTE VAANI
                Conference stated, “The AICTE-VAANI initiative is designed to strengthen and promote the use of Indian languages in
                higher education, research, and knowledge dissemination. In line with this vision, the upcoming conference at RGU will
                be conducted in the Assamese language”. Dr Bordoloi said that Registration for the conference is free of cost and it is
                open through the AICTE ATAL Academy Portal https://atalacademy.aicte-india.org/login (Application No: 2829909751, Host
                Institute: The Assam Royal Global University). Scholars and researchers interested in presenting their work may submit
                abstracts (maximum 300 words with 5 keywords) to aictevaanirgu@gmail.com by 6th September 2025, she added.
                <br><br>
                Prof. Amlan Das, Associate Dean, R&D, and Co-coordinator of the Conference expressed that the central objective of the
                conference is to deliberate on the role of Indian Knowledge Systems in addressing pressing global concerns such as
                energy transition, climate change, ecological sustainability, and cultural resilience. The event will bring together
                eminent scholars, researchers, academicians, and practitioners from across India to exchange perspectives on how
                traditional ecological wisdom can be integrated with modern science and innovations to build sustainable and
                climate-resilient futures.
            </p>
        </div>

    </section>
@endsection

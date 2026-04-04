@extends('frontend.master')
@section('title', 'Royal Global University partners with TCS to start industry-integrated programmes')
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
                Royal Global University partners with TCS to start industry-integrated programmes
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-8">
                    <img class=" rounded" src="/mobile-assets/rgu-blog/blog2.jpeg"
                        style=" border: 3px solid black; height: 450px; width: 95%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, April 4, 2026: </span>In a significant step towards strengthening industry–academia collaboration in Northeast India, The Assam Royal Global University (RGU) has signed a Memorandum of Understanding (MoU) with Tata Consultancy Services (TCS) to launch an industry-integrated undergraduate programme in Computer Science Engineering and Business Systems (CSEBS), aimed at creating future-ready professionals equipped with both technological expertise and business acumen.
                <br><br>
                The four-year programme, designed by TCS in collaboration with leading academic institutions across the country, focuses on blending core computer science fundamentals with business, management, and emerging digital technologies such as analytics, machine learning, cloud computing, artificial intelligence (AI), and Internet of Things (IoT). Under the collaboration, students will benefit from an industry-aligned curriculum, mentorship from TCS experts, real-world project exposure, internships, and continuous skill enhancement modules to bridge the gap between academia and industry.
                <br><br>
                In this context, Dr. A. K. Pansari, Chancellor of The Assam Royal Global University, said, “This partnership with TCS marks a transformative step in our commitment to delivering industry-relevant education. The future belongs to professionals who not only understand technology but can also align it with business needs. Through this programme, we aim to nurture such holistic, industry-ready talent from the Northeast who can compete globally.”
                <br><br>
                Dr. K. M. Suceedran, Head, Academic Alliances Group, TCS, said, “The CSEBS programme is designed to create a new generation of engineers who are not only strong in core computer science but also possess a deep understanding of business systems and real-world problem solving. Through this collaboration, we aim to bring industry-relevant curriculum, continuous mentoring, and experiential learning opportunities to students, ensuring they are ready to contribute effectively from day one in a rapidly evolving digital economy.”
                <br><br>
                The initiative is expected to significantly enhance employability outcomes by providing students with hands-on learning, exposure to real-world industry challenges, and opportunities to engage with cutting-edge technologies from early stages of their academic journey. 
                <br><br>
            </p>
        </div>

    </section>
@endsection

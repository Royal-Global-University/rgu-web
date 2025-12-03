@extends('frontend.master')
@section('title', 'National Conference on Frontiers in Modern Physics')
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
                National Conference on Frontiers in Modern Physics
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-10">
                    <img class=" rounded" src="/mobile-assets/rgu-blog/blog2.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, December 3, 2025: </span>The Department of Physics at The Assam Royal
                Global University (RGU) is organizing a National Conference on Frontiers in Modern Physics, Astrophysics and
                Cosmology from 8th to 10th January 2026.
                <br><br>
                Original unpublished work submitted to the conference will be published in a Book of Abstracts. The
                author(s) must prepare one page abstract as per the given template in website www.rgu.ac. Selected papers
                will be published as conference proceedings of Springer or Elsevier after peer review subject to additional
                publishing charge beyond registration fee. The link of registration is https://forms.gle/A8g6ebVnDKgmuKfaA.
                The last date of registration and abstract submission is 25th December 2025.
                <br><br>
                In this regard, Mr Maidul Islam, Assistant Professor, Department of Physics and Convenor of the Conference
                said, “In this Conference, eminent speakers from IITs, CSIR Institutes, Central Universities of all over
                India will come and share their recent research works. It will give a platform for communication among the
                scientists, research scholars and industry experts.”
                <br><br>
            </p>
        </div>

    </section>
@endsection

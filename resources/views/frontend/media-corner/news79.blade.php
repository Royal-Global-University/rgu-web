@extends('frontend.master')
@section('title', 'Prof. Mihir Kanti Chaudhuri Memorial Oration held at RGU')
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
                Prof. Mihir Kanti Chaudhuri Memorial Oration held at RGU
            </h2>

            <div class="container pt-5 pb-5 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="/mobile-assets/media-corner/news78/1.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="/mobile-assets/media-corner/news78/2.jpeg"
                        style=" border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, December 16, 2025: </span>The first Prof. Mihir Kanti Chaudhuri Memorial Oration was held at The Assam Royal Global University (RGU) today in remembrance of the eminent scientist and academician who guided RGU as its Chief Advisor and passed away on December 13, 2024.
                <br><br>
                The memorial oration was delivered by Dr. Binoy Kumar Saikia, Senior Principal Scientist at the Coal and Energy Division, CSIR–NEIST, Jorhat, and a Bhatnagar Prize awardee. During his insightful and in-depth presentation, Dr. Saikia paid rich tribute to Prof. Chaudhuri and underscored the critical importance of research in alternative and sustainable energy, highlighting emerging scientific pathways relevant to national development.
                <br><br>
                Addressing the gathering, Dr. A. K. Pansari, Chancellor, Royal Global University, remembered Prof. Chaudhuri as “a towering figure in academics and a guardian whose guidance was instrumental in shaping the growth of RGU.” He said that Prof. Chaudhuri remained deeply involved in mentoring the University till the very last day of his life and played a crucial role in strengthening its academic vision and research culture.
                <br><br>
                Earlier, while welcoming the audience, Prof. A. K. Buragohain, Vice Chancellor, Royal Global University, stated that RGU would continue to honour the legacy of Prof. Mihir Kanti Chaudhuri through this memorial oration in the years to come, ensuring that his ideals of academic excellence and scientific inquiry inspire future generations.
                <br><br>
                Prof. Mihir Kanti Chaudhuri, the first Bhatnagar Prize winner in Chemical Sciences from the Northeast India, had an illustrious academic career. He taught at North-Eastern Hill University (NEHU) before joining IIT Guwahati and later served two terms as Vice Chancellor of Tezpur University. His visionary leadership significantly elevated the standards of scientific research and academics at Tezpur University and left an enduring impact on the higher education landscape of the entire Northeast.
                <br><br>
                
            </p>
        </div>

    </section>
@endsection

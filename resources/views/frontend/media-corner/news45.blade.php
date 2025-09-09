@extends('frontend.master')
@section('title', 'Industry Stalwarts Ravi Kant & Rajesh Srivastava address session at RGU')
@section('meta_description', 'The Assam Royal Global University (RGU) today hosted an impactful Management Development Program titled “Leading from the Back to Achieve the Impossible”,')
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
                Industry Stalwarts Ravi Kant & Rajesh Srivastava address session at RGU
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news45/1.jpg"
                        style=" width: 100%; border: 3px solid black; height: 420px;" alt="">
                </div>
                <div class="col-lg-6">
                    <img class=" rounded" src="mobile-assets/media-corner/news45/2.jpg"
                        style=" width: 100%; border: 3px solid black; height: 420px;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, September 9, 2025: </span> The Assam Royal Global University (RGU) today hosted an impactful Management Development Program titled “Leading from
                the Back to Achieve the Impossible”, featuring distinguished industry leaders Mr. Ravi Kant, Former CEO & Vice Chairman
                of Tata Motors, and Mr. Rajesh Srivastava, Former President of JK Helene Curtis, Raymond Group.
                <br><br>
                Through engaging sessions, the eminent speakers emphasized the importance of cultivating an open mind, one that seeks
                new opportunities instead of dwelling on the past. The program brought together 30 participants representing leading
                industries of the North East, including Amalgamated Plantations, ITC Limited, Reliance Jio, Datamation, Topcem Cement,
                and Star Cement. Participants left with a renewed commitment to embracing this transformative leadership style.
                <br><br>
                The sessions highlighted the art of framing the right questions and the power of empathetic listening—understanding not
                just words, but also body language and tone. The opening session introduced participants to the idea of tapping into the
                subconscious mind to generate creative solutions.
            </p>
            <p class="para1 text-dark">
                A key takeaway for participants was the concept of “leading from the back” by empowering teams, fostering collective
                wisdom through dialogue, and focusing on problem-solving with fresh perspectives. The speakers also underlined the need
                to address the often-overlooked “ROI”—Risk of Inaction—which has caused many organizations to fail.
            </p>
        </div>

    </section>
@endsection

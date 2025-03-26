@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div>
        <div style="margin-top: 20px"
            class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
            data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
            <div class="elementor-widget-container">
                <div class="prthalign">
                    <h1 style="font-weight: 600" class="headd1 text-dark kd-title-ani kd-split-text">
                        Infrastructure
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <img width="100%" src="assets/img/infrastructure/headimg.jpg" />
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="headd2 fw-bold text-dark">
                RGU Campus - There's Nothing Like It
            </h2>
            <h3 class="headd3 text-dark">
                Explore the state-of-the-art infrastructure and vibrant spaces that define
                the RGU experience.
            </h3>
        </div>
        <div class="row pt-2 text-center" style="align-items: center">
            <div class="col-lg-3 animate__animated animate__fadeInDown">
                <a href="Learningspaces.html" class="btn text-white mt-2 p-3 rounded" style="
                font-size: 16px;
                font-weight: 600;
                background: #0575e6;
                border: none;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s, box-shadow 0.4s;
              " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Learning
                    Spaces</a>
            </div>
            <div class="col-lg-3 animate__animated animate__fadeInDown">
                <a href="sportingspaces.html" class="btn text-white mt-2 p-3 rounded" style="
                font-size: 16px;
                font-weight: 600;
                background: #0575e6;
                border: none;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s, box-shadow 0.4s;
              " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Sporting
                    Spaces</a>
            </div>
            <div class="col-lg-3 animate__animated animate__fadeInDown">
                <a href="hostel-life.html" class="btn text-white mt-2 p-3 rounded" style="
                font-size: 16px;
                font-weight: 600;
                background: #0575e6;
                border: none;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s, box-shadow 0.4s;
              " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Accommodation
                    Spaces</a>
            </div>
            <div class="col-lg-3 animate__animated animate__fadeInDown">
                <a href="Incubation.html" class="btn text-white mt-2 p-3 rounded" style="
                font-size: 16px;
                font-weight: 600;
                background: #0575e6;
                border: none;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s, box-shadow 0.4s;
              " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Recreation
                    Spaces</a>
            </div>
        </div>
        <div class="row mt-5 pb-3">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm animate__animated animate__backInLeft">
                    <img src="assets/img/infrastructure/infrastructure_new1.png" class="card-img-top rounded-top"
                        alt="Learning Spaces" />
                    <div class="card-body">
                        <h2 class="headd3 fw-bold text-dark font-weight-bold">
                            Learning Spaces
                        </h2>
                        <p class="para1 text-dark">
                            RGU provides dedicated and quiet spaces conducive to learning.
                            Spacious, air-conditioned classrooms are equipped with integrated
                            audio-visual teaching aids for dynamic and focused discussions.
                        </p>
                        <a href="Learningspaces.html" class="btn btn-primary text-white mt-2 p-2 rounded" style="
                    font-size: 16px;
                    font-weight: 600;
                    background: linear-gradient(90deg, #13569f, #3898ff);
                    border: none;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                  " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 8px rgba(0, 0, 0, 0.2)';"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.1)';">Know
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm animate__animated animate__backInRight">
                    <img src="assets/img/infrastructure/infrastructure_new5.jpg" class="card-img-top rounded-top"
                        alt="Sporting Spaces" />
                    <div class="card-body">
                        <h2 class="headd3 fw-bold text-dark font-weight-bold">
                            Sporting Spaces
                        </h2>
                        <p class="para1 text-dark">
                            RGU offers state-of-the-art sports facilities that promote physical
                            fitness and teamwork, fostering a spirit of excellence and holistic
                            development among students.
                        </p>
                        <a href="sportingspaces.html" class="btn btn-primary text-white mt-2 p-2 rounded" style="
                    font-size: 16px;
                    font-weight: 600;
                    background: linear-gradient(90deg, #13569f, #3898ff);
                    border: none;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                  " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 8px rgba(0, 0, 0, 0.2)';"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.1)';">Know
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <hr />

        <div class="row mt-4">
            <div class="col-md-6">
                <iframe class="p-2" width="630" height="400" src="https://www.youtube.com/embed/jS2XzudoZlk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen=""></iframe>
            </div>
            <div class="col-md-6">
                <iframe class="p-2" width="630" height="400" src="https://www.youtube.com/embed/bYDAXsbrQH8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen=""></iframe>
            </div>
        </div>
        <hr />

        <div class="row gy-4 mt-3">
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <img src="assets/img/infrastructure/infrastructure_new3.jpg" class="card-img-top rounded-top"
                        alt="Accommodation Spaces" />
                    <div class="card-body">
                        <h2 class="headd3 fw-bold text-dark font-weight-bold">
                            Accommodation Spaces
                        </h2>
                        <p class="para1 text-dark">
                            Experience a comfortable stay with vigilant security and caring
                            wardens, fostering a community of diverse and talented scholars in a
                            dynamic learning environment.
                        </p>
                        <a href="hostel-life.html" class="btn btn-primary text-white mt-2 p-2 rounded" style="
                    font-size: 16px;
                    font-weight: 600;
                    background: linear-gradient(90deg, #13569f, #3898ff);
                    border: none;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                  " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 8px rgba(0, 0, 0, 0.2)';"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.1)';">Know
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <img src="assets/img/infrastructure/infrastructure_new6.jpg" class="card-img-top rounded-top"
                        alt="Amenities" />
                    <div class="card-body">
                        <h2 class="headd3 fw-bold text-dark font-weight-bold">Amenities</h2>
                        <p class="para1 text-dark">
                            Spanning 30 acres, the WiFi-enabled RGU campus boasts modern
                            classrooms with smartboards, projectors, and state-of-the-art IT
                            infrastructure.
                        </p>
                        <a href="bank.html" class="btn btn-primary text-white mt-2 p-2 rounded" style="
                    font-size: 16px;
                    font-weight: 600;
                    background: linear-gradient(90deg, #13569f, #3898ff);
                    border: none;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                  " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 8px rgba(0, 0, 0, 0.2)';"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.1)';">Know
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="assets/img/infrastructure/infrastructure_new4.jpg" class="card-img-top rounded-top"
                        alt="Hangouts" />
                    <div class="card-body">
                        <h2 class="headd3 fw-bold text-dark font-weight-bold">Hangouts</h2>
                        <p class="para1 text-dark">
                            From a sprawling dining hall serving healthy vegetarian meals to
                            vibrant cafes, RGU provides an array of dining options for students
                            and staff.
                        </p>
                        <a href="hangout.html" class="btn btn-primary text-white mt-2 p-2 rounded" style="
                    font-size: 16px;
                    font-weight: 600;
                    background: linear-gradient(90deg, #13569f, #3898ff);
                    border: none;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                  " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 8px rgba(0, 0, 0, 0.2)';"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.1)';">Know
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About-->
</div><!-- #page -->
@endsection

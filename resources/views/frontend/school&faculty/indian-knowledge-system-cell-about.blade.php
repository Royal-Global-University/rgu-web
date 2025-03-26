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
        <div style="background-image: url(assets/img/facilitiesnewpics/bg2.svg);" class="pb-5">
            <div style="padding-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                            Indian Knowledge System (IKS) Cell</h1>
                    </div>
                </div>
            </div>


            <div class="container"
                style="text-align: start; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 class="headd3 text-white fw-bold p-3"
                    style="background-color: #144277; color: #ffffff; border-radius: 5px;">
                    ABOUT IKS</h3>
                <div class="panel-body bg-white" style="padding: 20px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark headd3 fw-bold mb-4"
                                style="border-bottom: 2px solid #4a90e2; padding-bottom: 5px;">Indian Knowledge System (IKS)
                            </h3>
                            <p class="para1 text-dark" style="line-height: 1.8;">The Indian Knowledge System (IKS), rooted in
                                the principle of <strong>"Gyan Vigyan Vimuktaye"</strong> (knowledge liberates), encompasses a
                                wide array of traditional knowledge domains from ancient India, such as science, art,
                                philosophy, health, geography, and economy, reflecting the holistic nature of India's
                                traditional knowledge.</p>
                            <p class="para1 text-dark" style="line-height: 1.8;">The Assam Royal Global University formally
                                established an IKS Cell on <strong>24th January 2024</strong>, consisting of members committed
                                to advancing this knowledge system.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-dark headd3 fw-bold mb-4"
                                style="border-bottom: 2px solid #4a90e2; padding-bottom: 5px;">Major Responsibilities of the
                                Indian Knowledge System Cell</h3>
                            <p class="para1 text-dark" style="line-height: 1.8;">The Indian Knowledge System (IKS) Cell at RGU
                                is committed to promoting education, research, and outreach activities to advance various
                                domains of the IKS.</p>

                            <p class="para1 text-dark"><strong>Major Responsibilities:</strong></p>
                            <ol class="list-style5 para1 fs-16 px-4" style="line-height: 1.8;">
                                <li class="para1 text-dark mb-2">Propagating the Indian Knowledge System (IKS), with a special
                                    focus on the traditional knowledge base of Northeastern India.</li>
                                <li class="para1 text-dark mb-2">Ensuring the smooth conduction of the IKS curriculum at RGU.
                                </li>
                                <li class="para1 text-dark mb-2">Promoting multidisciplinary research by integrating diverse
                                    aspects of traditional knowledge and facilitating undergraduate students to opt for
                                    IKS-based internships during their final semester.</li>
                                <li class="para1 text-dark mb-2">Organizing outreach programs to promote various domains of IKS.
                                </li>
                                <li class="para1 text-dark">Arranging workshops and distinguished lecture series for training
                                    and propagating IKS and traditional knowledge domains, featuring both in-house and external
                                    experts.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

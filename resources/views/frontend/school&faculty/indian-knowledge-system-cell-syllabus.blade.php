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
        <div style="background-image: url(assets/img/facilitiesnewpics/bg2.svg)" class="pb-5">
            <div style="padding-top: 50px"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">
                        <h1 style="font-weight: 600" class="headd1 text-dark kd-title-ani kd-split-text">
                            Indian Knowledge System (IKS) Cell
                        </h1>
                    </div>
                </div>
            </div>

            <div class="container" style="
                    text-align: start;
                    background-color: #f8f9fa;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                  ">
                <h3 class="headd3 fw-bold text-white p-3" style="
                      background-color: #144277;
                      color: #ffffff;
                      border-radius: 5px;
                    ">
                    SYLLABUS
                </h3>

                <div class="row p-2 fw-bold para1" style="color: #146dd3">
                    <a href="assets/img/IKS/AY 2023-24 IKS (Revised).pdf" target="_blank">
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 IKS
                        <i class="fa fa-download"></i>
                    </a>
                    <a href="assets/img/IKS/IKS Final Revised Syllabus- 2024-25.pdf" target="_blank">
                        <i class="fa fa-file-text px-2"></i> AY 2024-25 IKS
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

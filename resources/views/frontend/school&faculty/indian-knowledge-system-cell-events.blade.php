@extends('frontend.master')
@section('content')
    <div class="website">
        @include('frontend/components/aheader')
        <!--About Section-->
        <div style="background-image: url(mobile-assets/dept-indian-knowledge-sys/bg.svg)" class="pb-5">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-4"
                style="color: #27467A; font-weight: 900;">
                Indian Knowledge System (IKS) <span style="color: #FF9A1E; font-weight: 500;">Syllabus</span></h2>


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
        <!--End Section-->
    </div>

    <div class="mobile">
        @include('frontend/components/mobileheader')
        <!--About Section-->
        <div style="padding-top: 90px; position: relative;" class="container">
            <div style="background-image: url(mobile-assets/dept-indian-knowledge-sys/bg.svg)" class="pb-5">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Indian Knowledge System (IKS) <span style="color: #FF9A1E; font-weight: 500;">Syllabus</span></h2>


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

                    <div class="row p-2 fw-bold mobile-para1" style="color: #146dd3">
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
        <!--End Section-->
    </div>
@endsection

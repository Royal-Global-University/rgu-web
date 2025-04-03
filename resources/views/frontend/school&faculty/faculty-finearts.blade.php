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

                <!-- MAIN SECTION  -->
                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Fine Arts (RSFA)</span></h2>
    
        <div class="container">
                <div class="row"> 
                    <div class="col-lg-3 mb-4">         
                        <a>
                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                                <div class="p-3">
                                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/RSA.015.jpeg" class="img-fluid rounded"/>  
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Hari Prasad Agarwal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Principal, Royal School of Architecture and Dean, Royal School of
                                    Design/Royal School of Fashion Design & Technology/Royal School of Fine Arts</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/fine-art.002.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sumanta Dutta Chowdhury</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator and Assistant Dean, Admission, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/fine-art.001.jpeg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Mousumi Deka</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Academic Affairs, <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>

        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/Dr.SiddhantMedhi.jpg" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Siddhant Medhi</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/fine-art.004.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Kishan Bagdi</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Assistant Director, RCCR & Assistant Dean, Student Affairs,<br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/SehnazSaikia.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sehnaz Saikia</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Fine Arts/SumanSaha.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Suman Saha</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
</div>
        </div>
        <!-- MAIN SECTION  -->

    </div><!-- #page -->
@endsection

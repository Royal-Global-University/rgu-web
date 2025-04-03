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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Hotel Management (RSHM)</span></h2>
    
        <div class="container">
                <div class="row"> 
                    <div class="col-lg-3 mb-4">         
                        <a>
                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                                <div class="p-3">
                                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/Mahesh.jpg" class="img-fluid rounded"/>  
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Mahesh Chandra Uniyal</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel//Deans.016.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Soumitra Sen</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Senior Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/SyedSajidulIslamDP.jpg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Syed Sajidul Islam</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor & HOD, RSHM & RSTTM, <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>

        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/MrIndrajit.JPG" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Indrajit Dutta</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Associate Dean, Academic Affairs, RSHM / RSTTM, <br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/Mr.Piyush.JPG" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Piyush Gupta</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;"> Assistant Professor & Coordinator, RSHM,<br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/MsAnkita.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Ankita Saikia</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/Mr.Chandan.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Chandan Jyoti Bezborah</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Director, RCCR, (Hotel Management & Co-Coordinator, Minor & Interdisciplinary Courses), <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 580px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/Ms.DarshanaGogoi.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Darshana Gogoi</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/Ms.EkajollyDas.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Ekajolly Das</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/meghaphukan-rshm.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Megha Phukan</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/phiba.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Phibapynhun Pariong</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/ReeminaNarzaryRSHM.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Reemina Narzary</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Travel/MrSparsh.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Sparsh Tiwari</h5>
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

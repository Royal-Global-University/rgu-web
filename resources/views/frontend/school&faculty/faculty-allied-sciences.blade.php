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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Behavioral & Allied Sciences (RSBAS)</span></h2>
    
        <div class="container">
                <div class="row">
                <div class="col-lg-3 mb-4">         
                    <a>
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/PrinceCP.jpg" class="img-fluid rounded"/>  
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Prince C.P.</h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.006.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Queen Deka</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Coordinator & Assistant Director, RCCR <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.008.jpeg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Fariza Saidin</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Academic Affairs <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>

        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.007.jpeg" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Jwmwishree Boro</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.003.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Mahuya Deb</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean (Admission), <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/ShraddhaBasu.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Shraddha Basu</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.005.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Syeda Anjum Afreen</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.004.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Tahera Hoque Mazumdar</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>

<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/rgu-rsbas.001.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Jahnabi Mahanta</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
   </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/Jusmita-Devi.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Jusmita Devi</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
   </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/MahimaSinghi.jpg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Mahima Singhi</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
    </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/Dr-Himashree-Kalita.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Himashree Kalita</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faulty, <br> The Assam Royal Global University</p>
    </div>
    </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Behavioral & Allied Sciences/DrMonica-Chaudhry.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Monica Chaudhry</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faulty, <br> The Assam Royal Global University</p>
    </div>
    </div>
    </a>
</div>

            </div>
        </div>
        <!-- MAIN SECTION  -->
    </div><!-- #page -->
@endsection

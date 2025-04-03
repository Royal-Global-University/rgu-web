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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Design (RSD)</span></h2>
    
            <div class="container">
    
                <div class="row">
                
                <div class="col-lg-3 mb-4">         
                    <a>
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.015.jpeg" class="img-fluid rounded"/>  
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Hari Prasad Agarwal</h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Dean <br> The Assam Royal Global University</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.013.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Siddhartha Deb</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor and HOD, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.005.jpeg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Kasturi Borah</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>

        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.003.jpeg" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Bhola Saha</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Coordinator and Assistant Dean, Admission, <br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.001.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Amrita Sabhapandit</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.002.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Barsha Kunda</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.017.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Diksha Dutta</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Ar-Jagriti-Pathak.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Jagriti Pathak</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>

<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.004.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Jugal Kishore Devanath</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.014.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Mohua Moitri Mazumdar</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.006.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Pooja Singh</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.008.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Pratyasha Das</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.012.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Rishangi Bharadwaj</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
<a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/ArRani.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Ritu Rani</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
<a>
<div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
    <div class="p-3">
      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.009.jpeg" class="img-fluid rounded"/>  
    </div>
    <div class="card-body d-flex flex-column flex-grow-1">
      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Sanchari Kar</h5>
    <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
    </div>
</div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Sumaiyah.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ar. Sumaiyah Begum</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
    </a>
    </div>
    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF FASHION DESIGN
    </h2>
    <hr>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSFT.002.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Akriti Mazumdar</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSFT.004.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Kuwali Chowdhury</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSFT.005.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Pubika Michong</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSFT.001.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Asif Mazid</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSFT.003.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Gazala Anjum Goney</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/blank_407x407.jpg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Jitumani Das</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <hr>
            <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF COMMUNICATION DESIGN, GRAPHIC DESIGN & PRODUCT
                DESIGN
            </h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/RSA.015.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Hari Prasad
                            Agarwal</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Dean and Principal, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Susmita.png" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sushmita Nath</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Coordinator & Assistant Director, RCCR, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Zubin.png" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Zubin Islam</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Admission, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Mr.SanjayKrishna.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Sanjay Krishna</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Departmental Representative, Academic Affairs, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/Varsha.png" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Varsha Jain</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <hr>
            <h2 style="text-align: start;" class="headd2 text-dark">ADJUNCT FACULTY
            </h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/allhere/sattyake-rsd.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Sattyakee D'com
                            Bhuyan</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faculty, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- MAIN SECTION  -->

    </div><!-- #page -->
@endsection

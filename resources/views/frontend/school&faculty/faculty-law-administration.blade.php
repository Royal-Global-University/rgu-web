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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Law & Administration (RSLA)</span></h2>
    
        <div class="container">
                <div class="row"> 
                    <div class="col-lg-3 mb-4">         
                        <a>
                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/y-s-murthi-vicechancellor.png" class="img-fluid rounded"/>  
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R Murthy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice Chancellor & Professor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Deans.002.jpeg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Bhuban Ch Barooah</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor and Dean, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/ProfAjitKaushal_new.jpeg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Ajit Kaushal</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Professor and HOD, <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>
        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.002.jpeg" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Hiren Chandra Nath</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor,<br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Preeti-Gupta.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Preeti Gupta</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">
                Professor,<br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Dr.ThaneswarKalita.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Thaneswar Kalita</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">AJS, Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.003.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Anjuman Ara Begum</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/DrChandanaTalukdar.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Chandana Roy Talukdar</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/DrPranita.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Pranita Choudhury</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.011.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Daiamon Langstang</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
            Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Ms.HiyaDas.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Hiya Das</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Departmental Representative, Academic Affairs, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.007.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Indrani Kakati</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor and Assistant Dean, Admission, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.008.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Kankana Choudhury</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.004.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Kumar Roshan Dusad</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Ms.KuntalaRoychoudhury.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Kuntala Roychoudhury</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.005.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Pravek Medhi</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Ms.SaTaskeenRahman.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sayesta Taskeen Rahman</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/Mrs.ShrutiHazarikaBorpujari.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mrs. Shruti Hazarika Borpujari</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.010.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sumitra Devi</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Director, RCCR, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    </div>
    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">ADJUNCT FACULTY</h2>
    <hr>
    <div class="row">
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.006.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Vinod Kumar Chandak</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faculty, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/RSLA.013.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Adv. Rakhee Sirauthia Chowdhury</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faculty, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Law/MrSudhir-Mishra.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Sudhir Mishra</h5>
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

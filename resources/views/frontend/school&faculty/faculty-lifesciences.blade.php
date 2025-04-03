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
            Royal School of <span style="color: #FF9A1E; font-weight: 500;">Life Sciences (RSLSC)</span></h2>
    
        <div class="container">
                <div class="row justify-content-center"> 
                    <div class="col-lg-3 mb-4">         
                        <a>
                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Deans.007.jpeg" class="img-fluid rounded"/>  
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Nikhil Kumar Chrungoo</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Dean, Royal School of Life Sciences (RSLSC)</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-3 mb-4">
                    <a>
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Bandana.jpg" class="img-fluid rounded"/>  
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Bandana Nabis Das</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor & Deputy Director IQAC, <br> The Assam Royal Global University</p>
                        </div>
                    </div>
                    </a>
            </div>

            <div class="col-lg-3 mb-4">
                <a>
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.006.jpeg" class="img-fluid rounded"/>  
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Dandadhar Borah</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal Global University</p>
                    </div>
                </div>
                </a>
        </div>
        <div class="col-lg-3 mb-4">
            <a>
            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.005.jpeg" class="img-fluid rounded"/>  
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Mina Ram Nath</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Professor,<br> The Assam Royal Global University</p>
                </div>
            </div>
            </a>
    </div>

    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Dr.UpasanaChhetry.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Upasna Chettry</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">
                Assistant Professor & Coordinator,<br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.003.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Anushree Baruah</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Admission Cell, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.001.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Manalee Paul</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Pratikshyas-rslsc.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Pratikshya Borah</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Assistant Director, RCCR, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Raghuvar.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Raghuvar Tiwary</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Upashnanew1.jpg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Upashna Chettri</h5>
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
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Dr-Kiran-Gogoi.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Kiran Gogoi</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faculty, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
</div>
<hr>
<h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF ZOOLOGY</h2>
<hr>
<div class="row">
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.015.png" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr) Jashodeb Arjun</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.010.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Susmita Dey</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Associate Professor, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.008.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Dharmeswar Barhoi</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
<div class="col-lg-3 mb-4">
    <a>
    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
        <div class="p-3">
          <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/AbeshChakraborty.jpeg" class="img-fluid rounded"/>  
        </div>
        <div class="card-body d-flex flex-column flex-grow-1">
          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Abesh Chakraborty</h5>
        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Academic Affairs, RSLSC, <br> The Assam Royal Global University</p>
        </div>
    </div>
</a>
</div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.013.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Annu Kumari</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/ParimalChandra.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Parimal Chandra Ray</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Assistant Dean, Admission Cell, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.014.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Sangeeta Biswas </h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/TrishaRajguru.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Trisha Rajguru</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Assistant Director, RCCR, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.011.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Utsab Singha</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/RSLSC.012.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Anurudha Chakraborty</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
      </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Dr-Mridusmita-Datta.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Mridusmita Datta</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Adjunct Faculty, <br> The Assam Royal Global University</p>
            </div>
        </div>
      </a>
    </div>
    </div>
    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF FORENSIC SCIENCE</h2>
    <hr>
    <div class="row">
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/keshav-kumar.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Keshav Kumar</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Distinguished Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Dr.Pundarikaksha.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Pundarikaksha Das</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, Assistant Dean, Admission Cell, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/sthiti-porna-dutta.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Sthiti Porna Dutta</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Assistant Dean, Admission & Assistant Dean, Student Affairs, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/BenexBabuPhoto.JPG" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Benex K Babu</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/Ms.Harshita.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Harshita Shekhawat</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/MsMeghnaBordoloi.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Meghna Bordoloi</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    </div>
    <hr>
    <h2 style="text-align: start;" class="headd2 text-dark">DEPARTMENT OF FORESTRY</h2>
    <hr>
    <div class="row">
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/arvind-madhav.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. Arvind Madhav Singh</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Advisor & Visiting Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/PallabiBorahPhoto.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Ms. Pallabi Borah</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor & Coordinator, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/DrDemsai.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Demsai Reang</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/PaulLalremsang.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Paul Lalremsang</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/suravi-kalita.jpg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Suravi Kalita</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, <br> The Assam Royal Global University</p>
            </div>
        </div>
    </a>
    </div>
    <div class="col-lg-3 mb-4">
        <a>
        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="assets/img/Faculty/Life Sciences/PushkaBagchie.jpeg" class="img-fluid rounded"/>  
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Mr. Pushkal Bagchie</h5>
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

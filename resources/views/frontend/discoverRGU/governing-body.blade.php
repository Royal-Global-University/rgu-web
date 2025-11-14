@extends('frontend.master')
@push('styles')
        <style>
            .card {
    position: relative;
    background: white;
    border-radius: 10px;

    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    }

    .card::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 40px; /* Adjust size as needed */
    height: 40px;
    background: #E8A015; /* Yellow color */
    clip-path: polygon(100% 0, 0 100%, 100% 100%);
    }
        </style>
@endpush
@section('title', 'RGU Governing Body: Meet Chancellor Dr. A.K. Pansari & Chairman')
@section('meta_description', 'The official Governing Body of Royal Global University. View profiles for Dr. A.K. Pansari (Chancellor), Sri Ranjit Barthakur (Chairman), and all Foundation Members. Check Leadership!')
@section('meta_keywords', 'Governing Body')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('https://media.rgu.ac/governing-body/bg.svg'); background-size: cover; padding-top: 90px; position: relative;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4" style="color: #27467A; font-weight: 900;">
            Governing <span style="color: #FF9A1E; font-weight: 500;">Body</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">

        <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); ">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/ashok-kumar-pansari.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Dr. A.K. Pansari</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Chancellor, <br> The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairman</p>
                    </div>
                </div>
        </div>

         <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/ranjit-borthakur.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Ranjit Barthakur
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara Foundation, and Chairperson, Royal Rajasthan Foundation</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Advisor, Governing Body</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/anil-kumar-modi.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Anil Kumar Modi</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, <br>
                    The Assam Royal Global University</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/Subramanian-Ramadorai.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Subramanian Ramadorai</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Former CEO & MD of Tata Consultancy Services and Former Chairperson of NSDC and NSDA</p>

              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
            </div>
        </div>
        </div>

         {{-- <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/5.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The Assam Royal Global University</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div> --}}

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column"
                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                    <img style="height: 290px; width: 100%;"
                        src="mobile-assets/governing-body/ak-buragohain.png"
                        class="img-fluid rounded" />
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) A.K. Buragohain
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">
                        Vice-Chancellor (Interim), The Assam Royal Global University; Former Chancellor, Girijananda Chowdhury
                        University; Former Vice-Chancellor, Dibrugarh University
                    </p>

                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>



        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/ankur-pansari.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Ankur Pansari
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President, <br>
                    Gyan Sagar Foundation</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column"
                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                    <img style="height: 290px; width: 100%;"
                        src="mobile-assets/governing-body/angshuman-bora.png"
                        class="img-fluid rounded" />
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 700; color: #27467A; " class="card-title headd2 pb-2">Sr. Adv. Angshuman Bora</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3; ">Sr. Advocate, <br> Gauhati High Court Guwahati
                    </p>

                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>  </div>


        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/sp-singh.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr) S. P. Singh
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">
                  Director General (Vice Chancellor) <br> Kaushalya The Skill University, Ahmedabad
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

          <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/Harsha.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Ms. Harsha Pansari
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">
                  Member of Gyan Sagar Foundation
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/Sikha.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Ms. Sikha Modi Pansari
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">
    Member of Gyan Sagar Foundation
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/12.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">
                  Registrar – Administration
                  Director IQAC and Dean RSET & RSIT
                  The Assam Royal Global University, Guwahati
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member Secretary</p>
                </div>
            </div>
        </div>


                </div>

            </div>
    </section>
    </div>

    <div class="website">
    <!--Start Header-->
    @include('frontend/components/aheader')
    <!--End Header-->

    <section style="background-image: url(https://media.rgu.ac/governing-body/bg.svg); background-size: cover;">

    <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-5" style="color: #27467A; font-weight: 900;">
    Governing <span style="color: #FF9A1E; font-weight: 500;">Body</span></h2>

    <div style="padding: 20px 80px;">

      <div class="row" style="display: flex; align-items: center; justify-content: center; gap: 230px;">
        <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/ashok-kumar-pansari.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Dr. A.K. Pansari</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Chancellor, <br> The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairman</p>
                    </div>
                </div>
        </div>

         <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/ranjit-borthakur.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Ranjit Barthakur
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara Foundation, and Chairperson, Royal Rajasthan Foundation</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Advisor, Governing Body</p>
                </div>
            </div>
        </div>
      </div>

      <div class="row pt-3" style="display: flex; align-items: center; justify-content: center; gap: 230px;">
       <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/anil-kumar-modi.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Anil Kumar Modi</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, <br>
                    The Assam Royal Global University</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/Subramanian-Ramadorai.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Subramanian Ramadorai</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3;">Former CEO & MD of Tata Consultancy Services and Former Chairperson of NSDC and NSDA</p>

              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
            </div>
        </div>
        </div>
      </div>

        <div class="row pt-3" style="display: flex; align-items: center; justify-content: center; gap: 230px;">

        {{-- <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/5.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The Assam Royal Global University</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div> --}}

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column"
                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                <div class="p-3">
                    <img style="height: 290px; width: 100%;"
                        src="mobile-assets/governing-body/ak-buragohain.png"
                        class="img-fluid rounded" />
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) A.K. Buragohain
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">
                        Vice-Chancellor (Interim), The Assam Royal Global University; Former Chancellor, Girijananda Chowdhury
                        University; Former Vice-Chancellor, Dibrugarh University
                    </p>

                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column"
                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 560px;">
                <div class="p-3">
                    <img style="height: 290px; width: 100%;"
                        src="mobile-assets/governing-body/ankur-pansari.png"
                        class="img-fluid rounded" />
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Sri Ankur Pansari
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice-President, <br>
                        Gyan Sagar Foundation</p>

                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>



        </div>

        <div class="row pt-3" style="display: flex; align-items: center; justify-content: center; gap: 230px;">

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column"
                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                    <div class="p-3">
                        <img style="height: 290px; width: 100%;"
                            src="mobile-assets/governing-body/angshuman-bora.png"
                            class="img-fluid rounded" />
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 style="font-weight: 700; color: #27467A; " class="card-title headd2 pb-2">Sr. Adv. Angshuman Bora</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3; ">Sr. Advocate, <br> Gauhati High Court Guwahati
                        </p>

                        <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                    <div class="p-3">
                    <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/sp-singh.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr) S. P. Singh
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">
                    Director General (Vice Chancellor) <br> Kaushalya The Skill University, Ahmedabad
                    </p>

                    <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row pt-3" style="display: flex; align-items: center; justify-content: center; gap: 70px;">

          <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/Harsha.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Ms. Harsha Pansari
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">
                  Member of Gyan Sagar Foundation
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/Sikha.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Ms. Sikha Modi Pansari
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">
    Member of Gyan Sagar Foundation
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="https://media.rgu.ac/governing-body/12.png" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 700; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi
                </h5>
                <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 15px;">
                  Registrar – Administration
                  Director IQAC and Dean RSET & RSIT
                  The Assam Royal Global University, Guwahati
                </p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member Secretary</p>
                </div>
            </div>
        </div>

        </div>


      </div>

    </section>
    </div>
@endsection

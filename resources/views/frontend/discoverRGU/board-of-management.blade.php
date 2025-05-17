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
            width: 40px;
            /* Adjust size as needed */
            height: 40px;
            background: #E8A015;
            /* Yellow color */
            clip-path: polygon(100% 0, 0 100%, 100% 100%);
        }
    </style>
@endpush
@section('title', 'Board of Management : The Assam Royal Global University')
@section('meta_description', 'Meet the powerhouse behind Royal Global University strategic vision and operational excellence - our Board of
Management.')
@section('meta_keywords', 'Board of Management')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <section style="background-image: url('https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/bg.svg');">
                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4" style="color: #27467A; font-weight: 900;">
                Board of <span style="color: #FF9A1E; font-weight: 500;">Management</span></h2>

            <div style="padding: 20px 30px;">

                <div class="row">

               <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/1.jpg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy</h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairperson</p>
                            </div>
                        </div>
                </div>

                 <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/3.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Ankur Pansari</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice President, GSF & Member Governing Body<br>
                        The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/akb.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Alak Kumar Buragohain</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Chairperson Academics,<br>
                        The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/gautam-barua.jpg" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Gautam Barua</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Former Director of Indian Institute of Technology (IIT) Guwahati<br>
                        </p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/2.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr) Pradeep K. Jain</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">
                            Professor, Dept of Business Administration, Gauhati University
                        </p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/5.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri R. S. Joshi
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Former Chairman, FINER, CMD, Buildworth Real Estate, Guwahati</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/6.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) George AP
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Dean, RSB & RSC, <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Angira Mimani
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;"> Associate Professor, RSB and Associate Dean, Student Affairs, The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof (Dr) Samip Baruah
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;"> Professor, Royal School of Business, <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Abhijit Dutta
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;"> Dean, Royal School of Medical Health Sciences <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/10.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Jugal Kishore Bhattacherjee
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Dept of Economics, RSHSS <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/diganta-munshi.jpeg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi
                        </h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Registrar - Administration <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Registrar</p>
                        </div>
                    </div>
                </div>

                </div>

            </div>

        </section>
        </div>
    </div>

        <div class="website">
        <!--Start Header-->
            @include('frontend/components/aheader')
        <!--End Header-->

        <section style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Board of <span style="color: #FF9A1E; font-weight: 500;">Management</span></h2>

                <div style="padding: 20px 80px;">

                    <div class="row">

                    <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                                <div class="p-3">
                                  <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/1.jpg" class="img-fluid rounded"/>
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy</h5>
                                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-Chancellor, <br> The Assam Royal Global University</p>

                                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairperson</p>
                                </div>
                            </div>
                    </div>

                     <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/3.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri Ankur Pansari</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Executive Vice President, GSF & Member Governing Body<br>
                            The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/akb.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Alak Kumar Buragohain</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Chairperson Academics,<br>
                            The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 540px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/gautam-barua.jpg" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. Gautam Barua</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Former Director of Indian Institute of Technology (IIT) Guwahati<br>
                            </p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/2.jpg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr) Pradeep K. Jain</h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">
                                Professor, Dept of Business Administration, Gauhati University
                            </p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/5.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Sri R. S. Joshi
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Former Chairman, FINER, CMD, Buildworth Real Estate, Guwahati</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/6.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) George AP
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Dean, RSB & RSC, <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 520px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Ms. Angira Mimani
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;"> Associate Professor, RSB and Associate Dean, Student Affairs, The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof (Dr) Samip Baruah
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;"> Professor, Royal School of Business, <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/8.png" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Abhijit Dutta
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;"> Dean, Royal School of Medical Health Sciences <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/10.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr. Jugal Kishore Bhattacherjee
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant Professor, Dept of Economics, RSHSS <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                            <div class="p-3">
                              <img style="height: 290px; width: 100%;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/diganta-munshi.jpeg" class="img-fluid rounded"/>
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                              <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr. Diganta Munshi
                            </h5>
                            <p class="para1" style="color: #27467A; line-height: 1.3;">Registrar - Administration <br> The Assam Royal Global University</p>

                              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Registrar</p>
                            </div>
                        </div>
                    </div>

                    </div>

                </div>

            </section>
    </div>
@endsection

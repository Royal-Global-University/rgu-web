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
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="position: relative; padding-top: 80px;">
            <section style="background-image: url('mobile-assets/governing-body/bg.svg'); background-size: cover;">
                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                    style="color: #27467A; font-weight: 900;">
                    Governing <span style="color: #FF9A1E; font-weight: 500;">Body</span></h2>

                <div style="padding: 20px 30px;">

                    <div class="row">

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/1.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr. A.K.
                                        Pansari</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Chancellor, <br> The Assam
                                        Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Chairman</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/2.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri Anil
                                        Kumar Modi</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, <br>
                                        The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/3.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Y.S.R. Murthy</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Vice Chancellor, <br>
                                        The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/4.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A; font-size: 20px;"
                                        class="card-title mobile-headd2 pb-2">Prof. (Dr.) A.K. Buragohain</h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3; font-size: 16px;">
                                        Chairperson Academic,
                                        The Assam Royal Global University; Former Chancellor, Girijananda Chowdhury University;
                                        Former Vice-Chancellor, Dibrugarh University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/5.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Adv.
                                        Angshuman Bora
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Sr. Advocate, <br>
                                        Gauhati High Court Guwahati</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/6.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri
                                        Ankur Pansari
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Vice-President, <br>
                                        Gyan Sagar Foundation</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/7.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Prof.
                                        (Dr.) Pradeep K. Jain
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Professor, <br>
                                        Deptt. of Business Administration, Gauhati University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/8.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">CA Sikha
                                        M. Pansari
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Member, <br>
                                        Gyan Sagar Foundation</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/9.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Dr. Dip
                                        Narayain Singh
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Registrar, <br>
                                        The Assam Royal Global University</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Member Secretary</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">

                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 300px; width: 100%;" src="mobile-assets/governing-body/10.jpeg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Sri
                                        Ranjit Barthakur
                                    </h5>
                                    <p class="mobile-para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara
                                        Foundation, and Chairperson, Royal Rajasthan Foundation</p>

                                    <p class="card-text mobile-para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">
                                        Advisor</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

        </div>
    </div>

        <div class="website">
    <!--Start Header-->
            @include('frontend/components/aheader')
    <!--End Header-->

    <section style="background-image: url(mobile-assets/governing-body/bg.svg); background-size: cover;">

    <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
        Governing <span style="color: #FF9A1E; font-weight: 500;">Body</span></h2>

        <div style="padding: 20px 80px;">

            <div class="row">

            <div class="col-lg-3 mb-4">

                    <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                        <div class="p-3">
                          <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/1.png" class="img-fluid rounded"/>
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                          <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. A.K. Pansari</h5>
                        <p class="para1" style="color: #27467A; line-height: 1.3;">Chancellor, <br> The Assam Royal Global University</p>

                          <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Chairman</p>
                        </div>
                    </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/2.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Anil Kumar Modi</h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Pro-Chancellor, <br>
                        The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

            <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                <div class="p-3">
                  <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/3.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Y.S.R. Murthy</h5>
                <p class="para1" style="color: #27467A; line-height: 1.3;">Vice Chancellor, <br>
                    The Assam Royal Global University</p>

                  <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 mb-4">

        <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
            <div class="p-3">
              <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/4.png" class="img-fluid rounded"/>
            </div>
            <div class="card-body d-flex flex-column flex-grow-1">
              <h5 style="font-weight: 800; color: #27467A; font-size: 20px;" class="card-title headd2 pb-2">Prof. (Dr.) A.K. Buragohain</h5>
            <p class="para1" style="color: #27467A; line-height: 1.3; font-size: 16px;">Chairperson Academic,
                The Assam Royal Global University; Former Chancellor, Girijananda Chowdhury University; Former Vice-Chancellor, Dibrugarh University</p>

              <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
            </div>
        </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/5.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Adv. Angshuman Bora
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Sr. Advocate, <br>
                        Gauhati High Court Guwahati</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/6.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Ankur Pansari
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Vice-President, <br>
                        Gyan Sagar Foundation</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/7.jpg" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Prof. (Dr.) Pradeep K. Jain
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Professor, <br>
                        Deptt. of Business Administration, Gauhati University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/8.png" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">CA Sikha M. Pansari
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Member, <br>
                        Gyan Sagar Foundation</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/9.jpg" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Dr. Dip Narayain Singh
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Registrar, <br>
                        The Assam Royal Global University</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Member Secretary</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 550px;">
                    <div class="p-3">
                      <img style="height: 290px; width: 100%;" src="mobile-assets/governing-body/10.jpeg" class="img-fluid rounded"/>
                    </div>
                    <div class="card-body d-flex flex-column flex-grow-1">
                      <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Sri Ranjit Barthakur
                    </h5>
                    <p class="para1" style="color: #27467A; line-height: 1.3;">Founding Trustee, Balipara Foundation, and Chairperson, Royal Rajasthan Foundation</p>

                      <p class="card-text para1 half-underline mt-auto fw-bold" style="color: #FF9A1E;">Advisor</p>
                    </div>
                </div>
            </div>

            </div>

        </div>

    </section>
        </div>
@endsection

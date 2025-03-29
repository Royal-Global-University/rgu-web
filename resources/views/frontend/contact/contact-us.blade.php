@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="padding-top: 90px; position: relative; background-image: url(mobile-assets/royal-informatics-center/bg.svg); background-size: cover;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pb-5 pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal Information <span style="color: #FF9A1E; font-weight: 500;">Centre</span></h2>

            <div class="container">

                <!-- all contact cards start  -->
                <div class="row g-4">
                    <!-- Agartala Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">AGARTALA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    67, Gangail Road, Opp. Ramkrishna Mission, Gandhighat, Agartala - 799001, Tripura West
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020914" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020914
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">BARPETA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Howly Town, Ward No. 3, Anand Bazar Howly, P.O. & P.S. Howly, Barpeta-781316
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020915" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020915
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">BONGAIGAON</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Noor Market, Near Mayapuri Cinema Hall, Mayapuri, Bongaigaon - 783380
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127070906" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>9127070906
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Dibrugarh Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">DIBRUGARH</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Gabhorupathar Tiniali, Near Police Station, Naliapool, Dibrugarh-786001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002969" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>6913002969
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">DIMAPUR</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Circular Road, Near Popular Bakery, Dimapur, Nagaland-797112
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002966" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>6913002966
                                </a>
                                <a href="tel:7099020796" class="text-decoration-none text-dark mobile-para1">
                                    7099020796
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">GOALPARA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Durga Mandir, Near LIC Building, P.O. Baladmari, Goalpara-783101
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099030827" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099030827
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Kohima Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">KOHIMA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    R Building, Paraciezia, High School Junction, Kohima, Nagaland-797001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020907" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020907
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mangaldoi Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">MANGALDOI</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    W/No. 10, Tangla Bhebargahat Road, Opp. Foreigner's Tribunal (5th) Office,
                                    P.O. - Mangaldoi, Darrang - 784125, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020907" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020907
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Manipur Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">MANIPUR</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Hafiz Hatta, Minuthong Traffic Point, Near HDFC ATM, Imphal East- 795001, Manipur
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002965" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>6913002965
                                </a> &nbsp;&nbsp;
                                <a href="tel:7099020911" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020911
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Mizoram Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">MIZORAM</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Theodora Market, Plot No.3, Treasury Square, Opp. MPC Office, Aizawl - 796001, Mizoram
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127070609" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>9127070609
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nagaon Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">NAGAON</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    BM Road, Amolapatty, Opp. Ramanujan Junior College, Nagaon - 782001, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020910" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020910
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pasighat Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">PASIGHAT</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Daring Complex, GTC, Pasighat, Dist. East Siang, Pin-791102
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020901" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020901
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Silchar Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">SILCHAR</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Das Complex, 3rd Floor, Above Tata AIA, Opp. Hindi School, Shyama Prasad Road,
                                    Shillongpatty - 788001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:8811034707" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>8811034707
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Shillong Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">SHILLONG</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Salonsar Mansion, Next to Highland Studio, Police Bazar, Shillong, Meghalaya - 793001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002967" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>6913002967
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Sivasagar Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">SIVASAGAR</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    1st Floor, Elite Complex, Opp. Lachit Park, H.C.B. Road, Ward No. 8, P.O. & P.S. -
                                    Sivasagar - 785640
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020909" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020909
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2 pb-5">
                    <!-- Tinsukia Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border shadow h-100">
                            <div class="card-body border-0">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">TINSUKIA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    Sashi Complex, Rongagora Road, Tinsukia - 786125, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020913" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>7099020913
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tura Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border shadow h-100">
                            <div class="card-body border-0">
                                <h5 style="color: #27467A;" class="card-title mobile-para1 fw-bold">TURA</h5>
                                <p class="card-text mobile-para1 text-dark">
                                    1st Floor, Above Axis Bank, Hawakhana, Tura - 794001, Meghalaya
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127898115" class="text-decoration-none text-dark mobile-para1">
                                    <i class="fa fa-phone me-2"></i>9127898115
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- all contact cards End  -->

                <!-- Helpline card  -->
                <div class="pb-4">
                    <div class="card rounded d-flex flex-column"
                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); padding: 15px;">
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <div class="row ">
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 mobile-headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">General Helpline</span></p>
                                    <p class="mb-0 fs-16 mobile-para1 text-dark pb-1">
                                        <a href="tel:7086093458"><i class="fa fa-phone me-2"></i>+91 70860-93458</a><br>
                                        <a href="tel:7086093459"><i class="fa fa-phone me-2"></i>+91 70860-93459</a>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 mobile-headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">Admission Helpline</span></p>
                                    <p class="mb-0 fs-16 mobile-para1 text-dark pb-1">
                                        <a href="tel:7879998811"><i class="fa fa-phone me-2"></i>+91 78799-98811</a>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 mobile-headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">International Helpline</span></p>
                                    <p class="mb-0 fs-16 mobile-para1 text-dark pb-1">
                                        <a href="tel:6913002970"><i class="fa fa-phone me-2"></i>+91 69130-02970</a><br>
                                        <!-- <a href="tel:8811031821"><i class="fa fa-phone me-2"></i>+91 88110-31821</a> -->
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 mobile-headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">Accounts Department</span></p>
                                    <p class="mb-0 fs-16 mobile-para1 text-dark pb-1">
                                        <a href="tel:7099088711"><i class="fa fa-phone me-2"></i>+91 70990-88711</a><br>
                                        <a href="mailto:vijay.sharma@rgi.edu.in"><i
                                                class="fa fa-envelope text-primary me-2"></i><strong
                                                class="text-primary mobile-para1">vijay.sharma@rgi.edu.in</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Helpline card  -->

                <hr>

                <!-- contact info part  -->
                <div class="pb-4">
                    <h2 class="mobile-headd1 fw-bold text-center  pb-4 pt-2" style="color: #27467A; font-weight: 900;">
                        Contact <span style="color: #FF9A1E; font-weight: 500;">Information</span></h2>

                    <p style="color: #27467A;" class="mobile-headd3">
                        <span class="fw-bold">THE ASSAM ROYAL GLOBAL UNIVERSITY</span> (Sponsored by Gyan Sagar Foundation
                        alias Royal, Guwahati Assam) Betkuchi, Opp. Tirupati Balaji Temple/ ISBT,. NH-37, Guwahati-35, Dist-
                        Kamrup (Metro), Assam, India.
                    </p>

                    <div class="row pt-3">
                        <div class="col-lg-3" pb-3>
                            <a href="mailto:vice-chancellor@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary mobile-para1">
                                    vice-chancellor@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:registraroffice@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary mobile-para1">
                                    registraroffice@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:admissions@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary mobile-para1">
                                    admissions@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:careers@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary mobile-para1">
                                    careers@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:pahib@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary mobile-para1">
                                    pahib@rgu.ac</strong></a>
                        </div>
                    </div>

                </div>
                <!-- contact info part  -->

            </div>
        </section>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <!--Section About us-->
        <section style="background-image: url(mobile-assets/royal-informatics-center/bg.svg); background-size: cover;">
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pb-5 pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal Information <span style="color: #FF9A1E; font-weight: 500;">Centre</span></h2>

            <div class="container">

                <!-- all contact cards start  -->
                <div class="row g-4">
                    <!-- Agartala Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">AGARTALA</h5>
                                <p class="card-text para1 text-dark">
                                    67, Gangail Road, Opp. Ramkrishna Mission, Gandhighat, Agartala - 799001, Tripura West
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020914" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020914
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">BARPETA</h5>
                                <p class="card-text para1 text-dark">
                                    Howly Town, Ward No. 3, Anand Bazar Howly, P.O. & P.S. Howly, Barpeta-781316
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020915" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020915
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">BONGAIGAON</h5>
                                <p class="card-text para1 text-dark">
                                    Noor Market, Near Mayapuri Cinema Hall, Mayapuri, Bongaigaon - 783380
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127070906" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>9127070906
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Dibrugarh Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">DIBRUGARH</h5>
                                <p class="card-text para1 text-dark">
                                    Gabhorupathar Tiniali, Near Police Station, Naliapool, Dibrugarh-786001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002969" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>6913002969
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">DIMAPUR</h5>
                                <p class="card-text para1 text-dark">
                                    Circular Road, Near Popular Bakery, Dimapur, Nagaland-797112
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002966" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>6913002966
                                </a>
                                <a href="tel:7099020796" class="text-decoration-none text-dark para1">
                                    7099020796
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">GOALPARA</h5>
                                <p class="card-text para1 text-dark">
                                    Durga Mandir, Near LIC Building, P.O. Baladmari, Goalpara-783101
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099030827" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099030827
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Kohima Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">KOHIMA</h5>
                                <p class="card-text para1 text-dark">
                                    R Building, Paraciezia, High School Junction, Kohima, Nagaland-797001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020907" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020907
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mangaldoi Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">MANGALDOI</h5>
                                <p class="card-text para1 text-dark">
                                    W/No. 10, Tangla Bhebargahat Road, Opp. Foreigner's Tribunal (5th) Office,
                                    P.O. - Mangaldoi, Darrang - 784125, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020907" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020907
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Manipur Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">MANIPUR</h5>
                                <p class="card-text para1 text-dark">
                                    Hafiz Hatta, Minuthong Traffic Point, Near HDFC ATM, Imphal East- 795001, Manipur
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002965" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>6913002965
                                </a> &nbsp;&nbsp;
                                <a href="tel:7099020911" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020911
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Mizoram Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">MIZORAM</h5>
                                <p class="card-text para1 text-dark">
                                    Theodora Market, Plot No.3, Treasury Square, Opp. MPC Office, Aizawl - 796001, Mizoram
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127070609" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>9127070609
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nagaon Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">NAGAON</h5>
                                <p class="card-text para1 text-dark">
                                    BM Road, Amolapatty, Opp. Ramanujan Junior College, Nagaon - 782001, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020910" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020910
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pasighat Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">PASIGHAT</h5>
                                <p class="card-text para1 text-dark">
                                    Daring Complex, GTC, Pasighat, Dist. East Siang, Pin-791102
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020901" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020901
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Silchar Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">SILCHAR</h5>
                                <p class="card-text para1 text-dark">
                                    Das Complex, 3rd Floor, Above Tata AIA, Opp. Hindi School, Shyama Prasad Road,
                                    Shillongpatty - 788001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:8811034707" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>8811034707
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Shillong Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">SHILLONG</h5>
                                <p class="card-text para1 text-dark">
                                    Salonsar Mansion, Next to Highland Studio, Police Bazar, Shillong, Meghalaya - 793001
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:6913002967" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>6913002967
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Sivasagar Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 220px;">
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">SIVASAGAR</h5>
                                <p class="card-text para1 text-dark">
                                    1st Floor, Elite Complex, Opp. Lachit Park, H.C.B. Road, Ward No. 8, P.O. & P.S. -
                                    Sivasagar - 785640
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020909" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020909
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2 pb-5">
                    <!-- Tinsukia Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border shadow h-100">
                            <div class="card-body border-0">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">TINSUKIA</h5>
                                <p class="card-text para1 text-dark">
                                    Sashi Complex, Rongagora Road, Tinsukia - 786125, Assam
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:7099020913" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>7099020913
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tura Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border shadow h-100">
                            <div class="card-body border-0">
                                <h5 style="color: #27467A;" class="card-title para1 fw-bold">TURA</h5>
                                <p class="card-text para1 text-dark">
                                    1st Floor, Above Axis Bank, Hawakhana, Tura - 794001, Meghalaya
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <hr>
                                <a href="tel:9127898115" class="text-decoration-none text-dark para1">
                                    <i class="fa fa-phone me-2"></i>9127898115
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- all contact cards End  -->

                <!-- Helpline card  -->
                <div class="pb-4">
                    <div class="card rounded d-flex flex-column"
                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); padding: 15px;">
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <div class="row ">
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">General Helpline</span></p>
                                    <p class="mb-0 fs-16 para1 text-dark pb-1">
                                        <a href="tel:7086093458"><i class="fa fa-phone me-2"></i>+91 70860-93458</a><br>
                                        <a href="tel:7086093459"><i class="fa fa-phone me-2"></i>+91 70860-93459</a>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">Admission Helpline</span></p>
                                    <p class="mb-0 fs-16 para1 text-dark pb-1">
                                        <a href="tel:7879998811"><i class="fa fa-phone me-2"></i>+91 78799-98811</a>
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">International Helpline</span></p>
                                    <p class="mb-0 fs-16 para1 text-dark pb-1">
                                        <a href="tel:6913002970"><i class="fa fa-phone me-2"></i>+91 69130-02970</a><br>
                                        <!-- <a href="tel:8811031821"><i class="fa fa-phone me-2"></i>+91 88110-31821</a> -->
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="mb-0 fs-16 headd3 text-dark pb-3"><span style="color: #27467A;"
                                            class=" font-weight-bold">Accounts Department</span></p>
                                    <p class="mb-0 fs-16 para1 text-dark pb-1">
                                        <a href="tel:7099088711"><i class="fa fa-phone me-2"></i>+91 70990-88711</a><br>
                                        <a href="mailto:vijay.sharma@rgi.edu.in"><i
                                                class="fa fa-envelope text-primary me-2"></i><strong
                                                class="text-primary para1">vijay.sharma@rgi.edu.in</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Helpline card  -->

                <hr>

                <!-- contact info part  -->
                <div class="pb-4">
                    <h2 class="headd1 fw-bold text-center  pb-4 pt-2" style="color: #27467A; font-weight: 900;">
                        Contact <span style="color: #FF9A1E; font-weight: 500;">Information</span></h2>

                    <p style="color: #27467A;" class="headd3">
                        <span class="fw-bold">THE ASSAM ROYAL GLOBAL UNIVERSITY</span> (Sponsored by Gyan Sagar Foundation
                        alias Royal, Guwahati Assam) Betkuchi, Opp. Tirupati Balaji Temple/ ISBT,. NH-37, Guwahati-35, Dist-
                        Kamrup (Metro), Assam, India.
                    </p>

                    <div class="row pt-3">
                        <div class="col-lg-3" pb-3>
                            <a href="mailto:vice-chancellor@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary para1">
                                    vice-chancellor@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:registraroffice@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary para1">
                                    registraroffice@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:admissions@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary para1">
                                    admissions@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:careers@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary para1">
                                    careers@rgu.ac</strong></a>
                        </div>

                        <div class="col-lg-3 pb-3">
                            <a href="mailto:pahib@rgu.ac">
                                <i class="fa fa-envelope text-primary"></i><strong class="text-primary para1">
                                    pahib@rgu.ac</strong></a>
                        </div>
                    </div>

                </div>
                <!-- contact info part  -->

            </div>
        </section>
    </div>
@endsection

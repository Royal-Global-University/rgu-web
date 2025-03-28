@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url('mobile-assets/deans/bg.svg'); position: relative; padding-top: 90px;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Schools and <span style="color: #FF9A1E; font-weight: 500;">Faculty</span></h2>


            <div class="container">
                <div class="row pb-2 text-center justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
                        <a href="how-to-apply" class="btn text-white w-100 p-3 rounded" style="
                        font-size: 16px;
                        font-weight: 600;
                        background: #27467a;
                        border: none;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                        transition: transform 0.4s, box-shadow 0.4s;"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">
                            How to Apply
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
                        <a href="placements-process" class="btn text-white w-100 p-3 rounded" style="
                        font-size: 16px;
                        font-weight: 600;
                        background: #27467a;
                        border: none;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                        transition: transform 0.4s, box-shadow 0.4s;"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">
                            Placements
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
                        <a href="" class="btn text-white w-100 p-3 rounded" style="
                        font-size: 16px;
                        font-weight: 600;
                        background: #27467a;
                        border: none;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                        transition: transform 0.4s, box-shadow 0.4s;"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">
                            Eligibility & Selection Criteria
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
                        <a href="" class="btn text-white w-100 p-3 rounded" style="
                        font-size: 16px;
                        font-weight: 600;
                        background: #27467a;
                        border: none;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                        transition: transform 0.4s, box-shadow 0.4s;"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">
                            Fee Structure
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/soa-1.jpg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Architecture (RSA)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-architecture"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href=""
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/applied.001.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Applied & Pure Sciences (RSAPS)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="royal-s-school-of-applied-pure-science"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-applied-purescience"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/business.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Business (RSB)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-business"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-business"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/behavioral.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Behavioral & Allied Sciences (RSBAS)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-psychology"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="royalschoolofalliedsciences"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/rsbsc-school-header.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Bio-sciences (RSBSC)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-schoolof-bsc"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-bio-sciences"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/commerce.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Commerce (RSC)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-commerce"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-commerce"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/media.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Communications & Media (RSCOM)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-communications-media"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="rscom-faculty"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/design.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Design (RSD)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-school-design"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-design"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/earth.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Environmental & Earth Sciences (RSEES)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="royal-school-of-environmental-earth-science"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-environmental-earth"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/soet.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Engineering & Technology (RSET)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-school-engineering"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-engineeringtechnology"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/art.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Fine Arts (RSFA)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-fine-arts"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-finearts"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/fashion.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Fashion Design & Technology (RSFT)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-fashion-design"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-fashion-design"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/humanities.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Humanities & Social Sciences (RSHSS)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="royalschool-of-humanities-socialsciences"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-humanities-social"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/hotel-mgn.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Hotel Management (RSHM)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-hotel-management"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-hotel-management"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/it-school.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Information Technology (RSIT)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-information-technology"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-information-technology"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/law.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Law & Administration(RSLA)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-law"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-law-administration"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/rgu-schools.003.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Life Sciences (RSLSC)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="royalschool-of-lifesciences"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-lifesciences"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/rgu-campus.001.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Languages (RSL)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-languages"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-languages"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/schools-library.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Library Sciences (RSLIS) (RSP)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-library-information"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-librarysciences"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/medical.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Medical & Allied Sciences (RSMAS)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="royalschoolofmedical&alliedsciences"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-medical&allidesciences"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/nursing.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Nursing (RSN)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-nursing"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-nursing"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/pharmacy.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Pharmacy (RSP)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-pharmacy"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-pharmacy"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/travel.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal
                                    School of Travel & Tourism Management(RSTTM)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="department-travel"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Department
                                        </a>
                                        <a href="faculty-travel-tourism"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mt-3">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                            <div class="p-3">
                                <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;"
                                    src="assets/img/school-rgu/IKS LOGO-new.jpeg" class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Indian
                                    Knowledge System (IKS)</h5>
                                <div class="mt-auto mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="indian-knowledge-system-cell-about"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            About IKS
                                        </a>
                                        <a href="indian-knowledge-system-cell-composition"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Composition
                                        </a>
                                    </div>
                                    <div class="d-flex pt-2 justify-content-between">
                                        <a href="indian-knowledge-system-cell-events"
                                            style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Events
                                        </a>
                                        <a href="indian-knowledge-system-cell-syllabus"
                                            style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                            Syllabus
                                        </a>
                                    </div>
                                </div>
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

        <!--START Section-->
        <div style="margin-top: 40px"
            class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
            data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
            <div class="elementor-widget-container">
                <div class="prthalign">
                    <h1 style="font-weight: 600" class="headd1 text-dark kd-title-ani kd-split-text">
                        Our Schools & Faculties
                    </h1>
                </div>
            </div>
        </div>

        <div class="p-5">
            <div class="row pb-2 text-center" style="align-items: center">
                <div class="col-lg-3 animate__animated animate__fadeInDown">
                    <a href="admission-how-to-apply" class="btn text-white mt-2 p-3 rounded" style="
            font-size: 16px;
            font-weight: 600;
            background: #27467a;
            border: none;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s, box-shadow 0.4s;
          " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">How
                        to Apply</a>
                </div>
                <div class="col-lg-3 animate__animated animate__fadeInDown">
                    <a href="placements-placement-process" class="btn text-white mt-2 p-3 rounded" style="
            font-size: 16px;
            font-weight: 600;
            background: #27467a;
            border: none;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s, box-shadow 0.4s;
          " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Placements</a>
                </div>
                <div class="col-lg-3 animate__animated animate__fadeInDown">
                    <a href="Eligibility&Selection" class="btn text-white mt-2 p-3 rounded" style="
            font-size: 16px;
            font-weight: 600;
            background: #27467a;
            border: none;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s, box-shadow 0.4s;
          " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Eligibility
                        & Selection Criteria</a>
                </div>
                <div class="col-lg-3 animate__animated animate__fadeInDown">
                    <a href="admission-programs-fees-structure" class="btn text-white mt-2 p-3 rounded" style="
            font-size: 16px;
            font-weight: 600;
            background: #27467a;
            border: none;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s, box-shadow 0.4s;
          " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';">Fee
                        Structure</a>
                </div>
            </div>
            <hr style="
        border: none;
        height: 2px;
        background-color: #13223b;
        margin: 20px 0;
      " />
            <div class="row text-center">
                <!-- Card 1 -->
                <div class="col-lg-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/soa-1.jpg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Architecture (RSA)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-architecture" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="Faculty_Architecture" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/applied.001.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Applied & Pure Sciences (RSAPS)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-applied-pure-science" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-applied-purescience" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/business.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Business (RSB)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-business" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-business" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/behavioral.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Behavioral & Allied Sciences (RSBAS)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-psychology" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-royalschoolofalliedsciences" class="btn fw-bold text-white"
                                            style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/rsbsc-school-header.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Bio-sciences (RSBSC)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-bio-science" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-bio-sciences" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/commerce.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Commerce (RSC)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-commerce" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-commerce" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/media.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Communications & Media (RSCOM)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-communications-media" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="rscom-faculty" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/design.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Design (RSD)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-design" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-design" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/earth.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Environmental & Earth Sciences (RSEES)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-enviroment-science"
                                            class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-environmental-earth" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/soet.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Engineering & Technology (RSET)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-engineering-technology" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-engineeringtechnology" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/art.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Fine Arts (RSFA)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-fine-arts" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-finearts" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/fashion.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Fashion Design & Technology (RSFT)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-fashion-design" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-fashion-design" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/humanities.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Humanities & Social Sciences (RSHSS)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-humanities"
                                            class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-humanities-social" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/hotel-mgn.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Hotel Management (RSHM)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-hotel-management" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-hotel-management" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/it-school.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Information Technology (RSIT)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-information-technology" class="btn fw-bold text-white"
                                            style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-information-technology" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/law.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Law & Administration(RSLA)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-law" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-law-administration" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/rgu-schools.003.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Life Sciences (RSLSC)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-life-science" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-lifesciences" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/rgu-campus.001.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Languages (RSL)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-languages" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-languages" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/schools-library.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Library Sciences (RSLIS) (RSP)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-library-information" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-librarysciences" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/medical.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Medical & Allied Sciences (RSMAS)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="royal-s-school-of-medical-allied-science" class="btn fw-bold text-white"
                                            style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-medical&allidesciences" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/nursing.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Nursing (RSN)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 32px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-nursing" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-nursing" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/pharmacy.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Pharmacy (RSP)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 35px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-pharmacy" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-pharmacy" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="assets/img/school-rgu/travel.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <p>Royal School of Travel & Tourism Management(RSTTM)</p>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 10px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="department-travel" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>Departments
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="faculty-travel-tourism" class="btn fw-bold text-white" style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-left: 44px;
                      padding-right: 44px;
                      margin-left: 8px;
                    ">
                                            <i class="fa fa-user text-white" style="margin: 8px"></i>Faculty
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4">
                    <div class="kd-course-1-tabs-card fix shadow-lg">
                        <div class="main-img">
                            <img fetchpriority="high" decoding="async" width="352" height="235"
                                src="mobile-assets/ik.jpeg"
                                class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                sizes="(max-width: 352px) 100vw, 352px" />
                        </div>
                        <div class="content">
                            <h4 class="title kd-heading-1 kd-font-900">
                                <a href="# aria-label">Indian Knowledge System (IKS)</a>
                            </h4>
                            <div class="card-footer rt-primary-bg" style="padding-top: 42px">
                                <div class="row text-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <a href="indian-knowledge-system-cell-about" class="btn fw-bold text-white"
                                            style="
                      background-color: #27467a;
                      font-size: 16px;
                      padding-right: 20px;
                      padding-left: 20px;
                    ">
                                            <i class="fa fa-building text-white" style="margin: 8px"></i>About IKS
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
                                        <div class="dropdown">
                                            <a class="btn fw-bold text-white dropdown-toggle" style="
                        background-color: #27467a;
                        font-size: 16px;
                        padding-right: 20px;
                        padding-left: 20px;
                      " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-user text-white" style="margin: 8px"></i>Know More
                                            </a>
                                            <ul class="dropdown-menu para1" ;" aria-labelledby="dropdownMenuLink">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="indian-knowledge-system-cell-composition">Composition</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="indian-knowledge-system-cell-events">Events</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="indian-knowledge-system-cell-syllabus">Syllabus</a>
                                                </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END Section-->

    </div>
@endsection

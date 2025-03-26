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

        <!--About Section-->
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

        <div class="container pb-5 pt-4">
            <div class="row pb-2 text-center" style="align-items: center">
                <div class="col-lg-3 animate__animated animate__fadeInDown">
                    <a href="admission-how-to-apply.html" class="btn text-white mt-2 p-3 rounded" style="
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
                    <a href="placements-placement-process.html" class="btn text-white mt-2 p-3 rounded" style="
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
                    <a href="Eligibility&Selection.html" class="btn text-white mt-2 p-3 rounded" style="
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
                    <a href="admission-programs-fees-structure.html" class="btn text-white mt-2 p-3 rounded" style="
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
                                        <a href="royal-school-of-architecture/department/department-architecture.html"
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
                                        <a href="royal-school-of-architecture/faculty/faculty-architecture.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-applied-pure-sciences/department/department-school.html"
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
                                        <a href="royal-school-of-applied-pure-sciences/faculty/faculty-applied-purescience.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-business/department/department-business.html"
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
                                        <a href="royal-school-of-business/faculty/faculty-business.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-behavioral-allied-science/department/department-psychology.html"
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
                                        <a href="royal-school-of-behavioral-allied-science/faculty/royalschoolofalliedsciences.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-bio-sciences/department/department-schoolof-bsc.html"
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
                                        <a href="royal-school-of-bio-sciences/faculty/faculty-bio-sciences.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-commerce/department/department-commerce.html"
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
                                        <a href="royal-school-of-commerce/faculty/faculty-commerce.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-communications-media/department/department-communications-media.html"
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
                                        <a href="royal-school-of-communications-media/faculty/rscom-faculty.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-design/department/department-school-design.html"
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
                                        <a href="royal-school-of-design/faculty/faculty-design.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-environmental-earth-sciences/department/royal-school-of-environmental-earth-science.html"
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
                                        <a href="royal-school-of-environmental-earth-sciences/faculty/faculty-environmental-earth.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-engineering-technology/department/department-school.html"
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
                                        <a href="royal-school-of-engineering-technology/faculty/faculty-engineeringtechnology.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-fine-arts/department/department-fine-arts.html"
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
                                        <a href="royal-school-of-fine-arts/faculty/faculty-finearts.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-fashion-design-technology/department/department-fashion-design.html"
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
                                        <a href="royal-school-of-fashion-design-technology/faculty/faculty-fashion-design.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-humanities-social-sciences/department/royalschool-of-humanities-socialsciences.html"
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
                                        <a href="royal-school-of-humanities-social-sciences/faculty/faculty-humanities-social.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-hotel-management/department/department-hotel-management.html"
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
                                        <a href="royal-school-of-hotel-management/faculty/faculty-hotel-management.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-information-technology/department/department-information-technology.html"
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
                                        <a href="royal-school-of-information-technology/faculty/faculty-information-technology.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-law-administration/department/department-law.html"
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
                                        <a href="royal-school-of-law-administration/faculty/faculty-law-administration.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-life-sciences/department/royalschool-of-lifesciences.html"
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
                                        <a href="royal-school-of-life-sciences/faculty/faculty-lifesciences.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-languages/department/department-languages.html"
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
                                        <a href="royal-school-of-languages/faculty/faculty-languages.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-library-sciences/department/department-library-information.html"
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
                                        <a href="royal-school-of-library-sciences/faculty/faculty-librarysciences.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-medical-allied-sciences/department/royalschoolofmedical&alliedsciences.html"
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
                                        <a href="royal-school-of-medical-allied-sciences/faculty/faculty-medical&allidesciences.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-nursing/department/department-nursing.html"
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
                                        <a href="royal-school-of-nursing/faculty/faculty-nursing.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-pharmacy/department/department-pharmacy.html"
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
                                        <a href="royal-school-of-pharmacy/faculty/faculty-pharmacy.html"
                                            class="btn fw-bold text-white" style="
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
                                        <a href="royal-school-of-travel-tourism-management/department/department-travel.html"
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
                                        <a href="royal-school-of-travel-tourism-management/faculty/faculty-travel-tourism.html"
                                            class="btn fw-bold text-white" style="
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
                                src="assets/img/school-rgu/IKS LOGO-new.jpeg"
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
                                        <a href="indian-knowledge-system/indian-knowledge-system-cell-about.html"
                                            class="btn fw-bold text-white" style="
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
                                                        href="indian-knowledge-system/indian-knowledge-system-cell-composition.html">Composition</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="indian-knowledge-system/indian-knowledge-system-cell-events.html">Events</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="indian-knowledge-system/indian-knowledge-system-cell-syllabus.html">Syllabus</a>
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
        <!--End About-->
    </div><!-- #page -->
@endsection

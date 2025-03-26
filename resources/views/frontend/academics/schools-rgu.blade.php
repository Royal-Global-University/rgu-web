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
    <div style="background-image: url(assets/img/school-rgu/background2.svg);">
    <div
style="padding-top: 40px"
class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
data-id="e22f91b"
data-element_type="widget"
data-widget_type="go-s-heading.default"
>
<div class="elementor-widget-container">
  <div class="prthalign">
    <h1
      style="font-weight: 600"
      class="headd1 text-dark kd-title-ani kd-split-text"
    >
      Our Schools & Faculties
    </h1>
  </div>
</div>
</div>


<div class="container pb-5 pt-4">
<div class="row pb-2 text-center" style="align-items: center">
  <div class="col-lg-3">
    <div style="background-color: #ef991f; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s, box-shadow 0.4s;"
        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
      onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';"
        class="p-3 rounded">
        <a href="admission-how-to-apply.html" class="text-white fw-bold">How to Apply</a>
    </div>
  </div>
<div class="col-lg-3">
    <div style="background-color: #ef991f; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s, box-shadow 0.4s;"
        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';"
        class="p-3 rounded">
        <a href="placements-placement-process.html" class="text-white fw-bold">Placements</a>
    </div>
</div>
<div class="col-lg-3">
    <div style="background-color: #ef991f; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s, box-shadow 0.4s;"
        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';"
        class="p-3 rounded">
        <a href="Eligibility&Selection.html" class="text-white fw-bold">Eligibility & Selection Criteria</a>
    </div>
</div>
<div class="col-lg-3">
    <div style="background-color: #ef991f; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s, box-shadow 0.4s;"
        onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0px 12px 20px rgba(0, 0, 0, 0.3)';"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0px 8px 15px rgba(0, 0, 0, 0.2)';"
        class="p-3 rounded">
        <a href="admission-programs-fees-structure.html" class="text-white fw-bold">Fee Structure</a>
    </div>
</div>
</div>
<hr
  style="
    border: none;
    height: 2px;
    background-color: #13223b;
    margin: 20px 0;
  "
/>
<div class="row text-center pt-4">
  <div class="col-lg-4">
    <div class="kd-course-1-tabs-card fix shadow-lg">
      <div class="main-img">
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/soa-1.jpg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Architecture (RSA)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Architecture.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Architecture.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/applied.001.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Applied & Pure Sciences (RSAPS)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Applied&PureSciences(RSAPS)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Applied_PureScience.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/business.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Business (RSB)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Business.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Business.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/behavioral.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Behavioral & Allied Sciences (RSBAS)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Psychology.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofBehavioral&AlliedSciences(RSBAS).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/rsbsc-school-header.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Bio-sciences (RSBSC)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Bio-Sciences(RSBSC)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Bio_sciences_(RSBSC).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/commerce.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Commerce (RSC)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Commerce.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Commerce(RSC).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/media.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Communications & Media (RSCOM)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Communications_Media.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Communications_Media(RSCOM).HTML"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/design.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Design (RSD)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofDesign(RSD)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Design(RSD).HTML"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/earh-hand.jpg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Environmental & Earth Sciences (RSEES)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofEnvironmental&EarthSciences(RSEES)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Environmental_Earth.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/soet.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Engineering & Technology (RSET)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofEngineering&Technology(RSET)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_EngineeringTechnology(RSET).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/art.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Fine Arts (RSFA)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Fine_Arts.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_FineArts(RSFA).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/fashion.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Fashion Design & Technology (RSFT)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Fashion_Design.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Fashion_Design.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/humanities.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Humanities & Social Sciences (RSHSS)</p>
        </h4>
        <div class="card-footer rt-primary-bg">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofHumanities&SocialSciences(RSHSS)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Humanities_Social.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/hotel-mgn.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Hotel Management (RSHM)</p>
        </h4>
        <div class="card-footer rt-primary-bg">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Hotel_Management.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Hotel_Management.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/it-school.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Information Technology (RSIT)</p>
        </h4>
        <div class="card-footer rt-primary-bg">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Information_Technology.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Information_Technology.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/law.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Law & Administration(RSLA)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Law.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Law_Administration(RSLA).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/rgu-schools.003.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Life Sciences (RSLSC)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofLifeSciences(RSLSC)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_LifeSciences(RSLSC).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/rgu-campus.001.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Languages (RSL)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Languages.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Languages (RSL).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/schools-library.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Library Sciences (RSLIS) (RSP)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Library_Information.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_LibrarySciences(RSLIS).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/medical.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Medical & Allied Sciences (RSMAS)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="RoyalSchoolofMedical&AlliedSciences(RSMAS)(Departments).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Medical&AllideSciences.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/nursing.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Nursing (RSN)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 32px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Nursing.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Nursing_(RSN).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/pharmacy.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Pharmacy (RSP)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 35px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Pharmacy.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Pharmacy(RSP).html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/travel.jpeg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <p>Royal School of Travel & Tourism Management(RSTTM)</p>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 10px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Department_Travel.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >Departments
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="Faculty_Travel_Tourism.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-left: 44px;
                  padding-right: 44px;
                  margin-left: 8px;
                "
              >
                <i class="fa fa-user text-white" style="margin: 8px"></i
                >Faculty
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
        <img
          fetchpriority="high"
          decoding="async"
          width="352"
          height="235"
          src="assets/img/school-rgu/Cover.jpg"
          class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
          alt=""
          sizes="(max-width: 352px) 100vw, 352px"
        />
      </div>
      <div class="content">
        <h4 class="title kd-heading-1 kd-font-900">
          <a href="# aria-label">Indian Knowledge System (IKS)</a>
        </h4>
        <div class="card-footer rt-primary-bg" style="padding-top: 42px">
          <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <a
                href="ABOUTIKS.html"
                class="btn fw-bold text-white"
                style="
                  background-color: #27467a;
                  font-size: 16px;
                  padding-right: 20px;
                  padding-left: 20px;
                "
              >
                <i class="fa fa-building text-white" style="margin: 8px"></i
                >About IKS
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3">
              <div class="dropdown">
                <a
                  class="btn fw-bold text-white dropdown-toggle"
                  style="
                    background-color: #27467a;
                    font-size: 16px;
                    padding-right: 20px;
                    padding-left: 20px;
                  "
                  href="#"
                  role="button"
                  id="dropdownMenuLink"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fa fa-user text-white" style="margin: 8px"></i
                  >Know More
                </a>
                <ul class="dropdown-menu para1";"
                aria-labelledby="dropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="COMPOSITION_IKS.html"
                    >Composition</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="EventsorganizedbyIKSCell.html"
                    >Events</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="SYLLABUS_IKS.html"
                    >Syllabus</a
                  >
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
</div>
@endsection

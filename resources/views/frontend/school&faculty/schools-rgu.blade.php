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

        <div class="mobile">
          <section style="background-image: url('mobile-assets/school-rgu/bg.svg');">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-3" style="color: #27467A; font-weight: 900;">
              Schools and <span style="color: #FF9A1E; font-weight: 500;">Faculty</span></h2>


          <div class="container">
            <div class="row pb-2 text-center justify-content-center">
              <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
                <a href="admission-how-to-apply.html"
                  class="btn text-white w-100 p-3 rounded"
                  style="
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
                <a href="placements-placement-process.html"
                  class="btn text-white w-100 p-3 rounded"
                  style="
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
                <a href="Eligibility&Selection.html"
                  class="btn text-white w-100 p-3 rounded"
                  style="
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
                <a href="admission-programs-fees-structure.html"
                  class="btn text-white w-100 p-3 rounded"
                  style="
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
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/soa-1.jpg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Architecture (RSA)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-architecture')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-architecture')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/applied.001.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Applied & Pure Sciences (RSAPS)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('royal-s-school-of-applied-pure-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-applied-purescience')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/business.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Business (RSB)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-business')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-business')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/behavioral.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Behavioral & Allied Sciences (RSBAS)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-psychology')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-allied-sciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rsbsc-school-header.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Bio-sciences (RSBSC)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('royal-s-school-of-bio-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-bio-sciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/commerce.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Commerce (RSC)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-commerce')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-commerce')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/media.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Communications & Media (RSCOM)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-communications-media')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('rscom-faculty')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/design.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Design (RSD)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('royal-s-school-of-design')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-design')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/earth.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Environmental & Earth Sciences (RSEES)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('royal-s-school-of-enviroment-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-environmental-earth')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/soet.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Engineering & Technology (RSET)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="royal-s-school-of-engineering-technology" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-engineeringtechnology')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/art.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Fine Arts (RSFA)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-fine-arts')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-finearts')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/fashion.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Fashion Design & Technology (RSFT)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-fashion-design')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-fashion-design')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/humanities.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Humanities & Social Sciences (RSHSS)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="royal-s-school-of-humanities" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-humanities-social')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/hotel-mgn.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Hotel Management (RSHM)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-hotel-management')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-hotel-management')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/it-school.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Information Technology (RSIT)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-information-technology')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-information-technology')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/law.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Law & Administration(RSLA)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-law')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-law-administration')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rgu-schools.003.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Life Sciences (RSLSC)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('royal-s-school-of-life-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-lifesciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rgu-campus.001.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Languages (RSL)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-languages')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-languages')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/schools-library.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Library and Information Science (RSLISC)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-library-information')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-librarysciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/medical.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Medical & Allied Sciences (RSMAS)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="royal-s-school-of-medical-allied-science" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-medical&allidesciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/nursing.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Nursing (RSN)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-nursing')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-nursing')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/pharmacy.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Pharmacy (RSP)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-pharmacy')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-pharmacy')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/travel.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Royal School of Travel & Tourism Management(RSTTM)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="{{route('department-travel')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Department
                        </a>
                        <a href="{{route('faculty-travel-tourism')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Faculty
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mt-3">
                <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                  <div class="p-3">
                    <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/IKS LOGO-new.jpeg" class="img-fluid rounded"/>
                  </div>
                  <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-4">Indian Knowledge System (IKS)</h5>
                    <div class="mt-auto mb-4">
                      <div class="d-flex justify-content-between">
                        <a href="indian-knowledge-system-cell-about.html" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          About IKS
                        </a>
                        <a href="indian-knowledge-system-cell-composition.html" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Composition
                        </a>
                      </div>
                      <div class="d-flex pt-2 justify-content-between">
                        <a href="indian-knowledge-system-cell-events.html" style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                          Events
                        </a>
                        <a href="indian-knowledge-system-cell-syllabus.html" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
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

        <!--End Header-->

        <section style="background-image: url('mobile-assets/school-rgu/bg.svg');">
          <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-4" style="color: #27467A; font-weight: 900;">
            Schools and <span style="color: #FF9A1E; font-weight: 500;">Faculty</span></h2>


        <div class="container">

          <div class="row pb-2 text-center justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3 animate__animated animate__fadeInDown mb-2">
              <a href="how-to-apply"
                class="btn text-white w-100 p-3 rounded"
                style="
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
              <a href="placements-process"
                class="btn text-white w-100 p-3 rounded"
                style="
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
              <a href="programs"
                class="btn text-white w-100 p-3 rounded"
                style="
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
              <a href="admission-programs-fees-structure"
                class="btn text-white w-100 p-3 rounded"
                style="
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

          <hr>

          <div class="row">
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/soa-1.jpg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Architecture (RSA)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-architecture')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-architecture')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/applied.001.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Applied & Pure Sciences (RSAPS)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('royal-s-school-of-applied-pure-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-applied-purescience')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/business.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Business (RSB)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-business')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-business')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/behavioral.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Behavioral & Allied Sciences (RSBAS)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-psychology')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-allied-sciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rsbsc-school-header.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Bio-sciences (RSBSC)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('royal-s-school-of-bio-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-bio-sciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/commerce.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Commerce (RSC)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-commerce')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-commerce')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/media.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Communications & Media (RSCOM)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-communications-media')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('rscom-faculty')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/design.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Design (RSD)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('royal-s-school-of-design')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-design')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/earth.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Environmental & Earth Sciences (RSEES)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('royal-s-school-of-enviroment-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-environmental-earth')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/soet.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Engineering & Technology (RSET)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="royal-s-school-of-engineering-technology" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-engineeringtechnology')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/art.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Fine Arts (RSFA)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-fine-arts')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-finearts')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/fashion.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Fashion Design & Technology (RSFT)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-fashion-design')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-fashion-design')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/humanities.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Humanities & Social Sciences (RSHSS)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="royal-s-school-of-humanities" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-humanities-social')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/hotel-mgn.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Hotel Management (RSHM)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-hotel-management')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-hotel-management')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/it-school.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Information Technology (RSIT)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-information-technology')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-information-technology')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/law.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Law & Administration(RSLA)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-law')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-law-administration')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rgu-schools.003.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Life Sciences (RSLSC)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('royal-s-school-of-life-science')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-lifesciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/rgu-campus.001.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Languages (RSL)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-languages')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-languages')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/schools-library.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Library and Information Science (RSLISC)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-library-information')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-librarysciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/medical.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Medical & Allied Sciences (RSMAS)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="royal-s-school-of-medical-allied-science" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-medical&allidesciences')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/nursing.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Nursing (RSN)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-nursing')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-nursing')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/pharmacy.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Pharmacy (RSP)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-pharmacy')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-pharmacy')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/travel.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Royal School of Travel & Tourism Management (RSTTM)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="{{route('department-travel')}}" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Department
                      </a>
                      <a class="para1" href="{{route('faculty-travel-tourism')}}" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Faculty
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-3">
              <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                <div class="p-3">
                  <img style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;" src="mobile-assets/school-rgu/IKS LOGO-new.jpeg" class="img-fluid rounded"/>
                </div>
                <div class="card-body d-flex flex-column flex-grow-1">
                  <h5 style="font-weight: 600; color: #27467A;" class="card-title headd3 pb-4">Indian Knowledge System (IKS)</h5>
                  <div class="mt-auto mb-4">
                    <div class="d-flex justify-content-between">
                      <a class="para1" href="indian-knowledge-system-cell-about" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        About IKS
                      </a>
                      <a class="para1" href="indian-knowledge-system-cell-composition" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Composition
                      </a>
                    </div>
                    <div class="d-flex pt-2 justify-content-between">
                      <a class="para1" href="indian-knowledge-system-cell-events" style="background-color: #27467A; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                        Events
                      </a>
                      <a class="para1" href="indian-knowledge-system-cell-syllabus" style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
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
        <!--End About-->
    </div><!-- #page -->
@endsection

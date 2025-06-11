@extends('frontend.master')
@section('title', 'Diverse Choices : The Assam Royal Global University')
@section('meta_description', 'RGU offers different professional courses like Engineering and Technology, Business, Commerce, Architecture, Fashion Designing, Fine Arts, Pure and Applied Sciences, Information Technology.')
@section('meta_keywords', 'Diverse Choices')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
           <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/diverse-choices/mob-diverse-choices.png" />

            <div style="padding: 50px 20px; background-image: url(mobile-assets/diverse-choices/bg.svg);">
                <div class="row">

                    <div class="col-lg-4 mb-4">
                        <a href="doctoral-programme">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/1.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Programme
                                    </h5>

                                    <a href="doctoral-programme">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <a href="programs">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/2.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Eligibility
                                        & Selection</h5>

                                    <a href="programs">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <a href="laboratories">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/3.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">High Tech
                                        Labs</h5>

                                    <a href="laboratories">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <a href="innovation">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/4.JPG"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Innovation
                                    </h5>

                                    <a href="innovation">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <a href="strategic-location">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/5.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Location
                                    </h5>

                                    <a href="strategic-location">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <a href="award">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 340px;">
                                <div style="padding: 15px 15px 0px 15px;">
                                    <img style="height: 200px; width: 100%;" src="mobile-assets/diverse-choices/6.jpg"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column flex-grow-1">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd2 pb-2">Award &
                                        Honors</h5>

                                    <a href="award">
                                        <p class="card-text mobile-para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">
                                            Explore More</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
           </div>
        </div>

        <div class="website">

        <div id="page" class="site site_wrapper">

             <!--Start Header-->
             @include('frontend/components/aheader')
            <!--End Header-->

            <img src="mobile-assets/diverse-choices/web.jpg"/>

            <div style="padding: 50px 80px; background-image: url(mobile-assets/diverse-choices/bg.svg);">
                <div class="row">

                   <div class="col-lg-4 mb-4">
                        <a href="doctoral-programme"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                             <div class="p-3">
                               <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/1.jpg" class="img-fluid rounded"/>
                             </div>
                             <div class="card-body d-flex flex-column flex-grow-1">
                               <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Programme</h5>

                               <a href="doctoral-programme"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                             </div>
                         </div>
                       </a>
                   </div>

                   <div class="col-lg-4 mb-4">
                    <a href="programs"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                         <div class="p-3">
                           <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/2.jpg" class="img-fluid rounded"/>
                         </div>
                         <div class="card-body d-flex flex-column flex-grow-1">
                           <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Eligibility & Selection</h5>

                           <a href="programs"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                         </div>
                     </div>
                   </a>
                   </div>

                   <div class="col-lg-4 mb-4">
                <a href="laboratories"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                     <div class="p-3">
                       <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/3.jpg" class="img-fluid rounded"/>
                     </div>
                     <div class="card-body d-flex flex-column flex-grow-1">
                       <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">High Tech Labs</h5>

                       <a href="laboratories"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                     </div>
                 </div>
               </a>
                   </div>

                   <div class="col-lg-4 mb-4">
                    <a href="innovation"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                         <div class="p-3">
                           <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/4.JPG" class="img-fluid rounded"/>
                         </div>
                         <div class="card-body d-flex flex-column flex-grow-1">
                           <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Innovation</h5>

                           <a href="innovation"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                         </div>
                     </div>
                   </a>
                   </div>

                   <div class="col-lg-4 mb-4">
                    <a href="strategic-location"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                         <div class="p-3">
                           <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/5.jpg" class="img-fluid rounded"/>
                         </div>
                         <div class="card-body d-flex flex-column flex-grow-1">
                           <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Location</h5>

                           <a href="strategic-location"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                         </div>
                     </div>
                   </a>
                   </div>

                   <div class="col-lg-4 mb-4">
                    <a href="award"> <div class="card rounded d-flex flex-column" style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 400px;">
                         <div class="p-3">
                           <img style="height: 230px; width: 100%;" src="mobile-assets/diverse-choices/6.jpg" class="img-fluid rounded"/>
                         </div>
                         <div class="card-body d-flex flex-column flex-grow-1">
                           <h5 style="font-weight: 800; color: #27467A;" class="card-title headd2 pb-2">Award & Honors</h5>

                           <a href="award"><p class="card-text para1 fw-bold half-underline mt-auto" style="color: #FF9A1E;">Explore More</p></a>
                         </div>
                     </div>
                   </a>
                   </div>

                </div>
            </div>

        </div>
        </div>
@endsection

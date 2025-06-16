@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/notification/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 90px; position: relative;" src="mobile-assets/notification/mob-notification.png" alt="">

            <div style="text-align: center; padding: 30px 0px 60px 0px;">
                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pb-3"
                    style="color: #27467A; font-weight: 500;">
                    All <span style="color: #FF9A1E; font-weight: 500;">Notifications</span></h2>


                <div
                    style="width: 90%; margin: 0 auto; padding: 15px; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); border-radius: 5px; background-color: #fff;">
                    {{-- <h2 class="mobile-headd3 fw-bold text-center pt-2 pb-2" style="color: #d9534f; font-weight: 500;">
                        Date: 20/12/2025</h2>
                    <hr> --}}
                    <ul class="mobile-para1" style="list-style-type: none; padding: 0; margin: 0;">
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a download href="https://media.rgu.ac/phd.pdf"
                                style="text-decoration: none; color: #27467A;">Admission Open For Ph.D. 2025-2026</a><a href="https://media.rgu.ac/phd.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a download href="https://media.rgu.ac/Brochure/ICSP.pdf"
                                style="text-decoration: none; color: #27467A;">Download Civil Service Brochure</a><a href="https://media.rgu.ac/Brochure/ICSP.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a download href="https://media.rgu.ac/Brochure/sports-policy.pdf"
                                style="text-decoration: none; color: #27467A;">Download Sports Policy Brochure</a><a href="https://media.rgu.ac/Brochure/sports-policy.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>

                    </ul>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/notification/web-notification.png" alt="">

            <div style="text-align: center; padding: 30px 80px 60px 80px;">
                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pb-3"
                    style="color: #27467A; font-weight: 500;">
                    All <span style="color: #FF9A1E; font-weight: 500;">Notifications</span>
                </h2>



                <div
                    style="width: 90%; margin: 0 auto; padding: 15px; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); border-radius: 5px; background-color: #fff;">
                    {{-- <h2 class="headd3 fw-bold text-center pt-2 pb-2" style="color: #d9534f; font-weight: 500;">
                        Date: 20/12/2025</h2>
                    <hr> --}}
                    <ul class="para1" style="list-style-type: none; padding: 0; margin: 0;">
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a dowload href="https://media.rgu.ac/phd.pdf"
                                style="text-decoration: none; color: #27467A;">Admission Open For Ph.D. 2025-2026</a><a href="https://media.rgu.ac/phd.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a dowload href="https://media.rgu.ac/Brochure/ICSP.pdf"
                                style="text-decoration: none; color: #27467A;">Download Civil Service Brochure</a>  <a href="https://media.rgu.ac/Brochure/ICSP.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>
                        <li style="padding: 10px; border-bottom: 1px solid #ccc;"><a dowload href="https://media.rgu.ac/Brochure/sports-policy.pdf"
                                style="text-decoration: none; color: #27467A;">Download Sports Policy Brochure</a>  <a href="https://media.rgu.ac/Brochure/sports-policy.pdf" style="margin-left: 10px; color: #d9534f;"><i
                                    class="fas fa-file-pdf"></i></a></li>

                    </ul>
                </div>


            </div>


        </div>
    </div>
@endsection

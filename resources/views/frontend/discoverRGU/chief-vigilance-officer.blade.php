@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px">
            <img src="mobile-assets/cov/cvo-banner-mob.png" />
        </div>

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div>
            <img src="mobile-assets/cov/cvo-banner.png"/>
        </div>


    </div>
            <div class="pt-5 pb-5 container">
                <div class="row">
                    <div class="col-lg-6 text-dark" style="text-align: justify; font-size: 24px; line-height: 1.7;">
                        The Chief Vigilance Officer (CVO) of The Assam Royal Global University is responsible for promoting
                        transparency,
                        accountability, and integrity across all administrative and academic functions of the University. The CVO
                        advises the
                        University administration on vigilance-related matters, ensures adherence to ethical conduct and statutory
                        rules, and
                        oversees the prevention and detection of any irregularities.
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25);">
                            <div class="p-3">
                                <img style="height: 290px; width: 100%;" src="mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    class="img-fluid rounded border" />
                            </div>
                            <div class="card-body d-flex flex-column flex-grow-1" style="position: relative; padding-bottom: 10px;">
                                <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                    Prof. Diganta Munshi
                                </h5>
                                <ul class="para1 pb-1" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                    <li>Professor & Registrar, Administration</li>
                                    <li><i class="fa-solid fa-envelope" style="color:#007bff; margin-right:8px;"></i> registrar@rgu.ac</li>
                                    <li><i class="fa-solid fa-phone" style="color:#007bff; margin-right:8px;"></i> 8158827035</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

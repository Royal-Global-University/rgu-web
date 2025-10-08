@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div
            style="background-image: url(mobile-assets/blog/climate-change/banner.png); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
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
                        <div class="card-body d-flex flex-column flex-grow-1" style="position: relative; padding-bottom: 50px;">
                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                Prof. Diganta Munshi
                            </h5>
                            <ul class="para1 pb-3" style="color: #27467A; font-size: 16px; line-height: 1.4;">
                                <li>• Professor & Registrar, Administration</li>
                                <li>• Director, IQAC</li>
                                <li>• Dean, Royal School of Engineering & Technology</li>
                                <li>• Dean, Royal School of Information Technology</li>
                            </ul>

                            <a href="/faculty-diganta-munshi" style="position: absolute; bottom: 20px;">
                                                                                    <p class="card-text para1 fw-bold" style="color: #FF9A1E;">View Profile</p>
                                                                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

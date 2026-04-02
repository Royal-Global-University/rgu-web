@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px;">
            <img src="/mobile-assets/phd-awarded/phdaward.png" />
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="/mobile-assets/phd-awarded/phdaward-web.png" />

    </div>

    <div class="container mb-5 mt-5">
        <div class="row text-center">

            <div class="col-lg-4 p-2">
               
            </div>

            <!-- February -->
            <div class="col-lg-4 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D.2026/PhD-Notification-31.03.2026.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    March
                </a>
            </div>

            <div class="col-lg-4 p-2">
               
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

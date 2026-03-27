@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px;">
            <img src="home-banner/nirf-mob.png" />
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="home-banner/nirf-web.png" />

    </div>

    <div class="container mb-5 mt-5">
        <div class="row text-center">

            <!-- August -->
            <div class="col-lg-4">
                <a href="nirf-2026"
                    style="padding:60px 120px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>2023</p>
                    </div>
                </a>
            </div>

            <!-- October -->
            <div class="col-lg-4">
                <a href="nirf-2026"
                    style="padding:60px 120px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>2024</p>
                    </div>
                </a>
            </div>

            <!-- November -->
            <div class="col-lg-4">
                <a href="nirf-2026"
                    style="padding:60px 120px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>2025</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

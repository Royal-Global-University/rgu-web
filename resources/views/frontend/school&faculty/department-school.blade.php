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
        <div class="pt-4">
            <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text text-center">
                Royal School of Engineering & Technology (RSET)</h1><br>
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <a href="Department-CSE.html">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h3 class="heading">Department of CSE <br><br></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Department-Mechanical-Engineering.html">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="heading">Department of ME <br><br></h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Department-Civil-Engineering.html">
                        <div class="card p-4">
                            <div class="icon mb-3">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <h3 class="heading">Department of CE<br><br></h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

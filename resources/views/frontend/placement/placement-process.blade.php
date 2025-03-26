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
                <div>
                    <img src="assets/img/process/banner.svg" alt="">
                </div>

                <div class="container-fluid" style="padding: 20px 80px;">
                    <div class="para1 text-dark pb-2 text-justify">Organizations interested in hiring and offering training
                        opportunities to students at The Assam Royal Global University contact the Royal Centre for Corporate Relations
                        (RCCR) with details of Job or Internship/Project work being offered and highlight specific requirements, if any.
                        Upon receipt of the same, members from RCCR share complete details of job/internship opportunity to the students
                        and make the necessary arrangements for pre-placement talk, campus visit and help coordinate recruitment
                        exercise on campus or through virtual mode.
                    </div>

                    <div style="display: flex; justify-content: center;" class="pb-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <img class="rounded" src="assets/img/process/head1.png" alt="Image 1"
                                    style="width: 1400px; height: auto;">
                            </div>
                        </div>
                    </div>

                    <div class="para1 text-dark pb-3 text-justify">Every organization is requested to conduct a pre-placement talk to
                        provide the students an opportunity to understand the organization, its work culture, job profile offered,
                        remuneration, posting related details etc. before participating in the recruitment procedure so that they can
                        perform to the best of their abilities.
                    </div>

                    <div class="para1 text-dark pb-3 text-justify">The placement process involves strict norms and policies which are
                        required to be followed by the students who opt for placement support from the University. A declaration is
                        taken at the beginning of the final year from the students to understand how many students need/do not need
                        placement assistance.
                    </div>

                    <div class="para1 text-dark pb-3 text-justify">Regular interactive sessions with students for understanding their
                        perspectives and expectations (regarding placement) and appraising them of the current job scenario are
                        conducted. RCCR membersvisits prospective employers in industrial and corporate sectors and acquaint them with
                        the talented and industry-ready youths of The Assam Royal Global University.
                    </div>

                </div>

                <!--End About-->
            </div><!-- #page -->
        @endsection

        <!--End About-->
    </div><!-- #page -->
@endsection

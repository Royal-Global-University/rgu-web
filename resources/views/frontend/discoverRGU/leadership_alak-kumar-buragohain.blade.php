@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
            <section>
        <div style="background-color: #E2EAF7;">
            <div class="container-fluid">
                <div class="p-4">
                    <h1 class="headd2 elementor-gt-heading kd-section-title-1 kd-title-ani kd-split-text text-center">
                        A Message from the Chairperson Academics</h1>
                    <div class="row pt-4">
                        <div class="col-lg-7">
                            <div class="p-4 rounded shadow-lg" style="text-align:justify; background-color: #f7f7f7;">
                                <p class="para1" style="color: #000000;">&quot;<i>Reimagining Education at The Assam Royal Global University</i>&quot;<br>
                                    The Assam Royal Global University (RGU), a leading University in the North-East, offers the students a vast range of subjects to enable them to chart their unique career pathways. It is not the wide array of subjects alone, this University extends infinite opportunities to explore the inherent talents and natural aptitudes of the young students. At RGU the students learn their chosen subjects from highly qualified and experienced faculty members drawn from all over the country. While they are enabled to shape their future career progression, instill the values and the virtutes to become good citizens, they construct their imaginations for a better life for them and for the world tomorrow. RGU is the place where science and technology, engineering and architecture, design and fine arts, humanities and social sciences, law and forensic science, commerce, and management science blend in unique combinations as the students explore their interests in these multitude of the subjects within a large varied, and flexible framework.<br><br>

                                    At RGU, the joy of learning and the excitement of exploration of the world through critical and creative thinking converge in reimagining and redefining education.&quot;<br><br>
                                </p>
                                <p>
                                    <span class="headd3" style="color: #FF9A1E; font-weight: bold;">Prof (Dr.) Alak Kumar Buragohain,</span><br>
                                    <span class="para1 text-dark">(Ph.D.- Imperial College of Technology and Medicine, London Former Founder Head of Department of Molecular Biology & Bio-technology, Tezpur University Former Vice Chancellor - Dibrugarh University) <br>The Assam Royal Global University
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="assets/img/officers/details-pic.png" alt="Prof (Dr.) Alak Kumar Buragohain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End About-->
    </div><!-- #page -->
@endsection

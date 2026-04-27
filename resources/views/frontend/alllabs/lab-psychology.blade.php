@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px;"></div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>
    <div class="container">

        <div class="row pt-5">
            <div class="col-lg-6">
                <img class="pt-3 rounded" src="/mobile-assets/Psychological/Picture1.png"/>
            </div>
            <div class="col-lg-6">
                <h3 class="text-dark fw-bold text-center">Psychological Lab</h3>
                <p class="text-dark" style="text-align: justify">Situated in Block A, 2nd floor, the Psychological Laboratory is equipped with various
                    types of psychological experiment and assessments. These rooms are soundproof and have controlled
                    lighting to ensure optimal conditions for sensitive experiments. The laboratory is stocked with a wide
                    range of psychometric tools, including standardized tests and questionnaires, used for assessing
                    cognitive abilities, personality traits, and other psychological parameters. These tools are essential
                    for both research and clinical practice.</p>
                <p class="text-dark" style="text-align: justify">The practical exposure gained in psychological laboratory enriches the learning
                    experience. Students can see the real-world application of theoretical concepts, making learning more
                    engaging and effective. Access to well-equipped laboratory encourages students to undertake independent
                    research projects, fostering a culture of inquiry and proper investigation. This is particularly
                    beneficial for students planning to pursue advanced degrees or careers in research.</p>
            </div>
        </div>
        <p class="text-dark pt-3 fw-bold">Some of the available Psychometric and Experimental tools in Psychological Laboratory are:</p>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="text-dark ps-3 mb-0">
                        <li>Raven’s Standard Progressive Matrices</li>
                        <li>Binet Kamat Test of Intelligence</li>
                        <li>Thematic Apperception Test (TAT)</li>
                        <li>16 PF Questionnaire</li>
                        <li>PGI Memory Scale</li>
                        <li>Social Intelligence Scale</li>
                        <li>Bender Gestalt 2</li>
                        <li>Memory Drum Apparatus</li>
                        <li>Fish Bowl etc.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="pt-3 pb-3">
            <h3 class="text-dark text-center">Glimpse of Our Lab</h3>
            <div class="row">
                <div class="col-lg-4 p-3">
                    <img src="/mobile-assets/Psychological/Picture2.png"/>
                </div>
                <div class="col-lg-4 p-3">
                    <img src="/mobile-assets/Psychological/Picture3.png"/>
                </div>
                <div class="col-lg-4 p-3">
                    <img src="/mobile-assets/Psychological/Picture4.png"/>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/counciling-cell/mobile-counselling1.png" alt="">


            <img src="mobile-assets/counciling-cell/mobile-counselling2.png" alt="">

            <div class="d-flex align-items-center rounded border mb-3"
                style="gap: 130px; padding: 20px; background-color: #dce2ff;">
                <span class="mobile-para1" style="font-weight: bold; color: #272d7a; font-size: 20px; line-height: 1.3;">Get
                    Help Today!</span>
                <a href="mailto:counselling@rgu.ac" class="btn mobile-para1"
                    style="background-color: #3060cf; color: white; font-weight: bold; padding: 10px 16px; border-radius: 5px; text-decoration: none; line-height: 1.3;">
                    Click Here
                </a>
            </div>

        </div>
    </div>

            <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->


            <a href="mailto:counselling@rgu.ac">
                <img src="mobile-assets/counciling-cell/web-banner.png" alt="">
            </a>

            <div style="background-image: url(mobile-assets/counciling-cell/bg.svg);">
            <div class="container">

                <p class="para1 text-dark pt-3" style="text-align: justify;">Mental health as a concept is gaining prominence in the Indian context rapidly. Till the past decade this was an area of prejudice and stigma, but open dialogue, conversations, and narratives on the holistic domains of health (of which mental health is a major part) have taken over the discursive space. This is reflected in several fields ranging from academic curriculum to popular culture portrayals (movies, novels, web series, documentaries, and the likes).
                </p>

                <p class="para1 text-dark" style="text-align: justify;">
                    In the context of university settings, students are caught up in multiple pressures from academic progression, career uncertainty, peer, parental and societal expectations and so on. All of these have a profound effect on their mental, physical, and emotional health. Over and above these, the COVID-19 pandemic has brought in its wake many changes which eventually affect the students’ performance and overall well-being. Against this background and considering the advice of the Hon’ble Chancellor, an institutional mechanism is operationalized to address these critical issues affecting the students through the formation of the ‘Royal Centre for Wellbeing’ (RCFW).
                </p>

                <p class="para1 text-dark" style="text-align: justify;">
                    RCI certified and Licensedconsultant professionals are available in the cell. The Clinical Psychologist provides face to face individual sessions with the students seeking help. This unit is exclusively for RGU studentsand can also be accessed by faculty members if need be. The Clinical Psychologist is professionally qualified and competent to handle general issues (Ex- anxiety, stress, depression, body-image related, eating disorders, social isolation, anger-management, sexuality, career, identity, self-esteem based, and so on) as well as specific issues (mental health conditions that students would seek help for such as family, peer-group, or romantic relationships).
                </p>

                <p class="para1 text-dark" style="text-align: justify;">
                    In addition to the services of the external professional, in-house counseling is also provided by faculty members from the Department of Psychology with a commitment to helping students to prioritize their mental health, seek help when necessary, and begin on a path to greater resilience, growth, and fulfilment. The idea is to empower students by allowing them to reach their full academic and personal potential.
                </p>

                <p class="para1 text-dark" style="text-align: justify;">
                    The sessions are scheduled for students upon receiving a request from faculty mentors (through the mentor-mentee system in the university) from respective departments. Students may also write individually to counselling@rgu.ac for appointments. All the above are conducted once students voluntarily seek support/help regarding mental health.
                </p>
            </div>
        </div>

            </div>
@endsection

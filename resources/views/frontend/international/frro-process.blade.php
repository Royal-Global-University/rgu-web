@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <div>
                <img src="mobile-assets/intern-frro-process/mob-ban.png" alt="">
            </div>

            <section style="background-image: url(mobile-assets/intern-frro-process/bg.svg); background-size: cover;">

                <div class="container pt-3 pb-3">

                    <div class="mobile-headd3 text-danger fw-bold pb-2 text-center">(Not applicable in case of Nepalese and
                        Bhutanese students)
                    </div>

                    <div class="mobile-para1 pb-3" style="color: #264273; text-align: justify;">All students having a valid
                        Indian visa of more than 180 days must obtain a residential permit from the local <strong>Foreigner
                            Registration Office (FRO)</strong> as per Indian immigration law.
                    </div>

                    <div class="mobile-para1 pb-3" style="color: #264273; text-align: justify;">The students need to visit the
                        Branding & Communication Department in the University located at Ground Floor, A-Block and contact
                        <strong>Ms. Gurpreet Kaur Anand, Deputy Director,</strong> The Office of International Affairs Email :
                        gkanand@rgu.ac, Phone : +91 9864049818, to complete the registration process.
                    </div>

                    <div class="mobile-para1 pb-3" style="color: #264273; text-align: justify;">As per immigration law, students
                        should complete the process within 14 days (may vary for different countries) from the date of their
                        arrival for beyond 14 days penalties will be levied for late registration.
                    </div>

                    <div class="mobile-para1" style="color: #264273; text-align: justify;">To avoid any such hassles, students
                        are advised to visit the Branding & Communication Department and complete these formalities the same day
                        of their reporting to the University who will also guide and complete the process of the student.
                    </div>


                </div>

            </section>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <!-- header image  -->
        <div>
            <img src="mobile-assets/intern-frro-process/web-ban.png" alt="">
        </div>
        <!-- header image  -->

        <section style="background-image: url(mobile-assets/intern-frro-process/bg.svg); background-size: cover;">

            <div class="container p-5">

                <div class="headd2 text-danger fw-bold pb-5 text-center">(Not applicable in case of Nepalese and Bhutanese
                    students)
                </div>

                <div class="para1 pb-3" style="color: #264273; text-align: justify;">All students having a valid Indian visa
                    of more than 180 days must obtain a residential permit from the local <strong>Foreigner Registration
                        Office (FRO)</strong> as per Indian immigration law.
                </div>

                <div class="para1 pb-3" style="color: #264273; text-align: justify;">The students need to visit the Branding
                    & Communication Department in the University located at Ground Floor, A-Block and contact <strong>Ms.
                        Gurpreet Kaur Anand, Deputy Director,</strong> The Office of International Affairs Email :
                    gkanand@rgu.ac, Phone : +91 9864049818, to complete the registration process.
                </div>

                <div class="para1 pb-3" style="color: #264273; text-align: justify;">As per immigration law, students should
                    complete the process within 14 days (may vary for different countries) from the date of their arrival
                    for beyond 14 days penalties will be levied for late registration.
                </div>

                <div class="para1" style="color: #264273; text-align: justify;">To avoid any such hassles, students are
                    advised to visit the Branding & Communication Department and complete these formalities the same day of
                    their reporting to the University who will also guide and complete the process of the student.
                </div>


            </div>

        </section>

    </div>
@endsection

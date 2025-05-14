@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-3" style="padding-top: 90px; position: relative;">
            <div style="background-image: url(mobile-assets/internal-cc/bg.svg); background-size: cover; padding: 30px 0px;">

                <h2 class="headd2 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-4 text-center"
                    style="color: #27467A; font-weight: 900;">
                    Students' Grievance <span style="color: #FF9A1E; font-weight: 500;">Redressal Committee (SGRC)</span></h2>

                <div class="container">

                    <p class="para1" style="text-align: justify; color: #13223b;">
                        The Students' Grievance Redressal Committee (SGRC) has been reconstituted
                        with immediate effect, as per the University Grants Commission (UGC) Regulations for Redressal of
                        Grievances of Students, 2023 (Notification Date: April 11, 2023).
                    </p>



                    <hr>
                    <div class="text-center p-3">

                        <a href="#" role="button" class="btn btn-danger fw-bold para1" style="width: 300px;">
                            Register Complaints
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <p class="text-dark headd3 fw-bold">
                Members of Internal Complaints Committee (ICC), RGU –
            </p>

            <div class="table-responsive">
                <table class="table border table-responsive table-striped fs-16 vertical-scroll">
                    <thead class="text-light  para1" style="font-size: 14px;">
                        <tr class="text-white para1 text-dark" style="background-color: #005273;">
                            <th>Name of the staff/ faculty</th>
                            <th>Category of nomination</th>
                            <th>Designation in SGRC</th>
                        </tr>
                    </thead>
                    <tbody class="para1 text-dark">
                        <tr>
                            <td>Prof. Abhijit Dutta<br><small>Professor & Dean, Royal School of Medical & Allied Health
                                    Sciences</small></td>
                            <td>A Professor as Chairperson</td>
                            <td>Chairperson</td>
                        </tr>
                        <tr>
                            <td>Ms. Angira Mimani<br><small>Associate Professor, RSB and Associate Dean, Student Welfare</small>
                            </td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Prof. (Dr.) Atanu Bhattacharjee<br><small>Professor, RSP and Jt. CoE</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Dr. Punam Debbarma<br><small>Professor, RSN</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Dr. Sthiti Porna Dutta<br><small>Assistant Professor, Forensic Sciences, RSLSC</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member Secretary</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-dark para1 fw-bold pt-3 pb-5">
                The email id on which students can send their grievances is <a class="text-primary"
                    href="grievance@rgu.ac">grievance@rgu.ac</a>.
            </p>

        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div class="pb-3 ">
            <div style="background-image: url(mobile-assets/internal-cc/bg.svg); background-size: cover; padding: 30px 0px;">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-4 text-center"
                    style="color: #27467A; font-weight: 900;">
                    Students' Grievance <span style="color: #FF9A1E; font-weight: 500;">Redressal Committee (SGRC)</span></h2>

                <div class="container">

                    <p class="headd3" style="text-align: justify; color: #13223b;">
                        The Students' Grievance Redressal Committee (SGRC) has been reconstituted
                        with immediate effect, as per the University Grants Commission (UGC) Regulations for Redressal of
                        Grievances of Students, 2023 (Notification Date: April 11, 2023).
                    </p>



                    <hr>
                    <div class="text-center p-3">

                        <a href="#" role="button" class="btn btn-danger fw-bold headd3" style="width: 500px;">
                            Register Complaints
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <p class="text-dark headd3 fw-bold">
                Members of Internal Complaints Committee (ICC), RGU –
            </p>
            <div class="table-responsive">
                <table class="table border table-responsive table-striped fs-16 vertical-scroll">
                    <thead class="text-light  para1" style="font-size: 14px;">
                        <tr class="text-white para1 text-dark" style="background-color: #005273;">
                            <th>Name of the staff/ faculty</th>
                            <th>Category of nomination</th>
                            <th>Designation in SGRC</th>
                        </tr>
                    </thead>
                    <tbody class="para1 text-dark">
                        <tr>
                            <td>Prof. Abhijit Dutta<br><small>Professor & Dean, Royal School of Medical & Allied Health
                                    Sciences</small></td>
                            <td>A Professor as Chairperson</td>
                            <td>Chairperson</td>
                        </tr>
                        <tr>
                            <td>Ms. Angira Mimani<br><small>Associate Professor, RSB and Associate Dean, Student Welfare</small>
                            </td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Prof. (Dr.) Atanu Bhattacharjee<br><small>Professor, RSP and Jt. CoE</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Dr. Punam Debbarma<br><small>Professor, RSN</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Dr. Sthiti Porna Dutta<br><small>Assistant Professor, Forensic Sciences, RSLSC</small></td>
                            <td>Four Professors/Senior Faculty Members of the institution as members</td>
                            <td>Member Secretary</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-dark headd3 fw-bold pt-3">
                The email id on which students can send their grievances is <a class="text-primary"
                    href="grievance@rgu.ac">grievance@rgu.ac</a>.
            </p>
        </div>
    </div>
@endsection

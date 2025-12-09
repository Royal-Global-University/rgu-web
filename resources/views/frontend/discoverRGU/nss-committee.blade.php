@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                University Advisory <br><span style="color: #FF9A1E; font-weight: 500;"> Committee-NSS</span></h2>
        </div>

        <div class="website">
              @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                University Advisory <span style="color: #FF9A1E; font-weight: 500;"> Committee-NSS</span></h2>

        </div>

        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }
        </style>

        <div class="section-f">
            <div class="container">
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-hover align-middle mobile-para1">
                        <thead style="background-color: #24477f; color: #fff;">
                            <tr>
                                <th scope="col">Serial Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong>Prof. (Dr) Alak K Buragohain</strong></td>
                                <td>Vice Chancellor</td>
                                <td>Chairman</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong>Prof. (Dr) DN Singh</strong></td>
                                <td>Registrar (Academics)</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong>Prof. (Dr) Diganta Munshi</strong></td>
                                <td>Registrar (Administration)</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong>Shri. N. C. Deori</strong></td>
                                <td>Youth Officer, Regional Directorate of NSS</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong>Dr. Banani Das Hazarika</strong></td>
                                <td>Assistant Professor, Dept. of English & Deputy Dean, Student Affairs</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong>Dr. Rupesh Kumar</strong></td>
                                <td>Assistant Professor, Biotechnology & Coordinator, MLT, RSMAS</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong>Dr. Kuntala Roy Choudhury</strong></td>
                                <td>Assistant Professor, Member Secretary, Legal Aid Clinic, RSLA</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong>Dr. Tripti Das</strong></td>
                                <td>Assistant Professor & Coordinator, Department of Sociology, RSHSS</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><strong>Dr. Amlan Das</strong></td>
                                <td>Assistant Professor, Department of Social Work, RSHSS</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><strong>Pragyan Deep Kalita</strong></td>
                                <td>Physiotherapy Semester: 7th</td>
                                <td>NSS Student Representative</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><strong>Prabhat Saha</strong></td>
                                <td>Pharmacy Semester- 5th</td>
                                <td>NSS Student Representative</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><strong>Dr. Sampadha Tiwari</strong></td>
                                <td>Assistant Professor, Royal School of Business</td>
                                <td>Programme Officer</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td><strong>Ms. Nilakshi Deka</strong></td>
                                <td>Assistant Professor, Department of Computer Science and Engineering</td>
                                <td>Programme Officer</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td><strong>Mr. Vijay Sharma</strong></td>
                                <td>Finance Officer</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td><strong>Dr. Priyanka Patowari</strong></td>
                                <td>Assistant Professor & Coordinator, Department of Social Work</td>
                                <td>Member Secretary & Programme Coordinator</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
@endsection

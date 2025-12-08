@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                Institutional Ethical <br><span style="color: #FF9A1E; font-weight: 500;"> Committee (IEC)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Institutional Ethical <span style="color: #FF9A1E; font-weight: 500;"> Committee (IEC)</span></h2>

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
                                <th scope="col">SI. No</th>
                                <th scope="col">Name & Designation</th>
                                <th scope="col">Position in IEC</th>
                                <th scope="col">Institution/ Organisation</th>
                                <th scope="col">Category (as per ICMR Guidelines)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Dr. Rathindra Bhuyan</strong><br>
                                    Professor & Advisor<br>
                                    RSMAS, RSN, RSP, RAMCH
                                </td>
                                <td>Chairperson</td>
                                <td>The Assam Royal Global University</td>
                                <td>Prior experience of having served in an ethics committee</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Dr. Dharmeswar Barhoi</strong><br>
                                    Assistant Professor, Dept. of Zoology, RSLSC
                                </td>
                                <td>Member secretary</td>
                                <td>The Assam Royal Global University</td>
                                <td>Member secretary</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Prof. (Dr.) Abhijit Dutta</strong><br>
                                    Dean, RSMAS
                                </td>
                                <td>Member</td>
                                <td>The Assam Royal Global University</td>
                                <td>Basic Medical Scientist</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <strong>Dr. Amal Chandra Kataki</strong><br>
                                    Former Director<br>
                                    Dr B Borooah Cancer Institute Guwahati, Assam
                                </td>
                                <td>Member</td>
                                <td>External Organisation</td>
                                <td>Clinician/Medical Scientist (Outside Institution)</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <strong>Dr. Bhuban Chandra Baruah</strong><br>
                                    Dean, RSLA
                                </td>
                                <td>Member</td>
                                <td>The Assam Royal Global University</td>
                                <td>Legal expert</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <strong>Mrs. Anurita Pathak Hazarika</strong><br>
                                    Executive Director<br>
                                    North East Network, Guwahati
                                </td>
                                <td>Member</td>
                                <td>External Organization</td>
                                <td>Social Scientist</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <strong>Ms. Amvalika Senapati</strong><br>
                                    Deputy Director<br>
                                    Advocacy Shishu Sarothi
                                </td>
                                <td>Member</td>
                                <td>Shishu Sarothi, NGO, Guwahati</td>
                                <td>Lay Person/Community representative</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

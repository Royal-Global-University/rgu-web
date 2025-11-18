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
            <div>

                <style>
                    /* Custom styles to match your theme */
                    .bg-royal-blue {
                        background-color: #27467A !important;
                        color: white;
                    }

                    .bg-alice-blue {
                        background-color: aliceblue !important;
                    }

                    .table-heading {
                        font-size: 1.1rem;
                        font-weight: bold;
                        text-align: center;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                    }

                    .data-row {
                        text-align: left;
                        padding: 12px 15px !important;
                        vertical-align: middle;
                    }

                    .sl-no {
                        font-weight: bold;
                        color: #27467A;
                        margin-right: 5px;
                    }

                    .meta-info {
                        font-size: 0.85rem;
                        color: #6c757d;
                        display: block;
                        margin-top: 4px;
                    }
                </style>

                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="table-responsive shadow-sm rounded">
                                <table class="table table-bordered mb-0 mobile-para1">

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Chairperson</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">1.</span> <strong>Dr. Rathindra Bhuyan</strong> -
                                                Professor & Advisor,
                                                RSMAS, RSN, RSP, RAMCH
                                                <span class="meta-info">Category: Prior experience of having served in an
                                                    ethics committee
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Member Secretary</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">2.</span> <strong>(Name to be Notified)</strong>
                                                <span class="meta-info">Institution: The Assam Royal Global University
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Members</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">3.</span> <strong>(Dr.) Abhijit Dutta</strong> - Prof.
                                                Dean, RSMAS
                                                <span class="meta-info">Category: Basic Medical Scientist </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">4.</span> <strong>Dr. Dharmeswar Barhoi</strong> -
                                                Assistant Professor,
                                                Dept. of Zoology
                                                <span class="meta-info">Institution: The Assam Royal Global University
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">5.</span> <strong>Dr. Dinesh Goswami</strong> - CEO,
                                                Guwahati Pain and
                                                Palliative Care Society
                                                <span class="meta-info">Category: Clinician/Medical Scientist (Outside
                                                    Institution) </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">6.</span> <strong>Dr. Bhuban Chandra Baruah</strong> -
                                                Dean, Royal School of
                                                Law and Administration
                                                <span class="meta-info">Category: Legal Expert </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">--</span> <strong>Mrs. Anurita Pathak Hazarika</strong>
                                                - Executive
                                                Director, North East Network, Guwahati
                                                <span class="meta-info">Category: Social Scientist (External Organization)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">7.</span> <strong>Prof. (Dr.) Nandana Dutta</strong> -
                                                Dean of Academics,
                                                The Assam Royal Global University
                                                <span class="meta-info">Category: Lay Person/Community representative
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection

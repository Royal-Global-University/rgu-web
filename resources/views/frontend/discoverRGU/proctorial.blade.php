@extends('frontend.master')
@section('title', 'Pictorial Board : The Assam Royal Global University')
@section('meta_description', 'Explore the innovative insights and visual perspectives curated by the Pictorial Board of
    Royal Global University.')
@section('meta_keywords', 'Pictorial Board')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="color: #27467A; font-weight: 900; padding-top: 100px; position: relative;">
                Proctorial <br><span style="color: #FF9A1E; font-weight: 500;"> Board</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Proctorial <span style="color: #FF9A1E; font-weight: 500;"> Board</span></h2>

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
                </style>

                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <p class="fw-bold text-dark" style="text-align: justify; line-height: 1.5;">
                                The Proctorial Board / Discipline Committee of The Assam Royal Global University has been
                                reconstituted
                                with the following members to look after the discipline of the entire campus:
                            </p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="table-responsive shadow-sm rounded">
                                <table class="table table-bordered mb-0 mobile-para1">

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Chief Proctor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">1.</span> <strong>Prof. (Dr) George A.P.</strong> -
                                                Dean RSB & RSC
                                            </td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Deputy Proctor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">3.</span> <strong>Ms. Angira Mimani</strong> -
                                                Associate Dean, DSW
                                            </td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr class="bg-royal-blue">
                                            <th class="table-heading">Joint Deputy Proctor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-alice-blue">
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">4.</span> <strong>Dr. Indrajit Dutta</strong> -
                                                Associate Professor & HOD
                                                RSTTM
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
                                                <span class="sl-no">12.</span> <strong>Ms. Tanjeela Mehboob</strong> -
                                                Asst. Professor, Dept of
                                                Pol Science, RSHSS
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
                                                <span class="sl-no">2.</span> <strong>Prof. (Dr) Diganta Munshi</strong> -
                                                Registrar-Administration, Director IQAC and Dean RSET/RSIT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">5.</span> <strong>Dr. Narinder Kumar</strong> -
                                                Controller of Examinations
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">6.</span> <strong>Ms. Vanita Agarwal</strong> - Head,
                                                Laboratory Services
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">7.</span> <strong>Ms. Dipika T. Agarwal</strong> - Dy
                                                Registrar (HR & RC)
                                                and Coordinator IQAC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">8.</span> <strong>Mr. Mridul Phookan</strong> - Chief
                                                Warden
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">9.</span> <strong>Mr. Shamim A Goney</strong> - Deputy
                                                Registrar
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">10.</span> <strong>Mr. Somiran Buragohain</strong> -
                                                Liaison Officer
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">11.</span> <strong>Ms. K.M. Sudha</strong> - Asst.
                                                Professor, Dept of
                                                History, RSHSS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="data-row">
                                                <span class="sl-no">12.</span> <strong>Prof. Abhijit Dutta</strong> - Dean,
                                                RSMAS
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="container" style="padding-top: 50px">
                    <a href="/mobile-assets/pdf/Proctor Manual.pdf" target="_blank" class="rounded bg-danger text-white fw-bold" style="padding: 10px;">Download Proctorial Board Manual</a>
                </div>


            </div>
        </div>

    </div>
@endsection

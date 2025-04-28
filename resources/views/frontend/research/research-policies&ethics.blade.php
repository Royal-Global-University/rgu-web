@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <div style="padding: 30px 20px;">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-3"
                    style="color: #27467A; font-weight: 900;">
                    Policies <span style="color: #FF9A1E; font-weight: 500;">and Ethics</span></h2>

                <div class="table-responsive">
                    <table class="bg-white table border table-responsive table-striped fs-16 vertical-scroll">
                        <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                            <th class="text-light rt-primary-bg font-weight-bold">Policies</th>
                            <th class="text-light rt-primary-bg font-weight-bold">Action</th>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>
                                    CODE OF ETHICS IN ACADEMIC RESEARCH AT RGU
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><a
                                            target="_blank" href="assets/img/iqac/naac-docs/c2/"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RGU’s POLICY ON RESEARCH
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    SEED-MONEY GRANT POLICY FOR FACULTY MEMBERS
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RESEACH SUPPORT POLICY FOR UG/ PG STUDENTS
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH INCENTIVE POLICY
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>

            </div>

        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Policies <span style="color: #FF9A1E; font-weight: 500;">and Ethics</span></h2>

            <div class="container-fluid" style="padding: 30px 80px;">

                <div class="table-responsive">
                    <table class="bg-white table border table-responsive table-striped fs-16 vertical-scroll">
                        <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                            <th class="text-light rt-primary-bg font-weight-bold">Policies</th>
                            <th class="text-light rt-primary-bg font-weight-bold">Action</th>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>
                                    CODE OF ETHICS IN ACADEMIC RESEARCH AT RGU
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><a
                                            target="_blank" href="#"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RGU’s POLICY ON RESEARCH
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    SEED-MONEY GRANT POLICY FOR FACULTY MEMBERS
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RESEACH SUPPORT POLICY FOR UG/ PG STUDENTS
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                            <tr>
                                <td>
                                    RESEARCH INCENTIVE POLICY
                                </td>
                                <td style="display: flex; justify-content: center;"><a target="_blank" href="#"><button
                                            type="button"
                                            class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>

            </div>

        </section>

    </div>
@endsection

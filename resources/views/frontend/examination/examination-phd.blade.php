@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/examination/members-coe/bg.svg); background-size: cover; padding-top: 90px; position: relative;">

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-2"
                style="color: #27467A; font-weight: 900;">
                Results: <span style="color: #FF9A1E; font-weight: 500;">Ph.D. Courses</span></h2>


            <div class="table-responsive container">
                <table class="bg-white overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16">
                    <thead class="text-white" style="background-color: #27467A;">
                        <th class="text-light mobile-para1 font-weight-bold">COURSES</th>
                        <th class="text-light mobile-para1 font-weight-bold">VIEW</th>
                    </thead>
                    <tbody class="mobile-para1">
                        <tr>
                            <td>2023-24 (Jan24-June24) Ph.D. Course Work Examination Regular Re-evaluation result.pdf</td>
                            <td><a
                                    href="mobile-assets/examination/examination/2023-24 (Jan24-June24) Ph.D. Course Work Examination Regular Re-evaluation result.pdf"><button
                                        type="button" style="background-color: #264273; color: #fff;"
                                        class="btn btn-sm custom-details-btn">View</button></a></td>
                        </tr>
                        <tr>
                            <td>2023-24 (July23-Dec23) Ph.D. Course Work Examination Repeat Re-evaluation Result.pdf</td>
                            <td><a
                                    href="mobile-assets/examination/examination/2023-24 (July23-Dec23) Ph.D. Course Work Examination Repeat Re-evaluation Result.pdf"><button
                                        type="button" style="background-color: #264273; color: #fff;"
                                        class="btn btn-sm custom-details-btn">View</button></a></td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/examination/members-coe/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Results: <span style="color: #FF9A1E; font-weight: 500;">ph.D. Courses</span></h2>

            <div class="container" style="padding: 30px 0px;">
                <div style="background-color: #fff;" class="table-responsive">
                    <table class="bg-white overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-light para1 font-weight-bold">COURSES</th>
                            <th class="text-light para1 font-weight-bold">VIEW</th>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>2023-24 (Jan24-June24) Ph.D. Course Work Examination Regular Re-evaluation result.pdf</td>
                                <td><a
                                        href="mobile-assets/examination/examination/2023-24 (Jan24-June24) Ph.D. Course Work Examination Regular Re-evaluation result.pdf"><button
                                            type="button" style="background-color: #264273; color: #fff;"
                                            class="btn btn-sm custom-details-btn">View</button></a></td>
                            </tr>
                            <tr>
                                <td>2023-24 (July23-Dec23) Ph.D. Course Work Examination Repeat Re-evaluation Result.pdf</td>
                                <td><a
                                        href="mobile-assets/examination/examination/2023-24 (July23-Dec23) Ph.D. Course Work Examination Repeat Re-evaluation Result.pdf"><button
                                            type="button" style="background-color: #264273; color: #fff;"
                                            class="btn btn-sm custom-details-btn">View</button></a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection

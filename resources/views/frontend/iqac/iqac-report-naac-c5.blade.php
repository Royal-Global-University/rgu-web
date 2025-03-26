@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div>
        <img src="assets/img/NAAC/head1.jpeg" alt="">
    </div>

    <div class="container-fluid" style="padding: 50px 80px;">

        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center;"
            class="text-dark fw-bold para1 p-2">
            <th>Criterion 5</th>
        </div>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">5.1: Student Support -</th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>5.1.1 Year-wise list of beneficiary students in each scheme duly signed by the competent authority
                    </td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.1.1 Year-wise list of beneficiary students in each scheme duly signed by the competent authority.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>5.1.1 Student List_Govt Scholarship</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.1.1 Student List_Govt Scholarship.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>5.1.4 Proof of Offline Mechanisms for Redressal</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.1.4 Proof of Offline Mechanisms for Redressal_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">5.2: Student Progression -
                </th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>5.2.1 Number and List of students placed along with placement details</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.2.1 Number and List of students placed along with placement details.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>5.2.2 List of students progressing for Higher Education, with details of program and institution
                    </td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.2.2 List of students progressing for Higher Education, with details of program and institution.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>5.2.3 Certificates of students qualifying in NET-SLET and other Competitive Exams</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.2.3 Certificates of students qualifying in NET-SLET and other Competitive Exams_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">5.3: Student Participation and Activities -
                </th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>5.3.1 e-copies of Award Letters and Certificates </td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c5/5.3.1 e-copies of Award Letters and Certificates 1.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
            </tbody>
        </table>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection

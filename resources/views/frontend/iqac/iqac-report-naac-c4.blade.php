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
            <th>Criterion 4</th>
        </div>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">4.1: Physical Facilities -</th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>4.1.1 Infrastructure Facilities</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/#"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.1.1 Infrastructure Facilities Brochure</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.1.1 Infrastructure Facilities Brochure 1.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.1.2 Annual Budget Allocation and Audit Report for Infrastructure</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Annual Budget Allocation and Audit Report for Infrastructure_2018-23_compressed17062024.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.1.2 Infrastructure Expenditure</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.1.2 Infrastructure Expenditure.pdf"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">4.2: Library as a Learning Resource -
                </th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>4.2.1 Annual Library Report 2022-23</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.2.1 Annual Library Report 2022-23.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.2.1 Library Footfall</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.2.1 Library Footfall.pdf"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.2.2 Annual Budget Allocation and Audit Report for Library</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Annual Budget Allocation and Audit Report for Library_2018-23-compressed17062024.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">4.3: IT Infrastructure -</th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>4.3.1 IT Policy</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.1 IT Policy.pdf"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.3.3 Geotagged Photographs.pdf</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 Geotagged Photographs_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.3.3 Language Lab_Purchase Details</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 Language Lab_Purchase Details_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.3.3 Lecture Capturing System_Purchase Details.pdf</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 Lecture Capturing System_Purchase Details_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.3.3 Lecture Capturing System_Register</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 Lecture Capturing System_Register_compressed.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4.3.3 List of E-contents Developed</td>
                    <td style="display: flex; justify-content: center;"><a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 List of E-contents Developed.pdf"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a></td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">4.3.3 Videos for Various Facilities -
                </th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>Additional Facilities to support Research_Fashion Studio.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Additional Facilities to support Research_Fashion Studio.mp4"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Additional Facilities to support Research_Language Lab.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Additional Facilities to support Research_Language Lab.mp4"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Amphitheatre.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Amphitheatre.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Animal House_1.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Animal House_1.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Animal House_2.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Animal House_2.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Art Gallery_1.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Art Gallery_1.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Art Gallery_2.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Art Gallery_2.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Media Studio.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Media Studio.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Moot Court.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Moot Court.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Museum.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Museum.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Royal Innovation Incubator (Business Lab).mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Royal Innovation Incubator (Business Lab).mp4"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Theatre_D-Block.mp4</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/Theatre_D-Block.mp4"><button type="button"
                                class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4.3.3 Lecture Capturing System Mixing and Editing Software License</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/4.3.3 Lecture Capturing System Mixing and Editing Software License.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4.4.1 Maintenance Expenditure</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/4.4.1 Maintenance Expenditure.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <table class="table border table-responsive table-striped fs-16 vertical-scroll">
            <thead class="text-light rt-primary-bg para1" style="font-size: 14px;">
                <th class="text-light rt-primary-bg font-weight-bold">4.4: Maintenance of Campus Infrastructure -
                </th>
                <th class="text-light rt-primary-bg font-weight-bold">Action</th>
            </thead>
            <tbody class="para1">
                <tr>
                    <td>4.4.1 Annual Budget Allocation and Audit Report for Maintenance</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank"
                            href="assets/img/iqac/naac-docs/c4/Annual Budget Allocation and Audit Report for Maintenance_2018-23-compressed17062024.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4.4.2 Maintenance Registers</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/4.4.2 Maintenance Registers 1.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4.4.1 Maintenance Expenditure</td>
                    <td style="display: flex; justify-content: center;">
                        <a target="_blank" href="assets/img/iqac/naac-docs/c4/4.4.1 Maintenance Expenditure.pdf"><button
                                type="button" class="btn btn-primary btn-sm custom-details-btn">Download</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    <!--End About-->
</div><!-- #page -->
@endsection

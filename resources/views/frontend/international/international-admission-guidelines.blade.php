@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px">
            <img src="mobile-assets/international-pdf/banner/inter-mob.png"/>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img src="mobile-assets/international-pdf/banner/inter-web.png"/>

    </div>
    <div style="background-image: url(mobile-assets/school-rgu/bg.svg);">
        <div class="container">
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: auto;
                    margin-bottom: 50px;
                }

                th,
                td {
                    border: 1px solid #000;
                    padding: 10px;
                    text-align: center;
                    color: #000;
                    font-size: 22px;
                    font-weight: bold;
                }

                th {
                    font-weight: bold;
                    font-size: 24px;
                    background-color: #e68d21;
                    color:#fff;
                }

                .download-btn {
                    background: #0A568D;
                    color: #fff;
                    border: none;
                    padding: 6px 14px;
                    font-size: 18px;
                    cursor: pointer;
                    border-radius: 5px;
                }

                .download-btn:hover {
                    opacity: 0.8;
                }
            </style>

            <h4 class="text-center text-dark pt-3 pb-3">All International applicants are advised to carefully check all
                relevant
                information related to Application Submission, Admission, Fee Payments and related details available in this
                section.</h4>

            <table>
                <tr>
                    <th>SI. No.</th>
                    <th>Document</th>
                    <th>Links</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>International Application form</td>
                    <td><a href="mobile-assets/international-pdf/1.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Information Related to Application Process</td>
                    <td><a href="mobile-assets/international-pdf/2.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>General Admission Guidelines</td>
                    <td><a href="mobile-assets/international-pdf/3.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Disciplinary Misconduct</td>
                    <td><a href="mobile-assets/international-pdf/4.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Guidelines for student’s residential facility</td>
                    <td><a href="mobile-assets/international-pdf/5.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Guidelines for payment of Fees</td>
                    <td><a href="mobile-assets/international-pdf/6.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>VISA Requirements and Guidelines</td>
                    <td><a href="mobile-assets/international-pdf/7.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>International Prospectus</td>
                    {{-- <td><a href="#" target="_blank"><button class="download-btn">Download</button></a></td> --}}
                </tr>
                <tr>
                    <td>9</td>
                    <td>International Fee Structure</td>
                    <td><a href="mobile-assets/international-pdf/9.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Bhutan Fees Structure</td>
                    <td><a href="mobile-assets/international-pdf/10.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Nepal Fees Structure</td>
                    {{-- <td><a href="#" target="_blank"><button class="download-btn">Download</button></a></td> --}}
                </tr>
                <tr>
                    <td>12</td>
                    <td>International Hostel Application Form</td>
                    <td><a href="mobile-assets/international-pdf/12.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Eligibility & Selection Criteria</td>
                    <td><a href="mobile-assets/international-pdf/Criteria.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>

            </table>
        </div>
    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px">
            <img src="home-banner/nirf-mob.png"/>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="home-banner/nirf-web.png"/>

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

            <table>
                <tr>
                    <th>SI. No.</th>
                    <th>Document</th>
                    <th>Links</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>OVERALL</td>
                    <td><a href="mobile-assets/nirf-2026/Assam Royal Global University20260311-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ARCHITECTURE & PLANNING</td>
                    <td><a href="mobile-assets/nirf-2026/Final Architecture - Assam Royal Global University20260226-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ENGINEERING</td>
                    <td><a href="mobile-assets/nirf-2026/Engineering Assam Royal Global University20260303-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>LAW</td>
                    <td><a href="mobile-assets/nirf-2026/Law Assam Royal Global University20260303-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>MANAGEMENT</td>
                    <td><a href="mobile-assets/nirf-2026/Management Assam Royal Global University20260303-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>PHARMACY</td>
                    <td><a href="mobile-assets/nirf-2026/Pharmacy Assam Royal Global University20260303-.pdf" target="_blank"><button
                                class="download-btn">Download</button></a></td>
                </tr>


            </table>
        </div>
    </div>
@endsection

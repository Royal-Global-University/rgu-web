

@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
                University Research <br><span style="color: #FF9A1E; font-weight: 500;"> Committee</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                University Research <span style="color: #FF9A1E; font-weight: 500;"> Committee</span></h2>

        </div>

        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }

            /* Individual Card Styling */
            .card {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 0.7rem;
                text-align: left;
                border: none;
                width: 100%;
                height: 100%;

                /* Flexbox for vertical alignment */
                display: flex;
                flex-direction: column;

                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Hover effect for the card */
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Image container */
            .card-image {
                width: 100%;
                padding-top: 100%;
                position: relative;
                border-radius: 5%;
                overflow: hidden;
                margin: 0 auto 1.0rem;
                border: 2px solid #f0f2f5;
            }

            .card-image img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Name/Heading Styling */
            .card-name {
                margin: 0 0 0.5rem 0;
                font-size: 1.5rem;
                font-weight: 600;
                color: #333;
                line-height: 1.2;
                color: #24477f;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
            }

            /* New Styling for the Profile Link */
            .profile-link {
                margin-top: auto;
                /* This is the magic property! */
                padding-top: 1.0rem;
                font-size: 1.2rem;
                font-weight: 800;
                text-decoration: none;
                color: #FF9A1E;
            }
        </style>

        <div class="section-f">
            <div class="container">


                <div class="table-responsive">
                    <table class="table table-striped table-bordered bg-white">
                        <thead style="background-color: #24477f; color: #fff;">
                            <tr>
                                <th scope="col">Sl. No.</th>
                                <th scope="col">Member Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Designation</th>
                            </tr>
                        </thead>
                        <tbody class="mobile-para1">
                            <tr>
                                <td>1.</td>
                                <td>Prof. (Dr) Alak Kumar Buragohain</td>
                                <td>Hon’ble Vice Chancellor, RGU</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Dr. Diganta Munshi</td>
                                <td>Registrar – Administration, Director IQAC, Dean RSET & RSIT</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Prof. Dr. Parameswar Krishnan Iyer</td>
                                <td>Professor, Department of Chemistry, Indian Institute of Technology Guwahati</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Prof. Jayanta Krishna Sarma</td>
                                <td>Head, Department of Pol. Sc., Dean, Faculty of Arts, Gauhati University</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Mr. Pradeep Purohit</td>
                                <td>Chief Operating Officer, Star Cement</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Mr. R S Joshi</td>
                                <td>CMD, Buildworth Real Estate, Guwahati</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Prof. (Dr) Anupam Chatterjee</td>
                                <td>Dean, RSBSC</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Prof. (Dr.) Sajal Nag</td>
                                <td>Distinguished Professor, Dept of History, RSHSS</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Prof. (Dr) Rama Ranjan Bhattacharjee</td>
                                <td>Dean R & D</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Dr. Debojit Borah</td>
                                <td>Associate Professor & HoD, Dept of Biotechnology, RSBSC</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Dr. Aruna Deb Rroy</td>
                                <td>Associate Professor & HOD, RSC</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Dr. Narinder Kumar</td>
                                <td>Controller of Examination</td>
                                <td>Member Secretary</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

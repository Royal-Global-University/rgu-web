@extends('frontend.master')
@section('content')


    <div class="mobile" style="">
        @include('frontend/components/mobileheader')
        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
            Examination <br><span style="color: #FF9A1E; font-weight: 500;"> Committee</span></h2>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            Examination <span style="color: #FF9A1E; font-weight: 500;"> Committee</span></h2>

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

            <!-- regular faculty  -->
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
                            <td>Dr. Diganta Munshi</td>
                            <td>Registrar – Administration, Director IQAC, Dean RSET & RSIT</td>
                            <td>Chairperson</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Prof. (Dr.) Indrani Singh Rai</td>
                            <td>Professor & Dean, RSL</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Prof. (Dr.) Kaberi Saikia</td>
                            <td>Professor & Principal, RSN</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Prof. (Dr.) George AP</td>
                            <td>Dean, RSB & RSC</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Prof. (Dr.) Abhijit Dutta</td>
                            <td>Professor & Dean, RSMAS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Prof. (Dr.) Bhuban Ch Barooah</td>
                            <td>Professor and Dean, RSLA</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                            <td>Professor & Dean, RSD, RSFD, RSFT, RSFA, RSA</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Dr. Rupesh Kumar</td>
                            <td>Assistant Professor and Coordinator, Dept of Medical Lab Technology, RSMAS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Dr. Priyanka Patowari</td>
                            <td>Assistant Professor, Dept of Social Work, RSHSS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Dr. Narinder Kumar</td>
                            <td>COE</td>
                            <td>Member Secretary</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- regular faculty  -->


        </div>
    </div>
@endsection

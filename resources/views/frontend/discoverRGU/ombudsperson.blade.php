@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>
    <div>
        <h1 class="text-center pt-4 pb-4 text-dark">OMBUDSPERSON</h1>
        <div style="overflow-x:auto;" class="container pb-5">
            <table
                style="width:100%; border-collapse:collapse; background-color:#fff; box-shadow:0 2px 6px rgba(0,0,0,0.1); min-width:600px;">
                <thead>
                    <tr>
                        <th
                            style="background-color:#27467A; color:#fff; text-transform:uppercase; font-size:14px; padding:12px 15px; text-align:left; border:1px solid #ddd;">
                            NAME OF THE PRIVATE UNIVERSITY</th>
                        <th
                            style="background-color:#27467A; color:#fff; text-transform:uppercase; font-size:14px; padding:12px 15px; text-align:left; border:1px solid #ddd;">
                            NAME AND CONTACT DETAILS OF THE OMBUDSPERSON(S)</th>
                        <th
                            style="background-color:#27467A; color:#fff; text-transform:uppercase; font-size:14px; padding:12px 15px; text-align:left; border:1px solid #ddd;">
                            NO. OF SGRCS CONSTITUTED IN THE UNIVERSITY</th>
                        <th
                            style="background-color:#27467A; color:#fff; text-transform:uppercase; font-size:14px; padding:12px 15px; text-align:left; border:1px solid #ddd;">
                            URL OF THE ONLINE PORTAL FOR STUDENTS GRIEVANCES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border:1px solid #ddd; padding:12px 15px; font-size:15px; color:#333;">The Assam Royal Global
                            University</td>
                        <td style="border:1px solid #ddd; padding:12px 15px; font-size:15px; color:#333;">
                            Prof. (Dr.) J.K. Sharma<br>
                            +91 09839065381<br>
                            <strong>Email id.-</strong> jkbaba@gmail.com
                        </td>
                        <td style="border:1px solid #ddd; padding:12px 15px; font-size:15px; color:#333;">No. SGRC:- 01</td>
                        <td style="border:1px solid #ddd; padding:12px 15px; font-size:15px; color:#333;">
                            <strong>URL:-</strong>
                            <a href="https://rgu.ac/grievance" target="_blank"
                                style="color:#1f4e79; text-decoration:none;">https://rgu.ac/grievance</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection

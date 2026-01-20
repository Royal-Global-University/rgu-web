@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            IQAC <br><span style="color: #FF9A1E; font-weight: 500;"> Members</span></h2>

        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
            IQAC <span style="color: #FF9A1E; font-weight: 500;"> Members</span></h2>

        </section>
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
                <table class="table table-striped table-hover table-bordered bg-white">
                    <thead class="mobile-headd3" style="background-color: #24477f; color: #fff;">
                        <tr>
                            <th scope="col">Sl. No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Designation</th>
                        </tr>
                    </thead>
                    <tbody class="mobile-para1">
                        <tr>
                            <td>1</td>
                            <td>Prof. (Dr) Alak Kumar Buragohain</td>
                            <td>Hon’ble Vice Chancellor, RGU</td>
                            <td>Chairperson</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sri Ankur Pansari</td>
                            <td>Executive Vice President, GSF</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dr. D. N. Singh</td>
                            <td>Registrar – Academics, RGU</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mr. Manoj Patwari</td>
                            <td>Chief Estate Officer, RGU</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Mr. Vijay Kr Sharma</td>
                            <td>Accounts Officer, RGU</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mr. Shamim Goney</td>
                            <td>Dy Registrar</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Dr. Abhijit Dutta</td>
                            <td>Professor &amp; Dean, RSMAS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Dr. Rama Ranjan Bhattacharjee</td>
                            <td>Dean R &amp; D</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Dr. Prithviraj Chakraborty</td>
                            <td>Professor, RSP</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Dr. Aruna Dev Rroy</td>
                            <td>Associate Professor, RSC</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Mr. Ayushman Devraj</td>
                            <td>Assistant Professor, RSL</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Mr. Jugal Kishore Bhattacharyya</td>
                            <td>Assistant Professor, Dept. of Economics, RSHSS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Ms. Joyeeta Bhattacharya</td>
                            <td>Assistant Professor, Dept. of Social Work, RSHSS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Dr. Priyanka Patowari</td>
                            <td>Assistant Professor, Dept. of Social Work, RSHSS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Dr. Pundarikaksha Das</td>
                            <td>Assistant Professor, Dept of Forensic Science, RSLSC</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Dr. Hirak Jyoti Hazarika</td>
                            <td>Assistant Professor - RSLISC</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Dr. Saswati Bordoloi</td>
                            <td>Assistant Professor, IKS</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Dr. Anuradha Sarma Pujari</td>
                            <td></td>
                            <td>Member from Local Society</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>President of student council</td>
                            <td></td>
                            <td>Student Member</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Ms. Mallika Boro</td>
                            <td>HR-Talent Acquisition, Reliance-JIO</td>
                            <td>Member from Employers</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Mr. R. S. Joshi</td>
                            <td>Former President, FINER, Guwahati</td>
                            <td>Member from Industrialists</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Mrs. Deeplaxmi Sharma</td>
                            <td></td>
                            <td>Member from Stakeholders (Parents)</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Dr. Diganta Munshi</td>
                            <td>Registrar – Administration</td>
                            <td>Director, IQAC</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Ms. Dipika T. Agarwal</td>
                            <td>Dy. Registrar, HR &amp; RC</td>
                            <td>Coordinator, IQAC</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Dr Monalisa B. Deka</td>
                            <td></td>
                            <td>IQAC, Superintendent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

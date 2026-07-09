@extends('frontend/new-master')
@section('content')
    <style>
        /*==========================================================
        KNOWLEDGE BASE COMMITTEE
==========================================================*/

        .rgkb-section {

            padding: 90px 0;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rgkb-section::before {

            content: "";

            position: absolute;

            width: 520px;

            height: 520px;

            border-radius: 50%;

            right: -180px;

            top: -180px;

            background: radial-gradient(rgba(35, 69, 123, .05), transparent 70%);

        }

        /*====================================
Heading
====================================*/

        .rgkb-heading {

            text-align: center;

            max-width: 900px;

            margin: 0 auto 55px;

            position: relative;

            z-index: 2;

        }

        .rgkb-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 14px;

        }

        .rgkb-heading h2 {

            margin: 0 0 20px;

            font-family: "Playfair Display", serif;

            font-size: 56px;

            color: #23457b;

            font-weight: 700;

        }

        .rgkb-heading p {

            color: #69788c;

            font-size: 17px;

            line-height: 1.9;

            margin: 0;

        }

        /*====================================
Table
====================================*/

        .rgkb-table-wrapper {

            background: #fff;

            border-radius: 18px;

            overflow: auto;

            box-shadow:
                0 18px 50px rgba(18, 40, 84, .08);

        }

        .rgkb-table {

            width: 100%;

            min-width: 1100px;

            border-collapse: collapse;

        }

        .rgkb-table thead {

            background: #2d4d86;

        }

        .rgkb-table th {

            padding: 24px;

            color: #fff;

            font-size: 17px;

            font-weight: 600;

            text-align: left;

            border-right: 1px solid rgba(255, 255, 255, .20);

        }

        .rgkb-table th:last-child {

            border-right: none;

        }

        .rgkb-table tbody tr {

            background: #edf4ff;

            transition: .3s;

        }

        .rgkb-table tbody tr:nth-child(even) {

            background: #e6effd;

        }

        .rgkb-table tbody tr:hover {

            background: #dce9fb;

        }

        .rgkb-table td {

            padding: 22px;

            vertical-align: top;

            border-top: 1px solid #c7d8f2;

            border-right: 1px solid #c7d8f2;

            color: #24406e;

            font-size: 16px;

            line-height: 1.85;

        }

        .rgkb-table td:last-child {

            border-right: none;

        }

        /*====================================
Number
====================================*/

        .rgkb-sr {

            font-size: 20px;

            color: #23457b;

            font-weight: 700;

        }

        /*====================================
Name
====================================*/

        .rgkb-name {

            font-weight: 700;

            color: #23457b;

            font-size: 19px;

            margin-bottom: 10px;

        }

        .rgkb-subtitle {

            color: #4b6286;

            line-height: 1.75;

        }

        /*====================================
Contact
====================================*/

        .rgkb-contact div {

            margin-bottom: 8px;

        }

        .rgkb-contact div:last-child {

            margin-bottom: 0;

        }

        .rgkb-contact strong {

            color: #23457b;

            font-weight: 600;

        }

        .rgkb-contact a {

            color: #35598b;

            text-decoration: none;

            transition: .3s;

        }

        .rgkb-contact a:hover {

            color: #de672b;

        }

        /*====================================
Designation
====================================*/

        .rgkb-designation {

            display: inline-flex;

            align-items: center;

            padding: 8px 18px;

            border-radius: 40px;

            background: #fff4ee;

            color: #de672b;

            font-size: 14px;

            font-weight: 600;

            transition: .35s;

        }

        .rgkb-table tbody tr:hover .rgkb-designation {

            background: #de672b;

            color: #fff;

        }

        /*====================================
Responsive
====================================*/

        @media(max-width:991px) {

            .rgkb-section {

                padding: 70px 0;

            }

            .rgkb-heading {

                margin-bottom: 40px;

            }

            .rgkb-heading h2 {

                font-size: 44px;

            }

        }

        @media(max-width:767px) {

            .rgkb-section {

                padding: 55px 0;

            }

            .rgkb-heading h2 {

                font-size: 34px;

                line-height: 1.25;

            }

            .rgkb-heading p {

                font-size: 15px;

            }

            .rgkb-table td {

                padding: 18px;

                font-size: 14px;

            }

            .rgkb-table th {

                padding: 18px;

                font-size: 15px;

            }

            .rgkb-name {

                font-size: 17px;

            }

            .rgkb-designation {

                font-size: 12px;

                padding: 7px 12px;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Knowledge Base</h1>
            <div class="pg-hero-breadcrumb">
                Knowledge Base
            </div>
        </div>

    </section>


    <section class="rgkb-section">

        <div class="container">

            <div class="rgkb-heading">

                <span>Committee Members</span>

                <h2>Knowledge Base Committee</h2>

                <p>
                    Welcome to Knowledge Base, your go-to for informative and entertaining content.
                    Here, you can explore our study and expert blogs and latest trending & topical content.
                </p>

            </div>

            <div class="rgkb-table-wrapper">

                <table class="rgkb-table">

                    <thead>

                        <tr>

                            <th width="80">Sr. No.</th>

                            <th>Name</th>

                            <th>Contact Details</th>

                            <th width="330">Designation</th>

                        </tr>

                    </thead>


                    <tbody>

                        <!-- 1 -->
                        <tr>
                            <td class="rgkb-sr">1</td>
                            <td>
                                <div class="rgkb-name">Mr. Srawan Kr. Goenka</div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Assistant Professor, RSC, RGU<br>
                                    <strong>Mob. No.</strong> 9435597358<br>
                                    <strong>E-mail:</strong> Srawan.goenka@rgi.edu.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">Chairperson</span>
                            </td>
                        </tr>

                        <!-- 2 -->
                        <tr>
                            <td class="rgkb-sr">2</td>
                            <td>
                                <div class="rgkb-name">Dr. Indrajit Dutta</div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Assistant Professor, RSTTM<br>
                                    <strong>Mob. No.</strong> 9863651421<br>
                                    <strong>E-mail:</strong> idutta@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member Secretary &amp; Nodal Officer
                                </span>
                            </td>
                        </tr>

                        <!-- 3 -->
                        <tr>
                            <td class="rgkb-sr">3</td>
                            <td>
                                <div class="rgkb-name">
                                    Sri Papu Gogoi, ACS<br>
                                    Circle Officer
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Office of the Circle Officer, Dispur Revenue Circle,
                                    Guwahati - 781028<br>
                                    <strong>Mob. No.</strong> 7086669301<br>
                                    <strong>E-mail:</strong> dc-kamrupm@nic.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Civil Administration
                                </span>
                            </td>
                        </tr>

                        <!-- 4 -->
                        <tr>
                            <td class="rgkb-sr">4</td>
                            <td>
                                <div class="rgkb-name">
                                    Mr. Dharani Gogoi<br>
                                    Officer In-Charge
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Garchuk Police Station,
                                    Guwahati - 781035, Assam<br>
                                    <strong>Mob. No.</strong> 6001390890<br>
                                    <strong>E-mail:</strong> cp-guw@assampolice.gov.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Police Administration
                                </span>
                            </td>
                        </tr>

                        <!-- 5 -->
                        <tr>
                            <td class="rgkb-sr">5</td>
                            <td>
                                <div class="rgkb-name">
                                    Ms. Moonmee Baruah
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Project Supervisor, Udayachal<br>
                                    A Unit of Jadav Chandra Bhuyan Memorial Trust<br>
                                    <strong>Mob. No.</strong> 9132845179<br>
                                    <strong>E-mail:</strong> moonmeebaruah97@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from NGO
                                </span>
                            </td>
                        </tr>

                        <!-- 6 -->
                        <tr>
                            <td class="rgkb-sr">6</td>
                            <td>
                                <div class="rgkb-name">
                                    Dr. Rahul Chanda
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Senior Journalist & Bureau Chief, G Plus<br>
                                    <strong>Mob. No.</strong> 8486002316<br>
                                    <strong>E-mail:</strong> Rahul.chanda@g-plus.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Media
                                </span>
                            </td>
                        </tr>

                        <!-- 7 -->
                        <tr>
                            <td class="rgkb-sr">7</td>
                            <td>
                                <div class="rgkb-name">
                                    Dr. D N Singh
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Registrar, RGU<br>
                                    <strong>Mob. No.</strong> 9800004433<br>
                                    <strong>E-mail:</strong> registar@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member
                                </span>
                            </td>
                        </tr>

                        <!-- 8 -->
                        <tr>
                            <td class="rgkb-sr">8</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) B.S. Mipun
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSEES &amp; DSW<br>
                                    <strong>Mob. No.</strong> 9436102075<br>
                                    <strong>E-mail:</strong> bsmipun@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 9 -->
                        <tr>
                            <td class="rgkb-sr">9</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) Bhuban Chandra Barooah
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSLA<br>
                                    <strong>Mob. No.</strong> 9864061717<br>
                                    <strong>E-mail:</strong> bcbarooah@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 10 -->
                        <tr>
                            <td class="rgkb-sr">10</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) Sajal Nag
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSHSS<br>
                                    <strong>Mob. No.</strong> 9435175378<br>
                                    <strong>E-mail:</strong> snag@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>
                        <!-- 11 -->
                        <tr>
                            <td class="rgkb-sr">11</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) Nikhil Kumar Chrungoo
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSLSC<br>
                                    <strong>Mob. No.</strong> 9436101651<br>
                                    <strong>E-mail:</strong> nkchrungoo@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 12 -->
                        <tr>
                            <td class="rgkb-sr">12</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) Hemeswari Bhuyan
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Professor, RSN<br>
                                    <strong>Mob. No.</strong> 9706006112<br>
                                    <strong>E-mail:</strong> hbhuyan@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 13 -->
                        <tr>
                            <td class="rgkb-sr">13</td>
                            <td>
                                <div class="rgkb-name">
                                    Dr. Bitopi Gogoi
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Associate Professor, RSB<br>
                                    <strong>Mob. No.</strong> 9854707825<br>
                                    <strong>E-mail:</strong> bitopi.gogoi@rgi.edu.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 14 -->
                        <tr>
                            <td class="rgkb-sr">14</td>
                            <td>
                                <div class="rgkb-name">
                                    Prof. (Dr.) Hari Prasad Agarwal
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSA, RGU<br>
                                    <strong>Mob. No.</strong> 7896832054<br>
                                    <strong>E-mail:</strong> hpagarwal@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 15 -->
                        <tr>
                            <td class="rgkb-sr">15</td>
                            <td>
                                <div class="rgkb-name">
                                    Dr. Suresh Chandra Nayak
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Dean, RSCOM<br>
                                    <strong>Mob. No.</strong> 8010235517<br>
                                    <strong>E-mail:</strong> scnayak@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 16 -->
                        <tr>
                            <td class="rgkb-sr">16</td>
                            <td>
                                <div class="rgkb-name">
                                    Pranabesh Sikdar
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Associate Professor, RSP<br>
                                    <strong>Mob. No.</strong> 8106289078<br>
                                    <strong>E-mail:</strong> psikdar@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Faculty
                                </span>
                            </td>
                        </tr>

                        <!-- 17 -->
                        <tr>
                            <td class="rgkb-sr">17</td>
                            <td>
                                <div class="rgkb-name">
                                    Mr. Shamim A. Goney
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Deputy Registrar, RGU<br>
                                    <strong>Mob. No.</strong> 9864026097<br>
                                    <strong>E-mail:</strong> bcbarooah@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Admin
                                </span>
                            </td>
                        </tr>

                        <!-- 18 -->
                        <tr>
                            <td class="rgkb-sr">18</td>
                            <td>
                                <div class="rgkb-name">
                                    Mr. Harmohan Saikia
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Chief Warden, Boys' Hostels, RGU<br>
                                    <strong>Mob. No.</strong> 8811003152<br>
                                    <strong>E-mail:</strong> harmohan.saikia@rgi.edu.in
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Admin
                                </span>
                            </td>
                        </tr>

                        <!-- 19 -->
                        <tr>
                            <td class="rgkb-sr">19</td>
                            <td>
                                <div class="rgkb-name">
                                    Ms. Jasmin
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Warden, Girls' Hostels, RGU<br>
                                    <strong>Mob. No.</strong> 8811003132<br>
                                    <strong>E-mail:</strong> jpm@rgu.ac
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Admin
                                </span>
                            </td>
                        </tr>

                        <!-- 20 -->
                        <tr>
                            <td class="rgkb-sr">20</td>
                            <td>
                                <div class="rgkb-name">
                                    Rajan Ray
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    BBA, 4th Semester, RSB<br>
                                    <strong>Mob. No.</strong> 9693938607<br>
                                    <strong>E-mail:</strong> rayrajan456@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Hostel Boarder (Boy's)
                                </span>
                            </td>
                        </tr>
                        <!-- 21 -->
                        <tr>
                            <td class="rgkb-sr">21</td>
                            <td>
                                <div class="rgkb-name">
                                    M.A. English, 3rd Semester, RSL
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    Warden, Girls' Hostels, RGU<br>
                                    <strong>Mob. No.</strong> 939582250 / 6900591224<br>
                                    <strong>E-mail:</strong> bharali172@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Hostel Boarder (Girl's)
                                </span>
                            </td>
                        </tr>

                        <!-- 22 -->
                        <tr>
                            <td class="rgkb-sr">22</td>
                            <td>
                                <div class="rgkb-name">
                                    Dev Shah
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    B.Tech CSE, 7th Semester, RSET<br>
                                    <strong>Mob. No.</strong> 9864141410<br>
                                    <strong>E-mail:</strong> devshahghy@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Sr. Students
                                </span>
                            </td>
                        </tr>

                        <!-- 23 -->
                        <tr>
                            <td class="rgkb-sr">23</td>
                            <td>
                                <div class="rgkb-name">
                                    Sibani Pattnaik
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    BA-LL.B (H), 7th Semester, RSLA<br>
                                    <strong>Mob. No.</strong> 7683944202<br>
                                    <strong>E-mail:</strong> sibanicps@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Sr. Students
                                </span>
                            </td>
                        </tr>

                        <!-- 24 -->
                        <tr>
                            <td class="rgkb-sr">24</td>
                            <td>
                                <div class="rgkb-name">
                                    Mrs. Itishree Mahapatra
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    M/O: Sibani Pattanaik (BALLB)<br>
                                    <strong>Mob. No.</strong> 948469333 / 9078906333<br>
                                    <strong>E-mail:</strong> mahapatraitishree1980@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Parents
                                </span>
                            </td>
                        </tr>

                        <!-- 25 -->
                        <tr>
                            <td class="rgkb-sr">25</td>
                            <td>
                                <div class="rgkb-name">
                                    Mr. Gopal Bharali
                                </div>
                            </td>
                            <td>
                                <div class="rgkb-contact">
                                    F/O: Priyanka Bharali (MA English)<br>
                                    <strong>Mob. No.</strong> 8011891810<br>
                                    <strong>E-mail:</strong> gopalbharali552@gmail.com
                                </div>
                            </td>
                            <td>
                                <span class="rgkb-designation">
                                    Member from Parents
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    

    </section>
@endsection

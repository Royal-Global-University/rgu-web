@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
        </div>
        <div class="container pb-5 pt-3">

            <!-- events  -->
            <div>
                <div>
                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events</h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                                    <th class="font-weight-bold text-white">Date</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr class="align-middle">
                                    <td>1</td>
                                    <td>Shivalal Gautam</td>
                                    <td>Co-Founder, Xomonnoy</td>
                                    <td>Invited Talk on Gender and Social Exclusion</td>
                                    <td>20-02-2025</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>2</td>
                                    <td>Ms. Juree Hojai</td>
                                    <td>Program Officer, Disability Inclusion, Team Lease Foundation</td>
                                    <td>Interactive Session on Careers in Development Sector</td>
                                    <td>05-03-2025</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>3</td>
                                    <td>Mr. Mohan Sharma</td>
                                    <td>Researcher</td>
                                    <td>Invited Talk on Human-Animal Relationship</td>
                                    <td>11-04-2025</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative
                                        Trust, Dibrugarh &amp; Mr. Henry Wood from the University of
                                        Durham, UK
                                    </td>
                                    <td>
                                        Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh
                                    </td>
                                    <td>Interactive session</td>
                                    <td>3/9/2024</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms. Manjari Nandy</td>
                                    <td>
                                        Assistant Professor in the Department of Sociology at The
                                        Maharaja Sayajirao University of Baroda and a Ph.D. Research
                                        Scholar at the Central University of Gujarat,
                                    </td>
                                    <td>Invited talk</td>
                                    <td>3/6/2024</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. Bhargabi Das</td>
                                    <td>
                                        Assistant Professor in the Department of Rural Management at
                                        Shiv Nadar Institution of Eminence, Greater Noida
                                    </td>
                                    <td>Invited talk</td>
                                    <td>24/5/24</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dr. Bitasta Das</td>
                                    <td>
                                        Senior Editor- Office of Communications and Instructor-Under
                                        Graduate Programme at the Indian Institute of Science, Bangalore
                                    </td>
                                    <td>
                                        two-day workshop on the Intersectionality of Social Sciences
                                    </td>
                                    <td>18/10/2023-19/10/2023</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Dr. Razdan Sarim Rahman</td>
                                    <td>Assistant Professor at TISS, Guwahati</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Prof. (Dr.) Surajit Ch. Mukhopadhyay</td>
                                    <td>Dean, RSHSS</td>
                                    <td>Inhouse Resource person</td>
                                    <td>18/10/2023</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Dr. Joseph Riamei</td>
                                    <td>
                                        Assistant Professor from the School of Social Work at Tata
                                        Institute of Social Sciences, Guwahati off-Campus
                                    </td>
                                    <td>Invited talk</td>
                                    <td>21/8/2023</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                                        Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                                        Village of Children
                                    </td>
                                    <td>
                                        Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                                        Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                                        Village of Children
                                    </td>
                                    <td>Invited talk</td>
                                    <td>21/3/2024-24/3/2023</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Ms. Nipurnh Gupta</td>
                                    <td>
                                        a global development communication professional from UNICEF
                                    </td>
                                    <td>Invited talk</td>
                                    <td>2/12/2022</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Mukund Marodia</td>
                                    <td>
                                        Manager, Strategic and Academic Affairs in the Indian School of
                                        Development Management
                                    </td>
                                    <td>Invited talk</td>
                                    <td>28/10/22</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Nayan Jyoti Hazarika</td>
                                    <td>PHD Scholar from the Department of Social Work</td>
                                    <td>Invited talk</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Dr. Sriparna B. Baruah</td>
                                    <td>
                                        Dr Sriparna B Baruah is a Development Professional with 35 years
                                        of work experience in Management Education and in Small and
                                        Medium Enterprise Development. Dr. Baruah worked with Indian
                                        Institute of Entrepreneurship (IIR) for 23 years and retired in
                                        the year 2022. She held the position of Head (CIE) and was also
                                        Director I/C of IIE. She is currently associated with NEHHDC as
                                        an Advisor (Livelihood &amp; Entrepreneurship)
                                    </td>
                                    <td>Invited talk</td>
                                    <td>31/08/2022</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>
                                        Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                                        Honorary Program Director at Pratishruti Cancer and Palliative
                                        Trust), Dr Pankaj Deka, Chief Consultant, Department of
                                        Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                                        (Channel Head, N.E News, Anchor, Prag News). Respected
                                        Chairperson (Academic),
                                    </td>
                                    <td>
                                        Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                                        Honorary Program Director at Pratishruti Cancer and Palliative
                                        Trust), Dr Pankaj Deka, Chief Consultant, Department of
                                        Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                                        (Channel Head, N.E News, Anchor, Prag News). Respected
                                        Chairperson (Academic),
                                    </td>
                                    <td>Invited talk</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Dr Shivani Chauhan Barooah</td>
                                    <td>
                                        Chairperson, Centre for Labour Studies and Social Protection,
                                        TISS Guwahati
                                    </td>
                                    <td>Invited talk</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Mr Anupam Joya Sharma</td>
                                    <td>
                                        a doctoral fellow of Social Epidemiology at IIT Gandhinagar
                                    </td>
                                    <td>Invited talk</td>
                                    <td>20/12/2021</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Dr Aarushi Kehkar Malhotra (online)</td>
                                    <td>
                                        Senior Manager of Research, Advocacy, and Wellness at Sirona
                                        Hygiene Foundation
                                    </td>
                                    <td>Invited talk</td>
                                    <td>11/12/2021</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Mr Sahbaz Ahmed and Mr Syed Rizwan Ahmed</td>
                                    <td>Advocates from Gauhati High Court</td>
                                    <td>Invited talk</td>
                                    <td>9/12/2021</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>
                                        Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                                        Parijat Academy
                                    </td>
                                    <td>
                                        Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                                        Parijat Academy
                                    </td>
                                    <td>Invited talk</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Dr. Ashok Kumar Das, and Dr. Mythili Hazarika</td>
                                    <td>
                                        Dr. Ashok Kumar Das, Professor in the Department of Head and
                                        Neck Surgery at Dr. B. Barooah Cancer Institute, Guwahati, and
                                        Dr. Mythili Hazarika, Associate Professor of Clinical Psychology
                                        at Gauhati Medical College and Hospital
                                    </td>
                                    <td>Invited talk</td>
                                    <td>31/5/21</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Mr. Miguel Das Queah</td>
                                    <td>Executive Director, UTSAH</td>
                                    <td>Invited talk</td>
                                    <td>2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- events  -->

        </div>
    </div>
@endsection

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
                                        <th class="text-white">S.NO.</th>
                                        <th class="text-white">NAME</th>
                                        <th class="text-white">DESIGNATION</th>
                                        <th class="text-white">PURPOSE OF VISIT</th>
                                        <th class="text-white">DATE OF VISIT</th>
                                    </thead>
                                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                        <tr class="para1">
                                            <td>1</td>
                                            <td>Mr. Mayur Bora</td>
                                            <td>Writer and Motivational Speaker</td>
                                            <td>Orientation and Student Development Program</td>
                                            <td>7/26/2018</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>2</td>
                                            <td>Prof. T. R. Sesashadri</td>
                                            <td>Delhi University</td>
                                            <td>Student Interactive Session</td>
                                            <td>11/20/2018</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>3</td>
                                            <td>Sqn. Ldr. Pranjal Deka</td>
                                            <td>
                                                A Senior Officer Rank in the Indian Air Force, Wing Commander
                                            </td>
                                            <td>Re Orientation Programme</td>
                                            <td>1/18/2019</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>4</td>
                                            <td>Prof. Krishna B Athreya</td>
                                            <td>IOWA State University, USA</td>
                                            <td>Invited talk</td>
                                            <td>2/24/2020</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>5</td>
                                            <td>Ms. Priyanka Das Rajkakati</td>
                                            <td>Indian Women Scientist staying in France</td>
                                            <td>Interactive Session</td>
                                            <td>3/13/2020</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>6</td>
                                            <td>Mr. Diganta Das</td>
                                            <td>Senior Journalist &amp; Director, DPRC</td>
                                            <td>Motivational Talk</td>
                                            <td>12/3/2021</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>7</td>
                                            <td>Prof. (Dr.) Manjil Bhargava</td>
                                            <td>Renowned Mathematician and Field Medalist</td>
                                            <td>Online invited talk</td>
                                            <td>2/25/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>8</td>
                                            <td>Prof. (Dr.) Bipan Hazarika</td>
                                            <td>Department of Mathematics, Gauhati University</td>
                                            <td>Invited talk</td>
                                            <td>5/30/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>9</td>
                                            <td>Dr. Mridula Kanoria</td>
                                            <td>
                                                Professor, Department of Mathematics, Sister Nivedita
                                                University, Kolkata.
                                            </td>
                                            <td>Invited talk</td>
                                            <td>8/26/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>10</td>
                                            <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                                            <td>Senior Scientist, BARC, Mumbai.</td>
                                            <td>Interaction with Senior Scientist</td>
                                            <td>10/31/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>11</td>
                                            <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                                            <td>Senior Scientist, BARC, Mumbai.</td>
                                            <td>Invited talk</td>
                                            <td>11/4/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>12</td>
                                            <td>Dr. Avishek Adhikari</td>
                                            <td>
                                                Professor, Department of Mathematics, Presidency University,
                                                Kolkata, India.
                                            </td>
                                            <td>Invited talk</td>
                                            <td>11/24/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>13</td>
                                            <td>Prof. (Dr.) Jaydeb Sarkar</td>
                                            <td>Indian Statistical Institue, Bangalore, India.</td>
                                            <td>Invited talk</td>
                                            <td>12/22/2022</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>14</td>
                                            <td>Dr. Pinki Goswami</td>
                                            <td>
                                                Assistant Professor, University of Science and Technology,
                                                Meghalaya
                                            </td>
                                            <td>Invited talk</td>
                                            <td>8/8/2023</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>15</td>
                                            <td>Prof.(Dr.) Sukanta Pati</td>
                                            <td>Department of Mathematics, IIT Guwahati</td>
                                            <td>Invited talk</td>
                                            <td>9/29/2023</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>16</td>
                                            <td>Prof. (Dr.) Alex Ely Kossovsky</td>
                                            <td>Independent Researcher, New York, USA.</td>
                                            <td>Invited talk</td>
                                            <td>3/22/2024</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>17</td>
                                            <td>Prof. (Dr.) Shakuntala Choudhury</td>
                                            <td>Bridgewater, New Jersey, USA</td>
                                            <td>Invited talk</td>
                                            <td>4/22/2024</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>18</td>
                                            <td>Prof.(Dr.) Laishram Ladu Singh</td>
                                            <td>Professor Emeritus, RGU, Ex. VC Bodoland University</td>
                                            <td>Invited talk</td>
                                            <td>5/2/2024</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>19</td>
                                            <td>Prof. (Dr.) Meir Shillor</td>
                                            <td>
                                                Distinguished Professor, Department of Mathematics and
                                                Statistics, Ookland University, USA
                                            </td>
                                            <td>Invited talk</td>
                                            <td>8/16/2024</td>
                                        </tr>
                                        <tr class="para1">
                                            <td>20</td>
                                            <td>Prof. (Dr.) Bhupen Deka</td>
                                            <td>Department of Mathematics, IIT Guwahati</td>
                                            <td>Invited talk</td>
                                            <td>8/29/2024</td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>Parents Teacher Interaction cum NAAC Orientation for Parents</td>
                                            <td></td>
                                            <td></td>
                                            <td>13th November, 2024</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Dr. Azizur Rahman Sheikh</td>
                                            <td>Former HoD, Department of Mathematics, Cotton College</td>
                                            <td>Felicitated as the Eminent Mathematician of the State for the year 2024 on the occasion
                                                of
                                                National Mathematics Day, 2024</td>
                                            <td>23rd December, 2024</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Prof. (Dr.) Debabrata Datta</td>
                                            <td>Former Senior Scientist, Bhabha Atomic Research Centre, Mumbai</td>
                                            <td>Invited Speaker, Workshop on Advancing Quantum Computing through Mathematics</td>
                                            <td>27th to 29th January, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Mr. Akash Saxena</td>
                                            <td>DY. Director, RCCR</td>
                                            <td>Interactive Session on Career Opportunities</td>
                                            <td>19th February, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Campus Visit of College Students</td>
                                            <td></td>
                                            <td></td>
                                            <td>21st February, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Prof. (Dr.) Gagan Kumar</td>
                                            <td>Professor, Department of Physics, IIT Guwahati</td>
                                            <td>Invited Speaker, National Science Day 2025</td>
                                            <td>28th February, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Prof. (Dr.) Shanta Laishram</td>
                                            <td>Professor of Mathematics, Indian Statistical Institute, New Delhi</td>
                                            <td>Invited Talk</td>
                                            <td>4th March, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>Prof. (Dr.) Partha Sarathi Mandal</td>
                                            <td>Professor, Department of Mathematics, IIT Guwahati</td>
                                            <td>Invited Speaker, Pi Day Celebration, 2025</td>
                                            <td>17th March, 2025</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>Prof. (Dr.) Bipin Kumar Gupta</td>
                                            <td>Senior Principal Scientist & Professor (AcSIR, NPL Campus)</td>
                                            <td>Invited Talk</td>
                                            <td>28th March, 2025</td>
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

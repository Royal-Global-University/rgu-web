@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile" style="padding-top: 80px; position: relative;">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 text-center fw-bold pt-5 pb-3" style="color: #27467A;">
                Events
            </h2>

            <div class="container">
                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5" style="font-size: 16px;">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">S.NO.</th>
                                <th class="text-white">DATE &amp; TIME &amp; DURATION</th>
                                <th class="text-white">
                                    NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                                    DESIGNATION, PLACE OF WORK AND ALL RELATED DETAILS
                                </th>
                                <th class="text-white">PURPOSE OF VISIT</th>
                            </tr>
                        </thead>
                        <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr class="mobile-para1">
                                <td>1</td>
                                <td>18.09.2024</td>
                                <td>
                                    Er. JN Khatanair, Chief Consultant Engineer Shrishtie Guwahati,
                                    Chairperson Northeast Chapter Indian Green Building Council IGBC
                                    Hyderabad.
                                </td>
                                <td>
                                    Attended a Technical Lecture on “Sustainable Building for Warm
                                    and Humid Climatic Zone,” on the occasion of Engineer’s Day
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>2</td>
                                <td>18.09.2024</td>
                                <td>
                                    Ms. Faye Fernandes, Country Director of Torrens University,
                                    Australia.
                                </td>
                                <td>
                                    Attended an interactive session on "Career Opportunity for
                                    Designers," organized by Royal School of Architecture and Royal
                                    School of Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>3</td>
                                <td>31.07.2024-10.08.2024</td>
                                <td>Er. Rajesh Dutta (Engineering Consultant in ASDMA)</td>
                                <td>
                                    Attended a Session on Disaster Management and mitigation
                                    organized by Royal School of Architecture and Royal School of
                                    Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>4</td>
                                <td>23.07.2024</td>
                                <td>Ar. Anuj Bhajanka</td>
                                <td>
                                    Attended Re orientation program for the upcoming semester
                                    organized by Royal School of Architecture and Royal School of
                                    Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>5</td>
                                <td>28.08.2023</td>
                                <td>Ar. Farha Shermin</td>
                                <td>
                                    Attended an Interactive Session as part of the Students
                                    Induction Program of B.Arch and BID/DID 1st Sem
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>6</td>
                                <td>18.05.2023</td>
                                <td>Ar. Gita Balakrishnana</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>7</td>
                                <td>18.05.2024</td>
                                <td>Ar. Ronojoy Sen</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>8</td>
                                <td>18.05.2023</td>
                                <td>Ar. Ashish Agarwal</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>9</td>
                                <td>18.05.2023</td>
                                <td>Mahan J Dutta</td>
                                <td>
                                    Workshops organised as part of Day 3 Of Knoxis Design Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>10</td>
                                <td>18.05.2023</td>
                                <td>Asutosh Kashyap</td>
                                <td>
                                    Workshops organised as part of Day 3 Of Knoxis Design Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>11</td>
                                <td>05.04.2023</td>
                                <td>Dr. Anunaya Chaubey</td>
                                <td>
                                    Interactive session with Dr. Anunaya Chaubey regarding Anant
                                    University's flagship program, Anant Fellowship
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>12</td>
                                <td>28.10. 2022</td>
                                <td>Debabrata Rajkumar</td>
                                <td>
                                    Interactive Session on climate Change and Waste Management
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>13</td>
                                <td>11.10. 2022</td>
                                <td>Mr. Ashish Agarwal, Entrepreneur</td>
                                <td>
                                    Interactive session with renowned entrepreneur Mr. Ashish
                                    Agarwal
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>14</td>
                                <td>20.08.2019 - 21.08. 2019</td>
                                <td>Ar. Pragati Goyal</td>
                                <td>
                                    Orientation Programme for Freshers of RSA, RSFT, RSD, RSFA
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>15</td>
                                <td>16.08. 2019</td>
                                <td>Nilakshi More</td>
                                <td>Orientation Programme for Freshers of RSA, RSD</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>16</td>
                                <td>6-8.03.2019</td>
                                <td>Prof. Abhijit Shirodkar</td>
                                <td>Interactive session</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>17</td>
                                <td>24-25.01.2019</td>
                                <td>Trailokya Hazarika</td>
                                <td>
                                    Birla White Cement Competitions: 1. Yuvaratna, 2. Yuvaratna Nxt
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>18</td>
                                <td>21-23.01. 2019</td>
                                <td>
                                    Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, Parijit Phukan
                                </td>
                                <td>Meditation Workshop by Heartfulness Foundation</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>19</td>
                                <td>7.08.2018</td>
                                <td>Ashish Batliwala</td>
                                <td>3D priniting Workshop</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>20</td>
                                <td>30.07.2018</td>
                                <td>Pankaj Bhattacharjee, Greenlam</td>
                                <td>Workshop on Laminates</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>21</td>
                                <td>5.02.2018</td>
                                <td>Dr. Repaul Kanji, IIT Roorkee</td>
                                <td>Workshop' Awareness of Disaster Mitigation &amp; Management'.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 text-center fw-bold pt-5" style="color: #27467A;">
                Events
            </h2>

            <div class="container">
                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5" style="font-size: 16px;">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">S.NO.</th>
                                <th class="text-white">DATE &amp; TIME &amp; DURATION</th>
                                <th class="text-white">
                                    NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                                    DESIGNATION, PLACE OF WORK AND ALL RELATED DETAILS
                                </th>
                                <th class="text-white">PURPOSE OF VISIT</th>
                            </tr>
                        </thead>
                        <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr class="mobile-para1">
                                <td>1</td>
                                <td>18.09.2024</td>
                                <td>
                                    Er. JN Khatanair, Chief Consultant Engineer Shrishtie Guwahati,
                                    Chairperson Northeast Chapter Indian Green Building Council IGBC
                                    Hyderabad.
                                </td>
                                <td>
                                    Attended a Technical Lecture on “Sustainable Building for Warm
                                    and Humid Climatic Zone,” on the occasion of Engineer’s Day
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>2</td>
                                <td>18.09.2024</td>
                                <td>
                                    Ms. Faye Fernandes, Country Director of Torrens University,
                                    Australia.
                                </td>
                                <td>
                                    Attended an interactive session on "Career Opportunity for
                                    Designers," organized by Royal School of Architecture and Royal
                                    School of Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>3</td>
                                <td>31.07.2024-10.08.2024</td>
                                <td>Er. Rajesh Dutta (Engineering Consultant in ASDMA)</td>
                                <td>
                                    Attended a Session on Disaster Management and mitigation
                                    organized by Royal School of Architecture and Royal School of
                                    Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>4</td>
                                <td>23.07.2024</td>
                                <td>Ar. Anuj Bhajanka</td>
                                <td>
                                    Attended Re orientation program for the upcoming semester
                                    organized by Royal School of Architecture and Royal School of
                                    Design
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>5</td>
                                <td>28.08.2023</td>
                                <td>Ar. Farha Shermin</td>
                                <td>
                                    Attended an Interactive Session as part of the Students
                                    Induction Program of B.Arch and BID/DID 1st Sem
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>6</td>
                                <td>18.05.2023</td>
                                <td>Ar. Gita Balakrishnana</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>7</td>
                                <td>18.05.2024</td>
                                <td>Ar. Ronojoy Sen</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>8</td>
                                <td>18.05.2023</td>
                                <td>Ar. Ashish Agarwal</td>
                                <td>
                                    Panel Discussions organised as part of Day 3 Of Knoxis Design
                                    Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>9</td>
                                <td>18.05.2023</td>
                                <td>Mahan J Dutta</td>
                                <td>
                                    Workshops organised as part of Day 3 Of Knoxis Design Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>10</td>
                                <td>18.05.2023</td>
                                <td>Asutosh Kashyap</td>
                                <td>
                                    Workshops organised as part of Day 3 Of Knoxis Design Fest
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>11</td>
                                <td>05.04.2023</td>
                                <td>Dr. Anunaya Chaubey</td>
                                <td>
                                    Interactive session with Dr. Anunaya Chaubey regarding Anant
                                    University's flagship program, Anant Fellowship
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>12</td>
                                <td>28.10. 2022</td>
                                <td>Debabrata Rajkumar</td>
                                <td>
                                    Interactive Session on climate Change and Waste Management
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>13</td>
                                <td>11.10. 2022</td>
                                <td>Mr. Ashish Agarwal, Entrepreneur</td>
                                <td>
                                    Interactive session with renowned entrepreneur Mr. Ashish
                                    Agarwal
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>14</td>
                                <td>20.08.2019 - 21.08. 2019</td>
                                <td>Ar. Pragati Goyal</td>
                                <td>
                                    Orientation Programme for Freshers of RSA, RSFT, RSD, RSFA
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>15</td>
                                <td>16.08. 2019</td>
                                <td>Nilakshi More</td>
                                <td>Orientation Programme for Freshers of RSA, RSD</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>16</td>
                                <td>6-8.03.2019</td>
                                <td>Prof. Abhijit Shirodkar</td>
                                <td>Interactive session</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>17</td>
                                <td>24-25.01.2019</td>
                                <td>Trailokya Hazarika</td>
                                <td>
                                    Birla White Cement Competitions: 1. Yuvaratna, 2. Yuvaratna Nxt
                                </td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>18</td>
                                <td>21-23.01. 2019</td>
                                <td>
                                    Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, Parijit Phukan
                                </td>
                                <td>Meditation Workshop by Heartfulness Foundation</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>19</td>
                                <td>7.08.2018</td>
                                <td>Ashish Batliwala</td>
                                <td>3D priniting Workshop</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>20</td>
                                <td>30.07.2018</td>
                                <td>Pankaj Bhattacharjee, Greenlam</td>
                                <td>Workshop on Laminates</td>
                            </tr>
                            <tr class="mobile-para1">
                                <td>21</td>
                                <td>5.02.2018</td>
                                <td>Dr. Repaul Kanji, IIT Roorkee</td>
                                <td>Workshop' Awareness of Disaster Mitigation &amp; Management'.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div style="background-image: url(https://media.rgu.ac/department-all/bg.svg); background-size: cover;">
        <div class="mobile" >
            @include('frontend/components/mobileheader')
                    <!-- floating mob button  -->
                    <div>
                        <a href="https://admissions.rgu.ac" style="
                                                                                                    position: fixed;
                                                                                                    bottom: 25px;
                                                                                                    right: 75px;
                                                                                                    background-color: #ef991f;
                                                                                                    color: #fff;
                                                                                                    padding: 12px 20px;
                                                                                                    font-size: 16px;
                                                                                                    font-weight: bold;
                                                                                                    text-decoration: none;
                                                                                                    border-radius: 20px;
                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                    z-index: 1000;
                                                                                                    overflow: hidden;
                                                                                                    animation: pulse 2s infinite;
                                                                                                    ">
                            <span style="
                                                                                                    position: absolute;
                                                                                                    top: 0;
                                                                                                    left: -75%;
                                                                                                    width: 50%;
                                                                                                    height: 100%;
                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                    transform: skewX(-25deg);
                                                                                                    animation: shine 2s infinite;
                                                                                                    "></span>
                            Admission Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
          <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-business/mobile-top.png" alt="">


          <div class="container">

            <!-- courses section web  -->
            <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

            <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
              <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                <th class="text-light  font-weight-bold">SL. NO.</th>
                <th class="text-light  font-weight-bold">COURSES</th>
                <th class="text-light  font-weight-bold">DURATION</th>
                <th class="text-light  font-weight-bold">DETAILS</th>
              </thead>
              <tbody class="para1 bg-light">
                <tr>
                  <td>1.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Finance</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>2.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Marketing</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>3.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA - HRM</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>4.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA - Operation Management</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>5.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Entrepreneurship & Small Business Management</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>6.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Business Analytics</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                    <td>7.</td>
                    <td>
                        <p>
                            <strong style="color: #023e8a;" class="#">BBA</strong>
                        </p>
                    </td>
                    <td class="para1">
                        3/4 Yrs as per NEP
                    </td>
                    <td>
                        <a target="_blank" href="programs-BBA"><button type="button"
                                style="background-color: #FF9A1E; color: #fff;"
                                class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                    </tr>

              </tbody>
            </table>

          </div>

          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-business/mobile-down.png" alt="">


        </div>

        <div class="website">
          <!--Start Header-->
        @include('frontend/components/aheader')
          <!--End Header-->
                    <!-- floating button  -->
                    <div>
                        <a href="https://admissions.rgu.ac/" style="
                                                                                                                position: fixed;
                                                                                                                bottom: 35px;
                                                                                                                right: 50px;
                                                                                                                background-color: #ef991f;
                                                                                                                color: #fff;
                                                                                                                padding: 12px 20px;
                                                                                                                font-size: 18px;
                                                                                                                font-weight: bold;
                                                                                                                text-decoration: none;
                                                                                                                border-radius: 20px;
                                                                                                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                z-index: 1000;
                                                                                                                overflow: hidden;
                                                                                                                animation: pulse 2s infinite;
                                                                                                                ">
                            <span style="
                                                                                                                position: absolute;
                                                                                                                top: 0;
                                                                                                                left: -75%;
                                                                                                                width: 50%;
                                                                                                                height: 100%;
                                                                                                                background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                transform: skewX(-25deg);
                                                                                                                animation: shine 2s infinite;
                                                                                                                "></span>
                            Admisssion Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-business/web-top.png" alt="">


          <div class="container">

            <!-- courses section web  -->
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


            <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
              <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                <th class="text-light  font-weight-bold">SL. NO.</th>
                <th class="text-light  font-weight-bold">COURSES</th>
                <th class="text-light  font-weight-bold">DURATION</th>
                <th class="text-light  font-weight-bold">DETAILS</th>
              </thead>
              <tbody class="para1 bg-light">
                <tr>
                  <td>1.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Finance</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>2.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Marketing</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>3.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA - HRM</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>4.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA - Operation Management</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>5.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Entrepreneurship & Small Business Management</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                  <td>6.</td>
                  <td>
                    <p>
                      <strong style="color: #023e8a;" class="#">MBA Business Analytics</strong>
                    </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MBA-Finance"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

                <tr>
                    <td>7.</td>
                    <td>
                        <p>
                            <strong style="color: #023e8a;" class="#">BBA</strong>
                        </p>
                    </td>
                    <td class="para1">
                        3/4 Yrs as per NEP
                    </td>
                    <td>
                        <a target="_blank" href="programs-BBA"><button type="button"
                                style="background-color: #FF9A1E; color: #fff;"
                                class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                    </tr>

              </tbody>
            </table>

          </div>

          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-business/web-btm.png" alt="">

        </div>

        <div class="container pt-3 pb-5">

            <div>
              <div>
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                <div class="table-responsive">
                  <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                    <thead class="text-white" style="background-color: #27467a">
                      <th class="text-white">S.No.</th>
                      <th class="text-white">BATCH</th>
                      <th class="text-white">SEMESTER</th>
                      <th class="text-white">PERIOD</th>
                      <th class="text-white">DATE</th>
                      <th class="text-white">ACTIVITY CONDUCTED</th>
                      <th class="text-white">PURPOSE</th>
                      <th class="text-white">NAME AND DESIGNATION</th>
                    </thead>
                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1</td>
                        <td>BBA BATCH 2021-2024</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>4-12-2023</td>
                        <td>TRAINING SESSION ON RESUME MAKING</td>
                        <td>TRAINER</td>
                        <td>JC KUSHAL BHARAT BAGADIA, ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>BBA BATCH 2021-2024</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-12-2023</td>
                        <td>WORKSHOP ON BASICS TO EXCEL</td>
                        <td>TRAINER</td>
                        <td>CA ANKIT JALLAN FOUNDER CUM TRAINER " EXCEL WITH EXCEL"</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-12-2023</td>
                        <td>WORKSHOP ON BASICS TO EXCEL</td>
                        <td>TRAINER</td>
                        <td>CA ANKIT JALLAN FOUNDER CUM TRAINER " EXCEL WITH EXCEL"</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-23-2023</td>
                        <td>APTITUDE SKIILS TRAINING</td>
                        <td>TRAINER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-30-2023</td>
                        <td>APTITUDE SKIILS TRAINING</td>
                        <td>TRAINER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-7-2023</td>
                        <td>APTITUDE SKIILS TRAINING</td>
                        <td>TRAINER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-14-2023</td>
                        <td>APTITUDE SKIILS TRAINING</td>
                        <td>TRAINER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-28-2023</td>
                        <td>APTITUDE SKIILS TRAINING</td>
                        <td>TRAINER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>MBA BATCH 2022-2024</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-19-2023</td>
                        <td>PROFESSIONAL COMMUNICATION SKILLS</td>
                        <td>TRAINER</td>
                        <td>JC KUSHAL BHARAT BAGADIA, ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>BBA BATCH 2021-2024&amp; MBA BATCH 2022-2024</td>
                        <td>5TH &amp; 3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>12-1-2023</td>
                        <td>MOCK INTERVIEW</td>
                        <td>RESOURCE PERSON</td>
                        <td>MR.POLASH PRATIM BARUAH, SENIOR HR BANDHAN BANK</td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>3-13-2024</td>
                        <td>PERSONAL GROOMING</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>3-13-2024</td>
                        <td>BASIC ROAD BEHAVIOR</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>13</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>3-13-2024</td>
                        <td>TIME AND PRIORITY MANAGEMENT</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>14</td>
                        <td>BBA BATCH 2023-2026 &amp; BBA BATCH 2022-2025</td>
                        <td>2ND&amp; 4TH</td>
                        <td>FEBRUARY-JULY</td>
                        <td>3-21-2024</td>
                        <td>THE POETS VANITY( WORLD POETRY DAY)</td>
                        <td>GUEST SPEAKER</td>
                        <td>
                          MS.PRIYA TIWARI &amp; MR.MASHUD KHALIDUR RAHMAN, FOUNDER IRSHAAD
                        </td>
                      </tr>
                      <tr>
                        <td>15</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>3-30-2024</td>
                        <td>WORKSHOP ON "EFFECTIVE PUBLIC SPEAKING"</td>
                        <td>RESOURCE PERSON</td>
                        <td>
                          JC CA POOJA JAIN ZONE TRAINER JCI INDIA &amp; JC SEN RAJESH
                          GANGWAL PAST ZONE PRESIDENT JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>16</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>4-8-2024</td>
                        <td>INTERVIEW SKILLS</td>
                        <td>TRAINER</td>
                        <td>JC PUJA JAIN ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>17</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>4-3-2024</td>
                        <td>PERSONALITY DEVELOPMENT</td>
                        <td>TRAINER</td>
                        <td>JC PUJA JAIN ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>18</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>4-3-2024</td>
                        <td>PERSONALITY DEVELOPMENT</td>
                        <td>TRAINER</td>
                        <td>JC PUJA JAIN ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>19</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>4TH</td>
                        <td>FEBRUARY-JULY</td>
                        <td>4-18-2024</td>
                        <td>CAREER COUNSELLING SESSION</td>
                        <td>GUEST SPEAKER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>20</td>
                        <td>BBA BATCH 2021-2024</td>
                        <td>6TH</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-3-2024</td>
                        <td>WORKSHOP ON BASICS TO EXCEL</td>
                        <td>TRAINER</td>
                        <td>CA ANKIT JALLAN FOUNDER CUM TRAINER " EXCEL WITH EXCEL"</td>
                      </tr>
                      <tr>
                        <td>21</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>STRESS MANAGEMENT</td>
                        <td>TRAINER</td>
                        <td>JC PUJA JAIN ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>22</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>BUILDING RELATIONSHIPS AND NETWORKING</td>
                        <td>TRAINER</td>
                        <td>JC NISHANT PAHADIA PROVISIONAL NATIONAL TRAINER</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>4TH</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>CYBER CRIME</td>
                        <td>TRAINER</td>
                        <td>JFM MINAKSHI DAMANI ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>24</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>4TH</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>E-FILING OF GST RETURNS</td>
                        <td>TRAINER</td>
                        <td>CA KAMAL MOUR, GUEST FACULTY RGU</td>
                      </tr>
                      <tr>
                        <td>25</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>PERSONAL FINANCIAL MANAGEMENT</td>
                        <td>TRAINER</td>
                        <td>JC DEEPAK JAIN, ZONE DIRECTOR TRAINING JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>26</td>
                        <td>MBA BATCH 2023-2025</td>
                        <td>2ND</td>
                        <td>FEBRUARY-JULY</td>
                        <td>5-23-2024</td>
                        <td>DIGITAL MARKETING</td>
                        <td>TRAINER</td>
                        <td>CA ANKIT JALLAN ,ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>27</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>7-22-2024</td>
                        <td>INTERACTIVE SESSION ON INDUSTRY CONNECT</td>
                        <td>RESOURCE PERSON</td>
                        <td>MR.SAGAR KUMAR INCUBATION MANAGER ASSAM STARTUP</td>
                      </tr>
                      <tr>
                        <td>28</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>7-22-2024</td>
                        <td>TRAINING SESSION ON TEAM WORK</td>
                        <td>TRAINER</td>
                        <td>JC PUJA JAIN ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>29</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-7-2024</td>
                        <td>INTERACTIVE SESSION ON INDUSTRY CONNECT</td>
                        <td>RESOURCE PERSON</td>
                        <td>MR.SAGAR KUMAR INCUBATION MANAGER ASSAM STARTUP</td>
                      </tr>
                      <tr>
                        <td>30</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-7-2024</td>
                        <td>TRAINING SESSION ON VOICE OF INFLUENCE</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>31</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-12-2024</td>
                        <td>INTERACTIVE SESSION ON INDUSTRY CONNECT</td>
                        <td>RESOURCE PERSON</td>
                        <td>MR.SAGAR KUMAR INCUBATION MANAGER ASSAM STARTUP</td>
                      </tr>
                      <tr>
                        <td>32</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-12-2024</td>
                        <td>
                          TRAINING SESSION ON SPEAK WITH IMPACT: HOW REFLECTIVE
                          COMMUNICATION DRIVES YOUR CAREER FORWARD
                        </td>
                        <td>TRAINER</td>
                        <td>JC SONIA SARDA, PROVISIONAL NATIONAL TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>33</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-16-2024</td>
                        <td>INTERACTIVE SESSION BY DR.ANIL KAPUR</td>
                        <td>GUEST SPEAKER</td>
                        <td>PRESIDENT MEGHALAYA CEMENTS LTD.(TOPCEM CEMENTS)</td>
                      </tr>
                      <tr>
                        <td>34</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-20-2024</td>
                        <td>INDUSTRY EXPECTATION FROM MANAGEMENT STUDENTS</td>
                        <td>RESOURCE PERSON</td>
                        <td>
                          MR.ANGELO DIAS, GENERAL MANAGER,BUSINESS STANDARD PVT.LTD.MUMBAI
                        </td>
                      </tr>
                      <tr>
                        <td>35</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-22-2024</td>
                        <td>INTERACTIVE SESSION ON INNOVATION &amp; ENTREPRENEURSHIP</td>
                        <td>GUEST SPEAKER</td>
                        <td>PROF.ASHOK KUMAR, DEPUTY DIRECTOR RCCR</td>
                      </tr>
                      <tr>
                        <td>36</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>8-28-2024</td>
                        <td>TRAINING SESSION ON ADVANCED COMMUNICATION SKILL</td>
                        <td>RESOURCE PERSON</td>
                        <td>JFM VIJAYA KUMAR,NATIONAL TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>37</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-3-2024</td>
                        <td>RESUME AND COVER LETTER</td>
                        <td>TRAINER</td>
                        <td>JC KUSHAL BHARAT BAGADIA, ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>38</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-6-2024</td>
                        <td>RESUME AND COVER LETTER</td>
                        <td>TRAINER</td>
                        <td>JC KUSHAL BHARAT BAGADIA, ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>39</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-6-2024</td>
                        <td>WORKSHOP ON COMMUNICATION SKILLS</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>40</td>
                        <td>BBA 2022-2025 &amp; MBA 2024-2027</td>
                        <td>5TH &amp; 1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-6-2024</td>
                        <td>SESSION ON INDUSTRY EXPECTATIONS FROM MANAGEMENT STUDENTS</td>
                        <td>GUEST SPEAKER</td>
                        <td>MR.RAJ SINGH, BUSINESS CONSULTANT AND EXECUTIVE COACH</td>
                      </tr>
                      <tr>
                        <td>41</td>
                        <td>BBA 2022-2025 &amp; MBA 2024-2027</td>
                        <td>5TH &amp; 1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-9-2024</td>
                        <td>SESSION ON " TRANSFORMING JOB SEEKERS INTO JOB CREATORS"</td>
                        <td>GUEST SPEAKER</td>
                        <td>
                          DR.SAMIR BARUAH, FORMER CORPORATE GENERAL MANAGER,INDIAN
                          OVERSEAS BANK,CHENNAI
                        </td>
                      </tr>
                      <tr>
                        <td>42</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-12-2024</td>
                        <td>SESSION ON LEADERSHIP AND STRATEGIC THINKING</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>43</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-13-2024</td>
                        <td>GROUP DISCUSSION</td>
                        <td>TRAINER</td>
                        <td>JC KUSHAL BHARAT BAGADIA, ZONE TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>44</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-19-2024</td>
                        <td>SESSION ON TEAM WORK</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>45</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-20-2024</td>
                        <td>SESSION ON PROBLEM SOLVING AND CRITICAL THINKING</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>46</td>
                        <td>BBA BATCH 2023-2026</td>
                        <td>3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-24-2024</td>
                        <td>TEAM WORK AND COLLABORATION</td>
                        <td>TRAINER</td>
                        <td>JC SONIA SARDA, PROVISIONAL NATIONAL TRAINER JCI INDIA</td>
                      </tr>
                      <tr>
                        <td>47</td>
                        <td>MBA BATCH 2024-2026</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-26-2024</td>
                        <td>CONFLICT RESOLUTION AND NEGOTIATION</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>48</td>
                        <td>BBA BATCH 2024-2027</td>
                        <td>1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>9-27-2024</td>
                        <td>CONTENT CREATION</td>
                        <td>TRAINER</td>
                        <td>
                          JC PUJA JAIN ZONE TRAINER JCI INDIA &amp; JC NISHANT PAHADIA
                          PROVISIONAL NATIONAL TRAINER JCI INDIA
                        </td>
                      </tr>
                      <tr>
                        <td>49</td>
                        <td>
                          BBA BATCH 2022-2025, MBA BATCH 2023-2025 &amp; MBA BATCH
                          2024-2026
                        </td>
                        <td>5TH, 3RD &amp; 1ST</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-22-2024</td>
                        <td>
                          INTERACTIVE SESSION ON HOW TO BRIDGE THE GAP BETWEEN THEORITICAL
                          AND PRACTICAL INSIGHTS FOSTERING MEANINGFUL CONNECTIONS
                        </td>
                        <td>GUEST SPEAKER</td>
                        <td>
                          MR.KARTIK SAHOO DIRECTOR HR,RADISSON BLU GUWAHATI &amp;
                          MR.SUBHASISH DEY L&amp;D MANAGER,RADISSON BLU GUWAHATI
                        </td>
                      </tr>
                      <tr>
                        <td>50</td>
                        <td>BBA BATCH 2022-2025</td>
                        <td>5TH</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-23-2024</td>
                        <td>CAREER COUNSELLING SESSION</td>
                        <td>GUEST SPEAKER</td>
                        <td>MR,SOUMEN DAS DIRECTOR T.I.M.E GUWAHATI &amp; SHILLONG</td>
                      </tr>
                      <tr>
                        <td>51</td>
                        <td>"BBA BATCH 2022-2025, MBA BATCH 2023-2025"</td>
                        <td>5TH &amp; 3RD</td>
                        <td>AUGUST- JANUARY</td>
                        <td>10-25-2024</td>
                        <td>ALUMNI INTERACTION</td>
                        <td>GUEST SPEAKER</td>
                        <td>
                          MR.ABHISHEK SARMA, ASSISTANT MANAGER, EMPLOYEE RELATIONS AND
                          COMPLIANCE,RELAINCE RETAIL LIMITED
                        </td>
                      </tr>
                      <tr>
                        <td>52</td>
                        <td>MBA BATCH 2023-25, Ph.D. scholar, Faculties</td>
                        <td>3rd</td>
                        <td>JULY- DECEMBER</td>
                        <td>03.10.2024</td>
                        <td>IPR Awareness Program</td>
                        <td>Workshop</td>
                        <td>Dr. Rohit Rathore</td>
                      </tr>
                      <tr>
                        <td>53</td>
                        <td>Ph.D. Scholars, Faculties</td>
                        <td>All Ph.D. Scholars</td>
                        <td>JULY- DECEMBER</td>
                        <td>18.10.2024</td>
                        <td>Internal Development Programme</td>
                        <td>i-FDP</td>
                        <td>Prof. Saket Jeswani</td>
                      </tr>
                      <tr>
                        <td>54</td>
                        <td>BBA 2022-25, MBA 2023-25</td>
                        <td>5TH AND 3RD</td>
                        <td>JULY- DECEMBER</td>
                        <td>22.10.2024</td>
                        <td>Interactive session</td>
                        <td>Session</td>
                        <td>Mr. Kartik Sahoo, Mr. Shubhashish Dey</td>
                      </tr>
                      <tr>
                        <td>55</td>
                        <td>MBA BATCH 2023-25, 2024-26</td>
                        <td>1ST AND 3RD</td>
                        <td>JULY- DECEMBER</td>
                        <td>04.11.2024</td>
                        <td>Guest Lecture</td>
                        <td>Lecture</td>
                        <td>Dr. Leena Dam</td>
                      </tr>
                      <tr>
                        <td>56</td>
                        <td>MBA BATCH 2024-26</td>
                        <td>3RD</td>
                        <td>JULY- DECEMBER</td>
                        <td>03.12.2024</td>
                        <td>Winter carnival</td>
                        <td>Activity</td>
                        <td>Dr. Suman Agarwal</td>
                      </tr>
                      <tr>
                        <td>57</td>
                        <td>MBA 2023-25</td>
                        <td>3RD</td>
                        <td>JULY- DECEMBER</td>
                        <td>05.12.2024</td>
                        <td>Inauguration of Bizlab</td>
                        <td>Bizlab Training</td>
                        <td>Mr. Neeraj Kapoor, Mr. Ashu Sikri, Mr. Pradeep Kumar</td>
                      </tr>
                      <tr>
                        <td>58</td>
                        <td>RSB Faculties</td>
                        <td>RSB Faculties</td>
                        <td>JULY- DECEMBER</td>
                        <td>16.12.2024</td>
                        <td>Interaction with Dean RSB and Registrar</td>
                        <td>Way Forward</td>
                        <td>Ms. Shanta B. Sharma</td>
                      </tr>
                      <tr>
                        <td>59</td>
                        <td>BBA BATCH 2021-2024</td>
                        <td>5TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>17.01.2025</td>
                        <td>Faculty Interaction Session</td>
                        <td>Interaction</td>
                        <td>Dr. Manimoy Paul</td>
                      </tr>
                      <tr>
                        <td>60</td>
                        <td>MBA Batch 2023-25</td>
                        <td>4TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>31.01.2025</td>
                        <td>Outreach Program</td>
                        <td>Outreach Program</td>
                        <td>Assam Sishu Kalyan Sadan</td>
                      </tr>
                      <tr>
                        <td>61</td>
                        <td>MBA Batch 2023-25</td>
                        <td>4TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>31.01.2025 to 04.02.2025</td>
                        <td>Industrial Visit</td>
                        <td>Industrial Visit</td>
                        <td>YUKSOM BEVERAGE & Shree Bhagwati Agrotech</td>
                      </tr>
                      <tr>
                        <td>62</td>
                        <td>MBA Batch 2023-25, 2024-26</td>
                        <td>2nd and 4th</td>
                        <td>JANUARY- JUNE</td>
                        <td>04.02.2025</td>
                        <td>Industrial Visit</td>
                        <td>Industrial Visit</td>
                        <td>Jericho Foods and Beverages</td>
                      </tr>
                      <tr>
                        <td>63</td>
                        <td>BBA Batch 2023-26</td>
                        <td>4th</td>
                        <td>JANUARY- JUNE</td>
                        <td>04.02.2025</td>
                        <td>Career Counselling</td>
                        <td>Interaction</td>
                        <td>Mr. Soumen Das & Ms. Trikhagni Kalita</td>
                      </tr>
                      <tr>
                        <td>64</td>
                        <td>MBA 2024-26</td>
                        <td>2nd</td>
                        <td>JANUARY- JUNE</td>
                        <td>06.02.2025</td>
                        <td>Group Discussion</td>
                        <td>Mock GD</td>
                        <td>Mr. Dipak Jain & Mr. Nibir Pratim Choudhury</td>
                      </tr>
                      <tr>
                        <td>65</td>
                        <td>FACULTY</td>
                        <td>RSB FACULTY</td>
                        <td>JANUARY- JUNE</td>
                        <td>10.02.2025</td>
                        <td>Income Tax Planning Session</td>
                        <td>FDP</td>
                        <td>CA (Dr.) Kamal Mour</td>
                      </tr>
                      <tr>
                        <td>66</td>
                        <td>MBA Batch 2023-25, 2024-26</td>
                        <td>2nd and 4th</td>
                        <td>JANUARY- JUNE</td>
                        <td>18.02.2025</td>
                        <td>Emerging Trends in Global Business</td>
                        <td>Interaction</td>
                        <td>Mr. Sailaj Ray Baruah</td>
                      </tr>
                      <tr>
                        <td>67</td>
                        <td>RSB Faculties</td>
                        <td>-</td>
                        <td>JANUARY- JUNE</td>
                        <td>21.02.2025, 22.02.2025</td>
                        <td>MDP on Behavioural Finance</td>
                        <td>MDP</td>
                        <td>Prof. Ranjit Singh, Dr. Amalesh Bhowal</td>
                      </tr>
                      <tr>
                        <td>68</td>
                        <td>FACULTY</td>
                        <td>PAN RGU FACULTIES</td>
                        <td>JANUARY- JUNE</td>
                        <td>24.02.2025-27.02.2025</td>
                        <td>5-day FDP</td>
                        <td>FDP</td>
                        <td>Dr. J.U. Ahmed, Dr. Sunildro, Dr. Ibemcha, Dr. Tina</td>
                      </tr>
                      <tr>
                        <td>69</td>
                        <td>All Batches</td>
                        <td>Ph.D. scholars</td>
                        <td>JANUARY- JUNE</td>
                        <td>28.02.2025</td>
                        <td>Session with Ph.D. Scholars</td>
                        <td>Interaction</td>
                        <td>Dr. J.U. Ahmed</td>
                      </tr>
                      <tr>
                        <td>70</td>
                        <td>MBA BATCH 2024-26</td>
                        <td>2ND</td>
                        <td>JANUARY- JUNE</td>
                        <td>06.03.2025</td>
                        <td>Industrial Visit</td>
                        <td>Industrial Visit</td>
                        <td>Sudha Dairy Plant (COMFED)</td>
                      </tr>
                      <tr>
                        <td>71</td>
                        <td>ALL BATCHES</td>
                        <td>ALL</td>
                        <td>JANUARY- JUNE</td>
                        <td>07.03.2025</td>
                        <td>International Women Day Celebration</td>
                        <td>Women Day Celebration</td>
                        <td>Ms. Kanaklata Das, Ms. Rashmi Sharma</td>
                      </tr>
                      <tr>
                        <td>72</td>
                        <td>MBA BATCH 2024-26, 2023-25</td>
                        <td>2ND AND 4TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>27.03.2025</td>
                        <td>Session on Finance in Manufacturing</td>
                        <td>Interaction</td>
                        <td>Mr. Gaurav Anand</td>
                      </tr>
                      <tr>
                        <td>73</td>
                        <td>BBA BATCH 2023-26</td>
                        <td>4TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>03.04.2025</td>
                        <td>Industrial Visit</td>
                        <td>Industrial Visit</td>
                        <td>Jericho Food and Beverages</td>
                      </tr>
                      <tr>
                        <td>74</td>
                        <td>MBA BATCH 2024-26, 2023-25</td>
                        <td>2ND AND 4TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>08.04.2025</td>
                        <td>Interactive Session with Students</td>
                        <td>Interaction</td>
                        <td>Shri Mukesh Agrawal, IPS (Retd.)</td>
                      </tr>
                      <tr>
                        <td>75</td>
                        <td>BBA BATCH 2022-25, 2023-26, 2024-27</td>
                        <td>2ND, 4TH AND 6TH</td>
                        <td>JANUARY- JUNE</td>
                        <td>28.04.2025</td>
                        <td>Interactive Session with Students</td>
                        <td>Interaction</td>
                        <td>Mr. Surendra Kumar, DGP, Assam</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div>
              <div>
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                <div class="table-responsive">
                  <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                    <thead class="text-white" style="background-color: #27467a">
                      <th class="text-white">S.NO.</th>
                      <th class="text-white">POSITION IN S-BOS</th>
                      <th class="text-white">NAME AND DESIGNATION</th>
                    </thead>
                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1</td>
                        <td>Chairperson (Ex-Officio) Dean of School</td>
                        <td>Dr. George AP, Dean, RSB</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>All Heads of the Departments - Member (Ex-Officio)</td>
                        <td>Dr. Bitopi Gogoi, Associate Professor &amp; HOD</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>External Experts for each Department (Academic)</td>
                        <td>
                          Prof. (Dr.) N.N. Sarma, Professor, Management, K.K.H.S.O.U.
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>AGM</td>
                        <td>Mr. Apurba Misra</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>
                          Two Faculty members of the School nominated by the Vice
                          Chancellor
                        </td>
                        <td>
                          Dr. Rishi Chakravarty, Associate Professor
                          <hr />
                          Dr. Arpee Saikia, Associate Professor
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Registrar, Member Secretary (Ex-officio)</td>
                        <td>Prof. (Dr.) Dip Narayain Singh, Registrar</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div>
              <div>
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

                <div class="table-responsive">
                  <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                    <thead class="text-white" style="background-color: #27467a">
                      <th class="text-white">#</th>
                      <th class="text-white">Content</th>
                      <th class="text-white">Name of the Member</th>
                      <th class="text-white">Designation</th>
                      <th class="text-white">Designation in the committee</th>
                    </thead>
                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1</td>
                        <td>Head of the Department</td>
                        <td>Dr. Arpee Saikia</td>
                        <td>HoD</td>
                        <td>Chairperson</td>
                      </tr>
                      <tr>
                        <td rowspan="2">2</td>
                        <td rowspan="2" class="align-middle">Two Professors</td>
                        <td>Prof (Dr.) George A.P.</td>
                        <td>Dean RSB</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>Prof (Dr.) Saket Jeswani</td>
                        <td>Dean Consultancy, Innovation, MDP</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td rowspan="2">3</td>
                        <td rowspan="2" class="align-middle">
                          Two Associate Professors – one of them will be the member
                          secretary
                        </td>
                        <td>Dr. Bitopi Gogoi</td>
                        <td>Associate Professor</td>
                        <td>Member Secretary</td>
                      </tr>
                      <tr>
                        <td>Dr. Rishi Chakravarty</td>
                        <td>Associate Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td rowspan="2">4</td>
                        <td rowspan="2" class="align-middle">
                          Two Assistant Professors holding Ph.D. degree
                        </td>
                        <td>Dr. Darshana Bhagowati</td>
                        <td>Assistant Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Dr. Suman Agarwal</td>
                        <td>Assistant Professor <br>Member</td>
                      </tr>
                      <tr>
                        <td rowspan="3">5</td>
                        <td rowspan="3" class="align-middle">
                          Three external members not below the rank of Professors,
                          including members from an allied department, who will be
                          nominated by the URC
                        </td>
                        <td>Prof. Soumitra Sen</td>
                        <td>Prof. RSHM &amp; RSTTM</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. S. Nayak</td>
                        <td>Dean RSCOM</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. Ladu Singh</td>
                        <td>Prof. Emeritus</td>
                        <td>External Member</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div>
              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

              <div class="p-2">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion para1" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><strong>
                              Under Graduate
                            </strong>
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row">
                              <a href="https://media.rgu.ac/department-all/syllabus-new/5RSB/BBA 4 YEAR SYLLABUS STRUCTURE FOR 25.2.25(Final).pdf"
                                target="_blank">
                                <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS (BASED ON NATIONAL EDUCATION
                                POLICY 2020)
                                <i class="fa fa-download"></i>
                              </a>

                              <a href="https://media.rgu.ac/department-all/syllabus-new/5RSB/MBA_Syllabus2025-26_(10.5.25).pdf"
                                target="_blank">
                                <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS (BASED ON NATIONAL EDUCATION
                                POLICY 2020) FOR MBA
                                <i class="fa fa-download"></i>
                              </a>

                              <a href="https://media.rgu.ac/department-all/syllabus-new/5RSB/Structure of syllabus - UG-29.4.25F - updated.pdf"
                                target="_blank">
                                <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 4 YEAR UG PROGRAMME
                                <i class="fa fa-download"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>
                              Post Graduate
                            </strong>
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row">
                              <a href="https://media.rgu.ac/department-all/syllabus-new/5RSB/Structure of syllabus - PG 29.4.25 -F (1) (1)- 2 Semester.pdf"
                                target="_blank">
                                <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG PROGRAMME
                                <i class="fa fa-download"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>
                              Executive MBA and Ph.D.
                            </strong>
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="row">
                              <!-- <a href="https://media.rgu.ac/department-all/syllabus-new/5RSB/Structure of syllabus - PG 29.4.25 -F (1) (1)- 2 Semester.pdf"
                                target="_blank">
                                <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG PROGRAMME
                                <i class="fa fa-download"></i>
                              </a> -->
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <strong>
                              Doctoral Programme
                            </strong>
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <a href="phd" class="para1" target="_blank"><strong>
                                Click to View...
                              </strong></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6"></div>
                </div>
              </div>
            </div>

          </div>

      </div>
@endsection

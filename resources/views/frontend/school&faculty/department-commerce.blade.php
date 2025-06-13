@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img class="pb-3" style="padding-top: 80px; position: relative;"
                src="https://media.rgu.ac/department-all/dept-commerce/mob-top.png"
                alt="">
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
                                    <strong style="color: #023e8a;" class="#">B.Com. (Day Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Morning Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-morning-shift"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - Finance with ICA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Com.</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MCom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

            <img class="pb-3"
                src="https://media.rgu.ac/department-all/dept-commerce/mobile-btm.png"
                alt="">


            <div class="container pb-5 pt-3">
                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th class="font-weight-bold text-white">S.No.</th>
                                        <th class="font-weight-bold text-white">DATE OF VISIT</th>
                                        <th class="font-weight-bold text-white">
                                            NAME OF THE GUEST SPEAKER
                                        </th>
                                        <th class="font-weight-bold text-white">DESIGNATION</th>
                                        <th class="font-weight-bold text-white">PURPOSE OF VISIT</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>3/8/2018</td>
                                        <td>Dr. Polly Vauquline</td>
                                        <td>Associate Professor, Gauhati University</td>
                                        <td>
                                            An Interactive Session on the occasion of International Womens's
                                            Day on the topic Social Status and Empowerment of Women in the
                                            Society
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>3/21/2018</td>
                                        <td>Roy Riddhinil</td>
                                        <td>Founder of Ne8x</td>
                                        <td>
                                            An Interactive Session on the topic 'Perspectives of
                                            Entrepreneurship in North-East India'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>8/13/2018</td>
                                        <td>Mr.Swapnanil Talukdar</td>
                                        <td>Social Engineer</td>
                                        <td>
                                            An Interactive Session on the topic 'Passion, Profession &amp;
                                            Problems'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>11/9/2018</td>
                                        <td>Mr. Hironmoy Gogoi</td>
                                        <td>Founder of 'Gaon Ka Khana'.</td>
                                        <td>
                                            An interactive session to discuss about his journey as an
                                            entrepreneur
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>12/10/2021</td>
                                        <td>Ms. Disha Sarkar</td>
                                        <td>
                                            Resource Expert, United Nations Resource Centre, NE India UNESCO
                                            Association, Guwahati.
                                        </td>
                                        <td>
                                            An interactive session on Ecopreneurship: Synergising Climate
                                            Action with Entrepreneurship
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>9/15/2022</td>
                                        <td>Dr.Samir Barua</td>
                                        <td></td>
                                        <td>
                                            An interactive session on TRANSFORMING JOB SEEKERS INTO JOB
                                            CREATORS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>11/17/2022</td>
                                        <td>Mr. Kaushik Khanikar</td>
                                        <td>
                                            Project Execution Officer NEEDP, Leads &amp; Projects
                                            Management, IIM Calcutta Innovation Park
                                        </td>
                                        <td>
                                            Interactive session on Entrepreneurship and Capacity Building.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>12/19/2022</td>
                                        <td>CS Swati Tejawat</td>
                                        <td>Practising Chartered Accountant</td>
                                        <td>Workshop on 'E-filing of Income Tax Return'</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>2/13/2023</td>
                                        <td>CA Anil Kumar Agarwala and Dr. Seema Sharma</td>
                                        <td>
                                            Dean, Faculty of Commerce and Management, Assam Down Town
                                            University
                                        </td>
                                        <td>
                                            An Interactive Panel Discussion on “UNION BUDGET 2023: PROSPECTS
                                            AND PERSPECTIVES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>28-02-2023 &amp;15 /03/2023</td>
                                        <td>Prachi Sharma</td>
                                        <td>Financial Adviser</td>
                                        <td>
                                            Interactive session on 'Fair Fortune' and Training workshop on
                                            interview skills, personal grooming and basic road behaviour
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>3/22/2023</td>
                                        <td>Prof. (Dr. ) C. Rajkumar</td>
                                        <td>Hon'ble Vice Chancellor, OP Jindal University</td>
                                        <td>Lecture session on Career Prospect in Higher Education</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>3/27/2023</td>
                                        <td>CS Tripti Bihani</td>
                                        <td>CS</td>
                                        <td>
                                            Interactive session on the topic "Significance of Intellectual
                                            Property Rights In Present Era"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>8/23/2023</td>
                                        <td>CS Harsh Baid.</td>
                                        <td>CS</td>
                                        <td>A workshop on "FINANCIAL LITERACY"</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>12/20/2023</td>
                                        <td>Dr. Sharan Kumar Shetty</td>
                                        <td>Certified Trainer CMA-USA and ACCA</td>
                                        <td>
                                            A Guest Talk on the topic 'Unleashing the Potential for Personal
                                            Finance '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>12/21/2023</td>
                                        <td>Ms Seema Sarma</td>
                                        <td>CS</td>
                                        <td>Workshop on E - Filing of Income Tax Return</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>3/15/2024</td>
                                        <td>CA Meghdoot A. Karnik</td>
                                        <td>
                                            Director of the School of Banking, Financial Services and
                                            Insurance (BSFI) at Symbiosis University of Applied Sciences,
                                            Indore
                                        </td>
                                        <td>Workshop on Financial Literacy and Stock Trading</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>3/23/2024</td>
                                        <td>Dr Sundaravardhan Venkatesh</td>
                                        <td>
                                            Dean, School of Management and Entrepreneurship, Shiv Nadar
                                            University, Delhi NCR
                                        </td>
                                        <td>
                                            Graced as a Resource Person in a faculty development programme
                                            on the topic 'Harnessing Research Skills for an Impactful
                                            Career'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>4/10/2024</td>
                                        <td>Dr Joyeeta Deb</td>
                                        <td>
                                            Associate Professor, Department of Business Administration,
                                            Assam University, Silchar
                                        </td>
                                        <td>
                                            Graced as a resource person in a talk on 'Fostering
                                            Entrepreneurship in North East India: Exploring Prospects and
                                            Challenges
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>3/27/2024</td>
                                        <td>Dr. Manu Melwin Joy</td>
                                        <td>Assistant Professor, School of Management Studies, CUSAT</td>
                                        <td>
                                            Done a Session on the topic 'Learning in the Vuca World through
                                            Gamification'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>5/24/2024</td>
                                        <td>Mr. Pawan Kumar Agarwalla</td>
                                        <td>CEO and Founder, Datamation Services, Guwahati</td>
                                        <td>
                                            An Interactive Session on 'From Vision to Victory: The Inspiring
                                            Story of Datamation's Rise to Prominence'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>8/8/2024</td>
                                        <td>CA Pankaj Jain</td>
                                        <td>CA</td>
                                        <td>
                                            A Guest Talk on the topic 'Google Tools and AI for Business
                                            Management'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>9/3/2024</td>
                                        <td>Prof Kalyan Adak</td>
                                        <td>
                                            Professor of Department of Commerce at Government Hrangbana
                                            College
                                        </td>
                                        <td>
                                            An Interactive Session on the topic Beginners Blueprint:
                                            Navigating the World of Entrepreneurship
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>9/12/2024</td>
                                        <td>CS Anshuman Baruah &amp; CS Manoj Rawniar</td>
                                        <td>CA &amp; CS</td>
                                        <td>
                                            A Career Awareness Program Career as a Company Secretary and
                                            Prospects of One Person Company and Small Company in the North-
                                            East Region
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>9/19/2024</td>
                                        <td>Dr Bhaskar Kumar Kakoty</td>
                                        <td>
                                            Consultant and Course Coordinator of Indian Institude of
                                            Entrepreneurship
                                        </td>
                                        <td>
                                            An Interactive Session on the topic Environmental Sustainability
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>9/23/2024</td>
                                        <td>N Alphaba Singh</td>
                                        <td>Yoga Therapist and Instructor</td>
                                        <td>
                                            An Interactive Session on the topic Yoga and Health in our Daily
                                            Life
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>9/23/2024</td>
                                        <td>CS Kushal Bagaria</td>
                                        <td>CS</td>
                                        <td>A Session on communication Skills</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>9/26/2024</td>
                                        <td>Ms. Jahnabi Goswami</td>
                                        <td>
                                            HIV Aids Activist and the President of Assam Network of Positive
                                            People
                                        </td>
                                        <td>
                                            An Interactive Session on the topic AIDS Awareness Program
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Activi<span style="color: #FF9A1E; font-weight: 500;">ties</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event Title</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Documentary Viewing – Revisiting The Life And Journey Of The Father Of Our
                                            Nation, Mahatma
                                            Gandhi</td>
                                        <td>01/10/2024</td>
                                        <td>
                                            On 1st October 2024, the Student Forum of Royal School of Commerce, The Assam
                                            Royal Global
                                            University, organized a documentary viewing titled “Revisiting the Life and
                                            Journey of the Father
                                            of Our Nation, Mahatma Gandhi.” This live viewing aimed to honour Gandhi’s
                                            legacy and educate
                                            students on his significant role in India’s freedom struggle, and his philosophy
                                            of non-violence
                                            and truth. The documentary explored Gandhi’s early life, education, return to
                                            India, his
                                            principles of Ahimsa (non-violence), and the lasting impact of his teachings. It
                                            featured
                                            historical footage, interviews, and dramatizations, allowing students to connect
                                            deeply with his
                                            life and struggles.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Internal Faculty Development Programme – “The New Normal Of Education:
                                            Depression, Anxiety, And
                                            Stress And Academic Performance Of Tertiary Students”</td>
                                        <td>15/10/2024</td>
                                        <td>
                                            On 15th October 2024, the Royal School of Commerce organized an Internal Faculty
                                            Development
                                            Programme on the topic “The New Normal of Education: Depression, Anxiety, and
                                            Stress and Academic
                                            Performance of Tertiary Students.” Dr. Prince C.P., Associate Professor from the
                                            Department of
                                            Psychology, Royal School of Behavioural and Allied Sciences, was the keynote
                                            speaker. He shared
                                            insights into how mental health issues—such as depression, anxiety, and
                                            stress—affect the academic
                                            performance of tertiary students in a post-pandemic educational landscape. The
                                            session emphasized
                                            mental well-being as critical to academic success and discussed effective
                                            teaching strategies to
                                            support students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>One-Day Student International Conference On "Innovating For A Circular Future:
                                            Strategies,
                                            Solutions And Sustainability"</td>
                                        <td>18/10/2024</td>
                                        <td>
                                            Royal School of Commerce organized a one-day Student International Conference on
                                            "Innovating for a
                                            Circular Future: Strategies, Solutions and Sustainability" to highlight the
                                            shift from traditional
                                            linear economic models to circular ones, with innovation as a key driver. The
                                            conference helped
                                            students explore strategies, solutions, and sustainable practices essential for
                                            fostering a
                                            circular economy. Multiple sub-themes ensured a comprehensive understanding of
                                            the topic. The
                                            event welcomed UG, PG, and research students from diverse disciplines to present
                                            their work. Dr.
                                            Anuj Kumar, Head of Research, Rushford Business School, Switzerland, delivered
                                            the keynote, and
                                            Mrs. Ranjana Bhajanka, Director, FINER, was the Guest of Honour. They were
                                            joined by Prof. (Dr.)
                                            George A.P., Dean, Royal School of Business and Commerce; Prof. (Dr.) Saket
                                            Jeswani, Dean,
                                            Consultancy, Patent, IPR and MDP; and Dr. Sudip Chakraborty, Deputy Dean, Royal
                                            School of
                                            Commerce.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Visit to the Directorate of Handloom and Handicrafts, Sikkim – Educational
                                            Excursion</td>
                                        <td>21/10/2024</td>
                                        <td>
                                            On 21st October 2024, students from the M.Com 3rd Semester of Royal School of
                                            Commerce visited the
                                            Directorate of Handloom and Handicrafts in Sikkim as part of their educational
                                            excursion. They
                                            observed the intricate process of weaving traditional handicrafts and gained
                                            firsthand knowledge
                                            of the skill and dedication involved. The visit also included discussions on the
                                            business aspects
                                            of the handloom sector, including its economic impact, market potential, and
                                            sustainable
                                            practices. This excursion provided students with both cultural appreciation and
                                            practical insights
                                            into the commercial dynamics of the handloom industry in Sikkim.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Special Talk Session Featuring Prof. Debabrata Mitra, Vice Chancellor of Dakshin
                                            Dinajpur
                                            University</td>
                                        <td>24/10/2024</td>
                                        <td>
                                            On October 24, 2024, a special talk session was held featuring Prof. Debabrata
                                            Mitra, Vice
                                            Chancellor of Dakshin Dinajpur University, West Bengal. Attended by faculty and
                                            M.Com 1st semester
                                            students of the Royal School of Commerce, the session focused on the
                                            intersection of teaching and
                                            administration. Prof. Mitra discussed the need for educators to balance
                                            administrative and
                                            academic responsibilities, emphasizing time management and work-life balance. He
                                            also offered
                                            detailed guidance on preparing for NAAC peer team visits, drawing from his
                                            experience as an
                                            evaluation team member. The interactive session encouraged students to think
                                            about future
                                            leadership roles and develop essential presentation skills. The session
                                            concluded with a strong
                                            focus on NAAC readiness, equipping attendees with actionable strategies for
                                            institutional
                                            evaluations.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Special Talk: "Balancing the Books: Managing Stress for Better Performance" by
                                            Prof. Debabrata
                                            Mitra</td>
                                        <td>25/10/2024</td>
                                        <td>
                                            On October 25, 2024, the Royal School of Commerce hosted a special talk titled
                                            "Balancing the
                                            Books: Managing Stress for Better Performance," led by Prof. Debabrata Mitra.
                                            Aimed at helping
                                            students cope with academic stress, the session featured interactive discussions
                                            where students
                                            shared their stress triggers. Prof. Mitra addressed common issues such as time
                                            constraints and
                                            pressure, offering practical strategies for effective time management and
                                            lifestyle improvement.
                                            He advocated for balanced routines including sleep, diet, and exercise. The
                                            relatable nature of
                                            the discussion and Prof. Mitra's actionable advice left a positive impact, with
                                            students
                                            expressing gratitude. The session concluded with an appreciation from the Head
                                            of Department,
                                            reinforcing a sense of support and community among participants.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Scholarly Works in Commerce</td>
                                        <td>28/10/2024</td>
                                        <td>
                                            Royal School of Commerce held an exhibition showcasing the scholarly works of
                                            its faculty and
                                            students on 28th October 2024. The event served as a platform for sharing
                                            academic research and
                                            innovative projects, encouraging knowledge exchange and scholarly excellence
                                            within the
                                            institution.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Career Counselling Session at Kendriya Vidyalaya, Tinsukia</td>
                                        <td>29/10/2024</td>
                                        <td>
                                            Mr. S. Goenka from Royal School of Commerce, Royal Global University, conducted
                                            a career
                                            counselling session at Kendriya Vidyalaya, Tinsukia on 29th October, 2024. The
                                            session aimed to
                                            guide students in choosing suitable career paths based on their interests and
                                            academic strengths.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Career Counselling Session at Gitanjali Senior Secondary School, Nagaon</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            Dr. Rajdeep Nag from Royal School of Commerce, Royal Global University,
                                            conducted a career
                                            counselling session at Gitanjali Senior Secondary School, Nagaon on 4th
                                            November, 2024. The
                                            session helped students understand various career options and the necessary
                                            academic planning to
                                            achieve their goals.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Career Counselling Session at Senairam HS School, Tinsukia</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Mr. S. Goenka at Senairam HS
                                            School, Tinsukia, on
                                            4th November, 2024. The session offered guidance on future academic and
                                            professional prospects for
                                            the students and encouraged informed decision-making.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Guest Lecture on 'Exploring Career Opportunities in Finance and Accounting'</td>
                                        <td>18/11/2024</td>
                                        <td>
                                            A guest lecture titled 'Exploring Career Opportunities in Finance and
                                            Accounting' was delivered by
                                            CA Kamal Mour, Senior Partner and Branch In-charge of RKP Associates, for
                                            students of Royal School
                                            of Commerce on 18th November, 2024. The session highlighted diverse roles in
                                            finance and
                                            accounting and guided students on building successful careers in the field.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Industrial Visit to Sunrise Biscuit Company Pvt. Ltd.</td>
                                        <td>20/11/2024</td>
                                        <td>
                                            Students of B.Com Finance 1st semester of Royal School of Commerce visited
                                            Sunrise Biscuit Company
                                            Pvt. Ltd., a unit of Britannia located in Boragaon, Guwahati, on 20th November
                                            2024. The visit
                                            provided a practical understanding of manufacturing processes, safety measures,
                                            HR practices, and
                                            waste management. The interactive Q&A session with the HR team added value to
                                            their academic
                                            learning.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Interactive Session with ICA Edu Skills Pvt. Ltd.</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            An interactive session was conducted on 21st November 2024 with ICA Edu Skills
                                            Pvt. Ltd., Royal
                                            School of Commerce's industry partner. Presided over by Ms. Robina Sarkar,
                                            Placement Coordinator,
                                            the session addressed preparations for internships, employer expectations, and
                                            student concerns
                                            regarding the internship process, selection, and stipends. It was attended by
                                            B.Com F&A 1st and
                                            3rd semester students.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Student Speaker Series 2.0 – Abhijit Saikia</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On 21st November 2024, Royal School of Commerce hosted Student Speaker Series
                                            2.0 featuring
                                            Abhijit Saikia, an M.Com 3rd semester student, who spoke on "Impact of
                                            Globalization." He explored
                                            globalization's role in economic integration, cultural exchange, and
                                            technological advancement,
                                            while also addressing income inequality and environmental concerns. The talk
                                            concluded with an
                                            engaging Q&A session.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Student Speaker Series 2.0 – Montosh Chanda</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On the same day, M.Com 3rd semester student Montosh Chanda delivered a talk
                                            titled "Breaking
                                            Barriers: How Business Can Achieve Sustainable and Inclusive Growth." He
                                            discussed growth
                                            strategies, risk management, and growth indicators. The session ended with an
                                            interactive Q&A,
                                            leaving students inspired.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Student Speaker Series 2.0 – Raja Swargiary and Rahul Dey</td>
                                        <td>22/11/2024</td>
                                        <td>
                                            On 22nd November 2024, the series featured M.Com 3rd semester students Raja
                                            Swargiary and Rahul
                                            Dey. Raja spoke on “Role of Strategists in Strategic Management and Its
                                            Principles of Good
                                            Strategy,” while Rahul explored “Strategic Business Analysis: Exploring SWOT and
                                            PESTEL
                                            Frameworks.” The session offered strategic insights relevant to modern business
                                            challenges.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Career Counselling Session at Dawson HSS, Nagaon</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Dr. Rajdeep Nag, Assistant
                                            Professor, Royal School
                                            of Commerce, at Dawson HSS, Nagaon on 21st November 2024, offering students
                                            valuable guidance on
                                            career planning and higher education options.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Career Counselling Session at Green School International</td>
                                        <td>23/11/2024</td>
                                        <td>
                                            On 23rd November 2024, a career counselling session was conducted at Green
                                            School International by
                                            Prof. George Paul and Dr. Ranjan Dutta Kalita. The session helped senior
                                            students gain insights
                                            into academic pathways and future career prospects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Inauguration Ceremony of Royal School of Commerce - Student Forum</td>
                                        <td>03/12/2024</td>
                                        <td>
                                            The Inauguration Ceremony of the Royal School of Commerce – Student Forum
                                            (2024-25) was held on
                                            3rd December 2024, marking the beginning of student-led initiatives and
                                            collaborative academic and
                                            extracurricular activities for the academic year.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Research Project Viva – UG 5th Semester</td>
                                        <td>04/12/2024</td>
                                        <td>
                                            On 4th December 2024, the Research Project Viva for UG 5th-semester students was
                                            held as part of
                                            their practical examination. External examiners and alumni evaluated student
                                            presentations,
                                            enhancing academic rigor and offering constructive feedback.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Panel Discussion on the Union Budget 2025–2026</td>
                                        <td>07/02/2025</td>
                                        <td>
                                            A panel discussion on the Union Budget 2025–2026 was held on 7th February 2025,
                                            featuring CA
                                            Veekash Kumar Agarwal and CA (Dr.) Ayush Saraf, moderated by CA (Dr.) Swati
                                            Tejawat. Students
                                            engaged in dialogue on tax reforms, support for MSMEs, agriculture investments,
                                            and personal
                                            finance strategies, promoting financial literacy and policy awareness.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Industrial Visit – Sunrise Biscuit Company</td>
                                        <td>14/02/2025</td>
                                        <td>
                                            On 14th February 2025, Royal School of Commerce organized an industrial visit to
                                            Sunrise Biscuit
                                            Company to offer students firsthand exposure to advanced production, lean
                                            manufacturing, and
                                            quality control. The visit aimed to bridge classroom learning with practical
                                            applications in
                                            supply chain and product development.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Workshop on Digital Marketing</td>
                                        <td>17/02/2025</td>
                                        <td>
                                            A workshop on Digital Marketing was organized in collaboration with the Indian
                                            Institute of
                                            Entrepreneurship on 17th February 2025. The session covered traditional vs.
                                            digital marketing and
                                            introduced concepts like content marketing, email, SMS, and WhatsApp marketing
                                            for UG and PG
                                            students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Workshop on Marketing and Selling Strategies</td>
                                        <td>21/02/2025</td>
                                        <td>
                                            On 21st February 2025, Mr. Anuj Kr. Saikia, CEO of Arihant Enterprise, conducted
                                            a workshop
                                            focusing on marketing and selling mushrooms. The session explored marketing
                                            challenges and
                                            strategies specific to the North East, attended by B.Com 2nd semester students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Quiz Competition – Entrepreneurship</td>
                                        <td>24/02/2025</td>
                                        <td>
                                            A quiz competition on entrepreneurship was conducted by the Student Forum of
                                            Royal School of
                                            Commerce on 24th February 2025. The quiz tested students' creativity, business
                                            acumen, and
                                            knowledge of startup strategies.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Outreach Program – Chakardeo ME School</td>
                                        <td>04/03/2025</td>
                                        <td>
                                            On 4th March 2025, students of B.Com 2nd semester organized an outreach program
                                            at Chakardeo Desh
                                            Bhakta Tarun Ram Phukan M.E. School. Volunteers donated sports and food items,
                                            interacted with
                                            students, and conducted a workshop on ‘Good Touch and Bad Touch.’
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Seminar on Understanding & Preventing Sexual Harassment</td>
                                        <td>07/03/2025</td>
                                        <td>
                                            A seminar was held on 7th March 2025 for B.Com students to raise awareness about
                                            sexual
                                            harassment. Dr. Pranita Choudhury and Ms. Kuntala Choudhury discussed legal
                                            aspects, reporting
                                            mechanisms, and preventive measures for ensuring campus safety.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Online Session – Empowering Women: Accelerating Leadership & Economic Inclusion
                                        </td>
                                        <td>07/03/2025</td>
                                        <td>
                                            In celebration of International Women’s Day 2025, Janitri and RGU organized an
                                            online session on
                                            7th March with expert talks, panel discussions, and lectures highlighting
                                            women's leadership and
                                            economic inclusion.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Seminar – Introduction to the Securities Market</td>
                                        <td>17/03/2025</td>
                                        <td>
                                            On 17th March 2025, a seminar was organized with Mr. Pratyush Bhaskar as keynote
                                            speaker. He
                                            explained the fundamentals of the securities market including stocks, bonds,
                                            SIPs, and market
                                            platforms like NSE and BSE.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Seminar – Awareness Programme on Commodity and Derivatives</td>
                                        <td>18/03/2025</td>
                                        <td>
                                            Mr. Ashutosh Vashisht from MCX delivered a seminar on commodity and derivatives
                                            markets on 18th
                                            March 2025. The session covered futures, options, portfolio diversification, and
                                            commodity market
                                            dynamics using practical examples.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Industrial Visit – GM Plastique</td>
                                        <td>09/04/2025</td>
                                        <td>
                                            On 9th April 2025, students of B.Com F&A visited GM Plastique at Brahmaputra
                                            Industrial Park. The
                                            visit provided hands-on learning about manufacturing, raw materials, and the
                                            company’s zero-waste
                                            practices.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Panel Discussion – Navigating Stock Market Volatility</td>
                                        <td>25/04/2025</td>
                                        <td>
                                            On 25th April 2025, a panel discussion co-organized with the Department of
                                            Economics featured Dr.
                                            Samir Baruah, Mr. Pranab Dutta, and Dr. Gautam Mazumdar. The discussion focused
                                            on stock market
                                            volatility post-COVID, policy implications, and investment strategies.
                                        </td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    <tr>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Sl No</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Position in S-BoS</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Name and Designation</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">1</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Chairperson (Ex-Officio)<br>Dean
                                            of School</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) George A.P,<br>Dean,
                                            RSC & RSB</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">2</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">All Heads of the Departments
                                            -<br>Member
                                            (Ex-Officio)</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Aruna Dev Rroy,<br>Associate
                                            Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">3</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Academic)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) Sanjib
                                            Raj,<br>Director, Assam
                                            Institute of Management</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">4</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Industry)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Mr. Subir Ghosh,<br>Owner,
                                            Annapurna Group</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">5</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Two Faculty members of the school
                                            nominated by the
                                            Vice Chancellor</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">
                                            Prof. (Dr.) Sudip Chakraborty,<br>Dy. Dean, RSC<br><br>
                                            Dr. Rajdeep Nag,<br>Assistant Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">6</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Registrar,<br>Member Secretary
                                            (Ex-officio)/
                                            Registrar nominee</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Diganta Munshi,<br>Registrar
                                            (Administration)
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                        </h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name of the Member</th>
                                        <th>Designation</th>
                                        <th>Designation in the Committee</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr Aruna Dev Rroy</td>
                                        <td>Associate Professor, HOD, RSC</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. (Dr) Sudip Chakraborty</td>
                                        <td>Professor, Dy. Dean, RSC</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr) George A.P.</td>
                                        <td>Professor, RSB<br>Dean, RSB & RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr Rajdeep Nag</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr Niva Kalita</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr) Kamal Debnath</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Prof. (Dr) Anuradha Devi</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Prof. (Dr) Soumitra Sen</td>
                                        <td>Professor, RSHM & RSTTM</td>
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Structure of Syllabus - B.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure  UG F and A.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Programme Structure for B. Com
                                                        Finance & Accounts based on NEP 2020
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/RSC_UG Syllabus 2023-24(NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS
                                                        (BASED ON NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/B.Com F&A Batch 2023 Syllabus based on NEP 1st to 8th sem.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>B.Com Finance & Accounts (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com CMA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - CMA
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com ACCA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - ACCA
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/1. RSC M.COM NEP 2025 SYLLABUS[1] (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Syllabus - M.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class="para1" target="_blank">
                                                    <strong>
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

        <div class="website">
            @include('frontend/components/aheader')
            <img class="pb-3"
                src="https://media.rgu.ac/department-all/dept-commerce/web-top.png"
                alt="">
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
                                    <strong style="color: #023e8a;" class="#">B.Com. (Day Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Morning Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-morning-shift"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - Finance with ICA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Com.</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MCom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

            <img class="pb-3"
                src="https://media.rgu.ac/department-all/dept-commerce/web-btm.png"
                alt="">


            <div class="container pb-5 pt-3">

                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th class="font-weight-bold text-white">S.No.</th>
                                        <th class="font-weight-bold text-white">DATE OF VISIT</th>
                                        <th class="font-weight-bold text-white">
                                            NAME OF THE GUEST SPEAKER
                                        </th>
                                        <th class="font-weight-bold text-white">DESIGNATION</th>
                                        <th class="font-weight-bold text-white">PURPOSE OF VISIT</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>3/8/2018</td>
                                        <td>Dr. Polly Vauquline</td>
                                        <td>Associate Professor, Gauhati University</td>
                                        <td>
                                            An Interactive Session on the occasion of International Womens's
                                            Day on the topic Social Status and Empowerment of Women in the
                                            Society
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>3/21/2018</td>
                                        <td>Roy Riddhinil</td>
                                        <td>Founder of Ne8x</td>
                                        <td>
                                            An Interactive Session on the topic 'Perspectives of
                                            Entrepreneurship in North-East India'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>8/13/2018</td>
                                        <td>Mr.Swapnanil Talukdar</td>
                                        <td>Social Engineer</td>
                                        <td>
                                            An Interactive Session on the topic 'Passion, Profession &amp;
                                            Problems'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>11/9/2018</td>
                                        <td>Mr. Hironmoy Gogoi</td>
                                        <td>Founder of 'Gaon Ka Khana'.</td>
                                        <td>
                                            An interactive session to discuss about his journey as an
                                            entrepreneur
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>12/10/2021</td>
                                        <td>Ms. Disha Sarkar</td>
                                        <td>
                                            Resource Expert, United Nations Resource Centre, NE India UNESCO
                                            Association, Guwahati.
                                        </td>
                                        <td>
                                            An interactive session on Ecopreneurship: Synergising Climate
                                            Action with Entrepreneurship
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>9/15/2022</td>
                                        <td>Dr.Samir Barua</td>
                                        <td></td>
                                        <td>
                                            An interactive session on TRANSFORMING JOB SEEKERS INTO JOB
                                            CREATORS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>11/17/2022</td>
                                        <td>Mr. Kaushik Khanikar</td>
                                        <td>
                                            Project Execution Officer NEEDP, Leads &amp; Projects
                                            Management, IIM Calcutta Innovation Park
                                        </td>
                                        <td>
                                            Interactive session on Entrepreneurship and Capacity Building.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>12/19/2022</td>
                                        <td>CS Swati Tejawat</td>
                                        <td>Practising Chartered Accountant</td>
                                        <td>Workshop on 'E-filing of Income Tax Return'</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>2/13/2023</td>
                                        <td>CA Anil Kumar Agarwala and Dr. Seema Sharma</td>
                                        <td>
                                            Dean, Faculty of Commerce and Management, Assam Down Town
                                            University
                                        </td>
                                        <td>
                                            An Interactive Panel Discussion on “UNION BUDGET 2023: PROSPECTS
                                            AND PERSPECTIVES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>28-02-2023 &amp;15 /03/2023</td>
                                        <td>Prachi Sharma</td>
                                        <td>Financial Adviser</td>
                                        <td>
                                            Interactive session on 'Fair Fortune' and Training workshop on
                                            interview skills, personal grooming and basic road behaviour
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>3/22/2023</td>
                                        <td>Prof. (Dr. ) C. Rajkumar</td>
                                        <td>Hon'ble Vice Chancellor, OP Jindal University</td>
                                        <td>Lecture session on Career Prospect in Higher Education</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>3/27/2023</td>
                                        <td>CS Tripti Bihani</td>
                                        <td>CS</td>
                                        <td>
                                            Interactive session on the topic "Significance of Intellectual
                                            Property Rights In Present Era"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>8/23/2023</td>
                                        <td>CS Harsh Baid.</td>
                                        <td>CS</td>
                                        <td>A workshop on "FINANCIAL LITERACY"</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>12/20/2023</td>
                                        <td>Dr. Sharan Kumar Shetty</td>
                                        <td>Certified Trainer CMA-USA and ACCA</td>
                                        <td>
                                            A Guest Talk on the topic 'Unleashing the Potential for Personal
                                            Finance '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>12/21/2023</td>
                                        <td>Ms Seema Sarma</td>
                                        <td>CS</td>
                                        <td>Workshop on E - Filing of Income Tax Return</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>3/15/2024</td>
                                        <td>CA Meghdoot A. Karnik</td>
                                        <td>
                                            Director of the School of Banking, Financial Services and
                                            Insurance (BSFI) at Symbiosis University of Applied Sciences,
                                            Indore
                                        </td>
                                        <td>Workshop on Financial Literacy and Stock Trading</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>3/23/2024</td>
                                        <td>Dr Sundaravardhan Venkatesh</td>
                                        <td>
                                            Dean, School of Management and Entrepreneurship, Shiv Nadar
                                            University, Delhi NCR
                                        </td>
                                        <td>
                                            Graced as a Resource Person in a faculty development programme
                                            on the topic 'Harnessing Research Skills for an Impactful
                                            Career'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>4/10/2024</td>
                                        <td>Dr Joyeeta Deb</td>
                                        <td>
                                            Associate Professor, Department of Business Administration,
                                            Assam University, Silchar
                                        </td>
                                        <td>
                                            Graced as a resource person in a talk on 'Fostering
                                            Entrepreneurship in North East India: Exploring Prospects and
                                            Challenges
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>3/27/2024</td>
                                        <td>Dr. Manu Melwin Joy</td>
                                        <td>Assistant Professor, School of Management Studies, CUSAT</td>
                                        <td>
                                            Done a Session on the topic 'Learning in the Vuca World through
                                            Gamification'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>5/24/2024</td>
                                        <td>Mr. Pawan Kumar Agarwalla</td>
                                        <td>CEO and Founder, Datamation Services, Guwahati</td>
                                        <td>
                                            An Interactive Session on 'From Vision to Victory: The Inspiring
                                            Story of Datamation's Rise to Prominence'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>8/8/2024</td>
                                        <td>CA Pankaj Jain</td>
                                        <td>CA</td>
                                        <td>
                                            A Guest Talk on the topic 'Google Tools and AI for Business
                                            Management'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>9/3/2024</td>
                                        <td>Prof Kalyan Adak</td>
                                        <td>
                                            Professor of Department of Commerce at Government Hrangbana
                                            College
                                        </td>
                                        <td>
                                            An Interactive Session on the topic Beginners Blueprint:
                                            Navigating the World of Entrepreneurship
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>9/12/2024</td>
                                        <td>CS Anshuman Baruah &amp; CS Manoj Rawniar</td>
                                        <td>CA &amp; CS</td>
                                        <td>
                                            A Career Awareness Program Career as a Company Secretary and
                                            Prospects of One Person Company and Small Company in the North-
                                            East Region
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>9/19/2024</td>
                                        <td>Dr Bhaskar Kumar Kakoty</td>
                                        <td>
                                            Consultant and Course Coordinator of Indian Institude of
                                            Entrepreneurship
                                        </td>
                                        <td>
                                            An Interactive Session on the topic Environmental Sustainability
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>9/23/2024</td>
                                        <td>N Alphaba Singh</td>
                                        <td>Yoga Therapist and Instructor</td>
                                        <td>
                                            An Interactive Session on the topic Yoga and Health in our Daily
                                            Life
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>9/23/2024</td>
                                        <td>CS Kushal Bagaria</td>
                                        <td>CS</td>
                                        <td>A Session on communication Skills</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>9/26/2024</td>
                                        <td>Ms. Jahnabi Goswami</td>
                                        <td>
                                            HIV Aids Activist and the President of Assam Network of Positive
                                            People
                                        </td>
                                        <td>
                                            An Interactive Session on the topic AIDS Awareness Program
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Activi<span style="color: #FF9A1E; font-weight: 500;">ties</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event Title</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Documentary Viewing – Revisiting The Life And Journey Of The Father Of Our
                                            Nation, Mahatma
                                            Gandhi</td>
                                        <td>01/10/2024</td>
                                        <td>
                                            On 1st October 2024, the Student Forum of Royal School of Commerce, The Assam
                                            Royal Global
                                            University, organized a documentary viewing titled “Revisiting the Life and
                                            Journey of the Father
                                            of Our Nation, Mahatma Gandhi.” This live viewing aimed to honour Gandhi’s
                                            legacy and educate
                                            students on his significant role in India’s freedom struggle, and his philosophy
                                            of non-violence
                                            and truth. The documentary explored Gandhi’s early life, education, return to
                                            India, his
                                            principles of Ahimsa (non-violence), and the lasting impact of his teachings. It
                                            featured
                                            historical footage, interviews, and dramatizations, allowing students to connect
                                            deeply with his
                                            life and struggles.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Internal Faculty Development Programme – “The New Normal Of Education:
                                            Depression, Anxiety, And
                                            Stress And Academic Performance Of Tertiary Students”</td>
                                        <td>15/10/2024</td>
                                        <td>
                                            On 15th October 2024, the Royal School of Commerce organized an Internal Faculty
                                            Development
                                            Programme on the topic “The New Normal of Education: Depression, Anxiety, and
                                            Stress and Academic
                                            Performance of Tertiary Students.” Dr. Prince C.P., Associate Professor from the
                                            Department of
                                            Psychology, Royal School of Behavioural and Allied Sciences, was the keynote
                                            speaker. He shared
                                            insights into how mental health issues—such as depression, anxiety, and
                                            stress—affect the academic
                                            performance of tertiary students in a post-pandemic educational landscape. The
                                            session emphasized
                                            mental well-being as critical to academic success and discussed effective
                                            teaching strategies to
                                            support students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>One-Day Student International Conference On "Innovating For A Circular Future:
                                            Strategies,
                                            Solutions And Sustainability"</td>
                                        <td>18/10/2024</td>
                                        <td>
                                            Royal School of Commerce organized a one-day Student International Conference on
                                            "Innovating for a
                                            Circular Future: Strategies, Solutions and Sustainability" to highlight the
                                            shift from traditional
                                            linear economic models to circular ones, with innovation as a key driver. The
                                            conference helped
                                            students explore strategies, solutions, and sustainable practices essential for
                                            fostering a
                                            circular economy. Multiple sub-themes ensured a comprehensive understanding of
                                            the topic. The
                                            event welcomed UG, PG, and research students from diverse disciplines to present
                                            their work. Dr.
                                            Anuj Kumar, Head of Research, Rushford Business School, Switzerland, delivered
                                            the keynote, and
                                            Mrs. Ranjana Bhajanka, Director, FINER, was the Guest of Honour. They were
                                            joined by Prof. (Dr.)
                                            George A.P., Dean, Royal School of Business and Commerce; Prof. (Dr.) Saket
                                            Jeswani, Dean,
                                            Consultancy, Patent, IPR and MDP; and Dr. Sudip Chakraborty, Deputy Dean, Royal
                                            School of
                                            Commerce.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Visit to the Directorate of Handloom and Handicrafts, Sikkim – Educational
                                            Excursion</td>
                                        <td>21/10/2024</td>
                                        <td>
                                            On 21st October 2024, students from the M.Com 3rd Semester of Royal School of
                                            Commerce visited the
                                            Directorate of Handloom and Handicrafts in Sikkim as part of their educational
                                            excursion. They
                                            observed the intricate process of weaving traditional handicrafts and gained
                                            firsthand knowledge
                                            of the skill and dedication involved. The visit also included discussions on the
                                            business aspects
                                            of the handloom sector, including its economic impact, market potential, and
                                            sustainable
                                            practices. This excursion provided students with both cultural appreciation and
                                            practical insights
                                            into the commercial dynamics of the handloom industry in Sikkim.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Special Talk Session Featuring Prof. Debabrata Mitra, Vice Chancellor of Dakshin
                                            Dinajpur
                                            University</td>
                                        <td>24/10/2024</td>
                                        <td>
                                            On October 24, 2024, a special talk session was held featuring Prof. Debabrata
                                            Mitra, Vice
                                            Chancellor of Dakshin Dinajpur University, West Bengal. Attended by faculty and
                                            M.Com 1st semester
                                            students of the Royal School of Commerce, the session focused on the
                                            intersection of teaching and
                                            administration. Prof. Mitra discussed the need for educators to balance
                                            administrative and
                                            academic responsibilities, emphasizing time management and work-life balance. He
                                            also offered
                                            detailed guidance on preparing for NAAC peer team visits, drawing from his
                                            experience as an
                                            evaluation team member. The interactive session encouraged students to think
                                            about future
                                            leadership roles and develop essential presentation skills. The session
                                            concluded with a strong
                                            focus on NAAC readiness, equipping attendees with actionable strategies for
                                            institutional
                                            evaluations.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Special Talk: "Balancing the Books: Managing Stress for Better Performance" by
                                            Prof. Debabrata
                                            Mitra</td>
                                        <td>25/10/2024</td>
                                        <td>
                                            On October 25, 2024, the Royal School of Commerce hosted a special talk titled
                                            "Balancing the
                                            Books: Managing Stress for Better Performance," led by Prof. Debabrata Mitra.
                                            Aimed at helping
                                            students cope with academic stress, the session featured interactive discussions
                                            where students
                                            shared their stress triggers. Prof. Mitra addressed common issues such as time
                                            constraints and
                                            pressure, offering practical strategies for effective time management and
                                            lifestyle improvement.
                                            He advocated for balanced routines including sleep, diet, and exercise. The
                                            relatable nature of
                                            the discussion and Prof. Mitra's actionable advice left a positive impact, with
                                            students
                                            expressing gratitude. The session concluded with an appreciation from the Head
                                            of Department,
                                            reinforcing a sense of support and community among participants.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Scholarly Works in Commerce</td>
                                        <td>28/10/2024</td>
                                        <td>
                                            Royal School of Commerce held an exhibition showcasing the scholarly works of
                                            its faculty and
                                            students on 28th October 2024. The event served as a platform for sharing
                                            academic research and
                                            innovative projects, encouraging knowledge exchange and scholarly excellence
                                            within the
                                            institution.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Career Counselling Session at Kendriya Vidyalaya, Tinsukia</td>
                                        <td>29/10/2024</td>
                                        <td>
                                            Mr. S. Goenka from Royal School of Commerce, Royal Global University, conducted
                                            a career
                                            counselling session at Kendriya Vidyalaya, Tinsukia on 29th October, 2024. The
                                            session aimed to
                                            guide students in choosing suitable career paths based on their interests and
                                            academic strengths.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Career Counselling Session at Gitanjali Senior Secondary School, Nagaon</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            Dr. Rajdeep Nag from Royal School of Commerce, Royal Global University,
                                            conducted a career
                                            counselling session at Gitanjali Senior Secondary School, Nagaon on 4th
                                            November, 2024. The
                                            session helped students understand various career options and the necessary
                                            academic planning to
                                            achieve their goals.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Career Counselling Session at Senairam HS School, Tinsukia</td>
                                        <td>04/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Mr. S. Goenka at Senairam HS
                                            School, Tinsukia, on
                                            4th November, 2024. The session offered guidance on future academic and
                                            professional prospects for
                                            the students and encouraged informed decision-making.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Guest Lecture on 'Exploring Career Opportunities in Finance and Accounting'</td>
                                        <td>18/11/2024</td>
                                        <td>
                                            A guest lecture titled 'Exploring Career Opportunities in Finance and
                                            Accounting' was delivered by
                                            CA Kamal Mour, Senior Partner and Branch In-charge of RKP Associates, for
                                            students of Royal School
                                            of Commerce on 18th November, 2024. The session highlighted diverse roles in
                                            finance and
                                            accounting and guided students on building successful careers in the field.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Industrial Visit to Sunrise Biscuit Company Pvt. Ltd.</td>
                                        <td>20/11/2024</td>
                                        <td>
                                            Students of B.Com Finance 1st semester of Royal School of Commerce visited
                                            Sunrise Biscuit Company
                                            Pvt. Ltd., a unit of Britannia located in Boragaon, Guwahati, on 20th November
                                            2024. The visit
                                            provided a practical understanding of manufacturing processes, safety measures,
                                            HR practices, and
                                            waste management. The interactive Q&A session with the HR team added value to
                                            their academic
                                            learning.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Interactive Session with ICA Edu Skills Pvt. Ltd.</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            An interactive session was conducted on 21st November 2024 with ICA Edu Skills
                                            Pvt. Ltd., Royal
                                            School of Commerce's industry partner. Presided over by Ms. Robina Sarkar,
                                            Placement Coordinator,
                                            the session addressed preparations for internships, employer expectations, and
                                            student concerns
                                            regarding the internship process, selection, and stipends. It was attended by
                                            B.Com F&A 1st and
                                            3rd semester students.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Student Speaker Series 2.0 – Abhijit Saikia</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On 21st November 2024, Royal School of Commerce hosted Student Speaker Series
                                            2.0 featuring
                                            Abhijit Saikia, an M.Com 3rd semester student, who spoke on "Impact of
                                            Globalization." He explored
                                            globalization's role in economic integration, cultural exchange, and
                                            technological advancement,
                                            while also addressing income inequality and environmental concerns. The talk
                                            concluded with an
                                            engaging Q&A session.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Student Speaker Series 2.0 – Montosh Chanda</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            On the same day, M.Com 3rd semester student Montosh Chanda delivered a talk
                                            titled "Breaking
                                            Barriers: How Business Can Achieve Sustainable and Inclusive Growth." He
                                            discussed growth
                                            strategies, risk management, and growth indicators. The session ended with an
                                            interactive Q&A,
                                            leaving students inspired.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Student Speaker Series 2.0 – Raja Swargiary and Rahul Dey</td>
                                        <td>22/11/2024</td>
                                        <td>
                                            On 22nd November 2024, the series featured M.Com 3rd semester students Raja
                                            Swargiary and Rahul
                                            Dey. Raja spoke on “Role of Strategists in Strategic Management and Its
                                            Principles of Good
                                            Strategy,” while Rahul explored “Strategic Business Analysis: Exploring SWOT and
                                            PESTEL
                                            Frameworks.” The session offered strategic insights relevant to modern business
                                            challenges.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Career Counselling Session at Dawson HSS, Nagaon</td>
                                        <td>21/11/2024</td>
                                        <td>
                                            A career counselling session was conducted by Dr. Rajdeep Nag, Assistant
                                            Professor, Royal School
                                            of Commerce, at Dawson HSS, Nagaon on 21st November 2024, offering students
                                            valuable guidance on
                                            career planning and higher education options.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Career Counselling Session at Green School International</td>
                                        <td>23/11/2024</td>
                                        <td>
                                            On 23rd November 2024, a career counselling session was conducted at Green
                                            School International by
                                            Prof. George Paul and Dr. Ranjan Dutta Kalita. The session helped senior
                                            students gain insights
                                            into academic pathways and future career prospects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Inauguration Ceremony of Royal School of Commerce - Student Forum</td>
                                        <td>03/12/2024</td>
                                        <td>
                                            The Inauguration Ceremony of the Royal School of Commerce – Student Forum
                                            (2024-25) was held on
                                            3rd December 2024, marking the beginning of student-led initiatives and
                                            collaborative academic and
                                            extracurricular activities for the academic year.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Research Project Viva – UG 5th Semester</td>
                                        <td>04/12/2024</td>
                                        <td>
                                            On 4th December 2024, the Research Project Viva for UG 5th-semester students was
                                            held as part of
                                            their practical examination. External examiners and alumni evaluated student
                                            presentations,
                                            enhancing academic rigor and offering constructive feedback.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Panel Discussion on the Union Budget 2025–2026</td>
                                        <td>07/02/2025</td>
                                        <td>
                                            A panel discussion on the Union Budget 2025–2026 was held on 7th February 2025,
                                            featuring CA
                                            Veekash Kumar Agarwal and CA (Dr.) Ayush Saraf, moderated by CA (Dr.) Swati
                                            Tejawat. Students
                                            engaged in dialogue on tax reforms, support for MSMEs, agriculture investments,
                                            and personal
                                            finance strategies, promoting financial literacy and policy awareness.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Industrial Visit – Sunrise Biscuit Company</td>
                                        <td>14/02/2025</td>
                                        <td>
                                            On 14th February 2025, Royal School of Commerce organized an industrial visit to
                                            Sunrise Biscuit
                                            Company to offer students firsthand exposure to advanced production, lean
                                            manufacturing, and
                                            quality control. The visit aimed to bridge classroom learning with practical
                                            applications in
                                            supply chain and product development.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Workshop on Digital Marketing</td>
                                        <td>17/02/2025</td>
                                        <td>
                                            A workshop on Digital Marketing was organized in collaboration with the Indian
                                            Institute of
                                            Entrepreneurship on 17th February 2025. The session covered traditional vs.
                                            digital marketing and
                                            introduced concepts like content marketing, email, SMS, and WhatsApp marketing
                                            for UG and PG
                                            students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Workshop on Marketing and Selling Strategies</td>
                                        <td>21/02/2025</td>
                                        <td>
                                            On 21st February 2025, Mr. Anuj Kr. Saikia, CEO of Arihant Enterprise, conducted
                                            a workshop
                                            focusing on marketing and selling mushrooms. The session explored marketing
                                            challenges and
                                            strategies specific to the North East, attended by B.Com 2nd semester students.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Quiz Competition – Entrepreneurship</td>
                                        <td>24/02/2025</td>
                                        <td>
                                            A quiz competition on entrepreneurship was conducted by the Student Forum of
                                            Royal School of
                                            Commerce on 24th February 2025. The quiz tested students' creativity, business
                                            acumen, and
                                            knowledge of startup strategies.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Outreach Program – Chakardeo ME School</td>
                                        <td>04/03/2025</td>
                                        <td>
                                            On 4th March 2025, students of B.Com 2nd semester organized an outreach program
                                            at Chakardeo Desh
                                            Bhakta Tarun Ram Phukan M.E. School. Volunteers donated sports and food items,
                                            interacted with
                                            students, and conducted a workshop on ‘Good Touch and Bad Touch.’
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Seminar on Understanding & Preventing Sexual Harassment</td>
                                        <td>07/03/2025</td>
                                        <td>
                                            A seminar was held on 7th March 2025 for B.Com students to raise awareness about
                                            sexual
                                            harassment. Dr. Pranita Choudhury and Ms. Kuntala Choudhury discussed legal
                                            aspects, reporting
                                            mechanisms, and preventive measures for ensuring campus safety.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Online Session – Empowering Women: Accelerating Leadership & Economic Inclusion
                                        </td>
                                        <td>07/03/2025</td>
                                        <td>
                                            In celebration of International Women’s Day 2025, Janitri and RGU organized an
                                            online session on
                                            7th March with expert talks, panel discussions, and lectures highlighting
                                            women's leadership and
                                            economic inclusion.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Seminar – Introduction to the Securities Market</td>
                                        <td>17/03/2025</td>
                                        <td>
                                            On 17th March 2025, a seminar was organized with Mr. Pratyush Bhaskar as keynote
                                            speaker. He
                                            explained the fundamentals of the securities market including stocks, bonds,
                                            SIPs, and market
                                            platforms like NSE and BSE.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Seminar – Awareness Programme on Commodity and Derivatives</td>
                                        <td>18/03/2025</td>
                                        <td>
                                            Mr. Ashutosh Vashisht from MCX delivered a seminar on commodity and derivatives
                                            markets on 18th
                                            March 2025. The session covered futures, options, portfolio diversification, and
                                            commodity market
                                            dynamics using practical examples.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Industrial Visit – GM Plastique</td>
                                        <td>09/04/2025</td>
                                        <td>
                                            On 9th April 2025, students of B.Com F&A visited GM Plastique at Brahmaputra
                                            Industrial Park. The
                                            visit provided hands-on learning about manufacturing, raw materials, and the
                                            company’s zero-waste
                                            practices.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Panel Discussion – Navigating Stock Market Volatility</td>
                                        <td>25/04/2025</td>
                                        <td>
                                            On 25th April 2025, a panel discussion co-organized with the Department of
                                            Economics featured Dr.
                                            Samir Baruah, Mr. Pranab Dutta, and Dr. Gautam Mazumdar. The discussion focused
                                            on stock market
                                            volatility post-COVID, policy implications, and investment strategies.
                                        </td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                    <tr>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Sl No</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Position in S-BoS</th>
                                        <th style="border: 1px solid #ccc; padding: 8px;">Name and Designation</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">1</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Chairperson (Ex-Officio)<br>Dean
                                            of School</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) George A.P,<br>Dean,
                                            RSC & RSB</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">2</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">All Heads of the Departments
                                            -<br>Member
                                            (Ex-Officio)</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Aruna Dev Rroy,<br>Associate
                                            Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">3</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Academic)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Prof. (Dr.) Sanjib
                                            Raj,<br>Director, Assam
                                            Institute of Management</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">4</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">External Experts for each
                                            Department (Industry)
                                        </td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Mr. Subir Ghosh,<br>Owner,
                                            Annapurna Group</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">5</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Two Faculty members of the school
                                            nominated by the
                                            Vice Chancellor</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">
                                            Prof. (Dr.) Sudip Chakraborty,<br>Dy. Dean, RSC<br><br>
                                            Dr. Rajdeep Nag,<br>Assistant Professor, RSC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid #ccc; padding: 8px;">6</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Registrar,<br>Member Secretary
                                            (Ex-officio)/
                                            Registrar nominee</td>
                                        <td style="border: 1px solid #ccc; padding: 8px;">Dr. Diganta Munshi,<br>Registrar
                                            (Administration)
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                        </h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name of the Member</th>
                                        <th>Designation</th>
                                        <th>Designation in the Committee</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr Aruna Dev Rroy</td>
                                        <td>Associate Professor, HOD, RSC</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. (Dr) Sudip Chakraborty</td>
                                        <td>Professor, Dy. Dean, RSC</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr) George A.P.</td>
                                        <td>Professor, RSB<br>Dean, RSB & RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr Rajdeep Nag</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr Niva Kalita</td>
                                        <td>Assistant Professor, RSC</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr) Kamal Debnath</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Prof. (Dr) Anuradha Devi</td>
                                        <td>Professor, RSAPS</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Prof. (Dr) Soumitra Sen</td>
                                        <td>Professor, RSHM & RSTTM</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>
                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion para1" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Structure of Syllabus - B.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure  UG F and A.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Programme Structure for B. Com
                                                        Finance & Accounts based on NEP 2020
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/RSC_UG Syllabus 2023-24(NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS
                                                        (BASED ON NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/B.Com F&A Batch 2023 Syllabus based on NEP 1st to 8th sem.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>B.Com Finance & Accounts (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com CMA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - CMA
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com ACCA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - ACCA
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/1. RSC M.COM NEP 2025 SYLLABUS[1] (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Syllabus - M.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class="para1" target="_blank">
                                                    <strong>
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

            <!-- End testimonials-->
        </div>
    </div>
@endsection

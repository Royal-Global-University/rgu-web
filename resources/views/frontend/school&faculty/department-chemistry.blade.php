@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-chemistry/s2-bg-img-1.webp);">
        <div class="mobile" >
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-chemistry/mobile-chemistry.png" alt="">


            <div class="container pb-5">

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name Designation</th>
                                    <th class="font-weight-bold text-white">Date</th>
                                    <th class="font-weight-bold text-white">Purpose of visit</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Mr. Mayur Bora, Writer and Motivational Speaker</td>
                                        <td>26-7-2018</td>
                                        <td>Motivational Talk</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            "Dr. Ved Prakash, Former Chairman, UGC, Government Of India Dr.
                                            Arup Kumar Misra, Director, ASTEC Dr. T. Ramasami, Former
                                            Secretary, DST, Government Of India Dr. T. R. Seshadri,
                                            Professor, Delhi University Dr. S. K. Dube, Former Director, IIT
                                            Kharagpur Prof. P. K. Iyer, Professor, IIT Guwahati Dr.
                                            N.C.Talukdar, Director, IASST Dr. Pradyut Kumar Goswami, Vice
                                            Chancellor of USTM."
                                        </td>
                                        <td>"15th &amp; 16-11- 2018"</td>
                                        <td>"“Science Conclave” 2018"</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. T. R. Sesashadri, Delhi University.</td>
                                        <td>20thNovember, 2018</td>
                                        <td>Student Interactive Session</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Prof. Amarjyoti Choudhury, V.C., Assam Downtown University &amp;
                                            Former V.C.,Tezpur University.
                                        </td>
                                        <td>28-2-2019</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            "Prof. Shreemayee Bora, Department of Mathematics, IIT Guwahati
                                            and Prof. Latha Rangan, FNASc, Professor &amp; Head, Department
                                            Of Biosciences and Bioengineering, IIT Guwahati."
                                        </td>
                                        <td>28-2-2020</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            Ms. Priyanka Das Rajkakati, Indian Women Scientist staying in
                                            France.
                                        </td>
                                        <td>13-3-2020</td>
                                        <td>Interactive Session With students</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            Dr. Arabinda Baruah, Assistant Professor of Department of
                                            Chemistry, Gauhati University,
                                        </td>
                                        <td>17-4-2020</td>
                                        <td>"Webinar on Lab on a Chip: The Future of Chemistry"</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            Mr. Dhrubajyoti Thakuria of Business Executive, Glaxo smithkline
                                            Biologicals, Guwahati
                                        </td>
                                        <td>10-6-2020</td>
                                        <td>Webinar on Covid 19: A Ray of Hope in the Disaster</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            Dr. Bhaskar Jyoti Deka, Assistant Professor, Department of
                                            Hydrology, IIT Roorkee
                                        </td>
                                        <td>12-6-2020</td>
                                        <td>
                                            "Webinar on Safe and Sustainable Drinking Water Production by
                                            Membrane Distillation"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            Dr. Monolekha Bhattacharya, Product Lead, Serotonin Labs Private
                                            Limited, Bangalore, India
                                        </td>
                                        <td>18-6-2020</td>
                                        <td>Webinar on Health Outcomes in Digital Era</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            "Dr. Arjun Sengupta, Research Associate, Department of Systems,
                                            Pharmacology and Translational Therapeutics, University of
                                            Pennsylvania"
                                        </td>
                                        <td>24-6-2020</td>
                                        <td>Webinar on Interplay of Sleep and Metabolism</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            Dr. Pankaj Das, Professor, Department of Chemistry, Dibrugarh
                                            University
                                        </td>
                                        <td>20-7-2020</td>
                                        <td>"Webinar on Avoiding Plagiarism in Academic Writing"</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            Dr. Debajyoti Mahanta, Assistant Professor, Department of
                                            Chemistry, Gauhati University,
                                        </td>
                                        <td>30-7-2020</td>
                                        <td>
                                            "Webinar on How to start scientific research with limited
                                            resources"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            Prof. (Dr.) Devdutt Chaturvedi, Head, Department Of Chemistry,
                                            School of Physical Sciences, Mahatma Gandhi Central University,
                                            Motihari
                                        </td>
                                        <td>25-11-2020</td>
                                        <td>
                                            "Webinar on Versatility Of Carbon Disulfide: Greener Synthesis
                                            for Biologically potent scaffolds"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>
                                            "Dr. Hemchandra Keshav Chaudhari, Assistant Professor,
                                            Department of Pharmaceutical Sciences and Technology, Institute
                                            of Chemical Technology, Mumbai,"
                                        </td>
                                        <td>10-2-2021</td>
                                        <td>
                                            Webinar on Topic of webinar was, Computer in Drug Discovery.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>
                                            "Dr. Annamma Anil Odaneth, Associate Professor Center of Energy
                                            Biosciences Institute of Chemical Technology (ICT), Mumbai"
                                        </td>
                                        <td>17-2-2021</td>
                                        <td>Webinar on Biofuel Production from Waste Resources.</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>
                                            "Prof. Raja Shunmugam, Professor, Department of Chemical
                                            Sciences, IISER, Kolkata, West Bengal"
                                        </td>
                                        <td>29-5-2021</td>
                                        <td>
                                            "Webinar on Amphiphilic Functional Polymers: Promising Nano-
                                            materials for Drug- Delivery and Sensor Application"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>
                                            Dr. P.M More, Assistant Professor, Department of Chemistry,
                                            Institute of Chemical Technology (ICT), Mumbai
                                        </td>
                                        <td>4-6-2021</td>
                                        <td>
                                            "Webinar on Sustainable catalysis for mitigation of pollutants
                                            emission from vehicle and industrial exhaust"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>
                                            Dr. Bipul Sarma, Assistant Professor, Department of Chemical
                                            Sciences, Tezpur University, Tezpur,
                                        </td>
                                        <td>30-10-2021</td>
                                        <td>
                                            "Webinar on Engineering Hybrid Medicines: A Solid States
                                            Approach”;"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Prof. Vinod Kumar Tiwari, Banaras Hindu University</td>
                                        <td>28-3-2022</td>
                                        <td>Invited Lecture on “Synthetic Chemist and Our Society"</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>
                                            Dr. Swapnali Hazarika, Principal Scientist and Associate
                                            Professor, CSIR(NEIST), Jorhat, Assam.
                                        </td>
                                        <td>3-6-2022</td>
                                        <td>
                                            "Webinar on Membrane Chemistry: Prospects of Interdisciplinary
                                            Research"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Prof. Kochi Ismail (Rtd.), North Eastern Hill University</td>
                                        <td>21-10-2022</td>
                                        <td>Scientific program</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>
                                            "Professors - Raja Shunmugam, Suman De Sarkar, Dibyendu Das,
                                            Sayan Bhattacharya, Amlan K. Roy, Biplab Maji, Alakesh Bisai,
                                            Supratim Banerjee, Suresh K. Devarajulu, Arindam Mukherjee, and
                                            Debabrata Mukherjee from IISER Kolkata."
                                        </td>
                                        <td>11-4-2023</td>
                                        <td>
                                            "Lecture Series titled ""Research Methodologies &amp; Future
                                            Scopes of Research on Emerging Technologies """
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>
                                            "Dr. Sasanka Deka, Associate Professor, Department of Chemistry,
                                            University of Delhi; Prof. B. M. Bhanage, HOD, Department of
                                            Chemistry, Institute of Chemical Technology Mumbai and Dr.
                                            Krishna Kumar of BHU"
                                        </td>
                                        <td>17-18th May 2023</td>
                                        <td>
                                            "‘Distinguished Lecture Series’ on ‘Future of Catalysis and
                                            Industrial Sustainability’"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            Dr. Pradyumna Goswami, Assistant Prof. in Chemistry, Govt.
                                            Ayurvedic College, Guwahati.
                                        </td>
                                        <td>15-9-2023</td>
                                        <td>
                                            "Invited talk on “Chemistry and Healthcare: Advances in
                                            Pharmaceuticals, Medical Treatments, and Career Opportunities”."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            "Prof. (Dr.) Partha Basu Professor and Chair of ‘Department of
                                            Chemistry and Chemical Biology’, Indiana University
                                            Indianapolis, USA."
                                        </td>
                                        <td>12-10-2023</td>
                                        <td>
                                            "Invited talk on “Careers in Chemistry/STEM : Your Future with
                                            Indiana University Indianapolis, USA”"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>
                                            "Prof. (Dr.) Sourav Pal, HOD, Department of Chemistry, Ashoka
                                            University Prof. (Dr.) T. Punniyamurthy, Department of
                                            Chemistry, IIT Guwahati, Prof. (Dr.) Utpal Bora, IIT Guwahati,
                                            Prof. (Dr.) Mahesh D. Burande, Director, IPER, Pune Prof. Md.
                                            Abdur Rashid, University of Dhaka, Dr. P. M. More, ICT Mumbai"
                                        </td>
                                        <td>8-11th November 2023</td>
                                        <td>
                                            3 days International conference on "Interface of Chemistry,
                                            Material Chemistry and Pharmaceutical Sciences" jointly
                                            organised by the Dept of Chemistry &amp; School of Pharmacy of
                                            RGU with Dept of Chemistry of Cotton university
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>
                                            "Dr. Bula Choudhury, Senior Scientist, Guwahati, Biotech Park
                                            Dr. Rajiv Chowk Dev Goswami, Research Associate, Guwahati
                                            Biotech Park."
                                        </td>
                                        <td>28-2-2024</td>
                                        <td>National Science Day</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            Dr. Kuladip Sarma, Chief Chemist, Centre of Excellence for
                                            Energy Studies, Oil India Limited,
                                        </td>
                                        <td>14-5-2024</td>
                                        <td>
                                            "An invited talk on topic “Exploring The Dynamic Landscape of
                                            Careers In The Energy Sector In India"""
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>
                                            Dr. Kusum K. Bania, Professor, Department of Chemical Sciences ,
                                            Tezpur University
                                        </td>
                                        <td>28-8-2024</td>
                                        <td>
                                            "Invited talk on ""Looking Towards Our Future Through the Lenses
                                            of Chemistry"""
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Click More</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center align-middle mb-5" style="
                        border-collapse: collapse;
                        width: 100%;
                        font-family: Arial, sans-serif;
                      ">
                                <thead style="background-color: #27467a; color: white; font-size: 1.1rem">
                                    <tr>
                                        <th style="padding: 10px">S.NO.</th>
                                        <th style="padding: 10px">POSITION IN D-BOS</th>
                                        <th style="padding: 10px">NAME AND DESIGNATION</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="padding: 10px">1</td>
                                        <td style="padding: 10px">
                                            Convener (Ex-Officio) - Head of the Department
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Pubalee Sarmah, Associate Professor & HOD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" style="padding: 10px; vertical-align: middle">
                                            2
                                        </td>
                                        <td rowspan="5" style="padding: 10px; vertical-align: middle">
                                            All Faculty Members of the Department (Ex-Officio)
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Biswajit Sarma, Associate Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Anup Malakar, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Debojeet Sahu, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Binoyargha Dam, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Ms. Sudhamoyee Kataky, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">3</td>
                                        <td style="padding: 10px">External Expert (Academic)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Joyanti Chutia, Emeritus Scientist, IASST, Former
                                            Director, IASST
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">4</td>
                                        <td style="padding: 10px">External Expert (Industry)</td>
                                        <td style="padding: 10px">
                                            Dr. Pranjal Saikia, Associate Professor, Department of Applied
                                            Sciences (Chemical Science Division), GUIST, Gauhati University
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">S.NO.</th>
                                    <th class="text-white">CONTENT</th>
                                    <th class="text-white">NAME OF THE MEMBER</th>
                                    <th class="text-white">DESIGNATION</th>
                                    <th class="text-white">DESIGNATION IN THE COMMITTEE</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department</td>
                                        <td>Dr. Pubalee Sarmah</td>
                                        <td>Associate Professor &amp;HoD, Chemistry</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Biswajit Sarma</td>
                                        <td>Associate Professor</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Debojeet Sahu</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Binoyargha Dam</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">5.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Anuradha Devi</td>
                                        <td>Professor, Mathematics</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Ankur Ganguly</td>
                                        <td>Professor, RSET and Dean Academics</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Bipul Nath</td>
                                        <td>Professor, Pharmacy</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 B.Sc in Chemistry.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>AY 2022-2023 B.Sc in
                                                        Chemistry.pdf<i class="px-2 fa fa-download"></i>
                                                    </a>

                                                    <a href="assets/Departmentalpdf/AY 2023-2024 B.Sc in Chemistry.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>AY 2023-2024 B.Sc in
                                                        Chemistry.pdf<i class="px-2 fa fa-download"></i>
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
                                                <a href="assets/Departmentalpdf/Old Syllabus M.Sc. in Chemistry.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>Old Syllabus M.Sc. in
                                                    Chemistry.pdf<i class="px-2 fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong><a href="doctoral-programme.html">
                                                        Click to View...</a></strong>
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
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <img class="pb-4" src="mobile-assets/dept-chemistry/chemistry-web.png" alt="">
            <!--About Section-->

            <div class="container pb-5">

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
                        <div>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name Designation</th>
                                    <th class="font-weight-bold text-white">Date</th>
                                    <th class="font-weight-bold text-white">Purpose of visit</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Mr. Mayur Bora, Writer and Motivational Speaker</td>
                                        <td>26-7-2018</td>
                                        <td>Motivational Talk</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            "Dr. Ved Prakash, Former Chairman, UGC, Government Of India Dr.
                                            Arup Kumar Misra, Director, ASTEC Dr. T. Ramasami, Former
                                            Secretary, DST, Government Of India Dr. T. R. Seshadri,
                                            Professor, Delhi University Dr. S. K. Dube, Former Director, IIT
                                            Kharagpur Prof. P. K. Iyer, Professor, IIT Guwahati Dr.
                                            N.C.Talukdar, Director, IASST Dr. Pradyut Kumar Goswami, Vice
                                            Chancellor of USTM."
                                        </td>
                                        <td>"15th &amp; 16-11- 2018"</td>
                                        <td>"“Science Conclave” 2018"</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. T. R. Sesashadri, Delhi University.</td>
                                        <td>20thNovember, 2018</td>
                                        <td>Student Interactive Session</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Prof. Amarjyoti Choudhury, V.C., Assam Downtown University &amp;
                                            Former V.C.,Tezpur University.
                                        </td>
                                        <td>28-2-2019</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            "Prof. Shreemayee Bora, Department of Mathematics, IIT Guwahati
                                            and Prof. Latha Rangan, FNASc, Professor &amp; Head, Department
                                            Of Biosciences and Bioengineering, IIT Guwahati."
                                        </td>
                                        <td>28-2-2020</td>
                                        <td>National Science Day Celebration</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            Ms. Priyanka Das Rajkakati, Indian Women Scientist staying in
                                            France.
                                        </td>
                                        <td>13-3-2020</td>
                                        <td>Interactive Session With students</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            Dr. Arabinda Baruah, Assistant Professor of Department of
                                            Chemistry, Gauhati University,
                                        </td>
                                        <td>17-4-2020</td>
                                        <td>"Webinar on Lab on a Chip: The Future of Chemistry"</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            Mr. Dhrubajyoti Thakuria of Business Executive, Glaxo smithkline
                                            Biologicals, Guwahati
                                        </td>
                                        <td>10-6-2020</td>
                                        <td>Webinar on Covid 19: A Ray of Hope in the Disaster</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            Dr. Bhaskar Jyoti Deka, Assistant Professor, Department of
                                            Hydrology, IIT Roorkee
                                        </td>
                                        <td>12-6-2020</td>
                                        <td>
                                            "Webinar on Safe and Sustainable Drinking Water Production by
                                            Membrane Distillation"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            Dr. Monolekha Bhattacharya, Product Lead, Serotonin Labs Private
                                            Limited, Bangalore, India
                                        </td>
                                        <td>18-6-2020</td>
                                        <td>Webinar on Health Outcomes in Digital Era</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            "Dr. Arjun Sengupta, Research Associate, Department of Systems,
                                            Pharmacology and Translational Therapeutics, University of
                                            Pennsylvania"
                                        </td>
                                        <td>24-6-2020</td>
                                        <td>Webinar on Interplay of Sleep and Metabolism</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            Dr. Pankaj Das, Professor, Department of Chemistry, Dibrugarh
                                            University
                                        </td>
                                        <td>20-7-2020</td>
                                        <td>"Webinar on Avoiding Plagiarism in Academic Writing"</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            Dr. Debajyoti Mahanta, Assistant Professor, Department of
                                            Chemistry, Gauhati University,
                                        </td>
                                        <td>30-7-2020</td>
                                        <td>
                                            "Webinar on How to start scientific research with limited
                                            resources"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            Prof. (Dr.) Devdutt Chaturvedi, Head, Department Of Chemistry,
                                            School of Physical Sciences, Mahatma Gandhi Central University,
                                            Motihari
                                        </td>
                                        <td>25-11-2020</td>
                                        <td>
                                            "Webinar on Versatility Of Carbon Disulfide: Greener Synthesis
                                            for Biologically potent scaffolds"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>
                                            "Dr. Hemchandra Keshav Chaudhari, Assistant Professor,
                                            Department of Pharmaceutical Sciences and Technology, Institute
                                            of Chemical Technology, Mumbai,"
                                        </td>
                                        <td>10-2-2021</td>
                                        <td>
                                            Webinar on Topic of webinar was, Computer in Drug Discovery.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>
                                            "Dr. Annamma Anil Odaneth, Associate Professor Center of Energy
                                            Biosciences Institute of Chemical Technology (ICT), Mumbai"
                                        </td>
                                        <td>17-2-2021</td>
                                        <td>Webinar on Biofuel Production from Waste Resources.</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>
                                            "Prof. Raja Shunmugam, Professor, Department of Chemical
                                            Sciences, IISER, Kolkata, West Bengal"
                                        </td>
                                        <td>29-5-2021</td>
                                        <td>
                                            "Webinar on Amphiphilic Functional Polymers: Promising Nano-
                                            materials for Drug- Delivery and Sensor Application"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>
                                            Dr. P.M More, Assistant Professor, Department of Chemistry,
                                            Institute of Chemical Technology (ICT), Mumbai
                                        </td>
                                        <td>4-6-2021</td>
                                        <td>
                                            "Webinar on Sustainable catalysis for mitigation of pollutants
                                            emission from vehicle and industrial exhaust"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>
                                            Dr. Bipul Sarma, Assistant Professor, Department of Chemical
                                            Sciences, Tezpur University, Tezpur,
                                        </td>
                                        <td>30-10-2021</td>
                                        <td>
                                            "Webinar on Engineering Hybrid Medicines: A Solid States
                                            Approach”;"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Prof. Vinod Kumar Tiwari, Banaras Hindu University</td>
                                        <td>28-3-2022</td>
                                        <td>Invited Lecture on “Synthetic Chemist and Our Society"</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>
                                            Dr. Swapnali Hazarika, Principal Scientist and Associate
                                            Professor, CSIR(NEIST), Jorhat, Assam.
                                        </td>
                                        <td>3-6-2022</td>
                                        <td>
                                            "Webinar on Membrane Chemistry: Prospects of Interdisciplinary
                                            Research"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Prof. Kochi Ismail (Rtd.), North Eastern Hill University</td>
                                        <td>21-10-2022</td>
                                        <td>Scientific program</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>
                                            "Professors - Raja Shunmugam, Suman De Sarkar, Dibyendu Das,
                                            Sayan Bhattacharya, Amlan K. Roy, Biplab Maji, Alakesh Bisai,
                                            Supratim Banerjee, Suresh K. Devarajulu, Arindam Mukherjee, and
                                            Debabrata Mukherjee from IISER Kolkata."
                                        </td>
                                        <td>11-4-2023</td>
                                        <td>
                                            "Lecture Series titled ""Research Methodologies &amp; Future
                                            Scopes of Research on Emerging Technologies """
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>
                                            "Dr. Sasanka Deka, Associate Professor, Department of Chemistry,
                                            University of Delhi; Prof. B. M. Bhanage, HOD, Department of
                                            Chemistry, Institute of Chemical Technology Mumbai and Dr.
                                            Krishna Kumar of BHU"
                                        </td>
                                        <td>17-18th May 2023</td>
                                        <td>
                                            "‘Distinguished Lecture Series’ on ‘Future of Catalysis and
                                            Industrial Sustainability’"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            Dr. Pradyumna Goswami, Assistant Prof. in Chemistry, Govt.
                                            Ayurvedic College, Guwahati.
                                        </td>
                                        <td>15-9-2023</td>
                                        <td>
                                            "Invited talk on “Chemistry and Healthcare: Advances in
                                            Pharmaceuticals, Medical Treatments, and Career Opportunities”."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            "Prof. (Dr.) Partha Basu Professor and Chair of ‘Department of
                                            Chemistry and Chemical Biology’, Indiana University
                                            Indianapolis, USA."
                                        </td>
                                        <td>12-10-2023</td>
                                        <td>
                                            "Invited talk on “Careers in Chemistry/STEM : Your Future with
                                            Indiana University Indianapolis, USA”"
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>
                                            "Prof. (Dr.) Sourav Pal, HOD, Department of Chemistry, Ashoka
                                            University Prof. (Dr.) T. Punniyamurthy, Department of
                                            Chemistry, IIT Guwahati, Prof. (Dr.) Utpal Bora, IIT Guwahati,
                                            Prof. (Dr.) Mahesh D. Burande, Director, IPER, Pune Prof. Md.
                                            Abdur Rashid, University of Dhaka, Dr. P. M. More, ICT Mumbai"
                                        </td>
                                        <td>8-11th November 2023</td>
                                        <td>
                                            3 days International conference on "Interface of Chemistry,
                                            Material Chemistry and Pharmaceutical Sciences" jointly
                                            organised by the Dept of Chemistry &amp; School of Pharmacy of
                                            RGU with Dept of Chemistry of Cotton university
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>
                                            "Dr. Bula Choudhury, Senior Scientist, Guwahati, Biotech Park
                                            Dr. Rajiv Chowk Dev Goswami, Research Associate, Guwahati
                                            Biotech Park."
                                        </td>
                                        <td>28-2-2024</td>
                                        <td>National Science Day</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            Dr. Kuladip Sarma, Chief Chemist, Centre of Excellence for
                                            Energy Studies, Oil India Limited,
                                        </td>
                                        <td>14-5-2024</td>
                                        <td>
                                            "An invited talk on topic “Exploring The Dynamic Landscape of
                                            Careers In The Energy Sector In India"""
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>
                                            Dr. Kusum K. Bania, Professor, Department of Chemical Sciences ,
                                            Tezpur University
                                        </td>
                                        <td>28-8-2024</td>
                                        <td>
                                            "Invited talk on ""Looking Towards Our Future Through the Lenses
                                            of Chemistry"""
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Click More</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
                        <div>
                            <table class="table table-bordered text-center align-middle mb-5" style="
                  border-collapse: collapse;
                  width: 100%;
                  font-family: Arial, sans-serif;
                ">
                                <thead style="background-color: #27467a; color: white; font-size: 1.1rem">
                                    <tr>
                                        <th style="padding: 10px">S.NO.</th>
                                        <th style="padding: 10px">POSITION IN D-BOS</th>
                                        <th style="padding: 10px">NAME AND DESIGNATION</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td style="padding: 10px">1</td>
                                        <td style="padding: 10px">
                                            Convener (Ex-Officio) - Head of the Department
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Pubalee Sarmah, Associate Professor & HOD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" style="padding: 10px; vertical-align: middle">
                                            2
                                        </td>
                                        <td rowspan="5" style="padding: 10px; vertical-align: middle">
                                            All Faculty Members of the Department (Ex-Officio)
                                        </td>
                                        <td style="padding: 10px">
                                            Dr. Biswajit Sarma, Associate Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Anup Malakar, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Debojeet Sahu, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Dr. Binoyargha Dam, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">
                                            Ms. Sudhamoyee Kataky, Assistant Professor
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">3</td>
                                        <td style="padding: 10px">External Expert (Academic)</td>
                                        <td style="padding: 10px">
                                            Prof. (Dr.) Joyanti Chutia, Emeritus Scientist, IASST, Former
                                            Director, IASST
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">4</td>
                                        <td style="padding: 10px">External Expert (Industry)</td>
                                        <td style="padding: 10px">
                                            Dr. Pranjal Saikia, Associate Professor, Department of Applied
                                            Sciences (Chemical Science Division), GUIST, Gauhati University
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
                        <div>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">S.NO.</th>
                                    <th class="text-white">CONTENT</th>
                                    <th class="text-white">NAME OF THE MEMBER</th>
                                    <th class="text-white">DESIGNATION</th>
                                    <th class="text-white">DESIGNATION IN THE COMMITTEE</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department</td>
                                        <td>Dr. Pubalee Sarmah</td>
                                        <td>Associate Professor &amp;HoD, Chemistry</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr. Biswajit Sarma</td>
                                        <td>Associate Professor</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Debojeet Sahu</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Binoyargha Dam</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">5.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Anuradha Devi</td>
                                        <td>Professor, Mathematics</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Ankur Ganguly</td>
                                        <td>Professor, RSET and Dean Academics</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Bipul Nath</td>
                                        <td>Professor, Pharmacy</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-2023 B.Sc in Chemistry.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>AY 2022-2023 B.Sc in
                                                        Chemistry.pdf<i class="px-2 fa fa-download"></i>
                                                    </a>

                                                    <a href="assets/Departmentalpdf/AY 2023-2024 B.Sc in Chemistry.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>AY 2023-2024 B.Sc in
                                                        Chemistry.pdf<i class="px-2 fa fa-download"></i>
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
                                                <a href="assets/Departmentalpdf/Old Syllabus M.Sc. in Chemistry.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>Old Syllabus M.Sc. in
                                                    Chemistry.pdf<i class="px-2 fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong><a href="doctoral-programme.html">
                                                        Click to View...</a></strong>
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

            <!--End Section-->

        </div>
    </div>
@endsection

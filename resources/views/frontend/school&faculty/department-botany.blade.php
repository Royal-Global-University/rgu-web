@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
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
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-botany/mobile-top.png" alt="">

            <div class="container">
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">

                            <tr class="align-middle">

                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. Botany</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-botany"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Botany</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Botany"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-botany/mob-btm.png" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
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
            <img src="https://media.rgu.ac/department-all/dept-botany/web-top.png" alt="">

            <div class="container">

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">

                            <tr class="align-middle">

                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. Botany</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-botany"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Botany</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-Botany"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-botany/web-btm.png" alt="">
        </div>

        <div class="container pb-5 pt-3">
            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">Date</th>
                                    <th class="font-weight-bold text-white">
                                        Guest/ Invited speaker
                                    </th>
                                    <th class="font-weight-bold text-white">
                                        Designation and affiliation
                                    </th>
                                    <th class="font-weight-bold text-white">Topic</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>4.10.2024</td>
                                    <td>Dr. Bipin Pandey</td>
                                    <td>
                                        "Assistant Professor, Plant Science Department, University
                                        of Nottingham, UK"
                                    </td>
                                    <td>
                                        Understanding how plant roots sense and respond to soil
                                        compaction.
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.09.2024</td>
                                    <td>Ms. Plabita Gogoi</td>
                                    <td>Artist and Designer</td>
                                    <td>Upcycling of textiles</td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Prof. Sudhir K. Sopory,</td>
                                    <td>
                                        Padma Shree , Former Vice Chancellor, JNU, New Delhi
                                    </td>
                                    <td>
                                        Chief Guest, 1st Asia- Pacific Congress on Alternate Crops
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Prof. Chittaranjan Kole</td>
                                    <td>
                                        Ex-Director of Research, Institute of Nutraceutical
                                        Research, Clemson University, USA
                                    </td>
                                    <td>
                                        Genetic Enhancement in Alternative Crops for Health and
                                        Nutrition Security
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Dr. C. Tara Satyavarthi</td>
                                    <td>
                                        "Director, ICAR-National Millets Research Institute,
                                        Hyderabad"
                                    </td>
                                    <td>
                                        "Millets for Food &amp; Nutritional Security in Asian
                                        &amp; African Continents"
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Dr. Jawahir Lal Karihaloo,</td>
                                    <td>
                                        "Former Coordinator, Asia Pacific Consortium on
                                        Agricultural Biotechnology. New Delhi, India"
                                    </td>
                                    <td>
                                        "Opportunities and challenges in inventorising diversity
                                        in alternate crops- a case study of Solanums in India"
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Prof. Manoj Prasad,</td>
                                    <td>
                                        Delhi University, Delhi &amp; AdjunctProfessor, University
                                        of Hyderabad, India
                                    </td>
                                    <td>
                                        ": Understanding the role of HDA9-HDA19- HAT3 repressor
                                        complex during dehydration stress in foxtail millet: A
                                        step towards enhancing climate resilience"
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.09.2024</td>
                                    <td>Prof. S. K. Barik,</td>
                                    <td>NorthEasternHill University, Shillong</td>
                                    <td>
                                        "Improving the underutilized plant Cannabis, for medicinal
                                        use"
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>Prof. Kadambot Siddique,</td>
                                    <td>
                                        Hackett Professor of Agriculture Chair and Director, UWA
                                        Institute of Agriculture, University of Western Australia,
                                        Perth, Australia
                                    </td>
                                    <td>
                                        Crop diversification increases food production while
                                        reducing environmental footprint.
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>Prof. Manoj K. Dhar</td>
                                    <td>Director, CSIR- AcCSIR, New Delhi</td>
                                    <td>
                                        "Demystifying Saffron: origin, genomics and biotechnology"
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>Prof. Rakhi Chaturvedi,</td>
                                    <td>IIT, Guwahati</td>
                                    <td>
                                        Cellular totipotency favouring large scale sustainable
                                        plant propagation
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>"Prof. Bidyut Sharma, lecture:"</td>
                                    <td>
                                        "Director, DBT-North East Centre for Agricultural
                                        Biotechnology, AAU, Jorhat"
                                    </td>
                                    <td>
                                        Genome engineering for the improvement and management of
                                        crops: initiative at AAU, Jorhat
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>Dr. Blanka Vombergar,</td>
                                    <td>Educational centre Piramida, Maribor, Slovenia</td>
                                    <td>
                                        New Buckwheat products as interesting healthy choices in
                                        the diet
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.09.2024</td>
                                    <td>Sh. B. K. Sohliya,</td>
                                    <td>
                                        Chairman, Meghalaya Farmers (empowerment) Commission
                                    </td>
                                    <td>
                                        "Buckwheat Cultivation in Meghalaya: Interventions,
                                        Opportunities, Challenges and way forward for farmers"
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Speaker: Prof. Umesh Reddy,</td>
                                    <td>West VirginiaState University, USA</td>
                                    <td>
                                        "Evolution of sweet watermelon: Lessons learnt from the
                                        resequencing the core"
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Dr. Tatsuro Suzuki,</td>
                                    <td>NARO, Tsukuba, Japan</td>
                                    <td>
                                        "Buckwheat breeding in Kyushu Okinawa Agricultural
                                        Research Center, Naro, Japan"
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Prof. Wricha Tyagi,</td>
                                    <td>
                                        International Crops Research Inst. for Semi Arid Tropics,
                                        Hyderabad
                                    </td>
                                    <td>
                                        Multi-omics approach to understand grain quality in pearl
                                        millet
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Prof. S. R. Joshi,</td>
                                    <td>North Eastern Hill University, Shillong</td>
                                    <td>
                                        "Wild macrofungi of Northeast: a forest wealth waiting to
                                        be explored"
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Dr. M. Muthumaralisaran,</td>
                                    <td>University of Hyderabad, India</td>
                                    <td>
                                        Development of genomic resources in foxtail millet and
                                        kodo millet for trait improvement
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Dr. Bal Krishna Joshi,</td>
                                    <td>"Chief Scientist, NAGRC, NARC, Kathmandu"</td>
                                    <td>
                                        Alternate crops for food, nutrition, health, business and
                                        environment security in Nepal
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Prof. Mateja Germ,</td>
                                    <td>University of Ljubljana, Slovenia</td>
                                    <td>
                                        Effect of environmental conditions and nutrients on
                                        buckwheat plants
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Dr. Ram Krishna Shreshtha</td>
                                    <td>
                                        "1. , Ministry of Agriculture and Livestock Development,
                                        Govt. of Nepal, ‘"
                                    </td>
                                    <td>
                                        "Promoting alternate crops for food and nutrition security
                                        and rural transformation: Nepal’s experience from Millets
                                        and minor cereals promotion endeavours"
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.09.2024</td>
                                    <td>Prof. Nikhil Kr Chrungoo,</td>
                                    <td>RGU, Guwahati</td>
                                    <td>
                                        Engineering Flavonoid Biosynthesis Pathway for Rutin
                                        Biosynthesis in the Grains of Black Rice, (Oryza sativa
                                        L.)
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.04.2024</td>
                                    <td>Prof. Bandana Nabis Das</td>
                                    <td>
                                        "Professor, Botany Department, RGU and Former HOD
                                        HAndique"
                                    </td>
                                    <td>Karyotyping and its Significance</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>"Girls College, Guwahati Assam"</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>18.10.2023</td>
                                    <td>Prof. Surajit Chandra Mukhopadhyay</td>
                                    <td>
                                        Dean, Royal School of Humanities and Social sciences, RGU.
                                    </td>
                                    <td>
                                        "Public perception versus scientific literacy of Nobel
                                        winning research: mRNA vaccines SARS-COV-2."
                                    </td>
                                </tr>
                                <tr>
                                    <td>28.02.2024</td>
                                    <td>Prof. Sudip Mitra</td>
                                    <td>
                                        "School of Agro &amp; Rural Technology (SART) Founding
                                        Head, Centre for Disaster Management &amp; Research,
                                        Indian Institute of Technology (IIT) Guwahati, Assam"
                                    </td>
                                    <td>
                                        Climate Smart Agriculture for Sustainable Agroecosystem:
                                        Role of Indigenous Technologies
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Mr. Ashutosh Das</td>
                                    <td>Quiz Master</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16.12.2021</td>
                                    <td>Dr. Jintu Sarma,</td>
                                    <td>Assistant Professor, Guwahati College, Assam</td>
                                    <td>
                                        "Fundamentals of Remote Sensing and its Applications"
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.12.2021</td>
                                    <td>Nabajit Hazarika</td>
                                    <td>
                                        "Assistant Professor, Environment Science and Wildlife
                                        Biology, Cotton University, Guwahati, Assam,"
                                    </td>
                                    <td></td>
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
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in D-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Dr. Anushree Baruah, Assistant Professor, Coordinator,
                                        Dept. of Botany, RGU
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Dr. Anushree Baruah, Assistant Professor, Coordinator,
                                        Dept. of Botany, RGU
                                        <hr />
                                        Prof. (Dr.) Mina Ram Nath, Professor
                                        <hr />
                                        Dr. Manalee Paul, Assistan Professor
                                        <hr />
                                        Dr. Upashna Chettri, Assistant Professor
                                        <hr />
                                        Dr. Pratikshya Borah, Assistant Professor
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Prof. Neelakshi Devi, Dept of Botany Gauhati University
                                        <hr />
                                        Prof. Bhaben Tanti, Dept of Botany, Gauhati University
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
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1.</td>
                                    <td>Head of the Department</td>
                                    <td>Dr. Upasna Chettry</td>
                                    <td>
                                        Assistant Professor, Coordinator, Department of Botany
                                    </td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">Two Professors</td>
                                    <td>Prof Bandana Das</td>
                                    <td>Professor, Department of Botany</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Prof Minaram Nath</td>
                                    <td>Professor, Department of Botany</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3.</td>
                                    <td rowspan="2" class="align-middle">
                                        Two Assistant Professors holding Ph.D. degree
                                    </td>
                                    <td>Dr Anushree Baruah</td>
                                    <td>
                                        Assistant Professor, Department of Botany, Royal Global
                                        University
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Dr N. Seema Devi</td>
                                    <td>
                                        Assistant Professor, Department of Botany, Royal Global
                                        University
                                    </td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4.</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof Lingaraj Sahoo, IIT Guwahati</td>
                                    <td>Professor, IIT Guwahati</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. SR Joshi, North-Eastern Hill University</td>
                                    <td>
                                        Professor, Department of Biotechnology, North-Eastern Hill
                                        University
                                    </td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof N K Churungoo, Dean RSLSC</td>
                                    <td>Dean, Department of Botany, Royal Global University</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Botany/BSc Botany_structure and detailed syllabus.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> B.Sc. Botany - Syllabus Structure
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Botany/Structure UG BOTANY.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> B.Sc. Botany - Structure
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"><strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Botany/MSc Botany_structure and detailed syllabus .pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> M.Sc. Botany - Syllabus Structure
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Botany/Structure PG BOTANY.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> M.Sc. Botany - Structure
                                                    <i class="fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <strong>
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
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
            </ul>
        </div>

    </div>
@endsection

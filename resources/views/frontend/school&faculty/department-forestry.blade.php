@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-forestry/s2-bg-img-1.webp);">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-forestry/mobile-forestry.png" alt="">

            <div class="container pb-5 pt-3">
                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
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
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                <a href="research-and-development-rslsc-botany.php" class="" target="_blank">Click to
                                    view...</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
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
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
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
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                            Syllabus -
                        </h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-23 BSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-24 B.Sc. Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-24 B.Sc.
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/Old Syllabus BSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old Syllabus BSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/Old Syllabus B.Sc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old Syllabus B.Sc
                                                        Botany.pdf <i class="fa fa-download"></i>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-23 MSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-23 MSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
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
                                                <a href="doctoral-programme.html" class="para1" target="_blank">
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

        <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-forestry/web-forestry.png" alt="">

            <div class="container pb-5 pt-3">
                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            5. Events & Achievements
                        </h3>
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
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            6. Departmental Research Statistics
                        </h3>
                        <div class="text-dark">
                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                <a href="research-and-development-rslsc-botany.php" class="" target="_blank">Click to
                                    view...</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            7. The Board of Studies (BoS)
                        </h3>
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
                        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                            8. The Departmental Research Committee (DRC)
                        </h3>
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
                    <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
                        9. Course Structure & Syllabus
                    </h3>
                    <div class="p-2">
                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                            Syllabus -
                        </h3>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-23 BSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/AY 2023-24 B.Sc. Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2023-24 B.Sc.
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/Old Syllabus BSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old Syllabus BSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="assets/Departmentalpdf/Old Syllabus B.Sc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Old Syllabus B.Sc
                                                        Botany.pdf <i class="fa fa-download"></i>
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
                                                    <a href="assets/Departmentalpdf/AY 2022-23 MSc Botany.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> AY 2022-23 MSc
                                                        Botany.pdf <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
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
                                                <a href="doctoral-programme.html" class="para1" target="_blank">
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

    </div>
@endsection

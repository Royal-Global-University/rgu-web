@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>
    <div class="container">
        <h2 class="text-center pt-3 pb-3 text-dark">Ph.D. Scholars</h2>
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-striped align-middle">

                <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>SCHOOL</th>
                        <th>DEPARTMENT</th>
                        <th>NAME</th>
                        <th>DATE OF REGISTRATION</th>
                        <th>GUIDE</th>
                        <th>DESIGNATION OF THE GUIDE</th>
                        <th class="topic">TOPIC OF RESEARCH</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>KHAGEN CHANDRA NATH</td>
                        <td>06-07-2018</td>
                        <td>PROF. (DR.) ARNAB SARMA</td>
                        <td>PROFESSOR</td>
                        <td>PERFORMANCE EVALUATION OF A SUB-SURFACE PIPE IRRIGATION SYSTEM UNDER SPECIFIC SOIL CONDITIONS.
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>RANU GOWAL SARMAH</td>
                        <td>24-07-2019</td>
                        <td>PROF. (DR.) ARNAB SARMA</td>
                        <td>PROFESSOR</td>
                        <td>LOWERING OF GROUND WATER TABLE DUE TO BORING OF DEEP TUBE WELL IN GUWAHATI AND ITS AFFECTS AND
                            REMEDIAL MEASURES.</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RASHMI REKHA PHUKAN</td>
                        <td>27-07-2019</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>THE MATERNITY BENEFIT (AMENDMENT) ACT, 2017 - A CRITICAL LEGAL ANALYSIS.</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MAILINDA LYNSHING</td>
                        <td>29-07-2019</td>
                        <td>DR. MEGHNA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SOLID WASTE MANAGEMENT SYSTEM: A SOCIO-LEGAL STUDY WITH REFERENCE TO MEGHALAYA</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>CHANDRA UPADHYAYA</td>
                        <td>07-08-2019</td>
                        <td>PROF. (DR.) ARNAB SARMA</td>
                        <td>PROFESSOR</td>
                        <td>OPTIMIZATION OF HYDRO POWER PROJECT USING METAHEURISTIC TECHNIQUES</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>RSFA</td>
                        <td>FINE ARTS</td>
                        <td>KISHAN BAGDI</td>
                        <td>30-08-2019</td>
                        <td>DR. MOUSUMI DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AN AESTHETIC APPRAISAL OF TERRACOTTA ART OF ASSAM WITH SPECIAL REFERENCE TO ASHARIKANDI</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>JORDAN THAPA</td>
                        <td>08-02-2020</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A CRITICAL STUDY ON THE HISTORY OF THE MAGAR COMMUNITY OF ASSAM WITH SPECIAL REFERENCE TO THE
                            TINSUKIA DISTRICT</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>RSIT</td>
                        <td>INFORMATION TECHNOLOGY</td>
                        <td>ASHOK KUMAR SARKAR</td>
                        <td>25-08-2020</td>
                        <td>DR. ANUPAM DAS</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>INTELLIGENT FINANCIAL RISK PREDICTION FRAMEWORK WITH OPTIMIZED HYBRID DEEP LEARNING ARCHITECTURE
                            IN
                            SUPPLY CHAIN MANAGEMENT</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>FAHMIDA AKHTAR</td>
                        <td>25-08-2020</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>INFLUENCE OF CONTACT LANGUAGES ON GOALPARIA DIALECT: A STUDY IN GOALPARA AND DHUBRI DISTRICT OF
                            ASSAM.</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>RINGPHAMCHUNG KHATRU MOYON</td>
                        <td>02-09-2020</td>
                        <td>PROF. (DR.) MINARAM NATH</td>
                        <td>PROFESSOR</td>
                        <td>ETHNO-BOTANICAL STUDIES OF PLANT USED BY THE MOYON NAGA TRIBE IN MANIPUR, NORTH EAST INDIA</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>WAHIDA RAHMAN</td>
                        <td>02-09-2020</td>
                        <td>PROF. (DR.) SWABERA ISLAM</td>
                        <td>PROFESSOR</td>
                        <td>IMPACT OF PUBLIC PRIVATE PARTNERSHIP IN PRIMARY SECONDARY AND HIGHER EDUCATION IN KAMRUP
                            DISTRICT.
                        </td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>ASHIM KUMAR SARMAH</td>
                        <td>02-09-2020</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ASSESSMENT OF PERFORMANCE, APPRAISAL SYSTEM'S EFFECTIVENESS & SCOPE FOR ENHANCEMENT - SPECIAL
                            REFERENCE TO EXECUTIVES OF CENTRAL PSU POWER GENERATION STATION OF NORTH EAST, INDIA</td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>AVI NUH</td>
                        <td>02-09-2020</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF SOCIAL MEDIA USAGE AND PROBLEMATIC INTERNET USE ON MENTAL HEALTH AND ACADEMIC
                            PERFORMANCE
                            ON YOUNG NAGA ADULTS.</td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>ANUPAMA MOIRANGTHEM</td>
                        <td>04-09-2020</td>
                        <td>DR. BIRSON INGTI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IDENTIFICATION OF POTENTIAL B-LACTAMASE INHIBITORS FROM MEDICAL PLANTS OF ASSAM & MANIPUR.</td>
                    </tr>

                    <tr>
                        <td>15</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>SYED HADI ABDUL ROUF</td>
                        <td>04-09-2020</td>
                        <td>DR. NIRAJ SINGH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPARATIVE ANALYSIS OF RALSTONIA SOLANACEARUM VIRULENCE IN TOMATO AND BRINJAL: IMPLICATIONS FOR
                            WILT DISEASE MANAGEMENT (TENTATIVE)</td>
                    </tr>

                    <tr>
                        <td>16</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>KOWSALYA</td>
                        <td>04-09-2020</td>
                        <td>DR. TARANGA JYOTI BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>FORMULATION AND EVALUATION OF ENHANCED WOUND HEALING USING MAGNESIUM OXIDE NANOPARTICLES
                            SYNTHESIS
                        </td>
                    </tr>

                    <tr>
                        <td>17</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>RAMKRISHNA ROY</td>
                        <td>04-09-2020</td>
                        <td>DR. BIRSON INGTI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>CHARACTERIZATION OF ANTIMICROBIAL RESISTANCE ENTEROBACTERIAL ISOLATES OF HUMAN-ENVIRONMENT
                            INTERFACE.</td>
                    </tr>

                    <tr>
                        <td>18</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>GUJJALA SAI SRI HARSHA</td>
                        <td>10-09-2020</td>
                        <td>PROF. (DR.) PRANABESH SIKDAR</td>
                        <td>PROFESSOR</td>
                        <td>HOME MEDICATION REVIEW TO IDENTIFY DRUG RELATED PROBLEMS IN CHRONIC GERIATRIC PATIENTS IN
                            ATMAKUR
                            MANDAL.</td>
                    </tr>

                    <tr>
                        <td>19</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>SABNAM SULTANA</td>
                        <td>03-02-2021</td>
                        <td>DR. ANUSHREE BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EVALUATION OF PHYTOCHEMICAL PROPERTIES AND ANTIMICROBIAL ACTIVITIES OF FEW LICHEN SPECIES OF
                            GOLAGHAT DISTRICT.</td>
                    </tr>

                    <tr>
                        <td>20</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SHELZA JALAN</td>
                        <td>04-02-2021</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>THE ROLE OF CIVIL SOCIETY ORGANIZATIONS: THE CASE STUDY OF LOWER SUBANSIRI HYDROELECTRIC PROJECT
                        </td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>CHINMOYEE DEKA</td>
                        <td>04-02-2021</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ECOFEMINIST PARADIGM: EXPLORING INTERCONNECTEDNESS THROUGH A STUDY OF SELECTED TEXTS OF MANJULA
                            PADMANABHAN, ROMESH GUNESEKERA AND MAMANG DAI</td>
                    </tr>

                    <tr>
                        <td>22</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>HIMASHRI KUMAR</td>
                        <td>04-02-2021</td>
                        <td>PROF. (DR.) KRISHNA BARUA</td>
                        <td>PROFESSOR</td>
                        <td>MODERNISM AND ITS VARIATION: A CRITICAL STUDY OF THE POETIC OEUVRE OF HIREN BHATTACHARYYA</td>
                    </tr>

                    <tr>
                        <td>23</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>CHANDAM CHANU NGANTHOIHANBI</td>
                        <td>22-08-2021</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>FOLKLORE, ORAL NARRATIVES AND PERFORMANCES AMONG MEITEIS OF MANIPUR: PROTO-ECOCRITICAL
                            PERSPECTIVES
                        </td>
                    </tr>

                    <tr>
                        <td>24</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>ARUP CHAKRABORTY</td>
                        <td>10-09-2021</td>
                        <td>PROF. (DR.) PRANABESH SIKDAR</td>
                        <td>PROFESSOR</td>
                        <td>PREPARATION AND CHARACTERIZATION OF ANTIMICROBIAL FORMULATION CONTAINING STANDARDIZED EXTRACT OF
                            SAROCHLAMYS PULCHERRIMA WITH ITS ANALYTICAL METHODS DEVELOPMENT AND VALIDATION STUDIES</td>
                    </tr>

                    <tr>
                        <td>25</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>SHUBHI JAIN</td>
                        <td>10-09-2021</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE INFLUENCE OF PERSONALITY ON EMOTIONAL INTELLIGENCE, HAPPINESS AND QUALITY OF LIFE AMONG
                            COLLEGE
                            STUDENTS IN KAMRUP DISTRICT (M), ASSAM.</td>
                    </tr>

                    <tr>
                        <td>26</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>MITALI BARUAH</td>
                        <td>13-09-2021</td>
                        <td>PROF. (DR.) BANDANA NABI DAS</td>
                        <td>PROFESSOR</td>
                        <td>COMPARATIVE EPIDERMAL MORPHOLOGICAL, PALYNOLOGICAL AND KARYOMORPHOLOGICAL STUDIES OF CERTAIN
                            SPECIES
                            OF GENUS SENNA IN ASSAM</td>
                    </tr>

                    <tr>
                        <td>27</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>DIKSHYA SAIKIA</td>
                        <td>14-09-2021</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>COMMUNITY-BASED TOURISM FOR SUSTAINABLE SOCIO-ECONOMIC DEVELOPMENT - A STUDY IN SELECT DISTRICTS
                            OF
                            ASSAM</td>
                    </tr>

                    <tr>
                        <td>28</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>MUSTAFA SYED IHTIMUM ALAM</td>
                        <td>14-09-2021</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SOFT POWER IN INDIA'S FOREIGN POLICY TOWARDS BANGLADESH: TEESTA RIVER DISPUTE.</td>
                    </tr>

                    <tr>
                        <td>29</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>ASHA YENGKHOM</td>
                        <td>15-09-2021</td>
                        <td>PROF. (DR.) SWABERA ISLAM</td>
                        <td>PROFESSOR</td>
                        <td>PROSPECT OF MSME'S IN MANIPUR WITH RESPECT TO ACT EAST POLICY (SPECIAL REFERENCE TO IMPHAL EAST,
                            WEST, THOUBAL, KAKCHING AND BISHNUPUR DISTRICT)</td>
                    </tr>

                    <tr>
                        <td>30</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>LIONG M PHOM</td>
                        <td>15-09-2021</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>RURAL DEVELOPMENT IN NAGALAND: A CASE STUDY OF MGNREGA IN LONGLENG DISTRICT</td>
                    </tr>

                    <tr>
                        <td>31</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>VASUNDHARA JALAN</td>
                        <td>16-09-2021</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>ROLE OF IOCL (INDIAN OIL CORPORATION LIMITED) IN IMPLEMENTING SUSTAINABLE DEVELOPMENT GOALS
                            2030,
                            THROUGH ITS CSR ACTIVITIES IN ASSAM</td>
                    </tr>

                    <tr>
                        <td>32</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>DEBALEENA KASHYAP</td>
                        <td>21-09-2021</td>
                        <td>DR. BHASKARJYOTI GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SYNTHESIS AND CHARACTERIZATION OF A FEW METAL NANOPARTICLES AND ASSESSMENT OF THEIR
                            ANTIMICROBIAL
                            PROPERTY AGAINST BACTERIAL PHYTOPATHOGEN</td>
                    </tr>

                    <tr>
                        <td>33</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>DHRUBAJYOTI THAKURIA</td>
                        <td>21-09-2021</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CRITICAL FACTORS FOR EFFECTIVE INFORMATION DISSEMINATION OF GOVERNMENT SCHEMES THROUGH SOCIAL
                            MEDIA
                            PLATFORM: A STUDY IN KAMRUP DISTRICT</td>
                    </tr>

                    <tr>
                        <td>34</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>TEMJENSOLA I</td>
                        <td>21-09-2021</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>ADMINISTRATION OF PRIMARY SCHOOL EDUCATION IN NAGALAND: A STUDY OF DISTRICT DIMAPUR</td>
                    </tr>

                    <tr>
                        <td>35</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>AISHWARYA GOSWAMI</td>
                        <td>23-09-2021</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CRITICAL ANALYSIS OF GREEN CONSUMERISM: WITH SPECIAL REFERENCE TO GREEN PERSONAL GROOMING
                            PRODUCTS
                            AMONG GEN-Z & GEN-Y OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>36</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ABIDA SULTANA LASKAR</td>
                        <td>15-01-2022</td>
                        <td>DR. KUNTALA ROY CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE ENFORCEMENT OF FORENSIC MECHANISMS IN CRIMINAL JUSTICE WITH SPECIAL REFERENCE TO ASSAM: A
                            STUDY
                        </td>
                    </tr>

                    <tr>
                        <td>37</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>KRISHNA DAS</td>
                        <td>15-01-2022</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY ON SOCIO-LEGAL REGIMES ON MENSTRUAL LEAVE WITH SPECIAL REFERENCE TO TEA-ESTATES IN
                            DIBRUGARH
                            DISTRICT OF ASSAM.</td>
                    </tr>

                    <tr>
                        <td>38</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>RICA LANGSTANG</td>
                        <td>18-01-2022</td>
                        <td>DR. STHITI PARNA DUTTA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>METABOLITE PROFILING OF CURCUMA CAESIA ROXB. FROM DIFFERENT GEOGRAPHICAL REGIONS OF MEGHALAYA,
                            INDIA.</td>
                    </tr>

                    <tr>
                        <td>39</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>HIMAKSHI KALITA</td>
                        <td>18-01-2022</td>
                        <td>DR. PRATIKSHYA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>STUDIES ON MICRO MORPHOLOGY, ANATOMY, CYTOLOGY, PALYNOLOGY AND MOLECULAR TAXONOMY OF CERTAIN
                            SPECIES
                            OF LUDWIGIA BELONGING TO THE FAMILY ONAGRACEAE FOUND IN ASSAM</td>
                    </tr>

                    <tr>
                        <td>40</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>HASNE TOUFIKI</td>
                        <td>18-01-2022</td>
                        <td>PROF. (DR.) B S MIPUN</td>
                        <td>PROFESSOR</td>
                        <td>GEOMORPHIC HAZARDS AND THEIR IMPACT ON HUMAN HABITAT IN DHUBRI DISTRICT, ASSAM: A GEOGRAPHICAL
                            ANALYSIS</td>
                    </tr>

                    <tr>
                        <td>41</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DR RATHINDRA BHUYAN</td>
                        <td>18-01-2022</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>BIOMEDICAL WASTE MANAGEMENT AND PUBLIC HEALTH SAFETY WITH SPECIAL REFERENCE TO ASSAM: A
                            SOCIO-LEGAL
                            STUDY</td>
                    </tr>

                    <tr>
                        <td>42</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>GOURISHIKHA BORGOHAIN</td>
                        <td>20-01-2022</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REPRESENTATIONS OF LIFE IN SELECT TEA PLANTATION NARRATIVES FROM ASSAM</td>
                    </tr>

                    <tr>
                        <td>43</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DILIP KUMAR BORA</td>
                        <td>22-01-2022</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>A SOCIO–LEGAL STUDY ON EFFECTIVENESS OF FOOD SAFETY ENFORCEMENT MECHANISM UNDER THE FOOD SAFETY
                            AND
                            STANDARDS ACT, 2006 WITH SPECIAL REFERENCE TO ASSAM.</td>
                    </tr>

                    <tr>
                        <td>44</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>POMPI DEKA</td>
                        <td>23-01-2022</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>RELEVANCE OF FORENSIC EVIDENCE IN CRIMINAL JUSTICE SYSTEM WITH SPECIFIC REFERENCE TO JUDICIAL
                            DECISIONS</td>
                    </tr>

                    <tr>
                        <td>45</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PRONAB KR NATH</td>
                        <td>27-01-2022</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>A CRITICAL STUDY OF CRIMINAL JUSTICE SYSTEM IN INDIA VIS-A-VIS SAFEGUARDING INTERESTS OF VICTIMS
                        </td>
                    </tr>

                    <tr>
                        <td>46</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>PUNAM DAS</td>
                        <td>01-03-2022</td>
                        <td>DR. BIMALENDU KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>PIPE FLOW OF SOME NON-NEWTONIAN LIQUID FOOD PRODUCTS USING SUITABLE MATHEMATICAL MODEL FOR
                            MANUFACTURING PROCESS DESIGN AND EVALUATION</td>
                    </tr>

                    <tr>
                        <td>47</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>DARSHANA DEVI</td>
                        <td>13-07-2022</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A STUDY ON THE STARTUPS OF KAMRUP METRO DISTRICT</td>
                    </tr>

                    <tr>
                        <td>48</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>SANSKRITA BARMAN</td>
                        <td>13-07-2022</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>GREEN CONSUMPTION BEHAVIOR OF CONSUMERS WITH REFERENCE TO THE DISTRICTS OF KAMRUP AND KAMRUP
                            METRO
                            ASSAM</td>
                    </tr>

                    <tr>
                        <td>49</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>BHASKAR JYOTI PATHAK</td>
                        <td>13-07-2022</td>
                        <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                        <td>PROFESSOR</td>
                        <td>EVALUATION OF BIOACTIVE PHYTOSOMES FROM FLORA OF NORTH EASTERN REGION OF INDIA TARGETING
                            INFLAMMATORY PROPHYLAXIS.</td>
                    </tr>

                    <tr>
                        <td>50</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>MUZAMMAL HOQUE MALLAH</td>
                        <td>13-07-2022</td>
                        <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                        <td>PROFESSOR</td>
                        <td>EVALUATION OF NEPHROPROTECTIVE AND ANTIUROLITHIC POTENTIAL OF NATURAL FLORA OF NORTHEASTERN
                            REGION
                            OF INDIA</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ROSHNI NONGTHOMBAM</td>
                        <td>13-07-2022</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>QUALITY OF LIFE, RESILIENCE AND PSYCHOLOGICAL WELL-BEING AMONG TRANSGENDER INDIVIDUALS OF
                            MANIPUR
                        </td>
                    </tr>

                    <tr>
                        <td>52</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>BINOY JOHN</td>
                        <td>13-07-2022</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFLUENCE OF EMOTIONAL INTELLIGENCE, RESILIENCE ON ACADEMIC PERFORMANCE AMONG TRIBAL AND
                            NON-TRIBAL
                            HIGHER EDUCATION STUDENTS OF WEST TRIPURA.</td>
                    </tr>

                    <tr>
                        <td>53</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>GRIKANCHIE M SANGMA</td>
                        <td>13-07-2022</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>COMMUNITY HEALTHCARE CENTRE: EVALUATION OF MATERNAL AND CHILD HEALTH SERVICES IN SELECT AREAS OF
                            DISTRICT OF SELSELLA BLOCK, MEGHALAYA.</td>
                    </tr>

                    <tr>
                        <td>54</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>NIKITA BISWAKARMA</td>
                        <td>13-07-2022</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>RURAL POVERTY ALLEVIATION: A STUDY OF MGNREGA SCHEME IN SELECTED VILLAGES OF NORTH GARO HILLS
                            DISTRICT</td>
                    </tr>

                    <tr>
                        <td>55</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>SHAHINUR ISLAM</td>
                        <td>19-07-2022</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>A PREDICTIVE BIOMARKER STUDY TO ASSESS RISK FACTORS ASSOCIATED WITH DEATH IN GERIATRIC
                            POPULATION
                            RECEIVING COVID-19 BOOSTER DOSE IN FEW SELECTIVE DISTRICTS OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>56</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>MUSTAK EUCHUF</td>
                        <td>20-07-2022</td>
                        <td>PROF. (DR.) ANURADHA DEVI</td>
                        <td>PROFESSOR</td>
                        <td>THE ROLE OF PREDATOR INDUCED FEAR ON PREY GROWTH AND DISEASE TRANSMISSION: A STUDY IN ECOSYSTEM
                            AND
                            ECO-EPIDEMIC MODELLING</td>
                    </tr>

                    <tr>
                        <td>57</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>TANJEELA MEHBOOB</td>
                        <td>25-07-2022</td>
                        <td>DR. Y MONOJIT SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>STUDY ON NATURE, MAGNITUDE AND STATE RESPONSES TO CLIMATE-INDUCED DISPLACEMENT IN ASSAM SINCE
                            1971.
                        </td>
                    </tr>

                    <tr>
                        <td>58</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>SAAHANA SYED JUHI</td>
                        <td>26-07-2022</td>
                        <td>DR. SIDDHARTHA NARAYAN BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPARATIVE EVALUATION OF THE ENDOPHYTIC FUNGI DIVERSITY IN COSTUS SPECIOSUS AND COSTUS PICTUS,
                            TWO
                            TRADITIONAL MEDICINAL PLANT SPECIES OF ASSAM AND ASSESSMENT OF THEIR THERAPEUTIC POTENTIAL</td>
                    </tr>

                    <tr>
                        <td>59</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>HAFIUZ ZAMAN AHMED</td>
                        <td>28-07-2022</td>
                        <td>DR. UPASHNA CHETTRI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>TAXONOMIC STUDIES ON LEPIOTOID MUSHROOM OF THREE SELECTED DISTRICTS OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>60</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>NILUTPAL HAZARIKA</td>
                        <td>28-07-2022</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>STANDARDIZATION AND PHARMACOLOGICAL EVALUATION OF A POLYHERBAL FORMULATION FOR THE TREATMENT OF
                            RHEUMATOID ARTHRITIS</td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>ARUP SAIKIA</td>
                        <td>28-07-2022</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ANALYSIS AND STUDY OF SOME PROPERTIES OF SELF-PHASE MODULATION IN OPTICAL FIBER COMMUNICATIONS
                        </td>
                    </tr>

                    <tr>
                        <td>62</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SANJENBAM JOEL</td>
                        <td>28-07-2022</td>
                        <td>DR. PARIMAL CHANDRA RAY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>MAPPING OF FRESHWATER TURTLE POPULATION DYNAMICS AND HABITAT SUITABILITY ALONG BRAHMAPUTRA RIVER
                            IN
                            KAZIRANGA TIGER RESERVE, ASSAM, INDIA</td>
                    </tr>

                    <tr>
                        <td>63</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>POOJA BHATTACHARJEE</td>
                        <td>03-08-2022</td>
                        <td>PROF. (DR.) SAJAL NAG</td>
                        <td>PROFESSOR</td>
                        <td>LANGUAGE AND IDENTITY: A STUDY ON THE LANGUAGE MOVEMENT OF ASSAM (1947–1961)</td>
                    </tr>

                    <tr>
                        <td>64</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>PARTHA PRATIM BORAH</td>
                        <td>28-08-2022</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A THEORETICAL STUDY OF NONLINEAR OPTICAL LOSS IN OPTICAL WAVEGUIDE DUE TO STIMULATED BRILLOUIN
                            SCATTERING</td>
                    </tr>

                    <tr>
                        <td>65</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>BIDISH BORAH</td>
                        <td>03-09-2022</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ANALYSIS OF THE DYNAMICS OF PULSATING, CREEPING AND DISSIPATIVE SOLITON IN FIBER LASER</td>
                    </tr>

                    <tr>
                        <td>66</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>KENEISELHOU CHIELIE</td>
                        <td>14-09-2022</td>
                        <td>DR. TRIPTI DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>GIFT GIVING AMONGST THE ANGAMI NAGA: A SOCIOLOGICAL ANALYSIS</td>
                    </tr>

                    <tr>
                        <td>67</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>DIPSHIKHA KALITA</td>
                        <td>22-09-2022</td>
                        <td>DR. ANNESHA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PATTERN OF SOCIOECONOMIC DEVELOPMENT IN THE FRINGE AREAS OF NAMERI NATIONAL PARK WITH SPECIAL
                            REFERENCE TO TOURISM: A GEOGRAPHICAL ANALYSIS</td>
                    </tr>

                    <tr>
                        <td>68</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>ADITI BARUAH</td>
                        <td>22-12-2022</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>IMPLICATIONS OF CONSUMER ETHNOCENTRISM ON PURCHASE INTENTIONS: A STUDY ON CONSUMERS IN KAMRUP
                            (METRO)</td>
                    </tr>

                    <tr>
                        <td>69</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>LAISHRAM PINKY</td>
                        <td>22-12-2022</td>
                        <td>PROF. (DR.) INDRANI SINGH RAI</td>
                        <td>PROFESSOR</td>
                        <td>MODERNITY IN MANIPURI LITERATURE: A STUDY OF M. K. BINODINI'S WORKS</td>
                    </tr>

                    <tr>
                        <td>70</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>KASTURI BORGOHAIN</td>
                        <td>22-12-2022</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>BORDERS, PERIPHERY, AND NATION: A READING OF SELECT ASSAMESE NOVELS</td>
                    </tr>

                    <tr>
                        <td>71</td>
                        <td>RSFA</td>
                        <td>FINE ARTS</td>
                        <td>GAURAV MORAL</td>
                        <td>22-12-2022</td>
                        <td>DR. MOUSUMI DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY ON THE PICTORIAL REPRESENTATIONS IN THE MANUSCRIPT PAINTINGS OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>72</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SHAHNAJ SULTANA</td>
                        <td>22-12-2022</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>LEGAL LANDSCAPE OF HUMAN-ELEPHANT CONFLICT IN ASSAM: EFFICACY OF THE WILDLIFE (PROTECTION) ACT,
                            1972
                        </td>
                    </tr>

                    <tr>
                        <td>73</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SONI TEP</td>
                        <td>22-12-2022</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>A SOCIO-LEGAL STUDY OF DOMESTIC CHILD LABOUR IN NAGALAND</td>
                    </tr>

                    <tr>
                        <td>74</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>H IMO MANI SINGHA</td>
                        <td>22-12-2022</td>
                        <td>PROF. (DR.) ANURADHA DEVI</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY ON THE DYNAMICS OF SMOKING TREND OF A POPULATION USING FRACTIONAL ORDER MATHEMATICAL
                            MODEL
                        </td>
                    </tr>

                    <tr>
                        <td>75</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>DEIFY BAKORDOR SUTING</td>
                        <td>22-12-2022</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A STUDY ON DOUBLE COLONIZATION AND INTERSECTIONALITY IN SELECT TEXTS OF AFRICAN LITERATURE</td>
                    </tr>

                    <tr>
                        <td>76</td>
                        <td>RSFA</td>
                        <td>FINE ARTS</td>
                        <td>LALREMRUATA VARTE</td>
                        <td>23-12-2022</td>
                        <td>DR. MOUSUMI DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AN ANALYSIS OF THE PETROGLYPHS OF MIZORAM: EVOLUTION, CLASSIFICATION AND IMPACT ON THE
                            CONTEMPORARY
                            ART CULTURE</td>
                    </tr>

                    <tr>
                        <td>77</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BONNIE SARMA</td>
                        <td>23-12-2022</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>REPRODUCTIVE RIGHTS OF WOMEN WITH SPECIAL REFERENCE TO KAMRUP METROPOLITAN DISTRICT</td>
                    </tr>

                    <tr>
                        <td>78</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NARGIS CHOUDHURY</td>
                        <td>24-12-2022</td>
                        <td>DR. MEGHNA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>WOMEN'S ACCESS TO JUSTICE AND CITIZENSHIP IN ASSAM: A SOCIO LEGAL STUDY</td>
                    </tr>

                    <tr>
                        <td>79</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>DEBIYA THONGAM</td>
                        <td>24-12-2022</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>A SOCIOLOGICAL STUDY ON HIGHER EDUCATION IN THE CONTEXT OF MANIPUR.</td>
                    </tr>

                    <tr>
                        <td>80</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>MUKINUR HUSSAIN</td>
                        <td>26-12-2022</td>
                        <td>PROF. (DR.) PRANABESH SIKDAR</td>
                        <td>PROFESSOR</td>
                        <td>STANDARDIZATION AND BIOLOGICAL EVALUATION OF ANTIDIABETIC POTENTIAL OF TRADITIONAL MEDICINAL
                            FLORA
                            FROM NORTHEAST INDIA.</td>
                    </tr>
                    <tr>
                        <td>81</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>NAGENDRA NATH GOGOI</td>
                        <td>26-12-2022</td>
                        <td>DR. Y MONOJIT SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>POLITICAL ECOLOGY OF FOREST CONSERVATION AND GOVERNANCE IN ASSAM: ISSUES OF EVICTION,
                            MARGINALIZATION AND RESISTANCE WITH SPECIAL REFERENCE TO AMCHANG WILDLIFE SANCTUARY</td>
                    </tr>

                    <tr>
                        <td>82</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>SAISANGPUII SAILO</td>
                        <td>27-12-2022</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A STUDY ON CONSUMER PERSPECTIVES ON SELECT WOMEN LED PROCESSED FOOD PRODUCTS IN SELECT DISTRICTS
                            OF
                            MIZORAM</td>
                    </tr>

                    <tr>
                        <td>83</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>SAMARESH NANDY</td>
                        <td>27-12-2022</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A STUDY ON IMPACT OF ARTIFICIAL INTELLIGENCE ON CONSUMER BUYING INTENTIONS IN E-COMMERCE
                            PLATFORMS
                        </td>
                    </tr>

                    <tr>
                        <td>84</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>HIMANTA BISWA SAIKIA</td>
                        <td>27-12-2022</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>FORMULATION AND OPTIMIZATION OF EXTENDED-RELEASE TABLETS OF ANTIDIABETIC DRUGS USING QUALITY BY
                            DESIGN (QBD) WITH HPLC ANALYTICAL METHOD DEVELOPMENT</td>
                    </tr>

                    <tr>
                        <td>85</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SOIBAM PRIYADARSHINI</td>
                        <td>27-12-2022</td>
                        <td>DR. ANIRBAN BANIK</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF THE AMELIORATIVE POTENTIAL OF MORINGA OLEIFERA EXTRACT AGAINST PBNO3-INDUCED
                            CARDIOTOXICITY IN MURINE MODEL</td>
                    </tr>

                    <tr>
                        <td>86</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>HADIUZ ZAMAN</td>
                        <td>28-12-2022</td>
                        <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                        <td>PROFESSOR</td>
                        <td>EVALUATION OF NOOTROPIC & NEUROPROTECTIVE EFFECT OF NATURAL PRODUCTS AGAINST EXPERIMENTAL
                            INDUCED
                            ALZHEIMER’S DISEASE.</td>
                    </tr>

                    <tr>
                        <td>87</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>PAYAL DASGUPTA</td>
                        <td>28-12-2022</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>COMPARATIVE ASSESSMENT OF ENHANCING SOLUBILITY AND DISSOLUTION RATE OF ANTI-FUNGAL DRUGS BY
                            SOLID
                            DISPERSION AND CO-CRYSTALLIZATION TECHNIQUE</td>
                    </tr>

                    <tr>
                        <td>88</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>TRISHA SAHA</td>
                        <td>29-12-2022</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>EXPLORING THE CURRENT LANDSCAPE AND ECONOMIC IMPACT OF TOURISM IN TRIPURA</td>
                    </tr>

                    <tr>
                        <td>89</td>
                        <td>RSCOM</td>
                        <td>JOURNALISM AND MASS COMMUNICATION</td>
                        <td>UPEN BORA</td>
                        <td>29-12-2022</td>
                        <td>DR. FLORANCE HANDIQUE RABHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PRINT MEDIA COVERAGE OF HEALTH COMMUNICATION: AN ANALYSIS OF NEWS PUBLISHED BY "THE ASSAM
                            TRIBUNE"
                            AND "ASOMIYA PRATIDIN"</td>
                    </tr>

                    <tr>
                        <td>90</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>PAYEL DAS</td>
                        <td>29-12-2022</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SUBALTERNITY AND SUBTLE MARGINALIZATION IN SELECT WORKS OF MAHASWETA DEVI AND BAMA (IN
                            TRANSLATION)
                        </td>
                    </tr>

                    <tr>
                        <td>91</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>MONALISA KONWAR</td>
                        <td>10-01-2023</td>
                        <td>PROF. (DR.) GEORGE AP</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY ON JOB STRESS AND EMPLOYEE PERFORMANCE WITH REFERENCE TO 3-STAR HOTELS IN ASSAM.</td>
                    </tr>

                    <tr>
                        <td>92</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ANUPAL DUTTA PATHAK</td>
                        <td>16-01-2023</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY ON CRIME AGAINST WOMEN IN INDIA WITH SPECIAL REFERENCE TO STATE OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>93</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BEATIFY LUNGDOH</td>
                        <td>01-04-2023</td>
                        <td>DR. JAHNAVI BHANDARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORING THE INTERPLAY OF SOCIETAL LEGAL FACTORS OF YOUTH SUBSTANCE IN EAST JAINTIA HILLS,
                            MEGHALAYA</td>
                    </tr>

                    <tr>
                        <td>94</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>MAYOUSHREE GOGOI</td>
                        <td>13-06-2023</td>
                        <td>DR. ABESH CHAKRABORTY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ISOLATION AND CHARACTERIZATION OF EXTERNAL BODY SURFACE BACTERIA OF THE FAMILY SARCOPHAGIDAE
                            FROM
                            KAMRUP METRO ASSAM</td>
                    </tr>

                    <tr>
                        <td>95</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>INDIRA DEV ROY</td>
                        <td>04-07-2023</td>
                        <td>PROF. (DR.) GEORGE AP</td>
                        <td>PROFESSOR</td>
                        <td>CONSUMER SENTIMENTS TOWARDS MOBILE BRANDS: AN ANALYTICAL STUDY USING AI TOOLS</td>
                    </tr>

                    <tr>
                        <td>96</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>DAIMULU BORO</td>
                        <td>10-07-2023</td>
                        <td>DR. UPASNA CHETTRY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>UNRAVELLING THE MOLECULAR BASIS OF SECONDARY METABOLITE BIOSYNTHESIS IN TURMERIC SPECIES.</td>
                    </tr>

                    <tr>
                        <td>97</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>DEBALINA DEBBARMA</td>
                        <td>10-07-2023</td>
                        <td>DR. TRIPTI DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY ON FOOD AND IDENTITY OF THE PLAIN TIWAS OF MORIGAON DISTRICT OF ASSAM.</td>
                    </tr>

                    <tr>
                        <td>98</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MANISH KUMAR DAS</td>
                        <td>10-07-2023</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY INTO THE ASPECTS OF HARMONIZATION OF PATENT LAWS: AN ANALYSIS</td>
                    </tr>

                    <tr>
                        <td>99</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NITA RIJIJU</td>
                        <td>10-07-2023</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CHALLENGES IN THE IMPLEMENTATION OF THE POCSO ACT: A SOCIO LEGAL STUDY</td>
                    </tr>

                    <tr>
                        <td>100</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PANKHI DEVI</td>
                        <td>10-07-2023</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>AI-GENERATED DEEPFAKE IN CRYPTOCURRENCY PHISHING ATTACKS IN THE STATE OF ASSAM: A LEGAL ANALYSIS
                            AND
                            UNVEILING THE CRIME DYNAMICS BY PREVENTION METHOD</td>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>NILIMOY NATH</td>
                        <td>11-07-2023</td>
                        <td>DR. DARSHANA BHAGOWATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY ON THE 4 WHEELER PASSENGER CAR ELECTRIC VEHICLE ADOPTIONS IN GUWAHATI</td>
                    </tr>

                    <tr>
                        <td>102</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>ANKITA SAIKIA</td>
                        <td>28-07-2023</td>
                        <td>PROF. (DR.) SOUMITRA SEN</td>
                        <td>PROFESSOR</td>
                        <td>SUSTAINABLE PRACTICES IN THE HOTEL INDUSTRY: ASSESSING GREEN INITIATIVES AND OPERATIONAL
                            CHALLENGES
                            IN GUWAHATI, ASSAM.</td>
                    </tr>

                    <tr>
                        <td>103</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>MEGHA PHUKAN</td>
                        <td>28-07-2023</td>
                        <td>PROF. (DR.) SOUMITRA SEN</td>
                        <td>PROFESSOR</td>
                        <td>COMMUNITY-BASED TOURISM IN KAMRUP (RURAL), ASSAM: OPPORTUNITIES AND CHALLENGES</td>
                    </tr>

                    <tr>
                        <td>104</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>ARCKPRAV DEWAN</td>
                        <td>28-07-2023</td>
                        <td>DR. DEBANGANA BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>LAND AND CONFLICT TRANSFORMATION: A STUDY ON TRIPURA</td>
                    </tr>

                    <tr>
                        <td>105</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>DIPAK JAIN</td>
                        <td>29-07-2023</td>
                        <td>DR. RAJDEEP NAG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INNOVATIVE AND SUSTAINABLE MANUFACTURING PRACTICES BY SMALL AND MEDIUM ENTERPRISES IN KAMRUP
                            (METRO)
                            DISTRICT OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>106</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>JAHNABI MAHANTA</td>
                        <td>29-07-2023</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORING PERCEIVED SOCIAL SUPPORT, EMOTIONAL MATURITY AND PSYCHOLOGICAL WELL-BEING: EXPERIENCES
                            AND
                            CHALLENGES OF PROFESSIONAL MENTAL HEALTH WORKERS OF GUWAHATI CITY.</td>
                    </tr>

                    <tr>
                        <td>107</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>SUHANA SULTANA</td>
                        <td>29-07-2023</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AN INTERVENTION STUDY TO ADDRESS SOCIAL ANXIETY AND SELF-ESTEEM ISSUES AMONG UNIVERSITY STUDENTS
                            IN
                            POST PANDEMIC PERIOD.</td>
                    </tr>

                    <tr>
                        <td>108</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>QUEENARITY NONGRUM</td>
                        <td>29-07-2023</td>
                        <td>DR. KRISHANGI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY OF NATIONAL RURAL LIVELIHOOD MISSION (NRLM) AND WOMEN EMPOWERMENT IN EAST KHASI HILLS
                            DISTRICT, MEGHALAYA</td>
                    </tr>

                    <tr>
                        <td>109</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BICKEY PRASAD</td>
                        <td>30-07-2023</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>NATIONAL SECURITY AND CONSTITUTIONAL RIGHTS AT CROSSROADS: A SOCIO-LEGAL STUDY OF THE
                            INDO-BANGLADESH BORDER</td>
                    </tr>

                    <tr>
                        <td>110</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>IXORA WAIKHOM</td>
                        <td>31-07-2023</td>
                        <td>DR. SIDDHARTHA NARAYAN BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ANTIMICROBIAL ACTIVITY OF BIOSURFACTANT PRODUCED BY NATIVELY ISOLATED BACTERIA AGAINST
                            PHYTOPATHOGEN
                        </td>
                    </tr>
                    <tr>
                        <td>111</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>AJANTA DAS</td>
                        <td>31-07-2023</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>INDIA'S ACT EAST POLICY: STRATEGIC AND ECONOMIC ENGAGEMENT WITH SOUTHEAST ASIA</td>
                    </tr>

                    <tr>
                        <td>112</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>HIMANGGI BORAH</td>
                        <td>31-07-2023</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>CHALLENGING ISSUES OF SILK INDUSTRY - A CASE STUDY OF SUALKUCHI</td>
                    </tr>

                    <tr>
                        <td>113</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>KHRUNIELU LOHE</td>
                        <td>31-07-2023</td>
                        <td>DR. BIMALENDU KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>FUZZY INNER PRODUCT SPACES: A COMPREHENSIVE STUDY</td>
                    </tr>

                    <tr>
                        <td>114</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>ANANYA SHILPI</td>
                        <td>31-07-2023</td>
                        <td>DR. BAPAN KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SOME ASPECTS OF MATHEMATICAL MODELLING OF COVID-19 PANDEMIC: INSIGHTS FROM DETERMINISTIC AND
                            STOCHASTIC AMBIENCES.</td>
                    </tr>

                    <tr>
                        <td>115</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SUBHASH BARO</td>
                        <td>31-07-2023</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>IDENTITY, AUTONOMY AND DEVELOPMENT: CHALLENGES FACED BY THE PLAIN KARBIS OF DIMORIA REGION ASSAM
                        </td>
                    </tr>

                    <tr>
                        <td>116</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>LOYA AGARWALA</td>
                        <td>31-07-2023</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PERCEIVED SOCIAL SUPPORT, COPING STRATEGIES & PSYCHOLOGICAL WELL-BEING AMONG GEN-Z STUDENTS
                            USING
                            GENERATIVE AI IN STATE GOVERNMENT UNIVERSITIES OF GUWAHATI, ASSAM</td>
                    </tr>

                    <tr>
                        <td>117</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>DIPAK JAIN</td>
                        <td>01-08-2023</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>GREEN FINANCE INITIATIVE BY COMMERCIAL BANKS: A STUDY WITH SPECIAL REFERENCE TO KAMRUP (METRO)
                            DISTRICT OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>118</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>JHARNA AKRAM</td>
                        <td>01-08-2023</td>
                        <td>DR. MEGHNA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>BEHIND BARS: HEALTHCARE OF PRISONERS IN ASSAM - A SOCIO-LEGAL STUDY</td>
                    </tr>

                    <tr>
                        <td>119</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>PRAJOYEETA KASHYAP</td>
                        <td>01-08-2023</td>
                        <td>DR. Y MONOJIT SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>LGBTQ+ MOVEMENT IN ASSAM: A CASE STUDY OF TRANSGENDER COMMUNITY IN GUWAHATI</td>
                    </tr>

                    <tr>
                        <td>120</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ANIRUDHA CHAKRABORTY</td>
                        <td>01-08-2023</td>
                        <td>DR. PARIMAL CHANDRA RAY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSING THE POTENTIAL OF RIPARIAN ZONE FOR AVIAN CONSERVATION: INTEGRATING SPECIES
                            DISTRIBUTION
                            MODELLING AND RIPARIAN QUALITY ASSESSMENT ALONG THE BARALIA RIVER, ASSAM, INDIA</td>
                    </tr>

                    <tr>
                        <td>121</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SANGEETA BISWAS</td>
                        <td>01-08-2023</td>
                        <td>DR. PARIMAL CHANDRA RAY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DIVERSITY, MORPHO-MOLECULAR CHARACTERIZATION AND MICROHABITAT SPECIFICITY OF MONOGENEAN
                            PARASITES
                            FROM FISHES OF DEEPOR BEEL, ASSAM, INDIA</td>
                    </tr>

                    <tr>
                        <td>122</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>POMPI DAS</td>
                        <td>02-08-2023</td>
                        <td>DR. BIMALENDU KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>MATHEMATICAL MODELLING BASED ON RHEOLOGICAL FLOW PARAMETERS OF SOME SELECTED UNDERUTILIZED
                            NUTRITIOUS JUICY FRUITS OF NORTH-EASTERN INDIA</td>
                    </tr>

                    <tr>
                        <td>123</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>AIDASHISHA BAREH</td>
                        <td>02-08-2023</td>
                        <td>DR. BORNALI CHETIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPREHENSIVE ANALYSIS OF THE UPPER AND LOWER ATMOSPHERIC REGION DURING DIFFERENT SOLAR EVENTS
                        </td>
                    </tr>

                    <tr>
                        <td>124</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>VIOLINA DAS</td>
                        <td>03-08-2023</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>MODELLING AND SIMULATION OF RAMAN AMPLIFICATION FOR LONG-HAUL OPTICAL COMMUNICATION</td>
                    </tr>

                    <tr>
                        <td>125</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>NEEKITA DUTTA</td>
                        <td>07-08-2023</td>
                        <td>DR. SACHIDULAL BISWAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXTRACTION, CHARACTERIZATION AND UTILIZATION OF EXTRACTED FLAVONOIDS TO DESIGN HETEROGENEOUS
                            CATALYSTS FOR CHEMICAL REACTION</td>
                    </tr>

                    <tr>
                        <td>126</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>JIMPY SAUD</td>
                        <td>08-08-2023</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ROLE OF SUSTAINABLE PRACTICES IN CONSUMER BUYING BEHAVIOUR IN SELECT SERVICE SECTORS: A STUDY IN
                            GUWAHATI CITY</td>
                    </tr>

                    <tr>
                        <td>127</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>VAIBHAV PURANIK</td>
                        <td>09-08-2023</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SOCIAL COGNITION AND SOCIAL–OCCUPATIONAL FUNCTIONING IN SCHIZOPHRENIA: A SOCRATIC-BASED APPROACH
                            (TENTATIVE)</td>
                    </tr>

                    <tr>
                        <td>128</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>KARISMITA MEDHI</td>
                        <td>11-08-2023</td>
                        <td>PROF. (DR.) ANURADHA DEVI</td>
                        <td>PROFESSOR</td>
                        <td>DYNAMIC BEHAVIOUR OF TIME-DEPENDENT VISCOELASTIC FLUID IN DIFFERENT FLOW SCENARIOS INVOLVING
                            INFLUENTIAL FLOW FEATURE PARAMETERS</td>
                    </tr>

                    <tr>
                        <td>129</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>SATAVISHA HAZARIKA</td>
                        <td>14-08-2023</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>TRANSLINGUAL PRACTICES IN ENGLISH LANGUAGE CLASSROOMS: A LONGITUDINAL STUDY OF ITS INFLUENCE IN
                            MIDDLE SCHOOL ENGLISH LEARNERS IN KAMRUP (RURAL) AND DARRANG DISTRICTS OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>130</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BHASWATI BORAH</td>
                        <td>21-08-2023</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>E-BANKING FRAUDS IN INDIA - AN ANALYTICAL STUDY OF ITS PREVENTIVE MEASURES</td>
                    </tr>

                    <tr>
                        <td>131</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>POOJA DEVI</td>
                        <td>21-08-2023</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>OCCUPATIONAL HEALTH & SAFETY LAWS AFFECTING FEMALE TEA GARDEN WORKERS: A CRITICAL ANALYSIS IN
                            ASSAM
                        </td>
                    </tr>

                    <tr>
                        <td>132</td>
                        <td>RSEES</td>
                        <td>ENVIRONMENTAL SCIENCE</td>
                        <td>ROBERT LYNDOH</td>
                        <td>23-08-2023</td>
                        <td>DR. DEMSAI REANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY ON THE SOCIO-ECONOMIC AND LANDSCAPE DYNAMICS IN LIMESTONE MINING AREA OF MEGHALAYA</td>
                    </tr>

                    <tr>
                        <td>133</td>
                        <td>RSEES</td>
                        <td>ENVIRONMENTAL SCIENCE</td>
                        <td>NAPHIBANIARLIN KSFIAR</td>
                        <td>23-08-2023</td>
                        <td>DR. PALLABI BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSING MICROPLASTIC POLLUTION IN FRESHWATER ECOSYSTEMS AT DIFFERENT ALTITUDINAL GRADIENT IN
                            NE
                            INDIA</td>
                    </tr>

                    <tr>
                        <td>134</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>JIREE BASUMATARY</td>
                        <td>31-08-2023</td>
                        <td>DR. ANUSHREE BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFLUENCE OF GREEN MANURING ON PLANT FUNCTIONAL TRAITS AND C-DYNAMICS IN TROPICAL RICE
                            AGROECOSYSTEMS</td>
                    </tr>

                    <tr>
                        <td>135</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>ARJUN BARUAH</td>
                        <td>05-12-2023</td>
                        <td>DR. SHEHNAZ ARA RAHMAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                    <tr>
                        <td>136</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>FLORENCE DAIMARI</td>
                        <td>08-12-2023</td>
                        <td>DR. BIMALENDU KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>A STUDY OF THE UNILATERAL SHIFT OPERATOR ON HILBERT SPACES</td>
                    </tr>

                    <tr>
                        <td>137</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>MARDOR WANRI SYNREM</td>
                        <td>22-12-2023</td>
                        <td>DR. BAPAN KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>PERFORMANCE IN MATHEMATICS AMONG STUDENTS OF HIGHER SECONDARY SCHOOL LEVEL IN MEGHALAYA IN
                            RELATION
                            TO SOME SELECTED VARIABLES</td>
                    </tr>

                    <tr>
                        <td>138</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>TANZIM MASUD</td>
                        <td>23-12-2023</td>
                        <td>PROF. (DR.) SAJAL NAG</td>
                        <td>PROFESSOR</td>
                        <td>CONSTRUCTION OF THE 'MEDIEVAL': EXTERNAL PERCEPTION OF AHOM-ASSAM THROUGH PERSIAN AND EUROPEAN
                            SOURCES (17TH TO 18TH CENTURY)</td>
                    </tr>

                    <tr>
                        <td>139</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>SHARIF AHMED</td>
                        <td>23-12-2023</td>
                        <td>DR. DARSHANA BHAGOWATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY ON BRIDGING THE SKILLS GAP FOR GENERATION Z THROUGH AI-POWERED LEARNING SYSTEMS</td>
                    </tr>

                    <tr>
                        <td>140</td>
                        <td>RSCOM</td>
                        <td>JOURNALISM AND MASS COMMUNICATION</td>
                        <td>ZAKIR HUSSAIN</td>
                        <td>01-01-2024</td>
                        <td>DR. SAILENDRA DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE ALGORITHMIC GATEKEEPER: A COMPARATIVE ANALYSIS OF PROFESSIONAL NEWS VALUES AND SOCIAL MEDIA
                            VIRALITY IN CITIZEN-LED PHOTOJOURNALISM</td>
                    </tr>

                    <tr>
                        <td>141</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BAMERI DONDOR KHARSOHTUN</td>
                        <td>10-01-2024</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>ROLE OF KHADC IN SAFEGUARDING INDIGENOUS RIGHTS: A LEGAL STUDY</td>
                    </tr>

                    <tr>
                        <td>142</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>JEBIN SULTANA</td>
                        <td>12-01-2024</td>
                        <td>DR. PRIYANKA BHATTACHARYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>TO ASSESS THE ROLE OF NUTRITIONAL INTERVENTION TO DELAY THE PROGRESSION OF CHRONIC KIDNEY
                            DISEASE
                            (CKD) AND PREVENT MALNUTRITION</td>
                    </tr>

                    <tr>
                        <td>143</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>UNICE LALRINSIAMKIMI</td>
                        <td>12-01-2024</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>SOCIAL SECURITY SYSTEM AND WELFARE OF TRIBAL WOMEN: A STUDY OF PENSION SCHEMES IN SERCHHIP AND
                            SIAHA
                            DISTRICTS OF MIZORAM</td>
                    </tr>

                    <tr>
                        <td>144</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>ALORIKA DEB</td>
                        <td>13-01-2024</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>FLORICULTURE AS AN ECONOMIC ACTIVITY IN ASSAM: A MULTIDIMENSIONAL ASSESSMENT</td>
                    </tr>

                    <tr>
                        <td>145</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>AYUKHSHYA BARO</td>
                        <td>13-01-2024</td>
                        <td>DR. SHRADDHA BASU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPARATIVE STUDY ON CULTURAL IDENTITY AND PSYCHOLOGICAL WELL-BEING OF OLDER AND YOUNGER
                            GENERATION
                            OF MAJOR ETHNIC TRIBES ORIGINATING FROM NORTH BANK OF BRAHMAPUTRA VALLEY</td>
                    </tr>

                    <tr>
                        <td>146</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>SONIA SAMJETSABAM</td>
                        <td>15-01-2024</td>
                        <td>DR. TRISHNA CHANGKAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AGRICULTURE IN LOKTAK WETLAND OF MANIPUR AND ASSOCIATED ECOLOGICAL AND LIVELIHOOD CHALLENGES
                        </td>
                    </tr>

                    <tr>
                        <td>147</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NEHA VERMA</td>
                        <td>16-01-2024</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>DEEPFAKE AND COPYRIGHT: ANALYZING LEGAL IMPLICATIONS AND REMEDIAL MEASURES</td>
                    </tr>

                    <tr>
                        <td>148</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>SADHANA SHARMA</td>
                        <td>16-01-2024</td>
                        <td>PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>FORMULATION DEVELOPMENT OF NSAIDS WITH PROTEASE AND ANALYTICAL METHOD DEVELOPMENT FOR THEIR
                            SIMULTANEOUS ESTIMATION</td>
                    </tr>

                    <tr>
                        <td>149</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BEAUTY NEOG</td>
                        <td>16-01-2024</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>CONDITIONS OF PRISONS AND REINTEGRATION OF PRISONERS INTO SOCIETY</td>
                    </tr>

                    <tr>
                        <td>150</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>CHETANA HASNU</td>
                        <td>17-01-2024</td>
                        <td>DR. PRATIKSHYA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>STUDY OF DEHYDRATION STRESS ON ROOT ARCHITECTURE DEVELOPMENT IN INDIGENOUS RICE CULTIVARS OF
                            DIMA
                            HASAO DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>151</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>SINJINI SAIKIA</td>
                        <td>17-01-2024</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>WOMEN IN INK: GENDERED NARRATIVES IN COLONIAL ASSAM’S PERIODICAL TRADITION</td>
                    </tr>

                    <tr>
                        <td>152</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>TAJUNGMENLA JAMIR</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                    <tr>
                        <td>153</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>TUHISHA GHOSH</td>
                        <td>17-01-2024</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>NARRATIVES OF TRIUMPH: A STUDY OF SELECT LIFE NARRATIVES OF PERSON WITH DISABILITIES FROM INDIAN
                            SUBCONTINENT</td>
                    </tr>

                    <tr>
                        <td>154</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ABAMEDA GIRI KHARMALKI</td>
                        <td>17-01-2024</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>TRAUMA THROUGH IDENTITY IN HARUKI MURAKAMI'S SELECT NOVELS</td>
                    </tr>

                    <tr>
                        <td>155</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ADITI GHOSH</td>
                        <td>17-01-2024</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>FRAGMENTS OF THE UNSPEAKABLE: A STUDY OF SELECT COMFORT WOMEN FICTION</td>
                    </tr>

                    <tr>
                        <td>156</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>PUJA KUMARI</td>
                        <td>17-01-2024</td>
                        <td>DR. BISALAKSHI SAWARNI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A SOCIOLINGUISTIC STUDY OF SELECT MAITHILI NOVELS OF JAGDISH PRASAD MANDAL</td>
                    </tr>

                    <tr>
                        <td>157</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>PHOWLTHA SELTUN</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) SAJAL NAG</td>
                        <td>PROFESSOR</td>
                        <td>THE ANAL TRIBE OF INDO-MYANMAR FRONTIER: AN ETHNO-HISTORICAL STUDY</td>
                    </tr>

                    <tr>
                        <td>158</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>PUSPA DEORI</td>
                        <td>17-01-2024</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SOCIO-CULTURAL HISTORY OF THE DEORI COMMUNITY OF ASSAM (19TH–20TH CENTURY)</td>
                    </tr>

                    <tr>
                        <td>159</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>RASHMIREKHA HAZARIKA</td>
                        <td>17-01-2024</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>EARLY MATRIARCHAL POLITIES OF CENTRAL ASSAM</td>
                    </tr>

                    <tr>
                        <td>160</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>SUPONGSANGLA LONGCHAR</td>
                        <td>17-01-2024</td>
                        <td>DR. SYED SAJIDUL ISLAM</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ROLE OF THE HOSPITALITY SECTOR IN EMPOWERING WOMEN OF KOHIMA AND DIMAPUR DISTRICTS, NAGALAND
                        </td>
                    </tr>
                    <tr>
                        <td>161</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BONANI MAHANTA</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>A CRITICAL ANALYSIS OF MENTAL HEALTHCARE LAWS IN INDIA</td>
                    </tr>

                    <tr>
                        <td>162</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SATAVISA BORA</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) B. C. BAROOAH</td>
                        <td>PROFESSOR</td>
                        <td>AN ANALYTICAL STUDY OF GREEN CRIMINOLOGY WITH SPECIAL REFERENCE TO AIR POLLUTION IN KAMRUP METRO
                        </td>
                    </tr>

                    <tr>
                        <td>163</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BENZIR ZAMAN</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>A SOCIO-LEGAL STUDY OF MENTAL HEALTH CARE LAWS FOR WOMEN: AN EMPIRICAL ANALYSIS IN ASSAM</td>
                    </tr>

                    <tr>
                        <td>164</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>LOBSANG TENZING KOMU</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) PRANABESH SIKDAR</td>
                        <td>PROFESSOR</td>
                        <td>PHYTOCHEMICAL PROFILING AND ANTI-OBESITY EVALUATION OF SELECTED ALGAE FROM NORTH-EAST INDIA</td>
                    </tr>

                    <tr>
                        <td>165</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>MANISHA NATH</td>
                        <td>17-01-2024</td>
                        <td>DR. SHRADDHA BASU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORING THE RELATIONSHIP BETWEEN ADVERSE CHILDHOOD EXPERIENCES AND POST-TRAUMATIC GROWTH WITH
                            PSYCHOLOGICAL CAPITAL AS A MEDIATOR: A MIXED-METHODS RESEARCH APPROACH</td>
                    </tr>

                    <tr>
                        <td>166</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>HUIDROM INDUMALA</td>
                        <td>17-01-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>THE ROLE OF SELF-EFFICACY AND SELF-ESTEEM ON PSYCHOLOGICAL WELL-BEING AND LIFE SATISFACTION
                            AMONG
                            COLLEGE STUDENTS OF MANIPUR</td>
                    </tr>

                    <tr>
                        <td>167</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>MEDIENO ZHASA</td>
                        <td>17-01-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>THE INFLUENCE OF SMARTPHONE USAGE ON SLEEP, STUDY SKILLS AND PSYCHOLOGICAL WELL-BEING AMONG
                            ADOLESCENT STUDENTS IN KOHIMA, NAGALAND</td>
                    </tr>

                    <tr>
                        <td>168</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ROMILA THOUDAM</td>
                        <td>17-01-2024</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>MODERATING EFFECT OF PARENTING STYLE ON COGNITIVE ABILITIES, SOCIAL COMPETENCE AND BEHAVIOURAL
                            DEVIANCE AMONG ADOLESCENTS OF IMPHAL WEST DISTRICT, MANIPUR</td>
                    </tr>

                    <tr>
                        <td>169</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>SANGITA YAMBEM</td>
                        <td>17-01-2024</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFLUENCE OF SPIRITUAL INTELLIGENCE AND EMOTIONAL INTELLIGENCE ON EUDAIMONIC HAPPINESS AMONG
                            ADOLESCENTS OF IMPHAL EAST AND IMPHAL WEST DISTRICTS OF MANIPUR</td>
                    </tr>

                    <tr>
                        <td>170</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ARPANA R RABHA</td>
                        <td>17-01-2024</td>
                        <td>DR. DHARMESWAR BARHOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF ANTIDIABETIC EFFECT OF ELAEAGNUS LATIFOLIA FRUIT EXTRACT AGAINST HIGH FAT DIET
                            (HFD)
                            AND STREPTOZOTOCIN (STZ) INDUCED TYPE-2 DIABETES MELLITUS IN SWISS ALBINO MICE</td>
                    </tr>

                    <tr>
                        <td>171</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>DIPSANU PAUL</td>
                        <td>17-01-2024</td>
                        <td>DR. DHARMESWAR BARHOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF TRIPHENYLTIN HYDROXIDE INDUCED DEVELOPMENTAL TOXICITY IN CHICK EMBRYO</td>
                    </tr>

                    <tr>
                        <td>172</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SENT BUALGA M MARAK</td>
                        <td>17-01-2024</td>
                        <td>DR. DHARMESWAR BARHOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF AMELIORATIVE POTENTIAL OF MYRICA ESCULENTA FRUIT EXTRACT AGAINST PERFLUOROOCTANOIC
                            ACID INDUCED NON-ALCOHOLIC FATTY LIVER DISEASE IN SWISS ALBINO MICE</td>
                    </tr>

                    <tr>
                        <td>173</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ACHINTYA PRAN HAZARIKA</td>
                        <td>17-01-2024</td>
                        <td>DR. ARVIND DWIVEDI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                    <tr>
                        <td>174</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>UPASHANA GOSWAMI</td>
                        <td>17-01-2024</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>ENFORCEMENT OF RIGHT TO EDUCATION OF CHILDREN WITH INTELLECTUALLY DISABILITIES: A LEGAL STUDY IN
                            THE
                            CONTEXT OF THE DISTRICT OF KAMRUP(M)</td>
                    </tr>

                    <tr>
                        <td>175</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>MOHIT CHOUDHARY</td>
                        <td>17-01-2024</td>
                        <td>DR. RAJDEEP NAG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AN ANALYSIS OF GENERAL INSURANCE PENETRATION IN INDIA: KEY DETERMINANTS, BARRIERS TO ADOPTION,
                            AND
                            DISTRIBUTION DYNAMICS IN ASSAM</td>
                    </tr>

                    <tr>
                        <td>176</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>ANMOL KAUR</td>
                        <td>18-01-2024</td>
                        <td>DR. RUPSIKHA PATOWARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATING THE ROLE OF BIOSURFACTANT PRODUCING BACTERIA ON BISPHENOL-A BIOREMEDIATION</td>
                    </tr>

                    <tr>
                        <td>177</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>PANCHAMI BORPUJARI</td>
                        <td>18-01-2024</td>
                        <td>DR. DEBAJIT BORAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>VALORISATION OF TEA WASTE DERIVED BIOCHAR WITH SELECTED METAL NANOPARTICLES FOR AZO DYE REMOVAL
                            FROM
                            CONTAMINATED WATER</td>
                    </tr>

                    <tr>
                        <td>178</td>
                        <td>RSFA</td>
                        <td>FINE ARTS</td>
                        <td>ANKUR HAZARIKA</td>
                        <td>18-01-2024</td>
                        <td>DR. MOUSUMI DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY OF NEO-VAISHNAVITE WOODEN SCULPTURES: WITH SPECIAL REFERENCE TO BORDOWA, ISWAR HATI AND
                            BARPETA SATRAS</td>
                    </tr>

                    <tr>
                        <td>179</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PRITY GUPTA</td>
                        <td>18-01-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REIMAGINING COPYRIGHT IN THE AGE OF ARTIFICIAL INTELLIGENCE: A LEGAL ANALYSIS OF AUTHORSHIP,
                            OWNERSHIP, AND ORIGINALITY UNDER INDIAN AND COMPARATIVE LAW</td>
                    </tr>

                    <tr>
                        <td>180</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>MONISH KUMAR THAPA</td>
                        <td>18-01-2024</td>
                        <td>DR. PARIMAL CHANDRA RAY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ECOLOGY, DIVERSITY, AND BEHAVIORAL RESPONSES OF AMPHIBIANS TO LINEAR INFRASTRUCTURE IN ASSAM,
                            INDIA
                        </td>
                    </tr>
                    <tr>
                        <td>181</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>PRIYANKU BORAH</td>
                        <td>18-01-2024</td>
                        <td>DR. ARVIND DWIVEDI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF BIOMAGNIFICATION OF HEAVY METALS ACROSS PREY-PREDATOR TROPHIC LEVELS OF RAMSAR
                            WETLAND, ASSAM</td>
                    </tr>

                    <tr>
                        <td>182</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>JULIE BORAH</td>
                        <td>20-01-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>INFLUENCE OF CAREGIVERS' EMPATHY ON LIFE SKILL ACQUISITION, HEALTH STATUS, AND BEHAVIORAL ISSUES
                            OF
                            ADOLESCENT GIRLS ENROLLED IN SCHOOL AND RESIDING IN CHILD CARE INSTITUTIONS IN K(M)</td>
                    </tr>

                    <tr>
                        <td>183</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>SUMI BARMAN</td>
                        <td>23-01-2024</td>
                        <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                        <td>PROFESSOR</td>
                        <td>EVALUATION OF STANDARDIZED AYURVEDIC FORMULATION WITH NEUROPROTECTIVE ACTIVITY</td>
                    </tr>

                    <tr>
                        <td>184</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>PRIYANKA DAS</td>
                        <td>23-01-2024</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>OPTIMIZATION OF SOLID LIPID NANOPARTICLES OF ANTI-MIGRAINE DRUGS AND ITS BRAIN DELIVERY VIA
                            NASAL
                            IN-SITU GEL FORMULATIONS FOR ENHANCED BIOAVAILABILITY</td>
                    </tr>

                    <tr>
                        <td>185</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>BHITALI BARKAKATI</td>
                        <td>23-01-2024</td>
                        <td>DR. ABESH CHAKRABORTY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF ARTIFICIAL LIGHT POLLUTION ON TAXONOMIC DIVERSITY AND COMMUNITY STRUCTURE OF HAWKMOTHS
                            (LEPIDOPTERA: SPHINGIDAE) IN GUWAHATI, ASSAM, INDIA</td>
                    </tr>

                    <tr>
                        <td>186</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>KRISHNAA BORO</td>
                        <td>23-01-2024</td>
                        <td>DR. ABESH CHAKRABORTY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>CARBON SEQUESTRATION POTENTIAL OF DOMINANT GASTROPOD SPECIES IN UDALGURI DISTRICT, ASSAM</td>
                    </tr>

                    <tr>
                        <td>187</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>FREDDIE KHAWLHRING</td>
                        <td>24-01-2024</td>
                        <td>DR. BISHNU KUMARI GURUNG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>TRANSFORMATION OF LUSEI TRIBE UNDER THE COLONIAL RULE WITH SPECIAL REFERENCE TO FUNERARY RITES
                            (1890–1947)</td>
                    </tr>

                    <tr>
                        <td>188</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RAJASHRI HAZARIKA</td>
                        <td>25-01-2024</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>THE ROLE OF CHILDCARE INSTITUTIONS IN PROTECTING CHILD RIGHTS UNDER THE JUVENILE JUSTICE SYSTEM:
                            A
                            SOCIO-LEGAL STUDY IN JORHAT AND DIBRUGARH DISTRICTS OF ASSAM</td>
                    </tr>

                    <tr>
                        <td>189</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>KARISHMA AZIZ</td>
                        <td>29-01-2024</td>
                        <td>DR. SYED SAJIDUL ISLAM</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>EXPLORING THE OPPORTUNITIES AND CHALLENGES OF TEA TOURISM IN ASSAM WITH SPECIAL REFERENCE TO
                            DIBRUGARH AND JORHAT DISTRICTS</td>
                    </tr>

                    <tr>
                        <td>190</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>JAYSHREE SHARMA</td>
                        <td>30-01-2024</td>
                        <td>DR. MEGHNA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A COMPARATIVE STUDY OF SECULARISM IN THE CONSTITUTIONS OF INDIA AND FRANCE</td>
                    </tr>

                    <tr>
                        <td>191</td>
                        <td>RSCOM</td>
                        <td>JOURNALISM AND MASS COMMUNICATION</td>
                        <td>BRISTI GOGOI</td>
                        <td>31-01-2024</td>
                        <td>DR. FLORANCE HANDIQUE RABHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>NAVIGATING IDENTITY POLITICS: AN ANALYSIS OF GOVERNMENT PUBLIC RELATIONS STRATEGIES IN ASSAM
                        </td>
                    </tr>

                    <tr>
                        <td>192</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SHRUTI HAZARIKA BORPUJARI</td>
                        <td>31-01-2024</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>INTEGRATING INDIGENOUS FOREST GOVERNANCE IN ASSAM: BALANCING TRADITIONAL PRACTICES WITH LEGAL
                            FRAMEWORK</td>
                    </tr>

                    <tr>
                        <td>193</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SRISTI AGARWAL</td>
                        <td>31-01-2024</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>A CRITICAL APPROACH ON GOODS AND SERVICES TAX AND ITS IMPACT ON INDIAN ECONOMY: SPECIAL
                            REFERENCE TO
                            ASSAM</td>
                    </tr>

                    <tr>
                        <td>194</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BRANDON MESHAN PAJAT</td>
                        <td>24-02-2024</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ANALYSING THE IMPACT OF MOTOR VEHICLE EMISSIONS ON URBAN AIR QUALITY: A COMPREHENSIVE ANALYSIS
                            OF
                            EMISSION CHARACTERISTICS, HEALTH EFFECTS AND MITIGATION STRATEGIES</td>
                    </tr>

                    <tr>
                        <td>195</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>NEELAKSHI SHARMA</td>
                        <td>07-05-2024</td>
                        <td>PROF. (DR.) BIPUL NATH</td>
                        <td>PROFESSOR</td>
                        <td>DEVELOPMENT AND EVALUATION OF A NOVEL POLYHERBAL FORMULATION WITH CONVENTIONAL ANTIBIOTIC FOR
                            ENHANCED ANTIMICROBIAL EFFICACY</td>
                    </tr>

                    <tr>
                        <td>196</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>NAZVI NASEEM</td>
                        <td>23-05-2024</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>JOB SATISFACTION OF PRIVATE SECTOR EMPLOYEES OF MANUFACTURING FIRM IN PALASHBARI AREA</td>
                    </tr>

                    <tr>
                        <td>197</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>BRISTY SRIVASTAVA</td>
                        <td>27-05-2024</td>
                        <td>PROF. (DR.) GEORGE AP</td>
                        <td>PROFESSOR</td>
                        <td>IMPACT OF DIVERSITY, EQUITY, INCLUSIVENESS & BELONGINGNESS ON ORGANIZATION PERFORMANCE – AN
                            INDIAN
                            B2C E-COMMERCE INDUSTRY PERSPECTIVE</td>
                    </tr>

                    <tr>
                        <td>198</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SUMITRA DEVI</td>
                        <td>01-06-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>JUDICIAL DIGITIZATION, E-COURTS AND DATA PRIVACY: A COMPARATIVE STUDY OF INDIA, UK AND EUROPEAN
                            UNION</td>
                    </tr>

                    <tr>
                        <td>199</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>NABADEEPA KALITA</td>
                        <td>05-06-2024</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>DIGITAL MARKETING AND CONSUMER DECISION MAKING: THE IMPACT OF CULTURAL AND ECONOMIC FACTORS IN
                            KAMRUP METRO</td>
                    </tr>

                    <tr>
                        <td>200</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>P SUCHITRA SINGHA</td>
                        <td>11-06-2024</td>
                        <td>DR. UPASNA CHETTRY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>MICRORNA MEDIATED REGULATION OF ANTHOCYANIN BIOSYNTHETIC PATHWAY IN BLACK RICE (CHAKHAO
                            POIREITON)
                        </td>
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DIPSHIKHA ROY CHOWDHURY</td>
                        <td>11-06-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RASHMI REKHA SAIKIA</td>
                        <td>11-06-2024</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>KANKANA CHOUDHURY</td>
                        <td>11-06-2024</td>
                        <td>DR. SAIF RASUL KHAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SHANGKY KHONGWAR</td>
                        <td>12-06-2024</td>
                        <td>DR. Y MONOJIT SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INDIA'S SECURITY AND TRADE ENGAGEMENT WITH MYANMAR: CONTINUITY AND CHANGE FROM LOOK EAST TO ACT
                            EAST
                            POLICIES BETWEEN 2004 AND 2024</td>
                    </tr>
                    <tr>
                        <td>205</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>JINI RANI BORO</td>
                        <td>13-06-2024</td>
                        <td>DR. SUSHMITA BANERJEE</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>WOMEN IN PUBLIC LIFE: A STUDY OF BRAHMAPUTRA VALLEY (1900-1947)</td>
                    </tr>
                    <tr>
                        <td>206</td>
                        <td>RSET</td>
                        <td>COMPUTER SCIENCE AND ENGINEERING</td>
                        <td>DHARITRI TALUKDAR</td>
                        <td>14-06-2024</td>
                        <td>PROF. (DR.) RASHEL SARKAR</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>207</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SHRISTI TODI</td>
                        <td>24-06-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>AN ANALYSIS OF THE DOCTRINE OF RAREST OF RARE CASE IN AWARDING DEATH PENALTY VIS-À-VIS JUDICIAL
                            DISCRETION</td>
                    </tr>
                    <tr>
                        <td>208</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BIMAN NATH</td>
                        <td>25-06-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>A CRITICAL ANALYSIS OF ACCESS TO JUSTICE THROUGH FREE LEGAL AID WITH SPECIAL REFERENCE IN
                            GUWAHATI
                            ,ASSAM</td>
                    </tr>
                    <tr>
                        <td>209</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>MONISHA BORDOLOI</td>
                        <td>25-06-2024</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ROLE OF BODO SAHITYA SABHA AND ALL BODO STUDENTS UNION IN CONSTRUCTION OF BODO IDENTITY AND
                            CULTURAL
                            PRESERVATION</td>
                    </tr>
                    <tr>
                        <td>210</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>CHANCHI R MARAK</td>
                        <td>26-06-2024</td>
                        <td>DR. SANGHAMITRA HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>CASH CROP POTENTIAL IN WEST GARO HILLS</td>
                    </tr>
                    <tr>
                        <td>211</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>MANABENDRA BARMAN</td>
                        <td>26-06-2024</td>
                        <td>DR. AMIT KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AN ANALYSIS OF SOCIO-ECONOMIC STATUS OF WOMEN: PARTICIPANTS AND NON-PARTICIPANTS OF SELF-HELP
                            GROUPS
                            IN BAKSA DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>212</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>MAHFUZ AHMED</td>
                        <td>26-06-2024</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ECO-DISPLACEMENT AND ECOCENTRIC POSTHUMANISM IN SELECT 21ST CENTURY CLIMATE FICTION</td>
                    </tr>
                    <tr>
                        <td>213</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>KONGKINA NATH</td>
                        <td>26-06-2024</td>
                        <td>DR. MUKUTOR RAHMAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>UTILIZATION OF LIBRARY 2.0 FOR ENHANCING LIBRARY SERVICES : A STUDY OF THE CENTRAL GOVERNMENT
                            HIGHER
                            INSTITUTES OF NORTHEAST INDIA</td>
                    </tr>
                    <tr>
                        <td>214</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>PRASANNA KUMAR KONCH</td>
                        <td>26-06-2024</td>
                        <td>DR. HIRAK JYOTI HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE ROLE OF ALTMETRICS IN CAPTURING THE DYNAMIC INFLUENCE OF AI RESEARCH</td>
                    </tr>
                    <tr>
                        <td>215</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>MERINA AHMED</td>
                        <td>26-06-2024</td>
                        <td>DR. MUKUTOR RAHMAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFORMATION LITERACY USING SOCIAL MEDIA TOOLS: A STUDY OF THE PROVINCIALISED COLLEGES IN KAMRUP
                            METRO DISTRICT</td>
                    </tr>
                    <tr>
                        <td>216</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>BHAGABATI NARZARY</td>
                        <td>26-06-2024</td>
                        <td>DR. MUKUTOR RAHMAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>TRANSFORMING DIGITAL LITERACY SKILLS THROUGH ACADEMIC LIBRARIES AMONG UNDERGRADUATE STUDENTS IN
                            BODOLAND TERRITORIAL REGION</td>
                    </tr>
                    <tr>
                        <td>217</td>
                        <td>CISR</td>
                        <td>PSYCHOLOGY</td>
                        <td>KANGKANA TALUKDAR</td>
                        <td>26-06-2024</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF RESILIENCE AND POST TRAUMATIC GROWTH ON POST TRAUMATIC STRESS SYMPTOMS AMONG DIAGNOSED
                            POST MASTECTOMY INSTITUTIONALIZED BREAST CANCER PATIENTS OF GUWAHATI</td>
                    </tr>
                    <tr>
                        <td>218</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ANWESHA CHUTIA</td>
                        <td>26-06-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>PSYCHOLOGICAL DISTRESS OF RHEUMATOID ARTHRITIS AND OSTEOARTHRITIS IN THE LIVES OF PEOPLE IN
                            UPPER
                            ASSAM: AN INTERVENTION STUDY</td>
                    </tr>
                    <tr>
                        <td>219</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>NZANRHONI PATTON</td>
                        <td>26-06-2024</td>
                        <td>DR. SHRADDHA BASU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PERSONALITY, SLEEP QUALITY, COPING MECHANISM, SLEEP QUALITY AND LIVED EXPERIENCES OF POLICE
                            PERSONNEL.</td>
                    </tr>
                    <tr>
                        <td>220</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>RENGKA TIMUNGPI</td>
                        <td>26-06-2024</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>221</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY/CLINICAL</td>
                        <td>ANKUR BARMAN</td>
                        <td>26-06-2024</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>FLOURISHING AMONG OLDER ADULTS : THE ROLE OF EGO INTEGRITY, EXISTENTIAL WELL-BEING AND QUALITY
                            OF
                            LIFE</td>
                    </tr>
                    <tr>
                        <td>222</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>DEEPSHIKHA KALITA</td>
                        <td>27-06-2024</td>
                        <td>DR. SANGHAMITRA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>AN ANALYSIS OF THE SOCIO-ECONOMIC STATUS OF WOMEN IN THE FORMAL SECTOR IN THE URBAN AREAS OF
                            KAMRUP
                            (METRO) IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>223</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>BIKASHITA SAIKIA</td>
                        <td>27-06-2024</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>RELIGIOUS SYNCRETISM IN THE STATE RELIGION OF THE AHOM KINGDOM: A HISTORICAL STUDY</td>
                    </tr>
                    <tr>
                        <td>224</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SARMISTHA CHAKRABARTY</td>
                        <td>27-06-2024</td>
                        <td>DR. JAHNAVI BHANDARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A CRITICAL APPRAISAL OF THE LAW DEALING WITH SECURITY THREATS IN ONLINE FINANCIAL TRANSACTIONS
                            IN
                            INDIA</td>
                    </tr>
                    <tr>
                        <td>225</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>ARPAN SEN</td>
                        <td>27-06-2024</td>
                        <td>PROF. (DR.) PRITHVIRAJ CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>POTENTIALITY OF NOVEL PH-RESPONSIVE IPN STRUCTURED HYDROGEL BEADS OF MODIFIED NATURAL GUM FOR
                            GASTRO
                            PROTECTIVE DRUG DELIVERY SYSTEM</td>
                    </tr>
                    <tr>
                        <td>226</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>MOIRANGTHEM JINA CHANU</td>
                        <td>28-06-2024</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>FINNACIAL LITERACY, SAVING PATTERNS, AND INVESTMENT CHOICES: A STUDY ON GOVERNMENT COLLEGE
                            TEACHERS
                            IN MANIPUR</td>
                    </tr>
                    <tr>
                        <td>227</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>BEENA RONGPIPI</td>
                        <td>28-06-2024</td>
                        <td>DR. ARUNA DEV ROY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>AN ECONOMIC ANALYSIS OF WOMEN EMPOWERMENT THROUGH MICRO-ENTERPROSE: A STUDY ON KARBI WOMEN MICRO
                            ENTREPRENEURS OF KARBI ANGLONG DISTRICT OF ASSAM</td>
                    </tr>
                    <tr>
                        <td>228</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>K LENANGH ANGH</td>
                        <td>28-06-2024</td>
                        <td>DR. SANGHAMITRA HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INDIGENOUS JHUM FARMING PRACTICES AND THEIR CONTRIBUTION TO HOUSEHOLD LIVELIHOODS AND ECONOMIC
                            GROWTH IN EASTERN NAGALAND.</td>
                    </tr>
                    <tr>
                        <td>229</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>RT SHANGWARHRING</td>
                        <td>28-06-2024</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REPRESENTATIONS OF INDIGENOUS CULTURAL IDENTITY IN SELECT NARRATIVES OF ANAL TRIBE OF MANIPUR
                        </td>
                    </tr>
                    <tr>
                        <td>230</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>BANTI TALUKDAR</td>
                        <td>28-06-2024</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SACRED SITES IN WESTERN ASSAM: A STUDY IN ANTIQUITY, FORM AND STRUCTURE</td>
                    </tr>
                    <tr>
                        <td>231</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>OINAM MITRABATI DEVI</td>
                        <td>28-06-2024</td>
                        <td>DR. BHUPALI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A SOCIO-LEGAL STUDY ON CYBERCRIME WITH SPECIAL REFERENCE TO ONLINE FINANCIAL FRAUD IN MANIPUR,
                            INDIA
                        </td>
                    </tr>
                    <tr>
                        <td>232</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PRIYANGSHU GOSWAMI</td>
                        <td>28-06-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>AN ANALYTICAL STUDY OF LEGAL PRINCIPLES IN KAUTILYA’S ARTHASHASTRA: A CONTEMPORARY PERSPECTIVE
                        </td>
                    </tr>
                    <tr>
                        <td>233</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PURBA GOSWAMI</td>
                        <td>28-06-2024</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>METAVERSE AND CRIMINAL LIABILITY: EXPLORING NEW PARADIGMS IN DIGITAL LAW</td>
                    </tr>
                    <tr>
                        <td>234</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>SABNAM NARGIS</td>
                        <td>28-06-2024</td>
                        <td>PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>DESIGN, SYNTHESIS, AND BIOLOGICAL EVALUATION OF NOVEL TRIAZINE HYBRIDS: AN IN SILICO AND
                            EXPERIMENTAL APPROACH.</td>
                    </tr>
                    <tr>
                        <td>235</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>RAKIBUR RAHMAN</td>
                        <td>28-06-2024</td>
                        <td>PROF. (DR.) PRANABESH SIKDAR</td>
                        <td>PROFESSOR</td>
                        <td>ASSESSMENT OF DRUG RELATED PROBLEMS IN INTERNAL MEDICINE CARE AT TERTIARY CARE HOSPITALS IN
                            GUWAHATI
                            ASSAM: A PROSPECTIVE OBSERVATIONAL STUDY</td>
                    </tr>
                    <tr>
                        <td>236</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>SHUBHANGI BHAGAWATI</td>
                        <td>28-06-2024</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE ROLE OF LONELINESS, MEANING IN LIFE AND SLEEP QUALITY IN BEDTIME PROCRASTINATION AMONG YOUNG
                            ADULTS LIVING AWAY FROM HOME IN GUWAHATI, ASSAM</td>
                    </tr>
                    <tr>
                        <td>237</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>C.LALNUNPUII</td>
                        <td>29-06-2024</td>
                        <td>DR. RADHIKA SHARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>238</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>PRANITA KALITA</td>
                        <td>29-06-2024</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REPRESENTATION OF CULTURAL MEMORY IN SELECT FICTION FROM ASSAM</td>
                    </tr>
                    <tr>
                        <td>239</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>BIKRAMADITYA BARMAN</td>
                        <td>29-06-2024</td>
                        <td>DR. MUKUTOR RAHMAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>BIBLIOMETRIC STUDY ON CANCER STEM CELL(CSCS): A CASE STUDY ON SCOPUS DATABASE DURING 2014-2024
                        </td>
                    </tr>
                    <tr>
                        <td>240</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>SUSHMITA KONJENGBAM</td>
                        <td>29-06-2024</td>
                        <td>DR. RISHI CHAKRAVARTY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CHALLENGES IN ADOPTING A SUSTAINABLE FRAMEWORK MODEL FOR FOSTERING CREATIVE INNOVATION IN THE
                            HANDLOOM INDUSTRY OF ASSAM AND MANIPUR: A STUDY WITH REFERENCE TO SUALKUCHI AND THOUBAL CLUSTER
                        </td>
                    </tr>
                    <tr>
                        <td>241</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>HIMANGSHU SHEKHAR BORA</td>
                        <td>30-06-2024</td>
                        <td>DR. MIR K CHOWDHARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>NATIONALIST MOVEMENT IN KALIABOR SUB-DIVISION (1920-1942)</td>
                    </tr>
                    <tr>
                        <td>242</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>JONEY LALNUNPUII PACHUAU</td>
                        <td>01-07-2024</td>
                        <td>DR. SANDIPTA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>243</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>GITANJALI KALITA</td>
                        <td>01-07-2024</td>
                        <td>DR. PRATIKSHYA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>244</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>ANANYA BANIK</td>
                        <td>01-07-2024</td>
                        <td>DR. RAJDEEP NAG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>FINANCIAL RESILIENCE AMONG WOMEN WORKERS IN UNORGANIZED SECTOR</td>
                    </tr>
                    <tr>
                        <td>245</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>BHASKAR KOUSHIK DAS</td>
                        <td>01-07-2024</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>URBAN DYSTOPIAS, LIQUID MODERNITY AND PHENOMENOLOGY OF SPACE IN SELECT TWENTY-FIRST CENTURY
                            DYSTOPIAN FICTION</td>
                    </tr>
                    <tr>
                        <td>246</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>GITALI HAZARIKA</td>
                        <td>01-07-2024</td>
                        <td>DR. ANNESHA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>GROWTH OF SMALL TEA GROWERS IN ASSAM AND ASSOCIATED SUSTAINABILITY CHALLENGES : A CASE STUDY OF
                            BISWANATH DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>247</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>ROTHANGLIANA</td>
                        <td>01-07-2024</td>
                        <td>PROF. (DR.) SAJAL NAG</td>
                        <td>PROFESSOR</td>
                        <td>THE ABOLITION OF CHIEFTAINSHIP IN MIZORAM: AN ANALYSIS OF ITS IMPACT ON THE MIZO SOCIETY</td>
                    </tr>
                    <tr>
                        <td>248</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>NEEKITA DAOLAGUPU</td>
                        <td>01-07-2024</td>
                        <td>DR. INDRAJIT DUTTA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>COMMUNITY BASED TOURISM: A STUDY ON THE POTENTIAL OF TOURISM IN DIMA HASAO DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>249</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>KUNTAL KALITA</td>
                        <td>01-07-2024</td>
                        <td>DR. INDRAJIT DUTTA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SUSTAINABLE TOURISM AND COMMUNITY RESILIENCE IN MAJULI ISLAND, ASSAM, INDIA: STRATEGIES FOR
                            INCLUSIVE DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td>250</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MANISHA BORTHAKUR</td>
                        <td>01-07-2024</td>
                        <td>PROF. (DR.) H. C. NATH</td>
                        <td>PROFESSOR</td>
                        <td>GENDER NEUTRAL DOMESTIC VIOLENCE LAW ADDRESS TO THE MALE GENDER</td>
                    </tr>
                    <tr>
                        <td>251</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>RIMA DAS</td>
                        <td>01-07-2024</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>LEADING ACROSS BORDERS- A CULTURAL INTELLIGENCE BASED STUDY OF NORTH AMERICAN BUSINESS LEADERS
                            EXPERIENCE WITH INDIA</td>
                    </tr>
                    <tr>
                        <td>252</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>NIHARIKA GOGOI</td>
                        <td>01-07-2024</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>ENERGY SECURITY</td>
                    </tr>
                    <tr>
                        <td>253</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>NANCY PANGEIJAM</td>
                        <td>02-07-2024</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>POSTMODERN REWRITING AND GENDER IN SELECT NOVELS OF KAVITA KANÉ</td>
                    </tr>
                    <tr>
                        <td>254</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>UTTAM BORAH</td>
                        <td>02-07-2024</td>
                        <td>DR. ARPEE SAIKIA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>STUDY ON WORK LIFE BALANCE OF WORKING WOMEN IN HEALTH CARE ORGANISATION (HCO) IN ITANAGAR</td>
                    </tr>
                    <tr>
                        <td>255</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>MOON MOON AHMED</td>
                        <td>02-07-2024</td>
                        <td>DR. BAIARBHA MASSAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INSTITUTIONAL GERIATRIC CARE: A CASE STUDY IN GUWAHATI CITY</td>
                    </tr>
                    <tr>
                        <td>256</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>KUMAR KRITARTHA KAUSHIK</td>
                        <td>02-07-2024</td>
                        <td>DR. MANDIRA BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ISOLATION AND CHARACTERIZATION OF CELLULOSE DEGRADING BACTERIA FROM THE FECES OF PATI DUCK (ANAS
                            PLATYRHYNCHOS DOMESTICUS L.) AND ITS APPLICATION IN BIOCHAR DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td>257</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>PREETY SHAH ZIYA</td>
                        <td>05-07-2024</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>PROSPECTS OF MUSHROOM CULTIVATION: AN ECONOMIC PRESPECTIVE OF KAMRUP DISTRICT</td>
                    </tr>
                    <tr>
                        <td>258</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>OINDRILA ROY CHOWDHURY</td>
                        <td>06-07-2024</td>
                        <td>DR. BAPAN KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ARTIFICIAL INTELLIGENCE FOR PREDICTING DISEASE PROGRESSION AND RISK STRATIFICATION</td>
                    </tr>
                    <tr>
                        <td>259</td>
                        <td>CISR</td>
                        <td>MANAGEMENT</td>
                        <td>RASHMIREKHA BORAH</td>
                        <td>10-07-2024</td>
                        <td>DR. RISHI CHAKRAVARTY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>IMPACT OF NURSES EMOTIONAL INTELLIGENCE ON PROFESSIONAL OUTCOME</td>
                    </tr>
                    <tr>
                        <td>260</td>
                        <td>CISR</td>
                        <td>MANAGEMENT</td>
                        <td>ANKITA SARMA</td>
                        <td>10-07-2024</td>
                        <td>PROF. (DR.) D.N. SINGH</td>
                        <td>PROFESSOR</td>
                        <td>IMPACT OF INTER PROFESSIONAL COMMUNICATION AND TEAM DYNAMICS ON PATIENT OUTCOMES IN SELECTED
                            HOSPITALS OF GUWAHATI</td>
                    </tr>

                    <tr>
                        <td>261</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RANI CHYRMANG</td>
                        <td>17-07-2024</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ARTIFICIAL INTELLIGENCE IN HEALTHCARE SYSTEM: A SOCIO LEGAL STUDY IN JAINTIA HILLS DISTRICT,
                            MEGHALAYA</td>
                    </tr>
                    <tr>
                        <td>262</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>CARLOS NONGSIEJ</td>
                        <td>17-07-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>REGULATING FAIR PLAY: AN ANALYTICAL STUDY OF INDIA’S ANTI-DOPING LAWS AND ITS IMPLICATION WITH
                            SPECIAL REFERENCE TO MEGHALAYA</td>
                    </tr>
                    <tr>
                        <td>263</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>MRIDULA KALITA</td>
                        <td>25-07-2024</td>
                        <td>DR. ANNESHA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EMPOWERING WOMEN THROUGH SELF HELP GROUP IN BODOLAND TERRITORIAL REGION: AN EVALUATIVE STUDY
                        </td>
                    </tr>
                    <tr>
                        <td>264</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>JURI DEKA</td>
                        <td>25-07-2024</td>
                        <td>DR. SUSHMITA BANERJEE</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORING THE GROWTH OF RSS IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>265</td>
                        <td>CISR</td>
                        <td>RADIOGRAPHY AND ADVANCED IMAGING TECHNOLOGY</td>
                        <td>MAYURI OJAH</td>
                        <td>26-07-2024</td>
                        <td>DR. PRIYANKA BHATTACHARYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>CORRELATION OF SONO-MAMMOGRAPHY FINDINGS WITH HISTOPATHOLOGICAL DIAGNOSIS IN BREAST CANCER
                            PATIENTS
                            OF KAMRUP DISTRICT</td>
                    </tr>
                    <tr>
                        <td>266</td>
                        <td>RSMAS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>SOMYATA CHITARANJAN SATPATHY SARMA</td>
                        <td>26-07-2024</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>EFFECTIVENESS OF PHYSIOTHERAPY INTERVENTION ON VARIOUS HEALTH OUTCOMES OF YOUNG FEMALES
                            DIAGNOSED
                            WITH POLYCYSTIC OVARIAN SYNDROME</td>
                    </tr>
                    <tr>
                        <td>267</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>MANASHI NATH</td>
                        <td>26-07-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>EXPLORING THE INFLUENCE OF PERCEIVED FAMILY SUPPORT AND SPIRITUAL WELL-BEING IN PSYCHOLOGICAL
                            DISTRESS AMONG INSTITUTIONALIZED CANCER PATIENTS IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>268</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>JOYEETA RAJKHOWA</td>
                        <td>05-08-2024</td>
                        <td>DR. JAHNAVI BHANDARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE CONSUMER GRIEVANCE REDRESS SYSTEM IN DIGITAL MARKET IN INDIA: AN ANALYTICAL STUDY</td>
                    </tr>
                    <tr>
                        <td>269</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SRIJANI HAZARIKA</td>
                        <td>06-08-2024</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>EFFECTIVENESS OF AYUSHMAN BHARAT-PRADHAN MANTRI-JAN AROGYA YOJANA IN CASE OF VULNERABLE
                            COMMUNITIES
                            OF ASSAM WITH SPECIAL REFERENCE TO TEA TRIBES, SCHEDULED TRIBES (PLAINS) AND CHAR AREA DWELLERS:
                            AN
                            ASSESSMENT</td>
                    </tr>
                    <tr>
                        <td>270</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>STEFFINA BEYTI</td>
                        <td>24-08-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>THE ROLE OF PARENTAL SUPPORT IN SHAPING PERCEIVED BODY IMAGE, PSYCHOLOGICAL WELL BEING AND
                            CAREER-RELATED BEHAVIOUR AMONG YOUNG ADULTS IN KARBI ANGLONG DISTRICT</td>
                    </tr>
                    <tr>
                        <td>271</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>KRISTI SAIKIA</td>
                        <td>26-09-2024</td>
                        <td>DR. PRIYANKA PATOWARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SCOPE OF SCHOOL SOCIAL WORK IN PREVENTION OF SCHOOL DROP-OUT: A STUDY IN THE SECONDARY SCHOOLS
                            OF
                            ASSAM</td>
                    </tr>
                    <tr>
                        <td>272</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>PARAMJYOTI ADHIKARY</td>
                        <td>06-12-2024</td>
                        <td>PROF. (DR.) ATANU BHATTACHARJEE</td>
                        <td>PROFESSOR</td>
                        <td>NANOSOME MEDIATED BRAIN TARGETING OF MEDHA-RASAYANA HERB FOR A NEURODEGENERATIVE DISORDER
                            PROPHYLAXIS</td>
                    </tr>
                    <tr>
                        <td>273</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>KENEISENUO RUTSA</td>
                        <td>12-12-2024</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>SEX WORK, CUSTOMARY LAW AND CONSTITUTIONAL MORALITY: NAVIGATING REGULATIONS WITH SPECIAL
                            REFERENCE
                            TO DIMAPUR DISTRICT, NAGALAND</td>
                    </tr>
                    <tr>
                        <td>274</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>BALITA SIANGSHAI</td>
                        <td>14-12-2024</td>
                        <td>DR. PRIYANKA PATOWARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSING HEALTH VULNERABILITIES AND LEGAL ACCESS AMONG FEMALE SEX WORKERS, MEGHALAYA</td>
                    </tr>
                    <tr>
                        <td>275</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>DIPANJALI DAS</td>
                        <td>19-12-2024</td>
                        <td>DR. PRIYANKA BHATTACHARYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ANTIDIABETIC POTENTIAL OF DIETARY FIBRE FROM DILLENIA INDIA (OUTENGA)</td>
                    </tr>
                    <tr>
                        <td>276</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MANISHA DEKA</td>
                        <td>19-12-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>EDITORIAL INDEPENDENCE IN INDIA: A CONSTITUTIONAL AND LEGAL ANALYSIS IN THE DIGITAL ERA</td>
                    </tr>
                    <tr>
                        <td>277</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NIMISHA SHARMA</td>
                        <td>19-12-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CYBER RISKS TO CHILDREN: A SOCIO-LEGAL ANALYSIS OF ONLINE SAFETY AND LEGAL PROTECTION MECHANISMS
                            IN
                            INDIA</td>
                    </tr>
                    <tr>
                        <td>278</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ANISHA HAQUE</td>
                        <td>19-12-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>DIGITAL DNA: ADMISSIBILITY, AUTHENTICATION AND CHALLENGES WITH SPECIAL REFERENCE TO BHARATIYA
                            SAKSHYA ADHINIYAM</td>
                    </tr>
                    <tr>
                        <td>279</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>JOSEPHINE H.M.</td>
                        <td>19-12-2024</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>ROLE AND CHALLENGES OF THE AUTONOMOUS DISTRICT COUNCIL IN SENAPATI DISTRICT, MANIPUR:
                            GOVERNANCE,
                            AUTONOMY, AND DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td>280</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>BAIBHAVI BHAVNA</td>
                        <td>19-12-2024</td>
                        <td>DR. BAIARBHA MASSAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORING THE NARRATIVES OF STREET-CONNECTED CHILDREN IN GUWAHATI: UNDERSTANDING ROLE OF
                            NON-FORMAL
                            EDUCATION</td>
                    </tr>

                    <tr>
                        <td>281</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>BIRINCHI BORAH</td>
                        <td>19-12-2024</td>
                        <td>DR. PRIYANKA PATOWARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>282</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>NAOREM KELVISH SINGH</td>
                        <td>19-12-2024</td>
                        <td>DR. PRIYANKA PATOWARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>YOUTH NAVIGATING MANIPUR'S CONFLICT: A SOCIAL WORK PERSPECTIVE</td>
                    </tr>
                    <tr>
                        <td>283</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>JENIFAR SABNAM</td>
                        <td>19-12-2024</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>LITERATURE AS WITNESS: TRAUMA, MEMORY, AND GRIEF IN HAN KANG'S SELECT NOVELS</td>
                    </tr>
                    <tr>
                        <td>284</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>NIJWM BASUMATARY</td>
                        <td>19-12-2024</td>
                        <td>PROF. (DR.) BORNALI BHUYAN</td>
                        <td>PROFESSOR</td>
                        <td>NARRATIVES OF TRAUMA, IDENTITY, AND RESISTANCE: INSURGENCY AND ITS IMPACT ON BODO SOCIETY IN
                            SELECT
                            BODO NOVELS</td>
                    </tr>
                    <tr>
                        <td>285</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>HIMTRINA RABHA</td>
                        <td>20-12-2024</td>
                        <td>PROF. (DR.) INDRANI SINGH RAI</td>
                        <td>PROFESSOR</td>
                        <td>FOOD AND ECOLOGY IN SELECT ASSAMESE FICTION: LITERARY REPRESENTATIONS OF CULINARY CULTURES OF
                            ASSAM
                        </td>
                    </tr>
                    <tr>
                        <td>286</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>TANZINA FIRDOUSHI BORBHUYAN</td>
                        <td>21-12-2024</td>
                        <td>DR. BIPLOB BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ORGANIC CHEMISTRY</td>
                    </tr>
                    <tr>
                        <td>287</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>RT STARTHRING</td>
                        <td>21-12-2024</td>
                        <td>DR. BIPLOB BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ORGANIC CHEMISTRY</td>
                    </tr>
                    <tr>
                        <td>288</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DIANA TRICIA TLANG</td>
                        <td>21-12-2024</td>
                        <td>DR. BHUPALI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A SOCIO-LEGAL STUDY ON DOMESTIC CHILD LABOUR IN INDIA WITH SPECIFIC REFERENCE TO JAINTIA HILLS,
                            STATE OF MEGHALAYA</td>
                    </tr>
                    <tr>
                        <td>289</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>MITHINGA MUSHAHARY</td>
                        <td>21-12-2024</td>
                        <td>DR. SUMAN AGARWAL</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>STUDY OF THE FACTORS AFFECTING PATIENT'S EXPERIENCE AND PERCEPTION IN HOSPITALS</td>
                    </tr>
                    <tr>
                        <td>290</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>BARNALI BHATTACHARYYA</td>
                        <td>21-12-2024</td>
                        <td>DR. KRISHANGI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>POLITICS OF METROPOLIS: SLUM, SPACE AND HOUSING IN GUWAHATI CITY</td>
                    </tr>
                    <tr>
                        <td>291</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>AMARTYA DAS</td>
                        <td>23-12-2024</td>
                        <td>DR. BHASKARJYOTI GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATION ON THE ANTI-OBESITY ACTIVITY OF PROBIOTICS ISOLATED FROM SELECTED FERMENTED FOODS
                            OF
                            NORTHEAST INDIA</td>
                    </tr>
                    <tr>
                        <td>292</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>DEEPRAJ KUNDU</td>
                        <td>23-12-2024</td>
                        <td>DR. UPASHNA CHETTRI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EXPLORATION OF TEA RHIZOSPHERE BACTERIA FOR PESTICIDE DEGRADATION AND PLANT GROWTH PROMOTION
                            (TENTATIVE)</td>
                    </tr>
                    <tr>
                        <td>293</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>BIJIT NATH</td>
                        <td>23-12-2024</td>
                        <td>DR. ANUSHREE BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DEVELOPMENT OF METAL NANOPARTICLE BIOCHAR COMPOSITE TO ENHANCE PHOTOSYNTHATE ALLOCATION TOWARDS
                            GRAINS AND IMPROVE SOIL FERTILITY STATUS IN TROPICAL RICE</td>
                    </tr>
                    <tr>
                        <td>294</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>YUDHAJIT DEY</td>
                        <td>23-12-2024</td>
                        <td>PROF. (DR.) ARNAB SARMA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>295</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>ARNOLD DIPAK DAS</td>
                        <td>23-12-2024</td>
                        <td>PROF. (DR.) ARNAB SARMA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>296</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>AKALI CHISHI</td>
                        <td>23-12-2024</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>DELVING INTO THE HANDLOOM (LOIN-LOOM) INDUSTRY OF THE SÜMI TRIBE OF NAGALAND: CULTURAL
                            PRESERVATION
                            AND ECONOMIC DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td>297</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>CHIDORA R MARAK</td>
                        <td>23-12-2024</td>
                        <td>DR. MIR K CHOWDHARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>HEALTH IN GARO HILLS: A STUDY OF MEDICINE AND HEALING PRACTICES, CIRCA 1870 TO 1972 AD.</td>
                    </tr>
                    <tr>
                        <td>298</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>PHURAILATPAM AARTI DEVI</td>
                        <td>23-12-2024</td>
                        <td>DR. TANIA BEGUM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY OF THE VAISHNAVITE PERFORMING ART IN MANIPUR 1470 CE TO 1940 CE</td>
                    </tr>
                    <tr>
                        <td>299</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ANJUMA AHMED NARGIS</td>
                        <td>23-12-2024</td>
                        <td>DR. KRISHANGI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>POLITICAL PARTICIPATION AND VOTING BEHAVIOUR OF MUSLIM WOMEN: A STUDY OF DHUBRI, DARRANG, NAGAON
                            AND
                            SRIBHUMI DISTRICT.</td>
                    </tr>
                    <tr>
                        <td>300</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>SYEDA SHAGUFTAH FARHEEN</td>
                        <td>23-12-2024</td>
                        <td>DR. BITOPI DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SUSTAINING WEAVING PRACTICES THROUGH KNOWLEDGE SHARING AMONG YOUTH IN SUALKUCHI</td>
                    </tr>

                    <tr>
                        <td>301</td>
                        <td>RSCOM</td>
                        <td>SOCIOLOGY</td>
                        <td>AMIT BARUAH</td>
                        <td>23-12-2024</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>TRACING GENDER BIAS AND STEREOTYPE IN HINDI MAINSTREAM CINEMA: AN NLP-BASED DIALOGUE ANALYSIS OF
                            ENGLISH SUBTITLES (2010–2025)</td>
                    </tr>
                    <tr>
                        <td>302</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SIKHA RABHA</td>
                        <td>23-12-2024</td>
                        <td>DR. DIKSHA DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PROTECTIVE EFFECT OF ARTOCARPUS SPECIES IN MITIGATING TOXIC EFFECTS OF TITANIUM DIOXIDE
                            NANOPARTICLES IN VIVO MODEL</td>
                    </tr>
                    <tr>
                        <td>303</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>TINA CHETRY</td>
                        <td>23-12-2024</td>
                        <td>DR. DIKSHA DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATING MATURATION AND BREEDING OF INDIGENOUS ORNAMENTAL FISH PETHIA PHUTUNIO (HAMILTON,
                            1822)
                            UNDER CAPTIVE CONDITIONS</td>
                    </tr>
                    <tr>
                        <td>304</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>NILAKHI LAHAN</td>
                        <td>23-12-2024</td>
                        <td>DR. ARVIND DWIVEDI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF ECO-PHYSIOLOGICAL ATTRIBUTES ON BIOCHEMICAL PROFILE OF LABEO ROHITA (HAMILTON, 1822)
                            FROM
                            DIFFERENT ECOSYSTEMS OF ASSAM</td>
                    </tr>
                    <tr>
                        <td>305</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>CHANDA GWALA</td>
                        <td>23-12-2024</td>
                        <td>DR. ABESH CHAKRABORTY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF URBANISATION ON BLOWFLY’S (CALLIPHORIDAE) BACTERIAL COMMUNITIES IN GUWAHATI AND
                            ADJOINING
                            AREAS: IMPLICATIONS TO PUBLIC HEALTH</td>
                    </tr>
                    <tr>
                        <td>306</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>DIKSHA DUTTA</td>
                        <td>24-12-2024</td>
                        <td>DR. SHINJINI PAUL CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INTEGRATING PRETREATMENT AND CO DIGESTION USING CARBON BASED ADDITIVES TO STIMULATE DIET
                            MEDIATED
                            METHANOGENESIS FROM HIGH NITROGEN INDUSTRIAL WASTE</td>
                    </tr>
                    <tr>
                        <td>307</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>TONMOY DOLEY</td>
                        <td>24-12-2024</td>
                        <td>DR. PUBALEE SARMAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>COMPUTATIONAL MECHANISM INVESTIGATION AND RATIONAL DESIGN OF BIOACTIVE COMPOUNDS WITH
                            ANTIOXIDANT
                            AND ANTICANCER ACTIVITIES</td>
                    </tr>
                    <tr>
                        <td>308</td>
                        <td>RSL</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ASIF ALI ANSARI</td>
                        <td>24-12-2024</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REVERSE DEEPFAKES AND THE LAW: A STUDY ON THE DENIAL OF AUTHENTIC DIGITAL EVIDENCE IN THE INDIAN
                            LEGAL SYSTEM</td>
                    </tr>
                    <tr>
                        <td>309</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>KUHELI DUTTA</td>
                        <td>24-12-2024</td>
                        <td>DR. SUMAN AGARWAL</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>GREEN HEALTHCARE PRACTICES AMONG INDIAN HEALTHCARE SECTOR</td>
                    </tr>
                    <tr>
                        <td>310</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>NASREEN FIRDAUS CHOWDHURY</td>
                        <td>24-12-2024</td>
                        <td>PROF. (DR.) GEORGE AP</td>
                        <td>PROFESSOR</td>
                        <td>ENTREPRENEURIAL SOCIAL CAPITAL AND SUSTAINABLE LIVELIHOOD : A STUDY OF POTTERY INDUSTRY IN ASSAM
                        </td>
                    </tr>
                    <tr>
                        <td>311</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>MOHINA AKHTARA</td>
                        <td>24-12-2024</td>
                        <td>DR. RISHI CHAKRAVARTY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SOCIAL SECURITY AS A DETERMINANT FOR MENTAL WELLBEING: A STUDY OF PLATFORM AND CONSTRUCTION
                            BASED
                            BLUE COLLAR GIG WORKERS IN ASSAM.</td>
                    </tr>
                    <tr>
                        <td>312</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>NANDITA SAIKIA</td>
                        <td>24-12-2024</td>
                        <td>DR. BIKRAM BIR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A PRIORI ERROR ANALYSIS OF FINITE ELEMENT METHODS FOR CHEMOTAXIS–HAPTOTAXIS CANCER INVASION
                            MODEL.
                        </td>
                    </tr>
                    <tr>
                        <td>313</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>RUKMINI RAJMOHAN</td>
                        <td>24-12-2024</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFLUENCE OF PERCEIVED PARENTING STYLES ON PERSONALITY, PROSOCIAL BEHAVIOR AND COPING STRATEGIES
                            AMONG UNIVERSITY STUDENTS IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>314</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>JOBASMITA SHARMA</td>
                        <td>24-12-2024</td>
                        <td>DR. MANDIRA BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPARATIVE ASSESSMENT OF FISH DIVERSITY IN SELECTED RIVERINE SYSTEM OF MAWSYNRAM, MEGHALAYA
                        </td>
                    </tr>
                    <tr>
                        <td>315</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>AKANGSHA KALITA</td>
                        <td>25-12-2024</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SPACE, CULTURE AND IDENTITY: A STUDY OF SUALKUCHI IN ASSAM (19TH-20TH CENTURY)</td>
                    </tr>
                    <tr>
                        <td>316</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>ANINDITA DUTTA</td>
                        <td>26-12-2024</td>
                        <td>DR. RUPESH KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATING THE ANTIMICROBIAL, ANTIBIOFILM AND SYNERGISTIC THERAPEUTIC POTENTIAL OF
                            DOCOSAHEXAENOIC ACID (DHA) AGAINST UROPATHOGENIC BACTERIA</td>
                    </tr>
                    <tr>
                        <td>317</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>ANUPRIYA TALUKDAR</td>
                        <td>26-12-2024</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>IND AS 38: INTANGIBLE ASSETS</td>
                    </tr>
                    <tr>
                        <td>318</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>UZMA SADAF</td>
                        <td>26-12-2024</td>
                        <td>DR. RAJDEEP NAG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SOCIO-ECONOMIC EMPOWERMENT OF DIVYANGJAN IN ASSAM: A HOLISTIC STUDY OF INCLUSION IN UDALGURI
                            DISTRICT</td>
                    </tr>
                    <tr>
                        <td>319</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SUPRIYA KONWAR</td>
                        <td>26-12-2024</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>AGRICULTURAL PRODUCTIVITY AND FISCAL POLICY: EVALUATING THE ROLE OF GOVERNMENT EXPENDITURE IN
                            ENHANCING AGRICULTURAL PRODUCTIVITY IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>320</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>NIRUPAM DAS</td>
                        <td>26-12-2024</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>TRENDS AND DETERMINANTS OF RURAL NON-FARM EMPLOYMENT DIVERSIFICATION: A STUDY IN ASSAM</td>
                    </tr>
                    <tr>
                        <td>321</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>PINAZ MIRZA</td>
                        <td>26-12-2024</td>
                        <td>DR. PRABUDDHA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>MEMORY AND DISPLACEMENT IN SELECT PARTITION NARRATIVES THROUGH A CHILD’S PERSPECTIVE</td>
                    </tr>
                    <tr>
                        <td>322</td>
                        <td>RSCOM</td>
                        <td>JOURNALISM AND MASS COMMUNICATION</td>
                        <td>SAMUEL LALBELSANG</td>
                        <td>26-12-2024</td>
                        <td>DR. CHAMPA DEVI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>323</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>BASERA K. SANGMA</td>
                        <td>26-12-2024</td>
                        <td>DR. HIRAK JYOTI HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>CLOUD-BASED LIBRARY MANAGEMENT SYSTEM: A COMPARATIVE ANALYSIS OF PERFORMANCE AND USER
                            SATISFACTION
                            IN GARO HILLS</td>
                    </tr>
                    <tr>
                        <td>324</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>MANJUSHREE DEVI</td>
                        <td>26-12-2024</td>
                        <td>DR. HIRAK JYOTI HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>USE OF ONOS IN THE COLLEGE LIBRARIES OF ASSAM SPECIAL REFERENCE TO KAMRUP AND KAMRUP (M): AN
                            ANALYSIS</td>
                    </tr>
                    <tr>
                        <td>325</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>NONGMAITHEM BISHWANATH SINGH</td>
                        <td>26-12-2024</td>
                        <td>PROF. (DR.) AMLAN DAS</td>
                        <td>PROFESSOR</td>
                        <td>INVESTIGATION OF THE BOARD SPECTRUM ANTIMICROBIAL ACTIVITIES OF CUMINALDEHYDE AND THE UNDERLING
                            MECHANISM</td>
                    </tr>
                    <tr>
                        <td>326</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>GOURANGA MEDHI</td>
                        <td>26-12-2024</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>COMPUTATIONAL ANALYSS OF SECOND HARMONIC GENERATION IN NON LINEAR CRYSTAL IN HIGH SPEED OPTICAL
                            COMMUNICATION SYSTEM</td>
                    </tr>
                    <tr>
                        <td>327</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>MANAS JYOTI NATH</td>
                        <td>26-12-2024</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>SELF FOCUSSING DYNAMICS IN NONLINEAR WAVEGUIDE FOR HIGH SPEED COMMUNICATION USING SIMULATION
                        </td>
                    </tr>
                    <tr>
                        <td>328</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>VANTHUNGLO MURRY</td>
                        <td>26-12-2024</td>
                        <td>DR. OLIVIA KAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SERVANT LEADERSHIP IN STATE GOVERNANCE AND PUBLIC POLICY: A TRANSFORMATIVE LEADERSHIP STRATEGY
                            FOR
                            POLITICAL LEADERSHIP</td>
                    </tr>
                    <tr>
                        <td>329</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>UDITA DAS</td>
                        <td>26-12-2024</td>
                        <td>DR. TAHERA HOQUE MOZUMDAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PSYCHOLOGICAL STATES OF ADOLESCENT GIRLS EXPERIENCING TEENAGE PREGNANCY AND THEIR PARENTS
                            DEPENDING
                            ON SEXUAL ATTITUDES AND SOCIO ECONOMIC STATUS IN KARBI ANGLONG DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>330</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>PRAJUKTI PRIYADARSHINI</td>
                        <td>26-12-2024</td>
                        <td>DR. DEBANGANA BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>MORAN IDENTITY IN TRANSITION LIVELIHOOD TRANSFORMATION AND RESHAPING OF MORAN COMMUNITY: A STUDY
                            ON
                            TINSUKIA DISTRICT OF ASSAM</td>
                    </tr>
                    <tr>
                        <td>331</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>DEBOSMITA DUTTA</td>
                        <td>27-12-2024</td>
                        <td>DR. MOUSUMI DAS GOSWAMI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATING THE EFFICIENCY OF BACTERIOPHAGES FOR BROAD SPECTRUM BIOCONTROL OF FOOD BORN
                            DISEASE
                            CAUSING BACTERIA IN KAMRUP REGION</td>
                    </tr>
                    <tr>
                        <td>332</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>MWIKWM NARZARY</td>
                        <td>27-12-2024</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ECONOMIC ANALYSIS OF ARECANUT CULTIVATION IN ASSAM WITH SPECIAL REFERENCE TO BTC DISTRICTS
                            (1997-98
                            TO 2022-23)</td>
                    </tr>
                    <tr>
                        <td>333</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>KISHUR NATH</td>
                        <td>27-12-2024</td>
                        <td>DR. NILANJANA PURKAYASTHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DESIGN DEVELOPMENT AND IMPLEMENTATION OF MOOCS IN INDIA WITH SPECIAL REFERENCE TO IITS AND NITS
                            IN
                            ASSAM</td>
                    </tr>
                    <tr>
                        <td>334</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ELCHIRA R MARAK</td>
                        <td>28-12-2024</td>
                        <td>DR. BABA CHANDRA SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>A STUDY OF DELINQUENCY AND JUVENILE REHABILITATION IN MEGHALAYA</td>
                    </tr>
                    <tr>
                        <td>335</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>KONJENGBAM SURAJ</td>
                        <td>28-12-2024</td>
                        <td>DR. BABA CHANDRA SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ROLE OF THE STATE AND CIVIL SOCIETY IN PEACEBUILDING : STUDY OF ETHNIC CONFLICT IN MANIPUR</td>
                    </tr>
                    <tr>
                        <td>336</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>JERIN JOSE GEORGE</td>
                        <td>28-12-2024</td>
                        <td>DR. PRINCE CP</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>PERCEIVED MARITAL SATISFACTION AND MARITAL BLISS AMONG THE WEST GARO HILLS COMMUNITY PRACTICING
                            SORORATE MARRIAGE SYSTEM</td>
                    </tr>
                    <tr>
                        <td>337</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>PALLAB KUMAR NATH</td>
                        <td>30-12-2024</td>
                        <td>PROF. (DR.) PRITHVIRAJ CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>SUSTAINABLE DEVELOPMENT AND BIOMEDICAL EVALUATION OF ECO-FRIENDLY PLANT-MEDIATED ZNO-BASED
                            COMPOSITES AS ADVANCED WOUND HEALING MATRICES</td>
                    </tr>
                    <tr>
                        <td>338</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>HIMADRI BORAH</td>
                        <td>31-12-2024</td>
                        <td>DR. POMPI BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>PLANTATIONOCENE AND TEA PLANTATIONS OF ASSAM: A STUDY THROUGH SELECT TEXTS</td>
                    </tr>
                    <tr>
                        <td>339</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>BHASWATI CHETIA</td>
                        <td>31-12-2024</td>
                        <td>PROF. (DR.) INDRANI SINGH RAI</td>
                        <td>PROFESSOR</td>
                        <td>SACRED ECOLOGY AND CULTURAL IDENTITIES IN SELECT HIMALAYAN FICTION FROM SIKKIM</td>
                    </tr>
                    <tr>
                        <td>340</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>RAHUL DEY</td>
                        <td>31-12-2024</td>
                        <td>DR. MAIDUL ISLAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ELECTROMAGNETIC DEVICES AND THEIR APPLICATIONS</td>
                    </tr>
                    <tr>
                        <td>341</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>MADHU RAM RABIDAS</td>
                        <td>31-12-2024</td>
                        <td>DR. BORNALI CHETIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>AEROSOL INDUCED ENHANCEMENT OF HEAT WAVES OVER NORTHEAST INDIA. OBSERVATION AND MECHANISMS</td>
                    </tr>
                    <tr>
                        <td>342</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>GITANJALI HAOBAM</td>
                        <td>31-12-2024</td>
                        <td>DR. SUSHMITA HOSHI NONGMEIKAPAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ANALYSING THE IMPACT OF NRLM SCHEME ON SOCIO ECONOMIC EMPOWERMENT OF WOMEN: A CASE STUDY OF
                            MEITEI
                            SOCIETY MANIPUR FROM 2014-2023</td>
                    </tr>
                    <tr>
                        <td>343</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>SYEDA JADIDA AKHTAR</td>
                        <td>06-01-2025</td>
                        <td>DR. SHAGUFTA RIZWANA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DEVELOPMENT OF PLANT-BASED MEAT FROM BANANA BLOSSOMS (MUSA BALBASINIA) USING EXTRUSION AND ITS
                            CHARACTERIZATION AND TECHNO ECONOMIC EVALUATION</td>
                    </tr>
                    <tr>
                        <td>344</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>AFRID AHMED</td>
                        <td>06-01-2025</td>
                        <td>DR. PANKAJ LOSAN SHARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>BIOCONTROL OF BACTERIAL WILT DISEASE CAUSED BY BACTERIAL PHYTOPATHOGEN RALSTONIA SOLANCEARUM
                            USING
                            BACTERIAL ENDOPHYTES</td>
                    </tr>
                    <tr>
                        <td>345</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ROZY RANI SARMAH</td>
                        <td>11-01-2025</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>CHILD MARRIAGE PREVENTION IN ASSAM: A STUDY OF DHUBRI DISTRICT</td>
                    </tr>
                    <tr>
                        <td>346</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>TH TREESHALI DEVI</td>
                        <td>11-01-2025</td>
                        <td>DR. BABA CHANDRA SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INDIAN ACT EAST POLICY AND REGIONAL DEVELOPMENT: A STUDY OF ROAD AND RAILWAYS INFRASTRUCTURE
                            DEVELOPMENT OF MANIPUR</td>
                    </tr>
                    <tr>
                        <td>347</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>ALEXANDER D SANGMA</td>
                        <td>13-01-2025</td>
                        <td>DR. SUSHMITA BANERJEE</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>348</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NAPHISABET KHARKONGOR</td>
                        <td>24-01-2025</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>JUDICIAL ACCOUNTABILITY IN RELATION TO THE INDIAN CONSTITUTION</td>
                    </tr>
                    <tr>
                        <td>349</td>
                        <td>RSLSC</td>
                        <td>FORESTRY</td>
                        <td>CHICHAKHA DEV BARMA</td>
                        <td>28-01-2025</td>
                        <td>DR. PAUL LALREMSANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>LITTER PRODUCTION AND DECOMPOSITION DYNAMICS OF DOMINANT TREES, UNDERSTORY PLANT DIVERSITY AND
                            SOIL
                            ORGANIC CARBON STOCK IN HOMEGARDENS OF TRIPURA</td>
                    </tr>
                    <tr>
                        <td>350</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BIRENDRA KUMAR BARMAN</td>
                        <td>29-01-2025</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                    <tr>
                        <td>351</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>ARGHYA SAHA CHOWDHURY</td>
                        <td>29-01-2025</td>
                        <td>PROF. (DR.) PRITHVIRAJ CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>352</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>PRABHAT SHARMA</td>
                        <td>29-01-2025</td>
                        <td>DR. MAIDUL ISLAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>TEREHERTZ</td>
                    </tr>
                    <tr>
                        <td>353</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ABHINAV CHALIHA</td>
                        <td>29-01-2025</td>
                        <td>DR. SUSHMITA HOSHI NONGMEIKAPAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DECARBONIZING ENERGY SECURITY: INDIA’S SOLAR TRANSITION IN LIGHT OF UNFCCC CLIMATE OBLIGATIONS
                        </td>
                    </tr>
                    <tr>
                        <td>354</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>ADIMA N ARENGH</td>
                        <td>29-01-2025</td>
                        <td>DR. BAIARBHA MASSAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE ROLE OF NOKMA-LED INSTITUTIONS IN COMMUNITY RESOURCE MANAGEMENT IN THE GARO HILLS, MEGHALAYA
                        </td>
                    </tr>
                    <tr>
                        <td>355</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>DIVYAJYOTI DAS</td>
                        <td>29-01-2025</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>REVERBERATING THE PAST: A STUDY OF GRIMMS’ FAIRY AND SELECT FOLKTALES OF ASSAM</td>
                    </tr>
                    <tr>
                        <td>356</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>RITUPARNA BORGOHAIN</td>
                        <td>30-01-2025</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ANALYSIS OF THE CRITICAL ROLE OF DEMOGRAPHIC DIVIDEND IN ASSAM’S ECONOMIC GROWTH</td>
                    </tr>
                    <tr>
                        <td>357</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>RAHUL BORDOLOI</td>
                        <td>30-01-2025</td>
                        <td>DR. PANKAJ JHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>VALORIZATION IN PINEAPPLE PEEL AND HARITAKI IN KOMBUCHA PRODUCTION: PROCESS OPTIMIZATION,
                            ANTIMICROBIAL ACTIVITY AND GUT MICROBIOME MODULATION</td>
                    </tr>
                    <tr>
                        <td>358</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>BIPLAB SARKAR</td>
                        <td>30-01-2025</td>
                        <td>PROF. (DR.) D.K. NAYAK</td>
                        <td>PROFESSOR</td>
                        <td>LIVING ARRANGEMENTS OF THE AGED: A GEOGRAPHICAL PERSPECTIVE ON AGEING IN ASSAM WITH SPECIAL
                            REFERENCE TO BONGAIGAON DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>359</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>GANESH CHANDRA DAS</td>
                        <td>30-01-2025</td>
                        <td>PROF. (DR.) D.K. NAYAK</td>
                        <td>PROFESSOR</td>
                        <td>IRRI RICE VARIETY AND IMPACT ON SOCIO-ECONOMIC & ENVIRONMENT, KAMRUP DISTRICT, ASSAM</td>
                    </tr>
                    <tr>
                        <td>360</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>NH HINGNAMYI BLESSING NEWME</td>
                        <td>30-01-2025</td>
                        <td>DR. BISHNU KUMARI GURUNG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>RESPONSE TO COLONIALISM: ZEME NAGAS IN NORTH EAST INDIA (1900-1950)</td>
                    </tr>
                    <tr>
                        <td>361</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ANGELINA THANGJAM</td>
                        <td>31-01-2025</td>
                        <td>DR. POMPI BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>REPRESENTATION OF MARGINALISATION AND CULTURAL IDENTITY IN SELECT SHORT STORIES BY MEITEI WOMEN
                            WRITERS</td>
                    </tr>
                    <tr>
                        <td>362</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>JIMLI DEKA</td>
                        <td>31-01-2025</td>
                        <td>DR. BANANI DAS HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>HOME AS PANOPTICAN: IDEOLOGY AND FAMILIAL CONFLICT IN MANJU KAPUR'S NOVELS</td>
                    </tr>
                    <tr>
                        <td>363</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>LAKHMINANDAN GOSWAMI</td>
                        <td>01-02-2025</td>
                        <td>DR. PUBALEE SARMAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>QUANTUM CHEMICAL MODELLING OF FUNCTIONAL AND 2D MATERIALS FOR ENVIRONMENTAL POLLUTANT
                            REMEDIATION
                        </td>
                    </tr>
                    <tr>
                        <td>364</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ARUNDHUTI KASHYAP</td>
                        <td>01-02-2025</td>
                        <td>DR. ARVIND DWIVEDI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF URBANIZATION ON DIVERSITY OF BUTTERFLY COMMUNITIES ACROSS DIFFERENT LANDSCAPES IN
                            GUWAHATI, ASSAM</td>
                    </tr>
                    <tr>
                        <td>365</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SWRJISHA BASUMATARY</td>
                        <td>03-02-2025</td>
                        <td>DR. SUSHMITA HOSHI NONGMEIKAPAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ELECTORAL POLITICS IN BODOLAND TERRITORIAL REGION: A STUDY OF COUNCIL ELECTIONS FROM 2005-2025
                        </td>
                    </tr>
                    <tr>
                        <td>366</td>
                        <td>CISR</td>
                        <td>PSYCHOLOGY</td>
                        <td>RUCHI BHARDWAJ</td>
                        <td>04-02-2025</td>
                        <td>DR. SHRADDHA BASU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EFFECTIVENESS OF RESISTANCE TRAINING ON DEPRESSION, ANXIETY, PERCEIVED STRESS, EMOTIONAL
                            REGULATION
                            & COGNITIVE FLEXIBILITY OF MIDDLE AGED WOMEN IN GUWAHATI</td>
                    </tr>
                    <tr>
                        <td>367</td>
                        <td>RSEES</td>
                        <td>ENVIRONMENTAL SCIENCE</td>
                        <td>R LALRINNGHETI</td>
                        <td>07-02-2025</td>
                        <td>DR. DEMSAI REANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SOCIO-ECOLOGICAL VULNERABILITY OF WOMEN FARMERS TO CLIMATE CHANGE ALONG ALTITUDINAL GRADIENT IN
                            MIZORAM, INDIA</td>
                    </tr>
                    <tr>
                        <td>368</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>JOYDEEP CHAKRAVORTY</td>
                        <td>08-02-2025</td>
                        <td>DR. BINOYARGHA DAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>SYNTHESES OF NITROGEN BASED HETEROCYCLES BY USING RECYCLABLE CARBON BASED HETEROGENEOUS CATALYST
                        </td>
                    </tr>
                    <tr>
                        <td>369</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>USHA RANI SWARGIARY</td>
                        <td>18-03-2025</td>
                        <td>DR. MAIDUL ISLAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>NEAR-FIELD COUPLED HIGH Q TUNABLE ELECTRICALLY INDUCED DIPOLE RESONANCE IN TERAHERTZ
                            META-WAVEGUIDE
                        </td>
                    </tr>
                    <tr>
                        <td>370</td>
                        <td>RSLSC</td>
                        <td>FORESTRY</td>
                        <td>SATYAMJIT NEOG</td>
                        <td>01-06-2025</td>
                        <td>DR. DEMSAI REANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>FLORISTIC COMPOSITION, DIVERSITY, AND CARBON STORAGE DYNAMICS OF TRADITIONALLY TRANSITIONED
                            FARMLANDS ACROSS AN ALTITUDINAL GRADIENT IN THE HILL DISTRICT OF KARBI ANGLONG/DIMA HASAO,
                            ASSAM,
                            NORTHEAST INDIA</td>
                    </tr>

                    <tr>
                        <td>371</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>MOIRANGTHEM BIDYAMANI</td>
                        <td>05-06-2025</td>
                        <td>DR. AMLAN DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INFLUENCE OF PARENTING STYLES ON THE MANIFESTATION OF ADHD SYMPTOMS AMONG SCHOOL-AGED CHILDREN
                            IN
                            IMPHAL</td>
                    </tr>
                    <tr>
                        <td>372</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ARNAVNEEL SARMAH</td>
                        <td>19-06-2025</td>
                        <td>DR. ARVIND DWIVEDI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>ASSESSMENT OF SEASONAL VARIATION IN ICHTHYOFAUNAL DIVERSITY OF DISTURBED AND UNDISTURBED
                            TRIBUTARIES
                            OF BRAHMAPUTRA BASIN</td>
                    </tr>
                    <tr>
                        <td>373</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>KEVININO</td>
                        <td>20-06-2025</td>
                        <td>DR. NILANJANA PURKAYASTHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>DOCUMENTATION OF MEDICINAL PLANTS OF ANGAMIS</td>
                    </tr>
                    <tr>
                        <td>374</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>KHIL KHIL KASHYAP</td>
                        <td>21-06-2025</td>
                        <td>PROF. (DR.) MAHESHWARI PRASAD VERMA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>375</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>TUSHAR DEBROY</td>
                        <td>23-06-2025</td>
                        <td>PROF. (DR.) INDRANI SINGH RAI</td>
                        <td>PROFESSOR</td>
                        <td>FRAGMENTED MASCULINE IDENTITY IN SELECT FICTION OF AMITAV GHOSH</td>
                    </tr>
                    <tr>
                        <td>376</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ALICE TAKHELLAMBAM</td>
                        <td>23-06-2025</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>DIGITAL CATALYST: THE ROLE OF SOCIAL MEDIA IN POLITICAL REVOLUTION IN MANIPUR SINCE 2020</td>
                    </tr>
                    <tr>
                        <td>377</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>PINKY GHOSH</td>
                        <td>23-06-2025</td>
                        <td>DR. MAHUYA DEB</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>IMPACT OF OCCUPATIONAL STRESS, EMOTIONAL INTELLIGENCE ON PEDAGOGICAL EFFICACY AND QUALITY OF
                            LIFE
                            (QOL) OF SECONDARY SCHOOL TEACHERS OF DARRANG DISTRICT</td>
                    </tr>
                    <tr>
                        <td>378</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ARUN KUMAR SARKAR</td>
                        <td>24-06-2025</td>
                        <td>DR. BAISHALEE RAJKHOWA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>MASCULINE VULNERABILITY IN SELECT PARTITION FICTION OF BENGAL</td>
                    </tr>
                    <tr>
                        <td>379</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>PRACHI KHETAN</td>
                        <td>25-06-2025</td>
                        <td>DR. NIVA KALITA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>380</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>NAFISA KAWSAR LASKAR</td>
                        <td>26-06-2025</td>
                        <td>DR. NIVA KALITA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>381</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>PRANJAL SARMA</td>
                        <td>26-06-2025</td>
                        <td>DR. PADUM CHETRY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>382</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>JUGAL KISHORE BHATTACHARYYA</td>
                        <td>26-06-2025</td>
                        <td>PROF. (DR.) SUDIP CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>A STUDY ON PUBLIC FINANCE MANAGEMENT IN ASSAM: AN ECONOMETRIC EVALUATION OF BUDGET CREDIBILITY
                            AND
                            FISCAL OUTCOMES</td>
                    </tr>
                    <tr>
                        <td>383</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>JUDITH LALNIVAR INTOVATE</td>
                        <td>28-06-2025</td>
                        <td>PROF. (DR.) SAJAL NAG</td>
                        <td>PROFESSOR</td>
                        <td>BURMESE RULE IN MANIPUR 1817-1826</td>
                    </tr>
                    <tr>
                        <td>384</td>
                        <td>RSHSS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>KANGKANA GOSWAMI</td>
                        <td>28-06-2025</td>
                        <td>DR. MADHUSMITA KOCH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>INTEGRATED 3D MYOFASCIAL RELEASE AND MOTOR CONTROL TRAINING FOR NON-SPECIFIC CHRONIC LOW BACK
                            PAIN
                            IN SEDENTARY INDIVIDUALS: A RANDOMISED CONTROLLED TRIAL EVALUATING CLINICAL OUTCOMES AND HS-CRP
                        </td>
                    </tr>
                    <tr>
                        <td>385</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>KIANZANDI ODYUO</td>
                        <td>01-07-2025</td>
                        <td>DR. DEBANGANA BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>HARNESSING LOCAL KNOWLEDGE FOR SUSTAINABLE LIVELIHOODS: A CASE STUDY OF COMMUNITY-BASED TOURISM
                            IN
                            NAGALAND</td>
                    </tr>
                    <tr>
                        <td>386</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>NAFISA NASRIN</td>
                        <td>10-07-2025</td>
                        <td>DR. NITU BORGOHAIN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>INVESTIGATION OF NONLINEAR SUSCEPTIBILITIES UNDER ELECTROMAGNETICALLY INDUCED TRANSPARENCY</td>
                    </tr>
                    <tr>
                        <td>387</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>PAUSHALI CHAKRABORTY</td>
                        <td>14-07-2025</td>
                        <td>DR. PRATIKSHYA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>388</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>AMBARISH BHUYAN</td>
                        <td>14-07-2025</td>
                        <td>DR. UPASHNA CHETTRI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>389</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>DINALISHA BORA</td>
                        <td>14-07-2025</td>
                        <td>DR. SANDIPTA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>390</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>MANISHA PATOWARY</td>
                        <td>14-07-2025</td>
                        <td>DR. BONISHA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>391</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>UDESHNA DAS</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) SHWETAMBARA VERMA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>392</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>MD. MAKIBAR RAHMAN</td>
                        <td>14-07-2025</td>
                        <td>DR. DEBAJIT SAHU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>393</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>HEMEN KUMAR BARMAN</td>
                        <td>14-07-2025</td>
                        <td>DR. BINOYARGHA DAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>394</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>FLAVIA T SANGMA</td>
                        <td>14-07-2025</td>
                        <td>DR. NONGTHOMBAM GEETMANI SINGH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>395</td>
                        <td>RSAPS</td>
                        <td>CHEMISTRY</td>
                        <td>MOFTAH ALI MOHMED ALI</td>
                        <td>14-07-2025</td>
                        <td>DR. SACHIDULAL BISWAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>396</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>BARASHA RANI BARMA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) GAUTAM MAZUMDAR</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>397</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>RINTU TERONPI</td>
                        <td>14-07-2025</td>
                        <td>DR. PRAGYA TAMANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>398</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>NEMBOILHING HAOKIP</td>
                        <td>14-07-2025</td>
                        <td>DR. AMIT KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>399</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>LIZA RAHMAN</td>
                        <td>14-07-2025</td>
                        <td>DR. PRAGYA TAMANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>400</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>LEVINA HRANGKHOL</td>
                        <td>14-07-2025</td>
                        <td>DR. PRAGYA TAMANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>401</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SHEMBHALIN KHARUMNUID</td>
                        <td>14-07-2025</td>
                        <td>DR. PRAGYA TAMANG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>402</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>BHASWATI KALITA</td>
                        <td>14-07-2025</td>
                        <td>DR. AMIT KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>403</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>SHERINA NASRIN SHISHIR</td>
                        <td>14-07-2025</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>404</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>KOKILA JAIN</td>
                        <td>14-07-2025</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>405</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>NIKITA BAID</td>
                        <td>14-07-2025</td>
                        <td>DR. RADHIKA SHARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>406</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>LOVUNGI EZUNG</td>
                        <td>14-07-2025</td>
                        <td>DR. POMPI BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>407</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>RIMLI DEKA</td>
                        <td>14-07-2025</td>
                        <td>DR. PRABUDDHA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>408</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ANUPRIYA A. SANGMA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) BORNALI BHUYAN</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>409</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>BIDISHA GOSWAMI</td>
                        <td>14-07-2025</td>
                        <td>DR. STUTI GOSWAMI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>410</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>UNMAN RAJ BARUAH</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) BORNALI BHUYAN</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>411</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ANAMIKA BASU</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) BORNALI BHUYAN</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>412</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>ANOSE PUSA</td>
                        <td>14-07-2025</td>
                        <td>DR. DEBJANI DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>413</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>PALLAB JYOTI SARMAH</td>
                        <td>14-07-2025</td>
                        <td>DR. ANNESHA BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>414</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>NIHARIKA SAIKIA</td>
                        <td>14-07-2025</td>
                        <td>DR. TRISHNA CHANGKAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>415</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>RIKI DEURI BHARALI</td>
                        <td>14-07-2025</td>
                        <td>DR. PRITHA ROY CHOWDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>416</td>
                        <td>RSEES</td>
                        <td>GEOGRAPHY</td>
                        <td>KAKALI MEDHI</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) D.K. NAYAK</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>417</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>RAJITA KALITA BARBARUAH</td>
                        <td>14-07-2025</td>
                        <td>DR. SUSMITA HAZARIKA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>418</td>
                        <td>RSHM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>GAUTAM BHARGAB</td>
                        <td>14-07-2025</td>
                        <td>DR. INDRAJIT DUTTA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>419</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>REBECCA LALSANSUOK</td>
                        <td>14-07-2025</td>
                        <td>DR. PRABAHAN PUJARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>420</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>ADITI DEY</td>
                        <td>14-07-2025</td>
                        <td>DR. SASWATI BORDOLOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                    <tr>
                        <td>421</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>PARTHA PRATIM DAS</td>
                        <td>14-07-2025</td>
                        <td>DR. SASWATI BORDOLOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>422</td>
                        <td>RSIT</td>
                        <td>INFORMATION TECHNOLOGY</td>
                        <td>JYOTI SHARMA</td>
                        <td>14-07-2025</td>
                        <td>DR. DIPANKAR DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>423</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DUSU MAMUNG</td>
                        <td>14-07-2025</td>
                        <td>DR. KUNTALA ROY CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>424</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MATHUK THUMRA</td>
                        <td>14-07-2025</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>425</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>LAHUNLANG KURBAH</td>
                        <td>14-07-2025</td>
                        <td>DR. BHUPALI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>426</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>K. LALRINDIKI</td>
                        <td>14-07-2025</td>
                        <td>DR. BHUPALI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>427</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>UPASHANA BHUYAN</td>
                        <td>14-07-2025</td>
                        <td>DR. KUNTALA ROY CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>428</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>DARISHISHA JYRWA</td>
                        <td>14-07-2025</td>
                        <td>DR. KUNTALA ROY CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>429</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>MOITRAYEE DEKA</td>
                        <td>14-07-2025</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>430</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NICHINKA UPADHYAYA</td>
                        <td>14-07-2025</td>
                        <td>DR. KUNTALA ROY CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>431</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BARASHA TALUKDAR</td>
                        <td>14-07-2025</td>
                        <td>DR. PRIYANKA DIPHUSHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>432</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BIDISHA DAS</td>
                        <td>14-07-2025</td>
                        <td>DR. PRIYANKA DIPHUSHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>433</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>KASTURI BEZBARUAH</td>
                        <td>14-07-2025</td>
                        <td>DR. PRIYANKA DIPHUSHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>434</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>TONAYA SAIKIA</td>
                        <td>14-07-2025</td>
                        <td>DR. PRIYANKA DIPHUSHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>435</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SALONI SHARMA</td>
                        <td>14-07-2025</td>
                        <td>DR. SAIF RASUL KHAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>436</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SUBHALAXMI CHAKRAVARTY</td>
                        <td>14-07-2025</td>
                        <td>DR. SAIF RASUL KHAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>437</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>HEMANGANA DEURI</td>
                        <td>14-07-2025</td>
                        <td>DR. SAIF RASUL KHAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>438</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SABIBA AHMED</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) THANESWAR KALITA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>439</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>ANJALI SHARMA</td>
                        <td>14-07-2025</td>
                        <td>DR. RISHI CHAKRAVARTY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>440</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>SHAILJA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) DIGANTA MUNSHI</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>441</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>MADHUMITA DAS</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) AMLAN DAS</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>442</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>AADITYA DAS</td>
                        <td>14-07-2025</td>
                        <td>DR. SUDARSHANA BORAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>443</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>JOYJEET DEY</td>
                        <td>14-07-2025</td>
                        <td>DR. SUDARSHANA BORAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>444</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>NILOTPAL TUMUNG</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) DEBARUPA DUTTA CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>445</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>SAPTARSHI DEV ADHIKARY</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) PRITHVIRAJ CHAKRABORTY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>446</td>
                        <td>RSHSS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>ARUNJYOTI HAZARIKA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>447</td>
                        <td>RSHSS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>DIKSHITA RABHA</td>
                        <td>14-07-2025</td>
                        <td>DR. MADHUSMITA KOCH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>448</td>
                        <td>RSHSS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>PHURAILATPAM JENY SHARMA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>449</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ZELDABETH A.SANGMA</td>
                        <td>14-07-2025</td>
                        <td>DR. BABA CHANDRA SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>450</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>BANU TASO</td>
                        <td>14-07-2025</td>
                        <td>DR. KRISHANGI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>451</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>JUNEI PEACE N IAWPHNIAW</td>
                        <td>14-07-2025</td>
                        <td>DR. SUSHMITA HOSHI NONGMEIKAPAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>452</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>MOUMITA SARKAR</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>453</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>ADITI BORA</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>454</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>RAHUL JYOTI MEDHI</td>
                        <td>14-07-2025</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>455</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ZOHLIMPUIA</td>
                        <td>14-07-2025</td>
                        <td>DR. SYEDA ANJUM AFREEN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>456</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>NIUTOLI TUCCU</td>
                        <td>14-07-2025</td>
                        <td>DR. OLIVIA KAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>457</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>MEDONUO SOGOTSU</td>
                        <td>14-07-2025</td>
                        <td>DR. OLIVIA KAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>458</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>GURPREET KAUR</td>
                        <td>14-07-2025</td>
                        <td>DR. OLIVIA KAKATI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>459</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ANJELA CHANGMAI</td>
                        <td>14-07-2025</td>
                        <td>DR. SHRADDHA BASU</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>460</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>SAMIR MEDHI</td>
                        <td>14-07-2025</td>
                        <td>DR. BITOPI DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>461</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>SIMI SAIKIA</td>
                        <td>14-07-2025</td>
                        <td>DR. AMLAN DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>462</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>DARSHANA BARUAH</td>
                        <td>14-07-2025</td>
                        <td>DR. AMLAN DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>463</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>BORNISHA CHETIA</td>
                        <td>14-07-2025</td>
                        <td>DR. AMLAN DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>464</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>ANOUSHKA MAHANTA</td>
                        <td>14-07-2025</td>
                        <td>DR. BITOPI DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>465</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>SATYAKEE DCOM BHUYAN</td>
                        <td>14-07-2025</td>
                        <td>DR. PRIYANKA PATOWARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>466</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>SANGITA BARMAN</td>
                        <td>14-07-2025</td>
                        <td>DR. DENIM DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>467</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>SUNANDA HAGJER</td>
                        <td>14-07-2025</td>
                        <td>DR. ANIRBAN BANIK</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>468</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>CHEANCHI CHEKAME N MARAK</td>
                        <td>14-07-2025</td>
                        <td>DR. ANIRBAN BANIK</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>469</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>KUKU KALITA</td>
                        <td>14-07-2025</td>
                        <td>DR. DHARMESWAR BARHOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>470</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>INWAR MICHAEL WANGO</td>
                        <td>14-07-2025</td>
                        <td>DR. ANIRBAN BANIK</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>471</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>SATARUPA PAUL CHOUDHURY</td>
                        <td>29-07-2025</td>
                        <td>DR. NILANJANA PURKAYASTHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>GENERATIVE AI</td>
                    </tr>
                    <tr>
                        <td>472</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>AKASH PAWAR</td>
                        <td>01-08-2025</td>
                        <td>DR. BAPAN KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>MULTI STATE MODELS IN CANCER RESEARCH</td>
                    </tr>
                    <tr>
                        <td>473</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>APARAJITA GOON</td>
                        <td>01-08-2025</td>
                        <td>DR. TRIPTI DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>THE USE OF IVF AND RELATED REPRODUCTIVE TECHNIQUES WITHIN FAMILIES OF KAMRUP METRO :A
                            SOCIOLOGICAL
                            STUDY OF NORMATIVE CHANGES IN REPRODUCTIVE BEHAVIOUR</td>
                    </tr>
                    <tr>
                        <td>474</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>MAN KUMAR BARAILY</td>
                        <td>01-08-2025</td>
                        <td>DR. TRISHNA MANI THAKURIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>475</td>
                        <td>RSMAS</td>
                        <td>OPTOMETRY</td>
                        <td>BHAYOLINA SARMA</td>
                        <td>08-08-2025</td>
                        <td>DR. MADHUSMITA KOCH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>ASSESSMENT AND MANAGEMENT OF OCULAR MORBIDITY AND WORK-RELATED MUSCULOSKELETAL DISORDERS AMONG
                            TEA
                            GARDEN WORKERS IN KAMRUP DISTRICT</td>
                    </tr>
                    <tr>
                        <td>476</td>
                        <td>RSMAS</td>
                        <td>OPTOMETRY</td>
                        <td>LIPIKA KALITA</td>
                        <td>08-08-2025</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>OCCUPATIONAL VISUAL DEMAND-DRIVEN BINOCULAR VISION COMPENSATION IN TRADITIONAL HANDLOOM WEAVERS
                            OF
                            SUALKUCHI: INTERVENTIONAL APPROACH WITH ESTABLISHMENT OF A CULTURALLY EMBEDDED THERAPEUTIC
                            FRAMEWORK
                        </td>
                    </tr>
                    <tr>
                        <td>477</td>
                        <td>RSMAS</td>
                        <td>OPTOMETRY</td>
                        <td>JOYSHREE DAS</td>
                        <td>19-08-2025</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>EFFECTIVENESS OF A TAILORED NON-OPTICAL LOW VISION INTERVENTION PACKAGE ON FUNCTIONAL
                            INDEPENDENCE
                            AND ACADEMIC PARTICIPATION AMONG INDIVIDUALS WITH LOW VISION IN KAMRUP DISTRICT</td>
                    </tr>
                    <tr>
                        <td>478</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>NIHARIKA SAIKIA</td>
                        <td>08-09-2025</td>
                        <td>DR. HIRAK JYOTI HAZARIKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>LEVERAGING THE CLOUD COMPUTING ENHANCES THE EFFICIENCY AND SCALABILITY OF LIBRARY AUTOMATION
                            SYSTEMS: A STUDY IN SELECTED UNIVERSITIES OF ASSAM</td>
                    </tr>
                    <tr>
                        <td>479</td>
                        <td>RSLSC</td>
                        <td>FORENSIC SCIENCE</td>
                        <td>LAISHRAM DAYALAKSHMI</td>
                        <td>15-09-2025</td>
                        <td>DR. PUNDARIKAKSHA DAS</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>COMPUTATIONAL CHARACTERIZATION OF P53 IN POST-MORTEM INTERVAL (PMI) ESTIMATION</td>
                    </tr>
                    <tr>
                        <td>480</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>ANURADHA DEVI</td>
                        <td>11-11-2025</td>
                        <td>DR. AMIT KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>EMPOWERING WOMEN THROUGH WEAVING:AN ANALYSIS OF INFLUENCING FACTORS IN CACHAR DISTRICT IN
                            ASSAM.DR
                        </td>
                    </tr>

                    <tr>
                        <td>481</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>HIMANI RABHA</td>
                        <td>21-11-2025</td>
                        <td>PROF. (DR.) BHAVANA SHARMA</td>
                        <td>PROFESSOR</td>
                        <td>EFFECTIVENESS OF E-GOVERNANCE IN JUSTICE DELIVERING SYSTEM: A CRITICAL ANALYSIS WITH SPECIAL
                            REFERENCE TO GOALPARA DISTRICT.</td>
                    </tr>
                    <tr>
                        <td>482</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>RAJ DAS</td>
                        <td>26-12-2025</td>
                        <td>DR. PADUM CHETRY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>483</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>ANTARA SAHIBA MAZUMDER</td>
                        <td>30-12-2025</td>
                        <td>DR. PADUM CHETRY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>484</td>
                        <td>RSC</td>
                        <td>COMMERCE</td>
                        <td>MONTOSH CHANDA</td>
                        <td>06-01-2026</td>
                        <td>DR. NIVA KALITA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>485</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>PARTHA PRATIM DAS</td>
                        <td>15-01-2026</td>
                        <td>DR. CHONGTHAM SOVACHANDRA SINGH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>486</td>
                        <td>RSBSC</td>
                        <td>BIOTECHNOLOGY</td>
                        <td>ARPITA DEY</td>
                        <td>15-01-2026</td>
                        <td>DR. ANUJ KUMAR BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>487</td>
                        <td>RSLSC</td>
                        <td>BOTANY</td>
                        <td>SARAILU CH MOMIN</td>
                        <td>15-01-2026</td>
                        <td>DR. SANDIPTA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>488</td>
                        <td>RSET</td>
                        <td>CIVIL ENGINEERING</td>
                        <td>LALNGAMBA RTHOUNAJAM</td>
                        <td>15-01-2026</td>
                        <td>DR. ABHIJEET DEY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>489</td>
                        <td>RSLSC</td>
                        <td>CHEMISTRY</td>
                        <td>NISHAT KIBRIA CHOUDHURY</td>
                        <td>15-01-2026</td>
                        <td>DR. PUBALEE SARMAH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>490</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>DEWAN ABDUL KADER ZILANI</td>
                        <td>15-01-2026</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>491</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SWNAYA DEBBARMA</td>
                        <td>15-01-2026</td>
                        <td>DR. MD. DELUWAR HOQUE</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>492</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>CHAYANIKA GOGOI</td>
                        <td>15-01-2026</td>
                        <td>DR. KARNIKA BHATTACHARYYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>493</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>JYOTISHMAN RAJBONGSHI</td>
                        <td>15-01-2026</td>
                        <td>DR. CHAYASMITA DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>494</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SOHINI ROY</td>
                        <td>15-01-2026</td>
                        <td>DR. CHAYASMITA DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>495</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>BARNALI BARUAH</td>
                        <td>15-01-2026</td>
                        <td>DR. CHAYASMITA DEKA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>496</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SHAHAB UDDIN AHMED</td>
                        <td>15-01-2026</td>
                        <td>DR. KARNIKA BHATTACHARYYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>497</td>
                        <td>RSHSS</td>
                        <td>ECONOMICS</td>
                        <td>SHRUTILEKHA BUZAR BARUAH</td>
                        <td>15-01-2026</td>
                        <td>DR. KARNIKA BHATTACHARYYA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>498</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>KASHMITA KALITA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) INDRANI SINGH RAI</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>499</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>ARMIN FIRDOUSHI BORBHUYAN</td>
                        <td>15-01-2026</td>
                        <td>DR. RADHIKA SHARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>500</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>NISHA BHUYAN</td>
                        <td>15-01-2026</td>
                        <td>DR. JASMINE CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>501</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>JOHN MICHAEL M MARBOH</td>
                        <td>15-01-2026</td>
                        <td>DR. PRABUDDHA GHOSH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>502</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>PRACHURJYA BHUYAN</td>
                        <td>15-01-2026</td>
                        <td>DR. BISALAKSHI SAWARNI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>503</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>REPSALU LONGMAILAI BODO</td>
                        <td>15-01-2026</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>504</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>TABASSUM TASDIQUE</td>
                        <td>15-01-2026</td>
                        <td>DR. PRONAMI BHATTACHARYYA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>505</td>
                        <td>RSL</td>
                        <td>ENGLISH</td>
                        <td>LALTLANZUOL KHAWBUNG</td>
                        <td>15-01-2026</td>
                        <td>DR. RADHIKA SHARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>506</td>
                        <td>RSMAS</td>
                        <td>FOOD SCIENCE & NUTRITION</td>
                        <td>RUPAM MEDHI</td>
                        <td>15-01-2026</td>
                        <td>DR. JON JYOTI KALITA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>507</td>
                        <td>RSLSC</td>
                        <td>FORESTRY</td>
                        <td>DAJNEY MECH</td>
                        <td>15-01-2026</td>
                        <td>DR. PALLABI BORAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>508</td>
                        <td>RSEES</td>
                        <td>GEOLOGY</td>
                        <td>PRANJEET DEKA</td>
                        <td>15-01-2026</td>
                        <td>DR. NISHANTA SAHARIAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>509</td>
                        <td>RSEES</td>
                        <td>GEOLOGY</td>
                        <td>PRAKHAR PRAGYA</td>
                        <td>15-01-2026</td>
                        <td>DR. ROSHMI BORUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>510</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>SHILPI MAHANTA</td>
                        <td>15-01-2026</td>
                        <td>DR. TANIA BEGUM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>511</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>MAYANGLAMBAM NEERUPAMA</td>
                        <td>15-01-2026</td>
                        <td>DR. PREMMI WAHENGBAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>512</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>KATIKALA IMSONG</td>
                        <td>15-01-2026</td>
                        <td>DR. BISHNU KUMARI GURUNG</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>513</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>PRIYANKA DAS</td>
                        <td>15-01-2026</td>
                        <td>DR. MIR K CHOWDHARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>514</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>TIPCHIRA CH MARAK</td>
                        <td>15-01-2026</td>
                        <td>DR. SUSHMITA BANERJEE</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>515</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>MANBIAKLUN</td>
                        <td>15-01-2026</td>
                        <td>DR. MIR K CHOWDHARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>516</td>
                        <td>RSHSS</td>
                        <td>HISTORY</td>
                        <td>UTTARIKA BHATTACHARYA</td>
                        <td>15-01-2026</td>
                        <td>DR. KM SUDHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>517</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>BRANDON DOLEY BORAH</td>
                        <td>15-01-2026</td>
                        <td>DR. SUPRIYA SHIKARI</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>518</td>
                        <td>RSTTM</td>
                        <td>HOTEL MANAGEMENT/TRAVEL & TOURISM MANAGEMENT</td>
                        <td>DIKHYANT RATH</td>
                        <td>15-01-2026</td>
                        <td>DR. PIYUSH GUPTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>519</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>DEBENDRA DEV SARMA</td>
                        <td>15-01-2026</td>
                        <td>DR. PRANAB JYOTI SARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>520</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>KALPANA BASUMATARY</td>
                        <td>15-01-2026</td>
                        <td>DR. PRANAB JYOTI SARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>521</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>GAGEN KAKATI</td>
                        <td>15-01-2026</td>
                        <td>DR. PALME BORTHAKUR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>522</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>AJANJOY TRIPURA</td>
                        <td>15-01-2026</td>
                        <td>DR. PRANAB JYOTI SARMA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>523</td>
                        <td>IKS</td>
                        <td>INDIAN KNOWLEDGE SYSTEM</td>
                        <td>BHASKAR JYOTI DEBBARMA</td>
                        <td>15-01-2026</td>
                        <td>DR. SASWATI BORDOLOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>524</td>
                        <td>RSCOM</td>
                        <td>JOURNALISM AND MASS COMMUNICATION</td>
                        <td>YIMLIAKUM LONGKUMER</td>
                        <td>15-01-2026</td>
                        <td>DR. ANKITA AGARWAL</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>525</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ABIA THAKUR</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>526</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>NASHRAT MAJID</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>527</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>VIVEKA YUMNAM</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>528</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>LOHIT KUMAR SAIKIA</td>
                        <td>15-01-2026</td>
                        <td>DR. PRANITA CHAUDHURY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>529</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>BAGMITA MAZUMDER</td>
                        <td>15-01-2026</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>530</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>FATIMA ZAREEN NONGBRI</td>
                        <td>15-01-2026</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>531</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SABREEN SHEIKH</td>
                        <td>15-01-2026</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>532</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PAREE SAIKIA</td>
                        <td>15-01-2026</td>
                        <td>DR. MOMINA ZAHAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>533</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>PREMICA LUMPHUI</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>534</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RICHEETA MAHESHWARI</td>
                        <td>15-01-2026</td>
                        <td>DR. SUMIT AGARWALA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>535</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RAJ NARAYAN MEDHI</td>
                        <td>15-01-2026</td>
                        <td>DR. BHUPALI SAIKIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>536</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SWAPNALEE KALITA</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>537</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SARKORIM TERON MILIK</td>
                        <td>15-01-2026</td>
                        <td>DR. JAHNAVI BHANDARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>538</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>ANIRBAN PATHAK</td>
                        <td>15-01-2026</td>
                        <td>DR. JAHNAVI BHANDARI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>539</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>RANGLUNGCHUNG. N. ZELIANG</td>
                        <td>15-01-2026</td>
                        <td>DR. KAVITA JAIN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>540</td>
                        <td>RSLA</td>
                        <td>LAW & ADMINISTRATION</td>
                        <td>SIMRAN SHIRAZ SAIKIA</td>
                        <td>15-01-2026</td>
                        <td>DR. SAIF RASUL KHAN</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>541</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>BHAGYASHREE KASHYAP</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>542</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>PAPARI HALOI</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>543</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>BIJU NARZARY</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>544</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>ELWIN ZOHMINGLIEN THANGJOM</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>545</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>PUJA TAMANG</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>546</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>ANINDITA SANDILYA</td>
                        <td>15-01-2026</td>
                        <td>DR. NILANJANA PURKAYASTHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>547</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>NABAMALLIKA KRISHNATREYA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>548</td>
                        <td>RSLISC</td>
                        <td>LIBRARY AND INFORMATION SCIENCE</td>
                        <td>LABA KUMAR KALITA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) DOMINIC J</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>549</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>AMAR KRISHNA PAUL</td>
                        <td>15-01-2026</td>
                        <td>DR. RISHI CHAKRAVARTY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>550</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>VINAY KUMAR MISHRA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) GEORGE AP</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>551</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>DEEPA R SANGMA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) D.N. SINGH</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>552</td>
                        <td>RSB</td>
                        <td>MANAGEMENT</td>
                        <td>RAHUL ANAND</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) D.N. SINGH</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>553</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>ASIFA AHMED</td>
                        <td>15-01-2026</td>
                        <td>DR. MARBARISHA M. KHARKONGOR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>554</td>
                        <td>RSAPS</td>
                        <td>MATHEMATICS</td>
                        <td>LAKHIMA HAZARIKA</td>
                        <td>15-01-2026</td>
                        <td>DR. BAPAN KALITA</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>555</td>
                        <td>RSMAS</td>
                        <td>MEDICAL LABORATORY TECHNOLOGY</td>
                        <td>ANIRUDDHA SEN</td>
                        <td>15-01-2026</td>
                        <td>DR. RUPESH KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>556</td>
                        <td>RSMAS</td>
                        <td>MEDICAL LABORATORY TECHNOLOGY</td>
                        <td>RAKIBUL ISLAM SARKAR</td>
                        <td>15-01-2026</td>
                        <td>DR. RUPESH KUMAR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>557</td>
                        <td>RSBSC</td>
                        <td>MICROBIOLOGY</td>
                        <td>BHUPALI KALITA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) AMLAN DAS</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>558</td>
                        <td>RSMAS</td>
                        <td>OPTOMETRY</td>
                        <td>HAZIEL RYNJAH</td>
                        <td>15-01-2026</td>
                        <td>DR. MADHUSMITA KOCH</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>559</td>
                        <td>RSMAS</td>
                        <td>OPTOMETRY</td>
                        <td>KUMAR MAGAR</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>560</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>JABIN AHMED</td>
                        <td>15-01-2026</td>
                        <td>DR. AYESHA AK CHOUDHURY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>561</td>
                        <td>RSP</td>
                        <td>PHARMACY</td>
                        <td>HIMADRI PRIYA GOGOI</td>
                        <td>15-01-2026</td>
                        <td>DR. MUKTA AGARWAL</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>562</td>
                        <td>RSAPS</td>
                        <td>PHYSICS</td>
                        <td>JERIF ZAYEED</td>
                        <td>15-01-2026</td>
                        <td>DR. DEVIKA PHUKAN</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>563</td>
                        <td>RSMAS</td>
                        <td>PHYSIOTHERAPY</td>
                        <td>CHAYANIKA DAS</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>564</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>AKANGSHA SAHA</td>
                        <td>15-01-2026</td>
                        <td>DR. AKASH SINGH THAKUR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>565</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>JIGYASHI SAIKIA</td>
                        <td>15-01-2026</td>
                        <td>DR. AKASH SINGH THAKUR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>566</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>PRETTY GAIDUNLU PANMEI</td>
                        <td>15-01-2026</td>
                        <td>DR. AKASH SINGH THAKUR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>567</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>KUNDAN HAZARIKA</td>
                        <td>15-01-2026</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>568</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SEMIM AKHTARA</td>
                        <td>15-01-2026</td>
                        <td>DR. AKASH SINGH THAKUR</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>569</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>MUSKAN MAHBUB</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>570</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>CHECHERA CHIRINGCHI CH MARAK</td>
                        <td>15-01-2026</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>571</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SHEIKH MOHAMMED JUNAYED</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>572</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>RUBINA SARKAR</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>573</td>
                        <td>RSHSS</td>
                        <td>POLITICAL SCIENCE</td>
                        <td>SWETANGANA BHUYAN</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) SURAJIT CHANDRA MUKHOPADHYAY</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>574</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>SHREYASI SARKAR</td>
                        <td>15-01-2026</td>
                        <td>DR. TEJOSWITA GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>575</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>RAKWASA DENAMME N MARAK</td>
                        <td>15-01-2026</td>
                        <td>DR. TEJOSWITA GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>576</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>KAJOL SINGH THAKURI</td>
                        <td>15-01-2026</td>
                        <td>DR. TEJOSWITA GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>577</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>KESHMITA KASHYAP</td>
                        <td>15-01-2026</td>
                        <td>DR. TEJOSWITA GOGOI</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>578</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>POOJA BASUMATARY</td>
                        <td>15-01-2026</td>
                        <td>DR. RAVINA KHUMANLAMBAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>579</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>MAHASHWETA DUTTA</td>
                        <td>15-01-2026</td>
                        <td>DR. RAVINA KHUMANLAMBAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>580</td>
                        <td>RSBAS</td>
                        <td>PSYCHOLOGY</td>
                        <td>ARCHANA BHUYAN</td>
                        <td>15-01-2026</td>
                        <td>DR. RAVINA KHUMANLAMBAM</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>581</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>STEVENSON THABAH</td>
                        <td>15-01-2026</td>
                        <td>DR. DHIRAJ KUMAR BORKOTOKY</td>
                        <td>ASSOCIATE PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>582</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>REENA SHUKLA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) SHALINI SAXENA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>583</td>
                        <td>RSHSS</td>
                        <td>PUBLIC ADMINISTRATION</td>
                        <td>JISHU KUMAR BARUAH</td>
                        <td>15-01-2026</td>
                        <td>DR. Y MONOJIT SINGHA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>584</td>
                        <td>RSMAS</td>
                        <td>RADIOGRAPHY AND ADVANCED IMAGING TECHNOLOGY</td>
                        <td>MEGHNA GUHA</td>
                        <td>15-01-2026</td>
                        <td>PROF. (DR.) ABHIJIT DUTTA</td>
                        <td>PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>585</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>BHASKAR JYOTI DUTTA</td>
                        <td>15-01-2026</td>
                        <td>DR. BITOPI DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>586</td>
                        <td>RSHSS</td>
                        <td>SOCIAL WORK</td>
                        <td>DIKSHA GOGOI</td>
                        <td>15-01-2026</td>
                        <td>DR. DEBANGANA BARUAH</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>587</td>
                        <td>RSHSS</td>
                        <td>SOCIOLOGY</td>
                        <td>RAHUL GOWALA</td>
                        <td>15-01-2026</td>
                        <td>DR. TRISHNA MANI THAKURIA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>588</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>KYRPANG MARWEIN</td>
                        <td>15-01-2026</td>
                        <td>DR. DIKSHA DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>589</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>ARIANE B MARAK</td>
                        <td>15-01-2026</td>
                        <td>DR. MANDIRA BASUMATARY</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>590</td>
                        <td>RSLSC</td>
                        <td>ZOOLOGY</td>
                        <td>DIGHA PHUKAN</td>
                        <td>15-01-2026</td>
                        <td>DR. DIKSHA DUTTA</td>
                        <td>ASSISTANT PROFESSOR</td>
                        <td>N/A</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
@endsection

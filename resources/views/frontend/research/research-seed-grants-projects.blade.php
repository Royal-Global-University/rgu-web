@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover; padding-top: 90px; position: relative;">
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    RGU Seed <span style="color: #FF9A1E; font-weight: 500;">Grant Projects</span></h2>

                <div class="table-responsive">

                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-3 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-center">#</th>
                            <th class="text-center">FACULTY</th>
                            <th class="text-center">DEPARTMENT</th>
                            <th class="text-center">SCIENCE/NO N-SCIENCE</th>
                            <th class="text-center">TITLE OF THE PROJECT</th>
                            <th class="text-center">Budget</th>
                            <th class="text-center">Project Duration</th>
                            <th class="text-center">W.E.F</th>
                        </thead>
                        <tbody class="para1 text-center" style="background-color: #fff !important; ">
                            <tr>
                                <td><b>RHSS</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Dr. Priyanka Patowary </td>
                                <td>Social Work
                                </td>
                                <td>Non-Science</td>
                                <td>Battle over chores: Gender, Household Labour and Marital Satisfaction in the city of
                                    Guwahati</td>
                                <td>1,00,000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. T Luithmiwung Awungshi</td>
                                <td>Social Work
                                </td>
                                <td>Non-Science</td>
                                <td>Street children and substance Abuse: An investigation in the Kamrup Metro Region of Assam.
                                </td>
                                <td>1,00,000</td>
                                <td>1 year</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Y. Monojit Singha</td>
                                <td>Political Science
                                </td>
                                <td>Non-Science</td>
                                <td> Effectiveness of Legal Service Authority Act, 1987 in Delivering Free Legal Aid Services in
                                    Hailakandi
                                    Districts of Assam</td>
                                <td>1,50,000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. Anjuman Ara Begum</td>
                                <td>Law
                                </td>
                                <td>Non-Science</td>
                                <td>Right to Education (Act of 2009) in Tea Garden of Assam and it's implementation: A
                                    Socio-legal Study
                                </td>
                                <td>10000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Meenu Sharma (PI)
                                    <hr> Dr. Aruna Dev Rroy (Co-PI)
                                </td>
                                <td>Public Administration
                                    <hr> Commerce
                                </td>
                                <td>Non-Science
                                    <hr>
                                </td>
                                <td>Socio-Economic Development of the People Residing in the International Border Areas in North
                                    East Region
                                </td>
                                <td>1,00,000</td>
                                <td>1 year 3 months</td>
                                <td> 03.04.2024</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. Stuti Goswami</td>
                                <td>English
                                </td>
                                <td>Non-Science</td>
                                <td>Climate Change and Springtime Rituals in India's North East</td>
                                <td>1,00,000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHPP</b></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. Debarupa Dutta Chakraborty</td>
                                <td>Pharmacy
                                </td>
                                <td>Science</td>
                                <td>Embedding of Zinc Oxide Nanoparticles in Cellulosic Network for Fresh Food Packing</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHN</b></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ms. Momi Dehingia
                                    <hr>Ms. Mini Medhi
                                    <hr> Ms. Simi Das Purkayastha
                                    <hr> Prof. (Dr.) Kaveri Saikia
                                </td>
                                <td>Nursing
                                </td>
                                <td>Science</td>
                                <td>A concurrent Evaluation of the nutritional status of Urban Children and their linkages to
                                    the
                                    utilization of ICDS Scheme: A study in the Guwahati City</td>
                                <td>140000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Mrs. Bhanita Barman (PI)
                                    <hr> Prof. (Dr.) Hemeswari Bhuyan (Co-PI)
                                </td>
                                <td>Nursing
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Efficacy of pudina extract on dysmenorrhea among the young female students of the Assam
                                    Royal Global
                                    University</td>
                                <td>70000</td>
                                <td>6 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Ms. Kangkana Talukdar (PI)
                                    <hr> Mrs. Aziza Begum(Co-PI)
                                    <hr> Prof. (Dr.) Hemeswari Bhuyan (Co-PI)
                                </td>
                                <td>Nursing
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Screening of Sickle Cell Anaemia among the indegineous population under Rani CHC, Guwahati,
                                    Assam</td>
                                <td>100000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHD</b></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Susmita Nath</td>
                                <td> Communication Design
                                </td>
                                <td>Science</td>
                                <td>Nature-Inspired Tech: Bamboo Laptop Case Design</td>
                                <td>140000</td>
                                <td>2 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHET</b></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Anupam Das (PI)</td>
                                <td> CSE
                                </td>
                                <td>Science</td>
                                <td>An Intelligent Sensor-based Biodegradable Waste Collection Unit for Sustainable Waste
                                    Management</td>
                                <td>279000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSAPS/IIC</b></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Sankar Barman(PI)
                                    <hr> Dr. Gitanjal Deka
                                    <hr> Dr. Hirak Ranjan Das (Co-PI-1
                                </td>
                                <td> Physics
                                    <hr> Physics
                                    <hr> IIC Cell
                                </td>
                                <td>Science

                                </td>
                                <td>Hortizontal Water Filter Customised for the Flood Prone Area</td>
                                <td>28000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSBSC</b></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Dr. Anuj Kumar Borah </td>
                                <td>Biochemistry
                                </td>
                                <td>Science

                                </td>
                                <td>Investigation of the effect of Myricetin on Acarbose inhibition of intestinal carbohydrate
                                    digestion
                                </td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Dr. Sthiti Porna Dutta</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Toxicity study of Flemingia Strobilifera using mice for development of a plant based
                                    mosquito repellent
                                </td>
                                <td>100000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Dr. Chongtham Sovachandra Singh</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Exploring the anticancer potential of Scutellaria discolor Colebr. in mammalian cells</td>
                                <td>150000</td>
                                <td>1 year 5months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Dr. Taranga Jyoti Baruah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Screening of a few locally available prospective plant species for their ability to
                                    alleviate
                                    microplastic-induced damages in eukaryotic cells</td>
                                <td>100000</td>
                                <td>1 year 3 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Dr. Amlan Das</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Exploring the Antimicrobial Impact of Cuminaldehyde on Ampicillin-Sensitive and
                                    Ampicillin-Resistant
                                    E,coli: Targeting the Bacterial Divisome Complex and Assessing Combinatorial Effects with
                                    Commercially
                                    Available Antibiotics</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Dr. Rupshikha Patowary</td>
                                <td>Biotechnology
                                </td>
                                <td>Science

                                </td>
                                <td>Development of green and cost effective bio-based composite for potential removal of heavy
                                    metal from
                                    wastewater</td>
                                <td>130000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Dr. Debajit Borah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Valorization of tea waste derived biochar with zinc oxide nanoparticles (ZnO NPs) for
                                    azo-dye removal
                                    from water : a sustainable circular economic approach</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Dr. Rupesh Kumar</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>To investigate the bacterial diversity and antibiotic resistance pattern of uropathogens
                                    causing urinary
                                    tract infection among female population in the northeast, India</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Dr. Bhaskarjyoti Gogoi</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>In vitro and in vivo based evaluation on the antidiabetic property of potential probiotic
                                    strain
                                    isolated from Traditionally used Fermented Foods of Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Dr. Siddhartha Narayan Borah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Production , characterization and potential application of agricultural waste-derived
                                    biochar for heavy
                                    metal and microplastic removal: A circular economy approach</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Dr. Ranjan Dutta Kalita</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Isolation and characterization of endophytic fungi from traditional medicinal plants Costus
                                    pictus
                                    (insulin plant) and Costus speciosus (jomlakhuti) and a study of their antidiabetic,
                                    antioxidant and
                                    anti-microbial properties</td>
                                <td>145000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Dr. Niraj Singh(PI)
                                    <hr> Dr. Pankaj Losan Sarma (Co-PI)
                                </td>
                                <td>Microbiology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Tomato Guardians: Exploring Antagonist Microbiota of Wilt tolerant Tomato Cultivars to
                                    Engineer a Potent
                                    Biocontrol Consortium Against Ralstonia solanacearum Wilt Disease</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Dr. Birson Ingti</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Validation of selected medicinal plant extracts as betalactamase inhibitors: An effort to
                                    restore the
                                    efficacy of existing antibiotics.</td>
                                <td>80000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Dr. Pratikshya Borah</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Investigation of the role of the Rice-F-Box Protein, OsFBK1, in the regulation of lignin
                                    metabolism and
                                    root development in response to salinity stress</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>10.04.2024</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Dr. Anushree Baruah</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Synthesis and characterization of biochar as an additive fertilizer for and enhanced yeild
                                    and improved
                                    soil nutrient status in pigmented and non-pigmented Rice of Assam, India.</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Dr. Upasana Chettry</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Molecular analysis of secondary metabolite accumulation and biosynthesis in black turmeric
                                    (Curcuma
                                    caesia) from North-East India</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Dr. Manalee Paul</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>A study on the diversity of Lepitoid mushroom in Northern Assam</td>
                                <td>75000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Dr. Dharmeswar Barhoi</td>
                                <td>Zoology
                                </td>
                                <td>Science

                                </td>
                                <td>Investigating the involvement of Drug-Metabolizing Enzymes and Cytochrome P450, in
                                    Arsenic-Induced
                                    Hepatotoxity and exploring the protective efficacy of Moringa Oleifera against As-induced
                                    Hepatotoxicity
                                </td>
                                <td>168000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Mr. Anurudha Chakraborty</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td></td>
                                <td>75000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Ms. Sangeeta Biswas</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>A study on Monogenean diversity in commercially important fishes of Kamrup (M) , Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Dr. Abesh Chakraborty</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Isolation and Characterization of microbiota associated with the Flith Flies</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSEES</b></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Dr. Neeta Moni Sharma (PI)
                                    <hr> Mr Amarjyoti Borah (CoPI)
                                </td>
                                <td>Geology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Unveiling the Age of Lichi Volcanics in Papumpare District, Arunachal Pradesh, NE India: A
                                    Paleomagnetic
                                    Perspective"</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Dr. Roshmi Boruah (PI)
                                    <hr> Dr. Nishanta Sahariah (CoPI)
                                </td>
                                <td>Geology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Tectono-sedimentation History and Hydrocarbon Potential of the Tura Formation exposed in
                                    Garo Hills,
                                    Meghalaya NE India</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Dr. Abhijit Gogoi</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessment of Gold in Pyrite in a shear -Dominated regime in a part of Dima Hasao District
                                    of Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>04.04.2024</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Dr. Pallabi Borah (PI)</td>
                                <td>Environmental Science
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessing the nexus of microplastic contamination in agricultural soils of
                                    Kharupetia-Dalgaon Belt,
                                    Assam: Implications for achieving the UN SDG 3</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Dr. Pallabi Borah (PI)
                                    <hr> Dr. Demsai Reang (CoPI)
                                </td>
                                <td>Environmental Science
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessing the nexus of microplastic contamination in agricultural soils of
                                    Kharupetia-Dalgaon Belt,
                                    Assam: Implications for achieving the UN SDG 3</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Dr. Demsai Reang (PI)</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Evaluating Urban Green Carbon pools in Guwahati: A Blueprint for mitigating Climate Risk and
                                    Urban Heat
                                    Island Intensity</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Dr. Maidul Islam</td>
                                <td>Physics
                                </td>
                                <td>Science

                                </td>
                                <td>Near field coupling in nested Meta-waveguide design in terahertz regime</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>04.04.2024</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Dr. Sanchita Roy
                                    <hr> Dr Ranjan Dutta Kalita
                                </td>
                                <td>Physics
                                    <hr> Biotechnology
                                </td>
                                <td>Science
                                </td>
                                <td>Exporing Microplastics by using light scattering technique</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Dr. Gitanjal Deka
                                    <hr> Dr. Debojit Sahu
                                </td>
                                <td>Physics
                                    <hr> Chemistry
                                </td>
                                <td>Science
                                </td>
                                <td>Cost Effective Production of Magnetic Iron Oxide Nanoparticles</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Dr. Binoyargha Dam </td>
                                <td> Chemistry
                                </td>
                                <td>Science
                                </td>
                                <td>Visible-light mediated difunctionalization of carbon-carbon triple bonds or double bonds by
                                    using
                                    recyclable graphitic carbon nitride as photocatalyst</td>
                                <td>150000</td>
                                <td>1 year 6 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Dr. Debojeet Sahu </td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Visible light assisted photocatalytic Suzuki-Miyaura coupling reaction using immobilized
                                    palladium
                                    nanoparticles</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Dr. Biswajit Sarma</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Extraction, characterization and application of Natural Eco-friendly dye from selected plant
                                    sources for
                                    the textile materials</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>H. Imo Mani Singha</td>
                                <td> Mathematics
                                </td>
                                <td>Science
                                </td>
                                <td>Analysis of the behaviour of Smokers by Fractional Mathematical Modelling using Laplace
                                    Decomposition
                                    Method</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Dr. Anuja Sinha</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Effect of magnetic field on a viscous hybrid nanofluid flow over a non-linearly shrinking
                                    sheet with
                                    power law-velocity</td>
                                <td>100000</td>
                                <td>1 year 6 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Dr. Bimalendu Kalita</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Felbin-type Fuzzy Normed Linear Spaces and Inner Product Spaces: A Comprehensive Study</td>
                                <td>100000</td>
                                <td>1 year </td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Dr. Bapan Kalita</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Cardiovascular Disease: A Mathematical Overview</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Dr. Kamal Debnath</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Mathematical modelling Based on rheological flow parameters of underutilized juicy Kordoi
                                    (Averrhoa
                                    Carambola) of Assam for food processing applications</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSBSC</b></td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Dr. Hemanta Chutia</td>
                                <td>Food Technology
                                </td>
                                <td>Science
                                </td>
                                <td>Characterization of Starch Powder extracted from different potatoes available in Assam and
                                    its physical
                                    modification</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Dr. Pankaj Losan Sarma (PI)
                                    <hr> Dr. Niraj Singh (Co-PI)
                                </td>
                                <td>Microbiology (Online)
                                </td>
                                <td>Science
                                </td>
                                <td>Enhancing crop resilience: Harnessing bacterial endophytes isolated from brinjal and chili
                                    seedlings
                                    grown in gnotobiotic condition to combat Ralstonia solanacearum-induced bacterial wilt
                                    disease</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Dr. Annu Kumari</td>
                                <td>Zoology
                                </td>
                                <td>Science
                                </td>
                                <td>Unravelling the protective potential of Clitoria ternatea in different tissues of Channa
                                    punctatus
                                    against malathion-induced toxicity</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Dr. Upashna Chettri</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Influence of conventional and organic farming on the microbial diversity and their
                                    functional signatures
                                    in the roots and rhizosphere of tea plants</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>


                        </tbody>
                    </table>

                </div>

            </div>
            `
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    RGU Seed <span style="color: #FF9A1E; font-weight: 500;">Grant Projects</span></h2>

                <div class="table-responsive">

                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-5 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-center">#</th>
                            <th class="text-center">FACULTY</th>
                            <th class="text-center">DEPARTMENT</th>
                            <th class="text-center">SCIENCE/NO N-SCIENCE</th>
                            <th class="text-center">TITLE OF THE PROJECT</th>
                            <th class="text-center">Budget</th>
                            <th class="text-center">Project Duration</th>
                            <th class="text-center">W.E.F</th>
                        </thead>
                        <tbody class="para1 text-center" style="background-color: #fff !important; ">
                            <tr>
                                <td><b>RHSS</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Dr. Priyanka Patowary </td>
                                <td>Social Work
                                </td>
                                <td>Non-Science</td>
                                <td>Battle over chores: Gender, Household Labour and Marital Satisfaction in the city of
                                    Guwahati</td>
                                <td>1,00,000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. T Luithmiwung Awungshi</td>
                                <td>Social Work
                                </td>
                                <td>Non-Science</td>
                                <td>Street children and substance Abuse: An investigation in the Kamrup Metro Region of Assam.
                                </td>
                                <td>1,00,000</td>
                                <td>1 year</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Y. Monojit Singha</td>
                                <td>Political Science
                                </td>
                                <td>Non-Science</td>
                                <td> Effectiveness of Legal Service Authority Act, 1987 in Delivering Free Legal Aid Services in
                                    Hailakandi
                                    Districts of Assam</td>
                                <td>1,50,000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. Anjuman Ara Begum</td>
                                <td>Law
                                </td>
                                <td>Non-Science</td>
                                <td>Right to Education (Act of 2009) in Tea Garden of Assam and it's implementation: A
                                    Socio-legal Study
                                </td>
                                <td>10000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Meenu Sharma (PI)
                                    <hr> Dr. Aruna Dev Rroy (Co-PI)
                                </td>
                                <td>Public Administration
                                    <hr> Commerce
                                </td>
                                <td>Non-Science
                                    <hr>
                                </td>
                                <td>Socio-Economic Development of the People Residing in the International Border Areas in North
                                    East Region
                                </td>
                                <td>1,00,000</td>
                                <td>1 year 3 months</td>
                                <td> 03.04.2024</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. Stuti Goswami</td>
                                <td>English
                                </td>
                                <td>Non-Science</td>
                                <td>Climate Change and Springtime Rituals in India's North East</td>
                                <td>1,00,000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHPP</b></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. Debarupa Dutta Chakraborty</td>
                                <td>Pharmacy
                                </td>
                                <td>Science</td>
                                <td>Embedding of Zinc Oxide Nanoparticles in Cellulosic Network for Fresh Food Packing</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHN</b></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ms. Momi Dehingia
                                    <hr>Ms. Mini Medhi
                                    <hr> Ms. Simi Das Purkayastha
                                    <hr> Prof. (Dr.) Kaveri Saikia
                                </td>
                                <td>Nursing
                                </td>
                                <td>Science</td>
                                <td>A concurrent Evaluation of the nutritional status of Urban Children and their linkages to
                                    the
                                    utilization of ICDS Scheme: A study in the Guwahati City</td>
                                <td>140000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Mrs. Bhanita Barman (PI)
                                    <hr> Prof. (Dr.) Hemeswari Bhuyan (Co-PI)
                                </td>
                                <td>Nursing
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Efficacy of pudina extract on dysmenorrhea among the young female students of the Assam
                                    Royal Global
                                    University</td>
                                <td>70000</td>
                                <td>6 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Ms. Kangkana Talukdar (PI)
                                    <hr> Mrs. Aziza Begum(Co-PI)
                                    <hr> Prof. (Dr.) Hemeswari Bhuyan (Co-PI)
                                </td>
                                <td>Nursing
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Screening of Sickle Cell Anaemia among the indegineous population under Rani CHC, Guwahati,
                                    Assam</td>
                                <td>100000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHD</b></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Susmita Nath</td>
                                <td> Communication Design
                                </td>
                                <td>Science</td>
                                <td>Nature-Inspired Tech: Bamboo Laptop Case Design</td>
                                <td>140000</td>
                                <td>2 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RHET</b></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Anupam Das (PI)</td>
                                <td> CSE
                                </td>
                                <td>Science</td>
                                <td>An Intelligent Sensor-based Biodegradable Waste Collection Unit for Sustainable Waste
                                    Management</td>
                                <td>279000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSAPS/IIC</b></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Sankar Barman(PI)
                                    <hr> Dr. Gitanjal Deka
                                    <hr> Dr. Hirak Ranjan Das (Co-PI-1
                                </td>
                                <td> Physics
                                    <hr> Physics
                                    <hr> IIC Cell
                                </td>
                                <td>Science

                                </td>
                                <td>Hortizontal Water Filter Customised for the Flood Prone Area</td>
                                <td>28000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSBSC</b></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Dr. Anuj Kumar Borah </td>
                                <td>Biochemistry
                                </td>
                                <td>Science

                                </td>
                                <td>Investigation of the effect of Myricetin on Acarbose inhibition of intestinal carbohydrate
                                    digestion
                                </td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Dr. Sthiti Porna Dutta</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Toxicity study of Flemingia Strobilifera using mice for development of a plant based
                                    mosquito repellent
                                </td>
                                <td>100000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Dr. Chongtham Sovachandra Singh</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Exploring the anticancer potential of Scutellaria discolor Colebr. in mammalian cells</td>
                                <td>150000</td>
                                <td>1 year 5months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Dr. Taranga Jyoti Baruah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Screening of a few locally available prospective plant species for their ability to
                                    alleviate
                                    microplastic-induced damages in eukaryotic cells</td>
                                <td>100000</td>
                                <td>1 year 3 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Dr. Amlan Das</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Exploring the Antimicrobial Impact of Cuminaldehyde on Ampicillin-Sensitive and
                                    Ampicillin-Resistant
                                    E,coli: Targeting the Bacterial Divisome Complex and Assessing Combinatorial Effects with
                                    Commercially
                                    Available Antibiotics</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Dr. Rupshikha Patowary</td>
                                <td>Biotechnology
                                </td>
                                <td>Science

                                </td>
                                <td>Development of green and cost effective bio-based composite for potential removal of heavy
                                    metal from
                                    wastewater</td>
                                <td>130000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Dr. Debajit Borah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Valorization of tea waste derived biochar with zinc oxide nanoparticles (ZnO NPs) for
                                    azo-dye removal
                                    from water : a sustainable circular economic approach</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Dr. Rupesh Kumar</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>To investigate the bacterial diversity and antibiotic resistance pattern of uropathogens
                                    causing urinary
                                    tract infection among female population in the northeast, India</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Dr. Bhaskarjyoti Gogoi</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>In vitro and in vivo based evaluation on the antidiabetic property of potential probiotic
                                    strain
                                    isolated from Traditionally used Fermented Foods of Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Dr. Siddhartha Narayan Borah</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Production , characterization and potential application of agricultural waste-derived
                                    biochar for heavy
                                    metal and microplastic removal: A circular economy approach</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Dr. Ranjan Dutta Kalita</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Isolation and characterization of endophytic fungi from traditional medicinal plants Costus
                                    pictus
                                    (insulin plant) and Costus speciosus (jomlakhuti) and a study of their antidiabetic,
                                    antioxidant and
                                    anti-microbial properties</td>
                                <td>145000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Dr. Niraj Singh(PI)
                                    <hr> Dr. Pankaj Losan Sarma (Co-PI)
                                </td>
                                <td>Microbiology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Tomato Guardians: Exploring Antagonist Microbiota of Wilt tolerant Tomato Cultivars to
                                    Engineer a Potent
                                    Biocontrol Consortium Against Ralstonia solanacearum Wilt Disease</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Dr. Birson Ingti</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Validation of selected medicinal plant extracts as betalactamase inhibitors: An effort to
                                    restore the
                                    efficacy of existing antibiotics.</td>
                                <td>80000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Dr. Pratikshya Borah</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Investigation of the role of the Rice-F-Box Protein, OsFBK1, in the regulation of lignin
                                    metabolism and
                                    root development in response to salinity stress</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>10.04.2024</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Dr. Anushree Baruah</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Synthesis and characterization of biochar as an additive fertilizer for and enhanced yeild
                                    and improved
                                    soil nutrient status in pigmented and non-pigmented Rice of Assam, India.</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Dr. Upasana Chettry</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Molecular analysis of secondary metabolite accumulation and biosynthesis in black turmeric
                                    (Curcuma
                                    caesia) from North-East India</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Dr. Manalee Paul</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>A study on the diversity of Lepitoid mushroom in Northern Assam</td>
                                <td>75000</td>
                                <td>1 year</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Dr. Dharmeswar Barhoi</td>
                                <td>Zoology
                                </td>
                                <td>Science

                                </td>
                                <td>Investigating the involvement of Drug-Metabolizing Enzymes and Cytochrome P450, in
                                    Arsenic-Induced
                                    Hepatotoxity and exploring the protective efficacy of Moringa Oleifera against As-induced
                                    Hepatotoxicity
                                </td>
                                <td>168000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Mr. Anurudha Chakraborty</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td></td>
                                <td>75000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Ms. Sangeeta Biswas</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>A study on Monogenean diversity in commercially important fishes of Kamrup (M) , Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Dr. Abesh Chakraborty</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Isolation and Characterization of microbiota associated with the Flith Flies</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSEES</b></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Dr. Neeta Moni Sharma (PI)
                                    <hr> Mr Amarjyoti Borah (CoPI)
                                </td>
                                <td>Geology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Unveiling the Age of Lichi Volcanics in Papumpare District, Arunachal Pradesh, NE India: A
                                    Paleomagnetic
                                    Perspective"</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Dr. Roshmi Boruah (PI)
                                    <hr> Dr. Nishanta Sahariah (CoPI)
                                </td>
                                <td>Geology
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Tectono-sedimentation History and Hydrocarbon Potential of the Tura Formation exposed in
                                    Garo Hills,
                                    Meghalaya NE India</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Dr. Abhijit Gogoi</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessment of Gold in Pyrite in a shear -Dominated regime in a part of Dima Hasao District
                                    of Assam</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>04.04.2024</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Dr. Pallabi Borah (PI)</td>
                                <td>Environmental Science
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessing the nexus of microplastic contamination in agricultural soils of
                                    Kharupetia-Dalgaon Belt,
                                    Assam: Implications for achieving the UN SDG 3</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Dr. Pallabi Borah (PI)
                                    <hr> Dr. Demsai Reang (CoPI)
                                </td>
                                <td>Environmental Science
                                    <hr>
                                </td>
                                <td>Science

                                </td>
                                <td>Assessing the nexus of microplastic contamination in agricultural soils of
                                    Kharupetia-Dalgaon Belt,
                                    Assam: Implications for achieving the UN SDG 3</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Dr. Demsai Reang (PI)</td>
                                <td>
                                </td>
                                <td>Science

                                </td>
                                <td>Evaluating Urban Green Carbon pools in Guwahati: A Blueprint for mitigating Climate Risk and
                                    Urban Heat
                                    Island Intensity</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Dr. Maidul Islam</td>
                                <td>Physics
                                </td>
                                <td>Science

                                </td>
                                <td>Near field coupling in nested Meta-waveguide design in terahertz regime</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>04.04.2024</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Dr. Sanchita Roy
                                    <hr> Dr Ranjan Dutta Kalita
                                </td>
                                <td>Physics
                                    <hr> Biotechnology
                                </td>
                                <td>Science
                                </td>
                                <td>Exporing Microplastics by using light scattering technique</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Dr. Gitanjal Deka
                                    <hr> Dr. Debojit Sahu
                                </td>
                                <td>Physics
                                    <hr> Chemistry
                                </td>
                                <td>Science
                                </td>
                                <td>Cost Effective Production of Magnetic Iron Oxide Nanoparticles</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Dr. Binoyargha Dam </td>
                                <td> Chemistry
                                </td>
                                <td>Science
                                </td>
                                <td>Visible-light mediated difunctionalization of carbon-carbon triple bonds or double bonds by
                                    using
                                    recyclable graphitic carbon nitride as photocatalyst</td>
                                <td>150000</td>
                                <td>1 year 6 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Dr. Debojeet Sahu </td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Visible light assisted photocatalytic Suzuki-Miyaura coupling reaction using immobilized
                                    palladium
                                    nanoparticles</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Dr. Biswajit Sarma</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Extraction, characterization and application of Natural Eco-friendly dye from selected plant
                                    sources for
                                    the textile materials</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>H. Imo Mani Singha</td>
                                <td> Mathematics
                                </td>
                                <td>Science
                                </td>
                                <td>Analysis of the behaviour of Smokers by Fractional Mathematical Modelling using Laplace
                                    Decomposition
                                    Method</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Dr. Anuja Sinha</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Effect of magnetic field on a viscous hybrid nanofluid flow over a non-linearly shrinking
                                    sheet with
                                    power law-velocity</td>
                                <td>100000</td>
                                <td>1 year 6 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Dr. Bimalendu Kalita</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Felbin-type Fuzzy Normed Linear Spaces and Inner Product Spaces: A Comprehensive Study</td>
                                <td>100000</td>
                                <td>1 year </td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Dr. Bapan Kalita</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Cardiovascular Disease: A Mathematical Overview</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Dr. Kamal Debnath</td>
                                <td>
                                </td>
                                <td>Science
                                </td>
                                <td>Mathematical modelling Based on rheological flow parameters of underutilized juicy Kordoi
                                    (Averrhoa
                                    Carambola) of Assam for food processing applications</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSBSC</b></td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Dr. Hemanta Chutia</td>
                                <td>Food Technology
                                </td>
                                <td>Science
                                </td>
                                <td>Characterization of Starch Powder extracted from different potatoes available in Assam and
                                    its physical
                                    modification</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>03.04.2024</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Dr. Pankaj Losan Sarma (PI)
                                    <hr> Dr. Niraj Singh (Co-PI)
                                </td>
                                <td>Microbiology (Online)
                                </td>
                                <td>Science
                                </td>
                                <td>Enhancing crop resilience: Harnessing bacterial endophytes isolated from brinjal and chili
                                    seedlings
                                    grown in gnotobiotic condition to combat Ralstonia solanacearum-induced bacterial wilt
                                    disease</td>
                                <td>150000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td><b>RSLSC</b></td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Dr. Annu Kumari</td>
                                <td>Zoology
                                </td>
                                <td>Science
                                </td>
                                <td>Unravelling the protective potential of Clitoria ternatea in different tissues of Channa
                                    punctatus
                                    against malathion-induced toxicity</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Dr. Upashna Chettri</td>
                                <td>Botany
                                </td>
                                <td>Science

                                </td>
                                <td>Influence of conventional and organic farming on the microbial diversity and their
                                    functional signatures
                                    in the roots and rhizosphere of tea plants</td>
                                <td>100000</td>
                                <td>1 year 5 months</td>
                                <td>05.04.2024</td>
                            </tr>


                        </tbody>
                    </table>

                </div>

            </div>
            
        </section>
    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="headd1 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">Pate<span
                        style="color: #FF9A1E; font-weight: 500;">nts</span> </h2>


                <div class="table-responsive">
                    <table
                        class="overflow-hidden table text-wrap table-bordered table-striped border-top mt-3 pb-5 shadow-lg">
                        <thead class="text-white para1 text-center" style="background-color: #264273;">
                            <th style="font-size: 16px;" class="text-white">Sl. No.</th>
                            <th style="font-size: 16px;" class="text-white">Title of the invention</th>
                            <th style="font-size: 16px;" class="text-white">Inventor(s) Name</th>
                            <th style="font-size: 16px;" class="text-white">Category (Patent/ Design)</th>
                            <th style="font-size: 16px;" class="text-white">Filing No.</th>
                            <th style="font-size: 16px;" class="text-white">Country of filing</th>
                            <th style="font-size: 16px;" class="text-white">Date of filing</th>
                            <th style="font-size: 16px;" class="text-white">Date of publication (if published)</th>
                            <th style="font-size: 16px;" class="text-white">View</th>
                        </thead>

                        <tbody class="para1" style="background-color: #f7f7f7 !important;">

                            <tr>
                                <td>1</td>
                                <td>Polar azimuthal temperature dependant light scattering device</td>
                                <td>Dr. Sanchita Roy</td>
                                <td>Patent</td>
                                <td>202331056367</td>
                                <td>India</td>
                                <td>23/08/2023</td>
                                <td>03-01-2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PLANT LEAF DISEASE DETECTION USING COMPUTER VISION AND MACHINE LEARNING ALGORITHMS</td>
                                <td>Dr. Rashel Sarkar, Dr. Samarjit Das, Dr. Nilakshi Deka, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202431001745</td>
                                <td>India</td>
                                <td> 09/01/2024</td>
                                <td> 19/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/PLANT%20LEAF%20DISEASE%20DETECTION%20USING%20COMPUTER%20VISION%20AND%20MACHINE%20LEARNINGALGORITHMS.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>NANOPARTICLES BASED CANCER MEDICATION DEVICE</td>
                                <td>Dr RASHEL SARKAR,
                                    Dr. Nilakshi Deka, Dr. Samarjit Das, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202331085356</td>
                                <td>India</td>
                                <td> 14/12/2023</td>
                                <td> 19/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/NANOPARTICLES%20BASED%20CANCER%20MEDICATION%20DEVICE.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>AI Chemical Mixing Device for Agriculture</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6335750</td>
                                <td>United Kingdom</td>
                                <td>26/12/2023</td>
                                <td>22/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20Chemical%20Mixing%20Device%20for%20Agriculture.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>AI Based Seed Sowing Machine for Nursery</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>402915-001</td>
                                <td>India</td>
                                <td>22/12/2023</td>
                                <td>26/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20BASED%20SEED%20SOWING%20MACHINE%20FOR.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>AI BASED INTELLIGENT SYSTEM FOR WEATHER AND NATURAL DISASTERS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6339019</td>
                                <td>United Kingdom</td>
                                <td>12/01/2024</td>
                                <td>09/04/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20based%20Intelligent%20System%20for%20Weather%20and%20Natural%20Disasters.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>MACHINE LEARNING BASED FRUIT PRESERVATION CABIN </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>407934-001</td>
                                <td>India</td>
                                <td>18/02/2024</td>
                                <td>16/05/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/MACHINE%20LEARNING%20BASED%20FRUIT.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>MACHINE SMART BRAIN MONITORING HEADSET</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>411018-001 </td>
                                <td>India</td>
                                <td>19/03/2024</td>
                                <td>16/05/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/MACHINE%20SMART%20BRAIN%20MONITORING%20HEADSET.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>AI AND IMAGE PROCESSING BASED SEEDLING PLANTING MACHINE </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>411546-001</td>
                                <td>India</td>
                                <td>25/03/2024</td>
                                <td>30/05/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>10</td>
                                <td>IOT AND SOLAR BASED REAL TIME SMART
                                    TRAFFIC CONTROL MANAGEMEIVT
                                </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>422236-001</td>
                                <td>India</td>
                                <td>04/07/2024</td>
                                <td>05/09/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/IOT%20AND%20SOLAR%20BASED%20REAL%20TIME%20SMART.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>11</td>
                                <td> An Implanted medical device</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202431050042 A</td>
                                <td>India</td>
                                <td>29/06/2024</td>
                                <td>02/08/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>12</td>
                                <td>IoT based Physiotherapy Smart Upper Limb Exo</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202431049898 A</td>
                                <td>India</td>
                                <td>28/06/2024</td>
                                <td>02/08/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>A PROCESS FOR PRODUCING BANANA BEER AND A COMPOSITION FOR THE SAME</td>
                                <td>Dr. Debajit Borah, Dr. Bhaskarjyoti Gogoi, Arijit Kumar, Raktim Ranjan Gogoi, Dhanmoi
                                    Barman
                                </td>
                                <td>Patent</td>
                                <td>202431031585</td>
                                <td>India</td>
                                <td>20/04/2024</td>
                                <td>26/04/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>Data processing system for health advice</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6330072</td>
                                <td>United Kingdom</td>
                                <td>12/01/2023</td>
                                <td>22/02/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/Data%20processing%20system%20for%20health%20advice.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>WOUND HEALING TOPICAL OINTMENT FORMULATION BASED ON ESSENTIAL OIL OBTAINED FROM
                                    KAEMPFERIA
                                    GALANGA L</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331083484</td>
                                <td>India</td>
                                <td>12/07/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>A New Novel Framework to Analyze and Detect the MRI based Brain Tumors and Alzheimerâ€™s
                                    by
                                    using Convolution Neural Network</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331070252</td>
                                <td>India</td>
                                <td>16/10/2023</td>
                                <td>27/10/2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/A%20New%20Novel%20Framework%20to%20Analyze%20and%20Detect%20the%20MRI%20based%20Brain%20Tumors%20and%20Alzheimer’s%20by%20using%20Convolution%20Neural%20Network.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>A HYBRID APPROACH FOR ANALYSING OF EARLY-STAGE DETECTION AND PREVENTION OF LUNG CANCER
                                    USING
                                    ADVANCED MACHINE LEARNING AND DEEP LEARNING ALGORITHMS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331082502</td>
                                <td>India</td>
                                <td> 04/12/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/A%20HYBRID%20APPROACH%20FOR%20ANALYSING%20OF%20EARLY-STAGE%20DETECTIONAND%20PREVENTION%20OF%20LUNG%20CANCER%20USING%20ADVANCED%20MACHINELEARNING%20AND%20DEEP%20LEARNING%20ALGORITHMS.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>ML and AI Based Device for Skin Cancer Detection</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6328989</td>
                                <td>United Kingdom</td>
                                <td>26/11/2023</td>
                                <td>12-02-2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/ML%20and%20AI%20Based%20Device%20for%20Skin%20Cancer%20Detection.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>SYSTEM FOR ASSESSING CONSUMER PERCEPTION TOWARDS PRIVATE LABEL BRAND, AND METHOD
                                    THEREFOR
                                </td>
                                <td>Aruna Dev Roy, PAPARI NAYAK, RAJAT BHATTACHARJEE, MAHUYA DEB, TAHERA HOQUE MOZUMDAR,
                                    SANTUJIT
                                    CHANDA, RITUPARNA BARUAH</td>
                                <td>Patent</td>
                                <td>202331007386</td>
                                <td>India</td>
                                <td> 06/02/2023</td>
                                <td> 17/02/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>DESIGNING OF ULTRA LOW POWER WI-FI IOT MODULES</td>
                                <td>Anupam Das, Ishita Chakraborty, Vaskar Deka, Antara Malakar, Nayan Jyoti Kalita, Ankita
                                    Goyal
                                    Agarwala</td>
                                <td>Patent</td>
                                <td>202331015013</td>
                                <td>India</td>
                                <td> 06/03/2023</td>
                                <td>03/10/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>AN INTELLIGENT SENSOR BASED BIODEGRADABLE WASTE COLLECTION UNIT</td>
                                <td>Dr. Anupam Das, Dr Anupam Das, Dr Vaskar Deka, Dr Ishita Chakraborty, Dr Psrismita
                                    Sarma, Dr
                                    Mirzanur Rahman</td>
                                <td>Design</td>
                                <td>388951-001</td>
                                <td>India</td>
                                <td>23/06/2023 </td>
                                <td>25/08/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <td>PORTABLE ENVIRONMENTAL DATA MONITORING BOX</td>
                                <td>Dr Anupam Das</td>
                                <td>Design</td>
                                <td>390497-001</td>
                                <td>India</td>
                                <td>17/07/2023</td>
                                <td>10/06/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <td>Supersonic goggles with Arduino nano for blind people </td>
                                <td>ANJU DAS, TINA BANIA, RUNA CHAKRAVORTY, PAYAL DASGUPTA</td>
                                <td>Patent</td>
                                <td>202331006654</td>
                                <td>India</td>
                                <td>02/02/2023</td>
                                <td>02/10/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>A SYSTEM FOR EVALUATING THE MEDIATING EFFECT OF CONSUMER AWARENESS ON GREEN MARKETING
                                    MIX
                                    AND
                                    PURCHASE INTENTION AND METHOD THEREOF</td>
                                <td>ARUNA DEV RROY</td>
                                <td>Patent</td>
                                <td>202221029258</td>
                                <td>India</td>
                                <td> 20/05/2022</td>
                                <td> 03/06/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>A PORTABLE DEVICE TO CUT SOFT SHEETS IN CIRCULAR SHAPE WITH ADJUSTABLE RADIUS</td>
                                <td>Sankar Barman, Hirak Ranjan Das, Sasanka Boruah, Nirakar Nath</td>
                                <td>Patent</td>
                                <td>202231021448</td>
                                <td>India</td>
                                <td>04/11/2022</td>
                                <td> 22/07/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>26</td>
                                <td>â€¢ MARKER PEN MADE OF BIODEGRADABLE MATERIALS</td>
                                <td>Hirak Ranjan Das, Shankar Barman</td>
                                <td>Patent</td>
                                <td>202231045258</td>
                                <td>India</td>
                                <td>08/08/2022</td>
                                <td>09/09/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>27</td>
                                <td>CRITICALITY IDENTIFICATION THROUGH NATURAL LANGUAGE PROCESSING FOR EMERGENCY PHONE CALLS
                                </td>
                                <td>Dr Anupam Das</td>
                                <td>Patent</td>
                                <td>202221037757</td>
                                <td>India</td>
                                <td>30/06/2022</td>
                                <td> 22/07/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>SYNTHESIZING THREE DIMENSIONAL IMAGES USING DEEP CONVOLUTIONAL GENERATIVE ADVERSARIAL
                                    NETWORK
                                    (DCGAN) ALGORITHMS</td>
                                <td>Dr Anupam Das</td>
                                <td>Patent</td>
                                <td>202241048020</td>
                                <td>India</td>
                                <td> 23/08/2022</td>
                                <td> 16/09/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>29</td>
                                <td>AUTONOMOUS DRIVING ASSISTANCE TOOL BY COGNIZANCE AND COMPUTER VISION FUSION METHOD</td>
                                <td>Dr. Anupam Das</td>
                                <td>Patent</td>
                                <td>202221055586</td>
                                <td>India</td>
                                <td> 28/09/2022</td>
                                <td> 07/10/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>30</td>
                                <td>A NOVEL APPROACH TO LOAD BALANCING AND CLOUD COMPUTING SECURITY USING SSL IN IAAS
                                    ENVIRONMENT
                                </td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202131056646</td>
                                <td>India</td>
                                <td> 06/12/2021</td>
                                <td> 07/01/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>31</td>
                                <td>ARTIFICIAL INTELLIGENCE AND DEEP LEARNING BASED TECHNIQUE FOR UNDERSTANDING THE VARIOUS
                                    THERMOELECTRIC MATERIALS</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202231045556</td>
                                <td>India</td>
                                <td>08/09/2022</td>
                                <td> 26/08/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>32</td>
                                <td>DIGITAL EDUCATION MONITORING AND MANAGEMENT USING ML- PROGRAMMING SYSTEM</td>
                                <td>Dr. Meenu Sarma</td>
                                <td>Patent</td>
                                <td>202211019622</td>
                                <td>India</td>
                                <td> 31/03/2022</td>
                                <td> 08/04/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>33</td>
                                <td>A METHOD FOR BUSINESS GROWTH THROUGH INNOVATIVE PRODUCT DESIGNS AND TECHNOLOGY SOLUTIONS
                                </td>
                                <td>Dr Aruna Dev Roy</td>
                                <td>Patent</td>
                                <td>202211012888</td>
                                <td>India</td>
                                <td>03/09/2022</td>
                                <td>18/03/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>34</td>
                                <td>A GERMICIDAL MACHINE TO WASH AND DRY FRUITS/VEGETABLES AND SANITIZE MISCELLANEOUS SMALL
                                    ITEMS
                                </td>
                                <td>Dr Aruna Dev Roy</td>
                                <td>Patent</td>
                                <td>202131043596</td>
                                <td>India</td>
                                <td> 26/09/2021</td>
                                <td>11/12/2021</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>35</td>
                                <td>AN ARTIFICIAL INTELLIGENCE BASED BIOMEDICAL SENSING SYSTEM FOR HIGH THROUGHPUT
                                    BIOMOLECULE
                                    TESTING</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202141049862</td>
                                <td>India</td>
                                <td>30/10/2021</td>
                                <td>26/11/2021</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <!-- new patents  -->

                            <tr>
                                <td>36</td>
                                <td>DEVICE FOR DEVELOPING LIPID
                                    LABRYNTHS AND NANOSTRUCTURES FOR ENHANCED DRUG DELIVERY</td>
                                <td>
                                    <ol>
                                        <li>Nirmalkumar Shah</li>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Kritika Sachan</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Amrita Singh</li>
                                        <li>Dr. Pruthviraj Karshanbhai Chaudhary</li>
                                        <li>Prashant Sharma</li>
                                        <li>Mr. Ikram</li>
                                        <li>Priyanshi Chauhan</li>
                                    </ol>

                                </td>
                                <td>Design</td>
                                <td>437831-001</td>
                                <td>---</td>
                                <td>11/19/2024</td>
                                <td>1/13/2025</td>
                                <td><a href="mobile-assets/research/patents/437831-001-Gr-13-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>36</td>
                                <td>DEVICE FOR TARGETED NOSE TO BRAIN DELIVERY OF DRUGS</td>
                                <td>
                                    <ol>
                                        <li>Nirmal Shah</li>
                                        <li>Dr. Megha Parashar</li>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Dr. Zulfa Nooreen</li>
                                        <li>Dr. S. J. Shankar</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Debabrata Nath</li>
                                        <li>Dr. Pareshkumar N. Patel</li>
                                        <li>Dr. Rati Kailash Prasad Tripathi</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>438193-001</td>
                                <td>---</td>
                                <td>11/23/2024</td>
                                <td>1/13/2025</td>
                                <td><a href="mobile-assets/research/patents/438193-001-Gr-13-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>37</td>
                                <td>REAL-TIME DIAGNOSTIC FEEDBACK ANALYZER</td>
                                <td>
                                    <ol>
                                        <li>Dr. Suman Agarwal</li>
                                        <li>Dr. Rishi Chakravarty</li>
                                        <li>Dr. Arpee Saikia</li>
                                        <li>Dr. Bitopi Gogoi</li>
                                        <li>Prof. Dr. George A. Paul</li>
                                        <li>Prof. Saket Jeswani</li>
                                        <li>Dr. Dip Narayain Singh</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>436204-001</td>
                                <td>---</td>
                                <td>10/30/2024</td>
                                <td>1/16/2025</td>
                                <td><a href="#!" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>38</td>
                                <td>SMART ID CARD OF EMPLOYEES THAT
                                    MONITOR VITAL SIGNS </td>
                                <td>
                                    <ol>
                                        <li>Dr. Saket Jeswani</li>
                                        <li>Dr. Gunjan Jeswani</li>
                                        <li>Dr. Dip Narayan Singh</li>
                                        <li>Dr. Suman Agrawal</li>
                                        <li>Dr. Shaji Mathai</li>
                                        <li>Dr. Deepti Sharma</li>
                                        <li>Prof. (Dr.) Ajit Kaushal</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>436856-001</td>
                                <td>---</td>
                                <td>11/9/2024</td>
                                <td>1/30/2025</td>
                                <td><a href="mobile-assets/research/patents/436856-001-Gr-30-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>39</td>
                                <td>SOCIAL MEDIA PAYMENT PLATFORM
                                    INTEGRATION DEVICE </td>
                                <td>
                                    <ol>
                                        <li>Ms. Lata Pandey</li>
                                        <li>Prof. Ranjit Singh</li>
                                        <li>Dr. Suman Agarwal</li>
                                        <li>Mr. Rahul Tiwary</li>
                                        <li>Mr. Dipak Jain</li>
                                        <li>Miss Tanisha Mukherjee</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>438114-001</td>
                                <td>---</td>
                                <td>11/22/2024</td>
                                <td>1/9/2025</td>
                                <td><a href="mobile-assets/research/patents/438114-001-Gr-09-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>40</td>
                                <td>DEVICE FOR TESTING FAST DISSOLVING
                                    TABLETS </td>
                                <td>
                                    <ol>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Dr. Moumita Ray</li>
                                        <li>Mr. Sudipto Mangal</li>
                                        <li>Harshit Chaurasiya</li>
                                        <li>Neelakshi Sharma</li>
                                        <li>Uma Jyoti</li>
                                        <li>Dr. Laxmikant Zawar</li>
                                        <li>Tiyas Saha</li>
                                        <li>Koustav Dutta</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>439616-001</td>
                                <td>---</td>
                                <td>12/5/2024</td>
                                <td>1/28/2025</td>
                                <td><a href="mobile-assets/research/patents/439616-001-28-01-2025-1.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>41</td>
                                <td>MOSQUITO REPELLANT SPRAY BOTTLE </td>
                                <td>
                                    <ol>
                                        <li>Dr. Lalit Saikia</li>
                                        <li>Dr. Sudarshana Borah</li>
                                        <li>Ms. Tanjima Tarique Laskar</li>
                                        <li>Mr. Sumit Dutta</li>
                                        <li>Dr. L.K. Nath</li>
                                        <li>Dr. Monalisa B. Deka</li>
                                        <li>Dr. Kumar Saurav Dey</li>
                                        <li>Dr. Shankhadhwaj Borah</li>
                                        <li>Dr. Sonjit Das</li>
                                        <li>Ms. Kabita Mahato</li>
                                        <li>Dr. Monica Arora</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>442954-001</td>
                                <td>---</td>
                                <td>1/3/2025</td>
                                <td>3/10/2025</td>
                                <td><a href="mobile-assets/research/patents/442954-001-Gr-10-03-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>42</td>
                                <td>FORMULATION AND EVALUATION OF DIOSGENIN-LOADED NANOPARTICLES FOR ENHANCED ANTI-TUMOR
                                    EFFICACY IN OVARIAN
                                    CANCER</td>
                                <td>
                                    <ol>
                                        <li>Mr. Bhaskar Jyoti Pathak</li>
                                        <li>Mr. Hadiuz Zaman</li>
                                        <li>Mr. Himanta Biswa Saikia</li>
                                        <li>Mr. Tapoban Bordoloi</li>
                                        <li>Mr. Rakibur Rahman</li>
                                        <li>Mrs. Neelakshi Sharma</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Mr. Tanmay Sarma</li>
                                        <li>Mr. Moidul Islam Judder</li>
                                        <li>Mr. Sourin Sarma</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531014821 A</td>
                                <td>---</td>
                                <td>3/14/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531014821-A-14-03-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>43</td>
                                <td>
                                    SYSTEM AND METHOD FOR QUANTUM COHERENCE ANALYSIS USING AN OPTICAL FIBER BRAGG GRATING, A
                                    MULTIDISCIPLINARY APPROACHINTEGRATING PHYSICS, CHEMISTRY AND MATHEMATICAL MODELING </td>
                                <td>
                                    <ol>
                                        <li>Dr. Devika Phukan</li>
                                        <li>Dr. Biswajit Sarma</li>
                                        <li>Dr. Pubalee Sarmah</li>
                                        <li>Dr. Anup Malakar</li>
                                        <li>Prof. (Dr.) Anuradha Devi</li>
                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531021638</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531021638-A-28-03-2025-1.png"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>44</td>
                                <td>
                                    A SYSTEM AND METHOD FOR DETECTION AND QUANTIFICATION OF HEAVY METALS IN WATER SAMPLES
                                <td>
                                    <ol>
                                        <li>Mr. Nilutpal Hazarika</li>
                                        <li>Mr. Keshav Kumar</li>
                                        <li>Mr. Himanshu Bhardwaj</li>
                                        <li>Ms. Sumi Barman</li>
                                        <li>Mr. Akhileshar Prasad Mishra</li>
                                        <li>Mr. Kamal Deka</li>
                                        <li>Mr. Suman Kumar</li>
                                        <li>Ms. Priyakshi Chutia</li>
                                        <li>Mr. Tanmay Sarma</li>
                                        <li>Mr. Bhaskar Jyoti Pathak</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531020569 A </td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/02531020569-A--28-03-2025-1.pdf"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>43</td>
                                <td>
                                    DEVICE FOR PRODUCING POLYMER BASED IN-SITU GEL FOR RECTAL DRUG DELIVERY
                                <td>
                                    <ol>
                                        <li>Mr. Aadi Sathyan</li>
                                        <li>Dr. Maruthamuthu Sakthivel</li>
                                        <li>Dr. Rajeev Kumar Malviya</li>
                                        <li>Junmoni Nath</li>
                                        <li>Prof. Balasubramaniam Viswanathan</li>
                                        <li>Bandla Aswani</li>
                                        <li>Dr. Preeti Gahlot</li>
                                        <li>Moidul Islam Judder</li>
                                        <li>Gopi Loganathan</li>
                                        <li>Dr. Megha Chaukiyal</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>444125-001</td>
                                <td>---</td>
                                <td>1/14/2025</td>
                                <td>3/28/2025</td>
                                <td><a href="mobile-assets/research/patents/444125-001-28-03-2025-1.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>43</td>
                                <td>
                                    A PHYSICO-CHEMICAL AND MATHEMATICAL APPROACH TO THE SUSTAINABLE EXTRACTION OF NATURAL
                                    DYE
                                    FROM COUROUPITA GUIANENSIS FLOWERS FOR TEXTILE APPLICATIONS
                                <td>
                                    <ol>
                                        <li>Dr. Biswajit Sarma</li>
                                        <li>Dr. Pubalee Sarmah</li>
                                        <li>Dr. Anup Malakar</li>
                                        <li>Dr. Devika Phukan</li>
                                        <li>Prof. (Dr.) Anuradha Devi</li>
                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531028899 A</td>
                                <td>---</td>
                                <td>4/4/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531028899-A-04-04-2025-1.jpeg"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>44</td>
                                <td>
                                    SMART MANNEQUINS FOR ECT TRAINING: ENHANCING SKILL AND PATIENT SAFETY
                                <td>
                                    <ol>
                                        <li>Senthil</li>
                                        <li>Dr. M. Vijayarani</li>
                                        <li>Dr. Randevan Rajakumararavelu</li>
                                        <li>Ms. Ushapriya M.</li>
                                        <li>Ms. Selvi S</li>
                                        <li>Mrs. Pradhiba SPM</li>
                                        <li>Dr. R. Vijayalakshmi</li>
                                        <li>Ms. Lakshmi Priyadharshini V.R.</li>
                                        <li>Ms. Rumi Talukdar</li>
                                        <li>Mrs. Mariamma V.</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202411098994 A</td>
                                <td>---</td>
                                <td>2/21/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202411098994-A-21-02-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>45</td>
                                <td>
                                    Implementation of Pattern Recognition and Segmentation Techniques on Images of Retinal
                                    Scans
                                    for Faster Diagnoses and Better Tracking of Eye Disease Progression.
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Nilakshi Deka</li>
                                        <li>Spandan Kumar Barthakur</li>
                                        <li>Ms. Priyankita Priyam Thakuria</li>
                                        <li>Dr. Annu Kumari</li>
                                        <li>Dr. P. Wankitlang Shangpliang</li>

                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531030055 A</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531030055-A-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>45</td>
                                <td>
                                    AI ENHANCED ROBOTICS ARM FOR
                                    PRECISION ENGINEERING
                                <td>
                                    <ol>
                                        <li>Dr. Rashel Sarkar</li>
                                        <li>Dr. Jaishree Jain</li>
                                        <li>Dr. K. Siva Agora Sakthivel Murugan</li>
                                        <li>Debjani Chakraborty</li>
                                        <li>Dr. Nitin Dubey</li>
                                    </ol>

                                </td>
                                <td>Design</td>
                                <td>436628-001</td>
                                <td>---</td>
                                <td>11/6/2024</td>
                                <td>2/6/2025</td>
                                <td><a href="mobile-assets/research/patents/436628-001-6-02-2025-(1).pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AI BASED SMART IRRIGATION ROBOT FOR PRECISE FARMING
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Pankaj S. Mishra</li>
                                        <li>Dr. Kumuda P. R.</li>
                                        <li>J. Paul Rajasingh</li>
                                        <li>Dr. Sarthak Pattanayak</li>
                                        <li>Dr. Nitin Dubey</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>437145-001</td>
                                <td>---</td>
                                <td>11/13/2024</td>
                                <td>1/24/2025</td>
                                <td><a href="mobile-assets/research/patents/437145-001-04-01-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    Deep Learning Based Detection of Breast Cancer on MammogramImages
                                <td>
                                    <ol>
                                        <li>C. Pavin</li>
                                        <li>Dr. Rajesh Kumar</li>
                                        <li>Mr. Nikhilesh Prafulla Sawarkar</li>
                                        <li>Ms. Karpagavadivu Karuppusamy</li>
                                        <li>Mr. Omkar Adhikari</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Ms. Brindha Gopalan</li>
                                        <li>Dr. Sakshi Sadhwani</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541023009</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541023009-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    EXPLORING MATH ATTITUDE AND BEHAVIORAL PATTERNS INHIGHER EDUCATION THROUGH MACHINE
                                    LEARNING
                                <td>
                                    <ol>
                                        <li>Sohong Dhar</li>
                                        <li>Dr. Rajakumaran V</li>
                                        <li>RVS Praveen</li>
                                        <li>Prof. Dr. Rashel Sarkar</li>
                                        <li>Dr. C. Jenita Nancy</li>
                                        <li>Munawar Y. Sayed</li>
                                        <li>Dr. Srijan Paul</li>
                                        <li>Vaishnavi Karthika R</li>
                                        <li>Dr. Karthikeyan M. V</li>
                                        <li>R. Srilekha</li>
                                        <li>Udayakumar N</li>
                                        <li>Vaishnavi Karthika R</li>
                                    </ol>


                                </td>
                                <td>Patent</td>
                                <td>202531026864</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531026864-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    A SMART IOT-FUZZY HYBRID SYSTEM FOR DISEASE IDENTIFICATIONAND ENVIRONMENTAL MANAGEMENT
                                    IN
                                    MUSHROOM CULTIVATION
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Brajesh Kumar</li>
                                        <li>B. Gnana Deepthi</li>
                                        <li>E. Prabhakar</li>
                                        <li>Dr. S. Arul Amirtha Raja</li>
                                        <li>Dr. Amit Chauhan</li>
                                        <li>Mr. C. P. Balaji</li>
                                        <li>Dr. C. Dhanalakshmi</li>
                                        <li>R. Veerappan</li>
                                        <li>Bommirani B</li>
                                        <li>Narmada Devi M</li>
                                        <li>Mr. R. Dharmalingam</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531025656</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026577-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AN AI-DRIVEN ONLINE INTRUSION DETECTION FRAMEWORK FORENHANCING THE SECURITY OF SMART EV
                                    CHARGING STATIONS
                                <td>
                                    <ol>
                                        <li>RVS Praveen</li>
                                        <li>G. Venugopal</li>
                                        <li>Mrs. Rohini Y. Sarode</li>
                                        <li>Janani M</li>
                                        <li>Srikanth Perla</li>
                                        <li>Srinivas Maddela</li>
                                        <li>Dr. P. Chandra Sekhar</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Mr. V. Nanthakumar</li>
                                        <li>Dr. Manohar Golait</li>
                                        <li>Mr. Mahendra Ridhorkar</li>
                                        <li>Dr. M. Chandra Sekhara Reddy</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026896</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026896-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    Decentralized Cloud Storage Solution Using Blockchain for DataSecurity
                                <td>
                                    <ol>
                                        <li>Mr. Ezhumalai Perumal</li>
                                        <li>Dr. I. Manimozhi</li>
                                        <li>Prof. N. Neha Gopal</li>
                                        <li>Mr. D. Yobu</li>
                                        <li>M. Sarmila</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Mr. Gyanrao Dhote</li>
                                        <li>Mrs. L. Priya</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541025320</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541025320-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AN IOT AND MACHINE LEARNING-ENABLED SMART SOLAR-POWERED PESTICIDE SPRAYER FOR PRECISION
                                    AGRICULTURE
                                <td>
                                    <ol>
                                        <li>Bandi Alekhya</li>
                                        <li>RVS Praveen</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Thilagavathi R</li>
                                        <li>Dr. P. Chandra Sekhar</li>
                                        <li>Dr. Sundararajan</li>
                                        <li>S. Poorna Chander Rao</li>
                                        <li>Dr. S. Sridharan</li>
                                        <li>Dharmbir Singh</li>
                                        <li>Dr. Mohd Faizan Hasan</li>
                                        <li>Vemuru Naresh</li>
                                        <li>Dharani Ramasamy</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026572</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026572-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    INTEGRATING MACHINE LEARNING INTO SUSTAINABLE HRM TOPREDICT AND MANAGE EMPLOYEE
                                    WELL-BEING
                                    IN HIGHEREDUCATION DURING AND AFTER THE COVID-19 PANDEMIC
                                <td>
                                    <ol>
                                        <li>Dr. K. Suresh Kumar</li>
                                        <li>Tandra Sowmya</li>
                                        <li>A. Raajya Vardhini</li>
                                        <li>RVS Praveen</li>
                                        <li>E. Christina Dally</li>
                                        <li>Dr. Uzmi Anjum</li>
                                        <li>Divesh Dutt</li>
                                        <li>D. Maria Sahaya Diran</li>
                                        <li>Pranabes Gangopadhyay</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>V. Bharathi</li>
                                        <li>R. Saravanakumar</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026619</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026619-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AI-DRIVEN BIOMEDICAL APPLICATIONS OF CARBON QUANTUMDOTS FOR WOUND HEALING AND INFECTION
                                    CONTROL
                                <td>
                                    <ol>
                                        <li>Dr. Satyesh Raj Anand</li>
                                        <li>Dr. K. Arpitha</li>
                                        <li>Dr. Navneet Kaur</li>
                                        <li>Dr. S. Geeitha</li>
                                        <li>RVS Praveen</li>
                                        <li>Dr. Amit Chauhan</li>
                                        <li>G. Senthilrajan</li>
                                        <li>Dr. Vishnu Kiran Manam</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>A. Vijay</li>
                                        <li>B. Yamini</li>
                                        <li>Dharmbir Singh</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026619</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202511025653-04-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="headd1 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">
                    Pate<span style="color: #FF9A1E; font-weight: 500;">nts</span> </h2>


                <div class="table-responsive">
                    <table
                        class="overflow-hidden table text-wrap table-bordered table-striped border-top mt-3 pb-5 shadow-lg">
                        <thead class="text-white para1 text-center" style="background-color: #264273;">
                            <th style="font-size: 16px;" class="text-white">Sl. No.</th>
                            <th style="font-size: 16px;" class="text-white">Title of the invention</th>
                            <th style="font-size: 16px;" class="text-white">Inventor(s) Name</th>
                            <th style="font-size: 16px;" class="text-white">Category (Patent/ Design)</th>
                            <th style="font-size: 16px;" class="text-white">Filing No.</th>
                            <th style="font-size: 16px;" class="text-white">Country of filing</th>
                            <th style="font-size: 16px;" class="text-white">Date of filing</th>
                            <th style="font-size: 16px;" class="text-white">Date of publication (if published)</th>
                            <th style="font-size: 16px;" class="text-white">View</th>
                        </thead>

                        <tbody class="para1" style="background-color: #f7f7f7 !important;">

                            <tr>
                                <td>1</td>
                                <td>Polar azimuthal temperature dependant light scattering device</td>
                                <td>Dr. Sanchita Roy</td>
                                <td>Patent</td>
                                <td>202331056367</td>
                                <td>India</td>
                                <td>23/08/2023</td>
                                <td>03-01-2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PLANT LEAF DISEASE DETECTION USING COMPUTER VISION AND MACHINE LEARNING ALGORITHMS</td>
                                <td>Dr. Rashel Sarkar, Dr. Samarjit Das, Dr. Nilakshi Deka, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202431001745</td>
                                <td>India</td>
                                <td> 09/01/2024</td>
                                <td> 19/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/PLANT%20LEAF%20DISEASE%20DETECTION%20USING%20COMPUTER%20VISION%20AND%20MACHINE%20LEARNINGALGORITHMS.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>NANOPARTICLES BASED CANCER MEDICATION DEVICE</td>
                                <td>Dr RASHEL SARKAR,
                                    Dr. Nilakshi Deka, Dr. Samarjit Das, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202331085356</td>
                                <td>India</td>
                                <td> 14/12/2023</td>
                                <td> 19/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/NANOPARTICLES%20BASED%20CANCER%20MEDICATION%20DEVICE.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>AI Chemical Mixing Device for Agriculture</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6335750</td>
                                <td>United Kingdom</td>
                                <td>26/12/2023</td>
                                <td>22/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20Chemical%20Mixing%20Device%20for%20Agriculture.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>AI Based Seed Sowing Machine for Nursery</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>402915-001</td>
                                <td>India</td>
                                <td>22/12/2023</td>
                                <td>26/01/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20BASED%20SEED%20SOWING%20MACHINE%20FOR.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>AI BASED INTELLIGENT SYSTEM FOR WEATHER AND NATURAL DISASTERS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6339019</td>
                                <td>United Kingdom</td>
                                <td>12/01/2024</td>
                                <td>09/04/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/AI%20based%20Intelligent%20System%20for%20Weather%20and%20Natural%20Disasters.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>MACHINE LEARNING BASED FRUIT PRESERVATION CABIN </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>407934-001</td>
                                <td>India</td>
                                <td>18/02/2024</td>
                                <td>16/05/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/MACHINE%20LEARNING%20BASED%20FRUIT.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>MACHINE SMART BRAIN MONITORING HEADSET</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>411018-001 </td>
                                <td>India</td>
                                <td>19/03/2024</td>
                                <td>16/05/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/MACHINE%20SMART%20BRAIN%20MONITORING%20HEADSET.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>AI AND IMAGE PROCESSING BASED SEEDLING PLANTING MACHINE </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>411546-001</td>
                                <td>India</td>
                                <td>25/03/2024</td>
                                <td>30/05/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>10</td>
                                <td>IOT AND SOLAR BASED REAL TIME SMART
                                    TRAFFIC CONTROL MANAGEMEIVT
                                </td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>422236-001</td>
                                <td>India</td>
                                <td>04/07/2024</td>
                                <td>05/09/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/IOT%20AND%20SOLAR%20BASED%20REAL%20TIME%20SMART.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>11</td>
                                <td> An Implanted medical device</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202431050042 A</td>
                                <td>India</td>
                                <td>29/06/2024</td>
                                <td>02/08/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>12</td>
                                <td>IoT based Physiotherapy Smart Upper Limb Exo</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202431049898 A</td>
                                <td>India</td>
                                <td>28/06/2024</td>
                                <td>02/08/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>A PROCESS FOR PRODUCING BANANA BEER AND A COMPOSITION FOR THE SAME</td>
                                <td>Dr. Debajit Borah, Dr. Bhaskarjyoti Gogoi, Arijit Kumar, Raktim Ranjan Gogoi, Dhanmoi
                                    Barman
                                </td>
                                <td>Patent</td>
                                <td>202431031585</td>
                                <td>India</td>
                                <td>20/04/2024</td>
                                <td>26/04/2024</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>Data processing system for health advice</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6330072</td>
                                <td>United Kingdom</td>
                                <td>12/01/2023</td>
                                <td>22/02/2024</td>
                                <td><a href="mobile-assets/research/patents/old-patents/Data%20processing%20system%20for%20health%20advice.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>WOUND HEALING TOPICAL OINTMENT FORMULATION BASED ON ESSENTIAL OIL OBTAINED FROM
                                    KAEMPFERIA
                                    GALANGA L</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331083484</td>
                                <td>India</td>
                                <td>12/07/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>A New Novel Framework to Analyze and Detect the MRI based Brain Tumors and Alzheimerâ€™s
                                    by
                                    using Convolution Neural Network</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331070252</td>
                                <td>India</td>
                                <td>16/10/2023</td>
                                <td>27/10/2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/A%20New%20Novel%20Framework%20to%20Analyze%20and%20Detect%20the%20MRI%20based%20Brain%20Tumors%20and%20Alzheimer’s%20by%20using%20Convolution%20Neural%20Network.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>A HYBRID APPROACH FOR ANALYSING OF EARLY-STAGE DETECTION AND PREVENTION OF LUNG CANCER
                                    USING
                                    ADVANCED MACHINE LEARNING AND DEEP LEARNING ALGORITHMS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331082502</td>
                                <td>India</td>
                                <td> 04/12/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/A%20HYBRID%20APPROACH%20FOR%20ANALYSING%20OF%20EARLY-STAGE%20DETECTIONAND%20PREVENTION%20OF%20LUNG%20CANCER%20USING%20ADVANCED%20MACHINELEARNING%20AND%20DEEP%20LEARNING%20ALGORITHMS.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>ML and AI Based Device for Skin Cancer Detection</td>
                                <td>Dr RASHEL SARKAR</td>
                                <td>Design</td>
                                <td>6328989</td>
                                <td>United Kingdom</td>
                                <td>26/11/2023</td>
                                <td>12-02-2023</td>
                                <td><a href="mobile-assets/research/patents/old-patents/ML%20and%20AI%20Based%20Device%20for%20Skin%20Cancer%20Detection.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>SYSTEM FOR ASSESSING CONSUMER PERCEPTION TOWARDS PRIVATE LABEL BRAND, AND METHOD
                                    THEREFOR
                                </td>
                                <td>Aruna Dev Roy, PAPARI NAYAK, RAJAT BHATTACHARJEE, MAHUYA DEB, TAHERA HOQUE MOZUMDAR,
                                    SANTUJIT
                                    CHANDA, RITUPARNA BARUAH</td>
                                <td>Patent</td>
                                <td>202331007386</td>
                                <td>India</td>
                                <td> 06/02/2023</td>
                                <td> 17/02/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>DESIGNING OF ULTRA LOW POWER WI-FI IOT MODULES</td>
                                <td>Anupam Das, Ishita Chakraborty, Vaskar Deka, Antara Malakar, Nayan Jyoti Kalita, Ankita
                                    Goyal
                                    Agarwala</td>
                                <td>Patent</td>
                                <td>202331015013</td>
                                <td>India</td>
                                <td> 06/03/2023</td>
                                <td>03/10/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>AN INTELLIGENT SENSOR BASED BIODEGRADABLE WASTE COLLECTION UNIT</td>
                                <td>Dr. Anupam Das, Dr Anupam Das, Dr Vaskar Deka, Dr Ishita Chakraborty, Dr Psrismita
                                    Sarma, Dr
                                    Mirzanur Rahman</td>
                                <td>Design</td>
                                <td>388951-001</td>
                                <td>India</td>
                                <td>23/06/2023 </td>
                                <td>25/08/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <td>PORTABLE ENVIRONMENTAL DATA MONITORING BOX</td>
                                <td>Dr Anupam Das</td>
                                <td>Design</td>
                                <td>390497-001</td>
                                <td>India</td>
                                <td>17/07/2023</td>
                                <td>10/06/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <td>Supersonic goggles with Arduino nano for blind people </td>
                                <td>ANJU DAS, TINA BANIA, RUNA CHAKRAVORTY, PAYAL DASGUPTA</td>
                                <td>Patent</td>
                                <td>202331006654</td>
                                <td>India</td>
                                <td>02/02/2023</td>
                                <td>02/10/2023</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>A SYSTEM FOR EVALUATING THE MEDIATING EFFECT OF CONSUMER AWARENESS ON GREEN MARKETING
                                    MIX
                                    AND
                                    PURCHASE INTENTION AND METHOD THEREOF</td>
                                <td>ARUNA DEV RROY</td>
                                <td>Patent</td>
                                <td>202221029258</td>
                                <td>India</td>
                                <td> 20/05/2022</td>
                                <td> 03/06/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>A PORTABLE DEVICE TO CUT SOFT SHEETS IN CIRCULAR SHAPE WITH ADJUSTABLE RADIUS</td>
                                <td>Sankar Barman, Hirak Ranjan Das, Sasanka Boruah, Nirakar Nath</td>
                                <td>Patent</td>
                                <td>202231021448</td>
                                <td>India</td>
                                <td>04/11/2022</td>
                                <td> 22/07/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>26</td>
                                <td>â€¢ MARKER PEN MADE OF BIODEGRADABLE MATERIALS</td>
                                <td>Hirak Ranjan Das, Shankar Barman</td>
                                <td>Patent</td>
                                <td>202231045258</td>
                                <td>India</td>
                                <td>08/08/2022</td>
                                <td>09/09/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>27</td>
                                <td>CRITICALITY IDENTIFICATION THROUGH NATURAL LANGUAGE PROCESSING FOR EMERGENCY PHONE CALLS
                                </td>
                                <td>Dr Anupam Das</td>
                                <td>Patent</td>
                                <td>202221037757</td>
                                <td>India</td>
                                <td>30/06/2022</td>
                                <td> 22/07/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>SYNTHESIZING THREE DIMENSIONAL IMAGES USING DEEP CONVOLUTIONAL GENERATIVE ADVERSARIAL
                                    NETWORK
                                    (DCGAN) ALGORITHMS</td>
                                <td>Dr Anupam Das</td>
                                <td>Patent</td>
                                <td>202241048020</td>
                                <td>India</td>
                                <td> 23/08/2022</td>
                                <td> 16/09/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>29</td>
                                <td>AUTONOMOUS DRIVING ASSISTANCE TOOL BY COGNIZANCE AND COMPUTER VISION FUSION METHOD</td>
                                <td>Dr. Anupam Das</td>
                                <td>Patent</td>
                                <td>202221055586</td>
                                <td>India</td>
                                <td> 28/09/2022</td>
                                <td> 07/10/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>30</td>
                                <td>A NOVEL APPROACH TO LOAD BALANCING AND CLOUD COMPUTING SECURITY USING SSL IN IAAS
                                    ENVIRONMENT
                                </td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202131056646</td>
                                <td>India</td>
                                <td> 06/12/2021</td>
                                <td> 07/01/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>31</td>
                                <td>ARTIFICIAL INTELLIGENCE AND DEEP LEARNING BASED TECHNIQUE FOR UNDERSTANDING THE VARIOUS
                                    THERMOELECTRIC MATERIALS</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202231045556</td>
                                <td>India</td>
                                <td>08/09/2022</td>
                                <td> 26/08/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>32</td>
                                <td>DIGITAL EDUCATION MONITORING AND MANAGEMENT USING ML- PROGRAMMING SYSTEM</td>
                                <td>Dr. Meenu Sarma</td>
                                <td>Patent</td>
                                <td>202211019622</td>
                                <td>India</td>
                                <td> 31/03/2022</td>
                                <td> 08/04/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>33</td>
                                <td>A METHOD FOR BUSINESS GROWTH THROUGH INNOVATIVE PRODUCT DESIGNS AND TECHNOLOGY SOLUTIONS
                                </td>
                                <td>Dr Aruna Dev Roy</td>
                                <td>Patent</td>
                                <td>202211012888</td>
                                <td>India</td>
                                <td>03/09/2022</td>
                                <td>18/03/2022</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>34</td>
                                <td>A GERMICIDAL MACHINE TO WASH AND DRY FRUITS/VEGETABLES AND SANITIZE MISCELLANEOUS SMALL
                                    ITEMS
                                </td>
                                <td>Dr Aruna Dev Roy</td>
                                <td>Patent</td>
                                <td>202131043596</td>
                                <td>India</td>
                                <td> 26/09/2021</td>
                                <td>11/12/2021</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>35</td>
                                <td>AN ARTIFICIAL INTELLIGENCE BASED BIOMEDICAL SENSING SYSTEM FOR HIGH THROUGHPUT
                                    BIOMOLECULE
                                    TESTING</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202141049862</td>
                                <td>India</td>
                                <td>30/10/2021</td>
                                <td>26/11/2021</td>
                                <td><a href="#!" target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <!-- new patents  -->

                            <tr>
                                <td>36</td>
                                <td>DEVICE FOR DEVELOPING LIPID
                                    LABRYNTHS AND NANOSTRUCTURES FOR ENHANCED DRUG DELIVERY</td>
                                <td>
                                    <ol>
                                        <li>Nirmalkumar Shah</li>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Kritika Sachan</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Amrita Singh</li>
                                        <li>Dr. Pruthviraj Karshanbhai Chaudhary</li>
                                        <li>Prashant Sharma</li>
                                        <li>Mr. Ikram</li>
                                        <li>Priyanshi Chauhan</li>
                                    </ol>

                                </td>
                                <td>Design</td>
                                <td>437831-001</td>
                                <td>---</td>
                                <td>11/19/2024</td>
                                <td>1/13/2025</td>
                                <td><a href="mobile-assets/research/patents/437831-001-Gr-13-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>36</td>
                                <td>DEVICE FOR TARGETED NOSE TO BRAIN DELIVERY OF DRUGS</td>
                                <td>
                                    <ol>
                                        <li>Nirmal Shah</li>
                                        <li>Dr. Megha Parashar</li>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Dr. Zulfa Nooreen</li>
                                        <li>Dr. S. J. Shankar</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Debabrata Nath</li>
                                        <li>Dr. Pareshkumar N. Patel</li>
                                        <li>Dr. Rati Kailash Prasad Tripathi</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>438193-001</td>
                                <td>---</td>
                                <td>11/23/2024</td>
                                <td>1/13/2025</td>
                                <td><a href="mobile-assets/research/patents/438193-001-Gr-13-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>37</td>
                                <td>REAL-TIME DIAGNOSTIC FEEDBACK ANALYZER</td>
                                <td>
                                    <ol>
                                        <li>Dr. Suman Agarwal</li>
                                        <li>Dr. Rishi Chakravarty</li>
                                        <li>Dr. Arpee Saikia</li>
                                        <li>Dr. Bitopi Gogoi</li>
                                        <li>Prof. Dr. George A. Paul</li>
                                        <li>Prof. Saket Jeswani</li>
                                        <li>Dr. Dip Narayain Singh</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>436204-001</td>
                                <td>---</td>
                                <td>10/30/2024</td>
                                <td>1/16/2025</td>
                                <td><a href="#!" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>38</td>
                                <td>SMART ID CARD OF EMPLOYEES THAT
                                    MONITOR VITAL SIGNS </td>
                                <td>
                                    <ol>
                                        <li>Dr. Saket Jeswani</li>
                                        <li>Dr. Gunjan Jeswani</li>
                                        <li>Dr. Dip Narayan Singh</li>
                                        <li>Dr. Suman Agrawal</li>
                                        <li>Dr. Shaji Mathai</li>
                                        <li>Dr. Deepti Sharma</li>
                                        <li>Prof. (Dr.) Ajit Kaushal</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>436856-001</td>
                                <td>---</td>
                                <td>11/9/2024</td>
                                <td>1/30/2025</td>
                                <td><a href="mobile-assets/research/patents/436856-001-Gr-30-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>39</td>
                                <td>SOCIAL MEDIA PAYMENT PLATFORM
                                    INTEGRATION DEVICE </td>
                                <td>
                                    <ol>
                                        <li>Ms. Lata Pandey</li>
                                        <li>Prof. Ranjit Singh</li>
                                        <li>Dr. Suman Agarwal</li>
                                        <li>Mr. Rahul Tiwary</li>
                                        <li>Mr. Dipak Jain</li>
                                        <li>Miss Tanisha Mukherjee</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>438114-001</td>
                                <td>---</td>
                                <td>11/22/2024</td>
                                <td>1/9/2025</td>
                                <td><a href="mobile-assets/research/patents/438114-001-Gr-09-01-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>40</td>
                                <td>DEVICE FOR TESTING FAST DISSOLVING
                                    TABLETS </td>
                                <td>
                                    <ol>
                                        <li>Dr. Amita Tilak</li>
                                        <li>Dr. Sanmati Kumar Jain</li>
                                        <li>Dr. Moumita Ray</li>
                                        <li>Mr. Sudipto Mangal</li>
                                        <li>Harshit Chaurasiya</li>
                                        <li>Neelakshi Sharma</li>
                                        <li>Uma Jyoti</li>
                                        <li>Dr. Laxmikant Zawar</li>
                                        <li>Tiyas Saha</li>
                                        <li>Koustav Dutta</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>439616-001</td>
                                <td>---</td>
                                <td>12/5/2024</td>
                                <td>1/28/2025</td>
                                <td><a href="mobile-assets/research/patents/439616-001-28-01-2025-1.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>41</td>
                                <td>MOSQUITO REPELLANT SPRAY BOTTLE </td>
                                <td>
                                    <ol>
                                        <li>Dr. Lalit Saikia</li>
                                        <li>Dr. Sudarshana Borah</li>
                                        <li>Ms. Tanjima Tarique Laskar</li>
                                        <li>Mr. Sumit Dutta</li>
                                        <li>Dr. L.K. Nath</li>
                                        <li>Dr. Monalisa B. Deka</li>
                                        <li>Dr. Kumar Saurav Dey</li>
                                        <li>Dr. Shankhadhwaj Borah</li>
                                        <li>Dr. Sonjit Das</li>
                                        <li>Ms. Kabita Mahato</li>
                                        <li>Dr. Monica Arora</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>442954-001</td>
                                <td>---</td>
                                <td>1/3/2025</td>
                                <td>3/10/2025</td>
                                <td><a href="mobile-assets/research/patents/442954-001-Gr-10-03-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>42</td>
                                <td>FORMULATION AND EVALUATION OF DIOSGENIN-LOADED NANOPARTICLES FOR ENHANCED ANTI-TUMOR
                                    EFFICACY IN OVARIAN
                                    CANCER</td>
                                <td>
                                    <ol>
                                        <li>Mr. Bhaskar Jyoti Pathak</li>
                                        <li>Mr. Hadiuz Zaman</li>
                                        <li>Mr. Himanta Biswa Saikia</li>
                                        <li>Mr. Tapoban Bordoloi</li>
                                        <li>Mr. Rakibur Rahman</li>
                                        <li>Mrs. Neelakshi Sharma</li>
                                        <li>Dr. Manas Jyoti Kapil</li>
                                        <li>Mr. Tanmay Sarma</li>
                                        <li>Mr. Moidul Islam Judder</li>
                                        <li>Mr. Sourin Sarma</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531014821 A</td>
                                <td>---</td>
                                <td>3/14/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531014821-A-14-03-2025-1.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>43</td>
                                <td>
                                    SYSTEM AND METHOD FOR QUANTUM COHERENCE ANALYSIS USING AN OPTICAL FIBER BRAGG GRATING, A
                                    MULTIDISCIPLINARY APPROACHINTEGRATING PHYSICS, CHEMISTRY AND MATHEMATICAL MODELING </td>
                                <td>
                                    <ol>
                                        <li>Dr. Devika Phukan</li>
                                        <li>Dr. Biswajit Sarma</li>
                                        <li>Dr. Pubalee Sarmah</li>
                                        <li>Dr. Anup Malakar</li>
                                        <li>Prof. (Dr.) Anuradha Devi</li>
                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531021638</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531021638-A-28-03-2025-1.png"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>44</td>
                                <td>
                                    A SYSTEM AND METHOD FOR DETECTION AND QUANTIFICATION OF HEAVY METALS IN WATER SAMPLES
                                <td>
                                    <ol>
                                        <li>Mr. Nilutpal Hazarika</li>
                                        <li>Mr. Keshav Kumar</li>
                                        <li>Mr. Himanshu Bhardwaj</li>
                                        <li>Ms. Sumi Barman</li>
                                        <li>Mr. Akhileshar Prasad Mishra</li>
                                        <li>Mr. Kamal Deka</li>
                                        <li>Mr. Suman Kumar</li>
                                        <li>Ms. Priyakshi Chutia</li>
                                        <li>Mr. Tanmay Sarma</li>
                                        <li>Mr. Bhaskar Jyoti Pathak</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531020569 A </td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/02531020569-A--28-03-2025-1.pdf"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>43</td>
                                <td>
                                    DEVICE FOR PRODUCING POLYMER BASED IN-SITU GEL FOR RECTAL DRUG DELIVERY
                                <td>
                                    <ol>
                                        <li>Mr. Aadi Sathyan</li>
                                        <li>Dr. Maruthamuthu Sakthivel</li>
                                        <li>Dr. Rajeev Kumar Malviya</li>
                                        <li>Junmoni Nath</li>
                                        <li>Prof. Balasubramaniam Viswanathan</li>
                                        <li>Bandla Aswani</li>
                                        <li>Dr. Preeti Gahlot</li>
                                        <li>Moidul Islam Judder</li>
                                        <li>Gopi Loganathan</li>
                                        <li>Dr. Megha Chaukiyal</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>444125-001</td>
                                <td>---</td>
                                <td>1/14/2025</td>
                                <td>3/28/2025</td>
                                <td><a href="mobile-assets/research/patents/444125-001-28-03-2025-1.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>43</td>
                                <td>
                                    A PHYSICO-CHEMICAL AND MATHEMATICAL APPROACH TO THE SUSTAINABLE EXTRACTION OF NATURAL
                                    DYE
                                    FROM COUROUPITA GUIANENSIS FLOWERS FOR TEXTILE APPLICATIONS
                                <td>
                                    <ol>
                                        <li>Dr. Biswajit Sarma</li>
                                        <li>Dr. Pubalee Sarmah</li>
                                        <li>Dr. Anup Malakar</li>
                                        <li>Dr. Devika Phukan</li>
                                        <li>Prof. (Dr.) Anuradha Devi</li>
                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531028899 A</td>
                                <td>---</td>
                                <td>4/4/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531028899-A-04-04-2025-1.jpeg"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>44</td>
                                <td>
                                    SMART MANNEQUINS FOR ECT TRAINING: ENHANCING SKILL AND PATIENT SAFETY
                                <td>
                                    <ol>
                                        <li>Senthil</li>
                                        <li>Dr. M. Vijayarani</li>
                                        <li>Dr. Randevan Rajakumararavelu</li>
                                        <li>Ms. Ushapriya M.</li>
                                        <li>Ms. Selvi S</li>
                                        <li>Mrs. Pradhiba SPM</li>
                                        <li>Dr. R. Vijayalakshmi</li>
                                        <li>Ms. Lakshmi Priyadharshini V.R.</li>
                                        <li>Ms. Rumi Talukdar</li>
                                        <li>Mrs. Mariamma V.</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202411098994 A</td>
                                <td>---</td>
                                <td>2/21/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202411098994-A-21-02-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>45</td>
                                <td>
                                    Implementation of Pattern Recognition and Segmentation Techniques on Images of Retinal
                                    Scans
                                    for Faster Diagnoses and Better Tracking of Eye Disease Progression.
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Nilakshi Deka</li>
                                        <li>Spandan Kumar Barthakur</li>
                                        <li>Ms. Priyankita Priyam Thakuria</li>
                                        <li>Dr. Annu Kumari</li>
                                        <li>Dr. P. Wankitlang Shangpliang</li>

                                    </ol>
                                </td>
                                <td>Patent</td>
                                <td>202531030055 A</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531030055-A-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>45</td>
                                <td>
                                    AI ENHANCED ROBOTICS ARM FOR
                                    PRECISION ENGINEERING
                                <td>
                                    <ol>
                                        <li>Dr. Rashel Sarkar</li>
                                        <li>Dr. Jaishree Jain</li>
                                        <li>Dr. K. Siva Agora Sakthivel Murugan</li>
                                        <li>Debjani Chakraborty</li>
                                        <li>Dr. Nitin Dubey</li>
                                    </ol>

                                </td>
                                <td>Design</td>
                                <td>436628-001</td>
                                <td>---</td>
                                <td>11/6/2024</td>
                                <td>2/6/2025</td>
                                <td><a href="mobile-assets/research/patents/436628-001-6-02-2025-(1).pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AI BASED SMART IRRIGATION ROBOT FOR PRECISE FARMING
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Pankaj S. Mishra</li>
                                        <li>Dr. Kumuda P. R.</li>
                                        <li>J. Paul Rajasingh</li>
                                        <li>Dr. Sarthak Pattanayak</li>
                                        <li>Dr. Nitin Dubey</li>
                                    </ol>
                                </td>
                                <td>Design</td>
                                <td>437145-001</td>
                                <td>---</td>
                                <td>11/13/2024</td>
                                <td>1/24/2025</td>
                                <td><a href="mobile-assets/research/patents/437145-001-04-01-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    Deep Learning Based Detection of Breast Cancer on MammogramImages
                                <td>
                                    <ol>
                                        <li>C. Pavin</li>
                                        <li>Dr. Rajesh Kumar</li>
                                        <li>Mr. Nikhilesh Prafulla Sawarkar</li>
                                        <li>Ms. Karpagavadivu Karuppusamy</li>
                                        <li>Mr. Omkar Adhikari</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Ms. Brindha Gopalan</li>
                                        <li>Dr. Sakshi Sadhwani</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541023009</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541023009-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    EXPLORING MATH ATTITUDE AND BEHAVIORAL PATTERNS INHIGHER EDUCATION THROUGH MACHINE
                                    LEARNING
                                <td>
                                    <ol>
                                        <li>Sohong Dhar</li>
                                        <li>Dr. Rajakumaran V</li>
                                        <li>RVS Praveen</li>
                                        <li>Prof. Dr. Rashel Sarkar</li>
                                        <li>Dr. C. Jenita Nancy</li>
                                        <li>Munawar Y. Sayed</li>
                                        <li>Dr. Srijan Paul</li>
                                        <li>Vaishnavi Karthika R</li>
                                        <li>Dr. Karthikeyan M. V</li>
                                        <li>R. Srilekha</li>
                                        <li>Udayakumar N</li>
                                        <li>Vaishnavi Karthika R</li>
                                    </ol>


                                </td>
                                <td>Patent</td>
                                <td>202531026864</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202531026864-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    A SMART IOT-FUZZY HYBRID SYSTEM FOR DISEASE IDENTIFICATIONAND ENVIRONMENTAL MANAGEMENT
                                    IN
                                    MUSHROOM CULTIVATION
                                <td>
                                    <ol>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Dr. Brajesh Kumar</li>
                                        <li>B. Gnana Deepthi</li>
                                        <li>E. Prabhakar</li>
                                        <li>Dr. S. Arul Amirtha Raja</li>
                                        <li>Dr. Amit Chauhan</li>
                                        <li>Mr. C. P. Balaji</li>
                                        <li>Dr. C. Dhanalakshmi</li>
                                        <li>R. Veerappan</li>
                                        <li>Bommirani B</li>
                                        <li>Narmada Devi M</li>
                                        <li>Mr. R. Dharmalingam</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202531025656</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026577-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AN AI-DRIVEN ONLINE INTRUSION DETECTION FRAMEWORK FORENHANCING THE SECURITY OF SMART EV
                                    CHARGING STATIONS
                                <td>
                                    <ol>
                                        <li>RVS Praveen</li>
                                        <li>G. Venugopal</li>
                                        <li>Mrs. Rohini Y. Sarode</li>
                                        <li>Janani M</li>
                                        <li>Srikanth Perla</li>
                                        <li>Srinivas Maddela</li>
                                        <li>Dr. P. Chandra Sekhar</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Mr. V. Nanthakumar</li>
                                        <li>Dr. Manohar Golait</li>
                                        <li>Mr. Mahendra Ridhorkar</li>
                                        <li>Dr. M. Chandra Sekhara Reddy</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026896</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026896-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    Decentralized Cloud Storage Solution Using Blockchain for DataSecurity
                                <td>
                                    <ol>
                                        <li>Mr. Ezhumalai Perumal</li>
                                        <li>Dr. I. Manimozhi</li>
                                        <li>Prof. N. Neha Gopal</li>
                                        <li>Mr. D. Yobu</li>
                                        <li>M. Sarmila</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Mr. Gyanrao Dhote</li>
                                        <li>Mrs. L. Priya</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541025320</td>
                                <td>---</td>
                                <td>3/28/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541025320-28-03-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AN IOT AND MACHINE LEARNING-ENABLED SMART SOLAR-POWERED PESTICIDE SPRAYER FOR PRECISION
                                    AGRICULTURE
                                <td>
                                    <ol>
                                        <li>Bandi Alekhya</li>
                                        <li>RVS Praveen</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>Thilagavathi R</li>
                                        <li>Dr. P. Chandra Sekhar</li>
                                        <li>Dr. Sundararajan</li>
                                        <li>S. Poorna Chander Rao</li>
                                        <li>Dr. S. Sridharan</li>
                                        <li>Dharmbir Singh</li>
                                        <li>Dr. Mohd Faizan Hasan</li>
                                        <li>Vemuru Naresh</li>
                                        <li>Dharani Ramasamy</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026572</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026572-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    INTEGRATING MACHINE LEARNING INTO SUSTAINABLE HRM TOPREDICT AND MANAGE EMPLOYEE
                                    WELL-BEING
                                    IN HIGHEREDUCATION DURING AND AFTER THE COVID-19 PANDEMIC
                                <td>
                                    <ol>
                                        <li>Dr. K. Suresh Kumar</li>
                                        <li>Tandra Sowmya</li>
                                        <li>A. Raajya Vardhini</li>
                                        <li>RVS Praveen</li>
                                        <li>E. Christina Dally</li>
                                        <li>Dr. Uzmi Anjum</li>
                                        <li>Divesh Dutt</li>
                                        <li>D. Maria Sahaya Diran</li>
                                        <li>Pranabes Gangopadhyay</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>V. Bharathi</li>
                                        <li>R. Saravanakumar</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026619</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202541026619-11-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>
                                    AI-DRIVEN BIOMEDICAL APPLICATIONS OF CARBON QUANTUMDOTS FOR WOUND HEALING AND INFECTION
                                    CONTROL
                                <td>
                                    <ol>
                                        <li>Dr. Satyesh Raj Anand</li>
                                        <li>Dr. K. Arpitha</li>
                                        <li>Dr. Navneet Kaur</li>
                                        <li>Dr. S. Geeitha</li>
                                        <li>RVS Praveen</li>
                                        <li>Dr. Amit Chauhan</li>
                                        <li>G. Senthilrajan</li>
                                        <li>Dr. Vishnu Kiran Manam</li>
                                        <li>Prof. (Dr.) Rashel Sarkar</li>
                                        <li>A. Vijay</li>
                                        <li>B. Yamini</li>
                                        <li>Dharmbir Singh</li>
                                    </ol>

                                </td>
                                <td>Patent</td>
                                <td>202541026619</td>
                                <td>---</td>
                                <td>4/11/2025</td>
                                <td></td>
                                <td><a href="mobile-assets/research/patents/202511025653-04-04-2025.pdf" target="_blank"
                                        class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>
@endsection

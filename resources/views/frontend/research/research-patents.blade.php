@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="mobile-headd1 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">
                    Pate<span style="color: #FF9A1E; font-weight: 500;">nts</span> </h2>


                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered table-striped border-top mt-3 pb-5 shadow-lg">
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link01.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PLANT LEAF DISEASE DETECTION USING COMPUTER VISION AND MACHINE LEARNING ALGORITHMS</td>
                                <td>Dr. Rashel Sarkar, Dr. Samarjit Das, Nilakshi Deka, Dr. Israfil Hussain, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202431001745</td>
                                <td>India</td>
                                <td> 09/01/2024</td>
                                <td> 19/01/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link05.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>NANOPARTICLES BASED CANCER MEDICATION DEVICE</td>
                                <td>Dr RASHEL SARKAR,
                                    Nilakshi Deka, Dr. Samarjit Das, Dr. Israfil Hussain, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202331085356</td>
                                <td>India</td>
                                <td> 14/12/2023</td>
                                <td> 19/01/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link06.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link08.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link09.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 29.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 30.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 31.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 32.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 33.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 34.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 35.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>A PROCESS FOR PRODUCING BANANA BEER AND A COMPOSITION FOR THE SAME</td>
                                <td>Dr. Debajit Borah, Dr. Bhaskarjyoti Gogoi, Arijit Kumar, Raktim Ranjan Gogoi, Dhanmoi Barman
                                </td>
                                <td>Patent</td>
                                <td>202431031585</td>
                                <td>India</td>
                                <td>20/04/2024</td>
                                <td>26/04/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link20.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link21.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>WOUND HEALING TOPICAL OINTMENT FORMULATION BASED ON ESSENTIAL OIL OBTAINED FROM KAEMPFERIA
                                    GALANGA L</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331083484</td>
                                <td>India</td>
                                <td>12/07/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link02.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>A New Novel Framework to Analyze and Detect the MRI based Brain Tumors and Alzheimerâ€™s by
                                    using Convolution Neural Network</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331070252</td>
                                <td>India</td>
                                <td>16/10/2023</td>
                                <td>27/10/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link03.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>A HYBRID APPROACH FOR ANALYSING OF EARLY-STAGE DETECTION AND PREVENTION OF LUNG CANCER USING
                                    ADVANCED MACHINE LEARNING AND DEEP LEARNING ALGORITHMS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331082502</td>
                                <td>India</td>
                                <td> 04/12/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link04.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link07.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>SYSTEM FOR ASSESSING CONSUMER PERCEPTION TOWARDS PRIVATE LABEL BRAND, AND METHOD THEREFOR
                                </td>
                                <td>Aruna Dev Roy, PAPARI NAYAK, RAJAT BHATTACHARJEE, MAHUYA DEB, TAHERA HOQUE MOZUMDAR,
                                    SANTUJIT
                                    CHANDA, RITUPARNA BARUAH</td>
                                <td>Patent</td>
                                <td>202331007386</td>
                                <td>India</td>
                                <td> 06/02/2023</td>
                                <td> 17/02/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link10.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link17.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>AN INTELLIGENT SENSOR BASED BIODEGRADABLE WASTE COLLECTION UNIT</td>
                                <td>Dr. Anupam Das, Dr Anupam Das, Dr Vaskar Deka, Dr Ishita Chakraborty, Dr Psrismita Sarma, Dr
                                    Mirzanur Rahman</td>
                                <td>Design</td>
                                <td>388951-001</td>
                                <td>India</td>
                                <td>23/06/2023 </td>
                                <td>25/08/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link18.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link19.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link22.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>A SYSTEM FOR EVALUATING THE MEDIATING EFFECT OF CONSUMER AWARENESS ON GREEN MARKETING MIX
                                    AND
                                    PURCHASE INTENTION AND METHOD THEREOF</td>
                                <td>ARUNA DEV RROY</td>
                                <td>Patent</td>
                                <td>202221029258</td>
                                <td>India</td>
                                <td> 20/05/2022</td>
                                <td> 03/06/2022</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link11.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link12.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link13.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link14.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link15.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link16.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link23.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link24.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link25.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link26.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link27.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>35</td>
                                <td>AN ARTIFICIAL INTELLIGENCE BASED BIOMEDICAL SENSING SYSTEM FOR HIGH THROUGHPUT BIOMOLECULE
                                    TESTING</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202141049862</td>
                                <td>India</td>
                                <td>30/10/2021</td>
                                <td>26/11/2021</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link28.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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

                <h2 class="headd1 kd-title-ani kd-split text-center pt-4" style="color: #264273; font-weight: 700;">Pate<span
                        style="color: #FF9A1E; font-weight: 500;">nts</span> </h2>


                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered table-striped border-top mt-3 pb-5 shadow-lg">
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link01.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PLANT LEAF DISEASE DETECTION USING COMPUTER VISION AND MACHINE LEARNING ALGORITHMS</td>
                                <td>Dr. Rashel Sarkar, Dr. Samarjit Das, Nilakshi Deka, Dr. Israfil Hussain, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202431001745</td>
                                <td>India</td>
                                <td> 09/01/2024</td>
                                <td> 19/01/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link05.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>


                            <tr>
                                <td>3</td>
                                <td>NANOPARTICLES BASED CANCER MEDICATION DEVICE</td>
                                <td>Dr RASHEL SARKAR,
                                    Nilakshi Deka, Dr. Samarjit Das, Dr. Israfil Hussain, Dr. Novonita Baruah
                                </td>
                                <td>Patent</td>
                                <td>202331085356</td>
                                <td>India</td>
                                <td> 14/12/2023</td>
                                <td> 19/01/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link06.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link08.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link09.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 29.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 30.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 31.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 32.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 33.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 34.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link 35.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>A PROCESS FOR PRODUCING BANANA BEER AND A COMPOSITION FOR THE SAME</td>
                                <td>Dr. Debajit Borah, Dr. Bhaskarjyoti Gogoi, Arijit Kumar, Raktim Ranjan Gogoi, Dhanmoi Barman
                                </td>
                                <td>Patent</td>
                                <td>202431031585</td>
                                <td>India</td>
                                <td>20/04/2024</td>
                                <td>26/04/2024</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link20.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link21.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>WOUND HEALING TOPICAL OINTMENT FORMULATION BASED ON ESSENTIAL OIL OBTAINED FROM KAEMPFERIA
                                    GALANGA L</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331083484</td>
                                <td>India</td>
                                <td>12/07/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link02.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>A New Novel Framework to Analyze and Detect the MRI based Brain Tumors and Alzheimerâ€™s by
                                    using Convolution Neural Network</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331070252</td>
                                <td>India</td>
                                <td>16/10/2023</td>
                                <td>27/10/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link03.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>A HYBRID APPROACH FOR ANALYSING OF EARLY-STAGE DETECTION AND PREVENTION OF LUNG CANCER USING
                                    ADVANCED MACHINE LEARNING AND DEEP LEARNING ALGORITHMS</td>
                                <td>Dr. RASHEL SARKAR</td>
                                <td>Patent</td>
                                <td>202331082502</td>
                                <td>India</td>
                                <td> 04/12/2023</td>
                                <td>15/12/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link04.pdf"
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link07.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>SYSTEM FOR ASSESSING CONSUMER PERCEPTION TOWARDS PRIVATE LABEL BRAND, AND METHOD THEREFOR
                                </td>
                                <td>Aruna Dev Roy, PAPARI NAYAK, RAJAT BHATTACHARJEE, MAHUYA DEB, TAHERA HOQUE MOZUMDAR,
                                    SANTUJIT
                                    CHANDA, RITUPARNA BARUAH</td>
                                <td>Patent</td>
                                <td>202331007386</td>
                                <td>India</td>
                                <td> 06/02/2023</td>
                                <td> 17/02/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link10.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link17.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>AN INTELLIGENT SENSOR BASED BIODEGRADABLE WASTE COLLECTION UNIT</td>
                                <td>Dr. Anupam Das, Dr Anupam Das, Dr Vaskar Deka, Dr Ishita Chakraborty, Dr Psrismita Sarma, Dr
                                    Mirzanur Rahman</td>
                                <td>Design</td>
                                <td>388951-001</td>
                                <td>India</td>
                                <td>23/06/2023 </td>
                                <td>25/08/2023</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link18.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link19.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link22.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>A SYSTEM FOR EVALUATING THE MEDIATING EFFECT OF CONSUMER AWARENESS ON GREEN MARKETING MIX
                                    AND
                                    PURCHASE INTENTION AND METHOD THEREOF</td>
                                <td>ARUNA DEV RROY</td>
                                <td>Patent</td>
                                <td>202221029258</td>
                                <td>India</td>
                                <td> 20/05/2022</td>
                                <td> 03/06/2022</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link11.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link12.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link13.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link14.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link15.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link16.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link23.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link24.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link25.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link26.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
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
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link27.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>

                            <tr>
                                <td>35</td>
                                <td>AN ARTIFICIAL INTELLIGENCE BASED BIOMEDICAL SENSING SYSTEM FOR HIGH THROUGHPUT BIOMOLECULE
                                    TESTING</td>
                                <td>Dr. Aniruddha Deka</td>
                                <td>Patent</td>
                                <td>202141049862</td>
                                <td>India</td>
                                <td>30/10/2021</td>
                                <td>26/11/2021</td>
                                <td><a href="https://resource.rgu.ac/assets/docs/research/patents_links2024/Link28.pdf"
                                        target="_blank" class="text-primary font-weight-semibold"><i
                                            class="fa fa-download text-primary"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="container">
            <div style="margin-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                            Royal School of Information Technology (RSIT)</h1>
                        <h2 class="headd3 p-2 text-dark mt-4 kd-split-text"
                            style="background-color: #ffac46; border-radius: 10px;">
                            Department of Information & Technology</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-5">
                <div>
                    <div class=" container">
                        <h2 class="headd2"><strong>Thrust Areas of Research</strong></h2>
                        <ul class="para1 text-dark">
                            <li>Network Engineering</li>
                            <li>Artificial Intelligence</li>
                            <li>Data Mining</li>
                            <li>Neural Networks</li>
                            <li>Image Processing</li>
                            <li>Natural Language Processing</li>
                            <li>Computer Vision</li>
                        </ul>
                        <hr>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <h3 class="headd3">Ongoing Ph.D. students: Picture and name of the student, Title of the Thesis, Name of
                            the supervisor</h3>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of the student</th>
                                    <th class="text-white">Title of the Thesis </th>
                                    <th class="text-white"> supervisor </th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Ms. Antara Malakar<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15a.jpg" alt="img"></td>
                                    <td>Design and Development of Deep Learning models to predic the diseases of eyes in North
                                        Eastern States of India</td>
                                    <td>Prof. Ankur Ganguly</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mr. Ashok Kumar Sarkar<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15b.jpg" alt="img"></td>
                                    <td>Financial Risk Management Model with Big Data Analytics in Supply Chain Management
                                        System </td>
                                    <td>Dr. Anupam Das</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Mayuri Sharma<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15c.jpg" alt="img"></td>
                                    <td>Design and Development of a Machine Learning Based Framework for Designing and
                                        Defficiency in Rice Plants </td>
                                    <td>Dr. Anupam Das
                                        <hr> Prof. Ankur Ganguly
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Projects :</strong></h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Name of the Investigator</th>
                                        <th class="text-white">Title of the project</th>
                                        <th class="text-white">Duration</th>
                                        <th class="text-white">Amount Sanctioned</th>
                                        <th class="text-white">Funding Agency</th>
                                        <th class="text-white">Present Status</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark align-middle">
                                    <tr>
                                        <td>1</td>
                                        <td>Dr Anupam Das (PI)</td>
                                        <td>AI Based Robotic surgery arm to operate kidney stone</td>
                                        <td>2 years</td>
                                        <td>Rs. 12,00,000</td>
                                        <td>GEH Core Science Research Grant</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr Anupam Das (TE)</td>
                                        <td>Developing a new Assamese Font</td>
                                        <td>1 years</td>
                                        <td>Rs. 7,00,000</td>
                                        <td>Govt. of Assam</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr Anupam Das (PI)</td>
                                        <td>Developing a Speech based Endangered Language Identification System(SELIS)</td>
                                        <td>6 months</td>
                                        <td>Rs. 25,000</td>
                                        <td>Assam Royal Global University</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mr. Nayan Jyoti Kalita (PI)</td>
                                        <td>Developing Kombucha and other products from Assam Tea</td>
                                        <td>2 years</td>
                                        <td>Rs. 50,00,000</td>
                                        <td>BIRAC</td>
                                        <td>On-going</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Ms. Ankita Goyal Agarwala(PI)</td>
                                        <td>Digital Herbarium</td>
                                        <td>6 months</td>
                                        <td>Rs. 20,000</td>
                                        <td>Assam Royal Global University</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Rashel Sarkar(CoPI)</td>
                                        <td>Installation solar power</td>
                                        <td>2 years</td>
                                        <td>Rs. 25,00,000</td>
                                        <td>AICTE</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Dr. Rashel Sarkar(PI)</td>
                                        <td>Low Cost Hygiene Sanitization solution</td>
                                        <td>1 years</td>
                                        <td>Rs. 2,50,000</td>
                                        <td>DST and EDII</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Rashel Sarkar(Co- PI)</td>
                                        <td>Vehicle Classification and speed Estimation</td>
                                        <td>1 years</td>
                                        <td>Rs. 2,50,000</td>
                                        <td>DST and EDII</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Mr. Saurabh Sutradhar(PI)</td>
                                        <td>IoT based SoS System for two-wheeler accidents</td>
                                        <td>6 months</td>
                                        <td>Rs. 10,000</td>
                                        <td>ASTEC</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dr Anupam Das(PI)</td>
                                        <td>An Intelligent Sensor-based Biodegradable Waste Collection Unit for Sustainable
                                            Waste Management</td>
                                        <td>1 years</td>
                                        <td>Rs. 2,79,000</td>
                                        <td>Assam Royal Global University</td>
                                        <td>On-going</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2023</strong>
                            </h2>
                            <div class="table-responsive">
                                <table class="overflow-hidden table table-bordered border-top text-justify">
                                    <tbody>
                                        <tr class="para1">
                                            <td>1. Chandrashekhar Goswami; Anupam Das; Karrar Imran Ogaili; Vivek Kumar Verma;
                                                Vijay Singh; Dilip Kumar Sharma, “Device to Device Communication in 5G network
                                                using device centric resource allocation algorithm” , International Conference
                                                on Software Telecommunications and Computer Networks, 2023
                                                <hr>
                                                2. Anupam Das , Subhajit Chakrabarty, “Multiobjective Optimal Feature selection
                                                for Cyber Security Itegrated with Deep Learning”, International Conference on
                                                computing and communication networks, 2023
                                                <hr>
                                                3. Antara Malakar, Dr. Ankur Ganguly, Dr. Swarnendu Kumar Chakraborty,
                                                “Development of CNN-based Feature Extraction and Multi-Layer Perceptron for Eye
                                                Disease Detection”, 3rd International Conference on Advanced Computing and
                                                Intelligent Technologies (ICACIT 2023)" virtually Jointly Organised by Indira
                                                Gandhi National Tribal University - Regional Campus Manipur and ADSR Education
                                                and Research Foundation on December 8-9, 2023. (Springer).
                                                <hr>
                                                4. Ankur Ganguly, Antara Malakar, “A Frequency Domain Approach to Analyze Heart
                                                Rate Variability (HRV) Among the Resident Population of the Himalayan Regions of
                                                West Bengal – An Approach towards achieving Sustainable Development Goal 3
                                                (SDG3)”, 1st Two-Day International Conference on “Emerging Trends in Business
                                                &Management – A Lookout for Multidisciplinary Approaches for Sustainable Growth”
                                                (IC ETBM 2023) on 16th &17th June 2023, The Assam Royal Global University
                                                <hr>
                                                5. Chakraborty, I., Das, P. An Efficient ACO-based Routing and Data Fusion
                                                Approach for IoT Networks. SN COMPUT. SCI. 4, 808 (2023).
                                                <hr>
                                                6. URL- https://doi.org/10.1007/s42979-023-02257-3
                                                <hr>
                                                7. Nandy,T., Devi L.M., Chakraborty, I., 2023 . Brain tumor detection using
                                                VGG-16. In Advanced Computing, Machine Learning, Robotics and Internet
                                                Technologies. Springer, Singapore.
                                                <hr>
                                                8. An Intelligent Sensor Based Biodegradable Waste Collection Unit, Design No.:
                                                388951-001, Date of publication: 23/06/2023 [Published]
                                                <hr>
                                                9. Designing Of Ultra Low Power Wi-Fi IoT Modules, File No:202331015013, Journal
                                                No. 10/2023, Date of publication:10/03/2023 [Published].
                                                <hr>
                                                10. Dr. Rashel Sarkar” Medical Image Analysis of Knee Osteoarthritis using
                                                Modified Deep CNN”, Journal of Survey in Fisheries Sciences 10(2S) 133-144 2023,
                                                ISSN: 2368-7487, Cite Score 1.0, SCOPUS Q3.
                                                <hr>
                                                11. Dr. Rashel Sarkar ““An artificial intelligence based approach for
                                                recognizing ovarian cancer using combined krill herd and grey wolf Optimization”
                                                European Chemical Bulletin E- ISSN:2063-5346, page- 1278- 1290, Cite Score 1.6,
                                                SCOPUS INDEX, DOI: 10.31838/ecb/2023.12.si6.1202023.30/05/2023.
                                                <hr>
                                                12. Dr. Rashel Sarkar ” Neuro Linguistic Programming : An Effective Tool for
                                                Teaching of English as a Second Language", International Journal of Scientific
                                                Research in Science and Technology (IJSRST), Online ISSN : 2395-602X, Print ISSN
                                                : 2395-6011, Volume 10 Issue 1, pp. 529-536, JanuaryFebruary 2023. Available at
                                                doi : https://doi.org/10.32628/IJSRST2310172 Journal URL
                                                https://ijsrst.com/IJSRST2310172
                                                <hr>
                                                13. Dr. Rashel Sarkar” Tomato Leaf Disease Recognition-A Critical Review” ,
                                                Journal of Data Acquisition and Processing, Cite Score 0.7, Vol. 38 (1) 2023
                                                page- 4388-4397, ISSN: 1004-9037, SCOPUS, https://sjcjycl.cn/ DOI:
                                                10.5281/zenodo.7766137
                                                <hr>
                                                14. Debabrat Bharali, Dr.Rashel Sarkar “Drawbacks Of Dataset For Tomato Leaf
                                                Diseases Recognition” Journal of Namibian Studies, 35 S1 (2023): 3551-3559 ISSN:
                                                2197-5523 (online),Cite Score 0.5,Published Aug10,2023,SCOPUS, DOI
                                                https://doi.org/10.59670/jns.v35i.4245.
                                                <hr>
                                                15. Dr. Rashel Sarkar “A Non-Classical Approach in Analyzing Student’s
                                                Performance in Academics Using Fuzzy Logic” Tuijin Jishu/Journal of Propulsion
                                                Technology ISSN: 1001-4055 Vol. 44 No. 3 (2023),page: 3542-3549 SCOPUS Cite
                                                Score 1.1,Published Nov 2023,SCOPUS, DOI:
                                                https://doi.org/10.52783/tjjpt.v44.i3.2065
                                                <hr>
                                                16. Dr. Rashel Sarkar “A non-classical approach in selection of a feasible
                                                candidate for contesting in an election using fuzzy logic” Journal Business,
                                                Management and Economics Engineering, ISSN: 2669- 2481Vol. 21 No. 2 (2023),
                                                page: 642-649 SCOPUS Cite Score 2.1, Published Dec 2023, SCOPUS.
                                                <hr>
                                                17. Das, S., A. U. Islam, P. Sarma , S. Borkakoty & A. Sinha (2023) “Solving the
                                                Non Deterministic Nature of the DBSCAN Algorithm”, Journal of Harbin Engineering
                                                University , Vol. 44 No. 7, 128-136 . (Scopus)
                                                <hr>
                                                18. Sarkar, R., M. A. Raibag, S. Das, A. Das, I.Hussain and N. Deka (2023), A
                                                Non Classical Approach in Analyzing Student’s Performance in Academics Using
                                                Fuzzy Logic, Tuijin Jishu/Journal of Propulsion Technology, Vol. 44, No.3,
                                                3542-49. (Scopus).
                                                <hr>
                                                19. Das, S., A. Das and A. U. Islam (2023),Exploring Women's Safety: Uncovering
                                                Crime Patterns through Fuzzy Clustering Methods, Research and Applications
                                                Towards Mathematics and Computer Science, Vol. 6, Chapter 3, Print ISBN:
                                                978-81-967636-0-2, eBook ISBN: 978-81 967636-9-5, DOI:
                                                10.9734/bpi/ratmcs/v6/11056F.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2022</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Chakraborty, I., Das, P., & Pradhan, B. (2022). An Intelligent Routing for
                                            Internet of Things Mesh Networks. Transactions on Emerging Telecommunications
                                            Technologies, e4628.
                                            <hr>
                                            2. Hussain, I., Das, D. C., Latif, A., Sinha, N., Hussain, S. S., & Ustun, T. S.
                                            (2022). Active power control of autonomous hybrid power system using two degree of
                                            freedom PID controller. Energy Reports, 8, 973-981.
                                            <hr>
                                            3. Dey, S., Deka, N., & Hazarika, D. (2022). Power system planning for reduction in
                                            system losses using STATCOM and PSO technique. Journal of The Institution of
                                            Engineers (India): Series B, 103(4), 1269-1281
                                            <hr>
                                            4. Das, A. (2022). Adaptive UNet-based lung segmentation and ensemble learning with
                                            CNN-based deep features for automated COVID-19 diagnosis. Multimedia Tools and
                                            Applications, 81(4), 5407-5441.
                                            <hr>
                                            5. Das, A. (2022). Designing green IoT communication by adaptive spotted hyena
                                            tunicate swarm optimization‐based cluster head selection. Transactions on Emerging
                                            Telecommunications Technologies, 33(11), e4595
                                            <hr>
                                            6. Chakraborty, Ishita, Das, Prodipto (2021). An optimization algorithm for IoT
                                            enabling technology. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            7. Chakraborty, Ishita, Das, Prodipto (2021). A simple optimization algorithm for
                                            IoT environment. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            8. Deka, A. and Sarma, Mayuri (2020, February). Pre-processing of Landsat-8 data for
                                            population estimation: A study with respect to Dimoria Development block of Assam.
                                            3rd International Conference of Innovative Computing and Communication. 9. Dr.
                                            Rashel Sarkar “An Efficient Parallel Clustering Algorithm on Big Data using Spark”
                                            in Journal of East China University of Science and Technology ISSN 1006-3080,
                                            ELSEVIER SCOPUS Cite Score 0.3. VOL.65 ISS. 2 2022, 535-547
                                            <hr>
                                            9. Dr. Rashel Sarkar “Multi-Feature Learning Model for Epilepsy Classification
                                            Supervised by a High Robust Heterogeneous Deep Ensemble” in Turkish Journal of
                                            Computer and Mathematics Education (TURCOMAT), e-ISSN 1309-4653, SCOPUS. Vol.13
                                            No.02 (2022), 273- 284
                                            <hr>
                                            10. Dr. Rashel Sarkar “An Investigation on Epileptic Seizure Classification Using
                                            Machine Learning and Multiple Feature” Selection Strategies in 3rd International
                                            Conference of Emerging Technology (INCET 2022) during 27th to 29th May 2022. IEEE
                                            Bangalore Section. DOI: 10.1109/INCET54531.2022.9824799
                                            <hr>
                                            11. Dr. Rashel Sarkar “A spark-based parallel fuzzy c median algorithm for web log
                                            big data” in International Journal on “Technical and Physical Problems of
                                            Engineering” (IJTPE) Published by International Organization of IOTPE, ISSN
                                            2077-3528, SCOPUS, Cite Score 1.2, September 2022 Issue 52 Volume 14 Number 3 Pages
                                            212-220
                                            <hr>
                                            12. Das, S., A. U. Islam, P.S. Velumani & B. Sarma (2022), “An Analysis of the Input
                                            Parameters of the DBSCAN Algorithm”, Computer Integrated Manufacturing Systems, Vol.
                                            28 No. 11, 1299-1314 (Scopus)
                                            <hr>
                                            13. Title of the invention: “Synthesizing Three Dimensional Images using Deep
                                            Convolutional Generative Adversarial Network (DCGAN) Algorithms”. The Patent Office
                                            Journal No. Application No. Date of filing of Application Publication Date : 37/2022
                                            Dated 16/09/2022 57890. : 202241048020 A. : 23/08/2022 : 16/09/2022
                                            <hr>
                                            14. Kalita, Nayan Jyoti, Ankita Goyal Agarwala, and Jayprakash Das. "Word Level Lan
                                            guage Identification on Code-Mixed English-Bodo Text." In IOP Conference Series:
                                            Materials Science and Engineering, vol. 1020, no. 1, p. 012027. IOP Publishing,
                                            2021.
                                            <hr>
                                            15. Smiti Dey.Nilakshi Deka & Durlav Hazarika,Power System Planning for Reduction in
                                            System losses using STATCOM and PSO Technique. J. Inst. Eng. India Ser. B 103,
                                            1269–1281 (2022).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2021</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Sharma, Mayuri, Kumar, Chandan J., Deka, Dr. Aniruddha (2021). Early diagnosis of
                                            rice plant disease using machine learning techniques. Archives of phytopathology and
                                            plant protection.
                                            <hr>
                                            2. Buragohain, Anurag, Deka, Dr. Aniruddha (2021). Effectiveness and sustainability
                                            of online teaching-learning in higher education- An exploratory survey. ASAR
                                            International conference , Delhi.
                                            <hr>
                                            3. Chakraborty, Ishita, Das, Prodipto (2021). An optimization algorithm for IoT
                                            enabling technology. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            4. Chakraborty, Ishita, Das, Prodipto (2021). A simple optimization algorithm for
                                            IoT environment. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            5. Laskar, A., & Das, S. (2021). Design a New Learning based Method for Smart
                                            Semantic Data Management System. In Proceedings of the International Conference on
                                            Computing and Communication Systems: I3CS 2020, NEHU, Shillong, India (pp. 215-226).
                                            Springer Singapore.
                                            <hr>
                                            6. Manisha Jaiswal, Anupam Das, Bidisha Choudhury, Mishel Elizabeth Jacob: Analysing
                                            The Role Of Social Media As A Platform Of E- Commerce : Webology (ISSN: 1735-188X),
                                            Volume 18, Number 1, 2021. [SCI: IF = 1.57]
                                            <hr>
                                            7. Anupam Das: Adaptive UNet‐based Lung Segmentation and Ensemble Learning with CNN
                                            based Deep Features for Automated COVID‐19 Diagnosis: Multimedia Tools and
                                            Applications[SPRINGER NATURE], https://doi.org/10.1007/s11042-021-11787-y, 22nd
                                            December, 2021. [indexed in WoS, Scopus etc) [SCI: IF = 3.158]
                                            <hr>
                                            8. Manisha Jaiswal, Anupam Das, Bidisha Choudhury, Mishel Elizabeth Jacob: Analysing
                                            The Role Of Social Media As A Platform Of E- Commerce : Webology (ISSN: 1735-188X),
                                            Volume 18, Number 1, 2021. [SCI: IF = 1.57]
                                            <hr>
                                            9. Kalita, Nayan Jyoti, Ankita Goyal Agarwala, and Jayprakash Das. "Word Level
                                            Language Identification on Code-Mixed English-Bodo Text." In IOP Conference Series:
                                            Materials Science and Engineering, vol. 1020, no. 1, p. 012027. IOP Publishing,
                                            2021.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2020</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Deka, A. and Sarma, Mayuri (2020, February). Pre-processing of Landsat-8 data for
                                            population estimation: A study with respect to Dimoria Development block of Assam.
                                            3rd International Conference of Innovative Computing and Communication.
                                            <hr>
                                            2. Deka, A. and Daimari, J. (2020, March). Detection of Bodo Word Boundary using
                                            Forced Alignment. International Conference of Electronic Systems and Intelligent
                                            Computing.
                                            <hr>
                                            3. Chakraborty, Ishita (2020, February). A simple optimization algorithm for IoT
                                            environment. 1st International Conference on Mathematical Modeling, Computational
                                            Intelligence Techniques and Renewable Energy, (Springer).
                                            <hr>
                                            4. Chakraborty, Ishita (2020, July). An optimization algorithm for IoT enabling
                                            Technology. 2nd International Conference on Emerging Technologies In Data Mining And
                                            Information Security.
                                            <hr>
                                            5. Talukdar, Gitimoni (2020, March). Performance Analysis of Nearest Neighbor,
                                            K-Nearest Neighbor and Weighted K-Nearest Neighbor for the Classification of
                                            Alzheimer Disease. 3rd International Conference on Computing and Communications.
                                            <hr>
                                            6. Misra, Debashis D. (2020, June). Optimal Routing in the 5G Ultra-Dense Small Cell
                                            Network using GA, PSO, and Hybrid PSO-GA Evolutionary Algorithms. 2nd International
                                            Conference on Applied Mathematics and Computer Science.
                                            <hr>
                                            7. Prasad, Anoop K. (2020, February). SMART ASTHMA alert using IoT and predicting
                                            threshold values using Decision Tree Classifier. International Conference on
                                            Computer Communication and Internet of Things.
                                            <hr>
                                            8. Rai, Sangeeta, Deka. Aniruddha (2020, August). Analysis of Emotion Detection
                                            Classifier for Development of Text Predictive Model. International Journal of
                                            research and Analytical Reviews 7(3).3, E-ISSN 2348-1269.
                                            <hr>
                                            9. Kumari, Binita, Deka, Dr. Aniruddha (2020). Voice Controlled Wheelchair using
                                            Nepali Word. International Journal of research and Analytical Reviews 7(3).3, E-ISSN
                                            2348-1269.
                                            <hr>
                                            10. Kalita, Nayan J., Agarwala, Ankita G., Das, Jayprakash (2020). Word level
                                            language identification on code-mixed English-Bodo text. ICCM 2020.
                                            <hr>
                                            11. Anupam Das, Shikhar Kumar Sarma, Shrutimal Deka: Data Security with DNA
                                            Cryptyography. Published in Transactions on Engineering Technologies-Springer Nature
                                            in October 2020
                                            <hr>
                                            12. Md Ali Akour, Anupam Das: Developing a Virtual Smart Total Learning Environment
                                            for Future Teaching-Learning System. Published in IEEE Xplore in 2020.
                                            <hr>
                                            13. Presented a paper titled “Developing a Virtual Smart Total Learning Environment
                                            for Future Teaching-Learning System” in the IEEE TALE 2020, international
                                            Conference, in Japan, December, 2020. The proceedings of the conference are
                                            published in IEEE Explore. [Indexed in Scopus and IEEE].
                                            <hr>
                                            14. Presented a paper titled “Intelligent Recommendation System for E- Learning
                                            using Membership Optimized Fuzzy Logic Classifier” in the IEEE PuneCon 2020,
                                            international Conference, in Pune, December, 2020. The proceedings of the conference
                                            are published in IEEE Explore. [Indexed in Scopus and SCI : IF = 0.22]
                                            <hr>
                                            15. Presented a paper titled “Energy Efficient Wireless Communications using EEA and
                                            EEAS with energy harvesting schemes” in the IEEE ADCOM 2020, international
                                            Conference, at NIT, Silchar, December, 2020. The proceedings of the conference are
                                            published in IEEE Explore. [Proceedings SCI : IF = 0.18]
                                            <hr>
                                            16. Sumi KankanaDewan, Santanu Bardaloi, “Resistance measurement of Blood serum of
                                            Bovine, Avian and Caprine”, International Journal of Physical and Social Science,
                                            vol.8(8), pp.32-41, August 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2019</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Debbarma, Mary, Kalita, Nayan J. and Sarma, Manoj K. (2019, November). A Study of
                                            Sentiment Analysis in Kokborok Language. International Conference on Sustainable and
                                            Innovative Solutions for Current Challenges in Engineering & Technology.
                                            <hr>
                                            2. Deka, A., Daimari, R. J., Rai, S. and Baruah, D. (2019). A New Approach to Design
                                            of an Email Classifier. IEEE 6th International Conference on Computing for
                                            Sustainable Global Development. 37-39.
                                            <hr>
                                            3. Deka, A. and Kumari, B. (2019). A DTMF based Railway Enquiry System. IEEE 6th
                                            International Conference on Computing for Sustainable Global Development, 51-54.
                                            <hr>
                                            4. Das, Susan, Debbarma, Mary and Deka, A. (2019, March). A brief review on Block
                                            chain and Distributed Ledger Technology. 6th IEEE International Conference on
                                            Computing for Sustainable Global Development.
                                            <hr>
                                            5. Sarma, Manoj K. and Kakoti, Anjana M. (2019). Clustering of Web Documents with
                                            Structure of Webpages based on the HTML Document Object Model. IEEE International
                                            Conference on Intelligent Techniques in Control, Optimization and Signal Processing.
                                            <hr>
                                            6. Sarma, Manoj K. and Kakoti, Anjana M. (2019, May). Comparison of K- medoids (PAM)
                                            algorithm with K-means algorithm for Web Document Clustering with Structure of Web
                                            pages. IEEE International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            7. Kalita, Nayan J. and Sarma, Manoj K. (2019, May). Agglomerative data mining
                                            approach for clustering of research papers based on similarity measure. 3rd
                                            International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            8. Sarma, Manoj K. and Kakoti, Anjana M. (2019). Clustering of Web Documents with
                                            Structure of Webpages based on the HTML Document Object Model. IEEE International
                                            Conference on Intelligent Techniques in Control, Optimization and Signal Processing.
                                            <hr>
                                            9. Sarma, Manoj K. and Kakoti, Anjana M. (2019, May). Comparison of K- medoids (PAM)
                                            algorithm with K-means algorithm for Web Document Clustering with Structure of Web
                                            pages. IEEE International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            10. Kalita, Nayan J. and Sarma, Manoj K. (2019, May). Agglomerative data mining
                                            approach for clustering of research papers based on similarity measure. 3rd
                                            International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            11. Mridul Suklabaidya , Anupam Das, Biswajit Das: A Cryptography Model using Hybrid
                                            Encryption and Decryption Techniques. Proceedings published in ELSEVIER, indexed in
                                            SCOPUS and WoS in April 2019.
                                            <hr>
                                            12. Mridul Suklabaidya , Anupam Das, Biswajit Das: A Cryptography Model using Hybrid
                                            Encryption and Decryption Techniques. Proceedings published in ELSEVIER, indexed in
                                            SCOPUS and WoS in April 2019.
                                            <hr>
                                            13. Sumi KankanaDewan, Santanu Bardaloi, “Resistance measurement of Blood serum of
                                            Bovine, Avian and Caprine”, International Journal of Physical and Social Science,
                                            vol.8(8), pp.32-41, August 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2018</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Chakraborty, Ishita (2018, April). Sensor Selection and Data fusion approach for
                                            IoT Applications. Second International Conference on Computing and Communication in
                                            Recent Developments in Machine Learning and Data Analytics (Springer).
                                            <hr>
                                            2. Talukdar, Gitimoni (2018, April). WSD for Assamese Language. Second International
                                            Conference on Computing and Communication in Recent Developments in Machine Learning
                                            and Data Analytics (Springer).
                                            <hr>
                                            3. Talukdar, Gitimoni (2018, April). Assamese Named Entity Recognition System using
                                            Naive Bayes Classifier. International Conference on Computing and Data Sciences
                                            (ICACDS) (Springer).
                                            <hr>
                                            4. Misra, Debashis D. (2018, March). Cooperative Routing Mechanism in the 5G Ultra
                                            Dense Network. International Conference on Signal Processing and Integrated Networks
                                            (SPIN) (IEEE).
                                            <hr>
                                            5. Misra, Debashis D. (2018). Combination of Techniques for Removal of Background
                                            Clutter from Radar Images. 5th International Conference on Computing on Sustainable
                                            Global Development (IEEE).
                                            <hr>
                                            6. Anupam Das, Samarjit Das, Atowar Ul Islam: Load Balancing and Congestion Control
                                            using Congestion Aware Multipath Routing Protocol (CAMRP) in Wireless Networks.
                                            International Journal on Future Revolution in Computer Science & Communication
                                            Engineering Volume: 4 Issue: 2 (February, 2018) ISSN: 2454-4248 193 – 198.
                                            <hr>
                                            7. Bidisha Choudhury, Anupam Das: A Study on the Process of Supra segmental
                                            Preservation of IE Language and Computational Data Analysis of Acoustic Phonetics.
                                            An International Open Access Journal & UGC and ISSN Approved, ISSN: 2349-5162 in
                                            August 2018.
                                            <hr>
                                            8. Samarjit Das, Anupam Das, Atowar Ul Islam: Finding Patterns in Crime against
                                            Women using a Fuzzy Clustering Technique. An International Open Access Journal & UGC
                                            and ISSN Approved ISSN: 2347-2693, Vol- 6, Issue-8, in August, 2018.
                                            <hr>
                                            9. Anupam Das, Samarjit Das, Atowar Ul Islam: Congestion Control using Congestion
                                            Aware Protocol in Wireless Networks tested with Standard QoS. Journal of Emerging
                                            Technologies and InnovativeResearch (An International Open Access Journal & UGC and
                                            ISSN Approved ) ISSN: 2349- 5162., in August, 2018, vol. 5, Issue-8, pp. 676-678.
                                            <hr>
                                            10. Atowar Ul Islam, Samarjit Das, Anupam Das: Construction of a Structure from
                                            4-Regular Planar Graph and to investigate its implications on Odd Region and Even
                                            Region. IOSR-JEN an International organization of Scientific Research ISSN (e):
                                            2250-3021, ISSN (p): in September, 2018, vol. 08, Issue-9, version-2, pp.31-38.
                                            <hr>
                                            11. Kalita, Nayan Jyoti, and Navanath Saharia. "Language identification on code-mix
                                            social text." In Proceedings of the International Conference on Computing and
                                            Communication Systems, pp. 433-440. Springer, Singapore, 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2017</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Sarma, Manoj K. and Kakoti, Anjana M. (2017). A DOM-Tree based Representation of
                                            Web Document Structure for Web Mining Applications. International Journal on Recent
                                            and Innovation Trends in Computing and Communication (IJRITCC), 6(5), 1437-1439.
                                            <hr>
                                            2. Sarma, Manoj K. and Kakoti, Anjana M. (2017). Study on Distance Measures for
                                            Clustering of Web Documents based on DOM-Tree based Representation of Web Document
                                            Structure. International Journal on Recent and Innovation Trends in Computing and
                                            Communication, 6(5), 1440-1442.
                                            <hr>
                                            3. Chakraborty, Ishita (2017, December). Data Fusion in Wireless Sensor Network-A
                                            Survey. The International Journal of Scientific Research in Network Security and
                                            Communication, 6(5), 9-15.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="headd3 fw-bold">12. IPR : Please provide the details of any patents published or awarded
                                or technology transferred</h3>
                            <hr>
                            <div class="table-responsive">
                                <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                    <thead class="text-white" style="background-color: #27467A;">
                                        <tr>
                                        <tr>
                                            <th class="text-white">#</th>
                                            <th class="text-white">Patent Application No.</th>
                                            <th class="text-white">Inventor(s)</th>
                                            <th class="text-white">Title</th>
                                            <th class="text-white">Date of Publication</th>
                                            <th class="text-white">Publication number</th>
                                        </tr>
                                    </thead>
                                    <tbody class="para1 text-dark align-middle">
                                        <tr>
                                            <td>1</td>
                                            <td>202331015013</td>
                                            <td>Dr. Anupam Das, Dr. Ishita Chakraborty, Dr. Vaskar Deka, Ms. Antara Malakar, Mr.
                                                Nayan Jyoti Kalita, Ms. Ankita Goyal Agarwalla </td>
                                            <td>Designing Of Ultra Low Power Wi-Fi IoT Modules </td>
                                            <td>10/03/2023</td>
                                            <td>Journal No. 10/2023</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>202231034509</td>
                                            <td>Dr. Anupam Das, P. Shanta Kumar,Bala Subramanian S,Praveen Narayan </td>
                                            <td>A Device For On-Line Video Meetings And Inbuilt Emotion-Based Attendance Report
                                            </td>
                                            <td>08/07/2023</td>
                                            <td>Journal No. 10/2023</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>388951-001</td>
                                            <td>Dr. Anupam Das, Dr. Vaskar Deka, Dr. Ishita Chakraborty, Dr. Parismita Sarma,
                                                Dr. Mirzanur Rahman </td>
                                            <td>An Intelligent Sensor Based Biodegradable Waste CollectionUnit</td>
                                            <td>23/08/2023</td>
                                            <td>Journal No. 388951-001</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>390497-001</td>
                                            <td>Dr. T.V.Attar, Dr.P Charan, Dr. Anupam Das, Dr.V.T. Mohite,Dr. V.K Sexana,Dr. S
                                                Pushkar </td>
                                            <td>Portable Environmental Data Monitoring Box </td>
                                            <td>23/08/2023</td>
                                            <td>Journal No. 390497-001</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>202231036763</td>
                                            <td>Dr. Anupam Das, Dr.J E Nalavade, Dr. Bala Subramanian, Kriti Mahajan</td>
                                            <td>An Adaptive Controller- Based Flexible Home Theatre Integrated With Smart
                                                Tv&amp; Air Purification System </td>
                                            <td>27/06/2022</td>
                                            <td>Journal No. 29/2022</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>202221037757A</td>
                                            <td>Dr. O.P Singh, Dr. M.E, Patil, Dr.B. Anitha,dr. B.Babu,Dr. Ram Subbiah, Dr.
                                                Anupam Das, K.S Chauhan,Dr. KK Trivedi </td>
                                            <td>Criticality Identification Through Natural Language Processing For Emergency
                                                Phone Calls</td>
                                            <td>22/07/2022</td>
                                            <td>Journal No. 29/2022</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>202241048020A</td>
                                            <td>Dr. P. Pathury, Dr. R Babu, Dr. D Gambhir, Dr. T Kuntavai, Dr. Anupam Das, Dr.
                                                ka Narender, Dr. Samarjit Das, Dr. Madhusudan </td>
                                            <td>Synthesizing Three Dimensional Images Using Deep Convolutional Generative
                                                Adversarial</td>
                                            <td>16/09/2023</td>
                                            <td>Journal No. 37/2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div class="container">
            <div style="margin-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                            Royal School of Information Technology (RSIT)</h1>
                        <h2 class="headd2 p-2 text-dark mt-4 kd-split-text"
                            style="background-color: #ffac46; border-radius: 10px;">
                            Department of Information & Technology</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-5">
                <div>
                    <div class=" container">
                        <h2 class="headd2"><strong>Thrust Areas of Research</strong></h2>
                        <ul class="para1 text-dark">
                            <li>Network Engineering</li>
                            <li>Artificial Intelligence</li>
                            <li>Data Mining</li>
                            <li>Neural Networks</li>
                            <li>Image Processing</li>
                            <li>Natural Language Processing</li>
                            <li>Computer Vision</li>
                        </ul>
                        <hr>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <h3 class="headd3">Ongoing Ph.D. students: Picture and name of the student, Title of the Thesis, Name of
                            the supervisor</h3>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of the student</th>
                                    <th class="text-white">Title of the Thesis </th>
                                    <th class="text-white"> supervisor </th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Ms. Antara Malakar<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15a.jpg" alt="img"></td>
                                    <td>Design and Development of Deep Learning models to predic the diseases of eyes in North
                                        Eastern States of India</td>
                                    <td>Prof. Ankur Ganguly</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mr. Ashok Kumar Sarkar<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15b.jpg" alt="img"></td>
                                    <td>Financial Risk Management Model with Big Data Analytics in Supply Chain Management
                                        System </td>
                                    <td>Dr. Anupam Das</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Mayuri Sharma<br><img
                                            src="mobile-assets/research/Research_Assets/Computer/page15c.jpg" alt="img"></td>
                                    <td>Design and Development of a Machine Learning Based Framework for Designing and
                                        Defficiency in Rice Plants </td>
                                    <td>Dr. Anupam Das
                                        <hr> Prof. Ankur Ganguly
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Projects :</strong></h2>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of the Investigator</th>
                                    <th class="text-white">Title of the project</th>
                                    <th class="text-white">Duration</th>
                                    <th class="text-white">Amount Sanctioned</th>
                                    <th class="text-white">Funding Agency</th>
                                    <th class="text-white">Present Status</th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle">
                                <tr>
                                    <td>1</td>
                                    <td>Dr Anupam Das (PI)</td>
                                    <td>AI Based Robotic surgery arm to operate kidney stone</td>
                                    <td>2 years</td>
                                    <td>Rs. 12,00,000</td>
                                    <td>GEH Core Science Research Grant</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr Anupam Das (TE)</td>
                                    <td>Developing a new Assamese Font</td>
                                    <td>1 years</td>
                                    <td>Rs. 7,00,000</td>
                                    <td>Govt. of Assam</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr Anupam Das (PI)</td>
                                    <td>Developing a Speech based Endangered Language Identification System(SELIS)</td>
                                    <td>6 months</td>
                                    <td>Rs. 25,000</td>
                                    <td>Assam Royal Global University</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mr. Nayan Jyoti Kalita (PI)</td>
                                    <td>Developing Kombucha and other products from Assam Tea</td>
                                    <td>2 years</td>
                                    <td>Rs. 50,00,000</td>
                                    <td>BIRAC</td>
                                    <td>On-going</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms. Ankita Goyal Agarwala(PI)</td>
                                    <td>Digital Herbarium</td>
                                    <td>6 months</td>
                                    <td>Rs. 20,000</td>
                                    <td>Assam Royal Global University</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. Rashel Sarkar(CoPI)</td>
                                    <td>Installation solar power</td>
                                    <td>2 years</td>
                                    <td>Rs. 25,00,000</td>
                                    <td>AICTE</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dr. Rashel Sarkar(PI)</td>
                                    <td>Low Cost Hygiene Sanitization solution</td>
                                    <td>1 years</td>
                                    <td>Rs. 2,50,000</td>
                                    <td>DST and EDII</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Dr. Rashel Sarkar(Co- PI)</td>
                                    <td>Vehicle Classification and speed Estimation</td>
                                    <td>1 years</td>
                                    <td>Rs. 2,50,000</td>
                                    <td>DST and EDII</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mr. Saurabh Sutradhar(PI)</td>
                                    <td>IoT based SoS System for two-wheeler accidents</td>
                                    <td>6 months</td>
                                    <td>Rs. 10,000</td>
                                    <td>ASTEC</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Dr Anupam Das(PI)</td>
                                    <td>An Intelligent Sensor-based Biodegradable Waste Collection Unit for Sustainable Waste
                                        Management</td>
                                    <td>1 years</td>
                                    <td>Rs. 2,79,000</td>
                                    <td>Assam Royal Global University</td>
                                    <td>On-going</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2023</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Chandrashekhar Goswami; Anupam Das; Karrar Imran Ogaili; Vivek Kumar Verma; Vijay
                                            Singh; Dilip Kumar Sharma, “Device to Device Communication in 5G network using
                                            device centric resource allocation algorithm” , International Conference on Software
                                            Telecommunications and Computer Networks, 2023
                                            <hr>
                                            2. Anupam Das , Subhajit Chakrabarty, “Multiobjective Optimal Feature selection for
                                            Cyber Security Itegrated with Deep Learning”, International Conference on computing
                                            and communication networks, 2023
                                            <hr>
                                            3. Antara Malakar, Dr. Ankur Ganguly, Dr. Swarnendu Kumar Chakraborty, “Development
                                            of CNN-based Feature Extraction and Multi-Layer Perceptron for Eye Disease
                                            Detection”, 3rd International Conference on Advanced Computing and Intelligent
                                            Technologies (ICACIT 2023)" virtually Jointly Organised by Indira Gandhi National
                                            Tribal University - Regional Campus Manipur and ADSR Education and Research
                                            Foundation on December 8-9, 2023. (Springer).
                                            <hr>
                                            4. Ankur Ganguly, Antara Malakar, “A Frequency Domain Approach to Analyze Heart Rate
                                            Variability (HRV) Among the Resident Population of the Himalayan Regions of West
                                            Bengal – An Approach towards achieving Sustainable Development Goal 3 (SDG3)”, 1st
                                            Two-Day International Conference on “Emerging Trends in Business &Management – A
                                            Lookout for Multidisciplinary Approaches for Sustainable Growth” (IC ETBM 2023) on
                                            16th &17th June 2023, The Assam Royal Global University
                                            <hr>
                                            5. Chakraborty, I., Das, P. An Efficient ACO-based Routing and Data Fusion Approach
                                            for IoT Networks. SN COMPUT. SCI. 4, 808 (2023).
                                            <hr>
                                            6. URL- https://doi.org/10.1007/s42979-023-02257-3
                                            <hr>
                                            7. Nandy,T., Devi L.M., Chakraborty, I., 2023 . Brain tumor detection using VGG-16.
                                            In Advanced Computing, Machine Learning, Robotics and Internet Technologies.
                                            Springer, Singapore.
                                            <hr>
                                            8. An Intelligent Sensor Based Biodegradable Waste Collection Unit, Design No.:
                                            388951-001, Date of publication: 23/06/2023 [Published]
                                            <hr>
                                            9. Designing Of Ultra Low Power Wi-Fi IoT Modules, File No:202331015013, Journal No.
                                            10/2023, Date of publication:10/03/2023 [Published].
                                            <hr>
                                            10. Dr. Rashel Sarkar” Medical Image Analysis of Knee Osteoarthritis using Modified
                                            Deep CNN”, Journal of Survey in Fisheries Sciences 10(2S) 133-144 2023, ISSN:
                                            2368-7487, Cite Score 1.0, SCOPUS Q3.
                                            <hr>
                                            11. Dr. Rashel Sarkar ““An artificial intelligence based approach for recognizing
                                            ovarian cancer using combined krill herd and grey wolf Optimization” European
                                            Chemical Bulletin E- ISSN:2063-5346, page- 1278- 1290, Cite Score 1.6, SCOPUS INDEX,
                                            DOI: 10.31838/ecb/2023.12.si6.1202023.30/05/2023.
                                            <hr>
                                            12. Dr. Rashel Sarkar ” Neuro Linguistic Programming : An Effective Tool for
                                            Teaching of English as a Second Language", International Journal of Scientific
                                            Research in Science and Technology (IJSRST), Online ISSN : 2395-602X, Print ISSN :
                                            2395-6011, Volume 10 Issue 1, pp. 529-536, JanuaryFebruary 2023. Available at doi :
                                            https://doi.org/10.32628/IJSRST2310172 Journal URL https://ijsrst.com/IJSRST2310172
                                            <hr>
                                            13. Dr. Rashel Sarkar” Tomato Leaf Disease Recognition-A Critical Review” , Journal
                                            of Data Acquisition and Processing, Cite Score 0.7, Vol. 38 (1) 2023 page-
                                            4388-4397, ISSN: 1004-9037, SCOPUS, https://sjcjycl.cn/ DOI: 10.5281/zenodo.7766137
                                            <hr>
                                            14. Debabrat Bharali, Dr.Rashel Sarkar “Drawbacks Of Dataset For Tomato Leaf
                                            Diseases Recognition” Journal of Namibian Studies, 35 S1 (2023): 3551-3559 ISSN:
                                            2197-5523 (online),Cite Score 0.5,Published Aug10,2023,SCOPUS, DOI
                                            https://doi.org/10.59670/jns.v35i.4245.
                                            <hr>
                                            15. Dr. Rashel Sarkar “A Non-Classical Approach in Analyzing Student’s Performance
                                            in Academics Using Fuzzy Logic” Tuijin Jishu/Journal of Propulsion Technology ISSN:
                                            1001-4055 Vol. 44 No. 3 (2023),page: 3542-3549 SCOPUS Cite Score 1.1,Published Nov
                                            2023,SCOPUS, DOI: https://doi.org/10.52783/tjjpt.v44.i3.2065
                                            <hr>
                                            16. Dr. Rashel Sarkar “A non-classical approach in selection of a feasible candidate
                                            for contesting in an election using fuzzy logic” Journal Business, Management and
                                            Economics Engineering, ISSN: 2669- 2481Vol. 21 No. 2 (2023), page: 642-649 SCOPUS
                                            Cite Score 2.1, Published Dec 2023, SCOPUS.
                                            <hr>
                                            17. Das, S., A. U. Islam, P. Sarma , S. Borkakoty & A. Sinha (2023) “Solving the Non
                                            Deterministic Nature of the DBSCAN Algorithm”, Journal of Harbin Engineering
                                            University , Vol. 44 No. 7, 128-136 . (Scopus)
                                            <hr>
                                            18. Sarkar, R., M. A. Raibag, S. Das, A. Das, I.Hussain and N. Deka (2023), A Non
                                            Classical Approach in Analyzing Student’s Performance in Academics Using Fuzzy
                                            Logic, Tuijin Jishu/Journal of Propulsion Technology, Vol. 44, No.3, 3542-49.
                                            (Scopus).
                                            <hr>
                                            19. Das, S., A. Das and A. U. Islam (2023),Exploring Women's Safety: Uncovering
                                            Crime Patterns through Fuzzy Clustering Methods, Research and Applications Towards
                                            Mathematics and Computer Science, Vol. 6, Chapter 3, Print ISBN: 978-81-967636-0-2,
                                            eBook ISBN: 978-81 967636-9-5, DOI: 10.9734/bpi/ratmcs/v6/11056F.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2022</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Chakraborty, I., Das, P., & Pradhan, B. (2022). An Intelligent Routing for
                                            Internet of Things Mesh Networks. Transactions on Emerging Telecommunications
                                            Technologies, e4628.
                                            <hr>
                                            2. Hussain, I., Das, D. C., Latif, A., Sinha, N., Hussain, S. S., & Ustun, T. S.
                                            (2022). Active power control of autonomous hybrid power system using two degree of
                                            freedom PID controller. Energy Reports, 8, 973-981.
                                            <hr>
                                            3. Dey, S., Deka, N., & Hazarika, D. (2022). Power system planning for reduction in
                                            system losses using STATCOM and PSO technique. Journal of The Institution of
                                            Engineers (India): Series B, 103(4), 1269-1281
                                            <hr>
                                            4. Das, A. (2022). Adaptive UNet-based lung segmentation and ensemble learning with
                                            CNN-based deep features for automated COVID-19 diagnosis. Multimedia Tools and
                                            Applications, 81(4), 5407-5441.
                                            <hr>
                                            5. Das, A. (2022). Designing green IoT communication by adaptive spotted hyena
                                            tunicate swarm optimization‐based cluster head selection. Transactions on Emerging
                                            Telecommunications Technologies, 33(11), e4595
                                            <hr>
                                            6. Chakraborty, Ishita, Das, Prodipto (2021). An optimization algorithm for IoT
                                            enabling technology. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            7. Chakraborty, Ishita, Das, Prodipto (2021). A simple optimization algorithm for
                                            IoT environment. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            8. Deka, A. and Sarma, Mayuri (2020, February). Pre-processing of Landsat-8 data for
                                            population estimation: A study with respect to Dimoria Development block of Assam.
                                            3rd International Conference of Innovative Computing and Communication. 9. Dr.
                                            Rashel Sarkar “An Efficient Parallel Clustering Algorithm on Big Data using Spark”
                                            in Journal of East China University of Science and Technology ISSN 1006-3080,
                                            ELSEVIER SCOPUS Cite Score 0.3. VOL.65 ISS. 2 2022, 535-547
                                            <hr>
                                            9. Dr. Rashel Sarkar “Multi-Feature Learning Model for Epilepsy Classification
                                            Supervised by a High Robust Heterogeneous Deep Ensemble” in Turkish Journal of
                                            Computer and Mathematics Education (TURCOMAT), e-ISSN 1309-4653, SCOPUS. Vol.13
                                            No.02 (2022), 273- 284
                                            <hr>
                                            10. Dr. Rashel Sarkar “An Investigation on Epileptic Seizure Classification Using
                                            Machine Learning and Multiple Feature” Selection Strategies in 3rd International
                                            Conference of Emerging Technology (INCET 2022) during 27th to 29th May 2022. IEEE
                                            Bangalore Section. DOI: 10.1109/INCET54531.2022.9824799
                                            <hr>
                                            11. Dr. Rashel Sarkar “A spark-based parallel fuzzy c median algorithm for web log
                                            big data” in International Journal on “Technical and Physical Problems of
                                            Engineering” (IJTPE) Published by International Organization of IOTPE, ISSN
                                            2077-3528, SCOPUS, Cite Score 1.2, September 2022 Issue 52 Volume 14 Number 3 Pages
                                            212-220
                                            <hr>
                                            12. Das, S., A. U. Islam, P.S. Velumani & B. Sarma (2022), “An Analysis of the Input
                                            Parameters of the DBSCAN Algorithm”, Computer Integrated Manufacturing Systems, Vol.
                                            28 No. 11, 1299-1314 (Scopus)
                                            <hr>
                                            13. Title of the invention: “Synthesizing Three Dimensional Images using Deep
                                            Convolutional Generative Adversarial Network (DCGAN) Algorithms”. The Patent Office
                                            Journal No. Application No. Date of filing of Application Publication Date : 37/2022
                                            Dated 16/09/2022 57890. : 202241048020 A. : 23/08/2022 : 16/09/2022
                                            <hr>
                                            14. Kalita, Nayan Jyoti, Ankita Goyal Agarwala, and Jayprakash Das. "Word Level Lan
                                            guage Identification on Code-Mixed English-Bodo Text." In IOP Conference Series:
                                            Materials Science and Engineering, vol. 1020, no. 1, p. 012027. IOP Publishing,
                                            2021.
                                            <hr>
                                            15. Smiti Dey.Nilakshi Deka & Durlav Hazarika,Power System Planning for Reduction in
                                            System losses using STATCOM and PSO Technique. J. Inst. Eng. India Ser. B 103,
                                            1269–1281 (2022).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2021</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Sharma, Mayuri, Kumar, Chandan J., Deka, Dr. Aniruddha (2021). Early diagnosis of
                                            rice plant disease using machine learning techniques. Archives of phytopathology and
                                            plant protection.
                                            <hr>
                                            2. Buragohain, Anurag, Deka, Dr. Aniruddha (2021). Effectiveness and sustainability
                                            of online teaching-learning in higher education- An exploratory survey. ASAR
                                            International conference , Delhi.
                                            <hr>
                                            3. Chakraborty, Ishita, Das, Prodipto (2021). An optimization algorithm for IoT
                                            enabling technology. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            4. Chakraborty, Ishita, Das, Prodipto (2021). A simple optimization algorithm for
                                            IoT environment. Advances in Intelligent Systems and Computing.
                                            <hr>
                                            5. Laskar, A., & Das, S. (2021). Design a New Learning based Method for Smart
                                            Semantic Data Management System. In Proceedings of the International Conference on
                                            Computing and Communication Systems: I3CS 2020, NEHU, Shillong, India (pp. 215-226).
                                            Springer Singapore.
                                            <hr>
                                            6. Manisha Jaiswal, Anupam Das, Bidisha Choudhury, Mishel Elizabeth Jacob: Analysing
                                            The Role Of Social Media As A Platform Of E- Commerce : Webology (ISSN: 1735-188X),
                                            Volume 18, Number 1, 2021. [SCI: IF = 1.57]
                                            <hr>
                                            7. Anupam Das: Adaptive UNet‐based Lung Segmentation and Ensemble Learning with CNN
                                            based Deep Features for Automated COVID‐19 Diagnosis: Multimedia Tools and
                                            Applications[SPRINGER NATURE], https://doi.org/10.1007/s11042-021-11787-y, 22nd
                                            December, 2021. [indexed in WoS, Scopus etc) [SCI: IF = 3.158]
                                            <hr>
                                            8. Manisha Jaiswal, Anupam Das, Bidisha Choudhury, Mishel Elizabeth Jacob: Analysing
                                            The Role Of Social Media As A Platform Of E- Commerce : Webology (ISSN: 1735-188X),
                                            Volume 18, Number 1, 2021. [SCI: IF = 1.57]
                                            <hr>
                                            9. Kalita, Nayan Jyoti, Ankita Goyal Agarwala, and Jayprakash Das. "Word Level
                                            Language Identification on Code-Mixed English-Bodo Text." In IOP Conference Series:
                                            Materials Science and Engineering, vol. 1020, no. 1, p. 012027. IOP Publishing,
                                            2021.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2020</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Deka, A. and Sarma, Mayuri (2020, February). Pre-processing of Landsat-8 data for
                                            population estimation: A study with respect to Dimoria Development block of Assam.
                                            3rd International Conference of Innovative Computing and Communication.
                                            <hr>
                                            2. Deka, A. and Daimari, J. (2020, March). Detection of Bodo Word Boundary using
                                            Forced Alignment. International Conference of Electronic Systems and Intelligent
                                            Computing.
                                            <hr>
                                            3. Chakraborty, Ishita (2020, February). A simple optimization algorithm for IoT
                                            environment. 1st International Conference on Mathematical Modeling, Computational
                                            Intelligence Techniques and Renewable Energy, (Springer).
                                            <hr>
                                            4. Chakraborty, Ishita (2020, July). An optimization algorithm for IoT enabling
                                            Technology. 2nd International Conference on Emerging Technologies In Data Mining And
                                            Information Security.
                                            <hr>
                                            5. Talukdar, Gitimoni (2020, March). Performance Analysis of Nearest Neighbor,
                                            K-Nearest Neighbor and Weighted K-Nearest Neighbor for the Classification of
                                            Alzheimer Disease. 3rd International Conference on Computing and Communications.
                                            <hr>
                                            6. Misra, Debashis D. (2020, June). Optimal Routing in the 5G Ultra-Dense Small Cell
                                            Network using GA, PSO, and Hybrid PSO-GA Evolutionary Algorithms. 2nd International
                                            Conference on Applied Mathematics and Computer Science.
                                            <hr>
                                            7. Prasad, Anoop K. (2020, February). SMART ASTHMA alert using IoT and predicting
                                            threshold values using Decision Tree Classifier. International Conference on
                                            Computer Communication and Internet of Things.
                                            <hr>
                                            8. Rai, Sangeeta, Deka. Aniruddha (2020, August). Analysis of Emotion Detection
                                            Classifier for Development of Text Predictive Model. International Journal of
                                            research and Analytical Reviews 7(3).3, E-ISSN 2348-1269.
                                            <hr>
                                            9. Kumari, Binita, Deka, Dr. Aniruddha (2020). Voice Controlled Wheelchair using
                                            Nepali Word. International Journal of research and Analytical Reviews 7(3).3, E-ISSN
                                            2348-1269.
                                            <hr>
                                            10. Kalita, Nayan J., Agarwala, Ankita G., Das, Jayprakash (2020). Word level
                                            language identification on code-mixed English-Bodo text. ICCM 2020.
                                            <hr>
                                            11. Anupam Das, Shikhar Kumar Sarma, Shrutimal Deka: Data Security with DNA
                                            Cryptyography. Published in Transactions on Engineering Technologies-Springer Nature
                                            in October 2020
                                            <hr>
                                            12. Md Ali Akour, Anupam Das: Developing a Virtual Smart Total Learning Environment
                                            for Future Teaching-Learning System. Published in IEEE Xplore in 2020.
                                            <hr>
                                            13. Presented a paper titled “Developing a Virtual Smart Total Learning Environment
                                            for Future Teaching-Learning System” in the IEEE TALE 2020, international
                                            Conference, in Japan, December, 2020. The proceedings of the conference are
                                            published in IEEE Explore. [Indexed in Scopus and IEEE].
                                            <hr>
                                            14. Presented a paper titled “Intelligent Recommendation System for E- Learning
                                            using Membership Optimized Fuzzy Logic Classifier” in the IEEE PuneCon 2020,
                                            international Conference, in Pune, December, 2020. The proceedings of the conference
                                            are published in IEEE Explore. [Indexed in Scopus and SCI : IF = 0.22]
                                            <hr>
                                            15. Presented a paper titled “Energy Efficient Wireless Communications using EEA and
                                            EEAS with energy harvesting schemes” in the IEEE ADCOM 2020, international
                                            Conference, at NIT, Silchar, December, 2020. The proceedings of the conference are
                                            published in IEEE Explore. [Proceedings SCI : IF = 0.18]
                                            <hr>
                                            16. Sumi KankanaDewan, Santanu Bardaloi, “Resistance measurement of Blood serum of
                                            Bovine, Avian and Caprine”, International Journal of Physical and Social Science,
                                            vol.8(8), pp.32-41, August 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2019</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Debbarma, Mary, Kalita, Nayan J. and Sarma, Manoj K. (2019, November). A Study of
                                            Sentiment Analysis in Kokborok Language. International Conference on Sustainable and
                                            Innovative Solutions for Current Challenges in Engineering & Technology.
                                            <hr>
                                            2. Deka, A., Daimari, R. J., Rai, S. and Baruah, D. (2019). A New Approach to Design
                                            of an Email Classifier. IEEE 6th International Conference on Computing for
                                            Sustainable Global Development. 37-39.
                                            <hr>
                                            3. Deka, A. and Kumari, B. (2019). A DTMF based Railway Enquiry System. IEEE 6th
                                            International Conference on Computing for Sustainable Global Development, 51-54.
                                            <hr>
                                            4. Das, Susan, Debbarma, Mary and Deka, A. (2019, March). A brief review on Block
                                            chain and Distributed Ledger Technology. 6th IEEE International Conference on
                                            Computing for Sustainable Global Development.
                                            <hr>
                                            5. Sarma, Manoj K. and Kakoti, Anjana M. (2019). Clustering of Web Documents with
                                            Structure of Webpages based on the HTML Document Object Model. IEEE International
                                            Conference on Intelligent Techniques in Control, Optimization and Signal Processing.
                                            <hr>
                                            6. Sarma, Manoj K. and Kakoti, Anjana M. (2019, May). Comparison of K- medoids (PAM)
                                            algorithm with K-means algorithm for Web Document Clustering with Structure of Web
                                            pages. IEEE International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            7. Kalita, Nayan J. and Sarma, Manoj K. (2019, May). Agglomerative data mining
                                            approach for clustering of research papers based on similarity measure. 3rd
                                            International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            8. Sarma, Manoj K. and Kakoti, Anjana M. (2019). Clustering of Web Documents with
                                            Structure of Webpages based on the HTML Document Object Model. IEEE International
                                            Conference on Intelligent Techniques in Control, Optimization and Signal Processing.
                                            <hr>
                                            9. Sarma, Manoj K. and Kakoti, Anjana M. (2019, May). Comparison of K- medoids (PAM)
                                            algorithm with K-means algorithm for Web Document Clustering with Structure of Web
                                            pages. IEEE International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            10. Kalita, Nayan J. and Sarma, Manoj K. (2019, May). Agglomerative data mining
                                            approach for clustering of research papers based on similarity measure. 3rd
                                            International Conference on Intelligent Computing and Control Systems.
                                            <hr>
                                            11. Mridul Suklabaidya , Anupam Das, Biswajit Das: A Cryptography Model using Hybrid
                                            Encryption and Decryption Techniques. Proceedings published in ELSEVIER, indexed in
                                            SCOPUS and WoS in April 2019.
                                            <hr>
                                            12. Mridul Suklabaidya , Anupam Das, Biswajit Das: A Cryptography Model using Hybrid
                                            Encryption and Decryption Techniques. Proceedings published in ELSEVIER, indexed in
                                            SCOPUS and WoS in April 2019.
                                            <hr>
                                            13. Sumi KankanaDewan, Santanu Bardaloi, “Resistance measurement of Blood serum of
                                            Bovine, Avian and Caprine”, International Journal of Physical and Social Science,
                                            vol.8(8), pp.32-41, August 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2018</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Chakraborty, Ishita (2018, April). Sensor Selection and Data fusion approach for
                                            IoT Applications. Second International Conference on Computing and Communication in
                                            Recent Developments in Machine Learning and Data Analytics (Springer).
                                            <hr>
                                            2. Talukdar, Gitimoni (2018, April). WSD for Assamese Language. Second International
                                            Conference on Computing and Communication in Recent Developments in Machine Learning
                                            and Data Analytics (Springer).
                                            <hr>
                                            3. Talukdar, Gitimoni (2018, April). Assamese Named Entity Recognition System using
                                            Naive Bayes Classifier. International Conference on Computing and Data Sciences
                                            (ICACDS) (Springer).
                                            <hr>
                                            4. Misra, Debashis D. (2018, March). Cooperative Routing Mechanism in the 5G Ultra
                                            Dense Network. International Conference on Signal Processing and Integrated Networks
                                            (SPIN) (IEEE).
                                            <hr>
                                            5. Misra, Debashis D. (2018). Combination of Techniques for Removal of Background
                                            Clutter from Radar Images. 5th International Conference on Computing on Sustainable
                                            Global Development (IEEE).
                                            <hr>
                                            6. Anupam Das, Samarjit Das, Atowar Ul Islam: Load Balancing and Congestion Control
                                            using Congestion Aware Multipath Routing Protocol (CAMRP) in Wireless Networks.
                                            International Journal on Future Revolution in Computer Science & Communication
                                            Engineering Volume: 4 Issue: 2 (February, 2018) ISSN: 2454-4248 193 – 198.
                                            <hr>
                                            7. Bidisha Choudhury, Anupam Das: A Study on the Process of Supra segmental
                                            Preservation of IE Language and Computational Data Analysis of Acoustic Phonetics.
                                            An International Open Access Journal & UGC and ISSN Approved, ISSN: 2349-5162 in
                                            August 2018.
                                            <hr>
                                            8. Samarjit Das, Anupam Das, Atowar Ul Islam: Finding Patterns in Crime against
                                            Women using a Fuzzy Clustering Technique. An International Open Access Journal & UGC
                                            and ISSN Approved ISSN: 2347-2693, Vol- 6, Issue-8, in August, 2018.
                                            <hr>
                                            9. Anupam Das, Samarjit Das, Atowar Ul Islam: Congestion Control using Congestion
                                            Aware Protocol in Wireless Networks tested with Standard QoS. Journal of Emerging
                                            Technologies and InnovativeResearch (An International Open Access Journal & UGC and
                                            ISSN Approved ) ISSN: 2349- 5162., in August, 2018, vol. 5, Issue-8, pp. 676-678.
                                            <hr>
                                            10. Atowar Ul Islam, Samarjit Das, Anupam Das: Construction of a Structure from
                                            4-Regular Planar Graph and to investigate its implications on Odd Region and Even
                                            Region. IOSR-JEN an International organization of Scientific Research ISSN (e):
                                            2250-3021, ISSN (p): in September, 2018, vol. 08, Issue-9, version-2, pp.31-38.
                                            <hr>
                                            11. Kalita, Nayan Jyoti, and Navanath Saharia. "Language identification on code-mix
                                            social text." In Proceedings of the International Conference on Computing and
                                            Communication Systems, pp. 433-440. Springer, Singapore, 2018.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2017</strong>
                            </h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Sarma, Manoj K. and Kakoti, Anjana M. (2017). A DOM-Tree based Representation of
                                            Web Document Structure for Web Mining Applications. International Journal on Recent
                                            and Innovation Trends in Computing and Communication (IJRITCC), 6(5), 1437-1439.
                                            <hr>
                                            2. Sarma, Manoj K. and Kakoti, Anjana M. (2017). Study on Distance Measures for
                                            Clustering of Web Documents based on DOM-Tree based Representation of Web Document
                                            Structure. International Journal on Recent and Innovation Trends in Computing and
                                            Communication, 6(5), 1440-1442.
                                            <hr>
                                            3. Chakraborty, Ishita (2017, December). Data Fusion in Wireless Sensor Network-A
                                            Survey. The International Journal of Scientific Research in Network Security and
                                            Communication, 6(5), 9-15.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="headd3 fw-bold">12. IPR : Please provide the details of any patents published or awarded
                                or technology transferred</h3>
                            <hr>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr>
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Patent Application No.</th>
                                        <th class="text-white">Inventor(s)</th>
                                        <th class="text-white">Title</th>
                                        <th class="text-white">Date of Publication</th>
                                        <th class="text-white">Publication number</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark align-middle">
                                    <tr>
                                        <td>1</td>
                                        <td>202331015013</td>
                                        <td>Dr. Anupam Das, Dr. Ishita Chakraborty, Dr. Vaskar Deka, Ms. Antara Malakar, Mr.
                                            Nayan Jyoti Kalita, Ms. Ankita Goyal Agarwalla </td>
                                        <td>Designing Of Ultra Low Power Wi-Fi IoT Modules </td>
                                        <td>10/03/2023</td>
                                        <td>Journal No. 10/2023</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>202231034509</td>
                                        <td>Dr. Anupam Das, P. Shanta Kumar,Bala Subramanian S,Praveen Narayan </td>
                                        <td>A Device For On-Line Video Meetings And Inbuilt Emotion-Based Attendance Report</td>
                                        <td>08/07/2023</td>
                                        <td>Journal No. 10/2023</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>388951-001</td>
                                        <td>Dr. Anupam Das, Dr. Vaskar Deka, Dr. Ishita Chakraborty, Dr. Parismita Sarma, Dr.
                                            Mirzanur Rahman </td>
                                        <td>An Intelligent Sensor Based Biodegradable Waste CollectionUnit</td>
                                        <td>23/08/2023</td>
                                        <td>Journal No. 388951-001</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>390497-001</td>
                                        <td>Dr. T.V.Attar, Dr.P Charan, Dr. Anupam Das, Dr.V.T. Mohite,Dr. V.K Sexana,Dr. S
                                            Pushkar </td>
                                        <td>Portable Environmental Data Monitoring Box </td>
                                        <td>23/08/2023</td>
                                        <td>Journal No. 390497-001</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>202231036763</td>
                                        <td>Dr. Anupam Das, Dr.J E Nalavade, Dr. Bala Subramanian, Kriti Mahajan</td>
                                        <td>An Adaptive Controller- Based Flexible Home Theatre Integrated With Smart Tv&amp;
                                            Air Purification System </td>
                                        <td>27/06/2022</td>
                                        <td>Journal No. 29/2022</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>202221037757A</td>
                                        <td>Dr. O.P Singh, Dr. M.E, Patil, Dr.B. Anitha,dr. B.Babu,Dr. Ram Subbiah, Dr. Anupam
                                            Das, K.S Chauhan,Dr. KK Trivedi </td>
                                        <td>Criticality Identification Through Natural Language Processing For Emergency Phone
                                            Calls</td>
                                        <td>22/07/2022</td>
                                        <td>Journal No. 29/2022</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>202241048020A</td>
                                        <td>Dr. P. Pathury, Dr. R Babu, Dr. D Gambhir, Dr. T Kuntavai, Dr. Anupam Das, Dr. ka
                                            Narender, Dr. Samarjit Das, Dr. Madhusudan </td>
                                        <td>Synthesizing Three Dimensional Images Using Deep Convolutional Generative
                                            Adversarial</td>
                                        <td>16/09/2023</td>
                                        <td>Journal No. 37/2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

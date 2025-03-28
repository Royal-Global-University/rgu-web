@extends('frontend.master')
@section('content')
    <div class="mobile" >
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative; background-image: url(mobile-assets/second-convo/Bg.png); background-size: cover;">
            <img src="mobile-assets/second-convo/1.png" alt="">
        </div>

        <div class="container pt-4 pb-3">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-weight: 600; color: #FF9A1E;" class="mobile-headd1 kd-title-ani kd-split-text">
                        Second Convocation </h1>

                    <h1 style="font-weight: 600; color: #27467A;" class="mobile-headd2 kd-title-ani kd-split-text">
                        The Assam Royal Global University</h1>
                    <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                    <p class="mobile-para1" style="color: #27467A;">
                        In the Second Convocation Ceremony of The Royal Global University, 951 graduates received their
                        degrees and diplomas, comprising of 30 Gold Medallists, 36 Silver Medallists along with 2 recipients
                        of Chancellor’s Gold Medals, 5 recipients of Salvers and Medals for Excellence in Literary
                        Activities, Excellence in Cultural Activities, Excellence in Community Service, Excellence in
                        Mentoring, and Excellence in Sports.
                    </p>
                </div>

                <div class="col-lg-12">
                    <video class="rounded" width="100%" height="auto" autoplay muted playsinline
                        controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                        <source src="mobile-assets/second-convo/second-convo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="container" style="color: #264273;">
            <p class="para1">
                The university conferred Honoris Causa, to three distinguished recipients:
            </p>

            <ul class="para1">
                <li>Prof. (Dr.) Ajay Kumar Sood, Principal Scientific Advisor to the Government of India, The Year of
                    Science Chair Professor, Department of Physics, Indian Institute of Science</li>
                <li>Ms. Patricia Mukhim, The Editor, The Shillong Times</li>
                <li>Dr. Ashok Kumar Mittal, Chancellor, Lovely Professional University, Hon’ble Member of Parliament, Rajya
                    Sabha</li>

            </ul>
        </div>

        <img src="mobile-assets/second-convo/last-part.png" alt="">

        <div class="container">

            <h2 class="mobile-headd2 mt-5 pb-2" style="color: #000000;">Recipients of Gold Medals</h2>
            <!-- Data Table 1 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">GOLD</th>
                            </tr>
                        </thead>
                        <tbody class=" mobile-para1">
                            <tr>
                                <td>1</td>
                                <td>Thungrhoni O Humtsoe</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Aparajita Goon</td>
                                <td>MA- Sociology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nitul Kalita</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nabin Roshan Lakra</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Esmeralda Emma Pathaw</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Anwesha Bhattacharjee</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Arundhati Roymedhi</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Mausumi Sarma</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Sneha Mudoi</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dimpal Talukdar</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Leeza Dutta</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Meghna Sandilya</td>
                                <td>M.Sc Maths</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Lawanda Gracentia Synrem</td>
                                <td>MA Geography</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Graceful C Marboh</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Neivito Vitsu</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Joshi Wahengbam</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Bijit Kalita</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Shakthi Narayanan M.</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Anisha Bharatia</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Haripriya Wangkhem</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Siamkima Guite</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Sabina Rahman</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Rikee Talukdar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Jannat Al Khanam</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Sonal Pradhan</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Arunabh Bharadwaz</td>
                                <td>B.Sc IT</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Himanshi Goyal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Bhaswaty Bora</td>
                                <td>B.Sc Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Swaswati Borpuzari</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Geetartha Pratim Dey</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Recipients of Silver Medals</h2>
            <!-- Data Table 2 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example1"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">SILVER</th>
                            </tr>
                        </thead>
                        <tbody class="mobile-para1">
                            <tr>
                                <td>1</td>
                                <td>Anali Zhimo</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saptaswara Sandilya</td>
                                <td>MA- Sociology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anuva Das</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kritika Mahela</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ashif Ul Hussain</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Prity Patodia</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Hijam Dinakumar Singh</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Chandramita Das</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Mhalevino Rhetso</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Kaberi Bordoloi</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Fatema Eshrak</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Pankaj Sarma</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Rodali Talukdar</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Jina Nath</td>
                                <td>M.Sc Maths</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Mebanpher Kupar Nongbri</td>
                                <td>MA Geography</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Nending Sonia</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Thejazeno Paphino</td>
                                <td>B.Arch</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Aditya Deb Nath</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Farhat Azim</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Rizwan Ansari</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Raktutpal Saikia</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Prerna Chowdhury</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Sneha Deka</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Pooja Shil</td>
                                <td>BA History</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Ankita Kalita</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Mihika Chowdhury</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Kannaki Hazarika</td>
                                <td>BSW</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Pratyasha Das</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Ipshita Biswas</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Yengkhom Maleshwori Devi</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Shibam Jyoti Das</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Ria Saikia</td>
                                <td>B.Sc IT</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Hrishika Pipalwa</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Sangeeta Sarma</td>
                                <td>B.Sc Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Prapti Baishya</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Nidhi Medhi</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Achievers in the Co-curricular category</h2>
            <!-- Data Table 3 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example2"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">AWARD</th>
                            </tr>
                        </thead>
                        <tbody class=" mobile-para1">
                            <tr>
                                <td>1</td>
                                <td>Rikee Talukdar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sewagi Savapandit</td>
                                <td>B.Sc. Biochemistry</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Basudeo Pansari Award for Excellence in Community Service</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Roadali Ranjan Bhattacharyya</td>
                                <td>MA J MC</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sangeeta Sarma</td>
                                <td>B.Sc. Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Diana D. Chishi</td>
                                <td>Master of Travel and Tourism</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Hemant Kumar Lohia Award for Excellence in Sports</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Recipients of the Chancellor's Gold Medal</h2>
            <!-- Data Table 4 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example3"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                            </tr>
                        </thead>
                        <tbody class=" mobile-para1">
                            <tr>
                                <td>1</td>
                                <td>Nabin Roshan Lakra</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rikee Talukdar</td>
                                <td>BA (H) English</td>
                                <td>UG</td>
                                <td>2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">The honorary degrees were conferred on the following
            </h2>
            <!-- Data Table 5 -->
            <div class="table-responsive mb-5">
                <div class="col-xl-12 col-md-12">
                    <table class="table border table-responsive table-striped">
                        <tbody class="mobile-para1">
                            <tr>
                                <td>Prof. (Dr.) Ajay Kumar Sood</td>
                                <td>
                                    Principal Scientific Advisor to the Government of India, The Year of
                                    Science Chair Professor, Department of Physics, Indian Institute of
                                    Science
                                </td>
                                <td>Honoris Causa</td>
                            </tr>
                            <tr>
                                <td>Ms. Patricia Mukhim</td>
                                <td>The Editor, The Shillong Times</td>
                                <td>Honoris Causa</td>
                            </tr>
                            <tr>
                                <td>Dr. Ashok Kumar Mittal</td>
                                <td>
                                    Chancellor, Lovely Professional University, Hon’ble Member of
                                    Parliament, Rajya Sabha.
                                </td>
                                <td>Honoris Causa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/second-convo/web-banner.png" alt="">

        <div class="container pt-4 pb-4">
            <div class="row pt-4">

                <div class="col-lg-6">

                    <h1 style="font-weight: 600; color: #FF9A1E;" class="headd1 kd-title-ani kd-split-text">
                        Second Convocation </h1>

                    <h1 style="font-weight: 600; color: #27467A;" class="headd2 kd-title-ani kd-split-text">
                        The Assam Royal Global University</h1>
                    <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                    <p class="para1" style="color: #27467A;">
                        In the Second Convocation Ceremony of The Royal Global University, 951 graduates received their
                        degrees and diplomas, comprising of 30 Gold Medallists, 36 Silver Medallists along with 2 recipients
                        of Chancellor’s Gold Medals, 5 recipients of Salvers and Medals for Excellence in Literary
                        Activities, Excellence in Cultural Activities, Excellence in Community Service, Excellence in
                        Mentoring, and Excellence in Sports.
                    </p>
                </div>

                <div class="col-lg-6">
                    <video class="rounded" width="100%" height="auto" autoplay muted
                        controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                        <source src="mobile-assets/second-convo/second-convo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="container" style="color: #264273;">
            <p class="para1">
                The university conferred Honoris Causa, to three distinguished recipients:
            </p>

            <ul class="para1">
                <li>Prof. (Dr.) Ajay Kumar Sood, Principal Scientific Advisor to the Government of India, The Year of
                    Science Chair Professor, Department of Physics, Indian Institute of Science</li>
                <li>Ms. Patricia Mukhim, The Editor, The Shillong Times</li>
                <li>Dr. Ashok Kumar Mittal, Chancellor, Lovely Professional University, Hon’ble Member of Parliament, Rajya
                    Sabha</li>

            </ul>
        </div>

        <img class="pt-3" src="mobile-assets/second-convo/web-gallery.png" alt="">



        <div class="container">

            <h2 class="headd2 mt-5 pb-2" style="color: #000000;">Recipients of Gold Medals</h2>
            <!-- Data Table 1 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">GOLD</th>
                            </tr>
                        </thead>
                        <tbody class=" para1">
                            <tr>
                                <td>1</td>
                                <td>Thungrhoni O Humtsoe</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Aparajita Goon</td>
                                <td>MA- Sociology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nitul Kalita</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nabin Roshan Lakra</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Esmeralda Emma Pathaw</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Anwesha Bhattacharjee</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Arundhati Roymedhi</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Mausumi Sarma</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Sneha Mudoi</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dimpal Talukdar</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Leeza Dutta</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Meghna Sandilya</td>
                                <td>M.Sc Maths</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Lawanda Gracentia Synrem</td>
                                <td>MA Geography</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Graceful C Marboh</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Neivito Vitsu</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Joshi Wahengbam</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Bijit Kalita</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Shakthi Narayanan M.</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Anisha Bharatia</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Haripriya Wangkhem</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Siamkima Guite</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Sabina Rahman</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Rikee Talukdar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Jannat Al Khanam</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Sonal Pradhan</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Arunabh Bharadwaz</td>
                                <td>B.Sc IT</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Himanshi Goyal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Bhaswaty Bora</td>
                                <td>B.Sc Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Swaswati Borpuzari</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Geetartha Pratim Dey</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="headd2 mt-4 pb-2" style="color: #000000;">Recipients of Silver Medals</h2>
            <!-- Data Table 2 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example1"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">SILVER</th>
                            </tr>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>1</td>
                                <td>Anali Zhimo</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saptaswara Sandilya</td>
                                <td>MA- Sociology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anuva Das</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kritika Mahela</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ashif Ul Hussain</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Prity Patodia</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Hijam Dinakumar Singh</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Chandramita Das</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Mhalevino Rhetso</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Kaberi Bordoloi</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Fatema Eshrak</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Pankaj Sarma</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Rodali Talukdar</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Jina Nath</td>
                                <td>M.Sc Maths</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Mebanpher Kupar Nongbri</td>
                                <td>MA Geography</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Nending Sonia</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Thejazeno Paphino</td>
                                <td>B.Arch</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Aditya Deb Nath</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Farhat Azim</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Rizwan Ansari</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Raktutpal Saikia</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Prerna Chowdhury</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Sneha Deka</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Pooja Shil</td>
                                <td>BA History</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Ankita Kalita</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Mihika Chowdhury</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Kannaki Hazarika</td>
                                <td>BSW</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Pratyasha Das</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Ipshita Biswas</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Yengkhom Maleshwori Devi</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Shibam Jyoti Das</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Ria Saikia</td>
                                <td>B.Sc IT</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Hrishika Pipalwa</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Sangeeta Sarma</td>
                                <td>B.Sc Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Prapti Baishya</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Nidhi Medhi</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="headd2 mt-4 pb-2" style="color: #000000;">Achievers in the Co-curricular category</h2>
            <!-- Data Table 3 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example2"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                                <th class="text-white">AWARD</th>
                            </tr>
                        </thead>
                        <tbody class=" para1">
                            <tr>
                                <td>1</td>
                                <td>Rikee Talukdar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sewagi Savapandit</td>
                                <td>B.Sc. Biochemistry</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Basudeo Pansari Award for Excellence in Community Service</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Roadali Ranjan Bhattacharyya</td>
                                <td>MA J MC</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sangeeta Sarma</td>
                                <td>B.Sc. Microbiology</td>
                                <td>UG</td>
                                <td>2019</td>
                                <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Diana D. Chishi</td>
                                <td>Master of Travel and Tourism</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Hemant Kumar Lohia Award for Excellence in Sports</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="headd2 mt-4 pb-2" style="color: #000000;">Recipients of the Chancellor's Gold Medal</h2>
            <!-- Data Table 4 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example3"
                        class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
                        <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">STUDENT NAME</th>
                                <th class="text-white">COURSE</th>
                                <th class="text-white">UG/PG</th>
                                <th class="text-white">BATCH</th>
                            </tr>
                        </thead>
                        <tbody class=" para1">
                            <tr>
                                <td>1</td>
                                <td>Nabin Roshan Lakra</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rikee Talukdar</td>
                                <td>BA (H) English</td>
                                <td>UG</td>
                                <td>2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="headd2 mt-4 pb-2" style="color: #000000;">The honorary degrees were conferred on the following</h2>
            <!-- Data Table 5 -->
            <div class="table-responsive mb-5">
                <div class="col-xl-12 col-md-12">
                    <table class="table border table-responsive table-striped">
                        <tbody class="para1">
                            <tr>
                                <td>Prof. (Dr.) Ajay Kumar Sood</td>
                                <td>
                                    Principal Scientific Advisor to the Government of India, The Year of
                                    Science Chair Professor, Department of Physics, Indian Institute of
                                    Science
                                </td>
                                <td>Honoris Causa</td>
                            </tr>
                            <tr>
                                <td>Ms. Patricia Mukhim</td>
                                <td>The Editor, The Shillong Times</td>
                                <td>Honoris Causa</td>
                            </tr>
                            <tr>
                                <td>Dr. Ashok Kumar Mittal</td>
                                <td>
                                    Chancellor, Lovely Professional University, Hon’ble Member of
                                    Parliament, Rajya Sabha.
                                </td>
                                <td>Honoris Causa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div  style="background-image: url(lakshya/convocation/second-convo/Bg.png); background-size: cover; padding-top: 90px; position: relative;">
            <div>
                <img src="mobile-assets/third-Convo/1.png" alt="">
            </div>

            <div class="container pt-4 pb-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="font-weight: 600; color: #FF9A1E;" class="mobile-headd1 kd-title-ani kd-split-text">
                            Third Convocation </h1>

                        <h1 style="font-weight: 600; color: #27467A;" class="mobile-headd2 kd-title-ani kd-split-text">
                            The Assam Royal Global University</h1>
                        <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                        <p class="mobile-para1" style="color: #27467A;">
                            The Third Convocation of Assam Royal Global University (RGU) was held on October 30, 2023, with Vice
                            President Jagdeep Dhankhar as the Chief Guest. He praised the university and urged graduates to
                            embrace entrepreneurship and contribute to India’s growth. A total of 1,197 students graduated, with
                            notable awards for academic excellence. Assam’s Chief Minister and Governor also attended,
                            congratulating the graduates and emphasizing the importance of knowledge and spirituality.
                            Chancellor Dr. A.K. Pansari highlighted the university’s growth and alignment with NEP-2020.
                        </p>
                    </div>

                    <div class="col-lg-12">
                        <video class="rounded" width="100%" height="auto" autoplay muted playsinline
                            controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                            <source src="mobile-assets/third-Convo/third-convo.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <img src="mobile-assets/third-Convo/last.png" alt="">


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
                                    <td>Nilanjana Parashar</td>
                                    <td>B.A LLB</td>
                                    <td>UG</td>
                                    <td>2018</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Muskan Varshney</td>
                                    <td>B.Arch</td>
                                    <td>UG</td>
                                    <td>2018</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Piyush Kumar</td>
                                    <td>B.Tech CSE</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Petrus Cheria Chetia Baraik</td>
                                    <td>BFA</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Donita Devi</td>
                                    <td>B.Pharmacy</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Khusbu Beriwal</td>
                                    <td>D.Pharmacy</td>
                                    <td>2 YEAR</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mansica Devi Lourembam</td>
                                    <td>B.Sc. Maths</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Tanissha Roy</td>
                                    <td>B.A Psychology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Subhashree Dey</td>
                                    <td>B.Com</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Tanmayee Kapinjal</td>
                                    <td>B.Com Finance &amp; Accounts</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sunny Sen</td>
                                    <td>B.Sc Biotechnology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Jumi Talukdar</td>
                                    <td>B.Sc Microbiology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Disha Agarwal</td>
                                    <td>B.Sc Zoology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Minara Pakiza Ullah</td>
                                    <td>B.Sc Zoology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Prachee Kalita</td>
                                    <td>B.A English</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Abdul Waqur Albir Rahman</td>
                                    <td>B.A History</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sneha Singha</td>
                                    <td>B.A J&amp;MC</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Rudrani Garg</td>
                                    <td>B.A Political Science</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Tanisha Ganguly</td>
                                    <td>B.A Sociology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Aanchal Golchha</td>
                                    <td>BBA</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Peli. T. Yeptho</td>
                                    <td>BSW</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Priya Chakraborty</td>
                                    <td>M.Com</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Sureksha Bharali</td>
                                    <td>M.Sc Biotechnology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Ankita Mili</td>
                                    <td>M.Sc Botany</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Ruckshana Khatun</td>
                                    <td>M.Sc Chemistry</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Pratyakshi Sarma</td>
                                    <td>M.Sc Mathematics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Chayanika Kalita</td>
                                    <td>M.Sc Microbiology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Anish Uz Zaman</td>
                                    <td>M.Sc Physics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Priyanka Das</td>
                                    <td>M.Sc Zoology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Nihar Pratim Kashyap</td>
                                    <td>M.Tech Civil Engineering</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Sumit Deb</td>
                                    <td>M.A Geography</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Krishti Abhilasa Bhuyan</td>
                                    <td>M.A Clinical Psychology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Jupitora Talukdar</td>
                                    <td>M.A Economics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Rahul Thokchom</td>
                                    <td>M.A English</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Lova Ngathem</td>
                                    <td>M.A History</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Thampaleena Longjam</td>
                                    <td>M.A J&amp;MC</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Disha Choudhury</td>
                                    <td>M.A Political Science</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Ahellabash Oinam</td>
                                    <td>M.A Public Administration</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Priya Agarwala</td>
                                    <td>MBA</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Hazel Sawnani</td>
                                    <td>MCA</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Neimezhunuo Rutsa</td>
                                    <td>MSW</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Susmita Choudhury</td>
                                    <td>LLM</td>
                                    <td>PG</td>
                                    <td>2022</td>
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
                            <tbody class=" mobile-para1">
                                <tr>
                                    <td>1</td>
                                    <td>Kessie K. Chophy</td>
                                    <td>BA LLB</td>
                                    <td>UG</td>
                                    <td>2018</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Devleena Hazarika</td>
                                    <td>B.Arch</td>
                                    <td>UG</td>
                                    <td>2018</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Imnatemsu</td>
                                    <td>B.Tech CE</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Anwayajyoti Dey</td>
                                    <td>B.Tech CSE</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Akansha Singha</td>
                                    <td>BFA</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jaya Saha</td>
                                    <td>B.Pharmacy</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Ankita Roy</td>
                                    <td>B.Sc Nursing</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Imran Hossain</td>
                                    <td>D.Pharmacy</td>
                                    <td>2 YEAR</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Hoinunnem Doungel</td>
                                    <td>B.A Geography</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Jennifer Leimapokpam</td>
                                    <td>B.A Psychology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Deepanwita Endow Purkayastha</td>
                                    <td>B.Com</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Wanpynshngain B Diengdoh</td>
                                    <td>B.Com Finance &amp; Accounts</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Jeba Sania</td>
                                    <td>B.Sc Biotechnology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rafiya Yasmin Saikia</td>
                                    <td>B.Sc Microbiology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Nabanya Priyam Bez</td>
                                    <td>B.Sc Zoology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Pratiksha Nath</td>
                                    <td>B.Sc Zoology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Meenakshi Dasgupta</td>
                                    <td>B.A English</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Alice Welly</td>
                                    <td>B.A History</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Priyanka Bhattacharya</td>
                                    <td>B.A J&amp;MC</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Trishna Das</td>
                                    <td>B.A Political Science</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Saiyantany Choudhury</td>
                                    <td>B.A Sociology</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Neha Bothra</td>
                                    <td>BBA</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Hritik Pathak</td>
                                    <td>BCA</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Anannya Das</td>
                                    <td>BSW</td>
                                    <td>UG</td>
                                    <td></td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Gun Dongkam Ch Sangma</td>
                                    <td>M.Com</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Khyatismita Choudhury</td>
                                    <td>M.Sc Biotechnology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Digbijoy Singha</td>
                                    <td>M.Sc Botany</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rimjhim Dauka</td>
                                    <td>M.Sc Chemistry</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Himadree Choudhury</td>
                                    <td>M.Sc Mathematics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Akangkhya Hazarika</td>
                                    <td>M.Sc Microbiology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Risha Das</td>
                                    <td>M.Sc Physics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Arpana Rabha</td>
                                    <td>M.Sc Zoology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Matsungzukla Jamir</td>
                                    <td>M.Tech Civil Engineering</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Sonia Samjetsabam</td>
                                    <td>M.A Geography</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Dorje Yangzom</td>
                                    <td>M.A Clinical Psychology</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Darshita Das</td>
                                    <td>M.A Economics</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Esther Lalchhanhimi</td>
                                    <td>M.A English</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Yohenba Tekcham</td>
                                    <td>M.A History</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Dolly Takhellambam</td>
                                    <td>M.A J&amp;MC</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Chunglitong Jamir</td>
                                    <td>M.A Political Science</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Tayenjam Purnajit Singh</td>
                                    <td>M.A Public Administration</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Pooja Agarwala</td>
                                    <td>MBA</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Debraj Aditya</td>
                                    <td>MCA</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>Riya Mishra</td>
                                    <td>MSW</td>
                                    <td>PG</td>
                                    <td>2021</td>
                                    <td>Silver</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>Ankita Talukdar</td>
                                    <td>LLM</td>
                                    <td>PG</td>
                                    <td>2022</td>
                                    <td>Silver</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Recipients of the Chancellor's Gold Medal</h2>
                <!-- Data Table 3 -->
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
                                    <td>Rudrani Garg</td>
                                    <td>B.A Political Science</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Disha Choudhury</td>
                                    <td>M.A Political Science</td>
                                    <td>PG</td>
                                    <td>2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Achievers in the Co-curricular category</h2>
                <!-- Data Table 4 -->
                <div class="table-responsive mb-5">
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
                                    <td>Nilanjana Parashar</td>
                                    <td>BA LLB (HONS)</td>
                                    <td>UG</td>
                                    <td>2018</td>
                                    <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bode Swuro</td>
                                    <td>BFA</td>
                                    <td>UG</td>
                                    <td>2019</td>
                                    <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Swati Choudhury</td>
                                    <td>B.SC ZOOLOGY</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rudrani Garg</td>
                                    <td>B.A Political Science</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                    <td>Basudeo Pansari Award for Excellence in Community Service</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

            <div class="website">

            <!--Start Header-->
                @include('frontend/components/aheader')
    <!--End Header-->

    <img src="mobile-assets/third-Convo/web-banner.png" alt="">
    <div>
        <div class="container pt-4 pb-4">
        <div class="row pt-4">

            <div class="col-lg-6">

                <h1 style="font-weight: 600; color: #FF9A1E;" class="headd1 kd-title-ani kd-split-text">
                    Third Convocation </h1>

                <h1 style="font-weight: 600; color: #27467A;" class="headd2 kd-title-ani kd-split-text">
                    The Assam Royal Global University</h1>
                    <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                <p class="para1" style="color: #27467A;">
                The Third Convocation of Assam Royal Global University (RGU) was held on October 30, 2023, with Vice President Jagdeep Dhankhar as the Chief Guest. He praised the university and urged graduates to embrace entrepreneurship and contribute to India’s growth. A total of 1,197 students graduated, with notable awards for academic excellence. Assam’s Chief Minister and Governor also attended, congratulating the graduates and emphasizing the importance of knowledge and spirituality. Chancellor Dr. A.K. Pansari highlighted the university’s growth and alignment with NEP-2020.
            </p>
            </div>

            <div class="col-lg-6">
                <video class="rounded" width="100%" height="auto" autoplay muted
                                            controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                                            <source src="mobile-assets/third-Convo/third-convo.mp4" type="video/mp4">
                                        </video>
            </div>
        </div>
    </div>
    </div>
    <img src="mobile-assets/third-Convo/web-gallery.png" alt="">

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
                                        <td>Nilanjana Parashar</td>
                                        <td>B.A LLB</td>
                                        <td>UG</td>
                                        <td>2018</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Muskan Varshney</td>
                                        <td>B.Arch</td>
                                        <td>UG</td>
                                        <td>2018</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Piyush Kumar</td>
                                        <td>B.Tech CSE</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Petrus Cheria Chetia Baraik</td>
                                        <td>BFA</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>Donita Devi</td>
                                        <td>B.Pharmacy</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>Khusbu Beriwal</td>
                                        <td>D.Pharmacy</td>
                                        <td>2 YEAR</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td>Mansica Devi Lourembam</td>
                                        <td>B.Sc. Maths</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td>Tanissha Roy</td>
                                        <td>B.A Psychology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>9</td>
                                        <td>Subhashree Dey</td>
                                        <td>B.Com</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td>Tanmayee Kapinjal</td>
                                        <td>B.Com Finance &amp; Accounts</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>11</td>
                                        <td>Sunny Sen</td>
                                        <td>B.Sc Biotechnology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>12</td>
                                        <td>Jumi Talukdar</td>
                                        <td>B.Sc Microbiology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>13</td>
                                        <td>Disha Agarwal</td>
                                        <td>B.Sc Zoology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>14</td>
                                        <td>Minara Pakiza Ullah</td>
                                        <td>B.Sc Zoology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>15</td>
                                        <td>Prachee Kalita</td>
                                        <td>B.A English</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>16</td>
                                        <td>Abdul Waqur Albir Rahman</td>
                                        <td>B.A History</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>17</td>
                                        <td>Sneha Singha</td>
                                        <td>B.A J&amp;MC</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>18</td>
                                        <td>Rudrani Garg</td>
                                        <td>B.A Political Science</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>19</td>
                                        <td>Tanisha Ganguly</td>
                                        <td>B.A Sociology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>20</td>
                                        <td>Aanchal Golchha</td>
                                        <td>BBA</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>21</td>
                                        <td>Peli. T. Yeptho</td>
                                        <td>BSW</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>22</td>
                                        <td>Priya Chakraborty</td>
                                        <td>M.Com</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>23</td>
                                        <td>Sureksha Bharali</td>
                                        <td>M.Sc Biotechnology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>24</td>
                                        <td>Ankita Mili</td>
                                        <td>M.Sc Botany</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>25</td>
                                        <td>Ruckshana Khatun</td>
                                        <td>M.Sc Chemistry</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>26</td>
                                        <td>Pratyakshi Sarma</td>
                                        <td>M.Sc Mathematics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>27</td>
                                        <td>Chayanika Kalita</td>
                                        <td>M.Sc Microbiology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>28</td>
                                        <td>Anish Uz Zaman</td>
                                        <td>M.Sc Physics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>29</td>
                                        <td>Priyanka Das</td>
                                        <td>M.Sc Zoology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>30</td>
                                        <td>Nihar Pratim Kashyap</td>
                                        <td>M.Tech Civil Engineering</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>31</td>
                                        <td>Sumit Deb</td>
                                        <td>M.A Geography</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>32</td>
                                        <td>Krishti Abhilasa Bhuyan</td>
                                        <td>M.A Clinical Psychology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>33</td>
                                        <td>Jupitora Talukdar</td>
                                        <td>M.A Economics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>34</td>
                                        <td>Rahul Thokchom</td>
                                        <td>M.A English</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>35</td>
                                        <td>Lova Ngathem</td>
                                        <td>M.A History</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>36</td>
                                        <td>Thampaleena Longjam</td>
                                        <td>M.A J&amp;MC</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>37</td>
                                        <td>Disha Choudhury</td>
                                        <td>M.A Political Science</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>38</td>
                                        <td>Ahellabash Oinam</td>
                                        <td>M.A Public Administration</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>39</td>
                                        <td>Priya Agarwala</td>
                                        <td>MBA</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>40</td>
                                        <td>Hazel Sawnani</td>
                                        <td>MCA</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>41</td>
                                        <td>Neimezhunuo Rutsa</td>
                                        <td>MSW</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Gold</td>
                                      </tr>
                                      <tr>
                                        <td>42</td>
                                        <td>Susmita Choudhury</td>
                                        <td>LLM</td>
                                        <td>PG</td>
                                        <td>2022</td>
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
                                <tbody class=" para1">
                                    <tr>
                                        <td>1</td>
                                        <td>Kessie K. Chophy</td>
                                        <td>BA LLB</td>
                                        <td>UG</td>
                                        <td>2018</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Devleena Hazarika</td>
                                        <td>B.Arch</td>
                                        <td>UG</td>
                                        <td>2018</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Imnatemsu</td>
                                        <td>B.Tech CE</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Anwayajyoti Dey</td>
                                        <td>B.Tech CSE</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>Akansha Singha</td>
                                        <td>BFA</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>Jaya Saha</td>
                                        <td>B.Pharmacy</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td>Ankita Roy</td>
                                        <td>B.Sc Nursing</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td>Imran Hossain</td>
                                        <td>D.Pharmacy</td>
                                        <td>2 YEAR</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>9</td>
                                        <td>Hoinunnem Doungel</td>
                                        <td>B.A Geography</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td>Jennifer Leimapokpam</td>
                                        <td>B.A Psychology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>11</td>
                                        <td>Deepanwita Endow Purkayastha</td>
                                        <td>B.Com</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>12</td>
                                        <td>Wanpynshngain B Diengdoh</td>
                                        <td>B.Com Finance &amp; Accounts</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>13</td>
                                        <td>Jeba Sania</td>
                                        <td>B.Sc Biotechnology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>14</td>
                                        <td>Rafiya Yasmin Saikia</td>
                                        <td>B.Sc Microbiology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>15</td>
                                        <td>Nabanya Priyam Bez</td>
                                        <td>B.Sc Zoology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>16</td>
                                        <td>Pratiksha Nath</td>
                                        <td>B.Sc Zoology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>17</td>
                                        <td>Meenakshi Dasgupta</td>
                                        <td>B.A English</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>18</td>
                                        <td>Alice Welly</td>
                                        <td>B.A History</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>19</td>
                                        <td>Priyanka Bhattacharya</td>
                                        <td>B.A J&amp;MC</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>20</td>
                                        <td>Trishna Das</td>
                                        <td>B.A Political Science</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>21</td>
                                        <td>Saiyantany Choudhury</td>
                                        <td>B.A Sociology</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>22</td>
                                        <td>Neha Bothra</td>
                                        <td>BBA</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>23</td>
                                        <td>Hritik Pathak</td>
                                        <td>BCA</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>24</td>
                                        <td>Anannya Das</td>
                                        <td>BSW</td>
                                        <td>UG</td>
                                        <td></td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>25</td>
                                        <td>Gun Dongkam Ch Sangma</td>
                                        <td>M.Com</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>26</td>
                                        <td>Khyatismita Choudhury</td>
                                        <td>M.Sc Biotechnology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>27</td>
                                        <td>Digbijoy Singha</td>
                                        <td>M.Sc Botany</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>28</td>
                                        <td>Rimjhim Dauka</td>
                                        <td>M.Sc Chemistry</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>29</td>
                                        <td>Himadree Choudhury</td>
                                        <td>M.Sc Mathematics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>30</td>
                                        <td>Akangkhya Hazarika</td>
                                        <td>M.Sc Microbiology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>31</td>
                                        <td>Risha Das</td>
                                        <td>M.Sc Physics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>32</td>
                                        <td>Arpana Rabha</td>
                                        <td>M.Sc Zoology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>33</td>
                                        <td>Matsungzukla Jamir</td>
                                        <td>M.Tech Civil Engineering</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>34</td>
                                        <td>Sonia Samjetsabam</td>
                                        <td>M.A Geography</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>35</td>
                                        <td>Dorje Yangzom</td>
                                        <td>M.A Clinical Psychology</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>36</td>
                                        <td>Darshita Das</td>
                                        <td>M.A Economics</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>37</td>
                                        <td>Esther Lalchhanhimi</td>
                                        <td>M.A English</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>38</td>
                                        <td>Yohenba Tekcham</td>
                                        <td>M.A History</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>39</td>
                                        <td>Dolly Takhellambam</td>
                                        <td>M.A J&amp;MC</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>40</td>
                                        <td>Chunglitong Jamir</td>
                                        <td>M.A Political Science</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>41</td>
                                        <td>Tayenjam Purnajit Singh</td>
                                        <td>M.A Public Administration</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>42</td>
                                        <td>Pooja Agarwala</td>
                                        <td>MBA</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>43</td>
                                        <td>Debraj Aditya</td>
                                        <td>MCA</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>44</td>
                                        <td>Riya Mishra</td>
                                        <td>MSW</td>
                                        <td>PG</td>
                                        <td>2021</td>
                                        <td>Silver</td>
                                      </tr>
                                      <tr>
                                        <td>45</td>
                                        <td>Ankita Talukdar</td>
                                        <td>LLM</td>
                                        <td>PG</td>
                                        <td>2022</td>
                                        <td>Silver</td>
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                </div>

                <h2 class="headd2 mt-4 pb-2" style="color: #000000;">Recipients of the Chancellor's Gold Medal</h2>
                <!-- Data Table 3 -->
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
                                    <td>Rudrani Garg</td>
                                    <td>B.A Political Science</td>
                                    <td>UG</td>
                                    <td>2020</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Disha Choudhury</td>
                                    <td>M.A Political Science</td>
                                    <td>PG</td>
                                    <td>2020</td>
                                  </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h2 class="headd2 mt-4 pb-2" style="color: #000000;">Achievers in the Co-curricular category</h2>
                <!-- Data Table 4 -->
                <div class="table-responsive mb-5">
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
                                        <td>Nilanjana Parashar</td>
                                        <td>BA LLB (HONS)</td>
                                        <td>UG</td>
                                        <td>2018</td>
                                        <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Bode Swuro</td>
                                        <td>BFA</td>
                                        <td>UG</td>
                                        <td>2019</td>
                                        <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Swati Choudhury</td>
                                        <td>B.SC ZOOLOGY</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Rudrani Garg</td>
                                        <td>B.A Political Science</td>
                                        <td>UG</td>
                                        <td>2020</td>
                                        <td>Basudeo Pansari Award for Excellence in Community Service</td>
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                </div>


            </div>
    <!--End Section-->

            </div>
@endsection

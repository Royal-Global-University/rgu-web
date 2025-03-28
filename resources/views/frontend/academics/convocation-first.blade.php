@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/first-convo/1.png" alt="">
        </div>

        <div class="container pt-4 pb-3">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-weight: 600; color: #FF9A1E;" class="mobile-headd1 kd-title-ani kd-split-text">
                        First Convocation </h1>

                    <h1 style="font-weight: 600; color: #27467A;" class="mobile-headd2 kd-title-ani kd-split-text">
                        The Assam Royal Global University</h1>
                    <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                    <p class="mobile-para1" style="color: #27467A;">
                        30th March, 2022, marked the First Convocation ceremony of The Assam Royal Global University that
                        awarded degrees and diplomas to 1723 students from graduate and post graduate courses across batches
                        from 2020, 2021, and 2022. This solemn ceremony that was aheld in the wake of the COVID-19 pandemic and
                        was graced by Prof. Yogesh Singh, Vice Chancellor, Delhi University as the Chief Guest, conferred three
                        very distinguished personalities of the country with honorary degrees:
                    </p>

                </div>

                <div class="col-lg-12">
                    <video class="rounded" width="100%" height="auto" autoplay muted playsinline
                        controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                        <source src="mobile-assets/first-convo/first-convo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="container" style="color: #264273;">
            <ul class="para1">
                <li>Doctor of Science (D.Sc.) Honoris Causa to Professor C.N.R. Rao, FRS</li>
                <li>Doctor of Letters (D.Litt.) Honoris Causa to Professor Nagen Saikia</li>
                <li>Doctor of Letters (D.Litt.) Honoris Causa to Sri Sajjan Bhajanka</li>
            </ul>
        </div>

        <img src="mobile-assets/first-convo/last.png" alt="">


        <div class="container">

            <h2 class="mobile-headd2 mt-5 pb-2" style="color: #000000;">Recipients of Gold Medals</h2>
            <!-- Data Table 1 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example" class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
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
                                <td>Syeda Tabasum Sirin</td>
                                <td>Diploma Interior Design</td>
                                <td>Diploma</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nibharani Pathak</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Punam Agarwalla</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Papuli Konwar</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Upasana Chowdhury</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Samima Yasmin</td>
                                <td>M.Tech CE</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pinaj Ahmeda</td>
                                <td>MA Economics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Nukshilemla Jamir</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Kechanguno Peseyie</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Swagata Das</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Rifa Deka</td>
                                <td>MA JMC</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Adrija Biswas</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Pranay Pratik Goswami</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Himakshi Kalita</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Debraj Chowdhury</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Kamal Das</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Susmita Paul</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Akan Choudhury</td>
                                <td>M.Tech Construction</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Bonnie Sarma</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Igo Lollen</td>
                                <td>M.Sc EVS</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Utpal Chandra Boro</td>
                                <td>M.Tech EE</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Deeksha Shrivastava</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Trishna Nahata</td>
                                <td>M.Sc Bioctechnology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Ashish Dutta</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Shamulailatpam Nivash Sharma</td>
                                <td>M.A History</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Anshumi Dutta</td>
                                <td>M.A Political Science</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Deify Bakordor Suting</td>
                                <td>M.A English</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Samayeeta Singha</td>
                                <td>M.A Geography</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Silky Sharma</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Jyotirmay Nath</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Jyoti Agrahari</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Bhabana Sarma</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Minhajul Nazarat</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Nilakshi Buragohain</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Medozonuo Ruth Kelio</td>
                                <td>M.Tech CE (WRDM)</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Dilip Kumar Borah</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Rizwana Ahmed</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Nicita Das</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Veno Rudupra</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Nayanika Saikia</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Urvi Mangal</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Shubhangi Agarwal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Violina Das</td>
                                <td>B.Sc Physics</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Bhavna Choudhary</td>
                                <td>Bsc Chemisry</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Chandan Ladha</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Shruti Barna Sharma</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Kristin Borgohain</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Plabon Boruah</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Atul Singh</td>
                                <td>B.Tech ECE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Smarasmika Baruah</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Chunglitong Jamir</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Krishnani Konwar</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Sreosi Sarkar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Dheemaan Garg</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>Sruti Agarwal</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>56</td>
                                <td>Babli Shil</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>57</td>
                                <td>Prachi Mour</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>58</td>
                                <td>Subham Sinha</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>59</td>
                                <td>Priyanka Das</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>60</td>
                                <td>Fiza Chowdhury</td>
                                <td>B.Sc TTM</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>61</td>
                                <td>Namrata Nandi</td>
                                <td>BA Economics</td>
                                <td>UG</td>
                                <td>2018</td>
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
                    <table id="example1" class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
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
                                <td>Monmi Hazarika</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Neha Lohia</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lima Chetia</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bhaskar Jyoti Borah</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lawmsangpuia</td>
                                <td>MA Economics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Katimongla Imchen</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Priyanka Sarmah</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Elizabeth Misao</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Himashri Kumar</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Nilakshi Moni Daimary</td>
                                <td>MA JMC</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Nilankar Mukherjee</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Pinki Kumari Singh</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Bishali Dutta</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Nita Saha</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Koushik Kumar Saha</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Sabnam Tehrina Ahmed</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Anu Pamyang</td>
                                <td>M.Tech Construction</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Niharika Handique</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Ratnapriya Choudhury</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Vasundhara Wangkhem</td>
                                <td>M.Sc Bioctechnology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Pallavi Neog</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Habiba Rashul Amin</td>
                                <td>M.A History</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Nistha Talukdar</td>
                                <td>M.A Political Science</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Bhanita Kalita</td>
                                <td>M.A English</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Hironmoyee Boro</td>
                                <td>M.A Geography</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Anuran Bordoloi</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Sokir Ahmed Usmani</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Divya Toppo</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Bhupoti Patgiri</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Sakera Khatun</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Dr Rathindra Bhuyan</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Archita Barua</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Nirdeshika Jain</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Annisha Mahanta</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Subhalaxmi Dutta Bora</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Tanvi Baid</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Mohini Mittal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Pritam Saikia</td>
                                <td>B.Sc Physics</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Princhi Ngathem</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Sushmita Talukdar</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Jyotishman Saikia</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Ridhika Agarwal</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Himangshu Gogoi</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Dristi Darsana Kashyap</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Firoza Kauser</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Rudrani Sharma</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Hazel Sawnani</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Pranita Saha</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Khyatismita Choudhury</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Hima Rabha</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Ronchakoh Tikhak</td>
                                <td>B.Sc TTM</td>
                                <td>UG</td>
                                <td>2018</td>
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
                    <table id="example2" class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
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
                                <td>Mebanshan Shadap</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Shibangi Rattna Baruah</td>
                                <td>BA (H) Psychology</td>
                                <td>UG</td>
                                <td>2020</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nukshilemla Jamir</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Basudeo Pansari Award for Excellence in Community Service</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Parishmita Baruah</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Namrata Nandi</td>
                                <td>BA Economics</td>
                                <td>UG</td>
                                <td>2021</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Syeda Zeriffa Naim</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2021</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">Recipients of the Chancellor's Gold Medal</h2>
            <!-- Data Table 4 -->
            <div class="table-responsive">
                <div class="col-xl-12 col-md-12">
                    <table id="example3" class="overflow-hidden table table-striped table-bordered text-wrap border-top mb-0">
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
                                <td>Upasana Chowdhury</td>
                                <td>M.Sc. Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rifa Deka</td>
                                <td>MA J &amp; Mc</td>
                                <td>PG</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Veno Rudupra</td>
                                <td>BA (H) Sociology</td>
                                <td>UG</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nilakshi Buragohain</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Namrata Nandi</td>
                                <td>BA (H) Economics</td>
                                <td>UG</td>
                                <td>2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="mobile-headd2 mt-4 pb-2" style="color: #000000;">The honorary degrees were conferred on the following
                distinguised personalities</h2>
            <!-- Data Table 5 -->
            <div class="table-responsive mb-5">
                <div class="col-xl-12 col-md-12">
                    <table class="table border table-responsive table-striped">
                        <tbody class="mobile-para1">
                            <tr>
                                <td>Professor C.N.R. Rao, FRS </td>
                                <td>D.Sc. Honoris Causa</td>
                                </td>
                            </tr>
                            <tr>
                                <td>Professor Nagen Saikia, eminent litterateur </td>
                                <td>D.Litt. Honoris Causa </td>
                                </td>
                            </tr>
                            <tr>
                                <td>Shri. Sajjan Bhajanka, an eminent industrialist, educator and social worker </td>
                                <td>D.Litt. Honoris Causa </td>
                                </td>
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

        <img src="mobile-assets/first-convo/web-banner.png" alt="">

        <div class="container pt-4 pb-4">
            <div class="row pt-4">

                <div class="col-lg-6">
                    <video class="rounded pt-5" width="100%" height="auto" autoplay muted
                        controlslist="nodownload nofullscreen noremoteplayback" disablepictureinpicture>
                        <source src="mobile-assets/first-convo/first-convo.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-6">

                    <h1 style="font-weight: 600; color: #FF9A1E;" class="headd1 kd-title-ani kd-split-text">
                        First Convocation </h1>

                    <h1 style="font-weight: 600; color: #27467A;" class="headd2 kd-title-ani kd-split-text">
                        The Assam Royal Global University</h1>
                    <div style="height: 10px; width: 150px; background-color: #FF9A1E; margin-bottom: 20px;"></div>
                    <p class="para1" style="color: #27467A;">
                        30th March, 2022, marked the First Convocation ceremony of The Assam Royal Global University that
                        awarded degrees and diplomas to 1723 students from graduate and post graduate courses across batches
                        from 2020, 2021, and 2022. This solemn ceremony that was aheld in the wake of the COVID-19 pandemic
                        and was graced by Prof. Yogesh Singh, Vice Chancellor, Delhi University as the Chief Guest,
                        conferred three very distinguished personalities of the country with honorary degrees:
                    </p>
                    <div class="container" style="color: #264273;">
                        <ul class="para1">
                            <li>Doctor of Science (D.Sc.) Honoris Causa to Professor C.N.R. Rao, FRS</li>
                            <li>Doctor of Letters (D.Litt.) Honoris Causa to Professor Nagen Saikia</li>
                            <li>Doctor of Letters (D.Litt.) Honoris Causa to Sri Sajjan Bhajanka</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>



        <img src="mobile-assets/first-convo/web-gallery.png" alt="">


        <!--Start Section-->

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
                                <td>Syeda Tabasum Sirin</td>
                                <td>Diploma Interior Design</td>
                                <td>Diploma</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nibharani Pathak</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Punam Agarwalla</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Papuli Konwar</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Upasana Chowdhury</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Samima Yasmin</td>
                                <td>M.Tech CE</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pinaj Ahmeda</td>
                                <td>MA Economics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Nukshilemla Jamir</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Kechanguno Peseyie</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Swagata Das</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Rifa Deka</td>
                                <td>MA JMC</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Adrija Biswas</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Pranay Pratik Goswami</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Himakshi Kalita</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Debraj Chowdhury</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Kamal Das</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Susmita Paul</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Akan Choudhury</td>
                                <td>M.Tech Construction</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Bonnie Sarma</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Igo Lollen</td>
                                <td>M.Sc EVS</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Utpal Chandra Boro</td>
                                <td>M.Tech EE</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Deeksha Shrivastava</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Trishna Nahata</td>
                                <td>M.Sc Bioctechnology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Ashish Dutta</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Shamulailatpam Nivash Sharma</td>
                                <td>M.A History</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Anshumi Dutta</td>
                                <td>M.A Political Science</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Deify Bakordor Suting</td>
                                <td>M.A English</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Samayeeta Singha</td>
                                <td>M.A Geography</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Silky Sharma</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Jyotirmay Nath</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Jyoti Agrahari</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Bhabana Sarma</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Minhajul Nazarat</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Nilakshi Buragohain</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Medozonuo Ruth Kelio</td>
                                <td>M.Tech CE (WRDM)</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Dilip Kumar Borah</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Rizwana Ahmed</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Nicita Das</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Veno Rudupra</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Nayanika Saikia</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Urvi Mangal</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Shubhangi Agarwal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Violina Das</td>
                                <td>B.Sc Physics</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Bhavna Choudhary</td>
                                <td>Bsc Chemisry</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Chandan Ladha</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Shruti Barna Sharma</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Kristin Borgohain</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Plabon Boruah</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Atul Singh</td>
                                <td>B.Tech ECE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Smarasmika Baruah</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Chunglitong Jamir</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Krishnani Konwar</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Sreosi Sarkar</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Dheemaan Garg</td>
                                <td>BA JMC</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>Sruti Agarwal</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>56</td>
                                <td>Babli Shil</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>57</td>
                                <td>Prachi Mour</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>58</td>
                                <td>Subham Sinha</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>59</td>
                                <td>Priyanka Das</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>60</td>
                                <td>Fiza Chowdhury</td>
                                <td>B.Sc TTM</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>61</td>
                                <td>Namrata Nandi</td>
                                <td>BA Economics</td>
                                <td>UG</td>
                                <td>2018</td>
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
                                <td>Monmi Hazarika</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Neha Lohia</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lima Chetia</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bhaskar Jyoti Borah</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lawmsangpuia</td>
                                <td>MA Economics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Katimongla Imchen</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Priyanka Sarmah</td>
                                <td>MA Pol.Sc</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Elizabeth Misao</td>
                                <td>MSW</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Himashri Kumar</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Nilakshi Moni Daimary</td>
                                <td>MA JMC</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Nilankar Mukherjee</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Pinki Kumari Singh</td>
                                <td>M.Sc Biotechnology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Bishali Dutta</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Nita Saha</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Koushik Kumar Saha</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Sabnam Tehrina Ahmed</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Anu Pamyang</td>
                                <td>M.Tech Construction</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Niharika Handique</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Ratnapriya Choudhury</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Vasundhara Wangkhem</td>
                                <td>M.Sc Bioctechnology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Pallavi Neog</td>
                                <td>M.Sc Microbiology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Habiba Rashul Amin</td>
                                <td>M.A History</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Nistha Talukdar</td>
                                <td>M.A Political Science</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Bhanita Kalita</td>
                                <td>M.A English</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Hironmoyee Boro</td>
                                <td>M.A Geography</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Anuran Bordoloi</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Sokir Ahmed Usmani</td>
                                <td>M.Sc Botany</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Divya Toppo</td>
                                <td>M.Sc Zoology</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Bhupoti Patgiri</td>
                                <td>M.Sc Chemistry</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Sakera Khatun</td>
                                <td>M.Sc Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Dr Rathindra Bhuyan</td>
                                <td>LLM</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Archita Barua</td>
                                <td>BA Applied Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Nirdeshika Jain</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Annisha Mahanta</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Subhalaxmi Dutta Bora</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Tanvi Baid</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Mohini Mittal</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Pritam Saikia</td>
                                <td>B.Sc Physics</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Princhi Ngathem</td>
                                <td>B.Tech CE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Sushmita Talukdar</td>
                                <td>B.Tech CSE</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Jyotishman Saikia</td>
                                <td>B.Tech ME</td>
                                <td>UG</td>
                                <td>2017</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Ridhika Agarwal</td>
                                <td>BA Psychology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Himangshu Gogoi</td>
                                <td>BA Political Science</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Dristi Darsana Kashyap</td>
                                <td>BA Sociology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Firoza Kauser</td>
                                <td>BA English</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Rudrani Sharma</td>
                                <td>BBA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Hazel Sawnani</td>
                                <td>BCA</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Pranita Saha</td>
                                <td>B.Com</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Khyatismita Choudhury</td>
                                <td>B.Sc Biotechnology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Hima Rabha</td>
                                <td>B.Sc Zoology</td>
                                <td>UG</td>
                                <td>2018</td>
                                <td>Silver</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Ronchakoh Tikhak</td>
                                <td>B.Sc TTM</td>
                                <td>UG</td>
                                <td>2018</td>
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
                                <td>Mebanshan Shadap</td>
                                <td>MBA</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Shibangi Rattna Baruah</td>
                                <td>BA (H) Psychology</td>
                                <td>UG</td>
                                <td>2020</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nukshilemla Jamir</td>
                                <td>MA History</td>
                                <td>PG</td>
                                <td>2020</td>
                                <td>Basudeo Pansari Award for Excellence in Community Service</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Parishmita Baruah</td>
                                <td>MA English</td>
                                <td>PG</td>
                                <td>2021</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Namrata Nandi</td>
                                <td>BA Economics</td>
                                <td>UG</td>
                                <td>2021</td>
                                <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Syeda Zeriffa Naim</td>
                                <td>BFA</td>
                                <td>UG</td>
                                <td>2021</td>
                                <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
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
                                <td>Upasana Chowdhury</td>
                                <td>M.Sc. Physics</td>
                                <td>PG</td>
                                <td>2019</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rifa Deka</td>
                                <td>MA J &amp; Mc</td>
                                <td>PG</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Veno Rudupra</td>
                                <td>BA (H) Sociology</td>
                                <td>UG</td>
                                <td>2020</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nilakshi Buragohain</td>
                                <td>M.Com</td>
                                <td>PG</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Namrata Nandi</td>
                                <td>BA (H) Economics</td>
                                <td>UG</td>
                                <td>2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="headd2 mt-4 pb-2" style="color: #000000;">The honorary degrees were conferred on the following
                distinguised personalities</h2>
            <!-- Data Table 5 -->
            <div class="table-responsive mb-5">
                <div class="col-xl-12 col-md-12">
                    <table class="table border table-responsive table-striped">
                        <tbody class="para1">
                            <tr>
                                <td>Professor C.N.R. Rao, FRS </td>
                                <td>D.Sc. Honoris Causa</td>
                                </td>
                            </tr>
                            <tr>
                                <td>Professor Nagen Saikia, eminent litterateur </td>
                                <td>D.Litt. Honoris Causa </td>
                                </td>
                            </tr>
                            <tr>
                                <td>Shri. Sajjan Bhajanka, an eminent industrialist, educator and social worker </td>
                                <td>D.Litt. Honoris Causa </td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--End Section-->
    </div>
@endsection

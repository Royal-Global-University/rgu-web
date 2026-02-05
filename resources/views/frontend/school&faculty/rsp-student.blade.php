@extends('frontend.master')
@section('content')
  <section style="background-color: #FFF8F0;">

        <div class="mobile">
            <h2 class="text-center pt-5 pb-2" style="color: #254274; font-size: 30px; font-weight: 700;">Student <span
                    style="color: #FF9A1E;"> List</span>
        </div>

        <div class="website">
            <h2 class="text-center pt-5 pb-2" style="color: #254274; font-size: 45px; font-weight: 700;">Student <span
                    style="color: #FF9A1E;"> List</span>
            </h2>
        </div>

        <div class="container-fluid">

            <!-- ================= YEAR PILLS ================= -->
            <div class="rgu-year-tabs-wrap">
                <div class="rgu-year-tabs">

                    <div class="rgu-year-pill active" data-year="2025">2025-2026</div>
                    <div class="rgu-year-pill" data-year="2024">2024-2025</div>

                </div>
            </div>

            <!-- =====================================================
             ⚠️ DO NOT TOUCH — YOUR TABLE CONTAINERS
        ===================================================== -->

            <div class="rgu-year-table active" id="year-2025">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;">Student Name</th>
                                <th style="background:#254274;color:#fff;">Student Code</th>
                                <th style="background:#254274;color:#fff;">Institution Name</th>
                                <th style="background:#254274;color:#fff;">School Name</th>
                                <th style="background:#254274;color:#fff;">Pci Code</th>
                                <th style="background:#254274;color:#fff;">Institution State</th>
                                <th style="background:#254274;color:#fff;">Application Status</th>
                                <th style="background:#254274;color:#fff;">Academic Year</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>JIAUR RAHMAN</td>
                                <td>BH-S-25-1167074</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Arif Mahmud Ansari</td>
                                <td>BH-S-25-1167047</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Vibek Rajak</td>
                                <td>BH-S-25-522379</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>HUSNE MEHQUE BARLASKAR</td>
                                <td>BH-S-25-1133804</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Twinkle Mandal</td>
                                <td>BH-S-25-566921</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tushar Roy</td>
                                <td>BH-S-25-522377</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Sourav Dey</td>
                                <td>BH-S-25-522351</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Saahil Bhattacharya</td>
                                <td>BH-S-24-230227</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Suman Dutta</td>
                                <td>BH-S-25-518405</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Roushonara Parvin</td>
                                <td>BH-S-25-554513</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>RAKHIDUL ISLAM AKAND</td>
                                <td>BH-S-25-1148004</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Jayankar Saha</td>
                                <td>BH-S-25-1152522</td>
                                <td>M.Pharm Pharmaceutics</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Ummey Aymon</td>
                                <td>BH-S-25-686621</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Juhair Al Habib</td>
                                <td>BH-S-25-1163392</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Susmita Reang</td>
                                <td>BH-S-25-518534</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Abdul Aziz</td>
                                <td>BH-S-25-1163398</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Zakariya</td>
                                <td>BH-S-25-1164967</td>
                                <td>M.Pharm Pharmaceutical Chemistry</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Shreya Sarkar</td>
                                <td>BH-S-25-1099407</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>SANJIB BORO</td>
                                <td>BH-S-25-1092018</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Aditya Boro Swargiary</td>
                                <td>BH-S-25-1092023</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>satyam roy</td>
                                <td>BH-S-25-1092723</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Ajay Kumar</td>
                                <td>BH-S-25-1093068</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Sayani Debnath</td>
                                <td>BH-S-25-1092766</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Pritam Barman</td>
                                <td>BH-S-25-1092035</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Shamim Ahmed</td>
                                <td>BH-S-25-1100503</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Kyrshanlang Lyngdoh Lyngdoh</td>
                                <td>BH-S-25-1100476</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Pritom Kalita</td>
                                <td>BH-S-25-1092025</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Anita Bhandari</td>
                                <td>BH-S-25-1100926</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Hannah Phyllut</td>
                                <td>BH-S-25-1101031</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Rani Adhikari</td>
                                <td>BH-S-25-1092042</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Rani Baishya</td>
                                <td>BH-S-25-1100233</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Rejowan Hussain</td>
                                <td>BH-S-25-1102406</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Vanhlupuii Ralte</td>
                                <td>BH-S-25-1101377</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Tokuka Wotsa</td>
                                <td>BH-S-25-1092780</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Dweep Sinha</td>
                                <td>BH-S-25-1092786</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Aayush Bhardwaj</td>
                                <td>BH-S-25-1092725</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Gourab Deka</td>
                                <td>BH-S-25-1092010</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Badarisha Bamon</td>
                                <td>BH-S-25-1100036</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Narjia Sultana</td>
                                <td>BH-S-25-1100158</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Dipjyoti Shil</td>
                                <td>BH-S-25-1092328</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Sahul Butt</td>
                                <td>BH-S-25-1092299</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Anish Roy</td>
                                <td>BH-S-25-1092322</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Rizwan Rasul Hoque</td>
                                <td>BH-S-25-1100063</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Yumnam Akash</td>
                                <td>BH-S-25-1092325</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Sobur Ali</td>
                                <td>BH-S-25-1092355</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Rejaul Karim</td>
                                <td>BH-S-25-1100099</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Latif Hussain</td>
                                <td>BH-S-25-1092700</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Farhin Jiya</td>
                                <td>BH-S-25-1100083</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Tahfique Ahm Ahmed</td>
                                <td>BH-S-25-1100070</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Jebika Yesmin</td>
                                <td>BH-S-25-1092405</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Rahul Amin Salash</td>
                                <td>BH-S-25-1092341</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Prashujya Sagra</td>
                                <td>BH-S-25-1092292</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Mominur Islam</td>
                                <td>BH-S-25-1092327</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Sheikh Ruhul Amin</td>
                                <td>BH-S-25-1092300</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Afjal Hussain</td>
                                <td>BH-S-25-1092376</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Lhingnunnem Kholhou</td>
                                <td>BH-S-25-1093857</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Hakibul Hoque</td>
                                <td>BH-S-25-1092329</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Prakash Basfore</td>
                                <td>BH-S-25-1092295</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Bilkis Begum</td>
                                <td>BH-S-25-1094808</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Purbita Majumder</td>
                                <td>BH-S-25-1092020</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Ningombam Chanu Namrata</td>
                                <td>BH-S-25-1092059</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>PUSPA YUMNAM</td>
                                <td>BH-S-25-1092038</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Bhaskar Deka</td>
                                <td>BH-S-25-1092027</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Pritam Sarkar</td>
                                <td>BH-S-25-1092032</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Danjita Kalita</td>
                                <td>BH-S-25-1092036</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Himani Debnath</td>
                                <td>BH-S-25-1092068</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Sarjima Mollah</td>
                                <td>BH-S-25-1092105</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Lakshya Pratim Bora</td>
                                <td>BH-S-25-1092031</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Priyadarshini Borah</td>
                                <td>BH-S-25-1092024</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Kharaijam Basundar Singh</td>
                                <td>BH-S-25-1092061</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Jayanta Saikia</td>
                                <td>BH-S-25-1092022</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Arif Ahmed</td>
                                <td>BH-S-25-1092009</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Shrutaswini Dutta</td>
                                <td>BH-S-25-1092004</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Laimayum Ishanta Singh</td>
                                <td>BH-S-25-1092017</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Shrayam Deka</td>
                                <td>BH-S-25-1092011</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Firdous Alam</td>
                                <td>BH-S-25-1092001</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Steffica Lyngkhoi</td>
                                <td>BH-S-25-1092037</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Rehan Akbar Ahmed</td>
                                <td>BH-S-25-1092773</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Ankita Borah</td>
                                <td>BH-S-25-1092714</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Amrita Gope</td>
                                <td>BH-S-25-1092703</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Dhirupjyoti Kalita</td>
                                <td>BH-S-25-1092818</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Md Jeshik Ahmed</td>
                                <td>BH-S-25-1092744</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Singrakha Reang</td>
                                <td>BH-S-25-1092704</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>ANKUR MAZUMDAR</td>
                                <td>BH-S-25-1092837</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Anik Dutta</td>
                                <td>BH-S-25-1092787</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Manas Pratim Barman</td>
                                <td>BH-S-25-1092783</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Moatila Chowdhary</td>
                                <td>BH-S-25-1092832</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Sidharth Das</td>
                                <td>BH-S-25-1092804</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Subhankar Sen</td>
                                <td>BH-S-25-1092940</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Tulsi Basumatary</td>
                                <td>BH-S-25-1092812</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Subhadeep Das</td>
                                <td>BH-S-25-1092712</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Bhaokhunggur Basumatary</td>
                                <td>BH-S-25-1092868</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Shraddha Das</td>
                                <td>BH-S-25-1092824</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Vanlalthatluangi C</td>
                                <td>BH-S-25-1092805</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>BIKI KALITA</td>
                                <td>BH-S-25-1092724</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Jubansan Thoo</td>
                                <td>BH-S-25-1092819</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Martin Das</td>
                                <td>BH-S-25-1092050</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Lalruatpuia Ralte</td>
                                <td>BH-S-25-1091994</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>121</td>
                                <td>Monuj Kumar Borah</td>
                                <td>BH-S-24-134650</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>122</td>
                                <td>Sunjarang Daimari Daimari</td>
                                <td>BH-S-24-136036</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>Nengneilam Khongsai</td>
                                <td>BH-S-24-134434</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>124</td>
                                <td>Mitrakhya Gogoi</td>
                                <td>BH-S-24-136033</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>125</td>
                                <td>Amaan Choudhury</td>
                                <td>BH-S-24-135137</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>126</td>
                                <td>Nikita Chhetri</td>
                                <td>BH-S-24-133631</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>127</td>
                                <td>Partha Pratim Kalita</td>
                                <td>BH-S-24-133692</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>128</td>
                                <td>Anup Kumar Minj</td>
                                <td>BH-S-24-133629</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>129</td>
                                <td>Naphibanbet Grace Shadap</td>
                                <td>BH-S-24-133633</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>130</td>
                                <td>Badashisha Mylliemngap Bada Mylliemngap</td>
                                <td>BH-S-24-133639</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>131</td>
                                <td>Sagar Dutta</td>
                                <td>BH-S-24-133588</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>132</td>
                                <td>Noitik Saha</td>
                                <td>BH-S-24-134644</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>133</td>
                                <td>Swagato Chakraborty</td>
                                <td>BH-S-24-133640</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>134</td>
                                <td>CHEANSA RANI CH MARAK</td>
                                <td>BH-S-24-133641</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>135</td>
                                <td>Sangomsumpham Rakibuddin</td>
                                <td>BH-S-24-134545</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>136</td>
                                <td>Hiranya Kr Brahma</td>
                                <td>BH-S-24-136777</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>
                            <tr>
                                <td>137</td>
                                <td>Enjamamul Hoque</td>
                                <td>BH-S-24-136932</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2025-2026</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2024">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;">Student Name</th>
                                <th style="background:#254274;color:#fff;">Student Code</th>
                                <th style="background:#254274;color:#fff;">Institution Name</th>
                                <th style="background:#254274;color:#fff;">School Name</th>
                                <th style="background:#254274;color:#fff;">Pci Code</th>
                                <th style="background:#254274;color:#fff;">Institution State</th>
                                <th style="background:#254274;color:#fff;">Application Status</th>
                                <th style="background:#254274;color:#fff;">Academic Year</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>JUBER UDDIN</td>
                                <td>BH-S-25-508761</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Jahangir Alom</td>
                                <td>BH-S-25-504311</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Imran O Hussain</td>
                                <td>BH-S-25-503438</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Sangaimei O Golmei</td>
                                <td>BH-S-25-513643</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Christina Ngaihte</td>
                                <td>BH-S-25-515052</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Roshan Kumar</td>
                                <td>BH-S-25-511662</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Hashanur Islam</td>
                                <td>BH-S-25-569074</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Andy Stephen Teron</td>
                                <td>BH-S-25-564650</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>BHASWATI BHARALI</td>
                                <td>BH-S-25-513290</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Suman Singha</td>
                                <td>BH-S-25-512841</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Samanta Braily Sunar</td>
                                <td>BH-S-25-505219</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Sika Shadap</td>
                                <td>BH-S-25-501851</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Pf Thone</td>
                                <td>BH-S-25-507045</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Habib Zaman Bulbul</td>
                                <td>BH-S-25-508483</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Pinki Deka</td>
                                <td>BH-S-25-511479</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Rinmichan Khayi</td>
                                <td>BH-S-25-501763</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Rinky Dey</td>
                                <td>BH-S-25-500700</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Shivam Deb</td>
                                <td>BH-S-25-516149</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Moumita Nath</td>
                                <td>BH-S-25-507044</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>PRANJIT RABHA</td>
                                <td>BH-S-25-507835</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Malemnganbi Devi Thiyam</td>
                                <td>BH-S-25-510014</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Hasibul Alom</td>
                                <td>BH-S-25-509215</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Zahir O Khan</td>
                                <td>BH-S-25-503650</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Chonreiphy CT</td>
                                <td>BH-S-25-511497</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Sunidhi Gupta</td>
                                <td>BH-S-25-500704</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Utjjal Sharma</td>
                                <td>BH-S-25-518109</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Suneha Sharma</td>
                                <td>BH-S-25-513741</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>Manashjyoti Bhattacharjya</td>
                                <td>BH-S-25-501198</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Swastika Nag</td>
                                <td>BH-S-25-505123</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Nisha Deka</td>
                                <td>BH-S-25-501788</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>SOMUDRA BHUSHAN KASHYAP</td>
                                <td>BH-S-25-512459</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Swagata Rajkumar</td>
                                <td>BH-S-25-540520</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Naranarayan Deka</td>
                                <td>BH-S-25-501146</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Sahib Azimul Haque Laskar</td>
                                <td>BH-S-25-502633</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Jasim O Ahmed</td>
                                <td>BH-S-25-511370</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Subhankar Das</td>
                                <td>BH-S-25-512982</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Chinmay O Nath</td>
                                <td>BH-S-25-511212</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Tangkamchi A Sangma</td>
                                <td>BH-S-25-513470</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Salma Aktar</td>
                                <td>BH-S-25-502638</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Mandipa Upadhaya</td>
                                <td>BH-S-25-512163</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Mebanphira Lyngdoh Mawnai</td>
                                <td>BH-S-25-545799</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Sharmistha Dasgupta</td>
                                <td>BH-S-25-510841</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Biman Lahkar</td>
                                <td>BH-S-25-512013</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Mezhuvino Neihu</td>
                                <td>BH-S-25-506321</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Poujaigailiu Pamei</td>
                                <td>BH-S-25-512665</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>Pritam Kashyap</td>
                                <td>BH-S-25-544161</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Dhritishmita Das</td>
                                <td>BH-S-25-506903</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Sahinur Islam</td>
                                <td>BH-S-25-501826</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Jerina Thounaojam</td>
                                <td>BH-S-25-824054</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Aniket Sarkar</td>
                                <td>BH-S-25-514120</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>D. Julu Brahma Choudhury</td>
                                <td>BH-S-25-516828</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Aditya Saha</td>
                                <td>BH-S-25-797899</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Mousomi Ahmed</td>
                                <td>BH-S-25-521889</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Ridamon Dkhar</td>
                                <td>BH-S-25-505379</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Ethungbeni O Kikon</td>
                                <td>BH-S-25-514691</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>MONISHA ROY CHOUDHURY</td>
                                <td>BH-S-25-508989</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Shibayon Deb</td>
                                <td>BH-S-25-501679</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Prabal Prachir Bayan</td>
                                <td>BH-S-25-519667</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Heetanshi Murarka</td>
                                <td>BH-S-25-509149</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Injamul Haque</td>
                                <td>BH-S-25-506460</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Khunwan Hangsik</td>
                                <td>BH-S-25-500869</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Nayan Basumatary</td>
                                <td>BH-S-25-504025</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>VIVIAN SINGH</td>
                                <td>BH-S-25-501111</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Khundrakpam Euniki</td>
                                <td>BH-S-25-509655</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Run Saikia</td>
                                <td>BH-S-25-503980</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Sazad Sohail</td>
                                <td>BH-S-24-133545</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Bibek O Newar</td>
                                <td>BH-S-25-509559</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Narengbam Jecia</td>
                                <td>BH-S-25-565871</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Deepjyoti Roy</td>
                                <td>BH-S-24-133344</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Bhuban Chetry</td>
                                <td>BH-S-25-516241</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Vibek Rajak</td>
                                <td>BH-S-25-522379</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Cheansa Rani Ch Marak</td>
                                <td>BH-S-25-521408</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Sarkim Rongphar</td>
                                <td>BH-S-24-133373</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Hoineichong Haokip</td>
                                <td>BH-S-25-553464</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Rakiful Islam Mondal</td>
                                <td>BH-S-25-500933</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Gianiswrang Chandra Brahma</td>
                                <td>BH-S-24-145986</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Ngachammi Jamang</td>
                                <td>BH-S-25-515049</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Pranab Jyoti Nath</td>
                                <td>BH-S-25-515092</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Subhankar Chakraborty</td>
                                <td>BH-S-25-500663</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Nur Tasijule</td>
                                <td>BH-S-24-134719</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Amirul Ali</td>
                                <td>BH-S-24-135118</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Sharnabh Bhowal</td>
                                <td>BH-S-25-514161</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Khondram Nandita Singha</td>
                                <td>BH-S-25-504045</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Manish Dey</td>
                                <td>BH-S-25-514307</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Tahmid Rasul</td>
                                <td>BH-S-25-515011</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Amiya Kalita</td>
                                <td>BH-S-25-506369</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>ERSHAD HASAN</td>
                                <td>BH-S-25-500960</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Jahidul Islam Pradhan</td>
                                <td>BH-S-25-500978</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Abdul O Aziz</td>
                                <td>BH-S-25-501026</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>JUHAIR AL HABIB</td>
                                <td>BH-S-25-501010</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Madhurjya Ranjan Dev</td>
                                <td>BH-S-25-501043</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Irfan O Hussain</td>
                                <td>BH-S-25-507893</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>MANASH JYOTI RAY</td>
                                <td>BH-S-25-512277</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Raj Khungur Baro</td>
                                <td>BH-S-25-503236</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Seema Giri</td>
                                <td>BH-S-25-504149</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Md Labeeb Hasan</td>
                                <td>BH-S-25-500693</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Nilotpal Goswami</td>
                                <td>BH-S-25-517063</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Dhiraj Nath</td>
                                <td>BH-S-25-514142</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Niam Singuang Kamei</td>
                                <td>BH-S-25-549700</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Kamirul Hussan</td>
                                <td>BH-S-25-512132</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Md Kariul Alom Chaudhury</td>
                                <td>BH-S-25-590112</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Nur Tasijule</td>
                                <td>BH-S-25-726167</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Wasim Raja</td>
                                <td>BH-S-24-135167</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Neeraj Paul</td>
                                <td>BH-S-24-133404</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Jitissha Bora</td>
                                <td>BH-S-25-521826</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>ANKIT O SAH</td>
                                <td>BH-S-24-134550</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>TAIOBUR RAHMAN</td>
                                <td>BH-S-24-134729</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>SOLEMAN MONDOL</td>
                                <td>BH-S-24-160421</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>MISS RIFAH ZUBAIDAH</td>
                                <td>BH-S-24-138763</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>Rukshana Parbin</td>
                                <td>BH-S-24-135022</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">111</td>
                                <td>ABDUR ROUF</td>
                                <td>BH-S-24-134727</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">112</td>
                                <td>Hashibur Rahman</td>
                                <td>BH-S-24-134697</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">113</td>
                                <td>ANIZUR RAHMAN</td>
                                <td>BH-S-24-134632</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">114</td>
                                <td>Gaurav Jyoti Pathak</td>
                                <td>BH-S-24-133544</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">115</td>
                                <td>SAHALOM HOQUE</td>
                                <td>BH-S-24-146519</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">116</td>
                                <td>Kshetrimayum Moris Singh</td>
                                <td>BH-S-24-133371</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">117</td>
                                <td>Hasibul Alom</td>
                                <td>BH-S-24-134964</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">118</td>
                                <td>Sommi Tikhak</td>
                                <td>BH-S-25-504103</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">119</td>
                                <td>Sanuara Parbin</td>
                                <td>BH-S-24-135091</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">120</td>
                                <td>ZERIFA WAHID</td>
                                <td>BH-S-24-139303</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">121</td>
                                <td>Sabina Yesmin</td>
                                <td>BH-S-24-135422</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">122</td>
                                <td>Rouf Rahmatul Ahmed</td>
                                <td>BH-S-24-135148</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">123</td>
                                <td>Sneha Baidya</td>
                                <td>BH-S-24-133416</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">124</td>
                                <td>Shakil Hussain</td>
                                <td>BH-S-24-133374</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">125</td>
                                <td>Michelle Amit</td>
                                <td>BH-S-25-504040</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">126</td>
                                <td>Sanyukta Moran</td>
                                <td>BH-S-24-133381</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">127</td>
                                <td>Tuny Owary</td>
                                <td>BH-S-24-133336</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">128</td>
                                <td>Sourab Singha</td>
                                <td>BH-S-25-515028</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">129</td>
                                <td>Shah Nawaz Akhtar</td>
                                <td>BH-S-24-133349</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">130</td>
                                <td>Amisha O Das</td>
                                <td>BH-S-25-514374</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">131</td>
                                <td>Aniket Dey</td>
                                <td>BH-S-24-133333</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">132</td>
                                <td>Shreya Saha</td>
                                <td>BH-S-24-133326</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">133</td>
                                <td>Milton Sarkar</td>
                                <td>BH-S-24-133368</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">134</td>
                                <td>Sagar . Dutta</td>
                                <td>BH-S-25-503956</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">135</td>
                                <td>Astom Shrawan Kumar Sharma</td>
                                <td>BH-S-24-133581</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">136</td>
                                <td>Majamil O Haque</td>
                                <td>BH-S-24-133359</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">137</td>
                                <td>Mintu Talukdar</td>
                                <td>BH-S-24-135130</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">138</td>
                                <td>Vanlal Hriat Puii</td>
                                <td>BH-S-25-550320</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">139</td>
                                <td>Imtisen imtisen</td>
                                <td>BH-S-24-133334</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">140</td>
                                <td>Jyotirmoy Deka</td>
                                <td>BH-S-24-135072</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">141</td>
                                <td>Rahul Hoque Choudhury</td>
                                <td>BH-S-24-137099</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">142</td>
                                <td>Jovialson Nongtnger</td>
                                <td>BH-S-25-514131</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">143</td>
                                <td>Ritik Roushan</td>
                                <td>BH-S-25-522196</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">144</td>
                                <td>Monirul Hoque</td>
                                <td>BH-S-25-540475</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">145</td>
                                <td>Lalnunsiami Chenkual</td>
                                <td>BH-S-25-514671</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">146</td>
                                <td>Badashisha Mylliemngap Bada Mylliemngap</td>
                                <td>BH-S-25-521980</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">147</td>
                                <td>Monjur Hasan</td>
                                <td>BH-S-24-160676</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">148</td>
                                <td>Afidur Rohman</td>
                                <td>BH-S-24-133351</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">149</td>
                                <td>Suhana Choudhury</td>
                                <td>BH-S-25-513984</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">150</td>
                                <td>GAZIBAR RAHMAN</td>
                                <td>BH-S-24-136902</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">151</td>
                                <td>Rejaun Ali</td>
                                <td>BH-S-24-145931</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">152</td>
                                <td>Bibha Rani Thakuria</td>
                                <td>BH-S-24-135060</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">153</td>
                                <td>R Lal rempuii</td>
                                <td>BH-S-24-133511</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">154</td>
                                <td>Chandan Chandra Sarkar</td>
                                <td>BH-S-25-513758</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">155</td>
                                <td>Kikruseno Lhousa</td>
                                <td>BH-S-25-518812</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">156</td>
                                <td>Kamyashree Sharma</td>
                                <td>BH-S-25-519944</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">157</td>
                                <td>Joseph kabir</td>
                                <td>BH-S-25-524088</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">158</td>
                                <td>Suleman Hoque</td>
                                <td>BH-S-25-524039</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">159</td>
                                <td>Azaharul Hoque</td>
                                <td>BH-S-25-528408</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">160</td>
                                <td>Kabyashree Sharma</td>
                                <td>BH-S-25-529476</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">161</td>
                                <td>Ruwa O Padit</td>
                                <td>BH-S-25-500744</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">162</td>
                                <td>Pritthiraj Deb Roy</td>
                                <td>BH-S-25-500708</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">163</td>
                                <td>Parashar Talukdar</td>
                                <td>BH-S-25-529949</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">164</td>
                                <td>Shagolsem Rabinath Singh</td>
                                <td>BH-S-25-549392</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">165</td>
                                <td>Kalpana Dam</td>
                                <td>BH-S-25-551350</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">166</td>
                                <td>BIJOY KUMAR ROY</td>
                                <td>BH-S-25-551617</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">167</td>
                                <td>Abhida Bharali</td>
                                <td>BH-S-25-502691</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">168</td>
                                <td>Disansha Phukan</td>
                                <td>BH-S-25-552662</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">169</td>
                                <td>AMIT KUMAR SINGH</td>
                                <td>BH-S-25-552944</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">170</td>
                                <td>Sonia Kaur</td>
                                <td>BH-S-25-553937</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">171</td>
                                <td>M Leiyangamba Singha</td>
                                <td>BH-S-25-552889</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">172</td>
                                <td>Bhaskar Jyoti Das</td>
                                <td>BH-S-25-557754</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">173</td>
                                <td>Livi G Yepthomi</td>
                                <td>BH-S-25-503151</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">174</td>
                                <td>FOZLUL HOQUE</td>
                                <td>BH-S-25-511754</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">175</td>
                                <td>Amlan Deep Kalita</td>
                                <td>BH-S-25-601699</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">176</td>
                                <td>Faijur Rahman</td>
                                <td>BH-S-25-503229</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">177</td>
                                <td>Hiranya Kr Brahma</td>
                                <td>BH-S-25-504166</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">178</td>
                                <td>Mal Sawm Sangi</td>
                                <td>BH-S-25-550333</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">179</td>
                                <td>Kshetrimayum Moris Singh</td>
                                <td>BH-S-25-511650</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">180</td>
                                <td>Khumanthem Shreemala Chanu</td>
                                <td>BH-S-25-514073</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">181</td>
                                <td>Jahangir Alom</td>
                                <td>BH-S-25-514170</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">182</td>
                                <td>Nikita Chhetri</td>
                                <td>BH-S-25-514220</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">183</td>
                                <td>Deepjyoti Roy</td>
                                <td>BH-S-25-514536</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">184</td>
                                <td>Raj Sahu</td>
                                <td>BH-S-25-514550</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">185</td>
                                <td>Shah Nawaz Akhtar</td>
                                <td>BH-S-25-515001</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">186</td>
                                <td>Nengneilam Khongsai</td>
                                <td>BH-S-25-515016</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">187</td>
                                <td>Lamneilhing Haokip</td>
                                <td>BH-S-25-524051</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">188</td>
                                <td>Sanyukta Moran</td>
                                <td>BH-S-25-547398</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">189</td>
                                <td>Majamil Haque</td>
                                <td>BH-S-25-549465</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">190</td>
                                <td>Biki Owary</td>
                                <td>BH-S-25-549486</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">191</td>
                                <td>Kalyan Borah</td>
                                <td>BH-S-25-515050</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">192</td>
                                <td>Anju Chanu Waikhom</td>
                                <td>BH-S-25-556711</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">193</td>
                                <td>Himanshu Borah</td>
                                <td>BH-S-25-514276</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">194</td>
                                <td>Gianiswrang Chandra Brahma</td>
                                <td>BH-S-25-561538</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">195</td>
                                <td>Bornil Goswami</td>
                                <td>BH-S-25-515078</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">196</td>
                                <td>Ibalasiewdor Nongspung</td>
                                <td>BH-S-25-522134</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">197</td>
                                <td>Naphibanbet Grace Shadap</td>
                                <td>BH-S-25-521735</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">198</td>
                                <td>Noitik Saha</td>
                                <td>BH-S-25-602600</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">199</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">200</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">201</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">202</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">203</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">204</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm(Practice)</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">205</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">206</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">207</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">208</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">209</td>
                                <td></td>
                                <td></td>
                                <td>M.Pharm Pharmacognosy</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">210</td>
                                <td></td>
                                <td></td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">211</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">212</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">213</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">214</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">215</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">216</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">217</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">218</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">219</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">220</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">221</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">222</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">223</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">224</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">225</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">226</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">227</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">228</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">229</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">230</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">231</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">232</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">233</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">234</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">235</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">236</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">237</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">238</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">239</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">240</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">241</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">242</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">243</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">244</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">245</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">246</td>
                                <td></td>
                                <td></td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">247</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">248</td>
                                <td></td>
                                <td></td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">251</td>
                                <td>Paristha Barman</td>
                                <td>BH-S-25-697180</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">252</td>
                                <td>Arnav Chakraborty</td>
                                <td>BH-S-25-697188</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">253</td>
                                <td>Aditya Rawniar</td>
                                <td>BH-S-25-563937</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">254</td>
                                <td>TANISHKA LYNGDOH</td>
                                <td>BH-S-24-133537</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">255</td>
                                <td>Alvaryne Dohtdong</td>
                                <td>BH-S-25-527344</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">256</td>
                                <td>Omar Faruk Siddique</td>
                                <td>BH-S-25-507509</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">257</td>
                                <td>Zakariya .</td>
                                <td>BH-S-25-590046</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">258</td>
                                <td>Rajotoo Kashyap</td>
                                <td>BH-S-25-600915</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">259</td>
                                <td>Prachi Deka</td>
                                <td>BH-S-25-601669</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">260</td>
                                <td>Sunaina Biswas</td>
                                <td>BH-S-25-502337</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">261</td>
                                <td>Guddi Kumari</td>
                                <td>BH-S-25-513638</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">262</td>
                                <td>Karan Pambah</td>
                                <td>BH-S-25-503944</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">263</td>
                                <td>Akhit Nayan Gogoi</td>
                                <td>BH-S-25-590159</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">264</td>
                                <td>AKSHAY KUMAR AMAR</td>
                                <td>BH-S-25-514050</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">265</td>
                                <td>Huirem Linda Devi</td>
                                <td>BH-S-24-137018</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">266</td>
                                <td>Susmita Reang</td>
                                <td>BH-S-25-518534</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">267</td>
                                <td>AMINUR PRODHANI</td>
                                <td>BH-S-25-512758</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">268</td>
                                <td>Twinkle Mandal</td>
                                <td>BH-S-25-566921</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">269</td>
                                <td>Enjamamul Hoque</td>
                                <td>BH-S-24-146048</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">270</td>
                                <td>Ching Nei Niang</td>
                                <td>BH-S-24-134626</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">271</td>
                                <td>Deepjyoti Kalita</td>
                                <td>BH-S-25-501979</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">272</td>
                                <td>Mohit Goswami</td>
                                <td>BH-S-24-133365</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">273</td>
                                <td>Anubhav Bora</td>
                                <td>BH-S-24-133338</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">274</td>
                                <td>Salma Aktar</td>
                                <td>BH-S-24-134396</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">275</td>
                                <td>Preety Laikhuram</td>
                                <td>BH-S-24-137087</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">276</td>
                                <td>Nemdeikim Sitlhou</td>
                                <td>BH-S-24-135062</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">277</td>
                                <td>Debasish O Pachani</td>
                                <td>BH-S-24-135155</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">278</td>
                                <td>Angela Tinneitheng Haokip</td>
                                <td>BH-S-24-135067</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">279</td>
                                <td>INJAMUL HOQUE</td>
                                <td>BH-S-24-135152</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">280</td>
                                <td>Krishna Pranam Sarma</td>
                                <td>BH-S-24-134567</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">281</td>
                                <td>Ankit Kumar Singh</td>
                                <td>BH-S-24-135147</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">282</td>
                                <td>MONISHA MAWA</td>
                                <td>BH-S-24-134501</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">283</td>
                                <td>Jyotishmay Deka</td>
                                <td>BH-S-24-133798</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">284</td>
                                <td>MELODY NGAIHOICHING KOM</td>
                                <td>BH-S-24-134600</td>
                                <td>D.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">285</td>
                                <td>Andy Stephen Teron</td>
                                <td>BH-S-24-149360</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">286</td>
                                <td>Rohit pandit</td>
                                <td>BH-S-24-133325</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">287</td>
                                <td>Bhargab Narayan Choudhury</td>
                                <td>BH-S-24-146162</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">288</td>
                                <td>Diksha Rabha</td>
                                <td>BH-S-24-146316</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">289</td>
                                <td>Ngachammi Jamang</td>
                                <td>BH-S-24-146367</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">290</td>
                                <td>Jitissha Bora</td>
                                <td>BH-S-24-146476</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">291</td>
                                <td>Aditya Saha</td>
                                <td>BH-S-24-145890</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">292</td>
                                <td>Biki Owary Owary</td>
                                <td>BH-S-24-145906</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">293</td>
                                <td>Nayan Basumatary</td>
                                <td>BH-S-24-145908</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">294</td>
                                <td>Sanak Dutta</td>
                                <td>BH-S-24-133327</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">295</td>
                                <td>Chandan Chandra Sarkar</td>
                                <td>BH-S-24-133329</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">296</td>
                                <td>Bibhu Ranjan Mazumdar</td>
                                <td>BH-S-24-133330</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">297</td>
                                <td>Anju Chanu Waikhom</td>
                                <td>BH-S-24-133331</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">298</td>
                                <td>Khumanthem Shreemala Chanu</td>
                                <td>BH-S-24-133332</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">299</td>
                                <td>Sourab Singha</td>
                                <td>BH-S-24-133337</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">300</td>
                                <td>Raj Sahu</td>
                                <td>BH-S-24-133339</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">301</td>
                                <td>Faijur Rahman</td>
                                <td>BH-S-24-133341</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">302</td>
                                <td>Sommi Tikhak</td>
                                <td>BH-S-24-133342</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">303</td>
                                <td>Vanlal Hriat Puii</td>
                                <td>BH-S-24-133343</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">304</td>
                                <td>Mal Sawm Sangi</td>
                                <td>BH-S-24-133345</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">305</td>
                                <td>Suhana Choudhury</td>
                                <td>BH-S-24-133348</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">306</td>
                                <td>Dafina Siangshai</td>
                                <td>BH-S-24-133346</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">307</td>
                                <td>Tahmid Rasul</td>
                                <td>BH-S-24-133356</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">308</td>
                                <td>Mousomi Ahmed</td>
                                <td>BH-S-24-133352</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">309</td>
                                <td>Khondram Nandita Singha</td>
                                <td>BH-S-24-133340</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">310</td>
                                <td>Ritik Roushan</td>
                                <td>BH-S-24-133353</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">311</td>
                                <td>Monirul Hoque</td>
                                <td>BH-S-24-133357</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">312</td>
                                <td>Run Saikia</td>
                                <td>BH-S-24-133360</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">313</td>
                                <td>Nabam Juma</td>
                                <td>BH-S-24-133358</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">314</td>
                                <td>Pranab Jyoti Nath</td>
                                <td>BH-S-24-133354</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">315</td>
                                <td>Swagata Rajkumar</td>
                                <td>BH-S-24-133362</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">316</td>
                                <td>Mishra Sankar Siddhania</td>
                                <td>BH-S-24-133363</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">317</td>
                                <td>Supriyo Paul</td>
                                <td>BH-S-24-133366</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">318</td>
                                <td>Manish Dey</td>
                                <td>BH-S-24-133367</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">319</td>
                                <td>Lamneilhing Haokip</td>
                                <td>BH-S-24-133369</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">320</td>
                                <td>JERINA THOKNAOJAM</td>
                                <td>BH-S-24-133375</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">321</td>
                                <td>Ethungbeni O Kikon</td>
                                <td>BH-S-24-133378</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">322</td>
                                <td>Udayaditya Kalita</td>
                                <td>BH-S-24-133406</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">323</td>
                                <td>Souradeep Deb</td>
                                <td>BH-S-24-133379</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">324</td>
                                <td>Lalnunsiami Chenkual</td>
                                <td>BH-S-24-133380</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">325</td>
                                <td>Kamal Jit Das</td>
                                <td>BH-S-24-133382</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">326</td>
                                <td>Mrigesh V Pathak</td>
                                <td>BH-S-24-133407</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">327</td>
                                <td>Sharnabh Bhowal</td>
                                <td>BH-S-24-133413</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">328</td>
                                <td>Michelle Amit</td>
                                <td>BH-S-24-133417</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">329</td>
                                <td>Mezhuvino Neihu</td>
                                <td>BH-S-24-133418</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">330</td>
                                <td>Arif Akhtar</td>
                                <td>BH-S-24-133441</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">331</td>
                                <td>Liyana Laskar</td>
                                <td>BH-S-24-133503</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">332</td>
                                <td>Mebanphira Lyngdoh Mawnai</td>
                                <td>BH-S-24-133520</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">333</td>
                                <td>Kalyan Borah</td>
                                <td>BH-S-24-133526</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">334</td>
                                <td>Jovialson Nongtnger</td>
                                <td>BH-S-24-133534</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">335</td>
                                <td>Bornil Goswami</td>
                                <td>BH-S-24-133538</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">336</td>
                                <td>Amisha Das</td>
                                <td>BH-S-24-133532</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">337</td>
                                <td>Ibalasiewdor Nongspung</td>
                                <td>BH-S-24-133541</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">338</td>
                                <td>Christina Remsiempui Ngaihte</td>
                                <td>BH-S-24-133556</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">339</td>
                                <td>Jahangir Alom</td>
                                <td>BH-S-24-133571</td>
                                <td>B.Pharm</td>
                                <td>Royal School Of Pharmacy</td>
                                <td>PCI-2704</td>
                                <td>ASSAM</td>
                                <td>Approved</td>
                                <td>2024-2025</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- ================= JS ================= -->
        <script>
            (function () {

                const pills = document.querySelectorAll(".rgu-year-pill");
                const tables = document.querySelectorAll(".rgu-year-table");

                pills.forEach(pill => {
                    pill.addEventListener("click", function () {

                        pills.forEach(p => p.classList.remove("active"));
                        tables.forEach(t => t.classList.remove("active"));

                        this.classList.add("active");

                        const year = this.getAttribute("data-year");
                        document.getElementById("year-" + year).classList.add("active");
                    });
                });

            })();
        </script>

    </section>
@endsection

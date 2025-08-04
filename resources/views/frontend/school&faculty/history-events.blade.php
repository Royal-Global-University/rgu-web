@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 80px; position: relative;">
            <h2 class="headd1 text-center fw-bold pt-5 pb-3" style="color: #27467A;">
                Events
            </h2>

            <div class="container">
                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="font-weight-bold text-white">Date of Visit</th>
                                <th class="font-weight-bold text-white">Name</th>
                                <th class="font-weight-bold text-white">Designation</th>
                                <th class="font-weight-bold text-white">Purpose of the visit</th>
                            </tr>
                        </thead>

                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>17th February, 2020</td>
                                <td>Kuldeep Patowary</td>
                                <td>
                                    Assistant Professor, Department of History, Gauhati University
                                </td>
                                <td>
                                    Webinar on the topic ‘Jo Jeeta Wohi Sikandar: War and the
                                    Shaping of History’.
                                </td>
                            </tr>
                            <tr>
                                <td>11th June, 2020</td>
                                <td>Prof. Amarendra Kumar Thakur</td>
                                <td>Professor, Department of History, NEHU Shillong</td>
                                <td>Webinar on the topic ‘Intellectuals in Exile’.</td>
                            </tr>
                            <tr>
                                <td>2nd July, 2020</td>
                                <td>Dr. Saswati Choudhury</td>
                                <td>
                                    Associate Professor, OKD, Institute of Social Change and
                                    Development
                                </td>
                                <td>
                                    Webinar on the topic of ‘Healthcare in Assam: Looking from a
                                    Gendered Perspective’
                                </td>
                            </tr>
                            <tr>
                                <td>27th November, 2020</td>
                                <td>Dr. Sikha Das</td>
                                <td>Assistant Professor, Department of Sociology, MSSV Nagaon</td>
                                <td>
                                    Webinar on the topic ‘Gender, Power and Conflict of Identities:
                                    A Witch-Hunting’
                                </td>
                            </tr>
                            <tr>
                                <td>4th June, 2021</td>
                                <td>Dr. Suryasikha Pathak</td>
                                <td>Associate professor, Assam University (Diphu Campus)</td>
                                <td>
                                    Webinar on the topic ‘Visual Sources for Missionary History’.
                                </td>
                            </tr>
                            <tr>
                                <td>12th June, 2023</td>
                                <td>Prof. Rajib Handique</td>
                                <td>HoD, History Department, Gauhati University</td>
                                <td>Webinar on the topic ‘Pandemics in History’.</td>
                            </tr>
                            <tr>
                                <td>26th July, 2021</td>
                                <td>Dr. Radha Das</td>
                                <td>Assistant Professor of History, Department of History</td>
                                <td>
                                    Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                                    Agarwala’.
                                </td>
                            </tr>
                            <tr>
                                <td>26th July, 2021</td>
                                <td>Pabitra Margherita</td>
                                <td>
                                    Chairmen, Jyoti Chitraban, eminent film and TV personality
                                </td>
                                <td>
                                    Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                                    Agarwala’.
                                </td>
                            </tr>
                            <tr>
                                <td>20th September, 2021</td>
                                <td>Mr. Swapnanil Barua</td>
                                <td>Retired IAS</td>
                                <td>
                                    Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                                    Figure and the Artist’.
                                </td>
                            </tr>
                            <tr>
                                <td>20th September, 2021</td>
                                <td>Dr. Moushumi Kandali</td>
                                <td>Writer and Academician</td>
                                <td>
                                    Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                                    Figure and the Artist’.
                                </td>
                            </tr>
                            <tr>
                                <td>10th February, 2023</td>
                                <td>Venerable Tenzin Legtsok</td>
                                <td>Monk, Sera Jaya Monastic University, Karnataka</td>
                                <td>Invited talk</td>
                            </tr>
                            <tr>
                                <td>1st March, 2023</td>
                                <td>Stephen Bognar</td>
                                <td>
                                    Director, Sustainability Asia fro Wildlife Works Carbon (WWC).
                                </td>
                                <td>
                                    "Invited Talk “Why Whales Worry? Finding a new direction with
                                    real depth”"
                                </td>
                            </tr>
                            <tr>
                                <td>30th March, 2023</td>
                                <td>Snigdha Hasnu</td>
                                <td>Curator in charge, Assam State Museum</td>
                                <td>
                                    Invited talk on ‘Study of Assam History Through the Collections
                                    of the Assam State Museum’.
                                </td>
                            </tr>
                            <tr>
                                <td>27th April, 2022</td>
                                <td>Dr. Loya Sinha</td>
                                <td>Chairperson, S.K. Bhuyan Memorial Trust</td>
                                <td>MoU Signing</td>
                            </tr>
                            <tr>
                                <td>27th April,2022</td>
                                <td>Yazing Shimray Wunglengton</td>
                                <td>
                                    Former Director of Museums, Assam, Directorate of Cultural
                                    Affairs Department
                                </td>
                                <td>MoU Signing</td>
                            </tr>
                            <tr>
                                <td>24th April 2023</td>
                                <td>Prof. Prasenjit Biswas</td>
                                <td>Professor, Department of Philosophy, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>25th April, 2023</td>
                                <td>Prof. Sarah Hilaly</td>
                                <td>Professor, Rajiv Gandhi University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>25th April, 2023</td>
                                <td>Sonali Ghosh</td>
                                <td>Chief Conservator of Forests, Assam</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>26th April 2023</td>
                                <td>Bonojit Hussain</td>
                                <td>Former Assistant Professor, SNU, Entrepreneur</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>26th April 2023</td>
                                <td>Prof. Amarendra K. Thakur</td>
                                <td>Professor, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>27th April, 2023</td>
                                <td>Prof. Rajib Handique</td>
                                <td>Professor, Gauhati University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>28th April 2023</td>
                                <td>Dr. Binayak Dutta</td>
                                <td>Associate Professor, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>28th April, 2023</td>
                                <td>Prof. Arabinda Samanta</td>
                                <td>Professorn (Retd.) Burdwan University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>1st May, 2023</td>
                                <td>Prof. Imdad Hussain</td>
                                <td>Professor, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>2nd May, 2023</td>
                                <td>Dr Shahana Bhattacharya</td>
                                <td>Associate Professor, Kirori Mal College, Delhi University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>3rd May, 2023</td>
                                <td>Dr. Manjil Hazarika</td>
                                <td>Assistant Professor, Cotton University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>3rd May, 2023</td>
                                <td>Prof. Chandan Kumar Sharma</td>
                                <td>Professor, Tezpur University</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>4th May, 2023</td>
                                <td>Prof. Monorama Sharma</td>
                                <td>Professor, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>4th May, 2023</td>
                                <td>Prof. Apurba Baruah</td>
                                <td>Professor, NEHU</td>
                                <td>FDP Resource Person</td>
                            </tr>
                            <tr>
                                <td>17th March, 2024</td>
                                <td>Shri SK Bose</td>
                                <td>Numismatist</td>
                                <td>
                                    Invited lecture on ‘Numismatic Heritage of Assam and its
                                    Emerging Trend in Study.’
                                </td>
                            </tr>
                            <tr>
                                <td>20th May, 2024</td>
                                <td>Ms. Vandana Manchanda</td>
                                <td>
                                    Director, Architectural Heritage Division and Head of Heritage
                                    Crafts and Community Division, INTACH (Indian National Trust for
                                    Art and Cultural Heritage)
                                </td>
                                <td>
                                    Invited lecture on the topic ‘Craft Revival and its
                                    socio-economic impact on Communities’.
                                </td>
                            </tr>
                            <tr>
                                <td>27th May, 2024</td>
                                <td>Dr.Nachiket Chanchani</td>
                                <td>"Associate Professor in History of the Art Department"</td>
                                <td>
                                    Invited talk on the topic ‘Decoding India's Temples and the
                                    Challenges of Reconstructing Them’.
                                </td>
                            </tr>
                            <tr>
                                <td>15th July, 2024</td>
                                <td>Dr. Sangeeta Gogoi</td>
                                <td>
                                    Director In-Charge, Directorate of Historical and Antiquarian
                                    Studies, Assam
                                </td>
                                <td>MoU Signing</td>
                            </tr>
                            <tr>
                                <td>20th Spetember, 2024</td>
                                <td>Dr. Sanjeev Chopra</td>
                                <td>
                                    Former Director, Lal Bahadur Shastri National Academy of
                                    Administration, Author and Historian
                                </td>
                                <td>
                                    "Invited Lecture: “We the people of the states of Bharat”"
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <h2 class="headd1 text-center fw-bold pt-5" style="color: #27467A;">
            Events
        </h2>

        <div class="container">
            <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                    <thead class="text-white" style="background-color: #27467a">
                        <tr>
                            <th class="font-weight-bold text-white">Date of Visit</th>
                            <th class="font-weight-bold text-white">Name</th>
                            <th class="font-weight-bold text-white">Designation</th>
                            <th class="font-weight-bold text-white">Purpose of the visit</th>
                        </tr>
                    </thead>

                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                        <tr>
                            <td>17th February, 2020</td>
                            <td>Kuldeep Patowary</td>
                            <td>
                                Assistant Professor, Department of History, Gauhati University
                            </td>
                            <td>
                                Webinar on the topic ‘Jo Jeeta Wohi Sikandar: War and the
                                Shaping of History’.
                            </td>
                        </tr>
                        <tr>
                            <td>11th June, 2020</td>
                            <td>Prof. Amarendra Kumar Thakur</td>
                            <td>Professor, Department of History, NEHU Shillong</td>
                            <td>Webinar on the topic ‘Intellectuals in Exile’.</td>
                        </tr>
                        <tr>
                            <td>2nd July, 2020</td>
                            <td>Dr. Saswati Choudhury</td>
                            <td>
                                Associate Professor, OKD, Institute of Social Change and
                                Development
                            </td>
                            <td>
                                Webinar on the topic of ‘Healthcare in Assam: Looking from a
                                Gendered Perspective’
                            </td>
                        </tr>
                        <tr>
                            <td>27th November, 2020</td>
                            <td>Dr. Sikha Das</td>
                            <td>Assistant Professor, Department of Sociology, MSSV Nagaon</td>
                            <td>
                                Webinar on the topic ‘Gender, Power and Conflict of Identities:
                                A Witch-Hunting’
                            </td>
                        </tr>
                        <tr>
                            <td>4th June, 2021</td>
                            <td>Dr. Suryasikha Pathak</td>
                            <td>Associate professor, Assam University (Diphu Campus)</td>
                            <td>
                                Webinar on the topic ‘Visual Sources for Missionary History’.
                            </td>
                        </tr>
                        <tr>
                            <td>12th June, 2023</td>
                            <td>Prof. Rajib Handique</td>
                            <td>HoD, History Department, Gauhati University</td>
                            <td>Webinar on the topic ‘Pandemics in History’.</td>
                        </tr>
                        <tr>
                            <td>26th July, 2021</td>
                            <td>Dr. Radha Das</td>
                            <td>Assistant Professor of History, Department of History</td>
                            <td>
                                Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                                Agarwala’.
                            </td>
                        </tr>
                        <tr>
                            <td>26th July, 2021</td>
                            <td>Pabitra Margherita</td>
                            <td>
                                Chairmen, Jyoti Chitraban, eminent film and TV personality
                            </td>
                            <td>
                                Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                                Agarwala’.
                            </td>
                        </tr>
                        <tr>
                            <td>20th September, 2021</td>
                            <td>Mr. Swapnanil Barua</td>
                            <td>Retired IAS</td>
                            <td>
                                Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                                Figure and the Artist’.
                            </td>
                        </tr>
                        <tr>
                            <td>20th September, 2021</td>
                            <td>Dr. Moushumi Kandali</td>
                            <td>Writer and Academician</td>
                            <td>
                                Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                                Figure and the Artist’.
                            </td>
                        </tr>
                        <tr>
                            <td>10th February, 2023</td>
                            <td>Venerable Tenzin Legtsok</td>
                            <td>Monk, Sera Jaya Monastic University, Karnataka</td>
                            <td>Invited talk</td>
                        </tr>
                        <tr>
                            <td>1st March, 2023</td>
                            <td>Stephen Bognar</td>
                            <td>
                                Director, Sustainability Asia fro Wildlife Works Carbon (WWC).
                            </td>
                            <td>
                                "Invited Talk “Why Whales Worry? Finding a new direction with
                                real depth”"
                            </td>
                        </tr>
                        <tr>
                            <td>30th March, 2023</td>
                            <td>Snigdha Hasnu</td>
                            <td>Curator in charge, Assam State Museum</td>
                            <td>
                                Invited talk on ‘Study of Assam History Through the Collections
                                of the Assam State Museum’.
                            </td>
                        </tr>
                        <tr>
                            <td>27th April, 2022</td>
                            <td>Dr. Loya Sinha</td>
                            <td>Chairperson, S.K. Bhuyan Memorial Trust</td>
                            <td>MoU Signing</td>
                        </tr>
                        <tr>
                            <td>27th April,2022</td>
                            <td>Yazing Shimray Wunglengton</td>
                            <td>
                                Former Director of Museums, Assam, Directorate of Cultural
                                Affairs Department
                            </td>
                            <td>MoU Signing</td>
                        </tr>
                        <tr>
                            <td>24th April 2023</td>
                            <td>Prof. Prasenjit Biswas</td>
                            <td>Professor, Department of Philosophy, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>25th April, 2023</td>
                            <td>Prof. Sarah Hilaly</td>
                            <td>Professor, Rajiv Gandhi University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>25th April, 2023</td>
                            <td>Sonali Ghosh</td>
                            <td>Chief Conservator of Forests, Assam</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>26th April 2023</td>
                            <td>Bonojit Hussain</td>
                            <td>Former Assistant Professor, SNU, Entrepreneur</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>26th April 2023</td>
                            <td>Prof. Amarendra K. Thakur</td>
                            <td>Professor, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>27th April, 2023</td>
                            <td>Prof. Rajib Handique</td>
                            <td>Professor, Gauhati University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>28th April 2023</td>
                            <td>Dr. Binayak Dutta</td>
                            <td>Associate Professor, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>28th April, 2023</td>
                            <td>Prof. Arabinda Samanta</td>
                            <td>Professorn (Retd.) Burdwan University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>1st May, 2023</td>
                            <td>Prof. Imdad Hussain</td>
                            <td>Professor, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>2nd May, 2023</td>
                            <td>Dr Shahana Bhattacharya</td>
                            <td>Associate Professor, Kirori Mal College, Delhi University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>3rd May, 2023</td>
                            <td>Dr. Manjil Hazarika</td>
                            <td>Assistant Professor, Cotton University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>3rd May, 2023</td>
                            <td>Prof. Chandan Kumar Sharma</td>
                            <td>Professor, Tezpur University</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>4th May, 2023</td>
                            <td>Prof. Monorama Sharma</td>
                            <td>Professor, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>4th May, 2023</td>
                            <td>Prof. Apurba Baruah</td>
                            <td>Professor, NEHU</td>
                            <td>FDP Resource Person</td>
                        </tr>
                        <tr>
                            <td>17th March, 2024</td>
                            <td>Shri SK Bose</td>
                            <td>Numismatist</td>
                            <td>
                                Invited lecture on ‘Numismatic Heritage of Assam and its
                                Emerging Trend in Study.’
                            </td>
                        </tr>
                        <tr>
                            <td>20th May, 2024</td>
                            <td>Ms. Vandana Manchanda</td>
                            <td>
                                Director, Architectural Heritage Division and Head of Heritage
                                Crafts and Community Division, INTACH (Indian National Trust for
                                Art and Cultural Heritage)
                            </td>
                            <td>
                                Invited lecture on the topic ‘Craft Revival and its
                                socio-economic impact on Communities’.
                            </td>
                        </tr>
                        <tr>
                            <td>27th May, 2024</td>
                            <td>Dr.Nachiket Chanchani</td>
                            <td>"Associate Professor in History of the Art Department"</td>
                            <td>
                                Invited talk on the topic ‘Decoding India's Temples and the
                                Challenges of Reconstructing Them’.
                            </td>
                        </tr>
                        <tr>
                            <td>15th July, 2024</td>
                            <td>Dr. Sangeeta Gogoi</td>
                            <td>
                                Director In-Charge, Directorate of Historical and Antiquarian
                                Studies, Assam
                            </td>
                            <td>MoU Signing</td>
                        </tr>
                        <tr>
                            <td>20th Spetember, 2024</td>
                            <td>Dr. Sanjeev Chopra</td>
                            <td>
                                Former Director, Lal Bahadur Shastri National Academy of
                                Administration, Author and Historian
                            </td>
                            <td>
                                "Invited Lecture: “We the people of the states of Bharat”"
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

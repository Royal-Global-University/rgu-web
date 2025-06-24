@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="background-color: #fff; height: 40vh; padding-top: 90px;">



                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="text-center">
                                <img style="margin-top: 70px; width: 380px; border: 1px solid #27467A;"
                                    src="mobile-assets/updated-faculty-img/Dr-Mukta-Agrawal.png"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-3"></div>

                    </div>
                </div>

            </div>

            <div style="background-color: #27467A; padding-top: 190px; padding-bottom: 50px;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 pt-4 pb-4">

                            <h2 class="headd1 fw-bold pt-4" style="color: #FF9A1E; font-weight: 700; font-size: 35px;">
                                Dr. Mukta Agarwal
                            </h2>

                            <h2 class="headd3 mb-5 pt-3 fw-bold half-underline" style="color: #fff; font-weight: 700;">
                                Assistant Professor, The Assam Royal Global University
                            </h2>

                            <!-- <h2 class="para1 mb-5 half-underline" style="color: #fff; font-style: italic; font-size: 20px;">
                  Member of Advisory Board, The Assam Royal Global University
                </h2> -->

                            <div>
                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Qualifications
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">Ph.D. (Pharmaceutics), Chhattisgarh Swami Vivekanand
                                            Technical
                                            University, Bhilai</span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">M. Pharm (Pharmaceutics), Pt. Ravishankar Shukla
                                            University,
                                            Raipur</span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">B. Pharmacy, Rungta College of Pharmaceutical Sciences
                                            and Research,
                                            CSVTU, Bhilai</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Total Experience
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">10 years and 7 months</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Administrative Experience
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">3 Years as Journal Editorial Position at Heliyon, Cell
                                            Press, Elsevier
                                            (Associate Editor: 2022–2024, Section Editor: 2024–Present)</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research Interests
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Nanoparticles</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Stimuli-responsive drug
                                        carriers</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Brain
                                        targeting</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Alzheimer’s
                                        therapy</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Nose-to-brain drug
                                        delivery</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Tumor
                                        targeting</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Publications
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>National
                                        Journals: 23</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>International Journals: 41
                                        (Scopus-indexed; Impact Factor: 252; Citations: 3976)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Book
                                        Chapters Published:
                                        11</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Projects
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Collaborations with BITs
                                        Pilani, Rajasthan University, NIPER Guwahati, Jamia Hamdard, Patras University
                                        (Greece), Texas
                                        University Brownville (USA), NIH (USA), etc.</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Principal
                                        Investigator,
                                        SEED Grant (SVKM’s NMIMS): Lipid-based nanocarrier for curcumin and piperine
                                        (₹1,91,718)</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Awards & Achievements
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Top 2%
                                        Scientist in the
                                        World (2022, 2023, 2024) – Stanford University & Elsevier</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Oral
                                        Presentation –
                                        Pharmacon 2023, NIPER Hyderabad</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>First Prize
                                        – DRPI 2021
                                        (Central Zone); ₹10,000</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>First Prize
                                        – DRPI 2020
                                        (East-Central Zone); ₹10,000</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Young
                                        Scientist Award –
                                        ₹21,000 (2016), Chhattisgarh Young Scientists Congress</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Oral
                                        Presentation –
                                        CGCOST National Seminar (2018)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Poster
                                        Presentation –
                                        Spirit’s 2012, Dept. of Pharmaceutics, IT-BHU</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Multiple
                                        Research
                                        Incentive Awards (2022–2024)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Certificates
                                        of
                                        Appreciation – NMIMS & Rungta College (2015, 2016, 2017, 2022, 2023)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Section
                                        Editor – Heliyon,
                                        Pharmaceutical Sciences (Elsevier, Cell Press)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Former
                                        Associate Editor –
                                        Heliyon (2022–2024)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Featured
                                        Expert in
                                        Alzheimer’s Research – Expertscape & AD Scientific Index</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div style="background-color: #fff; height: 35vh; overflow: visible;">



                <div class="row">
                    <div class="col-lg-5 text-center">

                        <div class="text-center">
                            <img style="margin-top: 100px; width: 480px; border: 1px solid #27467A; margin-left: 45px;"
                                src="mobile-assets/updated-faculty-img/Dr-Mukta-Agrawal.png"
                                alt="">
                        </div>

                    </div>

                    <div class="col-lg-7 pt-5">

                        <h2 class="headd1 fw-bold pt-5 mb-3" style="color: #FF9A1E; font-weight: 700; font-size: 45px;">
                            Dr. Mukta Agarwal
                        </h2>

                        <h2 class="headd3 mb-5 fw-bold half-underline"
                            style="color: #27467A; font-weight: 700; font-size: 26px;">
                            Assistant Professor, The Assam Royal Global University
                        </h2>

                        <!-- <h2 class="headd3 mb-5 half-underline" style="color: #555; font-style: italic; font-size: 25px;">
                  Member of Advisory Board, The Assam Royal Global University
                </h2> -->

                    </div>
                </div>
            </div>

            <div style="background-color: #27467A;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7 pt-4 pb-4">


                            <div>
                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Qualifications
                                </h2>

                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">Ph.D. (Pharmaceutics), Chhattisgarh Swami Vivekanand
                                            Technical
                                            University, Bhilai</span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">M. Pharm (Pharmaceutics), Pt. Ravishankar Shukla
                                            University,
                                            Raipur</span>
                                    </li>
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">B. Pharmacy, Rungta College of Pharmaceutical Sciences
                                            and Research,
                                            CSVTU, Bhilai</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Total Experience
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">10 years and 7 months</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Administrative Experience
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li
                                        style="display: flex; align-items: flex-start; line-height: 1.8; margin-bottom: 8px;">
                                        <i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px; margin-top: 12px; flex-shrink: 0;"></i>
                                        <span style="display: block;">3 Years as Journal Editorial Position at Heliyon, Cell
                                            Press, Elsevier
                                            (Associate Editor: 2022–2024, Section Editor: 2024–Present)</span>
                                    </li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Research Interests
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Nanoparticles</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Stimuli-responsive drug
                                        carriers</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Brain
                                        targeting</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Alzheimer’s
                                        therapy</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Nose-to-brain drug
                                        delivery</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Tumor
                                        targeting</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Publications
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>National
                                        Journals: 23</li>
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>International Journals: 41
                                        (Scopus-indexed; Impact Factor: 252; Citations: 3976)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Book
                                        Chapters Published:
                                        11</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Projects
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle"
                                            style="font-size: 8px; margin-right: 10px;"></i>Collaborations with BITs
                                        Pilani, Rajasthan University, NIPER Guwahati, Jamia Hamdard, Patras University
                                        (Greece), Texas
                                        University Brownville (USA), NIH (USA), etc.</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Principal
                                        Investigator,
                                        SEED Grant (SVKM’s NMIMS): Lipid-based nanocarrier for curcumin and piperine
                                        (₹1,91,718)</li>
                                </ul>

                                <h2 class="headd3 mb-3 fw-bold mt-4"
                                    style="color: #FF9A1E; font-weight: 700; font-style: italic;">
                                    Awards & Achievements
                                </h2>
                                <ul style="list-style: none; padding-left: 0; color: #fff;" class="para1">
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Top 2%
                                        Scientist in the
                                        World (2022, 2023, 2024) – Stanford University & Elsevier</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Oral
                                        Presentation –
                                        Pharmacon 2023, NIPER Hyderabad</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>First Prize
                                        – DRPI 2021
                                        (Central Zone); ₹10,000</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>First Prize
                                        – DRPI 2020
                                        (East-Central Zone); ₹10,000</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Young
                                        Scientist Award –
                                        ₹21,000 (2016), Chhattisgarh Young Scientists Congress</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Oral
                                        Presentation –
                                        CGCOST National Seminar (2018)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Best Poster
                                        Presentation –
                                        Spirit’s 2012, Dept. of Pharmaceutics, IT-BHU</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Multiple
                                        Research
                                        Incentive Awards (2022–2024)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Certificates
                                        of
                                        Appreciation – NMIMS & Rungta College (2015, 2016, 2017, 2022, 2023)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Section
                                        Editor – Heliyon,
                                        Pharmaceutical Sciences (Elsevier, Cell Press)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Former
                                        Associate Editor –
                                        Heliyon (2022–2024)</li>
                                    <li><i class="fa fa-circle" style="font-size: 8px; margin-right: 10px;"></i>Featured
                                        Expert in
                                        Alzheimer’s Research – Expertscape & AD Scientific Index</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection

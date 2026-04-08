@extends('frontend.master')
@section('content')
    <section>

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <section style="padding-top: 110px;">
            </section>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
        </div>

        <style>
            /* ===============================
        ROOT VARIABLES
        ================================= */
            :root {
                --nccx-green: #2f4f2f;
                --nccx-dark: #0d1b12;
                --nccx-accent: #ff9933;
                --nccx-white: #ffffff;
                --nccx-glass: rgba(255, 255, 255, 0.08);
            }

            /* ===============================
        RESET
        ================================= */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Times New Roman', serif;
                color: var(--nccx-white);
                background:
                    linear-gradient(rgba(13, 27, 18, 0.92), rgba(13, 27, 18, 0.96)),
                    url('/mobile-assets/new-ncc-page-no-gallery/body-bg1.png');
                background-size: cover;
                background-attachment: fixed;
                overflow-x: hidden;
            }

            /* ===============================
        HERO SECTION
        ================================= */
            .nccx-hero {
                position: relative;
                height: 75vh;
                background: url('/mobile-assets/new-ncc-page-no-gallery/hero-img.jpeg') center center / cover no-repeat;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .nccx-hero-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(rgba(13, 27, 18, 0.5), rgba(13, 27, 18, 0.85));
            }

            .nccx-hero::after {
                content: "";
                position: absolute;
                inset: 0;
                background: url('pattern.png');
                opacity: 0.06;
            }

            .nccx-hero-content {
                position: relative;
                text-align: center;
                z-index: 2;
            }

            .nccx-hero-content h1 {
                font-size: 3.2rem;
                letter-spacing: 3px;
                animation: nccxFadeUp 0.8s ease;
            }

            .nccx-hero-content p {
                margin-top: 10px;
                color: var(--nccx-accent);
                letter-spacing: 2px;
            }

            /* ===============================
        SECTIONS
        ================================= */
            .nccx-section {
                padding: 50px 8%;
            }

            /* ===============================
        GLASS CARD
        ================================= */
            .nccx-glass {
                background: var(--nccx-glass);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 12px;
                padding: 22px;
            }

            /* ===============================
        TITLES
        ================================= */
            .nccx-title {
                font-size: 1.8rem;
                margin-bottom: 15px;
                position: relative;
            }

            .nccx-title::after {
                content: "";
                width: 60px;
                height: 3px;
                background: var(--nccx-accent);
                position: absolute;
                bottom: -6px;
                left: 0;
            }

            /* ===============================
        TEXT
        ================================= */
            .nccx-text {
                font-size: 14px;
                line-height: 1.7;
                color: #e6e6e6;
            }

            /* ===============================
        GRID SYSTEM
        ================================= */
            .nccx-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 18px;
            }

            /* ===============================
        CARDS
        ================================= */
            .nccx-card {
                padding: 15px;
                border-left: 3px solid var(--nccx-accent);
                transition: 0.3s ease;
            }

            .nccx-card:hover {
                background: rgba(255, 255, 255, 0.05);
                transform: translateY(-4px);
            }

            /* ===============================
        LIST
        ================================= */
            .nccx-list {
                padding-left: 18px;
            }

            .nccx-list li {
                margin-bottom: 8px;
                font-size: 14px;
            }

            /* ===============================
        SPLIT LAYOUT
        ================================= */
            .nccx-split {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            /* ===============================
        MARQUEE GALLERY (NEW)
        ================================= */
            .nccx-marquee {
                overflow: hidden;
                position: relative;
            }

            .nccx-marquee-track {
                display: flex;
                width: max-content;
                animation: nccxScroll 180s linear infinite;
            }

            .nccx-marquee img {
                width: 560px;
                height: 380px;
                object-fit: cover;
                margin-right: 12px;
                border-radius: 8px;
                flex-shrink: 0;
            }

            /* Pause on hover */
            .nccx-marquee:hover .nccx-marquee-track {
                animation-play-state: paused;
            }

            /* ===============================
        FOOTER
        ================================= */
            .nccx-footer {
                text-align: center;
                padding: 20px;
                background: rgba(0, 0, 0, 0.5);
                font-size: 14px;
            }

            /* ===============================
        ANIMATIONS
        ================================= */
            @keyframes nccxFadeUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes nccxScroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            /* ===============================
        RESPONSIVE
        ================================= */
            @media(max-width:768px) {

                .nccx-hero {
                    height: 60vh;
                    background-position: center top;
                }

                .nccx-hero-content h1 {
                    font-size: 2.2rem;
                }

                .nccx-split {
                    grid-template-columns: 1fr;
                }

                .nccx-section {
                    padding: 35px 6%;
                }

                .nccx-marquee img {
                    width: 200px;
                    height: 140px;
                }
            }

            /* ===============================
        ACHIEVEMENTS TABLE
        ================================= */

            .nccx-table-wrap {
                overflow-x: auto;
                margin-top: 15px;
            }

            .nccx-table {
                width: 100%;
                border-collapse: collapse;
                min-width: 600px;
                font-size: 14px;
            }

            .nccx-table thead {
                background: rgba(255, 255, 255, 0.08);
            }

            .nccx-table th,
            .nccx-table td {
                padding: 12px 10px;
                text-align: left;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nccx-table th {
                color: var(--nccx-accent);
                font-weight: 600;
                letter-spacing: 1px;
            }

            .nccx-table tbody tr:hover {
                background: rgba(255, 255, 255, 0.05);
            }

            /* MOBILE STACK TABLE */
            @media(max-width:768px) {

                .nccx-table {
                    min-width: 100%;
                }

                .nccx-table thead {
                    display: none;
                }

                .nccx-table tr {
                    display: block;
                    margin-bottom: 12px;
                    background: rgba(255, 255, 255, 0.05);
                    border-radius: 8px;
                    padding: 10px;
                }

                .nccx-table td {
                    display: block;
                    padding: 6px 0;
                    border: none;
                    font-size: 13px;
                }

                .nccx-table td::before {
                    content: attr(data-label);
                    display: block;
                    font-weight: bold;
                    color: var(--nccx-accent);
                    margin-bottom: 2px;
                }
            }

            /* ===============================
        TABS
        ================================= */

            .nccx-tabs {
                display: flex;
                gap: 10px;
                margin: 20px 0;
                flex-wrap: wrap;
            }

            .nccx-tab-btn {
                padding: 8px 18px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                background: transparent;
                color: #fff;
                cursor: pointer;
                border-radius: 30px;
                font-size: 13px;
                transition: 0.3s;
            }

            .nccx-tab-btn:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .nccx-tab-btn.active {
                background: var(--nccx-accent);
                color: #000;
                border-color: var(--nccx-accent);
            }

            .nccx-tab-content {
                display: none;
                animation: fadeTab 0.4s ease;
            }

            .nccx-tab-content.active {
                display: block;
            }

            @keyframes fadeTab {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        <!-- HERO -->
        <section class="nccx-hero">
            <div class="nccx-hero-overlay"></div>

            <div class="nccx-hero-content">
                <h1>National Cadet Corps</h1>
                <p>The Assam Royal Global University</p>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="nccx-section">
            <div class="nccx-glass">
                <h2 class="nccx-title">About NCC</h2>
                <p class="nccx-text">
                    The National Cadet Corps (NCC) of Independent India was formally inaugurated on 15 July 1948.
                    NCC is the largest uniformed youth organization in the world and holds immense potential in
                    nation building. Through its structured and innovative training curriculum, NCC provides
                    opportunities for all-round development while inculcating leadership, self-reliance,
                    camaraderie, and care for fellow citizens.
                    <br><br>
                    The Corps represents “Unity in Diversity” and upholds the spirit of a secular and united India
                    with its motto <strong>“Unity and Discipline.”</strong>
                </p>
            </div>
        </section>

        <!-- VISION + MISSION -->
        <section class="nccx-section">
            <div class="nccx-split">

                <div class="nccx-glass">
                    <h3 class="nccx-title">Vision</h3>
                    <p class="nccx-text">
                        To develop disciplined, responsible, and patriotic youth at Royal Global University, committed to
                        the service
                        of the nation through leadership, character-building, and selfless contribution to society.
                    </p>
                </div>

                <div class="nccx-glass">
                    <h3 class="nccx-title">Mission</h3>
                    <ul class="nccx-list">
                        <li>To instil a sense of duty, discipline, and moral values among students through structured
                            training and
                            community engagement.</li>
                        <li>To groom cadets into future leaders in all walks of life by enhancing their leadership,
                            teamwork, and
                            decision-making skills.</li>
                        <li>To foster a spirit of national integration, unity, and social responsibility through active
                            participation
                            in camps, drills, and nation-building activities.</li>
                        <li>To encourage physical fitness, mental resilience, and readiness to serve the nation during
                            emergencies and
                            in defence services.</li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- AIMS -->
        <section class="nccx-section">
            <h2 class="nccx-title">Aims of NCC</h2>
            <div class="nccx-grid">
                <div class="nccx-glass nccx-card">
                    To develop the following qualities in the cadets:- character, courage, comradeship, discipline,
                    leadership,
                    secular outlook, spirit of adventure and sportsmanship and the ideals of selfless service amongst the
                    youth of
                    the country to make them useful citizens.
                </div>
                <div class="nccx-glass nccx-card">
                    To create a human resource of organized, trained and motivated youth to provide leadership in all walks
                    of life
                    and always be available for the service of the nation
                </div>
                <div class="nccx-glass nccx-card">
                    To provide a suitable environment to motivate the youth to take up a career in the Armed Forces
                </div>
            </div>
        </section>

        <!-- TRAINING -->
        <section class="nccx-section">
            <h2 class="nccx-title">NCC Training</h2>

            <div class="nccx-glass" style="margin-bottom:20px;">
                <p class="nccx-text">
                    NCC training develops nationalism, discipline, leadership, team spirit, and self-confidence.
                    It ensures equal opportunities for all cadets regardless of background and promotes holistic
                    personality development.
                </p>
            </div>

            <div class="nccx-grid">
                <div class="nccx-glass nccx-card">Institutional Training</div>
                <div class="nccx-glass nccx-card">Camp Training</div>
                <div class="nccx-glass nccx-card">Attachment Training (IMA, OTA, Military Hospitals)</div>
                <div class="nccx-glass nccx-card">Social Service & Community Development</div>
                <div class="nccx-glass nccx-card">Adventure & Sports Training</div>
                <div class="nccx-glass nccx-card">Personality Development & SSB Coaching</div>
                <div class="nccx-glass nccx-card">Youth Exchange Programme</div>
            </div>
        </section>


        <!-- ACHIEVEMENTS WITH TABS -->
        <section class="nccx-section">
            <div class="nccx-glass">

                <h2 class="nccx-title">Achievements</h2>

                <!-- TAB BUTTONS -->
                <div class="nccx-tabs">
                    <button class="nccx-tab-btn active" data-tab="faculty">Faculty Achievements</button>
                    <button class="nccx-tab-btn" data-tab="student">Student Achievements</button>
                </div>

                <!-- TAB CONTENT 1 -->
                <div class="nccx-tab-content active" id="faculty">
                    <div class="nccx-table-wrap">
                        <table class="nccx-table">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Achievement</th>
                                    <th>Year</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td data-label="Sl. No.">1</td>
                                    <td data-label="Achievement">Inter Coy Drill Competition</td>
                                    <td data-label="Year">02-12-2025</td>
                                    <td data-label="Details">
                                        Lt. Dr. KM Sudha represented NCC RGU at NCC OTA, Gwalior and secured the award for
                                        Best Drill Company.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">2</td>
                                    <td data-label="Achievement">Firing Competition</td>
                                    <td data-label="Year">19-12-2025</td>
                                    <td data-label="Details">
                                        Lt. Dr. KM Sudha participated in the Firing Competition at NCC OTA, Gwalior and
                                        achieved Best Firing
                                        award.
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- TAB CONTENT 2 -->
                <div class="nccx-tab-content" id="student">
                    <div class="nccx-table-wrap">
                        <table class="nccx-table">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Achievement</th>
                                    <th>Year</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td data-label="Sl. No.">1</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Gungun Deka received Sports Awards at 30 Assam Bn NCC, CATC-35 for securing 1st
                                        position in Tug of War
                                        and 2nd position in Volleyball.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">2</td>
                                    <td data-label="Achievement">Best Cadet (Senior Wing) & Sports</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Ryka Gogoi was awarded Best SW Cadet and also secured 1st position in Tug of War and
                                        2nd position in
                                        Volleyball at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">3</td>
                                    <td data-label="Achievement">Cultural Award</td>
                                    <td data-label="Year">01-05-2025</td>
                                    <td data-label="Details">
                                        Deepjyoti Talukdar received the Cultural Award at 48 Assam Naval NCC, CATC-35 for
                                        securing 1st
                                        position in Cultural Singing.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">4</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Harsh Jain secured 1st position in Tug of War and 2nd position in Volleyball at 30
                                        Assam Bn NCC,
                                        CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">5</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        MC Lalthlenkima secured 1st position in Tug of War and 2nd position in Volleyball at
                                        30 Assam Bn NCC,
                                        CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">6</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Ayush Raj secured 1st position in Tug of War and 2nd position in Volleyball at 30
                                        Assam Bn NCC,
                                        CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">7</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Minal Ahmed secured 1st position in Tug of War and 2nd position in Volleyball at 30
                                        Assam Bn NCC,
                                        CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">8</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Kunaldip Hazarika secured 1st position in Tug of War and 2nd position in Volleyball
                                        at 30 Assam Bn
                                        NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">9</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Aditya Urang secured 1st position in Tug of War at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">10</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Thrune Elapra secured 1st position in Tug of War and 2nd position in Volleyball at
                                        30 Assam Bn NCC,
                                        CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">11</td>
                                    <td data-label="Achievement">Best Cadet (Senior Division) & Sports</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Bicky Chetri was awarded Best SD Cadet and also secured 1st position in Tug of War
                                        and 2nd position in
                                        Volleyball at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">12</td>
                                    <td data-label="Achievement">Sports & Cultural</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        GVK Lakshmi Likhita secured 1st position in Tug of War, 2nd position in Volleyball,
                                        and participated
                                        in Cultural Dance at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">13</td>
                                    <td data-label="Achievement">Sports & Cultural</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Digbijaya Sil secured 1st position in Tug of War, 2nd position in Volleyball, and
                                        participated in
                                        Cultural Dance at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">14</td>
                                    <td data-label="Achievement">Sports Award & Best Cadet</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Agnes Newmai secured 1st position in Volleyball and was awarded Best SW Cadet at 30
                                        Assam Bn NCC,
                                        CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">15</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Rajkkumari Isabellee secured 1st position in Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">16</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Nima Choten secured 2nd position in Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">17</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Bhaamini Kakati secured 3rd position in Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">18</td>
                                    <td data-label="Achievement">Defence Secretary Commendation</td>
                                    <td data-label="Year">22-12-2025</td>
                                    <td data-label="Details">
                                        Aditya Singh received the Defence Secretary Commendation & Card 2025 from the
                                        Ministry of Defence,
                                        Government of India.
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

        <!-- ELIGIBILITY -->
        <section class="nccx-section">
            <div class="nccx-glass">
                <h2 class="nccx-title">Eligibility for Enrollment</h2>
                <ul class="nccx-list">
                    <li>They must be a citizen of India or a subject of Nepal provided that the Central Government may, in
                        any
                        suitable case, relax the provision of this clause.</li>
                    <li>Should bear good character.</li>
                    <li>Must be a bonafide student of the institution/University.</li>
                    <li>Be physically and mentally fit as per standards laid down by the Ministry of Defence.</li>
                    <li>Should not have been convicted of an offence involving moral turpitude.</li>
                    <li>Age for enrolment in Senior Division is required to be under the age of 24 years (earlier it was 26
                        years).
                    </li>
                    <li>Should not have been dismissed from the National Cadets Corps or the Indian Armed Forces.</li>
                </ul>
            </div>
        </section>

        <!-- OATH + PLEDGE -->
        <section class="nccx-section">
            <div class="nccx-glass">

                <h3 class="nccx-title">NCC Oath</h3>
                <p class="nccx-text">
                    I do hereby solemnly promise that I will serve my motherland most truly and loyally and that
                    I will abide by the rules and regulations of the National Cadet Corps. Further under the
                    command of my commanding officer I will participate in every camp most sincerely and wholeheartedly.
                </p>

                <h3 class="nccx-title" style="margin-top:20px;">NCC Pledge</h3>
                <p class="nccx-text">
                    We, the cadets of the National Cadet Corps, do solemnly pledge that we shall always uphold
                    the unity of India. We resolve to be disciplined and responsible citizens of our nation.
                    We shall undertake positive community service in the spirit of selflessness and concern
                    for our fellow beings.
                </p>

            </div>
        </section>

        <!-- NCC GALLERY -->
        <section class="nccx-section">
            <h2 class="nccx-title">Gallery</h2>

            <div class="nccx-marquee">
                <div class="nccx-marquee-track">

                    <img src="mobile-assets/new-ncc-page/gallery/1.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/2.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/3.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/4.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/5.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/6.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/7.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/8.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/9.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/10.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/11.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/12.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/13.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/14.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/15.jpg">
                    <img src="mobile-assets/new-ncc-page/gallery/16.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/17.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/18.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/19.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/20.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/21.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/22.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/23.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/24.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/25.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/26.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/27.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/28.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/29.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/30.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/31.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/32.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/33.jpg">
                    <img src="mobile-assets/new-ncc-page/gallery/34.jpeg">



                    <img src="mobile-assets/new-ncc-page/gallery/1.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/2.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/3.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/4.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/5.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/6.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/7.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/8.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/9.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/10.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/11.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/12.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/13.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/14.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/15.jpg">
                    <img src="mobile-assets/new-ncc-page/gallery/16.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/17.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/18.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/19.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/20.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/21.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/22.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/23.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/24.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/25.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/26.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/27.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/28.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/29.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/30.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/31.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/32.jpeg">
                    <img src="mobile-assets/new-ncc-page/gallery/33.jpg">
                    <img src="mobile-assets/new-ncc-page/gallery/34.jpeg">
                </div>
            </div>
        </section>

        <!-- CONTACT / OFFICER -->
        <section class="nccx-section">
            <div class="nccx-glass">
                <h2 class="nccx-title">NCC Officer</h2>
                <p class="nccx-text">
                    <strong>Lieutenant Dr. KM Sudha</strong><br>
                    ANO, NCC RGU<br>
                    Gold Medal in Firing, OTA Gwalior<br><br>
                    Email: ncc@rgu.ac
                </p>
            </div>
        </section>

        <script>
            const tabBtns = document.querySelectorAll(".nccx-tab-btn");
            const tabContents = document.querySelectorAll(".nccx-tab-content");

            tabBtns.forEach(btn => {
                btn.addEventListener("click", () => {

                    tabBtns.forEach(b => b.classList.remove("active"));
                    tabContents.forEach(c => c.classList.remove("active"));

                    btn.classList.add("active");
                    document.getElementById(btn.dataset.tab).classList.add("active");

                });
            });
        </script>





    </section>
@endsection

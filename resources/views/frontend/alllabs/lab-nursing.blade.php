@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
    </div>

    <style>
        /* ===== RESET ===== */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ===== BASE ===== */
        .rgu-rsn-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-rsn-hero {
            background-color: #FFF8F0;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-rsn-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-rsn-content {
            width: 50%;
        }

        .rgu-rsn-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-rsn-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-rsn-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-rsn-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-rsn-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-rsn-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-rsn-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-rsn-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-rsn-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-rsn-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-rsn-section-title {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Small decorative dot before titles */
        .rgu-rsn-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-rsn-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-rsn-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-rsn-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-rsn-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-rsn-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-rsn-highlight {
            color: orange;
        }

        .rgu-rsn-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-rsn-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-rsn-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-rsn-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-rsn-hero-img,
            .rgu-rsn-content {
                width: 100%;
            }

            .rgu-rsn-title {
                font-size: 24px;
            }

            .rgu-rsn-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-rsn-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-rsn-activities-title {
                font-size: 1.8rem;
            }

            .rgu-rsn-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-rsn-grid {
                grid-template-columns: 1fr;
            }

            .rgu-rsn-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-rsn-body">
        <section class="rgu-rsn-hero">

            <img src="/mobile-assets/new-dept-nursing/headimg.png" class="rgu-rsn-hero-img">

            <div class="rgu-rsn-content">
                <h2 class="rgu-rsn-title">Nursing Lab</h2>

                <p class="rgu-rsn-text">
                    The nursing lab of the Royal School of Nursing simulates a real-life patient care setting that allows
                    students
                    to think critically and make decisions about a patient’s care while also communicating and applying
                    skills.
                    The lab is in block- D on the fourth floor.
                </p>

                <!-- <div class="rgu-rsn-lablist">
                  <h4>Lab Activities Includes:</h4>
                  <ol>
                    <li>Preliminary training in patient care</li>
                    <li>Training on maternal and child health</li>
                    <li>Advanced nursing skills training to provide care for adult patients suffering from a variety of diseases
                    </li>
                    <li>Training in nutrition and diet</li>
                    <li>Computer education</li>
                    <li>Dummy trials</li>
                  </ol>
                </div> -->

            </div>
        </section>

        <section class="rgu-rsn-activities">

            <!-- <h3 class="rgu-rsn-activities-title">Included In The Lab Are:</h3> -->

            <div class="rgu-rsn-cards-container">

                <div class="rgu-rsn-section">
                    <h4 class="rgu-rsn-section-title">Lab Activities Includes:</h4>
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Preliminary training in patient care</span></li>
                        <li><i class="fa fa-circle"></i> <span>Training on maternal and child health</span></li>
                        <li><i class="fa fa-circle"></i> <span>Advanced nursing skills training to provide care for adult
                                patients
                                suffering from a variety of diseases</span></li>
                        <li><i class="fa fa-circle"></i> <span>Training in nutrition and diet</span></li>
                        <li><i class="fa fa-circle"></i> <span>Computer education</span></li>
                    </ul>
                </div>

                <div class="rgu-rsn-section">

                    <ul>

                        <li><i class="fa fa-circle"></i> <span>Dummy trials</span></li>
                        <li><i class="fa fa-circle"></i> <span>High-fidelity mannequins</span></li>
                        <li><i class="fa fa-circle"></i> <span>Medication administration carts</span></li>
                        <li><i class="fa fa-circle"></i> <span>Functioning hospital beds</span></li>
                        <li><i class="fa fa-circle"></i> <span>Functioning oxygen and air flowmeters</span></li>
                        <li><i class="fa fa-circle"></i> <span>Skilled trainers</span></li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

        <section class="rgu-rsn-gallery">

            <h2 class="rgu-rsn-gallery-title">
                Child <span class="rgu-rsn-highlight">Health</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/Childhealthnsg/Child Health 1.jpeg">
                <img src="mobile-assets/new-lab-rsn/Childhealthnsg/Child Health 2.jpeg">
                <img src="mobile-assets/new-lab-rsn/Childhealthnsg/Child Health 3.jpeg">
            </div>

            <h2 class="rgu-rsn-gallery-title" style="padding-top: 40px;">
                Community <span class="rgu-rsn-highlight">Health</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/Community Health Nsg/1.jpeg">
                <img src="mobile-assets/new-lab-rsn/Community Health Nsg/2.jpeg">
                <img src="mobile-assets/new-lab-rsn/Community Health Nsg/3.jpeg">
            </div>


            <h2 class="rgu-rsn-gallery-title" style="padding-top: 40px;">
                FO<span class="rgu-rsn-highlight">N</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/FON/1.jpeg">
                <img src="mobile-assets/new-lab-rsn/FON/2.jpeg">
                <img src="mobile-assets/new-lab-rsn/FON/3.jpeg">
                <img src="mobile-assets/new-lab-rsn/FON/4.jpeg">
                <img src="mobile-assets/new-lab-rsn/FON/5.jpeg">
                <img src="mobile-assets/new-lab-rsn/FON/6.jpeg">
            </div>

            <h2 class="rgu-rsn-gallery-title" style="padding-top: 40px;">
                Nutri<span class="rgu-rsn-highlight">tion</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/Nutrition/1.jpeg">
                <img src="mobile-assets/new-lab-rsn/Nutrition/2.jpeg">
                <img src="mobile-assets/new-lab-rsn/Nutrition/3.jpeg">
            </div>


            <h2 class="rgu-rsn-gallery-title" style="padding-top: 40px;">
                OB<span class="rgu-rsn-highlight">G</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/OBG/1.jpeg">
                <img src="mobile-assets/new-lab-rsn/OBG/2.jpeg">
                <img src="mobile-assets/new-lab-rsn/OBG/3.jpeg">
                <img src="mobile-assets/new-lab-rsn/OBG/4.jpeg">
                <img src="mobile-assets/new-lab-rsn/OBG/5.jpeg">
                <img src="mobile-assets/new-lab-rsn/OBG/6.jpeg">
            </div>


            <h2 class="rgu-rsn-gallery-title" style="padding-top: 40px;">
                Pre-Clinic<span class="rgu-rsn-highlight"> Lab</span>
            </h2>

            <div class="rgu-rsn-grid">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/1.jpeg">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/2.jpeg">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/3.jpeg">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/4.jpeg">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/5.jpeg">
                <img src="mobile-assets/new-lab-rsn/Pre clinical Lab/6.jpeg">
            </div>

        </section>
    </section>
@endsection

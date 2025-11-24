@extends('frontend.master')
@section('content')
      <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

    <div class="mobile">
      @include('frontend/components/mobileheader')
      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
        Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Communication and Media (RSCOM)</span></h2>
    </div>

    <div class="website">
      @include('frontend/components/aheader')
      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
        Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Communication and Media (RSCOM)</span></h2>

    </div>

    <style>
      /* Basic Page Styling */
      .section-f {
        padding: 2rem 0;
      }

      /* Individual Card Styling */
      .card {
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 0.7rem;
        text-align: left;
        border: none;
        width: 100%;
        height: 100%;

        /* Flexbox for vertical alignment */
        display: flex;
        flex-direction: column;

        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      /* Hover effect for the card */
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      }

      /* Image container */
      .card-image {
        width: 100%;
        padding-top: 100%;
        position: relative;
        border-radius: 5%;
        overflow: hidden;
        margin: 0 auto 1.0rem;
        border: 2px solid #f0f2f5;
      }

      .card-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      /* Name/Heading Styling */
      .card-name {
        margin: 0 0 0.5rem 0;
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        line-height: 1.2;
        color: #24477f;
      }

      /* Designation/Paragraph Styling */
      .card-designation {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 400;
        color: #666;
        line-height: 1.4;
      }

      /* New Styling for the Profile Link */
      .profile-link {
        margin-top: auto;
        /* This is the magic property! */
        padding-top: 0.5rem;
        font-size: 1.1rem;
        font-weight: 800;
        text-decoration: none;
        color: #FF9A1E;
      }

      .profile-link:hover {
        text-decoration: underline;
      }
    </style>

    <div class="section-f">
      <div class="container">

        <!-- regular faculty  -->

          <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/2.jpg"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Prof. D.N. Singh</h3>
                <p class="card-designation">Professor & Registrar Academic and I/C Dean, Royal School of Communication &
                  Media</p>
                <a href="https://rgu.ac/Prof-dn-singh" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg" alt="Profile image ">
                </div>
                <h3 class="card-name">Mr. Prasant Jyoti Baruah</h3>
                <p class="card-designation">Distinguished Professor</p>
                <a href="https://www.rgu.ac/advisor-prasanta-jyoti-baruah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Florence-Handique-Rabha.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Florence Handique Rabha</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-florance-rabha" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sharmista-Pradhan-RSCOM.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Sharmista Pradhan</h3>
                <p class="card-designation">Assistant Professor & Coordinator, RSCOM</p>
                <a href="https://www.rgu.ac/faculty-sharmista-pradhan" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Ankita-Agarwal-RSCOM.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Ankita Agarwal</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-ankita-agarwal" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Champa-Devi.png" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Champa Devi</h3>
                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                <a href="https://www.rgu.ac/faculty-champa-devi" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/all-faculty/rscom/5.jpeg" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Esha Chakraborty</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-esha-chakraborty" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sailendra-Das.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Sailendra Das</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-sailendra" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Subhajit.jpeg" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Subhajit Paul</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-subhajit-paul" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/suresh.jpg" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Suresh Goduka</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-suresh-goduka" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bijayata-Dutta-RSCOM.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Bijayata Dutta</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-bijayata-dutta" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dijendra-Das-RSCOM.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Mr. Dijendra Das</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-dijendra" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/jintu.jpg" alt="Profile image">
                </div>
                <h3 class="card-name">Jintu Mahanta</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-jintu-mahanta" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                <p class="card-designation">Guest Faculty</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                    alt="Profile image of Tahera Hoque">
                </div>
                <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debarchana.PNG" alt="Profile image">
                </div>
                <h3 class="card-name">Dr. Debarchana Baruah
                </h3>
                <p class="card-designation">Assistant Professor

                </p>
                <a href="https://www.rgu.ac/faculty-debarchana-baruah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://media.rgu.ac/iks/Dr.SiddhantMedhi.jpg" alt="Profile image of Siddhant Medhi">
                </div>
                <h3 class="card-name">Dr. Siddhant Medhi</h3>
                <p class="card-designation">Faculty Member, IKS Cell</p>
                <a href="https://www.rgu.ac/faculty-siddhant-medhi" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Dr-Mullah-Islam.png"
                    alt="Profile image of Dr. Mullah Muhaiminul Islam">
                </div>
                <h3 class="card-name">Dr. Mullah Muhaiminul Islam</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-mullah-muhaiminul-islam" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                    alt="Profile image of Sayed Sajidul Islam">
                </div>
                <h3 class="card-name">Sayed Sajidul Islam</h3>
                <p class="card-title">Associate Professor</p>
                <a href="https://www.rgu.ac/faculty-syed-sajidul-islam" class="profile-link">View Profile</a>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/b_deeparani.png"
                    alt="Profile image of bachaspatimayum Devi">
                </div>
                <h3 class="card-name" style="font-size: 20px;">Ms. Bachaspatimayum Deeparani Devi</h3>
                <p class="card-designation">Assistant Professor and Clinical Psychologist (Associate)</p>
                <a href="https://www.rgu.ac/bachaspatimayum-deeparani-devi" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prabahan-Puzari.png"
                    alt="Profile image of Prabahan Pujari">
                </div>
                <h3 class="card-name">Dr. Prabahan Pujari</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-prabahan-puzari" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                    alt="Profile image of Prof. Abhinav Chaliha">
                </div>
                <h3 class="card-name">Prof. Abhinav Chaliha</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                    alt="Profile image of Sudarshana B Khanikor">
                </div>
                <h3 class="card-name">Dr. Sudarshana Borah</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-sudarshana" class="profile-link">View Profile</a>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/premmi.png"
                    alt="Profile image of Preimi Wahengbam">
                </div>
                <h3 class="card-name">Dr. Premmi Wahengbam</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-premmi" class="profile-link">View Profile</a>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Romeet.jpg"
                    alt="Profile image of Romeet Saha">
                </div>
                <h3 class="card-name">Dr. Romeet Saha</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-romeet-saha" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image of Jemima Yasmin">
                </div>
                <h3 class="card-name">Jemima Yasmin</h3>
                <p class="card-title">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Dr-Tripti-Das.png" alt="Profile image of Tripti Das">
                </div>
                <h3 class="card-name">Dr. Tripti Das</h3>
                <p class="card-designation">Assistant Professor & Coordinator, Sociology</p>
                <a href="https://www.rgu.ac/faculty-tripti-das" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sanghamitra-Hazarika.png"
                    alt="Profile image of Dr. Sanghamitra Hazarika">
                </div>
                <h3 class="card-name">Dr. Sanghamitra Hazarika</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-sanghamitra-hazarika" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ankit.jpg"
                    alt="Profile image of Ankit Bordoloi">
                </div>
                <h3 class="card-name">Mr. Ankit Bordoloi</h3>
                <p class="card-designation">Teaching Assistant</p>
                <a href="https://www.rgu.ac/faculty-ankit-bordoloi" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Indrajit-Dutta.jpeg"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Indrajit Dutta</h3>
                <p class="card-designation">Associate Professor, Associate Dean, Academic Affairs & HOD, RSTTM</p>
                <a href="https://www.rgu.ac/faculty-indrajit-dutta" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/monojit-singha-pol-sc.jpeg"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Dr. Y. Monojit Singha</h3>
                <p class="card-designation">Assistant Professor & Coordinator, Political Science & Administrative
                  Service
                </p>
                <a href="https://www.rgu.ac/faculty-monojit-singha" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image of Roshni Saikia">
                </div>
                <h3 class="card-name">Roshni Saikia</h3>
                <p class="card-title">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amlan-Das-RSBSC.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Prof. Amlan Das</h3>
                <p class="card-designation">Professor & Co-cordinator, IKS</p>
                <a href="https://www.rgu.ac/faculty-amlan-das" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://media.rgu.ac/advisor-leadership/Amarjyoti.jpeg"
                    alt="Profile image of Prof. (Dr.) Amarjyoti Choudhury">
                </div>
                <h3 class="card-name">Prof. (Dr.) Amarjyoti Choudhury</h3>
                <p class="card-designation">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre for
                  Creativity, The Assam Royal Global University</p>
                <a href="https://www.rgu.ac/advisor-dr-amarjyoti-choudhury" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Pritom-Borah-RSEES.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Pritom Borah</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-pritom-borah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Denim-Deka.jpg" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Denim Deka</h3>
                <p class="card-designation">
                  Assistant Professor
                </p>
                <a href="https://www.rgu.ac/faculty-denim-deka" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Adishree-Borgohain.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Adishree Borgohain</h3>
                <p class="card-designation">
                  Assistant Professor & Assistant Dean, Academic Affairs
                </p>
                <a href="https://www.rgu.ac/faculty-adishree-borgohain" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Tanjeela-Mehboob-RSHSS.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Ms. Tanjeela Mehboob</h3>
                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                <a href="https://www.rgu.ac/faculty-tanjeela-mehboob" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image of Dr. Pranabjyoti Sarma">
                </div>
                <h3 class="card-name">Dr. Pranabjyoti Sarma</h3>
                <p class="card-designation">Assistant Professor, IKS Cell</p>
                <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-T-Abhisek.png"
                    alt="Profile image of T. Abhishek">
                </div>
                <h3 class="card-name">Mr. T. Abhishek</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-Abhisek" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rohit-Sarma.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Mr. Rohit Sarma</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-rohit-sarma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Anuj-Kumar-Borah-RSBSC.png"
                    alt="Profile image of Prof. Rita Choudhury">
                </div>
                <h3 class="card-name">Dr. Anuj Kumar Borah</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-anuj-kumar-borah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sushmita-Nongmeikapam.png"
                    alt="Profile image of Dr. Sushmita Nongmeikapam">
                </div>
                <h3 class="card-name">Dr. Sushmita Nongmeikapam</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-sushmita-hoshi-nongmeikapam" class="profile-link">View Profile</a>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Lalzikpuii-Rajkhowa.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Lalzikpuii Rajkhowa</h3>
                <p class="card-designation">
                  Assistant Professor
                </p>
                <a href="https://www.rgu.ac/faculty-lalzikpuii-rajkhowa" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nikita-Biswakarma-RSHSS.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Ms. Nikita Biswakarma</h3>
                <p class="card-designation">Teaching Assistant & Departmental Representative, Academic Affairs</p>
                <a href="https://www.rgu.ac/faculty-nikita-biswakarma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png"
                    alt="Profile image of Dr. Arpee Saikia">
                </div>
                <h3 class="card-name">Dr. Arpee Saikia</h3>
                <p class="card-designation">Associate Professor & HOD, RSB</p>
                <a href="https://www.rgu.ac/faculty-arpee-saikia" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Prince-CP-RSBAS.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Prince P</h3>
                <p class="card-designation">Associate Professor</p>
                <a href="https://www.rgu.ac/faculty-prince-cp" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Tushti-Sharma.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Prof. Tushti Sharma</h3>
                <p class="card-designation">Professor and HoD</p>
                <a href="https://www.rgu.ac/faculty-tushti-sharma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Dr. Bisalakshi Sawarni
                </h3>
                <p class="card-designation">Assistant Professor

                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Shraddha-Basu-RSBAS.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Shraddha Basu</h3>
                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                <a href="https://www.rgu.ac/faculty-shraddha-basu" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Reemina-Narzary-RSHM.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Reemina Narzary</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-reemina-narzary" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Pompi-Basumatary-RSl.png"
                    alt="Profile image of Jiwasmika Baishya">
                </div>
                <h3 class="card-name">Dr. Pompi Basumatary</h3>
                <p class="card-designation">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png"
                    alt="Profile image of Jiwasmika Baishya">
                </div>
                <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                <p class="card-designation">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bishnu-Gurung.png"
                    alt="Profile image of Dr. Bishnu Gurung">
                </div>
                <h3 class="card-name">Dr. Bishnu Gurung</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-bishnu-gurung" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Monika-Kumari-RSHSS.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Dr. Monika Kumari</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-monika-kumari" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Dr-Mahuya-Deb-RSBAS.png"
                    alt="Profile image of Dr. Mahuya Deb">
                </div>
                <h3 class="card-name">Dr. Mahuya Deb</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-mahuya-deb" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pragya.jpeg"
                    alt="Profile image of Pragya Tamang">
                </div>
                <h3 class="card-name">Dr. Pragya Tamang</h3>
                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/jugal.jpeg"
                    alt="Profile image of Mr. Jugal Kishore Bhattacharyya">
                </div>
                <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                <p class="card-designation">Assistant Professor & Coordinator GE/AEEC</p>
                <a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/all-faculty/rsa/13.jpeg" alt="Profile image of Ar. Pratyasha Das">
                </div>
                <h3 class="card-name">Ar. Pratyasha Das</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-pratyasha-das" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg" alt="Profile image ">
                </div>
                <h3 class="card-name">Mr. Raj Paul</h3>
                <p class="card-designation">Visiting Faculty</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Suman-saha.png"
                    alt="Profile image of Mr. Suman Saha">
                </div>
                <h3 class="card-name">Mr. Suman Saha</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-suman-saha" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ar-Kasturi-Borah-RSA.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ar. Kasturi Borah</h3>
                <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                <a href="https://www.rgu.ac/faculty-kasturi-borah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img
                    src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Visiting%20Faculty/Manas%20Pratim%20Gogoi.jpg"
                    alt="Profile image of Mr. Manas Pratim Gogoi">
                </div>
                <h3 class="card-name">Mr. Manas Pratim Gogoi</h3>
                <p class="card-designation">Visiting Faculty</p>
                <a href="https://www.rgu.ac/faculty-manas-pratim" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Aruniva-Bhagwati.png"
                    alt="Profile image">
                </div>
                <h3 class="card-name">Ms. Aruniva Bhagwati</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-aruniva-bhagawati" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Fariza-Saidin-RSBAS.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Fariza Saidin</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-fariza-saidin" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Ms. Jahnabi Mahanta</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-jahnabi-mahanta" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                    alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Kishan-Bagdi-RSFA.png"
                    alt="Profile image of Mr. Kishan Bagdi">
                </div>
                <h3 class="card-name">Mr. Kishan Bagdi</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-kishan-bagdi" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bidisha.jpg"
                    alt="Profile image of Bidisha Goswami">
                </div>
                <h3 class="card-name">Ms. Bidisha Goswami</h3>
                <p class="card-designation">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/all-faculty/rsa/16.jpeg" alt="Profile image of Ar. Ritu Rani">
                </div>
                <h3 class="card-name">Ar. Ritu Rani</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-ritu-rani" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                    alt="Profile image of Dr. Sumanta Dutta Chowdhury">
                </div>
                <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                <a href="https://www.rgu.ac/faculty-sumanta-dutta-chowdhury" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="mobile-assets/updated-faculty-img/Taranga-Jyoti-Baruah-RSBSC.png" alt="Profile image of">
                </div>
                <h3 class="card-name">Dr. Taranga Jyoti Baruah</h3>
                <p class="card-designation">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-taranga-jyoti-baruah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Mr.%20Dibyajyoti%20Deka.jpeg"
                    alt="Profile image of Dibyajyoti Deka">
                </div>
                <h3 class="card-name">Mr. Dibyajyoti Deka</h3>
                <p class="card-designation">Visiting Faculty</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Amarjyoti-RSEES.png" alt="Profile image ">
                </div>
                <h3 class="card-name">Mr. Amarjyoti Borah</h3>
                <p class="card-title">Assistant Professor</p>
                <a href="https://www.rgu.ac/faculty-amarjyoti-borah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image">
                  <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png" alt="Profile image ">
                </div>
                <h3 class="card-name">Dr. Anushree Baruah</h3>
                <p class="card-title">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bishnu-Gurung.png " alt="Profile image "></div>
                <h3 class="card-name">Dr. Bishnu Kumari Gurung</h3>
                <p class="card-title">Assistant Professor</p><a href="https://www.rgu.ac/faculty-bishnu-gurung" class="profile-link">View Profile</a>
              </div>
            </div>

            <!-- <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Deepanjali-Reang-RSHSS.png" alt="Profile image "></div>
                <h3 class="card-name">Dipanjali Das</h3>
                <p class="card-title">Assistant Professor</p><a href="" class="profile-link">View Profile</a>
              </div>
            </div> -->

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/all-faculty/rshss/jugal.jpeg" alt="Profile image "></div>
                <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                <p class="card-title">Assistant Professor & Coordinator GE/AEEC</p><a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nikita-Biswakarma-RSHSS.png" alt="Profile image "></div>
                <h3 class="card-name">Ms. Nikita Biswakarma</h3>
                <p class="card-title">Teaching Assistant & Departmental Representative, Academic Affairs</p><a href="https://www.rgu.ac/faculty-nikita-biswakarma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg" alt="Profile image "></div>
                <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                <p class="card-title">Assistant Professor</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Prajna-Borah-RSHSS.png" alt="Profile image "></div>
                <h3 class="card-name">Ms. Prajna Borah</h3>
                <p class="card-title">Assistant Professor</p><a href="https://www.rgu.ac/faculty-prajna-borah" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Rajdeep-Deb-RSEES.png " alt="Profile image "></div>
                <h3 class="card-name">Rajdeep Deb</h3>
                <p class="card-title">Assistant Professor</p><a href="https://www.rgu.ac/faculty-rajdeep-deb" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rohit-Sarma.png" alt="Profile image "></div>
                <h3 class="card-name">Mr. Rohit Sarma</h3>
                <p class="card-title">Assistant Professor</p><a href="https://www.rgu.ac/faculty-rohit-sarma" class="profile-link">View Profile</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <div class="card-image"><img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Lalzikpuii-Rajkhowa.png" alt="Profile image "></div>
                <h3 class="card-name">Ms. Lalzikpuii Rajkhowa</h3>
                <p class="card-title">Assistant Professor</p><a href="https://www.rgu.ac/faculty-lalzikpuii-rajkhowa" class="profile-link">View Profile</a>
              </div>
            </div>

          </div>

        <!-- regular faculty  -->

      </div>
    </div>

  </div>
@endsection

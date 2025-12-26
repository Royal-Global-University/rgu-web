@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

    <div class="mobile">
      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
        Advisory <br><span style="color: #FF9A1E; font-weight: 500; padding-top: 80px; position: relative;"> Leadership</span></h2>
    </div>

    <div class="website">

      <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
        Advisory <span style="color: #FF9A1E; font-weight: 500;"> Leadership</span></h2>

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
        font-family: 'Times New Roman', Times, serif;
        margin: 0 0 0.5rem 0;
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        line-height: 1.2;
        color: #24477f;
      }

      /* Designation/Paragraph Styling */
      .card-designation {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        font-size: 1.2rem;
        font-weight: 400;
        color: #666;
        line-height: 1.4;
      }

      /* New Styling for the Profile Link */
      .profile-link {
        font-family: 'Times New Roman', Times, serif;
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
                <img src="https://media.rgu.ac/advisor-leadership/Sri-Ranjit-Barthakur.png"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Sri Ranjit Barthakur</h3>
              <p class="card-designation">Founding Trustee, Balipara Foundation, and Chairperson | Advisor, Governing Body.</p>
              <a href="https://www.rgu.ac/advisor-sri-ranjit-barthakur" class="profile-link">View Profile</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="mobile-assets/updated-faculty-img/chief-advisor-pic.png"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Prof. (Dr.) Dhruba Jyoti Borah</h3>
              <p class="card-designation">Chief Advisor to the Chancellor and Author-in-residence.</p>
              <a href="/advisory-prof-dr-dhruba-jyoti-borah" class="profile-link">View Profile</a>
            </div>
          </div>

        </div>
        <!-- regular faculty  -->

        <!-- regular faculty  -->
        <div class="row justify-content-center">

           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="https://media.rgu.ac/advisor-leadership/Professor-Dr-Prabuddha-Ganguli.png"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Prof. Prabuddha Ganguli</h3>
              <p class="card-designation">Global Voice in IPR | National Champion of Innovation, Emeritus Professor and Adviser, Royal School of Law and Administration</p>
              <a href="https://www.rgu.ac/advisor-prof-prabuddha-ganguli" class="profile-link">View Profile</a>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="https://media.rgu.ac/advisor-leadership/Sri-Ravi-Kant.png"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Sri Ravi Kant</h3>
              <p class="card-designation">Former Managing Director and Vice Chairman of Tata Motors | Strategic Leader | Nation Builder | Member of Advisory Board, The Assam Royal Global University</p>
              <a href="https://www.rgu.ac/advisor-sri-ravi-kant" class="profile-link">View Profile</a>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="https://media.rgu.ac/advisor-leadership/sri-subramanian-ramadorai.jpg"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Sri Subramanian Ramadorai</h3>
              <p class="card-designation">Former CEO & MD of Tata Consultancy Services and Former Chairperson of NSDC and NSDA | Member of Governing Body, The Assam Royal Global University</p>
            </div>
          </div>

        </div>
        <!-- regular faculty  -->

        <!-- regular faculty  -->
        <div class="row justify-content-center">

           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="https://media.rgu.ac/advisor-leadership/Amarjyoti.jpeg"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Prof. (Dr.) Amarjyoti Choudhury</h3>
              <p class="card-designation">Professor Emeritus & Chair Professor, Dr. Bhupen Hazarika Centre for Creativity, The Assam Royal Global University</p>
              <a href="https://www.rgu.ac/advisor-dr-amarjyoti-choudhury" class="profile-link">View Profile</a>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="card-image">
                <img src="https://media.rgu.ac/advisor-leadership/Prasanta.jpeg"
                  alt="Profile image ">
              </div>
              <h3 class="card-name">Mr. Prasanta Jyoti Baruah</h3>
              <p class="card-designation">Distinguished Professor, Royal School of Communication and Media (RSCOM)</p>
              <a href="https://www.rgu.ac/advisor-prasanta-jyoti-baruah" class="profile-link">View Profile</a>
            </div>
          </div>

        </div>
        <!-- regular faculty  -->

      </div>
    </div>

  </div>
@endsection

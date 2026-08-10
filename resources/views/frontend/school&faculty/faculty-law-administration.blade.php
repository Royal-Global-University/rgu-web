@extends('frontend.master')
@section('title', 'Best University in Assam, India')
@section('meta_description, Meet the top-ranked Law Faculty at RGUs Royal School of Law & Administration (RSLA). View
    profiles for Prof. B.C. Barooah (Dean), Dr. Ajit Kaushal (HOD), and 10+ Professors.')
@section('meta_keywords', 'Royal School of Law & Administration (RSLA)')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Law & Administration (RSLA)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Law & Administration (RSLA)</span></h2>

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
                                <img src="/mobile-assets/updated-faculty-img/Souvik-Chatterji.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Souvik Chatterji</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Law and Administration</p>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bhavana.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Bhavana Sharma</h3>
                            <p class="card-designation">Professor & HoD</p>
                            <a href="faculty-bhavana-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Hiren-Chandra%20Nath-RSLA.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Hiren Ch. Nath</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-hiren-nath" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Thaneswar-Kalita-RSLS.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Thaneswar Kalita</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-thaneshwar-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/kavita-kumari-jain.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kavita Kumari Jain</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-kavita-k-jain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Laishram.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Laishram Malem Mangal</h3>
                            <p class="card-designation">Associate Professor</p>
                            {{-- <a href="/faculty-kavita-k-jain" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/momina.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Momina Zahan</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-momina-zahan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Nita-Nath.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Nita Nath</h3>
                            <p class="card-designation">Associate Professor</p>
                            {{-- <a href="/faculty-momina-zahan" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr. Pranita Choudhury.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pranita Choudhury</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-pranita-choudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Aruno.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Aruno Raj Singh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bhupali-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/bhupali.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bhupali Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bhupali-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/jahnavi-b.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Jahnavi Bhandari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-jahnavi-bhandari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Kuntala%20Roychoudhury-RSLA.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kuntala Roychoudhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-kuntala-roychoudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Meghna.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Meghna Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-meghna-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/priyanka-diphusha.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Priyanka Diphusha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-priyanka-diphusha" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Dr-Saif-Rasul-khan.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Saif Rasul Khan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-saif-rasul-khan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Ms-Hiya-Das.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Hiya Das</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="/faculty-hiya-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Shruti-Hazarika.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Shruti Hazarika Borpujari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-shruti-borpujari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Vinod Kumar Chandak</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rakhee Sirauthia Choudhury</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Faculty List - Royal School of Law & Administration (RSLA)",
  "description": "Directory of Professors, Associate Professors, and Assistant Professors at the Royal School of Law and Administration at RGU, Guwahati.",
  "url": "/faculty-law-administration",
  "numberOfItems": 12,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "Person",
        "name": "Prof. (Dr.) B.C. Barooah",
        "jobTitle": "Professor & Dean, Royal School of Law & Administration (RSLA)",
        "url": "/faculty-law-administration"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "Person",
        "name": "Prof. Ajit Kaushal",
        "jobTitle": "Professor and HOD",
        "url": "/faculty-ajit-kaushal"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "Person",
        "name": "Prof. Bhavana Sharma",
        "jobTitle": "Professor",
        "url": "/faculty-bhavana-sharma"
      }
    },
    {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@type": "Person",
        "name": "Prof. Hiren Ch. Nath",
        "jobTitle": "Professor",
        "url": "/faculty-hiren-nath"
      }
    },
    {
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@type": "Person",
        "name": "Prof. Thaneswar Kalita",
        "jobTitle": "Professor",
        "url": "/faculty-thaneshwar-kalita"
      }
    },
    {
      "@type": "ListItem",
      "position": 6,
      "item": {
        "@type": "Person",
        "name": "Dr. Pranita Choudhury",
        "jobTitle": "Associate Professor",
        "url": "/faculty-pranita-choudhury"
      }
    },
    {
      "@type": "ListItem",
      "position": 7,
      "item": {
        "@type": "Person",
        "name": "Dr. Sumit Agarwala",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-sumit-agarwala"
      }
    },
    {
      "@type": "ListItem",
      "position": 8,
      "item": {
        "@type": "Person",
        "name": "Dr. Bhupali Saikia",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-bhupali-saikia"
      }
    },
    {
      "@type": "ListItem",
      "position": 9,
      "item": {
        "@type": "Person",
        "name": "Dr. Arpita Sharma",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-arpita-sharma"
      }
    },
    {
      "@type": "ListItem",
      "position": 10,
      "item": {
        "@type": "Person",
        "name": "Dr. Rajashree Gogoi",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-rajashree-gogoi"
      }
    },
    {
      "@type": "ListItem",
      "position": 11,
      "item": {
        "@type": "Person",
        "name": "Mr. Abhijit Nath",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-abhijit-nath"
      }
    },
    {
      "@type": "ListItem",
      "position": 12,
      "item": {
        "@type": "Person",
        "name": "Ms. Ritupriya Kalita",
        "jobTitle": "Assistant Professor",
        "url": "/faculty-ritupriya-kalita"
      }
    }
  ]
}
</script>
@endpush

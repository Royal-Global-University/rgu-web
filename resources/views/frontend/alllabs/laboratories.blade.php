@extends('frontend.master')
@section('content')
    <style>
        /* ===============================
       RESET
    ================================ */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Times New Roman', serif;
            background: linear-gradient(180deg, #f4efe9, #f7f3ee);
            color: #2c2c2c;
        }


        /* ===============================
       WRAPPER
    ================================ */
        .rgu-lab-wrapper {
            max-width: 1250px;
            margin: auto;
            padding: 50px 20px;
        }


        /* ===============================
       MAIN HEADING
    ================================ */
        .rgu-lab-heading {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #28477b;
        }


        /* ===============================
       🔥 FIX: SCHOOL STACK (COLUMN)
    ================================ */
        #rguLabContainer {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }


        /* ===============================
       SCHOOL SECTION
    ================================ */
        .rgu-lab-school {
            width: 100%;
        }


        /* SCHOOL TITLE */
        .rgu-lab-school-title {
            font-size: 26px;
            font-weight: 700;
            color: #28477b;
            margin-bottom: 20px;
            padding-bottom: 8px;
            border-bottom: 2px solid #28477b;
            /* full width underline */
        }


        /* ===============================
       CARDS GRID
    ================================ */
        .rgu-lab-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }


        /* ===============================
       CARD
    ================================ */
        .rgu-lab-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .rgu-lab-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }


        /* IMAGE */
        .rgu-lab-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }


        /* TITLE */
        .rgu-lab-card-title {
            margin: 16px 0 10px;
            font-size: 20px;
            font-weight: 700;
            color: #28477b;
            line-height: 1.4;
            min-height: 50px;
        }


        /* EXPLORE LINK */
        .rgu-lab-explore {
            margin-top: auto;
            text-decoration: none;
            color: #f7941d;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.25s ease;
        }

        .rgu-lab-explore:hover {
            color: #28477b;
            transform: translateX(3px);
        }


        /* ===============================
       RESPONSIVE
    ================================ */
        @media (max-width: 992px) {
            .rgu-lab-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .rgu-lab-heading {
                font-size: 32px;
            }

            .rgu-lab-school-title {
                font-size: 22px;
            }

            .rgu-lab-card img {
                height: 160px;
            }

            .rgu-lab-card-title {
                font-size: 16px;
                min-height: auto;
            }
        }

        @media (max-width: 480px) {
            .rgu-lab-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <div class="rgu-lab-hero">

        <picture>
            <!-- Mobile Image -->
            <source media="(max-width: 768px)" srcset="/mobile-assets/laboratories/mobile-lab-banner.png">

            <!-- Desktop Image -->
            <img style="width: 100%;" src="/mobile-assets/laboratories/web-lab-banner.png"
                alt="Laboratories Banner">
        </picture>

    </div>

    <div class="rgu-lab-wrapper">

        <div class="rgu-lab-cards" id="rguLabContainer"></div>

    </div>

    <script>
        /* ===============================
         DATA (EDIT HERE)
      ================================ */
        const rguLabData = [

            {
                school: "Royal School of Architecture (RSA)",
                labs: [{
                    title: "Architecture Design Studios",
                    image: "/mobile-assets/laboratories/architecture.png",
                    link: "/lab-architecture"
                }]
            },
            {
                school: "Royal School of Applied & Pure Sciences (RSAPS)",
                labs: [{
                        title: "Physics Lab",
                        image: "/mobile-assets/laboratories/physics.png",
                        link: "/lab-physics"
                    },
                    {
                        title: "Bio Chemistry Lab",
                        image: "/mobile-assets/laboratories/biochem.png",
                        link: "/lab-bio-chemistry"
                    },
                    {
                        title: "Chemistry Lab",
                        image: "/mobile-assets/laboratories/chemistry.png",
                        link: "/lab-chemistry"
                    }
                ]
            },
            {
                school: "Royal School of Bio-sciences (RSBSC)",
                labs: [{
                        title: "Biotechnology Lab",
                        image: "/mobile-assets/laboratories/biotech.png",
                        link: "/lab-biotech"
                    },
                    {
                        title: "Food Technology Lab",
                        image: "/mobile-assets/laboratories/foodtech.png",
                        link: "/lab-foodteach"
                    },
                    {
                        title: "Microbiology Lab",
                        image: "/mobile-assets/laboratories/micro.png",
                        link: "/lab-microbiology"
                    }
                ]
            },
            {
                school: "Royal School of Communications & Media (RSCOM)",
                labs:
                [
                    {
                        title: "Media Studio",
                        image: "/mobile-assets/new-labs/studio-media-studio/ms1.jpg",
                        link: "/media-studio"
                    },
                    {
                        title: "Multimedia Lab",
                        image: "/mobile-assets/new-labs/lab-multimedia/1.jpeg",
                        link: "/lab-multimedia"
                    }
                ]
            },
            {
                school: "Royal School of Design (RSD)",
                labs:
                [
                    {
                    title: "Interior Design Studios",
                    image: "/mobile-assets/laboratories/interior.png",
                    link: "/lab-interior"
                    },
                    {
                    title: "AR/VR Design Lab (Product Design Lab)",
                    image: "/mobile-assets/new-labs/lab-ar-vr-product-design/AR:VR/1000595884.jpg",
                    link: "/lab-ar-vr"
                    }
                ]
            },
            {
                school: "Royal School of Engineering and Technology (RSET)",
                labs: [{
                        title: "Computer Lab",
                        image: "/mobile-assets/laboratories/comp.png",
                        link: "/lab-computer"
                    },
                    {
                        title: "Civil Engineering Lab",
                        image: "/mobile-assets/laboratories/civil.png",
                        link: "/lab-civilengineering"
                    },
                    {
                        title: "Mechanical Engineering Lab",
                        image: "/mobile-assets/laboratories/mechanical.png",
                        link: "/lab-mechanical"
                    },
                    {
                        title: "Electronic Engineering Lab",
                        image: "/mobile-assets/laboratories/electronic.png",
                        link: "/lab-electronic"
                    },
                    {
                        title: "Electrical Engineering Lab",
                        image: "/mobile-assets/laboratories/electrical.png",
                        link: "/lab-electrical"
                    }

                ]
            },

            {
                school: "Royal School of Fine Arts (RSFA)",
                labs: [{
                        title: "Art Studio Cum Gallery",
                        image: "/mobile-assets/new-labs/lab-fine-arts-new/headimg.jpeg",
                        link: "/arts-studio"
                    }

                ]
            },

            {
                school: "Royal School of Hotel Management (RSHM)",
                labs: [{
                    title: "Hotel Management Lab",
                    image: "/mobile-assets/laboratories/hotelmanagement.png",
                    link: "/lab-hotelmanagement"
                }]
            },

            {
                school: "Royal School of Information Technology (RSIT)",
                labs: [{
                    title: "Computer Lab",
                    image: "/mobile-assets/laboratories/comp.png",
                    link: "/lab-computer"
                }]
            },

            {
                school: "Royal School of Life Sciences (RSLSC)",
                labs: [{
                        title: "Botany Lab",
                        image: "/mobile-assets/new-labs/botany/botany-img.jpeg",
                        link: "/lab-botany"
                    },
                    {
                        title: "Zoology Lab",
                        image: "/mobile-assets/laboratories/zoology.png",
                        link: "/lab-zoology"
                    },
                    {
                        title: "Forensic Science Lab",
                        image: "/mobile-assets/laboratories/forensic.png",
                        link: "/lab-forensic-lab"
                    },
                    {
                        title: "Forestry and Environmental Science Laboratory",
                        image: "/mobile-assets/lab-forestry/f11.png",
                        link: "/lab-forestry-environmental-science"
                    }
                ]
            },

            {
                school: "Royal School of Languages (RSL)",
                labs: [{
                    title: "Language Lab",
                    image: "/mobile-assets/laboratories/language.png",
                    link: "/lab-language-lab"
                }]
            },

            {
                school: "Royal School of Medical & Allied Sciences (RSMAS)",
                labs: [{
                        title: "Diagnostic Lab",
                        image: "/mobile-assets/laboratories/diagnostic.png",
                        link: "/lab-diagnostic"
                    },
                    {
                        title: "Optometry Lab",
                        image: "/mobile-assets/laboratories/opto.png",
                        link: "/lab-optometry"
                    },
                    {
                        title: "Anesthesia & Operation Theatre Technology",
                        image: "/mobile-assets/laboratories/operation.png",
                        link: "/lab-operation_theater"
                    },
                    {
                        title: "Physiotherapy Lab",
                        image: "/mobile-assets/laboratories/physiotherapy.png",
                        link: "/lab-physiotherapy"
                    },
                    {
                        title: "Radiology Lab",
                        image: "/mobile-assets/laboratories/radiology.png",
                        link: "/lab-radiography"
                    }

                ]
            },

            {
                school: "Royal School of Nursing (RSN)",
                labs: [{
                    title: "Nursing Lab",
                    image: "/mobile-assets/laboratories/nursing.png",
                    link: "/lab-nursing"
                }]
            },

            {
                school: "Royal School of Pharmacy (RSP)",
                labs: [{
                    title: "Pharmacutical Lab",
                    image: "/mobile-assets/laboratories/pharmacy.png",
                    link: "/lab-pharmacy"
                }]
            },

            {
                school: "Others",
                labs: [{
                        title: "EV Lab",
                        image: "/mobile-assets/laboratories/ev.jpeg",
                        link: "/lab-ev-lab"
                    },
                    {
                        title: "Royal Observatory",
                        image: "/mobile-assets/laboratories/observe.jpeg",
                        link: "/lab-astronomy"
                    },

                ]
            },

        ];

        /* ===============================
           ELEMENT
        ================================ */
        const container = document.getElementById("rguLabContainer");

        /* ===============================
           RENDER FUNCTION
        ================================ */
        function renderLabs(data) {

            // Clear container
            container.innerHTML = "";

            // Loop through schools
            data.forEach(group => {

                // Create lab cards
                let labsHTML = "";

                group.labs.forEach(lab => {
                    labsHTML += `
        <div class="rgu-lab-card">
          <img src="${lab.image}" alt="${lab.title}">

          <div class="rgu-lab-card-title">
            ${lab.title}
          </div>

          <a href="${lab.link}" class="rgu-lab-explore">
            Explore →
          </a>
        </div>
      `;
                });

                // Append full block
                container.innerHTML += `
      <div class="rgu-lab-school">

        <div class="rgu-lab-school-title">
          ${group.school}
        </div>

        <div class="rgu-lab-cards">
          ${labsHTML}
        </div>

      </div>
    `;
            });
        }

        /* ===============================
           INIT
        ================================ */
        renderLabs(rguLabData);
    </script>
@endsection

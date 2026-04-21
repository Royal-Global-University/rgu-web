@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;"></div>
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
        .rgu-interior-design-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-interior-design-hero {
            background: url("mobile-assets/new-labs/lab-architecture-new/bgg.svg") center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-interior-design-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-interior-design-content {
            width: 50%;
        }

        .rgu-interior-design-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-interior-design-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-interior-design-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-interior-design-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-interior-design-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-interior-design-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-interior-design-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-interior-design-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-interior-design-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-interior-design-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-interior-design-section-title {
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
        .rgu-interior-design-section-title::before {
            content: "";
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-interior-design-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-interior-design-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-interior-design-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-interior-design-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #fffbf6;
        }

        .rgu-interior-design-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-interior-design-highlight {
            color: orange;
        }

        .rgu-interior-design-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-interior-design-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-interior-design-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-interior-design-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #fffbf6;
            }

            .rgu-interior-design-hero-img,
            .rgu-interior-design-content {
                width: 100%;
            }

            .rgu-interior-design-title {
                font-size: 24px;
            }

            .rgu-interior-design-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-interior-design-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-interior-design-activities-title {
                font-size: 1.8rem;
            }

            .rgu-interior-design-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-interior-design-grid {
                grid-template-columns: 1fr;
            }

            .rgu-interior-design-gallery {
                background-color: #fffbf6;
                padding: 30px 20px;
            }
        }
    </style>


    <section class="rgu-interior-design-body">
        <section class="rgu-interior-design-hero">
            <img src="/mobile-assets/laboratories/Cartography/Photo 3.jpeg" class="rgu-interior-design-hero-img" />

            <div class="rgu-interior-design-content">
                <h2 class="rgu-interior-design-title" style="font-size: 42px;">Cartography Lab</h2>

                <p class="rgu-interior-design-text">
                    The Cartography Lab is equipped with essential instruments and infrastructure required for teaching and
                    training in map-making, surveying, and spatial data representation. The laboratory enables students to
                    gain practical knowledge of cartographic techniques and field survey methods. The Department of
                    Geography provides students with hands-on experience and skills necessary for understanding spatial
                    patterns and conducting basic geographical research. The lab is located in Block- B, Room No- B 206-A on
                    the 2nd Floor.
                </p>


            </div>
        </section>
        <div>
            <div
                style="margin:auto;background:#ffffff;padding:30px;border-radius:12px;box-shadow:0 5px 20px rgba(0,0,0,0.08);font-family:'Segoe UI',sans-serif;">

                <div style="padding: 50px;">
                    <h3 style="color:#1a2b49;border-left:5px solid #e86020;padding-left:10px;margin-bottom:20px;">
                        Instruments Included in the Lab
                    </h3>

                    <ul style="padding-left:20px;margin:0;">
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Plane Table</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Prismatic Compass</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Dumpy Level</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Theodolite</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Rotameter</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Planimeter</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Global Positioning System (GPS)</li>
                        <li style="margin-bottom:8px;font-weight:500;color:#333;">Pocket Stereoscope</li>
                    </ul>

                    <h3 class="pb-3" style="color:#1a2b49;border-left:5px solid #e86020;padding-left:10px;margin:30px 0 20px;">
                        Application in Geographical Study
                    </h3>

                    <!-- Card 1 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Plane Table</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Used for direct field mapping and preparation of small-scale maps on-site.
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Prismatic Compass</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Helps in measuring bearings and directions for route surveys and mapping.
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Dumpy Level</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Used to determine elevation differences and prepare contour maps.
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Theodolite</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Measures horizontal and vertical angles for accurate surveying and mapping.
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Rotameter</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Measures flow rate of fluids, useful in basic environmental and hydrological studies.
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Planimeter</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Used to calculate area of irregular features on maps.
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Global Positioning System (GPS)</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Helps in collecting accurate location coordinates and spatial data.
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div
                        style="background:#f9fafc;padding:15px 20px;border-radius:8px;margin-bottom:12px;border-left:4px solid #e86020;">
                        <div style="font-weight:600;color:#e86020;margin-bottom:5px;">Pocket Stereoscope</div>
                        <div style="font-size:14px;color:#555;line-height:1.6;">
                            Used to view aerial photographs in 3D for terrain analysis and interpretation.
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <img src="/mobile-assets/laboratories/Cartography/photo 1.jpg"/>
        </div>
    </section>
@endsection

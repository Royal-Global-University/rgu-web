@extends('frontend.master')
@section('content')
    <div class="website">
        @include('frontend/components/aheader')
    </div>

    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 120px;"></div>
    </div>

    <header class="hero">
        <p style="text-transform: uppercase; letter-spacing: 2px; font-size: 1.4rem;">ICSSR Sponsored National Conference
        </p>
        <h1>SAMUNNATI 2026</h1>
        <p style="font-size: 1.4rem;">Accelerating SDG Impact Through Collaboration and Innovation in the Vision of Viksit
            Bharat @2047</p>
        <p style="font-size: 2.4rem;"><strong>7TH JANUARY 2026</strong></p>

        <div style="margin-top: 2rem; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 1rem;">
            <p style="font-size: 1.6rem;"><strong>Organised by:</strong> Royal School of Commerce, The Assam Royal Global
                University, Guwahati</p>
            <p style="font-size: 1.6rem;"><strong>In association with:</strong> IQAC, The Assam Royal Global University</p>
            <p style="font-size: 1.6rem;"><strong>Collaborating Partners:</strong> West Guwahati Commerce College &
                Datamation</p>
        </div>


        <div class="text-center" style="display: flex;">
            <div class="col-lg-5 m-2"><a href="https://rgu.renocampus.com/events/event/826a040a-d9ab-438f-8d13-d4c4d126f473" target="_blank"
            class="hero-btn" style="width: 100%; text-align: center; margin-bottom: 1rem;">
            Registration Form</a></div>
            <div class="col-lg-5 m-2"><a href="https://chat.whatsapp.com/KgmZkNFYpJzFFQHgoAPEoD" target="_blank" class="hero-btn" style="width: 100%; text-align: center; margin-bottom: 1rem;">WhatsApp
                    Group</a></div>



        </div>

    </header>

    <div class="container">

        <section id="about">
            <h2>About The Conference</h2>
            <p>Samunnati 2026 is envisioned as a national platform to accelerate India's progress toward the Sustainable
                Development Goals (SDGs) in alignment with the aspirational vision of Viksit Bharat@2047—a roadmap for
                India's
                transformation into a fully developed, inclusive, and resilient nation in the centenary year of
                independence.
            </p>
            <p>Anchored in the principles of collaboration, innovation, and equity, the conference seeks to catalyze
                transformative action across sectors through dialogue and partnership. By convening policymakers, industry
                leaders, academicians, development practitioners, and civil servants, the conference will explore
                integrative
                models that harness technological advancements, sustainable finance, and grassroot level innovation to
                fast-track development outcomes.</p>
            <p>The event aims to bridge the policy-implementation gap by promoting multi-stakeholder engagement,
                particularly
                in Public-Private Partnerships (PPPs), Corporate Social Responsibility (CSR), and community-driven
                approaches,
                all vital for localizing the SDGs. A key focus of Samunnati will be leveraging frontier technologies such as
                Artificial Intelligence, Big Data, blockchain, and digital platforms to democratize access, ensure
                transparency,
                and enable inclusive economic growth.</p>
            <p>These innovations will be examined through the lens of their role in bridging socio-economic disparities,
                enhancing digital public infrastructure, and empowering communities, particularly women, youth, and
                marginalized
                groups—a cornerstone of Viksit Bharat @2047. The conference will also spotlight sustainable finance and
                economic
                inclusion (SDGs 1, 3, 4, 5, 10, 16), with discussions on impact investing, ESG frameworks, microfinance, and
                social entrepreneurship.</p>
            <p>These themes underscore the urgency of mobilizing resources for equitable growth, self-reliance, and
                long-term
                prosperity, aligning closely with the Viksit Bharat vision of a self-sufficient, innovation-driven India. By
                championing collaborative action, community resilience, and digital transformation, Samunnati 2026 will
                contribute meaningfully to the realization of Viksit Bharat @2047, aiming to make development not only
                inclusive
                and participatory but also future-ready.</p>
        </section>

        <section id="objectives">
            <h2>Objectives of the Seminar</h2>
            <ul>
                <li>- To strengthen dialogue on SDG acceleration through partnerships.</li>
                <li>- To promote technology-driven models for sustainable development.</li>
                <li>- To examine sustainable finance and private sector contribution.</li>
                <li>- To facilitate knowledge exchange across sectors.</li>
            </ul>
        </section>

        <section id="themes">
            <h2>Sub Themes</h2>
            <div class="grid-container">
                <div class="card">
                    <h3>Strategic Partnerships and Inclusive Development</h3>
                    <ul>
                        <li>Multi Stakeholder Empowerment</li>
                        <li>Public Private Partnerships</li>
                        <li>CSR & International Bodies</li>
                        <li>Community Led Development</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Technology and Innovation</h3>
                    <ul>
                        <li>AI and Big Data</li>
                        <li>Digital Equity Solutions</li>
                        <li>Blockchain and Transparency</li>
                        <li>Smart Settlements</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Sustainable Finance</h3>
                    <ul>
                        <li>Impact Investing</li>
                        <li>Microfinance</li>
                        <li>ESG Strategy</li>
                        <li>Social Entrepreneurship</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="guidelines">
            <h2>Submission Guidelines</h2>

            <div class="grid-container">
                <div>
                    <h3>Guidelines For Abstract Submission</h3>
                    <ul>
                        <li><strong>Length:</strong> 250-300 words</li>
                        <li>Include 3-5 keywords</li>
                        <li><strong>Format:</strong> MS Word (.doc/.docx), Times New Roman, 12 pt, 1.5 spacing</li>
                        <li><strong>Submission Email:</strong> rscconference2023@rgu.ac </li>
                    </ul>
                </div>

                <div>
                    <h3>Guidelines For Full Paper Submission</h3>
                    <ul>
                        <li><strong>Length:</strong> 3,000-5,000 words</li>
                        <li><strong>Referencing:</strong> APA 7th Edition or Harvard</li>
                        <li><strong>Format:</strong> A4 size, Times New Roman 12 pt, 1.5 spacing, 1-inch margins</li>
                        <li><strong>Must include:</strong> Title, Author Details, Abstract, Keywords, Main Text, References
                        </li>
                        <li><strong>Originality Requirements:</strong> Papers must be original and unpublished. Similarity
                            Index
                            should be below 15% (excluding references).</li>
                    </ul>
                </div>
            </div>

            <div style="margin-top: 2rem;">
                <h3>Presentation Requirement</h3>
                <ul>
                    <li>At least one author must register and present the paper.</li>
                    <li>Presentation is mandatory for publication.</li>
                </ul>
            </div>

            <div style="background-color: #fce8e1; padding: 1.5rem; border-radius: 5px; margin-top: 2rem;">
                <h3 style="color: #EB6534; margin-top: 0;">Important Dates</h3>
                <ul>
                    <li><strong>Abstract Submission:</strong> 30th December, 2025</li>
                    <li><strong>Acceptance Notification:</strong> 2nd January, 2026</li>
                    <li><strong>Full Paper Submission:</strong> 5th January, 2026</li>
                    <li><strong>Registration Deadline:</strong> 5th January, 2026</li>
                    <li><strong>Conference Date:</strong> 7th January, 2026</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3 style="margin-top:0; font-size: 2.0rem;">Key Highlights</h3>
                <ul>
                    <li style="color: #f0f0f0">Publication opportunities in Scopus Indexed Journals (As per Journal Article
                        Processing Charges).
                    </li>
                    <li style="color: #f0f0f0">Selected papers will be included in an Edited Book with ISBN (chargeable).
                    </li>
                    <li style="color: #f0f0f0">Cash Prizes for Best Paper Awards.</li>
                    <li style="color: #f0f0f0">Networking opportunities with policymakers, industry leaders, and academic
                        experts.</li>
                    <li style="color: #f0f0f0">Certificate of Participation / Presentation for all. [cite: 90]</li>
                </ul>
            </div>
        </section>

        <section id="committee">
            <h2>Committee Members</h2>
            <div class="committee-grid" style="text-align: left">
                <div class="contact-box rounded" style="background-color: #fce8e1;">
                    <h4>Chairperson</h4>
                    <p><strong>Prof. (Dr.) George A. P.</strong><br>Dean, Royal School of Business & Royal School of
                        Commerce</p>
                </div>
                <div class="contact-box rounded" style="background-color: #fce8e1;">
                    <h4>Advisor</h4>
                    <p><strong>Prof. (Dr.) Sudip Chakraborty</strong><br>Deputy Dean i/c, Royal School of Commerce</p>
                </div>
                <div class="contact-box rounded" style="background-color: #fce8e1;">
                    <h4>Convenor</h4>
                    <p><strong>Dr. Aruna Dev Rroy</strong><br>Head and Associate Professor, Royal School of Commerce</p>
                </div>
                <div class="contact-box rounded" style="background-color: #fce8e1;">
                    <h4>Co-Convenor</h4>
                    <p><strong>Dr. Niva Kalita</strong><br>Assistant Professor, Royal School of Commerce</p>
                </div>
            </div>

            <h3 class="mb-4" style="font-size: 2.2rem;">Members</h3>
            <ul
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr)); gap: 1rem; list-style: none; padding-left: 0; margin-left: 0;">
                <li style="background: #fce8e1; padding: 0.5rem;">Prof. (Dr.) P.K. Jain</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Dr. Rajdeep Nag</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Dr. Rituparna Baruah</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Dr. Padum Chetry</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Mr. Rikh Roy</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Roshni Agarwal</li>

                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Baishali Pathak</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Ritishna Sarma</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Jimpy Saud</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Ananya Banik</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Prachi Khetan</li>
                <li style="background: #fce8e1; padding: 0.5rem;">Ms. Richika Kedia</li>
            </ul>
        </section>

        <section id="agenda">
            <h2>Agenda</h2>
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Start Time</th>
                            <th>Event</th>
                            <th>End Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>9:30 am</td>
                            <td>Registration</td>
                            <td>10:00 am</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10:00 am</td>
                            <td>Inaugural Session</td>
                            <td>10:30 am</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>10:30 am</td>
                            <td>Panel Discussion</td>
                            <td>11:30 am</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>12:00 pm</td>
                            <td>Parallel Technical Sessions (1 & 2)</td>
                            <td>1:30 pm</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1:30 pm</td>
                            <td>Lunch</td>
                            <td>2:30 pm</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2:30 pm</td>
                            <td>Parallel Technical Sessions (3 & 4)</td>
                            <td>4:00 pm</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>4:00 pm</td>
                            <td>Valedictory Session</td>
                            <td>4:30 pm</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>4:30 pm</td>
                            <td>Tea-End of Day</td>
                            <td>5:00 pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="registration" style="border-bottom: none;">
            <div class="grid-container">
                <div>
                    <h2>Registration Details</h2>
                    <h3>Registration Fees</h3>
                    <ul>
                        <li><strong>Students:</strong> ₹700</li>
                        <li><strong>Academicians & Research Scholars:</strong> ₹1,000</li>
                        <li><strong>Industry Professionals:</strong> ₹1,500</li>
                    </ul>
                    <p><em>Accommodation: Extra (first come, first serve)</em></p>
                    <p><em>ISBN Publication Fee: As applicable.</em></p>

                    <a href="https://rgu.renocampus.com/events/event/826a040a-d9ab-438f-8d13-d4c4d126f473" target="_blank"
                        class="hero-btn" style="width: 100%; text-align: center; margin-bottom: 1rem;">Click
                        Here
                        for Registration Form</a>

                    <p><strong>Link For Joining WhatsApp Group:</strong><br><a
                            href="https://chat.whatsapp.com/KgmZkNFYpJzFFQHgOAPEOD">Click here to join</a></p>

                    <div style="background: #eee; padding: 1rem; text-align: center; margin-top: 1rem;">
                        <strong>PAYMENT QR CODE</strong><br>
                        <img src="mobile-assets/icssr-conference/qr.jpg" alt="">
                    </div>
                </div>

                <div>
                    <h2>Contact Details</h2>
                    <p><strong>Email:</strong> rscconference2023@rgu.ac</p>
                    <p><strong>Phone:</strong> +91 9508767817 / 8254968864</p>

                    <h3>Venue</h3>
                    <p>The Assam Royal Global University Campus,<br>Guwahati-781035, Assam</p>
                </div>
            </div>
        </section>

    </div>

    <!-- copy this css  -->
    <style>
        /* --- Reset & Base Styles --- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #ffffff;
            color: #2C3557;
            /* Secondary Color */
            line-height: 1.6;
            font-size: 1rem;
        }

        /* --- Layout Utilities --- */
        .container {
            width: 90%;
            max-width: 75rem;
            margin: 0 auto;
            padding: 2rem 0;
        }

        section {
            padding: 3rem 0;
            border-bottom: 0.0625rem solid #eee;
        }

        /* --- Typography --- */
        h1,
        h2 {
            color: #EB6534;
            /* Primary Color */
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        h1 {
            font-size: 2.8rem;
            font-weight: 700;
        }

        h2 {
            font-size: 2.4rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
            border-bottom: 2px solid #EB6534;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        h3 {
            font-size: 1.3rem;
            color: #2C3557;
            /* Secondary Color */
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        h4 {
            font-size: 1.5rem;
            color: #EB6534;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        p {
            margin-bottom: 1rem;
            text-align: justify;
            font-size: 1.4rem;
            color: black;
        }

        ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
            color: black;
        }

        a {
            color: #EB6534;
            /* Primary Color */
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        /* --- Hero Section --- */
        header.hero {
            background-color: #2C3557;
            /* Secondary Color */
            color: #ffffff;
            text-align: center;
            /* Placeholder for Hero Image - keeping space as requested */
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem 1rem;
            background-image: linear-gradient(rgba(44, 53, 87, 0.586), rgba(44, 53, 87, 0.609)), url(mobile-assets/icssr-conference/hero-bg.png);
        }

        header.hero h1 {
            color: #ffffff;
            margin-bottom: 1rem;
        }

        header.hero p {
            font-size: 1.2rem;
            max-width: 60rem;
            color: #f0f0f0;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .hero-btn {
            background-color: #EB6534;
            /* Primary Color */
            color: #ffffff;
            padding: 1rem 2.5rem;
            border-radius: 0.3rem;
            margin: 2rem;
            display: inline-block;
            font-size: 1.2rem;
            border: 2px solid #EB6534;
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            background-color: transparent;
            color: #EB6534;
            /* Primary Color */
            text-decoration: none;
        }

        /* --- Tables --- */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            text-align: left;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
            font-size: 1.3rem;
        }

        th {
            background-color: #2C3557;
            /* Secondary Color */
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* --- Grid Layouts --- */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            gap: 2rem;
        }

        .card {
            background: #f8f9fa;
            /* Light Gray */
            padding: 1.5rem;
            border-left: 5px solid #EB6534;
            /* Primary Color */
            border-radius: 4px;
        }

        .committee-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
            gap: 1.5rem;
        }

        .contact-box {
            background: #fff;
            border: 1px solid #ddd;
            padding: 1rem;
        }

        /* --- Highlights Box --- */
        .highlight-box {
            background-color: #2C3557;
            color: #fff;
            padding: 2rem;
            margin-top: 2rem;
            border-radius: 5px;
        }

        .highlight-box h3,
        .highlight-box h4 {
            color: #EB6534;
        }

        /* --- Mobile Tweaks --- */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            header.hero {
                min-height: auto;
                padding: 4rem 1rem;
            }

            .hero-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
    <!-- copy this css  -->
@endsection

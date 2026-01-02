@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/programme-details/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div class="container" style="padding-top: 120px; position: relative;">

                <h2 class="mobile-headd1 fw-bold text-center pt-2" style="color: #27467A; font-weight: 900;">
                    Master of Design - Fashion Design
                </h2>

            </div>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Duration - 02 years
            </p>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Royal School of Design (RSD)
            </p>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center pt-5" style="color: #27467A; font-weight: 900;">
                    Master of Design - Fashion Design
                </h2>

            </div>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Duration - 02 years
            </p>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Royal School of Design (RSD)
            </p>

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

            <style>
                /* --- CSS MODIFICATION #1 --- */
                .section-body {

                    margin: 0;
                    padding: 20px;
                    display: flex;
                    justify-content: center;
                    min-height: 50vh;

                    /* This fixes the "jumping" by aligning the box to the top */
                    align-items: flex-start;
                }

                .tabs-container {
                    width: 100%;
                    max-width: 1300px;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .tab-buttons {
                    display: flex;
                    background-color: #f1f1f1;
                    border-bottom: 2px solid #ddd;
                }

                .tab-button {
                    flex: 1;
                    padding: 15px 10px;
                    cursor: pointer;
                    border: none;
                    outline: none;
                    background-color: transparent;
                    font-size: 16px;
                    font-weight: 600;
                    text-align: center;
                    transition: background-color 0.3s, color 0.3s;
                    border-bottom: 3px solid transparent;
                }

                .tab-button:hover {
                    background-color: #e7e7e7;
                }

                .tab-button.active {
                    color: #007BFF;
                    border-bottom-color: #007BFF;
                }

                /* --- CSS MODIFICATION #2 --- */
                /* We are now animating max-height instead of using display */
                .tab-content {
                    /* display: none; */
                    /* REMOVED */
                    padding: 0 25px;
                    /* Padding will be applied, but 0 top/bottom for collapse */
                    line-height: 1.6;

                    /* Animation properties */
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.4s ease-out, padding 0.4s ease-out;
                }

                .tab-content.active {
                    /* display: block; */
                    /* REMOVED */

                    /* We set padding here so it animates in with the height */
                    padding: 25px;

                    /* max-height will be set by JavaScript */
                }

                .tab-content h3 {
                    margin-top: 0;
                    color: #333;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                @media (max-width: 600px) {
                    .tab-buttons {
                        flex-direction: column;
                    }

                    .tab-button {
                        border-bottom: 1px solid #ddd;
                    }

                    .tab-button.active {
                        border-bottom: 3px solid #007BFF;
                    }
                }
            </style>

            <div class="section-body">
                <div class="tabs-container">
                    <div class="tab-buttons mobile-headd3">
                        <button class="tab-button active" data-tab="fee">Fee</button>
                        <button class="tab-button" data-tab="eligibility">Eligibility</button>
                        <button class="tab-button" data-tab="selection">Selection</button>
                        <button class="tab-button" data-tab="brochure">Brochure</button>
                        <button class="tab-button" data-tab="scholarship">Scholarship</button>
                        <button class="tab-button" data-tab="apply">How to Apply</button>
                    </div>

                    <div id="fee" class="tab-content active mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            A.) Registration & Admission Fees (To Be Paid Once Only)
                        </h2>

                        <p class="mobile-para1 text-dark">
                        <ol class="text-dark">
                            <li>
                                Prospectus & Form - 1500.00
                            </li>
                            <li>
                                Registration (To be paid during the admission for all courses) - 10000.00
                            </li>
                            <li>
                                Admission Fee - 60000.00
                            </li>
                            <li>
                                Caution Money (Common for all streams) - Refundable 10000.00
                            </li>
                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            B.) Programmes fee to be paid yearly/ semester payment for New Students 2026-27
                        </h2>

                        <p class="mobile-para1 text-dark">
                        <ol class="text-dark">
                            <li>
                                Yearly Payment (Rs. - 85000.00)
                            </li>
                            <li>
                                Semester Payment (Rs. - 43500.00)
                            </li>
                        </ol>
                        </p>


                    </div>

                    <div id="eligibility" class="tab-content mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Eligibility Criteria
                        </h2>

                        <p class="mobile-para1 text-dark">

                        <p class="fw-bold text-dark">Option A (For Design Background):</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Bachelor's degree in Fashion Design/ Textile Design/ Apparel Design/ Accessory Design or
                                equivalent
                            </li>
                            <li>Minimum 55% aggregate marks or equivalent CGPA from recognized university/institution</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Option B (For Non-Design Background If we consider):</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Bachelor's degree in ANY discipline</li>
                            <li>Minimum 60% aggregate marks or equivalent CGPA</li>
                            <li>PLUS Certificate Course in Basic Design/Drawing (minimum 6 months) OR</li>
                            <li>Demonstrated creative work/portfolio</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Age Limit</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Maximum age: 26 years as on 1st July of admission year</li>
                            <li>Relaxation: 3 years for OBC (Non-Creamy Layer), 5 years for SC/ST candidates, 5 years for
                                PwD
                                candidates</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Additional Requirements:</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Portfolio Submission: Mandatory for all candidates</li>
                            <li>Statement of Purpose: 500–800 words explaining interest in fashion design</li>
                            <li>Letters of Recommendation: Two (preferably one academic, one professional)</li>
                            <li>Work Experience: Not mandatory but preferred (minimum 1 year in a related field)</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Reservation Policy:</p>

                        <p class="text-dark">
                        <p class="text-dark">As per Government of India norms</p>
                        <ol class="text-dark">
                            <li>SC: 15%</li>
                            <li>ST: 7.5%</li>
                            <li>OBC (Non-Creamy Layer): 27%</li>
                        </ol>
                        </p>


                        </p>

                    </div>

                    <div id="selection" class="tab-content mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Selection Process
                        </h2>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Stage 1: Application Screening
                        </h2>

                        <p class="fw-bold text-dark">Documents Required:</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Completed application form</li>
                            <li>Scanned copies of:
                                <ul>
                                    <li>a.) 10th, 12th, and Graduation mark sheets</li>
                                    <li>b.) Degree certificate</li>
                                    <li>c.) Category certificate (if applicable)</li>
                                    <li>d.) Photo ID proof</li>
                                </ul>
                            </li>
                            <li>Digital portfolio (PDF format, max 10MB)</li>
                            <li>Statement of Purpose</li>
                            <li>Two letters of recommendation</li>
                            <li>Work experience certificate (if applicable)</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Screening Criteria:</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Academic performance: 20%</li>
                            <li>Portfolio quality: 40%</li>
                            <li>SOP relevance: 20%</li>
                            <li>Recommendations: 10%</li>
                            <li>Work experience: 10%</li>
                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Stage 2: Design Aptitude Test (DAT)
                        </h2>

                        <p class="text-dark">Format: Offline/ Online</p>

                        <p class="fw-bold text-dark">Part A: Creative Thinking </p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Visual perception test</li>
                            <li>Design problem solving</li>
                            <li>Innovation and ideation exercises</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Part B: Technical Knowledge </p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Basic fashion terminology</li>
                            <li>Material knowledge</li>
                            <li>Sustainability concepts</li>
                            <li>Fashion history awareness</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Part C: Research & Analysis </p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Case study analysis</li>
                            <li>Trend interpretation</li>
                            <li>Market understanding</li>
                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Stage 3: Studio Practical Test
                        </h2>

                        <p class="fw-bold text-dark">Task 1: Material Exploration </p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Case study analysis</li>
                            <li>Trend interpretation</li>
                            <li>Market understanding</li>
                        </ol>
                        </p>

                        <p class="fw-bold text-dark">Task 2: 3D Form Development </p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Create a wearable art piece using provided materials</li>
                            <li>Focus on structure, form, and innovation</li>
                            <li>Present to panel</li>
                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Stage 4: Portfolio Presentation & Interview
                        </h2>

                        <p class="text-dark">Duration: 30 minutes per candidate</p>


                        <p class="fw-bold text-dark">Portfolio Requirements:</p>

                        <p class="text-dark">Format: Physical portfolio (A3 size) + Digital backup</p>

                        <p class="fw-bold text-dark">Content:</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>8–12 best projects</li>
                            <li>Process documentation for each project</li>
                            <li>Research and development work</li>
                            <li>Technical drawings</li>
                            <li>Photographs of finished work</li>
                            <li>Any published work/articles</li>
                        </ol>
                        </p>

                        <p class="text-dark">Presentation: 10-minute presentation by candidate</p>

                        <p class="fw-bold text-dark">Interview Structure:</p>

                        <p class="text-dark">1. Portfolio Discussion (10 minutes)</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Questions on projects</li>
                            <li>Understanding of process</li>
                            <li>Design thinking demonstration</li>
                        </ol>
                        </p>

                        <p class="text-dark">2. Motivation & Goals (10 minutes)</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Why M.Des in Fashion?</li>
                            <li>Career aspirations</li>
                            <li>Interest in specific fashion areas</li>
                        </ol>
                        </p>

                        <p class="text-dark">3. Situational Questions (10 minutes)</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Ethical dilemmas in fashion</li>
                            <li>Sustainability challenges</li>
                            <li>Future of fashion industry</li>
                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Stage 5: Final Selection
                        </h2>

                        <p class="text-dark">Weightage Distribution:</p>

                        <div class="table-responsive">
                            <table class="table table-bordered align-middle shadow-sm">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr>
                                        <th>Component</th>
                                        <th>Weightage</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Academic Record</strong></td>
                                        <td>15%</td>
                                        <td>Performance in qualifying degree</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Design Aptitude Test</strong></td>
                                        <td>25%</td>
                                        <td>Scores in written test</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Studio Practical Test</strong></td>
                                        <td>25%</td>
                                        <td>Performance in hands-on tasks</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Portfolio Review</strong></td>
                                        <td>20%</td>
                                        <td>Quality and relevance of portfolio</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Personal Interview</strong></td>
                                        <td>15%</td>
                                        <td>Communication, motivation, clarity</td>
                                    </tr>
                                    <tr class="table-light">
                                        <td><strong>Total</strong></td>
                                        <td><strong>100%</strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="fw-bold text-dark">Additional Points:</p>

                        <p class="text-dark">
                        <ol class="text-dark">
                            <li>Work experience: +5% (maximum)</li>
                            <li>Publication/Exhibition: +3% (maximum)</li>
                            <li>Awards/Recognition: +2% (maximum)</li>
                        </ol>
                        </p>

                        </p>

                    </div>

                    <div id="brochure" class="tab-content mobile-para1">

                        <div
                            style="padding: 15px 20px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                            <img src="mobile-assets/programme-details/brochurethumb.png" alt="">

                            <a target="_blank" class="text-danger fw-bold mobile-headd3 pt-2"
                                href="https://www.rgu.ac/mobile-assets/Domestic/Bachelor_Design(Fashion_Design)(B.Des.FD).pdf">Download
                                Brochure
                                <i class="fa-solid fa-file-pdf" style="color: #e66363;"></i> </a>
                        </div>


                    </div>

                    <div id="scholarship" class="tab-content mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Scholarships
                        </h2>

                        <p class="mobile-para1 text-dark">
                        <ol class="text-dark">
                            <li>
                                Royal Global University offers several scholarships to help students pay for their
                                education.
                            </li>

                            <li>
                                Generally, merit scholarships are reserved for students with special qualifications, such as
                                academic
                                performance, athletic or artistic talent and other endowment schemes.
                            </li>

                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Application Process
                        </h2>

                        <p class="mobile-para1 text-dark">
                        <ol class="text-dark">

                            <li>
                                Students seeking Scholarships will have to submit an application as per the category for
                                which the
                                student seeks scholarship.
                            </li>

                            <li>
                                For fresh students seeking admission, if interested for applying scholarship can select the
                                scholarship
                                facility during the online application process.
                            </li>

                            <li>
                                Existing students can seek help from their departmental coordinators to keep themselves
                                updated for the
                                scholarship application deadlines and process.
                            </li>

                        </ol>
                        </p>

                        <h2 class="mobile-headd3 fw-bold mb-3" style="color: #27467A;">
                            For More Details
                        </h2>

                        <a class="mobile-para1 fw-bold"
                            style="padding: 10px 15px; background-color: #FF9A1E; color: #fff; border-radius: 10px;"
                            href="https://www.rgu.ac/scholarship&funding">
                            Click to View
                        </a>

                    </div>

                    <div id="apply" class="tab-content mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            How to Apply
                        </h2>

                        <p class="mobile-para1 text-dark">
                            Admission to Royal Global University is highly competitive. You need to meet both admissions &
                            subject
                            requirements before we make an unconditional offer of admission. At RGU you will learn from
                            outstanding
                            teachers, access groundbreaking research and state-of-the-art facilities, and make invaluable
                            contacts and
                            lifelong friends.
                        </p>

                        <a target="_blank" class="mobile-headd3 fw-bold" style="color: #FF9A1E;"
                            href="https://www.rgu.ac/how-to-apply">For more details, click to view</a>


                        <div
                            style="padding: 15px 40px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; margin-top: 20px;">

                            <h2 class="mobile-headd1 fw-bold mt-3 text-center" style="color: #27467A;">
                                FULLY ONLINE ADMISSION PROCESS
                            </h2>

                            <script src="https://cdn.tailwindcss.com"></script>
                            <style>
                                /* 1. Define the keyframes for our unique animation.
          This animation pulses the button's scale and its box-shadow.
        */
                                @keyframes uniquePulseAnimation {
                                    0% {
                                        transform: scale(1);
                                        /* The shadow color (rgba(255, 154, 30, ...)) matches the button's background-color (#FF9A1E) */
                                        box-shadow: 0 0 0 0 rgba(255, 154, 30, 0.7);
                                    }

                                    70% {
                                        transform: scale(1.05);
                                        /* The shadow expands and fades out */
                                        box-shadow: 0 0 0 15px rgba(255, 154, 30, 0);
                                    }

                                    100% {
                                        transform: scale(1);
                                        box-shadow: 0 0 0 0 rgba(255, 154, 30, 0);
                                    }
                                }

                                /* 2. Create our unique button class.
        */
                                .animated-pulse-button {
                                    /* We moved your inline styles here for cleaner HTML */
                                    padding: 15px 40px;
                                    background-color: #FF9A1E;
                                    color: #fff !important;
                                    /* Use !important to ensure it overrides any conflicting styles */
                                    border-radius: 10px;
                                    font-size: 20px;

                                    /* Base styles needed for the animation and link appearance */
                                    display: inline-block;
                                    /* Allows transform to work */
                                    transform: scale(1);
                                    text-decoration: none;

                                    /* 3. Apply the animation!
             - 'uniquePulseAnimation' is the animation name
             - '2s' is the duration (2 seconds)
             - 'infinite' makes it loop forever
          */
                                    animation: uniquePulseAnimation 2s infinite;

                                    /* Add a smooth transition for the hover effect */
                                    transition: transform 0.3s ease, background-color 0.3s ease;
                                }

                                /* 4. (Optional) Add a nice hover effect.
          This will pause the animation and just show the "up" state.
        */
                                .animated-pulse-button:hover {
                                    animation-play-state: paused;
                                    /* Pause the pulse on hover */
                                    transform: scale(1.05);
                                    /* Keep it in the larger state */
                                    background-color: #e68a1a;
                                    /* Darken the button color slightly */
                                }
                            </style>

                            <!-- I've added a container to center your button for a nice preview -->
                            <div class="min-h-screen flex items-center justify-center">

                                <!-- This is your original div -->
                                <div class="mt-4 text-center">

                                    <!--
            This is your modified <a> tag.
            - The inline 'style' attribute has been removed.
            - The new 'animated-pulse-button' class has been added.
            - Your original classes 'mobile-para1' and 'fw-bold' are kept.
          -->
                                    <a class="mobile-para1 fw-bold animated-pulse-button"
                                        href="https://admissions.rgu.ac/">
                                        Apply Now
                                    </a>

                                </div>

                            </div>

                        </div>






                    </div>

                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const tabButtons = document.querySelectorAll('.tab-button');
                    const tabContents = document.querySelectorAll('.tab-content');

                    // Function to set the height of the active tab
                    function setActiveTab(targetTab) {
                        tabContents.forEach(content => {
                            const contentId = content.getAttribute('id');

                            if (contentId === targetTab) {
                                // This is the tab we want to show
                                content.classList.add('active');
                                // Set max-height to its actual content height
                                content.style.maxHeight = content.scrollHeight + 'px';
                            } else {
                                // This is an inactive tab
                                content.classList.remove('active');
                                // Collapse it
                                content.style.maxHeight = '0px';
                            }
                        });
                    }

                    tabButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const targetTab = button.getAttribute('data-tab');

                            // Update active button
                            tabButtons.forEach(btn => btn.classList.remove('active'));
                            button.classList.add('active');

                            // Update active content and animate height
                            setActiveTab(targetTab);
                        });
                    });

                    // Set the height of the initially active tab on page load
                    const initialActiveTab = document.querySelector('.tab-button.active');
                    if (initialActiveTab) {
                        setActiveTab(initialActiveTab.getAttribute('data-tab'));
                    }

                    // --- NEW MODIFICATION: Auto-update height on content change ---

                    // Create a ResizeObserver to watch for content size changes
                    const observer = new ResizeObserver(entries => {
                        for (let entry of entries) {
                            // The 'entry.target' is the tab-content element
                            const content = entry.target;

                            // Check if this content is currently active
                            if (content.classList.contains('active')) {
                                // If it is active, recalculate its max-height to fit the new content
                                content.style.maxHeight = content.scrollHeight + 'px';
                            }
                        }
                    });

                    // Tell the observer to watch all tab content panels
                    tabContents.forEach(content => {
                        observer.observe(content);
                    });

                });
            </script>

        </div>

    </div>
@endsection

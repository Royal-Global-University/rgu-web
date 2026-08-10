@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/programme-details/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 120px; position: relative;"></div>
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center pt-2" style="color: #27467A; font-weight: 900;">
                    Bachelor in Clinical Psychology (B.Clin.Psy.)
                </h2>

            </div>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Duration - 04 years
            </p>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Royal School of Behavioral & Allied Sciences (RSBAS)
            </p>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center pt-5" style="color: #27467A; font-weight: 900;">
                    Bachelor in Clinical Psychology (B.Clin.Psy.)
                </h2>

            </div>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Duration - 04 years
            </p>

            <p class="mobile-headd1 text-center" style="color: #24477f;">
                Royal School of Behavioral & Allied Sciences (RSBAS)
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
                                Yearly Payment (Rs. - 1,70,000.00)
                            </li>
                            <li>
                                Semester Payment (Rs. - 87,000.00)
                            </li>
                        </ol>
                        </p>


                    </div>

                    <div id="eligibility" class="tab-content mobile-para1">

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Eligibility Criteria
                        </h2>

                        <p class="mobile-para1 text-dark">

                        <p class="text-dark">

                            10+2 in Science Stream or equivalent from a
                            recognized Board/ Council with minimum 45%
                            marks or equivalent grade (5% relaxation to
                            SC/ST/OBC – Non-Creamy Layer).

                        </p>

                        <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                            Selection Process
                        </h2>

                        <p class="text-dark">

                            An entrance test conducted
                            by Royal Global University
                            followed by and Personal
                            Interview

                        </p>

                        <!-- <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">OR</h2>

                    <p class="text-dark">

                      10+3 - Years Diploma, recognized by Central/State Government with minimum 45% marks or equivalent grade in
                      aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer) along with Mathematics as compulsory subjects.

                    </p> -->

                        </p>

                    </div>

                    <div id="brochure" class="tab-content mobile-para1">

                        <div
                            style="padding: 15px 20px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                            <img src="mobile-assets/programme-details/brochurethumb.png" alt="">

                            <a target="_blank" class="text-danger fw-bold mobile-headd3 pt-2"
                                href="/mobile-assets/Domestic/BA-Applied-Psychology.pdf">Download Brochure
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
                            href="/scholarship&funding">
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

                        <a target="_blank" class="mobile-headd3 fw-bold" style="color: #FF9A1E;" href="/how-to-apply">For
                            more details, click to view</a>


                        <div
                            style="padding: 15px 40px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; margin-top: 20px;">

                            <h2 class="mobile-headd1 fw-bold mt-3 text-center" style="color: #27467A;">
                                FULLY ONLINE ADMISSION PROCESS
                            </h2>


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
                                    <a class="mobile-para1 fw-bold animated-pulse-button" href="https://admissions.rgu.ac/">
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

@extends('frontend.master')
@section('content')
    <div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(assets/img/all_lab/astronomy-lab/background.svg);"
                class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f481aaf" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                        data-id="968af55" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                <div class="elementor-widget-container">
                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                        <div style="border: 2px solid #fff;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                            <img decoding="async" src="assets/img/all_lab/astronomy-lab/headimg.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b49111"
                        data-id="9b49111" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                <div class="elementor-widget-container">
                                    <div class="prthalign">
                                        <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                            The Royal Astronomical Observatory
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            The Royal Astronomical Observatory at The Assam Royal Global University stands as a
                                            gateway to the
                                            cosmos, inviting students, researchers, and enthusiasts to explore the wonders of
                                            the universe. Officially
                                            inaugurated on 19th November 2024 by Prof. Madhurjya P. Bora, Coordinator of ISRO
                                            RAC-S,
                                            Gauhati University, the observatory is a beacon of scientific curiosity and
                                            innovation in the region. It
                                            symbolises the university’s commitment to advancing astronomical education and
                                            research.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <div class="custom-container">
                <div class="custom-row">
                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">
                            Observatory Dome</h2>
                        <hr>
                        <dl class="pt-2">
                            <dt class="para1 text-dark">Diameter:</dt>
                            <dd class="para1 text-dark">3 metres</dd>
                            <dt class="para1 text-dark">Height:</dt>
                            <dd class="para1 text-dark">3.2 metres</dd>
                            <dt class="para1 text-dark">Material:</dt>
                            <dd class="para1 text-dark">Composite FRP for durability and lightweight design</dd>
                            <dt class="para1 text-dark">Special Features:</dt>
                            <dd class="para1 text-dark">
                                <ol>
                                    <li class="para1 text-dark">Modular construction with 36-wheel assembly</li>
                                    <li class="para1 text-dark">A shutter window for zenith viewing</li>
                                    <li class="para1 text-dark">Overlap design to prevent light leaks</li>
                                </ol>
                            </dd>
                            <dt class="para1 text-dark">Manufacturer:</dt>
                            <dd class="para1 text-dark">Vorion Scientific Pvt. Ltd., Ahmedabad, Gujarat</dd>
                        </dl>
                    </div>
                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Telescopes
                        </h2>
                        <hr>
                        <dl class="pt-2">
                            <dt class="para1 text-dark">4-inch Celestron Inspire Refractor Telescope:</dt>
                            <dd class="para1 text-dark">Ideal for wide-field views and beginner astrophotography</dd>
                            <dt class="para1 text-dark">8-inch GSO Dobsonian Telescope:</dt>
                            <dd class="para1 text-dark">Perfect for observing faint deep-sky objects like nebulae and galaxies
                            </dd>
                            <dt class="para1 text-dark">8-inch Newtonian Telescope OTA with EXOS-II Computerised Equatorial
                                Mount and PMC-8 Controller:</dt>
                            <dd class="para1 text-dark">Designed for precision tracking and advanced astrophotography</dd>
                        </dl>
                    </div>
                    <div class="custom-column">
                        <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">
                            Astrophotography Facilities</h2>
                        <hr>
                        <dl class="pt-2">
                            <dt class="para1 text-dark">Description:</dt>
                            <dd class="para1 text-dark">The observatory is equipped with advanced tools and mounts to capture
                                stunning celestial images, inspiring both amateur and professional astrophotographers</dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div style="padding: 30px 50px;">
                <h2 class="headd3 fw-bold text-dark">Educational and Research Significance</h2>

                <p class="text-dark para1" style="text-align: justify;">
                    The Royal Astronomical Observatory at The Assam Royal Global University stands as a gateway to the
                    cosmos, inviting students, researchers, and enthusiasts to explore the wonders of the universe. Officially
                    inaugurated on 19th November 2024 by Prof. Madhurjya P. Bora, Coordinator of ISRO RAC-S,
                    Gauhati University, the observatory is a beacon of scientific curiosity and innovation in the region. It
                    symbolises the university’s commitment to advancing astronomical education and research.
                </p>
                <dl class="ol text-dark para1">
                    <dt>Hands-On Learning Opportunities:</dt>
                    <dd>
                        <ol>
                            <li>Students gain practical experience in telescope operations, celestial navigation, and data
                                collection.</li>
                            <li>Workshops and observation sessions allow participants to delve deeper into the mysteries of the
                                universe.</li>
                        </ol>
                    </dd>

                    <dt>Research Potential:</dt>
                    <dd>
                        <ol>
                            <li>Faculty and students are encouraged to develop research proposals, particularly in collaboration
                                with ISRO RAC-S, Gauhati University.</li>
                        </ol>
                    </dd>

                    <dt>Astronomy Club:</dt>
                    <dd>
                        <ol>
                            <li>The newly formed Astronomy Club under the observatory aims to nurture young minds with a passion
                                for stargazing and astrophysics.</li>
                            <li>Regular events and discussions will inspire students to think beyond the confines of Earth.</li>
                        </ol>
                    </dd>
                </dl>

                <h2 class="headd3 fw-bold text-dark pt-3">Inaugural Event Highlights</h2>

                <p class="text-dark para1" style="text-align: justify;">
                    The observatory was inaugurated with a grand ceremony that included a special lecture on “The Vastness
                    of the Cosmos” by Prof. Bora. The event attracted over 250 attendees, including university dignitaries,
                    faculty, and students. Prof. Bora shared captivating insights into the scale of the universe and discussed
                    how observatories like this can serve as hubs for educational outreach and groundbreaking research.
                </p>

                <img src="assets/img/all_lab/astronomy-lab/gallery2.svg" alt="">

                <p class="text-dark para1" style="text-align: justify;">
                    The chief guest also appreciated the quality and versatility of the equipment, expressing his optimism for
                    the observatory’s role in fostering a deeper understanding of astronomy in Northeast India.
                </p>


                <h2 class="headd3 fw-bold text-danger pt-2">What Awaits You</h2>

                <p class="para1 fw-bold text-dark">The Royal Astronomical Observatory opens up a world of possibilities:</p>

                <ol class="text-dark para1">
                    <li>Observe breathtaking celestial phenomena such as planetary transits, meteor showers, and lunar eclipses.
                    </li>
                    <li>Participate in astrophotography sessions to capture the beauty of the night sky.</li>
                    <li>Attend engaging workshops, star parties, and lectures by renowned astronomers.</li>
                    <li>Collaborate on research projects and contribute to the growing body of astronomical knowledge.</li>
                </ol>

                <p class="para1 fw-bold text-dark">Vision for the Future</p>

                <p class="para1 fw-bold text-dark">The observatory’s vision extends beyond the confines of the university:
                </p>

                <ol class="text-dark para1">

                    <li><span class="fw-bold">Community Engagement:</span> Outreach programmes will engage local schools and
                        communities, sparking an interest in astronomy among young learners.</li>
                    <li><span class="fw-bold">Collaborative Initiatives:</span> Partnerships with other institutions and
                        organisations will pave the way for advanced research and knowledge exchange.</li>
                    <li><span class="fw-bold">Innovation in Education:</span> With the observatory as a centrepiece, the
                        university aims to introduce new courses and certifications in astronomy and space sciences.</li>

                </ol>

                <p class="para1 fw-bold text-dark">Visit the Observatory
                </p>

                <p class="para1 text-dark">Experience the universe like never before at The Royal Astronomical Observatory.
                    Whether you’re a student, researcher, or a curious observer, the observatory offers a unique opportunity to
                    connect with the stars. Step in, look up, and let the cosmos ignite your imagination!</p>
                <blockquote class="text-success text-center">“The cosmos is within us. We are made of star-stuff. We are a way
                    for the universe to know itself.” – Carl Sagan</blockquote>

            </div>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

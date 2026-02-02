@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <!-- floating mob button  -->
            <div>
                <a href="https://admissions.rgu.ac"
                    style="
                                                                                                            position: fixed;
                                                                                                            bottom: 25px;
                                                                                                            right: 75px;
                                                                                                            background-color: #ef991f;
                                                                                                            color: #fff;
                                                                                                            padding: 12px 20px;
                                                                                                            font-size: 16px;
                                                                                                            font-weight: bold;
                                                                                                            text-decoration: none;
                                                                                                            border-radius: 20px;
                                                                                                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                            z-index: 1000;
                                                                                                            overflow: hidden;
                                                                                                            animation: pulse 2s infinite;
                                                                                                            ">
                    <span
                        style="
                                                                                                            position: absolute;
                                                                                                            top: 0;
                                                                                                            left: -75%;
                                                                                                            width: 50%;
                                                                                                            height: 100%;
                                                                                                            background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                            transform: skewX(-25deg);
                                                                                                            animation: shine 2s infinite;
                                                                                                            "></span>
                    Admission Open - Apply Now
                </a>
                <style>
                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }

                        50% {
                            transform: scale(1.05);
                            box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                        }

                        100% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }
                    }

                    @keyframes shine {
                        0% {
                            left: -75%;
                        }

                        100% {
                            left: 125%;
                        }
                    }
                </style>
            </div>
            <!-- floating button  -->
            <!-- till about dept  -->
            <section style="padding-top: 130px; position: relative;">

                <img src="mobile-assets/phar/mobile-pharmacy-final-final.png" alt="">


            </section>
            <!-- till about dept  -->

            <!-- courses offered  -->
            <div class="container">
                <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                    <!-- Heading Section -->
                    <div
                        style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                        <span style="font-size:18px;">B.Pharm</span>
                        <span
                            style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                    </div>

                    <!-- Statute Items -->
                    <a target="_blank" href="programs-b-pharm" style="text-decoration:none;">
                        <div
                            style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                            <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4 years</span>
                            <span>
                                <a class="para1 fw-bold"
                                    style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                    href="programs-b-pharm">View Details</a>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
            <!-- courses offered  -->

            <script>
                const mobAccPairs = [{
                        btn: 'mobAccBtn1',
                        panel: 'mobAccPanel1'
                    },
                    {
                        btn: 'mobAccBtn2',
                        panel: 'mobAccPanel2'
                    },
                    {
                        btn: 'mobAccBtn3',
                        panel: 'mobAccPanel3'
                    },
                ];

                function closeAllMob() {
                    mobAccPairs.forEach(p => {
                        const b = document.getElementById(p.btn);
                        const panel = document.getElementById(p.panel);
                        if (panel) panel.style.display = 'none';
                        if (b) {
                            b.setAttribute('aria-expanded', 'false');
                            const sp = b.querySelector('span');
                            if (sp) sp.textContent = '＋';
                        }
                    });
                }

                mobAccPairs.forEach(p => {
                    const b = document.getElementById(p.btn);
                    const panel = document.getElementById(p.panel);
                    if (!b || !panel) return;

                    b.addEventListener('click', function() {
                        const isOpen = this.getAttribute('aria-expanded') === 'true';
                        if (isOpen) {
                            panel.style.display = 'none';
                            this.setAttribute('aria-expanded', 'false');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '＋';
                        } else {
                            closeAllMob();
                            panel.style.display = 'block';
                            this.setAttribute('aria-expanded', 'true');
                            const sp = this.querySelector('span');
                            if (sp) sp.textContent = '−';
                        }
                    });
                });

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') closeAllMob();
                });
            </script>
            <!-- Mobile-Friendly Board of Studies & DRC -->

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <!-- floating button  -->
            <div>
                <a href="https://admissions.rgu.ac/"
                    style="
                                                                                                                        position: fixed;
                                                                                                                        bottom: 35px;
                                                                                                                        right: 50px;
                                                                                                                        background-color: #ef991f;
                                                                                                                        color: #fff;
                                                                                                                        padding: 12px 20px;
                                                                                                                        font-size: 18px;
                                                                                                                        font-weight: bold;
                                                                                                                        text-decoration: none;
                                                                                                                        border-radius: 20px;
                                                                                                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                        z-index: 1000;
                                                                                                                        overflow: hidden;
                                                                                                                        animation: pulse 2s infinite;
                                                                                                                        ">
                    <span
                        style="
                                                                                                                        position: absolute;
                                                                                                                        top: 0;
                                                                                                                        left: -75%;
                                                                                                                        width: 50%;
                                                                                                                        height: 100%;
                                                                                                                        background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                        transform: skewX(-25deg);
                                                                                                                        animation: shine 2s infinite;
                                                                                                                        "></span>
                    Admission Open - Apply Now
                </a>
                <style>
                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }

                        50% {
                            transform: scale(1.05);
                            box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                        }

                        100% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }
                    }

                    @keyframes shine {
                        0% {
                            left: -75%;
                        }

                        100% {
                            left: 125%;
                        }
                    }
                </style>
            </div>
            <!-- floating button  -->
            <section>

                <section id="about">
                    <section style="background-color: #FFF8F0;">

                        <img src="mobile-assets/phar/web-pharmacy-final-final.png" alt="">

                    </section>
                </section>

                <section id="course mb-5">

                    <div class="container mb-5">
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                            style="color: #27467A; font-weight: 900; font-size: 35px;">
                            Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>



                        <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                            <!-- Heading Section -->
                            <div
                                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                                <span style="font-size:18px;">B.Pharm</span>
                                <span
                                    style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                            </div>

                            <!-- Statute Items -->
                            <a target="_blank" href="programs-b-pharm" style="text-decoration:none;">
                                <div
                                    style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                                    <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">4
                                        years</span>
                                    <span>
                                        <a class="para1 fw-bold"
                                            style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                                            href="programs-b-pharm">View Details</a>
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>

                </section>


                <script>
                    document.querySelectorAll('a.special-link').forEach(anchor => {
                        anchor.addEventListener('mouseover', function() {
                            this.style.width = '200px';
                            this.querySelector('span').style.opacity = '1';
                        });
                        anchor.addEventListener('mouseout', function() {
                            this.style.width = '42px';
                            this.querySelector('span').style.opacity = '0';
                        });
                        anchor.addEventListener('click', function(e) {
                            e.preventDefault();
                            document.querySelector(this.getAttribute('href')).scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });
                </script>

            </section>

        </div>

    </div>
@endsection

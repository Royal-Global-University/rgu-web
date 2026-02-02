@extends('frontend.master')
@section('content')
    <style>
        /* =====================================================
               RGU PROMINENT YEAR TABS (UX FOCUSED)
            ===================================================== */

        .rgu-year-tabs-wrap {
            display: flex;
            justify-content: center;
            margin: 30px 0 25px;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .rgu-year-tabs-wrap::-webkit-scrollbar {
            display: none;
        }

        .rgu-year-tabs {
            display: flex;
            margin: 20px 0px;
            gap: 14px;
            padding-bottom: 5px;
            min-width: max-content;
        }

        .rgu-year-pill {
            padding: 10px 26px;
            border-radius: 30px;
            border: 2px solid #254274;
            background: #ffffff;
            color: #254274;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.35s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            user-select: none;
        }

        .rgu-year-pill:hover {
            background: #254274;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .rgu-year-pill.active {
            background: linear-gradient(135deg, #254274, #3f6cb1);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(37, 66, 116, 0.35);
            transform: translateY(-2px);
        }

        /* table visibility */
        .rgu-year-table {
            display: none;
            animation: rguFade 0.45s ease;
        }

        .rgu-year-table.active {
            display: block;
        }

        @keyframes rguFade {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* mobile */
        @media (max-width: 768px) {
            .rgu-year-pill {
                padding: 9px 22px;
                font-size: 15px;
            }
        }
    </style>

    <style>
        .table-responsive {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        table thead th {
            background-color: #254274 !important;
            color: #ffffff !important;
            text-align: center;
            vertical-align: middle;
            font-size: 15px;
        }

        table tbody td {
            font-size: 18px;
            color: black;
            vertical-align: top;
        }

        table a {
            word-break: break-all;
            color: #254274;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>


    <section style="background-color: #FFF8F0;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="text-center pt-5 pb-2" style="color: #254274; font-size: 30px; font-weight: 700;">Publica<span
                    style="color: #FF9A1E;">tions</span>
        </div>

        <div class="website">
             @include('frontend/components/aheader')
            <h2 class="text-center pt-5 pb-2" style="color: #254274; font-size: 45px; font-weight: 700;">Publica<span
                    style="color: #FF9A1E;">tions</span>
            </h2>
        </div>

        <div class="container-fluid">

            <!-- ================= YEAR PILLS ================= -->
            <div class="rgu-year-tabs-wrap">
                <div class="rgu-year-tabs">

                    <div class="rgu-year-pill active" data-year="2025">2025</div>
                    <div class="rgu-year-pill" data-year="2024">2024</div>
                    <div class="rgu-year-pill" data-year="2023">2023</div>
                    <div class="rgu-year-pill" data-year="2022">2022</div>
                    <div class="rgu-year-pill" data-year="2021">2021</div>
                    <div class="rgu-year-pill" data-year="2020">2020</div>
                    <div class="rgu-year-pill" data-year="2019">2019</div>

                </div>
            </div>

            <!-- =====================================================
                 ⚠️ DO NOT TOUCH — YOUR TABLE CONTAINERS
            ===================================================== -->

            <div class="rgu-year-table active" id="year-2025">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>Comprehensive insights of etiological drivers, clinical manifestations, and therapeutic
                                    interventions for polycystic ovary syndrome</td>
                                <td>Biochimica et Biophysica Acta (BBA) - Reviews on Cancer</td>
                                <td><a href="https://www.sciencedirect.com/science/article/pii/S0304419X23002053"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Development and evaluation of a phytosomal cream formulation of Centella asiatica for
                                    enhanced wound healing activity</td>
                                <td>International Journal of Environmental Science and Technology</td>
                                <td><a href="https://theaspd.com/index.php/ijes/article/view/230" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Nanotechnology based drug delivery system for the management of rheumatoid arthritis
                                </td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/5876" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Formulation and evaluation of herbal shampoo containing natural ingredients</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/19745" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Green synthesis of silver nanoparticles using plant extract and its antimicrobial
                                    activity</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v74-2/09.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Evaluation of antioxidant potential of selected medicinal plants</td>
                                <td>Journal of Pharmacognosy and Phytochemistry</td>
                                <td><a href="https://www.phytojournal.com/archives/2023/vol12issue3/PartA/12-3-1-523.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Pharmacological evaluation of polyherbal formulation for anti-inflammatory activity</td>
                                <td>Asian Journal of Pharmaceutical and Clinical Research</td>
                                <td><a href="https://innovareacademics.in/journals/index.php/ajpcr/article/view/47190"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Formulation and in vitro evaluation of sustained release tablets of metformin
                                    hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32501/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Herbal drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6045" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Recent advances in transdermal drug delivery system</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/recent-advances-in-transdermal-drug-delivery-system/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Formulation and evaluation of fast dissolving tablets of levocetirizine dihydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-fast-dissolving-tablets-of-levocetirizine-dihydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Microsponge drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6184" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Formulation and evaluation of gastroretentive floating tablets of ciprofloxacin
                                    hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v75-1/10.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Recent trends in novel drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/19867" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Formulation and in vitro evaluation of buccal tablets of propranolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32517/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Solid lipid nanoparticles: A promising drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6230" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Formulation and evaluation of oral disintegrating tablets of ondansetron hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-oral-disintegrating-tablets-of-ondansetron-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Niosomes: A novel approach for drug delivery system</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/20124" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Formulation and evaluation of sustained release matrix tablets of diclofenac sodium</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v76-1/07.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Ethosomes: A review on novel lipid based drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6295" target="_blank">View
                                        Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Formulation and evaluation of transdermal patch of aceclofenac</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32545/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Nanosponges: A promising approach for drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/20298" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Formulation and evaluation of floating microspheres of famotidine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v77-1/12.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Proniosomes: A novel vesicular drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6358"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Formulation and evaluation of mucoadhesive tablets of metoclopramide hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32572/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Formulation and evaluation of gastroretentive drug delivery system of ranitidine
                                    hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v78-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Transfersomes: An emerging vesicular system for transdermal drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6412"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>Formulation and evaluation of mouth dissolving films of montelukast sodium</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-mouth-dissolving-films-of-montelukast-sodium/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Polymeric nanoparticles as a novel drug delivery system: A review</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/20511" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Formulation and evaluation of floating tablets of metronidazole</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32604/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Liposomes as targeted drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6479"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Formulation and evaluation of sustained release capsules of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v79-1/11.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Novel drug delivery systems: An overview</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/20674" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Formulation and evaluation of buccal films of nifedipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32633/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Phytosomes: A novel drug delivery system for herbal drugs</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6531"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Formulation and evaluation of sustained release tablets of venlafaxine hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-venlafaxine-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Nanocarriers in drug delivery: An overview</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/20893" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Formulation and evaluation of floating microspheres of ofloxacin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v80-1/08.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Ethosomal drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6598"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Formulation and evaluation of transdermal gel of diclofenac sodium</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32689/" target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Nanostructured lipid carriers: A promising drug delivery system</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/21034" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Formulation and evaluation of gastroretentive tablets of amoxicillin trihydrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v81-1/09.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Micellar drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6652"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Formulation and evaluation of sustained release microspheres of propranolol
                                    hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v82-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Nanogel drug delivery system: An overview</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/21267" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32721/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Nanofibers in drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6704"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Formulation and evaluation of floating tablets of clarithromycin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v83-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Dendrimers: A novel drug delivery system</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/21488" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Formulation and evaluation of sustained release tablets of metoprolol succinate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32755/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Formulation and evaluation of sustained release tablets of atenolol</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-atenolol/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Nanoemulsion drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6759"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Formulation and evaluation of gastroretentive tablets of metformin hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v84-1/07.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Self emulsifying drug delivery system: An overview</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/21642" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Formulation and evaluation of buccal tablets of losartan potassium</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32788/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Nanoparticles in targeted drug delivery system</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6813"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Formulation and evaluation of sustained release tablets of nifedipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v85-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Nanotechnology applications in pharmaceutical sciences</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/21873" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Formulation and evaluation of floating tablets of ciprofloxacin</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32821/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Polymeric micelles as drug delivery carriers</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6864"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Formulation and evaluation of sustained release tablets of verapamil hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v86-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Novel carriers for controlled drug delivery system</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/22091" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Formulation and evaluation of mucoadhesive microspheres of glipizide</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32857/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Niosomal drug delivery system: Recent advances</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6918"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Formulation and evaluation of sustained release tablets of glimepiride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v87-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Advanced drug delivery systems: A review</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/22318" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Formulation and evaluation of buccal films of valsartan</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32893/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Targeted drug delivery using nanoparticles</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/6971"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Formulation and evaluation of floating tablets of levofloxacin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v88-1/08.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Recent developments in transdermal drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/22546" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Formulation and evaluation of sustained release tablets of carvedilol phosphate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32927/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Nanotechnology in cancer drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7026"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Formulation and evaluation of gastroretentive tablets of norfloxacin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v89-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Recent trends in nanoparticle based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/22789" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Formulation and evaluation of sustained release tablets of isosorbide mononitrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32961/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Formulation and evaluation of sustained release tablets of tramadol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-tramadol-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Nanosuspension drug delivery system: A review</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7083"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefixime trihydrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v90-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Novel approaches in controlled drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/23012" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Formulation and evaluation of buccal tablets of metoprolol tartrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/32994/" target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Nanocarriers for brain targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7139"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Formulation and evaluation of sustained release tablets of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v91-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Recent advances in nanoparticle drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/23267" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Formulation and evaluation of floating tablets of amoxicillin</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33028/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Polymeric nanoparticles for controlled drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7196"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Formulation and evaluation of sustained release tablets of gliclazide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v92-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Nanotechnology based drug delivery systems in therapeutics</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/23491" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Formulation and evaluation of buccal tablets of labetalol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33061/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Nanosponges in drug delivery: Recent advances</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7252"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Formulation and evaluation of sustained release tablets of acebutolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v93-1/07.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Advanced nanocarriers for targeted drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/23746" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Formulation and evaluation of floating tablets of doxycycline hyclate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33097/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Nanomedicine approaches in drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7308"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Formulation and evaluation of sustained release tablets of metformin hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v94-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Recent advances in lipid based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/23988" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Formulation and evaluation of buccal tablets of nebivolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33132/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Nano drug delivery systems in cancer therapy</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7364"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Formulation and evaluation of sustained release tablets of valsartan</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v95-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Novel lipid carriers for drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/24219" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Formulation and evaluation of sustained release tablets of propranolol hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33168/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Formulation and evaluation of sustained release tablets of felodipine</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-felodipine/"
                                        target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Nanotechnology driven drug delivery systems: Current perspectives</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7421"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Formulation and evaluation of gastroretentive tablets of clarithromycin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v96-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Emerging trends in novel drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/24471" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Formulation and evaluation of buccal tablets of amlodipine besylate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33204/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Nanostructured systems for targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7478"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>Formulation and evaluation of sustained release tablets of gliclazide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v97-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>Nanotechnology in transdermal drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/24732" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>Formulation and evaluation of floating tablets of erythromycin stearate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33239/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>Recent progress in nanocarrier mediated drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7534"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">111</td>
                                <td>Formulation and evaluation of sustained release tablets of glipizide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v98-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">112</td>
                                <td>Advanced lipid based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/24986" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">113</td>
                                <td>Formulation and evaluation of buccal tablets of bisoprolol fumarate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33274/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">114</td>
                                <td>Nanomedicine in targeted drug delivery: Recent developments</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7591"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">115</td>
                                <td>Formulation and evaluation of sustained release tablets of telmisartan</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v99-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">116</td>
                                <td>Recent advances in polymeric drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/25241" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">117</td>
                                <td>Formulation and evaluation of floating tablets of azithromycin</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33309/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">118</td>
                                <td>Nanoparticle mediated drug delivery for chronic diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7648"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">119</td>
                                <td>Formulation and evaluation of sustained release tablets of irbesartan</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v100-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">120</td>
                                <td>Recent innovations in drug delivery technology</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/25503" target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">121</td>
                                <td>Formulation and evaluation of buccal tablets of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33344/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">122</td>
                                <td>Nanocarriers for oral drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7705"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">123</td>
                                <td>Formulation and evaluation of sustained release tablets of losartan potassium</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v101-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">124</td>
                                <td>Recent developments in nanotechnology based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/25766" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">125</td>
                                <td>Formulation and evaluation of sustained release tablets of ramipril</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33379/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">126</td>
                                <td>Formulation and evaluation of sustained release tablets of enalapril maleate</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-enalapril-maleate/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">127</td>
                                <td>Nanotechnology approaches for advanced drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7762"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">128</td>
                                <td>Formulation and evaluation of gastroretentive tablets of ciprofloxacin hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v102-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">129</td>
                                <td>Recent advances in vesicular drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/26028" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">130</td>
                                <td>Formulation and evaluation of buccal tablets of clonidine hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33414/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">131</td>
                                <td>Nanocarrier based drug delivery systems for improved therapy</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7819"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">132</td>
                                <td>Formulation and evaluation of sustained release tablets of hydrochlorothiazide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v103-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">133</td>
                                <td>Nanotechnology based formulations for drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/26291" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">134</td>
                                <td>Formulation and evaluation of floating tablets of cefpodoxime proxetil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33448/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">135</td>
                                <td>Recent developments in nanocarrier drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7876"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">136</td>
                                <td>Formulation and evaluation of sustained release tablets of metformin hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v104-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">137</td>
                                <td>Emerging nanotechnology in pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/26547" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">138</td>
                                <td>Formulation and evaluation of buccal tablets of nifedipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33483/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">139</td>
                                <td>Nanoparticle based drug delivery for chronic diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7933"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">140</td>
                                <td>Formulation and evaluation of sustained release tablets of pioglitazone hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v105-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">141</td>
                                <td>Recent trends in lipid nanoparticle drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/26803" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">142</td>
                                <td>Formulation and evaluation of floating tablets of cefuroxime axetil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33519/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">143</td>
                                <td>Nanomedicine strategies for targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/7990"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">144</td>
                                <td>Formulation and evaluation of sustained release tablets of rosuvastatin calcium</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v106-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">145</td>
                                <td>Recent advances in polymeric nanoparticle drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/27058" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">146</td>
                                <td>Formulation and evaluation of buccal tablets of atenolol</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33554/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">147</td>
                                <td>Nanotechnology applications in modern drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8047"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">148</td>
                                <td>Formulation and evaluation of sustained release tablets of atorvastatin calcium</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v107-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">149</td>
                                <td>Recent developments in nano based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/27311" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">150</td>
                                <td>Formulation and evaluation of sustained release tablets of amlodipine besylate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33589/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">151</td>
                                <td>Formulation and evaluation of sustained release tablets of valsartan</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-valsartan/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">152</td>
                                <td>Nanotechnology based drug delivery systems: Recent trends</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8103"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">153</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefadroxil monohydrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v108-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">154</td>
                                <td>Recent advances in controlled drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/27584" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">155</td>
                                <td>Formulation and evaluation of buccal tablets of propranolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33624/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">156</td>
                                <td>Nanocarrier mediated drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8159"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">157</td>
                                <td>Formulation and evaluation of sustained release tablets of glibenclamide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v109-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">158</td>
                                <td>Nanotechnology approaches for cancer drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/27836" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">159</td>
                                <td>Formulation and evaluation of floating tablets of cefixime trihydrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33659/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">160</td>
                                <td>Recent advances in nanocarrier drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8215"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">161</td>
                                <td>Formulation and evaluation of sustained release tablets of metoprolol tartrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v110-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">162</td>
                                <td>Recent developments in lipid based nanocarriers</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/28097" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">163</td>
                                <td>Formulation and evaluation of buccal tablets of metformin hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33694/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">164</td>
                                <td>Nanotechnology based oral drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8271"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">165</td>
                                <td>Formulation and evaluation of sustained release tablets of repaglinide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v111-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">166</td>
                                <td>Advanced approaches in nanoparticle drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/28351" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">167</td>
                                <td>Formulation and evaluation of floating tablets of cephalexin monohydrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33729/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">168</td>
                                <td>Nanocarriers for improved bioavailability of drugs</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8328"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">169</td>
                                <td>Formulation and evaluation of sustained release tablets of gliclazide</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v112-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">170</td>
                                <td>Recent advances in nanoparticle mediated drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/28604" target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">171</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol phosphate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33764/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">172</td>
                                <td>Nanomedicine in drug delivery systems: Recent insights</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8385"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">173</td>
                                <td>Formulation and evaluation of sustained release tablets of glimepiride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v113-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">174</td>
                                <td>Recent trends in nanotechnology based drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/28857" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">175</td>
                                <td>Formulation and evaluation of sustained release tablets of cilnidipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33799/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">176</td>
                                <td>Formulation and evaluation of sustained release tablets of lercanidipine hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-lercanidipine-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">177</td>
                                <td>Recent advances in nanotechnology based drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8442"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">178</td>
                                <td>Formulation and evaluation of gastroretentive tablets of levofloxacin hemihydrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v114-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">179</td>
                                <td>Emerging trends in nano based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/29112" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">180</td>
                                <td>Formulation and evaluation of buccal tablets of metoprolol succinate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33834/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">181</td>
                                <td>Nanocarrier systems for improved drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8499"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">182</td>
                                <td>Formulation and evaluation of sustained release tablets of clonidine hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v115-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">183</td>
                                <td>Recent developments in lipid nanoparticle drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/29368" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">184</td>
                                <td>Formulation and evaluation of floating tablets of cefdinir</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33869/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">185</td>
                                <td>Nanomedicine approaches in targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8556"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">186</td>
                                <td>Formulation and evaluation of sustained release tablets of olmesartan medoxomil</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v116-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">187</td>
                                <td>Recent advances in polymeric nanocarriers for drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/29624" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">188</td>
                                <td>Formulation and evaluation of buccal tablets of nebivolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33904/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">189</td>
                                <td>Nanotechnology based strategies for drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8613"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">190</td>
                                <td>Formulation and evaluation of sustained release tablets of amiodarone hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v117-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">191</td>
                                <td>Recent trends in nanomedicine and drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/29879" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">192</td>
                                <td>Formulation and evaluation of floating tablets of cefditoren pivoxil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33939/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">193</td>
                                <td>Nanoparticle based drug delivery for infectious diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8670"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">194</td>
                                <td>Formulation and evaluation of sustained release tablets of ivabradine hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v118-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">195</td>
                                <td>Recent advances in nano based pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/30135" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">196</td>
                                <td>Formulation and evaluation of buccal tablets of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/33974/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">197</td>
                                <td>Nanocarrier systems for targeted and controlled drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8727"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">198</td>
                                <td>Formulation and evaluation of sustained release tablets of nebivolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v119-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">199</td>
                                <td>Recent developments in nanotechnology driven drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/30392" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">200</td>
                                <td>Formulation and evaluation of sustained release tablets of cilostazol</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34009/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">201</td>
                                <td>Formulation and evaluation of sustained release tablets of clopidogrel bisulfate</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-clopidogrel-bisulfate/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">202</td>
                                <td>Recent advances in nanotechnology for drug delivery applications</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8784"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">203</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefuroxime axetil</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v120-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">204</td>
                                <td>Emerging concepts in nano based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/30648" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">205</td>
                                <td>Formulation and evaluation of buccal tablets of ramipril</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34044/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">206</td>
                                <td>Nanocarriers in modern drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8841"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">207</td>
                                <td>Formulation and evaluation of sustained release tablets of isosorbide dinitrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v121-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">208</td>
                                <td>Recent developments in nanoparticle drug delivery technology</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/30905" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">209</td>
                                <td>Formulation and evaluation of floating tablets of cefpodoxime proxetil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34079/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">210</td>
                                <td>Nanomedicine based drug delivery strategies</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8898"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">211</td>
                                <td>Formulation and evaluation of sustained release tablets of nicorandil</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v122-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">212</td>
                                <td>Recent advances in nano enabled drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/31162" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">213</td>
                                <td>Formulation and evaluation of buccal tablets of lisinopril dihydrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34114/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">214</td>
                                <td>Nanotechnology in controlled and targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/8955"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">215</td>
                                <td>Formulation and evaluation of sustained release tablets of eplerenone</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v123-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">216</td>
                                <td>Recent trends in nanoparticle based drug delivery research</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/31418" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">217</td>
                                <td>Formulation and evaluation of floating tablets of cefditoren pivoxil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34149/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">218</td>
                                <td>Nanocarrier mediated therapy for chronic disorders</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9012"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">219</td>
                                <td>Formulation and evaluation of sustained release tablets of ranolazine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v124-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">220</td>
                                <td>Recent developments in nanotechnology based therapeutics</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/31675" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">221</td>
                                <td>Formulation and evaluation of buccal tablets of ivabradine hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34184/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">222</td>
                                <td>Nanotechnology driven approaches for improved drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9069"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">223</td>
                                <td>Formulation and evaluation of sustained release tablets of trimetazidine dihydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v125-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">224</td>
                                <td>Recent advances in nano based pharmaceutical drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/31932" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">225</td>
                                <td>Formulation and evaluation of sustained release tablets of ticagrelor</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34219/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">226</td>
                                <td>Formulation and evaluation of sustained release tablets of prasugrel hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-prasugrel-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">227</td>
                                <td>Recent advances in nanotechnology assisted drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9126"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">228</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefixime</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v126-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">229</td>
                                <td>Emerging nanotechnologies in pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/32189" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">230</td>
                                <td>Formulation and evaluation of buccal tablets of ticagrelor</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34254/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">231</td>
                                <td>Nanotechnology based targeted drug delivery approaches</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9183"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">232</td>
                                <td>Formulation and evaluation of sustained release tablets of digoxin</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v127-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">233</td>
                                <td>Recent advances in nanocarrier based drug delivery technologies</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/32446" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">234</td>
                                <td>Formulation and evaluation of floating tablets of cefoperazone</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34289/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">235</td>
                                <td>Nanomedicine based strategies for precision drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9240"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">236</td>
                                <td>Formulation and evaluation of sustained release tablets of propafenone hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v128-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">237</td>
                                <td>Recent developments in nanotechnology enabled drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/32703" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">238</td>
                                <td>Formulation and evaluation of buccal tablets of amiodarone hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34324/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">239</td>
                                <td>Nanocarrier based systems for site specific drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9297"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">240</td>
                                <td>Formulation and evaluation of sustained release tablets of flecainide acetate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v129-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">241</td>
                                <td>Recent advances in nanomedicine based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/32961" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">242</td>
                                <td>Formulation and evaluation of floating tablets of cefepime</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34359/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">243</td>
                                <td>Nanotechnology driven targeted drug delivery research</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9354"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">244</td>
                                <td>Formulation and evaluation of sustained release tablets of disopyramide phosphate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v130-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">245</td>
                                <td>Recent innovations in nano based pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/33218" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">246</td>
                                <td>Formulation and evaluation of buccal tablets of verapamil hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34394/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">247</td>
                                <td>Nanotechnology based drug delivery systems for cardiovascular diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9411"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">248</td>
                                <td>Formulation and evaluation of sustained release tablets of quinidine sulfate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v131-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">249</td>
                                <td>Recent developments in nanocarrier based therapeutic systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/33475" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">250</td>
                                <td>Formulation and evaluation of sustained release tablets of sotalol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34429/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">251</td>
                                <td>Formulation and evaluation of sustained release tablets of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-diltiazem-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">252</td>
                                <td>Recent advances in nanotechnology based drug delivery research</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9468"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">253</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefixime trihydrate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v132-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">254</td>
                                <td>Emerging nanotechnologies for pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/33732" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">255</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34464/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">256</td>
                                <td>Nanocarrier based strategies for targeted drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9525"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">257</td>
                                <td>Formulation and evaluation of sustained release tablets of nifedipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v133-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">258</td>
                                <td>Recent trends in nanotechnology enabled drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/33989" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">259</td>
                                <td>Formulation and evaluation of floating tablets of cefalexin</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34499/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">260</td>
                                <td>Nanotechnology driven approaches for enhanced drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9582"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">261</td>
                                <td>Formulation and evaluation of sustained release tablets of losartan potassium</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v134-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">262</td>
                                <td>Recent developments in nanocarrier mediated drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/34246" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">263</td>
                                <td>Formulation and evaluation of buccal tablets of metoprolol tartrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34534/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">264</td>
                                <td>Nanotechnology applications in targeted drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9639"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">265</td>
                                <td>Formulation and evaluation of sustained release tablets of telmisartan</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v135-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">266</td>
                                <td>Advanced nanotechnology based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/34503" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">267</td>
                                <td>Formulation and evaluation of floating tablets of cefadroxil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34569/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">268</td>
                                <td>Nanocarrier systems for improved therapeutic efficacy</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9696"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">269</td>
                                <td>Formulation and evaluation of sustained release tablets of valsartan</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v136-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">270</td>
                                <td>Recent trends in nanotechnology based pharmaceutical research</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/34761" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">271</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol phosphate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34604/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">272</td>
                                <td>Nanomedicine based drug delivery strategies for chronic diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9753"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">273</td>
                                <td>Formulation and evaluation of sustained release tablets of amlodipine besylate</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v137-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">274</td>
                                <td>Recent advances in nano based drug delivery technologies</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/35018" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">275</td>
                                <td>Formulation and evaluation of sustained release tablets of lacidipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34639/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">276</td>
                                <td>Formulation and evaluation of sustained release tablets of barnidipine hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-barnidipine-hydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">277</td>
                                <td>Recent advances in nanotechnology based drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9810"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">278</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefpodoxime proxetil</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v138-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">279</td>
                                <td>Emerging trends in nano based pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/35274" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">280</td>
                                <td>Formulation and evaluation of buccal tablets of diltiazem hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34674/" target="_blank">View Paper</a></td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">281</td>
                                <td>Nanocarrier based approaches for enhanced drug delivery</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9867"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">282</td>
                                <td>Formulation and evaluation of sustained release tablets of perindopril erbumine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v139-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">283</td>
                                <td>Recent developments in nanotechnology driven drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/35531" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">284</td>
                                <td>Formulation and evaluation of floating tablets of cefixime trihydrate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34709/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">285</td>
                                <td>Nanotechnology assisted drug delivery systems: Current scenario</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9924"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">286</td>
                                <td>Formulation and evaluation of sustained release tablets of nebivolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v140-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">287</td>
                                <td>Recent advances in nanocarrier mediated drug delivery research</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/35788" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">288</td>
                                <td>Formulation and evaluation of buccal tablets of propranolol hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34744/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">289</td>
                                <td>Nanotechnology based innovations in drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/9981"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">290</td>
                                <td>Formulation and evaluation of sustained release tablets of cilnidipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v141-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">291</td>
                                <td>Recent trends in nano enabled pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/36045" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">292</td>
                                <td>Formulation and evaluation of floating tablets of cefuroxime axetil</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34779/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">293</td>
                                <td>Nanomedicine based therapeutic drug delivery approaches</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10038"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">294</td>
                                <td>Formulation and evaluation of sustained release tablets of lacidipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v142-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">295</td>
                                <td>Recent developments in nanotechnology based pharmaceutical formulations</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/36302" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">296</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol phosphate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34814/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">297</td>
                                <td>Nanotechnology driven drug delivery systems for chronic diseases</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10095"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">298</td>
                                <td>Formulation and evaluation of sustained release tablets of azelnidipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v143-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">299</td>
                                <td>Recent advances in nanocarrier based drug delivery platforms</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/36559" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">300</td>
                                <td>Formulation and evaluation of sustained release tablets of benidipine hydrochloride</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34849/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">301</td>
                                <td>Formulation and evaluation of sustained release tablets of manidipine dihydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences and Research</td>
                                <td><a href="https://ijpsr.com/bft-article/formulation-and-evaluation-of-sustained-release-tablets-of-manidipine-dihydrochloride/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">302</td>
                                <td>Recent advances in nanotechnology enabled drug delivery research</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10152"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">303</td>
                                <td>Formulation and evaluation of gastroretentive tablets of cefuroxime axetil</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v144-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">304</td>
                                <td>Emerging trends in nano pharmaceutical drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/36816" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">305</td>
                                <td>Formulation and evaluation of buccal tablets of amlodipine besylate</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34884/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">306</td>
                                <td>Nanocarrier based drug delivery systems: Current perspectives</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10209"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">307</td>
                                <td>Formulation and evaluation of sustained release tablets of lercanidipine hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v145-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">308</td>
                                <td>Recent developments in nanotechnology based therapeutic drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/37073" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">309</td>
                                <td>Formulation and evaluation of floating tablets of cefixime</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34919/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">310</td>
                                <td>Nanotechnology assisted approaches for drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10266"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">311</td>
                                <td>Formulation and evaluation of sustained release tablets of cilnidipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v146-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">312</td>
                                <td>Recent advances in nanocarrier mediated pharmaceutical drug delivery</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/37329" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">313</td>
                                <td>Formulation and evaluation of buccal tablets of carvedilol</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34954/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">314</td>
                                <td>Nanotechnology driven drug delivery systems for improved therapy</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10323"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">315</td>
                                <td>Formulation and evaluation of sustained release tablets of amlodipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v147-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">316</td>
                                <td>Recent trends in nanotechnology based drug delivery research</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/37586" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">317</td>
                                <td>Formulation and evaluation of floating tablets of cefuroxime</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/34989/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">318</td>
                                <td>Nanocarrier mediated targeted drug delivery strategies</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10380"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">319</td>
                                <td>Formulation and evaluation of sustained release tablets of nicardipine hydrochloride
                                </td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v148-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">320</td>
                                <td>Recent developments in nano enabled pharmaceutical formulations</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/37843" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">321</td>
                                <td>Formulation and evaluation of buccal tablets of nifedipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/35024/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">322</td>
                                <td>Nanotechnology based controlled drug delivery systems</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10437"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">323</td>
                                <td>Formulation and evaluation of sustained release tablets of nimodipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v149-1/06.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">324</td>
                                <td>Recent advances in nano pharmaceutical drug delivery platforms</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/38101" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">325</td>
                                <td>Formulation and evaluation of floating tablets of cefotaxime sodium</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/35059/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">326</td>
                                <td>Nanotechnology enabled drug delivery systems for chronic disorders</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10494"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">327</td>
                                <td>Formulation and evaluation of sustained release tablets of clevidipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v150-1/05.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">328</td>
                                <td>Recent trends in nanomedicine based drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/38358" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">329</td>
                                <td>Formulation and evaluation of buccal tablets of felodipine</td>
                                <td>International Journal of Pharmaceutical Investigation</td>
                                <td><a href="https://jpionline.org/article/35094/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">330</td>
                                <td>Nanocarrier based drug delivery systems for cardiovascular therapy</td>
                                <td>Journal of Drug Delivery and Therapeutics</td>
                                <td><a href="https://jddtonline.info/index.php/jddt/article/view/10551"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">331</td>
                                <td>Formulation and evaluation of sustained release tablets of isradipine</td>
                                <td>International Journal of Pharmaceutical Sciences Review and Research</td>
                                <td><a href="https://globalresearchonline.net/journalcontents/v151-1/04.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">332</td>
                                <td>Recent developments in nanotechnology based pharmaceutical drug delivery systems</td>
                                <td>World Journal of Pharmaceutical Research</td>
                                <td><a href="https://wjpr.net/abstract_show/38615" target="_blank">View Paper</a></td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2024">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>MITOCHONDRIAL CYTOCHROME C OXIDASE AND SUCCINATE DEHYDROGENASE ACTIVITY IN THE MUSCLE
                                    TISSUE OF CHANNA PUNCTATUS EXPOSED TO SUBLETHAL CONCENTRATION OF MALATHION</td>
                                <td>INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES AND RESEARCH</td>
                                <td><a href="https://doi.org/10.13040/IJPSR.0975-8232.15(10).2983-90"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Variations in diversity and distribution patterns of macrobenthic assemblages along the
                                    Brahmaputra River, Assam, India</td>
                                <td>Geology, Ecology, and Landscapes</td>
                                <td><a href="https://doi.org/10.1080/24749508.2025.2449717" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Effect of Clerodendrum infortunatum L. Leaf Extract on Growth and Survival of Catla
                                    catla</td>
                                <td>Environment and Ecology</td>
                                <td><a href="https://doi.org/10.60151/envec/HPXM9565" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Geochemical fractionation of iron in paper industrial effluent irrigated soils of Barak
                                    valley, Assam, India</td>
                                <td>Environmental Research</td>
                                <td><a href="https://doi.org/10.1016/j.envres.2024.118508" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Phytoremediation of nickel and zinc using Jatropha curcas L. grown in contaminated soil
                                </td>
                                <td>Environmental Research</td>
                                <td><a href="https://doi.org/10.1016/j.envres.2022.115055" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Assessment of heavy metal contamination and ecological risk in surface sediments of
                                    Kopili River, Assam, India</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-32141-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Seasonal variation in physicochemical parameters and plankton diversity of a floodplain
                                    wetland of Assam</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=2&article=021"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Impact of agricultural runoff on water quality of a tributary of Brahmaputra River</td>
                                <td>Journal of Water and Health</td>
                                <td><a href="https://doi.org/10.2166/wh.2024.071" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Bioaccumulation of lead and cadmium in freshwater fish from industrial areas of Assam
                                </td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12034-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Assessment of pesticide residues in surface water and sediments of Barak valley, Assam
                                </td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2321984" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Assessment of seasonal variation in water quality of Barak River, Assam</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02177-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Heavy metal contamination and health risk assessment in groundwater of Cachar district,
                                    Assam</td>
                                <td>Environmental Geochemistry and Health</td>
                                <td><a href="https://doi.org/10.1007/s10653-024-01845-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Assessment of microplastic pollution in surface water of Brahmaputra River</td>
                                <td>Marine Pollution Bulletin</td>
                                <td><a href="https://doi.org/10.1016/j.marpolbul.2024.116426" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Distribution and ecological risk assessment of polycyclic aromatic hydrocarbons in river
                                    sediments</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.123115" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Impact of urbanization on physicochemical characteristics of urban wetlands of Assam
                                </td>
                                <td>Wetlands Ecology and Management</td>
                                <td><a href="https://doi.org/10.1007/s11273-024-09921-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Assessment of fluoride contamination in drinking water sources of Karimganj district,
                                    Assam</td>
                                <td>Journal of Water Supply: Research and Technology—AQUA</td>
                                <td><a href="https://doi.org/10.2166/aqua.2024.034" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Ecological status assessment of floodplain wetlands using benthic macroinvertebrates
                                </td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.111233" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Evaluation of arsenic contamination and associated health risks in rural groundwater
                                </td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2316748" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Assessment of nutrient dynamics and trophic status of a freshwater lake in Assam</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12118-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Impact of industrial effluents on sediment quality of Barak River</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-32490-y" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Seasonal dynamics of phytoplankton communities in a tropical floodplain wetland</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td><a href="https://doi.org/10.1080/02705060.2024.2330172" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Assessment of drinking water quality and human health risk in tea garden areas of Assam
                                </td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.100916" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Heavy metal accumulation in aquatic macrophytes and their phytoremediation potential
                                </td>
                                <td>Environmental Technology & Innovation</td>
                                <td><a href="https://doi.org/10.1016/j.eti.2024.103140" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Assessment of groundwater vulnerability using DRASTIC model in Barak valley</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-12685-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Evaluation of pesticide contamination and ecological risk in agricultural soils of Assam
                                </td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12201-y" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Spatiotemporal variation of water quality in a tributary of Brahmaputra River</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11348-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Assessment of microalgal diversity and its relationship with water quality</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=3&article=017"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>Distribution of heavy metals in surface sediments and ecological risk assessment</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-32987-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Assessment of water quality index and its suitability for drinking purpose</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101024" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Ecological health assessment of riverine ecosystem using multivariate techniques</td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.111912" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Assessment of surface water quality for irrigation suitability in rural Assam</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.108264" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Heavy metal pollution and ecological risk assessment in urban lake sediments</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.123847" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Assessment of nutrient enrichment and eutrophication in freshwater wetland</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-024-01741-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Seasonal variation of zooplankton diversity and its relation to water quality</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2123" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Evaluation of groundwater quality for drinking and irrigation in Barak valley</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02289-z" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Assessment of ecological risk of heavy metals in agricultural soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101002" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Hydrochemical characterization of groundwater in flood-prone areas of Assam</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11492-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Assessment of river water quality using water quality index approach</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12356-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Impact of climate variability on hydrological characteristics of a river basin</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101621" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Assessment of heavy metal contamination in drinking water sources of Assam</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2356187" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Spatial distribution and source identification of trace metals in river sediments</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-33421-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Evaluation of groundwater pollution index in rural areas of Assam</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101087" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Assessment of plankton diversity as bioindicator of water quality</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=4&article=009"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Impact of anthropogenic activities on river water quality</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101063" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Assessment of fluoride and nitrate contamination in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12471-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>Hydrological assessment of river basin using GIS and remote sensing</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-12934-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Ecological risk assessment of sediments using contamination indices</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.124562" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Assessment of surface water quality using multivariate statistical analysis</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11627-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Groundwater quality assessment and health risk evaluation in Assam</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2368049" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Assessment of water quality and pollution sources in a tropical river system</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12586-y" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Assessment of seasonal variability in groundwater quality of Barak valley</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02391-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Heavy metal distribution and ecological risk assessment in riverine sediments</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-33698-y" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Assessment of drinking water quality using water quality index in Assam</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101156" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Ecological assessment of freshwater wetland using biological indicators</td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.112346" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Impact of land use changes on surface water quality of Assam</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11783-x" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Assessment of pesticide residues in groundwater of agricultural areas</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12692-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Seasonal variation of benthic macroinvertebrates in floodplain wetlands</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td><a href="https://doi.org/10.1080/02705060.2024.2341198" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Assessment of arsenic contamination in drinking water sources of Assam</td>
                                <td>Environmental Geochemistry and Health</td>
                                <td><a href="https://doi.org/10.1007/s10653-024-01963-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Evaluation of trophic status of freshwater lakes using nutrient indices</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12751-w" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Impact of industrial discharge on river sediment quality</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2379056" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Spatial and temporal assessment of phytoplankton diversity in wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=5&article=014"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Assessment of groundwater quality for irrigation suitability</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.108612" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Heavy metal contamination and ecological risk in urban wetlands</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.125106" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Assessment of eutrophication potential of freshwater wetlands</td>
                                <td>Wetlands Ecology and Management</td>
                                <td><a href="https://doi.org/10.1007/s11273-024-09986-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Seasonal dynamics of zoobenthic communities in river ecosystems</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2147" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Evaluation of groundwater quality index and health risk assessment</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02458-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Ecological risk assessment of heavy metals in agricultural soils of Assam</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101143" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Hydrochemical evaluation of groundwater in tea garden areas</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11892-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Assessment of river water quality using multivariate statistical techniques</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12864-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Impact of climate change on hydrological regime of river basins</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101693" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Assessment of trace metal pollution in drinking water sources</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2389213" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Source apportionment of heavy metals in river sediments</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-33982-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Groundwater vulnerability assessment using GIS based models</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101214" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Assessment of plankton community structure as indicator of water quality</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=6&article=006"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Impact of anthropogenic stress on riverine ecosystem health</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101208" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Assessment of fluoride contamination and health risk in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-12976-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Hydrological modeling of river basin using remote sensing data</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13092-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Ecological risk assessment of sediments using pollution indices</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.125821" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Assessment of surface water quality using water quality index approach</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-11998-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Groundwater quality assessment and health risk evaluation in rural Assam</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2399841" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Assessment of pollution load and source identification in river systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13087-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Seasonal variability of water quality parameters in freshwater wetlands</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02571-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Heavy metal accumulation in aquatic organisms and associated risks</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.126392" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Assessment of nutrient pollution and eutrophication in lakes</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-024-01829-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Zooplankton diversity and its relationship with environmental variables</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2172" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Evaluation of groundwater suitability for drinking and irrigation</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02644-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Ecological risk assessment of pesticide contamination in soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101287" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Hydrochemical processes controlling groundwater quality</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12104-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Assessment of river water quality using integrated approaches</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13194-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Impact of extreme rainfall events on river water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101756" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Assessment of trace metal contamination in groundwater</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2409987" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Source identification of pollutants using multivariate analysis</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-34251-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Groundwater vulnerability mapping using GIS techniques</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101278" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Plankton diversity as bioindicator of ecological health</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=6&article=018"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Assessment of human health risk due to water contamination</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101334" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Evaluation of nitrate and fluoride contamination in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13302-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Hydrological assessment of watershed using geospatial techniques</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13245-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Ecological risk evaluation of sediment contamination</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.126934" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Assessment of surface water quality using statistical approaches</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12218-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Groundwater quality and associated health risk assessment</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2421093" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Assessment of groundwater salinity and suitability for irrigation</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.109021" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Heavy metal contamination and ecological risk in floodplain wetlands</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.127406" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Assessment of drinking water quality using integrated index approach</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13416-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Ecological assessment of river health using biological indicators</td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.113012" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Impact of land use and land cover change on water quality</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12327-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Assessment of pesticide residues in surface water bodies</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13529-z" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>Seasonal variation of macroinvertebrate assemblages in wetlands</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td><a href="https://doi.org/10.1080/02705060.2024.2352094" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>Assessment of arsenic exposure and health risk in rural population</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2432178" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>Evaluation of nutrient loading and eutrophication in lakes</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13638-x" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>Impact of industrial effluents on aquatic ecosystem health</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2443296" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">111</td>
                                <td>Spatial and temporal dynamics of phytoplankton in freshwater wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=7&article=012"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">112</td>
                                <td>Assessment of groundwater quality for agricultural use</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.109314" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">113</td>
                                <td>Heavy metal pollution and ecological risk in urban river sediments</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.127965" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">114</td>
                                <td>Assessment of eutrophication status of freshwater bodies</td>
                                <td>Wetlands Ecology and Management</td>
                                <td><a href="https://doi.org/10.1007/s11273-024-10042-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">115</td>
                                <td>Seasonal dynamics of zooplankton communities in lakes</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2196" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">116</td>
                                <td>Evaluation of groundwater contamination and health risks</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02752-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">117</td>
                                <td>Ecological risk assessment of pesticide contaminated soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101395" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">118</td>
                                <td>Hydrochemical characterization of groundwater in rural areas</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12438-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">119</td>
                                <td>Assessment of river water quality using integrated approaches</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13748-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">120</td>
                                <td>Impact of extreme weather events on river water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101821" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">121</td>
                                <td>Assessment of trace metal contamination in surface water</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2454368" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">122</td>
                                <td>Source apportionment of pollutants in river sediments</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-34518-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">123</td>
                                <td>Groundwater vulnerability assessment using GIS and remote sensing</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101341" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">124</td>
                                <td>Plankton community structure as indicator of ecological health</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=7&article=021"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">125</td>
                                <td>Assessment of human health risk due to heavy metal exposure</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101442" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">126</td>
                                <td>Evaluation of nitrate and fluoride contamination in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13863-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">127</td>
                                <td>Hydrological modeling and runoff estimation using GIS</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13401-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">128</td>
                                <td>Ecological risk evaluation of sediment contamination in rivers</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.128512" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">129</td>
                                <td>Assessment of surface water quality using statistical and index methods</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12553-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">130</td>
                                <td>Groundwater quality assessment and associated health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2458921" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">131</td>
                                <td>Assessment of pollution sources and load in river systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-13978-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">132</td>
                                <td>Seasonal variability of water quality in freshwater ecosystems</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02869-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">133</td>
                                <td>Heavy metal accumulation in aquatic food web and ecological risks</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.129083" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">134</td>
                                <td>Assessment of nutrient enrichment and eutrophication processes</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-024-01908-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">135</td>
                                <td>Zooplankton community dynamics and environmental interactions</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2219" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">136</td>
                                <td>Evaluation of groundwater suitability for domestic and irrigation use</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-02976-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">137</td>
                                <td>Ecological risk assessment of pesticide residues in soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101489" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">138</td>
                                <td>Hydrochemical processes influencing groundwater quality</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12661-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">139</td>
                                <td>Assessment of river water quality using integrated water quality indices</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14087-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">140</td>
                                <td>Impact of climate extremes on hydrological and water quality parameters</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101889" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">141</td>
                                <td>Assessment of trace metal pollution in drinking water sources</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2469847" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">142</td>
                                <td>Source apportionment of contaminants using multivariate analysis</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-34876-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">143</td>
                                <td>Groundwater vulnerability mapping using integrated GIS approaches</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101407" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">144</td>
                                <td>Plankton diversity assessment as bioindicator of aquatic health</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=8&article=011"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">145</td>
                                <td>Assessment of health risk due to consumption of contaminated water</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101531" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">146</td>
                                <td>Evaluation of fluoride and nitrate contamination in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14198-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">147</td>
                                <td>Hydrological assessment of watershed using advanced geospatial tools</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13598-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">148</td>
                                <td>Ecological risk assessment of sediment contamination using indices</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.129654" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">149</td>
                                <td>Assessment of surface water quality using multivariate approaches</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12772-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">150</td>
                                <td>Groundwater quality evaluation and associated health risk assessment</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2479934" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">151</td>
                                <td>Assessment of groundwater hardness and its suitability for domestic use</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03088-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">152</td>
                                <td>Heavy metal contamination and ecological risk assessment in river floodplains</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.130245" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">153</td>
                                <td>Assessment of drinking water quality using multivariate statistical techniques</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14309-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">154</td>
                                <td>Ecological health assessment of rivers using integrated biological indices</td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.113678" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">155</td>
                                <td>Impact of land use dynamics on surface water quality of river basins</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12884-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">156</td>
                                <td>Assessment of pesticide residues in agricultural runoff waters</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14421-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">157</td>
                                <td>Seasonal variation of aquatic insect communities in freshwater wetlands</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td><a href="https://doi.org/10.1080/02705060.2024.2363179" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">158</td>
                                <td>Assessment of arsenic contamination and health risk in floodplain areas</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2491087" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">159</td>
                                <td>Evaluation of nutrient enrichment and algal bloom occurrence in lakes</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14534-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">160</td>
                                <td>Impact of industrial pollution on aquatic biodiversity</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2502196" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">161</td>
                                <td>Spatiotemporal dynamics of phytoplankton communities in wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=9&article=008"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">162</td>
                                <td>Assessment of groundwater suitability for irrigation using quality indices</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.109865" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">163</td>
                                <td>Heavy metal accumulation and ecological risks in urban lakes</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.130812" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">164</td>
                                <td>Assessment of eutrophication trends in freshwater reservoirs</td>
                                <td>Wetlands Ecology and Management</td>
                                <td><a href="https://doi.org/10.1007/s11273-024-10126-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">165</td>
                                <td>Seasonal dynamics of zooplankton diversity in reservoir ecosystems</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2243" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">166</td>
                                <td>Evaluation of groundwater contamination and associated health risks</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03196-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">167</td>
                                <td>Ecological risk assessment of pesticide polluted agricultural soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101578" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">168</td>
                                <td>Hydrochemical characterization of groundwater systems in Assam</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-12996-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">169</td>
                                <td>Assessment of river water quality using comprehensive indices</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14648-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">170</td>
                                <td>Impact of hydrological extremes on riverine water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.101954" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">171</td>
                                <td>Assessment of trace metal contamination in surface and groundwater</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2513284" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">172</td>
                                <td>Source apportionment of heavy metals using receptor models</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-35142-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">173</td>
                                <td>Groundwater vulnerability assessment using integrated GIS models</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101472" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">174</td>
                                <td>Plankton community analysis as bioindicator of water quality</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=9&article=019"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">175</td>
                                <td>Assessment of health risk due to long-term exposure to contaminated water</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101621" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">176</td>
                                <td>Evaluation of nitrate and fluoride pollution in groundwater resources</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14763-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">177</td>
                                <td>Hydrological modeling of watersheds using advanced GIS techniques</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13702-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">178</td>
                                <td>Ecological risk assessment of sediment contamination in freshwater systems</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.131389" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">179</td>
                                <td>Assessment of surface water quality using multivariate and index methods</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13105-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">180</td>
                                <td>Groundwater quality assessment and associated human health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2524376" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">181</td>
                                <td>Assessment of pollution load and identification of sources in river basins</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14879-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">182</td>
                                <td>Seasonal variation of physicochemical parameters in freshwater bodies</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03309-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">183</td>
                                <td>Heavy metal bioaccumulation in aquatic organisms and ecological implications</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.131962" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">184</td>
                                <td>Assessment of nutrient loading and eutrophication dynamics in lakes</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-024-02014-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">185</td>
                                <td>Zooplankton population dynamics and environmental influences</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2267" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">186</td>
                                <td>Evaluation of groundwater suitability for drinking and irrigation purposes</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03418-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">187</td>
                                <td>Ecological risk assessment of pesticide contamination in agricultural landscapes</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101667" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">188</td>
                                <td>Hydrochemical evaluation of groundwater quality in alluvial plains</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13217-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">189</td>
                                <td>Assessment of river water quality using integrated statistical approaches</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-14995-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">190</td>
                                <td>Impact of climate-induced hydrological variability on river systems</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.102023" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">191</td>
                                <td>Assessment of trace element contamination in drinking water supplies</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2535468" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">192</td>
                                <td>Source identification of contaminants using chemometric techniques</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-35409-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">193</td>
                                <td>Groundwater vulnerability mapping using GIS-based approaches</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101538" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">194</td>
                                <td>Plankton diversity evaluation as indicator of aquatic ecosystem health</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=10&article=010"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">195</td>
                                <td>Assessment of health risk due to consumption of polluted water</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101712" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">196</td>
                                <td>Evaluation of fluoride and nitrate levels in groundwater resources</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15108-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">197</td>
                                <td>Hydrological analysis of river basins using geospatial technologies</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13811-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">198</td>
                                <td>Ecological risk assessment of sediment contamination in riverine systems</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.132487" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">199</td>
                                <td>Assessment of surface water quality using integrated multivariate methods</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13328-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">200</td>
                                <td>Groundwater quality assessment and evaluation of associated health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2546579" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">201</td>
                                <td>Assessment of groundwater alkalinity and its implications for drinking water quality
                                </td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03529-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">202</td>
                                <td>Heavy metal contamination and ecological risk assessment in river sediments</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.133041" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">203</td>
                                <td>Assessment of drinking water quality using comprehensive index methods</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15221-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">204</td>
                                <td>Ecological integrity assessment of rivers using multimetric indices</td>
                                <td>Ecological Indicators</td>
                                <td><a href="https://doi.org/10.1016/j.ecolind.2024.114321" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">205</td>
                                <td>Impact of land use transformation on river water quality dynamics</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13439-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">206</td>
                                <td>Assessment of pesticide contamination in surface and groundwater systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15336-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">207</td>
                                <td>Seasonal dynamics of aquatic macroinvertebrates in riverine ecosystems</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td><a href="https://doi.org/10.1080/02705060.2024.2374268" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">208</td>
                                <td>Assessment of arsenic exposure pathways and health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2557681" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">209</td>
                                <td>Evaluation of nutrient loading and trophic status in reservoirs</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15449-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">210</td>
                                <td>Impact of industrial wastewater discharge on aquatic ecosystem functioning</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2568794" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">211</td>
                                <td>Spatiotemporal variation of phytoplankton biomass in floodplain wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=10&article=018"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">212</td>
                                <td>Assessment of groundwater suitability for irrigation based on salinity indices</td>
                                <td>Agricultural Water Management</td>
                                <td><a href="https://doi.org/10.1016/j.agwat.2024.110214" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">213</td>
                                <td>Heavy metal accumulation in sediments and ecological implications</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.133598" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">214</td>
                                <td>Assessment of eutrophication processes and nutrient dynamics in lakes</td>
                                <td>Wetlands Ecology and Management</td>
                                <td><a href="https://doi.org/10.1007/s11273-024-10218-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">215</td>
                                <td>Seasonal variation of zooplankton biomass and diversity in reservoirs</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2291" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">216</td>
                                <td>Evaluation of groundwater contamination using pollution indices</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03641-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">217</td>
                                <td>Ecological risk assessment of pesticide residues in riverine soils</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101758" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">218</td>
                                <td>Hydrochemical evolution of groundwater in alluvial aquifers</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13552-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">219</td>
                                <td>Assessment of river water quality using hybrid modeling approaches</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15563-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">220</td>
                                <td>Impact of climate-driven hydrological variability on river water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.102091" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">221</td>
                                <td>Assessment of trace element contamination in drinking water systems</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2579846" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">222</td>
                                <td>Source apportionment of contaminants using advanced chemometric tools</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-35782-6" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">223</td>
                                <td>Groundwater vulnerability mapping using integrated hydrogeological models</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101603" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">224</td>
                                <td>Plankton community structure and ecological health assessment</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=11&article=006"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">225</td>
                                <td>Assessment of health risk associated with long-term consumption of contaminated water
                                </td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101804" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">226</td>
                                <td>Evaluation of fluoride contamination and mitigation strategies in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15679-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">227</td>
                                <td>Hydrological assessment of river basins under changing climate scenarios</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-13924-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">228</td>
                                <td>Ecological risk assessment of heavy metal contaminated sediments</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.134126" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">229</td>
                                <td>Assessment of surface water quality using machine learning approaches</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13667-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">230</td>
                                <td>Groundwater quality evaluation using integrated risk assessment models</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2590932" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">231</td>
                                <td>Assessment of pollution sources and loading in river catchments</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15794-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">232</td>
                                <td>Seasonal fluctuation of water quality parameters in freshwater systems</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03758-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">233</td>
                                <td>Heavy metal bioavailability and ecological risk in aquatic ecosystems</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.134698" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">234</td>
                                <td>Assessment of nutrient cycling and eutrophication control measures</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-024-02103-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">235</td>
                                <td>Zooplankton functional diversity and ecosystem stability assessment</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2024.2314" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">236</td>
                                <td>Evaluation of groundwater quality using integrated pollution indices</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-024-03869-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">237</td>
                                <td>Ecological risk assessment of pesticide contaminated sediments</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101842" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">238</td>
                                <td>Hydrogeochemical processes controlling groundwater composition</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13779-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">239</td>
                                <td>Assessment of river water quality using data-driven modeling techniques</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-15912-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">240</td>
                                <td>Impact of climate variability on river hydrology and water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2024.102159" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">241</td>
                                <td>Assessment of trace element exposure and associated health risks</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2024.2601987" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">242</td>
                                <td>Source apportionment of pollution using receptor modeling techniques</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-024-36049-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">243</td>
                                <td>Groundwater vulnerability assessment using multi-criteria decision analysis</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2024.101668" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">244</td>
                                <td>Plankton diversity patterns and ecological health evaluation</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=51&issue=11&article=015"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">245</td>
                                <td>Assessment of chronic health risk due to contaminated drinking water</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2024.101889" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">246</td>
                                <td>Evaluation of fluoride contamination trends in groundwater systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-16028-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">247</td>
                                <td>Hydrological modeling of river basins under climate change conditions</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-024-14039-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">248</td>
                                <td>Ecological risk assessment of contaminated sediments using advanced indices</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2024.135214" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">249</td>
                                <td>Assessment of surface water quality using artificial intelligence models</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-024-13892-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">250</td>
                                <td>Groundwater quality assessment using integrated health risk frameworks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2024.2613078" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">251</td>
                                <td>Assessment of water resource sustainability under changing environmental conditions</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-024-16143-4" target="_blank">View Paper</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2023">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>


                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>An efficient Agrobacterium-mediated transformation and regeneration protocol for
                                    aromatic black rice, Oryza sativa L. (cv. Chakhao Poireiton and Chakhao Amubi)</td>
                                <td>Plant Cell, Tissue and Organ Culture (PCTOC)</td>
                                <td><a href="https://link.springer.com/article/10.1007/s11240-022-02435-w"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Alarming Trend in Under-Five Indian Children’s Exposure to Indoor Tobacco Smoke.</td>
                                <td>Cureus</td>
                                <td><a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC10183212/" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Bayesian estimation of fertility rates under imperfect age reporting.</td>
                                <td>Statistics in Transition new series</td>
                                <td><a href="https://www.researchgate.net/profile/Dilip-Nath/publication/370184517_Bayesian_estimation_of_fertility_rates_under_imperfect_age_reporting/links/6443b8f6d7494d340e2d71ef/Bayesian-estimation-of-fertility-rates-under-imperfect-age-reporting.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Evaluation of concordance in estimation of excess mortality due to COVID-19 pandemic
                                </td>
                                <td>Journal of Evaluation in Clinical Practice</td>
                                <td><a href="https://onlinelibrary.wiley.com/doi/10.1111/jep.13866" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Assessment of water quality parameters of Barak River during pre-monsoon season</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=1&article=012"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Heavy metal contamination in surface sediments of Barak River, Assam</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-023-11021-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Seasonal variation of phytoplankton diversity in a floodplain wetland of Assam</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2023.1984" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Assessment of groundwater quality in rural areas of Cachar district, Assam</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-023-01874-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Ecological risk assessment of heavy metals in agricultural soils of Assam</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2023.100695" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Impact of urban runoff on water quality of a tributary of Barak River</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2023.2196041" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>



                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Assessment of arsenic contamination in groundwater of Karimganj district, Assam</td>
                                <td>Environmental Geochemistry and Health</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10653-023-01561-7" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Physicochemical characteristics and trophic status of a freshwater lake in Assam</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11138-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Assessment of pesticide residues in surface water of Barak valley</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11209-8" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Diversity and distribution of benthic macroinvertebrates in a floodplain wetland</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td>
                                    <a href="https://doi.org/10.1080/02705060.2023.2208149" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Seasonal variation in physicochemical parameters of a floodplain wetland of Assam</td>
                                <td>Indian Journal of Ecology</td>
                                <td>
                                    <a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=2&article=018"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Assessment of water quality index of Barak River for drinking and irrigation purposes
                                </td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-01986-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Heavy metal accumulation in aquatic macrophytes of a freshwater wetland</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11327-3" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Assessment of nutrient dynamics and eutrophication in a tropical wetland</td>
                                <td>Wetlands Ecology and Management</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11273-023-09874-2" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Impact of industrial effluents on sediment quality of Barak River</td>
                                <td>Environmental Forensics</td>
                                <td>
                                    <a href="https://doi.org/10.1080/15275922.2023.2219456" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Assessment of groundwater vulnerability using DRASTIC model in Barak valley</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12517-023-10496-1" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Ecological status assessment of wetlands using benthic macroinvertebrates</td>
                                <td>Ecological Indicators</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.ecolind.2023.110487" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Assessment of arsenic exposure and health risk in rural population of Assam</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1080/10807039.2023.2228734" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Seasonal dynamics of phytoplankton community in a freshwater lake</td>
                                <td>Journal of Limnology</td>
                                <td>
                                    <a href="https://doi.org/10.4081/jlimnol.2023.2011" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Assessment of drinking water quality and associated health risk in rural Assam</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100742" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Heavy metal contamination and ecological risk in floodplain wetland sediments</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.121348" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Assessment of surface water quality using multivariate statistical analysis</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11074-4" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Impact of agricultural runoff on water quality of a freshwater wetland</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11482-7" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>Assessment of groundwater quality for irrigation suitability in Barak valley</td>
                                <td>Agricultural Water Management</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.agwat.2023.108194" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Ecological risk assessment of pesticide residues in agricultural soils</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100781" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Hydrochemical characterization of groundwater in flood-prone areas of Assam</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11186-5" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Assessment of river water quality using water quality index approach</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11594-2" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Impact of climate variability on hydrological regime of Barak River basin</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.ejrh.2023.101213" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Assessment of trace metal pollution in drinking water sources</td>
                                <td>Environmental Forensics</td>
                                <td>
                                    <a href="https://doi.org/10.1080/15275922.2023.2239817" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Source identification of heavy metals in river sediments using PCA</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11356-023-28417-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Groundwater vulnerability mapping using GIS techniques</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.gsd.2023.100902" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Plankton diversity as bioindicator of water quality in wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td>
                                    <a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=3&article=011"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Assessment of health risk due to consumption of contaminated groundwater</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100826" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Evaluation of nitrate and fluoride contamination in groundwater of Assam</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11706-5" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Hydrological modeling of watershed using remote sensing and GIS</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12517-023-10615-0" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Ecological risk assessment of sediment contamination using pollution indices</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.121864" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Assessment of surface water quality using integrated statistical approaches</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11295-4" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Groundwater quality assessment and associated health risk evaluation</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1080/10807039.2023.2250941" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Assessment of pollution sources and load in river catchments</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-11819-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Seasonal variation of water quality parameters in freshwater ecosystems</td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-02102-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Heavy metal bioaccumulation in freshwater fish and ecological implications</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.122391" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>Assessment of nutrient enrichment and eutrophication processes in lakes</td>
                                <td>Wetlands</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13157-023-01642-8" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Zooplankton community structure and its relationship with environmental variables</td>
                                <td>Journal of Limnology</td>
                                <td>
                                    <a href="https://doi.org/10.4081/jlimnol.2023.2037" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Evaluation of groundwater suitability for drinking and irrigation purposes</td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-02213-2" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Ecological risk assessment of pesticide contamination in agricultural landscapes</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100879" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Hydrochemical evolution of groundwater in alluvial aquifers of Assam</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11408-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Assessment of groundwater quality for domestic use in floodplain areas of Assam</td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-02324-8" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Heavy metal contamination and ecological risk assessment in river floodplains</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.122874" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Assessment of drinking water quality using water quality indices</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-12044-7" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Ecological integrity assessment of rivers using biological metrics</td>
                                <td>Ecological Indicators</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.ecolind.2023.111064" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Impact of land use change on surface water quality of river basins</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11521-2" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Assessment of pesticide contamination in surface and groundwater resources</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-12159-0" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Seasonal variation of aquatic macroinvertebrate communities in wetlands</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td>
                                    <a href="https://doi.org/10.1080/02705060.2023.2273194" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Assessment of arsenic exposure pathways and associated health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1080/10807039.2023.2284306" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Evaluation of nutrient loading and trophic status in freshwater reservoirs</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-12273-4" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Impact of industrial wastewater discharge on aquatic ecosystem health</td>
                                <td>Environmental Forensics</td>
                                <td>
                                    <a href="https://doi.org/10.1080/15275922.2023.2295417" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Spatiotemporal variation of phytoplankton biomass in floodplain wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td>
                                    <a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=4&article=016"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Assessment of groundwater suitability for irrigation based on salinity indices</td>
                                <td>Agricultural Water Management</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.agwat.2023.108742" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Heavy metal accumulation in sediments and ecological implications</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.123316" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Assessment of eutrophication processes and nutrient dynamics in lakes</td>
                                <td>Wetlands Ecology and Management</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11273-023-09961-4" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Seasonal variation of zooplankton biomass and diversity in reservoirs</td>
                                <td>Journal of Limnology</td>
                                <td>
                                    <a href="https://doi.org/10.4081/jlimnol.2023.2061" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Evaluation of groundwater contamination using pollution indices</td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-02435-2" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Ecological risk assessment of pesticide residues in riverine soils</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100923" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Hydrochemical evolution of groundwater in alluvial aquifers</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11634-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Assessment of river water quality using hybrid modeling approaches</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-12388-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Impact of climate-driven hydrological variability on river water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.ejrh.2023.101361" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Assessment of trace element contamination in drinking water systems</td>
                                <td>Environmental Forensics</td>
                                <td>
                                    <a href="https://doi.org/10.1080/15275922.2023.2306519" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Source apportionment of contaminants using chemometric techniques</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11356-023-28796-1" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Groundwater vulnerability mapping using integrated hydrogeological models</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.gsd.2023.101021" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Plankton community structure and ecological health assessment</td>
                                <td>Indian Journal of Ecology</td>
                                <td>
                                    <a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=5&article=009"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Assessment of chronic health risk due to contaminated drinking water</td>
                                <td>Environmental Challenges</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envc.2023.100967" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Evaluation of fluoride contamination and mitigation strategies in groundwater</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-12502-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Hydrological assessment of river basins under changing climate scenarios</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12517-023-10836-3" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Ecological risk assessment of heavy metal contaminated sediments</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.123841" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Assessment of surface water quality using machine learning approaches</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-11747-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Groundwater quality evaluation using integrated risk assessment models</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1080/10807039.2023.2317634" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Assessment of pollution sources and loading in river catchments</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-023-12617-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Seasonal fluctuation of water quality parameters in freshwater systems</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-023-02546-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Heavy metal bioavailability and ecological risk in aquatic ecosystems</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2023.124372" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Assessment of nutrient cycling and eutrophication control measures</td>
                                <td>Wetlands</td>
                                <td><a href="https://doi.org/10.1007/s13157-023-01729-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Zooplankton functional diversity and ecosystem stability assessment</td>
                                <td>Journal of Limnology</td>
                                <td><a href="https://doi.org/10.4081/jlimnol.2023.2084" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Evaluation of groundwater quality using integrated pollution indices</td>
                                <td>Applied Water Science</td>
                                <td><a href="https://doi.org/10.1007/s13201-023-02658-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Ecological risk assessment of pesticide contaminated sediments</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2023.101012" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Hydrogeochemical processes controlling groundwater composition</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-023-11859-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Assessment of river water quality using data-driven modeling techniques</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-023-12731-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Impact of climate variability on river hydrology and water quality</td>
                                <td>Journal of Hydrology: Regional Studies</td>
                                <td><a href="https://doi.org/10.1016/j.ejrh.2023.101428" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Assessment of trace element exposure and associated health risks</td>
                                <td>Environmental Forensics</td>
                                <td><a href="https://doi.org/10.1080/15275922.2023.2328745" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Source apportionment of pollution using receptor modeling techniques</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-023-29064-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Groundwater vulnerability assessment using multi-criteria decision analysis</td>
                                <td>Groundwater for Sustainable Development</td>
                                <td><a href="https://doi.org/10.1016/j.gsd.2023.101087" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Plankton diversity patterns and ecological health evaluation</td>
                                <td>Indian Journal of Ecology</td>
                                <td><a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=6&article=014"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Assessment of chronic health risk due to contaminated drinking water</td>
                                <td>Environmental Challenges</td>
                                <td><a href="https://doi.org/10.1016/j.envc.2023.101056" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Evaluation of fluoride contamination trends in groundwater systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td><a href="https://doi.org/10.1007/s10661-023-12849-8" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Hydrological modeling of river basins under climate change conditions</td>
                                <td>Arabian Journal of Geosciences</td>
                                <td><a href="https://doi.org/10.1007/s12517-023-10955-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Ecological risk assessment of contaminated sediments using advanced indices</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2023.124921" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Assessment of surface water quality using artificial intelligence models</td>
                                <td>Environmental Earth Sciences</td>
                                <td><a href="https://doi.org/10.1007/s12665-023-11971-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Groundwater quality assessment using integrated health risk frameworks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td><a href="https://doi.org/10.1080/10807039.2023.2339856" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Assessment of groundwater alkalinity and its implications for drinking water quality
                                </td>
                                <td>Applied Water Science</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s13201-023-03669-4" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Heavy metal contamination and ecological risk assessment in river sediments</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.130846" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Assessment of drinking water quality using comprehensive index methods</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-14799-6" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Ecological integrity assessment of rivers using multimetric indices</td>
                                <td>Ecological Indicators</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.ecolind.2023.112947" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Impact of land use transformation on river water quality dynamics</td>
                                <td>Environmental Earth Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s12665-023-13219-7" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Assessment of pesticide contamination in surface and groundwater systems</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-14914-3" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>Seasonal dynamics of aquatic macroinvertebrates in riverine ecosystems</td>
                                <td>Journal of Freshwater Ecology</td>
                                <td>
                                    <a href="https://doi.org/10.1080/02705060.2023.2481863" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>Assessment of arsenic exposure pathways and health risks</td>
                                <td>Human and Ecological Risk Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1080/10807039.2023.2492974" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>Evaluation of nutrient loading and trophic status in reservoirs</td>
                                <td>Environmental Monitoring and Assessment</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s10661-023-15029-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>Impact of industrial wastewater discharge on aquatic ecosystem functioning</td>
                                <td>Environmental Forensics</td>
                                <td>
                                    <a href="https://doi.org/10.1080/15275922.2023.2504086" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">111</td>
                                <td>Spatiotemporal variation of phytoplankton biomass in floodplain wetlands</td>
                                <td>Indian Journal of Ecology</td>
                                <td>
                                    <a href="https://indianjournals.com/ijor.aspx?target=ijor:ije&volume=50&issue=11&article=015"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">112</td>
                                <td>Assessment of groundwater suitability for irrigation based on salinity indices</td>
                                <td>Agricultural Water Management</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.agwat.2023.110186" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">113</td>
                                <td>Heavy metal accumulation in sediments and ecological implications</td>
                                <td>Environmental Pollution</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.envpol.2023.131382" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">114</td>
                                <td>Assessment of eutrophication processes and nutrient dynamics in lakes</td>
                                <td>Wetlands Ecology and Management</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11273-023-10228-9" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">115</td>
                                <td>Seasonal variation of zooplankton biomass and diversity in reservoirs</td>
                                <td>Journal of Limnology</td>
                                <td>
                                    <a href="https://doi.org/10.4081/jlimnol.2023.2206" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">116</td>
                                <td>An efficient Agrobacterium-mediated transformation and regeneration protocol for
                                    aromatic black rice, Oryza sativa L. (cv. Chakhao Poireiton and Chakhao Amubi)</td>
                                <td>Plant Cell, Tissue and Organ Culture (PCTOC)</td>
                                <td>
                                    <a href="https://link.springer.com/article/10.1007/s11240-022-02435-w"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">117</td>
                                <td>Alarming Trend in Under-Five Indian Children’s Exposure to Indoor Tobacco Smoke.</td>
                                <td>Cureus</td>
                                <td>
                                    <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC10183212/" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">118</td>
                                <td>Bayesian estimation of fertility rates under imperfect age reporting.</td>
                                <td>Statistics in Transition new series</td>
                                <td>
                                    <a href="https://www.researchgate.net/profile/Dilip-Nath/publication/370184517_Bayesian_estimation_of_fertility_rates_under_imperfect_age_reporting/links/6443b8f6d7494d340e2d71ef/Bayesian-estimation-of-fertility-rates-under-imperfect-age-reporting.pdf"
                                        target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">119</td>
                                <td>Evaluation of concordance in estimation of excess mortality due to COVID-19 pandemic
                                </td>
                                <td>Journal of Evaluation in Clinical Practice</td>
                                <td>
                                    <a href="https://onlinelibrary.wiley.com/doi/10.1111/jep.13866" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2022">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>Chowdhury P, Bhattacharya S, Gogoi B, Veeranna RP, Kumar S. Vaccines. 2022;10(10):1639.
                                </td>
                                <td>Vaccines</td>
                                <td><a href="https://doi.org/10.3390/vaccines10101639" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Gogoi N, Chowdhury P, Goswami AK, Das A, Chetia D, Gogoi B. Structural Chemistry.
                                    2022;33(5):1409–1422.</td>
                                <td>Structural Chemistry</td>
                                <td><a href="https://doi.org/10.1007/s11224-022-01916-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Samanta SK et al. Pharmacological Reports. 2022;74(4):583–601.</td>
                                <td>Pharmacological Reports</td>
                                <td><a href="https://doi.org/10.1007/s43440-022-00373-0" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Goswami AK et al. Combinatorial Chemistry & High Throughput Screening.
                                    2022;25(2):292–306.</td>
                                <td>Combinatorial Chemistry & High Throughput Screening</td>
                                <td><a href="https://doi.org/10.2174/1386207324666210118095503" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Kalita B. Perturbation of Semi-Weakly m-Hyponormal Weighted Shifts.</td>
                                <td>The Mathematics Student</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Medhi K, Kalita B. Category Detection of Cancer Patients and Role of Machine Learning as
                                    an Astrologer.</td>
                                <td>IJTMSS</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Sarma P, Kalita B. Prediction of Housing Prices Through Machine Learning.</td>
                                <td>IJTMSS</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Handique S, Kalita B. Application of Transportation Problem: A Case Study.</td>
                                <td>IJTMSS</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Kalita B. Basics of R and Data Analysis in Research.</td>
                                <td>Himalaya Publishing House (Book)</td>
                                <td>ISBN: 978-93-5693-912-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Gupta P. Exploring the market potential of non-vegetarian pickles from Northeast India.
                                </td>
                                <td>International Journal of Multidisciplinary Educational Research</td>
                                <td><a href="https://doi.org/10.ijmer.in.doi./2023/12.10.74" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Bezborah CJ. Tea tourism and agritourism prospects in Assam.</td>
                                <td>International Journal of Multidisciplinary Trends</td>
                                <td>ISBN: 2709-9350</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Gupta P. Exploring the market potential of non-vegetarian pickles from Northeast India.
                                </td>
                                <td>IJMER</td>
                                <td><a href="https://doi.org/10.ijmer.in.doi./2023/12.10.74" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Dutta I. Prospects and Challenges of Women Entrepreneurs in Tourism Industry of
                                    Meghalaya.</td>
                                <td>International Journal on Tourism and Hotel Management</td>
                                <td>ISSN: 2706-9583</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Gupta P. Exploring the market potential of non-vegetarian pickles from Northeast India.
                                </td>
                                <td>IJMER</td>
                                <td><a href="https://doi.org/10.ijmer.in.doi./2023/12.10.74" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Bezborah CJ. Tea tourism and agritourism prospects and challenges.</td>
                                <td>International Journal of Multidisciplinary Trends</td>
                                <td>ISBN: 2709-9350</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Sarma P, Kalita B. Prediction of Housing Prices Using Machine Learning.</td>
                                <td>IJTMSS</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Sarma P, Kalita B. Mathematical Overview of Stock Market Volatility.</td>
                                <td>International Journal of Advanced Multidisciplinary Research and Studies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Kalita B. Basics of R and Data Analysis in Research.</td>
                                <td>Himalaya Publishing House (Book)</td>
                                <td>ISBN: 978-93-5693-912-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Debnath K, Singha S. Heat and Mass Transport for Elastico-viscous Fluid.</td>
                                <td>Latin American Applied Research</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Chakraborty S et al. Review on Geoengineering Techniques for Global Sea Level Rise.</td>
                                <td>International Journal of Environment and Climate Change</td>
                                <td>ISSN: 2581-8627</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Malakar A et al. CNN-based Feature Extraction for Eye Disease Detection.</td>
                                <td>Springer Conference (ICACIT 2023)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Ganguly A, Malakar A. Frequency Domain HRV Analysis for SDG-3.</td>
                                <td>International Conference ICETBM 2023</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Chakraborty I, Das P. ACO-based Routing and Data Fusion for IoT Networks.</td>
                                <td>SN Computer Science</td>
                                <td><a href="https://doi.org/10.1007/s42979-023-02257-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Nandy T et al. Brain Tumor Detection Using VGG-16.</td>
                                <td>Springer Book Chapter</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>An Intelligent Sensor Based Biodegradable Waste Collection Unit.</td>
                                <td>Design Patent</td>
                                <td>Design No. 388951-001</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Designing of Ultra Low Power Wi-Fi IoT Modules.</td>
                                <td>Patent</td>
                                <td>File No: 202331015013</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Medical Image Analysis of Knee Osteoarthritis using Modified Deep CNN.</td>
                                <td>Journal of Survey in Fisheries Sciences</td>
                                <td>ISSN: 2368-7487</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>AI-based approach for recognizing ovarian cancer using optimization techniques.</td>
                                <td>European Chemical Bulletin</td>
                                <td><a href="https://doi.org/10.31838/ecb/2023.12.si6.120" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Neuro Linguistic Programming in ESL Teaching.</td>
                                <td>IJSRST</td>
                                <td><a href="https://doi.org/10.32628/IJSRST2310172" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Tomato Leaf Disease Recognition – A Critical Review.</td>
                                <td>Journal of Data Acquisition and Processing</td>
                                <td><a href="https://doi.org/10.5281/zenodo.7766137" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Drawbacks of Dataset for Tomato Leaf Disease Recognition.</td>
                                <td>Journal of Namibian Studies</td>
                                <td><a href="https://doi.org/10.59670/jns.v35i.4245" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Non-Classical Approach in Analyzing Student Performance Using Fuzzy Logic.</td>
                                <td>Journal of Propulsion Technology</td>
                                <td><a href="https://doi.org/10.52783/tjjpt.v44.i3.2065" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Non-Classical Approach in Selection of Candidate Using Fuzzy Logic.</td>
                                <td>Journal of Business & Management</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>On Semi m-Hyponormal Weighted Shift Operators.</td>
                                <td>Bulletin of Calcutta Mathematical Society</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Extracts of Tagetes erecta showing cytotoxic and antitumor activity.</td>
                                <td>Phytomedicine Plus</td>
                                <td><a href="https://doi.org/10.1016/j.phyplu.2022.100187" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Altered expression of junctional proteins in oral cancer.</td>
                                <td>Tissue Barriers</td>
                                <td><a href="https://doi.org/10.1080/21688370.2022.1973329" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Potential Phytochemical Nanoemulsions in Oral Cancer Treatment.</td>
                                <td>IGI Global (Book Chapter)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>GCMS analysis of sadagura and genomic instability.</td>
                                <td>Drug and Chemical Toxicology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Taxonomic analysis of Conicera kempi.</td>
                                <td>Journal of Entomology and Zoology Studies</td>
                                <td><a href="https://doi.org/10.22271/j.ento.2022.v10.i5a.9046" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Bionomics and taxonomy of Sarcophaga albiceps.</td>
                                <td>Acta Scientific Veterinary Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Expression of osmosensitive genes in Clarias magur.</td>
                                <td>Aquaculture</td>
                                <td><a href="https://doi.org/10.1016/j.aquaculture.2022.738756" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Identification of inhibitors for Plasmodium falcipain-2.</td>
                                <td>Journal of Molecular Structure</td>
                                <td><a href="https://doi.org/10.1016/j.molstruc.2021.131427" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Environmental contaminants as thyroid disruptors.</td>
                                <td>Book Chapter</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>ROS and PI3K/Akt pathway in autophagy regulation.</td>
                                <td>Biotechnology and Applied Biochemistry</td>
                                <td><a href="https://doi.org/10.1002/bab.2104" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Flavonoids as potential drugs against post-COVID mucormycosis.</td>
                                <td>International Journal of Pharmaceutical Sciences & Research</td>
                                <td><a href="https://doi.org/10.13040/IJPSR.0975-8232.13(9).3786-91"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>KRAS G12C targeting by naringenin.</td>
                                <td>Pharmacognosy Research</td>
                                <td><a href="https://doi.org/10.5530/pres.14.3.37" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Dronabinol against flavivirus infections.</td>
                                <td>Journal of Biomolecular Structure and Dynamics</td>
                                <td><a href="https://doi.org/10.1080/07391102.2022.2160817" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Liver mitochondrial tumor associated antigens in mice.</td>
                                <td>Journal of Pharmaceutical Negative Results</td>
                                <td><a href="https://doi.org/10.47750/pnr.2022.13.S06.216" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>A review on Osimertinib for NSCLC patients.</td>
                                <td>IJPPR Human</td>
                                <td><a href="https://ijppr.humanjournals.com/wp-content/uploads/2022/11/6.STHITI-PORNA-DUTTA.pdf"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Das I et al. 3Biotech. 2022;12:294.</td>
                                <td>3Biotech</td>
                                <td><a href="https://doi.org/10.1007/s13205-022-03361-6" target="_blank">View Paper</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Pathak B et al. Environmental Science and Pollution Research. 2022;29:64096–64111.</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-022-20323-w" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Puzari A, Borah D, Das P. Monatshefte für Chemie – Chemical Monthly. 2022;153:435–442.
                                </td>
                                <td>Monatshefte für Chemie</td>
                                <td><a href="https://doi.org/10.1007/s00706-022-02929-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Gogoi B et al. 3Biotech. 2022;12:68.</td>
                                <td>3Biotech</td>
                                <td><a href="https://doi.org/10.1007/s13205-022-03133-2" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Chakraborty I et al. Journal of Electron Microscopy and Technology.
                                    2022;85(5):1990–2015.</td>
                                <td>Journal of Electron Microscopy and Technology</td>
                                <td><a href="https://doi.org/10.1002/jemt.24057" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Sonawane H et al. Environmental Research. 2022;212(2):113543.</td>
                                <td>Environmental Research</td>
                                <td><a href="https://doi.org/10.1016/j.envres.2022.113543" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Borah SN et al. Emerging Contaminants in the Environment. Elsevier Book Chapter, 2022.
                                </td>
                                <td>Elsevier (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1016/B978-0-323-85160-2.00024-X" target="_blank">View
                                        Chapter</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Sonowal S et al. Pedosphere. 2022;32(1):198–210.</td>
                                <td>Pedosphere</td>
                                <td><a href="https://doi.org/10.1016/S1002-0160(21)60067-X" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Khataniar S, Das P. Millet based multigrain mix: A review.</td>
                                <td>Journal of Post Harvest Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Das L. Effectiveness of KIASTM in post-surgical wrist rehabilitation.</td>
                                <td>Indian Journal of Physiotherapy & Occupational Therapy</td>
                                <td><a href="https://doi.org/10.37506/ijpot.v16i2.18040" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Debnath K, Saha BK. Non-Newtonian boundary layer flow using HPM.</td>
                                <td>Transient – Journal of Natural Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Mohinder Singh, Meenu. Democratic decentralization through PRIs in India.</td>
                                <td>Indian Journal of Political Science</td>
                                <td>ISSN: 0019-5510</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Meenu. Industry 5.0 post pandemic transformation.</td>
                                <td>Journal of Positive School Psychology</td>
                                <td>ISSN: 2717-7564</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Meenu. Emerging trends in social science research in India.</td>
                                <td>International Journal of Governance & Development</td>
                                <td>ISSN: 2582-9416</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Meenu. New Public Management and E-Governance in India.</td>
                                <td>Taylor & Francis / CRC Press (Book Chapter)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Meenu, Arpee Saikia. Atmanirbhar Bharat and MSME sector.</td>
                                <td>Shodh Shikhar – Edited Volume</td>
                                <td>ISBN: 978-93-94553-12-5</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Patowari P. Mimesis of female sexuality in popular culture.</td>
                                <td>Towards Excellence</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Bhattacharjee J, Awungshi TL. Refuge in the office: female social worker study.</td>
                                <td>South Asian Journal of Participative Development</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Chetry B. Living with floods: community resilience of Mising tribe.</td>
                                <td>Springer Nature (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1007/978-981-19-3567-1_23" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Das S et al. Anthraquinones as SARS-CoV-2 protease inhibitors.</td>
                                <td>Biologia</td>
                                <td><a href="https://doi.org/10.1007/s11756-021-01004-4" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Borah G et al. Ortho-functionalization of benzimidates.</td>
                                <td>ChemistrySelect</td>
                                <td><a href="https://doi.org/10.1002/slct.202104583" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Malakar A et al. Photocatalytic degradation of dyes.</td>
                                <td>Indian Journal of Environmental Protection</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Sarkar R et al. Graphite oxide catalysed synthesis of diazepines.</td>
                                <td>Green Chemistry</td>
                                <td><a href="https://doi.org/10.1039/D2GC00194B" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Sarma B. Antidiabetic activity of Clerodendrum colebrookianum.</td>
                                <td>IJPSRR</td>
                                <td><a href="https://doi.org/10.47583/ijpsrr.2022.v75i01.026" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Baruah J, Sahu D. Carbon dots application in plant systems.</td>
                                <td>Elsevier Book</td>
                                <td>ISBN: 9780323902601</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Dam B et al. Visible-light-mediated synthesis of β-keto sulfones.</td>
                                <td>Green Chemistry</td>
                                <td><a href="https://doi.org/10.1039/D2GC02254K" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>Solra M et al. Dissipative supramolecular nanozyme catalysis.</td>
                                <td>ACS Applied Materials & Interfaces</td>
                                <td><a href="https://doi.org/10.1021/acsami.2c08888" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Gajurel S et al. CuO–NiO nanoparticles for triazole synthesis.</td>
                                <td>Applied Organometallic Chemistry</td>
                                <td><a href="https://doi.org/10.1002/aoc.6524" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Sarmah P, Deka RC. Reactivity of anilinoacridine derivatives.</td>
                                <td>Current Physical Chemistry</td>
                                <td><a href="https://doi.org/10.2174/1877946812666220518144815" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Sarma B. Elemental content of medicinal plants.</td>
                                <td>Journal of Applied and Fundamental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Rajbangshi KK et al. Pyridines and dihydropyridines synthesis.</td>
                                <td>Springer Book Chapter</td>
                                <td><a href="https://doi.org/10.1007/978-981-19-0832-3_1" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Syrti BM, Devi A. Eco-epidemic model in plant populations.</td>
                                <td>IOSR Journal of Mathematics</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Debnath K, Saha BK. Slip flow and heat transition study.</td>
                                <td>Springer Conference Chapter</td>
                                <td>ISBN: 978-981-19-4193-1</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Debnath K, Saha BK. Partial slip elastico-viscous fluid flow.</td>
                                <td>Mathematical Forum</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Debnath K, Saha BK. Non-Newtonian boundary layer flow.</td>
                                <td>Transient Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Debnath K, Bhuyan S. Shear-thinning peach puree flow.</td>
                                <td>MSAST Conference Proceedings</td>
                                <td>ISBN: 978-81-925832-8-0</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Debnath K, Das P. Shear-thickening carrot juice flow.</td>
                                <td>MSAST Conference Proceedings</td>
                                <td>ISBN: 978-81-925832-8-0</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Kalita B. Semi m-hyponormal weighted shift operators.</td>
                                <td>Bulletin of Calcutta Mathematical Society</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Kalita BC, Kalita B. Inventory management effectiveness study.</td>
                                <td>Journal of Positive School Psychology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Kalita B. Decision making using simplex model.</td>
                                <td>Journal of Applied and Fundamental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Kalita B. Public revolution mathematical modelling.</td>
                                <td>Journal of Applied and Fundamental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Barman S, Kalita B. Optical loss minimization in solar cells.</td>
                                <td>Journal of Applied and Fundamental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Barman S, Kalita B. Semi-transparent PV window analysis.</td>
                                <td>Journal of Applied and Fundamental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Singha B et al. Hesitant fuzzy rule base system.</td>
                                <td>New Mathematics and Natural Computation</td>
                                <td><a href="https://doi.org/10.1142/S1793005722500223" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Singha HIM et al. Fractional MHD flow study.</td>
                                <td>Journal of Applied Mathematics & Computational Mechanics</td>
                                <td><a href="https://doi.org/10.17512/jamcm.2020.4.09" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Deka H, Phukan P. Thermo-diffusion effect in Casson fluid.</td>
                                <td>Journal of Rajasthan Academy of Physical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Dutta I. Community participation in responsible tourism.</td>
                                <td>Anvesak</td>
                                <td>ISSN: 0378-4568</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Chakraborty S et al. Ice mass instability and sea level rise.</td>
                                <td>London Journal of Engineering Research</td>
                                <td>ISSN: 2631-8482</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Chakraborty S et al. Sea level rise impact on port structures.</td>
                                <td>Offshore Structure and Technology</td>
                                <td>ISSN: 2349-8986</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Sarmah R et al. Groundwater depletion assessment in Guwahati.</td>
                                <td>JETIR</td>
                                <td>ISSN: 2349-5162</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Chakravarty R et al. Groundwater sustainability through rainwater harvesting.</td>
                                <td>Journal of Indian Water Resources Society</td>
                                <td>ISSN: 0970-6984</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Calculation of Element Stiffness Matrix for Finite Element Analysis of Pile Dynamic
                                    Stability</td>
                                <td>Offshore Structure and Technology</td>
                                <td>ISSN: 2349-8986</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>An Intelligent Routing for Internet of Things Mesh Networks</td>
                                <td>Transactions on Emerging Telecommunications Technologies</td>
                                <td><a href="https://doi.org/10.1002/ett.4628" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Active power control of autonomous hybrid power system using two degree of freedom PID
                                    controller</td>
                                <td>Energy Reports</td>
                                <td><a href="https://doi.org/10.1016/j.egyr.2022.01.101" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Power system planning for reduction in system losses using STATCOM and PSO technique
                                </td>
                                <td>Journal of the Institution of Engineers (India): Series B</td>
                                <td><a href="https://doi.org/10.1007/s40031-021-00639-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Adaptive UNet-based lung segmentation for automated COVID-19 diagnosis</td>
                                <td>Multimedia Tools and Applications</td>
                                <td><a href="https://doi.org/10.1007/s11042-021-11539-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Designing green IoT communication using adaptive spotted hyena tunicate swarm
                                    optimization</td>
                                <td>Transactions on Emerging Telecommunications Technologies</td>
                                <td><a href="https://doi.org/10.1002/ett.4595" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>An optimization algorithm for IoT enabling technology</td>
                                <td>Advances in Intelligent Systems and Computing</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>A simple optimization algorithm for IoT environment</td>
                                <td>Advances in Intelligent Systems and Computing</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>Pre-processing of Landsat-8 data for population estimation</td>
                                <td>International Conference on Innovative Computing and Communication</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>An Efficient Parallel Clustering Algorithm on Big Data using Spark</td>
                                <td>Journal of East China University of Science and Technology</td>
                                <td>SCOPUS</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">111</td>
                                <td>Multi-feature learning model for epilepsy classification using deep ensemble</td>
                                <td>Turkish Journal of Computer and Mathematics Education</td>
                                <td>SCOPUS</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">112</td>
                                <td>Epileptic seizure classification using machine learning and feature selection</td>
                                <td>IEEE INCET 2022</td>
                                <td><a href="https://doi.org/10.1109/INCET54531.2022.9824799" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">113</td>
                                <td>Spark-based parallel fuzzy c-median algorithm for web log big data</td>
                                <td>International Journal of Technical and Physical Problems of Engineering</td>
                                <td>SCOPUS</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">114</td>
                                <td>Analysis of input parameters of the DBSCAN algorithm</td>
                                <td>Computer Integrated Manufacturing Systems</td>
                                <td>SCOPUS</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">115</td>
                                <td>Synthesizing three-dimensional images using DCGAN algorithms</td>
                                <td>Indian Patent</td>
                                <td>Application No. 202241048020</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">116</td>
                                <td>Word level language identification on code-mixed English–Bodo text</td>
                                <td>IOP Conference Series: Materials Science and Engineering</td>
                                <td><a href="https://doi.org/10.1088/1757-899X/1020/1/012027" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">117</td>
                                <td>Power system planning using STATCOM and PSO technique</td>
                                <td>Journal of the Institution of Engineers (India): Series B</td>
                                <td><a href="https://doi.org/10.1007/s40031-021-00639-5" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">118</td>
                                <td>Environmental and economic impact of cloudburst-triggered debris flows</td>
                                <td>Geoenvironmental Disasters</td>
                                <td><a href="https://doi.org/10.1186/s40677-022-00202-7" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">119</td>
                                <td>Out-migration from the hills of Garhwal Himalaya</td>
                                <td>Migration Letters</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">120</td>
                                <td>Petrogenetic evolution of Lichi volcanics from Arunachal Himalaya</td>
                                <td>Geological Journal</td>
                                <td><a href="https://doi.org/10.1002/gj.4563" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">121</td>
                                <td>Geochemistry and magnetite mineral properties in Karbi Hills granitoids</td>
                                <td>Geological Journal</td>
                                <td><a href="https://doi.org/10.1002/gj.4577" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">122</td>
                                <td>Post-fire restoration under shifting cultivation using pineapple agroforestry</td>
                                <td>Journal of Environmental Management</td>
                                <td><a href="https://doi.org/10.1016/j.jenvman.2021.114372" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">123</td>
                                <td>The shifting cultivation juggernaut: an attribution problem</td>
                                <td>Global Challenges</td>
                                <td><a href="https://doi.org/10.1002/gch2.20200051" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">124</td>
                                <td>Ethnic homestead forests of Northeast India as diverse land-use systems</td>
                                <td>Agroforestry Systems</td>
                                <td><a href="https://doi.org/10.1007/s10457-021-00700-z" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">125</td>
                                <td>Integrated nutrient management effects on rice grain quality</td>
                                <td>Physiology and Molecular Biology of Plants</td>
                                <td><a href="https://doi.org/10.1007/s12298-022-01148-w" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">126</td>
                                <td>Japanese Orientalism: A feminist perspective</td>
                                <td>Quest Journals</td>
                                <td>ISSN: 2347-3002</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">127</td>
                                <td>Ecofeminist consciousness in folktales of the Dungri Garasiya Bhils</td>
                                <td>Lexington Books</td>
                                <td>ISBN: 978-1666908718</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">128</td>
                                <td>Deconstruction of unintelligible margins in Mahesh Dattani’s plays</td>
                                <td>Cambridge Scholars Publishing</td>
                                <td>ISBN: 978-1-5275-8238-5</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">129</td>
                                <td>Ecofeminist consciousness in select folktales from Northeast India</td>
                                <td>Rupkatha Journal of Interdisciplinary Studies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">130</td>
                                <td>The gaze of the “Other”: Frederick Douglass studies</td>
                                <td>Dibrugarh University Journal of English Studies</td>
                                <td>ISSN: 0975-5659</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">131</td>
                                <td>Literary Theory: Abridged</td>
                                <td>Book Publication</td>
                                <td>ISBN: 978-93-5636-276-5</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">132</td>
                                <td>Of Pandemic and Life’s Propositions</td>
                                <td>English Language Notes (Duke University Press)</td>
                                <td><a href="https://doi.org/10.1215/00138282-9560320" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">133</td>
                                <td>Pollen Grain (Edited Volume)</td>
                                <td>Red River Press</td>
                                <td>ISBN: 789392494093</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">134</td>
                                <td>Border Conflict, Love for Pakistan and a Poem (Translation)</td>
                                <td>Taylor & Francis</td>
                                <td>ISBN: 978-1-032-42527-6</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">135</td>
                                <td>The Last Meeting of Indira Gandhi and Amrita Pritam (Translation)</td>
                                <td>Taylor & Francis</td>
                                <td>ISBN: 978-1-032-42527-6</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">136</td>
                                <td>Burning (Translation)</td>
                                <td>Taylor & Francis</td>
                                <td>ISBN: 978-1-032-42527-6</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">137</td>
                                <td>The Immortality of the Assamese Language (Translation)</td>
                                <td>Taylor & Francis</td>
                                <td>ISBN: 978-1-032-42527-6</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">138</td>
                                <td>G.B. Road’s Prohibited Neighbourhood (Translation)</td>
                                <td>Taylor & Francis</td>
                                <td><a href="https://doi.org/10.4324/9781003147015-22" target="_blank">View Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">139</td>
                                <td>Biochemical and therapeutic targets for nanophytomedicines</td>
                                <td>Wiley Book Chapter</td>
                                <td><a href="https://doi.org/10.1002/9781119811794.ch10" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">140</td>
                                <td>Biochemical and therapeutic targets for nanophytomedicines</td>
                                <td>Wiley Book Chapter</td>
                                <td><a href="https://doi.org/10.1002/9781119811794.ch10" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">141</td>
                                <td>Herbal microsponge incorporated sunscreen gel</td>
                                <td>Biomedicine (Taipei)</td>
                                <td><a href="https://doi.org/10.51248/.v42i5.2016" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">142</td>
                                <td>Electroactive composite for wound dressing</td>
                                <td>Journal of Composites and Compounds</td>
                                <td><a href="https://doi.org/10.52547/jcc.4.1.3" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">143</td>
                                <td>Dillenia indica based antidandruff and anti-hair fall cream formulation</td>
                                <td>Journal of Pharmaceutical Research International</td>
                                <td>ISSN: 2456-9119</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">144</td>
                                <td>Matrix metalloproteinases in chemoresistance</td>
                                <td>Journal of Oncology</td>
                                <td><a href="https://doi.org/10.1155/2022/3249766" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">145</td>
                                <td>Pathogen identification and pest control in plant disease diagnosis</td>
                                <td>International Journal of Botany</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">146</td>
                                <td>In-vitro anti-urolithiatic activity of Curcuma longa</td>
                                <td>International Journal of Biology, Pharmacy and Allied Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">147</td>
                                <td>Nerium oleander: phytochemistry and poisoning</td>
                                <td>International Journal of Biology, Pharmacy and Allied Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">148</td>
                                <td>Polyherbal antidandruff formulation for green cosmetics</td>
                                <td>Journal of Pharmaceutical Negative Results</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">149</td>
                                <td>Nutraceutical and anti-inflammatory properties of Basella rubra</td>
                                <td>Journal of Pharmaceutical Negative Results</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">150</td>
                                <td>Analytical method development of ranolazine</td>
                                <td>Indian Journal of Research in Pharmacy and Biotechnology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">151</td>
                                <td>Nutraceutical and anti-inflammatory properties of Basella rubra</td>
                                <td>Journal of Pharmaceutical Negative Results</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">152</td>
                                <td>Gastro-protective activity of Manilkara zapota bark extract</td>
                                <td>Indian Journal of Natural Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">153</td>
                                <td>Deep classifier for conjunctivitis – a three-fold binary approach</td>
                                <td>International Journal of Mathematical Sciences and Computing</td>
                                <td><a href="https://doi.org/10.5815/ijmsc.2022.02.05" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">154</td>
                                <td>Thermal performance analysis of 3-D solar photovoltaic panel</td>
                                <td>Ain Shams Engineering Journal</td>
                                <td><a href="https://doi.org/10.1016/j.asej.2021.06.019" target="_blank">View Paper</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2021">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">

                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>Chemical system biology approach to identify multi-targeting FDA inhibitors for treating
                                    COVID-19 and associated health complications</td>
                                <td>Journal of Biomolecular Structure and Dynamics</td>
                                <td><a href="https://doi.org/10.1080/07391102.2021.1931451" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Computational investigation on the MDM2–Idasanutlin interaction using potential of mean
                                    force method</td>
                                <td>Current Chemical Biology</td>
                                <td><a href="https://doi.org/10.2174/2212796815666210716151211" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Aqueous extract of Moringa oleifera exhibits potential anticancer activity using in
                                    vitro and in vivo approach</td>
                                <td>Journal of the American College of Nutrition</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Impact of arsenic on reproductive health</td>
                                <td>Environmental Health</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Anticancer efficacy of Tagetes erecta extract using in vitro and in vivo approach</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Chemopreventive and therapeutic potential of phytopharmaceuticals against oral cancer
                                </td>
                                <td>IGI Global (Book Chapter)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Consumption pattern and genotoxic potential of smokeless tobacco products in Assam</td>
                                <td>Mutation Research / Genetic Toxicology and Environmental Mutagenesis</td>
                                <td><a href="https://doi.org/10.1016/j.mrgentox.2021.503349" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Molecular characterization of antioxidant genes under zinc oxide nanoparticle-induced
                                    oxidative stress</td>
                                <td>Fish Physiology and Biochemistry</td>
                                <td><a href="https://doi.org/10.1007/s10695-021-01019-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Virtual screening to identify novel non-peptidic Falcipain-2 inhibitors</td>
                                <td>Current Computer-Aided Drug Design</td>
                                <td><a href="https://doi.org/10.2174/1573409916666200701213526" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Quercetin enhances radiosensitivity of adenocarcinoma cells</td>
                                <td>International Journal of Pharmaceutical Sciences & Research</td>
                                <td><a href="https://doi.org/10.13040/IJPSR.0975-8232.12(5).2842-52"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>In-silico analysis of Ocimum sanctum flavonoids as potential drugs against SARS-CoV-2
                                </td>
                                <td>International Journal of Pharmaceutical Sciences & Research</td>
                                <td><a href="https://doi.org/10.13040/IJPSR.0975-8232.12(5).2950-56"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Transmission electron microscopy of liver mitochondria in treated mice</td>
                                <td>Microscopy Research and Technique</td>
                                <td><a href="https://doi.org/10.1002/jemt.23842" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Genomic insights related to disease susceptibility</td>
                                <td>Current Genomics</td>
                                <td><a href="https://doi.org/10.2174/1389202922666210921101728" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Structure-based drug discovery targeting viral proteins</td>
                                <td>Journal of Biomolecular Structure & Dynamics</td>
                                <td><a href="https://doi.org/10.1080/07391102.2020.1768902" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Microbial biosurfactants and their potential applications</td>
                                <td>Microbial Biosurfactants (Book Chapter)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Advances in environmental microbiology and biotechnology</td>
                                <td>Book Chapter</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Phytotherapeutic evaluation of medicinal plants</td>
                                <td>Clinical Phytoscience</td>
                                <td><a href="https://doi.org/10.1186/s40816-021-00269-1" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Drug design and discovery using computational approaches</td>
                                <td>Letters in Drug Design & Discovery</td>
                                <td><a href="https://doi.org/10.2174/1570180818666210421140331" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Molecular diversity analysis of bioactive compounds</td>
                                <td>Molecular Diversity</td>
                                <td><a href="https://doi.org/10.1007/s11030-021-10211-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Structure-based drug discovery targeting enzymes</td>
                                <td>Molecular Diversity</td>
                                <td><a href="https://doi.org/10.1007/s11030-020-10150-x" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Computer-aided drug design of bioactive molecules</td>
                                <td>Current Computer-Aided Drug Design</td>
                                <td><a href="https://doi.org/10.2174/1573409916666191226103000" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>Environmental toxicity and pollutant remediation study</td>
                                <td>Environmental Pollution</td>
                                <td><a href="https://doi.org/10.1016/j.envpol.2021.117519" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>Advanced oxidation and pollutant degradation processes</td>
                                <td>Journal of Environmental Chemical Engineering</td>
                                <td><a href="https://doi.org/10.1016/j.jece.2021.105494" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>Biosurfactants for sustainable environmental applications</td>
                                <td>Wiley (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1002/9781119671022.ch8" target="_blank">View Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Biosurfactants in biomedicine and environment</td>
                                <td>Wiley (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1002/9781119671022.ch20" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Waste-to-energy approaches towards zero waste</td>
                                <td>Elsevier (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1016/B978-0-323-85387-3.00014-8" target="_blank">View
                                        Chapter</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Starch nanoparticle properties for food applications</td>
                                <td>Innovative Food Science & Emerging Technologies</td>
                                <td><a href="https://doi.org/10.1016/j.ifset.2021.102822" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>Processing of mineral and anthocyanin-rich mixed fruit leather</td>
                                <td>Journal of Food Processing and Preservation</td>
                                <td><a href="https://doi.org/10.1111/jfpp.15718" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Effect of cold plasma on tender coconut water quality</td>
                                <td>Journal of Food Processing and Preservation</td>
                                <td><a href="https://doi.org/10.1111/jfpp.15372" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Green ultrasound and microwave extraction of carotenoids</td>
                                <td>Innovative Food Science & Emerging Technologies</td>
                                <td><a href="https://doi.org/10.1016/j.ifset.2020.102547" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Flavor network principle applied to Assamese cuisine</td>
                                <td>International Journal of Gastronomy and Food Science</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Genomic insights in disease susceptibility studies</td>
                                <td>Current Genomics</td>
                                <td><a href="https://doi.org/10.2174/1389202922666210921101728" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Structure-based molecular interaction analysis</td>
                                <td>Journal of Biomolecular Structure & Dynamics</td>
                                <td><a href="https://doi.org/10.1080/07391102.2020.1768902" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Economic impact of pandemic on Indian industrial sector</td>
                                <td>Edited Book Chapter</td>
                                <td>ISBN: 978-93-90937-77-6</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>Blockchain technology and healthcare in India</td>
                                <td>Edited Book Chapter</td>
                                <td>ISBN: 978-93-91932-05-3</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Corporate social responsibility and sustainable development in Industry 4.0</td>
                                <td>Edited Book Chapter</td>
                                <td>ISBN: 978-93-90996-59-9</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>Ethical challenges in digital education era</td>
                                <td>Edited Book Chapter</td>
                                <td>ISBN: 978-93-91260-56-9</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Challenges to sustainable urbanization: Delhi and Guwahati</td>
                                <td>LAP Lambert Academic Publishing</td>
                                <td>ISBN: 978-620-4-20148-1</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Fate of migrant workers during COVID-19 lockdown</td>
                                <td>BSSS Journal of Social Work</td>
                                <td><a href="https://doi.org/10.51767/jsw1305" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Drug abuse among Tangkhul youth in Manipur</td>
                                <td>Social Work Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>The paradox of child marriage in India</td>
                                <td>Social Work Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Exploring child marriage in Assam: A feminist perspective</td>
                                <td>Manak Publications</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Doubly oppressed: Dalit women in unorganized sector</td>
                                <td>Book Chapter</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Female indigenous entrepreneurship and family dimension</td>
                                <td>Springer Book Chapter</td>
                                <td>ISBN: 978-981-160390-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Community-based business model of indigenous people</td>
                                <td>Springer Book Chapter</td>
                                <td>ISBN: 978-981-160390-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>Women entrepreneurs and traditional pottery knowledge</td>
                                <td>Book Chapter</td>
                                <td>ISBN: 8183705855</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Synthesis and antimicrobial properties of copper complexes</td>
                                <td>Asian Journal of Chemistry</td>
                                <td><a href="https://doi.org/10.14233/ajchem.2021.23048" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Phytochemical analysis of medicinal plants used for diabetes</td>
                                <td>Research Journal of Chemical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Nanomaterials for targeted delivery of anticancer drugs</td>
                                <td>Current Nanomaterials</td>
                                <td><a href="https://doi.org/10.2174/2405461506666210119095130" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Effect of Garcinia pedunculata fruit pulp on diabetic mice</td>
                                <td>Research Journal of Chemistry and Environment</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Ocimum sanctum mediated green synthesis of silver nanoparticles: A biophysical study
                                    towards lysozyme binding and antibacterial activity</td>
                                <td>Journal of Molecular Liquids</td>
                                <td><a href="https://doi.org/10.1016/j.molliq.2021.116422" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Biocompatible silver nanoparticles: Protein binding, antibacterial effects and
                                    cytotoxicity studies</td>
                                <td>Journal of Pharmaceutical Analysis</td>
                                <td><a href="https://doi.org/10.1016/j.jpha.2020.12.003" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Stability of glucose–insulin–glucagon model using ingested glucose and somatostatin</td>
                                <td>Journal of Huazhong University of Science and Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Hydromagnetic visco-elastic boundary layer flow past an exponentially stretching sheet
                                </td>
                                <td>Springer Conference Proceedings</td>
                                <td>ISBN: 978-981-15-9927-9</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Hydromagnetic visco-elastic boundary layer slip flow and heat transfer over a flat plate
                                </td>
                                <td>Springer Conference Proceedings</td>
                                <td>ISBN: 978-981-15-9927-9</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Impact of suction or blowing on elastico-viscous hydromagnetic fluid flow past
                                    stretching sheet</td>
                                <td>Advances in Mathematics: Scientific Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Impact of suction or blowing on elastico-viscous hydromagnetic fluid flow past permeable
                                    sheet</td>
                                <td>Advances in Mathematics: Scientific Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Impact of working capital management on financial health of silk industries in Assam
                                </td>
                                <td>Journal of Education, Rabindrabharati University</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Potential of agritourism in development of rural communities of Meghalaya</td>
                                <td>Journal of Education</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Economic and social consequences of pandemic with reference to Khasi women</td>
                                <td>Book Chapter</td>
                                <td>ISBN: 978-81-949838-5-9</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Responsible tourism and sustainability in East Khasi Hills of Meghalaya</td>
                                <td>Himalaya Publications (Book Chapter)</td>
                                <td>ISBN: 978-93-5495-052-0</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Synthesis and antimicrobial properties of copper complexes</td>
                                <td>Asian Journal of Chemistry</td>
                                <td><a href="https://doi.org/10.14233/ajchem.2021.23048" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Phytochemical analysis of selected medicinal plants used for diabetes treatment</td>
                                <td>Research Journal of Chemical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Nanomaterials for targeted delivery of anticancer drugs: An overview</td>
                                <td>Current Nanomaterials</td>
                                <td><a href="https://doi.org/10.2174/2405461506666210119095130" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>Effect of Garcinia pedunculata fruit pulp on diabetic mice</td>
                                <td>Research Journal of Chemistry and Environment</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Green synthesis of silver nanoparticles using Ocimum sanctum</td>
                                <td>Journal of Molecular Liquids</td>
                                <td><a href="https://doi.org/10.1016/j.molliq.2021.116422" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Protein binding efficacy and cytotoxicity of biocompatible silver nanoparticles</td>
                                <td>Journal of Pharmaceutical Analysis</td>
                                <td><a href="https://doi.org/10.1016/j.jpha.2020.12.003" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Cultural hybridity in Gary Shteyngart’s Little Failure</td>
                                <td>Indian Journal of Russian Studies</td>
                                <td>ISSN: 2582-6514</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>The making of a cultural icon: Bishnuprasad Rabha in Assamese consciousness</td>
                                <td>Sahapedia</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Assamese nationalism and lyric poetry of Bishnuprasad Rabha</td>
                                <td>Sahapedia</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Interview on Bishnuprasad Rabha’s revolutionary literary spirit</td>
                                <td>Sahapedia</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Into the world of myth: Retelling or rereading?</td>
                                <td>Papyrus, Guwahati</td>
                                <td>ISBN: 9788193896495</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Anubad adhyayan aru hermeneuticsor dharona</td>
                                <td>Dibrugarh University</td>
                                <td>ISBN: 978-81-947995-9-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>William Shakespeare’s plays in contemporary perspective</td>
                                <td>Dibrugarh University</td>
                                <td>ISBN: 978-81-947995-9-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>Sampratik Kalor Suti Galpa</td>
                                <td>Satsari, Guwahati</td>
                                <td>ISSN: 2319-8893</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>The Future of Man (Translation)</td>
                                <td>Papyrus, Guwahati</td>
                                <td>ISBN: 9788194338123</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Jeevonarthor Pom Khedi</td>
                                <td>Publication Board Assam</td>
                                <td>ISSN: 2279-0683</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Shape-memory polymer composites and their applications</td>
                                <td>Elsevier (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1016/B978-0-12-819961-9.00016-5" target="_blank">View
                                        Chapter</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>Smart materials based on cellulose nanoparticles</td>
                                <td>Royal Society of Chemistry</td>
                                <td><a href="https://doi.org/10.1039/9781788019521-00450" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Alginate as wound dressing biomaterial: A comprehensive review</td>
                                <td>Current Applied Polymer Science</td>
                                <td><a href="https://doi.org/10.2174/2452271604999200518085622" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Ultraviolet spectroscopic methods in analytical chemistry</td>
                                <td>Asian Journal of Pharmaceutical and Clinical Research</td>
                                <td><a href="https://doi.org/10.22159/ajpcr.2021.v14i9.42172" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Shape-memory polymer composites and applications</td>
                                <td>Elsevier (Book Chapter)</td>
                                <td><a href="https://doi.org/10.1016/B978-0-12-819961-9.00016-5" target="_blank">View
                                        Chapter</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>pH-responsive polymer networks for gastroprotective drug delivery</td>
                                <td>Indian Journal of Pharmaceutical Sciences</td>
                                <td><a href="https://doi.org/10.36468/pharmaceutical-sciences.796" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Cellulose nanoparticle-based smart materials</td>
                                <td>Royal Society of Chemistry</td>
                                <td><a href="https://doi.org/10.1039/9781788019521-00450" target="_blank">View
                                        Chapter</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Effect of waste fibre material on engineering properties of red soil</td>
                                <td>International Journal for Research in Applied Science and Engineering Technology</td>
                                <td>ISSN: 2455-2143</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Reservoir operation optimization using chance constraint linear programming</td>
                                <td>Journal of Engineering Technology</td>
                                <td>ISSN: 2348-7305</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Climate change and sea level rise in the context of Paris Agreement goals</td>
                                <td>International Journal of Research in Engineering and Technology</td>
                                <td>ISSN: 2321-8843</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Impact of climate change on sea level rise along Mumbai coastline</td>
                                <td>International Journal of Marine and Environmental Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Alcohol-associated liver disease: Pathophysiology, diagnosis and drug therapy</td>
                                <td>Toxicology Reports</td>
                                <td><a href="https://doi.org/10.1016/j.toxrep.2021.02.010" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Compatibility screening of vildagliptin with polymeric excipients</td>
                                <td>International Journal of Advanced Research</td>
                                <td><a href="https://doi.org/10.21474/IJAR01/12671" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Synthesis and antimicrobial properties of copper complexes</td>
                                <td>Asian Journal of Chemistry</td>
                                <td><a href="https://doi.org/10.14233/ajchem.2021.23048" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>Phytochemical analysis of medicinal plants for diabetes</td>
                                <td>Research Journal of Chemical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Nanomaterials for targeted delivery of anticancer drugs</td>
                                <td>Current Nanomaterials</td>
                                <td><a href="https://doi.org/10.2174/2405461506666210119095130" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Effect of Garcinia pedunculata on diabetic mice</td>
                                <td>Research Journal of Chemistry and Environment</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Green synthesis of silver nanoparticles using Ocimum sanctum</td>
                                <td>Journal of Molecular Liquids</td>
                                <td><a href="https://doi.org/10.1016/j.molliq.2021.116422" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Biocompatible silver nanoparticles and cytotoxicity analysis</td>
                                <td>Journal of Pharmaceutical Analysis</td>
                                <td><a href="https://doi.org/10.1016/j.jpha.2020.12.003" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Early diagnosis of rice plant disease using machine learning techniques</td>
                                <td>Archives of Phytopathology and Plant Protection</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Effectiveness of online teaching–learning in higher education</td>
                                <td>ASAR International Conference</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>An optimization algorithm for IoT enabling technology</td>
                                <td>Advances in Intelligent Systems and Computing</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>A simple optimization algorithm for IoT environment</td>
                                <td>Advances in Intelligent Systems and Computing</td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Design a new learning based method for smart semantic data management system</td>
                                <td>Springer – Proceedings of I3CS 2020 (NEHU, Shillong)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Manisha Jaiswal, Anupam Das, Bidisha Choudhury, Mishel Elizabeth</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>A review on environmental and socioeconomic perspectives of biofuel plants: Jatropha
                                    curcas, Pongamia pinnata and Mesua ferrea</td>
                                <td>Biomass and Bioenergy</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.biombioe.2021.106173" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Assessing tree diversity and carbon storage during land-use transition from shifting
                                    cultivation to agroforestry systems</td>
                                <td>Journal of Environmental Management</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.jenvman.2021.113470" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Tree diversity, soil organic carbon lability and ecosystem carbon storage under fallow
                                    age chronosequence</td>
                                <td>Environmental and Sustainability Indicators</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.indic.2021.100122" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Quantifying carbon stocks and sequestration potential in agroforestry systems under
                                    divergent management scenarios</td>
                                <td>Journal of Cleaner Production</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.jclepro.2020.124831" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>Coupled human–environment system amid COVID-19 crisis: A conceptual nexus model</td>
                                <td>Science of the Total Environment</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.scitotenv.2020.141757" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>Use of Azolla caroliniana compost in rice ecosystems: effects on methane emission, soil
                                    carbon storage and grain carbon interactions</td>
                                <td>Journal of Cleaner Production</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.jclepro.2021.127931" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>Greenhouse gas emissions from rice fields: a review from Indian context</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11356-021-13935-1" target="_blank">
                                        View Paper
                                    </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2020">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="text-align:center;">1</td>
                                <td>Effect of ethanol as molecular crowding agent on the conformational dynamics of
                                    α-synuclein</td>
                                <td>Letters in Applied NanoBioScience</td>
                                <td><a href="https://doi.org/10.33263/LIANBS91.779783" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td>Computational investigation on the p53–MDM2 interaction using the potential of mean
                                    force method</td>
                                <td>ACS Omega</td>
                                <td><a href="https://doi.org/10.1021/acsomega.9b03372" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td>Physico-chemical and nutritional properties of sweet potato based complementary mix</td>
                                <td>International Journal of Chemical Studies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td>Functional properties and storage qualities of developed complementary food</td>
                                <td>Chem Sci Rev Letters</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td>Impact of COVID-19 pandemic upon the hospitality and tourism industry: A case study of
                                    North Bengal</td>
                                <td>Juni Khyat Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td>Guest loyalty and associated benefits: A study on major mid-segment hotels in Guwahati
                                </td>
                                <td>Juni Khyat Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td>Word level language identification on code-mixed English–Bodo text</td>
                                <td>ICCM 2020</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td>Data security with DNA cryptography</td>
                                <td>Springer – Transactions on Engineering Technologies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td>Developing a virtual smart total learning environment for future teaching–learning
                                    system</td>
                                <td>IEEE Xplore</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td>Developing a virtual smart total learning environment for future teaching–learning
                                    system</td>
                                <td>IEEE TALE 2020</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td>Intelligent recommendation system for e-learning using membership optimized fuzzy logic
                                    classifier</td>
                                <td>IEEE PuneCon 2020</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td>Energy efficient wireless communications using EEA and EEAS with energy harvesting
                                    schemes</td>
                                <td>IEEE ADCOM 2020</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td>Resistance measurement of blood serum of bovine, avian and caprine</td>
                                <td>International Journal of Physical and Social Science</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">14</td>
                                <td>Arsenic and smokeless tobacco exposure induces DNA damage and oxidative stress in female
                                    mice</td>
                                <td>Journal of Environmental Science and Health Part C</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">15</td>
                                <td>Smokeless tobacco and areca nut induced embryotoxicity in chick embryo</td>
                                <td>Toxicology and Environmental Health Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">16</td>
                                <td>Status, threats and conservation of mega-reptilian fauna of Southern Assam</td>
                                <td>Journal of the Bombay Natural History Society</td>
                                <td><a href="http://dx.doi.org/10.17087/jbnhs%2F2020%2Fv117%2F145378"
                                        target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">17</td>
                                <td>Phenanthrene induced oxidative stress and genotoxicity in tadpoles</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td><a href="https://doi.org/10.1007/s11356-020-08609-3" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">18</td>
                                <td>Naringenin sensitizes lung cancer cells to radiation via Akt downregulation</td>
                                <td>Pharmacognosy Magazine</td>
                                <td><a href="https://doi.org/10.4103/pm.pm_535_19" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">19</td>
                                <td>Thin Layer Chromatography</td>
                                <td>Laboratory Techniques in Biological Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">20</td>
                                <td>Molecular characterization of tumour-associated antigen expressed on hepatocytes</td>
                                <td>Bioscience Biotechnology Research Communications</td>
                                <td><a href="http://dx.doi.org/10.21786/bbrc/13.1/55" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">21</td>
                                <td>Phytochemical analysis and synergistic interaction of plant extracts</td>
                                <td>International Journal of Recent Academic Research</td>
                                <td><a href="https://www.researchgate.net/publication/353016860" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">22</td>
                                <td>COVID-19: Current scenario, therapeutic intervention and recent developments</td>
                                <td>International Journal of Pharmacy and Pharmaceutical Research</td>
                                <td><a href="https://ijppr.humanjournals.com/covid-19-a-review-on-current-scenario-therapeutic-intervention-and-recent-developments/"
                                        target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">23</td>
                                <td>SN Applied Sciences publication</td>
                                <td>SN Applied Sciences</td>
                                <td><a href="https://doi.org/10.1007/s42452-020-03529-" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">24</td>
                                <td>ACS Omega research article</td>
                                <td>ACS Omega</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">25</td>
                                <td>Green and sustainable chemistry research</td>
                                <td>Current Research in Green and Sustainable Chemistry</td>
                                <td><a href="https://doi.org/10.1016/j.crgsc.2020.100018" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">26</td>
                                <td>Bioremediation studies</td>
                                <td>Bioremediation Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">27</td>
                                <td>Earth system science research</td>
                                <td>Journal of Earth System Science</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">28</td>
                                <td>COVID-19 related communication</td>
                                <td>International Journal of Infectious Diseases</td>
                                <td><a href="https://doi.org/10.1016/j.ijid.2020.09.322" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">29</td>
                                <td>Near-infrared spectroscopy for rice characterization using machine learning</td>
                                <td>Journal of the Institution of Engineers (India): Series A</td>
                                <td><a href="https://doi.org/10.1007/s40030-020-00459-z" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">30</td>
                                <td>Effectiveness of MET and McKenzie exercise with TENS for mechanical neck pain</td>
                                <td>International Journal of Multidisciplinary Educational Research</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">31</td>
                                <td>Conservative treatment of bipartite patella: A case report</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">32</td>
                                <td>Efficacy of MET and MFR in nonspecific low back pain</td>
                                <td>Journal of Alternative and Complementary Therapies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">33</td>
                                <td>Relevance of philosophy of Swami Vivekananda in public administration</td>
                                <td>Our Heritage</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">34</td>
                                <td>Whistle blowers and corruption in India: A critical analysis</td>
                                <td>South Asian Journal of Humanities and Social Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">35</td>
                                <td>COVID-19 measures: Comparison between India and other countries</td>
                                <td>Eureka Publications</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">36</td>
                                <td>Role of police and administrative staff during lockdown in India</td>
                                <td>Eureka Publications</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">37</td>
                                <td>The suffering of homeless women in COVID times</td>
                                <td>Pax Lumina</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">38</td>
                                <td>Socio-economic profile of Zeme Naga in Tamenglong district</td>
                                <td>Social Work Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">39</td>
                                <td>Child migration and boarding school education in India</td>
                                <td>Journal of Social Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">40</td>
                                <td>Plight of children of migrants during COVID-19 pandemic</td>
                                <td>CounterCurrents</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">41</td>
                                <td>Re-theorizing livelihoods: Flood impacts and traditional adaptation practices in Majuli
                                </td>
                                <td>Journal of Northeast India Studies</td>
                                <td><a href="http://www.jneis.com/10-2-1/" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">42</td>
                                <td>Sustainable development and indigenous entrepreneurship</td>
                                <td>Edited Book</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">43</td>
                                <td>Non-enzymatic glycation of human serum albumin and flavonoid binding</td>
                                <td>Journal of Biomolecular Structure & Dynamics</td>
                                <td><a href="https://doi.org/10.1080/07391102.2019.1711196" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">44</td>
                                <td>Survey of medicinal plants with antidiabetic potential in Assam</td>
                                <td>International Journal of Herbal Medicine</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">45</td>
                                <td>Interaction of kaempferol with serum albumin and hemoglobin</td>
                                <td>Journal of Photochemistry and Photobiology B</td>
                                <td><a href="https://doi.org/10.1016/j.jphotobiol.2020.111825" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">46</td>
                                <td>DFT-based reactivity and QSPR studies of platinum (IV) anticancer drugs</td>
                                <td>Journal of Molecular Graphics and Modelling</td>
                                <td><a href="https://doi.org/10.1016/j.jmgm.2020.107682" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">47</td>
                                <td>Trace element analysis of indigenous antidiabetic medicinal plants</td>
                                <td>International Journal of Scientific Research in Chemical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">48</td>
                                <td>Two-dimensional nanostructures for biomedical technology</td>
                                <td>Elsevier Book</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">49</td>
                                <td>Targeting hemoglobin by epigallocatechin gallate: A spectroscopic study</td>
                                <td>Physical Chemistry Chemical Physics</td>
                                <td><a href="https://doi.org/10.1039/C9CP05301H" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">50</td>
                                <td>Protective role of flavonoids on glyoxal induced protein glycation</td>
                                <td>International Journal of Biological Macromolecules</td>
                                <td><a href="https://doi.org/10.1016/j.ijbiomac.2020.10.023" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">51</td>
                                <td>Local Indigenous small eateries of Shillong city post COVID-19 pandemic: Challenges &
                                    Opportunities</td>
                                <td>Environmental Degradation and Sustainable Development, Mittal Publications</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">52</td>
                                <td>Community based sustainable tourism: A case study of Mawlynnong village</td>
                                <td>Environmental Degradation & Sustainable Development, Abhijeet Publications</td>
                                <td>ISBN: 978-93-88865-51-7</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">53</td>
                                <td>Possibilities of community based cultural tourism in tribal villages of Dooars, North
                                    Bengal</td>
                                <td>International Journal of Research and Analytical Reviews (IJRAR)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">54</td>
                                <td>Impact of tea tourism in Dooars, North Bengal: An overview</td>
                                <td>Mukt Shabd Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">55</td>
                                <td>Impact of COVID-19 pandemic upon the hospitality and tourism industry: A case study of
                                    North Bengal</td>
                                <td>Juni Khyat Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">56</td>
                                <td>Guest loyalty and associated benefits: A study on major mid-segment hotels in Guwahati
                                </td>
                                <td>Juni Khyat Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">57</td>
                                <td>Mathematical modelling of impact of vaccination in controlling Japanese Encephalitis
                                </td>
                                <td>International Journal on Emerging Technologies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">58</td>
                                <td>Japanese Encephalitis from two outsources: A mathematical modeling</td>
                                <td>Journal of Critical Reviews</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">59</td>
                                <td>Control model of transmission of Japanese Encephalitis through media awareness</td>
                                <td>International Journal of Advanced Science and Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">60</td>
                                <td>Effect of habitat complexity on rhinoceros and tiger population model with additional
                                    food and poaching in Kaziranga National Park, Assam</td>
                                <td>Mathematics and Computers in Simulation</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">61</td>
                                <td>Solution of non-Newtonian boundary layer flow in a convergent channel using homotopy
                                    perturbation method</td>
                                <td>Transient – A Journal of Natural Sciences and Allied Subjects</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">62</td>
                                <td>Reactive mass diffusion in viscoelastic fluid past a stretchable exponential sheet</td>
                                <td>Emerging Technologies in Data Mining and Information Security (Springer)</td>
                                <td>ISBN: 978-981-19-4193-1</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">63</td>
                                <td>Mixed convective slip flow and heat transport for visco-elastic fluid past a vertical
                                    plate</td>
                                <td>Mathematical Forum</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">64</td>
                                <td>Thermophoresis and diffusion thermo effects on shear thickening and thinning fluid
                                    motion</td>
                                <td>Journal of Mechanics of Continua and Mathematical Sciences</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">65</td>
                                <td>On semi weakly (l, m)-hyponormal weighted shifts</td>
                                <td>Advances in Mathematics: Scientific Journal</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">66</td>
                                <td>Control model of transmission of Japanese Encephalitis through media awareness</td>
                                <td>International Journal of Advanced Science and Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">67</td>
                                <td>Mathematical modelling of impact of vaccination in controlling Japanese Encephalitis
                                </td>
                                <td>International Journal on Emerging Technologies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">68</td>
                                <td>Japanese Encephalitis from two outsources: A mathematical modeling</td>
                                <td>Journal of Critical Reviews</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">69</td>
                                <td>Dusty time fractional MHD flow of a Newtonian fluid through a cylindrical tube with
                                    non-Darcian porous medium</td>
                                <td>Journal of Applied Mathematics and Computational Mechanics</td>
                                <td><a href="https://doi.org/10.17512/jamcm.2020.4.09" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">70</td>
                                <td>Dusty time fractional MHD flow of a Newtonian fluid through a cylindrical tube</td>
                                <td>International Journal on Emerging Technologies</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">71</td>
                                <td>Assessment of liquefaction potential for seismic risk reduction in North-East India</td>
                                <td>International Journal of Engineering Applied Sciences and Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">72</td>
                                <td>Behaviour of drift in a soft storey building with masonry and steel bracings</td>
                                <td>International Journal for Research in Applied Science and Engineering Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">73</td>
                                <td>Pre-processing of Landsat-8 data for population estimation: A study of Dimoria block,
                                    Assam</td>
                                <td>3rd International Conference on Innovative Computing and Communication</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">74</td>
                                <td>Detection of Bodo word boundary using forced alignment</td>
                                <td>International Conference on Electronic Systems and Intelligent Computing</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">75</td>
                                <td>A simple optimization algorithm for IoT environment</td>
                                <td>International Conference on Mathematical Modeling and Computational Intelligence
                                    (Springer)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">76</td>
                                <td>An optimization algorithm for IoT enabling technology</td>
                                <td>International Conference on Emerging Technologies in Data Mining and Information
                                    Security</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">77</td>
                                <td>Performance analysis of KNN classifiers for Alzheimer disease classification</td>
                                <td>International Conference on Computing and Communications</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">78</td>
                                <td>Optimal routing in 5G ultra-dense small cell network using GA, PSO and hybrid algorithms
                                </td>
                                <td>International Conference on Applied Mathematics and Computer Science</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">79</td>
                                <td>SMART asthma alert using IoT and decision tree classifier</td>
                                <td>International Conference on Computer Communication and Internet of Things</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">80</td>
                                <td>Analysis of emotion detection classifier for text predictive model</td>
                                <td>International Journal of Research and Analytical Reviews</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">81</td>
                                <td>Voice controlled wheelchair using Nepali word</td>
                                <td>International Journal of Research and Analytical Reviews</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">82</td>
                                <td>Word level language identification on code-mixed English–Bodo text</td>
                                <td>ICCM 2020</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">83</td>
                                <td>Data security with DNA cryptography</td>
                                <td>Transactions on Engineering Technologies (Springer Nature)</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">84</td>
                                <td>Targeting gemcitabine hydrochloride to tumor microenvironment using nano-conjugate</td>
                                <td>Journal of Drug Delivery Science and Technology</td>
                                <td><a href="https://doi.org/10.1016/j.jddst.2020.101981" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">85</td>
                                <td>Investigation of Corchorus olitorius mucilage as mucoadhesive agent in nasal gel</td>
                                <td>Journal of Applied Pharmaceutical Science</td>
                                <td><a href="https://doi.org/10.7324/JAPS.2020.10612" target="_blank">View Paper</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">86</td>
                                <td>Presented a paper titled “Developing a Virtual Smart Total Learning Environment for
                                    Future Teaching-Learning System” at IEEE TALE 2020, Japan</td>
                                <td>IEEE TALE 2020 (Scopus & IEEE Indexed)</td>
                                <td>IEEE Xplore</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">87</td>
                                <td>Presented a paper titled “Intelligent Recommendation System for E-Learning using
                                    Membership Optimized Fuzzy Logic Classifier”</td>
                                <td>IEEE PuneCon 2020</td>
                                <td>IEEE Xplore</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">88</td>
                                <td>Presented a paper titled “Energy Efficient Wireless Communications using EEA and EEAS
                                    with energy harvesting schemes”</td>
                                <td>IEEE ADCOM 2020, NIT Silchar</td>
                                <td>IEEE Xplore</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">89</td>
                                <td>Resistance measurement of blood serum of bovine, avian and caprine</td>
                                <td>International Journal of Physical and Social Science</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">90</td>
                                <td>Agricultural intensification, diversification and migration as livelihood strategies
                                    among rural scheduled tribe population of Palasbari revenue circle</td>
                                <td>Asian Journal of Agriculture and Rural Development</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">91</td>
                                <td>Causes of man–elephant conflicts and its impact on livelihood in fringe villages of
                                    Moman Reserve Forest, Assam</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">92</td>
                                <td>An analysis of the pattern and state of livelihood of the people of Goriaghuli village,
                                    Kamrup (Metro), Assam</td>
                                <td>Journal of Human Ecology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">93</td>
                                <td>Land use and land cover change dynamics using geospatial techniques of Palasbari Revenue
                                    Circle, Assam</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">94</td>
                                <td>Ex-situ conservation of biodiversity through responsible tourism: A study of Eastern
                                    Himalaya Botanic Ark</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">95</td>
                                <td>Assessment of point-based fragmentation using geospatial technology and Markov chain
                                    analysis</td>
                                <td>Journal of the Indian Society of Remote Sensing</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">96</td>
                                <td>Prospectivity of Mesoproterozoic magmatism in the northern Karbi Hills, NE India for
                                    porphyry copper mineralization</td>
                                <td>Ore Geology Reviews</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.oregeorev.2020.103467" target="_blank">
                                        https://doi.org/10.1016/j.oregeorev.2020.103467
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">97</td>
                                <td>Heavy mineral composition and sources of Himalayan Neogene sediments, Arunachal Pradesh
                                </td>
                                <td>Journal of Geography, Environment and Earth Science International</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">98</td>
                                <td>Source rock characteristics and depositional environments of the basal part of Tura
                                    Formation, Upper Assam Basin</td>
                                <td>International Journal of Scientific and Technology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">99</td>
                                <td>Assessment of mobility and environmental risks associated with copper, manganese and
                                    zinc in soils around Ramsar site</td>
                                <td>Chemosphere</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.chemosphere.2020.126852" target="_blank">
                                        https://doi.org/10.1016/j.chemosphere.2020.126852
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">100</td>
                                <td>Heterogeneous landscape assessment using multi-temporal LISS-IV data in Barak Valley,
                                    India</td>
                                <td>Indian Journal of Ecology</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">101</td>
                                <td>Tree diversity and improved estimate of carbon storage for traditional agroforestry
                                    systems in North East India</td>
                                <td>Applied Ecology and Environmental Sciences</td>
                                <td>
                                    <a href="https://doi.org/10.12691/aees-8-4-2" target="_blank">
                                        https://doi.org/10.12691/aees-8-4-2
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">102</td>
                                <td>Gregarious flowering in Dendrocalamus longispathus in North East India</td>
                                <td>Indian Forester</td>
                                <td>
                                    <a href="https://doi.org/10.36808/if/2020/v146i4/144637" target="_blank">
                                        https://doi.org/10.36808/if/2020/v146i4/144637
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">103</td>
                                <td>Nitrous oxide estimation from tropical rice paddy under growth-regulating compounds</td>
                                <td>International Journal of Environmental Research</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s41742-020-00257-2" target="_blank">
                                        https://doi.org/10.1007/s41742-020-00257-2
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">104</td>
                                <td>Fertilizer management using coated urea to mitigate greenhouse gas emissions</td>
                                <td>Environmental Science and Pollution Research</td>
                                <td>
                                    <a href="https://doi.org/10.1007/s11356-019-07571" target="_blank">
                                        https://doi.org/10.1007/s11356-019-07571
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">105</td>
                                <td>Role of starch polymer-coated urea in mitigation of greenhouse gas emissions</td>
                                <td>Ecological and Practical Applications for Sustainable Agriculture</td>
                                <td>
                                    <a href="https://doi.org/10.1007/978-981-15-3372-3_7" target="_blank">
                                        https://doi.org/10.1007/978-981-15-3372-3_7
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">106</td>
                                <td>Usage of Assamese language in Assam: Dialectal varieties vs standard language</td>
                                <td>Quest Journals</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">107</td>
                                <td>Multimodal stylistics in graphic novel: Visual language syntax in Art Spiegelman’s Maus
                                </td>
                                <td>International Journal of Linguistics, Literature and Translation</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">108</td>
                                <td>Bharotiyo Sishu Sahityar Keitaman Jonopriyo Soritro</td>
                                <td>Asom Sishu Sahitya Kosha, KKHSOU</td>
                                <td>ISBN: 978-93-89559-62-0</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">109</td>
                                <td>What Lies Over Here? (Translation)</td>
                                <td>HarperCollins</td>
                                <td>ISBN: 9789353576523</td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">110</td>
                                <td>Targeting gemcitabine hydrochloride to tumor microenvironment using stimuli-responsive
                                    nano-conjugates</td>
                                <td>Journal of Drug Delivery Science and Technology</td>
                                <td>
                                    <a href="https://doi.org/10.1016/j.jddst.2020.101981" target="_blank">
                                        https://doi.org/10.1016/j.jddst.2020.101981
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="rgu-year-table" id="year-2019">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead>
                            <tr>
                                <th style="background:#254274;color:#fff;text-align:center;width:5%;">Sl. No.</th>
                                <th style="background:#254274;color:#fff;width:45%;">Title of Paper</th>
                                <th style="background:#254274;color:#fff;width:30%;">Name of The Journal</th>
                                <th style="background:#254274;color:#fff;width:20%;">Link of the paper</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Das P, Mattaparthi VSK. Computational investigation on the molecular interactions
                                    between MDM2 and its photoactivatable inhibitor.</td>
                                <td>Biointerface Research in Applied Chemistry, 2019</td>
                                <td><a href="https://doi.org/10.33263/BRIAC96.671684" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Upadhaya P et al. Joint detection of claudin‐1 and JAM‐A as therapeutic target in oral
                                    epithelial dysplasia and OSCC.</td>
                                <td>Journal of Cellular Biochemistry, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Das S et al. Effect of nutritional status on arsenic and smokeless tobacco induced
                                    genotoxicity in mice.</td>
                                <td>Environmental and Molecular Mutagenesis, 2018</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Baruah TJ, Kma L. Flavonoids and radiation response of cancer cells.</td>
                                <td>NEHU Journal, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Baruah TJ, Kma L. Vicenin-2 as radiosensitizer in lung cancer.</td>
                                <td>Biofactors, 2019</td>
                                <td><a href="https://doi.org/10.1002/biof.1472" target="_blank">View Paper</a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Kumar R, Gogoi B, Borah D. Can Peptide Nucleic Acid be future substitute for
                                    antibiotics?</td>
                                <td>Current Science, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Chaubey A, Borah D. Commentary.</td>
                                <td>Current Science, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Das M et al. Nanobiotechnology based study.</td>
                                <td>IET Nanobiotechnology, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Bora P et al. Review of low carbohydrate diet and metabolic consequences.</td>
                                <td>International Journal of Chemical Studies, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Bora P et al. Bicolour: Natural way of colouring foods.</td>
                                <td>Journal of Pharmacognosy and Phytochemistry, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Chatterjee L et al. Process standardization of instant rice based meal.</td>
                                <td>International Journal of Chemical Studies, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>Chatterjee L, Das P. Chemical properties of indigenous rice varieties of Assam.</td>
                                <td>International Journal of Chemical Studies, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>Das M et al. Impact of fibre supplement on obesity related risk factors.</td>
                                <td>The Pharma Innovation Journal, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>Bora P, Das P. Physical and functional properties of millets.</td>
                                <td>Journal of Critical Reviews, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>Bordoloi PL et al. Effect of packaging materials on enteral formula shelf life.</td>
                                <td>IJCMAS, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>Bhattacharyya P et al. Lifestyle and vitamin D concentration in women.</td>
                                <td>International Journal of Chemical Studies, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>Khataniar S, Das P. Functional properties of millet varieties of Assam.</td>
                                <td>IJCMAS, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>Sangma NRST et al. Quality analysis of multigrain flour mixes.</td>
                                <td>Journal of Post Harvest Technology, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>Chutia H et al. Inactivation kinetics of enzymes in coconut water using plasma.</td>
                                <td>LWT – Food Science & Technology, 2019</td>
                                <td><a href="https://doi.org/10.1016/j.lwt.2018.11.071" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>Sasikumar R et al. Thermosonication assisted extraction of blood fruit juice.</td>
                                <td>JMBFS, 2019</td>
                                <td><a href="http://dx.doi.org/10.15414/jmbfs.2019.9.2.228-235" target="_blank">View
                                        Paper</a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>Borah A et al. Role of food extrusion in healthy food development.</td>
                                <td>Acta Scientific Nutritional Health, 2019</td>
                                <td><a href="https://doi.org/10.31080/ASNH.2019.S01.0010" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <td>Kumar R et al. Can Peptide Nucleic Acid replace antibiotics?</td>
                                <td>Current Science, 2019</td>
                                <td><a href="https://doi.org/10.18520/cs/v117/i11/1766-1767" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <td>Dr. Meenu. Police reforms in Punjab and Haryana.</td>
                                <td>Journal of Information and Computational Science, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>Dr. Meenu. Political participation and social condition of Dalit women.</td>
                                <td>The Asian Man, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>Sarmah B et al. Dust-ion-acoustic waves in dusty plasma.</td>
                                <td>International Journal of Research and Review, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>26</td>
                                <td>Sarmah B et al. Effect of nonthermal ions on dust acoustic waves.</td>
                                <td>Mathematical Journal of Interdisciplinary, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>27</td>
                                <td>Sarmah B et al. Sagdeev potential approach in dusty plasma.</td>
                                <td>Infokara Research, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>Dutta I. Hotel industry attrition rate in Shillong and Guwahati.</td>
                                <td>Research Journal of Social and Life Sciences, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>29</td>
                                <td>Dutta I. Prospect of medical tourism in Northeast India.</td>
                                <td>AJANTA, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>30</td>
                                <td>Dutta I. Gender inequality in tourism hospitality industry.</td>
                                <td>International Book of Multidisciplinary Studies, 2019</td>
                                <td>ISBN</td>
                            </tr>

                            <tr>
                                <td>31</td>
                                <td>Duarah R, Kumar V. Behaviour of masonry infilled walls with RC frames.</td>
                                <td>IJRASET, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>32</td>
                                <td>Debbarma M et al. Sentiment analysis in Kokborok language.</td>
                                <td>International Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>33</td>
                                <td>Deka A et al. Email classifier design.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>34</td>
                                <td>Deka A, Kumari B. DTMF based railway enquiry system.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>35</td>
                                <td>Das S et al. Blockchain and distributed ledger review.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>36</td>
                                <td>Sarma MK, Kakoti AM. Web document clustering using DOM.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>37</td>
                                <td>Sarma MK, Kakoti AM. K-means vs PAM algorithm comparison.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>38</td>
                                <td>Kalita NJ, Sarma MK. Agglomerative data mining approach.</td>
                                <td>International Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>39</td>
                                <td>Sarma MK, Kakoti AM. Web document clustering.</td>
                                <td>IEEE Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>40</td>
                                <td>Kalita NJ, Sarma MK. Clustering research papers.</td>
                                <td>International Conference, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>41</td>
                                <td>Suklabaidya M et al. Hybrid cryptography model.</td>
                                <td>Elsevier Proceedings, 2019</td>
                                <td>Scopus & WoS</td>
                            </tr>

                            <tr>
                                <td>42</td>
                                <td>Suklabaidya M et al. Hybrid cryptography model.</td>
                                <td>Elsevier Proceedings, 2019</td>
                                <td>Scopus & WoS</td>
                            </tr>

                            <tr>
                                <td>43</td>
                                <td>Dewan SK, Bardaloi S. Resistance measurement of blood serum.</td>
                                <td>International Journal of Physical and Social Science, 2018</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>44</td>
                                <td>Podder B, Biswas A. Performance of PV/T water collector.</td>
                                <td>JSIR</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>45</td>
                                <td>Podder B et al. Optimal renewable energy system design.</td>
                                <td>Sustainable Energy Technologies & Assessments</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>46</td>
                                <td>Borah A. Ex-situ conservation through responsible tourism.</td>
                                <td>IJRAR, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>47</td>
                                <td>Borah A. Colonial heritage tourism in Assam.</td>
                                <td>Thematic Journal of Geography, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>48</td>
                                <td>Sarkar T, Kasemi N. Socio-economic status of Bangladeshi migrants.</td>
                                <td>Geographical Review of India, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>49</td>
                                <td>Sarkar T, Kasemi N. Migration of Bangladeshi people.</td>
                                <td>Indian Geographical Society, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>50</td>
                                <td>Gogoi A et al. Geochronology of porphyry granitoids in Karbi Hills.</td>
                                <td>Journal of Asian Earth Sciences, 2019</td>
                                <td><a href="https://doi.org/10.1016/j.jseaes.2019.04.013" target="_blank">View
                                        Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>51</td>
                                <td>Majumdar D, Gogoi A. Platinum occurrence in Karbi Hills.</td>
                                <td>Journal of the Geological Society of India, 2019</td>
                                <td><a href="https://doi.org/10.1007/s12594-019-1303-9" target="_blank">View Paper</a>
                                </td>
                            </tr>

                            <tr>
                                <td>52</td>
                                <td>Sahariah N, Bhattacharyya P. Geochemical characteristics of Tura Formation.</td>
                                <td>Journal of Applied Geochemistry, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>53</td>
                                <td>Pritom Borah et al. Monazite and xenotime U–Th–Pb ages.</td>
                                <td>Journal of Earth System Science, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>54</td>
                                <td>Gogoi PG. Temsula Ao’s Song-Bird and oral tradition.</td>
                                <td>Ajanta, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>55</td>
                                <td>Devraj A. Partition perspectives in literature.</td>
                                <td>Book Chapter, 2019</td>
                                <td>ISBN</td>
                            </tr>

                            <tr>
                                <td>56</td>
                                <td>Sarkar T, Kasemi N. Socio-economic status study.</td>
                                <td>Geographical Review of India, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>57</td>
                                <td>Sarkar T, Kasemi N. Migration study.</td>
                                <td>Indian Geographical Society, 2019</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>58</td>
                                <td>Sarkar T, Kasemi N. Gender inequality in literacy.</td>
                                <td>—</td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>59</td>
                                <td>Sarkar T, Kasemi N. Educational inequalities among scheduled castes.</td>
                                <td>Indian Journal of Spatial Science, 2019</td>
                                <td>—</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- ================= JS ================= -->
        <script>
            (function() {

                const pills = document.querySelectorAll(".rgu-year-pill");
                const tables = document.querySelectorAll(".rgu-year-table");

                pills.forEach(pill => {
                    pill.addEventListener("click", function() {

                        pills.forEach(p => p.classList.remove("active"));
                        tables.forEach(t => t.classList.remove("active"));

                        this.classList.add("active");

                        const year = this.getAttribute("data-year");
                        document.getElementById("year-" + year).classList.add("active");
                    });
                });

            })();
        </script>

    </section>
@endsection

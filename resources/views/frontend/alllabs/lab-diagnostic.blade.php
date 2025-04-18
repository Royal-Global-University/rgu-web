@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/lab-diagnostic/mobileDiagnosticLab.png" alt="">

            <div>
                <!-- List  -->
                <div class="new pt-3 pb-2"
                    style="background-image: url(mobile-assets/lab-diagnostic/bg.sg); box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.20);">

                    <div class="container">
                        <h2 class="mobile-headd2 fw-bold text-center pb-4" style="color: #27467A; font-weight: 900;">
                            Price list of <span style="color: #FF9A1E; font-weight: 500;">Royal Diagnostic Lab</span></h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="item-all-cat education-categories">
                                            <table class="table table-resposive">
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">
                                                            Hematology</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr class="mobile-para1">
                                                        <th style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <th style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 mobile-para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Haemoglobin</td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood R/E (RBC count, reticulocyte count,
                                                            Absolutebeosinophil count, total lecocyte
                                                            count, platelet count, CBC)</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Complete Haemogram (PCV, MCV, MCH, MCHC, TRBC, BT, CT)</td>
                                                        <td>230.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Platltet count</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Reticulocytes count test</td>
                                                        <td>140.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Bleeding time</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Clotting time</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Blood grouping and Rh typing</td>
                                                        <td>65.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">Clinical
                                                            Pathology</th>
                                                    </tr>
                                                </thead>

                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <th style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN <span class="text-capitalize">Rs.</span>)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 mobile-para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Urine albumin </td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Bile salts, bile pigments, ketone bodies, specific gravity,
                                                            Reaction, (pH) and
                                                            leucocyte esterase</td>
                                                        <td>55.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Urine Routine examination </td>
                                                        <td>75.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">Clinical
                                                            Biochemistry</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 mobile-para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Blood Sugar, FBS </td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood Sugar, RBS</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Blood Sugar, PP</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Bilirubin (Total, direct)</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>SGPT</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>SGOT</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Serum creatinine</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Albumin test</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Blood Urea</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>LDL Cholecterol</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>HDL Cholecterol</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>S. Total Cholesterol</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Triglycerides Test</td>
                                                        <td>150.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>CRP (C-Reactive Protein) Test</td>
                                                        <td>240.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Alkaline Phosphatase (ALP) Test</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Amylase</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Ferritin</td>
                                                        <td>425.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Lipase</td>
                                                        <td>325.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Serum Sodium</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Serum Potassium</td>
                                                        <td>200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>Serum Calcium</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>T3 (Triiodothyronine) Test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>Vitamin B12</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>Vitamin D</td>
                                                        <td>850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>Prolactin</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>T4 (Thyroxine) Test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>FSH</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>Ft3</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>Ft4</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>ESR</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>Total Protein Test</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>Total IgE</td>
                                                        <td>125.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>33</td>
                                                        <td>Calcium Test</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>Uric acid test</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>35</td>
                                                        <td>TSH test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>36</td>
                                                        <td>Rheumatoid arthritis Test</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>VLDL</td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>38</td>
                                                        <td>Urine routine</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>Total Protein test</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center mobile-para1" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">
                                                            Microbiology</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 mobile-para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Typhoid test </td>
                                                        <td>125.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>VDRL, RPR kit</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>ASO test</td>
                                                        <td>340.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>SD Dengue Duo( NS1 Ag + Ab combo)</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Virocheck HBsAg kit</td>
                                                        <td>200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>HCV TRI-DOT kit</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Enterocheck WB kit</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>HCV Antibody Test</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Rheumatoid Arthritis (RA) Factor Test</td>
                                                        <td>325.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>WIDAL Test</td>
                                                        <td>135.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>RPR Card test for syphils</td>
                                                        <td>98.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>NS1 antigen and IgM antibody kit (Dengue)</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- List  -->
            </div>
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-diagnostic/background.svg);"
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
                                        <div style="border: 2px solid #fff;"
                                            class="kd-about-3-img img-cover fix kd-img-ani-1">
                                            <img decoding="async" src="mobile-assets/lab-diagnostic/headimg.jpg" alt="">
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
                                            Diagnostic Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            A state-of-art diagnostic laboratory under the aegis of the Royal School of
                                            Medical and Allied Sciences. The diagnostic laboratory caters to the
                                            requirements of the students pursuing a diploma and B.Sc. program in Medical and
                                            Laboratory Technology (MLT). In addition, the laboratory also extends support
                                            services to the community at large through the Royal Swasthya Seva which offers
                                            free medical services. The reports generated by the lab are used to check the
                                            primary health status of the individuals.
                                        </p>

                                        <p class="text-dark headd3 fw-bold" style="text-align: justify;">
                                            Objective:
                                        </p>

                                        <ol class="text-dark para1">
                                            <li>Give practical experience to our students of MLT, Nursing, Pharmacy, and
                                                other related departments.</li>
                                            <li>Check the health status of the staff and students of RGU at a minimal cost.
                                            </li>
                                        </ol>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <hr>

            <!-- Contact banner  -->
            <section class="container-fluid mt-2 mb-3"
                style="background-color: #3361A2; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.20);">

                <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 20px 10px;">

                    <div class="col-lg-11">
                        <h2 style="color: #fff;" class="headd2 fw-bold mb-2">
                            Royal Diagnostic Lab
                        </h2>

                        <div style="height: 1px; background-color: #f0f8ff;"></div>
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <p class="headd3 fw-bold text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg> Dr. Rupesh Kumar
                                </p>
                                <p class="para1 text-white">
                                    Co-ordinator, Department of Medical Laboratory Technology, <br> The Assam Royal Global
                                    University
                                </p>

                            </div>

                            <div class="col-lg-3">
                                <p class="para1 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                    </svg> Ground Floor, D-Block, RGU campus
                                </p>

                                <p class="para1 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    </svg> Mon-Fri, 9 to 5 pm
                                </p>

                                <p class="para1 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg> <a href="tel:+91 95086-52508">+91 95086-52508</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact banner  -->

            <img src="mobile-assets/lab-diagnostic/DiagnosticLab.png" alt="">

            <div class="container-fluid rounded mt-4 mb-5">

                <div class="new pt-4 pb-5"
                    style="background-image: url(mobile-assets/lab-diagnostic/bg.svg); box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.20);">

                    <div class="container">
                        <p style="font-size: 32px;" class="fw-bold text-dark pb-2 text-center">Price list of Royal
                            Diagnostic Lab
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="item-all-cat education-categories">
                                            <table class="table table-resposive">
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">
                                                            Hematology</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr class="para1">
                                                        <th
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <th
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Haemoglobin</td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood R/E (RBC count, reticulocyte count,
                                                            Absolutebeosinophil count, total lecocyte
                                                            count, platelet count, CBC)</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Complete Haemogram (PCV, MCV, MCH, MCHC, TRBC, BT, CT)</td>
                                                        <td>230.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Platltet count</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Reticulocytes count test</td>
                                                        <td>140.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Bleeding time</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Clotting time</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Blood grouping and Rh typing</td>
                                                        <td>65.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">Clinical
                                                            Pathology</th>
                                                    </tr>
                                                </thead>

                                                <thead>
                                                    <tr>
                                                        <th
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <th
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN <span class="text-capitalize">Rs.</span>)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Urine albumin </td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Bile salts, bile pigments, ketone bodies, specific gravity,
                                                            Reaction, (pH) and
                                                            leucocyte esterase</td>
                                                        <td>55.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Urine Routine examination </td>
                                                        <td>75.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">Clinical
                                                            Biochemistry</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Blood Sugar, FBS </td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood Sugar, RBS</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Blood Sugar, PP</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Bilirubin (Total, direct)</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>SGPT</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>SGOT</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Serum creatinine</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Albumin test</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Blood Urea</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>LDL Cholecterol</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>HDL Cholecterol</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>S. Total Cholesterol</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Triglycerides Test</td>
                                                        <td>150.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>CRP (C-Reactive Protein) Test</td>
                                                        <td>240.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Alkaline Phosphatase (ALP) Test</td>
                                                        <td>110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Amylase</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Ferritin</td>
                                                        <td>425.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Lipase</td>
                                                        <td>325.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Serum Sodium</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Serum Potassium</td>
                                                        <td>200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>Serum Calcium</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>T3 (Triiodothyronine) Test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>Vitamin B12</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>Vitamin D</td>
                                                        <td>850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>Prolactin</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>T4 (Thyroxine) Test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>FSH</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>Ft3</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>Ft4</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>ESR</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>Total Protein Test</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>Total IgE</td>
                                                        <td>125.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>33</td>
                                                        <td>Calcium Test</td>
                                                        <td>90.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>Uric acid test</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>35</td>
                                                        <td>TSH test</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>36</td>
                                                        <td>Rheumatoid arthritis Test</td>
                                                        <td>300.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>VLDL</td>
                                                        <td>75.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>38</td>
                                                        <td>Urine routine</td>
                                                        <td>50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>Total Protein test</td>
                                                        <td>85.00</td>
                                                    </tr>
                                                </tbody>
                                                <thead class="bg-blue">
                                                    <tr>
                                                        <th class="text-dark text-center para1" colspan="3"
                                                            style="font-size: 22px; background-color:#ffdec0;">
                                                            Microbiology</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            S.No.</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            Diagnostic Test</th>
                                                        <td
                                                            style="font-size: 18px; background-color: #005273; color: white;">
                                                            PRICE (IN Rs.)</td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-16 para1">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Typhoid test </td>
                                                        <td>125.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>VDRL, RPR kit</td>
                                                        <td>175.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>ASO test</td>
                                                        <td>340.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>SD Dengue Duo( NS1 Ag + Ab combo)</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Virocheck HBsAg kit</td>
                                                        <td>200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>HCV TRI-DOT kit</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Enterocheck WB kit</td>
                                                        <td>250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>HCV Antibody Test</td>
                                                        <td>275.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Rheumatoid Arthritis (RA) Factor Test</td>
                                                        <td>325.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>WIDAL Test</td>
                                                        <td>135.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>RPR Card test for syphils</td>
                                                        <td>98.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>NS1 antigen and IgM antibody kit (Dengue)</td>
                                                        <td>650.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

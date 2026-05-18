@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <h1 class="headd1 text-dark fw-bold kd-title-ani kd-split-text text-center mt-2 mb-2">
                Optometry Lab
            </h1>
            <img class="p-3 rounded" src="mobile-assets/lab-optometry/headimg.jpeg" alt="">
            <div class="p-3">
                <p class="text-dark para1" style="text-align: justify;">
                    Optometry is a health care profession that is concerned especially with
                    detecting eye disease, measuring eyesight, and prescribing corrective lenses.
                    The instruments and machines in the optometry lab are all well maintained and
                    the department is staffed with trained technicians who provide the best training
                    possible.
                </p>
            </div>
            {{-- <img class="p-3 rounded" src="mobile-assets/lab-optometry/mobileOptometryLab.png" alt=""> --}}
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
            <section style="padding-top: 30px; background-image: url(mobile-assets/lab-optometry/background.svg);"
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
                                            <img decoding="async" src="mobile-assets/lab-optometry/headimg.jpeg"
                                                alt="">
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
                                            Optometry Lab
                                        </h1>

                                        <p class="text-dark para1" style="text-align: justify;">
                                            Optometry is a health care profession that is concerned especially with
                                            detecting eye disease, measuring eyesight, and prescribing corrective lenses.
                                            The instruments and machines in the optometry lab are all well maintained and
                                            the department is staffed with trained technicians who provide the best training
                                            possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Major
                        Instruments Includes:
                    </h2>

                    <hr>
                    <ol>
                        <li class="para1 text-dark">Auto Lensometer</li>
                        <li class="para1 text-dark">Handheld Occluder</li>
                        <li class="para1 text-dark">Snellen Chart</li>
                        <li class="para1 text-dark">Phoropter</li>
                        <li class="para1 text-dark">Trial box</li>
                        <li class="para1 text-dark">Trial Frame</li>
                        <li class="para1 text-dark">Trial Lenses</li>
                        <li class="para1 text-dark">Near Vision Chart</li>
                        <li class="para1 text-dark">Jackson Cross Cylinder</li>
                        <li class="para1 text-dark">Retinoscope</li>
                        <li class="para1 text-dark">Clock and Dial</li>
                        <li class="para1 text-dark">Auto Refractor or Auto Keratometer</li>
                        <li class="para1 text-dark">Slit Lamp etc</li>
                    </ol>

                </div>

                <div class="custom-column p-4">

                    <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-dark text-center pb-2 pt-2">Lab
                        Activities Includes:
                    </h2>
                    <hr>
                    <ol>
                        <li class="para1 text-dark">Detect power of spectacles</li>
                        <li class="para1 text-dark">Detect refractive status of eye</li>
                        <li class="para1 text-dark">Measure the curvature of cornea</li>
                        <li class="para1 text-dark">Test individual lenses of each eye</li>
                        <li class="para1 text-dark">Determine the axis and magnitude of astigmatism</li>
                        <li class="para1 text-dark">Facilitate practice</li>
                        <li class="para1 text-dark">Offer hands-on working experience etc</li>
                    </ol>

                </div>
            </div>
        </div>

        <img src="mobile-assets/lab-optometry/OptometryLab.png" alt=""> --}}

    </div>

    <section>
        <div style="width:100%; overflow-x:auto; font-family:Arial, sans-serif; background:#f4f6f9; padding:20px;">

            <h3 style="text-align:center; color:#222; margin-bottom:20px;">
                List of Equipments
            </h3>

            <table style="width:100%; border-collapse:collapse; background:#fff; min-width:900px;">

                <thead style="background:#1e3a8a; color:#fff;">

                    <tr>
                        <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">Sl. No.</th>
                        <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">Equipment Name</th>
                        <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">Specification / Description
                        </th>
                        <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">Purpose / Use</th>
                    </tr>

                </thead>

                <tbody class="text-dark">

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">1</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Chair Unit</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Motorized ophthalmic chair with stand &
                            illumination</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Patient positioning</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">2</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Penlight</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">LED diagnostic pen torch</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Pupil reaction & anterior segment exam</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">3</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Slit Lamp</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Zeiss type with 10x–40x magnification</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Anterior segment examination</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">4</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Applanation Tonometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Goldmann type</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">IOP measurement</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">5</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Auto Refractokeratometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Digital, automated</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Objective refraction & keratometry</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">6</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Vision Box</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Illuminated vision drum/projector</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Visual acuity testing</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">7</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Trial Lens Set</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Full aperture ± spherical & cylindrical lenses
                        </td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Subjective refraction</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">8</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Giant Eye Model</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Anatomical eye model</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Teaching & demonstration</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">9</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">RAF Ruler</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Standard RAF rule with accommodative target
                        </td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Near point of accommodation</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">10</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Keratometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Bausch & Lomb type</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Corneal curvature measurement</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">11</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Prism Bar</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Horizontal & vertical prisms</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Binocular vision testing</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">12</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Accommodative Flipper</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">± lenses (±2.00D typical)</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Accommodation facility testing</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">13</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Vergence Flipper</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">BI/BO prisms</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Vergence facility testing</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">14</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">PD Scale</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Millimeter scale</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Pupillary distance measurement</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">15</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">JCC (Jackson Cross Cylinder)</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">±0.25D and ±0.50D</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Astigmatism refinement</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">16</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Ishihara Colour Vision Chart</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Standard 24 plates</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Colour vision testing</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">17</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">90D Lens</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Volk</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Fundus examination (slit lamp)</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">18</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Gonioscopy Lens</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">4-mirror lens</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Angle assessment</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">19</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Occluder</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Plastic handheld occluder</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Cover test</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">20</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">RGP Trial Lens Set</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Rigid gas permeable fitting set</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Contact lens fitting</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">21</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Near Vision Book</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Standard near charts</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Near visual acuity</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">22</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Automatic Lensometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Digital lensmeter</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Spectacle power measurement</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">23</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Manual Lensometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Optical lensmeter</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Backup/manual verification</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">24</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Snellen Chart</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Illuminated/digital</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Distance visual acuity</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">25</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Rechargeable Retinoscope</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Streak retinoscope</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Objective refraction</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">26</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">LogMAR Chart</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Standard ETDRS chart</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Accurate VA measurement</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">27</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Direct Ophthalmoscope</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">LED/halogen</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Fundus examination</td>
                    </tr>

                    <tr style="background:#f9fafb;">
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">28</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Schiotz Tonometer</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Indentation type</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">IOP screening</td>
                    </tr>

                    <tr>
                        <td style="border:1px solid #d1d5db; padding:12px; text-align:center;">29</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Brock String</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Beads with string</td>
                        <td style="border:1px solid #d1d5db; padding:12px;">Binocular vision therapy</td>
                    </tr>

                </tbody>

            </table>

        </div>
    </section>

    <section class="mt-4 mb-4">
        <h3 class="text-dark text-center">Glimpse of Lab</h3>
        <div class="row p-2 container text-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 p-3">
                <div class="bg-light rounded p-3">
                    <img style="height: 350px; width: 450px;" src="/mobile-assets/all-labs/opto/Performing Retinoscopy.png"/>
                <p class="text-dark text-center pt-3" style="font-size: 32px;">Performing Retinoscopy</p>
                </div>
            </div>

            <div class="col-lg-5 p-3">
                <div class="bg-light rounded p-3">
                    <img style="height: 350px; width: 450px;" src="/mobile-assets/all-labs/opto/Keratometry.png"/>
                <p class="text-dark text-center pt-3" style="font-size: 32px;">Performing Keratometry</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 p-3">
                <div class="bg-light rounded p-3">
                    <img style="height: 350px; width: 450px;" src="/mobile-assets/all-labs/opto/Applanation tonometry.png"/>
                <p class="text-dark text-center pt-3" style="font-size: 32px;">Performing Applanation tonometry with the help of Slit Lamp</p>
                </div>
            </div>

            <div class="col-lg-5 p-3">
                <div class="bg-light rounded p-3">
                    <img style="height: 350px; width: 450px;" src="/mobile-assets/all-labs/opto/Autorefractometer.png"/>
                <p class="text-dark text-center pt-3" style="font-size: 32px;">Performing Autorefractometer</p>
                </div>
            </div>
        </div>
    </section>
@endsection

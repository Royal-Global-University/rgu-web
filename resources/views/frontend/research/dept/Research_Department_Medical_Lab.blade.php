@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="container">
            <div style="margin-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                            Royal School of Medical & Allied Sciences (RSMAS)</h1>
                        <h2 class="headd2 p-2 text-dark  kd-split-text" style="background-color: #ffac46; border-radius: 10px;">
                            Department of Medical Laboratory Technology</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-5">
                <div>
                    <div class=" container">
                        <h2 class="headd2"><strong>Thrust Areas of Research</strong></h2>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of faculty </th>
                                    <th class="text-white">Thrust area </th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle">
                                <tr>
                                    <td>1</td>
                                    <td>Dr.Rupesh Kumar </td>
                                    <td>Cancer Genetics and Epigenetics </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mrs.Anamika Das </td>
                                    <td>Pertaining to research area Probiotics. </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ms.Susmita Sinha</td>
                                    <td>Prevalence of Iron deficiency anaemia among adolescents’ girls. </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ms.R Elizabeth </td>
                                    <td>Determination of biological variations in blood-related parameters using Hematology
                                        Analyzer. </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms.Viswedeno Khieya </td>
                                    <td>Variation in Hematological parameters using diverse Hematological methods. </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Name of Instrument </th>
                                        <th class="text-white">Picture</th>
                                        <th class="text-white">Make and model</th>
                                        <th class="text-white">Sharing with other department</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark align-middle">
                                    <tr>
                                        <td>1</td>
                                        <td>Binocular Microscope( vision 2000)</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-a.jpg" alt="img">
                                        </td>
                                        <td>Labomed Vision 2000 </td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Revolutionar y micro-centifuge(R- 8c plus)</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-b.jpg" alt="img">
                                        </td>
                                        <td>Remi R-8C Plus </td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Semi Automated Analyser</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-c.jpg" alt="img">
                                        </td>
                                        <td>Mindray BA88A </td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>VDRL Rotator Shaker</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-a.jpg" alt="img">
                                        </td>
                                        <td>ALMICRO </td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mindary Auto Hematology Analyser</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-b.jpg" alt="img">
                                        </td>
                                        <td>Mindray BC 20s</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Digital Incubator</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-c.jpg" alt="img">
                                        </td>
                                        <td>Zenith India</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Needle Destroyer</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-d.jpg" alt="img">
                                        </td>
                                        <td>Medi vision delux 3 stage</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Alere Microplate Reader</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-e.jpg" alt="img">
                                        </td>
                                        <td>Jyoti Pharmaceutic als</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Yorco Rotary Microtome</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-a.jpg" alt="img">
                                        </td>
                                        <td>Jyoti Pharmaceutic als
                                        </td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Autoclave portable</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-b.jpg" alt="img">
                                        </td>
                                        <td>EQUITRON</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Blood mixer</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-c.jpg" alt="img">
                                        </td>
                                        <td>medsource</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Hot air oven</td>
                                        <td>
                                            <p>Preview not available</p>
                                        </td>
                                        <td>Impact ICON Instrument company</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Water Bath</td>
                                        <td>
                                            <p>Preview not available</p>
                                        </td>
                                        <td>Almicro lab equipments</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>VDRL Rotor shaker</td>
                                        <td>
                                            <p>Preview not available</p>
                                        </td>
                                        <td>Narang Scientific Work NSW- 200</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Laminer Air Flow</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page5-a.jpg" alt="img">
                                        </td>
                                        <td>Impact Icon instruments company</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Sphygmomn ometer</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Medical/Page5-b.jpg" alt="img">
                                        </td>
                                        <td>Mercury- deluxe model</td>
                                        <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h2 class="headd2"><strong>Publications:</strong></h2>
                        <hr>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2024</strong>
                        </h2>
                        <div class="table-responsive">
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>
                                            Das, R., Kumar, R*., Rai, A.K., Sarma, A., Kakoti, L., Kataki, A.C., Bhattacharyya,
                                            M. and Kalita, M. Advances in Cancer Biology-Metastasis, 2024, July,100115. DOI
                                            https://doi.org/10.1016/j.adcanc.2024.100115.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2021</strong>
                        </h2>
                        <div class="table-responsive">
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>
                                            Kumar, R*., Rai, A. K., Phukan, M. M., Hussain, A., Borah, D., Gogoi, B.,
                                            Chakraborty, P., & Buragohain, A. K. Current genomics, 2021, Dec, 22(5), 339–352
                                            DOI: 10.2174/1389202922666210921101728.
                                            <hr>
                                            Mahanta, S., Chowdhury, P., Gogoi, N., Goswami, N., Borah, D., Kumar, R., Chetia,
                                            D., Borah, P., Buragohain, A. K., & Gogoi, B. 2021, MAY 39;10, 3802–3811 DOI:
                                            https://doi.org/10.1080/07391102.2020.1768902
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2020</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Gogoi, B., Kumar, R., Upadhyay, J., & Borah, D. (2020). SN Applied Sciences, 2020, Oct,
                                        2,10), 1-7. DOI https://doi.org/10.1007/s42452-020-03529-
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2019</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Kumar, R., Gogoi, B., & Borah, D. Can Peptide Nucleic Acid be the Future Substitute for
                                        Antibiotics?. Current Science, 20219, Oct, 117;11, 1766–1767. DOI
                                        https://doi.org/10.18520/cs/v117/i11/1766-1767
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Attachments</strong></h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <img height="auto" width="400" src="mobile-assets/research/Research_Assets/Medical/Page6-a.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4 pt-3">
                                <img height="auto" width="400" src="mobile-assets/research/Research_Assets/Medical/Page6-b.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4 pt-3">
                                <img height="auto" width="400" src="mobile-assets/research/Research_Assets/Medical/Page7-a.jpg"
                                    alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4 justify-content-center">
                            <div class="col-lg-4 text-center">
                                <img height="auto" width="400" src="mobile-assets/research/Research_Assets/Medical/Page7-b.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4 pt-3 text-center">
                                <img height="auto" width="400" src="mobile-assets/research/Research_Assets/Medical/Page7-c.jpg"
                                    alt="">
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <div class="container">
            <div style="margin-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                            Royal School of Medical & Allied Sciences (RSMAS)</h1>
                        <h2 class="headd2 p-2 text-dark  kd-split-text" style="background-color: #ffac46; border-radius: 10px;">
                            Department of Medical Laboratory Technology</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-5">
                <div>
                    <div class=" container">
                        <h2 class="headd2"><strong>Thrust Areas of Research</strong></h2>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of faculty </th>
                                    <th class="text-white">Thrust area </th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle">
                                <tr>
                                    <td>1</td>
                                    <td>Dr.Rupesh Kumar </td>
                                    <td>Cancer Genetics and Epigenetics </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mrs.Anamika Das </td>
                                    <td>Pertaining to research area Probiotics. </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ms.Susmita Sinha</td>
                                    <td>Prevalence of Iron deficiency anaemia among adolescents’ girls. </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ms.R Elizabeth </td>
                                    <td>Determination of biological variations in blood-related parameters using Hematology
                                        Analyzer. </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms.Viswedeno Khieya </td>
                                    <td>Variation in Hematological parameters using diverse Hematological methods. </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <hr>
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of Instrument </th>
                                    <th class="text-white">Picture</th>
                                    <th class="text-white">Make and model</th>
                                    <th class="text-white">Sharing with other department</th>
                                </tr>
                            </thead>
                            <tbody class="para1 text-dark align-middle">
                                <tr>
                                    <td>1</td>
                                    <td>Binocular Microscope( vision 2000)</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-a.jpg" alt="img"></td>
                                    <td>Labomed Vision 2000 </td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Revolutionar y micro-centifuge(R- 8c plus)</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-b.jpg" alt="img"></td>
                                    <td>Remi R-8C Plus </td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Semi Automated Analyser</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page1-c.jpg" alt="img"></td>
                                    <td>Mindray BA88A </td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>VDRL Rotator Shaker</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-a.jpg" alt="img"></td>
                                    <td>ALMICRO </td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mindary Auto Hematology Analyser</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-b.jpg" alt="img"></td>
                                    <td>Mindray BC 20s</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Digital Incubator</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-c.jpg" alt="img"></td>
                                    <td>Zenith India</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Needle Destroyer</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-d.jpg" alt="img"></td>
                                    <td>Medi vision delux 3 stage</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Alere Microplate Reader</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page2-e.jpg" alt="img"></td>
                                    <td>Jyoti Pharmaceutic als</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Yorco Rotary Microtome</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-a.jpg" alt="img"></td>
                                    <td>Jyoti Pharmaceutic als
                                    </td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Autoclave portable</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-b.jpg" alt="img"></td>
                                    <td>EQUITRON</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Blood mixer</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page3-c.jpg" alt="img"></td>
                                    <td>medsource</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Hot air oven</td>
                                    <td>
                                        <p>Preview not available</p>
                                    </td>
                                    <td>Impact ICON Instrument company</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Water Bath</td>
                                    <td>
                                        <p>Preview not available</p>
                                    </td>
                                    <td>Almicro lab equipments</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>VDRL Rotor shaker</td>
                                    <td>
                                        <p>Preview not available</p>
                                    </td>
                                    <td>Narang Scientific Work NSW- 200</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Laminer Air Flow</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page5-a.jpg" alt="img"></td>
                                    <td>Impact Icon instruments company</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Sphygmomn ometer</td>
                                    <td><img src="mobile-assets/research/Research_Assets/Medical/Page5-b.jpg" alt="img"></td>
                                    <td>Mercury- deluxe model</td>
                                    <td>Biochemistry, Biotechnology, BPT OTT, RIT, Nursing, Food technology</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Publications:</strong></h2>
                        <hr>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2024</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Das, R., Kumar, R*., Rai, A.K., Sarma, A., Kakoti, L., Kataki, A.C., Bhattacharyya, M.
                                        and Kalita, M. Advances in Cancer Biology-Metastasis, 2024, July,100115. DOI
                                        https://doi.org/10.1016/j.adcanc.2024.100115.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2021</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Kumar, R*., Rai, A. K., Phukan, M. M., Hussain, A., Borah, D., Gogoi, B., Chakraborty,
                                        P., & Buragohain, A. K. Current genomics, 2021, Dec, 22(5), 339–352 DOI:
                                        10.2174/1389202922666210921101728.
                                        <hr>
                                        Mahanta, S., Chowdhury, P., Gogoi, N., Goswami, N., Borah, D., Kumar, R., Chetia, D.,
                                        Borah, P., Buragohain, A. K., & Gogoi, B. 2021, MAY 39;10, 3802–3811 DOI:
                                        https://doi.org/10.1080/07391102.2020.1768902
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2020</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Gogoi, B., Kumar, R., Upadhyay, J., & Borah, D. (2020). SN Applied Sciences, 2020, Oct,
                                        2,10), 1-7. DOI https://doi.org/10.1007/s42452-020-03529-
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                            <strong>2019</strong>
                        </h2>
                        <table class="overflow-hidden table table-bordered border-top text-justify">
                            <tbody>
                                <tr class="para1">
                                    <td>
                                        Kumar, R., Gogoi, B., & Borah, D. Can Peptide Nucleic Acid be the Future Substitute for
                                        Antibiotics?. Current Science, 20219, Oct, 117;11, 1766–1767. DOI
                                        https://doi.org/10.18520/cs/v117/i11/1766-1767
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="headd2"><strong>Attachments</strong></h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <img height="300" width="300" src="mobile-assets/research/Research_Assets/Medical/Page6-a.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4">
                                <img height="300" width="300" src="mobile-assets/research/Research_Assets/Medical/Page6-b.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4">
                                <img height="300" width="300" src="mobile-assets/research/Research_Assets/Medical/Page7-a.jpg"
                                    alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4 justify-content-center">
                            <div class="col-lg-4">
                                <img height="300" width="300" src="mobile-assets/research/Research_Assets/Medical/Page7-b.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-4">
                                <img height="300" width="300" src="mobile-assets/research/Research_Assets/Medical/Page7-c.jpg"
                                    alt="">
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

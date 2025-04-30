@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

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
                            Royal School of Bio-sciences (RSBSC)</h1>
                        <h2 class="headd2 p-2 text-dark  kd-split-text" style="background-color: #ffac46; border-radius: 10px;">
                            Department of Biotechnology</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-5">
                <div>
                    <div class="container">
                        <h2 class="headd2"><strong>Thrust Areas of Research</strong></h2>
                        <ul class="para1 text-dark">
                            <li>Drug Discovery from Natural Products</li>
                            <li>Microbial and Environmental Biotechnology</li>
                            <li>Cancer Genetics</li>
                        </ul>
                        <hr>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <hr>
                        <hr>
                        <div>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr class="para1">
                                        <th>#</th>
                                        <th>Name of the instrument</th>
                                        <th>Make/Model</th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark align-middle text-center">
                                    <tr>
                                        <td>1</td>
                                        <td><img style="height: 200px;"
                                                src="mobile-assets/research/Research_Assets/Page1-a.jpg">
                                            <img style="height: 200px;"
                                                src="mobile-assets/research/Research_Assets/Page1-b.jpg"><br>UV-Vis
                                            Spectrophotometer
                                        </td>
                                        <td>Lasany, and BioEra Ltd., India</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page1-c.jpg"><br>Bacteriological
                                            incubator</td>
                                        <td>NSW-151, NSW India Ltd. </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page2-a.jpg">
                                            <hr>
                                            <img src="mobile-assets/research/Research_Assets/Page2-b.jpg">
                                            <br>Shaker incubator with temperature control (4-60 oC)
                                        </td>
                                        <td>REMI, India and Scigenics, India Ltd. <br>
                                            Scigenics Orbitek, Scigenics India Ltd.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page2-c.jpg"><br>
                                            <br>
                                            High speed cooling centrifuge
                                        </td>
                                        <td>REMI, India Eppendorf Centrifuge 5418R, Germany </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page3-a.jpg"><br>Sensitive weighing
                                            machine </td>
                                        <td>Mettler Toledo, USA</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page3-b.jpg"></td>
                                        <td>Microwave Oven</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page4-a.jpg"><br>Biosafety Level-II
                                            cabinet </td>
                                        <td>Klenzaids, India Ltd. </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page4-b.jpg"><br>Digital pH meter
                                        </td>
                                        <td>BioEra, India Ltd. </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page1-a.jpg"><br>Thermocycler </td>
                                        <td>Thermocycler T100, BioRad, USA </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page5-a.jpg"><br>Gel-Documentation
                                            unit </td>
                                        <td>BioRad Gel Doc EZ imager, USA</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Western Blot units with power packs</td>
                                        <td>BioRad, USA</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Gel electrophoresis unit with power packs</td>
                                        <td>BioRad, USA </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page5-b.jpg"><br>Nanodrop </td>
                                        <td>Eppendorf BioSpectrometer, Germany</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Probe sonicator </td>
                                        <td>Riviera, India </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Bath sonicator</td>
                                        <td>Riviera, India </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page6-a.jpg"><br>ELISA reader </td>
                                        <td>Genexy, India</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page6-b.jpg"><br>Deep freezer (-20
                                            oC, and -40 oC) etc.</td>
                                        <td>Blustar India Ltd. </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page6-c.jpg"><br>Mastercycler nexus
                                            gradient</td>
                                        <td>Eppendorf Mastercycler, Germeny </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page7-b.jpg"><br>Rotary vaccum
                                            evaporator with chillervaccum pump</td>
                                        <td>Equitron, India </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page8-a.jpg"><br>Binocular light
                                            microscope with camera attachment </td>
                                        <td>Magnus India Ltd. </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2"><strong>PhD Students :</strong></h2>
                            <h3 class="headd3"><strong>Ongoing PhD students :</strong></h3>
                            <hr>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr class="para1">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Name of the Ph.D. Scholar </th>
                                        <th class="text-white">Title of the Thesis: </th>
                                        <th class="text-white">Name of the supervisor: </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark text-center">
                                    <tr>
                                        <td>1</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page9-a.jpg">Saahana Syed Juhi</td>
                                        <td>Comparative evaluation of the endophytic fungi diversity in Costus speciosus Costus
                                            pictus, two traditional medicinal plant species of Assam</td>
                                        <td>Dr. Ranjan Dutta Kalita</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page9-b.jpg">Sahiba Khan</td>
                                        <td>Isolation and characterization of azo-dye degrading indigenous soil microbes and
                                            exploring its bioremediation potential </td>
                                        <td>Dr. Debajit Borah</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page9-c.jpg">Debaleena Kashyap</td>
                                        <td>Synthesis and Characterization of a few metal nanoparticles and assessment of their
                                            antimicrobial property against bacterial pathogen </td>
                                        <td>Dr. Bhaskarjyoti Gogoi </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page9-d.jpg">Bishwapriya Chutia
                                        </td>
                                        <td>Isolation, Characterization and Therapeutic Assessment of potential Probiotic
                                            strains from Traditionally used Fermented foods of North-East India </td>
                                        <td>Dr. Bhaskarjyoti Gogoi </td>
                                    </tr>

                                </tbody>
                            </table>
                            <h3 class="headd3"><strong>Degree Awarded</strong></h3>
                            <hr>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr class="para1">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Name of the Ph.D. Scholar </th>
                                        <th class="text-white">Title of the Thesis: </th>
                                        <th class="text-white">Name of the supervisor: </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark text-center">
                                    <tr>
                                        <td>1</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page10-a.jpg" alt="img"><br>Dr.
                                            Indukalpa Das</td>
                                        <td>Biosurfactant mediated green synthesis of metal nanoparticles for enhancing seed
                                            germination and antimicrobial applications </td>
                                        <td>Dr. Debajit Borah </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page10-b.jpg" alt="img"><br>Dr.
                                            Vanshika Sharma</td>
                                        <td>Wound healing and antimicrobial properties of Kaempferia galanga L. and formulation
                                            of topical applications </td>
                                        <td>Dr. Ranjan Dutta Kalita </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="headd3"><strong>Degree Awarded</strong></h3>
                            <hr>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr class="para1">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Name of the PI and Co-PI</th>
                                        <th class="text-white">Title of the project </th>
                                        <th class="text-white">Name of the funding agency </th>
                                        <th class="text-white">Duration </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark text-center">
                                    <tr>
                                        <td>1</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page10-c.jpg"><br>Dr. Debajit Borah
                                            (PI) Associate Professor <br>
                                            <img src="mobile-assets/research/Research_Assets/Page10-d.jpg"><br>Dr. Bhaskarjyoti
                                            Gogoi (Co-PI) Assistant Professor
                                        </td>
                                        <td>Production of commercial grade banana fruit beer and assessment of its nutritional
                                            values </td>
                                        <td>DBT-ALSBT Hub (Assam) </td>
                                        <td>2 years </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="mobile-assets/research/Research_Assets/Page11-a.jpg"><br>Dr. Siddhartha
                                            Narayan Borah (PI) Assistant Professor </td>
                                        <td>Bacillus-mediated synthesis of selenium nanoparticles for terbinafine delivery
                                            against zoonotic dermatophytosis </td>
                                        <td>DBT-ALSBT Hub (Assam) </td>
                                        <td>2 years</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2"><strong>Publications For the last 5 years (segregate Year-wise)</strong></h2>
                            <hr>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2024</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Das I, Bharali P, Gogoi P, Borah A, and Borah D*; BioNanoScience. 2024 (accepted
                                            and in press).
                                            <hr>
                                            2. Khan S, Alam FS, and Borah D*; BMC-Biotechnology for the Environment (new
                                            journal), 2024 doi: 10.1186/s44314-024-00003-4.
                                            <hr>
                                            3. Patowary R*, Rajbongshi B, Devi A, Sen B, Goswami M, Sarma H; Next
                                            Sustainability. 2024 Jan 1;3:100034. https://doi.org/10.1016/j.nxsust.2024.100034.
                                            <hr>
                                            4. Das R, Kumar R*, Rai AK, Sarma A, Kakoti L, Kataki AC, Bhattacharyya M, and
                                            Kalita M; Advances in Cancer Biology-Metastasis. 2024; 100115.
                                            https://doi.org/10.1016/j.adcanc.2024.100115.
                                            <hr>
                                            5. Saikia L, Gogoi B, Sen S, Dutta PP, Kumar D. Medical Oncology. (accepted for
                                            publication).
                                            <hr>
                                            6. Samanta SK, Choudhury P, Kandimalla R, Aqil F, Moholkar DN, Gupta RC, Das M,
                                            Gogoi B, Gogoi N, Sarma PP, Devi R. Journal of Ethnopharmacology. 2024 Jan 30; 319:
                                            117235. https://doi.org/10.1016/j.jep.2023.117235.
                                            <hr>
                                            7. Sharma V, Gogoi B, Borah SN, Ghosh A, Mazumdar A, Kalita RD; Journal of
                                            Biomolecular Structure and Dynamics. 2024 Jan 27:1-3. DOI:
                                            10.1080/07391102.2024.2310773.
                                            <hr>
                                            8. Singh KD, Chetia D, Gogoi N, Gogoi B, Rudrapal M. Chemistry & Biodiversity. 2024
                                            Jan; 21(1): e202301299. doi: 10.1002/cbdv.202301299.
                                            <hr>
                                            9. Sharma V, Gogoi B, Borah SN, Ghosh A, Mazumdar A, Kalita RD*; Journal of
                                            Biomolecular Structure and Dynamics. 2024 Jan 27:1-3. doi:
                                            10.1080/07391102.2024.2310773.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2023</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Patowary R*, Jain P, Malakar C, Devi A; Environmental Science and Pollution
                                            Research. 2023 Nov; 30(54): 115185-98. https://doi.org/10.1007/s11356-023-30466-z
                                            <hr>
                                            2. Gogoi B, Das I, Begum S, Dutta G, Kumar R, Borah D*; Microbes and their Genes
                                            involved in Bioremediation of Petroleum Hydrocarbon, Bioremediation for
                                            Environmental Pollutants Sustainable Materials, 2023, 1: 271.
                                            https://doi.org/10.2174/9789815123494123010011
                                            <hr>
                                            3. Shelke DB, Islam NF, Chambhare MR, Sonawane HB, Patowary R, Prasad R, Sarma H;
                                            Biocatalysis and Agricultural Biotechnology. 2023 Aug 3:102805.
                                            https://doi.org/10.1016/j.bcab.2023.102805
                                            <hr>
                                            4. Patowary R, Devi A, Mukherjee AK; Potential Application of Biochar for Efficient
                                            Restoration of Crude Oil-Contaminated Sites. In Land Remediation and Management:
                                            Bioengineering Strategies 2023 Nov 22 (pp. 331-350). Singapore: Springer Nature
                                            Singapore. https://doi.org/10.1007/978-981-99-4221-3_14
                                            <hr>
                                            5. Phukan MM, Pankaj PP, Sangma SR, Ahmed R, Manoj K, Saha J, Ray MK, Kulnu AS,
                                            Kumar R, Sagar K, and Das PP; Antimicrobial, anti-inflammatory, and wound-healing
                                            activities of medicinal plants. Phytochemicals in Medicinal Plants: Biodiversity,
                                            Bioactivity and Drug Discovery, 2023, p.205. doi.org/10.1515/9783110791891-009
                                            <hr>
                                            6. Shelke DB, Islam NF, Chambhare MR, Sonawane HB, Patowary R, Prasad R, Sarma H;
                                            Biocatalysis and Agricultural Biotechnology. 2023 Aug 3:102805.
                                            https://doi.org/10.1016/j.bcab.2023.102805
                                            <hr>
                                            7. Patowary R, Devi A, Mukherjee AK; Potential Application of Biochar for Efficient
                                            Restoration of Crude Oil-Contaminated Sites. InLand Remediation and Management:
                                            Bioengineering Strategies 2023 Nov 22 (pp. 331-350). Singapore: Springer Nature
                                            Singapore. https://doi.org/10.1007/978-981-99-4221-3_14
                                            <hr>
                                            8. Khan S, Das I, Baishya P, Roy M, Das S, Borbora D, and Borah D*; Journal of
                                            Microbiology, Biotechnology, and Food Sciences. 2023; 13(3): 1-4.
                                            https://doi.org/10.55251/jmbfs.10275
                                            <hr>
                                            9. Das I, Sonowal A, Gogoi B, Sharma B, Patowary K, and Borah D*; Kuwait Journal of
                                            Science. 2023; 50(1B): 1-13. https://doi.org/10.48129/kjs.19889 (Impact factor: 1.4)
                                            <hr>
                                            10. Pore SK, Samanta SK, Gogoi B, Hahm ER. Frontiers in Pharmacology. 2023 Feb
                                            24;14:1156197. https://doi.org/10.3389/fphar.2023.1156197
                                            <hr>
                                            11. Chowdhury P, Bhattacharya S, Gogoi B, Veeranna RP, Kumar S. Vaccines. 2022 Sep
                                            29; 10(10): 1639. https://doi.org/10.3390/vaccines10101639
                                            <hr>
                                            12. Gogoi N, Chowdhury P, Goswami AK, Das A, Chetia D, Gogoi B*. Structural
                                            Chemistry. 2022 Oct; 33(5): 1409-22. doi: https://doi.org/10.1007/s11224-022-01916-0
                                            <hr>
                                            13. Samanta SK, Choudhury P, Sarma PP, Gogoi B, Gogoi N, Devi R. Pharmacological
                                            Reports. 2022 Aug; 74(4): 583-601. doi: 10.1007/s43440-022-00373-0
                                            <hr>
                                            14. Goswami AK, Sharma HK, Gogoi N, Kashyap A, Gogoi B. Combinatorial Chemistry &
                                            High Throughput Screening. 2022 Feb 1; 25(2): 292-306. doi:
                                            10.2174/1386207324666210118095503
                                            <hr>
                                            15. Ezung B, Kalita R.D. and Paul, A. World Journal of Pharmaceutical Research.
                                            2023; 12 (19), 856-867. doi:10.20959/wjpr202319-30041
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2022</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Das I, Gogoi B, Sharma B, Borah D*; 3Biotech. 2022;12:294.
                                            https://doi.org/10.1007/s13205-022-03361-6 (Impact factor: 2.893)
                                            <hr>
                                            2. Pathak, B., Khataniar, A., Das, B., Upadhyaya, S., Medhi, A., Bhuyan, P.K.,
                                            Buragohain, A.K., and Borah, D.*; Environmental Science and Pollution Research.
                                            2022; 29: 64096-64111 https://doi.org/10.1007/s11356-022-20323-w (Impact factor:
                                            5.8).
                                            <hr>
                                            3. Puzari A, Borah D, Das P; Monatshefte für Chemie- Chemical Monthly. 2022; 153:
                                            435-442. https://doi.org/10.1007/s00706-022-02929-5 (Impact factor: 1.8)
                                            <hr>
                                            4. Gogoi, B., Das, I., Gogoi, M., Charingia, D., Bandyopadhyay, T., and Borah, D.*;
                                            3Biotech. 2022;12:68. https://doi.org/10.1007/s13205-022-03133-2 (Impact factor:
                                            2.893)
                                            <hr>
                                            5. Chakraborty I, Rongpipi S, Govindaraju I, B Rakesh, Mal SS, Gomez EW, Gomez ED,
                                            Kalita RD, Nath Y, Mazumder N, 2022; 85 (5), 1990–2015. doi.org/10.1002/jemt.24057
                                            <hr>
                                            6. Sonawane H, Shelke D, Chambhare M, Dixit N, Math S, Sen S, Borah SN, Islam NF,
                                            Joshi SJ, Yousaf B, Rinklebe J, Sarma H. Environmental Research. 2022,
                                            212(2):113543. DOI: 10.1016/j.envres.2022.113543 (JIF 8.431)
                                            <hr>
                                            7. Borah SN, Koch N, Sen S, Prasad R, and Sarma H. In book: Emerging Contaminants in
                                            the Environment- Challenges and Sustainable Practices. 2022, Elsevier, ISBN:
                                            978-0-323-85160-2. DOI: 10.1016/B978-0-323-85160-2.00024-X
                                            <hr>
                                            8. Sonowal S, Nava AR, Joshi SJ, Borah SN, Islam NF, Pandit S, Prasad R, Sarma H.
                                            Pedosphere. 2022. 32(1): 198-210. DOI: 10.1016/S1002-0160(21)60067-X (JIF 5.513)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2021</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Kumar R*, Rai AK, Phukan MM, Hussain A, Borah D, Gogoi B, Chakraborty P, &
                                            Buragohain AK; Current genomics. 2021; 22(5): 339-352. DOI:
                                            10.2174/1389202922666210921101728 (IF-2.68).
                                            <hr>
                                            2. Mahanta S, Chowdhury P, Gogoi N, Goswami N, Borah D, Kumar R, Chetia D, Borah P,
                                            Buragohain AK, & Gogoi B; Journal of Biomolecular Structure & Dynamics.
                                            2021;39(10):3802–3811 (IF-4.15) DOI: https://doi.org/10.1080/07391102.2020.1768902.
                                            <hr>
                                            3. Borah D*, Chaubey A, Sonowal A, Gogoi B, & Kumar R; Microbial Biosurfactants and
                                            Their Potential Applications: An Overview. Microbial Biosurfactants, 2021, 91-116.
                                            <hr>
                                            4. Phukan MM, Kumar R, Gupta K, Bardhan P, Bhuyan N, Gogoi L, ... & Kataki R;
                                            Environmental Microbiology and Biotechnology. 2021; 135-152.
                                            <hr>
                                            5. Gogoi N, Gogoi B, Chetia D. Clinical Phytoscience. 2021 May 6;7(1):42.
                                            https://doi.org/10.1186/s40816-021-00269-1.
                                            <hr>
                                            6. Mahanta S, Gogoi B, Chetia P, Tanti B, Handique PJ. Letters in Drug Design &
                                            Discovery. 2021 Sep 1; 18(9):859-71. DOI: 10.2174/1570180818666210421140331.
                                            <hr>
                                            7. Gogoi B, Chowdhury P, Goswami N, Gogoi N, Naiya T, Chetia P, Mahanta S, Chetia D,
                                            Tanti B, Borah P, Handique PJ; Molecular diversity. 2021 Aug; 25:1963-77. DOI:
                                            10.1007/s11030-021-10211-9.
                                            <hr>
                                            8. Gogoi N, Chowdhury P, Goswami AK, Das A, Chetia D, Gogoi B*. Molecular diversity.
                                            2021 Aug;25:1745-59.doi: 10.1007/s11030-020-10150-x.
                                            <hr>
                                            9. Gogoi N, Chetia D, Gogoi B, Das A; Current Computer-Aided Drug Design. 2021 Feb
                                            1; 17(1): 69-82. DOI: 10.2174/1573409916666191226103000.
                                            <hr>
                                            10. Borah SN, Goswami L, Sen S, Sachan D, Sarma H, Montes M, Peralta-Videa J,
                                            Pakshirajan K, Narayan M; Environmental Pollution. 2021. 285:117519. DOI:
                                            10.1016/j.envpol.2021.117519 (JIF 9.988).
                                            <hr>
                                            11. Sen S, Borah SN, Sarma H, Bora A, Deka S; Journal of Environmental Chemical
                                            Engineering. 2021. 9(4):105494, DOI: 10.1016/j.jece.2021.105494 (JIF 7.968).
                                            <hr>
                                            12. Borah SN, Sen S, Pakshirajan K. In Book: Biosurfactants for a Sustainable
                                            Future: Production and Application in the Environment and Biomedicine. 2021. Wiley,
                                            ISBN: 978-1-119-67105-3. DOI: 10.1002/9781119671022.ch8.
                                            <hr>
                                            13. Sen S, Borah SN, and Deka S. In Book: Biosurfactants for a Sustainable Future:
                                            Production and Application in the Environment and Biomedicine. 2021. Wiley, ISBN:
                                            978-1-119-67105-3. DOI: 10.1002/9781119671022.ch20.
                                            <hr>
                                            14. Singh A, Kushwaha A, Sen S, Goswami S, Katiyar S, Kumar A, Borah SN, Goswami L,
                                            and Hussain CM. In Book: Waste-to-Energy Approaches Towards Zero Waste. 2021.
                                            Elsevier, ISBN: 978-0-323-85387-3. DOI: 10.1016/B978-0-323-85387-3.00014-8.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2020</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Gogoi B, Kumar R, Upadhyay J, & Borah D*; SN Applied Sciences, 2020, 2(10), 1-7.
                                            (IF-0) DOI https://doi.org/10.1007/s42452-020-03529-
                                            <hr>
                                            2. Garg A, Borah D, Trivedi P, Chaturvedi V, Gogoi D, Chaliha AK, Ali AZ, Chetia D,
                                            and Sarma D; ACS Omega. 2020; 5(46): 29830–29837 (Impact factor: 4.132).
                                            <hr>
                                            3. Hazarika M, Kalita GD, Pramanik S, Borah D, and Das P; Current Research in Green
                                            and Sustainable Chemistry. 2020; 3: 10008
                                            https://doi.org/10.1016/j.crgsc.2020.100018.
                                            <hr>
                                            4. Basumatary M, Das S, Gogoi M, Das I, Charingia D, and Borah D* ; Bioremediation
                                            Journal. 2020; 24(2-3):190-203 (Impact factor: 2.14).
                                            <hr>
                                            5. Pathak B, Borah D*, Khataniar A, Bhuyan PK, and Buragohain AK; Journal of Earth
                                            System Science. 2020; 129: 141. (Impact factor: 1.912).
                                            <hr>
                                            6. Gogoi B*, Gogoi N, Chowdhury P, Chetia D; International Journal of Infectious
                                            Diseases. 2020 Dec 1;101:116-7. DOI: https://doi.org/10.1016/j.ijid.2020.09.322.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;">
                                <strong>2019</strong></h2>
                            <table class="overflow-hidden table table-bordered border-top text-justify">
                                <tbody>
                                    <tr class="para1">
                                        <td>1. Kumar R, Gogoi B, & Borah D*; Current Science, 2019, 117(11), 1766–1767.
                                            <hr>
                                            2. Chaubey A, and Borah D*; Current Science. 117(7): 1125 (Impact factor: 1.169).
                                            <hr>
                                            3. Das M, Borah D, Patowary K, Borah M, Khataniar A, and Kakoti BB;
                                            IET-Nanobiotechnology. 2019; 13 (9): 967-973 (Impact factor: 2.3).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="headd2"><strong>Patent Details</strong></h2>
                            <hr>
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                                <thead class="text-white" style="background-color: #27467A;">
                                    <tr class="para1">
                                    <tr>
                                        <th class="text-white">#</th>
                                        <th class="text-white">Patent Application No. </th>
                                        <th class="text-white">Inventor(s)</th>
                                        <th class="text-white">Title </th>
                                        <th class="text-white">Date of Publication </th>
                                        <th class="text-white">Publication number </th>
                                    </tr>
                                </thead>
                                <tbody class="para1 text-dark text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>202331083484</td>
                                        <td>Vanshika Sharma, Ranjan Dutta Kalita, Bipul Nath, Dipankar Saha </td>
                                        <td>Wound healing topical ointment formulation based on essential oil obtained from
                                            Kaempferia galangal L. </td>
                                        <td>15/12/2023</td>
                                        <td>NA</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>202431031585 </td>
                                        <td>Debajit Borah, Bhaskarjyoti Gogoi, Probodh Borah, Arijit Kumar, Raktim Ranjan Gogoi,
                                            and Dhanmoi Barman </td>
                                        <td>A process for producing banana beer and a composition for the same</td>
                                        <td>26/04/2024</td>
                                        <td>NA</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <h2 class="headd2"><strong>Research Highlights:</strong></h2>
                            <h3 class="headd3"><strong>Flyers of the distinguished talks organized</strong></h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img height="300" width="400" src="https://resource.rgu.ac/assets/images/research-development/schools/RSBSC/Page%2018-a.jpg" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img height="300" width="400" src="https://resource.rgu.ac/assets/images/research-development/schools/RSBSC/Page%2017-a.jpg" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img height="300" width="400" src="https://resource.rgu.ac/assets/images/research-development/schools/RSBSC/Page%2019-a.jpg" alt="">
                                </div>
                            </div>
                            <hr> -->
                            <h3 class="headd3"><strong>Achievements of the faculty/students:</strong></h3>
                            <div class="para1 text-dark" style="text-align: justify;">
                                <p>Dr. Debajit Borah, Associate Professor, Dept. of Biotechnology, RGU and Mr. Abhijit Sonowal,
                                    a student of MSc Biotechnology 4th semester was jointly conferred with “Idea Exposition
                                    Award” on “Innovations in Agriculture and Sustainability” with an exposure grant of Rs.
                                    50,000/- (fifty thousand only) by DBT-BIRAC Regional Innovation Centre (BRIC) in
                                    collaboration with Idea Knowledge Park, Hyderabad and Guwahati Biotech Park, Guwahati during
                                    July 16-17, 2020.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

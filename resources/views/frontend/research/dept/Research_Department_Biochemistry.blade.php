@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div>
            <section style="background-image: url('mobile-assets/royal-schools-assets/bg.svg');">
                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-4"
                    style="color: #27467A; font-weight: 900;">
                    Royal School of <br><span style="color: #FF9A1E; font-weight: 500;">Bio-Sciences (RSBSC)</span></h2>

                <div style="padding: 20px 30px;">

                    <div class="row">

                        <div class="col-lg-4 mb-4">

                            <a href="department-biotechnology">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-dna fa-3x"></i>

                                    </div>
                                    <div class="card-body ">
                                        <h5 style="font-weight: 800; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Bio-Technology</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <a href="department-microbiology">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-bacterium fa-3x"></i>

                                    </div>
                                    <div class="card-body ">
                                        <h5 style="font-weight: 800; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Microbiology</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-4">

                            <a href="department-food-technology">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 100%;">
                                    <div class="p-3 text-center">
                                        <i style="color: #27467A;" class="fas fa-utensils fa-3x"></i>

                                    </div>
                                    <div class="card-body ">
                                        <h5 style="font-weight: 800; color: #27467A;"
                                            class="text-center card-title mobile-headd2 pb-2">Department of Food Technology</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>

            </section>
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
                            Royal School of Bio-sciences (RSBSC)</h1>
                        <h2 class="headd2 p-2 text-dark mt-4 kd-split-text" style="background-color: #ffac46; border-radius: 10px;">
                            Department of Biochemistry</h2>
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
                            <li>Structural Biochemistry and Bioinformatics</li>
                            <li>Medicinal plants and Metabolic Disorders</li>
                            <li>Molecular and Cancer Biology</li>
                            <li>Natural products and Microbial Biofilms</li>
                        </ul>
                        <hr>
                        <h2 class="headd2"><strong>Instruments and Facilities</strong></h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/page20-a.jpg">
                            </div>
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/Page20-b.jpg">
                            </div>
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/Page20-c.jpg">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/Page20-d.jpg">
                            </div>
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/Page20-e.jpg">
                            </div>
                            <div class="col-md-4">
                                <img src="mobile-assets/research/Research_Assets/Page20-f.jpg">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3">
                                <img src="mobile-assets/research/Research_Assets/Page20-g.jpg">
                            </div>
                            <div class="col-md-3">
                                <img src="mobile-assets/research/Research_Assets/Page20-h.jpg">
                            </div>
                            <div class="col-md-3">
                                <img src="mobile-assets/research/Research_Assets/Page20-i.jpg">
                            </div>
                            <div class="col-md-3">
                                <img src="mobile-assets/research/Research_Assets/Page20-j.jpg">
                            </div>
                        </div>


                        <img style="padding-left: 150px;" height="600px" src="mobile-assets/research/Research_Assets/Page21-a.jpg" alt="">
                </div>
                <hr>
                <h2 class="headd2"><strong>Projects : </strong></h2>
                <h3 class="headd3"><strong>Ongoing projects:</strong></h3>
                <hr>
                <div>
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-3">
                        <thead class="text-white" style="background-color: #27467A;">
                            <tr class="para1">
                                <th>#</th>
                                <th>NAME OF THE PI AND CO-PI</th>
                                <th>TITLE OF THE PROJECT</th>
                                <th>NAME OF THE FUNDING AGENCY</th>
                                <th>DURATION</th>
                            </tr>
                        </thead>
                        <tbody class="para1 text-dark">
                            <tr>
                                <td>1</td>
                                <td>Dr. Anuj Kumar Borah (PI) Assistant Professor<br><img
                                        src="mobile-assets/research/Research_Member/Page22-a.jpg" alt="img"></td>
                                <td>Development, characterization and evaluation of Myricetin loaded phytosomes as modulator of intestinal carbohydrate digestion and subsequent anti-hyperglycaemic action.</td>
                                <td>DBT-ALSBT Hub (Assam)</td>
                                <td>2 years</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2"><strong>Publications For the last 5 years (segregate Year-wise)</strong></h2>
                    <hr>
                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2024</strong></h2>
                    <table
                        class="overflow-hidden table table-bordered border-top text-justify">
                        <tbody>
                            <tr class="para1">
                                <td>1. Chanu SB, Singh LR, Devi SK, Yaiphabi S, Ingti B, Baruah TJ*. In silico and in vitro antityrosinase activity of the non-protein fraction from the sericin extract of Antheraea proylei J. Int J Pharm Inv. 2024. (Accepted).
                                    <hr>
                                    2. Dutta SP*, Chowdhury S, Savapandit S. Mitochondrial cytochrome C oxidase and succinate dehydrogenase: Emerging biomarkers in cancer. Int J Pharm Sc & Res. 2024 Oct; 15(10): (Accepted).
                                    <hr>
                                    3. Singh CS, Boruah N, Bannerjee A, Kurkalang S, Swargiary P, Dakhar H, Chatterjee A*. Differential expression of Mad2 gene is consequential to the patterns of histone H3 post-translational modifications in its promoter region in human esophageal cancer samples. Oncotarget. 2024;15:76-89. https://doi.org/10.18632/oncotarget.28554.
                                    <hr>
                                    4. Laha A, Sarkar S, Sengupta S, Das A, Paul S, Bhattacharyya S. Unraveling the potential of Acinetobacter calcoaceticus for arsenic resistance and plant growth promotion in contaminated lentil field. S Afr J Bot. 2024 May;168:61-70. https://doi.org/10.1016/j.sajb.2024.03.005.
                                    <hr>
                                    5. Ghosh M, Mandal S, Ghorui C, Datta S, Anindya Roy, Roy A, Chakrabarty S, Mitra S, Das A, Chaudhary AK, Pradhan SK. Development of an antifungal drug loaded spinel ferrite nanocarrier with enhanced antifungal activity and superior anticancer effect against human lung carcinoma cells. J Mol Str. 2024 Jul;1307:137925. https://doi.org/10.1016/j.molstruc.2024.137925.
                                    <hr>
                                    6. Borah AK, Singh A, Saha S. 1α, 25-dihydroxy vitamin D3 containing leaf aqueous extract of Catharanthus roseus (L.) G. Don inhibits pro-inflammatory signaling in adipocytes-macrophage co-culture and improves glucose homeostasis in adipocytes and muscle cells. S Afr J Bot. 2024 Apr; 167: 519 -526. Doi: https://doi.org/10.1016/j.sajb.2024.02.030.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2023</strong></h2>
                    <table
                    class="overflow-hidden table table-bordered border-top text-justify">
                    <tbody>
                        <tr class="para1">
                                <td>1. Lyngdoh A, Baruah TJ, Sharan RN, Kma L. Inhibitory Potential of Apium graveolens L. Extract on Inflammation in Diethylnitrosamine-induced Hepatocellular Carcinoma in Mice. Pharmacognosy Magazine. 2023;19(3):736-750. doi:10.1177/09731296231170931.
                                    <hr>
                                    2. Borah SM, Kma L, Darjee MS, Deka D, Lyngdoh A, Sharan RN, Baruah TJ*. Apigenin promotes cell death in NCI-H23 cells by upregulation of PTEN: potential involvement of the binding of apigenin with WWP2 protein. J Biomol Struct Dyn. 2023 Oct 23:1-15. doi: 10.1080/07391102.2023.2272743.
                                    <hr>
                                    3. Moirangthem A, Baruah TJ , Maurya AP , Patar AK, Paul S, Ingti B. (2023) Identification of potential inhibitors from Andrographis paniculata bioactive compounds against extended-spectrum β-lactamases through in silico and in vitro approaches. Res. J. Biotech. 12023;8(12);80-90. doi: 10.25303/1812rjbt080090.
                                    <hr>
                                    4. Chatterjee S, Das S, Paul P, Chakraborty P, Sarkar S, Das A, Tribedi P. Synergistic interaction of cuminaldehyde and tobramycin: a potential strategy for the efficient management of biofilm caused by Pseudomonas aeruginosa. Folia Microbiol (Praha). 2023 Feb;68(1):151-163. doi: 10.1007/s12223-022-01005-z.
                                    <hr>
                                    5. Bararia A, Chakraborty P, Roy P, Chattopadhay BK, Das A, Chatterjee A, Sikdar N. Emerging role of non-invasive and liquid biopsy biomarkers in pancreatic cancer. World J Gastroenterol. 2023 Apr 21;29(15):2241-2260. https://doi: 10.3748/wjg.v29.i15.2241.
                                    <hr>
                                    6. Bararia A, Das A, Mitra S, Banerjee S, Chatterjee A, Sikdar N. Deoxyribonucleic acid methylation driven aberrations in pancreatic cancer-related pathways. World J Gastrointest Oncol. 2023 Sep 15;15(9):1505-1519. doi: 10.4251/wjgo.v15.i9.1505.
                                    <hr>
                                    7. Das A*. The emerging role of microplastics in systemic toxicity: Involvement of reactive oxygen species (ROS). Sci Total Environ. 2023 Oct 15;895:165076. doi: 10.1016/j.scitotenv.2023.165076.
                                    <hr>
                                    8. Das A, Chakrabarty S, Nag D, Paul S, Ganguli A, Chakrabarti G. Heavy water (D2O) induces autophagy-dependent apoptotic cell death in non-small cell lung cancer A549 cells by generating reactive oxygen species (ROS) upon microtubule disruption. Toxicol In Vitro. 2023 Dec;93:105703. doi: 10.1016/j.tiv.2023.105703.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2022</strong></h2>
                    <table
                    class="overflow-hidden table table-bordered border-top text-justify">
                    <tbody>
                        <tr class="para1">
                                <td>1. Kma L, Baruah TJ*. The interplay of ROS and the PI3K/Akt pathway in autophagy regulation. Biotechnol Appl Biochem. 2022 Feb;69(1):248-264. doi: 10.1002/bab.2104.
                                    <hr>
                                    2. Barman J, Patar AK, Baruah TJ*. Flavonoids as potential drugs against post-Covid-19 mucormycosis: An in-silico study. Int J Pharm Sci & Res. 2022;13(9): 3786-3791. doi: 10.13040/IJPSR.0975-8232.13(9).3786-91
                                    <hr>
                                    3. Patar AK, Kma L, Barman J, Ghosh S, Baruah TJ*. KRAS G12C As A Target Of Naringenin For Inducing Cell Death In NCI-H23 Cells. Pharmacogn Res. 2022;14(3):256-262. doi:10.5530/pres.14.3.37.
                                    <hr>
                                    4. Patar AK, Borah SM, Barman J, Bora A, Baruah TJ*. Dronabinol as an answer to flavivirus infections: an in-silico investigation. J Biomol Struct Dyn. 2022;28: 1-12. doi: 10.1080/07391102.2022.2160817.
                                    <hr>
                                    5. Dutta SP, Alam A. Identification Of Liver Mitochondria Tumor Associated Antigens Of The Mice Exposed To N, Nitrosodibutylamine: A Promising Strategy In Development Of Anticancer Treatment. Journal of Pharmaceutical Negative Results. 2022; 1635-1649. doi: https://doi.org/10.47750/pnr.2022.13.S06.216.
                                    <hr>
                                    6. Dutta SP*. A Review on Osimertinib: A Drug for Non-Small Cell Lung Cancer Patients. IJPPR Human. 2022; 25(3): 83-88. https://ijppr.humanjournals.com/wp-content/uploads/2022/11/6.STHITI-PORNA-DUTTA.pdf
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2021</strong></h2>
                    <table
                    class="overflow-hidden table table-bordered border-top text-justify">
                    <tbody>
                        <tr class="para1">
                                <td>1. Kma L, Baruah TJ*. Quercetin develops sensitivity of adenocarcinoma cells to radiation via lowering metastasis and promoting caspase-3 independent cell death. Int J Pharm Sci & Res. 2021;12(5): 2842-52. doi: 10.13040/IJPSR.0975-8232.12(5).2842-52.
                                    <hr>
                                    2. Baruah TJ, Dutta SP, Patar AK. A preliminary in-silico analysis of Ocimum sanctum flavonoids, orientin and vicenin-1, as potential drugs against Sars-Cov-2 infection. Int J Pharm Sci & Res. 2021;12(5): 2950-56. doi: 10.13040/IJPSR.0975-8232.12(5).2950-56.
                                    <hr>
                                    3. Dutta SP, Neog K, Alam A. Transmission electron microscopy of the liver mitochondria of N-Nitrosodibutylamine-treated mice. Microscopy Research and Technique. 2021; 84(12): 2832–2836. doi:https://doi.org/10.1002/jemt.23842.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2020</strong></h2>
                    <table
                    class="overflow-hidden table table-bordered border-top text-justify">
                    <tbody>
                        <tr class="para1">
                                <td>1. Baruah TJ, Hauneihkim K, Kma L. Naringenin sensitizes lung cancer NCI-H23 cells to radiation by downregulation of Akt expression and metastasis while promoting apoptosis. Phcog Mag. 2020;16:S229-35. doi:10.4103/pm.pm_535_19.
                                    <hr>
                                    2. Dutta SP, Neog K. Thin Layer Chromatography, Laboratory Techniques in Biological Sciences. 2020; 96-107; 978-93-90417-90-2.
                                    <hr>
                                    3. Sohkhlet M, Alam A, Dutta SP*. Identification and Molecular Characterization of Tumour-associated antigen Expressed on Hepatocytes in Mice Exposed to Diethyl Nitrosamine. Biosc Biotech Res Comm. 2020; 13(1). doi: http://dx.doi.org/10.21786/bbrc/13.1/55.
                                    <hr>
                                    4. Borah J, Singh KL, Mondal S, Dutta SP*. Phyto-chemical analysis and synergistic interation of plantsextractson bacterial and fungal isolates. Int J Rec Acad Res. 2020; 2(4): 618–623. doi https://www.researchgate.net/publication/353016860.
                                    <hr>
                                    5. Dutta SP*. COVID 19: A Review On Current Scenario, Therapeutic Intervention And Recent Developments. International Journal Of Pharmacy And Pharmaceutical Research (NISCIAR). 2020; 18(2). doi: https://ijppr.humanjournals.com/covid-19-a-review-on-current-scenario-therapeutic-intervention-and-recent-developments.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2 text-center" style="background-color: #ffac46; border-radius: 10px;"><strong>2019</strong></h2>
                    <table
                    class="overflow-hidden table table-bordered border-top text-justify">
                    <tbody>
                        <tr class="para1">
                                <td>1. Baruah TJ, Kma L. Flavonoids and the radiation response of cancer cells: A therapeutic prospective. NEHU Journal. 2019;17:22-27; 0972-8406.
                                    <hr>
                                    2. Baruah TJ, Kma L. Vicenin-2 acts as a radiosensitizer of the non-small cell lung cancer by lowering Akt expression. Biofactors. 2019;45: 200-210. doi: 10.1002/biof.1472.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="headd2"><strong>Research Highlights:</strong></h2>
                    <h3 class="headd3"><strong>Flyers of the distinguished talks organized</strong></h3>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <img height="350" width="450" src="mobile-assets/research/Research_Assets/Page27-a.jpg" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img height="350" width="450" src="mobile-assets/research/Research_Assets/Page28-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <h3 class="headd3"><strong>Achievements of the faculty/students:</strong></h3>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">1. Dr. Amlan Das: 6-day Short-Term Course on Indian Knowledge Systems (IKS) held from October 9th to 14th, 2023, at UGC-MMTTC, Gauhati University, Guwahati, Assam, sponsored by the University Grants Commission (UGC), as a part of the Malviya Mission Teacher Training Programme.Grade: A+</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page29-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page29-b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">2. Dr. Amlan Das: Selected as the "In Person" attendee for the Human Cell Atlas, Asia 2023 Meeting, 27-28 November 2023, Kolkata. The Human Cell Atlas is an international collaborative consortium dedicated to mapping all cell types in the healthy human body,is based at the Wellcome Sanger Institute, and works with regional offices in the USA (at the Broad Institute of MIT and Harvard) and Japan (at the RIKEN Institute).</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">3. Dr. Amlan Das: The one day symposium on 29th Nov, 2023 organized by CNCI in association with IACR (Indian Association of Cancer Research), West Bengal Chapter.</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page30-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page30-b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">4. Dr. Amlan Das: Delivered an invited research talk on the application of PARP inhibitors in oral cancer management at Chittaranjan National Cancer Institute (CNCI) [ Govt of India], Kolkata, India, as a part of the Distinguished Scientific Lecture Series.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">5. Dr. Amlan Das: Visited Jawahar Navodaya Vidyalaya, Silchar as a part of the RGU outreach program. The event was also covered in the leading Hindi daily of Kachhar, Preronabharati.</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page31-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page31-b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">6. Dr. Anuj Kumar Borah: 7-days FDP on Data Analysis using Machine Learning Software in 2023 at The Assam Royal Global University, Guwahati, Assam</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">7. Dr. Anuj Kumar Borah: 9-days Online workshop on Next Generation Sequencing-DNASeq in 2023, under the banner of The Institute of Biotechnological Research, India.</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page32-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page32-b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">8. Dr. Chongtham Sovachandra Singh: 7-days FDP on Data Analysis using Machine Learning Software in 2023 at The Assam Royal Global University, Guwahati, Assam</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 pt-3" style="text-align: justify;">
                            <p class="para1 text-dark">9. Dr. Chongtham Sovachandra Singh: IFDP organized by the Royal School of Commerce on the topic "NEP Implementation & the way forward" in 2024 at The Assam Royal Global University, Guwahati, Assam.</p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page33-a.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <p class="para1 text-dark">
                        10. Dr. Jiwasmika Baishya: IFDP organized by the Royal School of Commerce on the topic "NEP Implementation & the way forward" in 2024 at The Assam Royal Global University, Guwahati, Assam. <br>

11. Dr. Jiwasmika Baishya: FDP organized by the Royal School of Commerce on the topic "Essence of Outcome Based Education & its Implication on the Preparation of Syllabus & Course Structure" in April 2024 at The Assam Royal Global University, Guwahati, Assam <br>

12. Dr. Jiwasmika Baishya: FDP organized by the Royal School of Commerce on the topic "Pedagogy and Ethics" inMarch2024 at The Assam Royal Global University, Guwahati, Assam <br>

13. Dr. Sthiti Porna Dutta completed the faculty improvement training on “study on microbial dynamics during fermentation of ethnic food and beverages” <br>
                    </p>
                    <div class="text-center">
                    <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page34-a.jpg" alt="">
                </div>
                <hr>
                <h3 class="headd3"><strong>Paper Presentation/Poster Presentation/ Conference Achievements (Students)</strong></h3>
                <hr>
                <div class="row">
                    <div class="col-lg-6 pt-3" style="text-align: justify;">
                        <p class="para1 text-dark">1. Jyotirmay Das (PG), Bhupali Kalita (PG), Nabajyoti Das (UG) & Partha Pratim Das (UG) were awarded 3rd prize for best poster presentation in 3 day international conference on “Interface of Chemistry and Pharmaceutical Science” jointly organized by The Assam Royal Global University and Cotton University, Guwahati, Assam, from 8th-10th November, 2023.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page34-b.jpg" alt="">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page35-a.jpg" alt="">
                    </div>
                    <div class="col-lg-6 pt-3" style="text-align: justify;">
                        <p class="para1 text-dark">2. Bhupali Kalita (PG) selected for Oral Presentation at the first international conference Green Bio-Merge 2024.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 pt-3" style="text-align: justify;">
                        <p class="para1 text-dark">3. Subhajit Chowdhury (PG), Sewagi Savapandit (PG), & Marmish Debbarma (PG) represented the University in Anveshan- National Student Research Convention 2023.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page35-b.jpg" alt="">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img  class="img-fluid rounded shadow" src="mobile-assets/research/Research_Assets/Page36-a.jpg" alt="">
                    </div>
                    <div class="col-lg-6 pt-3" style="text-align: justify;">
                        <p class="para1 text-dark">4. Muskan Sonam Darjee (PG) was awarded 2nd prize in poster presentation during the national conference “Drug discovery and in-silico drug design, 2022.”</p>
                    </div>
                </div>
                <hr>

                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

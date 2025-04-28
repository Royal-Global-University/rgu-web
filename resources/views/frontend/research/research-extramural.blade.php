@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Extramural <span style="color: #FF9A1E; font-weight: 500;">Projects</span></h2>

                <div class="table-responsive">
                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-3 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-center">SL No.</th>
                            <th class="text-center">Name of of the PI/ Co-PI</th>
                            <th class="text-center">Title of the Research Project</th>
                            <th class="text-center">Name of the funding agaency</th>
                            <th class="text-center">Year of award or sanction</th>
                            <th class="text-center">Amount in Rs</th>
                        </thead>
                        <tbody class="text-center mobile-para1" style="background-color: #fff !important; ">
                            <tr>
                                <td>1</td>
                                <td>Dr. Priyanka Patowary </td>
                                <td>Need Assessment Survey (NAS) in nearby villages of NTPC Bongaigaon
                                </td>
                                <td>Grant Thorton International Ltd</td>
                                <td>2021-22</td>
                                <td>198000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Annesha Borah</td>
                                <td>Current Status and Development of bamboo Industry in Assam
                                </td>
                                <td>Tripura Bamboo and Cane Development Centr</td>
                                <td>2021-22</td>
                                <td>110000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Debajit Borah</td>
                                <td>Production of commercial-grade banana fruit beer and assessment of its nutritional values
                                </td>
                                <td>DBT-ALSBT</td>
                                <td>2021-22</td>
                                <td>851000</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. Debojit Sahu</td>
                                <td>Metal nanoparticles for petroleum spill degradation
                                </td>
                                <td>ASTEC</td>
                                <td>2021-22</td>
                                <td>10000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Upasana Chetry</td>
                                <td>Multi-omics network analysis to decipher miRNA-TF-gene interaction in regulation of
                                    flavonoid and
                                    carotenoid biosynthetic pathways in Chakhao cultivars of aromatic black rice from North-East
                                    India.
                                </td>
                                <td>SERB-SURE</td>
                                <td>2022-23</td>
                                <td>3000000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. Anuj Kumar Borah </td>
                                <td>Development, characterization and evaluation of Myricetin loaded phytosomes as modulator of
                                    intestinal carbohydrate digestion and subsequent anti-hyperglycaemic action.
                                </td>
                                <td>DBT-ALSBT Hub (Assam)</td>
                                <td>2024</td>
                                <td>655800.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. Siddhartha Narayan Borah </td>
                                <td>Development, characterization and evaluation of Myricetin loaded phytosomes as modulator of
                                    intestinal carbohydrate digestion and subsequent anti-hyperglycaemic action.
                                </td>
                                <td>DBT-ALSBT Hub (Assam)</td>
                                <td>2024</td>
                                <td>766000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dr. Moidul Islam</td>
                                <td>Exploring Parity-Time symmetry effect in metasurfaces for terahertz photonics subsequent
                                    anti-hyperglycaemic action
                                </td>
                                <td>DST-CRG</td>
                                <td>2024</td>
                                <td>2674892</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. Upashna Chettri</td>
                                <td>Save the Salamanders: Conservation and Protection of Himalayan Salamander Habitats
                                </td>
                                <td>5th India Bioscience Outreach Grant</td>
                                <td>2024</td>
                                <td>100000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(mobile-assets/research/bg.svg); background-size: cover;">
            <div class="container">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Extramural <span style="color: #FF9A1E; font-weight: 500;">Projects</span></h2>

                <div class="table-responsive">
                    <table id="" class="overflow-hidden table text-wrap table-bordered border-top mt-3 mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <th class="text-center ">SL No.</th>
                            <th class="text-center ">Name of of the PI/ Co-PI</th>
                            <th class="text-center ">Title of the Research Project</th>
                            <th class="text-center ">Name of the funding agaency</th>
                            <th class="text-center ">Year of award or sanction</th>
                            <th class="text-center ">Amount in Rs</th>
                        </thead>
                        <tbody class="text-center para1" style="background-color: #fff !important; ">
                            <tr>
                                <td>1</td>
                                <td>Dr. Priyanka Patowary </td>
                                <td>Need Assessment Survey (NAS) in nearby villages of NTPC Bongaigaon
                                </td>
                                <td>Grant Thorton International Ltd</td>
                                <td>2021-22</td>
                                <td>198000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Annesha Borah</td>
                                <td>Current Status and Development of bamboo Industry in Assam
                                </td>
                                <td>Tripura Bamboo and Cane Development Centr</td>
                                <td>2021-22</td>
                                <td>110000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Debajit Borah</td>
                                <td>Production of commercial-grade banana fruit beer and assessment of its nutritional values
                                </td>
                                <td>DBT-ALSBT</td>
                                <td>2021-22</td>
                                <td>851000</td>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. Debojit Sahu</td>
                                <td>Metal nanoparticles for petroleum spill degradation
                                </td>
                                <td>ASTEC</td>
                                <td>2021-22</td>
                                <td>10000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Upasana Chetry</td>
                                <td>Multi-omics network analysis to decipher miRNA-TF-gene interaction in regulation of
                                    flavonoid and
                                    carotenoid biosynthetic pathways in Chakhao cultivars of aromatic black rice from North-East
                                    India.
                                </td>
                                <td>SERB-SURE</td>
                                <td>2022-23</td>
                                <td>3000000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. Anuj Kumar Borah </td>
                                <td>Development, characterization and evaluation of Myricetin loaded phytosomes as modulator of
                                    intestinal carbohydrate digestion and subsequent anti-hyperglycaemic action.
                                </td>
                                <td>DBT-ALSBT Hub (Assam)</td>
                                <td>2024</td>
                                <td>655800.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. Siddhartha Narayan Borah </td>
                                <td>Development, characterization and evaluation of Myricetin loaded phytosomes as modulator of
                                    intestinal carbohydrate digestion and subsequent anti-hyperglycaemic action.
                                </td>
                                <td>DBT-ALSBT Hub (Assam)</td>
                                <td>2024</td>
                                <td>766000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dr. Moidul Islam</td>
                                <td>Exploring Parity-Time symmetry effect in metasurfaces for terahertz photonics subsequent
                                    anti-hyperglycaemic action
                                </td>
                                <td>DST-CRG</td>
                                <td>2024</td>
                                <td>2674892</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. Upashna Chettri</td>
                                <td>Save the Salamanders: Conservation and Protection of Himalayan Salamander Habitats
                                </td>
                                <td>5th India Bioscience Outreach Grant</td>
                                <td>2024</td>
                                <td>100000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>
@endsection

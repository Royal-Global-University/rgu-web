@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
            <div style="padding-top: 90px; position: relative;">
                <img src="mobile-assets/facilities-transportation/mob.png" alt="">

                <h2 class="mobile-headd2 fw-bold pb-1 pt-4 text-center" style="color: #27467A; font-weight: 900;">
                    Bus <span style="color: #FF9A1E; font-weight: 500;">Route</span></h2>

                <div class="table-responsive rounded container">
                    <table class="table table-striped shadow-sm bg-white" style="border: 1px solid #cecece;">
                        <thead class="thead-dark">
                            <tr class="mobile-para1 fw-bold">
                                <th>Route</th>
                                <th>Driver</th>
                                <th>Helper</th>
                                <th>Route Details</th>
                            </tr>
                        </thead>

                        <tbody class="mobile-para1 text-dark">
                            <tr>
                                <td>ROUTE 1</td>
                                <td>GAGAN</td>
                                <td>MAHENDRA (9854825009)</td>
                                <td>NOONMATI SECTOR 1 – BAMUNIMAIDAN - GOVT. PRESS–CHANDMARI – COMMERCE COLLEGE – ZOO ROAD TINIALI –
                                    AIDC – SUNDARPUR – GANESHGURI – LALMATI – RGU</td>
                            </tr>
                            <tr>
                                <td>ROUTE 2</td>
                                <td>MRINAL BORO</td>
                                <td>TAPAN BORO (9707607021)</td>
                                <td>ZOO ROAD TINIALI – HATIGARH CHARIALI – GEETA NAGAR – NARIKOL BASTI – MATHGHARIA – NARANGI –
                                    PATHATQUARY – SIX MILE – TAJ VIVANTA – SCIENCE MUSEUM – KHANAPARA – BASISTHA CHARIALI – RGU</td>
                            </tr>
                            <tr>
                                <td>ROUTE 3</td>
                                <td>MOHAT RABHA</td>
                                <td>BANAJIT (8721022069)</td>
                                <td>GAUHATI COMMERCE COLLEGE – CHANDMARI – SILPUKHURI – GUWAHATI CLUB – UZANBAZAR – PAN BAZAR –
                                    FANCY BAZAR – SANTIPUR – MALIGAON – JALUKBARI – RGU</td>
                            </tr>
                            <tr>
                                <td>ROUTE 4</td>
                                <td>ATUL NATH</td>
                                <td>NABAJYOTI (7896435852)</td>
                                <td>D.G.P. OFFICE – ULUBARI – BHANGAGARH – LACHIT NAGAR – ABC – CHRISTIAN BASTI – BHETAPARA –
                                    LALMATI – RGU</td>
                            </tr>
                            <tr>
                                <td>ROUTE 5</td>
                                <td>RANJIT RAHANG</td>
                                <td>KABINDRA (9678807535)</td>
                                <td>FATASHIL AMBARI – KUMARPARA – AT ROAD – PALTANBAZAR – REHABARI – SARABBHATI – CYCLE FACTORY –
                                    BATTALION GATE – RGU</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container pt-3">
                    <section style="background-color: #fff;">

                        <div class="container border rounded shadow-sm">
                            <div class="row">

                                <div class="column p-4">

                                    <div class="row pb-4">
                                        <div class="col-lg-8" style="text-align: justify;">
                                            <h2 class="mobile-headd2 text-dark pb-2">Getting Around</h2>
                                            <p class="mobile-para1 text-dark">
                                                Getting in and around the University campus is quite easy with a number of commuting
                                                options like Public Transport which includes Bus and Shared Taxi Services.
                                            </p>
                                            <p class="mobile-para1 text-dark">
                                                A number of app based Cab Services are available which offers a quick and convenient
                                                way to get around. You can download the following apps to book Cab Services.
                                                <b>Uber</b> <a target="_blank"
                                                    href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button
                                                        class="btn btn-primary shadow">Download App</button></a>, <b>Ola</b> <a
                                                    target="_blank"
                                                    href="https://play.google.com/store/apps/details?id=com.olacabs.customer&pli=1"><button
                                                        class="btn btn-primary shadow">Download App</button></a>
                                            </p>
                                            <p class="mobile-para1 text-dark">
                                                Apart from cabs, Bike Rental is another cost effective and quick commuting options
                                                which can be booked readily via. the following apps- <b>Uber</b> <a target="_blank"
                                                    href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button
                                                        class="btn btn-primary shadow">Download App</button></a>, <br><br>
                                                <b>Rapido</b> <a target="_blank"
                                                    href="https://play.google.com/store/apps/details?id=com.rapido.passenger&hl=en_IN&gl=US"><button
                                                        class="btn btn-primary shadow">Download App</button></a>
                                            </p>
                                            <p class="mobile-para1 fw-bold text-primary">
                                                Self Drive Options
                                            </p>
                                            <p class="mobile-para1 text-dark">
                                                Self Drive Car Rental options can be booked via. apps like – Zoomcar <a
                                                    target="_blank"
                                                    href="https://play.google.com/store/apps/details?id=com.zoomcar&hl=en_IN&gl=US"><button
                                                        class="btn btn-primary shadow">Download App</button></a>
                                            </p>

                                        </div>
                                        <div class="col-lg-4">
                                            <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/taxi.png"
                                                alt="">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row pt-4 pb-4">

                                        <div class="col-lg-4">
                                            <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/4.png"
                                                alt="">
                                        </div>

                                        <div class="col-lg-8" style="text-align: justify;">
                                            <h2 class="mobile-headd2 text-dark pb-2">Travel Safely</h2>
                                            <p class="mobile-para1 text-dark">
                                                Travel Safety should be of utmost importance while commuting outside the campus. If
                                                you are facing any issues with the vehicle service provided by the University, you
                                                can seek assistance from the Transport In-charge. For any assistance while commuting
                                                in public transport services or app-based cabs or bikes or self-drive cars you can
                                                seek attention from the local traffic police or Dial 100 to contact the Police
                                                Helpline.
                                            </p>
                                            <p class="mobile-para1 text-dark">
                                                All app-based cab services have the facility to share live location with your near
                                                and dear ones which can be a very useful tool while commuting on your own.
                                            </p>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row pt-4 pb-4">

                                        <div class="col-lg-8" style="text-align: justify;">
                                            <h2 class="mobile-headd2 text-dark pb-2">Train Stations</h2>
                                            <p class="mobile-para1 text-dark">
                                                There are several quick and convenient ways of travelling from any of the following
                                                Train Stations to the University Campus: -
                                            </p>
                                            <p class="mobile-para1 text-dark">
                                            <ol>
                                                <li class="mobile-para1 text-dark">Guwahati Railway Station, Paltan Bazar, Guwahati,
                                                    Distance – 12 kms. Transport Facilities – Public Transport like Buses and share
                                                    taxis that commute directly from Paltan Bazar to RGU Campus. App based taxi
                                                    services can also be used for hassle free travel.</li>
                                                <li class="mobile-para1 text-dark">Kamakhya Railway Station, Maligaon, Guwahati,
                                                    Distance – 8.5 kms. Transport Facilities – Public Transport like connecting
                                                    Buses and connecting share taxis are available in this route. App based taxi
                                                    services can also be used for hassle free travel.</li>
                                            </ol>
                                            </p>
                                        </div>

                                        <div class="col-lg-4">
                                            <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/4.png"
                                                alt="">
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
    </div>

            <div class="website">

    <!--Start Header-->
    @include('frontend/components/aheader')
    <!--End Header-->

    <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

        <!--head image Section-->
        <section class="no-bg-mobile" style="background-image: url(mobile-assets/facilities-transportation/bgg.svg); background-size: cover; padding: 50px 0px;">
            <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                        <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                            <img class="rounded" style="width: 100%; height: 100%;" decoding="async"
                                src="mobile-assets/facilities-transportation/headimg.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="headd1 fw-bold kd-title-ani kd-split-text pb-2" style="color: #27467A; font-weight: 900;">
                        University <span style="color: #FF9A1E; font-weight: 500;">Transportation</span></h2>
                    <p style="color: #27467A;" class="para1">
                        Having reliable transportation options is an important part of staying safe. We have many ways to commute safely to and from the campus. University’s own fleet of vehicles with experienced and professional drivers and helpers with a dedicated team of Transport Incharge ensures that our students reach on time safely.
                    </p>
                </div>
            </div>
        </div>
        </section>
        <!--head image Section-->

    <hr>
    <section style="background-color: #f0f8ff;">
        <h2 class="headd2 fw-bold pb-1 pt-4 text-center" style="color: #27467A; font-weight: 900;">
            Bus <span style="color: #FF9A1E; font-weight: 500;">Route</span></h2>

    <div class="table-responsive rounded" style="padding: 10px 50px 20px 50px;">
        <table class="table table-striped shadow-sm bg-white" style="border: 1px solid #cecece;">
            <thead class="thead-dark">
                <tr class="para1 fw-bold">
                    <th>Route</th>
                    <th>Driver</th>
                    <th>Helper</th>
                    <th>Route Details</th>
                </tr>
            </thead>

            <tbody class="para1 text-dark">
                <tr>
                    <td>ROUTE 1</td>
                    <td>GAGAN</td>
                    <td>MAHENDRA (9854825009)</td>
                    <td>NOONMATI SECTOR 1 – BAMUNIMAIDAN - GOVT. PRESS–CHANDMARI – COMMERCE COLLEGE – ZOO ROAD TINIALI – AIDC – SUNDARPUR – GANESHGURI – LALMATI – RGU</td>
                </tr>
                <tr>
                    <td>ROUTE 2</td>
                    <td>MRINAL BORO</td>
                    <td>TAPAN BORO (9707607021)</td>
                    <td>ZOO ROAD TINIALI – HATIGARH CHARIALI – GEETA NAGAR – NARIKOL BASTI – MATHGHARIA – NARANGI – PATHATQUARY – SIX MILE – TAJ VIVANTA – SCIENCE MUSEUM – KHANAPARA – BASISTHA CHARIALI – RGU</td>
                </tr>
                <tr>
                    <td>ROUTE 3</td>
                    <td>MOHAT RABHA</td>
                    <td>BANAJIT (8721022069)</td>
                    <td>GAUHATI COMMERCE COLLEGE – CHANDMARI – SILPUKHURI – GUWAHATI CLUB – UZANBAZAR – PAN BAZAR – FANCY BAZAR – SANTIPUR – MALIGAON – JALUKBARI – RGU</td>
                </tr>
                <tr>
                    <td>ROUTE 4</td>
                    <td>ATUL NATH</td>
                    <td>NABAJYOTI (7896435852)</td>
                    <td>D.G.P. OFFICE – ULUBARI – BHANGAGARH – LACHIT NAGAR – ABC – CHRISTIAN BASTI – BHETAPARA – LALMATI – RGU</td>
                </tr>
                <tr>
                    <td>ROUTE 5</td>
                    <td>RANJIT RAHANG</td>
                    <td>KABINDRA (9678807535)</td>
                    <td>FATASHIL AMBARI – KUMARPARA – AT ROAD – PALTANBAZAR – REHABARI – SARABBHATI – CYCLE FACTORY – BATTALION GATE – RGU</td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>

    <section style="background-color: #fff;">

        <div class="custom-container">
            <div class="custom-row">

              <div class="custom-column p-4">

                <div class="row pb-4">
                    <div class="col-lg-8" style="text-align: justify;">
                        <h2 class="headd2 text-dark pb-2">Getting Around</h2>
                        <p class="para1 text-dark">
                            Getting in and around the University campus is quite easy with a number of commuting options like Public Transport which includes Bus and Shared Taxi Services.
                        </p>
                        <p class="para1 text-dark">
                            A number of app based Cab Services are available which offers a quick and convenient way to get around. You can download the following apps to book Cab Services. <b>Uber</b> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button class="btn btn-primary shadow">Download App</button></a>, <b>Ola</b> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.olacabs.customer&pli=1"><button class="btn btn-primary shadow">Download App</button></a>
                        </p>
                        <p class="para1 text-dark">
                            Apart from cabs, Bike Rental is another cost effective and quick commuting options which can be booked readily via. the following apps- <b>Uber</b> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button class="btn btn-primary shadow">Download App</button></a>, <b>Rapido</b> <a target="_blank" href="https://play.google.com/store/apps/details?id=com.rapido.passenger&hl=en_IN&gl=US"><button class="btn btn-primary shadow">Download App</button></a>
                        </p>
                        <p class="para1 fw-bold text-primary">
                            Self Drive Options
                        </p>
                        <p class="para1 text-dark">
                            Self Drive Car Rental options can be booked via. apps like – Zoomcar <a target="_blank" href="https://play.google.com/store/apps/details?id=com.zoomcar&hl=en_IN&gl=US"><button class="btn btn-primary shadow">Download App</button></a>
                        </p>

                    </div>
                    <div class="col-lg-4">
                        <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/taxi.png" alt="">
                    </div>
                </div>

                <hr>

                <div class="row pt-4 pb-4">

                    <div class="col-lg-4">
                        <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/4.png" alt="">
                    </div>

                    <div class="col-lg-8" style="text-align: justify;">
                        <h2 class="headd2 text-dark pb-2">Travel Safely</h2>
                        <p class="para1 text-dark">
                            Travel Safety should be of utmost importance while commuting outside the campus. If you are facing any issues with the vehicle service provided by the University, you can seek assistance from the Transport In-charge. For any assistance while commuting in public transport services or app-based cabs or bikes or self-drive cars you can seek attention from the local traffic police or Dial 100 to contact the Police Helpline.
                        </p>
                        <p class="para1 text-dark">
                            All app-based cab services have the facility to share live location with your near and dear ones which can be a very useful tool while commuting on your own.
                        </p>
                    </div>

                </div>

                <hr>

                <div class="row pt-4 pb-4">

                    <div class="col-lg-8" style="text-align: justify;">
                        <h2 class="headd2 text-dark pb-2">Train Stations</h2>
                        <p class="para1 text-dark">
                            There are several quick and convenient ways of travelling from any of the following Train Stations to the University Campus: -
                        </p>
                        <p class="para1 text-dark">
                        <ol>
                        <li class="para1 text-dark">Guwahati Railway Station, Paltan Bazar, Guwahati, Distance – 12 kms. Transport Facilities – Public Transport like Buses and share taxis that commute directly from Paltan Bazar to RGU Campus. App based taxi services can also be used for hassle free travel.</li>
                        <li class="para1 text-dark">Kamakhya Railway Station, Maligaon, Guwahati, Distance – 8.5 kms. Transport Facilities – Public Transport like connecting Buses and connecting share taxis are available in this route. App based taxi services can also be used for hassle free travel.</li>
                        </ol>
                    </p>
                    </div>

                    <div class="col-lg-4">
                        <img class="rounded shadow-sm" src="mobile-assets/facilities-transportation/4.png" alt="">
                    </div>



                </div>

              </div>
            </div>
          </div>

    </section>

    <div>
        <img src="mobile-assets/facilities-transportation/transporation.svg" alt="">
    </div>

    </div>

            </div>

@endsection

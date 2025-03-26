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

            <section style="background-image: url(assets/img/all-facilities/covers/about-background.svg); padding-top: 30px;"
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
                                            <img decoding="async" src="assets/img/all-facilities/transportation/head2.jpeg"
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
                                            University Transportation</h1>
                                        <div style="text-align: justify;" class="para1 text-dark kd-para-1 disc" data-splitting
                                            style="text-align: justify;">
                                            <p>
                                                Having reliable transportation options is an important part of staying safe. We
                                                have many ways to commute safely to and from the campus.
                                                University’s own fleet of vehicles with experienced and professional drivers and
                                                helpers with a dedicated team of Transport Incharge ensures that our students
                                                reach on time safely.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div>
                <img src="assets/img/all-facilities/transportation/transporation.svg" alt="">
            </div>

            <section style="background-color: #f0f8ff;">
                <p class="text-dark headd2 text-center kd-title-ani kd-split-text fw-bold pt-4">Bus Routes
                </p>
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
                                <td>NOONMATI SECTOR 1 – BAMUNIMAIDAN - GOVT. PRESS–CHANDMARI – COMMERCE COLLEGE – ZOO ROAD
                                    TINIALI – AIDC – SUNDARPUR – GANESHGURI – LALMATI – RGU</td>
                            </tr>
                            <tr>
                                <td>ROUTE 2</td>
                                <td>MRINAL BORO</td>
                                <td>TAPAN BORO (9707607021)</td>
                                <td>ZOO ROAD TINIALI – HATIGARH CHARIALI – GEETA NAGAR – NARIKOL BASTI – MATHGHARIA – NARANGI –
                                    PATHATQUARY – SIX MILE – TAJ VIVANTA – SCIENCE MUSEUM – KHANAPARA – BASISTHA CHARIALI – RGU
                                </td>
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
                                <td>FATASHIL AMBARI – KUMARPARA – AT ROAD – PALTANBAZAR – REHABARI – SARABBHATI – CYCLE FACTORY
                                    – BATTALION GATE – RGU</td>
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
                                        Getting in and around the University campus is quite easy with a number of commuting
                                        options like Public Transport which includes Bus and Shared Taxi Services.
                                    </p>
                                    <p class="para1 text-dark">
                                        A number of app based Cab Services are available which offers a quick and convenient way
                                        to get around. You can download the following apps to book Cab Services. <b>Uber</b> <a
                                            target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button
                                                class="btn btn-primary shadow">Download App</button></a>, <b>Ola</b> <a
                                            target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.olacabs.customer&pli=1"><button
                                                class="btn btn-primary shadow">Download App</button></a>
                                    </p>
                                    <p class="para1 text-dark">
                                        Apart from cabs, Bike Rental is another cost effective and quick commuting options which
                                        can be booked readily via. the following apps- <b>Uber</b> <a target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en_IN&gl=US"><button
                                                class="btn btn-primary shadow">Download App</button></a>, <b>Rapido</b> <a
                                            target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.rapido.passenger&hl=en_IN&gl=US"><button
                                                class="btn btn-primary shadow">Download App</button></a>
                                    </p>
                                    <p class="para1 fw-bold text-primary">
                                        Self Drive Options
                                    </p>
                                    <p class="para1 text-dark">
                                        Self Drive Car Rental options can be booked via. apps like – Zoomcar <a target="_blank"
                                            href="https://play.google.com/store/apps/details?id=com.zoomcar&hl=en_IN&gl=US"><button
                                                class="btn btn-primary shadow">Download App</button></a>
                                    </p>

                                </div>
                                <div class="col-lg-4">
                                    <img class="rounded shadow-sm" src="assets/img/all-facilities/transportation/taxi.png"
                                        alt="">
                                </div>
                            </div>

                            <hr>

                            <div class="row pt-4 pb-4">

                                <div class="col-lg-4">
                                    <img class="rounded shadow-sm" src="assets/img/all-facilities/transportation/4.png" alt="">
                                </div>

                                <div class="col-lg-8" style="text-align: justify;">
                                    <h2 class="headd2 text-dark pb-2">Travel Safely</h2>
                                    <p class="para1 text-dark">
                                        Travel Safety should be of utmost importance while commuting outside the campus. If you
                                        are facing any issues with the vehicle service provided by the University, you can seek
                                        assistance from the Transport In-charge. For any assistance while commuting in public
                                        transport services or app-based cabs or bikes or self-drive cars you can seek attention
                                        from the local traffic police or Dial 100 to contact the Police Helpline.
                                    </p>
                                    <p class="para1 text-dark">
                                        All app-based cab services have the facility to share live location with your near and
                                        dear ones which can be a very useful tool while commuting on your own.
                                    </p>
                                </div>

                            </div>

                            <hr>

                            <div class="row pt-4 pb-4">

                                <div class="col-lg-8" style="text-align: justify;">
                                    <h2 class="headd2 text-dark pb-2">Train Stations</h2>
                                    <p class="para1 text-dark">
                                        There are several quick and convenient ways of travelling from any of the following
                                        Train Stations to the University Campus: -
                                    </p>
                                    <p class="para1 text-dark">
                                    <ol>
                                        <li class="para1 text-dark">Guwahati Railway Station, Paltan Bazar, Guwahati, Distance –
                                            12 kms. Transport Facilities – Public Transport like Buses and share taxis that
                                            commute directly from Paltan Bazar to RGU Campus. App based taxi services can also
                                            be used for hassle free travel.</li>
                                        <li class="para1 text-dark">Kamakhya Railway Station, Maligaon, Guwahati, Distance – 8.5
                                            kms. Transport Facilities – Public Transport like connecting Buses and connecting
                                            share taxis are available in this route. App based taxi services can also be used
                                            for hassle free travel.</li>
                                    </ol>
                                    </p>
                                </div>

                                <div class="col-lg-4">
                                    <img class="rounded shadow-sm" src="assets/img/all-facilities/transportation/4.png" alt="">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

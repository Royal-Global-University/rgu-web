@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/bg.svg); background-size: cover; padding: 100px 0px;">

            <div class="container">
                <h2 class="headd2 text-center fw-bold pt-3 kd-title-ani kd-split-text"
                    style="color: #264273; font-weight: 700;">
                    Centre for Interdisciplinary <span style="color: #FF9A1E; font-weight: 500;"> Study and Research
                        (CISR)</span> </h2>

                <p class="para1 pt-3 text-dark" style="text-align: justify;">
                    The central committee for Centre for Interdisciplinary Study and Research (CISR) has been
                    constituted with the following composition to facilitate the smooth functioning of the Centre
                </p>

                <div class="table-responsive">
                    <table class="table border bg-white table-responsive table-striped fs-16 vertical-scroll">
                        <thead class="text-light  para1" style="font-size: 14px;">
                            <tr class="text-white para1 text-dark" style="background-color: #005273;">
                                <th>Sl. No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody class="para1 text-dark">

                            <tr>
                                <td>1</td>
                                <td>Professor Alak K Buragohain</td>
                                <td>Adviser</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Professor Surajit Ch. Mukhopadhyay</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Professor Shiela Bora</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Professor Laishram Ladu Singh</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Professor Anupam Chatterjee</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Professor Sajal Nag</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Professor Indrani Singh Rai</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Professor Diganta Munshi</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. Dhiraj Borkotoky</td>
                                <td>Member Secretary</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 fw-bold pt-3" style="color: #264273;">
                    Terms of Reference for the Central Committee
                </h2>

                <ol class="text-dark para1 pt-2">
                    <li>
                        The central committee of the CISR shall be responsible for the functioning of the CISR along the
                        four verticals:
                        <ol type="a">
                            <li>Steering multidisciplinary, interdisciplinary, and transdisciplinary research leading to
                                the award of Ph.D. Degree and beyond</li>
                            <li>Developing course curricula on multidisciplinary, interdisciplinary, and
                                transdisciplinary domains</li>
                            <li>Innovating pedagogical practices</li>
                            <li>Guiding policy research with respect to the northeast India</li>
                        </ol>
                    </li>
                    <li>
                        The central committee shall form the Centre Research Committee for facilitating doctoral
                        research leading to Ph.D. as per the provisions of the Ph.D. Regulation of the RGU
                    </li>
                    <li>
                        The central committee shall have a term of one year with effect from the date of issue of the
                        Notification or until further order, whichever is earlier.
                    </li>
                </ol>


            </div>

        </section>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <section style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/bg.svg); background-size: cover; padding: 50px 0px;">

            <div class="container">
                <h2 class="headd1 text-center fw-bold pt-3 kd-title-ani kd-split-text"
                    style="color: #264273; font-weight: 700;">
                    Centre for Interdisciplinary <span style="color: #FF9A1E; font-weight: 500;"> Study and Research
                        (CISR)</span> </h2>

                <p class="para1 pt-3 text-dark">
                    The central committee for Centre for Interdisciplinary Study and Research (CISR) has been
                    constituted with the following composition to facilitate the smooth functioning of the Centre
                </p>

                <div class="table-responsive">
                    <table class="table border bg-white table-responsive table-striped fs-16 vertical-scroll">
                        <thead class="text-light  para1" style="font-size: 14px;">
                            <tr class="text-white para1 text-dark" style="background-color: #005273;">
                                <th>Sl. No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody class="para1 text-dark">

                            <tr>
                                <td>1</td>
                                <td>Professor Alak K Buragohain</td>
                                <td>Adviser</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Professor Surajit Ch. Mukhopadhyay</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Professor Shiela Bora</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Professor Laishram Ladu Singh</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Professor Anupam Chatterjee</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Professor Sajal Nag</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Professor Indrani Singh Rai</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Professor Diganta Munshi</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. Dhiraj Borkotoky</td>
                                <td>Member Secretary</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h2 class="headd3 fw-bold pt-3" style="color: #264273;">
                    Terms of Reference for the Central Committee
                </h2>

                <ol class="text-dark para1 pt-2">
                    <li>
                        The central committee of the CISR shall be responsible for the functioning of the CISR along the
                        four verticals:
                        <ol type="a">
                            <li>Steering multidisciplinary, interdisciplinary, and transdisciplinary research leading to
                                the award of Ph.D. Degree and beyond</li>
                            <li>Developing course curricula on multidisciplinary, interdisciplinary, and
                                transdisciplinary domains</li>
                            <li>Innovating pedagogical practices</li>
                            <li>Guiding policy research with respect to the northeast India</li>
                        </ol>
                    </li>
                    <li>
                        The central committee shall form the Centre Research Committee for facilitating doctoral
                        research leading to Ph.D. as per the provisions of the Ph.D. Regulation of the RGU
                    </li>
                    <li>
                        The central committee shall have a term of one year with effect from the date of issue of the
                        Notification or until further order, whichever is earlier.
                    </li>
                </ol>

            </div>
        </section>
    </div>
@endsection

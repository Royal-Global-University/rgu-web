@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="background-image: url(mobile-assets/admission-differently-abled/bg.svg); background-size: cover; padding-top: 90px; position: relative;">

            <!-- header image  -->
            <div>
                <img src="mobile-assets/admission-differently-abled/mobile-differently-abled.png" alt="">
            </div>
            <!-- header image  -->

            <!-- content  -->
            <div class="container pt-4 pb-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h2 class="mobile-headd3 fw-bold text-dark ">UGC Schemes for Differently-abled Student</h2>
                        <h2 class="mobile-para1 fw-bold text-dark pt-2">1. Higher Education for Persons with Special Needs
                            (HEPSN)
                        </h2>
                        <p class="mobile-para1 text-dark" style="text-align: justify;">The HEPSN scheme is basically meant for
                            creating an environment at the higher education institutions to enrich higher education learning
                            experiences for differently-abled persons. Creating awareness about the capabilities of
                            differently-abled persons, construction aimed at improving accessibility, purchase of equipment to
                            enrich learning, etc., are the broad categories of assistance under this scheme.
                        </p>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1">Financial Assistance: University
                        </h2>

                        <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                            <tbody class="mobile-para1">
                                <tr>
                                    <td>Comp. I</td>
                                    <td>Rs. 1.18 lakh p.a</td>
                                </tr>

                                <tr>
                                    <td>Comp. II</td>
                                    <td>Rs.10.00 lakh per Plan</td>
                                </tr>

                                <tr>
                                    <td>Comp. III</td>
                                    <td>Rs. 8.00 lakh per Plan</td>
                                </tr>

                            </tbody>
                        </table>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-4">Financial Assistance: College
                        </h2>

                        <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                            <tbody class="mobile-para1">
                                <tr>
                                    <td>Comp. I</td>
                                    <td>Rs. 98,000/- p.a</td>
                                </tr>

                                <tr>
                                    <td>Comp. II</td>
                                    <td>Rs. 5.00 lakh per Plan</td>
                                </tr>

                                <tr>
                                    <td>Comp. III</td>
                                    <td>Rs. 1.50 lakh per Plan</td>
                                </tr>

                            </tbody>
                        </table>

                        <h2 class="mobile-para1 fw-bold text-dark pt-4">2. The Teacher Preparation in Special Education (TEPSE)
                        </h2>
                        <p class="mobile-para1 text-dark" style="text-align: justify;">Scheme is meant for assisting Departments
                            of Education to launch special education teachers’ preparation programmes to prepare special
                            teachers to teach children with disabilities in both special and inclusive settings. The scheme
                            provides financial assistance to offer B.Ed. and M.Ed. Degree courses with specialization in one of
                            the disability areas. The specific objective of the TEPSE schemes is to encourage Universities to
                            start M.Ed. special education courses to prepare teacher- educators to serve in higher education
                            institutions offering special education teacher preparation courses.
                        </p>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-2">Financial Assistance
                        </h2>
                        <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                            <tbody class="mobile-para1">
                                <tr>
                                    <td>B.Ed / M.Ed</td>
                                    <td>Rs. 2.00 lakhs (One Time) & Staff Salary</td>
                                </tr>

                                <tr>
                                    <td>B.Ed / M.Ed</td>
                                    <td>Rs. 4.00 lakhs (One Time) & Staff Salary</td>
                                </tr>

                            </tbody>
                        </table>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-4">3. Financial Assistance to Visually Challenged
                            Teachers
                        </h2>
                        <p class="mobile-para1 text-dark" style="text-align: justify;">The Scheme has been formulated to help
                            visually challenged permanent teachers to pursue teaching and research with the help of a Reader and
                            by using teaching and learning aids by way of providing Reader’s Allowance and funds for purchase of
                            Braille books, recorded materials, etc. and help such teachers achieve self- dependence by using
                            various aids for teaching, learning and research. Financial assistance under the scheme is available
                            to such universities and colleges which come within the purview of section 2(f) and are fit to
                            receive central assistance under Section 12B of the UGC Act, 1956.
                        </p>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-2">Financial Assistance
                        </h2>
                        <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                            <tbody class="mobile-para1">
                                <tr>
                                    <td>Rs.36,000/- per annum</td>
                                </tr>
                            </tbody>
                        </table>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-4">4. National Fellowship for Persons with
                            Disabilities
                        </h2>
                        <p class="mobile-para1 text-dark" style="text-align: justify;">University Grants Commission (UGC) on
                            behalf of Department of Empowerment of Persons with Disabilities (DEPwD), Ministry of Social Justice
                            & Empowerment invites applications from eligible candidates for National Fellowship for Persons with
                            Disabilities (NFPwD) for the selections years 2018-19 and 2019-2020. Under this scheme, fellowship
                            will be available to students with disabilities who are covered under 'The Persons with Disabilities
                            (Equal Opportunities, Protection of Rights and Full Participation) Act, 1995. Thus a person with
                            disability, who wishes to avail the benefits under the Act has to obtain a disability certificate
                            from the medical authority notified for the purpose.
                        </p>

                        <h2 class="mobile-para1 fw-bold text-dark pb-1 pt-2">Financial Assistance: Presently the rate of
                            fellowship for JRF and SRF, under the scheme, is as under-
                        </h2>
                        <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                            <tbody class="mobile-para1">
                                <tr>
                                    <td>Fellowship</td>
                                    <td>@Rs.25,000/-p.m. initial two year as JRF <br>
                                        @Rs.28,000/-p.m. for remaining tenure as SRF.</td>
                                </tr>
                                <tr>
                                    <td>Contingency (Humanities & Social Sciences including Arts/Fine Arts) </td>
                                    <td>@Rs.25,000/-p.m. initial two year as JRF <br>
                                        @Rs.20,500/-p.a. for remaining tenure(SRF)</td>
                                </tr>
                                <tr>
                                    <td>Contingency (Science, Engineering & Technology)</td>
                                    <td>@Rs.12,000/-p.a. initial two year (JRF) <br>
                                        @Rs.25,000/-p.a. for remaining tenure (SRF)</td>
                                </tr>
                                <tr>
                                    <td>Escorts/Reader assistance</td>
                                    <td>@Rs.2,000/- p.m. in case of candidates with physical and visual disabilities.
                                    </td>
                                </tr>
                                <tr>
                                    <td>HRA</td>
                                    <td>As per Govt. of India norms.
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- content  -->


        </div>
    </div>

    <div class="website"

        style="background-image: url(mobile-assets/admission-differently-abled/bg.svg); background-size: cover;">
        <!--Start Header-->
    @include('frontend/components/aheader')
        <!--End Header-->

        <!-- header image  -->
        <div>
            <img src="mobile-assets/admission-differently-abled/web-differently-abled.png" alt="">
        </div>
        <!-- header image  -->


        <!-- content  -->
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h2 class="headd3 fw-bold text-dark ">UGC Schemes for Differently-abled Student</h2>
                    <h2 class="para1 fw-bold text-dark pt-2">1. Higher Education for Persons with Special Needs (HEPSN)
                    </h2>
                    <p class="para1 text-dark" style="text-align: justify;">The HEPSN scheme is basically meant for creating
                        an environment at the higher education institutions to enrich higher education learning experiences
                        for differently-abled persons. Creating awareness about the capabilities of differently-abled
                        persons, construction aimed at improving accessibility, purchase of equipment to enrich learning,
                        etc., are the broad categories of assistance under this scheme.
                    </p>

                    <h2 class="para1 fw-bold text-dark pb-1">Financial Assistance: University
                    </h2>

                    <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                        <tbody class="para1">
                            <tr>
                                <td>Comp. I</td>
                                <td>Rs. 1.18 lakh p.a</td>
                            </tr>

                            <tr>
                                <td>Comp. II</td>
                                <td>Rs.10.00 lakh per Plan</td>
                            </tr>

                            <tr>
                                <td>Comp. III</td>
                                <td>Rs. 8.00 lakh per Plan</td>
                            </tr>

                        </tbody>
                    </table>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-4">Financial Assistance: College
                    </h2>

                    <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                        <tbody class="para1">
                            <tr>
                                <td>Comp. I</td>
                                <td>Rs. 98,000/- p.a</td>
                            </tr>

                            <tr>
                                <td>Comp. II</td>
                                <td>Rs. 5.00 lakh per Plan</td>
                            </tr>

                            <tr>
                                <td>Comp. III</td>
                                <td>Rs. 1.50 lakh per Plan</td>
                            </tr>

                        </tbody>
                    </table>

                    <h2 class="para1 fw-bold text-dark pt-4">2. The Teacher Preparation in Special Education (TEPSE)</h2>
                    <p class="para1 text-dark" style="text-align: justify;">Scheme is meant for assisting Departments of
                        Education to launch special education teachers’ preparation programmes to prepare special teachers
                        to teach children with disabilities in both special and inclusive settings. The scheme provides
                        financial assistance to offer B.Ed. and M.Ed. Degree courses with specialization in one of the
                        disability areas. The specific objective of the TEPSE schemes is to encourage Universities to start
                        M.Ed. special education courses to prepare teacher- educators to serve in higher education
                        institutions offering special education teacher preparation courses.
                    </p>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-2">Financial Assistance
                    </h2>
                    <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                        <tbody class="para1">
                            <tr>
                                <td>B.Ed / M.Ed</td>
                                <td>Rs. 2.00 lakhs (One Time) & Staff Salary</td>
                            </tr>

                            <tr>
                                <td>B.Ed / M.Ed</td>
                                <td>Rs. 4.00 lakhs (One Time) & Staff Salary</td>
                            </tr>

                        </tbody>
                    </table>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-4">3. Financial Assistance to Visually Challenged Teachers
                    </h2>
                    <p class="para1 text-dark" style="text-align: justify;">The Scheme has been formulated to help visually
                        challenged permanent teachers to pursue teaching and research with the help of a Reader and by using
                        teaching and learning aids by way of providing Reader’s Allowance and funds for purchase of Braille
                        books, recorded materials, etc. and help such teachers achieve self- dependence by using various
                        aids for teaching, learning and research. Financial assistance under the scheme is available to such
                        universities and colleges which come within the purview of section 2(f) and are fit to receive
                        central assistance under Section 12B of the UGC Act, 1956.
                    </p>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-2">Financial Assistance
                    </h2>
                    <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                        <tbody class="para1">
                            <tr>
                                <td>Rs.36,000/- per annum</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-4">4. National Fellowship for Persons with Disabilities
                    </h2>
                    <p class="para1 text-dark" style="text-align: justify;">University Grants Commission (UGC) on behalf of
                        Department of Empowerment of Persons with Disabilities (DEPwD), Ministry of Social Justice &
                        Empowerment invites applications from eligible candidates for National Fellowship for Persons with
                        Disabilities (NFPwD) for the selections years 2018-19 and 2019-2020. Under this scheme, fellowship
                        will be available to students with disabilities who are covered under 'The Persons with Disabilities
                        (Equal Opportunities, Protection of Rights and Full Participation) Act, 1995. Thus a person with
                        disability, who wishes to avail the benefits under the Act has to obtain a disability certificate
                        from the medical authority notified for the purpose.
                    </p>

                    <h2 class="para1 fw-bold text-dark pb-1 pt-2">Financial Assistance: Presently the rate of fellowship for
                        JRF and SRF, under the scheme, is as under-
                    </h2>
                    <table class="table border table-responsive table-striped fs-16 vertical-scroll bg-white">
                        <tbody class="para1">
                            <tr>
                                <td>Fellowship</td>
                                <td>@Rs.25,000/-p.m. initial two year as JRF <br>
                                    @Rs.28,000/-p.m. for remaining tenure as SRF.</td>
                            </tr>
                            <tr>
                                <td>Contingency (Humanities & Social Sciences including Arts/Fine Arts) </td>
                                <td>@Rs.25,000/-p.m. initial two year as JRF <br>
                                    @Rs.20,500/-p.a. for remaining tenure(SRF)</td>
                            </tr>
                            <tr>
                                <td>Contingency (Science, Engineering & Technology)</td>
                                <td>@Rs.12,000/-p.a. initial two year (JRF) <br>
                                    @Rs.25,000/-p.a. for remaining tenure (SRF)</td>
                            </tr>
                            <tr>
                                <td>Escorts/Reader assistance</td>
                                <td>@Rs.2,000/- p.m. in case of candidates with physical and visual disabilities.
                                </td>
                            </tr>
                            <tr>
                                <td>HRA</td>
                                <td>As per Govt. of India norms.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- content  -->


    </div>
@endsection

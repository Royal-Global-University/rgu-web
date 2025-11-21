@extends('frontend.master')
@section('title', 'RGU Scholarships 2026-27: Royal Merit, Bhutanese & Merit-Based')
@section('meta_description', 'Apply for RGU Scholarships 2025-26! Check eligibility for the Royal Merit Scholarship and
    specific schemes for Bhutanese students. Financial aid and national schemes available.')
@section('meta_keywords', 'Scholarship')
@section('content')
    <div id="page" class="site site_wrapper">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <!-- floating mob button  -->
            <div>
                <a href="https://rgu.renocampus.com/scholarship/scholarshipForm"
                    style="
            position: fixed;
            bottom: 25px;
            right: 75px;
            background-color: #ef991f;
            color: #fff;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: hidden;
            animation: pulse 2s infinite;
            ">
                    <span
                        style="
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
            transform: skewX(-25deg);
            animation: shine 2s infinite;
            "></span>
                    APPLY FOR SCHOLARSHIP
                </a>
                <style>
                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }

                        50% {
                            transform: scale(1.05);
                            box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                        }

                        100% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }
                    }

                    @keyframes shine {
                        0% {
                            left: -75%;
                        }

                        100% {
                            left: 125%;
                        }
                    }
                </style>
            </div>
            <!-- floating button  -->
            <section style="background-image: url(mobile-assets/scholarship/bg.svg); padding-top: 90px; position: relative;">


                <img class="pb-5" src="mobile-assets/scholarship/mobile-scholarship.png" alt="">


            </section>
        </div>

        <div class="website">

            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <!-- floating button  -->
            <div>
                <a href="https://rgu.renocampus.com/scholarship/scholarshipForm"
                    style="
            position: fixed;
            bottom: 35px;
            right: 50px;
            background-color: #ef991f;
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: hidden;
            animation: pulse 2s infinite;
            ">
                    <span
                        style="
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
            transform: skewX(-25deg);
            animation: shine 2s infinite;
            "></span>
                    APPLY FOR SCHOLARSHIP
                </a>
                <style>
                    @keyframes pulse {
                        0% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }

                        50% {
                            transform: scale(1.05);
                            box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                        }

                        100% {
                            transform: scale(1);
                            box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                        }
                    }

                    @keyframes shine {
                        0% {
                            left: -75%;
                        }

                        100% {
                            left: 125%;
                        }
                    }
                </style>
            </div>
            <!-- floating button  -->

            <img class="pb-5" src="mobile-assets/scholarship/web-scholarship.png" alt="">

        </div>

        <section style="background-image: url(mobile-assets/scholarship/bg.svg);">



            <div class="container pb-5">

                <div class="container-fluid">
                    <div class="row" style="text-align: justify;">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">A</span> Royal Merit - on
                                        Admission Scholarship
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div>
                                                <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                    Eligibility Criteria</h3>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table
                                                class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                <thead class="text-white" style="background-color: #000000;">
                                                    <th class="bg-blue text-white">SCHOLARSHIP OFFERED</th>
                                                    <th class="bg-blue text-white">PG PROGRAMMES</th>
                                                    <th colspan="2" class="bg-blue text-white">UG PROGRAMMES</th>
                                                </thead>
                                                <tbody>
                                                    <td class="text-dark">Nature of Scholarship (Category)</td>
                                                    <td class="text-dark">GRADUATION (ANY STREAM)</td>
                                                    <td class="text-dark">10+2 (CBSE Board)</td>
                                                    <td class="text-dark">H.S. Marks (AHSEC/ Other State Board)</td>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-dark">100% on annual fee, registration fee and
                                                            admission fee,
                                                            other applicable fee
                                                            to be paid </td>
                                                        <td class="text-dark">88% & Above in aggregate</td>
                                                        <td class="text-dark">96 % & Above in aggregate</td>
                                                        <td class="text-dark">91 % & Above in aggregate</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark">50% on annual fee, other applicable fee to be
                                                            paid</td>
                                                        <td class="text-dark">84% to 87.99%</td>
                                                        <td class="text-dark">92% to 95.99%</td>
                                                        <td class="text-dark">87% to 90.99%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark">25% on annual fee, other applicable fee to be
                                                            paid</td>
                                                        <td class="text-dark">80% to 83.99%</td>
                                                        <td class="text-dark">86 % to 91.99%</td>
                                                        <td class="text-dark">81 % to 86.99%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <p style="text-align: justify;" class="text-dark para1">i. A student availing
                                                100% Royal Merit
                                                Scholarship is
                                                required to
                                                the
                                                Caution money of Rs. 10000/-
                                                (refundable) only and those availing Royal Merit Scholarship in 50% or 25%
                                                categories
                                                are required to pay the
                                                remaining percentage of fee for the 1st semester/year of his/her programme
                                                of study
                                                along with the Admission
                                                Fee, Registration Fee and Caution money (refundable) of Rs. 10000/- only.at
                                                the time of
                                                admission. </p>
                                            <p style="text-align: justify;" class="para1 text-dark">• In case a student,
                                                availing Royal Merit -
                                                On
                                                Admission
                                                Scholarship,
                                                wishes to avail hostel/
                                                transportation facilities, he/she will have to pay the full hostel/
                                                transportation fees
                                                as prescribed for other
                                                students.</p>
                                            <p style="text-align: justify;" class="para1 text-dark">• The Scholarship may
                                                not be applicable for
                                                Courses
                                                Governed by
                                                Regulatory
                                                Bodies (AICTE, COA, PCI,
                                                INC, ANMHVC, BCI, etc.)</p>
                                            <p style="text-align: justify;" class="para1 text-dark">• Final decision of
                                                granting scholarship
                                                lies with
                                                the University
                                                Scholarship Committee and or
                                                Competent Authority's.</p>
                                            <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                                                subsequent years
                                                will be
                                                governed as follows –
                                            </h3>
                                            <p style="text-align: justify;" class="para1 text-dark">• Class attendance of
                                                the students must be
                                                75% and
                                                above in all
                                                the
                                                subjects in each semester from
                                                the previous academic year.</p>
                                            <p style="text-align: justify;" class="para1 text-dark">• To continue availing
                                                scholarship, a
                                                student must
                                                clear all the
                                                papers in
                                                each semester and should
                                                not carry any back log in any semester from the previous academic year and
                                                pass the
                                                semester/annual examination
                                                for promotion to the next year.</p>

                                            <h3 style="text-align: justify;" class="headd3 text-dark fw-bold">Document
                                                Required under the above
                                                mentioned of
                                                Scholarship:
                                            </h3>
                                            <p class="para1 text-dark">1. Scanned copies of the marksheets from Class X
                                                onwards.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">B</span> Royal Endowment
                                        & Other Scholarship
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                            Eligibility Criteria</h3>
                                        <div class="table-responsive">
                                            <table
                                                class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                <thead class="bg-blue text-white">
                                                    <th class="bg-blue text-white">SCHOLARSHIP OFFERED</th>
                                                    <th class="bg-blue text-white">PG PROGRAMMES</th>
                                                    <th class="bg-blue text-white">UG PROGRAMMES</th>
                                                </thead>
                                                <tbody>
                                                    <td>Nature of Scholarship (Category)</td>
                                                    <td>GRADUATION (ANY STREAM)</td>
                                                    <td>10+2 (CBSE Board)</td>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td>50% on annual fee, rest all fee to be paid</td>
                                                        <td>80% & Above in aggregate</td>
                                                        <td>85% & Above in aggregate</td>
                                                    </tr>
                                                    <tr>
                                                        <td>25% on annual fee, rest all fee to be paid</td>
                                                        <td>75% to 79.99%</td>
                                                        <td>80% to 84.99%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table
                                                class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                <thead class="bg-blue text-white">
                                                    <th class="bg-blue text-white text-center" colspan="4">
                                                        Eligibility Criteria</th>
                                                </thead>
                                                <tbody class="para1">
                                                    <td>S.No.</td>
                                                    <td>Programme</td>
                                                    <td>Category </td>
                                                    <td>Min Per(%) Marks obtained in 10+2/Graduation Exam </td>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td rowspan="7" class="align-middle">ALL PROGRAMMES</td>
                                                        <td>Annual family income less than 8 lac</td>
                                                        <td rowspan="7" class="align-middle">Students availing
                                                            Endowment
                                                            Scholarship
                                                            should
                                                            fulfill the
                                                            following criteria:<br>
                                                            i. Student should be eligible under the endowment scheme.<br>
                                                            ii. Student should submit relevant documents from the competent
                                                            authority for
                                                            verifying the stated
                                                            category required for qualifying the Royal Endowment Scheme.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Ward of a mother who is a single parent </td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Ward of a parent who is a teaching professional with annual
                                                            income
                                                            less
                                                            than 8 lacs
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sports people who have participated in State/National
                                                            level/Music
                                                            and
                                                            Fine Art </td>

                                                    </tr>
                                                    <tr>
                                                        <td>5</td>

                                                        <td>Differently-abled students </td>

                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Child and Grand Child of Padma Awardees </td>

                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Child and Grand Child of Assam Baibhav, Saurav and Gaurav Award
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div style="text-align: justify;">
                                            <p class="para1 text-dark">i. Awardee of Royal Endowment & other Scholarship in
                                                50% or
                                                25%
                                                categories are required to pay the
                                                remaining percentage of fee for the 1st semester/year of his/her programme
                                                of study
                                                along with
                                                the Admission
                                                Fee, Registration Fee and Caution money (refundable) of Rs. 10000/-. </p>
                                            <p class="para1 text-dark">ii. In case a student, availing Royal Endowment &
                                                Other
                                                Scholarship,
                                                wishes to avail hostel/
                                                transportation facilities, he/she will have to pay the full hostel/
                                                transportation
                                                fees as
                                                prescribed for other
                                                students.</p>
                                            <p class="para1 text-dark">iii. The Scholarship may not be applicable for
                                                Courses
                                                Governed by
                                                Regulatory Bodies (AICTE, COA,
                                                PCI, INC, ANMHVC, BCI, etc.).</p>
                                            <p class="para1 text-dark">iv. Final decision of granting scholarship lies with
                                                the
                                                University
                                                Scholarship</p>

                                            <h4 class="headd3 text-dark fw-bold">Continuation of Scholarship for subsequent
                                                years will be
                                                governed as follows –
                                            </h4>
                                            <p class="para1 text-dark">i. Class attendance of the students must be 75% and
                                                above in
                                                all the
                                                subjects in each semester from
                                                the previous academic year.</p>
                                            <p class="para1 text-dark">ii. To continue availing scholarship, a student must
                                                clear
                                                all the papers
                                                in each semester and
                                                should not carry any back log in any semester from the previous academic
                                                year and
                                                pass the
                                                semester/annual
                                                examination for promotion to the next year.</p>
                                            <h4 class="headd3 text-dark fw-bold">Document Required under the above
                                                mentioned of Scholarship:</h4>
                                            <p class="para1 text-dark">1. Scanned copies of the marksheets from Class X
                                                onwards.</p>
                                            <p class="para1 text-dark">2. Scanned copies of the certificate from the
                                                competent
                                                authority claiming scholarship under the mentioned category.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">C</span> 100%
                                        Scholarship to Two Students From Chakma Community of Miao Sub-Division, Arunachal
                                        Pradesh And Respectively to The Hajong, Kuki, Riyang, Tiwa (Lalung) And Konyak
                                        Communities Of Meghalaya, Manipur, Tripura, Assam And Nagaland.
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div>
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h3>
                                            <p class="para1 text-dark">i. A letter of recommendation from competent
                                                authority
                                                for 100%
                                                Scholarship to two students from
                                                each community must be submitted to the admission office along with the
                                                necessary admission
                                                forms/application of
                                                scholarship, every academic year or as notified from time to time.</p>
                                            <p class="para1 text-dark">ii. The student’s recommendation will be based on
                                                screening and
                                                identifying the meritorious
                                                students, as laid down by the competent authority.</p>
                                            <p class="para1 text-dark">iii. The students must fulfil the minimum
                                                eligibility
                                                criteria of
                                                admission in the programme/course
                                                they have applied for, as laid down by the University. </p>
                                            <p class="para1 text-dark">iv. A student availing 100% scholarship will have to
                                                pay
                                                a Caution
                                                Money (Refundable) of Rs.
                                                10,000/- only at the time of admission.</p>
                                            <p class="para1 text-dark">v. In case a student, availing 100% Scholarship,
                                                wishes
                                                to avail
                                                hostel/ transportation facilities,
                                                he/she will have to pay the full hostel/ transportation fees as prescribed
                                                for
                                                other
                                                students.</p>
                                            <p class="para1 text-dark">vi. The Scholarship may not be applicable for
                                                Courses
                                                Governed by
                                                Regulatory Bodies (AICTE, COA,
                                                PCI, INC, ANMHVC, BCI, etc.).</p>
                                            <p class="para1 text-dark">vii. Final decision of granting scholarship lies
                                                with
                                                the
                                                University
                                                Scholarship Committee and or
                                                Competent Authority's.</p>
                                            <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                                                subsequent years will
                                                be governed as follows –
                                            </h3>
                                            <p class="para1 text-dark">i. Class attendance of the students must be 75% and
                                                above
                                                in all the
                                                subjects in each semester from
                                                the previous academic year.</p>
                                            <p class="para1 text-dark">ii. To continue availing scholarship, a student must
                                                clear all the
                                                papers in each semester and
                                                should not carry any back log in any semester from the previous academic
                                                year
                                                and pass the
                                                semester/annual
                                                examination for promotion to the next year.</p>

                                            <h3 class="headd3 text-dark fw-bold">Document Required under the above
                                                mentioned of
                                                Scholarship:</h3>
                                            <p class="para1 text-dark">1. Scanned copies of the marksheets from Class X
                                                onwards.
                                            </p>
                                            <p class="para1 text-dark">2. Scanned copies of the community certificate from
                                                the
                                                competent
                                                authority claiming scholarship
                                                under the said category.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">D</span> 100% Royal
                                        Scholarship To The Student Belonging To The Economically Weaker Section Of The
                                        Society (BPL Category)
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body para1">
                                        <div style="text-align: justify;">
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h1>
                                                <div class="table-responsive">
                                                    <table
                                                        class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                        style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                        <thead class="bg-blue text-white">
                                                            <th class="bg-blue text-white">
                                                                SCHOLARSHIP OFFERED
                                                            </th>
                                                            <th class="bg-blue text-white">For UG
                                                                PROGRAMMES
                                                                (Minimum Percentage of Marks obtained in 10+2/H.S./
                                                                Diploma/ UG)</th>
                                                            <th colspan="2" class="bg-blue text-white">
                                                                REMARKS
                                                            </th>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="para1">
                                                                <td>100% on annual fee, registration fee and admission fee,
                                                                    other
                                                                    applicable fee to
                                                                    be paid</td>
                                                                <td>Must secure 60% &Above in aggregate in 10+2/ H.S./
                                                                    Diploma/
                                                                    UG</td>
                                                                <td>Students availing Scholarship under the scheme should
                                                                    fulfill the
                                                                    following
                                                                    criteria:
                                                                    <br>
                                                                    i. Students should be eligible under the scheme.
                                                                    <br>
                                                                    ii. Student should submit relevant documents from the
                                                                    competent
                                                                    authority for
                                                                    verifying the stated
                                                                    requirement for qualifying under the Scheme.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="para1">i. The Head of the Institution will nominate two
                                                        students for
                                                        scholarship under
                                                        the said category.
                                                    </p>
                                                    <p class="para1">ii. Awardee of 100% Royal Scholarship to the student
                                                        belonging to
                                                        the
                                                        Economically Weaker Section
                                                        of the Society are required to pay Rs. 10,000.00 (Rupees Ten
                                                        Thousand only) as
                                                        caution money
                                                        (refundable) at the
                                                        time of admission.</p>
                                                    <p class="para1">iii. In case a student, availing 100% Scholarship,
                                                        wishes to avail
                                                        hostel/
                                                        transportation
                                                        facilities, he/she will have to pay the full hostel/ transportation
                                                        fees as
                                                        prescribed for
                                                        other students.</p>
                                                    <p class="para1">iv. The Scholarship may not be applicable for Courses
                                                        Governed by
                                                        Regulatory
                                                        Bodies (AICTE, COA,
                                                        PCI, INC, ANMHVC, BCI, etc.).</p>
                                                    <p class="para1">v. Final decision of granting scholarship lies with
                                                        the
                                                        University
                                                        Scholarship
                                                        Committee and or
                                                        Competent Authority's.</p>

                                                    <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                                                        subsequent years
                                                        will be
                                                        governed as follows –
                                                    </h3>
                                                    <p class="para1">i. Class attendance of the students must be 75% and
                                                        above in all
                                                        the subjects
                                                        in each semester from
                                                        the previous academic year.</p>
                                                    <p class="para1">ii. To continue availing scholarship, a student must
                                                        clear all the
                                                        papers in
                                                        each semester and
                                                        should not carry any back log in any semester from the previous
                                                        academic year
                                                        and pass the
                                                        semester/annual
                                                        examination for promotion to the next year.</p>

                                                    <h3 class="headd3 text-dark fw-bold">Document Required under the above
                                                        mentioned of
                                                        Scholarship:
                                                    </h3>
                                                    <p class="para1">1. Scanned copies of the marksheets from Class X
                                                        onwards.</p>
                                                    <p class="para1">2. Scanned copies of the EWS certificate from the
                                                        competent
                                                        authority claiming
                                                        scholarship under
                                                        the said category.</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">E</span> Royal Merit -
                                        On Admission 100% Scholarship To Five International Students (from
                                        neighboring countries like Thailand, Bangladesh, Nepal, Bhutan and Myanmar)
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div>
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h1>
                                            </h3>
                                            <table
                                                class="overflow-hidden table text-wrap table-bordered border-top mt-5 mb-5 fs-16 para1"
                                                style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                <thead>
                                                    <th>
                                                        SCHOLARSHIP OFFERED
                                                    </th>
                                                    <th>PG
                                                        PROGRAMMES</th>
                                                    <th>UG
                                                        PROGRAMMES</th>
                                                </thead>
                                                <thead>
                                                    <th>Nature of
                                                        Scholarship
                                                        (Category)</th>
                                                    <th>GRADUATION
                                                        (ANY
                                                        STREAM)</th>
                                                    <th>10+2</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>100% on annual fee, registration fee and admission fee, other
                                                            applicable fee to
                                                            be paid </td>
                                                        <td>80% & Above in aggregate </td>
                                                        <td>80% & Above in aggregate </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-dark para1" style="text-align: justify;">
                                                <p class="para1">i. A student availing 100% scholarship will have to pay
                                                    Rs.
                                                    10000/-
                                                    (Rupees Five Thousand only) as caution money (Refundable) at the time of
                                                    admission.</p>
                                                <p class="para1">ii. In case a student, availing Royal Merit - On
                                                    Admission
                                                    100%
                                                    Scholarship to International Students, wishes to avail hostel/
                                                    transportation
                                                    facilities, he/she will have to
                                                    pay the full hostel/ transportation fees as prescribed for other
                                                    students.</p>
                                                <p class="para1">iii. The Scholarship may not be applicable for Courses
                                                    Governed by
                                                    Regulatory
                                                    Bodies (AICTE, COA,
                                                    PCI, INC, ANMHVC, BCI, etc.).</p>
                                                <p class="para1">iv. Final decision of granting scholarship lies with the
                                                    University
                                                    Scholarship
                                                    Committee and or
                                                    Competent Authority's.</p>

                                                <h3 class="headd3 text-dark fw-bold">Scholarship for subsequent years
                                                    will be
                                                    governed as follows –
                                                </h3>
                                                <p class="fs-16">i. Class attendance of the students must be 75% and above
                                                    in all
                                                    the subjects
                                                    in each semester from
                                                    the previous academic year.</p>
                                                <p class="fs-16">ii. To continue availing scholarship, a student must
                                                    clear
                                                    all the
                                                    papers in
                                                    each semester and
                                                    should not carry any back log in any semester from the previous academic
                                                    year
                                                    and pass the
                                                    semester/annual
                                                    examination for promotion to the next year.</p>

                                                <h3 class="headd3 text-dark fw-bold">Required under the above mentioned of
                                                    Scholarship:
                                                </h3>
                                                <p class="para1 text-dark">1. Scanned copies of the marksheets from Class X
                                                    or equivalent
                                                    onwards.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">F</span> Royal Shaurya:
                                        Full Freeship For Wards Of Braveheart Security Personnels
                                        (Military/Paramilitary/North-Eastern Police
                                        Forces)
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="text-dark p-2">
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h1>
                                                <table
                                                    class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                    style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                    <thead>
                                                        <th class="bg-blue text-white">
                                                            SCHOLARSHIP OFFERED
                                                        </th>
                                                        <th class="bg-blue text-white">PG
                                                            PROGRAMMES</th>
                                                        <th class="bg-blue text-white">UG
                                                            PROGRAMMES</th>
                                                    </thead>
                                                    <thead>
                                                        <th class="bg-blue text-white">Nature of
                                                            Scholarship
                                                            (Category)</th>
                                                        <th class="bg-blue text-white">GRADUATION
                                                            (ANY
                                                            STREAM)</th>
                                                        <th class="bg-blue text-white">10+2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="para1" style="text-align: justify;">
                                                            <td>100% on annual fee, registration fee and admission fee.
                                                                Other
                                                                applicable fee, if
                                                                any, to be paid for
                                                                entire course</td>
                                                            <td colspan="2">As per the required minimum eligibility
                                                                criteria
                                                                of the
                                                                respective
                                                                programme/course</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p class="para1" style="text-align: justify;">A. Wards of
                                                    Military/Paramilitary (CRPF/BSF,
                                                    etc.) & Police (N.E.
                                                    India) who
                                                    have:
                                                    <br>
                                                    1. Laid their lives while fighting against
                                                    Militants/Naxalites/Terrorists
                                                    /Anti-social
                                                    Elements.
                                                    <br>
                                                    2. Received Gallantry Medals/AWARDS.
                                                    <br>
                                                    3. Expired while performing bonafide Govt. duty service.
                                                </p>
                                                <p style="text-align: justify;" class="para1">
                                                    B. In case a student, availing Royal Shaurya: Full Freeship for Wards of
                                                    Braveheart Security
                                                    Personnels
                                                    (Military/ Paramilitary/Police Personnel – N.E. only), wishes to avail
                                                    hostel/
                                                    transportation facilities, he/she
                                                    will have to pay the full hostel/ transportation fees as prescribed for
                                                    other
                                                    students.</p>
                                                <p style="text-align: justify;" class="para1">C. The Scholarship may not
                                                    be
                                                    applicable for
                                                    Courses Governed by
                                                    Regulatory
                                                    Bodies (AICTE, COA,
                                                    PCI, INC, ANMHVC, BCI, etc.).</p>
                                                <p style="text-align: justify;" class="para1">D. A student availing Royal
                                                    Shaurya: Full
                                                    Freeship for Wards of
                                                    Braveheart
                                                    Security Personnels
                                                    (Military/ Paramilitary/Police Personnel – N.E. only) are required to
                                                    the
                                                    Caution money of
                                                    Rs. 10000/-
                                                    (refundable) only.</p>
                                                <p style="text-align: justify;" class="para1">E. Final decision of
                                                    granting
                                                    scholarship lies
                                                    with the University
                                                    Scholarship
                                                    Committee and or
                                                    Competent Authority's. </p>

                                                <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                                                    subsequent years
                                                    will be
                                                    governed as follows –
                                                </h3>
                                                <p style="text-align: justify;" class="para1">i. Class attendance of the
                                                    students must be
                                                    75% and above in all
                                                    the subjects
                                                    in each semester from
                                                    the previous academic year.</p>
                                                <p style="text-align: justify;" class="para1">ii. To continue availing
                                                    scholarship, a
                                                    student must clear all the
                                                    papers in
                                                    each semester and
                                                    should not carry any back log in any semester from the previous academic
                                                    year
                                                    and pass the
                                                    semester/annual
                                                    examination for promotion to the next year.</p>

                                                <h3 class="headd3 text-dark fw-bold">Document Required under the above
                                                    mentioned of
                                                    Scholarship:
                                                </h3>
                                                <p class="para1">1. Scanned copies of the marksheets from Class X or
                                                    equivalent
                                                    onwards.</p>
                                                <p style="text-align: justify;" class="para1">2. Scanned copies of the
                                                    certificate from the
                                                    competent authority
                                                    claiming
                                                    scholarship under the
                                                    said category</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">G</span> Royal Suraksha:
                                        50% Scholarship For Wards Of Serving & Retired Security Personnels
                                        (Military/Paramilitary/North-Eastern
                                        Police Forces)
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div>
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h1>
                                                <table
                                                    class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16 para1"
                                                    style="box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.10); background-color: #fff;">
                                                    <thead class="bg-blue text-white">
                                                        <th class="bg-blue text-white">
                                                            SCHOLARSHIP OFFERED
                                                        </th>
                                                        <th class="bg-blue text-white">PG
                                                            PROGRAMMES</th>
                                                        <th class="bg-blue text-white">UG
                                                            PROGRAMMES</th>
                                                    </thead>
                                                    <thead class="bg-blue text-white">
                                                        <th class="bg-blue text-white">Nature of
                                                            Scholarship
                                                            (Category)</th>
                                                        <th class="bg-blue text-white">GRADUATION
                                                            (ANY
                                                            STREAM)</th>
                                                        <th class="bg-blue text-white">10+2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>50% on annual fee. Other applicable fee, if any, to be paid
                                                                for
                                                                entire course
                                                            </td>
                                                            <td colspan="2">As per the required minimum eligibility
                                                                criteria
                                                                of the
                                                                respective
                                                                programme/course</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="text-dark" style="text-align: justify;">
                                                    <p class="para1">a) Ward of a Défense Personnel (Military)/
                                                        Paramilitary
                                                        Personnel.
                                                    </p>
                                                    <p class="para1">b) Ward of a Police Personnel- NE only.</p>
                                                    <p class="para1">c) In case a student, availing Royal Suraksha: 50%
                                                        Scholarship for
                                                        Wards of
                                                        Serving & Retired
                                                        Security Personnels (Military/ Paramilitary/Police Personnel – N.E.
                                                        only),
                                                        wishes to avail
                                                        hostel/
                                                        transportation facilities, he/she will have to pay the full hostel/
                                                        transportation fees as
                                                        prescribed for
                                                        otherstudents.</p>
                                                    <p class="para1">d) The Scholarship may not be applicable for Courses
                                                        Governed by
                                                        Regulatory
                                                        Bodies (AICTE, COA,
                                                        PCI, INC, ANMHVC, BCI, etc.)</p>
                                                    <p class="para1">e) A student availing RoyalSuraksha: 50% Scholarship
                                                        for Wards of
                                                        Serving &
                                                        Retired Security
                                                        Personnels (Military/ Paramilitary/Police Personnel – N.E. only) are
                                                        required to
                                                        the Caution
                                                        money of Rs.
                                                        10000/- (refundable) olong with the remaining percentage of fee for
                                                        the 1st
                                                        semester/year of
                                                        his/her programme
                                                        of study along with the Admission Fee, Registration Fee etc.</p>
                                                    <p class="para1">f) Final decision of granting scholarship lies with
                                                        the
                                                        University
                                                        Scholarship
                                                        Committee and or
                                                        Competent Authority's. </p>

                                                    <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                                                        subsequent years
                                                        will be
                                                        governed as follows –
                                                    </h3>
                                                    <p class="para1">i. Class attendance of the students must be 75% and
                                                        above in all
                                                        the subjects
                                                        in each semester from
                                                        the previous academic year.</p>
                                                    <p class="para1">ii. To continue availing scholarship, a student must
                                                        clear all the
                                                        papers in
                                                        each semester and
                                                        should not carry any back log in any semester from the previous
                                                        academic year
                                                        and pass the
                                                        semester/annual
                                                        examination for promotion to the next year.</p>

                                                    <h3 class="headd3 text-dark fw-bold">Document Required under the above
                                                        mentioned of
                                                        Scholarship:
                                                    </h3>
                                                    <p class="para1">1. Scanned copies of the marksheets from Class X
                                                        onwards.</p>
                                                    <p class="para1">2. Scanned copies of the certificate from the
                                                        competent
                                                        authority
                                                        claiming
                                                        scholarship under the
                                                        said category.</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false"
                                        aria-controls="collapse11">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">H</span> Hope For
                                        Manipur Scholarship - 100% Admission Fee Waiver (For Students From Violence Affected
                                        Families Of Manipur)
                                    </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="text-dark">
                                            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                                                Eligibility Criteria</h3>
                                            <ol class="para1" style="text-align: justify;">
                                                <li>Must be resident of Manipur.</li>
                                                <li>Must secure admission for any UG or PG programme at RGU.</li>
                                                <li>Supporting documents stating the need for financial assistance due to
                                                    recent
                                                    violence from the competent
                                                    authority.</li>
                                                <li>In case a student, availing 100% Admission fee waiver Scholarship,
                                                    wishes to avail
                                                    hostel/
                                                    transportation facilities, he/she will have to pay the full hostel/
                                                    transportation
                                                    fees as prescribed
                                                    for other students.</li>
                                                <li>The Scholarship may not be applicable for Courses Governed by Regulatory
                                                    Bodies
                                                    (AICTE, COA, PCI, INC,
                                                    ANMHVC, BCI, etc.).</li>
                                                <li>Final decision of granting scholarship lies with the University
                                                    Scholarship
                                                    Committee and or Competent
                                                    Authority's.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">I</span> RGU Sports
                                        Scholarship
                                    </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <img src="https://media.rgu.ac/sport-policy/web-policy.png" alt="" />
                                    </div>
                                </div>

                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">J</span> Royal Shaurya :
                                        Full freeship to the wards of braveheart security personnels (Scholarship offered on
                                        course fee)
                                    </button>
                                </h2>
                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <section class="section" id="royal-shaurya">
                                            <div>

                                                <style>
                                                    /* Custom styles for the scholarship table */
                                                    .freeship-table thead th {
                                                        vertical-align: middle;
                                                        text-align: center;
                                                    }
                                                </style>

                                                <div class="container-xl">

                                                    <!-- Table container for overflow scrolling on small screens -->
                                                    <div class="table-responsive shadow-sm rounded-3 overflow-hidden">
                                                        <table
                                                            class="table table-light table-bordered table-hover align-middle m-0 freeship-table mobile-para1">
                                                            <!-- Table Header -->
                                                            <thead class="text-uppercase small">
                                                                <tr>
                                                                    <th class="p-3" rowspan="3">Scholarship Offered
                                                                        on Course Fee</th>
                                                                    <th class="p-3" colspan="1">For PG Programmes
                                                                    </th>
                                                                    <th class="p-3" colspan="1">For UG Programmes
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="p-3 text-center" colspan="2">Percentage
                                                                        of Marks Required In</th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="p-3">Graduation, any stream</th>
                                                                    <th class="p-3">10+2/ HS/ Diploma (Any Board)</th>
                                                                </tr>
                                                            </thead>

                                                            <!-- Table Body -->
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-3 fw-bold text-center">100%</td>
                                                                    <td class="p-3" colspan="2">As per the required
                                                                        minimum eligibility criteria of
                                                                        the respective programme/course</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <h4 class="mobile-para1 fw-bold text-dark mt-3">ELIGIBILITY CRITERIA:</h4>

                                                <ol class="text-dark mobile-para1" type="i">

                                                    <li>The Scholarship is applicable to the wards of:
                                                        <ol type="a">
                                                            <li>Military (Army/Navy/Air Force)</li>
                                                            <li>Paramilitary (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam
                                                                Rifles/NSG/SFF/SPG)</li>
                                                            <li>Police Personnel residing in the Northeastern region</li>
                                                        </ol>

                                                        who have:
                                                        <ol>
                                                            <li>Laid their lives while fighting against
                                                                Militants/Naxalites/Terrorists/Anti-social
                                                                Elements.</li>
                                                            <li>Received Gallantry Medals/Awards.</li>
                                                            <li>Expired while performing bonafide Govt. duty service.</li>
                                                        </ol>
                                                    </li>

                                                    <li>A student availing scholarship under Royal Shaurya is required to
                                                        pay the one-time Admission
                                                        Fee, Registration Fee and Caution money (refundable) at the time of
                                                        admission.</li>

                                                    <li>The scholarship is awarded annually and continuation in the
                                                        subsequent year is governed by
                                                        the norms laid down for the continuation of Royal Shaurya.</li>

                                                    <li>In case a student, availing Royal Shaurya, wishes to avail
                                                        hostel/transportation facilities,
                                                        he/she will have to pay the full hostel/transportation fees as
                                                        prescribed for other
                                                        students.</li>

                                                    <li>The Scholarship may not be applicable for Courses Governed by
                                                        Regulatory Bodies (AICTE, COA,
                                                        PCI, INC, ANMHVC, BCI, etc.).</li>

                                                    <li>Change of programme after the award of Scholarship for a particular
                                                        programme is not
                                                        allowed. As such the scholarship awarded stands cancelled. If the
                                                        student still wishes to
                                                        apply for the scholarship, it needs to submit a fresh application
                                                        for the same.</li>

                                                    <li>The students can avail only one scholarship from any source in a
                                                        particular academic year.
                                                        If a student is found availing more than one scholarship during the
                                                        same academic year from
                                                        different sources, the scholarship awarded by the University will
                                                        stand cancelled for that
                                                        particular academic year, and the student will be liable to pay the
                                                        full course fee for that
                                                        academic year.</li>

                                                    <li>However, if a student wishes to retain the University’s scholarship
                                                        and withdraw the
                                                        scholarship received from other source(s) for the same academic
                                                        year, the student must
                                                        refund the full amount received from the other source(s) to the
                                                        University before availing
                                                        the University’s scholarship. The student is also required to submit
                                                        an undertaking to this
                                                        effect.</li>

                                                    <li>Final decision of granting scholarship lies with the University
                                                        Scholarship Committee and/or
                                                        Competent Authority/s.</li>

                                                </ol>

                                                <h4 class="mobile-para1 fw-bold text-dark">Continuation of Scholarship for
                                                    subsequent years will be
                                                    governed as follows –</h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Class attendance of the students must be 75% and above in all the
                                                        subjects in each semester
                                                        from the previous academic year.</li>
                                                    <li>To continue availing scholarship, a student must clear all the
                                                        papers in each semester and
                                                        should not carry any backlog in any semester from the previous
                                                        academic year and must pass
                                                        the semester/annual examination for promotion to the next year.</li>
                                                </ol>


                                                <h4 class="mobile-para1 fw-bold text-dark">Documents Required under the
                                                    above mentioned Scholarship:
                                                </h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Scanned copies of the marksheets/gradesheets from Class X onwards.
                                                    </li>
                                                    <li>Scanned copies of the certificate from the competent authority
                                                        claiming scholarship under
                                                        the said category.</li>
                                                </ol>

                                                <h3 class="headd3 text-dark fw-bold text-center pt-3 pb-3">ROYAL SURAKSHA:
                                                    50% SCHOLARSHIP FOR WARDS OF SERVING & RETIRED SECURITY PERSONNELS
                                                </h3>

                                                <div class="container-xl">

                                                    <!-- Table container for overflow scrolling on small screens -->
                                                    <div class="table-responsive shadow-sm rounded-3 overflow-hidden">
                                                        <table
                                                            class="table table-light table-bordered table-hover align-middle m-0 freeship-table mobile-para1">
                                                            <!-- Table Header -->
                                                            <thead class="text-uppercase small">
                                                                <tr>
                                                                    <th class="p-3" rowspan="3">Scholarship Offered
                                                                        on Course Fee</th>
                                                                    <th class="p-3" colspan="1">For PG Programmes
                                                                    </th>
                                                                    <th class="p-3" colspan="1">For UG Programmes
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="p-3 text-center" colspan="2">Percentage
                                                                        of Marks Required In</th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="p-3">Graduation, any stream</th>
                                                                    <th class="p-3">10+2/ HS/ Diploma (Any Board)</th>
                                                                </tr>
                                                            </thead>

                                                            <!-- Table Body -->
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-3 fw-bold text-center">50%</td>
                                                                    <td class="p-3" colspan="2">As per the required
                                                                        minimum eligibility criteria of
                                                                        the respective programme/course</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <h4 class="mobile-para1 fw-bold text-dark mt-3">ELIGIBILITY CRITERIA</h4>

                                                <ol class="text-dark mobile-para1" type="i">

                                                    <li>The Scholarship is applicable to the wards of serving & retired:
                                                        <ol type="a">
                                                            <li>Military (Army/Navy/Air Force)</li>
                                                            <li>Paramilitary (CRPF/BSF/ITBP/SSB/CISF/RPF/Assam
                                                                Rifles/NSG/SFF/SPG)</li>
                                                            <li>Police Personnel residing in the Northeastern region</li>
                                                        </ol>
                                                    </li>

                                                    <li>A student availing scholarship under Royal Suraksha is required to
                                                        pay the one-time
                                                        Admission Fee, Registration Fee and Caution money (refundable) at
                                                        the time of admission.
                                                    </li>

                                                    <li>The scholarship is awarded annually and continuation in the
                                                        subsequent year is governed by
                                                        the norms laid down for the continuation of Royal Suraksha.</li>

                                                    <li>In case a student, availing Royal Suraksha, wishes to avail
                                                        hostel/transportation
                                                        facilities, he/she will have to pay the full hostel/transportation
                                                        fees as prescribed for
                                                        other students.</li>

                                                    <li>The Scholarship may not be applicable for Courses Governed by
                                                        Regulatory Bodies (AICTE, COA,
                                                        PCI, INC, ANMHVC, BCI, etc.).</li>

                                                    <li>Change of programme after the award of Scholarship for a particular
                                                        programme is not
                                                        allowed. As such the scholarship awarded stands cancelled. If the
                                                        student still wishes to
                                                        apply for the scholarship, it needs to submit a fresh application
                                                        for the same.</li>

                                                    <li>The students can avail only one scholarship from any source in a
                                                        particular academic year.
                                                        If a student is found availing more than one scholarship during the
                                                        same academic year from
                                                        different sources, the scholarship awarded by the University will
                                                        stand cancelled for that
                                                        particular academic year, and the student will be liable to pay the
                                                        full course fee for that
                                                        academic year.</li>

                                                    <li>However, if a student wishes to retain the scholarship offered by
                                                        the University and
                                                        withdraw the scholarship received from other source(s) for the same
                                                        academic year, the
                                                        student must refund the entire scholarship amount received from the
                                                        other source(s) to the
                                                        University before availing the University’s scholarship. If a
                                                        student is applying for any
                                                        other scholarships, the student needs to submit an undertaking that
                                                        the RGU scholarship will
                                                        be returned if he/she receives any other scholarship from other
                                                        sources.</li>

                                                    <li>Final decision of granting scholarship lies with the University
                                                        Scholarship Committee and/or
                                                        Competent Authority/s.</li>

                                                </ol>

                                                <h4 class="mobile-para1 fw-bold text-dark">Continuation of Scholarship for
                                                    subsequent years will be governed as follows –</h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Class attendance of the students must be 75% and above in all the
                                                        subjects in each semester
                                                        from the previous academic year.</li>
                                                    <li>To continue availing scholarship, a student must clear all the
                                                        papers in each semester and
                                                        should not carry any backlog in any semester from the previous
                                                        academic year and must pass
                                                        the semester/annual examination for promotion to the next year.</li>
                                                </ol>

                                                <h4 class="mobile-para1 fw-bold text-dark">Documents Required under the
                                                    above mentioned Scholarship:</h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Scanned copies of the marksheets/gradesheets from Class X onwards.
                                                    </li>
                                                    <li>Scanned copies of the serving/retired certificate from the competent
                                                        authority claiming
                                                        scholarship under the said category.</li>
                                                </ol>


                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">K</span> Zubeen Garg
                                        Scholarship
                                    </button>
                                </h2>
                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <section class="section" id="royal-shaurya">
                                            <div class="container-fluid my-5">

                                                <div class="table-responsive shadow-sm bg-white rounded mobile-para1">
                                                    <table class="table table-bordered align-middle mb-0">

                                                        <thead>
                                                            <tr style="background-color: #27467A; color: white;">
                                                                <th rowspan="2" class="text-center align-middle"
                                                                    style="width: 15%;">CATEGORIES
                                                                </th>
                                                                <th colspan="3" class="text-center align-middle">
                                                                    SCHOLARSHIP OFFERED ON COURSE
                                                                    FEE</th>
                                                                <th rowspan="2" class="text-center align-middle"
                                                                    style="width: 15%;">
                                                                    For PG/UG Programme<br>
                                                                    <small class="fw-light"
                                                                        style="font-size: 0.7rem;">(Percentage of marks in
                                                                        Graduation, any stream/ 10+2/HS/Diploma, any
                                                                        Board/Council)</small>
                                                                </th>
                                                            </tr>
                                                            <tr style="background-color: #27467A; color: white;">
                                                                <th class="text-center" style="width: 23%;">100%</th>
                                                                <th class="text-center" style="width: 23%;">50%</th>
                                                                <th class="text-center" style="width: 23%;">25%</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center fw-bold bg-light">
                                                                    Sports<br>
                                                                    <span class="fw-normal small">(including both
                                                                        individual and Team
                                                                        Sports)</span>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>International Athlete/Players</li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>National Participants / Award winners</li>
                                                                        <li>First four positions at All India University
                                                                            level (by AIU)</li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>Zonal/State Participants</li>
                                                                        <li>First Three positions at Zonal University level
                                                                            (by AIU)</li>
                                                                    </ul>
                                                                </td>
                                                                <td rowspan="3"
                                                                    class="text-center fw-bold text-secondary">
                                                                    As per the required minimum eligibility criteria of the
                                                                    respective
                                                                    programme/course
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="fw-bold bg-light text-center">
                                                                    Cultural Activities
                                                                    <div
                                                                        class="fw-normal text-start mt-2 ps-3 border-top pt-2">
                                                                        &bull; Dance<br>
                                                                        &bull; Music<br>
                                                                        &bull; Theatre<br>
                                                                        &bull; Fine Arts
                                                                    </div>
                                                                </td>
                                                                <td rowspan="2">
                                                                    <ul>
                                                                        <li>1) First four positions at National Level
                                                                            Festival
                                                                            conducted by the
                                                                            Ministry of Youth Cultural and Sports Affairs,
                                                                            Government of India.
                                                                        </li>
                                                                        <li>2) First four positions at All India University
                                                                            level (by the AIU)</li>
                                                                        <li>3) Overall Winner of National TV Reality Show
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                <td rowspan="2">
                                                                    <ul>
                                                                        <li>1) Participated in National Youth Fest conducted
                                                                            by
                                                                            the Ministry of
                                                                            Youth Affairs and Sports, Government of India.
                                                                        </li>
                                                                        <li>2) Graded artist of the Government of India
                                                                            broadcasting media like DD/
                                                                            AIR or equivalent.</li>
                                                                        <li>3) First Three positions at Zonal Youth
                                                                            Festivals
                                                                            (AIU).</li>
                                                                    </ul>
                                                                </td>
                                                                <td rowspan="2">
                                                                    <ul>
                                                                        <li>1) Fourth position at Zonal Youth Festivals
                                                                            (AIU).
                                                                        </li>
                                                                        <li>2) First Three Positions at Scheduled State
                                                                            Level
                                                                            Event Conducted by
                                                                            the Ministry of Youth Cultural and Sports
                                                                            Affairs or Sangeet Natak
                                                                            Academy.</li>
                                                                        <li>3) First three Positions at Inter Zonal
                                                                            Competition
                                                                            (Intra University)
                                                                            conducted by UGC recognized Universities.</li>
                                                                        <li>4) Finalist/ Semi-finalist/ Quarterfinalist at
                                                                            National TV reality show
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center fw-bold bg-light">Literary</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="text-dark">
                                                    <p class="text-dark fw-bold mobile-headd3 mt-2">
                                                        Eligibility Criteria:
                                                    </p>

                                                    <p class="text-dark mobile-para1">
                                                        i.) The Scholarship is applicable under the following categories
                                                        must have achieved
                                                        recognition at Inter-University, State, National, International
                                                        level in the respective
                                                        field:
                                                    </p>

                                                    <style>
                                                        .vertical-text-tab {
                                                            writing-mode: vertical-rl;
                                                            transform: rotate(180deg);
                                                        }
                                                    </style>

                                                    <div class="container-xl">
                                                        <!-- Table container for overflow scrolling on small screens -->
                                                        <div class="table-responsive shadow-sm rounded-3 overflow-hidden">
                                                            <table
                                                                class="table table-light table-bordered table-hover align-middle m-0 mobile-para1">
                                                                <!-- Table Header -->
                                                                <thead class="text-uppercase small">
                                                                    <tr>
                                                                        <!-- Empty header for the vertical 'Cultural Activities' column -->
                                                                        <th class="p-3" style="width: 4rem;"></th>
                                                                        <th class="p-3 text-start">Categories</th>
                                                                        <th class="p-3 text-start">Includes</th>
                                                                    </tr>
                                                                </thead>

                                                                <!-- Table Body -->
                                                                <tbody>
                                                                    <!-- Sports Row -->
                                                                    <tr>
                                                                        <td class="p-4"></td>
                                                                        <td class="p-4 align-top fw-bold"
                                                                            style="width: 33.33%;">
                                                                            Sports
                                                                            <span
                                                                                class="d-block fw-normal small text-white-50">(including
                                                                                both
                                                                                individual and Team Sports)</span>
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            Football, Cricket, Volleyball, Basketball,
                                                                            Tennis, Badminton, Table
                                                                            Tennis, Taekwondo, Athletics, Judo, Karate,
                                                                            Boxing, Swimming and other
                                                                            sports (subject to approval).
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Cultural Activities: Dance -->
                                                                    <tr>
                                                                        <td class="p-4 text-center align-middle fw-bold text-uppercase vertical-text-tab"
                                                                            style="width: 4rem;" rowspan="5">
                                                                            Cultural Activities
                                                                        </td>
                                                                        <td class="p-4 align-top fw-bold">
                                                                            Dance
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            Folk/Classical
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Cultural Activities: Music -->
                                                                    <tr>
                                                                        <td class="p-4 align-top fw-bold">
                                                                            Music
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            <ul class="ps-4">
                                                                                <li class="mb-3">
                                                                                    <strong>Vocal:</strong> Classical/ Semi
                                                                                    Classical Indian /Folk
                                                                                    /Light Vocal/ Western.
                                                                                </li>
                                                                                <li class="mb-3">
                                                                                    <strong>Instrumental:</strong>
                                                                                    <ol class="ps-4 mt-2">
                                                                                        <li class="mb-1">
                                                                                            <em>Percussion:</em> Tabla,
                                                                                            Khol/Mridangam,
                                                                                            Pakhawaj,
                                                                                        </li>
                                                                                        <li class="mb-1">
                                                                                            <em>Non-Percussion:</em> Sitar,
                                                                                            Santoor,
                                                                                            Sarod, Flute, Harmonium, Violin,
                                                                                            Sarangi
                                                                                        </li>
                                                                                        <li><em>Folk Instruments</em></li>
                                                                                    </ol>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Western instrument:</strong>
                                                                                    Keyboard, Guitar, Bass
                                                                                    guitar, Drum, Piano, etc.
                                                                                </li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Cultural Activities: Theatre -->
                                                                    <tr>
                                                                        <td class="p-4 align-top fw-bold">
                                                                            Theatre
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            Any Theatre form/ Mime
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Cultural Activities: Fine Arts -->
                                                                    <tr>
                                                                        <td class="p-4 align-top fw-bold">
                                                                            Fine Arts
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            Any form of Painting, Terracotta / Clay
                                                                            Modelling/ Installation/Collage
                                                                            & Photography
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Cultural Activities: Literary -->
                                                                    <tr>
                                                                        <td class="p-4 align-top fw-bold">
                                                                            Literary
                                                                        </td>
                                                                        <td class="p-4 align-top">
                                                                            Debate
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <ol class="mobile-para1 text-dark mt-3">
                                                        <li>The Scholarship is applicable under the following categories
                                                            must have achieved
                                                            recognition at Inter-University, State, National, International
                                                            level in the respective
                                                            field.</li>

                                                        <li>The scholarship applied under Music and Dance category must hold
                                                            a Visharad or
                                                            equivalent qualification from a recognized Board/University.
                                                        </li>

                                                        <li>A student availing Zubeen Garg scholarship is required to pay
                                                            the one-time Admission
                                                            Fee, Registration Fee and Caution money (refundable) at the time
                                                            of admission.</li>

                                                        <li>A total of 20 scholarships will be offered under each category
                                                            (i.e., Sports, Music,
                                                            Dance, Theatre, Literary, Fine Arts) in selected programmes as
                                                            decided by the competent
                                                            authority. Scholarship/ Financial Aid under different categories
                                                            may not be offered in
                                                            all the programmes of the university.</li>

                                                        <li>The applicant under Zubeen Garg scholarship shall be required to
                                                            submit an affidavit
                                                            stating that once admitted to the university, they would
                                                            participate / represent only
                                                            from RGU.</li>

                                                        <li>Other Terms and Conditions:
                                                            <ol type="a">
                                                                <li>Flexible Examination Schedules: Sportsperson may be
                                                                    allowed to take examinations
                                                                    at alternative times if the scheduled examinations
                                                                    coincide with any
                                                                    event/competition. (Only For International/ National/
                                                                    State level competition)
                                                                </li>
                                                                <li>Attendance will be considered on the basis of active
                                                                    participation and
                                                                    submission of the proof of participation.</li>
                                                                <li>Performance Trials/Audition will be taken before
                                                                    admission.</li>
                                                                <li>Original certificates are required for verification.
                                                                </li>
                                                                <li>Only last two-years performance Certificates will be
                                                                    considered.</li>
                                                                <li>Deficit in the required attendance for students
                                                                    participating in
                                                                    Zonal/AIU/National/International Competitions from the
                                                                    date of departure to date
                                                                    of return at RGU campus shall be compensated for by
                                                                    treating the days of absence
                                                                    from the academic activities on the campus for being
                                                                    engaged in
                                                                    extracurricular/co-curricular with activities.</li>
                                                                <li>Attendance of the Zubeen Garg scholars in training camps
                                                                    within and outside the
                                                                    campus will be recorded. Zubeen Garg scholars shall be
                                                                    required to have 90%
                                                                    attendance in such camps.</li>
                                                            </ol>
                                                        </li>

                                                        <li>In case a student, availing Zubeen Garg Scholarship, wishes to
                                                            avail hostel/
                                                            transportation facilities, he/she will have to pay the full
                                                            hostel/ transportation fees
                                                            as prescribed for other students.</li>

                                                        <li>The Scholarship may not be applicable for Courses Governed by
                                                            Regulatory Bodies (AICTE,
                                                            COA, PCI, INC, ANMHVC, BCI, etc.).</li>

                                                        <li>Change of programme after the award of Scholarship for a
                                                            particular programme is not
                                                            allowed. As such the scholarship awarded stands cancelled. If
                                                            the student still wishes
                                                            to apply for the scholarship, it needs to submit a fresh
                                                            application for the same.</li>

                                                        <li>The students can avail only one scholarship from any source in a
                                                            particular academic
                                                            year. If a student is found availing more than one scholarship
                                                            during the same academic
                                                            year from different sources, the scholarship awarded by the
                                                            University will stand
                                                            cancelled for that particular academic year, and the student
                                                            will be liable to pay the
                                                            full course fee for that academic year.</li>

                                                        <li>However, if a student wishes to retain the University’s
                                                            scholarship and withdraw the
                                                            scholarship received from other source(s) for the same academic
                                                            year, the student must
                                                            refund the full amount received from the other source(s) to the
                                                            University before
                                                            availing the University’s scholarship. The student is also
                                                            required to submit an
                                                            undertaking to this effect.</li>

                                                        <li>Final decision of granting scholarship lies with the University
                                                            Scholarship Committee
                                                            and/or Competent Authority/s.</li>
                                                    </ol>

                                                    <p class="text-dark fw-bold mobile-headd3 mt-2">
                                                        Discontinuation of Scholarship will be governed as follows:
                                                    </p>

                                                    <ol class="text-dark mobile-para1">
                                                        <li>If the student indulges in any act of indiscipline.</li>
                                                        <li>If the student fails to participate in Zonal / All India Inter
                                                            University or represent
                                                            RGU due to any reason.</li>
                                                        <li>If attendance falls short of the required 90% in the training
                                                            camps (within and outside
                                                            the campus).</li>
                                                        <li>If any student is found positive in doping tests during any
                                                            competition/trials.</li>
                                                        <li>If any student indulges in criminal activities, he/she can be
                                                            terminated from the
                                                            University.</li>
                                                    </ol>

                                                    <p class="text-dark fw-bold mobile-headd3 mt-2">
                                                        Continuation of Scholarship for subsequent years will be governed as
                                                        follows –
                                                    </p>

                                                    <ol class="text-dark mobile-para1">
                                                        <li>Class attendance of the students must be 75% and above in all
                                                            the subjects in each
                                                            semester from the previous academic year.</li>
                                                        <li>To continue availing scholarship, a student must clear all the
                                                            papers in each semester
                                                            and should not carry any backlog in any semester from the
                                                            previous academic year and
                                                            must pass the semester/annual examination for promotion to the
                                                            next year.</li>
                                                    </ol>

                                                    <p class="text-dark fw-bold mobile-headd3 mt-2">
                                                        Documents Required under the above mentioned of Scholarship:
                                                    </p>

                                                    <ol class="text-dark mobile-para1">
                                                        <li>Scanned copies of the marksheets/ gradesheets from Class X
                                                            onwards.</li>

                                                        <li>The scholarship under Sports category must furnish the following
                                                            documents:
                                                            <ol type="a">
                                                                <li>Certificates of participation or awards in recognized
                                                                    sports* events at national
                                                                    or state levels.</li>
                                                            </ol>

                                                            <p class="fw-bold">Recognition in Sports:</p>
                                                            <ol type="a">
                                                                <li>Olympics/World/Asian/Commonwealth/SAF Games/Paralympics
                                                                    Games</li>
                                                                <li>Championships under International Sports Federation
                                                                    (IOC/IOA and/or Ministry of
                                                                    Youth Affairs & Sports recognized/affiliated Games)</li>
                                                            </ol>
                                                        </li>

                                                        <li>The scholarship applied under Cultural Activities category must
                                                            furnish certificates and
                                                            other forms of valid evidence showing participation or
                                                            recognition in the mentioned
                                                            domain.</li>
                                                    </ol>
                                                </div>

                                            </div>

                                        </section>
                                    </div>
                                </div>

                            </div>


                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <span class="p-2 rounded fw-bold"
                                            style="background-color: #ef991f; margin-right: 15px;">L</span> Royal Merit
                                        Scholarship
                                    </button>
                                </h2>
                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <section class="section" id="royal-shaurya">
                                            <div>

                                                <div class="mt-3">
                                                    <style>
                                                        /* Custom styles for the scholarship table */
                                                        .scholarship-table thead th {
                                                            vertical-align: middle;
                                                            text-align: center;
                                                        }
                                                    </style>

                                                    <div class="container-xl">

                                                        <!-- Table container for overflow scrolling on small screens -->
                                                        <div class="table-responsive shadow-sm rounded-3 overflow-hidden">
                                                            <table
                                                                class="table table-light table-bordered table-hover align-middle m-0 scholarship-table mobile-para1">
                                                                <!-- Table Header -->
                                                                <thead class="text-uppercase small">
                                                                    <tr>
                                                                        <th class="p-3" rowspan="3">Scholarship
                                                                            Offered on Course Fee</th>
                                                                        <th class="p-3" colspan="1">For PG
                                                                            Programmes</th>
                                                                        <th class="p-3" colspan="2">For UG
                                                                            Programmes</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="p-3 text-center" colspan="3">
                                                                            Percentage of Marks Required In</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="p-3">Graduation, in any stream</th>
                                                                        <th class="p-3">10+2 (CBSE/ ICSE Board)</th>
                                                                        <th class="p-3">H.S./ Diploma Marks (AHSEC/
                                                                            Other State Board/Council/NIOS)
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <!-- Table Body -->
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-3 fw-bold text-center">100%</td>
                                                                        <td class="p-3">90% & above in aggregate</td>
                                                                        <td class="p-3">96% & above in aggregate</td>
                                                                        <td class="p-3">93% & above in aggregate</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-3 fw-bold text-center">50%</td>
                                                                        <td class="p-3">Less than 90% but greater or
                                                                            equal to 86% in aggregate</td>
                                                                        <td class="p-3">Less than 96% but greater or
                                                                            equal to 92% in aggregate</td>
                                                                        <td class="p-3">Less than 93% but greater or
                                                                            equal to 89% in aggregate</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-3 fw-bold text-center">25%</td>
                                                                        <td class="p-3">Less than 86% but greater or
                                                                            equal to 82% in aggregate</td>
                                                                        <td class="p-3">Less than 92% but greater or
                                                                            equal to 86% in aggregate</td>
                                                                        <td class="p-3">Less than 89% but greater or
                                                                            equal to 83% in aggregate</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="fw-bold mobile-para1 text-dark mt-3">Eligibility Criteria</h4>

                                                <ol class="text-dark mobile-para1" type="i">
                                                    <li>A student availing scholarship under Royal Merit Scholarship is
                                                        required to pay the one-time
                                                        Admission Fee, Registration Fee and Caution money (refundable) at
                                                        the time of admission.
                                                    </li>

                                                    <li>The scholarship is awarded annually and continuation in the
                                                        subsequent year is governed by
                                                        the norms laid down for the continuation of Royal Merit Scholarship.
                                                    </li>

                                                    <li>In case a student, availing Royal Merit Scholarship, wishes to avail
                                                        hostel/ transportation
                                                        facilities, he/she will have to pay the full hostel/ transportation
                                                        fees as prescribed for
                                                        other students.</li>

                                                    <li>The Scholarship may not be applicable for Courses Governed by
                                                        Regulatory Bodies (AICTE, COA,
                                                        PCI, INC, ANMHVC, BCI, etc.).</li>

                                                    <li>Change of programme after the award of Scholarship for a particular
                                                        programme is not
                                                        allowed. As such the scholarship awarded stands cancelled. If the
                                                        student still wishes to
                                                        apply for the scholarship, it needs to submit a fresh application
                                                        for the same.</li>

                                                    <li>The students can avail only one scholarship from any source in a
                                                        particular academic year.
                                                        If a student is found availing more than one scholarship during the
                                                        same academic year from
                                                        different sources, the scholarship awarded by the University will
                                                        stand cancelled for that
                                                        particular academic year, and the student will be liable to pay the
                                                        full course fee for that
                                                        academic year.</li>

                                                    <li>However, if a student wishes to retain the University’s scholarship
                                                        and withdraw the
                                                        scholarship received from other source(s) for the same academic
                                                        year, the student must
                                                        refund the full amount received from the other source(s) to the
                                                        University before availing
                                                        the University’s scholarship. The student is also required to submit
                                                        an undertaking to this
                                                        effect.</li>

                                                    <li>Final decision of granting scholarship lies with the University
                                                        Scholarship Committee and/or
                                                        Competent Authority/s.</li>
                                                </ol>

                                                <h4 class="fw-bold mobile-para1 text-dark">Continuation of Scholarship for
                                                    subsequent years will be
                                                    governed as follows –</h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Class attendance of the students must be 75% and above in all the
                                                        subjects in each semester
                                                        from the previous academic year.</li>
                                                    <li>To continue availing scholarship, a student must clear all the
                                                        papers in each semester and
                                                        should not carry any backlog in any semester from the previous
                                                        academic year and must pass
                                                        the semester/annual examination for promotion to the next year.</li>
                                                </ol>

                                                <h4 class="fw-bold mobile-para1 text-dark">Documents Required under the
                                                    above mentioned Scholarship:
                                                </h4>

                                                <ol class="text-dark mobile-para1">
                                                    <li>Scanned copies of the marksheets/ gradesheets from Class X onwards.
                                                    </li>
                                                </ol>

                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!---->

                {{-- <div>
                    <h3 class="headd3 text-dark fw-bold">Continuation of Scholarship for
                        subsequent
                        years will be governed
                        as follows – </h3>
                    <ol class="para1 text-dark">
                        <li>Class attendance of the students must be 75% and
                            above in
                            all the subjects in each
                            semester from the previous academic year.</li>
                        <p class="para1 text-dark">
                            <li>To continue availing scholarship, a student
                                must clear all
                                the papers in each
                                semester and should not carry any back log in any semester from the previous
                                academic
                                year and pass the
                                semester/annual examination for promotion to the next year.</li>
                    </ol>
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-left: 100px;">
                        <img src="mobile-assets/scholarship/1.jpg">
                    </div>
                    <div class="col-lg-6">
                        <img src="mobile-assets/scholarship/2.jpg">
                    </div>

                </div> --}}
            </div>

        </section>
    </div><!-- #page -->
@endsection
@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "OfferCatalog",
  "name": "Royal Global University Comprehensive Scholarship List",
  "description": "Details on the Royal Merit, Royal Endowment, Royal Suraksha (Security Personnel), and Hope for Manipur (Violence Affected Families) scholarships.",
  "url": "https://www.rgu.ac/scholarships",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "Royal Global University (RGU)",
    "sameAs": "https://www.rgu.ac/"
  },
  "itemListElement": [
    // --- 1. ROYAL MERIT - ON ADMISSION SCHOLARSHIP (Merit-Based) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Merit - On Admission Scholarship (Up to 100% Fee Waiver)"
      },
      "description": "Merit scholarship based on 10+2 or Graduation scores. Requires minimum 96% (CBSE) or 91% (HS/State Board) for 100% waiver, with a refundable Caution Money of Rs. 10000/- only.",
      "category": "Merit-based",
      "eligibleRegion": { "@type": "Country", "name": "IN" },
      "priceCurrency": "INR",
      "minValue": 25,
      "maxValue": 100,
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "Percentage of Annual Fee Waived"
      }
    },
    // --- 2. ROYAL SHAURYA (Security Personnel Wards) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Shaurya: Full Freeship for Wards of Braveheart Security Personnels (Military/Paramilitary/Police Forces)"
      },
      "description": "100% Freeship (Annual, Registration, Admission Fees waived) for wards of Defense/Paramilitary/Police Personnel who laid their lives, received gallantry awards, or expired on duty (N.E. India). Requires Rs. 10000/- refundable Caution Money only.",
      "category": "Special Category - Defense/Security",
      "eligibleRegion": { "@type": "Country", "name": "IN" },
      "priceCurrency": "INR",
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "100% Fee Waiver"
      }
    },
    // --- 3. ROYAL ENDOWMENT (Socio-Economic/Special) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Royal Endowment & Other Scholarship (Socio-Economic/Arts/Sports)"
      },
      "description": "Scholarships offering 25% or 50% on annual fees for special categories: Single Parent Wards, Wards of Teaching Professionals, Sports/Arts Participants (State/National), Differently-abled students, and Wards of Padma/Assam State Awardees.",
      "category": "Socio-Economic / Arts / Sports",
      "eligibleRegion": { "@type": "Country", "name": "IN" }
    },
    // --- 4. HOPE FOR MANIPUR SCHOLARSHIP (Disaster Relief) ---
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Product",
        "name": "Hope for Manipur Scholarship: 100% Admission Fee Waiver"
      },
      "description": "100% Admission Fee Waiver for students from violence affected families of Manipur, conditional on securing admission to UG or PG program.",
      "category": "Special Category - Violence Affected Families",
      "eligibleRegion": { "@type": "State", "name": "Manipur" },
      "valueAdded": {
        "@type": "StructuredValue",
        "name": "100% Admission Fee Waived"
      }
    }
  ]
}
</script>
@endpush

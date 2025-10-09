@extends('frontend.master')
@section('content')
    <section style="background-image: url(sarang/bg.svg);">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <section>
                <img src="mobile-assets/ncc/disclosure-banner-mob.png" alt="">
            </section>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <section>
                <img src="mobile-assets/ncc/disclosure-banner.png" alt="">
            </section>
        </div>

        <div class="container-fluid p-5">

            <div class="row">
                <div class="col-lg-6">
                    <div class="table-responsive bg-white  mb-3 ">
                        <table class="table  table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">About HEI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/preface" target="_blank"
                                            style="color: #27467A;">About Us: Overview</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/recognition-accreditation"
                                            target="_blank" style="color: #27467A;">Act, Statutes and Approvals</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="/institutional-development-plan" target="_blank" style="color: #27467A;">Institutional Development Plan</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Constituent Units/Affiliated Colleges, Affiliating University (in case of Colleges) Off- Campus/Off-shore
                                    campus/Learning Support Centres under ODL mode (wherever applicable)</td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/recognition-accreditation"
                                            target="_blank" style="color: #27467A;">Accreditation/Ranking status (NAAC,
                                            NBA NIRF)</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/recognition-accreditation"
                                            target="_blank" style="color: #27467A;">Recognition/Approval (2(f), 12B,
                                            etc. as applicable)</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/annual-report" target="_blank"
                                            style="color: #27467A;">Annual Reports</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="/annual-report" target="_blank"
                                            style="color: #27467A;">Annual Account including Balance Sheet, Income and
                                        Expenditure Account, Receipts and Payments Account along with Audit Report</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">GYAN SAGAR FOUNDATION alias ROYAL is a Society registered
                                        under Societies Registration Act, XXI of 1860. </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive bg-white">
                        <table class="table  table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Administration</th>
                                    <th scope="col" class="mobile-para1"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="mobile-para1">Chancellor </td>
                                    <td class="mobile-para1">Name: Dr. A.K.Pansari<br>Email: dtagarwal@rgu.ac<br>Mobile:
                                        9678009412<br><a href="https://rgu.ac/leadership" class="clickable-link"
                                            target="_blank">Visit Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Pro Chancellor </td>
                                    <td class="mobile-para1">Name: Sri. Anil Kumar Modi<br>Email:
                                        akmodi@rgu.ac<br>Mobile: 9678009412<br><a href="https://rgu.ac/leadership"
                                            class="clickable-link" target="_blank">Visit Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Vice- Chancellor </td>
                                    <td class="mobile-para1">Name: Prof. A.K.Buragohain<br>Email:
                                        vice-chancellor@rgu.ac<br>Mobile: 9954115220<br><a href="https://rgu.ac/leadership"
                                            class="clickable-link" target="_blank">Visit Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Registrar Administration </td>
                                    <td class="mobile-para1">Name: Dr. Diganta Munshi<br>Email:
                                        registrar@rgu.ac<br>Mobile: 81599 27035<br><a href="https://rgu.ac/leadership"
                                            class="clickable-link" target="_blank">Visit Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Registrar Academic </td>
                                    <td class="mobile-para1">Name: Dr. DN Singh<br>Email:
                                        registraracademic@rgu.ac<br>Mobile: 98000 04433<br><a
                                            href="https://rgu.ac/leadership" class="clickable-link" target="_blank">Visit
                                            Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Finance Officer </td>
                                    <td class="mobile-para1">Name: Mr. Vijay Sharma<br>Email: finance@rgu.ac<br>Mobile:
                                        95080 61811<br><a href="https://rgu.ac/leadership" class="clickable-link"
                                            target="_blank">Visit Profile</a> </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Controller of Examination </td>
                                    <td class="mobile-para1">Name: Dr. Narinder Kumar<br>Email: coe@rgu.ac<br>Mobile:
                                        95885 79381<br><a href="https://rgu.ac/leadership" class="clickable-link"
                                            target="_blank">Visit Profile</a> </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <div class="table-responsive bg-white  mb-3" style="border: none !important">
                        <table class="table table-hover mb-0" style="border: none !important">

                            <tbody>

                                <tr>
                                    <td class="mobile-para1"><a href="/chief-vigilance-officer" target="_blank" style="color: #27467A;">Chief Vigilance Officer</a></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="/ombudsperson" target="_blank" style="color: #27467A;">Ombudsperson</a></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/governing-body" target="_blank"
                                            style="color: #27467A;">Governing Body</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/board-of-management" target="_blank"
                                            style="color: #27467A;">Board of Management</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/academic-council" target="_blank"
                                            style="color: #27467A;">Academic Council</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">
                                        <a href="https://rgu.ac/schools-rgu" target="_blank" style="color: #27467A;">Board
                                            of Studies</a>

                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/internal-complaints-committee"
                                            target="_blank" style="color: #27467A;">Internal Complaint Committee</a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/deans" target="_blank"
                                            style="color: #27467A;">Academic Leadership - Dean of Schools</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">
                                        <a href="https://rgu.ac/schools-rgu" target="_blank"
                                            style="color: #27467A;">Academic Leadership - Head of Departments</a>

                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                    <div class="table-responsive bg-white mb-3">

                        <table class="table table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Alumni</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="mobile-para1">Alumni Association with details</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="table-responsive bg-white  mb-3 ">
                        <table class="table  table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Academics</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1">Details of Academic Programs
                                        (<a href="https://rgu.ac/schools-rgu" target="_blank"
                                            style="color: #27467A;">Diploma, UG & PG</a> | <a href="https://rgu.ac/phd"
                                            target="_blank" style="color: #27467A;">Ph.D.</a>)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/academic-calendar" target="_blank"
                                            style="color: #27467A;">Academic Calendar</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Statutes/Ordinances pertaining to Academic/Examinations
                                    </td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/schools-rgu" target="_blank"
                                            style="color: #27467A;">Schools/Departments/Centres</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Schools/Departments/Centres faculty wise/staff details
                                        with photographs</td>
                                </tr>


                                <tr>
                                    <td class="mobile-para1">List of UGC-recognized ODL/Online programs, if any</td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/library-Resources" target="_blank"
                                            style="color: #27467A;">Library</a></td>

                                </tr>

                                <tr>
                                    <td class="mobile-para1">Internal Quality Assurance Cell (IQAC)</td>
                                </tr>


                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/innovation" target="_blank"
                                            style="color: #27467A;">Academic collaboration</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive bg-white  mb-3 ">
                        <table class="table  table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Admission & Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1">Prospectus (including <a
                                            href="https://rgu.ac/admission-programs-fees-structure" target="_blank"
                                            style="color: #27467A;">Fee Structure</a> | <a
                                            href="https://heyzine.com/flip-book/fd544660d3.html" target="_blank"
                                            style="color: #27467A;">View Prospectus</a>)</td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1">Admission process and guidelines (<a
                                            href="https://rgu.ac/programs" target="_blank" style="color: #27467A;">View
                                            Programs</a> | <a href="https://rgu.ac/how-to-apply#" target="_blank"
                                            style="color: #27467A;">How to Apply</a>)</td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Fee Refund Policy</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive bg-white mb-3">

                        <table class="table table-hover mb-3">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Information Corner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1">RTI : Details of Central Public Information Officer (CPIO)
                                        and Appellate Authority (wherever applicable)</td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/" target="_blank"
                                            style="color: #27467A;">Circulars and Notices</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/" target="_blank"
                                            style="color: #27467A;">Announcements</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Newsletters</td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/media-corner" target="_blank"
                                            style="color: #27467A;">News, Recent events & Achievements</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="/jobs-vacancies" arget="_blank"
                                            style="color: #27467A;">Job openings</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Reservation Roster (wherever applicable)</td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1">Study in India</td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="https://heyzine.com/flip-book/adfd7889ba.html"
                                            target="_blank" style="color: #27467A;">Admission procedure and facilities
                                            provided to International Students</a></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>



                    <div class="table-responsive bg-white mb-3">

                        <table class="table  table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Infrastructure</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/infrastructure" target="_blank"
                                            style="color: #27467A;">Picture Gallery</a></td>
                                </tr>

                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/contact" target="_blank"
                                            style="color: #27467A;">Details with Phone Number, Official Email ID and
                                            Address, Location map</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/contact" target="_blank"
                                            style="color: #27467A;">Telephone Directory</a></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                    <div class="table-responsive bg-white mb-3">

                        <table class="table table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Student Life</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/games&sports" target="_blank"
                                            style="color: #27467A;">Sports facilities</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/student-affairs" target="_blank"
                                            style="color: #27467A;">NCC/NSS - Details</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/hostel-life" target="_blank"
                                            style="color: #27467A;">Hostel details</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/placements-introduction"
                                            target="_blank" style="color: #27467A;">Placement Cell and its
                                            activities</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/grievance" target="_blank"
                                            style="color: #27467A;">Details of Student Grievance Redressal Committee
                                            (SGRC) and Ombudsperson</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/medical-facility" target="_blank"
                                            style="color: #27467A;">Health Facilities</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/internal-complaints-committee"
                                            target="_blank" style="color: #27467A;">Internal Complaint Committee</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/anti-ragging" target="_blank"
                                            style="color: #27467A;">Anti-Ragging Cell</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/schemes-differently-abled"
                                            target="_blank" style="color: #27467A;">Facilities for differently-abled
                                            (e.g., barrier-free environment)</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="table-responsive bg-white mb-3">

                        <table class="table table-hover mb-0">
                            <thead style="background-color: #e48817; color: white;">
                                <tr>
                                    <th scope="col" class="mobile-para1 fw-bold">Research</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/research-devlopment" target="_blank"
                                            style="color: #27467A;">Research and Development Cell
                                            (including research and Consultancy Projects, Foreign Collaboration Industry
                                            Collaborations)</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/research-devlopment" target="_blank"
                                            style="color: #27467A;">Incubation Centre/Start- ups
                                            /Entrepreneurship Cell</a></td>
                                </tr>
                                <tr>
                                    <td class="mobile-para1"><a href="https://rgu.ac/research-devlopment" target="_blank"
                                            style="color: #27467A;">Central facilities</a></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>



        </div>
        </div>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
@endsection

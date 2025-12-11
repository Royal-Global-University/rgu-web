@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <section
        style="background-image: url('mobile-assets/school-rgu/bg.svg'); background-size: cover; padding-bottom: 50px; min-height: 100vh;">

        <h2 class="rgu-unique-headd1 text-center pt-5 pb-2">
            Schools and <span style="color: #FF9A1E;">Faculty</span>
        </h2>

        <div class="container">

            <div class="rgu-control-bar">

                <div class="rgu-buttons-group">
                    <a href="how-to-apply" target="_blank" class="rgu-top-btn">How to Apply</a>
                    <a href="placements-process" target="_blank" class="rgu-top-btn">Placements</a>
                    <a href="programs" target="_blank" class="rgu-top-btn">Eligibility & Selection Criteria</a>
                    <a href="admission-programs-fees-structure" target="_blank" class="rgu-top-btn">Fee Structure</a>
                </div>

                <div class="rgu-unique-search-wrapper">
                    <i class="fas fa-search search-icon-overlay"></i>
                    <input type="text" id="rguUniqueSearchInput" class="rgu-unique-search-input"
                        placeholder="Search Faculty..." disabled>

                    <div id="rguUniqueLoadingMsg"><i class="fas fa-circle-notch fa-spin"></i> Loading...</div>

                    <div id="rguUniqueSearchResults" class="rgu-unique-dropdown"></div>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="mobile-assets/school-rgu/ias-banner.png" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Integrated Civil Service Programme</h5>
                            <div class="mt-auto mb-4">
                                <div class="text-center">
                                    <a href="{{ route('ias-courses') }}"
                                        style="background-color: #27467A; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                        Department
                                    </a>
                                    <a href="{{ route('faculty-csp') }}"
                                        style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 0; text-align: center; width: 48%; text-decoration: none; display: inline-block;">
                                        Faculty
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/agri.png" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Agriculture (RSAG)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-agriculture">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="IAS Course"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-agriculture">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/soa-1.jpg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Architecture (RSA)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-architecture">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Architecture (RSA)"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-architecture">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/applied.001.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Applied & Pure Sciences (RSAPS)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-applied-pure-science">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Applied Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-applied-purescience">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/business.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Business (RSB)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-business">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Business (RSB)"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-business">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/behavioral.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Behavioral & Allied Sciences (RSBAS)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-psychology">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Behavioral Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-allied-sciences">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/rsbsc-school-header.jpeg"
                            class="img-fluid rounded" style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Bio-sciences (RSBSC)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-bio-science">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Bio-Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-bio-sciences">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/commerce.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Commerce (RSC)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-commerce">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Commerce (RSC)"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-commerce">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/media.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Communications & Media (RSCOM)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-communications-media">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Media (RSCOM)"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="rscom-faculty">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/design.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Design (RSD)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-design">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Design (RSD)"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-design">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/earth.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Environmental Sciences (RSEES)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-enviroment-science">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Environmental Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-environmental-earth">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/soet.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Engineering (RSET)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-engineering-technology">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Engineering (RSET)"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-engineeringtechnology">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/art.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Fine Arts (RSFA)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-fine-arts">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Fine Arts"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-finearts">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/fashion.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Fashion Design (RSFT)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-fashion-design">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Fashion Design"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-fashion-design">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/humanities.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Humanities (RSHSS)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-humanities">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Humanities"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-humanities-social">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/hotel-mgn.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Hotel Management (RSHM)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-hotel-management">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Hotel Management"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-hotel-management">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/it-school.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Information Technology (RSIT)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-information-technology">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="IT School"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-information-technology">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/law.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Law & Administration (RSLA)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-law">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Law School"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-law-administration">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/rgu-schools.003.jpeg"
                            class="img-fluid rounded" style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Life Sciences (RSLSC)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-life-science">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Life Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-lifesciences">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/rgu-campus.001.jpeg"
                            class="img-fluid rounded" style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Languages (RSL)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-languages">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Languages"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-languages">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/schools-library.jpeg"
                            class="img-fluid rounded" style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Library Sciences (RSLISC)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-library-information">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Library Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-librarysciences">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="assets/img/school-rgu/medical.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Medical & Allied Sciences (RSMAS)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="royal-s-school-of-medical-allied-science">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Medical Sciences"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-medical&allidesciences">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="assets/img/school-rgu/nursing.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Nursing (RSN)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-nursing">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Nursing"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-nursing">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="https://www.rgu.ac/mobile-assets/school-rgu/pharmacy.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Pharmacy (RSP)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-pharmacy">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Pharmacy"
                                    style="background:#FF9A1E; color:#fff; width:48%;" href="faculty-pharmacy">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="assets/img/school-rgu/travel.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Royal School of Travel & Tourism (RSTTM)</h5>
                            <div class="mt-auto d-flex justify-content-between">
                                <a class="rgu-unique-caption" style="background:#27467A; color:#fff; width:48%;"
                                    href="department-travel">Department</a>
                                <a class="rgu-unique-caption rgu-unique-school-link" data-school="Travel & Tourism"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="faculty-travel-tourism">Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="mobile-assets/school-rgu/IKS%20LOGO-new.jpeg" class="img-fluid rounded"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="rgu-unique-headd2 mb-4">Indian Knowledge System</h5>
                            <div class="mt-auto d-flex justify-content-between flex-wrap">
                                <a class="rgu-unique-caption mb-2" style="background:#27467A; color:#fff; width:48%;"
                                    href="indian-knowledge-system-cell-about">
                                    About IKS
                                </a>

                                <a class="rgu-unique-caption rgu-unique-school-link mb-2" data-school="IKS"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="indian-knowledge-system-cell-composition">
                                    Composition
                                </a>

                                <a class="rgu-unique-caption rgu-unique-school-link mb-2" data-school="IKS"
                                    style="background:#27467A; color:#fff; width:48%;"
                                    href="indian-knowledge-system-cell-events">
                                    Events
                                </a>

                                <a class="rgu-unique-caption rgu-unique-school-link mb-2" data-school="IKS"
                                    style="background:#FF9A1E; color:#fff; width:48%;"
                                    href="indian-knowledge-system-cell-syllabus">
                                    Syllabus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- style ccs --}}
    <style>
        /* --- TYPOGRAPHY --- */
        .rgu-unique-headd1 {

            font-size: 3rem;
            font-weight: 700;
            color: #27467A;
            margin-bottom: 50px;
        }

        .rgu-unique-headd2 {

            font-size: 1.4rem;
            font-weight: 600;
            color: #27467A;
        }

        .rgu-unique-caption {

            font-size: 1.6 rem;
            font-weight: 800;
            text-decoration: none;
            display: inline-block;
            padding: 10px 0;
            text-align: center;
            border-radius: 8px;
        }

        /* --- CONTROL BAR (Buttons + Search) --- */
        .rgu-control-bar {
            display: flex;
            justify-content: space-between;
            /* Buttons Left, Search Right */
            align-items: center;
            flex-wrap: wrap;
            /* Stack on mobile */
            gap: 20px;
            margin-bottom: 30px;
            padding-top: 20px;
        }

        .rgu-buttons-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* UPDATED BUTTON STYLE based on your image */
        .rgu-top-btn {
            background-color: #204073;
            /* Deep Blue from image */
            color: white !important;

            font-weight: 600;
            padding: 12px 24px;
            /* Taller padding like the image */
            border-radius: 6px;
            /* Slight curve, not round */
            font-size: 1.2 rem;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* Slight shadow */
            transition: all 0.3s ease;
            border: none;
            text-align: center;
        }

        .rgu-top-btn:hover {
            background-color: #FF9A1E;
            /* Orange on hover for interaction */
            transform: translateY(-2px);
            /* Slight lift effect */
            color: white !important;
        }

        /* Compact Search Container */
        .rgu-unique-search-wrapper {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        /* Small Search Input */
        .rgu-unique-search-input {
            width: 100%;
            padding: 10px 20px 10px 40px;
            /* Left padding for icon */
            border: 1px solid #ccc;
            border-radius: 50px;
            outline: none;
            background: white;

            font-size: 0.9rem;
            height: 45px;
            transition: border-color 0.3s;
        }

        .rgu-unique-search-input:focus {
            border-color: #FF9A1E;
            box-shadow: 0 0 5px rgba(255, 154, 30, 0.2);
        }

        .search-icon-overlay {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #27467A;
            pointer-events: none;
        }

        #rguUniqueLoadingMsg {
            text-align: right;
            font-size: 11px;
            color: #666;
            margin-top: 5px;
            margin-right: 10px;

        }

        /* Dropdown Results */
        .rgu-unique-dropdown {
            display: none;
            position: absolute;
            top: 110%;
            right: 0;
            width: 400px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            z-index: 10000;
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #eee;
        }

        @media (max-width: 991px) {
            .rgu-control-bar {
                flex-direction: column-reverse;
                /* Put search on top on mobile? Or keep standard column */
                align-items: stretch;
            }

            .rgu-buttons-group {
                justify-content: center;
            }

            .rgu-top-btn {
                flex: 1 1 45%;
                /* Buttons take up half width on mobile */
            }

            .rgu-unique-search-wrapper {
                max-width: 100%;
            }

            .rgu-unique-dropdown {
                width: 100%;
            }
        }

        /* Result Item Styles */
        .rgu-unique-result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .rgu-unique-result-item:hover {
            background-color: #f9fbff;
        }

        .rgu-unique-result-info strong {
            display: block;
            color: #27467A;
            font-size: 18px;

        }

        .rgu-unique-result-info small {
            color: #FF9A1E;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;

        }

        .rgu-unique-view-btn {
            background: #27467A;
            color: white !important;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;

        }

        .rgu-unique-view-btn:hover {
            background: #FF9A1E;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Unique variables
            const rguAllFacultyDataUnique = [];
            const rguSearchInputUnique = document.getElementById('rguUniqueSearchInput');
            const rguLoadingMsgUnique = document.getElementById('rguUniqueLoadingMsg');
            const rguResultsContainerUnique = document.getElementById('rguUniqueSearchResults');

            const facultyNameSelector = '.card-name';

            async function rguFetchAllFacultyUnique() {
                const schoolLinks = document.querySelectorAll('.rgu-unique-school-link');

                if (schoolLinks.length === 0) {
                    rguLoadingMsgUnique.innerHTML = "Error: No school buttons found.";
                    return;
                }

                if (window.location.protocol === 'file:') {
                    rguLoadingMsgUnique.innerHTML =
                        "<strong style='color:red'>Error:</strong> You are opening this file directly.<br>Search only works on a Local Server (Live Server).";
                    return;
                }

                const promises = Array.from(schoolLinks).map(async (link) => {
                    const url = link.href;
                    if (url.includes('#') || url === "") return;

                    const schoolName = link.getAttribute('data-school') ||
                        "Royal Global University";

                    try {
                        const response = await fetch(url);
                        if (response.ok) {
                            const text = await response.text();
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(text, 'text/html');

                            const names = doc.querySelectorAll(facultyNameSelector);

                            names.forEach(nameElement => {
                                const cleanName = nameElement.innerText.replace(/\s+/g, ' ')
                                    .trim();
                                if (cleanName.length > 2) {
                                    rguAllFacultyDataUnique.push({
                                        name: cleanName,
                                        school: schoolName,
                                        link: url
                                    });
                                }
                            });
                        }
                    } catch (error) {
                        console.warn("Could not load: " + url);
                    }
                });

                await Promise.all(promises);

                if (rguAllFacultyDataUnique.length > 0) {
                    rguLoadingMsgUnique.style.display = 'none';
                    rguSearchInputUnique.disabled = false;
                    rguSearchInputUnique.placeholder =
                        `Search among ${rguAllFacultyDataUnique.length} Faculty Members...`;
                } else {
                    rguLoadingMsgUnique.innerHTML = "Connected, but no faculty found. Check console (F12).";
                }
            }

            rguFetchAllFacultyUnique();

            rguSearchInputUnique.addEventListener('keyup', (e) => {
                const query = e.target.value.toLowerCase();
                rguResultsContainerUnique.innerHTML = '';

                if (query.length < 2) {
                    rguResultsContainerUnique.style.display = 'none';
                    return;
                }

                const filtered = rguAllFacultyDataUnique.filter(person =>
                    person.name.toLowerCase().includes(query)
                );

                if (filtered.length > 0) {
                    rguResultsContainerUnique.style.display = 'block';
                    filtered.forEach(person => {
                        const div = document.createElement('div');
                        div.className = 'rgu-unique-result-item';
                        div.innerHTML = `
                      <div class="rgu-unique-result-info">
                          <strong>${person.name}</strong>
                          <small>${person.school}</small>
                      </div>
                      <a href="${person.link}" class="rgu-unique-view-btn">View</a>
                  `;
                        rguResultsContainerUnique.appendChild(div);
                    });
                } else {
                    rguResultsContainerUnique.style.display = 'block';
                    rguResultsContainerUnique.innerHTML =
                        '<div style="padding:15px; text-align:center; color:#888; font-family:Montserrat;">No faculty found.</div>';
                }
            });

            document.addEventListener('click', function(e) {
                if (!document.querySelector('.rgu-unique-search-wrapper').contains(e.target)) {
                    rguResultsContainerUnique.style.display = 'none';
                }
            });
        });
    </script>
@endsection



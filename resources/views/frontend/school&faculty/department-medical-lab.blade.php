@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile" >
            @include('frontend/components/mobileheader')
          <img style="padding-top: 80px; position: relative;" src="mobile-assets/department-all/dept-medical-lab/mob-top.png" alt="">

          <div class="container">
        <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
          Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

          <div class="table-responsive">
          <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
            <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                <th class="text-light  font-weight-bold">SL. NO.</th>
                <th class="text-light  font-weight-bold">COURSES</th>
                <th class="text-light  font-weight-bold">DURATION</th>
                <th class="text-light  font-weight-bold">DETAILS</th>
            </thead>
            <tbody class="para1 bg-light">

                <tr class="align-middle">
                    <td>1.</td>
                    <td>
                        <p class="para1">
                        <strong style="color: #023e8a;" class="#">M.Sc. - Medical Laboratory Technology (MMLT)</strong>
                        </p>
                    </td>
                    <td class="para1">
                      2 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSc-Medical-Laboratory-MMLT"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                </tr>

                <tr class="align-middle">
                    <td>2.</td>
                    <td>
                        <p class="para1">
                        <strong style="color: #023e8a;" class="#">B.Sc. - Medical Laboratory Technology (BMLT)</strong>
                        </p>
                    </td>
                    <td class="para1">
                      3 Years + 1 Year Internship
                    </td>
                    <td>
                      <a target="_blank" href="programs-bsc-Medical-technology-bmlt"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                </tr>

            </tbody>
          </table>
        </div>

          </div>

          <img src="mobile-assets/department-all/dept-medical-lab/mob-btm.png" alt="">

        <div class="container pb-5 pt-3">

          <div>
            <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="font-weight-bold text-white">S.No.</th>
                      <th class="font-weight-bold text-white">Name</th>
                      <th class="font-weight-bold text-white">Designation</th>
                      <th class="font-weight-bold text-white">Purpose of the visit</th>
                      <th class="font-weight-bold text-white">Date of Visit</th>
                    </tr>
                  </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

                    <tr>
                        <td>1</td>
                        <td>Dr. Monsoomi Mahanta</td>
                        <td>Consultant Microbiologist, Ultracare diagnostic, Guwahati</td>
                        <td>Invited talk</td>
                        <td>09/08/2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dr. Surjana Chaliha Hazarika</td>
                        <td>Associate Professor, Dept of Microbiology, Gauhati Medical College &amp; Hospital</td>
                        <td>Invited talk</td>
                        <td>10/05/2024</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dr. Suranjana Chaliha Hazarika</td>
                        <td>Associate Professor, Dept. of Microbiology, GMCH</td>
                        <td>Invited talk on “Scope and Future of Medical Allied Sciences”</td>
                        <td>10/05/2024</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Prof. (Dr.) Ramesh C Deka</td>
                        <td>Distinguished Professor &amp; Adviser, RSMAS, RGU</td>
                        <td>Invited talk</td>
                        <td>08/05/2024</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Prof. R. C. Deka</td>
                        <td>Distinguished Professor and Advisor, RSMAS, RGU</td>
                        <td>Invited talk on “Research proposal”</td>
                        <td>08/05/2024</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Dr Areendam Barua & Dr. Sweta Bansali</td>
                        <td>Cancer Surgeon & Obstetrician and Gynecologist</td>
                        <td>Cancer awareness talk organized by MLT</td>
                        <td>05/05/2024</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Dr. Sweta Bansali</td>
                        <td>Obstetrician &amp; Gynaecologist, Swagat SSI &amp; NH</td>
                        <td>Awareness talk</td>
                        <td>02/05/2024</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Dr Areendam Barua</td>
                        <td>Cancer surgeon, Swagat SSI &amp; NH</td>
                        <td>Awareness talk</td>
                        <td>02/05/2024</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>Dr. Imliwati Longkumer</td>
                        <td>North East Cancer Hospital and Research Institute, Guwahati</td>
                        <td>Invited talk on “World Diabetes day”</td>
                        <td>08/11/2023</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Dr. Imliwati Longkumer</td>
                        <td>Biochemist/Researcher, Northeast Cancer Hospital and Research Institute, Guwahati</td>
                        <td>Invited talk</td>
                        <td>11/08/2023</td>
                    </tr>    </tbody>

                </table>
              </div>
            </div>
          </div>

          <div>
            <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            List of Guest <span style="color: #FF9A1E; font-weight: 500;">Invited</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>Sl. No.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Purpose of the Visit</th>
            <th>Date of Visit</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                 <tr>
            <td>1</td>
            <td>Dr. Imliwati Longkumer</td>
            <td>Biochemist/Researcher, Northeast Cancer Hospital and Research Institute, Guwahati</td>
            <td>Invited talk</td>
            <td>08-11-2023</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Dr Areendam Barua</td>
            <td>Cancer surgeon, Swagat SSI & NH</td>
            <td>Awarness talk</td>
            <td>05-02-2024</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dr. Sweta Bansali</td>
            <td>Obstetrician & Gynaecologist, Swagat SSI & NH</td>
            <td>Awarness talk</td>
            <td>05-02-2024</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Prof. (Dr.) Ramesh C Deka</td>
            <td>Distinguished Professor & Adviser, RSMAS, RGU</td>
            <td>Invited talk</td>
            <td>08-05-2024</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Dr. Surjana Chaliha Hazarika</td>
            <td>Associate Professor, Dept of Microbiology, Gauhati Medical College & Hospital</td>
            <td>Invited talk</td>
            <td>10-05-2024</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Dr. Monsoomi Mahanta</td>
            <td>Consultant Microbiologist, Ultracare diagnostic, Guwahati</td>
            <td>Invited talk</td>
            <td>09-08-2024</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Prof. (Dr.) Rajjyoti Das</td>
            <td>Department of Head and Neck Surgical Oncology, Dr. B. Borooah Cancer Institute, Guwahati</td>
            <td>Awarness talk</td>
            <td>04-02-2025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Dr. Sunita Shrotna</td>
            <td>MS, FRCS, Consultant Surgeon, Ashford and St. Peters Hospital, UK</td>
            <td>Awarness talk</td>
            <td>09-04-2025</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Dr. D. Jayarajan</td>
            <td>Associate Professor, Dept of MLT, The Assam Royal Global University</td>
            <td>Awarness talk</td>
            <td>23-04-2025</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="text-white">#</th>
                      <th class="text-white">Position in D-BoS</th>
                      <th class="text-white">Name and Designation</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                     <tr>
            <td>1</td>
            <td>Member</td>
            <td>Dr. D. Jayarajan, Associate Professor, Dept of MLT</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Member</td>
            <td>Ms. Anindita Dutta, Assistant Professor, Dept. of MLT</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div>
            <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>#</th>
            <th>Position</th>
            <th>Name and Designation</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                     <tr>
            <td>1</td>
            <td>Chairperson</td>
            <td>Dr. Abhijit Dutta</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Member Secretary</td>
            <td>Dr. Rupesh Kumar</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Member</td>
            <td>Dr. D. Jayarajan</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Member</td>
            <td>Prof. (Dr.) Ranjan Dutta Kalita</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Member</td>
            <td>Dr. Madhusmita Koch</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="p-2">
              <div class="row">
                <div class="col-lg-12">
                  <div class="accordion para1" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="false"
                          aria-controls="collapseOne"
                        >
                      <strong>
                        Under Graduate
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="row">
                            <a
                              href="assets/Departmentalpdf/AY 2022-23 MLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2022-23 MLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                            <a
                              href="assets/Departmentalpdf/AY 2023-2024 MLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2023-2024 MLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                      <strong>
                        Post Graduate
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="row">
                            <a
                              href="assets/Departmentalpdf/AY 2023-24 MMLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2023-24 MMLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                      <strong>
                        Doctoral Programme
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            ><a href="https://www.rgu.ac/.php"
                              >
                            <strong>
                            Click to View...
                          </strong></a
                            ></strong
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6"></div>
              </div>
            </div>
          </div>
        </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')
          <img src="mobile-assets/department-all/dept-medical-lab/web-top.png" alt="">

          <div class="container">
        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
          Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

          <div class="table-responsive">
          <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
            <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                <th class="text-light  font-weight-bold">SL. NO.</th>
                <th class="text-light  font-weight-bold">COURSES</th>
                <th class="text-light  font-weight-bold">DURATION</th>
                <th class="text-light  font-weight-bold">DETAILS</th>
            </thead>
            <tbody class="para1 bg-light">

                <tr class="align-middle">
                    <td>1.</td>
                    <td>
                        <p class="para1">
                        <strong style="color: #023e8a;" class="#">M.Sc. - Medical Laboratory Technology (MMLT)</strong>
                        </p>
                    </td>
                    <td class="para1">
                      2 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSc-Medical-Laboratory-MMLT"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                </tr>

                <tr class="align-middle">
                    <td>2.</td>
                    <td>
                        <p class="para1">
                        <strong style="color: #023e8a;" class="#">B.Sc. - Medical Laboratory Technology (BMLT)</strong>
                        </p>
                    </td>
                    <td class="para1">
                      3 Years + 1 Year Internship
                    </td>
                    <td>
                      <a target="_blank" href="programs-bsc-Medical-technology-bmlt"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                </tr>

            </tbody>
          </table>
        </div>

      </div>

          <img src="mobile-assets/department-all/dept-medical-lab/web-btm.png" alt="">


       <div class="container pb-5 pt-3">

          <div>
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="font-weight-bold text-white">S.No.</th>
                      <th class="font-weight-bold text-white">Name</th>
                      <th class="font-weight-bold text-white">Designation</th>
                      <th class="font-weight-bold text-white">Purpose of the visit</th>
                      <th class="font-weight-bold text-white">Date of Visit</th>
                    </tr>
                  </thead>

                 <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

        <tr><td>1</td><td>Dr. Monsoomi Mahanta</td><td>Consultant Microbiologist, Ultracare diagnostic, Guwahati</td><td>Invited talk</td><td>09/08/2024</td></tr>
        <tr><td>2</td><td>Dr. Surjana Chaliha Hazarika</td><td>Associate Professor, Dept of Microbiology, Gauhati Medical College &amp; Hospital</td><td>Invited talk</td><td>10/05/2024</td></tr>
        <tr><td>3</td><td>Dr. Suranjana Chaliha Hazarika</td><td>Associate Professor, Dept. of Microbiology, GMCH</td><td>Invited talk on “Scope and Future of Medical Allied Sciences”</td><td>10/05/2024</td></tr>
        <tr><td>4</td><td>Prof. (Dr.) Ramesh C Deka</td><td>Distinguished Professor &amp; Adviser, RSMAS, RGU</td><td>Invited talk</td><td>08/05/2024</td></tr>
        <tr><td>5</td><td>Prof. R. C. Deka</td><td>Distinguished Professor and Advisor, RSMAS, RGU</td><td>Invited talk on “Research proposal”</td><td>08/05/2024</td></tr>
        <tr><td>6</td><td>Dr Areendam Barua & Dr. Sweta Bansali</td><td>Cancer Surgeon & Obstetrician and Gynecologist</td><td>Cancer awareness talk organized by MLT</td><td>05/05/2024</td></tr>
        <tr><td>7</td><td>Dr. Sweta Bansali</td><td>Obstetrician &amp; Gynaecologist, Swagat SSI &amp; NH</td><td>Awareness talk</td><td>02/05/2024</td></tr>
        <tr><td>8</td><td>Dr Areendam Barua</td><td>Cancer surgeon, Swagat SSI &amp; NH</td><td>Awareness talk</td><td>02/05/2024</td></tr>

        <tr><td>9</td><td>Dr. Imliwati Longkumer</td><td>North East Cancer Hospital and Research Institute, Guwahati</td><td>Invited talk on “World Diabetes day”</td><td>08/11/2023</td></tr>
        <tr><td>10</td><td>Dr. Imliwati Longkumer</td><td>Biochemist/Researcher, Northeast Cancer Hospital and Research Institute, Guwahati</td><td>Invited talk</td><td>11/08/2023</td></tr>

                  </tbody>

                </table>
              </div>
            </div>
          </div>

          <div>
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            List of Guest <span style="color: #FF9A1E; font-weight: 500;">Invited</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>Sl. No.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Purpose of the Visit</th>
            <th>Date of Visit</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                 <tr>
            <td>1</td>
            <td>Dr. Imliwati Longkumer</td>
            <td>Biochemist/Researcher, Northeast Cancer Hospital and Research Institute, Guwahati</td>
            <td>Invited talk</td>
            <td>08-11-2023</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Dr Areendam Barua</td>
            <td>Cancer surgeon, Swagat SSI & NH</td>
            <td>Awarness talk</td>
            <td>05-02-2024</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dr. Sweta Bansali</td>
            <td>Obstetrician & Gynaecologist, Swagat SSI & NH</td>
            <td>Awarness talk</td>
            <td>05-02-2024</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Prof. (Dr.) Ramesh C Deka</td>
            <td>Distinguished Professor & Adviser, RSMAS, RGU</td>
            <td>Invited talk</td>
            <td>08-05-2024</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Dr. Surjana Chaliha Hazarika</td>
            <td>Associate Professor, Dept of Microbiology, Gauhati Medical College & Hospital</td>
            <td>Invited talk</td>
            <td>10-05-2024</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Dr. Monsoomi Mahanta</td>
            <td>Consultant Microbiologist, Ultracare diagnostic, Guwahati</td>
            <td>Invited talk</td>
            <td>09-08-2024</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Prof. (Dr.) Rajjyoti Das</td>
            <td>Department of Head and Neck Surgical Oncology, Dr. B. Borooah Cancer Institute, Guwahati</td>
            <td>Awarness talk</td>
            <td>04-02-2025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Dr. Sunita Shrotna</td>
            <td>MS, FRCS, Consultant Surgeon, Ashford and St. Peters Hospital, UK</td>
            <td>Awarness talk</td>
            <td>09-04-2025</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Dr. D. Jayarajan</td>
            <td>Associate Professor, Dept of MLT, The Assam Royal Global University</td>
            <td>Awarness talk</td>
            <td>23-04-2025</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <div>
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="text-white">#</th>
                      <th class="text-white">Position in D-BoS</th>
                      <th class="text-white">Name and Designation</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                     <tr>
            <td>1</td>
            <td>Member</td>
            <td>Dr. D. Jayarajan, Associate Professor, Dept of MLT</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Member</td>
            <td>Ms. Anindita Dutta, Assistant Professor, Dept. of MLT</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div>
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>#</th>
            <th>Position</th>
            <th>Name and Designation</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                     <tr>
            <td>1</td>
            <td>Chairperson</td>
            <td>Dr. Abhijit Dutta</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Member Secretary</td>
            <td>Dr. Rupesh Kumar</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Member</td>
            <td>Dr. D. Jayarajan</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Member</td>
            <td>Prof. (Dr.) Ranjan Dutta Kalita</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Member</td>
            <td>Dr. Madhusmita Koch</td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="p-2">
              <div class="row">
                <div class="col-lg-12">
                  <div class="accordion para1" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="false"
                          aria-controls="collapseOne"
                        >
                      <strong>
                        Under Graduate
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="row">
                            <a
                              href="assets/Departmentalpdf/AY 2022-23 MLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2022-23 MLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                            <a
                              href="assets/Departmentalpdf/AY 2023-2024 MLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2023-2024 MLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                      <strong>
                        Post Graduate
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="row">
                            <a
                              href="assets/Departmentalpdf/AY 2023-24 MMLT.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2023-24 MMLT.pdf
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                      <strong>
                        Doctoral Programme
                        </strong>
                        </button>
                      </h2>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            ><a href="https://www.rgu.ac/.php"
                              >
                            <strong>
                            Click to View...
                          </strong></a
                            ></strong
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6"></div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
@endsection

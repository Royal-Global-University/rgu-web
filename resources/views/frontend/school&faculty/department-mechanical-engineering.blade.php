@extends('frontend.master')
@section('content')
     <div style="background-image: url(mobile-assets/dept-mechanical/s2-bg-img-1.webp);">
        <div class="mobile" >
            @include('frontend/components/mobileheader')
          <img style="padding-top: 80px; position: relative;" class="pb-3" src="mobile-assets/dept-mechanical/mobile-mechanical.png" alt="">

          <div class="container pb-5">

            <div>
              <div>
                <h3
                  class="mobile-headd3 text-dark fw-bold p-3"
                  style="background-color: #c7daf9; color: #ffffff"
                >
                  5. Events & Achievements
                </h3>
              </div>
            </div>


            <div>
              <div>
                <h3
                  class="mobile-headd3 text-dark fw-bold p-3"
                  style="background-color: #c7daf9; color: #ffffff"
                >
                  6. Departmental Research Statistics
                </h3>
                <div class="text-dark">
                  <h3 class="mobile-headd3 text-dark fw-bold kd-split-text pt-2">
                    <a href="https://www.rgu.ac/research-and-development-rsc.php"
                      >Click More</a
                    >
                  </h3>
                </div>
              </div>
            </div>

            <div>
              <div>
                <h3
                  class="mobile-headd3 text-dark fw-bold p-3"
                  style="background-color: #c7daf9; color: #ffffff"
                >
                  7. The Board of Studies (BoS)
                </h3>
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
                    <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1</td>
                        <td>Convener (Ex-Officio)- Head of the Department</td>
                        <td>Mr. Biswajit Choudhury, Assistant Professor</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>
                          All Faculty members of the Department Members (Ex-Officio)
                        </td>
                        <td>
                          Mr. Zunaid Ahmed, Assistant Professor
                          <hr />
                          Mr. Ashok Talukdar, Assistant Professor
                          <hr />
                          Dr. Bishal Poddar, Assistant Professor
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>External Experts(Academic)</td>
                        <td>
                          Dr Bashab Jyoti Phukan, Associate Professor, Assam Engineering
                          College, Guwahati
                        </td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>External Experts(Industry)</td>
                        <td>
                          Mr. Sanjeeb Barman, Senior Manager, Commercial, Numaligarh
                          Refinery Limited
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div>
              <div>
                <h3
                  class="mobile-headd3 text-dark fw-bold p-3"
                  style="background-color: #c7daf9; color: #ffffff"
                >
                  8. The Departmental Research Committee (DRC)
                </h3>
                <div class="table-responsive">
                  <table
                    class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                  >
                    <thead class="text-white" style="background-color: #27467a">
                      <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Name of the Member</th>
                        <th class="text-white">Designation</th>
                        <th class="text-white">Designation in the committee</th>
                      </tr>
                    </thead>
                    <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1</td>
                        <td>Prof. (Dr.) Ankur Ganguly</td>
                        <td>Professor, Dean Academics and i/c Dean, RSET &amp; RSIT</td>
                        <td>Chairperson</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Dr. Bishal Podder</td>
                        <td>Assistant Professor, Mechanical Engineering</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Mr. Biswajit Choudhury</td>
                        <td>Assistant Professor, Mechanical Engineering</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Mr. Ashok Talukdar</td>
                        <td>Assistant Professor, Mechanical Engineering</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Prof. (Dr.) Anuradha Devi</td>
                        <td>Professor, Dean, RSAPS</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Prof. (Dr.) Arnab Sarma</td>
                        <td>Professor, Civil Engineering, HoD</td>
                        <td>Member</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div>
              <h3
                class="mobile-headd3 text-dark fw-bold p-3"
                style="background-color: #c7daf9; color: #ffffff"
              >
                9. Course Structure & Syllabus
              </h3>
              <div class="p-2">
                <h3 class="mobile-headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion mobile-para1" id="accordionExample">
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
                                href="assets/Departmentalpdf/AY 2024-25 Mechanical Engineering.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i> AY 2024-25 Mechanical
                                Engineering.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/Old Syllabus BTech Mechanical Engineering.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i> Old Syllabus BTech
                                Mechanical Engineering.pdf <i class="fa fa-download"></i>
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
                          <div class="accordion-body"></div>
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
                            <a
                              href="doctoral-programme.html"
                              class="mobile-para1"
                              target="_blank"
                              >
                            <strong>
                            Click to View...
                          </strong>
                            </a
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
        <img class="pb-3" src="mobile-assets/dept-mechanical/web-mechanical.png" alt="">

        <div class="container pb-5">

          <div>
            <div>
              <h3
                class="headd3 text-dark fw-bold p-3"
                style="background-color: #c7daf9; color: #ffffff"
              >
                5. Events & Achievements
              </h3>
            </div>
          </div>


          <div>
            <div>
              <h3
                class="headd3 text-dark fw-bold p-3"
                style="background-color: #c7daf9; color: #ffffff"
              >
                6. Departmental Research Statistics
              </h3>
              <div class="text-dark">
                <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                  <a href="https://www.rgu.ac/research-and-development-rsc.php"
                    >Click More</a
                  >
                </h3>
              </div>
            </div>
          </div>

          <div>
            <div>
              <h3
                class="headd3 text-dark fw-bold p-3"
                style="background-color: #c7daf9; color: #ffffff"
              >
                7. The Board of Studies (BoS)
              </h3>
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
                      <td>Convener (Ex-Officio)- Head of the Department</td>
                      <td>Mr. Biswajit Choudhury, Assistant Professor</td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>
                        All Faculty members of the Department Members (Ex-Officio)
                      </td>
                      <td>
                        Mr. Zunaid Ahmed, Assistant Professor
                        <hr />
                        Mr. Ashok Talukdar, Assistant Professor
                        <hr />
                        Dr. Bishal Poddar, Assistant Professor
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>External Experts(Academic)</td>
                      <td>
                        Dr Bashab Jyoti Phukan, Associate Professor, Assam Engineering
                        College, Guwahati
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>External Experts(Industry)</td>
                      <td>
                        Mr. Sanjeeb Barman, Senior Manager, Commercial, Numaligarh
                        Refinery Limited
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <div>
              <h3
                class="headd3 text-dark fw-bold p-3"
                style="background-color: #c7daf9; color: #ffffff"
              >
                8. The Departmental Research Committee (DRC)
              </h3>
              <div class="table-responsive">
                <table
                  class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                >
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="text-white">#</th>
                      <th class="text-white">Name of the Member</th>
                      <th class="text-white">Designation</th>
                      <th class="text-white">Designation in the committee</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                    <tr>
                      <td>1</td>
                      <td>Prof. (Dr.) Ankur Ganguly</td>
                      <td>Professor, Dean Academics and i/c Dean, RSET &amp; RSIT</td>
                      <td>Chairperson</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dr. Bishal Podder</td>
                      <td>Assistant Professor, Mechanical Engineering</td>
                      <td>Member</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Mr. Biswajit Choudhury</td>
                      <td>Assistant Professor, Mechanical Engineering</td>
                      <td>Member</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Mr. Ashok Talukdar</td>
                      <td>Assistant Professor, Mechanical Engineering</td>
                      <td>Member</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Prof. (Dr.) Anuradha Devi</td>
                      <td>Professor, Dean, RSAPS</td>
                      <td>Member</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Prof. (Dr.) Arnab Sarma</td>
                      <td>Professor, Civil Engineering, HoD</td>
                      <td>Member</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              9. Course Structure & Syllabus
            </h3>
            <div class="p-2">
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
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
                              href="assets/Departmentalpdf/AY 2024-25 Mechanical Engineering.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> AY 2024-25 Mechanical
                              Engineering.pdf <i class="fa fa-download"></i>
                            </a>
                            <a
                              href="assets/Departmentalpdf/Old Syllabus BTech Mechanical Engineering.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> Old Syllabus BTech
                              Mechanical Engineering.pdf <i class="fa fa-download"></i>
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
                        <div class="accordion-body"></div>
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
                          <a
                            href="doctoral-programme.html"
                            class="para1"
                            target="_blank"
                            >
                          <strong>
                          Click to View...
                        </strong>
                          </a
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

@extends('frontend.master')
@section('content')
        <div style="background-image: url(mobile-assets/dept-environmental/s2-bg-img-1.webp);">
          <div class="mobile" >
            @include('frontend/components/mobileheader')
            <div style="padding-top: 80px; position: relative;">
              <img src="mobile-assets/dept-environmental/mobile-environmental.png" alt="">
            </div>

            <div class="container pb-5" style="text-align: justify;">
              <div>
                <div>
                  <h3
                    class="mobile-headd3 text-dark fw-bold p-3"
                    style="background-color: #c7daf9; color: #ffffff"
                  >
                    5. Events & Achievements
                  </h3>
                  <div></div>
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
                      <a href="#">Click More</a>
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
                  <div>
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
                          <td>
                            Dr. Pallabi Borah, Coordinator of the Department of
                            Environmental Science
                          </td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>
                            All Faculty members of the Department Members (Ex-Officio)
                          </td>
                          <td>
                            Prof. Kushal Kumar Baruah, Professor and Dean of RSEES
                            <hr />
                            Dr. Demsai Reang, Assistant Professor, Dept. of Environmental
                            Science
                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>External Experts</td>
                          <td>
                            Prof. Kali Prasad Sarma, Retd. Professor and Head, Department of
                            Environmental Science, Tezpur University
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
                  <div>
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
                          <td>Dr. Pallabi Borah</td>
                          <td>Associate Professor, Department of Environmental Science</td>
                          <td>Chairperson</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Prof. Kushal Kumar Baruah</td>
                          <td>Professor and Dean, RSEES</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Dr. Demsai Reang</td>
                          <td>Assistant Professor, Dept. of Environmental Science</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Dr. Roshmi Boruah</td>
                          <td>Assistant Professor, Dept. of Geology</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Dr. Pubalee Sarmah</td>
                          <td>Assistant Professor, Dept. of Chemistry</td>
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
                            ><strong>
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
                            <div class="accordion-body"></div>
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
                              <div class="row mobile-para1">
                                <a
                                  href="assets/Departmentalpdf/AY 2022-23 M.Sc. in ENV. Sc..pdf"
                                  target="_blank"
                                >
                                  <i class="fa fa-file-text px-2"></i>AY 2022-23 M.Sc. in ENV.
                                  Sc..pdf <i class="fa fa-download"></i>
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
                            ><strong>
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
                              </a>
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
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <img class="pb-3" src="mobile-assets/dept-environmental/web-environmental.png" alt="">

              <div class="container pb-5" style="text-align: justify;">
        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              5. Events & Achievements
            </h3>
            <div></div>
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
                <a href="#">Click More</a>
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
            <div>
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
                    <td>
                      Dr. Pallabi Borah, Coordinator of the Department of
                      Environmental Science
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Prof. Kushal Kumar Baruah, Professor and Dean of RSEES
                      <hr />
                      Dr. Demsai Reang, Assistant Professor, Dept. of Environmental
                      Science
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>External Experts</td>
                    <td>
                      Prof. Kali Prasad Sarma, Retd. Professor and Head, Department of
                      Environmental Science, Tezpur University
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
            <div>
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
                    <td>Dr. Pallabi Borah</td>
                    <td>Associate Professor, Department of Environmental Science</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Prof. Kushal Kumar Baruah</td>
                    <td>Professor and Dean, RSEES</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Demsai Reang</td>
                    <td>Assistant Professor, Dept. of Environmental Science</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Roshmi Boruah</td>
                    <td>Assistant Professor, Dept. of Geology</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. Pubalee Sarmah</td>
                    <td>Assistant Professor, Dept. of Chemistry</td>
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
                      ><strong>
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
                      <div class="accordion-body"></div>
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
                        <div class="row para1">
                          <a
                            href="assets/Departmentalpdf/AY 2022-23 M.Sc. in ENV. Sc..pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i>AY 2022-23 M.Sc. in ENV.
                            Sc..pdf <i class="fa fa-download"></i>
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
                      ><strong>
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
                        </a>
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

      <!-- End testimonials-->
            </div>
          </div>
@endsection

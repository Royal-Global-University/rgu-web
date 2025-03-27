@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-geology/s2-bg-img-1.webp);">
      <div class="mobile" >
        @include('frontend/components/mobileheader')
        <img style="padding-top: 80px; position: relative;" class="pb-3" src="mobile-assets/dept-geology/geology.png" alt="">

        <div class="container pb-5">

          <div>
            <h3
              class="mobile-headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              2. Vision & Mission of the Department
            </h3>
            <div class="p-2">
              <h3 class="mobile-headd3 text-dark fw-bold kd-split-text pt-2">Vision -</h3>
              <p class="mobile-para1 text-dark">
                To be a leading center of geological excellence, providing globally
                integrated educational opportunities that empower students to become
                adept geoscientists, contributing to sustainable development and
                environmental stewardship on a national and international scale.
              </p>
              <h3 class="mobile-headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
              <ol class="mobile-para1 text-dark">
                <li>
                  To achieve academic excellence by delivering research-intensive
                  programmes and integrating industry-oriented education to prepare
                  students for successful careers in evolving geological and
                  environmental sectors.
                </li>
                <li>
                  To Incorporate community service initiatives to instill ethical
                  conduct, social responsibility, and compassion among our students,
                  faculty, and staff, creating geologists who are not only technically
                  proficient but also socially conscious.
                </li>
                <li>
                  To give back responsible geologists who are not only academically
                  proficient but also compassionate and ethical leaders, dedicated to
                  making positive contributions to society and actively participating in
                  the global community.
                </li>
              </ol>
            </div>
          </div>

          <div>
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
                        <td>Mr. Rajdeep Deb, Co-ordinator, Department of Geology</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>
                          All Faculty members of the Department Members (Ex-Officio)
                        </td>
                        <td>
                          Prof. Hemangi D. Sarma, Senior Professor, Department of
                          Geology
                          <hr />
                          Mr. Amarjyoti Borah, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Roshmi Boruah, Assistant Professor, Department of Geology
                          <hr />
                          Dr. Neeta Moni Sharma, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Abhijit Gogoi, Assistant Professor, Department of Geology
                          <hr />
                          Dr. Nishanta Saharia, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Pritom Borah, Assistant Professor, Department of Geology
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>External Experts</td>
                        <td>
                          Dr. Jayanta Jivan Laskar,
                          AssociateProfessor,DepartmentofGeologicalSciences, Gauhati
                          University
                          <hr />
                          Prof. Shantanu Sharma, Professor, Department of Geology,
                          Cotton University
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
                        <th class="text-white">Content</th>
                        <th class="text-white">Name of the Member</th>
                        <th class="text-white">Designation</th>
                        <th class="text-white">Designation in the committee</th>
                      </tr>
                    </thead>
                    <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1.</td>
                        <td>Head of the Department</td>
                        <td>Dr. Roshmi Boruah</td>
                        <td>Assistant Professor&amp; Coordinator</td>
                        <td>Chairperson</td>
                      </tr>
                      <tr>
                        <td rowspan="2">2.</td>
                        <td rowspan="2" class="align-middle">Two Professors</td>
                        <td>Prof. (Dr.) Hemangi Deka Sarma</td>
                        <td>Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) B.S. Mipun</td>
                        <td>Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>
                          Two Associate Professors – one of them will be the member
                          secretary
                        </td>
                        <td>Dr. Biswajit Sharma</td>
                        <td>Associate Professor, Department of Physics (RSAPS)</td>
                        <td>Member Secretary</td>
                      </tr>
                      <tr>
                        <td rowspan="2">4.</td>
                        <td rowspan="2" class="align-middle">
                          Two Assistant Professors holding Ph.D. degree
                        </td>
                        <td>Dr. Abhijit Gogoi</td>
                        <td>Assistant Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>Dr. Nishanta Sahariah</td>
                        <td>Assistant Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td rowspan="3">5.</td>
                        <td rowspan="3" class="align-middle">
                          Three external members not below the rank of Professors,
                          including members from an allied department, who will be
                          nominated by the URC
                        </td>
                        <td>Prof. (Dr.) Amarendra Rajput</td>
                        <td>Professor, Department of Physics (RSAPS)</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Parag Phukan</td>
                        <td>
                          Professor, Department of Geological Sciences, Gauhati
                          University
                        </td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Santanu Sarma</td>
                        <td>Professor, Department of Geology, Cotton University</td>
                        <td>External Member</td>
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
                                href="assets/Departmentalpdf/AY 2022-23 B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2022-23 B.Sc
                                Geology.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/AY 2023-24 B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2023-24 B.Sc
                                Geology.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/Old Syllabus B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>Old Syllabus B.Sc
                                Geology.pdf
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
                                href="assets/Departmentalpdf/AY 2023-24 M.Sc Geology Syllabus.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2023-24 M.Sc Geology
                                Syllabus.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/AY 2021-22 M.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i> AY 2021-22 M.Sc
                                Geology.pdf <i class="fa fa-download"></i>
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

      </div>

      <div class="website">
        @include('frontend/components/aheader')
        <img class="pb-3" src="mobile-assets/dept-geology/webgeology.png" alt="">

        <div class="container pb-5">

          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              2. Vision & Mission of the Department
            </h3>
            <div class="p-2">
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Vision -</h3>
              <p class="para1 text-dark">
                To be a leading center of geological excellence, providing globally
                integrated educational opportunities that empower students to become
                adept geoscientists, contributing to sustainable development and
                environmental stewardship on a national and international scale.
              </p>
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
              <ol class="para1 text-dark">
                <li>
                  To achieve academic excellence by delivering research-intensive
                  programmes and integrating industry-oriented education to prepare
                  students for successful careers in evolving geological and
                  environmental sectors.
                </li>
                <li>
                  To Incorporate community service initiatives to instill ethical
                  conduct, social responsibility, and compassion among our students,
                  faculty, and staff, creating geologists who are not only technically
                  proficient but also socially conscious.
                </li>
                <li>
                  To give back responsible geologists who are not only academically
                  proficient but also compassionate and ethical leaders, dedicated to
                  making positive contributions to society and actively participating in
                  the global community.
                </li>
              </ol>
            </div>
          </div>

          <div>
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
                        <td>Mr. Rajdeep Deb, Co-ordinator, Department of Geology</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>
                          All Faculty members of the Department Members (Ex-Officio)
                        </td>
                        <td>
                          Prof. Hemangi D. Sarma, Senior Professor, Department of
                          Geology
                          <hr />
                          Mr. Amarjyoti Borah, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Roshmi Boruah, Assistant Professor, Department of Geology
                          <hr />
                          Dr. Neeta Moni Sharma, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Abhijit Gogoi, Assistant Professor, Department of Geology
                          <hr />
                          Dr. Nishanta Saharia, Assistant Professor, Department of
                          Geology
                          <hr />
                          Dr. Pritom Borah, Assistant Professor, Department of Geology
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>External Experts</td>
                        <td>
                          Dr. Jayanta Jivan Laskar,
                          AssociateProfessor,DepartmentofGeologicalSciences, Gauhati
                          University
                          <hr />
                          Prof. Shantanu Sharma, Professor, Department of Geology,
                          Cotton University
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
                        <th class="text-white">Content</th>
                        <th class="text-white">Name of the Member</th>
                        <th class="text-white">Designation</th>
                        <th class="text-white">Designation in the committee</th>
                      </tr>
                    </thead>
                    <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                      <tr>
                        <td>1.</td>
                        <td>Head of the Department</td>
                        <td>Dr. Roshmi Boruah</td>
                        <td>Assistant Professor&amp; Coordinator</td>
                        <td>Chairperson</td>
                      </tr>
                      <tr>
                        <td rowspan="2">2.</td>
                        <td rowspan="2" class="align-middle">Two Professors</td>
                        <td>Prof. (Dr.) Hemangi Deka Sarma</td>
                        <td>Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) B.S. Mipun</td>
                        <td>Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>
                          Two Associate Professors – one of them will be the member
                          secretary
                        </td>
                        <td>Dr. Biswajit Sharma</td>
                        <td>Associate Professor, Department of Physics (RSAPS)</td>
                        <td>Member Secretary</td>
                      </tr>
                      <tr>
                        <td rowspan="2">4.</td>
                        <td rowspan="2" class="align-middle">
                          Two Assistant Professors holding Ph.D. degree
                        </td>
                        <td>Dr. Abhijit Gogoi</td>
                        <td>Assistant Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td>Dr. Nishanta Sahariah</td>
                        <td>Assistant Professor</td>
                        <td>Member</td>
                      </tr>
                      <tr>
                        <td rowspan="3">5.</td>
                        <td rowspan="3" class="align-middle">
                          Three external members not below the rank of Professors,
                          including members from an allied department, who will be
                          nominated by the URC
                        </td>
                        <td>Prof. (Dr.) Amarendra Rajput</td>
                        <td>Professor, Department of Physics (RSAPS)</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Parag Phukan</td>
                        <td>
                          Professor, Department of Geological Sciences, Gauhati
                          University
                        </td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Santanu Sarma</td>
                        <td>Professor, Department of Geology, Cotton University</td>
                        <td>External Member</td>
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
                                href="assets/Departmentalpdf/AY 2022-23 B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2022-23 B.Sc
                                Geology.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/AY 2023-24 B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2023-24 B.Sc
                                Geology.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/Old Syllabus B.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>Old Syllabus B.Sc
                                Geology.pdf
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
                                href="assets/Departmentalpdf/AY 2023-24 M.Sc Geology Syllabus.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i>AY 2023-24 M.Sc Geology
                                Syllabus.pdf <i class="fa fa-download"></i>
                              </a>
                              <a
                                href="assets/Departmentalpdf/AY 2021-22 M.Sc Geology.pdf"
                                target="_blank"
                              >
                                <i class="fa fa-file-text px-2"></i> AY 2021-22 M.Sc
                                Geology.pdf <i class="fa fa-download"></i>
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



        </div>
      </div>
      </div>
@endsection

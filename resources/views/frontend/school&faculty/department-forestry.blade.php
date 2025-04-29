@extends('frontend.master')
@section('content')
        <div style="background-image: url(mobile-assets/dept-forestry/s2-bg-img-1.webp);">

      <div class="mobile" >
        @include('frontend/components/mobileheader')
        <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-forestry/mobile-forestry.png" alt="">

        <div class="container pb-5 pt-3">

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              5. Events & Achievements
            </h3>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              6. Departmental Research Statistics
            </h3>
            <div class="text-dark">
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                <a href="https://www.rgu.ac/research-and-development-rsaps-physics.php">Click More</a>
              </h3>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              7. The Board of Studies (BoS)
            </h3>
            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="text-white">#</th>
                    <th class="text-white">Position in S-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>Prof. Nikhil Kumar Chrungoo, Dean, RSLSC, RGU</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                    <td>Dr. Anushree Baruah, RSLSC, RGU</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Professors of the School Members (Ex-Officio)</td>
                    <td>Prof. M.R Nath, Professor, Dept of Botany</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              8. The Departmental Research Committee (DRC)
            </h3>
            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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
                    <td>Dr. Pallabi Borah</td>
                    <td>Assistant Professor &amp; Coordinator, Dept. of Forestry</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Two Professors</td>
                    <td>Mr. Arvind Madhav Singh</td>
                    <td>Professor (Adjunct), Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3.</td>
                    <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                    <td>Dr. Demsai Reang</td>
                    <td>Assistant Professor, Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. Paul Lalremsang</td>
                    <td>Assistant Professor, Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
            9. Course Structure & Syllabus
          </h3>
          <div class="p-2">
            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
            <div class="row">
              <div class="col-lg-12">
                <div class="accordion para1" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <strong>Under Graduate</strong>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <a href="assets/Departmentalpdf/AY 2024-25 BSC - FORESTRY.pdf" target="_blank">
                            <i class="fa fa-file-text px-2"></i> AY 2024-25 BSC - FORESTRY.pdf <i class="fa fa-download"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Post Graduate</strong>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <a href="assets/Departmentalpdf/AY 2024-25 MSc Forestry.pdf" target="_blank">
                            <i class="fa fa-file-text px-2"></i> AY 2024-25 MSc Forestry.pdf <i class="fa fa-download"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Doctoral Programme</strong>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a href="doctoral-programme" class="para1" target="_blank">
                          <strong>Click to View...</strong>
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
        @include('frontend/components/aheader')
        <img src="mobile-assets/dept-forestry/web-forestry.png" alt="">

        <div class="container pb-5 pt-3">

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              1. Events & Achievements
            </h3>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              2. Departmental Research Statistics
            </h3>
            <div class="text-dark">
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                <a href="https://www.rgu.ac/research-and-development-rsaps-physics.php">Click More</a>
              </h3>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              3. The Board of Studies (BoS)
            </h3>
            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="text-white">#</th>
                    <th class="text-white">Position in S-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>Prof. Nikhil Kumar Chrungoo, Dean, RSLSC, RGU</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                    <td>Dr. Anushree Baruah, RSLSC, RGU</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Professors of the School Members (Ex-Officio)</td>
                    <td>Prof. M.R Nath, Professor, Dept of Botany</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
              4. The Departmental Research Committee (DRC)
            </h3>
            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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
                    <td>Dr. Pallabi Borah</td>
                    <td>Assistant Professor &amp; Coordinator, Dept. of Forestry</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Two Professors</td>
                    <td>Mr. Arvind Madhav Singh</td>
                    <td>Professor (Adjunct), Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3.</td>
                    <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                    <td>Dr. Demsai Reang</td>
                    <td>Assistant Professor, Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. Paul Lalremsang</td>
                    <td>Assistant Professor, Dept. of Forestry</td>
                    <td>Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
            5. Course Structure & Syllabus
          </h3>
          <div class="p-2">
            <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
            <div class="row">
              <div class="col-lg-12">
                <div class="accordion para1" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <strong>Under Graduate</strong>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <a href="assets/Departmentalpdf/AY 2024-25 BSC - FORESTRY.pdf" target="_blank">
                            <i class="fa fa-file-text px-2"></i> AY 2024-25 BSC - FORESTRY.pdf <i class="fa fa-download"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Post Graduate</strong>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <a href="assets/Departmentalpdf/AY 2024-25 MSc Forestry.pdf" target="_blank">
                            <i class="fa fa-file-text px-2"></i> AY 2024-25 MSc Forestry.pdf <i class="fa fa-download"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Doctoral Programme</strong>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a href="doctoral-programme" class="para1" target="_blank">
                          <strong>Click to View...</strong>
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
@endsection

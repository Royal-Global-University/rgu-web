@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-Info-technology/s2-bg-img-1.webp);">
          <div class="mobile" >
            @include('frontend/components/mobileheader')
        <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-Info-technology/mobile-information-tech.png" alt="">

        <div class="container pb-5 pt-3">

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
            <a href="#"><b>Click More</b></a>
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
                <th class="text-white">Position in S-BoS</th>
                <th class="text-white">Name and Designation</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Convener (Ex-Officio)- Head of the Department</td>
                <td>Prof. (Dr.) Ankur Ganguly, Dean Academics, Dean-RSET/RSIT</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Members (Ex-Officio)</td>
                <td>
                  Dr. Anupam Das, Associate Professor, HoD , RSIT
                  <hr />
                  Dr. Ishita Chakraborty, Associate Professor, HoD Dept of CSE,
                  RSET, RGU
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Subhrajyoti Bordoloi, HoD, Dept of Computer
                  Applications, AEC
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>Mr. Anup Kr. Prasad, Tech Lead</td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Mrs. Ankita G. Agarwala, Assistant Professor, RSIT, RGU
                  <hr />
                  Mr. Saurabh Sutradhar, Assistant Professor, Dept Of CSE, RSET,
                  RGU
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Registrar, Member Secretary (Ex-officio)</td>
                <td>Dr. D N Singh or his nominee</td>
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
                <th class="text-white">Content</th>
                <th class="text-white">Name of the Member</th>
                <th class="text-white">Designation</th>
                <th class="text-white">Designation in the committee</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Head of the Department</td>
                <td>Dr. Raghavendra Prasad</td>
                <td>Associate Professor</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2</td>
                <td rowspan="2" class="align-middle">Professors</td>
                <td>Prof. Ankur Ganguly</td>
                <td>Professor</td>
                <td>Professor</td>
              </tr>
              <tr>
                <td>Prof. Rashel Sarkar</td>
                <td>Professor</td>
                <td>Professor</td>
              </tr>
              <tr>
                <td rowspan="2">3</td>
                <td rowspan="2" class="align-middle">
                  Associate Professors – one of them will be the member secretary
                </td>
                <td>Dr. Anupam Das</td>
                <td>Associate Professor</td>
                <td>Member Secretary</td>
              </tr>
              <tr>
                <td>Dr. Israfil Hussain</td>
                <td>Associate Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Sumi Kankana Dewan</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td rowspan="3">5</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof. Arnab Kumar Sarma</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. Kamal Debnath</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. Hiren Deva Sarma</td>
                <td>Professor</td>
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
                        href="assets/Departmentalpdf/AY  2022-23 BCA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BCA.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 Integrated BSC IT MSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 Integrated BSC
                        IT MSC IT.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2022-23 BSC(IT).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BSC(IT).pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-24 BCA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BCA.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-24 BSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BSC IT.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus B. Sc. IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> Old Syllabus B. Sc. IT.pdf
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
                        href="assets/Departmentalpdf/AY 2021-22 Integrated BSC IT MSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 Integrated BSC
                        IT MSC IT.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 M. Sc. IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 M. Sc. IT.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 MCA-1.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 MCA-1.pdf
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

          <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-Info-technology/web-information-tech.png" alt="">

            <div class="container pb-5 pt-3">

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
            <a href="#"><b>Click More</b></a>
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
                <th class="text-white">Position in S-BoS</th>
                <th class="text-white">Name and Designation</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Convener (Ex-Officio)- Head of the Department</td>
                <td>Prof. (Dr.) Ankur Ganguly, Dean Academics, Dean-RSET/RSIT</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Members (Ex-Officio)</td>
                <td>
                  Dr. Anupam Das, Associate Professor, HoD , RSIT
                  <hr />
                  Dr. Ishita Chakraborty, Associate Professor, HoD Dept of CSE,
                  RSET, RGU
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Subhrajyoti Bordoloi, HoD, Dept of Computer
                  Applications, AEC
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>Mr. Anup Kr. Prasad, Tech Lead</td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Mrs. Ankita G. Agarwala, Assistant Professor, RSIT, RGU
                  <hr />
                  Mr. Saurabh Sutradhar, Assistant Professor, Dept Of CSE, RSET,
                  RGU
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Registrar, Member Secretary (Ex-officio)</td>
                <td>Dr. D N Singh or his nominee</td>
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
                <th class="text-white">Content</th>
                <th class="text-white">Name of the Member</th>
                <th class="text-white">Designation</th>
                <th class="text-white">Designation in the committee</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Head of the Department</td>
                <td>Dr. Raghavendra Prasad</td>
                <td>Associate Professor</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2</td>
                <td rowspan="2" class="align-middle">Professors</td>
                <td>Prof. Ankur Ganguly</td>
                <td>Professor</td>
                <td>Professor</td>
              </tr>
              <tr>
                <td>Prof. Rashel Sarkar</td>
                <td>Professor</td>
                <td>Professor</td>
              </tr>
              <tr>
                <td rowspan="2">3</td>
                <td rowspan="2" class="align-middle">
                  Associate Professors – one of them will be the member secretary
                </td>
                <td>Dr. Anupam Das</td>
                <td>Associate Professor</td>
                <td>Member Secretary</td>
              </tr>
              <tr>
                <td>Dr. Israfil Hussain</td>
                <td>Associate Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Sumi Kankana Dewan</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td rowspan="3">5</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof. Arnab Kumar Sarma</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. Kamal Debnath</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. Hiren Deva Sarma</td>
                <td>Professor</td>
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
                        href="assets/Departmentalpdf/AY  2022-23 BCA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BCA.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 Integrated BSC IT MSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 Integrated BSC
                        IT MSC IT.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2022-23 BSC(IT).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2022-23 BSC(IT).pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-24 BCA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BCA.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-24 BSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 BSC IT.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus B. Sc. IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> Old Syllabus B. Sc. IT.pdf
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
                        href="assets/Departmentalpdf/AY 2021-22 Integrated BSC IT MSC IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 Integrated BSC
                        IT MSC IT.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 M. Sc. IT.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 M. Sc. IT.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2021-22 MCA-1.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2021-22 MCA-1.pdf
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
@endsection

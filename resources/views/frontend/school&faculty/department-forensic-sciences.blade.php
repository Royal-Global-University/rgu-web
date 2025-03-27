@extends('frontend.master')
@section('content')
       <div style="background-image: url(mobile-assets/dept-forensic-sc/s2-bg-img-1.webp);">

          <div class="mobile" >
            @include('frontend/components/mobileheader')
        <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-forensic-sc/mobile-forensic.png" alt="">

        <div class="container pb-5 pt-3">
      <div>
        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
          5. Events & Achievements
        </h3>
        <div class="table-responsive">
          <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">Date of Visit</th>
                <th class="font-weight-bold text-white">NAME</th>
                <th class="font-weight-bold text-white">Designation</th>
                <th class="font-weight-bold text-white">Purpose of the visit</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>14th December 2023</td>
                <td>Shri Harmeet Singh</td>
                <td>(IPS, Special DGP of Assam)</td>
                <td>Guest of Honour, Inauguration of Department of Forensic Science</td>
              </tr>
              <tr>
                <td>2</td>
                <td>24th May 2024</td>
                <td>Mr. Keerthan Reddy</td>
                <td>Cyber Security Engineer, VISA</td>
                <td>Guest Lecture</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div>
        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
          7. The Board of Studies (BoS)
        </h3>
        <div class="table-responsive">
          <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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
                <td>Dr. Pundarikaksha Das, Assistant Professor and Coordinator, Department of Forensic Science</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Faculty members of the Department Members (Ex-Officio)</td>
                <td>
                  Ms. Pradipta Shyam, Assistant Professor, Forensic Sc.
                  <hr />
                  Ms Meghna Bordoloi, Teaching Assistant
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

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
                <td>Prof. (Dr.) N. K. Chrungoo</td>
                <td>Dean, RSLSC</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2.</td>
                <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Pundarikaksha Das</td>
                <td>Coordinator and Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Sthiti Porna Dutta</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

          </div>

          <div class="website">
            @include('frontend/components/aheader')
        <img src="mobile-assets/dept-forensic-sc/web-forensic-science.png" alt="">

        <div class="container pb-5 pt-3">
      <div>
        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
          5. Events & Achievements
        </h3>
        <div class="table-responsive">
          <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">Date of Visit</th>
                <th class="font-weight-bold text-white">NAME</th>
                <th class="font-weight-bold text-white">Designation</th>
                <th class="font-weight-bold text-white">Purpose of the visit</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>14th December 2023</td>
                <td>Shri Harmeet Singh</td>
                <td>(IPS, Special DGP of Assam)</td>
                <td>Guest of Honour, Inauguration of Department of Forensic Science</td>
              </tr>
              <tr>
                <td>2</td>
                <td>24th May 2024</td>
                <td>Mr. Keerthan Reddy</td>
                <td>Cyber Security Engineer, VISA</td>
                <td>Guest Lecture</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div>
        <h3 class="headd3 text-dark fw-bold p-3" style="background-color: #c7daf9; color: #ffffff">
          7. The Board of Studies (BoS)
        </h3>
        <div class="table-responsive">
          <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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
                <td>Dr. Pundarikaksha Das, Assistant Professor and Coordinator, Department of Forensic Science</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Faculty members of the Department Members (Ex-Officio)</td>
                <td>
                  Ms. Pradipta Shyam, Assistant Professor, Forensic Sc.
                  <hr />
                  Ms Meghna Bordoloi, Teaching Assistant
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

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
                <td>Prof. (Dr.) N. K. Chrungoo</td>
                <td>Dean, RSLSC</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2.</td>
                <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Pundarikaksha Das</td>
                <td>Coordinator and Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Sthiti Porna Dutta</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

          </div>
        </div>
@endsection
